<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'tb_berita';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'gambar',
    	'judul_berita',
    	'isi_berita',
    	'created_at',
    	'updated_at'
    ];
}
