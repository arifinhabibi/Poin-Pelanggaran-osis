<?php

namespace App\Http\Controllers;

use App\Models\jurusanModel;
use Illuminate\Http\Request;
use App\Models\dataSiswaModel;

class adminController extends Controller
{
    public function admin(){
        $data = jurusanModel::all();
        return view('admin.v_admin', compact('data'));
    }

    public function tambahJurusan(){
        return view('admin.v_tambahJurusan');
    }
    
    public function tambahJurusanStore(Request $request){
        $data = jurusanModel::create($request->all());

        if ($request->hasFile('logo')) {
            # code...
            $request->file('logo')->move('assets/img/jurusan', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }

        return \redirect()->route('admin')->with('tambahData', 'Data berhasil ditambahkan');

    }

    public function dataSiswa($id){
        $data = jurusanModel::find($id);
        return view('admin.v_dataSiswa', \compact('data'));
    }

    public function hapusDataSiswa($id_dataSiswa){
        $data = dataSiswaModel::find($id_dataSiswa);
        $data->delete();

        return back()->with('hapusDataSiswa', 'Salah satu data siswa berhasil dihapus');
    }

    public function ubahDataSiswa($id, $id_dataSiswa){
        $data = jurusanModel::find($id);
        $dataSiswa = dataSiswaModel::find($id_dataSiswa);
        return view('admin.v_ubahDataSiswa', \compact('dataSiswa', 'data'));
    }
    
    public function ubahDataSiswaStore(Request $request, $id, $id_dataSiswa){
        $dataSiswa = dataSiswaModel::find($id_dataSiswa);
        $dataSiswa->update($request->all());
        return \redirect()->route('dataSiswa', $id)->with('ubahDataSiswa', 'mengubah data salah satu siswa berhasil!');
    }

    public function tambahDataSiswa($id){
        $data = jurusanModel::find($id);
        return view('admin.v_tambahDataSiswa', compact('data'));
    }
    
    public function tambahDataSiswaStore(Request $request, $id){
        $create = dataSiswaModel::create($request->all());
        return redirect()->route('dataSiswa', $id)->with('tambahDataSiswa', 'Data siswa berhasil ditambahkan!');
    }

    public function hapusDataJurusan($id){
        $data = jurusanModel::find($id);

        $data->delete();

        return back()->with('hapus', 'berhasil dihapus');
    }

    public function ubahDataJurusan($id){
        $data = jurusanModel::find($id);
        return view('admin.v_ubahJurusan', \compact('data'));
    }

    public function ubahDataJurusanStore(Request $request, $id){
        $data = jurusanModel::find($id);
        $data->update($request->all());
        if ($request->hasFile('logo')) {
            # code...
            $request->file('logo')->move('assets/img/jurusan', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('admin');
    }
}
