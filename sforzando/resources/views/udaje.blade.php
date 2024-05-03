<!--Made by Martin Podmanicky, Dominik Tulach-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Košík</title>
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
                        <a href="about_us.html" class="nav-link">O nás</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Sections-->
    <ul class="nav nav-underline nav-fill">
        <li class="nav-item">
            <a class="nav-link" href="cart.html">Prehľad</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="udaje.html">Údaje</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="platba.html">Platba</a>
        </li>
    </ul>

    <!--formular-->
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8">
                <!-- Prehľad údajov -->
                <div class="mb-3">
                    <h2>Osobné údaje</h2>
                    <!-- Čiara -->
                    <div class="row">
                        <div class="col">
                            <hr class="line">
                        </div>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mailová adresa</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Nikdy Váš e-mail s nikým nebudeme zdieľať.</div>
                        </div>
                        <div class="mb-3">
                            <label for="meno" class="form-label">Meno a priezvisko</label>
                            <input type="text" class="form-control" id="meno">
                        </div>
                    </form>
                    <h2>Údaje pre dopravcu</h2>
                    <!-- Čiara -->
                    <div class="row">
                        <div class="col">
                            <hr class="line">
                        </div>
                    </div>
                    <form>
                        <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                            <option selected>Vyberte kraijnu</option>
                            <option value="1">Slovensko</option>
                            <option value="2">Česko</option>
                            <option value="3">Iné</option>
                        </select>
                        <div class="mb-3">
                            <label for="mesto" class="form-label">Mesto</label>
                            <input type="text" class="form-control" id="mesto" placeholder="Banská Bystrica">
                        </div>
                        <div class="mb-3">
                            <label for="ulica" class="form-label">Ulica a číslo domu</label>
                            <input type="text" class="form-control" id="ulica" placeholder="Ulica, číslo">
                        </div>
                        <div class="mb-3 col-md-2">
                            <label for="postcode" class="form-label">PSČ</label>
                            <input type="text" class="form-control" id="postcode" placeholder="Poštové číslo">
                        </div>
                    </form>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <div class="col-md-4 divider d-flex justify-content-center align-items-center">
                <!-- Tlačidlo pre pokračovanie -->
                <div class="text-center">
                    <a href="platba.html" class="btn btn-primary">Pokračovať</a>
                </div>
            </div>
        </div>
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