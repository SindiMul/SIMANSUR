<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class SuratMasuk extends Model
{
     use softDeletes;

     protected $table = 'surat_masuks';

     protected $fillable = [
          'nomor_surat', 'perihal', 'asal_surat', 'tanggal_diterima', 'tanggal_surat', 'file'
     ];

     protected $hidden = [];

     public function disposisis()
     {
          return $this->hasOne(Disposisi::class, 'suratmasuk_id');
     }
}
