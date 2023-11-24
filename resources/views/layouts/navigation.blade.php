
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
   
      @if(auth()) 
    
      <div class="hidden sm:flex sm:items-center sm:ml-6">
              <ul class="nav justify-content-end">
              <li class="nav-link">
                <a class="nav-link " href="/">Raccourcir un autre Lien </a>   
                </li>
                <form method="POST" action="{{ route('logout') }}">
                
                    @csrf
                 
                  <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Deconnexion') }}
                    </x-responsive-nav-link>
                  </form>
         </ul>
      </div>
      @endif


</nav>
