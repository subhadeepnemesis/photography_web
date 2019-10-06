<div class="main-header-area">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="alimeNav">

                <!-- Logo -->
                <a class="nav-brand" href="index.php"><img src="./img/core-img/Logo_PNG_WHITE-TM.png" style="width:17%; !important;" alt=""><span style="color:white; !important; font-size:30px;">MK Photography</span></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">
                    <!-- Menu Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul id="nav">
                        <?php 
                            $page = basename($_SERVER['PHP_SELF']);
                            $pages = array( 'index.php'=>'Home','about-us.php'=>'About Us','#'=>'Gallery','contact.php'=>'Contact');
                            $gallery_pages = array('pre-wedding.php'=>'Pre-Wedding','wedding.php'=>'Wedding','maternity.php'=>'Maternity','new-born.php'=>'New-Born Baby','kids.php'=>'Kids', "other.php" => "Other" );
                            // $gallery_pages = array('gallery.php'=>'All','pre-wedding.php'=>'Pre-Wedding','wedding.php'=>'Wedding','maternity.php'=>'Maternity','new-born.php'=>'New-Born Baby','kids.php'=>'Kids', "other.php" => "Other" );
                            foreach ($pages as $key => $val) {
                                if($key == $page && $key != '#')
                                    echo '<li class="active">';
                                else
                                    echo '<li>';
                                if ($key=="#"){
                                    echo '<a href="#">'.$val.'</a>';
                                    echo '<ul class="dropdown">';
                                    foreach ($gallery_pages as $k1 => $val2){
                                        if ($page == $k1)
                                            echo '<li class="active">';
                                        else
                                            echo '<li>';
                                        echo '<a href="'.$k1.'">'.$val2.'</a></li>';
                                    }
                                    echo '</ul>';
                                }
                                else
                                    echo '<a href="'.$key.'">'.$val.'</a>';
                                echo '</li>';
                            }
                            // <li><a href="#">Pages</a>
                            //     <ul class="dropdown">
                            //         <li><a href="./index.php">- Home</a></li>
                            //         <li><a href="./about-us.php">- About</a></li>
                            //         <li><a href="./gallery.php">- Gallery</a></li>
                            //         <li><a href="./blog.php">- Blog</a></li>
                            //         <li><a href="./single-blog.php">- Blog Details</a></li>
                            //         <li><a href="./contact.php">- Contact</a></li>
                            //         <li><a href="#">- Dropdown</a></li>
                            //     </ul>
                            // </li>
                        ?>
                        </ul>
                        <!-- Search Icon -->
                        <!-- <div class="search-icon" data-toggle="modal" data-target="#searchModal"><i class="ti-search"></i></div> -->
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>
