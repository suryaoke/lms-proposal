<?php

namespace App\Models\proposal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'proposal.peserta_proposal'; 

  
    protected $fillable = [
        'kode_proposal',
        'nama_peserta'
    ];

   
    public $timestamps = false;
}
