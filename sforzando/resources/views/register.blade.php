<!--Made by Martin Podmanicky, Dominik Tulach-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/login_register_styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Registrácia</title>
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


    <section class="content">
        <div class="container pt-5">
            <div class="row" id="register">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Meno</label>
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Meno">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email"
                                        placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <label for="heslo" class="form-label">Heslo</label>
                                    <input type="password" class="form-control" id="heslo" placeholder="Heslo">
                                </div>
                                <div class="mb-3">
                                    <label for="heslo" class="form-label">Zadajte heslo znovu</label>
                                    <input type="password" class="form-control" id="heslo-2" placeholder="Heslo">
                                </div>
                                <div class="text-center mt-3">
                                    <a href="login.html">
                                        <button type="button" class="btn btn-primary">Registrácia</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Footer -->
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

</body>

</html>