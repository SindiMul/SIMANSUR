<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class SuratTugas extends Model
{
    use softDeletes;

    protected $table = 'surat_tugas';

    protected $fillable = [
         'nomor_surat', 'perihal', 'tempat', 'tanggal_tugas',  'tanggal_surat', 'keterangan',
    ];

    protected $hidden = [];
}
