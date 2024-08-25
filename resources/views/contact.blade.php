@extends('layouts.app')
 

@section('title', 'IPP - Contact')

 

@section('contenu')
 
<center>
    <br>
<h3>IPP - Envoyer Nous Un Message</h3>
<br>
<hr>
 
@if (session('success'))
<div class="alert alert-success msg alert-dismissible" style="width: 70%">
    {{session('success')}}
    <button class="btn btn-close"  data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
          <div class="col-12  col-sm-8 col-md-c col-lg-6 m-auto">
            <div class="card">
              <div class="card-body">
    <form method="post" action="{{route('newMessage')}}">
       @csrf
       @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          
          <input type="email" class="form-control my-3 py-2" name="email" placeholder="Votre Email..."   aria-describedby="emailHelp">
 
          <input type="tel" class="form-control my-3 py-2" name="numero" placeholder="Votre Numero(Whatssap de preference)..."   aria-describedby="emailHelp">

         <div class="mb-3">
            <label for="" class="form-label"></label>
            <textarea class="form-control" n id="" rows="3" name="message" placeholder="Votre Message..."></textarea>
         </div>
         
  
         
         
        <button type="submit" class="btn btn-success">Envoyer</button>
      </form>
        <center> ou </center> <br>
     <a href="" >   <button class="btn btn-success">Contactez Nous sur Whatssap</button> </a>
              </div>
            </div>
          </div>
        </div>
 </div>
</center>    
@endsection