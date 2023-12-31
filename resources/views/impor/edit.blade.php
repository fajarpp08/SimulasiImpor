@extends('template.index')
@section('title')
    Edit Kategori
@endsection

@section('content')
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Element</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-6 col-xxl-12">
                        
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nama Kategori</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{route('update.kategori',$kategori->id_kategori)}}" method="post">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" name="nama_kategori" class="form-control" value="{{$kategori->nama_kategori}}">
                                            </div>
    
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{route('data.kategori')}}" class="btn btn-dark">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
                        