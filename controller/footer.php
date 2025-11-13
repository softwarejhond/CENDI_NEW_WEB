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
            background: linear-gradient(0deg, rgba(8, 32, 50, 0.95), rgba(8, 32, 50, 0.95)), url(../img/bg_banner1.jpg), #082032;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
            padding: 70px 0 20px;
        }

        .footer-top {
            padding-bottom: 40px;
        }

        .footer-bottom {
            padding: 20px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        footer p {
            color: #ADB3B9;
            font-size: 0.95rem;
            line-height: 1.8;
        }

        footer h5 {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }

        footer h5::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: var(--brand);
        }

        footer .social-icons {
            display: flex;
            gap: 10px;
        }

        footer .social-icons a {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        footer .social-icons a:hover {
            background-color: var(--brand);
            transform: translateY(-3px);
        }

        footer a {
            color: #ADB3B9;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        footer a:hover {
            color: var(--brand);
        }

        .certification-logos {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        @media (max-width: 768px) {
            footer {
                text-align: center;
            }

            footer h5::after {
                left: 50%;
                transform: translateX(-50%);
            }

            footer .social-icons {
                justify-content: center;
            }

            .certification-logos {
                margin-top: 2rem;
            }
        }
</style>
<div class="footer-top">
    <div class="container">
        <div class="row">
            <!-- Columna 1: Logo, dirección y mensaje -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="text-center text-md-start">
                    <img src="img/logo.png" alt="Logo CENDI" class="img-fluid mb-4" style="max-width: 180px; filter: brightness(0) invert(1);">
                    <p class="mb-3"><i class="fas fa-map-marker-alt me-2"></i>Centro Comercial Australia<br>Carrera 50 N° 58-93<br>Medellín, Colombia</p>
                    <p class="mb-4">"La educación es el arma más poderosa que puedes usar para cambiar el mundo."<br><b>— Nelson Mandela</b></p>
                    <div class="social-icons mb-4">
                        <a href="https://www.facebook.com/InstitutoCENDI/" target="_blank" aria-label="Facebook"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/cendi.medellin/" target="_blank" aria-label="Instagram"><i class='bx bxl-instagram'></i></a>
                        <a href="https://wa.me/573122143744" target="_blank" aria-label="WhatsApp"><i class='bx bxl-whatsapp'></i></a>
                    </div>
                </div>
            </div>

            <!-- Columna 2: Horarios y contacto -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5 class="text-white mb-4">Horarios de Atención</h5>
                <p class="mb-2"><i class="far fa-clock me-2"></i>Lunes a Viernes:<br>8:00 AM a 6:00 PM</p>
                <p class="mb-2"><i class="far fa-clock me-2"></i>Sábados:<br>8:00 AM a 1:00 PM</p>
                <h5 class="text-white mb-3 mt-4">Líneas de Contacto</h5>
                <p class="mb-2"><i class="fas fa-phone-alt me-2"></i>Teléfono: (604) 4441808</p>
                <p class="mb-2"><i class="fab fa-whatsapp me-2"></i>WhatsApp: 312 214 3744</p>
                <p class="mb-2"><i class="fas fa-phone-alt me-2"></i>Rectoría Técnicos: (604) 444 1808 Ext. 117</p>
                 <p class="mb-2"><i class="fas fa-phone-alt me-2"></i>Bachillerato: (604) 4441808 Ext. 105</p>
            </div>

            <!-- Columna 3: Correo Electrónico -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5 class="text-white mb-4">Correo Electrónico</h5>
                <p class="mb-2"><i class="far fa-envelope me-2"></i>Rectoría Técnicos:<br>rectoriatecnicos@cendi.edu.co</p>
                <p class="mb-2"><i class="far fa-envelope me-2"></i>Coordinación Bachillerato:<br>rectoria@cendi.edu.co</p>
                <p class="mb-2"><i class="far fa-envelope me-2"></i>Compras:<br>compraseinfraestructura@cendi.edu.co</p>
                <div class="mt-4">
                    <h5 class="text-white mb-3">Enlaces de Interés</h5>
                    <p class="mb-2"><a href="#" class="text-white-50">Política de Privacidad</a></p>
                    <p class="mb-2"><a href="#" class="text-white-50">Términos y Condiciones</a></p>
                </div>
            </div>

            <!-- Columna 4: Certificaciones -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5 class="text-white mb-4">Certificaciones de calidad</h5>
                <div class="certification-logos">
               
                 
                    <div class="mb-3 bg-white">
                        <img src="img/logosCelac/calidad.png" alt="Certificación CELAC" class="img-fluid mb-2" style=" width: auto; height: 120px; ">
                       
                          <img src="img/icons/mejores.png" alt="Certificación CELAC" class="img-fluid mb-2" style=" width: auto; height: 120px; ">
                
                    </div>
                        <div class="mb-3">
                       <p class="small mb-0">VIGILADA POR SECRETARÍA DE EDUCACIÓN DE MEDELLÍN</p>
                    </div>
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