<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class DataPetugas extends Model
{
    use softDeletes;

     protected $table = 'data_petugas';

     protected $fillable = [
          'surat_tugas_id', 'data_pegawai_id'
     ];

     protected $hidden = [];

     public function data_pegawai()
      {
           return $this->belongsTo(DataPegawai::class, 'data_pegawai_id', 'id');
      }
      public function surat_tugas()
      {
           return $this->belongsTo(SuratTugas::class, 'surat_tugas_id', 'id');
      }
}
