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
        <div class="row row-cols-1 row-cols-md-3 mb-3 justify-content-md-center text-center">

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Presensi</h4>
                  </div>
                  <div class="card-body">
                    <div class="digital-time-pres">
                      <div class="time">
                        <span class="hours">00</span>
                        <span>:</span>
                        <span class="minutes">00</span>
                        <span>:</span>
                        <span class="seconds">00</span>
                        <span class="period">AM</span>
                      </div>
                      <div class="date">Monday May 25, 2035</div>
                    </div>
                    <br>
                    <form class="jns-presensi">
                      <select id="#">
                        <option value="choosepresensi">Jenis Presensi</option>
                        <option value="checkin">Presensi Pagi</option>
                        <option value="checkout">Presensi Sore</option>
                      </select>
                    </form>
                    <br>
                    <button
                    type="button"
                    class="w-100 btn btn-lg btn-user"
                    data-bs-toggle="modal"
                    data-bs-target="#freeFeedback"
                    >Presensi</button>
                        
                    

                    {{--  <!--Modal Presensi Feedback-->  --}}
                    <div
                    class="modal fade"
                    id="freeFeedback"
                    data-bs-backdrop="static"
                    data-bs-keyboard="false"
                    tabindex="-1"
                    aria-labelledby="staticBackdropLabel"
                    aria-hidden="true"
                    >
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h3
                            class="modal-title fs-5"
                            id="staticBackdropLabel"
                            >
                            Presensi anda telah terekam
                            </h3>
                            {{--  <!--<button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                            ></button>-->  --}}
                        </div>
                        <div class="modal-body">
                            <span>
                            Terima kasih telah melakukan Presensi pada
                            :
                            </span>
                            <span id="getFeedback"></span>
                        </div>
                        <div class="modal-footer">
                            <a href="{{route('presensi')}}" class=""
                            ><button
                                id="#"
                                type="button"
                                class="btn btn-user px-4 mt-4"
                            >
                                Selesai
                            </button></a
                            >
                        </div>
                        </div>
                    </div>
                    </div>
                    <!--Modal Rekap Feedback-->
                  
                  </div>
                </div>
              </div>
            </div>
    </div>
    <!-- /.container-fluid -->


@endsection

