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
                             {{ Auth::user()->name }} {{ Auth::user()->lastname }}
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
                                 @if (Auth::user()->role == 'admin'|| Auth::user()->role == 'teacher')
                                     <a href="{{ route('dashboard') }}" class="navbar-item">
                                         Panell de control
                                     </a>
                                 @endif

                                 <a class="navbar-item" href="{{ route('profile') }}">
                                     Perfil
                                 </a>
                                 <hr class="navbar-divider">
                                 <div class="navbar-item">
                                     <form method="POST" action="{{ route('logout') }}">
                                         @csrf

                                         <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                             {{ __('Tancar Sessió') }}
                                         </x-dropdown-link>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     @else
                         <div class="navbar-item">
                             <a href="{{ route('login') }}" class = "button is-warning">
                     <span class = "icon is-small">
                        <i class = "fas fa-sign-in-alt"></i>
                     </span>
                                 <span>Inicia Sessió</span>
                             </a>

                         </div>
                     @endif
                 </div>
             </div>
         </div>
     </nav>
 </header>
 <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
 <script>
     document.addEventListener('DOMContentLoaded', () => {

         // Get all "navbar-burger" elements
         const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

         // Check if there are any navbar burgers
         if ($navbarBurgers.length > 0) {

             // Add a click event on each of them
             $navbarBurgers.forEach( el => {
                 el.addEventListener('click', () => {

                     // Get the target from the "data-target" attribute
                     const target = el.dataset.target;
                     const $target = document.getElementById(target);

                     // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                     el.classList.toggle('is-active');
                     $target.classList.toggle('is-active');

                 });
             });
         }

     });
     tinymce.init({
         selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
         plugins: 'code table lists',
         toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
     });
 </script>
 <!-- END NAV -->
