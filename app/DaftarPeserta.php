<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DaftarSekolah;


class DaftarPeserta extends Model
{
    protected $table = 'tb_peserta';
    protected $primaryKey = 'id';

    protected $fillable = [
    	'id_sekolah',
        'nama_peserta',
    	'email_peserta',
    	'created_at',
    	'updated_at'
    ];

    public function toDaftarSekolah(){
    	return $this->hasMany(DaftarSekolah::class);
    }
}
