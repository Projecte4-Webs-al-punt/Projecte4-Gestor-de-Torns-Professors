 <!-- START NAV -->
 <header>
     <nav class="navbar">
         <div class="container">
             <div class="navbar-brand">
                 <a class="navbar-item" href="../">
                     <img src="https://i.ibb.co/QnxXzXj/Copia-de-Tutory-cat-1.png" alt="Logo">
                 </a>
                 <span class="navbar-burger burger" data-target="navbarMenu">
                     <span></span>
                     <span></span>
                     <span></span>
                 </span>
             </div>
             <div id="navbarMenu" class="navbar-menu">
                 <div class="navbar-end">
                     <a href="{{ route('home') }}" class="navbar-item is-active">
                         Inici
                     </a>
                     <a href="{{ route('contact') }}" class="navbar-item">
                         Contacte
                     </a>
                     <a href="{{ route('about') }}" class="navbar-item">
                         Sobre nosaltres
                     </a>
                     @if (Auth::check())
                         <div class="navbar-item has-dropdown is-hoverable">
                             <a class="navbar-link">
                                 <figure class="navbar-end image ">
                                     @if (Auth::check())
                                         @if (Auth::user()->image)
                                             <img class="is-rounded is-32x32"
                                                 src="{{ asset('/storage/avatar/' . Auth::user()->image) }}">
                                         @else
                                             <img class="is-rounded is-32x32"
                                                 src="https://bulma.io/images/placeholders/128x128.png">

                                         @endif
                                     @else
                                         <img class="is-rounded is-32x32"
                                             src="https://bulma.io/images/placeholders/128x128.png">
                                     @endif
                                 </figure>
                             </a>
                             <div class="navbar-dropdown">
                                 @if (Auth::user()->role == 'admin')
                                     <a href="{{ route('dashboard') }}" class="navbar-item">
                                         Panell de control
                                     </a>
                                 @endif

                                 <a class="navbar-item" href="{{ route('profile') }}">
                                     Perfil
                                 </a>
                                 <a class="navbar-item">
                                     Parametres
                                 </a>
                                 <hr class="navbar-divider">
                                 <div class="navbar-item">
                                     <form method="POST" action="{{ route('logout') }}">
                                         @csrf

                                         <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                             {{ __('Log Out') }}
                                         </x-dropdown-link>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     @else
                         <div class="navbar-item">
                             <a href="{{ route('login') }}" class="navbar-item ">
                                 Iniciar Sessió <i class="fa fa-sign-in"></i>
                             </a>
                         </div>
                         <div class="navbar-item">
                             <a href="{{ route('register') }}" class="navbar-item">
                                 Registrar-se <i class="fa fa-user-plus" aria-hidden="true"></i>
                             </a>
                         </div>
                     @endif
                 </div>
             </div>
         </div>
     </nav>
 </header>

 <!-- END NAV -->
