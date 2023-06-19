{{-- untuk pake template tugas --}}
@extends('layouts.presensi')

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
            <h1 class="h3 mb-0 text-gray-800">Rekam Presensi</h1>
            <a href="{{ route('presensi')}}" class="btn btn-sm btn-user shadow-sm">
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
                <form action="{{ route('presensi.store') }}" method="post">
                    @csrf
                    {{-- <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" class="form-control" name="id" placeholder="Id" value="{{ old('id') }}">
                    </div> --}}
                    <div class="form-group">
                        <label for="tanggal">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ Auth::user()->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{ old('tanggal') }}">
                    </div>
                    <div class="form-group">
                        <label for="jamPresensi">Jam Presensi</label>
                        <input type="time" class="form-control" name="jamPresensi" placeholder="Jam Presensi" value="{{ old('jamPresensi') }}">
                    </div>
                    <div class="form-group">
                        <label for="jenisPresensi">Jenis Presensi</label>
                        <!-- <input type="text" class="form-control" name="jenisPresensi" placeholder="Jenis Presensi" value="{{ old('jenisPresensi') }}"> -->
                        <select name="jenisPresensi" id="" class="form-control form-select-lg mb-3">
                            <option selected value="">Jenis Presensi</option>
                            <option value="Pagi">Pagi</option>
                            <option value="Sore">Sore</option>
                        </select>                    
                        
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>

    </div>

    
@endsection

