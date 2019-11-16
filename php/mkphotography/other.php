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
                $other_dir = 'img/assets/other/';
                $files = glob($other_dir.'*.{jpg}', GLOB_BRACE);
                if (isset($files) && count($files) > 0){
                    foreach($files as $key=>$val){
                        // <!-- Single Gallery Item -->
                        $each_files = glob($other_dir.($key+1).'/*.{jpg}', GLOB_BRACE);
                        $each_counter = count($each_files);
                        echo '<div class="col-12 col-sm-6 col-lg-3 single_gallery_item video human mb-30 wow fadeInUp" data-wow-delay="300ms">
                                <div class="single-portfolio-content">
                                    <img src='.$val.' alt="">
                                    <div class="hover-content">
                                        <a href='.$each_files[0].' class="portfolio-img">+</a>
                                        <span style="display:none;">other_'.($key+1).'_'.$each_counter.'</span>
                                    </div>
                                </div>
                            </div>';
                    }
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