<?php

namespace App\Models\proposal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beban extends Model
{
    use HasFactory;

    protected $table = 'proposal.beban_proposal'; 

  
    protected $fillable = [
        'kode_proposal',
        'beban_ahm',
        'notes_beban_ahm',
        'beban_dealer',
        'notes_beban_dealer',
        'beban_md',
        'notes_beban_md',
        'total_biaya'
        
    ];

   
    public $timestamps = false;
}
