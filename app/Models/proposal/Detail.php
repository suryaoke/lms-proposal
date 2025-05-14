<?php

namespace App\Models\proposal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $table = 'proposal.detail_proposal'; 

  
    protected $fillable = [
        'kode_proposal',
        'nama_item',
        'satuan',
        'quantity',
        'harga_satuan',
        'total',
        'catatan',
    ];

   
    public $timestamps = false;
}
