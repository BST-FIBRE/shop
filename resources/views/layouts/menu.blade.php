<nav id="menu" class="retract">
    <button type="button" class="open" onclick="menuAct()"><img src="{{ asset('svg/arrow-red.svg') }}" alt="Arrow right">Navigation</button></div>
    <div>
        <a href="" class="yellow">
            <img src="{{ asset('svg/m-home.svg')}}" alt="">
            Tableau de bord
        </a>
        <a href="" class="blue">
            <img src="{{ asset('svg/m-shop.svg')}}" alt="">
            Mon panier
        </a>
        <a href="" class="purple">
            <img src="{{ asset('svg/m-business.svg')}}" alt="">
            Mes entreprises
        </a>
        <a href="" class="red">
            <img src="{{ asset('svg/m-commands.svg')}}" alt="">
            Mes commandes
        </a>
    </div>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="sumbit" class="exit">
        <img src="{{ asset('svg/exit.svg') }}" alt="Exit">Déconnexion</button>
    </form>
</nav>
<script src="{{asset('js/menu.js')}}"></script>
