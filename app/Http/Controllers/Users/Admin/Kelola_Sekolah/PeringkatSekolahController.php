<?php

namespace App\Http\Controllers\Users\Admin\Kelola_Sekolah;

use App\Model\Users\Admin\PeringkatSekolah;
use App\Http\Controllers\Controller;
use App\Imports\PeringkatImport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PeringkatSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data_peringkat'] = PeringkatSekolah::select(
            'id',
            'nama_peserta',
            'nama_sekolah',
            'nilai',
            'sisa_waktu',
            'tanggal',
            'medal_emas',
            'medal_perak',
            'medal_perunggu'
        )->orderBy('id', 'DESC')->get();

        return view('backend.users.admin.sekolah.peringkat.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Excel::import(new PeringkatImport, $request->file('file_excel'));

        $id_emas = PeringkatSekolah::select('id')
            ->orderBy('nilai', 'DESC')
            ->orderBy('sisa_waktu', 'ASC')
            ->offset(0)
            ->limit(10)
            ->whereDate('created_at', Carbon::today())
            ->get();
        $id_perak = PeringkatSekolah::select('id')
            ->orderBy('nilai', 'DESC')
            ->orderBy('sisa_waktu', 'ASC')
            ->offset(10)
            ->limit(10)
            ->whereDate('created_at', Carbon::today())
            ->get();
        $id_perunggu = PeringkatSekolah::select('id')
            ->orderBy('nilai', 'DESC')
            ->orderBy('sisa_waktu', 'ASC')
            ->offset(20)
            ->limit(10)
            ->whereDate('created_at', Carbon::today())
            ->get();
        foreach ($id_emas as $id => $i) {
            $model = PeringkatSekolah::find($i->id);
            $model->medal_emas += 1;
            $model->save();
        }
        foreach ($id_perak as $id => $i) {
            $model = PeringkatSekolah::find($i->id);
            $model->medal_perak += 1;
            $model->save();
        }
        foreach ($id_perunggu as $id => $i) {
            $model = PeringkatSekolah::find($i->id);
            $model->medal_perunggu += 1;
            $model->save();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Users\Admin\PeringkatSekolah  $peringkatSekolah
     * @return \Illuminate\Http\Response
     */
    public function show(PeringkatSekolah $peringkatSekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Users\Admin\PeringkatSekolah  $peringkatSekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(PeringkatSekolah $peringkatSekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Users\Admin\PeringkatSekolah  $peringkatSekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeringkatSekolah $peringkatSekolah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Users\Admin\PeringkatSekolah  $peringkatSekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeringkatSekolah $peringkatSekolah)
    {
        //
    }
}
