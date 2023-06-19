{{--  Rekap Tugas  --}}
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
        <button
        type="button"
        class="w-100 btn btn-lg btn-user"
        data-bs-toggle="modal"
        data-bs-target="#staticBackdrop"
        >Rekap</button>
            
        {{--  <!--Modal Rekap-->  --}}
        <div
        class="modal fade"
        id="staticBackdrop"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true"
        >
        <div class="modal-dialog text-left">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Rekap Tugas</h1>
                <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <ul>
                <li>
                    <span class="title-profil">Judul</span>
                    <div class="card">
                    <input
                        class="form-control"
                        id=""
                        style="border: 0px"
                        type="text"
                    />
                    </div>
                </li>
                <li>
                    <label class="title-profil" for="date"
                    >Tanggal</label
                    >
                    <div class="card">
                    <div class="input-group date" id="datepicker">
                        <input
                        class="form-control"
                        id="date"
                        style="border: 0px"
                        type="datetime-local"
                        />
                        <span class="input-group-append">
                        {{--  <span
                            class="input-group-text bg-light d-block"
                        >
                            <i class="fa fa-calendar"></i>
                        </span>  --}}
                        </span>
                    </div>
                    </div>
                </li>
                <li>
                    <span class="title-profil">Rekap Tugas</span>
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
                <li>
                    <span class="title-profil">File</span>
                    <div class="card">
                    <div class="input-group">
                        <input
                        class="form-control"
                        id="#"
                        style="border: 0px"
                        type="file"
                        />
                        <span class="input-group-append">
                        <span
                            class="input-group-text bg-light d-block"
                        >
                            <i class="fa fa-file"></i>
                        </span>
                        </span>
                    </div>
                    </div>
                </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button
                data-bs-toggle="modal"
                data-bs-target="#freeFeedback"
                type="button"
                class="btn btn-user px-4 mt-4"
                >
                Selesai
                </button>
            </div>
            </div>
        </div>
        </div>
        {{--  <!--Modal Rekap-->  --}}

        {{--  <!--Modal Rekap Feedback-->  --}}
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
                <h1
                class="modal-title fs-5"
                id="staticBackdropLabel"
                >
                Rekap Tugas anda telah terekam
                </h1>
                <!--<button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                ></button>-->
            </div>
            <div class="modal-body">
                <span>
                Terima kasih telah melakukan Rekap Tugas izin pada
                :
                </span>
                <span id="getFeedback"></span>
            </div>
            <div class="modal-footer">
                <a href="{{route('tugas')}}" class=""
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
        {{--  <!--Modal Rekap Feedback-->  --}}
      

      </div>
    </div>
  </div>
{{--  Rekap Tugas  --}}

{{--  Daftar Rekap  --}}


<div class="col">
<div class="card mb-4 rounded-3 shadow-sm">
    <div class="card-header py-3">
        <h4 class="my-0 fw-normal">Daftar Rekap Tugas</h4>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <p class="list-unstyled mt-3 mb-4">
                Anda dapat melihat daftar tugas yang pernah <br />
                anda kerjakan sebelumnya!
            </p>

        <!--Button Trigger List Rekap-->
        <button
          type="button"
          class="w-100 btn-lg btn btn-user"
          data-bs-toggle="modal"
          data-bs-target="#DetailTugas"
        >
          Daftar Rekap
        </button>

        {{--  <!--Modal-->  --}}
            <div
            class="modal fade"
            id="DetailTugas"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true"
            >
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1
                    class="modal-title fs-5"
                    id="staticBackdropLabel"
                    >
                    Daftar Rekap Tugas
                    </h1>
                    <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="list-group">
                    <button
                        type="button"
                        class="list-group-item list-group-item-action"
                        aria-current="true"
                        data-bs-toggle="modal"
                        data-bs-target="#tugasPertama"
                    >
                        Tugas Pertama
                    </button>

                    <button
                        type="button"
                        class="list-group-item list-group-item-action"
                    >
                        Tugas Kedua
                    </button>
                    <button
                        type="button"
                        class="list-group-item list-group-item-action"
                    >
                        Tugas Ketiga
                    </button>
                    <button
                        type="button"
                        class="list-group-item list-group-item-action"
                    >
                        Tugas Keempat
                    </button>
                    <button
                        type="button"
                        class="list-group-item list-group-item-action"
                    >
                        Tugas Kelima
                    </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                        <a
                            class="page-link"
                            href="#"
                            aria-label="Previous"
                        >
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                        </li>
                        <li class="page-item">
                        <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                        <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                        <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                        <a
                            class="page-link"
                            href="#"
                            aria-label="Next"
                        >
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                        </li>
                    </ul>
                    </nav>
                </div>
                </div>
            </div>
            </div>
        {{--  <!--Modal-->

        <!--Modal Detail Tugas-->  --}}
            <div
            class="modal fade"
            id="tugasPertama"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="tugasPertamaLabel"
            aria-hidden="true"
            >
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tugasPertamaLabel">
                    Tugas Pertama
                    </h1>
                    <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <ul>
                    <li>
                        <span class="title-profil">Judul</span>
                        <div class="card">
                        <div class="card-body">
                            <span id="#">Tugas Pertama</span>
                        </div>
                        </div>
                    </li>
                    <li>
                        <span class="title-profil">Tanggal</span>
                        <div class="card">
                        <div class="card-body">
                            <span id="#">27 Maret 2023</span>
                        </div>
                        </div>
                    </li>
                    <li>
                        <span class="title-profil">Rekap Tugas</span>
                        <div class="card">
                        <div class="card-body">
                            <span id="#" style="text-align: justify"
                            >Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis
                            aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint
                            occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id
                            est laborum.</span
                            >
                        </div>
                        </div>
                    </li>
                    <li>
                        <span class="title-profil">File</span>
                        <div class="card">
                        <div class="card-body">
                            <span id="#" style="margin-right: 3px"
                            >Nama File tugas.pdf</span
                            >
                            <span
                            class="bx bxs-download"
                            style="
                                margin-left: auto;
                                margin-right: 10px;
                            "
                            ></span>
                        </div>
                        </div>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        {{--  <!--Modal Detail Tugas-->  --}}
        
    </div>
</div>
</div>
</div>
</div>





{{--  <div class="col">
<div class="card mb-4 rounded-3 shadow-sm">
    <div class="card-header py-3">
        <h4 class="my-0 fw-normal">Daftar Rekap Tugas</h4>
    </div>
    <div class="card-body">
        <ul class="list-unstyled mt-3 mb-4">
            <br>
            <li>Anda dapat melihat daftar tugas yang pernah anda kerjakan sebelumnya!</li>
            <br>
        </ul>
        <a href="{{route('izin')}}" type="button" class="w-100 btn btn-lg btn-user">Lihat</a>
    </div>
    
</div>
</div>   --}}
</div>
<!-- /.container-fluid -->

{{--  Daftar Rekap  --}}

