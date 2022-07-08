<?php

namespace App\Http\Controllers;

use App\Models\jurusanModel;
use Illuminate\Http\Request;
use App\Models\dataSiswaModel;
use App\Models\poinPelanggaranModel;

class vanderCodeController extends Controller
{
    public function beranda(){
        $dataSiswa = dataSiswaModel::all();
        $data = jurusanModel::all();
        $poinPelanggaran = poinPelanggaranModel::all();

        return view('vanderCode.v_beranda', compact('data', 'dataSiswa', 'poinPelanggaran'));
    }

    public function print(){
        $dataSiswa = dataSiswaModel::all();
        $data = jurusanModel::all();
        $poinPelanggaran = poinPelanggaranModel::all();

        return view('vanderCode.v_print', compact('data', 'dataSiswa', 'poinPelanggaran'));
    }
}
