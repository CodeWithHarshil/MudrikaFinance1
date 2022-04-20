<?php
include("config.php");
if (isset($_POST['submit'])) {
    $NAME = $_POST['NAME'];
    $EMAIL = $_POST['EMAIL'];
    $PHONE = $_POST['PHONE'];
    $SUBJECT = $_POST['SUBJECT'];
    $MSG = $_POST['MSG'];
    $result = mysqli_query($conn, "INSERT INTO contact(NAME,EMAIL,PHONE,SUBJECT,MSG) VALUES ('$NAME','$EMAIL','$PHONE','$SUBJECT','$MSG')");

    if ($result) {
        $_SESSION['status'] = "Thank you for reaching out...We will get back to you as soon as possible.";
        $_SESSION['status_code'] = "success";
    } else {
        $_SESSION['status'] = "Oops! Message Failed...";
        $_SESSION['status_code'] = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>संपर्क करे ||  मुद्रिका फाइनेंस ||</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="सभी के लिए फाइनेंस समाधान है|" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/qutiiz-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/qutiiz.css" />
    <link rel="stylesheet" href="assets/css/qutiiz-responsive.css" />
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="100" src="assets/images/loader.png" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <nav class="main-menu clearfix">
                <div class="main-menu-wrapper clearfix">
                    <div class="main-menu-wrapper__left">
                        <div class="main-menu-wrapper__logo">
                            <a href="index.html"><img src="assets/images/resources/logo.png" alt=""></a>
                        </div>
                        <div class="main-menu-wrapper__main-menu">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li>
                                    <a href="index_hindi.html">Home</a>
                                    <!-- <ul>
                                        <li>
                                            <a href="index-2.html">Home One</a>
                                        </li>
                                        <li><a href="index2.html">Home Two</a></li>
                                        <li class="dropdown">
                                            <a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index-2.html">Header One</a></li>
                                                <li><a href="index2.html">Header Two</a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>

                                <li class="dropdown">
                                    <a href="services_hindi.html">Services</a>
                                    <ul>
                                        <!-- <li><a href="services.html">Services</a></li> -->
                                        <li><a href="online-bank-account-opening_hindi.html">Online Bank Account Opening</a></li>
                                        <li><a href="personal-loans_hindi.html">Personal Loan</a></li>
                                        <li><a href="home-loan_hindi.html">Home Loan </a></li>
                                        <li><a href="gold-loan_hindi.html">Gold Loan</a></li>
                                        <!-- <li><a href="social-marketing.html">Social Marketings </a></li>
                                        <li><a href="content-writing.html">Content Writtings </a></li> -->
                                    </ul>
                                </li>

                                <li>
                                    <a href="about_hindi.html">About Us</a>
                                    <!-- <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul> -->
                                </li>

                                <li>
                                    <a href="career_hindi.php">Career</a>
                                    <!-- <ul>
                                        <li><a href="project.html">Projects</a></li>
                                        <li><a href="project-details.html">Project Details</a></li>
                                    </ul> -->
                                </li>

                                <li><a href="faq_hindi.html">FAQs</a></li>

                                <!-- <li class="dropdown">
                                    <a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Posts</a></li>
                                        <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li> -->

                                <li><a href="contact_hindi.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <<div class="main-menu-wrapper__right">
                        <div class="main-menu-wrapper__search-box">
                            <!-- <a href="#" class="main-menu-wrapper__search search-toggler icon-magnifying-glass"></a> -->
                            <div id="divaa2">
                                <img id="img3" src="https://img.icons8.com/color/38/000000/google-translate.png"/>
                                <div id="divaaa2"></div>
                                <input id="btnb2" type="button" value="Hindi" onclick="window.location.href='contact_hindi.php';">
                                <input id="btnb1" type="button" value="Engilsh" onclick="window.location.href='../contact.php';">
                              </div>
                        </div>
                        <div class="main-menu-wrapper__call">
                            <div class="main-menu-wrapper__call-icon">
                                <span class="icon-chatting"></span>
                            </div>
                            <div class="main-menu-wrapper__call-number">
                                <p>Contact us at</p>
                                <h5><a href="tel:sales@mudrikafinance.com">+91 9836566665</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="page-header-border"></div>
            <div class="page-header-border page-header-border-two"></div>
            <div class="page-header-border page-header-border-three"></div>
            <div class="page-header-border page-header-border-four"></div>
            <div class="page-header-border page-header-border-five"></div>
            <div class="page-header-border page-header-border-six"></div>

            <div class="page-header-shape-1"></div>
            <div class="page-header-shape-2"></div>
            <div class="page-header-shape-3"></div>

            <div class="container">
                <div class="page-header__inner">
                    <!-- <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">contact</li>
                    </ul> -->
                    <h2>संपर्क करे</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Info Start-->
        <section class="contact-info">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Contact Info Single-->
                        <div class="contact-info__single">
                            <div class="contact-info__icon">
                                <span class="icon-conversation"></span>
                            </div>
                            <h3 class="contact-info__title">हमारे बारे में</h3>
                            <p class="contact-info__text">हम अपने मंच के माध्यम से विभिन्न सरकारी परियोजनाओं और डिजिटल बैंक खाता खोलने के तहत व्यक्तिगत ऋण, स्वर्ण ऋण और गृह ऋण की पेशकश कर रहे हैं।
                            </p><br>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--Contact Info Single-->
                        <div class="contact-info__single">
                            <div class="contact-info__icon">
                                <span class="icon-address"></span>
                            </div>
                            <h3 class="contact-info__title">पता</h3>
                            <p class="contact-info__text">जे पी टॉवर, गंगा सागर-बी, वैशाली नगर 302021 जयपुर, राजस्थान
                                <br><br><br><br><br>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--Contact Info Single-->
                        <div class="contact-info__single contact-info__single-last">
                            <div class="contact-info__icon">
                                <span class="icon-contact"></span>
                            </div>
                            <h3 class="contact-info__title">संपर्क करे</h3>
                            <h4>
                                <a href="mailto:needhelp@company.com" class="contact-info__mail">
                                    sales@mudrikafinance.com</a>
                                <a href="tel:+919836566665" class="contact-info__phone">+91 9836566665</a><br><br><br><br>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Info End-->

        <!--contact Page Start-->
        <section class="contact-page contact-page-two">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">हमसे संपर्क करें</span>
                    <h2 class="section-title__title">कोई भी प्रश्न है?</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-page__form">
                            <form action="" method="POST" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="NAME" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email address" name="EMAIL" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Phone number" name="PHONE" pattern="[5-9]{1}[0-9]{9}" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Subject" name="SUBJECT">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="MSG" placeholder="Write a message"></textarea>
                                        </div>
                                        <button name="submit" type="submit" class="thm-btn comment-form__btn">send a message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact Page End-->

        <!--Google Map Start-->
        <section class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7115.523700703768!2d75.73344120000002!3d26.911052200000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x82aa4b03c34278d7!2sDesert%20Greens%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1647323592979!5m2!1sen!2sin" class="google-map__one" allowfullscreen></iframe>

        </section>
        <!--Google Map End-->

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__top">
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="site-footer__top-left">
                            <div class="site-footer__top-logo">
                                <!-- <a href="index-2.html"><img src="assets/images/resources/footer-logo.png" alt=""></a> -->
                            </div>
                            <div class="site-footer__top-title-box">
                                <h3 class="site-footer__top-title">चलिए साथ मिलकर काम करें। हमे यहां सम्पर्क करे - <a
                                        href="mailto:info@example.com">sales@mudrikafinance.com</a></h3>
                            </div>
                        </div>
                        <!-- <div class="site-footer__top-right">
                            <div class="site-footer__top-right-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="site-footer__middle">
                <div class="site-footer-shape"
                    style="background-image: url(assets/images/shapes/site-footer-shape.png)"></div>
                <div class="container">
                    <div class="site-footer__middle-inner">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget__column footer-widget__about">
                                    <h3 class="footer-widget__title">हमारे बारे में</h3>
                                    <div class="footer-widget__about-text-box">
                                        <p class="footer-widget__about-text">मुद्रिका फाइनेंस एक जयपुर स्थित अभिनव और नए युग का स्टार्ट-अप है जो वित्तीय उधारदाताओं को उनकी क्रेडिट योग्यता साबित करके ईडब्ल्यूएस, एलआईजी और एमआईजी क्षेत्र को सर्वोत्तम किफायती ब्याज दरों पर डिजिटल रूप से क्रेडिट लाइन प्रदान करने के लिए समर्पित है।</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget__column footer-widget__links clearfix">
                                    <h3 class="footer-widget__title">Links</h3>
                                    <ul class="footer-widget__links-list list-unstyled clearfix">
                                        <li><a href="about_hindi.html">About Us</a></li>
                                        <li><a href="about_hindi.html#mission">Our Mission</a></li>
                                        <!-- <li><a href="team.html">Meet the Team</a></li>
                                        <li><a href="project.html">Our Projects</a></li> -->
                                        <li><a href="contact_hindi.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column footer-widget__explore clearfix">
                                    <h3 class="footer-widget__title">Services</h3>
                                    <ul class="footer-widget__explore-list list-unstyled clearfix">
                                        <li><a href="online-bank-account-opening_hindi.html">Online Bank Account Opening </a></li>
                                        <li><a href="personal-loans_hindi.html">Personal Loan</a></li>
                                        <li><a href="home-loan_hindi.html">Home Loan</a></li>
                                        <li><a href="gold-loan_hindi.html">Gold Loan</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="footer-widget__column footer-widget__newsletter">
                                    <h3 class="footer-widget__title">Contact</h3>
                                    <ul class="footer-widget__about-contact list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-phone-square-alt"></i>
                                            </div>
                                            <div class="text">
                                                <a href="tel:+919836566665">+91 9836566665</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <a href="mailto:sales@mudrikafinance.com">sales@mudrikafinance.com</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="text">
                                                <p>JP Tower, Ganga Sagar-B,
                                                    Vaishali Nagar 302021
                                                    Jaipur, Rajasthan</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- <h3 class="footer-widget__title">Newsletter</h3>
                                    <form class="footer-widget__newsletter-form">
                                        <div class="footer-widget__newsletter-input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                            <button type="submit" class="footer-widget__newsletter-btn"><i
                                                    class="far fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                    <div class="footer-widget__newsletter-bottom">
                                        <div class="footer-widget__newsletter-bottom-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="footer-widget__newsletter-bottom-text">
                                            <p>I agree to all your terms and policies</p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer__bottom">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="site-footer__bottom-inner">
                                    <div class="site-footer__bottom-left">
                                        <p class="site-footer__bottom-text">© Copyrights, 2022 <a
                                                href="#"><b>MudrikaFinance</b></a> All Right Reserved.</p>
                                                
                                    </div>
                                    <div class="site-footer__bottom-right">
                                        <p class="site-footer__bottom-text">Powered by <a href="http://www.desertgreens.in" target="_blank" rel="noopener noreferrer"> <b> Desert Greens pvt. Ltd.</b></a></p>
                                    </div>
                                    <!-- <div class="site-footer__bottom-right">
                                        <ul class="list-unstyled site-footer__bottom-menu">
                                            <li><a href="#">Terms & Conditions</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <!-- <a href="index-2.html" aria-label="logo image"><img src="assets/images/resources/logo-1.png" width="155"
                        alt="" /></a> -->
                        <div id="divaa2">
                                <img id="img3" src="https://img.icons8.com/color/38/000000/google-translate.png"/>
                                <div id="divaaa2"></div>
                                <input id="btnb2" type="button" value="Hindi" onclick="window.location.href='contact_hindi.php';">
                                <input id="btnb1" type="button" value="Engilsh" onclick="window.location.href='../contact.php';">
                              </div>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:sales@mudrikafinance.com">sales@mudrikafinance.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+919836566665">+91 9836566665</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <!-- <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div> -->
            <!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- <a href="contact.php" data-target="html" class="scroll-to-top"><i class="fa fa-phone"></i></a> -->


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>


    <!--disable js-->
    <script src="assets/js/disable.js"></script>

    <!-- template js -->
    <script src="assets/js/qutiiz.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
      <?php
      if (isset($_SESSION['status']) && $_SESSION['status'] != ''){
      ?>
      <script>
        swal({
          title: "<?php echo $_SESSION['status']; ?>",
          // text: "You clicked the button!",
          icon: "<?php echo $_SESSION['status_code']; ?>",
          button: "Ok Done!",
        });
      </script>
      <?php
  unset($_SESSION['status']);
  }
  ?>
</body>

</html>