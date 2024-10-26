<!DOCTYPE html>
<html lang="en">
    i am on git sample branch
<head>
    <?php

        require_once('header.php');
    ?>
</head>
<body>
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <?php
        require_once('topnavbar.php');
    ?>
    <!-- Preloader Ends -->
    <!-- Header 
    ============================================= -->
    <header id="home">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
            <div class="container">
                <div class="nav-box">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav inc-border">
                        <ul>
                            <li class="contact">
                                <i class="fas fa-phone"></i> 
                                <p>Call us today! <strong>08034435890</strong></p>
                            </li>
                        </ul>
                    </div>        
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <!-- <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo-light.png" class="logo logo-display" alt="Logo">
                            <img src="assets/img/logo.png" class="logo logo-scrolled" alt="Logo">
                        </a>
                    </div> -->
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                   <?php
                        require_once('topnavbar.php');
                   ?>
                </div>
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

   <!-- Start Banner 
    ============================================= -->
    <div class="banner-area top-pad-60-responsive border-shadow text-center content-less text-large">
        <div id="bootcarousel" class="carousel text-light slide carousel-fade animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/1.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <div class="content">
                                            <h2 data-animation="animated slideInRight">Paragon INFORMATION <strong>VENTURES</strong></h2>
                                            <!-- <a data-animation="animated fadeInUp" class="btn circle btn-light border btn-md" href="#">Start Now</a>
                                            <a class="popup-youtube relative video-play-button" href="https://www.youtube.com/watch?v=owhuBrGIOsE">
                                                <i class="fa fa-play"></i> -->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/2.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <div class="content">
                                            <h2 data-animation="animated slideInRight">Learn graphics<strong>DESIGN</strong></h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/index3.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <div class="content">
                                            <h2 data-animation="animated slideInRight">Learn Software<strong>Development </strong></h2>
                                            <!-- <a data-animation="animated fadeInUp" class="btn circle btn-light border btn-md" href="#">Start Now</a>
                                            <a class="popup-youtube relative video-play-button" href="https://www.youtube.com/watch?v=owhuBrGIOsE">
                                                <i class="fa fa-play"></i> -->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control light" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control light" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Features Area 
    ============================================= -->
    <div class="feature-area half-bg overflow-hidden default-padding-top">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-6">
                        <h5>30+ years of experience</h5>
                        <h4>
                            we offer graphics design, website design,<br>website development, printing and binding,<br>logo design,poster design and lot more
                        </h4>
                    </div>
                    <div class="col-lg-6">
                        <p>
                            We would develop high catchy and responsive website, we would make profession graphics designs for your business, we would make awesome log designs for your business and a lot more, we would love to know what you want and we are opened in solving any problem and issues .
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="features-box text-light">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <img src="assets/img/features/1.jpg" alt="Thumb">
                            <div class="overlay">
                                <div class="info">
                                    <h4>Website design and development</h4>
                                    <!-- <a href="#"><i class="fas fa-angle-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <img src="assets/img/features/2.jpg" alt="Thumb">
                            <div class="overlay">
                                <div class="info">
                                    <h4>Printing and binding</h4>
                                    <!-- <a href="#"><i class="fas fa-angle-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <img src="assets/img/features/3.jpg" alt="Thumb">
                            <div class="overlay">
                                <div class="info">
                                    <h4>Computer repair</h4>
                                    <!-- <a href="#"><i class="fas fa-angle-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div><br>
            </div>
        </div>
    </div>
   
    <style> 
        #panel, #flip {
        padding: 5px;
        font-size: 18px;
        text-align: center;
        background-color: #555;
        color: white;
        border: solid 1px #666;
        border-radius: 3px;
        }

        #panel {
        padding: 50px;
        display: none;
        }
    </style>

    <div class="contact-area overflow-hidden default-padding bg-gray">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 contact-form-box">
                    <div class="content">
                        <div class="heading">
                            <h2>Need Help?</h2>
                            <p>SEND A MESSAGE TO KNOW MORE ABOUT US.</p>
                        </div>
                        <form method="POST" class="contact-form" id ="sendmessage">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="fullname" name="fullname" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Please describe what you need."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" name="submit" id="submit" onclick ="validate()">
                                        Reach Us
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6 info">
                    <img src = "assets/img/index3.jpg" width ="600" height="400">
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Footer 
    ============================================= -->
    <footer>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Copyright <?php echo date('Y');?>. Developed by Piz_tech</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <?php
        require_once('js.php');
    ?>
    
    <div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

    <button type="button" onclick="loadDoc()">Change Content</button>
    <script>
        
        function validate(){
            var fullname = $("#fullname").val().trim();
            var email = $("#email").val().trim();
            var phone = $("#phone").val().trim();
            var comments = $("#comments").val().trim();

            if(fullname == '' || email == '' || phone == '' || comments == ''){
                alert("please fill up the form");
            }else{
                var response = confirm("Are You Sure You Want To Send Us A Message ?");
                if(response = true){
                    var formdata = $("form#sendmessage").serialize();
                    $.post("processSendmessage.php",formdata).done(function(returndata){
                        // alert(returndata);
                        if(returndata == 1){
                            alert("You have successfully gotten in touch with us. We would send you a message prompt 24 hours time");
                            clearfields();
                        }else{
                            alert(returndata);
                                    
                        }
                    });
                }
                
            }

            
        }

        function clearfields(){
            $("#fullname").val('');
            $("#email").val('');
            $("#phone").val('');
            $("#comments").val('');
        }
    </script>

</body>


</html>