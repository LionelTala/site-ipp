@extends('layouts.app')


@section('title', 'IPP - Pre-inscription')



@section('contenu')

         <br>
        <h3>IPP - Pre-Inscription</h3>
        <br>
        <hr>

        @if (session('success'))
            <div class="alert alert-success msg alert-dismissible" style="width: 70%">
                {{ session('success') }}
                <button class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <div class="col-md-6">

            <form method="POST" class="main_form" action="{{ route('save') }}">
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
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="col-md-6 ">

                                <input type="text" class="contactus" name="nom" id="name" placeholder="Nom">
                            </div>
                            <div class="col-md-6 ">

                                <input type="text" class="contactus" name="prenom" id="firstname" placeholder="Prenom"
                                    required>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group local-forms calendar-icon">
                                    <label style="position:absolute;left:20;">Date de naissance </label><br>
                                    <input class="contactus datetimepicker" name="date" type="text"
                                        placeholder="DD-MM-YYYY">
                                </div>
                            </div>
                            <div class="col-md-6 select-outline ">
                                <select class="custom-select" name="specialite" placeholder="Specialite" required>
                                    <option selected disabled value="">Sélectionnez une spécialité</option>
                                    <option value="Delegue Medical">Delegue Medical</option>
                                    <option value="Decretaire Medicale">Secretaire Medicale</option>
                                    <option value="Auxiliare en Pharmacie">Auxiliare en Pharmacie</option>
                                    <option value="Technicien en laboratoire">Technicien en laboratoire</option>
                                    <option value="Auxiliaire De Vie">Auxiliaire De Vie</option>
                                    <option value="Assistant Dentaire">Assistant Dentaire</option>
                                    <option value="Assistant Kinesitherapie">Assistant Kinesitherapie</option>
                                </select>
                            </div>
                            <div class="col-md-6 select-outline ">
                                <select class="custom-select" name="sexe" placeholder="Sexe" required>
                                    <option selected disabled value="">Votre Sexe</option>

                                    <option value="Feminin"> Feminin</option>
                                    <option value="Masculin">Masculin</option>
                                </select>
                            </div>
                            <div class="col-md-6 ">
                                <input type="email" class="contactus" id="email" name="email" placeholder="Email"
                                    required>
                            </div>
                            <div class="col-md-6 ">
                                <input type="tel" class="contactus" id="phone" name="numero"
                                    placeholder="Numero De Tel" required>
                            </div>
                            <div class="col-md-6 select-outline ">
                                <select class="custom-select" id="education-level" name="niveau" required>
                                    <option selected disabled value="">Sélectionnez votre niveau scolaire</option>
                                    <option value="Bepc">Bepc</option>
                                    <option value="Probatoire">Probatoire</option>
                                    <option value="Bac ou Plus">Bac Ou Plus</option>
                                </select>
                            </div>
                            <div class="col-md-6 ">
                                <input type="text" class="contactus" id="guardian-name" name="nomTuteur"
                                    placeholder="Nom Du Tuteur" required>
                            </div>
                            <div class="col-md-6 ">
                                <input type="tel" class="contactus" id="guardian-phone" name="numTuteur"
                                    placeholder="Numero Du Tuteur" required>
                            </div>
                            <button type="submit" class="send_btn">Valider</button>

                        </div>
                </center>
            </form>


        </div>
        
    
@endsection
