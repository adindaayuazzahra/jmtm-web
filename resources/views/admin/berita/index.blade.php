@extends('template.admin')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between">
                <h3 class="mb-4">Berita</h3>
                <a href="" class="btn rounded-pill btn-primary">
                    <i class="fa-solid fa-plus"></i> Tambah Berita
                </a>
                {{-- <button type="button" class="btn rounded-pill btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="fa-solid fa-plus"></i> Tambah Berita
                </button> --}}
            </div>
            <table class="display table w-100" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Tanggal Publish</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
