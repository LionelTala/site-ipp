 <html>

 <head>
     <!-- Dans la section <head> -->
     <title>@yield('titre')</title>
     <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <meta name="IPP Un centre de formation de qualite dans le domaine du paramedicale"
         content="Decouvrez tous sur IPP ici">
     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
     <link rel="stylesheet" href="{{asset('font/css/all.min.css')}}">
     <link rel="stylesheet" href="{{ asset('font/css/fontawesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
 



     <style>


     </style>
 </head>

 <body style="width: 100%">
     <div class="loader">
         <div class="spinner-borde" role="status">
             <span class="visually-hidden"> <img src="{{asset('images/loading.gif')}}" alt=""> </span>
         </div>
     </div>

     <header>


         <!-- Navbar -->
         <nav class="navbar navbar-expand-lg navbar-light navbar-custom" style="background-color: white;">
             <a class="navbar-brand" href="#">
                 <img src="{{ asset('images/logo.jpg') }}" alt="Logo" style="height: 40px;">IPP
             </a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                 aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav ms-auto">
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('home') }}"
                             style="padding: 10px 15px; font-size: 18px;">Accueil</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('formation') }}"
                             style="padding: 10px 15px; font-size: 18px;">Spécialités</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('inscription') }}"
                             style="padding: 10px 15px; font-size: 18px;">Pré-inscription</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('contact') }}"
                             style="padding: 10px 15px; font-size: 18px;">Nous contacter</a>
                     </li>
                 </ul>
             </div>
         </nav>

     </header>
     @yield('contenu')

     <footer>
         <div class="footer">
             <div class="container">
                 <div class="row">
                     <div class="col-md-4 ">
                         <div class="infoma">
                             <h3>Nos Informations</h3>
                             <ul class="conta">
                                 <li><i class="fa-solid fa-location-dot"></i></i>Yaounde-Tropicana (a cote d'énéo)
                                 </li>
                                 <li><i class="fa fa-phone" aria-hidden="true"></i>Appeler le 6 90 77 39 36
                                 </li>
                                 <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="Javascript:void(0)">
                                    ippi5566@gmail.com</a></li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-md-8">
                         <div class="row border_left">

                             <div class="col-md-9">
                                 <div class="infoma">
                                     <h3>Navigations</h3>
                                     <ul class="fullink">
                                         <li><a href="{{route('home')}}">Accueil</a></li>
                                         <li><a href="{{ route('formation') }}">Spécialités</a></li>
                                         <li><a href="{{ route('inscription') }}">Pré-Inscription</a></li>
                                         <li><a href="{{ route('contact') }}">Nous Contacter</a></li>
                                      </ul>
                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <div class="infoma text_align_left">
                                     <ul class="social_icon">
                                         <li><a href="https://wa.me/237690773936">
                                                 <i class="fa-brands fa-whatsapp"></i>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="">
                                                 <i class="fa-brands fa-facebook-f"></i>
                                             </a>
                                         </li>
                                         <li><a href="">
                                                 <i class="fa-brands fa-linkedin"></i> </a>
                                         </li>
                                         <li><a href="">
                                                 <i class="fa-brands fa-instagram"></i>
                                             </a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="copyright" style="background-color: black">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-12">
                            <center>
                                <p>&copy; 2024 Macford Recording Technology. Tous droits réservés.</p>
                                      <div style="color: white">macfordrecordingt@gmail.com</div>  </center>  
                         </div>                       
                     </div>
                 </div>
             </div>
         </div>
     </footer>


     <!-- Dans la section <body>, juste avant la fermeture du </body> -->
     <script src="{{ asset('css/js/bootstrap.js') }}"></script>
     <script src="{{ asset('css/js/aos.js') }}"></script>
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             AOS.init({
                 duration: 1000, // Durée de l'animation
             });
             document.querySelector('.loader').style.display = 'none';
         });
     </script>

 </body>

 </html>
