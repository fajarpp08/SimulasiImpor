<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Halaman impor</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">






        <!--**********************************
                Content body start
            ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Datatable</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Impor</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table-bordered table-striped"
                                        style="text-align:center; min-width: 845px; color:black;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Barang</th>
                                                <th>Uraian Barang</th>
                                                <th>BM</th>
                                                <th>Nilai Komoditas</th>
                                                <th>Nilai BM</th>
                                                <th>Waktu insert</th>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($kategori as $item) --}}
                                            <tr>
                                                {{-- <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama_kategori }}</td> --}}
                                                {{-- <td>
                                                        <a href="{{ route('edit.kategori', $item->id_kategori) }}"
                                                            class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                        <a href="{{ route('delete.kategori', $item->id_kategori) }}"
                                                            onclick="return confirm('Apakah anda yakin ingin menghapus data?')"
                                                            class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                    </td> --}}
                                            </tr>
                                            {{-- @endforeach --}}
                                        </tbody>
                                    </table>
                                    <br>
                                    <a href="" class="btn btn-primary"><i
                                            class="fa fa-plus"></i>
                                        Tambah Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
                        Content body end
                    ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @if (session('success'))
            <script>
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @elseif(session('error'))
            <script>
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "{{ session('error') }}",
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @endif

        <!--**********************************
            Scripts
        ***********************************-->
        <!-- Required vendors -->
        <script src="{{ asset('vendor/global/global.min.js') }}"></script>
        <script src="{{ asset('js/quixnav-init.js') }}"></script>
        <script src="{{ asset('js/custom.min.js') }}"></script>


        <!-- Vectormap -->
        <script src="{{ asset('vendor/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('vendor/morris/morris.min.js') }}"></script>


        <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
        <script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>

        <script src="{{ asset('vendor/gaugeJS/dist/gauge.min.js') }}"></script>

        <!--  flot-chart js -->
        <script src="{{ asset('vendor/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('vendor/flot/jquery.flot.resize.js') }}"></script>

        <!-- Owl Carousel -->
        <script src="{{ asset('vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

        <!-- Counter Up -->
        <script src="{{ asset('vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
        <script src="{{ asset('vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>


        <script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
