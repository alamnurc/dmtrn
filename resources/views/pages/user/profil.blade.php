{{-- untuk pake template home --}}
@extends('layouts.profil')

@section('content')

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
  crossorigin="anonymous"
></script>

<div
class="w3-card"
style="
  background-color: white;
  padding: 15px;
  margin-top: 30px;
  border-radius: 7px;
"
>
<div class="container">
  <div class="row row-cols-1 row-cols-md-2 mb-2 justify-content-md-center">
    <div class="card mb-4 rounded-3 shadow-sm">
      <div class="card-header py-3">
        <h5 class="card-title text-center" >
          Profil
        </h5>
      </div>
      
      <div class="card-body">
        <div class="container">
          <div class="mb-3">
            <ul>
              <ul class="userProfile">
                <div class="row">
                  <div class="col ">
                    <img class="img-profile rounded-circle mx-auto d-block" style="max-width:180px; height:auto"
                    src="{{ url('backend/img/undraw_profile.svg')}}">
                  </div>
                </div>
              </ul>
              <ul>
                @forelse ($items as $item)                   
                
                <div class="row">
                  <div class="col text-center col-userProfil" id="#">
                    {{ Auth::user()->name }}
                    <span
                      class="uil uil-pen"
                      type="button"
                      data-bs-toggle="modal"
                      data-bs-target="#staticBackdrop"
                    ></span>
                  </div>
                </div>
              </ul>
              <ul class="text-center" id="statusKar">Internship</ul>
              <li>
                <span class="title-profil"> Tanggal Lahir</span>
                <div class="card">
                  <div class="card-body" id="#">
                    {{$item->tanggaLahir}}
                  </div>
                </div>
              </li>
              <li>
                <span class="title-profil"> Jenis Kelamin</span>
                <div class="card">
                  <div class="card-body" id="#">
                  {{$item->jenisKelamin}}
                  </div>
                </div>
              </li>
              <li>
                <span class="title-profil"> No Telepon</span>
                <div class="card">
                  <div class="card-body" id="#">
                    {{$item->noHP}}
                  </div>
                </div>
              </li>
              <li>
                <span class="title-profil"> Alamat</span>
                <div class="card">
                  <div class="card-body" id="#">
                  {{$item->alamat}}
                  </div>
                </div>
              </li>
              <li>
                <span class="title-profil"> Asal Instansi</span>
                <div class="card">
                  <div class="card-body" id="#">
                  {{$item->asalInstansi}}
                  </div>
                </div>
              </li>
              <li>
                <span class="title-profil"> Periode Magang</span>
                <div class="card">
                  <div class="card-body" id="#">
                  {{$item->periode}}
                  </div>
                </div>
              </li>
              <li>
                <span class="title-profil"> Mentor</span>
                <div class="card">
                  <div class="card-body" id="#">
                  {{$item->mentor}}
                  </div>
                </div>
              </li>
              <li>
                <span class="title-profil">Jurusan</span>
                <div class="card">
                  <div class="card-body" id="#">
                  {{$item->jurusan}}
                  </div>
                </div>
              </li>
              <li>
                <span class="title-profil">Semester/Kelas</span>
                <div class="card">
                  <div class="card-body" id="#">
                  {{$item->semesterKelas}}
                  </div>
                </div>
              </li>
              @empty
                      <tr>
                          <td colspan="7" class="text-center">
                              Data Kosong
                          </td>
                      </tr>
              @endforelse
            </ul>
            {{--  <a
              href="../index.html"
              class="btn btn-user px-4 mt-4"
              >Logout</a
            >  --}}
          </div>
        </div>
      </div>

      <!-- Modal -->

      <div
        class="modal fade"
        id="staticBackdrop"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">
                Edit Profil
              </h1>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <ul>
                    <li class="userProfile">
                      <div class="row">
                        <div class="col">
                          <img class="img-profile rounded-circle mx-auto d-block" style="max-width:180px; height:auto"
                    src="{{ url('backend/img/undraw_profile.svg')}}">
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="row">
                        <div class="col text-center col-userProfil">
                          {{ Auth::user()->name }}
                        </div>
                      </div>
                    </li>
                    <li>
                      <span class="title-profil"> Tanggal Lahir</span>
                      <div class="card">
                        <div
                          class="card-body form-control is-invalid disabled" id="#"
                          {{--  for="validationServer02"
                          id="validationServer02"
                          aria-describedby="validationServer02Feedback"
                          required  --}}
                        >
                        {{$item->tanggaLahir}}
                        </div>
                      </div>
                      {{--  <div
                        id="validationServer02Feedback"
                        class="invalid-feedback"
                      >
                        Tidak dapat mengganti Tanggal Lahir
                      </div>  --}}
                    </li>
                    <li>
                      <span class="title-profil"> Jenis Kelamin</span>
                      <div class="card">
                        <div
                          class="card-body form-control is-invalid disabled" id="#"
                          {{--  for="validationServer03"
                          id="validationServer03"
                          aria-describedby="validationServer03Feedback"
                          required  --}}
                        >
                        {{$item->jenisKelamin}}
                        </div>
                        {{--  <div
                          id="validationServer03Feedback"
                          class="invalid-feedback"
                        >
                          Tidak dapat mengganti Jenis Kelamin
                        </div>  --}}
                      </div>
                    </li>
                    <li>
                      <span class="title-profil"> Asal Instansi</span>
                      <div class="card">
                        <div
                          class="card-body form-control is-invalid disabled" id="#"
                          {{--  for="validationServer04"
                          id="validationServer04"
                          aria-describedby="validationServer04Feedback"
                          required  --}}
                        >
                        {{$item->asalInstansi}}
                        </div>
                        {{--  <div
                          id="validationServer04Feedback"
                          class="invalid-feedback"
                        >
                          Tidak dapat mengganti Asal Instansi
                        </div>  --}}
                      </div>
                    </li>
                    <li>
                      <span class="title-profil">Jurusan</span>
                      <div class="card">
                        <div
                          class="card-body form-control is-invalid disabled" id="#"
                          {{--  for="validationServer05"
                          id="validationServer05"
                          aria-describedby="validationServer03Feedback"
                          required  --}}
                        >
                        {{$item->jurusan}}
                        </div>
                        {{--  <div
                          id="validationServer05Feedback"
                          class="invalid-feedback"
                        >
                          Tidak dapat mengganti Jurusan
                        </div>  --}}
                      </div>
                    </li>
                    <li>
                      <span class="title-profil">Kelas/Semester</span>
                      <div class="card">
                        <div
                          class="card-body form-control is-invalid disabled" id="#"
                          {{--  for="validationServer06"
                          id="validationServer06"
                          aria-describedby="validationServer06Feedback"
                          required  --}}
                        >
                        {{$item->semesterKelas}}
                        </div>
                        {{--  <div
                          id="validationServer06Feedback"
                          class="invalid-feedback"
                        >
                          Tidak dapat mengganti Kelas/Semester
                        </div>  --}}
                      </div>
                    </li>
                    <li>
                      <span class="title-profil">
                        Periode Magang</span
                      >
                      <div class="card">
                        <div
                          class="card-body form-control is-invalid disabled" id="#"
                          {{--  for="validationServer07"
                          id="validationServer07"
                          aria-describedby="validationServer07Feedback"
                          required  --}}
                        >
                        {{$item->periode}}
                        </div>
                        {{--  <div
                          id="validationServer07Feedback"
                          class="invalid-feedback"
                        >
                          Tidak dapat mengganti Periode Magang
                        </div>  --}}
                      </div>
                    </li>
                    <li>
                      <span class="title-profil"> No Telepon</span>
                      <div class="card">
                        <input
                          id="#"
                          type="text"
                          class="form-control"
                          value="082101234567"
                        />
                      </div>
                    </li>
                    <li>
                      <span class="title-profil"> Alamat</span>
                      <div class="card">
                        <input
                          id="#"
                          type="text"
                          class="form-control"
                          value="Jl Ringroad Barat, Tamantirto, Kasihan, Bantul, Yogyakarta"
                        />
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a href="{{route('profil')}}" class=""
                ><button
                  type="button"
                  class="btn btn-user px-4 mt-4"
                >
                  Simpan
                </button></a
              >
            </div>
          </div>
        </div>
      </div>
      <!--Modal-->
    </div>
  </div>
</div>
</div>


@endsection