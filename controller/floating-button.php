<!-- Floating Button -->
<div class="floating-button">
    <button class="btn btn-float btn-brand" style=" color: white; border: none;" type="button" id="floatingButton">
        <i class='bx bx-plus'></i>
    </button>
    
    <div class="floating-menu" id="floatingMenu">
        <a href="https://site3.q10.com/login?ReturnUrl=%2F&aplentId=d0e037d5-22c3-4082-b55e-d30628819936" target="_blank">
            <i class='bx bxl-whatsapp'></i> Q10 Técnicos
        </a>
           <a href="https://site2.q10.com/login?ReturnUrl=%2F&aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9" target="_blank">
            <i class='bx bxl-whatsapp'></i> Q10 Bachillerato
        </a>
        <a href="https://site2.q10.com/login?ReturnUrl=%2F&aplentId=c866b1f7-b5a4-4146-a6d5-eda3de6bdea9" target="_blank">
            <i class='bx bxs-book'></i> Q10 Bachillerato
        </a>
        <a href="https://www.campusdigital.cendiacademico.edu.co/login/index.php" target="_blank">
            <i class='bx bxs-rocket'></i> Campus virtual
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