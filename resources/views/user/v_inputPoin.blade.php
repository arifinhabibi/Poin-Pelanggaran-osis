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
      
     
@if ($inputPoin = Session::get('inputPoin'))
<div class="alert alert-danger" role="alert">
    {{ $inputPoin }}
</div>
@endif


     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-body border-bottom-dark border-0 small"
                        placeholder="Cari Siswa..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
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
                     @foreach ($dataSiswa as $item)
                         
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
                                <button data-toggle="modal" data-target="#detailPoin{{ $item->id_dataSiswa }}" type="button" class="btn btn-outline-primary">Input Poin</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
     </div>


     @foreach ($dataSiswa as $item)
     <!-- Modal Detail Poin -->
     <div class="modal fade" id="detailPoin{{ $item->id_dataSiswa }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="text-center">Input Poin Pelanggaran</h5>
                    <h6 class="modal-title" id="staticBackdropLabel">Nama : {{ $item->nama }}</h6>
                    @foreach ($data as $items)
                         @if ($items->id == $item->jurusan_model_id)
                          
                         <h6 class="modal-title" id="staticBackdropLabel">Kelas : {{ $items->kelas }}</h6>
                         <h6 class="modal-title" id="staticBackdropLabel">Jurusan : {{ $items->jurusan }} {{ $items->group }}</h6>
                         <h6 class="modal-title" id="staticBackdropLabel">Tanggal : {{ date('l, d F Y') }}</h6>
                        @endif
                    @endforeach

                    <div class="poin m-4">
                        <form action="{{ route('inputPoinStore', $item->id_dataSiswa) }}" method="post">
                            @csrf
                            <div class="row justify-content-center">
                                <input type="number" name="data_siswa_model_id" value="{{ $item->id_dataSiswa }}" hidden>
                                <div class="col-md-3 mb-2">
                                    <label for="topi{{ $item->id_dataSiswa }}">Topi(-10)</label>
                                    <input type="checkbox" value="-10" name="topi" id="topi{{ $item->id_dataSiswa }}">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="kesiangan{{ $item->id_dataSiswa }}">Kesiangan(-20)</label>
                                    <input type="checkbox" value="-20" name="kesiangan" id="kesiangan{{ $item->id_dataSiswa }}">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="rambut{{ $item->id_dataSiswa }}">Rambut(-15)</label>
                                    <input type="checkbox" value="-15" name="rambut" id="rambut{{ $item->id_dataSiswa }}">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="atribut{{ $item->id_dataSiswa }}">Atribut(-5)</label>
                                    <input type="checkbox" value="-5" name="atribut" id="atribut{{ $item->id_dataSiswa }}">
                                </div>
                                    <input type="text" value="{{ date('l, d F Y') }}" name="tanggal" hidden>
                            </div>
                            <div class="row justify-content-end mr-1 mt-4">
                                <a href="{{ route('inputPoin') }}" class="btn btn-secondary mt-4 ml-4">Batal</a>
                                <button type="submit" class="btn btn-primary mt-4 ml-4">Sudah</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endforeach
    
    
    
     @endsection