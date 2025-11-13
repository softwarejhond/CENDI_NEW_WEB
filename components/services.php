<?php
    // Array de servicios técnicos
    // Número de WhatsApp de la institución
    $whatsappNumber = '573122143744';
    
    // Función para generar URL de WhatsApp con mensaje
    function generarUrlWhatsapp($titulo, $categoria) {
        global $whatsappNumber;
        $mensaje = "¡Hola! \n\n";
        $mensaje .= "*SOLICITUD DE INFORMACIÓN*\n\n";
        $mensaje .= "*" . $titulo . "*\n";
        $mensaje .= "Categoría: " . $categoria . "\n\n";
        $mensaje .= "Me gustaría conocer:\n";
        $mensaje .= "Requisitos de inscripción\n";
        $mensaje .= "Horarios disponibles\n";
        $mensaje .= "Inversión y formas de pago\n";
        $mensaje .= "Fecha de inicio\n";
        $mensaje .= "Proceso de matrícula\n\n";
        
        return $mensaje;
    }

    $servicios = [
        [
            'icono' => 'fa-solid fa-calculator',
            'titulo' => 'Técnico Laboral como Auxiliar contable',
            'categoria' => 'Técnico Laboral',
            'descripcion' => 'Programa Q10: formación para Auxiliar contable. Consulta duración, horarios y requisitos.',
            'url' => generarUrlWhatsapp('Técnico Laboral como Auxiliar contable', 'Técnico Laboral')
        ],
        [
            'icono' => 'fa-solid fa-briefcase',
            'titulo' => 'Técnico Laboral como Auxiliar Administrativo',
            'categoria' => 'Administración',
            'descripcion' => 'Formación en procesos administrativos, atención y gestión básica.',
            'url' => generarUrlWhatsapp('Técnico Laboral como Auxiliar Administrativo', 'Administración')
        ],
        [
            'icono' => 'fa-solid fa-hospital',
            'titulo' => 'Técnico Laboral en Secretaria(o) Médica (o)',
            'categoria' => 'Salud',
            'descripcion' => 'Formación orientada a la gestión administrativa en entornos de salud y atención al paciente.',
            'url' => generarUrlWhatsapp('Técnico Laboral en Secretaria(o) Médica (o)', 'Salud')
        ],
        [
            'icono' => 'fa-solid fa-file-signature',
            'titulo' => 'Técnico Laboral como Secretaria General',
            'categoria' => 'Salud',
            'descripcion' => 'Capacitación para funciones de secretaria general en entidades públicas y privadas.',
            'url' => generarUrlWhatsapp('Técnico Laboral como Secretaria General', 'Salud')
        ],
        [
            'icono' => 'fa-solid fa-users',
            'titulo' => 'Técnico Laboral como Auxiliar en Recursos Humanos',
            'categoria' => 'Salud',
            'descripcion' => 'Formación en gestión de talento humano y procedimientos de recursos humanos.',
            'url' => generarUrlWhatsapp('Técnico Laboral como Auxiliar en Recursos Humanos', 'Salud')
        ],
        [
            'icono' => 'fa-solid fa-pills',
            'titulo' => 'Técnico Laboral Auxiliar en Servicios Farmacéuticos',
            'categoria' => 'Salud',
            'descripcion' => 'Formación en dispensación y gestión de servicios farmacéuticos.',
            'url' => generarUrlWhatsapp('Técnico Laboral Auxiliar en Servicios Farmacéuticos', 'Salud')
        ],
        [
            'icono' => 'fa-solid fa-notes-medical',
            'titulo' => 'Técnico Laboral Auxiliar Administrativo en Salud',
            'categoria' => 'Salud',
            'descripcion' => 'Formación administrativa especializada en el sector salud.',
            'url' => generarUrlWhatsapp('Técnico Laboral Auxiliar Administrativo en Salud', 'Salud')
        ],
        [
            'icono' => 'fa-solid fa-headset',
            'titulo' => 'Técnico Laboral como Auxiliar en Servicio al Cliente y Telemercadeo',
            'categoria' => 'Salud',
            'descripcion' => 'Formación en atención al cliente, ventas y telemercadeo.',
            'url' => generarUrlWhatsapp('Técnico Laboral como Auxiliar en Servicio al Cliente y Telemercadeo', 'Salud')
        ],
        [
            'icono' => 'fa-solid fa-desktop',
            'titulo' => 'Técnico Laboral como Auxiliar de Sistemas Informáticos',
            'categoria' => 'Sistemas',
            'descripcion' => 'Formación en soporte, instalación y mantenimiento de sistemas informáticos.',
            'url' => generarUrlWhatsapp('Técnico Laboral como Auxiliar de Sistemas Informáticos', 'Sistemas')
        ],
        [
            'icono' => 'fa-solid fa-hotel',
            'titulo' => 'Técnico Laboral como Empleado de Recepción Hotelera',
            'categoria' => 'Recepcionista',
            'descripcion' => 'Formación en atención y procesos de recepción en hotelería.',
            'url' => generarUrlWhatsapp('Técnico Laboral como Empleado de Recepción Hotelera', 'Recepcionista')
        ],
        [
            'icono' => 'fa-solid fa-code',
            'titulo' => 'Técnico Laboral como Asistente en Desarrollo de Software',
            'categoria' => 'Software',
            'descripcion' => 'Formación en fundamentos de programación y asistencia en proyectos de software.',
            'url' => generarUrlWhatsapp('Técnico Laboral como Asistente en Desarrollo de Software', 'Software')
        ],
        [
            'icono' => 'fa-solid fa-language',
            'titulo' => 'Conocimientos Académicos en inglés',
            'categoria' => 'Inglés',
            'descripcion' => 'Cursos y niveles académicos en inglés para diferentes necesidades formativas.',
            'url' => generarUrlWhatsapp('Conocimientos Académicos en inglés', 'Inglés')
        ]
    ];
?>

<section id="services" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Nuestros Programas</h6>
                    <h1>Formación Técnica</h1>
                    <p class="mx-auto">Conoce nuestros programas técnicos y consulta por más información. Haz clic en "VER MÁS" para conocer detalles y opciones de contacto.</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <?php foreach ($servicios as $servicio): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <i class="<?php echo $servicio['icono']; ?>" style="font-size:40px;color:var(--brand-blue)"></i>
                        <h5><?php echo $servicio['titulo']; ?></h5>
                        <p>¡Consulta por más información ahora!</p>
                        <button class="btn btn-brand btn-service" 
                                data-bs-toggle="modal" 
                                data-bs-target="#serviceModal" 
                                data-title="<?php echo $servicio['titulo']; ?>" 
                                data-category="<?php echo $servicio['categoria']; ?>" 
                                data-desc="<?php echo $servicio['descripcion']; ?>"
                                data-url="<?php echo $servicio['url']; ?>">
                            VER MÁS
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Modal dinámico para VER MÁS -->
        <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="serviceModalLabel">Servicio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-1"><strong>Categoría:</strong> <span id="serviceCategory"></span></p>
                        <p id="serviceDescription" class="mb-4"></p>
                        
                        <form id="infoForm" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="nombreCompleto" class="form-label">Nombre Completo *</label>
                                <input type="text" class="form-control" id="nombreCompleto" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese su nombre completo
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono *</label>
                                <input type="tel" class="form-control" id="telefono" required
                                    pattern="[0-9]{10}"
                                    title="Por favor ingrese un número de teléfono válido de 10 dígitos">
                                <div class="invalid-feedback">
                                    Por favor ingrese un número de teléfono válido
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico *</label>
                                <input type="email" class="form-control" id="email" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese un correo electrónico válido
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-brand" id="btnSolicitarInfo">
                            <i class="fa-brands fa-whatsapp"></i> Solicitar información
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    // Script que llena el modal con datos del servicio seleccionado
    // Variable para almacenar la información del programa seleccionado
    let programaSeleccionado = null;

    document.querySelectorAll('.btn-service').forEach(function(btn){
        btn.addEventListener('click', function(){
            var title = this.getAttribute('data-title') || '';
            var category = this.getAttribute('data-category') || '';
            var desc = this.getAttribute('data-desc') || '';
            
            document.getElementById('serviceModalLabel').textContent = title;
            document.getElementById('serviceCategory').textContent = category;
            document.getElementById('serviceDescription').textContent = desc;
            
            // Guardar información del programa seleccionado
            programaSeleccionado = {
                titulo: title,
                categoria: category
            };

            // Limpiar el formulario
            document.getElementById('infoForm').reset();
        });
    });

    // Manejar el envío del formulario
    document.getElementById('btnSolicitarInfo').addEventListener('click', function() {
        const form = document.getElementById('infoForm');
        
        // Validar el formulario
        if (!form.checkValidity()) {
            form.classList.add('was-validated');
            return;
        }

        // Recoger datos del formulario
        const nombre = document.getElementById('nombreCompleto').value;
        const telefono = document.getElementById('telefono').value;
        const email = document.getElementById('email').value;

        // Construir mensaje para WhatsApp
        let mensaje = "¡Hola!\n\n";
        mensaje += "*SOLICITUD DE INFORMACIÓN*\n\n";
        mensaje += "*Datos del interesado:*\n";
        mensaje += "- Nombre: " + nombre + "\n";
        mensaje += "- Teléfono: " + telefono + "\n";
        mensaje += "- Email: " + email + "\n\n";
        mensaje += "*" + programaSeleccionado.titulo + "*\n";
        mensaje += "Categoría: " + programaSeleccionado.categoria + "\n\n";
        mensaje += "Me gustaría conocer:\n";
        mensaje += "• Requisitos de inscripción\n";
        mensaje += "• Horarios disponibles\n";
        mensaje += "• Inversión y formas de pago\n";
        mensaje += "• Fecha de inicio\n";
        mensaje += "• Proceso de matrícula\n\n";
        mensaje += "¡Gracias por la información!";

        // Generar URL de WhatsApp y abrir en nueva pestaña
        const whatsappUrl = `https://wa.me/573122143744?text=${encodeURIComponent(mensaje)}`;
        window.open(whatsappUrl, '_blank');

        // Cerrar el modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('serviceModal'));
        modal.hide();
    });
</script>