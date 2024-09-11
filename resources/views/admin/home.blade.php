<link rel="stylesheet" href="{{ asset('style.css') }}">
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <center>
{{-- message --}}
<center style="width: 400px"> <br><br><br>
 <div class="login-right">
    <div class="login-right-wrap">
        <h3>Bienvenue</h3>
         <h5>Connexion</h5>
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Email<span class="login-danger">*</span></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
                <span class="profile-views"><i class="fas fa-envelope"></i></span>
            </div>
            <br>
            <div class="form-group">
                <label>Mot De Passe <span class="login-danger">*</span></label>
                <input type="password" class="form-control pass-input @error('password') is-invalid @enderror" name="password" placeholder="Mot De Passe">
                <span class="profile-views feather-eye toggle-password"></span>
            </div>
         <br>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Connexion</button>
            </div>
        </form>
        
     
    </div>
</div>

</center>
 </center>