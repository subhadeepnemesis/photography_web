<section class="our-team-area section-padding-80-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                    <h2>Testimonials</h2>
                </div>
            </div>
        </div>
    <?php
        // require 'phpThumbGenerate.php';
        $images = array( 
                        array( 
                            "Shekhar Tayade.jpg" => "Very friendly and professional guys know very well how to get best out of you....know very well how to make couples comfortable if marriage is arranged.....\n\nGuys have good experience in professional videos also launched in T-series. They actually helped us from dress selections to buying all costumes n stuff. \n\nI will recommend MK photography for photo & video shoot both at very affordable pricing range..",
                            "Yogesh Sinkar.jpg" => "I would like to give 10/10 to this photographer. really it's a awesome experience. highly creative photography, new poses.\n\n I recommend to all must go with him. Thank you so much MK Photography.",
                            "Anjali Ranaware.jpg" => "A massive thank you for your amazing photography. \n\nAlso just wanted to say a huge thank you for our photo album. The photos are absolutely stunning. We both are so grateful..",
                            "Nitish Shinde.jpg" => "You guyz are rocking with your amazing work u made us fall in love each nd every moment..again & again!"
                        ),
                        array(
                            "Pragati Shinde.jpg" => "Awesome photography.. \n\nYou made our engagement & pre wedding photoshoot day more memorable by ur photography. Thanks MK Photography.",
                            "Mangesh Jadhav.jpg" => "Awesome photography.... Nice click.",
                            "Rohit Shivarkar.jpg" => "I must appreciate your knack for photography which you started as a hobby 4-5 years ago.\n\n I’m glad to see your advancements and alacrity to try bunch of creative ideas during photography which you successfully converted into professional trademark. Best luck for your future endeavors!",
                            "Deepti Vaidya Chaini.jpg" => "I like the venue, the photos and props used. He was patient when I wanted to take short break. It has been great experiance."
                        ),
                        array(
                            "Ganesh Gadhave.jpg" => "Awesome photography and editing work. Keep it up good work.",
                            "Bhagyeshree Pagar.jpg" => "Wonderful photography... loved my pre wedding shoot.",
                            "Priya Kothari.jpg" => "Awesome work. loved his work. location was awesome.",
                            "Priyanka Bende.jpg" => "I really loved the work of my maternity photo shoot. Wish you all the best.. be more creative."
                        ),
                        array(
                            "Amar Ingle.jpg" => "Fantastic photography. He knows when to click... Great work!!!"
                        )
                    );
        foreach($images as $key => $val){
            echo '<div class="row">';
            foreach($val as $key1=>$val1){
                if( count($val) == 4 )
                    echo '<div class="col-md-6 col-xl-3">';
                else
                    echo '<div class="col-md-6 col-xl-4">';
                $desc = current(explode('.',$key1));
                echo '<div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="member-thumb">
                                <img src="img/testimonials/'.$key1.'" alt="">
                            </div>
                            <h5>'.$desc.'</h5>
                            <span>'.substr($val1,0,30).'..</span>
                            <div class="member-social-info">
                                <a class="testimonial" href="#"><span id="'.$desc.'" style="display:none;">'.$val1.'</span><i class="fa fa-plus"> More</i></a>
                            </div>
                        </div>
                    </div>';
            }
            // <!-- Team Member Area -->
            echo '</div>';
        }
    ?>
    </div>
</section>
