@extends('layouts.app')


@section('title', 'IPP - Home')



@section('contenu')
<style>
       .carousel-content {
    display: flex;
    flex-direction: row;
    align-items: left;
}

 
.carousel-content img {
    width: 50%;
    padding: 10;
}

@media (max-width: 768px) {
    .carousel-content {
        flex-direction: column;
    }

    .carousel-content img {
        width: 75%; /* Ajustez la largeur de l'image pour les petits écrans */
    }
}
 

</style>
   
<div id="carouselExampleControls" class="carousel slide carousel-wrapper" data-aos="fade-up">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-content">
                <div class="carousel-text p-4" style=" width: 400px;">
                    <h1>Qui sommes-nous ?</h1>
                    <p style="font-size: 18">
                     Découvrez comment CFP-IPP s’est imposé comme le leader dans la formation aux métiers de la santé
                    </p><br>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#mod1">En savoir plus</button>

                </div>
                <img src="{{asset('images/diplome.jpg')}}" class="d-block img-fluid rounded img" style=" width: 800px; height: 500px;"  alt="Image">
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-content">
                <div class="carousel-text p-4" style=" width: 400px;" >
                    <h1>Notre histoire</h1>
                    <p style="font-size: 18"> Depuis 2021 et situé à Yaoundé au Cameroun,  L'Institut des  Professionnels du Paramédical (IPP) 
                        offre une formation professionnelle en paramédical en journée et en soirée et reconnu pour la qualité. 
                        Avec des formateurs experts et un programme complet,  </p><br>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#mod2">En savoir plus</button>

                </div>
                <img src="{{asset('images/salle.jpg')}}" class="d-block img-fluid rounded img-responsive" style=" width: 800px; height: 500px;"  alt="Image">
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-content">
                <div class="carousel-text p-4" style=" width: 400px;">
                    <h3>Nos Formations</h3>
                    <p style="font-size: 18">Nous offrons une formation de qualitée dans diverses spécialitées</p>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#mod3">En savoir plus</button>

                </div>
                <img src="{{asset('images/flyer.jpg')}}" class="d-block img-fluid rounded" style=" width: 800px; height: 500px;"  alt="Image">
            </div>
        </div>
    </div>
    <br><br>
    <div class="carousel-controls">
        <button class="control-btn" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            ◀ 
        </button>
        <button class="control-btn" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            ▶
        </button>
    </div>
</div>

<center><h1>Nos Points Forts</h1>
<p style="font-size: 18">L'Institut Professionnels du Paramédical  dispose d'une équipe d'enseignants hautement qualifiés et expérimentés, passionnés par la transmission de leur savoir-faire aux étudiants.</p></center>
<center>
<div class="container my-5">
    <div class="row">
        <div class="col-lg-4 mb-3" data-aos="fade-right">
            <div class="card card-custom card-green text-center">
                <div class="card-body">
                    <h4 class="card-title">Des programmes de formation complets et adaptés aux besoins du marché du travail:</h4><br>
                    <p class="card-text" >Les programmes de formation proposés par l'Institut Professionnels du Paramédical  sont élaborés en étroite collaboration avec des professionnels du secteur afin de répondre aux besoins actuels et futurs du marché du travail. </p>
                 </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3" data-aos="fade-up">
            <div class="card card-custom card-blue text-center">
                <div class="card-body">
                    <h4 class="card-title">Des équipements modernes et des infrastructures de qualité:</h4><br><br>
                    <p class="card-text">L'Institut Professionnels du Paramédical  met à la disposition de ses étudiants des équipements modernes et des infrastructures de qualité pour leur permettre d'apprendre dans un environnement propice à la réussite.   </p>
                 </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3" data-aos="fade-left">
            <div class="card card-custom card-green text-center">
                <div class="card-body">
                    <h4 class="card-title">Un accompagnement personnalisé et un suivi individualisé:</h4><br><br>
                    <p class="card-text">L'Institut Professionnels du Paramédical  s'engage à offrir à ses étudiants un accompagnement personnalisé et un suivi individualisé pour les aider à progresser et à atteindre leurs objectifs.</p>
                 </div>
            </div>
        </div>
    </div>
</div>
</center>

    <!-- Cadre violet avec vidéo -->
    <div class="container my-5" data-aos="fade-up">
        <div class="row bg-gradient p-4 rounded">
            <div class="col-md-6 text-start">
                <h3 style="color: whitesmoke;">Encore plus sur nous!</h3>
                <p style="text-align: justify;color: white;font-size:18">
                    L'Institut Professionnels du Paramédical dispose d'une équipe d'enseignants hautement qualifiés et expérimentés,
                    passionnés par la transmission de leur savoir-faire aux étudiants.
                </p>
                <br><br>
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal4">Voir plus</button>
            </div>
            <div class="col-md-6 text-center">
                <video class="responsive-img" controls style="max-width: 100%; height: auto; max-height: 300px; border-radius: 10px;">
                    <source src="{{asset('images/ipp.mp4')}}" type="video/mp4">
                    Votre navigateur ne supporte pas la balise vidéo.
                </video>
            </div>
        </div>
    </div>

    <div class="container my-5 text-center" data-aos="fade-up">
        <style>
            .responsive-img {
                width: 100%; /* S'adapte à la largeur de la colonne */
                max-width: 300px; /* Taille fixe pour les images */
                border-radius: 15px; /* Arrondi des bords */
                margin: 10px 0; /* Espacement entre les images */
            }
        </style>
        <h2 class="section-title">Des Stages de qualités</h2>
        <p style="font-size: 18">Au cours de notre formation, nous offrons à nos étudiants un stage de 03 mois chez nos nombreux  partenaires <br>
             afin de mettre en pratique les connaissances durement acquises au cour de l'année <br>
            Quelques images de nos étudiants en stage</p>
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('images/stage4.jpg')}}" class="img-fluid responsive-img" alt="Image 1">
            </div>
            <div class="col-md-4">
                <img src="{{asset('images/stage2.jpg')}}" class="img-fluid responsive-img" alt="Image 2">
            </div>
            <div class="col-md-4">
                <img src="{{asset('images/stage3.jpg')}}" class="img-fluid responsive-img" alt="Image 3">
            </div>
        </div>
    </div>

    <div class="container my-5" data-aos="fade-up">
        <style>
            .responsive-img {
                max-width: 900px; /* Taille maximale pour l'image */
                border-radius: 10px; /* Arrondi des bords */
                margin-top: 20px; /* Espacement au-dessus de l'image */
            }
           
        </style>
        <h2 class="section-title">Soutenance Des Etudiants</h2>
        <div class="row">
            <div class="col-md-6">
                <p style="font-size: 18">A la fin du stage, il est demander a chaque etudiant de rediger un mémoire sur lequel il devra soutenir devant un jury  </p>
            </div>
            <div class="col-md-6">
                <img src="images/soutenance.jpg" class="img-fluid responsive-img" alt="Expertise Image">
            </div>
        </div>
    </div>

    <div class="blue-box rounded" style="background-color: #067bac">
        <center><h1>Notre Equipes</h1>
        <p style="font-size: 18">Au niveau national ou international, nos équipes s’engagent au quotidien pour la réussite de nos étudiants.</p>
    </center>
        <style>
            .blue-box {
                 padding: 20px;
                border-radius: 15px; /* Coins arrondis */
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Ombre pour profondeur */
            }
            .red-box, .white-box {
                background-color: #fff; /* Fond blanc pour les cartes */
                border-radius: 10px; /* Coins arrondis pour les cartes */
                padding: 15px;
                margin: 10px; /* Espacement entre les cartes */
                text-align: center; /* Centrer le texte */
                box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1); /* Ombre légère */
                transition: transform 0.2s; /* Transition pour l'effet hover */
            }
            .red-box:hover, .white-box:hover {
                transform: translateY(-5px); /* Légère élévation au survol */
            }
         
        </style>
        <div class="row justify-content-center" style="color: black;">
            <div class="col-md-4 red-box" id="card1">
                 <h5 style="color: black;">Le responsable d'établissement</h5>
                <p style="color: black;">Chacun de notre établissement est dirigé par un responsable administratif et un responsable pédagogique, qui garantissent le suivi personnalisé des étudiants et étudiantes tout au long de leur parcours</p>
            </div>
            <div class="col-md-4 white-box" id="card2">
                 <h5>Notre équipe centrée sur votre réussite</h5>
                <p>La pédagogie est mise en œuvre au quotidien par une équipe de plus de 130 enseignants et enseignantes, 
                    répartis dans les différentes filières. Sélectionnés sur des critères académiques exigeants (agrégés, normaliens, docteurs, 
                    professeurs d’université, techniciens, experts…),
                     ils sont épaulés et accompagnés par notre comité scientifique, qui s’assure de la pertinence de notre pédagogie au niveau national.</p>
            </div>
            <div class="col-md-4 red-box" id="card3">
                 <h5 style="color: black;">L'équipe enseignante</h5>
                <p style="color: black;">Professeurs à temps plein, enseignants vacataires, moniteurs et monitrices, internes, professionnels de santé…, nos équipes locales travaillent en synergie pour vous
                     assurer un accompagnement personnalisé et un encadrement
                      performant, destiné à favoriser votre réussite.</p>
            </div>
        </div>
    </div>
     

<div class="modal fade" id="mod1" tabindex="-1" aria-labelledby="modal4Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mod4Label">Qui Sommes Nous</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                L'Institut Professionnel Du Paramedical est un centre de formation d'excellence dans le domaine du paramédical. Nous offrons à nos étudiants une formation de qualité avec des enseignants compétents et attentifs à leurs besoins.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mod2" tabindex="-1" aria-labelledby="modal4Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mod2Label">Notre Histoire</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Depuis 2021 et situé à Yaoundé au Cameroun,  L'Institut des  Professionnels du Paramédical (IPP) offre une formation professionnelle en paramédical en journée et en soirée et reconnu pour la qualité. Avec des formateurs experts et un programme complet, nous vous aidons à atteindre vos objectifs de carrière. Nos formations professionnelles et diplômantes sont supervisées par le Ministère de l’Emploi et de la Formation Professionnelle (MINEFOP) qui nous octroi l’agrément N°000305/MINEFOP/SG/DFOP/SDGSF/CSACD/CBAC. L'Institut Professionnels du Paramédical s'adresse aux personnes désireuses d'acquérir les compétences et les connaissances nécessaires pour réussir dans le domaine paramédical.            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="modal4Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal4Label">Encore plus sur nous</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <strong>L'engagement</strong> <br>
                La réussite  repose sur un engagement commun que nous prenons avec nos apprenants. Nous attendons une implication importante de la part de nos étudiants et étudiantes. En retour, nous nous engageons aux côtés de nos apprenants pour relever les défis de leur parcours et les engager sur la voie de la réussite.
                <br>
               <strong>La fiabilité</strong> <br>
                En suivant nos formations, nos étudiants et étudiantes nous accordent leur confiance pour ce qui représente l’une des étapes les plus importantes de leur parcours. Nous nous devons de fournir un encadrement pédagogique fiable et irréprochable, grâce auquel nos apprenants peuvent envisager leur réussite le plus sereinement possible.
               <br>
               <strong>La bienveillance</strong> <br>
                La formation dans les métiers de la santé est avant tout une épreuve mentale, contre soi-même. Notre accompagnement conjugue pour cela exigence et bienveillance, afin que nos apprenants donnent le meilleur d’eux-mêmes, dans un environnement stimulant et attentif à leur bien-être.
                <br>
                <strong>Nos résultats</strong> <br>
                Les résultats de nos apprenants l’attestent. Le CFF-IPP vous permet de multiplier vos chances de réussir vos études de santé et la vie professionnelle.
               <br>
                <strong>Nos engagements</strong>  <br>
                Parce que l’avenir de nos apprenants est notre priorité, nous nous engageons pour un avenir plus durable et plus souhaitable.
                <br>
                <strong> Nos partenariats</strong><br>
                Nous nous appuyons sur un réseau de partenaires experts, afin de proposer le meilleur enseignement possible.
                Nous avons développé des partenariats avec des acteurs de la santé, afin de vous proposer les meilleures conditions de réussite.
                Nos partenaires : <br>
                HOPITAL GYNECO-OBSTETRIQUE ET PEDIATRIQUE	 <br>
                CENTRE HOSPITALIER UNIVERSITAIRE	 <br>
                HOPITAUX CENTRAUX	 <br>
                HOPITAUX REGIONAUX	<br> 
                HOPITAUX  DE DISTRICTS 	<br>
                CENTRE MEDICAL DE LA POLICE	<br>
                HOPITAUX MILITAIRES 	<br>
                FORMATIONS SANITAIRES PUBLIQUES <br>
                MAISONS DE REPOS 	<br>
                CENTRES DE PEC DES PERSONNES AUX BESOINS SPECIFIQUES <br>
                LABORATOIRE D`ANALYSE MEDICALE 	<br>
                CENTRE DE KINESITHERAPIE 	<br>
                OFFICINES 	<br>
                STRUCTURES DE VENTE ET DISTRIBUTION DU MATERIEL PHARMACEUTIQUE 	<br>
                AGENCES DE PROMOTIONS ET VISITES MEDICALES 	<br>
                CABINET DE SOINS DENTAIRES 	<br>
                            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="mod3" tabindex="-1" aria-labelledby="modal4Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mod3Label">Nos Formations</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                L'Institut Professionnels du Paramédical  propose une large gamme de formations paramédicales, couvrant divers domaines tels que: <br>
                o	Auxiliaire de vie sociale <br>
                o	Vendeur/auxiliaire de pharmacie <br>
                o	Secrétaire médicale <br>
                o	Délégué médical <br>
                o	Assistant kinésithérapeute <br>
                o	Assistant de cabinet dentaire  <br>
                o	Agent Technique de Laboratoire <br>
                L'Institut Professionnels du Paramédical votre partenaire idéal pour une formation paramédicale de qualité et une carrière réussie dans les domaines annexes de la santé.
                            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>



 @endsection
