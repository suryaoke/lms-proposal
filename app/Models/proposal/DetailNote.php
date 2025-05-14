<?php

namespace App\Models\proposal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailNote extends Model
{
    use HasFactory;

    protected $table = 'proposal.detail_note'; // Pastikan nama tabel sesuai


    protected $fillable = [
        'kode_proposal',
        'kode_kegiatan',
        'kd_karyawan',
        'notes_kegiatan'
    ];


    public $timestamps = false;
}
