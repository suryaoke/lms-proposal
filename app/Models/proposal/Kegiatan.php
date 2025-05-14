<?php

namespace App\Models\proposal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'proposal.kegiatan_proposal'; // Pastikan nama tabel sesuai

   
    protected $fillable = [
        'kode_proposal',
        'kode_kegiatan',
        'bentuk_kegiatan',
        'tanggal_mulai',
        'tanggal_akhir',
        'lokasi_kegiatan',
        'attachment',
      
    ];

    
    public $timestamps = false;
}
