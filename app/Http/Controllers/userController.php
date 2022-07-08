<?php

namespace App\Http\Controllers;

use App\Models\jurusanModel;
use Illuminate\Http\Request;
use App\Models\dataSiswaModel;
use App\Models\poinPelanggaranModel;

class userController extends Controller
{
    
    public function printData($id_dataSiswa){
        $dataSiswa = dataSiswaModel::find($id_dataSiswa);
        $data = jurusanModel::all();
        $poinPelanggaran = poinPelanggaranModel::all();
        return view('user.v_print', \compact('data', 'dataSiswa', 'poinPelanggaran'));
    }
     
    public function inputPoinStore(Request $request, $id_dataSiswa){
        $dataSiswa = dataSiswaModel::find($id_dataSiswa);
        
        $dataSiswa->point = $dataSiswa->point +  $request['kesiangan'] + $request['alfa'] + $request['tidak_bawa_kitab'] + $request['atribut'] + $request['perilaku_tidak_sesuai_pelajar'] + $request['pelanggaran_konten'] + $request['narkoba_serta_napza'] + $request['pornografi_pornoaksi_pencemaran_nama_baik'] + $request['pelanggaran_elektronik'] + $request['pelanggaran_kendaraan'];
        $dataSiswa->save();


        $poinPelanggaran = poinPelanggaranModel::create($request->all());


        return \redirect()->route('inputPoin2')->with('inputPoin', 'Menginput poin siswa berhasil');
    }

    public function inputPoin2(){
        $data = jurusanModel::all();
        return view('user.v_menginputPoin', compact('data'));
    }

    public function kelas($id){
        $jurusan = jurusanModel::find($id);
        $dataSiswa = dataSiswaModel::where('jurusan_model_id', $id)->get();
        $data = jurusanModel::all();

        if(request('search')) {
            # code...
            $dataSiswa = dataSiswaModel::where('jurusan_model_id', $id)->where('nama', 'like', '%' . request('search') . '%')->get();
        }

        return view('user.v_kelas', compact('dataSiswa', 'data', 'jurusan'));
    }
}
