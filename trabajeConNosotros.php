<!doctype html>
<html lang="es">
<head>
    <?php include 'controller/head.php'; ?>
    <title>Trabaje con Nosotros | CENDI</title>
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
                        <h1>Trabaje con Nosotros</h1>
                        <p class="mx-auto">Únete a nuestro equipo de profesionales</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card border-0 p-4">
                        <div class="content">
                            <h2>Vacantes Disponibles</h2>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h5 class="card-title">Docente de Sistemas</h5>
                                            <p class="card-text">Buscamos profesional en ingeniería de sistemas o afines...</p>
                                            <button class="btn btn-brand" data-bs-toggle="modal" data-bs-target="#aplicarModal">
                                                Aplicar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Agregar más vacantes según sea necesario -->
                            </div>

                            <h2 class="mt-5">Proceso de Selección</h2>
                            <div class="timeline mt-4">
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <i class="fas fa-file-alt fa-2x mb-3" style="color: var(--brand-blue)"></i>
                                            <h5>1. Aplicación</h5>
                                            <p>Envío de CV</p>
                                        </div>
                                    </div>
                                    <!-- Agregar más pasos del proceso -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal de Aplicación -->
    <div class="modal fade" id="aplicarModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Aplicar a Vacante</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="cv" class="form-label">Subir CV (PDF)</label>
                            <input type="file" class="form-control" id="cv" accept=".pdf" required>
                        </div>
                        <button type="submit" class="btn btn-brand">Enviar Aplicación</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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