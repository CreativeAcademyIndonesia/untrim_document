<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProposalPkm;

class DaftarPengusul extends Model
{
    use HasFactory;
    protected $table = 'daftar_pengusul';
    protected $fillable = [
        'nama_pengusul', 'nidn_nuptk', 'program_studi', 'proposal_pkm_id'
    ];

    public function proposalPkm()
    {
        return $this->belongsTo(ProposalPkm::class);
    }
}
