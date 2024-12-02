@extends('SideBar.navbar', ['title' => 'Edit Data Siswa'])
@section('content')
    <div class="card">
        <div class="card-body">
            <center>
                <h5 class="card-header">Edit Data Siswa</h5>
            </center>
            <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')  <!-- Method PUT untuk update -->

                <!-- Input NISN -->
                <div class="form-group mt-1 mb-3">
                    <label for="nisn"><b>NISN</b></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">
                                <i class="bi bi-person"></i>
                            </span>
                        </div>
                        <input type="text"
                               class="form-control @error('nisn') is-invalid @enderror"
                               id="nisn" name="nisn" value="{{ old('nisn', $siswa->nisn) }}">
                    </div>
                    <span class="text-danger">{{ $errors->first('nisn') }}</span>
                </div>

                <!-- Input Nama -->
                <div class="form-group mt-1 mb-3">
                    <label for="nama"><b>Nama</b></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">
                                <i class="bi bi-person"></i>
                            </span>
                        </div>
                        <input type="text"
                               class="form-control @error('nama') is-invalid @enderror"
                               id="nama" name="nama" placeholder="Masukkan nama lengkap" value="{{ old('nama', $siswa->nama) }}">
                    </div>
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                </div>

                <!-- Input Kelas -->
                <div class="form-group mt-1 mb-3">
                    <label for="kelas"><b>Kelas</b></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">
                                <i class="bi bi-building"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror"
                               id="kelas" name="kelas" placeholder="Masukkan kelas" value="{{ old('kelas', $siswa->kelas) }}">
                    </div>
                    <span class="text-danger">{{ $errors->first('kelas') }}</span>
                </div>

                <!-- Input Username -->
                <div class="form-group mt-1 mb-3">
                    <label for="username"><b>Username</b></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">
                                <i class="bi bi-person-circle"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username"
                               placeholder="Masukkan username" value="{{ old('username', $siswa->username) }}">
                    </div>
                    <span class="text-danger">{{ $errors->first('username') }}</span>
                </div>

                <!-- Input Password -->
                <div class="form-group mt-1 mb-3">
                    <label for="password"><b>Password</b></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">
                                <i class="bi bi-lock"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" placeholder="Masukkan password">
                    </div>
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                </div>

                <!-- Input Foto -->
                <div class="form-group mt-1 mb-3">
                    <label for="foto"><b>Foto</b></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">
                                <i class="bi bi-camera"></i>
                            </span>
                        </div>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto">
                    </div>
                    <span class="text-danger">{{ $errors->first('foto') }}</span>
                    @if ($siswa->foto)
                        <img src="{{ Storage::url($siswa->foto) }}" alt="Foto Siswa" class="img-thumbnail mt-2"
                        style="width: 100px">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">UPDATE</button>
            </form>
        </div>
    </div>
@endsection