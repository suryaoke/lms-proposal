<?php

namespace App\Models\proposal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $table = 'proposal.notes_approval'; 

  
    protected $fillable = [
        'kode_proposal',
        'kd_karyawan_approval',
        'status_approval',
        'tanggal_approval',
        'notes_approval'
        
    ];

   
    public $timestamps = false;
}
