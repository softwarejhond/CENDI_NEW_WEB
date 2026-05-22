<style>
    :root {
        --carousel-speed: 30s;
        --logo-width: 150px;
        --logo-gap: 50px;
    }

    /* Reducimos el margen superior de 2rem a solo 0.5rem para pegarlo al título */
    .carousel-2 {
        width: 100%;
        margin: 0.5rem auto 2rem auto; 
        overflow: hidden;
        position: relative;
        -webkit-mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent);
        mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent);
    }

    .carousel-2-track {
        display: flex;
        align-items: center;
        gap: var(--logo-gap);
        width: max-content;
        animation: scroll var(--carousel-speed) linear infinite;
    }

    .carousel-2:hover .carousel-2-track {
        animation-play-state: paused;
    }

    .carousel-2 img {
        width: var(--logo-width);
        height: auto;
        object-fit: contain;
        transition: transform 0.4s ease;
        padding: 10px;
    }

    .carousel-2 img:hover {
        transform: scale(1.1); 
    }

    /* Quitamos el margen inferior de la sección para eliminar el espacio extra */
    #convenios {
        padding-bottom: 0 !important;
    }

    /* Aseguramos que la intro no tenga un margen inferior muy grande */
    .intro {
        margin-bottom: 0px !important;
    }

    @keyframes scroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(calc(-50%)); }
    }
</style>

<section id="convenios">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro text-center">
                    <h6>Nuestros Aliados</h6>
                    <h1>Conoce nuestros convenios institucionales</h1>                    
                </div>
            </div>
        </div>
    </div>
</section>

<div class="carousel-2">
    <div class="carousel-2-track">
        <?php
            $convenios = array(
                "img/icons/clinica.png", "img/icons/coe.png", "img/icons/domina.png",
                "img/icons/dropopular.png", "img/icons/fenalco.png", "img/icons/hospital.png",
                "img/icons/logo-sena.png", "img/icons/lineaVital.png", "img/icons/Mega.png",
                "img/icons/Min.png", "img/icons/pasteur.jpg", "img/icons/sanignacio.png",
                "img/icons/Secedu.png",
            );

            foreach ($convenios as $convenio) {
                echo '<img src="' . $convenio . '" alt="Convenio">';
            }
            foreach ($convenios as $convenio) {
                echo '<img src="' . $convenio . '" alt="Convenio">';
            }
        ?>
    </div>
</div>