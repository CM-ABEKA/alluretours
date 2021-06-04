<!DOCTYPE html>

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

<body style="background-color:#000;">


    <div class="container mt-5">
        <div class="row">
            <div class="col-7 "><img src="undraw_campfire_s6y4.svg" alt=""></div>
            <div class="col-5">

                <form class="p-3 rounded-3" style="background-color: #fff " method="post">
                    <h3 class="text-center">ALLURE TOURS & TRAVEL</h3>


                    <div class="mb-3">

                        <input type="text" required class="form-control" name="first_name" placeholder="First name">

                    </div>
                    <div class="mb-3">

                        <input type="text" required class="form-control" name="last_name" placeholder="Last name">

                    </div>
                    <div class="mb-3">

                        <input type="text" required class="form-control" name="email" placeholder="Email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">

                        <input type="tel" required class="form-control" name="phone" placeholder="Phone">
                    </div>
                    <div class="mb-3">

                        <input type="password" required class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="mb-3">

                        <input type="password" required class="form-control" name="password"
                            placeholder="Repeat password">
                    </div>

                    <button type='submit' class="btn btn-info me-0 mb-3" name="login">Sign up</button>

                    <a href="guest.php" class="text-center" style="text-decoration:none; ">
                        <p class=" text-danger"> Continue as guest?
                            <i class="fas fa-external-link-alt"></i>
                        </p>
                    </a>
                    <a href="login.php" class="text-center text-success" style="text-decoration:none; ">
                        <p class=" "> Already signed up? Login instead.
                            <i class="fas fa-external-link-alt"></i>
                        </p>
                    </a>

                </form>
            </div>
        </div>
    </div>
    <?php
require('dbConnect.php');

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    
    //password hash
    $hashed_password = password_hash($password,PASSWORD_DEFAULT);

   
     $sql = "INSERT INTO `users`(`first_name`, `last_name`,`phone`, `email`, `password`) VALUES (?,?,?,?,?)";
     
     $stmt = mysqli_prepare($conn,$sql);
     if($stmt){
    
         mysqli_stmt_bind_param($stmt,'ssiss',$param_fname,$param_lname,$param_phone,$param_email,$param_password);
     
         $param_fname = $first_name;
         $param_lname = $last_name;
         $param_phone = $phone;
         $param_email = $email;
         $param_password = $hashed_password;

         

         //excute the query
         if(mysqli_stmt_execute($stmt)){
            header(`location:index.php`);
             echo "$first_name registered successfully!";

             
             //header
            
         }else{
            echo "User $first_name not registered.Try again ".mysqli_error($conn);
         }


     }else{
         echo "Something wrong with the query".mysqli_error($conn);
     }


 
    
    ?>

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

</html>