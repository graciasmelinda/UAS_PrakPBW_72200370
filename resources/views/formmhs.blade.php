@extends('layout.main')
@section('title', 'Mahasiswa')
@section('content')
<div class="col-lg-10 vh-100">
    <div class="card mt-4">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="container-fluid rounded mt-4">
                <form action="/mahasiswa/simpanmhs" method="POST" class="pt-2 pb-2">
                    @csrf
                    <div class="form-group w-25">
                        <label>NIM</label>
                        <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM" required>
                    </div>
                    <div class="form-group w-25">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                    </div>
                    <label>Gender</label>
                    <div class="form-check w-25">
                        <input type="radio" name="gender" value="Laki-laki" class="form-check-input">
                        <label>Laki-laki</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="radio" name="gender" value="Perempuan" class="form-check-input">
                        <label>Perempuan</label>
                    </div>
                    <div class="form-group w-25">
                        <label>Jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option value="0">-Pilih Jurusan-</option>
                            <option value="Sistem Informasi">-Sistem Informasi-</option>
                            <option value="Pendidikan Bahasa Inggris">-Pendidikan Bahasa Inggris-</option>
                            <option value="Kedokteran">-Kedokteran-</option>
                            <option value="Arsitektur">-Arsitektur-</option>
                            <option value="Informatika">-Desain Produk-</option>
                        </select>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="Teknologi dan Rekayasa"
                            class="form-check-input">
                        <label>Teknologi dan Rekayasa</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="Pendidikan" class="form-check-input">
                        <label>Pendidikan</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="Humaniora" class="form-check-input">
                        <label>Humaniora</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="MIPA" class="form-check-input">
                        <label>MIPA</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="Desain dan Seni" class="form-check-input">
                        <label>Seni dan Desain</label>
                    </div>
                    <div class="form-group w-25 mt-4">
                        <input type="submit" value="simpan" class="btn btn-outline-primary">
                    </div>
                </form>
            </div>
            @endsection