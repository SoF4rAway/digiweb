@extends('layout.template')
@section('content')
    @if($errors->any)
        <div class="pt-3">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $item)
                        <li>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <!-- START FORM -->
    <form action='{{url('admin/posts')}}' method='post' enctype="multipart/form-data">
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="title" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='title' id="title">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="excerpt" class="col-sm-2 col-form-label">Ringkasan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='excerpt' id="excerpt">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="body" class="col-sm-2 col-form-label">Isi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='body' id="body">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="image" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name='image' id="image">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
    <!-- AKHIR FORM -->
@endsection
