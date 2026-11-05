<!doctype html>
<html lang="en">
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<head>
    <?php include 'controller/head.php'; ?>
    <link rel="stylesheet" href="css/splashscreen.css?v=2.3">

 
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
    <script>
        (function () {
            function firePromoAlert() {
                if (typeof Swal === 'undefined') {
                    return;
                }

                Swal.fire({
                    title: 'Bienvenido a CENDI',
                    imageUrl: 'img/logo.png',
                    imageWidth: 120,
                    imageAlt: 'Logo CENDI',
                    html: `
                        <div style="text-align:center">
                            <img src="img/modal/mother.png" alt="Promoción CENDI" style="max-width:100%;height:auto;border-radius:8px;margin-bottom:12px;" />

                            <div style="display:flex;gap:12px;justify-content:center;align-items:center;margin:12px 0;flex-wrap:nowrap;white-space:nowrap;">
                                <a href="https://site3.q10.com/Preinscripcion?aplentId=d0e037d5-22c3-4082-b55e-d30628819936" target="_blank" style="display:inline-flex;align-items:center;justify-content:center;padding:10px 16px;background:#ff4d29;color:#fff;border-radius:6px;text-decoration:none;font-weight:600;min-width:160px;">Preinscripción Técnicos</a>
                                <a href="https://site2.q10.com/Preinscripcion?aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9" target="_blank" style="display:inline-flex;align-items:center;justify-content:center;padding:10px 16px;background:#007bff;color:#fff;border-radius:6px;text-decoration:none;font-weight:600;min-width:160px;">Preinscripción Bachillerato</a>
                            </div>

                            <p style="margin-top:0.5rem;margin-bottom:0.75rem;">Síguenos y visítanos en nuestras redes:</p>
                            <div style="display:flex;gap:12px;justify-content:center;align-items:center;font-size:1.1rem">
                                <a href="https://www.facebook.com/InstitutoCENDI/" target="_blank" class="text-reset" aria-label="Facebook" style="color:inherit;"><i class="bx bxl-facebook" style="font-size:1.6rem"></i></a>
                                <a href="https://www.instagram.com/cendi.medellin/" target="_blank" class="text-reset" aria-label="Instagram" style="color:inherit;"><i class="bx bxl-instagram" style="font-size:1.6rem"></i></a>
                                <a href="https://wa.me/573122143744" target="_blank" class="text-reset" aria-label="WhatsApp" style="color:inherit;"><i class="bx bxl-whatsapp" style="font-size:1.6rem"></i></a>
                                <a href="https://ul.waze.com/ul?place=ChIJ-Uo-KFgoRI4RCnuXtx1TI-M&ll=6.24625800%2C-75.56252500&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location" target="_blank" class="text-reset" aria-label="Waze" style="color:inherit;"><i class="fa-brands fa-waze" style="font-size:1.6rem"></i></a>
                            </div>
                        </div>`,
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar'
                });
            }

            document.addEventListener('splash:finished', firePromoAlert, { once: true });
        })();
    </script>
</body>

</html>