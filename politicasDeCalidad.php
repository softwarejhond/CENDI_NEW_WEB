<!doctype html>
<html lang="es">
<head>
    <?php include 'controller/head.php'; ?>
    <title>Sistema de Gestión de Calidad | CENDI</title>
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
                        <h1>Sistema de Gestión de Calidad</h1>
                        <p class="mx-auto">Compromiso con la excelencia educativa</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card border-0 p-4">
                        <div class="content">
                            <h2>Política de Calidad</h2>
                            <p>En CENDI nos comprometemos con la excelencia en la formación técnica y profesional...</p>

                            <h2>Objetivos de Calidad</h2>
                            <ul>
                                <li>Garantizar la calidad académica</li>
                                <li>Mejorar continuamente nuestros procesos</li>
                                <li>Asegurar la satisfacción de nuestros estudiantes</li>
                                <li>Mantener un equipo docente altamente calificado</li>
                            </ul>

                            <h2>Certificaciones</h2>
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body text-center">
                                            <i class="fas fa-certificate fa-3x mb-3" style="color: var(--brand-blue)"></i>
                                            <h5>ISO 9001:2015</h5>
                                            <p>Sistema de Gestión de Calidad</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Agregar más certificaciones según sea necesario -->
                            </div>
                        </div>
                    </div>
                </div>
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