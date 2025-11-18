  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <style>
                    /* Asegura que los placeholders y campos sean legibles sobre fondos oscuros */
                    .modal .contrast-input {
                        background: #ffffff;
                        color: #092032;
                        border: 1px solid rgba(9,32,50,0.12);
                    }
                    .modal .contrast-input:focus {
                        box-shadow: 0 0 0 0.2rem rgba(9,32,50,0.08);
                        border-color: #092032;
                    }
                    .modal ::placeholder {
                        color: #6c757d; /* gris visible */
                        opacity: 1;
                    }
                    </style>
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-12 bg-cover"
                                style="background-image: url(img/c2.jpg); min-height:300px;">
                                <div>

                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form class="p-lg-5 col-12 row g-3">
                                    <div>
                                        <h1>Contáctanos</h1>
                                        <p>No dudes en escribirnos, te responderemos lo antes posible</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="firstName" class="form-label">Nombres</label>
                                        <input type="text" class="form-control contrast-input" placeholder="Juan" id="firstName"
                                            aria-describedby="firstNameHelp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="lastName" class="form-label">Apellidos</label>
                                        <input type="text" class="form-control contrast-input" placeholder="Pérez" id="lastName"
                                            aria-describedby="lastNameHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="userEmail" class="form-label">Correo electrónico</label>
                                        <input type="email" class="form-control contrast-input" placeholder="juan.perez@ejemplo.com"
                                            id="userEmail" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="userPhone" class="form-label">Teléfono</label>
                                        <input type="tel" class="form-control contrast-input" placeholder="300 123 4567"
                                            id="userPhone" aria-describedby="phoneHelp"
                                            pattern="[0-9\s]{10,}" title="Por favor ingresa un número de teléfono válido">
                                    </div>
                                    <div class="col-12">
                                        <label for="userMessage" class="form-label">Mensaje</label>
                                        <textarea name="message" placeholder="Escribe tu mensaje aquí..."
                                            class="form-control contrast-input" id="userMessage" rows="4"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand">Enviar Mensaje</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>