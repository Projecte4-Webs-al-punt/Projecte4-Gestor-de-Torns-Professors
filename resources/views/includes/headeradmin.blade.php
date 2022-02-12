<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <span class="navbar-item">
            <a href="{{ route('dashboard') }}"><img src="https://i.ibb.co/QnxXzXj/Copia-de-Tutory-cat-1.png" alt="Logo" width="150" height="40"></a>
        </span>
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbar-example">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbar-example" class="navbar-menu">
        <div class="navbar-start">
            <a href="/dashboard" class="navbar-item is-tab">Inici Panell</a>
            <a class="navbar-item is-tab"></a>
        </div>
        <div class="navbar-end">
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
                             <div class="navbar-dropdown is-right">
                                 @if (Auth::user()->role == 'admin'|| Auth::user()->role == 'teacher')
                                     <a href="{{ route('home') }}" class="navbar-item">
                                         Web
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
                                             <a>{{ __('Tanca la Sessió') }}</a>
                                         </x-dropdown-link>
                                     </form>
                                 </div>
                             </div>
                         </div>
        </div>
    </div>
</nav>