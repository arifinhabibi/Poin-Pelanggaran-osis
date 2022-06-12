@extends('layouts.v_vanderCode')

@section('title')
    <title>Data Siswa</title>
@endsection

@section('main')
     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">Data siswa </h1>
                
     <a href="{{ route('admin') }}" class="btn btn-secondary mb-4">Kembali</a>
     @php
         $no = 1;
     @endphp

    @if ($hapusDataSiswa = Session::get('hapusDataSiswa'))
    <div class="alert alert-danger" role="alert">
        {{ $hapusDataSiswa }}
    </div>
    @endif
    
    @if ($tambahDataSiswa = Session::get('tambahDataSiswa'))
    <div class="alert alert-success" role="alert">
        {{ $tambahDataSiswa }}
    </div>
    @endif

    @if ($ubahDataSiswa = Session::get('ubahDataSiswa'))
    <div class="alert alert-warning" role="alert">
        {{ $ubahDataSiswa }}
    </div>
    @endif

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <div class="row">
                 <div class="col-md-10">
                     <h6 class="m-0 font-weight-bold text-primary">Kelas {{ $data->kelas }} {{ $data->jurusan }} {{ $data->group }}</h6>
                 </div>
                 <div class="col-md-2 text-center mt-3">
                    <a href="{{ route('tambahDataSiswa', $data->id) }}" class="btn btn-primary">tambah siswa</a>
                 </div>
             </div>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr class="text-center">
                             <th>No</th>
                             <th>NIS</th>
                             <th>Nama</th>
                             <th>Poin</th>
                             <th></th>
                         </tr>
                     </thead>
                     <tbody>
                         @forelse ($data->jurusanToDataSiswa as $item)
                         <tr class="text-center">
                             <td>{{ $no++ }}</td>
                             <td>{{ $item->nis }}</td>
                             <td>{{ $item->nama }}</td>
                             <td>
                                 @if ($item->point < 0)
                                 <div class="badge bg-danger text-white px-4 py-2">
                                 
                                 @elseif ($item->point > 0)
                                 <div class="badge bg-success text-white px-4 py-2">

                                 @endif
                                    {{ number_format( $item->point ) }}
                                 </div>
                             </td>
                             <td>
                                <a href="/admin-kontrol/data-siswa/{{ $data->id }}/ubah/{{ $item->id_dataSiswa }}" class="btn btn-outline-warning">Ubah</a>
                                <button  type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#hapusDataSiswa{{ $item->id_dataSiswa }}">Hapus</button>
                             </td>
                         </tr>
                         @empty
                             
                         @endforelse
                     </tbody>
                 </table>
             </div>
         </div>
     </div>

     
    
     @foreach ($data->jurusanToDataSiswa as $item)
     <!-- Modal hapus data siswa -->
     <div class="modal fade" id="hapusDataSiswa{{ $item->id_dataSiswa }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-body">
               anda akan menghapus data siswa atas nama <b>{{ $item->nama }}</b>
             </div>
             <div class="row p-3">
                 <div class="col-2">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                 </div>
                 <div class="col-2">
                     <a href="/admin-kontrol/data-siswa/hapus/{{ $item->id_dataSiswa }}" class="btn btn-primary">Oke</a>
                 </div>
             </div>
           </div>
         </div>
     </div>
     @endforeach

@endsection