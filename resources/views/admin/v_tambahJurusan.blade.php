@extends('layouts.v_vanderCode')

@section('title')
<title>Admin Kontrol</title>
@endsection

@section('main')
<div class="row justify-content-center mb-4 mt-5">
    <h4>Tambah Data Jurusan</h4>
</div>
<form action="{{ route('tambahjurusanStore') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="col-md-12">
                <label for="namajurusan" class="form-label">Nama Jurusan</label>
                <select name="jurusan" class="form-control" id="namajurusan">
                    <option>Pilih Nama Jurusan</option>
                    <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                    <option value="Bisnis Daring dan Pemasaran">Bisnis Daring dan Pemasaran</option>
                    <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran
                    </option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Desain Grafika">Desain Grafika</option>
                    <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                    <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                    <option value="Teknik Logistik">Teknik Logistik</option>
                    <option value="Tata Boga">Tata Boga</option>
                </select>
            </div>
            <div class="col-md-12 mt-3">
                <label for="kelas" class="form-label">Kelas</label>
                <select name="kelas" id="kelas" class="form-control">
                    <option>Pilih Kelas</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                </select>
            </div>
            <div class="col-md-12 mt-3">
                <label for="urutanKelas" class="form-label">Urutan Kelas ke</label>
                <select name="group" id="urutanKelas" class="form-control">
                    <option>Pilih Urutan Kelas</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="">Hanya satu kelas</option>
                </select>
            </div>
            <div class="col-md-12 mt-3">
                <label for="logo" class="form-label">Masukan Logo Jurusan</label>
                <input type="file" name="logo" id="logo" class="form-control">
            </div>

            <div class="row mt-2 ml-2">
                <div class="col-md-2 mt-2">

                    <a href="{{ route('admin') }}" class="btn btn-secondary">Kembali</a>
                </div>
                <div class="col-md-2 mt-2">

                    <button type="submit" class="btn btn-primary">Lanjut</button>
                </div>
            </div>

        </div>
    </div>
</form>
@endsection