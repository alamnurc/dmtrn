{{-- untuk pake template tugas --}}
@extends('layouts.izin')

@section('content')


<!--bootstrap-->

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
  crossorigin="anonymous"
></script>


<!-- My CSS -->
{{-- <link rel="stylesheet" href="assets/css/style2.css" /> --}}

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Content Row -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ajukan Izin</h1>
            <a href="{{ route('izin')}}" class="btn btn-sm btn-user shadow-sm">
                <i class="uil uil-arrow-left text">Kembali</i>
            </a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('izin.store') }}" method="post">
                    @csrf
                    {{-- <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" class="form-control" name="id" placeholder="Id" value="{{ old('id') }}">
                    </div> --}}
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ Auth::user()->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tanggalMulai">Tanggal Mulai</label>
                        <input type="date" class="form-control" name="tanggalMulai" placeholder="Tanggal Mulai" value="{{ old('tanggalMulai') }}">
                    </div>
                    <div class="form-group">
                        <label for="jamMulai">Jam Mulai</label>
                        <input type="time" class="form-control" name="jamMulai" placeholder="Jam Mulai" value="{{ old('jamMulai') }}">
                    </div>
                    <div class="form-group">
                        <label for="tanggalSelesai">Tanggal Selesai</label>
                        <input type="date" class="form-control" name="tanggalSelesai" placeholder="Tanggal Selesai" value="{{ old('tanggalSelesai') }}">
                    </div>
                    <div class="form-group">
                        <label for="jamSelesai">Jam Selesai</label>
                        <input type="time" class="form-control" name="jamSelesai" placeholder="Jam Selesai" value="{{ old('jamSelesai') }}">
                    </div>
                    <div class="form-group">
                        <label for="keperluan">Keperluan</label>
                        <input type="text" class="form-control" name="keperluan" placeholder="Keperluan" value="{{ old('keperluan') }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control " name="status" placeholder="Status" id="status" value="{{ old('status') }}">
                    </div>
                    <button class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>

    </div>

    
@endsection

