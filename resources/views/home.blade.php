@extends('layouts.app', ['styles' => ['home', 'components/products']])

@section('content')
<section id="home" class="row padding-header">
    <div class="col-1">
        <div class="filter retract" id="filter">
            <button type="button" class="open" onclick="filterAct()"><img src="{{ asset('svg/arrow-white.svg') }}" alt="Arrow right"></button>
        </div>
    </div>
    <div class="products col-10">
        <a href="">
            <div class="banner">
                <img src="{{ asset('img/banner.png') }}" alt="Banner">
            </div>
        </a>
        <div class="title">
            <h1>Soudeuses <span>(3 Produits)</span></h1>
            <p class="path">
                <a href="/">Boutique</a> >
                <a href="">Outillage</a> >
                <a  href="javascript:void(0)" class="disabled">Soudeuses</a>
            </p>
        </div>
        @for ($i = 0; $i < rand(3, 30); $i++)
        <a href="{{ route('product')}}">
            <div class="product">
                <script type="application/ld+json">
                {
                    "@context": "http://schema.org/",
                    "@type": "Product",
                    "name": "BST Sd23 - 10kW",
                    "category": "Test",
                    "manufacturer": "Produit par",
                    "offers": {
                        "@type": "Offer",
                        "priceCurrency": "EUR",
                        "price": "837",
                        "availability": "https://schema.org/ItemAvailability",
                        "seller": {
                            "@type": "Organization",
                            "name": "B.S.T Fibre"
                        }
                    }
                }
            </script>
            <?php $faker = Faker\Factory::create(); ?>
                <div class="image image-resize">
                    <img src="{{ $faker->imageUrl($width = 300, $height = 300, 'technics', 'Faker') }}" alt="Product' image" />
                    <form>
                        <button>
                            <img class="shop" src="{{ asset('svg/shop.svg')}}" alt="Shop icon" />
                        </button>
                    </form>
                </div>
                <div class="title">
                    <h3>{{$faker->words(2, true)}}</h3>
                    <span>Ref {{$faker->randomNumber(6, true)}}</span>
                </div>
                <div class="footer">
                    <a href="" class="more">Fiche produit <img src="{{ asset('svg/arrow.svg')}}" alt="Arrow right"></a>
                    <div class="cost">
                        <p>837€ <span>HT</span></p>
                        <div class="stock">
                            <div class="stock-circle stock-green"></div>
                            En stock
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endfor
    </div>
</section>
<script src="{{ asset('js/image.js')}}"></script>
<script src="{{ asset('js/filter.js')}}"></script>
@endsection
