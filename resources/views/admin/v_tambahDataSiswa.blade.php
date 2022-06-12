@extends('layouts.v_vanderCode')

@section('title')
<title>Data Siswa</title>
@endsection

@section('main')
<div class="row justify-content-center mb-4 mt-5">
    <h4>Tambah Data Siswa</h4>
</div>
<form action="{{ route('tambahDataSiswaStore', $data->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center">

        <div class="col-md-6">

            <input type="number" name="jurusan_model_id" value="{{ $data->id }}" hidden>

            <div class="col-md-12">
                <label for="nis" class="form-label">No Induk Siswa ( NIS )</label>
                <input type="text" class="form-control" name="nis" id="nis">
            </div>
            
            <div class="col-md-12 mt-3">
                <label for="nama" class="form-label">Nama Lengkap Siswa</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <input type="number" name="point" value="0" hidden>
             
             

            <div class="row mt-2 ml-2">
                <div class="col-md-2 mt-2">

                    <a href="{{ route('dataSiswa', $data->id) }}" class="btn btn-secondary">Kembali</a>
                </div>
                <div class="col-md-2 mt-2">

                    <button type="submit" class="btn btn-primary">Lanjut</button>
                </div>
            </div>

        </div>
    </div>
</form>
@endsection