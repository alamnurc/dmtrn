{{-- untuk pake template home --}}
@extends('layouts.home')

{{-- memanggil yield dari home --}}
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">     
            <h1 class="h3 mb-0 text-gray-800" id="greetings">, {{ Auth::user()->name }}</h1>            
        
            <div class="head-title">
                <div class="right">              
                  <h2 class="dash-right">
                    <div class="date">Monday May 25, 2035</div>
                  </h2>
                  <h3>
                    <div class="digital-time-dash">
                      <div class="time">
                        <span class="hours">00</span>
                        <span>:</span>
                        <span class="minutes">00</span>
                        <span>:</span>
                        <span class="seconds">00</span>
                        <span class="period">AM</span>
                      </div>
                    </div>
                  </h3>
                </div>
              </div>
            </div>

        <!-- Content Row -->
        {{--  USER PAGE  --}}
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          @if (Auth::user()->role=='0')
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Rekap Tugas</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <br>
                        <li>Anda dapat mengisi rekap tugas hari ini!</li>
                        <br>
                    </ul>
                    <a href="{{route('tugas')}}" type="button" class="w-100 btn btn-lg btn-user">Rekap</a>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Presensi</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <br>
                        <li>Anda dapat mengisi presensi hari ini!</li>
                        <br>
                    </ul>
                    <a href="{{route('presensi')}}" type="button" class="w-100 btn btn-lg btn-user">Presensi</a>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Izin</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <br>
                        <li>Anda dapat mengajukan izin.</li>
                        <br>
                    </ul>
                    <a href="{{route('izin')}}" type="button" class="w-100 btn btn-lg btn-user">Ajukan</a>
                  </div>
                </div>
              </div>
            </div>
            @endif
{{--  END USER PAGE  --}}

            {{--  ADMIN PAGE  --}}
            @if (Auth::user()->role=='1')
     
              
                
                  <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
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
         
            
      
            @endif
            {{--  END ADMIN PAGE  --}}
    </div>
    <!-- /.container-fluid -->

    <p id="greetings"></p>

    <script>
        const time = new Date().getHours();
        let greeting;
        if (time < 12) {
            greeting = "Selamat Pagi";
        } else if (time < 17) {
            greeting = "Selamat Siang";
        } else {
            greeting = "Selamat Sore";
        }
        document.getElementById("greetings").innerHTML = greeting;
    </script>

@endsection