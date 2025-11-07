<!doctype html>
<html lang="es">
<head>
    <?php include 'controller/head.php'; ?>
    <title>Nuestros Profesores | CENDI</title>
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
                        <h1>Nuestros Profesores</h1>
                        <p class="mx-auto">Conoce a nuestro equipo docente altamente calificado</p>
                    </div>
                </div>
            </div>

            <!-- Filtros -->
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-brand active">Todos</button>
                        <button type="button" class="btn btn-brand">Técnicos</button>
                        <button type="button" class="btn btn-brand">Bachillerato</button>
                    </div>
                </div>
            </div>

            <!-- Lista de Profesores -->
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="team-member text-center">
                        <div class="image">
                            <img src="img/team_1.jpg" alt="">
                            <div class="social-icons">
                                <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                <a href="#"><i class="fa-solid fa-graduation-cap"></i></a>
                            </div>
                        </div>
                        <h5 class="mt-4">Nombre del Profesor</h5>
                        <p>Área de Especialidad</p>
                        <div class="areas-expertise">
                            <span class="badge bg-primary">Matemáticas</span>
                            <span class="badge bg-secondary">Física</span>
                        </div>
                    </div>
                </div>
                <!-- Repetir el bloque anterior para más profesores -->
            </div>

            <!-- Estadísticas -->
            <div class="row mt-5 text-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <i class="fas fa-chalkboard-teacher fa-3x mb-3" style="color: var(--brand-blue)"></i>
                        <h1>50+</h1>
                        <p>Profesores</p>
                    </div>
                </div>
                <!-- Agregar más estadísticas -->
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