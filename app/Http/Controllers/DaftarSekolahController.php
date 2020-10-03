<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DaftarSekolah;
use App\DaftarPeserta;
use Illuminate\Support\Facades\Validator;



class DaftarSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }

    // public function indexJson()

    public function index()
    {
        $data['list'] = DaftarPeserta::join('tbl_daftar_sekolah','tbl_daftar_sekolah.id','=','tb_peserta.id_sekolah')
                                     ->select([
                                        'tbl_daftar_sekolah.id as sekolah_id',
                                        'tbl_daftar_sekolah.nama_sekolah as nama_sekolah',
                                        'tb_peserta.nama_peserta as nama_peserta',
                                     ])->get()->groupBy('nama_sekolah');
                                     // dd($data['list']);
        $data['title'] = 'Daftar Sekolah';

        return view('backend.users.admin.sekolah.daftar.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
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
            'nama_sekolah' => 'required|max:255',
            'nama_peserta.*' => 'required|max:255',
            'email_peserta.*' => 'required|email',           
        ]);

        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $namaSekolah = $request->nama_sekolah;
        $namaPeserta = $request->nama_peserta;
        $emailPeserta = $request->email_peserta;
        $daftarSekolah = [
            
                'nama_sekolah' => $namaSekolah[0],
            
        ];
        $insertSekolah = DaftarSekolah::create($daftarSekolah);

        $countr = count($namaPeserta);
        for($i = 0; $i < $countr; $i++){

            $idSekolah = $insertSekolah->id;
            $daftarPeserta = [
                
                    'id_sekolah' => $idSekolah,
                    'nama_peserta' => $namaPeserta[$i],
                    'email_peserta' => $emailPeserta[$i],
                
            ];

            DaftarPeserta::create($daftarPeserta);
        }

        return redirect()->back()->withS('success', 'Data Berhasil Ditambahkan');
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
            'nama_sekolah' => 'required|max:255',           
        ]);

         $id = $request->id;

         $ubah = DaftarSekolah::find($id);
         $data = [
            'nama_sekolah' => $request->nama_sekolah,
         ];
         $ubah->update($data);

         return redirect()->back()->with(['success' => 'Nama Sekolah Berhasil Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteSekolah = DaftarSekolah::find($id);
        $deleteSekolah->delete();
        $deletePeserta = DaftarPeserta::where('id_sekolah', $id);
        $deletePeserta->delete();

        return 'Data Berhasil Dihapus';
    }
}
