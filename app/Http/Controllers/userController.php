<?php

namespace App\Http\Controllers;

use App\Models\jurusanModel;
use Illuminate\Http\Request;
use App\Models\dataSiswaModel;
use App\Models\poinPelanggaranModel;

class userController extends Controller
{
    public function user(){
        $data = jurusanModel::all();
        $dataSiswa = dataSiswaModel::all();
        $poinPelanggaran = poinPelanggaranModel::all();
        return view('user.v_user', \compact('data', 'dataSiswa', 'poinPelanggaran'));
    }
    
    public function inputPoin(){
        $data = jurusanModel::all();
        $dataSiswa = dataSiswaModel::all();
        return view('user.v_inputPoin', \compact('data', 'dataSiswa'));
    }

    public function inputPoinStore(Request $request, $id_dataSiswa){
        $dataSiswa = dataSiswaModel::find($id_dataSiswa);
        
        $dataSiswa->point = $dataSiswa->point +  $request['kesiangan'] + $request['alfa'] + $request['Tidak_bawa_kitab'] + $request['atribut'] + $request['perilaku_tidak_sesuai_pelajar'] + $request['pelanggaran_konten'] + $request['narkoba_serta_napza'] + $request['pornografi_pornoaksi_pencemaran_nama_baik'] + $request['pelanggaran_elektronik'] + $request['pelanggaran_kendaraan'];
        $dataSiswa->save();


        $poinPelanggaran = poinPelanggaranModel::create($request->all());


        return \redirect()->route('inputPoin')->with('inputPoin', 'Menginput poin siswa berhasil');
    }
}
