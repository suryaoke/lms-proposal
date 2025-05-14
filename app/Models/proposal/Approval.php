<?php

namespace App\Models\proposal;

use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    use HasFactory;

    protected $table = 'proposal.approval_proposal'; 

  
    protected $fillable = [
        'kode_proposal',
        'kd_karyawan',
        'kd_jabatan'
        
    ];
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class,'kd_karyawan','kd_karyawan');
    } 

    // public function notes()
    // {
    //     return $this->belongsTo(Notes::class,'kode_proposal','kode_proposal');
    // } 

    public function notes()
    {
        return $this->hasOne(Notes::class, 'kd_karyawan_approval', 'kd_karyawan')
                    ->where('kode_proposal', $this->kode_proposal);
    }
    
   
    public $timestamps = false;
}
