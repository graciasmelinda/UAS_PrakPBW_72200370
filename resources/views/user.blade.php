@extends('layout.main')
@section('title', 'Mahasiswa')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- <div class="col-lg-12 bg-primary py-4"> -->
            <!-- <div class="dropdown float-right">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class=" bi bi-person-square" href="#"> {{ Auth::user()->nama_user ?? '' }}</i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/user">Data Pengguna</a>
                    <a class="dropdown-item" href="/logout">Keluar</a>
                </div>
            </div> -->
        <!-- </div> -->
    </div>
    <!-- <div class="row">
        <div class="col-lg-2 vh-100">
            <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">Home</a>
                <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill"
                    href="#v-pills-profile">Mahasiswa</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">Dosen</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Matakuliah</a>
            </div> -->
        </div>
        <div class="col-lg-10 vh-100">
            <div class="card mt-4">
                <div class="card-header">
                    <a name="" class="btn btn-primary" href="/user/formuser" role="button"><i
                            class="bi bi-plus-square-fill"></i> ADD PENGGUNA</a>
                    <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/cari">
                        <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                @if (session('alertcreate'))
                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                    <strong>{{ session('alertcreate') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @elseif (session('alertedit'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>{{ session('alertedit') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @elseif (session('alertdelete'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('alertdelete') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $no => $u)
                            <tr>
                                <th scope="row">{{$user->firstItem()+$no}}</th>
                                <td>{{$u->nik_user}}</td>
                                <td>{{$u->nama_user}}</td>
                                <td>{{$u->email}}</td>
                                <td>{{$u->no_hp}}</td>
                                <td>
                                    <a href="/user/edituser/{{$u -> id}}" class="btn btn-outline-success"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <a href="/user/hapususer/{{$u -> id}}" class="btn btn-outline-danger"><i
                                            class="bi bi-trash"
                                            onclick="return confirm('Anda yakin ingin menghapus data ini?')"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <span class="float-right">{{$user->links()}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection