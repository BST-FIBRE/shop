@section('description', "Vente de matériel et d'outillage pour tous vos travaux de déploiement et de maintenance dans le domaine du très haut débit fibre optique.")

<?php
$famillies = Cache::store('redis')->get('famillies');
if ($famillies == null) {
    $famillies = App\Models\Famillies::orderBy('index', 'ASC')
        ->get();
    foreach ($famillies as $familly) {
        $familly->categories = App\Models\HoldOn::where('id_familly', $familly->id)->get();
        foreach ($familly->categories as $value) {
            $value->sub = App\Models\Categorie::where('sub_name', $value->name_category)->get();
        }
    }
    Cache::store('redis')->put('famillies', $famillies, now()->addMinutes(10));
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Default meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

        <meta name='author' content='Quentin Sar, Netinq'>
        <meta name='owner' content='B.S.T Fibre'>
        <meta name='subject' content="Boutique B.S.T Fibre">

        <meta name='identifier-URL' content='shop.bst-fibre.com'>
        <meta name="description" content="@yield('description')">
        <meta name='reply-to' content='contact@bst-fibre.com'>

        <meta name='language' content='FR'>
        <meta name='target' content='all'>
        <meta name='theme-color' content='#C23335'>

        <link rel='shortcut icon' type='image/png' href='{{ asset('img/icon.png') }}'>
        <link rel="apple-touch-icon" href="{{ asset('img/icon.png') }}" />

        <!-- Twitter Card meta -->
        <meta name='twitter:card' content='summary'>
        <meta name="twitter:title" content="Boutique B.S.T Fibre" />
        <meta name='twitter:url' content='https://shop.bst-fibre.com' />
        <meta name='twitter:domain' content='shop.bst-fibre.com' />
        <meta name="twitter:description" content="@yield('description')" />
        <meta name="twitter:image" content="{{asset('img/meta.png')}}" />

        <!-- Open Graph meta -->
        <meta property='og:title' content='Boutique B.S.T Fibre' />
        <meta property="og:description" content="@yield('description')" />
        <meta property="og:image" content="{{asset('img/meta.png')}}" />
        <meta property='og:type' content='website' />
        <meta property='og:url' content='https://bst-fibre.com' />
        <meta property='og:site_name' content='{{Config::get('app.name')}}' />
        <meta property="og:locale" content="fr_FR" />

        <!-- IOS meta -->
        <meta name="apple-mobile-web-app-title" content="{{Config::get('app.name')}}">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Organization",
                "name": "Boutique B.S.T Fibre",
                "legalName": "B.S.T FIBRE",
                "description": "Vente de matériel et d'outillage",
                "image": "https://shop.bst-fibre.com/img/meta.png",
                "logo": "https://shop.bst-fibre.com/img/logo.png",
                "url": "https://shop.bst-fibre.com",
                "telephone": "0987088787",
                "email": "services@bst-fibre.com",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "4a Quai Quarriet",
                    "addressLocality": "Lormont",
                    "postalCode": "33310",
                    "addressCountry": "France"
                }
            }
        </script>

        <title>@hasSection('title') @yield('title') @else Découvrez notre gamme de produits @endif</title>

        <!-- STATIC Stylesheets -->
        @hasSection('noMaster') @else
            <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts/header.css') }}">
        @endif

        <!-- GENERATE Stylesheet -->
        @if($styles ?? null)
            @foreach($styles as $style)
            <link rel="stylesheet" type="text/css"
            href="{{ asset('css/'.$style.'.css') }}">
            @endforeach
        @endif

        <!-- STATIC Boostrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>

        <style>
div.noresult {
    padding: 150px 350px;
    width: 100vw;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    z-index: 100;
}

img.noresult-bg {
    position: fixed;
    height: 100vh;
    width: 100vw;
    top: 0;
    left: 0;
    z-index: 10;
}

img.noresult-br {
    position: fixed;
    height: 50vh;
    top: 50%;
    right: 75px;
    transform: translateY(-50%);
}

div.noresult h2 {
    font-family: 'Bahnschrift';
    font-size: 8rem;
    color: var(--red-2);
    line-height: 5rem;
    margin: 0;
    position: relative;
}

div.noresult h2::after {
    content: ' ';
    position: absolute;
    bottom: -10px;
    left: 0;
    height: 10px;
    width: 100px;
    background-color: #A7DFE3;
}

div.noresult p {
    margin-left: 5px;
    font-family: 'Bahnschrift';
    font-size: 2rem;
    line-height: 1.2rem;
    color: var(--black);
    margin-top: 35px;
    margin-bottom: 25px;
}

div.noresult a {
    font-family: 'Bahnschrift';
    font-size: 1rem;
    color:var(--red-1);
    border-radius: 10px;
    border: 2px solid var(--red-1);
    padding: 10px 25px;
    position: relative;
    transition: .3s all;
    box-sizing: border-box;
    text-decoration: none !important;
}

div.noresult a:hover {
    color: var(--red-2);
    text-decoration: none !important;
    background-color: var(--red-1);
    color: #fff;
}

@media (max-width: 1400px)
{
    img.noresult-br {
        position: fixed;
        height: 30vh;
        top: 50%;
        right: 75px;
        transform: translateY(-50%);
    }
}


@media (max-width: 1200px)
{
    img.noresult-bg {
        display: none;
    }
    img.noresult-br {
        position: relative;
        transform: none;
        right: auto;
        top: auto;
    }
    div.noresult {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        padding: 250px 0 !important;
        margin: 0;
    }
    div.noresult div.nobox {
        margin-top: 50px;
        text-align: center;
    }
div.noresult h2::after {
    content: ' ';
    position: absolute;
    bottom: -10px;
    left: 25%;
    height: 10px;
    width: 25%;
    background-color: #A7DFE3;
}
}

@media (max-width: 767px)
{
    img.noresult-br {
        height: 25vh;
    }
    div.noresult {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        padding: 150px 50px !important;
    }

div.noresult h2 {
    font-family: 'Bahnschrift';
    font-size: 4rem;
    color: var(--red-2);
    line-height: 5rem;
    margin: 0;
    position: relative;
}

div.noresult h2::after {
    content: ' ';
    position: absolute;
    bottom: -10px;
    left: 25%;
    height: 10px;
    width: 25%;
    background-color: #A7DFE3;
}

div.noresult p {
    margin-left: 5px;
    font-family: 'Bahnschrift';
    font-size: 1.6rem;
    line-height: 2rem;
    color: var(--black);
    margin-top: 35px;
}
}
</style>

    </head>

    <body class="row">
        @include('layouts.header')
        <div class="noresult">
            <img src="{{ asset('svg/noresult.svg')}}" alt="No result branding" class="noresult-br">
            <div class="nobox">
                <h2>@yield('code')</h2>
                <p>@yield('message')</p>
                <a href="{{ url()->previous() }}">Retour</a>
            </div>
        </div>
        <img src="{{ asset('img/bg-noresult.png')}}" alt="No result background" class="noresult-bg">
        <script type="text/javascript" src="{{ asset('js/menu/scroll.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/menu/submenu.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/menu/mobile.js') }}"></script>
    </body>
</html>
