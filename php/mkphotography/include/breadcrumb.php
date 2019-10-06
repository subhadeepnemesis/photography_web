<?php 
    $base_page = basename($_SERVER['PHP_SELF'], ".php");
    $file_name= ucwords(str_replace('-',' ', $base_page));
    $gallery = array('pre-wedding' =>5, 'wedding' =>3, 'maternity' =>5, 'new-born' =>3, 'kids' =>7, 'other' =>2 );
?>
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/<?php echo (array_key_exists($base_page,$gallery)? 'assets/'.$base_page.'/'.rand(1,$gallery[$base_page]).'.png' : 'slider/'.rand(1,10).'.jpg'); ?>);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2 class="page-title"><?php echo $file_name;?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon_house_alt"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $file_name;?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
