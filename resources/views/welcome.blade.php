<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/accueil.css')}}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>page accueil</title>
</head>
<body>
    <div class="container">
      <div class="head">
        <div class="tableau">
          <div class=" bord">
              <!-- <a href="#" class="bord">Tableau bord</a>-->
          <x-nav-link :href="route('welcome3')" :active="request()->routeIs('welcome3')" class="shorten">
                  {{ __('Shorten URL') }}
              </x-nav-link>
            
          </div>
        </div>
        <div class="imagelogo">
            <img src="{{asset("image/brand.png")}}" alt="logo page-accueil" class="logo3">
        </div>
            <div class="connection">
                <a  href="{{route('login')}}" class="connex">Se connecter</a>
                
                <a  href="{{route('register')}}" class="inscri">S’inscrire</a>
            </div>
        </div>
          <div class="section1">
              <div class="partieA">
                <img src="{{asset("/image/Vector 1.png")}}" alt="vecteur" class="vecteur">
                <h1 class="titre">Link Africa  - Raccourcis d ’ URL </h1>
                <img src="{{asset("image/Ellipse 5 (1).png")}}" alt="Ellipse 5(1)" class="demicercle">
              </div>
              <div class="partieB">
                <img src="{{asset("image/cercles (2).png")}}" alt="cercle" class="cercle2">
                <div class="cadre1">
                  <div class="zone1">
                   
                    <form method="POST" action="{{ route('welcome') }}">
                      @csrf
                       @if (session('success_message'))
                        {!! session('success_message') !!}
                      @endif

                   
                      <a href="#" class="url">Entrez l'URL à raccourcir</a>
                     <!-- <input type="text"  class="form-control-plaintext" id="staticEmail2" placeholder="" >-->
                      <input class="form-control-plaintext"  id="staticEmail2"  type="url" name="original_url" placeholder=""/>
        
                      @error('original_url')
                      <span class="text-red-400 m-2 p-2">{{ $message}}</span>
                      @enderror
                     
                        <div class="button">
                        <!--<button type="submit" class="raccour">Raccourcir l’url</button>-->
                          <button class="raccour" type="submit">Raccourcir l’url</button>
                        </div>
                       </form>
                   
                  </div>
                
            
                 </div>
                 <div class="zone3">
                  <div class="cadre2">
                     <!-- <h2 class="lien1">https://www.figma.com/file/vLS9x...</h2>-->
                  
                        <input type="text" id="lien_original" class="lien1"   readonly placeholder="original_url">
                    
                
                      <img src="{{asset("image/Line 4.png")}}" alt="vecteur-ligne" class="ligne">
                     <!-- <h2 class="lien2">rb.gy/rtkj7</h2>-->
                      <div>
                     
                        <input type="text" id="lien_raccourci" class="lien2"  readonly placeholder="short_url">
                      </div>
                      <img src="{{asset("image/Line 4.png")}}" alt="vecteur-ligne" class="ligne">
                      <img src="{{asset("image/Vector.png")}}" alt="vecteursimple" class="vectsimple">
                      <img src="{{asset("image/Line 4.png")}}" alt="vecteur-ligne" class="ligne">
                      <!-- <h2 class="lien3">Copy</h2>-->
                       <button  class="butt">
                         <i class="fa-solid fa-copy"></i>
                       </button>
                  </div>
                    <div class="">
                    <!--<img src="" alt="vecteur-supprimer" class="supprimer">-->
                      <button type="button" class="butsup">
                        <img src="{{asset("image/Vector (1).png")}}" alt="vecteur-supprimer" class="supprimer">
                      </button>
                    
                     </div>
                  </div>
               
              </div>
         </div>
         <div class="section2">
          <div class="cadre">
             <div class="partieC">
            <p class="para">Un raccourci URL rapide et convivial.<br><br>
              Raccourcisseur d'URL gratuit pour transformer les liens longs et laids en URL courtes, agréables, mémorables et traçables. Utilisez-le pour raccourcir les liens pour toutes les plateformes de médias sociaux, les blogs, les SMS, les courriels, les publicités, ou à peu près partout où vous voulez les partager. Twitter, Facebook, YouTube, Instagram, WhatsApp, emails, SMS, vidéos.<br><br> 
              Après avoir raccourci l'URL, vérifiez le nombre de clics qu'elle a reçus.
              
            </p>
             </div>
             <div class="partieD">
             <div class="cadreblanc">
              <div class=""> <img src="{{asset("image/Vector 2.png")}}" alt="vector 2" class="vector2"></div>
              <img src="{{asset("image/UH14BokRgU0SlAUI.png")}}" alt="image person" class="person">
              <div class=""><img src="{{asset("image/Vector 3.png")}}" alt="Vector 3" class="vector3"></div>
              </div>
             </div>
          </div>
         </div>
         <div class="section3">
          <div class="cadreA">
            <div class="partieE">
               <div class="grpe">
                <span class="color"> POURQUOI S’INSCIRE ?</span> <br><br>
                   <div class="para1"> 
                     <li class="point">Gardez vos urls déjà raccourci </li>
                      <li class="point">Personnalisez vos urls</li>
                      <li class="point">Partagez vos urls avec vos amis</li>
                      <li class="point">Voir le nombre de clics </li>
                    </div>
                </div>
                </div>
            </div>
            <div class="partieF">
              <div class="">
                <button type="submit" class="compte">Créer un compte gratuitement</button>
               </div>
            </div>
          </div>
          <div class="section4">
            <div class="">
              <img src="{{asset("image/Ellipse 8.png")}}" alt="Ellipse 8.png" class="cercle1">
            </div>
            <p class="footer">© 2023 by Defarsci. Tous droits réservés</p>
            <div class="icon">
              <img src="{{asset("image/Ellipse 7 (1).png")}}" alt="Ellipse7png" class="cercle4">
              <img src="{{asset("image/Ellipse 9 (2).png")}}" alt="Ellipse9png" class="cercle3">
            </div>
          </div>
        </div>
       </div>
    </body>
</html>