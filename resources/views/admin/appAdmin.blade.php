<html>

<head>
    <!-- Dans la section <head> -->
    <title>@yield('titre')</title>
    <meta name="IPP Un centre de formation de qualite dans le domaine du paramedicale" 
    content="Decouvrez tous sur IPP ici">

    <link rel="icon" type="image/png" sizes="16x16"  href="{{asset('images/favicon.png')}}">
 
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
     <style>
        .navbar-toggler {
            border: none;
            font-size: 2rem; /* Ajustez la taille selon vos besoins */
            padding: 0.75rem 1.25rem; 
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }
        .navbar-toggler-icon {
            background-size: 1.5em 1.5em; /* Ajustez la taille de l'icône Hamburguer */
       }
        li{
           padding: 10;
        }
        .perso_nav{
           color: white;
           font-size: 20;
        }

        .loader{

position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color:white;
z-index: 999999999;
display: flex;
align-items: center;
justify-content: center;
}


.loader-out{
display: none;
opacity: 0;
transition: opacity 0.4s ease-out;
}
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
                            <a class="nav-link perso_nav"  href="{{ route('admin-home') }}"><strong> Liste Des Candidatures Recu </strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link perso_nav"  href="{{ route('getMessage') }}"><strong> Message recu </strong></a>
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
