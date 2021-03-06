<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Disposisi extends Model
{
    use SoftDeletes;

    protected $table = 'disposisis';

    protected $fillable = [
        'suratmasuk_id', 'tanggal_penyelesaian', 'keterangan', 'tujuan_surat'
    ];

    protected $hidden = [];

    public function surat_masuk()
    {
        return $this->belongsTo(SuratMasuk::class, 'suratmasuk_id', 'id');
    }
}
