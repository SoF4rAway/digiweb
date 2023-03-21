@extends('layout.template')
@section('content')
    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='{{url('post/create')}}' class="btn btn-primary">+ Tambah Data</a>
        </div>

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
    <!-- AKHIR DATA -->
@endsection
