 <html>

 <head>
     <!-- Dans la section <head> -->
     <title>@yield('titre')</title>
     <link rel="icon" type="image/png" sizes="16x16"  href="{{asset('images/favicon.png')}}">

     <meta name="IPP Un centre de formation de qualite dans le domaine du paramedicale" 
     content="Decouvrez tous sur IPP ici">
     
     <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
     <link rel="stylesheet" href="{{ asset('style.css') }}">

    
     <style>

         
     </style>
 </head>

 <body style="width: 100%">
    <div class="loader" id="loader2">
        <div class="spinner-border text-info loader-spinner" role="status">
          <span class="sr-only loader-pos"> </span>
        </div>

    </div>
    <script>

         var loader = document.getElementById('loader2');
   

        window.addEventListener('load',()=>{

           loader.classList.add('loader-out');

        })

    </script>
     <header>
         <nav class="navbar navbar-expand-lg navbar-dark bg-success" >
             <div class="container">
                 <a class="navbar-brand perso_nav" href="#">
                     <img src="{{ asset('images/logo.jpg') }}" alt="Logo" height="30" class="rounded">
                     <strong>IPP</strong>
                 </a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                     aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav ms-auto">
                         <li class="nav-item">
                             <a class="nav-link perso_nav"  href="{{ route('home') }}"><i class="fas fa-home"></i><strong> Accueil</strong></a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link perso_nav"  href="{{ route('formation') }}"><strong> Specialites</strong></a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link perso_nav"  href="{{ route('inscription') }}"><strong> Pre-Inscriptions </strong></a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link perso_nav" style="color: white" href="{{ route('contact') }}"> <strong> Nous Contacter </strong></a>
                         </li>
                     </ul>
                 </div>
             </div>
         </nav>

     </header>
     @yield('contenu')




     <!-- Dans la section <body>, juste avant la fermeture du </body> -->
     <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>

 </body>

 </html>
