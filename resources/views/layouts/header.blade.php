<header id="header">
    <div id="bar">
        <a href="/">
            <img alt="Logo" src="{{ asset('img/logo.png') }}" id="logo">
        </a>
        <form action="{{ route('search') }}" method="GET">
            <input type="search" name="search" placeholder="Rechercher un produit..."
            value="{{ isset($origin_search) ? $origin_search : ''}}">
            <button type="submit">
                <img alt="Search icon" src="{{ asset('svg/search.svg') }}">
            </button>
        </form>
        <div id="nav-auth">
            <a href="{{ route('user.index') }}">
                <div class="nav-box-auth">
                    <img alt="People icon" src="{{ asset('svg/account.svg') }}" />
                    @if (Auth::check() && Auth::user()->firstname == null)
                        <span>Compléter mon compte</span>
                    @elseif (Auth::check() && Auth::user()->firstname != null)
                        <span>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
                    @else
                        <span>Mon compte</span>
                    @endif
                </div>
            </a>
            <a href="#">
            <div class="nav-box-auth">
                <img alt="Store icon" src="{{ asset('svg/store.svg') }}" />
                <div id="nav-store">
                    <span>Mon panier</span>
                    <span>(0,00€)</span>
                </div>
            </div>
            </a>
        </div>
    </div>
    <nav id="nav">
        @foreach ($famillies as $family)
        <div class="nav-fa">
            <a href="" id="fa{{ $family->id }}" class="nav-item">{{ $family->name }}</a>
            <div class="submenu" id="sb{{ $family->id }}">
                @foreach ($family->categories as $category)
                <div class="category">
                    <a href="" class="big">{{ $category->name_category }}</a>
                    @foreach ($category->sub as $item)
                    <div class="sub-little">
                        <img alt="Triangle" src="{{asset('svg/triangle.svg')}}" />
                        <a href="" class="little">{{ $item->name }}</a>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </nav>
</header>
<nav id="nav-m">
    <a href="{{ route('user.index') }}" class="nav-m-box">
        <div>
            <img alt="People icon" src="{{ asset('svg/account.svg') }}" />
            @if (Auth::check() && Auth::user()->firstname == null)
                <span>Compléter mon compte</span>
            @elseif (Auth::check() && Auth::user()->firstname != null)
                <span>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
            @else
                <span>Mon compte</span>
            @endif
        </div>
    </a>
    <div class="nav-m-box" onclick="deployed('nav-menu-m') ? retract('nav-menu-m') : deploy('nav-menu-m')">
        <img alt="Burger icon" src="{{ asset('svg/burger.svg') }}" />
        <span>Menu</span>
    </div>
    <a href="#" class="nav-m-box">
    <div>
        <img alt="Store icon" src="{{ asset('svg/store.svg') }}" />
            <span>Mon panier</span>
    </div>
    </a>
</nav>
<nav class="nav-menu-m" id="nav-menu-m">
    <a href="/">
        <img src="{{ asset('img/logo.png')}}" alt="Logo" class="logo">
    </a>
    <?php $i = 0 ?>
    <a class="nav-item" href="/">
        <span>
            <img src="{{ asset('svg/home.svg')}}" alt="Home icon" class="icon">
            Accueil
        </span>
        <div class="round">
            <img src="{{ asset('svg/arrow-red.svg')}}" alt="Arrow right">
        </div>
    </a>
    @foreach ($famillies as $family)
        <div id="fa{{ $family->id }}" class="nav-item familly" onclick="deploy('ca{{ $family->id }}');">
            {{ $family->name }}
            <div class="round">
                <img src="{{ asset('svg/arrow-red.svg')}}" alt="Arrow right">
            </div>
        </div>
        <div class="submenu-m" id="ca{{ $family->id }}">
        @foreach ($family->categories as $category)
            <?php $i++ ?>
            <div class="nav-item" onclick="deploy('lt{{ $i }}');">
                {{ $category->name_category }}
                <div class="round">
                    <img src="{{ asset('svg/arrow-red.svg')}}" alt="Arrow right">
                </div>
            </div>
            {{-- {{ dd($category) }} --}}
            <div class="sub-little" id="lt{{ $i }}">
            @foreach ($category->sub as $item)
                <div class="nav-item">
                    {{ $item->name }}
                    <div class="round">
                        <img src="{{ asset('svg/arrow-red.svg')}}" alt="Arrow right">
                    </div>
                </div>
                @endforeach
                <div class="nav-item nav-back" onclick="retract('sub-little')">
                    <div class="round">
                        <img src="{{ asset('svg/arrow-red.svg')}}" alt="Arrow">
                    </div>
                    Retour
                </div>
            </div>
        @endforeach
        <div class="nav-item nav-back" onclick="retract('submenu-m')">
            <div class="round">
                <img src="{{ asset('svg/arrow-red.svg')}}" alt="Arrow">
            </div>
            Retour
        </div>
    </div>
    @endforeach
    <div class="close-menu-m" onclick="retract('nav-menu-m');"></div>
</nav>
