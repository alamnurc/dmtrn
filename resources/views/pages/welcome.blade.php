@extends('layouts.welcome')

@section('title')
DAMANTERN
@endsection

@section('content')

      <!--home Section -->
      <section id="home" class="home">
        <div class="overlay">
          <div class="home_skew_border">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="main_home_slider text-center">
                    <div class="single_home_slider">
                      <div
                        class="main_home wow fadeInUp"
                        data-wow-duration="700ms"
                      >
                        <h1>WELCOME TO DAMANTERN</h1>
                        <div
                          style="
                            display: flex;
                            justify-content: center;
                            align-items: center;
                          "
                        >
                        <div class="separator"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>
      <!--End of home section -->


@endsection