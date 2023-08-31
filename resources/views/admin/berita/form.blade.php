@extends('template.admin')
@section('content')
    <div class="container mt-5">
        <div class="shadow-lg rounded p-5">
            <div class="card-header mb-5">
                <h4 class="text-center"><strong>FORM {{ isset($berita) ? 'EDIT' : 'TAMBAH' }} BERITA</strong></h4>
            </div>
            <div class="card-body">
                <form
                    action="{{ isset($berita) ? route('admin.berita.edit.do', ['id' => $berita->id]) : route('admin.berita.add.do') }}"
                    method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="judul" class="form-label"><strong>Judul</strong><span
                                class="text-danger">*</span></label>
                        <textarea type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul">{{ $berita->judul ?? old('judul') }}</textarea>
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label"><strong>Foto</strong><span
                                class="text-danger">*</span></label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto"
                            name="foto">
                        @if (isset($berita))
                            <small><em><span class="text-danger">*</span>Apabila tidak ingin mengganti foto maka biarkan
                                    kosong.</em></small>
                        @endif
                        @error('foto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label"><strong>Deskripsi</strong><span
                                class="text-danger">*</span></label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="editor"> {{ $berita->deskripsi ?? old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                        <a href="{{ route('admin.berita') }}" type="button" class="btn btn-dark">Kembali</a>
                        <button type="submit"
                            class="btn {{ isset($berita) ? 'btn-warning' : 'btn-primary' }}  rounded">{{ isset($berita) ? 'Edit' : 'Tambah' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script nonce="YXN1YmFuZ2V0MTIzNGhmaGZoZmpzb3ht" src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script nonce="YXN1YmFuZ2V0MTIzNGhmaGZoZmpzb3ht">
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
