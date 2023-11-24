<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/compte.css')}}" >
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <title>Créer un compte</title>
</head>
<body>
    <div class="container">
      <form method="POST" action="{{ route('register') }}">
        @csrf
      <div class="groupe">
        <img src="{{asset("image/Ellipse 5.png")}}" alt="Ellipse5" class="ima1">
      <div class="partie1">
         <div class="imgs">
             <img src="{{asset("image/brand.png")}}" alt="image logo" class="logo2">
            <h1 class="inscrip">Inscription</h1>
             <img src="{{asset("image/sitting-2.png")}}" alt="person sitting" class="person">
           </div>
              <div class="">
                <img src="{{asset("image/Ellipse 11.png")}}" alt="Ellipse11" class="ima2">
                <img src="{{asset("image/cercles (1).png")}}" alt="cercle" class="ima3">
            </div>
       </div>
     <div class="partie2">
        <div class="picture">
            <img src="{{asset("image/Ellipse 6.png")}}" alt="Ellipse6" class="ima4">
            <img src="{{asset("image/Ellipse 8.png")}}" alt="Ellipse8" class="ima5">
            <div class="ell8">
              <img src="{{asset("image/Ellipse 7.png")}}" alt="Ellipse7" class="ima6">
           </div>
           <div class="groupeima2">
            <img src="{{asset("image/Ellipse 9.png")}}" alt="Ellipse9" class="ima7">
            <img src="{{asset("image/Ellipse 10.png")}}" alt="Ellipse10" class="ima8">
          </div>
         </div>
        <div class="item">
        <h1 class="titrecompte">Créer un compte</h1>
          <div class="">
             <!-- <input type="text"  class="form-control-plaintext" id="staticEmail2" placeholder="Nom" ><br><br>-->
             <x-input id="staticEmail2" class="form-control-plaintext" type="text" name="name" :value="old('name')" placeholder="Nom" required autofocus/><br><br>
              <!--<input type="text"  class="form-control-plaintext" id="staticEmail2" placeholder="Email" ><br><br>-->
              <x-input  id="staticEmail2" class="form-control-plaintext" type="email" name="email" :value="old('email')" placeholder="Email" required /><br><br>
            <!--<input type="password" class="form-control-plaintext "  id="inputPassword2" placeholder="Mot de passe"><br><br>-->
            <x-input id="inputPassword2" class="form-control-plaintext "
                                          type="password"
                                          name="password"
                                          placeholder="Mot de passe" required autocomplete="new-password" /><br><br>
             <!-- <input type="password" class="form-control-plaintext "  id="inputPassword2" placeholder="Confirmer mot de passe">-->
              <x-input id="inputPassword2"  class="form-control-plaintext "
                                type="password"
                                placeholder="Confirmer mot de passe" name="password_confirmation" required />
            </div>
              
            <div class="info">
             <div class="">
                 <!--<a href="#" class="enre">Déjà enregistrer?</a>-->
                 <a class="enre" href="{{ route('login') }}">
                  {{ __('Déja enregistré?') }}
                </a>
            </div>
             <div class="button">
               <!-- <button type="submit">S'inscrire</button>-->
                <x-button type="submit">
                  {{ __("S'inscrire") }}
              </x-button>
            </div>
         </div>
     </div>
  </div>
</div>
</form>
</div>
</body>
</html>