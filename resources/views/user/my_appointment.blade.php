<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CHP Tan-Tan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link rel="shortcut icon" href="assests/img/icon.png" type="image/x-icon"> 


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
    <link rel="shortcut icon" href="assests/img/akdital2-02.png" type="image/x-icon"> 

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



    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg d-flex justify-between items-center bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="{{ url('home') }}" class="navbar-brand p-0">
        <img src="assests/img/logo.png" width="70px" alt="main_logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
       
            @if(Route::has('login'))
            @auth
            <a href="{{url('myappointment')}}" class="btn btn-outline-dark py-2 px-4 ms-3">Mes RDV</a>
            <x-app-layout>
            </x-app-layout>
            @else
            <a href="{{route('login')}}" class="btn btn-primary py-2 px-4 ms-3">Login</a>
            <a href="{{route('register')}}" class="btn btn-primary py-2 px-4 ms-3">Register</a>
            @endauth
            @endif
        </div>
    </nav>
    <!-- Navbar End -->
    


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->
    <div style="display: flex; justify-content: center; padding: 70px;">
        <table style="width: 100%; max-width: 1200px; border-collapse: collapse; text-align: center;rounded">
            <thead>
                <tr style="background-color: #06A3DA;">
                    <th style="padding: 10px; font-size: 20px; color: white;">Docteur</th>
                    <th style="padding: 10px; font-size: 20px; color: white;">Date</th>
                    <th style="padding: 10px; font-size: 20px; color: white;">Message</th>
                    <th style="padding: 10px; font-size: 20px; color: white;">Statut</th>
                    <th style="padding: 10px; font-size: 20px; color: white;">Annuler le Rendez-vous</th>
                </tr>
                
            </thead>
            <tbody>
                @foreach($appoint->reverse() as $appoints)
                <tr style="background-color:gray;">
                    <td style="padding: 10px; font-size: 20px; color: white;">{{ $appoints->doctor }}</td>
                    <td style="padding: 10px; font-size: 20px; color: white;">{{ $appoints->date }}</td>
                    <td style="padding: 10px; font-size: 20px; color: white;">{{ $appoints->message }}</td>
                    <td style="padding: 10px; font-size: 20px; color: white;">{{ $appoints->status }}</td>
           
                    <td>
                        <a class="btn btn-outline-light" onclick="return confirm('Confimer la suppresion?')" href="{{ url('cancel_appoint', $appoints->id) }}">Annuler</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    


    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


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
    var alerte = document.getElementById('alertContainer');
    
    // Récupérer le bouton de fermeture
    var closeButton = document.getElementById('closeButton');
    
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