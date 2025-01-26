<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;
use App\Models\ProposalPkm;
use App\Models\DaftarPengusul;
use Illuminate\Support\Facades\Log;
use PDF;

class DashboardController extends Controller
{
    public function index(Request $request){
        $map['data'] = ProposalPkm::all();
        return view('dashboard', $map);
    }

    public function choose_template(Request $request){
        return view('dashboard.choose-template');
    }

    public function proposal_pkm (Request $request){
        return view('dashboard.proposal-pkm');
    }

    public function proposal_pkm_save(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|string',
                'bidang_fokus' => 'required|string',
                'skema' => 'required|string',
                'target_sdgs' => 'required|string',
                'pendahuluan' => 'required|string',
                'permasalahan' => 'required|string',
                'metode' => 'required|string',
                'gambaran_ipteks' => 'required|string',
            ]);
            
            // Validasi data pengusul (bisa lebih dari satu)
            $request->validate([
                'nama_pengusul.*' => 'required|string',
                'nidn_nuptk.*' => 'required|string',
                'program_studi.*' => 'required|string',
            ]);
            
            // Validasi data mitra (bisa lebih dari satu)
            $request->validate([
                'nama_mitra.*' => 'required|string',
                'alamat.*' => 'required|string',
                'peran.*' => 'required|string',
            ]);
            
            // Mulai transaksi untuk memastikan data terkait disimpan dengan baik
            \DB::beginTransaction();

            // Simpan data proposal pkm
            $proposalPkm = ProposalPkm::create([
                'judul' => $request->judul,
                'bidang_fokus' => $request->bidang_fokus,
                'skema' => $request->skema,
                'target_sdgs' => $request->target_sdgs,
                'pendahuluan' => $request->pendahuluan,
                'permasalahan' => $request->permasalahan,
                'metode' => $request->metode,
                'gambaran_ipteks' => $request->gambaran_ipteks,
            ]);

            // Looping untuk menyimpan data daftar pengusul
            foreach ($request->nama_pengusul as $index => $namaPengusul) {
                DaftarPengusul::create([
                    'nama_pengusul' => $namaPengusul,
                    'nidn_nuptk' => $request->nidn_nuptk[$index],
                    'program_studi' => $request->program_studi[$index],
                    'proposal_pkm_id' => $proposalPkm->id,
                ]);
            }

            // Looping untuk menyimpan data mitra
            foreach ($request->nama_mitra as $index => $namaMitra) {
                Mitra::create([
                    'nama_mitra' => $namaMitra,
                    'alamat' => $request->alamat[$index],
                    'peran' => $request->peran[$index],
                    'proposal_pkm_id' => $proposalPkm->id,
                ]);
            }

            // Commit transaksi
            \DB::commit();

            // Redirect ke dashboard dengan pesan sukses
            return redirect()->route('dashboard')->with('success', 'Proposal PKM berhasil disimpan');
        } catch (\Exception $e) {
            Log::error('Terjadi kesalahan saat menyimpan proposal PKM', ['error' => $e->getMessage()]);

            // Rollback transaksi jika terjadi kesalahan
            \DB::rollBack();

            // Redirect ke dashboard dengan pesan error
            return redirect()->route('dashboard')->with('error', 'Terjadi kesalahan, silakan coba lagi.');
        }
    }

    public function propsal_pkm_pdf($id)
    {
        $proposalData = ProposalPkm::with([
            'daftarPengusul',
            'mitra'
        ])->findOrFail($id);
    
        $viewData = [
            'proposal' => $proposalData,
            'pengusul' => $proposalData->daftarPengusul,
            'mitra' => $proposalData->mitra
        ];
    
        return Pdf::loadView('dashboard.pdf.proposal-pkm', $viewData)->stream();
    }
}
