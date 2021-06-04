<?php
require('dbConnect.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
   
    
    //password hash
    

   
     $sql = "INSERT INTO `messages`(`name`, `email`,`subject`, `message`) VALUES (?,?,?,?)";
     
     $stmt = mysqli_prepare($conn,$sql);
     if($stmt){
    
         mysqli_stmt_bind_param($stmt,'ssss',$param_name,$param_email,$param_subject,$param_message);
     
         $param_name = $name;
         $param_email = $email;
         $param_subject = $subject;
         $param_message = $message;
         

         

         //excute the query
         if(mysqli_stmt_execute($stmt)){
            header('location:index.php');
             echo 'Message sent';

             
             //header
            
         }else{
            echo "Message not sent.Try again ".mysqli_error($conn);
         }


     }else{
         echo "Something wrong".mysqli_error($conn);
     }


 
    
    ?>