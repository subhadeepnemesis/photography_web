<!DOCTYPE html>
<html lang="en">
 
<head>
<?php 
    include 'include/meta.php'; 
    include 'include/services_meta.php'; 
?>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Top Search Form Area -->
    <?php include 'include/search_modal.php'; ?>

    <!-- Header Area Start -->
    <header class="header-area">
    <!-- Main Header Start -->
    <?php include 'include/header.php'; ?>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
    <?php include 'include/carousel.php'; ?>
    </section>
    <!-- Welcome Area End -->

    <?php include 'services.php'; ?>

    <!-- Follow Area Start -->
    <?php include 'include/insta_follow.php'; ?>
    <!-- Follow Area End -->

    <!-- Footer Area Start -->
    <?php include 'include/footer_content.php'; ?>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/alime.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>