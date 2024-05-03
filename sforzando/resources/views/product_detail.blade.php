<!--Made by Martin Podmanicky, Dominik Tulach-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Produkt</title>
</head>

<body>


    <!--Header and navigation-->
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a href="index.html" class="navbar-brand">SFORZANDO</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link">O nás</a>
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
            <form class="d-flex" role="search">
                <div class="input-group">
                    <span id="basic-addon1" class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>
                    <input class="form-control" type="search" placeholder="Zadajte názov produktu" aria-label="Search">
                </div>
                <button class="btn btn-outline-secondary" type="submit">Vyhľadať</button>
            </form>
            <div class="navbar" id="side">
                <a href="login.html" id="login-icon"><i class="bi bi-person" type="button"></i></a>
                <a href="login.html" class="nav-link">Login</a>
            </div>
        </div>
    </nav>
    <!--Name of the product-->
    <div class="container">
        <h1>Grand klavír - Petrof</h1>
    </div>

    <!--Produkt-karta-->
    <div class="container" id="product-card">
        <div class="row">
            <div class="col-md-6" id="product-image-column">
                <div class="image-container">
                    <img src="images/grand_piano_licensable.png" alt="Example Image" class="img-fluid">
                </div>
                <div class="text-center mt-2" id="arrow-combo">
                    <button type="button" class="btn btn-secondary mr-2" id="arrow-button">
                        <i class="bi bi-arrow-left-circle"></i>
                    </button>
                    <button type="button" class="btn btn-secondary" id="arrow-button">
                        <i class="bi bi-arrow-right-circle"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="specification">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>Špecifikácia</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Klavír Petrof a jeho špecifikácia</strong> Petrof je renomovaný výrobca
                                    klavírov so širokou ponukou modelov, ktoré kombinujú prvotriednu kvalitu s bohatou
                                    zvukovou charakteristikou a elegantným dizajnom. Špecifikácie klavíru Petrof sa
                                    líšia podľa konkrétneho modelu, ale mnohé z nich zdieľajú niektoré spoločné
                                    charakteristiky.
                                    Typické klavíry Petrof majú klavírnú klaviatúru s 88 klávesami, ktoré poskytujú
                                    široký dynamický rozsah a presnú odozvu. Ich mechanika je precízne vyrobená a
                                    umožňuje hráčovi jemnú kontrolu nad výrazom a intenzitou zvuku.
                                    Telo klavíru Petrof je vyrobené z kvalitného dreva, ako je mahagón, javor alebo
                                    orech, čo prispieva k ich bohatému a plnému zvuku. Ich povrchová úprava je
                                    starostlivo spracovaná, aby bola odolná voči poškodeniu a zároveň esteticky
                                    príťažlivá.
                                    Kľúčové špecifikácie, ako je dĺžka, šírka a hmotnosť, sa líšia v závislosti od
                                    konkrétneho modelu. Petrof vyrába klavíry rôznych veľkostí, od kompaktných
                                    koncertných nástrojov po väčšie modely pre domáce použitie.
                                    Okrem toho, klavíry Petrof sú často vybavené inovatívnymi technológiami, ako sú
                                    rôzne zosilňovacie systémy alebo reprodukčné zariadenia, ktoré umožňujú ich použitie
                                    aj v modernom prostredí alebo v kombinácii s elektronickou hudbou.
                                    Celkovo sú klavíry Petrof zosobnením remeselného majstrovstva a hudobnej
                                    excelentnosti, ktoré spĺňajú potreby a očakávania aj tých najnáročnejších hudobníkov
                                    a milovníkov hudby po celom svete.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-6" id="add-to-cart">
                <div class="row">
                    <div class="col">
                        <h3>1500 € s DPH</h3>
                        <p>1200 € s DPH</p>
                    </div>
                    <div class="col" style="text-align: end;">
                        <h5 style="color:green">Na sklade</h5>
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-primary">
                                    Do košíka
                                </button>
                            </div>
                            <div class="col">
                                <a href="udaje.html">
                                    <button type="button" class="btn btn-secondary">
                                        Kúpiť ihneď
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <!--Cart Button-->
    <div class="cart-button">
        <a href="#" class="btn btn-primary btn-lg" id="cart-button">
            <i class="bi bi-cart2"></i>
        </a>
    </div>
</body>
<footer class="bg-body-tertiary text-lg-start">
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