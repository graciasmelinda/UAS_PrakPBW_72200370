<html lang="en">

<head>
    <title>DATABASE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 bg-primary py-4">
                <div class="dropdown float-right">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class=" bi bi-person-square" href="#"> {{ Auth::user()->nama_user ?? '' }}</i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <!-- <a class="dropdown-item" href="#">Gracia Melinda</a> -->
                        <a class="dropdown-item" href="/user">Data Pengguna</a>
                        <a class="dropdown-item" href="/logout">Keluar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-2 vh-100">
                <div class="nav flex-column nav-pills mt-4" role="tablist" aria-orientation="vertical">
                    <a class="text-blue nav-link rounded-0 p-2  {{ ($cek ?? '' === 'home') ? 'active':'' }}"
                        href="/">Home</a>
                    <a class="text-blue nav-link rounded-0 p-2  {{ ($cek ?? '' === 'mahasiswa') ? 'active':'' }}"
                        href="/mahasiswa">Mahasiswa</a>
                    <a class="text-blue nav-link rounded-0 p-2  {{ ($cek ?? '' === 'dosen') ? 'active':'' }}"
                        href="/dosen">Dosen</a>
                    <a class="text-blue nav-link rounded-0 p-2  {{ ($cek ?? '' === 'matakuliah') ? 'active':'' }}"
                        href="/matakuliah">Matakuliah</a>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-12 vh-100 mt-2 text-left text-dark">
                @yield('content')
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