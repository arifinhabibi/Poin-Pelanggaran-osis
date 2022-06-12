@extends('layouts.v_vanderCode')

@section('title')
    <title>Beranda</title>
@endsection

@section('main')

   
    <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
        <h4 class="h4 mb-0 text-gray-800">Akuntansi dan Keuangan Lembaga</h4 >
        
            
        </div>
        
            <!-- Content Row -->
            <div class="row">
                @foreach ($data as $item)
                    @if ($item->jurusan == "Akuntansi dan Keuangan Lembaga")
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $item->kelas }} {{ $item->jurusan }} {{ $item->group }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                                        </div>
                                    </div>
                                     
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- akl --}}
                        {{-- <div class="row justify-content-center">
                            <h4>Belum Tersedia</h4>
                        </div> --}}
                    @endif
                @endforeach
            </div>
            
            {{-- $item->jurusan != "Akuntansi dan Keuangan Lembaga" && 
                    $item->jurusan != "Bisnis Daring dan Pemasaran" && 
                    $item->jurusan != "Otomatisasi dan Tata Kelola Perkantoran" && 
                    $item->jurusan != "Rekayasa Perangkat Lunak" && 
                    $item->jurusan != "Teknik Komputer dan Jaringan" && 
                    $item->jurusan != "Desain Grafika" &&
                    $item->jurusan != "Teknik Pemesinan" &&
                    $item->jurusan != "Teknik dan Bisnis Sepeda Motor" &&
                    $item->jurusan != "Teknik Logistik" &&
                    $item->jurusan != "Tata Boga" --}}



            
            <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
        <h4 class="h4 mb-0 text-gray-800">Bisnis Daring dan Pemasaran</h4 >
            
        </div>
        
            <!-- Content Row -->
            <div class="row">
                @foreach ($data as $item)
                    @if ($item->jurusan == "Bisnis Daring dan Pemasaran")
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $item->kelas }} {{ $item->jurusan }} {{ $item->group }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>



            <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
        <h4 class="h4 mb-0 text-gray-800">Otomatisasi dan Tata Kelola Perkantoran</h4 >
            
        </div>
        
            <!-- Content Row -->
            <div class="row">
                @foreach ($data as $item)
                    @if ($item->jurusan == "Otomatisasi dan Tata Kelola Perkantoran")
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $item->kelas }} {{ $item->jurusan }} {{ $item->group }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>



            <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
        <h4 class="h4 mb-0 text-gray-800">Rekayasa Perangkat Lunak</h4 >
            
        </div>
        
            <!-- Content Row -->
            <div class="row">
                @foreach ($data as $item)
                    @if ($item->jurusan == "Rekayasa Perangkat Lunak")
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $item->kelas }} {{ $item->jurusan }} {{ $item->group }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>



            <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
        <h4 class="h4 mb-0 text-gray-800">Teknik Komputer dan Jaringan</h4 >
            
        </div>
        
            <!-- Content Row -->
            <div class="row">
                @foreach ($data as $item)
                    @if ($item->jurusan == "Teknik Komputer dan Jaringan")
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $item->kelas }} {{ $item->jurusan }} {{ $item->group }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>




            <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
        <h4 class="h4 mb-0 text-gray-800">Desain Grafika</h4 >
            
        </div>
        
            <!-- Content Row -->
            <div class="row">
                @foreach ($data as $item)
                    @if ($item->jurusan == "Desain Grafika")
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $item->kelas }} {{ $item->jurusan }} {{ $item->group }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>




            <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
        <h4 class="h4 mb-0 text-gray-800">Teknik Pemesinan</h4 >
            
        </div>
        
            <!-- Content Row -->
            <div class="row">
                @foreach ($data as $item)
                    @if ($item->jurusan == "Teknik Pemesinan")
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $item->kelas }} {{ $item->jurusan }} {{ $item->group }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>



            <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
        <h4 class="h4 mb-0 text-gray-800">Teknik dan Bisnis Sepeda Motor</h4 >
            
        </div>
        
            <!-- Content Row -->
            <div class="row">
                @foreach ($data as $item)
                    @if ($item->jurusan == "Teknik dan Bisnis Sepeda Motor")
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $item->kelas }} {{ $item->jurusan }} {{ $item->group }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>



            <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
        <h4 class="h4 mb-0 text-gray-800">Teknik Logistik</h4 >
            
        </div>
        
            <!-- Content Row -->
            <div class="row">
                @foreach ($data as $item)
                    @if ($item->jurusan == "Teknik Logistik")
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $item->kelas }} {{ $item->jurusan }} {{ $item->group }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>

            <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-2 mt-4">
        <h4 class="h4 mb-0 text-gray-800">Tata Boga</h4 >
            
        </div>
        
            <!-- Content Row -->
            <div class="row">
                @foreach ($data as $item)
                    @if ($item->jurusan == "Tata Boga")
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $item->kelas }} {{ $item->jurusan }} {{ $item->group }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="/assets/img/jurusan/{{ $item->logo }}" class="img_logo">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>
     

@endsection