<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'include/meta.php'; ?>
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

    <!-- About Us Area Start -->
    <div class="about-us-area section-padding-80-0 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-us-content mb-80">
                        <h3 class="wow fadeInUp" data-wow-delay="100ms">We Live For Passion</h3>
                        <div class="line wow fadeInUp" data-wow-delay="200ms"></div>
                        <p class="wow fadeInUp" data-wow-delay="300ms">MK Photography, based in PCMC provides creative photography services around Pune.</p>
                        <p class="wow fadeInUp" data-wow-delay="400ms"> Our team specialises in providing professional photography services for pre-weddings, weddings, maternity, new-born babies, toddlers, kids, private functions and product shoots. The team passionately captures and preserves beautiful memories of your life. Cherish those moments as we express the beauty of you & your loved ones through our cameras.</p>
                        <a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms" href="contact.php">Contact Us</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-video-area mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <iframe width="100%" height="485" src="https://www.youtube.com/embed/7N_AXO70hHc" frameborder="0" allow="accelerometer;autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <!-- <img src="img/bg-img/17.jpg" alt=""> 
                        <div class="video-icon">
                            <a href="https://www.youtube.com/embed/7N_AXO70hHc" class="video-play-btn"><i class="arrow_triangle-right"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End -->

    <!-- Why Choose Us Area Start -->
    <?php //include 'include/why-us.php';?>
    <!-- Why Choose  us Area End -->

    <!-- Our Team Area Start -->
    <?php include 'testimonials.php'; ?>
    <!-- Our Team Area End -->

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