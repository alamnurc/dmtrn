{{-- untuk pake template home --}}
@extends('layouts.izin')

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
          <h1 class="h3 mb-0 text-gray-800">Izin</h1>
          <a href="{{ route('izin.create')}}" class="btn btn-sm btn-user shadow-sm">
              <i class="uil uil-plus text">Ajukan Izin</i>
          </a>
      </div>

      <div class="row">
          <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Dari Tanggal</th>
                            <th>Jam</th>
                            <th>Sampai Tanggal</th>
                            <th>Jam</th>
                            <th>Keperluan</th>
                            <th>Status</th>                      
                            <th>Action</th>                      
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($izins as $izin)
                      <tr>
                          <td>{{ $izin->id }}</td>
                          <td>{{ $izin->nama }}</td>
                          <td>{{ $izin->tanggalMulai }}</td>
                          <td>{{ $izin->jamMulai }}</td>
                          <td>{{ $izin->tanggalSelesai }}</td>
                          <td>{{ $izin->jamSelesai }}</td>
                          <td>{{ $izin->keperluan }}</td>
                          <td>{{ $izin->status }}</td>
                          <td>
                              {{-- <a href="{{ route('tugas.edit', $item->id) }}" class="btn btn-info">
                                  <i class="fa fa-pencil-alt"></i>
                              </a> --}}
                          </td>
                            
                      </tr>
                  {{-- @empty
                      <tr>
                          <td colspan="7" class="text-center">
                              Data Kosong
                          </td>
                      </tr> --}}
                  @endforeach
            </tbody>
                </table>
              </div>
          </div>
      </div>
  </div>
  @endsection