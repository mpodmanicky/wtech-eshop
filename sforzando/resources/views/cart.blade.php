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
    <title>Košík</title>
</head>

<body class="d-flex flex-column min-vh-100">
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
            <a class="nav-link active" aria-current="page" href="cart">Prehľad</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="info">Údaje</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="payment">Platba</a>
        </li>
    </ul>

    <main class="container">
        <div class="row mt-3">
            <div class="col-md-8">
                <!-- Prehľad vecí v košíku -->
                <div class="mb-3">
                    <h2>Košík</h2>
                    <!-- Čiara -->
                    <div class="row">
                        <div class="col">
                            <hr class="line">
                        </div>
                    </div>
                    <!-- Čiara -->
                    <div class="row">
                        <div class="col">
                            <hr class="line">
                        </div>
                    </div>
                    <!-- Čiara -->
                    <div class="row">
                        <div class="col">
                            <hr class="line">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 divider d-flex justify-content-center align-items-center">
                <!-- Tlačidlo pre pokračovanie -->
                <div class="text-center">
                    <a href="info" class="btn btn-primary">Pokračovať</a>
                </div>
            </div>
        </div>
    </main>


</body>
<!--Footer-->
<footer class="bg-body-tertiary text-lg-start mt-auto" id="custom-footer">
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