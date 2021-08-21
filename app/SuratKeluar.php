<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class SuratKeluar extends Model
{
     use softDeletes;

     protected $fillable = [
          'nomor_surat', 'perihal', 'tujuan_surat',  'tanggal_surat', 'keterangan', 'file'
     ];

     protected $hidden = [];
}
