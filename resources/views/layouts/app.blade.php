<!DOCTYPE html>
<html lang="en">
    @include('components.head')
<body>
    {{-- Sidebar --}}
    <div class="main-container d-flex">
        <div class="sidebar bg-primaryDark col-lg-2 col-md-35 col-sm-6 col-8" id="side_nav">
            <div style="position: fixed" class="sidebar col-lg-2 col-md-35 col-sm-6 col-8" id="side_nav_content" >
                <div class="d-block pb-2 w-100 pe-0 me-0 mb-4 bg-secondaryDark justify-content-end">
                    <div class="row pt-2 ps-3 pe-3 m-0">
                        <button class="btn d-md-none d-block close-btn py-0 px-2 text-white bg-danger" style="width: fit-content"><i
                            class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="row d-flex flex-column pb-3 pt-0 pe-0 ps-0 m-0 justify-content-center align-items-center w-100">
                        <div class="my-4 rounded-circle container-fluid p-0" style="width: 100px; height: 100px; overflow:hidden;">
                            <img src="{{ asset('assets/img/samudera-indonesia.webp')}}" alt="" class="img-fluid w-100" style="height: 100px; object-fit:cover;">
                        </div>
                        <h3 class="text-center text-white">Admin</h3>
                    </div>
                </div>
                <ul class="list-unstyled px-2">
                    <li class="active">
                        <a href="#" class="text-decoration-none px-3 py-3 d-block">
                            <i class="fa-solid fa-house me-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="">
                        <a href="#" class="text-decoration-none px-3 py-3 d-block d-flex justify-content-between align-items-center">
                            <span><i class="fa-solid fa-plug me-2"></i>
                            Reefer Service</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </li>
                    <li class="">
                        <a href="#" class="text-decoration-none px-3 py-3 d-block">
                            <i class="fa-solid fa-rotate me-2"></i>
                            Stuffing Stripping
                        </a>
                    </li>
                    <li class="">
                        <a href="#" class="text-decoration-none px-3 py-3 d-block">
                            <i class="fa-solid fa-gear me-2"></i>
                            Setup
                        </a>
                    </li>
                </ul>
            </div>
            </div>
        <div class="content">
            <nav class="navbar navbar-expand-md navbar-light bg-light border-bottom sticky-top">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                     <button class="btn px-1 py-0 open-btn me-2"><i class="fa-solid fa-bars"></i></button>
                        <a class="navbar-brand fs-4" href="#"></a>
                    </div>
                    <h4 class="h4 text-primaryDark">Dashboard</h4>
                    {{-- <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Profile</a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </nav>

            <div class="dashboard-content px-3 pt-3">
                @yield('content')
            </div>
        </div>
    </div>

    {{-- Main Component --}}

    {{-- <div class="container-fluid">
        <div class="row">
            <div class="row">
                <nav id="main-navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top text-white d-block">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle Navigation">
                            <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
                        </button>
                        <h3 class="h5">Dashboard</h3>
                    </div>
                </nav>
            </div>
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-block d-md-block bg-dark text-white sidebar collapse">
                    <div class="position-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <div class="row d-flex flex-column pb-4 justify-content-center p-0 align-items-center bg-secondaryDark">
                                    <div class="my-4 rounded-circle container-fluid p-0" style="width: 100px; height: 100px; overflow:hidden;">
                                        <img src="{{ asset('assets/img/samudera-indonesia.webp')}}" alt="" class="img-fluid w-100" style="height: 100px; object-fit:cover;">
                                    </div>
                                    <h3 class="text-center">Admin</h3>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#" aria-current="page" class="nav-link active">
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="fa-solid fa-chart-line" style="color: #ffffff;"></i>
                                        </div>
                                        <div class="col-8 p-0">
                                            Dashboard
                                        </div>
                                        <div class="col-2 text-end">
                                            <i class="fa-solid fa-angle-right " style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" aria-current="page" class="nav-link active">
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="fa-solid fa-chart-line" style="color: #ffffff;"></i>
                                        </div>
                                        <div class="col-8 p-0">
                                            Dashboard
                                        </div>
                                        <div class="col-2 text-end">
                                            <i class="fa-solid fa-angle-right " style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                </a>
                            </li><li class="nav-item">
                                <a href="#" aria-current="page" class="nav-link active">
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="fa-solid fa-chart-line" style="color: #ffffff;"></i>
                                        </div>
                                        <div class="col-8 p-0">
                                            Dashboard
                                        </div>
                                        <div class="col-2 text-end">
                                            <i class="fa-solid fa-angle-right " style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <main class="col col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Dashboard</h1>
                        <div class="btn-toobar mb-2 mb-md-8">
                            <div class="btn-group me-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" id="dropdownFilterWaktu" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-regular fa-calendar" style="color: #27374d;"></i>
                                    Hari ini
                                </button>
                            </div>
                        </div>
                    </div>
                        @yield('content')
                </main>
            </div>
        </div>
    </div> --}}


</body>
{{-- <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script> --}}
<script defer src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
{{-- <script src="{{asset('assets/js/bootstrap.js.map')}}"></script> --}}
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    {{-- <script defer src="{{asset('assets/js/bootstrap.bundle.js')}}"></script> --}}
{{-- <script src="{{asset('assets/js/bootstrap.min.map.js')}}"></script> --}}
{{-- <script src="{{asset('assets/js/bootstrap.esm.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.esm.js.map')}}"></script>
<script src="{{asset('assets/js/bootstrap.esm.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.esm.min.js.map')}}"></script> --}}
<script src="https://kit.fontawesome.com/6b61509af7.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(".sidebar ul li").on('click', function () {
        $(".sidebar ul li.active").removeClass('active');
        $(this).addClass('active');
        });

    $('.open-btn').on('click', function () {
        $('.sidebar').addClass('active');

    });


    $('.close-btn').on('click', function () {
        $('.sidebar').removeClass('active');

    });

    const toggle = document.getElementById('sidebar-toggle');
    toggle.onclick = function(){
        toggle.classList.toggle('active')
    }
</script>
<script>
    var canvas = document.querySelector('canvas');
    fitToContainer(canvas);

    function fitToContainer(canvas){
        // Make it visually fill the positioned parent
        canvas.style.width ='100%';
        canvas.style.height='100%';
        // ...then set the internal size to match
        canvas.width  = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;
    }
</script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> --}}
</html>
