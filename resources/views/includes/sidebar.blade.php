<div class="wrapper">

    <div class="">

        <aside class="sidebar">
            <nav class="menu">
                <div class="menu-category">
                    <header class="category-header">Parametres</header>
                    <ul class="menu-list">
                        <li><a>Parametres de la Pàgina</a></li>
                        <li><a>Parametres Generals</a></li>
                    </ul>
                </div>
                <div class="menu-category">
                    <header class="category-header">Gestions</header>
                    <ul class="menu-list">
                        <li><a>Gestió d'Usuaris</a></li>
                    </ul>
                </div>
                <div class="menu-category">
                    <header class="category-header">Components</header>
                    <ul class="menu-list">
                        <li><a href="{{ route('users') }}">Total d'Alumnes</a></li>
                        <li><a href="{{ route('doubts') }}">Total de Dubtes</a></li>
                        <li><a href="/doubts?status=pendent">Dubtes no Resolts</a></li>
                        <li><a href="/doubts?status=resolt">Dubtes Resolts</a></li>
                    </ul>
                </div>
                <div class="menu-category">
                    <header class="category-header">Altres</header>
                    <ul class="menu-list">
                        <li>
                            <a class="navbar-item" href="{{ route('profile') }}">
                                El Meu Perfil
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Tanca la Sessió') }}
                                </x-dropdown-link>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>
    </div>
</div>
