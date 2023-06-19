<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion flex-column" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home" style="background-color: #ffffff">
        <div class="sidebar-brand-icon">
            <i class="sidebar-brand mx-2"> <img src="../frontend/img/damantern icon.png" style="width: 30px" alt="logo damantern"></i>
        </div>
        <div class="sidebar-brand-text"><img src="../frontend/img/damantern text.png" style="width: 170px" alt=""></div>  
    </a>



    <!-- Nav Item - Ringkasan -->
     
    
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">
            <i class="uil uil-dashboard"></i>
            <span class="text">Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a href="{{route('ringkas-intern')}}" class="nav-link">
        <i class="uil uil-user"></i>
        <span class="text">Data Pemagang</span></a>
    </li>
    <li class="nav-item">
        <a href="{{route('ringkas-rekap')}}" class="nav-link">
        <i class="uil uil-database"></i>
        <span class="text">Ringkasan Tugas</span></a>
    </li>
    <li class="nav-item">
        <a href="{{route('ringkas-presensi')}}" class="nav-link">
        <i class="uil uil-pen"></i>
        <span class="text">Ringkasan Presensi</span></a>
    </li>
    <li class="nav-item">
        <a href="{{route('ringkas-izin')}}" class="nav-link">
        <i class="uil uil-plane"></i>
        <span class="text">Ringkasan Izin</span></a>
    </li>
    <hr class="sidebar-divider my-0">


<!-- Divider -->
   
</ul>



<!-- End of Sidebar -->

