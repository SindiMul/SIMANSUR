<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class SuratMasuk extends Model
{
     use softDeletes;

     protected $fillable = [
          'nomor_surat', 'perihal', 'asal_surat', 'tanggal_diterima', 'tanggal_surat', 'keterangan', 'file'
     ];

     protected $hidden = [];

     public function Disposisis()
     {
          return $this->hasMany(SuratMasuk::class, 'suratmasuk_id', 'id');
     }
}
