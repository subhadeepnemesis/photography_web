<div class="welcome-slides owl-carousel">
    <!-- Single Slide -->
    <?php
        $animation = array('bounceInDown','bounceInUp');
        for($i=1;$i<=10;$i++){
            $key= rand(0,1);
    ?>
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/slider/<?php echo $i;?>.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="<?php echo $animation[$key];?>" data-delay="900ms">Hello <br>I'm Mandar</h2>
                                <p data-animation="<?php echo $animation[$key];?>" data-delay="500ms">I photograph very instinctively. I see how it is taken like that. I do not follow certain styles, philosophies or teachers.</p>
                                <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">
                                    <a href="contact.php" class="btn alime-btn mb-3 mb-sm-0 mr-4">Get a Quote</a>
                                    <a class="hero-mail-contact" href="mailto:hello.alime@gmail.com">mkphotography2787@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    ?>

    <!-- Single Slide -->
    <!-- <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/slider/2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center"> -->
                <!-- Welcome Text -->
<!--                 <div class="col-12 col-lg-8 col-xl-6">
                    <div class="welcome-text">
                        <h2 data-animation="bounceInUp" data-delay="100ms">Hello <br>I'm Mandar</h2>
                        <p data-animation="bounceInUp" data-delay="500ms">I photograph very instinctively. I see how it is taken like that. I do not follow certain styles, philosophies or teachers.</p>
                        <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                            <a href="contact.php" class="btn alime-btn mb-3 mb-sm-0 mr-4">Get a Quote</a>
                            <a class="hero-mail-contact" href="mailto:hello.alime@gmail.com">enquiry@mkphotography.in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>