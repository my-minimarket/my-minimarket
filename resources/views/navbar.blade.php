<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">

<header id="desktop-header">
    <div id="header">
        <div id="company">
            <a href="{{ route('welcome.show') }}"><img src="{{ asset('pictures/logo_white.png') }}" alt="My MiniMarket"
                                                       id="logo"></a>
            <div id="text-company">
                <span class="helvetica">MY MINI</span>
                <span class="theboldfont">MARKET</span>
                <span class="myriadpro">, THE WORLD IN MY POCKET</span>
            </div>
        </div>
        <div id="icons-content">
            <div class="icons">
                <form action="#">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            @guest
                <div class="dropdown">
                    <a class="dropbtn" href="{{ route('login') }}">
                        <div class="icons">
                            <button type="button">
                                <i class="fa fa-user"></i>
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </div>
                    </a>
                    <div class="dropdown-content">
                        <a href="{{ route('register') }}#">S'enregistrer</a>
                    </div>
                </div>
            @else
                <div class="dropdown">
                    <a class="dropbtn" href="{{ asset('customer/modify/' . Auth::user()->id) }}">
                        <div class="icons" >
                                <button type="button">
                                    {{ Auth::user()->firstname }}
                                    <i class="fa fa-caret-down"></i>
                                </button>
                        </div>
                    </a>
                    <div class="dropdown-content">
                        {{--<a href="{{ asset('/logout') }}#">Se déconnecter</a>--}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @endguest

            <div class="icons">
                <form action="#">
                    <button type="submit"><i class="fa fa-shopping-basket"></i></button>
                </form>
            </div>
        </div>
    </div>
    <nav class="top-nav" id="desktop-nav">
        <div class="dropdown">
            <a class="dropbtn" href="#">PAYS <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
                <a href="{{ route('catalog.show', ['id' => 5]) }}">FRANCE</a>
                <a href="{{ route('catalog.show', ['id' => 6]) }}">ITALIE</a>
                <a href="{{ route('catalog.show', ['id' => 7]) }}">JAPON</a>
                <a href="{{ route('catalog.show', ['id' => 8]) }}">ÉTATS-UNIS</a>
                <a href="{{ route('catalog.show') }}">TOUS</a>

            </div>
        </div>
        <a href="{{ route('catalog.show', ['id' => 1]) }}">SUCRÉ</a>
        <a href="{{ route('catalog.show', ['id' => 2]) }}">SALÉ</a>
        <a href="{{ route('catalog.show', ['id' => 3]) }}">BOISSONS</a>
        <a href="#">PROMOTIONS</a>
    </nav>
</header>
