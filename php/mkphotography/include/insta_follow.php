    <div class="follow-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Follow Instagram</h2>
                        <p>@mkphotography2787</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Feed Area -->
        <?php 
            $url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=680313017.78a45e7.9abf8af04af54207b8f3f172414a7b8e&count=11';
            $contents = file_get_contents($url);
            if($contents !== false){
                $obj = json_decode($contents);
                if( isset($obj) and count($obj->data) > 0){
                    echo '<div class="instragram-feed-area owl-carousel">';
                    foreach($obj->data as $img){
                        $resolution = $img->images;
                        echo '<div class="single-instagram-item">
                                <img src="'.$resolution->thumbnail->url.'" alt="">
                                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                                    <a href="#">
                                        <i class="ti-instagram" aria-hidden="true"></i>
                                        <span>'.$img->caption->text.'</span>
                                    </a>
                                </div>
                            </div>';
                    }
                    echo '</div>';
                }
            }
        ?>
    </div>