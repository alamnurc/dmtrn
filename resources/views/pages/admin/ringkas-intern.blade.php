@extends('layouts.ringkasan')

@section('content')

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
  crossorigin="anonymous"
></script>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-md-center mb-4">
      <div class="col">
      <br>
      <h1 class="text-center">Ringkasan Data Pemagang</h1>
      <br>
        <div class="table-responsive">
          <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                  <tr class="text-center">
               
                      <th>No</th>
                      <th>Nama</th>
                      <th>Durasi Magang/PKL</th>
                      <th>Status</th>
                      <th>Action</th>                      
                  </tr>
              </thead>
              <tbody>
                @forelse ($items as $item)
                  <tr>
                      <td>{{ $item->id }}</td>               
                      <td>{{ $item->name}}</td>
                      <th></th>
                      <th></th>
                      <th></th>                      
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

@endsection