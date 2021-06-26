@extends('layouts.app', ['styles' => ['components/products', 'search']])

@section('title', 'Rechercher un produit')

@section('content')
<section id="search" class="row padding-header">
    <div class="col-1">

    </div>
    <div class="products col-10">
        @if (!$isEmpty)
        <div class="title">
            <h1>Résultats de recherche</h1>
            <p class="path">Pour "{{ $origin_search }}"</p>
        </div>
        @else
        <div class="noresult">
            <img src="{{ asset('svg/noresult.svg')}}" alt="No result branding" class="noresult-br">
            <div class="nobox">
                <h2>Aucun résultat trouvé pour votre recherche "{{$origin_search}}"</h2>
                @if ($tryto != null)
                <p>Essayez peut-être avec
                @for ($i = 0; $i < count($tryto); $i++)
                    <a href="{{route('search', ['search' => $tryto[$i]])}}">{{ $tryto[$i]}}, </a>
                @endfor</p>
                @else
                <p>Veuillez reformuler votre recherche</p>
                @endif
            </div>
        </div>
        <img src="{{ asset('img/bg-noresult.png')}}" alt="No result background" class="noresult-bg">
        @endif
        {{-- @for ($i = 0; $i < 10; $i++)
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
                <div class="image image-resize">
                    <img src="{{ asset('img/exemple.png')}}" alt="Product' image" />
                    <form>
                        <button>
                            <img class="shop" src="{{ asset('svg/shop.svg')}}" alt="Shop icon" />
                        </button>
                    </form>
                </div>
                <div class="title">
                    <h3>BST Sd23 - 10kW</h3>
                    <span>Ref BKE3873</span>
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
        @endfor --}}
    </div>
</section>
<script src="{{ asset('js/image.js')}}"></script>
@endsection
