@extends('frontend.head')
@section('title', 'Contact')

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
        {{-- <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <img src="img/ebsia1.png" class="w-full h-60" alt="Logo">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="/" class="nav-item nav-link">Accueil</a>
                    <a href="/about" class="nav-item nav-link">Apropos</a>
                    <a href="/service" class="nav-item nav-link">Service</a>
                    <a href="/countries" class="nav-item nav-link">Pays</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nous</a>
                        <div class="dropdown-menu m-0">
                            <a href="/team" class="dropdown-item">Notre Equipe</a>
                            <a href="/testimonial" class="dropdown-item">Temoignages</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link active">Contact</a>
                </div>
                <a href="" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block"> Nous contacter</a>
            </div>
        </nav> --}}

        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="ebsiaexpress.com" class="navbar-brand p-0">
                <img src="img/ebsia1.png" class="w-full h-60" alt="Logo">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="/" class="nav-item nav-link">Accueil</a>
                    <a href="/about" class="nav-item nav-link">Apropos</a>
                    <a href="/service" class="nav-item nav-link">Service</a>
                    <a href="/countries" class="nav-item nav-link">Pays</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nous</a>
                        <div class="dropdown-menu m-0">
                            <a href="/team" class="dropdown-item">Notre Equipe</a>
                            <a href="/testimonial" class="dropdown-item">Temoignages</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link active">Contact</a>
                </div>
                <a href="/contact" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block"> Nous contacter</a>
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
                                <li class="breadcrumb-item"><a class="text-white" href="">Nous</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


      <!-- Contact Start -->
      <div class="container-xxl py-5">

        @if(session('success'))
        <div class="alert alert-success" role="alert" id="success-message">
            {{ session('success') }}
        </div>
        <script>
            //fermer le message de succès après 5 secondes (5000 millisecondes)
            setTimeout(function() {
                document.getElementById('success-message').style.display = 'none';
            }, 5000);
        </script>
        @endif



        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Contacter Nous<span></span></p>
                <h1 class="text-center mb-5">WhatsApp directement</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        {{-- <p class="text-center mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> --}}
                        <form action="{{route('contact.process')}}" method="POST">
                            @csrf
                            <div class="row g-2  flex text-center">
                               


                                <div class="col-12 " alt="Ebsia Express" title="Ebsia Express France">
                                   
                                        <img class="img-fluid flex-shrink-0 rounded-circle" style="width: 65px; height: 65px;" src="img/france.png"  alt="Ebsia Express" title="Ebsia Express France">
                                        <a href="https://wa.me/33753690494"  >+33 7 53 69 04 94 </a>
                                   
                                </div>
                                <div class="col-12" alt="Ebsia Express" title="Ebsia Express Mali">
                                   
                                        <img class="img-fluid flex-shrink-0 rounded-circle" style="width: 65px; height: 65px;" src="img/mali.png" alt="">
                                        <a href="https://wa.me/22396816754" >+223 96 81 67 54</a>
                                   
                                </div>
                                <div class="col-12" alt="Ebsia Express" title="Ebsia Express Sénégal">
                                   
                                        <img class="img-fluid flex-shrink-0 rounded-circle" style="width: 65px; height: 65px;" src="img/sen.png" alt="">
                                        <a href="https://wa.me/221785808407" >+221 78 580 84 07</a>
                                   
                                </div>

                                <div class="col-12" alt="Ebsia Express" title="Ebsia Express Côte d'Ivoire">
                                   
                                        <img class="img-fluid flex-shrink-0 rounded-circle" style="width: 65px; height: 65px;" src="img/civ.png" alt="Ebsia Express" title="Ebsia Express Côte d'Ivoire">
                                        <a href="https://wa.me/2250747483122" >+225 0747483122 </a>
                                   
                                </div>

                                <div class="col-12" alt="Ebsia Express" title="Ebsia Express Cameroun">
                                   
                                        <img class="img-fluid flex-shrink-0 rounded-circle" style="width: 65px; height: 65px;" src="img/cam.png" alt="">
                                        <a href="https://wa.me/23775960439" >+237 7 596 04 39</a>
                                   
                                </div>
                                
                                <div class="col-12 " alt="Ebsia Express" title="Ebsia Express DubaÏ">
                                   
                                    <img class="img-fluid flex-shrink-0 rounded-circle" style="width: 65px; height: 65px;" src="img/eau.png"  alt="Ebsia Express" title="Ebsia Express DubaÏ">
                                    <a href="https://wa.me/33753690494">+33 7 53 69 04 94 </a>
                               
                                </div>  

                                <div class="col-12" alt="Ebsia Express" title="Ebsia Express Chine">
                                   
                                    <img class="img-fluid flex-shrink-0 rounded-circle" style="width: 65px; height: 65px;" src="img/chi.jpg" alt="">
                                    <a href="https://wa.me/33753690494">+33 7 53 69 04 94 </a>
                               
                                </div> 

                                <div class="col-12" alt="Ebsia Express" title="Ebsia Express Turquie">
                                   
                                    <img class="img-fluid flex-shrink-0 rounded-circle" style="width: 65px; height: 65px;" src="img/turc.png" alt="Ebsia Express" title="Ebsia Express Turquie">
                                    <a href="https://wa.me/33753690494">+33 7 53 69 04 94 </a>
                               
                                </div> 
                                
                                    

                                
                               


                                

                               
                                {{-- <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">Votre Email</label>
                                    </div>
                                </div> --}}
                                

                                


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-center mb-5">Email</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        {{-- <p class="text-center mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> --}}
                        <form action="{{route('contact.process')}}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="full_name" placeholder="Votre nom..." required>
                                        <label for="name">Nom & Prénom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">Votre Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="object" placeholder="Subject" required>
                                        <label for="subject">Object</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Envoyer Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        
    </div>
    <!-- Contact End -->



  
       <!-- Footer Start -->
       @include('frontend.footer')
       <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

</div>

@endsection

