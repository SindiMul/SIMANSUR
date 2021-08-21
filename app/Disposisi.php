<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Disposisi extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'suratmasuk_id', 'tanggal_penyelesaian', 'tembusan'
    ];

    protected $hidden = [];

    public function SuratMasuks()
    {
        return $this->belongsTo(SuratMasuk::class, 'suratmasuk_id', 'id');
    }
}
