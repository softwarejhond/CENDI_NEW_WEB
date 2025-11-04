<!-- Floating Button -->
<div class="floating-button">
    <button class="btn btn-primary btn-float" type="button" id="floatingButton">
        <i class='bx bx-plus'></i>
    </button>
    
    <div class="floating-menu" id="floatingMenu">
        <a href="https://wa.me/573122143744" target="_blank">
            <i class='bx bxl-whatsapp'></i> WhatsApp
        </a>
        <a href="tel:+576044441808">
            <i class='bx bxs-phone'></i> Llamar
        </a>
        <a href="https://maps.google.com/?q=Carrera+42+No.49-59,+Medellín,+Colombia" target="_blank">
            <i class='bx bxs-map'></i> Ubicación
        </a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class='bx bx-envelope'></i> Contacto
        </a>
    </div>
</div>

<script>
document.getElementById('floatingButton').addEventListener('click', function() {
    document.getElementById('floatingMenu').classList.toggle('show');
});

// Cerrar el menú si se hace clic fuera de él
document.addEventListener('click', function(event) {
    const menu = document.getElementById('floatingMenu');
    const button = document.getElementById('floatingButton');
    
    if (!menu.contains(event.target) && !button.contains(event.target)) {
        menu.classList.remove('show');
    }
});
</script>