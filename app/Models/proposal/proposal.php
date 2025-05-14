<?php

namespace App\Models\proposal;

use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $table = 'proposal.header_proposal';

   
    protected $fillable = [
        'kode_proposal',
        'tanggal_buat',
        'no_proposal',
        'judul_proposal',
        'user_pembuat',
        'dept_pembuat',
        'latar_belakang',
        'tujuan',
        'last_position_approval',
        'tanggal_final_approval',
        'tanggal_final_rejected',
        'deleted_at',
        'perihal'
    ];


  
    public $timestamps = false;
}
