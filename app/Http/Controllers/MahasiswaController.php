<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::paginate(10);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
    public function pencarian($query, $request)
    {
            $cari = $request->cari;
            $mahasiswa = Mahasiswa::where('nim','like', '%'.$cari.'%')->paginate();
            return view('mahasiswa',['mahasiswa' => $mahasiswa]);
    }

    public function formmahasiswa()
    {
        return view('formmahasiswa');
    }
    public function simpanmahasiswa(Request $request)
    {
        $bidang_minat = implode(",", $request -> get('bidang_minat'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' =>$bidang_minat
        ]);
        return redirect("/mahasiswa")->with('alert', 'Data Berhasil Disimpan ^_^');
    }
    public function editmahasiswa($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('editmahasiswa',['mahasiswa' => $mahasiswa]);
    }
    public function updatemahasiswa($id, Request $request)
    {
        $bidang_minat = implode(',', $request->bidang_minat);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nidn;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->status;
        $mahasiswa->jurusan = $request->jafung;
        $mahasiswa->bidang_minat = $bidang_minat;
        $mahasiswa->save();
        return redirect("/mahasiswa")->with('alert', 'Data Berhasil Diubah ^_^');
    }
    public function deletemahasiswa($id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa-> delete();
        return redirect("/mahasiswa")->with('alert', 'Data Berhasil Dihapus ^_^');
    }
}

