<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pelanggaran {{ $dataSiswa->nama }} {{ date('d F Y') }}</title>

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
    @php
    $a = 1;
    @endphp
    <div class="row m-5 justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Poin Pelanggaran</h5>
                    <h6 class="modal-title" id="staticBackdropLabel">Nama : {{ $dataSiswa->nama }}</h6>
                    @foreach ($data as $items)
                    @if ($items->id == $dataSiswa->jurusan_model_id)

                    <h6 class="modal-title" id="staticBackdropLabel">Kelas : {{ $items->kelas }}</h6>
                    <h6 class="modal-title" id="staticBackdropLabel">Jurusan : {{ $items->jurusan }}
                        {{ $items->group }}</h6>
                    @endif
                    @endforeach

                    <div class="poin mb-5 ml-1">
                        <table class="table table-bordered mt-3" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Pelanggaran</th>
                                    <th>poin</th>
                                    <th>tanggal</th>
                                    <th>penginput</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($poinPelanggaran as $poin)
                                @if ($dataSiswa->id_dataSiswa == $poin->data_siswa_model_id)
                                <tr class="text-center">
                                    <td>{{ $a++ }}</td>
                                    <td>
                                        @if ($poin->kesiangan != null)
                                        (Kesiangan)
                                        @endif

                                        @if ($poin->alfa != null)
                                        (Alfa)
                                        @endif

                                        @if ($poin->Tidak_bawa_kitab != null)
                                        (Tidak Bawa Kitab Suci)
                                        @endif

                                        @if ($poin->atribut != null)
                                        (Atribut)
                                        @endif

                                        @if ($poin->perilaku_tidak_sesuai_pelajar != null)
                                        (Perilaku Tidak Sesuai Pelajar)
                                        @endif

                                        @if ($poin->pelanggaran_konten != null)
                                        (Atribut)
                                        @endif

                                        @if ($poin->narkoba_serta_napza != null)
                                        (Narkoba Serta Napza)
                                        @endif

                                        @if ($poin->pornografi_pornoaksi_pencemaran_nama_baik != null)
                                        (Pornografi, Pornoaksi, Pencemaran Nama Baik)
                                        @endif

                                        @if ($poin->pelanggaran_elektronik != null)
                                        (Pelanggaran Elektronik)
                                        @endif

                                        @if ($poin->pelanggaran_kendaraan != null)
                                        (Pelanggaran Kendaraan)
                                        @endif
                                    </td>

                                    <td>
                                        @php
                                        $point = $poin['kesiangan'] + $poin['alfa'] + $poin['Tidak_bawa_kitab'] +
                                        $poin['atribut'] + $poin['perilaku_tidak_sesuai_pelajar'] +
                                        $poin['pelanggaran_konten'] + $poin['narkoba_serta_napza'] +
                                        $poin['pornografi_pornoaksi_pencemaran_nama_baik'] +
                                        $poin['pelanggaran_elektronik'] + $poin['pelanggaran_kendaraan'];
                                        echo $point;
                                        @endphp
                                    </td>

                                    <td>{{ $poin->tanggal }}</td>
                                    <td>{{ $poin->penginput }}</td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row ml-1">
                            <h6 class="text-end">Total Seluruh Poin : {{ $dataSiswa->point }}</h6>
                        </div>
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