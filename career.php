<?php
include("config.php"); 
  if (isset($_POST['submit1'])) {
    $FNAME = $_POST['FNAME'];
    $LNAME = $_POST['LNAME'];
    $EMAIL = $_POST['EMAIL'];
    $MOBILE = $_POST['MOBILE'];
    $SELECT1 = $_POST['SELECT1'];
    $TEXT1 = $_POST['TEXT1'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
        $folder = "uimage/".$filename;
          
  
        // Get all the submitted data from the form
        $sql =mysqli_query($conn, "INSERT INTO career (FNAME,LNAME,EMAIL,MOBILE,SELECT1,TEXT1,file_name) VALUES ('$FNAME','$LNAME','$EMAIL','$MOBILE','$SELECT1','$TEXT1','$filename')");
  
        if(move_uploaded_file($tempname, $folder)){
            
                $_SESSION['status'] = "Thank you for applying...We will get back to you as soon as possible.";
                    $_SESSION['status_code'] = "success";   
                } 
                else {
                  $_SESSION['status'] = "Oops! Apply Failed...";
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
    <title>Career || Mudrika Finance</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Fintech Solutions For Everyone" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">


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
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

    main {
        margin: 0;
        /* width: 100vw; */
        /* height: 150vh; */
        background: linear-gradient(to top, #fbe696 0%, #45aea2 100%);
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
        place-items: center;
        overflow: hidden;
    }

    .container1 {
        position: relative;
        border-radius: 20px;
        padding: 40px;
        margin: 70px;
        box-sizing: border-box;
        background: #ecf0f3;
        box-shadow: 14px 14px 20px #45aea2, -14px -14px 20px #fbe696;
    }

    .brand-logo {
        height: 100px;
        width: 100px;
        background: url(assets/images/resources/career.gif);
        background-size: 100px;
        background-repeat: no-repeat;
        margin: auto;
        border-radius: 35%;
        box-sizing: border-box;
        box-shadow: 7px 7px 10px #45aea2, -7px -7px 10px white;
    }

    .brand-title {
        margin-top: 10px;
        font-weight: 900;
        font-size: 1.8rem;
        color: #45aea2;
        letter-spacing: 1px;
        text-align: center;
    }

    .inputs {
        text-align: left;
        margin-top: 30px;
    }

    label,
    input,
    button {
        display: block;
        width: 100%;
        padding: 0;
        border: none;
        outline: none;
        box-sizing: border-box;
    }

    label {
        margin-bottom: 4px;
        color: #0b1c1a;
    }

    label:nth-of-type(2) {
        margin-top: 12px;
    }

    .inputs input::placeholder {
        color: #1a403c;
    }

    .inputs input {
        background: #ecf0f3;
        padding: 15px;
        padding-left: 20px;
        height: 50px;
        font-size: 14px;
        border-radius: 5px;
        box-shadow: inset 6px 6px 6px #45aea2, inset -6px -6px 6px white;
    }

    .center button {
        margin-top: 14px;
        background: #45aea2;
        height: 40px;
        border-radius: 20px;
        cursor: pointer;
        font-weight: 900;
        box-shadow: 6px 6px 6px #0b1c1a, -6px -6px 6px white;
        transition: 0.5s;
    }

    .center button:hover {
        box-shadow: none;
    }

    .grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    .grid1 {
        margin: 10px;
    }

    .center {
        width: 50%;
        position: relative;
        left: 25%;
    }

    .select11 {
        background: #ecf0f3;
        padding: 10px;
        padding-left: 20px;
        height: 50px;
        width: 100%;
        font-size: 14px;
        border-radius: 5px;
        box-shadow: inset 6px 6px 6px #45aea2, inset -6px -6px 6px white;
    }


    @media (max-width:750px) {
        .grid {
            display: grid;
            grid-template-columns: 1fr;
        }
    }

    @media (max-width:490px) {
        .container1 {
            width: 350px;
        }
    }
</style>

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
                                    <a href="index.html">Home</a>
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
                                    <a href="services.html">Services</a>
                                    <ul>
                                        <!-- <li><a href="services.html">Services</a></li> -->
                                        <li><a href="online-bank-account-opening.html">Online Bank Account Opening</a></li>
                                        <li><a href="personal-loans.html">Personal Loan</a></li>
                                        <li><a href="home-loan.html">Home Loan </a></li>
                                        <li><a href="gold-loan.html">Gold Loan</a></li>
                                        <!-- <li><a href="social-marketing.html">Social Marketings </a></li>
                                        <li><a href="content-writing.html">Content Writtings </a></li> -->
                                    </ul>
                                </li>

                                <li>
                                    <a href="about.html">About Us</a>
                                    <!-- <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul> -->
                                </li>

                                <li>
                                    <a href="career.php">Career</a>
                                    <!-- <ul>
                                        <li><a href="project.html">Projects</a></li>
                                        <li><a href="project-details.html">Project Details</a></li>
                                    </ul> -->
                                </li>

                                <li><a href="faq.html">FAQs</a></li>

                                <!-- <li class="dropdown">
                                    <a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Posts</a></li>
                                        <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li> -->

                                <li><a href="contact.php">Contact</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="main-menu-wrapper__right">
                        <div class="main-menu-wrapper__search-box">
                            <!-- <a href="#" class="main-menu-wrapper__search search-toggler icon-magnifying-glass"></a> -->
                            <div id="divaa2">
                                <img id="img3" src="https://img.icons8.com/color/38/000000/google-translate.png" onclick="window.location.href='Hindi/index_hindi.html';"/>
                                <div id="divaaa2"></div>
                                <input id="btnb1" type="button" value="Engilsh" onclick="window.location.href='career.php';">
                                <input id="btnb2" type="button" value="Hindi" onclick="window.location.href='Hindi/career_hindi.php';">
                              </div>
                        </div>
                        <div class="main-menu-wrapper__call">
                            <div class="main-menu-wrapper__call-icon">
                                <span class="icon-chatting"></span>
                            </div>
                            <div class="main-menu-wrapper__call-number">
                                <p>Call Us At</p>
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
                        <li class="active">Career</li>
                    </ul> -->
                    <h2>Career</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->




        <!--CTA One Start-->
        <!-- <section class="cta-one services-page-cta-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12"> -->
        <!-- <div class="cta-one__inner wow fadeInUp" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="justify-content: center;"> -->
        <!-- <div class="cta-one-shape-1"></div>
                            <div class="cta-one-shape-2"></div> -->
        <!-- <div class="cta-one-shape-3"></div> -->
        <main id="main">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="container1 wow bounceInRight" data-wow-duration="2s">
                    <div class="inputs">
                        <div class="brand-logo"></div>
                        <div class="brand-title">APPLY FOR A JOB</div>
                        <div class="grid">
                            <div class="grid1">
                                <label>First Name<small style="color:red;">*</small></label>
                                <input type="text" name="FNAME" placeholder="Enter your first name" required />
                            </div>
                            <div class="grid1">
                                <label>Last Name<small style="color:red;">*</small></label>
                                <input type="text" name="LNAME" placeholder="Enter your Last name" required />
                            </div>
                            <div class="grid1">
                                <label>Mobile Number<small style="color:red;">*</small></label>
                                <input type="text" name="MOBILE" placeholder="Enter your Mobile number" pattern="[4-9]{1}[0-9]{9}" required />
                            </div>
                            <div class="grid1">
                                <label>Email<small style="color:red;">*</small></label>
                                <input type="email" name="EMAIL" placeholder="Enter your Email" required />
                            </div>

                            <div class="grid1">
                                <label>Choose Your Job<small style="color:red;">*</small></label>
                                <select name="SELECT1" class="select11" required required>
                                    <option value selected>Select</option>
                                    <option value="App Developer"> App Developer</option>
                                    <option value="Front End Web Developer">Front End Web Developer
                                    </option>
                                    <option value="Back End Web Developer">Back End Web Developer
                                    </option>
                                    <option value="App/Web Tester">App/Web Tester</option>
                                    <option value="Tech Researcher">Tech Researcher</option>
                                    <option value="Insurance Sales Manager">Insurance Sales Manager
                                    </option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Telecaller">Telecaller</option>
                                    <option value="Office boy">Office Boy</option>
                                    <option value="Accountant">Accountant</option>
                                    <option value="Content Writer">Content Writer</option>
                                    <option value="Legal Advisor">Legal Advisor</option>
                                </select>
                            </div>

                            <div class="grid1">
                                <label>Uplaod Your CV<small style="color:red;">*</small></label>
                                <!-- <div class="input-box"> -->
                                <input type="file" name="file" id="file" class="form-control" placeholder="Upload CV"
                                    required>
                            </div>
                        </div>
                        <div class="message-box">
                            <label>Why should we choose you?<small style="color:red;">*</small></label>
                            <textarea name="TEXT1" style="
                                        width: 100%;
                                        height: 20vh;
                                        background: #ecf0f3;" required></textarea>
                        </div>
                        <div class="center">
                            <button type="submit" name="submit1">Apply</button>
                        </div>
                    </div>
                </div>
            </form>
        </main>
        <!-- </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--CTA One End-->



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
                                <h3 class="site-footer__top-title">Let's work together. just drop us a line at - <a
                                        href="mailto:sales@mudrikafinance.com">sales@mudrikafinance.com</a></h3>
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
                                    <h3 class="footer-widget__title">About</h3>
                                    <div class="footer-widget__about-text-box">
                                        <p class="footer-widget__about-text">Mudrika Finance is a Jaipur based innovative and new age start-up dedicated to providing credit line digitally at best affordable Interest rates to the EWS,LIG and MIG sector by proving their credit worthiness to financial lenders.</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget__column footer-widget__links clearfix">
                                    <h3 class="footer-widget__title">Links</h3>
                                    <ul class="footer-widget__links-list list-unstyled clearfix">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="about.html#mission">Our Mission</a></li>
                                        <!-- <li><a href="team.html">Meet the Team</a></li>
                                        <li><a href="project.html">Our Projects</a></li> -->
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column footer-widget__explore clearfix">
                                    <h3 class="footer-widget__title">Services</h3>
                                    <ul class="footer-widget__explore-list list-unstyled clearfix">
                                        <li><a href="online-bank-account-opening.html">Online Bank Account Opening </a></li>
                                        <li><a href="personal-loans.html">Personal Loan</a></li>
                                        <li><a href="home-loan.html">Home Loan</a></li>
                                        <li><a href="gold-loan.html">Gold Loan</a></li>
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
                            <img id="img3" src="https://img.icons8.com/color/38/000000/google-translate.png" onclick="window.location.href='Hindi/index_hindi.html';"/>
                            <div id="divaaa2"></div>
                            <input id="btnb1" type="button" value="Engilsh" onclick="window.location.href='career.php';">
                            <input id="btnb2" type="button" value="Hindi" onclick="window.location.href='Hindi/career_hindi.php';">
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


    <!-- <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a> -->
    <a href="contact.php" data-target="html" class="scroll-to-top"><i class="fa fa-phone"></i></a>


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