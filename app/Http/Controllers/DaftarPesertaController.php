<?php

namespace App\Http\Controllers;

use App\DaftarPeserta;
use Illuminate\Http\Request;

class DaftarPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list'] = DaftarPeserta::join('tbl_daftar_sekolah','tbl_daftar_sekolah.id','=','tb_peserta.id_sekolah')
                                      ->select([
                                        'tb_peserta.id as id_peserta',
                                        'nama_sekolah',
                                        'email_peserta',
                                        'nama_peserta',
                                      ])->orderBy('nama_sekolah')->get();
        return view('backend.users.admin.peserta.index', $data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = DaftarPeserta::find($id);
        $find->delete();

        return 'Data Berhasil Dihapus';
    }
}
