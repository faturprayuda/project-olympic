<?php

namespace App\Http\Controllers\Users\User;

use App\Http\Controllers\Controller;
use App\Model\Users\Admin\PeringkatSekolah;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeringkatController extends Controller
{
    public function index()
    {
        $data['tanggal'] = PeringkatSekolah::select('tanggal')->distinct('tanggal')->get();
        // dd($data['tanggal']);
        $data['medal_emas'] = PeringkatSekolah::select(['nama_peserta', 'nama_sekolah', 'tanggal'])
        ->where('medal_emas', '>', 0)->orderBy('tanggal')->get();
        $data['medal_perak'] = PeringkatSekolah::select(['nama_peserta', 'nama_sekolah', 'tanggal',])->where('medal_perak', '>', 0)->get();
        $data['medal_perunggu'] = PeringkatSekolah::select(['nama_peserta', 'nama_sekolah', 'tanggal'])->where('medal_perunggu', '>', 0)->get();

        $data['peringkat_sekolah'] = DB::table('peringkat_sekolah')
            ->select([
                'nama_sekolah',
                DB::raw('SUM(medal_emas) as medal_emas'),
                DB::raw('SUM(medal_perak) as medal_perak'),
                DB::raw('SUM(medal_perunggu) as medal_perunggu'),
            ])
            ->groupBy('nama_sekolah')
            ->get();

        return view('frontend.sekolah.peringkat.index', $data);
    }
}
