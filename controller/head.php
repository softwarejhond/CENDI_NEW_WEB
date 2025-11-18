    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    // Base path dinámico: si el sitio está en un subdirectorio, esto ajusta las rutas a assets
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    // Normaliza para href: '' -> '/', ' /subdir' -> '/subdir/'
    $base_for_href = ($base === '') ? '/' : $base . '/';
    ?>

    <!-- Establece <base> para resolver rutas relativas correctamente cuando el sitio
        se despliega en un subdirectorio -->
    <base href="<?php echo $base_for_href; ?>">

    <link rel="icon" type="image/x-icon" href="<?php echo $base_for_href; ?>img/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $base_for_href; ?>css/bootstrap.min.css?v=1.1">
    <link rel="stylesheet" href="<?php echo $base_for_href; ?>css/owl.carousel.min.css?v=1.1">
    <link rel="stylesheet" href="<?php echo $base_for_href; ?>css/owl.theme.default.min.css?v=1.1">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="<?php echo $base_for_href; ?>css/style.css?v=1.1">
    <link rel="stylesheet" href="<?php echo $base_for_href; ?>css/floating-button.css?v=1.1">
   <!-- Font Awesome para íconos de accesibilidad -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/accessibility.css?v=1.0">
    <script>
        // Ruta base disponible para scripts que necesiten construir URLs dinámicamente
        window.BASE_PATH = '<?php echo $base_for_href; ?>';
    </script>

    <title><?php echo ucfirst(str_replace('.php', '', basename($_SERVER['PHP_SELF']))); ?> | CENDI</title>
    	<!-- Start of HubSpot Embed Code  chat-->
	<script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/21270719.js"></script>
	<!-- End of HubSpot Embed Code chat -->