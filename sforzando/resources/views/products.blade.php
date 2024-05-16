<!--Made by Martin Podmanicky, Dominik Tulach-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Produkty</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!--Header and navigation-->
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a href="/" class="navbar-brand">SFORZANDO</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="about_us" class="nav-link">O nás</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact" class="nav-link">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Search bar and login-->
    <nav class="navbar" id="main">
        <div class="container">
            <form class="d-flex" role="search" action="{{route('search')}}" method="GET">
                <div class="input-group">
                    <span id="basic-addon1" class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>
                    <input class="form-control" name="search" type="search" placeholder="Zadajte názov produktu" aria-label="Search">
                </div>
                <button class="btn btn-outline-secondary" type="submit">Vyhľadať</button>
            </form>
            <div class="navbar" id="side">
                @if(Auth::check())
                <a href="#" id="login-icon"><i class="bi bi-person" type="button"></i>{{ Auth::user()->name }}</a>
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    &nbsp;Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @else
                <a href="{{ route('login') }}" id="login-icon"><i class="bi bi-person" type="button"></i></a>
                <a href="{{ route('login') }}" class="nav-link">Login</a>
                @endif
            </div>
        </div>
    </nav>

    <!--Zoradenie-->
    <nav class="navbar navbar-expand-lg" id="filter-navbar">
        <div class="container">
            <a class="navbar-brand" style="cursor: pointer;">Filter</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDropdown"
                aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarDropdown">
                <!-- Example single danger button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false" id="filterButton">
                        Značka
                    </button>
                    <ul class="dropdown-menu">
                        @if (isset($brands) && count($brands) > 0)
                            @foreach ($brands as $brand)
                                <li><a class="dropdown-item" href="/products/filterByBrand/{{$brand}}/{{$products->first()->category}}">{{ $brand }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false" id="filterButton">
                        Farba
                    </button>
                    <ul class="dropdown-menu">
                        @if (isset($colors) && count($colors) > 0)
                            @foreach ($colors as $color)
                                <li><a class="dropdown-item" href="/products/filterByColor/{{$color}}/{{$products->first()->category}}">{{ $color }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false" id="filterButton">
                        Zoradiť
                    </button>
                    <ul class="dropdown-menu">
                        @if (count($products) > 0)
                        <li><a class="dropdown-item" href="/products/sortByPriceAsc/{{$products->first()->category}}">Od najlacnejšieho</a></li>
                        <li><a class="dropdown-item" href="/products/sortByPriceDesc/{{$products->first()->category}}">Od najdrahšieho</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <br>

    <div class="container">
        <div class="row" style="justify-content: space-evenly;">
            @if (count($products) > 0)
            @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card" id="product-card"onclick="location.href='/products/{{ $product->id }}'">
                @if ($product->images->first())
                    <img src="{{ asset('images/product-images/' . $product->images->first()->url) }}" class="card-img-top img-fluid" alt="{{$product->name}}">
                @else
                    <img src="{{ asset('images/grand_piano_licensable.jpg') }}" class="card-img-top img-fluid" alt="{{$product->name}}">
                @endif
                    <div class="card-body">
                        <h5 class="card-text"><strong>{{$product->name}}</strong></h5>
                        <div class="row">
                            <div class="col">
                                <h5>{{$product->price}} € s DPH</h5>
                                <p>{{$product->price * 0.8}} € bez DPH</p>
                            </div>
                            <div class="col">
                                <a href="/cart/addToCart/{{$product->id}}" class="btn btn-primary">Pridať do košíka</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            @endforeach
            {{ $products->links() }}
            @else
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center">Nenašli sa žiadne produkty</h1>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!--Cart Button-->
    <div class="cart-button">
        <a href="/cart" class="btn btn-primary btn-lg" id="cart-button">
            <i class="bi bi-cart2"></i>
        </a>
    </div>
</body>

<footer class="bg-body-tertiary text-lg-start mt-auto">
    <div class="container p-3">
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4 mb-md-0">
                <h5 class="footer">
                    Copyright
                </h5>
                <p class="footer">
                    © 1994 – 2024 Sforzando.sk a.s
                </p>
            </div>
            <div class="col-xl-4 col-md-6 mb-4 mb-md-0">
                <h5 class="footer">
                    <a href="faq.html">FAQ</a>
                </h5>
                <p class="footer">
                    <a href="faq.html#1">Môžem nakupovať aj bez registrácie?</a>
                </p>
                <p class="footer">
                    <a href="faq.html#2">Poskytujete aj upravenie nástrojov?</a>
                </p>
            </div>
            <div class="col-xl-4 col-md-6 mb-4 mb-md-0">
                <h5 class="footer" id="contact">
                    Pomoc
                </h5>
                <p class="footer">
                    support@sforzando.sk
                </p>
                <p class="footer">
                    Infolinka - 42 22 33 44 512
                </p>
            </div>
        </div>
    </div>
</footer>

</html>