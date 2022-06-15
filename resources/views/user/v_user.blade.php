@extends('layouts.v_vanderCode')

@section('title')
<title>Data Siswa</title>
@endsection

@section('main')
@php
$no = 1;
@endphp
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Siswa Yang Melanggar</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="" class="m-0 font-weight-bold btn btn-primary">Print</a>
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
                        <th>Poin</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataSiswa as $item)
                    @if ($item->point < 0) <tr class="text-center">
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->nama }}</td>
                        @foreach ($data as $items)
                        @if ($items->id == $item->jurusan_model_id)
                        <td>{{ $items->kelas }}</td>
                        <td>{{ $items->jurusan }}</td>
                        @endif
                        @endforeach
                        <td>
                            @if ($item->point < 0) <div class="badge bg-danger text-white px-4 py-2">

                                @elseif ($item->point > 0)
                                <div class="badge bg-success text-white px-4 py-2">

                                    @endif
                                    {{ number_format($item->point) }}
                                </div>
                        </td>
                        <td>
                            <button data-toggle="modal" data-target="#detailPoin{{ $item->id_dataSiswa }}" type="button"
                                class="btn btn-outline-info">Riwayat</button>
                        </td>
                        </tr>
                        @endif
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@foreach ($dataSiswa as $item)
@php
$a = 1;
@endphp
<!-- Modal Detail Poin -->
<div class="modal fade" id="detailPoin{{ $item->id_dataSiswa }}" data-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-10">
                        <h5>Poin Pelanggaran</h5>
                        <h6 class="modal-title" id="staticBackdropLabel">Nama : {{ $item->nama }}</h6>
                        @foreach ($data as $items)
                        @if ($items->id == $item->jurusan_model_id)

                        <h6 class="modal-title" id="staticBackdropLabel">Kelas : {{ $items->kelas }}</h6>
                        <h6 class="modal-title" id="staticBackdropLabel">Jurusan : {{ $items->jurusan }}
                            {{ $items->group }}</h6>
                        @endif
                        @endforeach
                    </div>
                    <div class="col-md-1">
                        <a href="{{ route('print', $item->id_dataSiswa) }}" class="btn btn-primary mt-4 ml-4">Print</a>
                    </div>

                </div>
                <div class="poin mb-5 ml-1">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Pelanggaran</th>
                                <th>poin</th>
                                <th>tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($poinPelanggaran as $poin)
                            @if ($item->id_dataSiswa == $poin->data_siswa_model_id)
                            <tr class="text-center">
                                <td>{{ $a++ }}</td>
                                <td>
                                    @if ($poin->kesiangan != null)
                                        Kesiangan @if ($poin->alfa != null)|@endif
                                    @endif
                                    
                                    @if ($poin->alfa != null)
                                        Alfa @if ($poin->Tidak_bawa_kitab != null)|@endif
                                    @endif

                                    @if ($poin->Tidak_bawa_kitab != null)
                                        Tidak Bawa Kitab Suci @if ($poin->atribut != null)|@endif
                                    @endif

                                    @if ($poin->atribut != null)
                                        Atribut @if ($poin->perilaku_tidak_sesuai_pelajar != null)|@endif
                                    @endif

                                    @if ($poin->perilaku_tidak_sesuai_pelajar != null)
                                        Perilaku Tidak Sesuai Pelajar @if ($poin->pelanggaran_konten != null)|@endif
                                    @endif

                                    @if ($poin->pelanggaran_konten != null)
                                        Atribut @if ($poin->narkoba_serta_napza != null)|@endif
                                    @endif

                                    @if ($poin->narkoba_serta_napza != null)
                                        Narkoba Serta Napza @if ($poin->pelanggaran_elektronik != null)|@endif
                                    @endif

                                    @if ($poin->pelanggaran_elektronik != null)
                                        Pelanggaran Elektronik @if ($poin->pelanggaran_kendaraan != null)|@endif
                                    @endif

                                    @if ($poin->pelanggaran_kendaraan != null)
                                        Pelanggaran Kendaraan
                                    @endif
                                </td>

                                <td>
                                    @php
                                        $point = $poin['kesiangan'] + $poin['alfa'] + $poin['Tidak_bawa_kitab'] + $poin['atribut'] + $poin['perilaku_tidak_sesuai_pelajar'] + $poin['pelanggaran_konten'] + $poin['narkoba_serta_napza'] + $poin['pelanggaran_elektronik'] + $poin['pelanggaran_kendaraan'];
                                        echo $point;
                                    @endphp
                                </td>

                                <td>{{ $poin->tanggal }}</td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row ml-1">
                        <h6 class="text-end">Total Seluruh Poin : {{ $item->point }}</h6>
                    </div>
                </div>

                <div class="row justify-content-end mr-1 mt-4">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection