<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $fillable = [
        'surat_id','data_pegawai_id',
    ];
    protected $hidden = [];
    public function ppp()
    {
        return $this->belongsTo(DataPegawai::class, 'data_pegawai_id', 'id');
    }
    
}
