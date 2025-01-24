<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DaftarPengusul;
use App\Models\Mitra;

class ProposalPkm extends Model
{
    use HasFactory;
    protected $table = 'proposal_pkm';
    protected $fillable = [
        'judul', 
        'bidang_fokus', 
        'skema', 
        'target_sdgs', 
        'pendahuluan', 
        'permasalahan', 
        'metode', 
        'gambaran_ipteks'
    ];

    public function daftarPengusul()
    {
        return $this->hasMany(DaftarPengusul::class);
    }

    public function mitra()
    {
        return $this->hasMany(Mitra::class);
    }
}
