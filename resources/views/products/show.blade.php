@extends('layouts.app', ['styles' => ['components/view', 'components/products']])

@section('title', 'BST Sd23 - 10kW')

@section('content')
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
<section class="view padding-header col-10 offset-1">
    <div class="title">
        <h1>Soudeuses</h1>
        <p class="path">
            <a href="/">Boutique</a> >
            <a href="">Outillage</a> >
            <a href="javascript:void(0)" class="disabled">Soudeuses</a>
        </p>
    </div>
    <div class="pcard">
        <div class="img">
            <img src="{{ asset('img/exemple.png') }}" alt="Preview image" id="img-pw">
            <div class="preview" id="preview">
                <img src="{{ asset('img/exemple.png') }}" alt="Preview image" id="img-pr">
            </div>
        </div>
        <form action="">
            @csrf
            <div class="infos">
                <h1>BST Sd23 - 10kW</h1>
                <span>Ref BKE3873</span>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem</p>
            </div>
            <div class="shop">
                <div class="cost">
                    <p>837€ <span>HT</span></p>
                    <div class="stock">
                        <div class="stock-circle stock-green"></div>
                        En stock
                    </div>
                </div>
                <div class="quantity">
                    <button type="button" class="act" onclick="minus();">-</button>
                    <input type="number" id="quantity" value="1" min="1" name="quantity">
                    <button type="button" class="act" onclick="plus();">+</button>
                </div>
                <button type="submit" class="add-shop">
                    <img class="shop" src="{{ asset('svg/shop.svg')}}" alt="Shop icon" />
                    Ajouter au panier
                </button>
            </div>
        </form>
    </div>
    <a href="#more" class="more">
        <div>Plus d'informations <img src="{{ asset('svg/arrow-down.svg')}}" alt="Arrow down"></div>
    </a>
    <div id="more" class="row">
        <div class="more-box col-12 col-md-7">
            <h2>Description</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem</p>
        </div>
        <div class="more-box col-12 col-sm-6 col-md-5">
            <h2>Nos techniciens en parlent</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores </p>
        </div>
        <div class="more-box col-12 col-sm-6 col-md-4">
            <h2>Caractéristiques</h2>
            <p>Couleurs colliers : Naturel
Matières colliers : Polyamide 6.6
Types de produits : Colliers
Marque : TED Equipement®
Quantité : 100

Poids : 0.034 kg
Dimensions : (Lg)100x(l)2,5mm</p>
        </div>
        <div class="more-box col-12 col-md-8">
            <div></div>
            <h2>Recommandé avec</h2>
            <button type="button" class="arrow" id="left">
                <svg xmlns="http://www.w3.org/2000/svg" width="7.389" height="12.964" viewBox="0 0 7.389 12.964">
  <path id="Icon_ionic-ios-arrow-forward" d="M2.2,6.5,7.1,1.6A.854.854,0,0,0,7.1.3h0A.854.854,0,0,0,5.8.3L.3,5.8a.936.936,0,0,0,0,1.3l5.6,5.6a.934.934,0,0,0,1.3,0,1.051,1.051,0,0,0,0-1.3Z" transform="translate(-0.036)" fill="#6b242c"/>
</svg>
            </button>
            <button type="button" class="arrow" id="right">
                <svg xmlns="http://www.w3.org/2000/svg" width="7.413" height="12.965" viewBox="0 0 7.413 12.965">
  <path id="Icon_ionic-ios-arrow-forward" data-name="Icon ionic-ios-arrow-forward" d="M16.425,12.677l-4.906-4.9a.923.923,0,0,1,0-1.309.934.934,0,0,1,1.312,0L18.39,12.02a.925.925,0,0,1,.027,1.278l-5.582,5.593a.927.927,0,0,1-1.312-1.309Z" transform="translate(-11.246 -6.196)" fill="#6B242C"/>
</svg>
            </button>
            <div class="products" id="products">
                @for ($i = 0; $i < 3; $i++)
                <a href="{{ route('product')}}">
                    <div class="product">
                        <div class="image image-resize">
                            <img src="{{ asset('img/exemple.png')}}" alt="Product' image" />
                            <form>
                                <button>
                                    <img class="shop" src="{{ asset('svg/arrow-white.svg')}}" alt="Shop icon" />
                                </button>
                            </form>
                        </div>
                        <div class="title">
                            <h3>BST Sd23 - 10kW</h3>
                            <span>Ref BKE3873</span>
                        </div>
                    </div>
                </a>
            @endfor
            </div>
        </div>
        <div class="more-box col-12">
            <h2>Avis clients
                <img src="{{ asset('svg/star-yellow.svg')}}" alt="Yellow star">
                <img src="{{ asset('svg/star-yellow.svg')}}" alt="Yellow star">
                <img src="{{ asset('svg/star-yellow.svg')}}" alt="Yellow star">
                <img src="{{ asset('svg/star.svg')}}" alt="Star">
                <img src="{{ asset('svg/star.svg')}}" alt="Star">
            </h2>
            <div class="reviews">
                @for ($i = 0; $i < 3; $i++)
                <div class="review">
                    <div class="stars">
                        <img src="{{ asset('svg/star-yellow.svg')}}" alt="Yellow star">
                        <img src="{{ asset('svg/star-yellow.svg')}}" alt="Yellow star">
                        <img src="{{ asset('svg/star-yellow.svg')}}" alt="Yellow star">
                        <img src="{{ asset('svg/star.svg')}}" alt="Star">
                        <img src="{{ asset('svg/star.svg')}}" alt="Star">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
                    <span>Quentin Sar</span>
                </div>
                @endfor
            </div>
            <form action="">

            </form>
        </div>
    </div>
</section>
<script src="{{ asset('js/view.js')}}"></script>
@endsection
