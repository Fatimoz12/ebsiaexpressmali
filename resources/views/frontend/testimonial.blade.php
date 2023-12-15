@extends('frontend.head')
@section('title', 'Temoignage')

@section('content')

<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <img src="img/ebsia1.png" class="w-full h-60" alt="Logo">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="/" class="nav-item nav-link ">Accueil</a>
                    <a href="/about" class="nav-item nav-link ">Apropos</a>
                    <a href="/service" class="nav-item nav-link ">Service</a>
                    <a href="/countries" class="nav-item nav-link ">Pays</a>
                    <div class="nav-item dropdown">
                        <a href="/testimonial" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Nous</a>
                        <div class="dropdown-menu m-0">
                            <a href="/team" class="dropdown-item">Notre Equipe</a>
                            <a href="/testimonial" class="dropdown-item">Temoignages</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="/contacter" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block"> Nous contacter</a>
            </div>
        </nav>

        <div class="container-xxl py-5 bg-primary hero-header">
            <div class="container my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    <div class="col-12 text-center">
                        <h1 class="text-white animated slideInDown">@yield('title')</h1>
                        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="/">Accueil</a></li>
                                <li class="breadcrumb-item"><a class="text-white" href="/us">Nous</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Temoignage</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


     



        
       @include('frontend.testimonies')

        <!-- Testimonial End -->


        <!-- Team Start -->
       {{-- @include('frontend.teams') --}}
        <!-- Team End -->

       <!-- Footer Start -->
       @include('frontend.footer')
       <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

</div>

@endsection

