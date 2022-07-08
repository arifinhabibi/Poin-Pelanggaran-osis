<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa Yang Melanggar {{ date('d F Y') }}</title>
    <!-- Custom fonts for this template-->
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-md-11">
            @php
            $no = 1;
            @endphp
            <!-- Page Heading -->
            <div class="row mb-3 mt-4">
                <div class="col-md-10">

                    <h1 class="h3 mb-2 text-gray-800 mt-2 ml-2">Data Siswa Yang Melanggar</h1>
                    <p class="mt-2 ml-2">{{ date('d F Y') }}</p>
                </div>
                <div class="col-md-2">

                    <img src="/assets/img/jurusan/nesas.png" style="width: 90px; float:right; margin-right:10px" alt="">
                </div>

            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">

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
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataSiswa as $item)
                                @if ($item->point < 0) <tr class="text-center">
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->nama }}</td>
                                    @foreach ($data as $items)
                                    @if ($items->id == $item->jurusan_model_id)
                                    <td>{{ $items->kelas }}</td>
                                    <td>{{ $items->jurusan }} {{ $items->group }}</td>
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
                                    </tr>
                                    @endif

                                    @empty
                                    <p>Tidak ada siswa yang bermasalah</p>

                                    @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/assets/js/demo/chart-area-demo.js"></script>
    <script src="/assets/js/demo/chart-pie-demo.js"></script>
    <script>
        window.print();
    </script>

</body>

</html>