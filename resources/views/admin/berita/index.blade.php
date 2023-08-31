@extends('template.admin')
@section('content')
    <div class="container-fluid mt-3 p-5">
        <div class="row shadow-lg p-3 rounded">
            <div class="col-12 d-flex align-items-center justify-content-between">
                <h3 class="mb-4">Berita</h3>
                <a href="{{ route('admin.berita.add') }}" class="btn rounded-pill btn-primary">
                    <i class="fa-solid fa-plus"></i> Tambah Berita
                </a>
            </div>
            <table id="myTable" class="myTable table w-100">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Foto</th>
                        <th>Deskripsi</th>
                        <th width="12%">Tanggal Publish</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($beritas as $b)
                        <tr>
                            <td>{{ $i }}</td> @php $i++ @endphp
                            <td>{{ $b->judul }}</td>
                            {{-- <td><img src="{{ asset('assets/img/berita/' . $b->foto) }}" width="100px"></td> --}}
                            <td><img src="{{ Storage::url('berita/' . $b->foto) }}" width="100px"></td>
                            {{-- <td><img src="{{ asset('storage/app/images/'. $b->foto) }}" width="100"></td> --}}
                            <td >
                                    {!! trim($b->deskripsi, '{}') !!}
                            </td>
                            <td>{{ Carbon::parse($b->created_at)->format('d/m/Y - H:i') }}</td>
                            <td><a href="{{ route('admin.berita.edit', ['id' => $b->id]) }}"
                                    class="btn rounded-pill btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="{{ route('admin.berita.delete.do', ['id' => $b->id]) }}"
                                    class="btn rounded-pill btn-danger">
                                    <i class="fa-regular fa-trash-can"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <script nonce="YXN1YmFuZ2V0MTIzNGhmaGZoZmpzb3ht">
        $(document).ready(function() {
            $('.myTable').DataTable();
        });
    </script>
@endsection
