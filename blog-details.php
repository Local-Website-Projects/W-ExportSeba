<?php
include ('config/dbconfig.php');
$id = $_GET['id'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Export Sheba">
    <meta name="description" content="Export Sheba">
    <meta name="keywords"
          content="Export Sheba">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exportsheba -Blog Export-Import Agency & Services</title>

    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="css/shortcodes.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/megamenu.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel='stylesheet' id='rs-plugin-settings-css' href="revolution/css/rs6.css">

    <style>
        .links ul {
            list-style: none;
            padding: 0;
            margin: 0 0 20px 0;
        }

        .links li {
            font-size: 16px;
            text-align: center;
            cursor: pointer;
        }

        .links li:hover {
            text-decoration: underline;
        }
        .iconp{
            cursor: pointer;
        }
    </style>

</head>
<body>

<!-- page start -->
<div class="page ">

    <!-- header start -->
    <header id="masthead" class="header prt-header-style-01">
        <!-- site-header-menu -->
        <div id="site-header-menu" class="site-header-menu">
            <div class="site-header-menu-inner prt-stickable-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--site-navigation -->
                            <div class="site-navigation d-flex align-items-center justify-content-between">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <h1><a class="home-link" href="index.html" title="Webizzy" rel="home">
                                            <img id="logo-img" height="40" width="180" class="img-fluid auto_size"
                                                 src="images/logo/logo.png" alt="logo-img">
                                        </a></h1>
                                </div><!-- site-branding end -->
                                <div class="menu-link">
                                    <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                            <span class="menubar-box">
                                                <span class="menubar-inner"></span>
                                            </span>
                                    </div>
                                    <!-- menu -->
                                    <nav class="main-menu menu-mobile" id="menu">
                                        <ul class="menu">
                                            <li class="mega-menu-item">
                                                <a href="index.html" class="mega-menu-link">Home</a>
                                            </li>

                                            <li class="mega-menu-item">
                                                <a href="services.html" class="mega-menu-link">Services</a>
                                            </li>

                                            <li class="mega-menu-item active">
                                                <a href="blog.php" class="mega-menu-link">Blog</a>
                                            </li>

                                            <li class="mega-menu-item">
                                                <a href="about_us.html" class="mega-menu-link">About Us</a>
                                            </li>

                                            <li class="mega-menu-item">
                                                <a href="contact_us.html">Contact us</a>
                                            </li>
                                        </ul>
                                    </nav><!-- menu end -->
                                </div>
                                <!-- header_extra -->
                                <div class="side-menu-container">
                                    <div class="side-menu"><a href="#"><i class="icon-menu"></i></a></div>
                                    <!-- Side Menu -->
                                    <div class="side-overlay">
                                        <div class="side bg-base-dark">
                                            <a href="#" class="close-side"><i class="icon-close"></i></a>
                                            <div class="flotingbar-img mb-55">
                                                <img height="40" width="160" class="img-fluid auto_size"
                                                     src="images/logo/logo.png" alt="flotingbar-img">
                                            </div>
                                            <div class="flotingbar-title">
                                                <h2>Export Import Complete Business Solution</h2>
                                                <p>One Of The Leaders in Export-Import Market Since 2022.</p>
                                            </div>
                                            <div class="prt-detailss">
                                                <ul>
                                                    <li>Phone <br><span><a
                                                                    href="tel:8801316814564"> 01316814564 </a></span>
                                                    </li>
                                                    <li>Email <br><span> <a href="mailto:exportshebabd@gmail.com">exportshebabd@gmail.com</a> </span>
                                                    </li>
                                                    <li>Address <br><span> South Banosree <br>Dhaka </span></li>
                                                </ul>
                                            </div>
                                            <ul class="social-icons">
                                                <li>
                                                    <a href="https://www.facebook.com/learnexportwithjahid/?paipv=0&eav=AfYf5QpJWzGRetfZT4_rVidqfDH2Ivb9rbzxGWiSr6kroNIo3bA_CoavjTfnwwyhWfA&_rdr"
                                                       target="_blank" rel="noopener" aria-label="facebook"><i
                                                                class="icon-facebook"></i></a></li>
                                                <li>
                                                    <a href="https://twitter.com/JahidHu35073028?fbclid=IwAR0fiAlIDjMqYzCgWCMxkXyJjXrvbENZVxHzF4-yMNzGV54-R8q_lj9f47M"
                                                       target="_blank" rel="noopener" aria-label="twitter"><i
                                                                class="icon-twitter"></i></a></li>
                                                <li>
                                                    <a href="https://www.instagram.com/jahid_hussain_nasim/?fbclid=IwAR2FUYotToEOyhZlajrS2aGQ-U-Y2PSipYBgKnLb1m2iWGGsh0V9aca0q14"
                                                       target="_blank" rel="noopener" aria-label="instagram"><i
                                                                class="icon-instagram"></i></a></li>
                                                <li><a href="https://www.youtube.com/Learnexportwithjahid"
                                                       target="_blank" rel="noopener" aria-label="youtube"><i
                                                                class="icon-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Side Menu -->
                                </div>
                                <!-- header_extra end -->
                            </div><!-- site-navigation end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- site-header-menu end-->
    </header>
    <!-- header end -->

    <!-- page-title -->
    <div class="prt-page-title-row">
        <div class="prt-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">Blog Details</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->
    <!-- breadcrumb area end -->

    <!-- blog area start here -->
    <section class="bd-blog-deatils-area pt-150 pb-100">
        <div class="container">
            <div class="row">
                <?php

                $blog= $connection->query("SELECT * FROM `blog` where id='$id'");
                if($blog->num_rows >0){
                while ($a=mysqli_fetch_assoc($blog)){
                    $date = date_create($a["date"]);
                    $date_formatted = date_format($date, "d M Y");
                    ?>
                    <div class="col-lg-8">
                        <div class="blog__details--wrapper mr-50 mb-50">
                            <div class="ablog ablog-4 mb-60">
                                <div class="ablog__img">
                                    <img src="images/blog/<?php echo $a['image']?>" class="img-fluid" alt="img">
                                </div>
                                <div class="ablog__text ablog__text4">
                                    <div class="bd-blog-meta mb-15">
                                        <ul>
                                            <a href="#"><i class="flaticon-profile"></i><?php echo $a['author']?></a> ||
                                            <a href="#"><i class="flaticon-calendar"></i><?php echo $date_formatted;?></a> ||
                                            <a href="#"><i class=""></i><?php echo $a['type']?></a>||
                                        </ul>
                                    </div>
                                    <span>Share On</span>
                                    <span class="badge iconp social-share-url facebook"style="margin: 10px;background-color: #1877f2;">Facebook</span>
                                    <span class="badge iconp social-share-url whatsapp"style="margin: 10px; background-color: #25d366;">Whatsapp</span>
                                    <span class="badge iconp social-share-url linkedin"style="margin: 10px; background-color: #0077b5;">LinkedIn</span>
                                    <span class="badge iconp social-share-url twitter"style="margin: 10px; background-color: #1da1f2;">Twitter</span>



                                    <h2 class="bd-blog-details-title mb-25"><?php echo $a['heading']?></h2>
                                    <p class="mb-30"><?php echo $a['details']?></p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                }
                ?>

            </div>
        </div>
    </section>
    <!-- blog area end here -->

    <!-- footer area start here -->
    <footer class="footer widget-footer bg-base-dark text-base-white clearfix">
        <div class="second-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 widget-area">
                        <div class="widget widget_text clearfix">
                            <div class="footer-content-email mb-25">
                                <p><a href="mailto:exportshebabd@gmail.com">exportshebabd@gmail.com</a></p>
                            </div>
                            <p>আমাদের দেশ থেকে আরো নতুন নতুন দেশে কিভাবে পণ্য রপ্তানি করা যায়, কীভাবে বিশ্বব্যাপী নতুন
                                ক্রেতাদের অনুসন্ধান করা যায়, কীভাবে রপ্তানিকৃত দেশে নতুন পণ্য বাজারজাত করা যায় এবং
                                রপ্তানি ব্যবসায়ের সামগ্রিক পদ্ধতি এখান থেকে আপনারা জানতে পারবেন !</p>
                            <div class="widget_social_wrapper social-icons">
                                <ul class="social-icons">
                                    <li>Social Share:</li>
                                    <li><a href="https://m.facebook.com/learnexportwithjahid/" rel="noopener"
                                           aria-label="facebook"><i class="icon-facebook"></i></a></li>
                                    <li>
                                        <a href="https://twitter.com/JahidHu35073028?fbclid=IwAR0fiAlIDjMqYzCgWCMxkXyJjXrvbENZVxHzF4-yMNzGV54-R8q_lj9f47M"
                                           rel="noopener" aria-label="twitter"><i class="icon-twitter"></i></a></li>
                                    <li><a href="https://www.youtube.com/Learnexportwithjahid" rel="noopener"
                                           aria-label="pinterest"><i class="icon-youtube"></i></a></li>
                                    <li>
                                        <a href="https://www.instagram.com/jahid_hussain_nasim/?fbclid=IwAR2FUYotToEOyhZlajrS2aGQ-U-Y2PSipYBgKnLb1m2iWGGsh0V9aca0q14"
                                           rel="noopener" aria-label="linkedin"><i class="icon-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 widget-area">
                        <div class="widget widget_cta clearfix">
                            <h3 class="widget-title">Get in touch</h3>
                            <div class="footer-content-call">
                                <h3>Our phone number</h3>
                                <p><a href="tel:1234567890">+8801316814564</a></p>
                            </div>
                            <div class="footer-content-location">
                                <h3>Our locations</h3>
                                <p><a href="https://www.google.com/maps">South Banosree</a></p>
                            </div>
                        </div>
                    </div>
                    <!--   <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 widget-area">
                           <div class="widget link-widget clearfix">
                              <h3 class="widget-title">Quick links!</h3>
                              <ul class="menu-footer-link">
                                   <li><a href="#">Make Appointment</a></li>
                                   <li><a href="#">Meet Our Experts</a></li>
                                   <li><a href="#">Managed services</a></li>
                                   <li><a href="#">Customer</a></li>
                                   <li><a href="#">About Company</a></li>
                                   <li><a href="#">Department</a></li>
                                   <li><a href="#">Privacy policy</a></li>
                               </ul>
                           </div>
                       </div>-->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                            <h3 class="widget-title">Our Newsletter</h3>
                            <div class="widget-form">
                                <form id="subscribe-form" class="newsletter-form" method="post" action="#"
                                      data-mailchimp="true">
                                    <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                        <p>
                                            <i class="flaticon flaticon-email"></i>
                                            <input type="email" name="email" placeholder="Enter Your email address.."
                                                   required=""></p>
                                        <button class="submit" type="submit"><i class="fa fa-arrow-right"></i></button>
                                    </div>
                                    <p class="cookies">
                                        <input type="checkbox" name="cookies-consent" id="cookies-consent1">
                                        <label for="cookies-consent1"></label>
                                        I agree to the <a href="#" class="underline">Privacy Policy.</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="copyright">Copyright © 2023 <a href="#">EXPORTSHEBA</a> Template Designed by <a
                                    href="https://www.frogbid.com/">FrogBID</a></span>
                    </div>
                    <!--<div class="col-lg-12">
                        <div class="menu-footer-menu">
                            <ul class="footer-nav-menu">
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                                <li><a href="services-1.html">Services</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                            </ul>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end here -->

</main>


    <!-- Javascript -->
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/jquery-migrate-3.3.2.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/Scrolltrigger.js"></script>
    <script src="js/SplitText.js"></script>
    <script src="js/cursor.js"></script>
    <script src="js/gsap.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/gsap-animation.js"></script>
    <script src="js/jquery-validate.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery-waypoints.js"></script>
    <script src="js/numinate.min.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/jquery-isotope.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/aos.js"></script>

    <script>
        AOS.init({
            offset: 120,
            duration: 400,
        });
    </script>
    <script>
        setShareLinks();

        function socialWindowScreen(url) {

            var left = (screen.width - 570)/2;
            var top = (screen.height - 570)/2;

            var params = "menubar=no,toolbar=no,status=no,width=570,height=570,top="+top + ",left=" + left;

            window.open(url,"NewWindow",params);
        }




        //
        function  setShareLinks() {
            var pageUrl = encodeURIComponent(document.URL);
            var tweet = encodeURIComponent($("meta[property='og:description']").attr("content"));
            console.log(pageUrl);


            $(".social-share-url.facebook").on("click",function () {
                url = "https://www.facebook.com/sharer.php?u=" +pageUrl;
                socialWindowScreen(url);
            })
            $(".social-share-url.twitter").on("click",function () {
                url = "https://www.twitter.com/intent/tweet?url=" +pageUrl + "&text=" +tweet;
                socialWindowScreen(url);
            })
            $(".social-share-url.linkedin").on("click",function () {
                url = "https://www.linkedin.com/shareArticle?mini=true&url=" +pageUrl;
                socialWindowScreen(url);
            })
            $(".social-share-url.whatsapp").on("click",function () {
                url = "https://wa.me/?text=" +pageUrl;
                socialWindowScreen(url);
            })
        }
    </script>

    <!-- Revolution Slider -->
    <script src='revolution/js/revolution.tools.min.js'></script>
    <script src='revolution/js/rs6.min.js'></script>
    <script src="revolution/js/slider.js"></script>
    <!-- Javascript end-->
</body>


</html>