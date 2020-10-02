<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DaftarPeserta;

class DaftarSekolah extends Model
{
    protected $table = 'tbl_daftar_sekolah';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'nama_sekolah',
    	'created_at',
    	'updated_at'
    ];

    public function toDaftarPeserta(){
    	return $this->belongsTo(DaftarPeserta::class);
    }
}
