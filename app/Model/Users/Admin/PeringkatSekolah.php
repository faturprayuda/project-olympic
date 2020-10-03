<?php

namespace App\Model\Users\Admin;

use Illuminate\Database\Eloquent\Model;

class PeringkatSekolah extends Model
{
    protected $table = "peringkat_sekolah";

    protected $fillable = [
        'nama_peserta',
        'nama_sekolah',
        'nilai',
        'sisa_waktu',
        'tanggal',
        'medal_emas',
        'medal_perak',
        'medal_perunggu'
    ];
}
