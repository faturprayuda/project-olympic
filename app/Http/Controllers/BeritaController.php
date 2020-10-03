<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list'] = Berita::all();
        $data['title'] = 'Berita';

        return view('backend.users.admin.berita.index',$data);
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
            'gambar' => 'required|image|max:2097152',
            'judul_berita' => 'required|max:255',
            'isi_berita' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $file = $request->file('gambar');
        $dir = '/public/gambar-berita/';
        $path = Storage::putFile($dir,$file);
        $newImg = basename($path);

        $data = [
            'gambar' => $newImg,
            'judul_berita' => $request->judul_berita,
            'isi_berita' => $request->isi_berita,
        ];

        Berita::create($data);

        return redirect()->back()->with(['success' => 'Berita Berhasil Ditambahkan']);

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
            'judul_berita' => 'required|max:255',
            'isi_berita' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        if($request->gambar == null){
            $newImg = $request->old_img;
        } 
        else {
            $oldImg = $request->old_img;
            $file = $request->file('gambar');
            $dir = '/public/gambar-berita/';
            $path = Storage::putFile($dir,$file);
            $newImg = basename($path);

            Storage::delete($dir.$oldImg);
        }

        $id = $request->id;
        $berita = Berita::find($id);
        $data = [
            'gambar' => $newImg,
            'judul_berita' => $request->judul_berita,
            'isi_berita' => $request->isi_berita,
        ];

        $berita->update($data);

        return redirect()->back()->with(['success' => 'Berita Berhasil Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Berita::find($id);
        $delete->delete();

        return "Data Berhasil Dihapus";
    }
}
