<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class DataPegawai extends Model
{
    use softDeletes;

     protected $table = 'data_pegawai';

     protected $fillable = [
           'nip','nama_petugas', 'pangkat',  'jabatan'
     ];

     protected $hidden = [];

     // public function data_petugas() {
     //      return $this->hasMany(DataPetugas::class, 'data_petugas_id','id');
     // }
   
}
