<!doctype html>
<html lang="es">
<head>
    <?php include 'controller/head.php'; ?>
    <title>Nuestro Personal | CENDI</title>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <!-- TOP NAV -->
    <?php include 'controller/topnav.php'; ?>
    <!-- BOTTOM NAV -->
    <?php include 'controller/navbar.php'; ?>

    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>Nuestro Personal Administrativo</h1>
                        <p class="mx-auto">Conoce al equipo que hace posible nuestra labor educativa</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="team-member text-center">
                        <div class="image">
                            <img src="img/team_1.jpg" alt="">
                            <div class="social-icons">
                                <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                <a href="#"><i class="fa-solid fa-phone"></i></a>
                            </div>
                        </div>
                        <h5 class="mt-4">Nombre del Funcionario</h5>
                        <p>Cargo Administrativo</p>
                    </div>
                </div>
                <!-- Repetir el bloque anterior para más personal -->
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="intro">
                        <h2>Departamentos</h2>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-user-tie fa-3x mb-3" style="color: var(--brand-blue)"></i>
                            <h5>Dirección Académica</h5>
                            <p>Gestión y supervisión académica</p>
                        </div>
                    </div>
                </div>
                <!-- Agregar más departamentos -->
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
<?php include 'controller/footer.php'; ?>
</footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>