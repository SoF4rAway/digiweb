@extends('layout.template')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="pt-3">
            <div class="alert alert-success">
                {{\Illuminate\Support\Facades\Session::get('success')}}
            </div>
        </div>
    @endif
    <div class="card mb-4 shadow-sm">
        <div class="container-fluid">
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
                <h5 class="card-title">News Posted</h5>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="col-sm-1">No</th>
                        <th class="col-sm-1">Judul</th>
                        <th class="col-sm-2">Ringkasan</th>
                        <th class="col-sm-3">Isi</th>
                        <th class="col-sm-2">Tanggal Upload</th>
                        <th class="col-sm-2">Tanggal Perubahan Terakhir</th>
                        <th class="col-sm-1">Aksi</th>

                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>tes</td>
                            <td>tes</td>
                            <td>tes</td>
                            <td>tes</td>
                            <td>tes</td>
                            <td>tes</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">Edit</a>
                                <a href='' class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- TOMBOL TAMBAH DATA -->
            <div class="pb-3">
                <a href='{{url('admin/posts/create')}}' class="btn btn-primary">+ Tambah Data</a>
            </div>
            <!-- AKHIR DATA -->
        </div>
@endsection
