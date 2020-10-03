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
        $data['medal_emas'] = PeringkatSekolah::select('nama_peserta', 'nama_sekolah', 'tanggal', 'medal_emas', 'medal_perak', 'medal_perunggu')->where('medal_emas', '>', 0)->where('tanggal', Carbon::today('Asia/Jakarta'))->get();
        $data['medal_perak'] = PeringkatSekolah::select('nama_peserta', 'nama_sekolah', 'medal_emas', 'medal_perak', 'medal_perunggu')->where('medal_perak', '>', 0)->where('tanggal', Carbon::today('Asia/Jakarta'))->get();
        $data['medal_perunggu'] = PeringkatSekolah::select('nama_peserta', 'nama_sekolah', 'medal_emas', 'medal_perak', 'medal_perunggu')->where('medal_perunggu', '>', 0)->where('tanggal', Carbon::today('Asia/Jakarta'))->get();

        $data['peringkat_sekolah'] = DB::table('peringkat_sekolah')
            ->whereRaw('medal_emas > 0')
            ->select('nama_sekolah', DB::raw('count(*) as total_emas'))
            ->groupBy(['nama_sekolah'])
            ->get();

        $data['peringkat_sekolah_perak'] = DB::table('peringkat_sekolah')
            ->whereRaw('medal_perak > 0')
            ->select('nama_sekolah', DB::raw('count(*) as total_perak'))
            ->groupBy(['nama_sekolah'])
            ->get();

        $data['peringkat_sekolah_perunggu'] = DB::table('peringkat_sekolah')
            ->whereRaw('medal_perak > 0')
            ->select('nama_sekolah', DB::raw('count(*) as total_perunggu'))
            ->groupBy(['nama_sekolah'])
            ->get();

        // $data['peringkat_sekolah'] = PeringkatSekolah::select('nama_sekolah', 'medal_emas', 'medal_perak', 'medal_perunggu')->where('medal_emas', '>', 0)->orWhere('medal_perak', '>', 0)->orWhere('medal_perunggu', '>', 0)->get();
        // $data['peringkat_sekolah'] = PeringkatSekolah::select(raw('nama_sekolah'));
        // dd($data['peringkat_sekolah_perak']);

        return view('frontend.sekolah.peringkat.index', $data);
    }
}
