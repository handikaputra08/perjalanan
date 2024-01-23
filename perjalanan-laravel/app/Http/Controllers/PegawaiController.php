<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(Request $request){
        $data = Pegawai::all();
        return view('Pegawai', compact('data'));
    }
    // public function index(Request $request){
    //     if($request->has('search')){
    //         $data = Pegawai::where('nama','LIKE','%'.$request->search.'%')->paginate(8);        
    //     }else{
    //         $data = Pegawai::paginate(8);
    //     }
        
    //     return view('Pegawai', compact('data'));
    // }

    public function tambahpegawai(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        // dd($request->all());
        Pegawai::create([
            'nama' => $request->nama,
            'gol'=> $request->gol,
            'nip'=> $request->nip,
            'jabatan'=> $request->jabatan,
            'rekening'=> $request->rekening,
        ]);
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){
        $data = Pegawai::find($id);
        // dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Pegawai::find($id);
        $data-> nama = $request -> input ('nama');
        $data-> gol = $request -> input ('gol');
        $data-> nip = $request -> input ('nip');
        $data-> jabatan = $request -> input ('jabatan');
        $data-> rekening = $request -> input ('rekening');
        $data->update();
        // return redirect()->route('tampildata')->with('success','Data Berhasil Di Update');
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Update');
    }

    public function delete($id){
        $data = Pegawai::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Hapus');

    }

   

}
