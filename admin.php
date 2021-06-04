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

<body class="bg-light text-dark">
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top bg-dark">
        <div class="container d-flex align-items-center justify-content-lg-between">
            <h1 class="logo me-auto me-lg-0" style="font-family: 'Alegreya SC', serif;">
                <a href="index.html">ALLURE</a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="user.php">Home</a></li>
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
                    <li> <a class="nav-link scrollto text-info" href="#"><i
                                class="fa fa-user fa-2x text-warning"></i></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>


    <br>
    <div class="container mt-5">
        <h1>REGISTERED USERS</h1>
        <?php


    $sql = "SELECT * FROM `users` ORDER BY id ";
//excute the query

$result = mysqli_query($conn,$sql);

//check if the results exist
$numrows = mysqli_num_rows($result);

?>
        <div class="container mt-5 text-white">

            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
  if($numrows>0){
      //get the results
      //get the results an acco
      while($row = mysqli_fetch_assoc($result)){
        //echo $row['name'].$row['phone'];
      
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
            echo "<td>".$row['first_name']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['role']."</td>";
            $id = $row['id'];
            
           
        echo "</tr>";
      }

  }else{
      echo "<h3>No students available</h3>";
  }

  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <hr>
        <br>
        <h1>TRIPS BOOKED</h1>

        <?php
    $sql = "SELECT * FROM `trip` ORDER BY id DESC";
//excute the query

$result = mysqli_query($conn,$sql);

//check if the results exist
$numrows = mysqli_num_rows($result);

?>
        <div class="container mt-5 text-white">

            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Start</th>
                                <th scope="col">Destinatin</th>
                                <th scope="col">Date</th>
                                <th scope="col">Heads</th>
                                <th scope="col">Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
  if($numrows>0){
      //get the results
      //get the results an acco
      while($row = mysqli_fetch_assoc($result)){
        //echo $row['name'].$row['phone'];
      
        echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['start']."</td>";
            echo "<td>".$row['destination']."</td>";
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['heads']."</td>";
            echo "<td>".$row['duration']."</td>";
            $id = $row['id'];
            
           
        echo "</tr>";
      }

  }else{
      echo "<h3>No students available</h3>";
  }

  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <h1>Messages received</h1>

        <?php
    $sql = "SELECT * FROM `messages` ORDER BY id DESC";
//excute the query

$result = mysqli_query($conn,$sql);

//check if the results exist
$numrows = mysqli_num_rows($result);

?>
        <div class="container mt-5 text-white">

            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
  if($numrows>0){
      //get the results
      //get the results an acco
      while($row = mysqli_fetch_assoc($result)){
        //echo $row['name'].$row['phone'];
      
        echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['subject']."</td>";
            echo "<td>".$row['message']."</td>";
            
            $id = $row['id'];
            
           
        echo "</tr>";
      }

  }else{
      echo "<h3>No students available</h3>";
  }

  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

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