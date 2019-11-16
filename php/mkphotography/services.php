<!--::our_service part start::-->
<section class="our_service padding_top padding_bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section_tittle">
                    <p>our service</p>
                    <h2>what we offer</h2>
                </div>
            </div>
        </div>
        <?php
            $services = array( 'wedding'=>5,'pre-wedding'=>5,'maternity'=>5,'new-born'=>3,'kids'=>7, "jewellery"=>1, "food"=>4);
            foreach($services as $key=>$val){
                echo '<div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_offer_text text-center wedding">
                            <span class="flaticon-love-and-romance"></span>
                            <h4><a class="services-link" href="'.(($key == 'jewellery' || $key == 'food')? 'other' : $key).'.php'.'">'.$key.' Photography</a></h4>
                            <p>World the end of summer the sweltering heat makes human
                                sweat in the night and man plants and trees wilt even</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="single_offer_img d-none d-md-block">
                            <a class="services-link" href="'.(($key == 'jewellery' || $key == 'food')? 'other' : $key).'.php'.'"><img src="img/assets/'.$key.'/'.rand(1,$val).'.jpg" alt=""></a>
                        </div>
                    </div>
                </div>';
            }
        ?>
        <!-- <div class="row align-items-center">
            <div class="col-lg-4 col-md-6">
                <div class="single_offer_text text-center wedding">
                    <span class="flaticon-love-and-romance"></span>
                    <h4>Wedding Photography</h4>
                    <p>World the end of summer the sweltering heat makes human
                        sweat in the night and man plants and trees wilt even</p>
                    <a href="wedding.php" class="btn_1">read more</a>
                </div> -->
                <!-- <div class="single_offer_img d-none d-md-block"> -->
                    <!-- <img src="img/assets/wedding/2.png" alt="">  -->
                    <!-- services/single_offer_img_2.png -->
                <!-- </div> -->
            <!-- </div>
            <div class="col-lg-8 col-md-6">
                <div class="single_offer_img d-none d-md-block">
                    <img src="img/assets/wedding/<?php echo rand(1,2); ?>.png" alt="">
                </div> -->
                <!--<div class="single_offer_text text-center nature">
                    <span class="flaticon-leaf"></span>
                    <h4>Pre-Wedding Photography</h4>
                    <p>that the monsoon clouds are soon coming, there is a
                        strange silence in the ears, the sky gets darker and
                        darker, the flash of lightning illuminates the dark
                        skies all time needs band the sound of thunder fills the heart with fear.</p>
                    <a href="pre-wedding.php" class="btn_1">read more</a>
                </div> -->
            <!-- </div> -->
        </div>
    </div>
</section>
<!--::our_service part end::-->
<style>
    .services-link:hover{
        color: red;
    }
</style>