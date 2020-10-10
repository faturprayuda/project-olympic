<?php

namespace App\Http\Controllers\Users\User;

use App\Http\Controllers\Controller;
use App\Model\Users\Admin\PeringkatSekolah;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;


class PeringkatController extends Controller
{
    public function index()
    {
        $data['tanggal'] = PeringkatSekolah::select('tanggal')->distinct('tanggal')->get();
        $count = count($data['tanggal']);
        $i = 0;


        // dd(count($data['tanggal']));
        // dd($data['tanggal']);
        if ($i < $count) {

            $data['medal_emas'] = PeringkatSekolah::select(['nama_peserta', 'nama_sekolah', 'tanggal'])->where('tanggal', $data['tanggal'][$i]['tanggal'])->orderBy('nilai', 'DESC')->skip(0)->limit(10)->get();
            $data['medal_perak'] = PeringkatSekolah::select(['nama_peserta', 'nama_sekolah', 'tanggal',])->where('tanggal', $data['tanggal'][$i]['tanggal'])->orderBy('nilai', 'DESC')->skip(10)->limit(10)->get();
            $data['medal_perunggu'] = PeringkatSekolah::select(['nama_peserta', 'nama_sekolah', 'tanggal'])->where('tanggal', $data['tanggal'][$i]['tanggal'])->orderBy('nilai', 'DESC')->skip(20)->limit(10)->get();

            $i++;
        }

        return view('frontend.sekolah.peringkat.index', $data);
    }

    public function peringkatSekolahJson()
    {
        $query = DB::table('peringkat_sekolah')
            ->select([
                'nama_sekolah',
                DB::raw('SUM(medal_emas) as medal_emas'),
                DB::raw('SUM(medal_perak) as medal_perak'),
                DB::raw('SUM(medal_perunggu) as medal_perunggu'),
                DB::raw('SUM(medal_emas + medal_perak + medal_perunggu) as total_medal'),
                DB::raw('medal_emas * 5 as poin_emas'),
                DB::raw('medal_perak * 3 as poin_perak'),
                DB::raw('medal_perunggu * 1 as poin_perunggu'),
                DB::raw('poin_emas + poin_oerak + poin_perunggu as total_poin')
            ])
            ->groupBy('nama_sekolah')
            ->orderBy('medal_emas', 'DESC')
            ->orderBy('medal_perak', 'DESC')
            ->orderBy('medal_perunggu', 'DESC')
            ->orderBy('total_medal', 'DESC')
            ->orderBy('total_poin', 'DESC')
            ->get();

        return DataTables::of($query)
            ->addIndexColumn()
            ->make(true);
    }
}
