<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProposalPkm;

class Mitra extends Model
{
    use HasFactory;
    protected $table = 'mitra';
    protected $fillable = [
        'nama_mitra', 'alamat', 'peran', 'proposal_pkm_id'
    ];

    public function proposalPkm()
    {
        return $this->belongsTo(ProposalPkm::class);
    }
}
