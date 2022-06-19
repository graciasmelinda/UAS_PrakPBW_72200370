<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::orderBy('id', 'DESC')->paginate(10);
        // $mahasiswa = Mahasiswa::paginate(10);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa], ['cek' => 'mahasiswa']);
    }

    public function pencarian(Request $request){
        $cari = $request->cari;
        $mahasiswa = Mahasiswa::where('nama', 'like', '%'.$cari.'%')->orWhere('nim', 'like', '%'.$cari.'%')->paginate();
        return view('mahasiswa',['mahasiswa' => $mahasiswa], ['cek' => 'mahasiswa']);
    }

    public function formmhs()
    {
        return view('formmhs',['cek' => 'mahasiswa']);
    }

    public function simpanmhs(Request $request)
    {
        $bidang_minat = implode(",",$request->get('bidang_minat'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $bidang_minat
        ]);
        return redirect('/mahasiswa')->with('alertcreate', 'Data berhasil ditambah');
    }

    public function editmhs($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('editmhs', ['mahasiswa' => $mahasiswa], ['cek' => 'mahasiswa']);
    }

    public function updatemhs($id, Request $request)
    {
        $bidang_minat = implode(',',$request->bidang_minat);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> nim = $request -> nim;
        $mahasiswa -> nama = $request -> nama;
        $mahasiswa -> gender = $request -> gender;
        $mahasiswa -> jurusan = $request -> jurusan;
        $mahasiswa -> bidang_minat = $bidang_minat;
        $mahasiswa ->save();
        return redirect('/mahasiswa')->with('alertedit', 'Data berhasil diubah');
    }

    public function hapusmhs($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('alertdelete', 'Data berhasil dihapus');
    }
}