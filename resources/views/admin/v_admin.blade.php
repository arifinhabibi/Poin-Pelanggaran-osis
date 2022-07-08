@extends('layouts.v_vanderCode')

@section('title')
<title>Admin Kontrol</title>
@endsection

@section('main')
<a href="{{ route('tambahjurusan') }}" class="btn btn-outline-primary mb-3">tambah data jurusan</a>

<h3 class="text-center">Data Siswa Siswi</h3>

@if ($hapus = Session::get('hapus'))
<div class="alert alert-danger" role="alert">
    {{ $hapus }}
</div>
@endif

@if ($tambahData = Session::get('tambahData'))
<div class="alert alert-success" role="alert">
    {{ $tambahData }}
</div>
@endif

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
    <h4 class="h4 mb-0 text-gray-800">Jurusan Akuntansi dan Keuangan Lembaga</h4>

</div>

<!-- Content Row -->
<div class="row">
    @foreach ($data as $item)
    @if ($item->jurusan == "Akuntansi dan Keuangan Lembaga")
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <a href="{{ route('dataSiswa', $item->id ) }}" class="text-decoration-none text-primary">
                    <div class="row no-gutters align-items-center akl" >
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Kelas {{ $item->kelas }}
                                {{ $item->jurusan }} {{ $item->group }}</div>
                        </div>
                        <div class="col-auto">
                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                        </div>
                    </div>
                </a>
                <a href="{{ route('ubahDataJurusan', $item->id) }}" class="btn btn-outline-warning mt-4">edit</a>
                <button type="button" class="btn btn-outline-danger mt-4" data-toggle="modal"
                    data-target="#hapusJurusan{{ $item->id }}">
                    hapus
                </button>
            </div>
        </div>
    </div>

    @endif
    @endforeach
</div>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
    <h4 class="h4 mb-0 text-gray-800">Jurusan Bisnis Daring dan Pemasaran</h4>

</div>

<!-- Content Row -->
<div class="row">
    @foreach ($data as $item)
    @if ($item->jurusan == "Bisnis Daring dan Pemasaran")
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <a href="{{ route('dataSiswa', $item->id ) }}" class="text-decoration-none text-primary">
                    <div class="row no-gutters align-items-center bdp">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1">Kelas {{ $item->kelas }}
                                {{ $item->jurusan }} {{ $item->group }}</div>
                        </div>
                        <div class="col-auto">
                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                        </div>
                    </div>
                </a>
                <a href="{{ route('ubahDataJurusan', $item->id) }}" class="btn btn-outline-warning mt-4">edit</a>
                <button type="button" class="btn btn-outline-danger mt-4" data-toggle="modal"
                    data-target="#hapusJurusan{{ $item->id }}">
                    hapus
                </button>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
    <h4 class="h4 mb-0 text-gray-800">Jurusan Otomatisasi dan Tata Kelola Perkantoran</h4>

</div>

<!-- Content Row -->
<div class="row">
    @foreach ($data as $item)
    @if ($item->jurusan == "Otomatisasi dan Tata Kelola Perkantoran")
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <a href="{{ route('dataSiswa', $item->id ) }}" class="text-decoration-none text-primary">
                    <div class="row no-gutters align-items-center otkp">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1">Kelas {{ $item->kelas }}
                                {{ $item->jurusan }} {{ $item->group }}</div>
                        </div>
                        <div class="col-auto">
                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                        </div>
                    </div>
                </a>
                <a href="{{ route('ubahDataJurusan', $item->id) }}" class="btn btn-outline-warning mt-4">edit</a>
                <button type="button" class="btn btn-outline-danger mt-4" data-toggle="modal"
                    data-target="#hapusJurusan{{ $item->id }}">
                    hapus
                </button>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
    <h4 class="h4 mb-0 text-gray-800">Jurusan Rekayasa Perangkat Lunak</h4>

</div>

<!-- Content Row -->
<div class="row">
    @foreach ($data as $item)
    @if ($item->jurusan == "Rekayasa Perangkat Lunak")
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <a href="{{ route('dataSiswa', $item->id ) }}" class="text-decoration-none text-primary">
                    <div class="row no-gutters align-items-center rpl">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1">Kelas {{ $item->kelas }}
                                {{ $item->jurusan }} {{ $item->group }}</div>
                        </div>
                        <div class="col-auto">
                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                        </div>
                    </div>
                </a>
                <a href="{{ route('ubahDataJurusan', $item->id) }}" class="btn btn-outline-warning mt-4">edit</a>
                <button type="button" class="btn btn-outline-danger mt-4" data-toggle="modal"
                    data-target="#hapusJurusan{{ $item->id }}">
                    hapus
                </button>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
    <h4 class="h4 mb-0 text-gray-800">Jurusan Teknik Komputer dan Jaringan</h4>

</div>

<!-- Content Row -->
<div class="row">
    @foreach ($data as $item)
    @if ($item->jurusan == "Teknik Komputer dan Jaringan")
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <a href="{{ route('dataSiswa', $item->id ) }}" class="text-decoration-none text-primary">
                    <div class="row no-gutters align-items-center tkj">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1">Kelas {{ $item->kelas }}
                                {{ $item->jurusan }} {{ $item->group }}</div>
                        </div>
                        <div class="col-auto">
                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                        </div>
                    </div>
                </a>
                <a href="{{ route('ubahDataJurusan', $item->id) }}" class="btn btn-outline-warning mt-4">edit</a>
                <button type="button" class="btn btn-outline-danger mt-4" data-toggle="modal"
                    data-target="#hapusJurusan{{ $item->id }}">
                    hapus
                </button>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
    <h4 class="h4 mb-0 text-gray-800">Jurusan Desain Grafika</h4>

</div>

<!-- Content Row -->
<div class="row">
    @foreach ($data as $item)
    @if ($item->jurusan == "Desain Grafika")
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <a href="{{ route('dataSiswa', $item->id ) }}" class="text-decoration-none text-primary">
                    <div class="row no-gutters align-items-center dg">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1">Kelas {{ $item->kelas }}
                                {{ $item->jurusan }} {{ $item->group }}</div>
                        </div>
                        <div class="col-auto">
                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                        </div>
                    </div>
                </a>
                <a href="{{ route('ubahDataJurusan', $item->id) }}" class="btn btn-outline-warning mt-4">edit</a>
                <button type="button" class="btn btn-outline-danger mt-4" data-toggle="modal"
                    data-target="#hapusJurusan{{ $item->id }}">
                    hapus
                </button>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
    <h4 class="h4 mb-0 text-gray-800">Jurusan Teknik Pemesinan</h4>

</div>

<!-- Content Row -->
<div class="row">
    @foreach ($data as $item)
    @if ($item->jurusan == "Teknik Pemesinan")
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <a href="{{ route('dataSiswa', $item->id ) }}" class="text-decoration-none">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kelas {{ $item->kelas }}
                                {{ $item->jurusan }} {{ $item->group }}</div>
                        </div>
                        <div class="col-auto">
                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                        </div>
                    </div>
                </a>
                <a href="{{ route('ubahDataJurusan', $item->id) }}" class="btn btn-outline-warning mt-4">edit</a>
                <button type="button" class="btn btn-outline-danger mt-4" data-toggle="modal"
                    data-target="#hapusJurusan{{ $item->id }}">
                    hapus
                </button>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
    <h4 class="h4 mb-0 text-gray-800">Jurusan Teknik dan Bisnis Sepeda Motor</h4>

</div>

<!-- Content Row -->
<div class="row">
    @foreach ($data as $item)
    @if ($item->jurusan == "Teknik dan Bisnis Sepeda Motor")
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <a href="{{ route('dataSiswa', $item->id ) }}" class="text-decoration-none">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kelas {{ $item->kelas }}
                                {{ $item->jurusan }} {{ $item->group }}</div>
                        </div>
                        <div class="col-auto">
                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                        </div>
                    </div>
                </a>
                <a href="{{ route('ubahDataJurusan', $item->id) }}" class="btn btn-outline-warning mt-4">edit</a>
                <button type="button" class="btn btn-outline-danger mt-4" data-toggle="modal"
                    data-target="#hapusJurusan{{ $item->id }}">
                    hapus
                </button>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
    <h4 class="h4 mb-0 text-gray-800">Jurusan Teknik Logistik</h4>

</div>

<!-- Content Row -->
<div class="row">
    @foreach ($data as $item)
    @if ($item->jurusan == "Teknik Logistik")
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <a href="{{ route('dataSiswa', $item->id ) }}" class="text-decoration-none">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kelas {{ $item->kelas }}
                                {{ $item->jurusan }} {{ $item->group }}</div>
                        </div>
                        <div class="col-auto">
                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                        </div>
                    </div>
                </a>
                <a href="{{ route('ubahDataJurusan', $item->id) }}" class="btn btn-outline-warning mt-4">edit</a>
                <button type="button" class="btn btn-outline-danger mt-4" data-toggle="modal"
                    data-target="#hapusJurusan{{ $item->id }}">
                    hapus
                </button>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
    <h4 class="h4 mb-0 text-gray-800">Jurusan Tata Boga</h4>

</div>

<!-- Content Row -->
<div class="row">
    @foreach ($data as $item)
    @if ($item->jurusan == "Tata Boga")
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <a href="{{ route('dataSiswa', $item->id ) }}" class="text-decoration-none">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kelas {{ $item->kelas }}
                                {{ $item->jurusan }} {{ $item->group }}</div>
                        </div>
                        <div class="col-auto">
                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                        </div>
                    </div>
                </a>
                <a href="{{ route('ubahDataJurusan', $item->id) }}" class="btn btn-outline-warning mt-4">edit</a>
                <button type="button" class="btn btn-outline-danger mt-4" data-toggle="modal"
                    data-target="#hapusJurusan{{ $item->id }}">
                    hapus
                </button>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>

@foreach ($data as $item)
<!-- Modal hapus data jurusan -->
<div class="modal fade" id="hapusJurusan{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                Seluruh data kelas <b>{{ $item->kelas }} {{ $item->jurusan }} {{ $item->group }}</b> akan terhapus
            </div>
            <div class="row justify-content-end p-3">
                <div class="col-2">
                    <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">batal</button>
                </div>
                <div class="col-2">
                    <a href="{{ route('hapusDataJurusan', $item->id) }}" class="btn btn-primary ml-1 mr-3">ya</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection