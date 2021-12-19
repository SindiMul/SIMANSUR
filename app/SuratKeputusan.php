<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class SuratKeputusan extends Model
{
    use softDeletes;

    protected $table = 'surat_keputusans';

    protected $fillable = [
        'nomor_surat', 'tujuan_surat',  'tanggal_surat', 'keterangan', 'file'
    ];

    protected $hidden = [];
}
