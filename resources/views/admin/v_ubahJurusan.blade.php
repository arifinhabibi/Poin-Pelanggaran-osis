@extends('layouts.v_vanderCode')

@section('title')
<title>Admin Kontrol</title>
@endsection

@section('main')
<div class="row justify-content-center mb-4 mt-5">
    <h4>Ubah Data Jurusan</h4>
</div>
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="col-md-12">
                <label for="namajurusan" class="form-label">Nama Jurusan</label>
                <select name="jurusan" class="form-control" id="namajurusan">
                    
                    @if ($data->jurusan == "Akuntansi dan Keuangan Lembaga")
                    <option value="Akuntansi dan Keuangan Lembaga" @selected(true)>Akuntansi dan Keuangan Lembaga</option>
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
                    @endif
                    
                    @if ($data->jurusan == "Bisnis Daring dan Pemasaran")
                    <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                    <option value="Bisnis Daring dan Pemasaran"  @selected(true)>Bisnis Daring dan Pemasaran</option>
                    <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran
                    </option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Desain Grafika">Desain Grafika</option>
                    <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                    <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                    <option value="Teknik Logistik">Teknik Logistik</option>
                    <option value="Tata Boga">Tata Boga</option>
                    @endif

                    @if ($data->jurusan == "Otomatisasi dan Tata Kelola Perkantoran")
                    <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                    <option value="Bisnis Daring dan Pemasaran" >Bisnis Daring dan Pemasaran</option>
                    <option value="Otomatisasi dan Tata Kelola Perkantoran"  @selected(true)>Otomatisasi dan Tata Kelola Perkantoran
                    </option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Desain Grafika">Desain Grafika</option>
                    <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                    <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                    <option value="Teknik Logistik">Teknik Logistik</option>
                    <option value="Tata Boga">Tata Boga</option>
                    @endif

                    @if ($data->jurusan == "Rekayasa Perangkat Lunak")
                    <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                    <option value="Bisnis Daring dan Pemasaran" >Bisnis Daring dan Pemasaran</option>
                    <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran
                    </option>
                    <option value="Rekayasa Perangkat Lunak"  @selected(true)>Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Desain Grafika">Desain Grafika</option>
                    <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                    <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                    <option value="Teknik Logistik">Teknik Logistik</option>
                    <option value="Tata Boga">Tata Boga</option>
                    @endif

                    @if ($data->jurusan == "Teknik Komputer dan Jaringan")
                    <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                    <option value="Bisnis Daring dan Pemasaran" >Bisnis Daring dan Pemasaran</option>
                    <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran
                    </option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer dan Jaringan"  @selected(true)>Teknik Komputer dan Jaringan</option>
                    <option value="Desain Grafika">Desain Grafika</option>
                    <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                    <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                    <option value="Teknik Logistik">Teknik Logistik</option>
                    <option value="Tata Boga">Tata Boga</option>
                    @endif

                    @if ($data->jurusan == "Desain Grafika")
                    <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                    <option value="Bisnis Daring dan Pemasaran" >Bisnis Daring dan Pemasaran</option>
                    <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran
                    </option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Desain Grafika"  @selected(true)>Desain Grafika</option>
                    <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                    <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                    <option value="Teknik Logistik">Teknik Logistik</option>
                    <option value="Tata Boga">Tata Boga</option>
                    @endif

                    @if ($data->jurusan == "Teknik Pemesinan")
                    <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                    <option value="Bisnis Daring dan Pemasaran" >Bisnis Daring dan Pemasaran</option>
                    <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran
                    </option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Desain Grafika">Desain Grafika</option>
                    <option value="Teknik Pemesinan"  @selected(true)>Teknik Pemesinan</option>
                    <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                    <option value="Teknik Logistik">Teknik Logistik</option>
                    <option value="Tata Boga">Tata Boga</option>
                    @endif
                    
                    @if ($data->jurusan == "Teknik dan Bisnis Sepeda Motor")
                    <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                    <option value="Bisnis Daring dan Pemasaran" >Bisnis Daring dan Pemasaran</option>
                    <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran
                    </option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Desain Grafika">Desain Grafika</option>
                    <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                    <option value="Teknik dan Bisnis Sepeda Motor"  @selected(true)>Teknik dan Bisnis Sepeda Motor</option>
                    <option value="Teknik Logistik">Teknik Logistik</option>
                    <option value="Tata Boga">Tata Boga</option>
                    @endif

                    @if ($data->jurusan == "Teknik Logistik")
                    <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                    <option value="Bisnis Daring dan Pemasaran" >Bisnis Daring dan Pemasaran</option>
                    <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran
                    </option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Desain Grafika">Desain Grafika</option>
                    <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                    <option value="Teknik dan Bisnis Sepeda Motor" >Teknik dan Bisnis Sepeda Motor</option>
                    <option value="Teknik Logistik" @selected(true)>Teknik Logistik</option>
                    <option value="Tata Boga">Tata Boga</option>
                    @endif

                    @if ($data->jurusan == "Tata Boga")
                    <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                    <option value="Bisnis Daring dan Pemasaran" >Bisnis Daring dan Pemasaran</option>
                    <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran
                    </option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Desain Grafika">Desain Grafika</option>
                    <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                    <option value="Teknik dan Bisnis Sepeda Motor" >Teknik dan Bisnis Sepeda Motor</option>
                    <option value="Teknik Logistik">Teknik Logistik</option>
                    <option value="Tata Boga" @selected(true)>Tata Boga</option>
                    @endif
                </select>
            </div>
            <div class="col-md-12 mt-3">
                <label for="kelas" class="form-label">Kelas</label>
                <select name="kelas" id="kelas" class="form-control">
                    @if ($data->kelas == "10")
                    <option value="10" @selected(true)>10</option>
                    <option value="11">11</option>
                    @endif
                    @if ($data->kelas == "11")
                    <option value="10">10</option>
                    <option value="11"  @selected(true)>11</option>
                    @endif
                </select>
            </div>
            <div class="col-md-12 mt-3">
                <label for="urutanKelas" class="form-label">Urutan Kelas ke</label>
                <select name="group" id="urutanKelas" class="form-control">
                    @if ($data->group == "1")
                    <option value="1" @selected(true)>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="">Hanya satu kelas</option>
                    @endif
                    
                    @if ($data->group == "2")
                    <option value="1">1</option>
                    <option value="2" @selected(true)>2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="">Hanya satu kelas</option>
                    @endif

                    @if ($data->group == "3")
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3" @selected(true)>3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="">Hanya satu kelas</option>
                    @endif

                    @if ($data->group == "4")
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4" @selected(true)>4</option>
                    <option value="5">5</option>
                    <option value="">Hanya satu kelas</option>
                    @endif

                    @if ($data->group == "5")
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5" @selected(true)>5</option>
                    <option value="">Hanya satu kelas</option>
                    @endif

                    @if ($data->group == "")
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="" @selected(true)>Hanya satu kelas</option>
                    @endif
                </select>
            </div>
            <div class="col-md-12 mt-3">
                <label for="logo" class="form-label">Masukan Logo Jurusan</label>
                <input type="file" name="logo" id="logo" value="{{ $data->logo }}" class="form-control">
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