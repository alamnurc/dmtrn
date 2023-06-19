{{-- untuk pake template home --}}
@extends('layouts.presensi')

@section('content')

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
  crossorigin="anonymous"
></script>

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Content Row -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Presensi</h1>
          <a href="{{ route('presensi.create')}}" class="btn btn-sm btn-user shadow-sm">
              <i class="uil uil-plus text">Rekam Presensi</i>
          </a>
      </div>

      <div class="row">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Nama</th>
                              <th>Tanggal</th>
                              <th>Jam Presensi</th>
                              <th>Jenis Presensi</th>
                              {{-- <th>Action</th> --}}
                          </tr>
                      </thead>
                      <tbody>
                          @forelse ($items as $item)
                              <tr>
                                  <td>{{ $item->id }}</td>
                                  <td>{{ $item->nama }}</td>
                                  <td>{{ $item->tanggal }}</td>
                                  <td>{{ $item->jamPresensi }}</td>
                                  <td>{{ $item->jenisPresensi }}</td>
                                      {{-- <a href="{{ route('tugas.edit', $item->id) }}" class="btn btn-info">
                                          <i class="fa fa-pencil-alt"></i>
                                      </a> --}}
                                    {{-- <form action="{{ route('presensi.destroy', $item) }}" method="post" class="d-inline">
                                      @csrf
                                      @method('delete')
                                      <button class="btn btn-danger">
                                          <i class="fa fa-trash"></i>
                                      </button>
                                  </form> --}}
                              </tr>
                          @empty
                              <tr>
                                  <td colspan="7" class="text-center">
                                      Data Kosong
                                  </td>
                              </tr>
                          @endforelse
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
@endsection