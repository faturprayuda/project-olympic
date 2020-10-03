<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use Illuminate\Support\Facades\Validator;


class PengumumanController extends Controller
{
    public $pengumumanModel;
    /*
    *Display a listing of the resource
    *
    *@return \Illuminate\Http\Response
    */
    public function __construct(Pengumuman $pengumumanModel){
        $this->pengumumanModel = $pengumumanModel;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list'] = $this->pengumumanModel->all();

        return view('backend.users.admin.pengumuman.index', $data);

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
        $validator = Validator::make($request->all(),[
            'judul_pengumuman' => 'required|max:255',
            'isi_pengumuman' => 'required',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $data = [
            'judul_pengumuman' => $request->judul_pengumuman,
            'isi_pengumuman' => $request->isi_pengumuman,
         ];

        $this->pengumumanModel->create($data);

        return redirect()->back()->with(['success' => 'Data Berhasil Dimasukkan']);
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
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'judul_pengumuman' => 'required|max:255',
            'isi_pengumuman' => 'required',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $id = $request->id;
        $ubah = $this->pengumumanModel->find($id);
        $data = [
            'judul_pengumuman' => $request->judul_pengumuman,
            'isi_pengumuman' => $request->isi_pengumuman,
         ];

        $ubah->update($data);

        return redirect()->back()->with(['success' => 'Data Berhasil Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->pengumumanModel->find($id);
        $data->delete();

        return 'Data Berhasil Dihapus';
    }
}
