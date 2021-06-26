@section('description', "Vente de matériel et d'outillage pour tous vos travaux de déploiement et de maintenance dans le domaine du très haut débit fibre optique.")

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

    </head>

    <body class="row">
        @include('layouts.header')
        @yield('content')
        <script type="text/javascript" src="{{ asset('js/menu/scroll.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/menu/submenu.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/menu/mobile.js') }}"></script>
    </body>
</html>
