<!DOCTYPE html>

<?php 
require('dbConnect.php');

if (isset($_POST['login'])){
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE `email`=?";

$stmt = mysqli_prepare($conn, $sql);
if($stmt){
    //bind params


mysqli_stmt_bind_param($stmt,'s',$param_email);
//bind
$param_email = $email;

//excute the query
if(mysqli_stmt_execute($stmt)){
   //results
   $result = mysqli_stmt_get_result($stmt);
   if($result){
    $numrows = mysqli_num_rows($result);
    if($numrows>0){
        //put results in an associatife array
        $row = mysqli_fetch_assoc($result);
        $passwordHashedFromDb = $row['password'];
        //verify the password
        $verifyPassword = password_verify($password,$passwordHashedFromDb);
        if($verifyPassword){
            //logined successfulll
            $user = $row['first_name'];
            //
            
            //session
            //name
            //id
            session_start();
            //set values
            $_SESSION['name']=$row['first_name'];
            $_SESSION['id']=$row['id'];
            $_SESSION['role']=$row['role'];?>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Allure Tours & Travel</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="https://res.cloudinary.com/avels-software/image/upload/c_scale,h_322,w_322/v1622624089/logo_lkkxar.png"
        rel="icon" />
    <link href="https://res.cloudinary.com/avels-software/image/upload/c_scale,h_322,w_322/v1622624089/logo_lkkxar.png"
        rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+SC:ital,wght@0,400;0,500;0,700;0,800;0,900;1,400;1,500;1,700;1,800;1,900&family=Fredoka+One&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="aos.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" /> -->
    <link href="swiper-bundle.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/0c4b9907e3.js" crossorigin="anonymous"></script>

    <!-- Template Main CSS File -->
    <link href="style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Gp - v4.2.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-lg-between">
            <h1 class="logo me-auto me-lg-0" style="font-family: 'Alegreya SC', serif;">
                <a href="index.html">ALLURE</a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li>

                        <a class="nav-link scrollto" href="#cta">Trip planner</a>
                    </li>
                    <li>

                        <a class="nav-link scrollto" href="#portfolio"> Gallery</a>
                    </li>

                    <li><a class="nav-link scrollto" href="#contact">Contact us</a></li>
                    <li><a class="nav-link scrollto" href="logout.php">logout</a></li>
                    <?php if ($_SESSION['role']== 'admin'){
                        echo "<li><a class='nav-link scrollto' href='adminlogin.php'> ADMIN </a></li>";
                    }?>
                    <li> <a class="nav-link scrollto text-info" href="#"><?php echo $user;?> <i
                                class="fa fa-user fa-2x text-warning"></i></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1 style="font-family: 'Alegreya SC', serif;">ALLURE TOURS & TRAVEL</h1>
                    <h2 style="font-family: 'Fredoka One', cursive;">Your adventure partner</h2>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="fas fa-bus-alt"></i>
                        <h3><a href="">Special Deals</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="fas fa-route"></i>
                        <h3><a href="">Upcoming Events</a></h3>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Hero -->



    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="https://res.cloudinary.com/avels-software/image/upload/v1622624089/allure_pvqgoc.png"
                            class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <h3 style="font-family: 'Fredoka One', cursive;">Allure Tours & Travel</h3>
                        <p class="fst-italic">
                            We are a tours and travel agency situated in Gilgil Kenya
                            specialised in a vast range of outdoor experiences.
                        </p>
                        <ul>
                            <li>
                                <i class="ri-check-double-line"></i> Ullamco laboris nisi ut
                                aliquip ex ea commodo consequat.
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Duis aute irure dolor in
                                reprehenderit in voluptate velit.
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate trideta storacalaperda mastiro
                                dolore eu fugiat nulla pariatur.
                            </li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                            aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Clients Section ======= -->

        <!-- End Clients Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="image col-lg-6" style="
                background-image: url('https://res.cloudinary.com/avels-software/image/upload/v1622627653/IMG_20210425_160419_pllqs7.jpg');
              " data-aos="fade-right"></div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                        <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                            <h4>Corporate Tours</h4>
                            <p>
                                Consequuntur sunt aut quasi enim aliquam quae harum pariatur
                                laboris nisi ut aliquip
                            </p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <h4>Family Outing</h4>
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt
                            </p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <h4>Photography</h4>
                            <p>
                                Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut
                                maiores omnis facere
                            </p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <h4>Hiking</h4>
                            <p>
                                Expedita veritatis consequuntur nihil tempore laudantium vitae
                                denat pacta
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Services</h2>
                    <p>Check our Services</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-bus"></i></div>
                            <h4><a href="">Custom Trips</a></h4>
                            <p>
                                Voluptatum deleniti atque corrupti quos dolores et quas
                                molestias excepturi
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-calendar-day"></i></div>
                            <h4><a href="">Weekend Events</a></h4>
                            <p>
                                Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-campground"></i></div>
                            <h4><a href="">Camping</a></h4>
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-mountain"></i></div>
                            <h4><a href="">Mountain Climbing</a></h4>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-biking"></i></div>
                            <h4><a href="">Bicycle Hikes</a></h4>
                            <p>
                                Quis consequatur saepe eligendi voluptatem consequatur dolor
                                consequuntur
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-map-marked-alt"></i></div>
                            <h4><a href="">Park Visits</a></h4>
                            <p>
                                Modi nostrum vel laborum. Porro fugit error sit minus sapiente
                                sit aspernatur
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="text-center">
                    <h3>Schedule a tour with us today</h3>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit
                        anim id est laborum.
                    </p>
                    <a href="trip.php" class="btn btn-warning">Plan A Trip</a>

                </div>
            </div>
        </section>
        <!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Gallery</h2>

                </div>

                <section id="clients" class="clients">
                    <div class="container" data-aos="zoom-in">
                        <div class="clients-slider swiper-container">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="https://res.cloudinary.com/avels-software/image/upload/v1622627675/IMG-20201223-WA0013_mmzigv.jpg"
                                        width=200px height=200px class="img-fluid" alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://res.cloudinary.com/avels-software/image/upload/v1622627636/IMG_20210213_161445_hok3qi.jpg"
                                        width=200px height=200px class="img-fluid" alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://res.cloudinary.com/avels-software/image/upload/v1622627636/IMG_20210213_161445_hok3qi.jpg"
                                        width=200px height=200px class="img-fluid" alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://res.cloudinary.com/avels-software/image/upload/v1622627674/IMG-20201222-WA0031_hflzqp.jpg"
                                        width=200px height=200px class="img-fluid" alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://res.cloudinary.com/avels-software/image/upload/v1622627612/IMG_20210213_161312_psyiqh.jpg"
                                        width=200px height=200px class="img-fluid" alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://res.cloudinary.com/avels-software/image/upload/v1622627480/IMG_20201225_185011_bkr1jd.jpg"
                                        width=200px height=200px class="img-fluid" alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://res.cloudinary.com/avels-software/image/upload/v1622627671/IMG_20210425_150330_b99tlt.jpg"
                                        width=200px height=200px class="img-fluid" alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://res.cloudinary.com/avels-software/image/upload/v1622627673/IMG_20210425_160451_mojui5.jpg"
                                        width=200px height=200px class="img-fluid" alt="" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>


                <!-- End Portfolio Section -->

                <!-- ======= Counts Section ======= -->
                <section id="counts" class="counts">
                    <div class="container" data-aos="fade-up">
                        <div class="row no-gutters">
                            <div class="
                image
                col-xl-5
                d-flex
                align-items-stretch
                justify-content-center justify-content-lg-start
              " data-aos="fade-right" data-aos-delay="100"></div>
                            <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left"
                                data-aos-delay="100">
                                <div class="content d-flex flex-column justify-content-center">
                                    <h3>Success Stories</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Duis aute irure dolor in reprehenderit
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                                            <div class="count-box">

                                                <span data-purecounter-start="0" data-purecounter-end="55"
                                                    data-purecounter-duration="2"
                                                    class="purecounter text-success"></span>
                                                <p>
                                                    <strong>Happy Clients</strong> consequuntur voluptas
                                                    nostrum aliquid ipsam architecto ut.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                                            <div class="count-box">

                                                <span data-purecounter-start="0" data-purecounter-end="10"
                                                    data-purecounter-duration="2"
                                                    class="purecounter text-success"></span>
                                                <p>
                                                    <strong>Trips</strong> adipisci atque cum quia
                                                    aspernatur totam laudantium et quia dere tan
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                                            <div class="count-box">

                                                <span data-purecounter-start="0" data-purecounter-end="4"
                                                    data-purecounter-duration="4"
                                                    class="purecounter text-success"></span>
                                                <p>
                                                    <strong>Years of experience</strong> aut commodi quaerat
                                                    modi aliquam nam ducimus aut voluptate non vel
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                                            <div class="count-box">

                                                <span data-purecounter-start="0" data-purecounter-end="2"
                                                    data-purecounter-duration="4"
                                                    class="purecounter text-success"></span>
                                                <p>
                                                    <strong>Partners</strong> rerum asperiores dolor alias
                                                    quo reprehenderit eum et nemo pad der
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .content-->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Counts Section -->

                <!-- ======= Testimonials Section ======= -->
                <section id="testimonials" class="testimonials">
                    <div class="container" data-aos="zoom-in">
                        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="https://cdn.pixabay.com/photo/2013/07/13/10/07/man-156584__340.png"
                                            class="testimonial-img" alt="" />
                                        <h3>Amo B</h3>
                                        <h4>Ceo &amp; Founder</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Proin iaculis purus consequat sem cure digni ssim donec
                                            porttitora entum suscipit rhoncus. Accusantium quam,
                                            ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                            risus at semper.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                                <!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="https://cdn.pixabay.com/photo/2017/01/31/22/32/boy-2027768__340.png"
                                            class="testimonial-img" alt="" />
                                        <h3>Lamech Wilsson</h3>
                                        <h4>Doctor</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Export tempor illum tamen malis malis eram quae irure esse
                                            labore quem cillum quid cillum eram malis quorum velit fore
                                            eram velit sunt aliqua noster fugiat irure amet legam anim
                                            culpa.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                                <!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="https://cdn.pixabay.com/photo/2013/07/13/10/24/woman-157149__340.png"
                                            class="testimonial-img" alt="" />
                                        <h3>Elena Kimani</h3>
                                        <h4>Director operations</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Enim nisi quem export duis labore cillum quae magna enim
                                            sint quorum nulla quem veniam duis minim tempor labore quem
                                            eram duis noster aute amet eram fore quis sint minim.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                                <!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="https://cdn.pixabay.com/photo/2020/11/06/05/33/woman-5716875__340.png"
                                            class="testimonial-img" alt="" />
                                        <h3>Sarah Ema</h3>
                                        <h4>Tour guide</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa
                                            multos export minim fugiat minim velit minim dolor enim duis
                                            veniam ipsum anim magna sunt elit fore quem dolore labore
                                            illum veniam.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                                <!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="https://cdn.pixabay.com/photo/2016/04/01/10/34/aircraft-1299943__340.png"
                                            class="testimonial-img" alt="" />
                                        <h3>Peter Kabingu</h3>
                                        <h4>Transport</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Quis quorum aliqua sint quem legam fore sunt eram irure
                                            aliqua veniam tempor noster veniam enim culpa labore duis
                                            sunt culpa nulla illum cillum fugiat legam esse veniam culpa
                                            fore nisi cillum quid.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                                <!-- End testimonial item -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>
                <!-- End Testimonials Section -->

                <!-- ======= Team Section ======= -->

                <!-- End Team Section -->

                <!-- ======= Contact Section ======= -->
                <section id="contact" class="contact">
                    <div class="container" data-aos="fade-up">
                        <div class="section-title">
                            <h2>Contact</h2>
                            <p>Contact Us</p>
                        </div>

                        <div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6671308061054!2d36.315589548043555!3d-0.49879639979964646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18290b91c7925e39%3A0x10b6d32710f39fda!2sAllure%20Tours%20and%20Travels!5e0!3m2!1sen!2ske!4v1622668245494!5m2!1sen!2ske"
                                width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                        <div class="row mt-5">





                            <div class="col-lg-8 mt-5 mt-lg-0 mx-auto">
                                <form action="message.php" method="post" role="form" class="php-email-form">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Your Name" required />
                                        </div>
                                        <div class="col-md-6 form-group mt-3 mt-md-0">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Your Email" required />
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject" required />
                                    </div>
                                    <div class="form-group mt-3">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                            required></textarea>
                                    </div>
                                    <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">
                                            Your message has been sent. Thank you!
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-outline-success" name="send" type="submit"><i
                                                class="fa fa-envelope"></i> Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-info">
                            <h3>ALLURE TOURS & TRAVEL</h3>
                            <p>
                                Gilgil <br />
                                Kenya<br /><br />
                                <strong>Phone:</strong> +254725754351<br />
                                <strong>Email:</strong> alluretourstravels@gmail.com<br />
                            </p>
                            <div class="social-links mt-3">
                                <a target="_blank" href="https://web.facebook.com/groups/157013252692254/"
                                    class="facebook"><i class="fab fa-facebook fa-2x me-4"></i></a>
                                <a target="_blank" href="https://www.instagram.com/alluretoursandtravels/"
                                    class="instagram"><i class="fab fa-instagram fa-2x"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li>
                                </i> <a href="#">Home</a>
                            </li>
                            <li>
                                </i> <a href="#">About us</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>

                                <a href="#">Terms of service</a>
                            </li>
                            <li>

                                <a href="#">Privacy policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li>

                                <a href="#">Corporate tours</a>
                            </li>
                            <li>

                                <a href="#">Family events</a>
                            </li>
                            <li>

                                <a href="#">Mountain hikes</a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>


        <!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center bg-white justify-content-center"><i
                class="fa fa-home text-success"></i></a>

        <!-- Vendor JS Files -->
        <script src="aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>

        <script src="glightbox.min.js"></script>
        <!-- <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> -->
        <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
        <script src="purecounter.js"></script>
        <script src="swiper-bundle.min.js"></script>

        <!-- Template Main JS File -->
        <script src="main.js"></script>



</body>
<?php
        }else{
            output("Oops! Invalid email or password.Try again");
        }

       

    }else{
        //no
        output("Invalid email address.Check and try again");
    }
}else{
    output("Something went wrong".mysqli_error($conn));
}

}else{
 output("Something went wrong ".mysqli_error($conn));
}


}else{
output("Something wrong with the query".mysqli_error($conn));
}
}


function output($message){
echo"<h3>$message</h3>";
}
        
?>



</html>