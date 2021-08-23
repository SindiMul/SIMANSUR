<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Disposisi extends Model
{
    use SoftDeletes;

    protected $table = 'disposisis';

    protected $fillable = [
        'surat_masuk_id', 'tanggal_penyelesaian', 'tembusan'
    ];

    protected $hidden = [];

    public function surat_masuk()
    {
        return $this->belongsTo(SuratMasuk::class, 'surat_masuk_id', 'id');
    }
}
