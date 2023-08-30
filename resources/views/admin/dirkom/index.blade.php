@extends('template.admin')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="card p-3">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3 class="mb-4">Dewan Komisaris</h3>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Add_dirkom">
                            Tambah
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tb_dirkom as $item)
                                <tr>
                                    <th scope="row">{{ $item->level }}</th>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>{{ $item->nama }}</td>
                                    {{-- <td>{{ $item->foto }}<img src="{{ Storage::url('images/' . $item->foto) }}" width="100"></td> --}}
                                    <td width="40%">
                                        <center>
                                            <div class="col-md-4 mb-4 d-flex justify-content-center">
                                                <div class="card h-100 text-center p-4 rounded-4 shadow">
                                                    <img src="{{ Storage::url('images/' . $item->foto) }}" class="img-fluid"
                                                        alt="Foto">
                                                    <small>{{ $item->nama }}</small><br>
                                                    <small class="lh-sm">{{ $item->jabatan }}</small>
                                                </div>
                                            </div>
                                        </center>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $item->id }}">Edit</button>
                                        <a href="{{ route('admin.delete_dirkom', ['id' => $item->id]) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Form tambah --}}
    <div class="modal fade" id="Add_dirkom" tabindex="-1" aria-labelledby="Add_dirkom" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Tambah Dirkom</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addDirkomForm" action="{{ route('admin.komisaris.add.do') }}" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="container mt-5">
                        <div class="mb-3">
                            <label for="dirkomSelect" class="form-label">Pilih Dirkom:</label>
                            <select class="form-select" id="dirkomSelect" name="dirkomSelect">
                                <option selected disabled>Pilih Kriteria</option>
                                <option value="1">Komisaris Utama</option>
                                <option value="2">Komisaris Kedua</option>
                                <option value="3">Komisaris Ketiga</option>
                                <option value="4">Direktur Utama</option>
                                <option value="5">Direktur Manajemen Risiko, RQHSE, dan Penunjang Bisnis</option>
                                <option value="6">Direktur Proyek Konstruksi dan Pengembang Bisnis</option>
                                <option value="7">Direktur Operasi</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Jabatan</label>
                            <input type="text" class="form-control @error('jabatan') is-invalid @enderror"
                                id="jabatan"name="jabatan" value="{{ old('jabatan') }}">
                            @error('jabatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Foto</label>
                            <input type="file" class="form-control @error('foto_dirkom') is-invalid @enderror"
                                id="foto_dirkom"name="foto_dirkom" value="{{ old('foto_dirkom') }}">
                            @error('foto_dirkom')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- modal edit --}}
    @foreach ($tb_dirkom as $item)
        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"aria-labelledby="editModalLabel"
            aria-hidden="true">
            {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> --}}
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="EditDirkomForm" action="{{ route('admin.update_dirkom', ['id' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            {{-- <input type="hidden" name="edit_id" id="edit_id"> --}}
                            <div class="container mt-5">
                                <div class="mb-3">
                                    <label for="edit_dirkomSelect" class="form-label">Pilih Dirkom:</label>
                                    {{-- <select class="form-select" id="employeeSelect">
                                    <option selected disabled>Select an employee...</option>
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->id }}">{{ $employee->nama }}</option>
                                    @endforeach 
                                    
                                </select> --}}
                                    <select class="form-select" id="edit_dirkomSelect" name="edit_dirkomSelect">
                                        <option selected value="{{ $item->level }}">{{ $item->jabatan }}</option>
                                        <option value="1">Komisaris Utama</option>
                                        <option value="2">Komisaris Kedua</option>
                                        <option value="3">Komisaris Ketiga</option>
                                        <option value="4">Direktur Utama</option>
                                        <option value="5">Direktur Manajemen Risiko, RQHSE, dan Penunjang Bisnis</option>
                                        <option value="6">Direktur Proyek Konstruksi dan Pengembang Bisnis</option>
                                        <option value="7">Direktur Operasi</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="edit_nama">Nama</label>
                                <input type="text" class="form-control" id="edit_nama" name="edit_nama"
                                    value="{{ $item->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="edit_jabatan">Jabatan</label>
                                <input type="text" class="form-control" id="edit_jabatan" name="edit_jabatan"
                                    value="{{ $item->jabatan }}">
                            </div>
                            <div class="form-group">
                                <label for="edit_foto">Foto</label>
                                <input type="file" class="form-control" id="edit_foto" name="edit_foto">
                            </div>
                            <!-- Tambahan inputan lain sesuai kebutuhan -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>

    {{-- sweetalert --}}
    <script src="
                https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js
                "></script>
    @if (session('message'))
        <script>
            Swal.fire({
                timer: 2000,
                icon: '{{ session('icon') }}',
                title: '{{ session('title') }}',
                text: '{{ session('message') }}',
            });
        </script>
    @endif
    <!-- Tambahkan Axios library jika belum ada -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    {{-- <script>
    document.getElementById('addDirkomForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Menghentikan submit form standart
        const form = event.target;
        const formData = new FormData(form);

        axios.post(form.action, formData)
            .then(response => {
                // Tampilkan notifikasi sukses
                document.getElementById('notification').innerHTML = `
                    <div class="alert alert-success" role="alert">
                        ${response.data.message}
                    </div>
                `;
                form.reset(); // Clear form setelah berhasil
            })
            .catch(error => {
                // Tampilkan notifikasi kesalahan
                if (error.response.data.errors) {
                    const errors = Object.values(error.response.data.errors).join('<br>');
                    document.getElementById('notification').innerHTML = `
                        <div class="alert alert-danger" role="alert">
                            ${errors}
                        </div>
                    `;
                } else {
                    document.getElementById('notification').innerHTML = `
                        <div class="alert alert-danger" role="alert">
                            ${error.response.data.message}
                        </div>
                    `;
                    window.location.reload();
                }
            });
    });
</script> --}}
@endsection

@section('script')
    @if ($errors->has('pdf'))
        <script>
            $(document).ready(function() {
                $('#Add_dirkom').modal('show');
            });
        </script>
    @endif
@endsection
