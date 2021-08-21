<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Disposisi extends Model
{
    use SoftDeletes;

    protected $table = 'disposisis';

    protected $fillable = [
        'tanggal_penyelesaian', 'tembusan'
    ];

    protected $hidden = [];

    public function SuratMasuk()
    {
        return $this->belongsTo(SuratMasuk::class, 'surat_masuk_id', 'id');
    }
}
