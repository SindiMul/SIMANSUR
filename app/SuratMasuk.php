<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class SuratMasuk extends Model
{
     use softDeletes;

     protected $table = 'surat_masuks';

     protected $fillable = [
          'nomor_surat', 'perihal', 'asal_surat', 'tujuan_surat', 'tanggal_diterima', 'tanggal_surat', 'keterangan', 'file'
     ];

     protected $hidden = [];

     public function Disposisi()
     {
          return $this->hasOne(Disposisi::class, 'surat_masuk_id');
     }
}
