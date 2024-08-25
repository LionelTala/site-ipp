@extends('admin.appAdmin')

@section('title', 'IPP Admin-candidature')



@section('contenu')

    @if ($candidatures)
        <style>

        </style>
        </head>

        <body>

            </style>
            <center>
                <br>
                <h3>Liste Des Candidature Recu</h3>
                <br>
                <hr>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                @foreach ($candidatures as $candidature)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading{{$candidature->id}}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$candidature->id}}" 
                                                aria-expanded="false" aria-controls="flush-collapse{{$candidature->id}}">
                                           <strong style="font-size: 20"> {{$candidature->noms}} {{$candidature->prenoms}} </strong>
                                            <div style="margin-left: 55%; color:green" > Reçu le : {{$candidature->created_at}}</div>

                                        </button>
                                    </h2>
                                    <div id="flush-collapse{{$candidature->id}}" class="accordion-collapse collapse" 
                                         aria-labelledby="flush-heading{{$candidature->id}}" 
                                         data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="col-md-8">
                                                <div class="card">
                                                    <div class="card-body"> 
                                                        <div>
                                                            <div style="align-items: left: 0;">
                                                                <strong> Noms : </strong> {{$candidature->noms}} 
                                                                <strong style="margin-left: 10%"> Prenoms : </strong> {{$candidature->prenoms}} 
                                                            </div>
                                                             

                                                            
                                                            <div style="align-items: left: 0;">
                                                                <strong> Email : </strong> {{$candidature->email}} 
                                                                <strong style="margin-left: 10%"> Date De Naissance : </strong> {{$candidature->date}} 
 
                                                            </div>
                                                             <div>
                                                                <strong> Numero : </strong> {{$candidature->numero}} 
                                                                <strong style="margin-left: 10%"> Sexe : </strong> {{$candidature->sexe}} 

                                                             </div>
                                                             <div>
                                                                <strong> Niveau Scolaire : </strong> {{$candidature->niveau}} 
                                                                <strong style="margin-left: 10%"> Specialite Chosit  : </strong> {{$candidature->specialite}} 
 
                                                             </div>
                                                             <div>
                                                                <strong> Nom Du Tuteur : </strong> {{$candidature->nomTuteur}} 
                                                                <strong style="margin-left: 10%"> Numero Du Tuteur : </strong> {{$candidature->numTuteur}} 
 
                                                             </div>

                                                        </div> <br>
                                                        <a href="https://wa.me/237{{$candidature->numero}}" target="_blank"> <button class="btn btn-primary">Repondre sur Whatssap</button> </a>
                                                         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    
                    </div>
                </div>
    @endif
    </center>

@endsection
