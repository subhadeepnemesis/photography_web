<?php
    $msg = "";
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $msg = "Mail sending failure! Plese retry!";
        if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['mob']) || !isset($_POST['subject']) || !isset($_POST['message']))
            $msg = "Please fillup all the fields.";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mob = $_POST['mob'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $formcontent="Hi Mandar,\n$name has contected you.\nContact no - $mob\nEmail - $email\nMessage: $message";
        $recipient1 = "enquiry@mkphotography.in";
        $recipient2 = "mkphotography2787@gmail.com";
        $subject = "Message From mkphotography.in";
        $headers = 'From: '.$email."\r\n".
                    'Reply-To: '.$email."\r\n";
        if( mail($recipient1, $subject, $formcontent, $headers) && mail($recipient2, $subject, $formcontent, $headers) )
            $msg = "Thank You! Mail is sent successfully.";
        else
            $msg = "Mail sending failure. Please retry!";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php 
    include 'include/meta.php';
    include 'include/enquiry_meta.php';
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

    <!-- Contact Area Start -->
    <div class="contact-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h2 class="contact-title mb-30">Let’s Work <br>Together</h2>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Contact Info -->
                    <div class="contact-info mb-30">
                        <p>Visit Us</p>
                        <p>Mandar Kashikar</p>
                        <p>Flat No 22, Aditya Residency, Pimpri Chinchwad Link Road,</p>
                        <p>Near Gawade Petrol Pump, Chinchwad, Pune 411033</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Contact Info -->
                    <div class="contact-info mb-30">
                        <p>Email</p>
                        <a href="mailto:mkphotography2787@gmail.com">mkphotography2787@gmail.com</a>
                        <a href="mailto:enquiry@mkphotography.in">enquiry@mkphotography.in</a>
                    </div>
                    <!-- Contact Info -->
                    <div class="contact-info mb-30">
                        <p>Call Us</p>
                        <a href="#">9766121189</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="wrapper">
                    <form id="frm_contact" method="POST" action="" class="ccform">
                        <div class="ccfield-prepend">
                            <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
                            <input class="ccformfield" name="name" type="text" placeholder="Enter your name" required>
                        </div>
                        <div class="ccfield-prepend">
                            <span class="ccform-addon"><i class="fa fa-envelope fa-2x"></i></span>
                            <input class="ccformfield" name="email" type="email" placeholder="Enter your email" required>
                        </div>
                        <div class="ccfield-prepend">
                            <span class="ccform-addon"><i class="fa fa-mobile-phone fa-2x"></i></span>
                            <input class="ccformfield" id="mob" name="mob" type="text" placeholder="Enter your mobile number" required>
                        </div>
                         <div class="ccfield-prepend">
                            <span class="ccform-addon"><i class="fa fa-info fa-2x"></i></span>
                            <input class="ccformfield" name="subject" type="text" placeholder="Enter your subject" required>
                        </div>
                        <div class="ccfield-prepend">
                            <span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span>
                            <textarea class="ccformfield" name="message" name="message" rows="8" placeholder="Enter your message" required></textarea>
                        </div>
                        <div class="ccfield-prepend">
                            <input class="ccbtn" type="submit" name="submit" value="Connect">
                            <span id= "msg"><?php if( isset($msg)) echo $msg; ?></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->

    <!-- Map Area Start -->
    <?php include 'include/map.php'; ?>
    <!-- Map Area End -->

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