<!doctype html>
<html lang="en">

<head>
    <?php include 'controller/head.php'; ?>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


    <!-- TOP NAV -->
    <?php include 'controller/topnav.php'; ?>

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

    <!-- TESTIMONIOS -->
    <?php include("components/testimonios.php") ?>

    <!-- CONVENIOS -->
    <?php include("components/agreements.php") ?>


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
    
    <!-- Font Awesome para íconos de accesibilidad -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/accessibility.css">
</body>

</html>