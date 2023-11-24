<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <title>Connexion</title>
</head>
<body>
    <div class="container">
      <div class="head">
        <div class="">
           <img src="{{asset("image/brand.png")}}" alt="image logo" class="logo">
        </div>
         <h1 class="titre">Se connecter</h1>
       </div>
        
        <!-- Formulaire de Connexion -->
       <!-- <form action="process_login.php" method="post" class="formulaire">-->
         <form method="post" class="formulaire" action="{{ route('login') }}">
            @csrf
          <div class="partie1">
            <div class="">
             <img src="{{asset("image/Illustration - A Human Sitting.png ")}}" alt="image illustration" class="imgillu">
             <img src="{{asset("image/cercles.png")}}" alt="image illustration" class="image1">
             <img src="{{asset("image/Ellipse 8.png")}}" alt="image illustration" class="image3">
             <img src="{{asset("image/cercles (1).png")}}" alt="image illustration" class="image2">
             </div>
           </div>
        <!--lien d'Inscription -->
         <div class="partie2">
                <div class="item">
             
                  <x-input id="staticEmail2" class="form-control-plaintext" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
                <!--  <input type="text"  class="form-control-plaintext" id="staticEmail2" placeholder="Email" >-->
                <x-input  id="inputPassword2"  class="form-control-plaintext"
                                type="password"
                                name="password"
                                placeholder="Mot de passe" required autocomplete="current-password" />
                <!--  <input type="password" class="form-control-plaintext "  id="inputPassword2" placeholder="Mot de passe">-->
                </div>
            <div class="con">
             <div class="nexion">
                <a href="{{ route('register')}}" class="inscrire">S'inscrire</a><br>

                @if (Route::has('password.request'))
                  <a class="mpo" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié?') }}
                  </a>
               @endif

               <!-- <a href="#" class="mpo">Mot de passe oublier</a>-->
            </div>
             <div class="button">
               <x-button  type="submit">
                  {{ __('Connexion') }}
              </x-button>
                <!--<button type="submit">Connexion</button>-->
            </div>
         </div>
        </div>
    </div>
</body>
</html>