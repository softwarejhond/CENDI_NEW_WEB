document.addEventListener('DOMContentLoaded', function () {
    // Configuración por defecto
    var SWITCH_ID = 'promoSwitch';
    var STORAGE_KEY = 'promo_enabled';
    var SHOWN_FLAG = 'promo_shown'; // sessionStorage flag to avoid repeated show in same session

    var switchEl = document.getElementById(SWITCH_ID);

    function isEnabled() {
        return localStorage.getItem(STORAGE_KEY) === 'true';
    }

    function setEnabled(v) {
        localStorage.setItem(STORAGE_KEY, v ? 'true' : 'false');
    }

    // si no hay preferencia guardada, tratamos como enabled por defecto (mostrar en la primera carga)
    function hasPreference() {
        return localStorage.getItem(STORAGE_KEY) !== null;
    }

    function showPromo() {
        // No mostrar más de una vez por sesión
        if (sessionStorage.getItem(SHOWN_FLAG)) return;
        // Si el usuario ya guardó preferencia y está desactivado, no mostrar
        if (!isEnabled() && hasPreference()) return;

        // Asegurar que SweetAlert2 esté disponible; si no, cargar fallback CDN y luego mostrar
        function _fire() {
            Swal.fire({
                title: 'Promoción especial',
                html: 'Inscríbete hoy y recibe un <b>20% de descuento</b> en la matrícula. <br><a href="https://wa.me/573122143744?text=Estoy%20interesado%20en%20la%20promoci%C3%B3n" target="_blank" rel="noopener">Contáctanos por WhatsApp</a>',
                icon: 'info',
                showCloseButton: true,
                confirmButtonText: 'Entendido',
                allowOutsideClick: true
            });

            sessionStorage.setItem(SHOWN_FLAG, 'true');
        }

        if (typeof Swal !== 'undefined') {
            _fire();
            return;
        }

        // Fallback: cargar SweetAlert2 desde CDN si no existe (no rompe si el archivo local 404)
        var script = document.createElement('script');
        script.src = 'https://cdn.jsdelivr.net/npm/sweetalert2@11';
        script.async = true;
        script.onload = function () { _fire(); };
        script.onerror = function () { console.warn('No se pudo cargar SweetAlert2 (local ni CDN)'); };
        document.head.appendChild(script);
    }

    // Inicializar estado del switch según localStorage
    if (switchEl) {
        var checked = isEnabled();
        switchEl.checked = checked;

        // Mostrar promo al cargar si:
        // - el switch está activado, o
        // - no existe preferencia guardada (primera visita)
        if (checked || !hasPreference()) {
            showPromo();
        }

        // Cambios por parte del usuario
        switchEl.addEventListener('change', function (e) {
            var on = e.target.checked;
            setEnabled(on);
            if (on) {
                showPromo();
            }
        });
    } else {
        // Si no se encuentra el switch, aún así podemos intentar mostrar si la clave está habilitada
        if (isEnabled()) showPromo();
    }
});
