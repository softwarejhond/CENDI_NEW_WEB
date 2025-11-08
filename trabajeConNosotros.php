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
  <?php include("controller/floating-button.php") ?>
       
    <section class="bg-light" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>NUESTRO FONDO DE EMPLEO</h6>
                        <h1 style="color: #092032">BIENVENIDOS A TRABAJE CON NOSOTROS</h1>
                        <p class="mx-auto">"EDUCANDO EN LA RESPONSABILIDAD, EDUCAMOS PARA LA LIBERTAD"</p>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12 about-text">
                    <div class="row">
                        <div class="col-6">
                            <img src="img/trabaje.png" alt="Trabaje con nosotros" class="img-fluid image-wrapper">
                        </div>
                        <div class="col-6 form-wrapper">
                            <div class="alert custom-alert" role="alert">
                                <i class="fas fa-exclamation-circle"></i>
                                <b>Tenga en cuenta que todos los campos son obligatorios, de no rellenarlos no podrás registrar tu información.</b>
                            </div>
                            
                            <form id="jobApplicationForm" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name" data-aos="fade-left" data-aos-duration="1000" data-aos-once="false">Nombre completo:</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingresar nombre aquí" onblur="aMayusculas(this.value,this.id)" required>
                                    <div class="valid-feedback">Válido.</div>
                                    <div class="invalid-feedback">Por favor rellenar el campo con su nombre.</div>
                                </div>
                                <div class="form-group">
                                    <label for="email" data-aos="fade-left" data-aos-duration="1000" data-aos-once="false">Correo electrónico:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingresar correo aquí" required>
                                    <div class="valid-feedback">Válido.</div>
                                    <div class="invalid-feedback">Por favor rellenar el campo con un correo válido.</div>
                                </div>
                                <div class="form-group">
                                    <label for="adress" data-aos="fade-left" data-aos-duration="1000" data-aos-once="false">Dirección de residencia:</label>
                                    <input type="text" class="form-control" id="adress" name="adress" placeholder="Ingresar dirección aquí" onblur="aMayusculas(this.value,this.id)" required>
                                    <div class="valid-feedback">Válido.</div>
                                    <div class="invalid-feedback">Por favor rellenar el campo con una dirección válida.</div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" data-aos="fade-left" data-aos-duration="1000" data-aos-once="false">Teléfono:</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Ingresar teléfono aquí" required maxlength="7" minlength="7">
                                    <div class="valid-feedback">Válido.</div>
                                    <div class="invalid-feedback">Por favor rellenar el campo con un número válido.</div>
                                </div>
                                <div class="form-group">
                                    <label for="cellphone" data-aos="fade-left" data-aos-duration="1000" data-aos-once="false">Celular:</label>
                                    <input type="text" class="form-control" id="cellphone" name="cellphone" placeholder="Ingresar celular aquí" required maxlength="10" minlength="10">
                                    <div class="valid-feedback">Válido.</div>
                                    <div class="invalid-feedback">Por favor rellenar el campo con un número de celular válido.</div>
                                </div>
                                <div class="form-group">
                                    <label for="city" data-aos="fade-left" data-aos-duration="1000" data-aos-once="false">Ciudad:</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Ingresar ciudad aquí" onblur="aMayusculas(this.value,this.id)" required maxlength="25">
                                    <div class="valid-feedback">Válido.</div>
                                    <div class="invalid-feedback">Por favor rellenar el campo con una ciudad válida.</div>
                                </div>
                                <div class="form-group">
                                    <label for="employ" data-aos="fade-left" data-aos-duration="1000" data-aos-once="false">Cargo al que aspira:</label>
                                    <input type="text" class="form-control" id="employ" name="employ" placeholder="Ingresar cargo aquí" onblur="aMayusculas(this.value,this.id)" required maxlength="35">
                                    <div class="valid-feedback">Válido.</div>
                                    <div class="invalid-feedback">Por favor rellenar el campo con un cargo válido.</div>
                                </div>
                                <hr>
                                <div class="form-group upload-area">
                                    <label for="cv">Subir hoja de vida</label>
                                    <p class="text-muted">Para subir tu hoja de vida, el archivo debe llevar tu nombre, gracias.</p>
                                    <input type="file" class="form-control-file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
                                </div>
                                <hr>
                                <div id="formAlert" class="alert" style="display: none;" role="alert"></div>
                                <button type="submit" class="btn btn-success" id="submitBtn">Enviar</button>
                                <button type="button" class="btn btn-danger" onclick="document.getElementById('jobApplicationForm').reset()">Cancelar</button>
                            </form>

                            <script>
                                document.getElementById('jobApplicationForm').addEventListener('submit', function(e) {
                                    e.preventDefault();
                                    
                                    const formData = new FormData(this);
                                    const alertDiv = document.getElementById('formAlert');
                                    const submitBtn = document.getElementById('submitBtn');
                                    
                                    // Deshabilitar el botón mientras se envía
                                    submitBtn.disabled = true;
                                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';
                                    
                                    fetch('controller/send_job_application.php', {
                                        method: 'POST',
                                        body: formData
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        alertDiv.className = 'alert ' + (data.success ? 'alert-success' : 'alert-danger');
                                        alertDiv.textContent = data.message;
                                        alertDiv.style.display = 'block';
                                        
                                        if (data.success) {
                                            // Limpiar el formulario si fue exitoso
                                            document.getElementById('jobApplicationForm').reset();
                                        }
                                    })
                                    .catch(error => {
                                        alertDiv.className = 'alert alert-danger';
                                        alertDiv.textContent = 'Error al enviar el formulario. Por favor, intente nuevamente.';
                                        alertDiv.style.display = 'block';
                                    })
                                    .finally(() => {
                                        // Rehabilitar el botón
                                        submitBtn.disabled = false;
                                        submitBtn.innerHTML = 'Enviar';
                                        
                                        // Scroll al mensaje
                                        alertDiv.scrollIntoView({ behavior: 'smooth' });
                                    });
                                });

                                function aMayusculas(texto, id) {
                                    const input = document.getElementById(id);
                                    input.value = texto.toUpperCase();
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

 
  
    <footer>
        <?php include 'controller/footer.php'; ?>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>