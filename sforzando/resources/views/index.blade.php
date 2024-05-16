<!--Made by Martin Podmanicky, Dominik Tulach-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset('css/styles.css')}}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Sforzando</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <!--Header and navigation-->
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a href="#" class="navbar-brand">SFORZANDO</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="about_us" class="nav-link">O nás</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Kontakt</a>
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

    <!--Categories-->
    <!--Categories in carousel-->
    <div class="container">
        <div id="categoriesCarousel" class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <form action="{{ route('products') }}" method="GET">
                        <div class="card">
                            <img src="images/guitar_licensable.png" id="guitar" alt="guitar" class="img-fluid">
                            <div class="card-body text-center">
                                <h5 class="card-title">Elektrické gitary</h5>
                            </div>
                            <input type="hidden" name="category" value="electric_guitar">
                            <button type="submit">Zobraziť produkty</button>
                        </div>
                    </form>
                </div>
                <div class="carousel-item">
                    <form action="{{ route('products') }}" method="GET">
                        <div class="card">
                            <img src="images/acoustic-guitar-licensable.png" id="acoustic-guitar" alt="acoustic guitar"
                                class="img-fluid">
                            <div class="card-body text-center">
                                <h5 class="card-title">Akustické gitary</h5>
                            </div>
                            <input type="hidden" name="category" value="acoustic_guitar">
                            <button type="submit">Zobraziť produkty</button>
                        </div>
                    </form>
                </div>
                <div class="carousel-item">
                    <form action="{{ route('products') }}" method="GET">
                        <div class="card">
                            <img src="images/trumpet-licensable.jpg" id="trumpet" alt="trumpet" class="img-fluid">
                            <div class="card-body text-center">
                                <h5 class="card-title">Dychové nástroje</h5>
                            </div>
                            <input type="hidden" name="category" value="brass_instruments">
                            <button type="submit">Zobraziť produkty</button>
                        </div>
                    </form>
                </div>
                <div class="carousel-item">
                    <form action="{{ route('products') }}" method="GET">
                        <div class="card">
                            <img src="images/drums-licensable.png" id="drums" alt="drums" class="img-fluid">
                            <div class="card-body text-center">
                                <h5 class="card-title">Bicie nástroje</h5>
                            </div>
                            <input type="hidden" name="category" value="drums">
                            <button type="submit">Zobraziť produkty</button>
                        </div>
                    </form>
                </div>
                <div class="carousel-item">
                    <form action="{{ route('products') }}" method="GET">
                        <div class="card">
                            <img src="images/grand_piano_licensable.png" id="grandpiano" alt="grandpiano"
                                class="img-fluid">
                            <div class="card-body text-center">
                                <h5 class="card-title">Klavíry</h5>
                            </div>
                            <input type="hidden" name="category" value="piano">
                            <button type="submit">Zobraziť produkty</button>
                        </div>
                    </form>
                </div>
                <div class="carousel-item">
                    <form action="{{ route('products') }}" method="GET">
                        <div class="card">
                            <img src="images/bass-guitar-licensable.png" id="bass-guitar" alt="bass guitar"
                                class="img-fluid">
                            <div class="card-body text-center">
                                <h5 class="card-title">Basgitary</h5>
                            </div>
                            <input type="hidden" name="category" value="bass_guitar">
                            <button type="submit">Zobraziť produkty</button>
                        </div>
                    </form>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#categoriesCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"
                    style="background-color: black; border-radius: 5px;"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#categoriesCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"
                    style="background-color: black; border-radius: 5px;"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

        <div class="container">
            <img src="images/carousel-images/placeholder-1.png" class="d-block w-100" alt="">
        </div>

    <!--Cart Button-->
    <div class="cart-button">
        <a href="cart" class="btn btn-primary btn-lg" id="cart-button">
            <i class="bi bi-cart2"></i>
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src='js/index.js'></script>

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
                    <a href="faq">FAQ</a>
                </h5>
                <p class="footer">
                    <a href="faq#1">Môžem nakupovať aj bez registrácie?</a>
                </p>
                <p class="footer">
                    <a href="faq#2">Poskytujete aj upravenie nástrojov?</a>
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