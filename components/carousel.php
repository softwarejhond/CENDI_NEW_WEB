    <?php
    // Array de cursos disponibles
    $cursos = [
        ['titulo' => 'Técnico Laboral como Auxiliar contable', 'descripcion' => 'Desarrolla habilidades en contabilidad y finanzas para impulsar el éxito empresarial'],
        ['titulo' => 'Técnico Laboral como Auxiliar Administrativo', 'descripcion' => 'Gestiona procesos administrativos con eficiencia y profesionalismo'],
        ['titulo' => 'Técnico Laboral en Secretaria(o) Médica (o)', 'descripcion' => 'Coordina la gestión administrativa en entornos de salud'],
        ['titulo' => 'Técnico Laboral como Secretaria General', 'descripcion' => 'Optimiza la gestión documental y administrativa en cualquier organización'],
        ['titulo' => 'Técnico Laboral como Auxiliar en Recursos Humanos', 'descripcion' => 'Contribuye al desarrollo y gestión del talento humano'],
        ['titulo' => 'Técnico Laboral Auxiliar en Servicios Farmacéuticos', 'descripcion' => 'Forma parte vital del sistema de salud en el manejo de medicamentos'],
        ['titulo' => 'Técnico Laboral Auxiliar Administrativo en Salud', 'descripcion' => 'Gestiona eficientemente los procesos administrativos en salud'],
        ['titulo' => 'Técnico Laboral como Auxiliar en Servicio al Cliente y Telemercadeo', 'descripcion' => 'Mejora la experiencia del cliente con atención profesional'],
        ['titulo' => 'Técnico Laboral como Auxiliar de Sistemas Informáticos', 'descripcion' => 'Mantén y gestiona sistemas informáticos con expertise técnico'],
        ['titulo' => 'Técnico Laboral como Empleado de Recepción Hotelera', 'descripcion' => 'Brinda una experiencia excepcional en servicios de hotelería'],
        ['titulo' => 'Técnico Laboral como Asistente en Desarrollo de Software', 'descripcion' => 'Crea soluciones tecnológicas innovadoras'],
        ['titulo' => 'Conocimientos Académicos en inglés', 'descripcion' => 'Domina el idioma global para ampliar tus oportunidades profesionales']
    ];

    // Mensajes inspiradores sobre educación
    $mensajes = [
        ['titulo' => 'EXCELENCIA CONTABLE', 'subtitulo' => 'Precisión y Profesionalismo', 'mensaje' => 'Domina las herramientas financieras del futuro empresarial'],
        ['titulo' => 'GESTIÓN ADMINISTRATIVA', 'subtitulo' => 'Eficiencia y Liderazgo', 'mensaje' => 'Organiza, planifica y lidera procesos administrativos exitosos'],
        ['titulo' => 'SECRETARIADO MÉDICO', 'subtitulo' => 'Salud y Administración', 'mensaje' => 'Coordina servicios de salud con excelencia y compromiso'],
        ['titulo' => 'SECRETARIADO GENERAL', 'subtitulo' => 'Organización y Eficacia', 'mensaje' => 'Gestiona la información con precisión y profesionalismo'],
        ['titulo' => 'RECURSOS HUMANOS', 'subtitulo' => 'Talento y Desarrollo', 'mensaje' => 'Impulsa el potencial humano en las organizaciones'],
        ['titulo' => 'SERVICIOS FARMACÉUTICOS', 'subtitulo' => 'Salud y Servicio', 'mensaje' => 'Garantiza la calidad en el manejo de medicamentos'],
        ['titulo' => 'ADMINISTRACIÓN EN SALUD', 'subtitulo' => 'Gestión Sanitaria', 'mensaje' => 'Optimiza procesos administrativos en el sector salud'],
        ['titulo' => 'SERVICIO AL CLIENTE', 'subtitulo' => 'Atención y Calidad', 'mensaje' => 'Transforma la experiencia del cliente en satisfacción'],
        ['titulo' => 'SISTEMAS INFORMÁTICOS', 'subtitulo' => 'Tecnología e Innovación', 'mensaje' => 'Mantén la infraestructura tecnológica del futuro'],
        ['titulo' => 'HOTELERÍA', 'subtitulo' => 'Hospitalidad y Servicio', 'mensaje' => 'Crea experiencias memorables en la industria hotelera'],
        ['titulo' => 'DESARROLLO SOFTWARE', 'subtitulo' => 'Código y Creatividad', 'mensaje' => 'Programa el futuro con soluciones innovadoras'],
        ['titulo' => 'INGLÉS ACADÉMICO', 'subtitulo' => 'Comunicación Global', 'mensaje' => 'Abre las puertas al mundo con el dominio del inglés']
    ];

    // Imágenes de fondo relacionadas con cada programa
    $imagenes = [
        'img/slides/contabilidad.jpg',     // Auxiliar contable
        'img/slides/administracion.jpg',   // Auxiliar Administrativo
        'img/slides/secretariado-medico.jpg', // Secretariado Médico
        'img/slides/secretariado.jpg',     // Secretaria General
        'img/slides/recursos-humanos.jpg', // Recursos Humanos
        'img/slides/farmacia.jpg',         // Servicios Farmacéuticos
        'img/slides/admin-salud.jpg',      // Administrativo en Salud
        'img/slides/atencion-cliente.jpg', // Servicio al Cliente
        'img/slides/sistemas.jpg',         // Sistemas Informáticos
        'img/slides/hoteleria.jpg',        // Recepción Hotelera
        'img/slides/desarrollo.jpg',       // Desarrollo de Software
        'img/slides/ingles.jpg'           // Inglés Académico
    ];

    // Seleccionar 3 cursos aleatorios
    shuffle($cursos);
    $cursosAleatorios = array_slice($cursos, 0, 3);

    // Seleccionar 3 mensajes aleatorios
    shuffle($mensajes);
    $mensajesAleatorios = array_slice($mensajes, 0, 3);

    // Seleccionar 3 imágenes aleatorias
    shuffle($imagenes);
    $imagenesAleatorias = array_slice($imagenes, 0, 3);
    ?>

    <style>
    .hero-slider .slide {
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        min-height: 600px;
        position: relative;
    }

    .hero-slider .slide::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    .hero-slider .content {
        position: relative;
        z-index: 1;
    }

    .hero-slider .curso-tag {
        background: var(--brand);
        padding: 5px 15px;
        border-radius: 100px;
        display: inline-block;
        margin-bottom: 20px;
    }
    </style>

    <div class="owl-carousel owl-theme hero-slider">
        <?php for($i = 0; $i < 3; $i++): ?>
        <div class="slide" style="background-image: url('<?php echo $imagenesAleatorias[$i]; ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white text-center content">
                        <span class="curso-tag text-white"><?php echo $mensajesAleatorios[$i]['subtitulo']; ?></span>
                        <h1 class="display-3 my-4"><?php echo $mensajesAleatorios[$i]['titulo']; ?></h1>
                        <h5 class="mb-4"><?php echo $mensajesAleatorios[$i]['mensaje']; ?></h5>
                        <div class="curso-destacado mt-4">
                            <h4><?php echo $cursosAleatorios[$i]['titulo']; ?></h4>
                            <p class="lead mb-4"><?php echo $cursosAleatorios[$i]['descripcion']; ?></p>
                        </div>
                        <a href="#courses" class="btn btn-brand">Conoce más</a>
                        <a href="#contact" class="btn btn-outline-light ms-3">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function(){
        if (typeof $ !== 'undefined' && typeof $.fn.owlCarousel !== 'undefined'){
            $('.hero-slider').owlCarousel({
                loop: true,
                nav: true,
                dots: true,
                items: 1,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                navText: ['<i class="bx bx-chevron-left"></i>', '<i class="bx bx-chevron-right"></i>'],
                responsive: {
                    0: {
                        nav: false,
                    },
                    768: {
                        nav: true,
                    }
                }
            });
        }
    });
    </script>
