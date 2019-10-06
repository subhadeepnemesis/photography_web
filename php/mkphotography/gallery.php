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
            <div class="row">
                <div class="col-12">
                    <!-- Projects Menu -->
                    <div class="alime-projects-menu wow fadeInUp" data-wow-delay="100ms">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="*">All</button>
                            <button class="btn" data-filter=".prewedding">Pre-Wedding</button>
                            <button class="btn" data-filter=".wedding">Wedding</button>
                            <button class="btn" data-filter=".maternity">Maternity</button>
                            <button class="btn" data-filter=".newborn">New-Born Baby</button>
                            <button class="btn" data-filter=".kids">Kids</button>
                            <button class="btn" data-filter=".jewellery">Jewellery</button>
                            <button class="btn" data-filter=".food">Food</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row alime-portfolio">
            <?php
                require('max_images.php');
                $pics = array( 'wedding'=>2, 'pre-wedding'=>5, 'maternity'=>4, 'new-born'=>3, 'kids'=>7, 'food'=>4, 'jewellery'=>3 );
                foreach( $pics as $key=>$val ){
                    $v_name = str_replace('-', '', $key.'max');
                    //( $key == 'food' ||  $key =='jewellery')? str_replace('-', '', $key.'max') : 'other';
                    for( $i=1,$j=1; $i<=$val; $i++,$j+=2 ){
                        echo '<div class="col-12 col-sm-6 col-lg-3 single_gallery_item '.str_replace('-','',$key).' mb-30 wow fadeInUp" data-wow-delay="'.$j.'00ms">
                            <div class="single-portfolio-content">
                                <img src="img/assets/'.$key.'/'.$i.'.png" alt="">
                                <div class="hover-content">
                                    <a href="img/assets/'.$key.'/'.(( $key == 'food' || $key == 'jewellery')? '1': $i).'/'.$i.'.jpg" class="portfolio-img">+</a>
                                    <span style="display:none;">'.$key.'_'.(( $key == 'food' || $key == 'jewellery')? '1': $i).'_'.(( $key == 'food' || $key == 'jewellery')? $$v_name[1] : $$v_name[$i]).'</span>
                                </div>
                            </div>
                        </div>';
                    }
                }
            ?>
            </div>

<!--        <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="800ms">
                    <a href="#" class="btn alime-btn btn-2 mt-15">View More</a>
                </div>
            </div> -->
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