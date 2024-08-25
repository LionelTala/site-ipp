@extends('layouts.app')
 

@section('title', 'IPP - Pre-inscription')

 

@section('contenu')
 
<center>
    <br>
<h3>IPP - Pre-Inscription</h3>
<br> <hr>

@if (session('success'))
<div class="alert alert-success msg alert-dismissible" style="width: 70%">
    {{session('success')}}
    <button class="btn btn-close"  data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif
 <div class="container">
    <style>
        body {
          background-color: #f8f9fa;
        }
        .form-container {
          background-color: #fff;
          padding: 2rem;
          border-radius: 0.5rem;
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .btn-primary {
          background-color: #28a745;
          border-color: #28a745;
        }
        .btn-primary:hover {
          background-color: #218838;
          border-color: #1e7e34;
        }
        .form-control{
          height: 50px; /* Ajustez la hauteur selon vos besoins */
    padding: 10px; /* Ajustez le remplissage si nécessaire */
        }
      </style>
  
      <div class="form-container mt-5 pt-5" style="width: 80%">
 
         
            <div class="card">
              <div class="card-body">
            <h2 class="mb-4">Formulaire</h2>
            <form  method="POST" action="{{route('save')}}">
              @csrf
              <center>
                   
<!-- /resources/views/post/create.blade.php -->
 
 
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->
               
                  <input type="text" class="form-control my-3 py-2" name="nom" id="name" placeholder="Nom">
               
                  <input type="text" class="form-control my-3 py-2" name="prenom" id="firstname" placeholder="Prenom" required>
                 
              
                 <div class="form-group local-forms calendar-icon">
                        <label style="position:absolute;left:20;">Date de naissance </label><br> 
                        <input class="form-control datetimepicker my-3 py-2 " name="date" type="text" placeholder="DD-MM-YYYY" >                 
                 </div>
                        
                  <select class="form-select my-3 py-2"  name="specialite" placeholder="Specialite" required>
                    <option selected disabled value="">Sélectionnez une spécialité</option>
                    <option value="Delegue Medical">Delegue Medical</option>
                    <option value="Decretaire Medicale">Secretaire Medicale</option>
                    <option value="Auxiliare en Pharmacie">Auxiliare en Pharmacie</option>
                    <option value="Technicien en laboratoire">Technicien en laboratoire</option>
                    <option value="Auxiliaire De Vie">Auxiliaire De Vie</option>
                    <option value="Assistant Dentaire">Assistant Dentaire</option>
                    <option value="Assistant Kinesitherapie">Assistant Kinesitherapie</option>
                  </select>
                  <select class="form-select my-3 py-2"  name="sexe" placeholder="Sexe" required>
                    <option selected disabled value="">Votre Sexe</option>

                    <option value="Feminin"> Feminin</option>
                    <option value="Masculin">Masculin</option>
                  </select>
                  <input type="email" class="form-control my-3 py-2" id="email" name="email" placeholder="Email" required>
                
                  <input type="tel" class="form-control my-3 py-2" id="phone" name="numero" placeholder="Numero De Tel" required>
           
                  <select class="form-select my-3 py-2" id="education-level" name="niveau" required>
                    <option selected disabled value="">Sélectionnez votre niveau scolaire</option>
                    <option value="Bepc">Bepc</option>
                    <option value="Probatoire">Probatoire</option>
                    <option value="Bac ou Plus">Bac Ou Plus</option>
                  </select>
              
                  <input type="text" class="form-control my-3 py-2" id="guardian-name" name="nomTuteur"  placeholder="Nom Du Tuteur" required>
             
                  <input type="tel" class="form-control my-3 py-2" id="guardian-phone" name="numTuteur" placeholder="Numero Du Tuteur" required>
                
                <button type="submit" class="btn btn-success my">Valider</button>
                
              </div>
              </center>
            </form>
          
          
          </div>
        </div>
      </div>
   

</center>    
@endsection