@extends('layout.main')
@section('title', 'Mahasiswa')
@section('content')
<div class="col-lg-10 vh-100">
    <div class="card mt-4">
        <div class="card-header">
            <!-- <a name="" class="btn btn-primary" href="/mahasiswa/formmhs" role="button"><i class="bi bi-plus-square-fill"></i> ADD MAHASISWA</a>
                      <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/cari">
                        <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                      </form> -->
        </div>
        <div class="card-body">
            <div class="container-fluid rounded mt-4">
                @php
                $bidang_minat = explode(',',$mahasiswa->bidang_minat);
                @endphp
                <form action="/mahasiswa/updatemhs/{{ $mahasiswa->id }}" method="POST" class="pt-2 pb-2">
                    @csrf
                    @method('PUT')
                    <div class="form-group w-25">
                        <label>NIM</label>
                        <input type="number" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" readonly>
                    </div>
                    <div class="form-group w-25">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
                    </div>
                    <label>Gender</label>
                    <div class="form-check w-25">
                        <input type="radio" name="gender" value="Laki-laki"
                            {{ $mahasiswa->gender == 'Laki-laki' ? 'checked':''}} class="form-check-input">
                        <label>Laki-laki</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="radio" name="gender" value="Perempuan"
                            {{ $mahasiswa->gender == 'Perempuan' ? 'checked':''}} class="form-check-input">
                        <label>Perempuan</label>
                    </div>
                    <div class="form-group w-25">
                        <label>Jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option value="0">-Pilih Jurusan-</option>
                            <option value="Sistem Informasi"
                                {{ $mahasiswa->jurusan == 'Sistem Informasi' ? 'selected':''}}>-Sistem
                                Informasi-</option>
                            <option value="Pendidikan Bahasa Inggris"
                                {{ $mahasiswa->jurusan == 'Pendidikan Bahasa Inggris' ? 'selected':''}}>
                                -Pendidikan Bahasa Inggris-</option>
                            <option value="Kedokteran" {{ $mahasiswa->jurusan == 'Kedokteran' ? 'selected':''}}>
                                -Kedokteran-
                            </option>
                            <option value="Arsitektur" {{ $mahasiswa->jurusan == 'Arsitektur' ? 'selected':''}}>
                                -Arsitektur-
                            </option>
                            <option value="Informatika" {{ $mahasiswa->jurusan == 'Informatika' ? 'selected':''}}>
                                -Informatika-
                            </option>
                        </select>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="Teknologi dan Rekayasa"
                            {{ in_array('Teknologi dan Rekayasa', $bidang_minat) ? 'checked':'' }}
                            class="form-check-input">
                        <label>Teknologi dan Rekayasa</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="Pendidikan"
                            {{ in_array('Pendidikan', $bidang_minat) ? 'checked':'' }} class="form-check-input">
                        <label>Pendidikan</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="Humaniora"
                            {{ in_array('Humaniora', $bidang_minat) ? 'checked':'' }} class="form-check-input">
                        <label>Humaniora</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="MIPA"
                            {{ in_array('MIPA', $bidang_minat) ? 'checked':'' }} class="form-check-input">
                        <label>MIPA</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="Desain dan Seni"
                            {{ in_array('Desain dan Seni', $bidang_minat) ? 'checked':'' }} class="form-check-input">
                        <label>Seni dan Desain</label>
                    </div>
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
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>

</html>