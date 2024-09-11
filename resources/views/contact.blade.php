@extends('layouts.app')
 

@section('title', 'IPP - Contact')

 

@section('contenu')
 
<center>
    <br>
<h3>IPP -      Envoyer Nous Un Message</h3>
<br>
<hr>
 
@if (session('success'))
<div class="alert alert-success msg alert-dismissible" style="width: 70%">
    {{session('success')}}
    <button class="btn btn-close"  data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

     
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
          
         
 <div class="col-md-6">
  <form id="request" class="main_form" method="post" action="{{route('newMessage')}}">
    @csrf
     <div class="row">
        <div class="col-md-6 ">
           <input class="contactus" placeholder="Votre Nom..." type="type" name="nom" required> 
        </div>
        <div class="col-md-6">
           <input class="contactus" placeholder="Numero (Whatssap De préférence)" type="tel" name="numero" required>                          
        </div>
        <div class="col-md-12">
           <input class="contactus" placeholder="Votre Adresse mail..." type="email" name="email" required>                          
        </div>
      
        <div class="col-md-12">
           <textarea class="textarea" placeholder="Message..." type="type" name="message" required></textarea>
        </div>
        <div class="col-md-12">
          <button class="send_btn">Envoyer</button>
        </div>

     </div>
  </form>
  <center> ou </center> <br>
  <a href="https://wa.me/237690773936" > <button class="btn btn-success"><i class="fa-brands fa-whatsapp"></i> Contactez Nous sur Whatssap</button> </a>
</div>
         
  
         
      

</center>    
@endsection