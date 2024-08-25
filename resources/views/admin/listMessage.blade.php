@extends('admin.appAdmin')

@section('title', 'IPP - Admin-message')



@section('contenu')


@if ($messages)

<style>
     
        .chat-container {
            max-width: 600px;
            margin: auto;
        }
        .message {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 15px;
            margin: 5px 0;
            position: relative;
            display: inline-block;
            max-width: 75%;
            word-wrap: break-word;
        }
        .message.sent {
            background-color: #e7e7e7;
            color: black;
            align-self: flex-end;
        }
        .message:after {
            content: '';
            position: absolute;
            right: 100%;
            top: 10px;
            border-width: 10px;
            border-style: solid;
            border-color: transparent #007bff transparent transparent;
            display: none;
        }
        .message.sent:after {
            border-color: transparent transparent transparent #e7e7e7;
            display: block;
            left: 100%;
        }
        .messages {
            display: flex;
            flex-direction: column;
            padding: 5;
        }
</style>
<center>
<br>
<h3>Liste Des Messages Recu</h3>
<br>
<hr>
</center>

@foreach ($messages as $message )
     <div class="chat-container">
        <div class="messages">
              
            
            <div class="message">
                <p style="font-size: 15"> Message De :   {{$message->email}} Numero : {{$message->numero}}</p>
               <p> {{$message->message}}</p>
              <div style="font-size: 10"> Recu le : {{ $message->created_at}} 
              </div>

            </div>
            <a href="https://wa.me/237{{$message->numero}}"><button class="btn btn-warning"> Repondre sur Whatssap </button></a>

        </div>
    </div>
@endforeach
    
@endif

@endsection