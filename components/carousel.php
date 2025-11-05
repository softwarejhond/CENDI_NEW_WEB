<?php
// Datos combinados: cada índice contiene curso, mensaje e imagen relacionados
$programas = [
    [
        'curso' => ['titulo' => 'Técnico Laboral como Auxiliar contable', 'descripcion' => 'Desarrolla habilidades en contabilidad y finanzas para impulsar el éxito empresarial'],
        'mensaje' => ['titulo' => 'EXCELENCIA CONTABLE', 'subtitulo' => 'Precisión y Profesionalismo', 'mensaje' => 'Domina las herramientas financieras del futuro empresarial'],
        'imagen' => 'img/slides/contabilidad.jpg'
    ],
    [
        'curso' => ['titulo' => 'Técnico Laboral como Auxiliar Administrativo', 'descripcion' => 'Gestiona procesos administrativos con eficiencia y profesionalismo'],
        'mensaje' => ['titulo' => 'GESTIÓN ADMINISTRATIVA', 'subtitulo' => 'Eficiencia y Liderazgo', 'mensaje' => 'Organiza, planifica y lidera procesos administrativos exitosos'],
        'imagen' => 'img/slides/administracion.jpg'
    ],
    [
        'curso' => ['titulo' => 'Técnico Laboral en Secretaria(o) Médica (o)', 'descripcion' => 'Coordina la gestión administrativa en entornos de salud'],
        'mensaje' => ['titulo' => 'SECRETARIADO MÉDICO', 'subtitulo' => 'Salud y Administración', 'mensaje' => 'Coordina servicios de salud con excelencia y compromiso'],
        'imagen' => 'img/slides/secretariado-medico.jpg'
    ],
    [
        'curso' => ['titulo' => 'Técnico Laboral como Secretaria General', 'descripcion' => 'Optimiza la gestión documental y administrativa en cualquier organización'],
        'mensaje' => ['titulo' => 'SECRETARIADO GENERAL', 'subtitulo' => 'Organización y Eficacia', 'mensaje' => 'Gestiona la información con precisión y profesionalismo'],
        'imagen' => 'img/slides/secretariado.jpg'
    ],
    [
        'curso' => ['titulo' => 'Técnico Laboral como Auxiliar en Recursos Humanos', 'descripcion' => 'Contribuye al desarrollo y gestión del talento humano'],
        'mensaje' => ['titulo' => 'RECURSOS HUMANOS', 'subtitulo' => 'Talento y Desarrollo', 'mensaje' => 'Impulsa el potencial humano en las organizaciones'],
        'imagen' => 'img/slides/recursos-humanos.jpg'
    ],
    [
        'curso' => ['titulo' => 'Técnico Laboral Auxiliar en Servicios Farmacéuticos', 'descripcion' => 'Forma parte vital del sistema de salud en el manejo de medicamentos'],
        'mensaje' => ['titulo' => 'SERVICIOS FARMACÉUTICOS', 'subtitulo' => 'Salud y Servicio', 'mensaje' => 'Garantiza la calidad en el manejo de medicamentos'],
        'imagen' => 'img/slides/farmacia.jpg'
    ],
    [
        'curso' => ['titulo' => 'Técnico Laboral Auxiliar Administrativo en Salud', 'descripcion' => 'Gestiona eficientemente los procesos administrativos en salud'],
        'mensaje' => ['titulo' => 'ADMINISTRACIÓN EN SALUD', 'subtitulo' => 'Gestión Sanitaria', 'mensaje' => 'Optimiza procesos administrativos en el sector salud'],
        'imagen' => 'img/slides/admin-salud.jpg'
    ],
    [
        'curso' => ['titulo' => 'Técnico Laboral como Auxiliar en Servicio al Cliente y Telemercadeo', 'descripcion' => 'Mejora la experiencia del cliente con atención profesional'],
        'mensaje' => ['titulo' => 'SERVICIO AL CLIENTE', 'subtitulo' => 'Atención y Calidad', 'mensaje' => 'Transforma la experiencia del cliente en satisfacción'],
        'imagen' => 'img/slides/atencion-cliente.jpg'
    ],
    [
        'curso' => ['titulo' => 'Técnico Laboral como Auxiliar de Sistemas Informáticos', 'descripcion' => 'Mantén y gestiona sistemas informáticos con expertise técnico'],
        'mensaje' => ['titulo' => 'SISTEMAS INFORMÁTICOS', 'subtitulo' => 'Tecnología e Innovación', 'mensaje' => 'Mantén la infraestructura tecnológica del futuro'],
        'imagen' => 'img/slides/sistemas.jpg'
    ],
    [
        'curso' => ['titulo' => 'Técnico Laboral como Empleado de Recepción Hotelera', 'descripcion' => 'Brinda una experiencia excepcional en servicios de hotelería'],
        'mensaje' => ['titulo' => 'HOTELERÍA', 'subtitulo' => 'Hospitalidad y Servicio', 'mensaje' => 'Crea experiencias memorables en la industria hotelera'],
        'imagen' => 'img/slides/hoteleria.jpg'
    ],
    [
        'curso' => ['titulo' => 'Técnico Laboral como Asistente en Desarrollo de Software', 'descripcion' => 'Crea soluciones tecnológicas innovadoras'],
        'mensaje' => ['titulo' => 'DESARROLLO SOFTWARE', 'subtitulo' => 'Código y Creatividad', 'mensaje' => 'Programa el futuro con soluciones innovadoras'],
        'imagen' => 'img/slides/desarrollo.jpg'
    ],
    [
        'curso' => ['titulo' => 'Conocimientos Académicos en inglés', 'descripcion' => 'Domina el idioma global para ampliar tus oportunidades profesionales'],
        'mensaje' => ['titulo' => 'INGLÉS ACADÉMICO', 'subtitulo' => 'Comunicación Global', 'mensaje' => 'Abre las puertas al mundo con el dominio del inglés'],
        'imagen' => 'img/slides/ingles.jpg'
    ]
];

// Barajar el conjunto completo para obtener combinaciones coherentes
shuffle($programas);
$seleccion = array_slice($programas, 0, 3);
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
    background: rgba(0, 0, 0, 0.7);
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
    <?php foreach ($seleccion as $item): ?>
        <div class="slide" style="background-image: url('<?php echo $item['imagen']; ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white text-center content">
                        <span class="curso-tag text-white"><?php echo $item['mensaje']['subtitulo']; ?></span>
                        <h1 class="display-3 my-4 text-white"><?php echo $item['mensaje']['titulo']; ?></h1>
                        <h5 class="mb-4 text-white"><?php echo $item['mensaje']['mensaje']; ?></h5>
                        <div class="curso-destacado mt-4 text-white">
                            <h4 class="text-white"><?php echo $item['curso']['titulo']; ?></h4>
                            <p class="lead mb-4 text-white"><?php echo $item['curso']['descripcion']; ?></p>
                        </div>
                        <a href="#courses" class="btn btn-brand">Conoce más</a>
                        <a href="#contact" class="btn btn-outline-light ms-3">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
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
                0: { nav: false },
                768: { nav: true }
            }
        });
    }
});
</script>
