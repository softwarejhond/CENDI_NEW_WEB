<style>
    @font-face {
        font-family: 'Sparose';
        src: url('/css/font_Sparose.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }

    .eagle-link-footer {
        font-family: 'Sparose', sans-serif !important;
        font-size: 14px;
        color: #fff !important;
        text-decoration: none !important;
        font-weight: normal;
    }

    .footer-social-group {
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    
        .custom-alert {
            background-color: var(--brand);
            color: white;
            border: none;
        }

        .custom-alert i {
            color: white;
        }

        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .whatsapp-float:hover {
            background-color: #128C7E;
            color: white;
            transform: scale(1.1);
        }

        footer {
            background: linear-gradient(0deg, rgba(8, 32, 50, 0.9), rgba(8, 32, 50, 0.9)), url(../img/bg_banner1.jpg), #082032;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
        }

        .footer-top {
            padding: 80px 0 40px;
        }

        .footer-bottom {
            padding: 20px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        footer .navbar-brand {
            color: #fff;
        }

        footer p {
            color: #ADB3B9;
        }

        footer .social-icons a {
            width: 50px;
            height: 50px;
            font-size: 20px;
            margin: 4px;
            background-color: rgba(255, 255, 255, 0.1);
        }

        footer .social-icons a:hover {
            background-color: var(--brand);
        }
</style>
<div class="footer-top text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="mb-4">
                    <img src="img/logo.png" alt="Logo CENDI" class="img-fluid" style="max-width: 200px; filter: brightness(0) invert(1);">
                </div>
                <p>"La educación es el arma más poderosa que puedes usar para cambiar el mundo."<br><b>— Nelson Mandela</b></p>
                <div class="col-auto social-icons">
                    <a href="https://www.facebook.com/InstitutoCENDI/" target="_blank"><i class='bx bxl-facebook'></i></a>
                    <a href="https://www.instagram.com/cendi.medellin/" target="_blank"><i class='bx bxl-instagram'></i></a>
                    <a href="https://wa.me/573122143744" target="_blank"><i class='bx bxl-whatsapp'></i></a>
                </div>
                <div class="col-auto conditions-section">
                    <a href="#">Política de seguridad y privacidad de la información</a>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom text-center">
    <p class="mb-0">
        <b><a class="eagle-link-footer" href="https://agenciaeaglesoftware.com/" target="_blank">Eagle Software</a></b> &copy; Copyright <?php echo date("Y"); ?> Todos los derechos de uso para
        <label class="text-white"><b>CORPORACIÓN CENDI</b></label>
    </p>
</div>