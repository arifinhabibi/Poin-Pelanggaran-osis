<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jurusanModel;

class vanderCodeController extends Controller
{
    public function beranda(){
        $data = jurusanModel::all();
        return view('vanderCode.v_beranda', compact('data'));
    }
}
