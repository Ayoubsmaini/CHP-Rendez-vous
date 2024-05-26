<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>CHP Tan-Tan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="shortcut icon" href="assests/img/icon.png" type="image/x-icon"> 

    <!-- Favicon -->
    <link href="../assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../assests/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assests/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../assests/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="../assests/lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assests/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../assests/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->




    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="{{ url('home') }}" class="navbar-brand p-0">
        <img src="assests/img/logo.png" width="70px"  alt="main_logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="" class="nav-item nav-link active">Accueil</a>
                <a href="#about" class="nav-item nav-link">Nouvelles</a> 
                <a href="#rdv" class="nav-item nav-link">Prendre rendez-vous</a>
            </div>
            @if(Route::has('login'))
            @auth
            <a href="{{url('myappointment')}}" class="btn btn-success py-2 px-4 ms-3">Mes RDV</a>
            <x-app-layout>
            </x-app-layout>
            @else
            <a href="{{route('login')}}" class="btn btn-success py-2 px-4 ms-3">Se connecter</a>
            <a href="{{route('register')}}" class="btn btn-dark py-2 px-4 ms-3">S'inscrire</a>
            @endauth
            @endif
        </div>
    </nav>
    <!-- Navbar End -->
    



    <!-- Carousel Start -->
    <div class="container-fluid p-0">
    @if(session()->has('message'))
    
    <div id="alertContainer" class="alert alert-success">
                <button id="closeButton" type="button" class="close" data-dismiss="alert"></button>
                {{session()->get('message')}}
    </div>
@endif
        <div id="header-carousel" class="carousel slide carousel-fade" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../assests/img/home.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">CHP Tan-Tan </h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Votre santé, notre engagement</h1>
                            <a href="appointment.html" class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">Prendre rendez-vous</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../assests/img/home.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-1" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">CHP Tan-Tan</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Votre santé, notre engagement</h1>
                            <a href="appointment.html" class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">Prendre rendez-vous</a>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- Carousel End -->
    <!-- About Start -->
    <div id="about" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="position-relative d-inline-block text-success text-uppercase">Nouvelles </h5>
                        <h1 class="display-5 mb-0">Système de Santé au Maroc </h1>
                    </div>
                    <h4 class="text-body text-justify f mb-4">AMO (Assurance Maladie Obligatoire) : Mise en place pour couvrir une large part de la population, l'AMO vise à améliorer l'accès aux soins de santé et à réduire les coûts pour les patients.
               </h4>

               <h4 class="text-body text-justify  f mb-4"> RAMED (Régime d'Assistance Médicale) : Destiné aux populations démunies, ce programme vise à garantir un accès équitable aux soins de santé. </h4>
               <h4 class="text-body text-justify  f mb-4">
                Le gouvernement marocain a lancé la Stratégie de Santé 2025 pour renforcer le système de santé national. Cette stratégie vise à améliorer la gouvernance, à augmenter les investissements dans les infrastructures de santé, à former et à recruter davantage de personnel de santé, et à promouvoir l'innovation et la technologie dans les services de santé.
            </h4>
               <div class="row g-3">
               
                        
                        
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="../assests/img/i1.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    



@include('user.appointment')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp d-flex justify-content-center align-items-center" data-wow-delay="0.3s" style="margin-top: -45px;">
        <img src="assests/img/icon.png" width="70px" alt="logo">
    </div>
    
        
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-success btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assests/lib/wow/wow.min.js"></script>
    <script src="../assests/lib/easing/easing.min.js"></script>
    <script src="../assests/lib/waypoints/waypoints.min.js"></script>
    <script src="../assests/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../assests/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../assests/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../assests/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../assests/lib/twentytwenty/jquery.event.move.js"></script>
    <script src="../assests/lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="../assests/js/main.js"></script>
    <script>
    // Récupérer l'élément de l'alerte
    let alerte = document.getElementById('alertContainer');
    
    // Récupérer le bouton de fermeture
    let closeButton = document.getElementById('closeButton');
    
    // Supprimer l'alerte après 2 secondes
    setTimeout(function() {
        alerte.remove();
    }, 3000);
    
    // Gérer la fermeture manuelle de l'alerte en cliquant sur le bouton de fermeture
    closeButton.addEventListener('click', function() {
        alerte.remove();
    });
</script>
</body>

</html>