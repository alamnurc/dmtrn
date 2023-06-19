{{-- untuk pake template home --}}
@extends('layouts.izin')

@section('content')

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
  crossorigin="anonymous"
></script>



<div
          {{--  class="w3-card"
          style="
            background-color: white;
            padding: 15px;
            margin-top: 30px;
            border-radius: 7px;
          "  --}}
        >
          <div class="container-fluid">
            <div class="row row-cols-1 row-cols-md-3 mb-3 justify-content-md-center text-center">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h5 class="text-center">Izin</h5>
                </div>
                
                <div class="card-body">
                  <div class="mb-3">
                    <br>
                    <p class="card-text">Anda dapat mengajukan izin disini</p>
<br>
                    {{--  <!-- Button trigger modal-->  --}}
                    <button
                    type="button"
                    class="w-100 btn btn-lg btn-user"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                    >Ajukan Izin</button>

                    {{--  <!--Modal-->  --}}
                    <div
                      class="modal fade"
                      id="staticBackdrop"
                      data-bs-backdrop="static"
                      data-bs-keyboard="false"
                      tabindex="-1"
                      aria-labelledby="staticBackdropLabel"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title fs-5"
                            id="staticBackdropLabel">Ajukan Izin</h3>
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="modal-body">
                            <ul>
                              <!--<li>
                                <label class="title-profil" for="date"
                                  >Tanggal</label
                                >
                                <div class="card">
                                  <div class="input-group date" id="datepicker">
                                    <input
                                      class="form-control"
                                      id="date"
                                      style="border: 0px"
                                      type="text"
                                    />
                                    <span class="input-group-append">
                                      <span
                                        class="input-group-text bg-light d-block"
                                      >
                                        <i class="fa fa-calendar"></i>
                                      </span>
                                    </span>
                                  </div>
                                </div>
                              </li>-->
                              <li>
                                <label class="title-profil" for="time"
                                  >Tanggal dan Waktu</label
                                >
                                <div class="card">
                                  <div class="input-group time" id="timepicker">
                                    {{--  <!--Dari Jam-->  --}}
                                    <input
                                      class="form-control"
                                      id="time"
                                      style="border: 0px"
                                      type="datetime-local"
                                      placeholder="Dari tanggal dan jam"
                                    />
                                  </div>
                                </div>
                                <div class="card" style="margin-top: 5px">
                                  <div class="input-group time" id="timepicker">
                                    <!--Sampai Jam-->
                                    <input
                                      class="form-control"
                                      id="time"
                                      style="border: 0px"
                                      type="datetime-local"
                                      placeholder="Sampai tanggal dan jam"
                                    />
                                  </div>
                                </div>
                              </li>
                              <li>
                                <span class="title-profil">Keperluan</span>
                                <div class="card">
                                  <textarea
                                    id="#"
                                    style="
                                      text-align: justify;
                                      border: 0px;
                                      min-height: 30px;
                                    "
                                  ></textarea>
                                </div>
                              </li>
                            </ul>
                          </div>
                          <div class="modal-footer">
                            {{--  <!--button feedback trigger modal-->  --}}
                            <button
                              data-bs-toggle="modal"
                              data-bs-target="#freeFeedback"
                              type="button"
                              class="w-100 btn btn-lg btn-user"
                            >
                              Ajukan Izin
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    {{--  <!--Modal-->  --}}

                    {{--  <!--Modal Feedback-->  --}}
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
                              Pengajuan Izin anda telah terekam
                            </h3>
                            <!--<button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>-->
                          </div>
                          <div class="modal-body">
                            <span>
                              Terima kasih telah melakukan pengajuan izin pada :
                            </span>
                            <span id="getFeedback"></span>
                          </div>
                          <div class="modal-footer">
                            <a href="{{route('izin')}}" class=""
                              ><button
                                type="button"
                                class="w-100 btn btn-lg btn-user"
                              >
                                Selesai
                              </button></a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    {{--  <!--Modal Feedback-->  --}}
                  </div>
                </div>
              </div>
              

            </div>
            
            <br>
            <!-- Divider -->
    <hr class="sidebar-divider my-0">
              <br>
              {{--  //table pengajuan izin user  --}}
              <div class="col">
              <br>
              <h2 class="text-center">Hasil Pengajuan Izin</h2>
              <br>
                <div class="table-responsive">
                  <table class="table table-bordered" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Nama</th>
                              <th>Dari Tanggal</th>
                              <th>Jam</th>
                              <th>Sampai Tanggal</th>
                              <th>Jam</th>
                              <th>Keperluan</th>
                              <th>Status</th>                      
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                      </tbody>
                  </table>
                </div>
              </div>
              {{--  //table pengajuan izin  --}}
          </div>
        </div>
        <!-- /.container-fluid -->


        @endsection