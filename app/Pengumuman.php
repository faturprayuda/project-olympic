<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'tb_pengumuman';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'judul_pengumuman',
    	'isi_pengumuman',
    	'created_at',
    	'updated_at'
    ];
}
