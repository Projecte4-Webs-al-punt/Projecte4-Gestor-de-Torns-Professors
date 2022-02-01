 <!-- START NAV -->
 <header>
 <nav class="navbar">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="../">
                <img src="" alt="Logo">
            </a>
            <span class="navbar-burger burger" data-target="navbarMenu">
                    <span></span>
            <span></span>
            <span></span>
            </span>
        </div>
        <div id="navbarMenu" class="navbar-menu">
            <div class="navbar-end">
                <a href="{{ route('home') }}"  class="navbar-item is-active">
                        Inici
                    </a>
                <a href="{{ route('contact') }}" class="navbar-item">
                        Contacte
                    </a>
                <a href="{{ route('about') }}" class="navbar-item">
                    Sobre nosaltres
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                            Compte
                        </a>
                    <div class="navbar-dropdown">
                        <a href="{{ route('dashboard') }}" class="navbar-item">
                                Panell de control
                            </a>
                        <a class="navbar-item">
                                Perfil
                            </a>
                        <a class="navbar-item">
                                Parametres
                            </a>
                        <hr class="navbar-divider">
                        <div class="navbar-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
</header>
<!-- END NAV -->