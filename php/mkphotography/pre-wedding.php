<!DOCTYPE html>
<html lang="en">

<head>
<?php 
    require 'phpThumbGenerate.php';
    include 'include/meta.php';
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

    <!-- Breadcrumb Area Start -->
    <?php include 'include/breadcrumb.php'; ?>
    <!-- Breadcrumb Area End -->

    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row alime-portfolio">
            <?php
                require('max_images.php');
                for($i=1;$i<=5;$i++){
                    // <!-- Single Gallery Item -->
                    echo '<div class="col-12 col-sm-6 col-lg-3 single_gallery_item video human mb-30 wow fadeInUp" data-wow-delay="300ms">
                        <div class="single-portfolio-content">
                            <img src="img/assets/pre-wedding/'.$i.'.png" alt="">
                            <div class="hover-content">
                                <a href="img/assets/pre-wedding/'.$i.'/1.jpg" class="portfolio-img">+</a>
                                <span style="display:none;">pre-wedding_'.$i.'_'.$preweddingmax[$i].'</span>
                            </div>
                        </div>
                    </div>';
                }
            ?>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->

    <!-- Follow Area Start -->
    <?php include 'include/insta_follow.php'; ?>
    <!-- Follow Area End -->

    <!-- Footer Area Start -->
    <?php include 'include/footer_content.php'; ?>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <?php include 'include/footer.php'; ?>

</body>

</html>