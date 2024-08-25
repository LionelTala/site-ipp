@extends('layouts.app')


@section('title', 'IPP - Home')



@section('contenu')
<style>

</style>

    <center>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/campus.jpg') }}" class="d-block img-fluid img1 rounded" style="height: 70%" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color:aliceblue; ">Notre Campus </h5>
                        <p style="color:aliceblue">Tropicana Au Niveau D'eneo</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/salle.jpg') }}" class="d-block w-100 img-fluid img1 rounded" style="height: 70%" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Nos Salle De Classe</h5>
                        <p> </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/flyer.jpg') }}" class="d-block w-100 img-fluid img1 rounded" style="height: 70%" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Faites Nous Confiance</h5>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>
    </center>
    <div class="container">
        <div class="bordered">
            <div class="content">
                <div class="text-content">
                    <h3>C'est Quoi IPP ?</h3>
                    <p>
                        L'Institut Professionnel Du Paramedical est un centre de formation d'excellence dans le domaine du paramédical. Nous offrons à nos étudiants une formation de qualité avec des enseignants compétents et attentifs à leurs besoins.
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#plus">Voir Plus</a>                </div>
                <div class="col-sm-6">
                    <video controls="controls" autoplay="autoplay" width="100%" height="300px" >
                        <source src="{{asset('images/ipp.mp4')}}" class="rounded" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
        <br><br>


        <div class="container">
            <div class="bordered">
                <div class="content">
                    <div class="text-content">
                        <h3>Pourquoi Nous choisir ?</h3>
                        <p>
                            <p><span><b>L'institut des professionnels du paramédical vous offre un cadre très accréant et propice à vos études.
                              Doté de classe entièrement confortable et des salles de TP et des laboratoires entièrement équipé par des matériaux de pointe
                              IPP contribut au développement intellectuel,physique et aussi psychique de chacun des ces étudiants.Venez par curiosité et vous y resterez par satisfaction
                            </b></span></p>        </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('images/labo.jpg') }}" class="d-block img-fluid rounded" alt="..." >

                    </div>
                </div>
            </div>
        </div>
       <center>
      
        <br>

          <h3>Nos Atouts</h3>
<br>
       </center>
        <div class="accordion accordion-flush " style="width: 80%" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                 <strong> Une Equipe de Qualite</strong>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"> L'institut Professionnels du Paramedical dispose d'une equipe d'enseignants hautement qualifiés et experimentés. Passionnés par la transmission de leur savoir-faire  .</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                 <strong> Des programmes de formation complets et adaptés aux besoins du marché du travail </strong>
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Les programmes de formation proposés par l'institut Professionnels du Paramedical sont elaborés en etroite collaboration avec des professionnels du secteur afin de repondre aux besoins actuels et futurs du marché du travail .</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <strong>Des equipements modernes et des infrastructures de qualité :</strong>
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">L'institut Professionnels du Paramedical met a la disposition de ses etudiants des equipements modernes et des infrastructures de qualité pour leur permettre d'apprendre dans un environnement propice à la reussite .</div>
              </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingfour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapseThree">
                      <strong>Un accompagnement personnalisé et un suivi individualisé</strong>
                  </button>
                </h2>
                <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">L'institut Professionnels du Paramedical s'engage à offrir à ses étudiants un accompagnement personnalisé et un suivi individualisé pour les aider à progresser et à atteindre leurs objectifs .</div>
                </div>
              </div>
          </div>
        <br>
        <center>
        <h3>Des Stages Academiques De Qualites</h3>
        <br>
        <img src="{{ asset('images/flyer2.jpg') }}" class="d-block w-91 img-fluid img2 rounded" alt="...">

        <br>
        <h3>Soutenances Et Remise Des Diplomes </h3>
        <br>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/soutenance.jpg') }}" class="d-block w-80 img-fluid img2 rounded" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/diplome.jpg') }}" class="d-block w-80 img-fluid img2 rounded" alt="..." >
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <br>
            <br>
        </div>
        <style>
            h3 {
                color: blue
            }
        </style>

        <footer style="background-color: black; color: white; padding: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Localisation</h5>
                        <p>Yaounde,Tropicana en face D'eneo</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Email</h5>
                        <p>ippi5566@gmail.com</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Téléphone</h5>
                        <p>6 90 77 39 36 </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <center>
                        <p>&copy; 2024 Macford Recording Technology. Tous droits réservés.</p>
                                macfordrecordingt@gmail.com</center>
                    </div>
                </div>
            </div>
        </footer>


       </center>

        <div class="modal fade " id="plus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Institut des Proffesionel du Paramedical</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-dialog modal-dialog-scrollable">
                 <p>   IPP, au travers de son campus conduit à l'obtention des compétences  suivantes:
                    Aptitude aux connaissances scientifiques
                    (pathologie, cancérologie, parasitologie,
                    mycologie, virologie) ;
                    Aptitude aux connaissances de pharmacologie
                    et famille thérapeutique ;
                    Maîtrise de la règlementation pharmaceutique
                    et économique liée au médicament
                    Techniques de vente et communication sur la
                    parfaite maîtrise des médicaments (vertus,
                    composition, principe actif, tolérance,
                    posologie, contre-indications, effets
                    secondaires, mode d’emploi…) ;
                    Elaboration de plan d’action sectoriel (ciblage,
                    moyens, outils promotionnels, objectifs…) ;
                    Organisation et animation des actions de
                    communication et de vente d’une gamme de
                    médicaments (négociation, prix/volume,
                    conditions de vente, délais de livraison) ;
                    Respect et application des
                    procédures commerciales des laboratoires
                    pharmaceutiques (fixation de prix, émission de
                    bon de commande, négociation des volumes,
                    mode et délai de livraison) ;
                    Développement des relations professionnelles
                    (Information et réponse aux questions des
                    pharmaciens, analyse des besoins des
                    professionnels de santé, recueil des indications
                    utiles en termes de pharmacovigilance, veille
                    concurrentielle…) ;
                    Insertion en laboratoire pharmaceutique :
                    Aptitude à la bureautique et usage Internet ;
                    Communication écrite et orale dans les
                    compagnies pharmaceutiques ;
                    Le personnel en laboratoire pharmaceutique ; Le
                    Délégué médical, insertion, évolution,
                    entrepreneuriat.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Compris</button>

                </div>
            </div>
        </div>
    </div>



    @endsection
