<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Models\Spt; // Pastikan model Spt diimpor

class SptController extends Controller
{
    public function index(Request $request){
        $data = Spt::select('data_spt.*',
        'a.nama as nama_pegawai1',
        'b.nama as nama_pegawai2',
        'c.nama as nama_pegawai3',
        'd.nama as nama_pegawai4',
        'e.nama as nama_pegawai5'
        )
        ->leftjoin('data_pegawai as a','a.id','data_spt.nama1')
        ->leftjoin('data_pegawai as b','b.id','data_spt.nama2')
        ->leftjoin('data_pegawai as c','c.id','data_spt.nama3')
        ->leftjoin('data_pegawai as d','d.id','data_spt.nama4')
        ->leftjoin('data_pegawai as e','e.id','data_spt.nama5')
        ->get();
        // dd($data);
        return view('spt', compact('data'));
    }
    
    public function tambahspt()
    {
        $data = Pegawai::all();
        // dd($data);
        return view('tambahspt', compact('data'));
    }

    public function insertspt(Request $request){
        Spt::create([
            'no' => $request->nomor_spt,                                    
            'tglspt' => $request->tanggal_spt,
            'judul' => $request->perihal_spt,
            'tglperjalanan' => $request->tanggal_perjalanan,
            'nama1' => $request->nama_yang_bertugas[0],
            'nama2' => $request->nama_yang_bertugas[1],
            'nama3' => $request->nama_yang_bertugas[2],
            'nama4' => $request->nama_yang_bertugas[3],
            'nama5' => $request->nama_yang_bertugas[4],
        ]);
        return redirect()->route('spt')->with('success','Data Berhasil Di Tambahkan');
    }
}
