<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
  <!--<![endif]-->

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />

    @include('includes.welcome.style')

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  </head>

  <body data-spy="scroll" data-target=".navbar-collapse">
    <div class="preloader">
      <div class="loaded">&nbsp;</div>
    </div>
    <div class="culmn">

      @include('includes.welcome.navbar')

      @yield('content')

      <!-- modal -->

      <!-- end of modal-->

      <!--feature section -->
      <section id="feature" class="feature sections">
        
      </section>
      <!--End of feature Section -->
      {{--  <hr />  --}}

      <!-- History section -->
      <section id="history" class="history sections">
        
      </section>
      <!--End of history -->

      @include('includes.welcome.footer')

    </div>

    @include('includes.welcome.script')
    
  </body>
</html>
