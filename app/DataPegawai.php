<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class DataPegawai extends Model
{
    use softDeletes;

     protected $table = 'data_pegawai';

     protected $fillable = [
          'nama_petugas', 'nip', 'pangkat',  'jabatan'
     ];

     protected $hidden = [];
     // public function surat_tugas()
     // {
     //      return $this->hasOne(SuratTugas::class, 'datapegawai_id');
     // }
}
