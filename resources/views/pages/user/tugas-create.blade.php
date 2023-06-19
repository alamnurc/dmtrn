{{-- untuk pake template tugas --}}
@extends('layouts.tugas')

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
            <h1 class="h3 mb-0 text-gray-800">Tambah Tugas</h1>
            <a href="{{ route('tugas')}}" class="btn btn-sm btn-user shadow-sm">
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
                <form action="{{ route('tugas.store') }}" method="post">
                    @csrf
                    {{-- <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" class="form-control" name="id" placeholder="Id" value="{{ old('id') }}">
                    </div> --}}
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{ old('judul') }}">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{ old('tanggal') }}">
                    </div>
                    <div class="form-group">
                        <label for="rekap">Rekap</label>
                        <textarea name="rekap" id="rekap" rows="10" class="d-block w-100 form-control">{{ old('rekap') }}</textarea>
                    </div>
                    <button class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection