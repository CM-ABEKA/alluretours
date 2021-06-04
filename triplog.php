<?php
require('dbConnect.php');

    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $start = $_POST['start'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $heads = $_POST['heads'];
    $duration = $_POST['duration'];
   
    
    //password hash
    

   
     $sql = "INSERT INTO `trip`(`email`, `phone`, `start`, `destination`, `date`, `heads`, `duration`) VALUES (?,?,?,?,?,?,?)";
     
     $stmt = mysqli_prepare($conn,$sql);
     if($stmt){
    
         mysqli_stmt_bind_param($stmt,'sisssii',$param_email,$param_phone,$param_start,$param_destination,$param_date,$param_heads,$param_duration);
     
         $param_phone = $phone;
         $param_email = $email;
         $param_start = $start;
         $param_destination = $destination;
         $param_date = $date;
         $param_heads = $heads;
         $param_duration = $duration;
         

         

         //excute the query
         if(mysqli_stmt_execute($stmt)){
            header('location:index.php');
             echo 'Trip saved';

             
             //header
            
         }else{
            echo "Message not sent.Try again ".mysqli_error($conn);
         }


     }else{
         echo "Something wrong".mysqli_error($conn);
     }


 
    
    ?>