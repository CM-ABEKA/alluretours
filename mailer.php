<?php
       use PHPMailer\PHPMailer\PHPMailer;
       use PHPMailer\PHPMailer\Exception;

    //
    if(isset($_POST['reset'])){
        //get the email
        $email = $_POST['email'];

        //
        require('dbConnect.php');
        $sql = "SELECT * FROM `users` WHERE `email` = ?";

        $stmt = mysqli_prepare($conn,$sql);
        if($stmt){
            //bind param
            mysqli_stmt_bind_param($stmt,'s',$param_email);
            //bind
            $param_email = $email;
   
            //excute the query
            if(mysqli_stmt_execute($stmt)){
               //get the results
               $result = mysqli_stmt_get_result($stmt);
               if($result){
                $numrows = mysqli_num_rows($result);
                if($numrows>0){
                    //email exists
                    $row = mysqli_fetch_assoc($result);
                    $name = $row['first_name'];
                    $id = $row['id'];
                    $link ="https://alluretours.herokuapp.com/passwordreset.php?id=".$id;

                    $message = "Dear $name, <br>Click the link below<br>$link</br>To reset your password.";
                    
                    sendEMail($email,"Password Reset",$message);
                }else{
                    echo "<h3 style='color:red;'>Invalid email provided</h3>";
                }
            }
        }
    }
}

    function sendEMail($receipient,$subject,$message){
        require 'src/Exception.php';
        require 'src/PHPMailer.php';
        require 'src/SMTP.php';

        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        //
        $mypass="";
        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'ea.frontoffice@gmail.com';                     //SMTP username
            $mail->Password   = getenv('MRI');                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('ea.frontoffice@gmail.com', 'ALLURE');
            $mail->addAddress($receipient, '');     //Add a recipient
        

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            

            $mail->send();
            echo 'Password reset sent to your email: $receipient';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


    }

    ?>