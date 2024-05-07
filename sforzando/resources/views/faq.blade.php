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
    <title>Sforzando</title>
</head>

<body class="d-flex flex-column min-vh-100">
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

    <section class="p-5">
        <h3 id="1">"Môžem nakupovať aj bez registrácie?"</h3>
        <p>V našom obchode môžete nakupovať produkty aj bez nutnosti registrácie, avšak túto možnosť odporúčame pre
        automatické vyplnenie údajov počas procesu nákupu.</p>
        <br>
        <h3 id="2">"Poskytujete aj upravenie nástrojov?"</h3>
        <p>Zatiaľ túto možnosť neponúkame, avšak aktívne naslúchame požiadavkám používateľov a radi by sme túto službu v budúcnosti ponúkali.</p>
        <br>
        <a href="/">
            <button type="button" class="btn btn-primary">Naspäť na hlavnú stránku</button>
        </a>
    </section>
    
    <!--Cart Button-->
    <div class="cart-button">
        <a href="cart.html" class="btn btn-primary btn-lg" id="cart-button">
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