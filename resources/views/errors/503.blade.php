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
        <meta name='theme-color' content='#531018'>

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

        <title>Boutique B.S.T Fibre</title>
    </head>
    <body class="row">
        <section>
            <div>
                <img alt="Logo" src="{{ asset('img/logo.png') }}" />
                <h1>Site temporairement en travaux</h1>
                <p>Notre équipe effectue des travaux de maintenance afin d'améliorer votre expérience sur nos services.</p>
                <span>Nous serons de retour bientôt...</span>
            </div>
            <img alt="Wave" src="{{ asset('svg/wave.svg') }}" class="wave">
        </section>
        <style>
            @font-face {
                font-family: "Bahnschrift";
                src: url("../../../assets/fonts/BAHNSCHRIFT.TTF") format('truetype');
            }
            body {
                margin: 0 !important;
                padding: 0 50px
            }
            section {
                width: 100%;
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            section div {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 45px 50px;
                border-radius: 10px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            section div h1 {
                font-family: 'Bahnschrift';
                color: #6B242C;
                font-size: 2rem;
                margin: 0;
                margin-top: 25px;
                text-align: center;
            }
            section div p {
                font-family: 'Bahnschrift';
                color: #2B2B2B;
                font-size: 1.2rem;
                margin: 0;
                margin-top: 15px;
                text-align: center;
            }
            section div span {
                font-family: 'Bahnschrift';
                color: #C23335;
                margin: 0;
                text-align: center;
            }
            section img.wave {
                position: absolute;
                top: 0;
                right: 0;
                height: 100vh;
                z-index: -1;
            }
        </style>
    </body>
</html>
