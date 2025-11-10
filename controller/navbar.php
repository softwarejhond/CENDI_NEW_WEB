<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
            
                <img src="img/logo.png" alt="Logo CENDI" width="200" height="80" class="d-inline-block align-top ms-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
        
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="institucionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Institución
                        </a>
                        <div class="dropdown-menu" aria-labelledby="institucionDropdown">
                            <a class="dropdown-item" href="nosotros.php">Corporación CENDI</a>
                            <a class="dropdown-item" href="TramiteActualizacion.php">Información financiera</a>
                            <a class="dropdown-item" href="politicasDeCalidad.php">SGC</a>
                            <a class="dropdown-item" href="trabajeConNosotros.php">Trabaje con nosotros</a>
                            <a class="dropdown-item" href="/DOCS/M_C_Bachiller.pdf" download="Manual de convicencia CENDI 2020 Bachiller">Manual de convivencia Bachillerato</a>
                            <a class="dropdown-item" href="/DOCS/MA04 Manual de Convivencia Versión 7 2025.pdf" download="Manual de convicencia CENDI 2020 Tecnicos">Manual de convivencia Técnicos</a>
                            <a class="dropdown-item" href="personal.php">Nuestro personal</a>
                            <a class="dropdown-item" href="docentes.php">Nuestros profesores</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="programasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Programas técnicos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="programasDropdown">
                            <label class="dropdown-item disabled color-naranja fw-bold" style="color:#ff4d29">PROGRAMAS ADMINISTRATIVOS:</label>
                            <a class="dropdown-item" href="auxiliarContable.php">Técnico Laboral como Auxiliar Contable</a>
                            <a class="dropdown-item" href="auxiliarAdm.php">Técnico Laboral como Auxiliar Administrativo</a>
                            <a class="dropdown-item" href="auxiliarMedico.php">Técnico Laboral en Secretaria(o) Médica (o)</a>
                            <a class="dropdown-item" href="auxiliarSecretariado.php">Técnico Laboral como Secretaria General</a>
                            <a class="dropdown-item" href="auxiliarRecursoHumanos.php">Técnico Laboral Auxiliar en Recursos Humanos</a>
                            <a class="dropdown-item" href="auxiliarServicioCliente.php">Técnico Laboral Auxiliar en Servicio al Cliente y Telemercadeo</a>
                            <a class="dropdown-item" href="auxiliarSistemas.php">Técnico laboral como auxiliar de sistemas informáticos</a>
                            <a class="dropdown-item" href="recepcionhotelera.php">Técnico Laboral como Empleado de Recepción Hotelera</a>
                            <a class="dropdown-item" href="desarrolloSoftware.php">Técnico Laboral como Asistente en Desarrollo de Software</a>

                            <div class="dropdown-divider"></div>
                            <label class="dropdown-item disabled color-naranja fw-bold" style="color:#ff4d29">PROGRAMAS DE SALUD:</label>
                            <a class="dropdown-item" href="auxiliarFarmaceutico.php">Técnico Laboral Auxiliar en Servicios Farmacéuticos</a>
                            <a class="dropdown-item" href="auxiliarSalud.php">Técnico Laboral Auxiliar Administrativo en Salud</a>

                            <div class="dropdown-divider"></div>
                            <label class="dropdown-item disabled color-naranja fw-bold" style="color:#ff4d29">PROGRAMA DE CONOCIMIENTOS ACADÉMICOS:</label>
                            <a class="dropdown-item" href="ingles.php">Inglés</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="serviciosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="serviciosDropdown">
                            <a class="dropdown-item" href="#matriculas">Matrículas</a>
                            <a class="dropdown-item" href="#horarios">Horarios</a>
                            <a class="dropdown-item" href="#certificados">Certificados</a>
                            <a class="dropdown-item" href="#biblioteca">Biblioteca</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="politicasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Políticas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="politicasDropdown">
                            <a class="dropdown-item" href="#calidad">Política de Calidad</a>
                            <a class="dropdown-item" href="#privacidad">Política de Privacidad</a>
                            <a class="dropdown-item" href="#reglamento">Reglamento Institucional</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Egresados</a>
                    </li>
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="btn btn-brand ms-lg-3">Contáctenos</a>
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dropdowns = document.querySelectorAll('.dropdown-toggle');
            dropdowns.forEach(function(dropdown) {
                new bootstrap.Dropdown(dropdown);
            });
        });
    </script>