@extends('layouts.v_vanderCode')

@section('title')
<title>Data Siswa</title>
@endsection

@section('main')
@php
$no = 1;
@endphp
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Penginputan Poin Pelanggaran</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <form class="form-inline mr-auto w-100 navbar-search" action="{{ route('kelas', $jurusan->id) }}">
            <div class="input-group">
                <input type="text" name="search" class="form-control bg-body border-bottom-dark border-0 small"
                    placeholder="Cari Siswa..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($dataSiswa as $item)

                    <tr class="text-center">
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->nama }}</td>
                        @foreach ($data as $items)
                        @if ($items->id == $item->jurusan_model_id)
                        <td>{{ $items->kelas }}</td>
                        <td>{{ $items->jurusan }} {{ $items->group }}</td>
                        @endif
                        @endforeach

                        <td>
                            <button data-toggle="modal" data-target="#detailPoin{{ $item->id_dataSiswa }}" type="button"
                                class="btn btn-outline-primary">Input Poin</button>
                        </td>
                    </tr>

                    @empty
                    <h4 class="text-center mb-5 mt-5">Siswa Tidak ditemukan</h4>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>

@foreach ($dataSiswa as $item)
<!-- Modal Detail Poin -->
<div class="modal fade" id="detailPoin{{ $item->id_dataSiswa }}" data-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="text-center">Input Poin Pelanggaran</h5>
                <h6 class="modal-title" id="staticBackdropLabel">Nama : {{ $item->nama }}</h6>
                @foreach ($data as $items)
                @if ($items->id == $item->jurusan_model_id)

                <h6 class="modal-title" id="staticBackdropLabel">Kelas : {{ $items->kelas }}</h6>
                <h6 class="modal-title" id="staticBackdropLabel">Jurusan : {{ $items->jurusan }} {{ $items->group }}
                </h6>
                <h6 class="modal-title" id="staticBackdropLabel">Tanggal : {{ date('l, d F Y') }}</h6>
                @endif
                @endforeach

                <div class="poin m-4">
                    <form action="{{ route('inputPoinStore', $item->id_dataSiswa) }}" method="post">
                        @csrf
                        <input type="number" name="data_siswa_model_id" value="{{ $item->id_dataSiswa }}" hidden>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Jenis Pelanggaran</th>
                                    <th scope="col">Nilai Poin</th>
                                    <th scope="col" class="text-center">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label for="kesiangan{{ $item->id_dataSiswa }}">
                                            Kesiangan
                                        </label></td>
                                    <td class="text-center">-5</td>
                                    <td class="text-center">
                                        <input type="checkbox" value="-5" name="kesiangan"
                                            id="kesiangan{{ $item->id_dataSiswa }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="alfa{{ $item->id_dataSiswa }}">
                                            Alfa
                                        </label></td>
                                    <td class="text-center">-5</td>
                                    <td class="text-center">
                                        <input type="checkbox" value="-5" name="alfa"
                                            id="alfa{{ $item->id_dataSiswa }}">

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="tidakBawaKitab{{ $item->id_dataSiswa }}">

                                            Tidak Membawa Kitab Suci
                                        </label>
                                    </td>
                                    <td class="text-center">-5</td>
                                    <td class="text-center">
                                        <input type="checkbox" value="-5" name="tidak_bawa_kitab"
                                            id="tidakBawaKitab{{ $item->id_dataSiswa }}">

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="atribut{{ $item->id_dataSiswa }}">

                                            Atribut
                                        </label>
                                    </td>
                                    <td class="text-center">-5</td>
                                    <td class="text-center">
                                        <input type="checkbox" value="-5" name="atribut"
                                            id="atribut{{ $item->id_dataSiswa }}">

                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="perilaku_tidak_sesuai_pelajar{{ $item->id_dataSiswa }}">
                                            Perilaku Tidak
                                            Sesuai Pelajar

                                        </label></td>
                                    <td class="text-center">-25</td>
                                    <td class="text-center">
                                        <input type="checkbox" value="-25" name="perilaku_tidak_sesuai_pelajar"
                                            id="perilaku_tidak_sesuai_pelajar{{ $item->id_dataSiswa }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="pelanggaran_konten{{ $item->id_dataSiswa }}">

                                            Pelanggaran Konten
                                        </label></td>
                                    <td class="text-center">-25</td>
                                    <td class="text-center">
                                        <input type="checkbox" value="-25" name="pelanggaran_konten"
                                            id="pelanggaran_konten{{ $item->id_dataSiswa }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="narkoba_serta_napza{{ $item->id_dataSiswa }}">
                                            Narkoba Serta Napza

                                        </label></td>
                                    <td class="text-center">-50</td>
                                    <td class="text-center">
                                        <input type="checkbox" value="-50" name="narkoba_serta_napza"
                                            id="narkoba_serta_napza{{ $item->id_dataSiswa }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="pornografi_pornoaksi_pencemaran_nama_baik{{ $item->id_dataSiswa }}">
                                            Pornografi,
                                            Pornoaksi, Pencemaran Nama Baik

                                        </label></td>
                                    <td class="text-center">-50</td>
                                    <td class="text-center">
                                        <input type="checkbox" value="-50"
                                            name="pornografi_pornoaksi_pencemaran_nama_baik"
                                            id="pornografi_pornoaksi_pencemaran_nama_baik{{ $item->id_dataSiswa }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <label for="pelanggaran_elektronik{{ $item->id_dataSiswa }}">
                                            Pelanggaran
                                            Elektronik

                                        </label></td>
                                    <td class="text-center">-10</td>
                                    <td class="text-center">
                                        <input type="checkbox" value="-10" name="pelanggaran_elektronik"
                                            id="pelanggaran_elektronik{{ $item->id_dataSiswa }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="pelanggaran_kendaraan{{ $item->id_dataSiswa }}">
                                            Pelanggaran
                                            Kendaraan
                                        </label></td>
                                    <td class="text-center">-5</td>
                                    <td class="text-center">
                                        <input type="checkbox" value="-5" name="pelanggaran_kendaraan"
                                            id="pelanggaran_kendaraan{{ $item->id_dataSiswa }}">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                            <input type="text" name="penginput" value="{{ Auth::user()->username }}" hidden>
                            <input type="text" value="{{ date('l, d F Y') }}" name="tanggal" hidden>
                        <div class="row justify-content-end mr-1 mt-4">
                            <a href="{{ route('kelas', $jurusan->id) }}" class="btn btn-secondary mt-2 ml-4">Batal</a>
                            <button type="submit" class="btn btn-primary mt-2 ml-4">Sudah</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endforeach

@endsection