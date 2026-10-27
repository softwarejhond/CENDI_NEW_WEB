<!doctype html>
<html lang="en">
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<head>
    <?php include 'controller/head.php'; ?>
    <link rel="stylesheet" href="css/splashscreen.css?<?php echo time(); ?>">

 
</head>
 <!-- <php// include("components/animations/sanValentin.php") ?>-->
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <?php include 'components/splashscreen.php'; ?>
    <!-- TOP NAV -->
    <?php include 'controller/topNav.php'; ?>

    <!-- BOTTOM NAV -->
    <?php include("controller/navbar.php") ?>

    <?php include("controller/floating-button.php") ?>

    <!-- SLIDER -->
    <?php include("components/carousel.php") ?>
    <!-- ABOUT -->
    <?php include("components/about_index.php") ?>

    <!-- MILESTONE -->
    <?php include("components/milestone.php") ?>

    <!-- SERVICES -->
    <?php include("components/services.php") ?>

    <!-- MAPS -->
    <?php include("components/maps.php") ?>


    <!-- SERVICES -->
    <?php include("components/teams.php") ?>

    <!-- CONVENIOS -->
    <?php
    include 'convenios.php';
    ?>

    <!-- TESTIMONIOS 
    <?php include("components/testimonios.php") ?>-->

    <!-- CONVENIOS -->
    <?php //include("components/agreements.php") 
    ?>


    <footer>
        <?php include 'controller/footer.php'; ?>
    </footer>

    <!-- Modal -->
    <?php include 'components/modals/contact.php'; ?>

    <!-- Herramientas de Accesibilidad -->
    <?php include 'components/accessibility-tools.php'; ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/accessibility.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.3/dist/sweetalert2.all.min.js"></script>
    <script src="js/splashscreen.js?v=2.4"></script>

    <!-- Funciones globales para el carrusel del modal -->
    <script>
        window.currentPromoSlide = 0;
        window.promoInterval = null;

        window.movePromoSlide = function(direction) {
            const slides = document.querySelectorAll('.promo-carousel-slide');
            if (!slides.length) return;
            const totalSlides = slides.length;
            const container = document.querySelector('.promo-carousel-slides');

            window.currentPromoSlide = (window.currentPromoSlide + direction + totalSlides) % totalSlides;
            container.style.transform = `translateX(-${window.currentPromoSlide * 100}%)`;
        };

        // Cambia de diapositiva y reinicia el temporizador cuando el usuario hace clic manual
        window.userMovePromoSlide = function(direction) {
            window.movePromoSlide(direction);
            if (window.promoInterval) {
                clearInterval(window.promoInterval);
                window.promoInterval = setInterval(function() {
                    window.movePromoSlide(1);
                }, 4000); // 4000ms = 4 segundos
            }
        };
    </script>

    <!-- Script de SweetAlert2 -->
    <script>
        (function() {
            console.log('[promo] script loaded');
            console.log('[promo] sessionStorage.promo_shown =', sessionStorage.getItem('promo_shown'));

            // Registra errores globales para ayudar a debuggear fallos de JS
            window.addEventListener('error', function (ev) {
                console.error('[promo] global error:', ev.message, 'at', ev.filename + ':' + ev.lineno + ':' + ev.colno);
            });

            function fireIfReady() {
                console.log('[promo] fireIfReady called, typeof Swal =', typeof Swal);
                if (typeof Swal === 'undefined') {
                    console.warn('[promo] SweetAlert (Swal) is undefined. Ensure the CDN script loaded and returned 200.');
                    return;
                }
                try {
                    console.log('[promo] invoking Swal.fire()');
                    
                    Swal.fire({
                        title: 'Bienvenido a CENDI',
                        imageUrl: 'img/logosSeasons/haloween.png',
                        imageWidth: 200,
                        imageAlt: 'Logo CENDI',
                        html: `
                            <div style="text-align:center">
                                
                                <!-- Carrusel de imágenes -->
                                <div class="promo-carousel-container" style="position: relative; max-width: 100%; margin-bottom: 12px; overflow: hidden; border-radius: 8px;">
                                    <div class="promo-carousel-slides" style="display: flex; transition: transform 0.4s ease-in-out;">
                                        
                                        <!-- Imagen 1 -->
                                        <div class="promo-carousel-slide" style="min-width: 100%; box-sizing: border-box;">
                                                <img src="img/modal/modal_halloween.png" alt="Promoción CENDI" style="max-width:100%;height:auto;border-radius:8px;display:block;margin:0 auto;" />
                                        </div>

                                        <!-- Imagen 2 -->
                                        <div class="promo-carousel-slide" style="min-width: 100%; box-sizing: border-box;">
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdFQQlNPdhMFG2x3hpxx-JEog6HyFlB3g2iF_RR5c0n-vX7fQ/viewform" target="_blank" rel="noopener noreferrer">
                                            <img src="img/modal/tecnicos.jpeg" alt="Feria de las Flores CENDI" style="max-width:100%;height:auto;border-radius:8px;display:block;margin:0 auto;" />
                                        </a>
                                        </div>

                                    </div>

                                    <!-- Botones de navegación (Flechas) -->
                                    <button type="button" onclick="userMovePromoSlide(-1)" style="position: absolute; top: 50%; left: 8px; transform: translateY(-50%); background: rgba(0, 0, 0, 0.5); color: #fff; border: none; padding: 6px 12px; cursor: pointer; border-radius: 50%; font-size: 18px; line-height: 1; user-select: none; z-index: 10;">&#10094;</button>
                                    <button type="button" onclick="userMovePromoSlide(1)" style="position: absolute; top: 50%; right: 8px; transform: translateY(-50%); background: rgba(0, 0, 0, 0.5); color: #fff; border: none; padding: 6px 12px; cursor: pointer; border-radius: 50%; font-size: 18px; line-height: 1; user-select: none; z-index: 10;">&#10095;</button>
                                </div>

                                <div style="margin-bottom: 12px;">
                                    <a href="https://docs.google.com/forms/u/0/d/e/1FAIpQLSdFQQlNPdhMFG2x3hpxx-JEog6HyFlB3g2iF_RR5c0n-vX7fQ/viewform?pli=1&authuser=0" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;justify-content:center;padding:10px 20px;background:#28a745;color:#fff;border-radius:6px;text-decoration:none;font-weight:600;min-width:160px;">Inscríbete aquí</a>
                                </div>

                                <!-- Botones de preinscripción (alineados en una sola fila) -->
                                <div style="display:flex;gap:12px;justify-content:center;align-items:center;margin:12px 0;flex-wrap:nowrap;white-space:nowrap;">
                                    <a href="https://site3.q10.com/Preinscripcion?aplentId=d0e037d5-22c3-4082-b55e-d30628819936" target="_blank" style="display:inline-flex;align-items:center;justify-content:center;padding:10px 16px;background:#ff4d29;color:#fff;border-radius:6px;text-decoration:none;font-weight:600;min-width:160px;">Preinscripción Técnicos</a>
                                    <a href="https://site2.q10.com/Preinscripcion?aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9" target="_blank" style="display:inline-flex;align-items:center;justify-content:center;padding:10px 16px;background:#007bff;color:#fff;border-radius:6px;text-decoration:none;font-weight:600;min-width:160px;">Preinscripción Bachillerato</a>
                                </div>

                                <p style="margin-top:0.5rem;margin-bottom:0.75rem;">Síguenos y visítanos en nuestras redes:</p>
                                <div style="display:flex;gap:12px;justify-content:center;align-items:center;font-size:1.1rem">
                                    <a href="https://www.facebook.com/InstitutoCENDI/" target="_blank" class="text-reset" aria-label="Facebook" style="color:inherit;"><i class="bx bxl-facebook" style="font-size:1.6rem"></i></a>
                                    <a href="https://www.instagram.com/cendi.medellin/" target="_blank" class="text-reset" aria-label="Instagram" style="color:inherit;"><i class="bx bxl-instagram" style="font-size:1.6rem"></i></a>
                                    <a href="https://www.tiktok.com/@corporacion.cendi" target="_blank" class="text-reset" aria-label="TikTok" style="color:inherit;"><i class="bx bxl-tiktok" style="font-size:1.6rem"></i></a>
                                    <a href="https://wa.me/573122143744" target="_blank" class="text-reset" aria-label="WhatsApp" style="color:inherit;"><i class="bx bxl-whatsapp" style="font-size:1.6rem"></i></a>
                                    <a href="https://ul.waze.com/ul?place=ChIJ-Uo-KFgoRI4RCnuXtx1TI-M&ll=6.24625800%2C-75.56252500&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location" target="_blank" class="text-reset" aria-label="Waze" style="color:inherit;"><i class="fa-brands fa-waze" style="font-size:1.6rem"></i></a>
                                </div>

                            </div>`,
                        showConfirmButton: true,
                        confirmButtonText: 'Cerrar',
                        willOpen: () => {
                            window.currentPromoSlide = 0;
                        },
                        didOpen: () => {
                            // Inicia la rotación automática cada 4 segundos
                            window.promoInterval = setInterval(function() {
                                window.movePromoSlide(1);
                            }, 4000);
                        },
                        willClose: () => {
                            // Detiene la rotación cuando el usuario cierra el modal
                            if (window.promoInterval) {
                                clearInterval(window.promoInterval);
                            }
                        }
                    });
                    
                    sessionStorage.setItem('promo_shown', 'true');
                    console.log('[promo] promo_shown set to true');
                } catch (e) {
                    console.error('[promo] Error mostrando SweetAlert (UMD)', e);
                }
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', fireIfReady);
            } else {
                fireIfReady();
            }

            var observer = new MutationObserver(function () {
                if (typeof Swal !== 'undefined' && !sessionStorage.getItem('promo_shown')) {
                    console.log('[promo] MutationObserver detected Swal is now available');
                    fireIfReady();
                    observer.disconnect();
                }
            });
            observer.observe(document.documentElement || document.body, { childList: true, subtree: true });

        })();
    </script>
</body>

</html>