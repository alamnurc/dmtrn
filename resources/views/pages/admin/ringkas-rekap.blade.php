{{-- untuk pake template home --}}
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
      <h1 class="text-center">Ringkasan Rekap Tugas Harian</h1>
      <br>
        <div class="table-responsive">
          <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                            <tr class="text-center">
                           
                                <th>No</th>
                                <th>Nama</th>
                                <th>Judul Tugas</th>
                                <th>Tanggal</th>
                                <th>Rekap</th>
                                <th>File</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        
                            @forelse ($items as $item)
                                <tr>
                            
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{ $item->rekap }}</td>
                                    <td>{{ $item->file }}</td>
                                    
                                        {{-- <a href="{{ route('tugas.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a> --}}
                                    {{--  <form action="{{ route('tugas.destroy', $item->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>  --}}
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

  {{--  //Pagination
  Current Page: {{ $id->currentPage() }}<br>
  Jumlah Data: {{ $id->total() }}<br>
  Data perhalaman: {{ $id->perPage() }}<br>
  <br>
  {{ $id->links() }}  --}}
</div>



@endsection