{{-- untuk pake template home --}}
@extends('layouts.ringkasan')

@section('content')

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
  crossorigin="anonymous"
></script>

<!-- Begin Page Content -->

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-md-center mb-4">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">+
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Ringkasan Tugas</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb4">
              <br><li>Anda dapat melihat ringkasan rekap tugas disini</li>
              <br>
            </ul>
            <a href="{{route('ringkas-rekap')}}" class="w-100 btn btn-user btn-lg">Lihat Ringkasan</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Ringkasan Presensi</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb4">
              <br><li>Anda dapat melihat ringkasan Presensi disini</li>
              <br>
            </ul>
            <a href="{{route('ringkas-presensi')}}" class="w-100 btn btn-user btn-lg">Lihat Ringkasan</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Ringkasan Izin</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb4">
              <br><li>Anda dapat melihat ringkasan pengajuan izin disini</li>
              <br>
            </ul>
            <a href="{{route('ringkas-izin')}}" class="w-100 btn btn-user btn-lg">Lihat Ringkasan</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- /.container-fluid -->

@endsection