@extends('layout.main')
@section('title', 'Mahasiswa')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- <div class="col-lg-12 bg-primary py-4"></div> -->
    </div>
    <div class="col-lg-10 vh-100">
        <div class="card mt-4">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="container-fluid rounded mt-4">
                    <form action="/user/updateuser/{{ $user->id }}" method="POST" class="pt-2 pb-2">
                        @csrf
                        @method('PUT')
                        <div class="form-group w-25">
                            <label>NIK</label>
                            <input type="text" name="nik_user" class="form-control" value="{{ $user->nik_user }}"
                                required>
                        </div>
                        <div class="form-group w-25">
                            <label>Nama</label>
                            <input type="text" name="nama_user" class="form-control" value="{{ $user->nama_user }}"
                                required>
                        </div>
                        <div class="form-group w-25">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group w-25">
                            <label>No HP</label>
                            <input type="number" name="no_hp" class="form-control" value="{{ $user->no_hp }}" required>
                        </div>
                        <!-- <div class="form-group w-25">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control"
                                placeholder="Masukkan Password Pengguna" value="{{ $user->password }}" required>
                        </div> -->
                        <div class="form-group w-25 mt-4">
                            <input type="submit" value="simpan" class="btn btn-outline-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection