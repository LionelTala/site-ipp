@extends('layouts.app')


@section('title', 'IPP - Nos Formation')



@section('contenu')
<style>
    .card {
    height: 400px; /* Assure que toutes les cartes ont la même hauteur */
}

.card-img-top {
    object-fit: cover; /* Assure que les images occupent tout l'espace disponible */
    height: 200px; /* Fixe une hauteur uniforme pour toutes les images */
    width: 100%;
}
</style>


    <!-- Modal -->
    <div class="modal fade " id="tech" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="staticBackdropLabel">AGENT TECHNIQUE DE LABORATOIRE</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-dialog modal-dialog-scrollable">
                        MÉTIER :  AIDE CHIMISTE BIOLOGISTE / AGENT DE
                        LABORATOIRE  <br>
                             DURÉE DE LA FORMATION : 09 MOIS + 03 MOIS DE STAGE
                        DANS LES LABORATOIRES <br>
                             NIVEAU MINIMUM REQUIS : PROBATOIRE <br>
                       
                        DIPLÔME OBTENU : CERTIFICAT DE QUALIFICATION
                        PROFESSIONNELLE (CQP, MINEFOP) - ATTESTATION DE
                        COMPETENCES PROFESSIONNELLES.
                     <br> <br>
                    Activités : <br> L’Aide chimiste biologiste est un agent
                        de laboratoire polyvalent, alliant à la fois les
                        compétences d’aide biologiste et d’aide chimiste.
                        En tant que Agent Technique de laboratoire, il est
                        ainsi amené à travailler sur des prélèvements de
                        sang ou de tissus chez les patients, ou sur la
                        recherche de germes ou d'anomalies (cellules
                        défectueuses, anticorps, glycémie, transaminases,
                        cholestérol...). <br> 
                        En tant que Agent Technique de laboratoire, il
                        assiste le technicien, le chercheur ou l’agent de
                        maîtrise en contribuant à la préparation des
                        différentes opérations de laboratoire ou d’atelier de
                        procédés ou de production. Il est alors amené à
                        reproduire des travaux standardisés sur la base de
                        modes opératoires précis (montage d’appareillages,
                        synthèse de produits, travaux d’analyse). <br>
                        L’aide chimiste biologiste opère dans le cadre du
                        respect de la réglementation en vigueur et de
                        consignes strictes en matière d’hygiène, de sécurité
                        et d’environnement. <br>
                        Pour cela, il entretien et vérifie le matériel (manuel
                        ou automatisé), prépare les instruments et les
                        substances à utiliser, transmet les résultats au
                        responsable du laboratoire, qui se charge de les
                        interpréter <br> <br>
                     Exercice du métier : <br>L’agent technique de
                        laboratoire est un acteur polyvalent des
                        laboratoires, pouvant travailler en industrie dans la recherche privée ou alors dans la recherche
                        publique. <br>
                        Les agents de laboratoire exercent dans de
                        nombreux domaines d’activité, à savoir :
                        laboratoires d’analyse médicale, compagnies
                        pharmaceutiques, pharmacie, chimie, agrochimie,
                        cosmétique, agroalimentaire, pétrole, plasturgie,
                        caoutchouc, énergie, automobile, aéronautique,
                        matériaux, nucléaire, environnement… <br> <br>
                    Compétences professionnelles acquises : <br> Détermination des propriétés biologiques d'un
                        produit et de ses composants : prélèvement,
                        traitement, analyse, interprétation, résultats,
                        caractérisation ;
                        Expérimentations sur les matériaux et les
                        produits : tests, essais, analyses biologiques,
                        différents procédés ;
                        Appareillage de labo, de test ou d’essai :
                        identification, entretien, maintenance de 1er
                        niveau, préparation, fonctionnement ;
                        Rapport documenté : dossiers ou documents
                        techniques de suivi des analyses, fiches
                        d'anomalies ;
                        Appropriation linguistique de l’Anglais des
                        sciences médicales, chimiques et biologiques<br>Insertion en laboratoire : Bureautique/Internet ;
                        Communication écrite et orale au labo ; Le
                        Personnel de labo ; L’Agent de labo, insertion,
                        évolution, entrepreneuriat.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Compris</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade " id="phar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="staticBackdropLabel">Auxiliaire de Pharmacie</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-dialog modal-dialog-scrollable">
                    MÉTIER : AUXILIAIRE EN PHARMACIE / VENDEUR-CONSEIL
                        EN PHARMACIE ET PARAPHARMACIE <br>
                        DURÉE DE LA FORMATION : 09 MOIS + 03 MOIS DE STAGE
                        DANS LES LOCAUX CISMED SANTE ET DANS LES OFFICINES <br>
                        NIVEAU MINIMUM REQUIS : BEPC, PROBATOIRE <br>
                        DIPLÔME OBTENU : DIPLOME DE QUALIFICATION
                        PROFESSIONNELLE (DQP, MINEFOP) - ATTESTATION DE
                        COMPETENCES PROFESSIONNELLES. <br><br>
                    Activités : <br>L'auxiliaire de pharmacie est un
                        professionnel de la santé qui a pour rôle
                        d'accueillir les patients, de servir les
                        médicaments et de conseiller les patients sur
                        le bon usage des médicaments. Il délivre les
                        médicaments ou appareillages médicaux et
                        autres (pommades, gélules, solutions…) ; <br>
                        Il gère les stocks en contrôlant les
                        réapprovisionnements, reçoit et range les
                        commandes, met à jour les rayons de produits
                        (produits pharmaceutiques, diététiques,cosmétiques, d'hygiène, de parfumerie…) ; et
                        contribue à la bonne marche de l’officine
                        (accomplissement des tâches administratives,
                        exécution des travaux à l'avant comme à
                        l'arrière de l'officine, conseil et vente). <br>
                        L'auxiliaire de pharmacie est un technicien qui
                        possède des connaissances générales en
                        pharmacologie et est imprégné de la
                        législation sur les médicaments et la
                        pharmacologie. Il connaît les médicaments et
                        leur usage, et conseille le client sur
                        l’application de la prescription médicale
                        conformément à l’ordonnance. Il assume aussi
                        une fonction commerciale auprès de la
                        clientèle à laquelle il propose et vend des
                        produits de la parapharmacie (produits et
                        accessoires cosmétiques, d’hygiène
                        corporelle, de diététiques…). <br> <br>
                    Exercice du métier : <br> L'auxiliaire de pharmacie
                        exerce dans toute officine ou local où les
                        médicaments sont préparés, conservés et
                        distribués au détail par le pharmacien, et où on
                        procède à l'exécution des ordonnances
                        médicales. Il exerce également dans les
                        grandes surfaces et supermarchés dans les
                        rayons des cosmétiques vendus en
                        pharmacie, dans l’agroalimentaire
                        (alimentation des bébés), et plus globalement
                        dans les parapharmacies en tant que
                        commerces à part entière <br> <br>
                     Compétences professionnelles acquises : <br> Connaissance des molécules
                        pharmaceutiques et leurs usages ;
                        Application générale de la législation
                        sur les médicaments et la
                        pharmacologie ;
                        Maîtrise des nouveautés en matière
                        de médicaments, d’usage et de soins ;
                        Capacité à étiqueter et ranger les
                        produits pharmaceutiques (recevoir,
                        étiqueter, classer) ;
                        Conseil clientèle sur l’usage des
                        médicaments conformément à
                        l’ordonnance médicale ;
                        Tenue des stocks et des rayons,
                        Informatisation de la gestion minimale
                        des stocks.
                        Insertion en officine : Aptitude à la bureautique
                        & usage Internet ; Communication écrite et
                        orale en pharmacie ; Le personnel de
                        pharmacie ; L’Auxiliaire de pharmacie,
                        insertion, évolution, entrepreneuriat.</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Compris</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade " id="med" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="staticBackdropLabel">Secretaire Medicale</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-dialog modal-dialog-scrollable">


                     MÉTIER : ASSISTANT(E) EN CABINET MEDICAL/ MEDICOSOCIALE <br>
                        DURÉE DE LA FORMATION : 09 MOIS + 03 MOIS DE STAGE <br>
                        EN MILIEU HOSPITALIER/STRUCTURE PHARMACEUTIQUES.<br>NIVEAU MINIMUM REQUIS : CLASSE 1ERE /PROBATOIRE
                        DIPLÔME OBTENU : DIPLOME DE QUALIFICATION <br>
                        PROFESSIONNELLE (DQP, MINEFOP) - ATTESTATION DE
                        COMPETENCES PROFESSIONNELLES. <br><br>
                    Activités : <br>Le Secrétaire Médical est un assistant
                        médico-administratif, qui au quotidien assiste le
                        médecin ou l’infirmier chef en cabinet de
                        consultation médicale (centre de santé, clinique,
                        polyclinique, hôpital public…). <br> Il est la tour de
                        contrôle du fonctionnement d’un service médical,
                        paramédical, voire d’assistance sociale ; en ce sens
                        qu’il est l’interlocuteur majeur, quasi
                        incontournable entre les responsables des
                        entreprises, les médecins, l’équipe soignante, des
                        usagers et la direction fonctionnelle de la structure.
                        C’est un professionnel qui s'adapte facilement aux
                        personnes et aux situations, qui manifeste un
                        véritable intérêt professionnel pour l'activité
                        médicale et médico-sociale à travers l’organisation,
                        la rigueur et la discrétion. <br>
                        Le Secrétaire Médical occupe un poste à
                        responsabilités administratives regroupés autour
                        des activités telles que : l'accueil des patients ; la
                        prise en charge des appels téléphoniques ; la
                        planification des consultations (prise de rendezvous avec le médecin ou le spécialiste) ; la gestion
                        des dossiers médicaux (saisie, enregistrement,
                        classement...) ; les relations avec les services
                        médico-techniques ou hospitaliers. <br><br>
                    Exercice du métier : <br>Le Secrétaire Médical exerce
                        dans toute structure médicale, sociale, sanitaire ou
                        médicosociale tant du secteur public que
                        privé (cabinet médical, centre d’imagerie médicale,
                        centre de médecine du travail, Institut de médecine
                        légale, laboratoires d’analyses médicales, centres de
                        radiologie, cliniques, agence de promotion
                        pharmaceutique, industrie pharmaceutique ) ; mais
                        aussi dans des hôpitaux, des centres de protection
                        maternelle et infantile ; au sein des services sociaux
                        publics ou privés (caisses d'allocations familiales,
                        caisses d'assurance maladie, tribunal d’instance
                        chargé des affaires médicales…) <br><br>
                    Compétences professionnelles acquises : <br><br>Organisation et planification des activités
                        médicales (accueil, consultations, rendez-vous,
                        soins…) ;
                        Savoir écouter, orienter et rassurer les patients ;
                        Normes rédactionnelles et production des
                        documents médico-administratifs ;
                        Pratique et usage des termes médicaux ainsi
                        que la nomenclature des actes médicaux ;
                        Maîtrise des modes de prise en charge des
                        actes médicaux ;
                        Maîtrise des soins de base et premiers secours ;
                        Assurer la comptabilité courante, le classement
                        et l’archivage des dossiers et courriers ;
                        Techniques et pratiques de la bureautique<br><br>Insertion en milieu hospitalier : Aptitude à la
                        bureautique & usage Internet ; Communication
                        écrite et orale en milieu hospitalier ; Le personnel
                        médical ; La Secrétaire médical, insertion,
                        évolution, entrepreneuriat </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Compris</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade " id="vie" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="staticBackdropLabel">Assistante De Vie Sociale</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-dialog modal-dialog-scrollable">


                     MÉTIER : AUXILIAIRE DE VIE <br>
                        DURÉE DE LA FORMATION : 09 MOIS + 03 MOIS DE STAGE
                        DANS LES CABINETS  <br>
                        NIVEAU MINIMUM REQUIS : BEPC <br>
                        DIPLÔME OBTENU : CERTIFICAT DE QUALIFICATION
                        PROFESSIONNELLE (CQP, MINEFOP) - ATTESTATION DE
                        COMPETENCES PROFESSIONNELLES <br> <br>
                    Activités : <br>
                    L'auxiliaire de vie est chargé (e) de prendre soin des
                        personnes à mobilité réduite, ça peut des personnes
                        âgées, des accidentés ou un enfant dépendant.
                        L'auxiliaire de vie suit l'évolution de la santé des
                        enfants, des personnes âgées, handicapées,
                        accidentées ou dépendantes.<br>L'auxiliaire de vie sociale assure
                        un rôle d'alerte médicale. Elle suit de près
                        l'évolution de la santé des enfants, des personnes
                        âgées, handicapées, accidentées ou dépendantes.
                        Elle veille à leur bien-être et les aide dans les actes
                        de la vie quotidienne. Son rôle est à la frontière
                        du médical et du social. Elle rompt l'isolement,
                        lutte contre l'exclusion et préserve l'autonomie de la personne aidée. Il est aussi de sa responsabilité de
                        repérer les problèmes et de demander une aide
                        médicale classique ou en urgence. <br>En général, elle
                        n'intervient que quelques heures par jour, aux
                        moments qui exigent sa présence. Par sa présence
                        régulière, elle apporte soutien et réconfort. Ses
                        modalités d’intervention sont décidées au cas par
                        cas, en fonction du degré de dépendance de la
                        personne aidée <br> <br>
                      Exercice du métier : <br>Le métier d'auxiliaire de vie
                        sociale s’exerce aussi bien à l’hôpital qu’en
                        clinique. Elle travaille comme assistante sociale,
                        exerce dans les maisons de retraite, auprès des
                        personnes handicapées, les ONG, les responsable
                        de crèches, garderies, et peut exercer librement en
                        auto emploi.
                        L’auxiliaire de vie sociale travaille au sein d’une
                        équipe pluridisciplinaire. Elle est tenue de respecter
                        les décisions prises par le personnel soignant <br> <br>
                      Compétences professionnelles acquises : <br>Savoir aider et accompagner les personnes en
                        stimulant leur autonomie ;
                        Discrétion ;
                        Sens de l’organisation ;
                        Capacité d’adaptation.
                        Connaissance des pathologies ;
                        Veiller au confort et à l'hygiène ;
                        Soutien psychologique ;
                        Relayer le corps médical ;
                        Assurer les soins aux personnes âgées, alitées,
                        handicapées…<br><br>Insertion en milieu hospitalier :
                        Bureautique/Internet ; Communication écrite et
                        orale en milieu hospitalier ; Le Personnel du milieu
                        hospitalier ; L’Auxiliaire de Vie, insertion,
                        évolution, entrepreneuriat. </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Compris</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade " id="kin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="staticBackdropLabel">kinesitherapie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-dialog modal-dialog-scrollable">
                         DURÉE DE LA FORMATION : 09 MOIS + 03 MOIS DE STAGE
                        DANS LES CABINETS  <br>
                        NIVEAU MINIMUM REQUIS : PROBATOIRE  <br>
                        DIPLÔME OBTENU : CERTIFICAT DE QUALIFICATION
                        PROFESSIONNELLE (CQP, MINEFOP) - ATTESTATION DE
                        COMPETENCES PROFESSIONNELLES. <br> <br>
                    Activités : <br>Le Kinésithérapeute Assistant a pour
                        mission d’aider le kinésithérapeute à réaliser de
                        façon manuelle ou instrumentée, des actes destinés
                        à rétablir les capacités fonctionnelles (musculaires,
                        articulaires, organiques) ou à en prévenir
                        l’altération. Il traite les traumatismes dus aux accidents ou les conséquences du vieillissement. Il
                        soigne les affections bénignes (lombalgies,
                        torticolis, entorses). <br> Entièrement responsable de ses
                        actes, il choisit les méthodes et les techniques à
                        employer. Celles-ci sont variées et adaptées à
                        chaque cas : massothérapie, physiothérapie (eau,
                        chaleur, électricité), gymnastique médicale,
                        drainage lymphatique, kinésithérapie respiratoire,
                        articulaire, fonctionnelle ou motrice. <br> L’assistant
                        du kinésithérapeute participe à la prévention : il
                        conseille les patients afin qu’ils puissent éviter de
                        rencontrer les mêmes difficultés (hygiène,
                        maintien). <br><br>
                    Exercice du métier : <br>Le métier d’assistant en
                        kinésithérapie s’exerce aussi bien à l’hôpital qu’en
                        clinique, en maison de retraite ou en cabinet de
                        ville, dans les ONG. L’assistant kinésithérapeute
                        peut aussi intervenir dans le domaine du sport, de la
                        prévention, de la remise en forme (relaxation,
                        massages) et de la thalassothérapie (balnéothérapie,
                        hydrothérapie, etc…). <br>
                        Il travaille avec des individus ou des groupes de
                        tous les âges et situations avec une gamme de
                        conditions, y compris Neurologique (accident
                        vasculaire cérébral, sclérose en plaques, maladie de
                        Parkinson) ; Neuro musculo squeletal (douleur
                        dorsale, trouble associé au coup de fouet cervical,
                        blessures sportives, arthrite) ; Cardiovasculaire
                        (maladie cardiaque chronique)
                        Respiratoire (asthme, maladie pulmonaire
                        obstructive chronique, fibrose kystique). <br> <br>
                 Compétences professionnelles acquises : <br>Insertion en milieu hospitalier :
                        Bureautique/Internet ; Communication écrite et
                        orale en milieu hospitalier ; Le Personnel du milieu
                        hospitalier ; L’Auxiliaire de Vie, insertion,
                        évolution, entrepreneuriat.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Compris</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade " id="del" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="staticBackdropLabel">Délégué Médical</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-dialog modal-dialog-scrollable">
                     MÉTIER : ATTACHE(E) MEDICO-PHARMACEUTIQUE. <br>
                        DURÉE DE LA FORMATION : 09 MOIS + 03 MOIS DE STAGE
                        DANS LES COMPAGNIES PHARMACEUTIQUES. <br>
                        NIVEAU MINIMUM REQUIS : BAC+2 / LICENCE. <br>
                        DIPLÔME OBTENU : DIPLOME DE QUALIFICATION
                        PROFESSIONNELLE (DQP, MINEFOP) - ATTESTATION DE
                        COMPETENCES PROFESSIONNELLES. <br> <br>
                      Activités : <br> Le délégué médical est un attaché à la
                        promotion du médicament, qui représente le
                        laboratoire pharmaceutique. C’est un visiteur
                        médical, dont le travail consiste à informer les
                        professionnels de santé (prescripteurs des
                        médicaments) sur les produits dont il assure la
                        promotion, plus précisément les produits du
                        laboratoire pharmaceutique qui l’emploie. <br>
                        Son métier consiste à visiter les pharmaciens, les
                        médecins (généralistes et spécialistes) dans leur
                        cabinet ou à l’hôpital, afin de les présenter de façon
                        objective, avec une fiche technique (produits,
                        indications, posologie) des médicaments produits
                        par son laboratoire pharmaceutique.  <br>Il répond avec
                        aisance aux questions des médecins sur les
                        médicaments (principe actif, biodisponibilité,
                        tolérance, efficacité, posologie). Il informe et
                        démontre l’efficacité des médicaments (vertus,
                        composition, contre-indications, effets secondaires,
                        mode d’emploi…), mais aussi il incite le médecin à
                        le prescrire <br> <br>
                     Exercice du métier : <br>Les délégués médicaux
                        (Attaché médico-pharmaceutique, Délégué à
                        l’information médicale, Visiteur médical, Attaché
                        scientifique) exercent dans tout laboratoire
                        pharmaceutique excellant dans la recherche ; dans
                        les compagnies pharmaceutiques spécialisées dans
                        la production des médicaments ; mais aussi pour
                        l’agroalimentaire (alimentation des bébés) et les
                        sociétés prestataires, qui sont des entreprises soustraitantes de visites médicales pour les laboratoires
                        pharmaceutiques.
                    Compétences professionnelles acquises : <br> Aptitude aux connaissances scientifiques
                        (pathologie, cancérologie, parasitologie,
                        mycologie, virologie) ; <br>
                        x Aptitude aux connaissances de pharmacologie
                        et famille thérapeutique ; <br>
                        x Maîtrise de la règlementation pharmaceutique
                        et économique liée au médicament <br>
                        x Techniques de vente et communication sur la
                        parfaite maîtrise des médicaments (vertus,
                        composition, principe actif, tolérance,
                        posologie, contre-indications, effets
                        secondaires, mode d’emploi…) ;  <br>
                        x Elaboration de plan d’action sectoriel (ciblage,
                        moyens, outils promotionnels, objectifs…) ; <br>
                        x Organisation et animation des actions de
                        communication et de vente d’une gamme de
                        médicaments (négociation, prix/volume,
                        conditions de vente, délais de livraison) ; <br>
                        x Respect et application des
                        procédures commerciales des laboratoires
                        pharmaceutiques (fixation de prix, émission de
                        bon de commande, négociation des volumes,
                        mode et délai de livraison) ; <br>
                        x Développement des relations professionnelles
                        (Information et réponse aux questions des
                        pharmaciens, analyse des besoins des
                        professionnels de santé, recueil des indications
                        utiles en termes de pharmacovigilance, veille
                        concurrentielle…) ; <br>
                        x Insertion en laboratoire pharmaceutique :
                        Aptitude à la bureautique et usage Internet ; <br>
                        x Communication écrite et orale dans les
                        compagnies pharmaceutiques ;<br><br>Le personnel en laboratoire pharmaceutique ; Le
                        Délégué médical, insertion, évolution,
                        entrepreneuriat.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Compris</button>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade " id="dent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Assistant Dentaire</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-dialog modal-dialog-scrollable">


                    La formation d'assistant dentaire a pour objectif de préparer les étudiants à épauler les dentistes
                    dans leurs différentes activités au sein des cabinets dentaires. Le rôle principal des assistants
                    dentaires est d'assister le praticien lors des soins prodigués aux patients, en procédant notamment
                    à l'installation du fauteuil, à la désinfection et à la stérilisation du matériel, ainsi qu'à la
                    préparation des instruments et des produits nécessaires. Ils assurent également l'accueil et
                    l'orientation des patients, la prise de rendez-vous, la tenue des dossiers et la gestion
                    administrative du cabinet. Au-delà de ces tâches logistiques, les assistants dentaires développent
                    des compétences en communication et en relation avec la patientèle, afin de contribuer à la qualité
                    de l'expérience du patient. À l'issue de leur formation, les assistants dentaires peuvent travailler
                    dans des cabinets dentaires privés, des cliniques, des hôpitaux ou des centres de soins
                    bucco-dentaires. Ils peuvent également évoluer vers des postes de responsable d'accueil, de
                    coordinateur ou de référent pour de nouvelles pratiques au sein de leur structure d'exercice.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Compris</button>

                </div>
            </div>
        </div>
    </div>

    <center>
        <br>
        <h3>Nos Specialites </h3>
         <hr>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">


                        <img src="{{ asset('images/labos.jpg') }}" class="img img-fluid card-img-top" alt="..."
                           >
                        <div class="card-body">
                            <h5 class="card-title">Technicien De Laboratoire</h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tech">Plus
                                D'Informations</a>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100">



                        <img src="{{ asset('images/phar1.jpg') }}" class="card-img-top img-fluid" alt="..."
                            >
                        <div class="card-body">
                            <h5 class="card-title">Auxiliaire de Pharmacie</h5>
                            <p class="card-text"> </p>
                            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#phar">Plus
                                D'Informations</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">



                        <img src="{{ asset('images/secretaire.jpg') }}" class="card-img-top img-fluid" alt="..."
                           >
                        <div class="card-body">
                            <h5 class="card-title">Secretaire Medicale</h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#med">Plus
                                D'Informations</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">



                        <img src="{{ asset('images/vie.jpg') }}" class="card-img-top img-fluid" alt="..."
                             >
                        <div class="card-body">
                            <h5 class="card-title">Assistante De Vie Sociale</h5>
                            <p class="card-text"> </p>
                            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#vie">Plus
                                D'Informations</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">



                        <img src="{{ asset('images/kin.jpg') }}" class="card-img-top img-fluid" alt="..."
                             >
                        <div class="card-body">
                            <h5 class="card-title">kinesitherapie</h5>
                            <p class="card-text"> </p>
                            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#kin">Plus
                                D'Informations</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">



                        <img src="{{ asset('images/del.png') }}" class="card-img-top img-fluid" alt="..."
                            >
                        <div class="card-body">
                            <h5 class="card-title">Délégué Médical</h5>
                            <p class="card-text"> </p>
                            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#del">Plus
                                D'Informations</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">



                        <img src="{{ asset('images/dent.jpeg') }}" class="card-img-top img-fluid" alt="..."
                             >
                        <div class="card-body">
                            <h5 class="card-title">Assistant Dentaire</h5>
                            <p class="card-text"> </p>
                            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#dent">Plus
                                D'Informations</a>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </center>
@endsection
