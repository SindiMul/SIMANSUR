<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class SuratTugas extends Model
{
    use SoftDeletes;
    
        protected $fillable = [
            'nomor', 'dasar', 'hari', 'pukul', 'tempat','perihal'
        ];
    
        protected $hidden = [
    
        ];
        public function iii(){
            return $this->hasMany( detail::class, 'surat_id', 'id' );
        }
        public function ppp()
    {
        return $this->belongsTo(DataPegawai::class, 'data_pegawai_id', 'id');
    }
}
