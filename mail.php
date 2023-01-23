

<?php 

    if(isset($_POST['btn-send']))
    {
      $name = $_POST['name'];
      $email= $_POST['email_id'];
       $phone = $_POST['phone'];
      $mail = $_POST['subject'];
      $message = $_POST['message'];
      $headers = "Mail from fatima_school_website contact form".$name;
      $txt = "You have recieved an email from ".$name ."\r\nEmail Id: " .$email ."\r\nPhone No: ". $phone ."\r\n Subject: " .$subject_mail ."\r\n Message:" .$message;
      

       if(empty($name) || empty($name) || empty($mail) || empty($message))
       {
           header('location:error-404.html');
       }
       else
       {
           $to = "nurajabegum81@gmail.com";

           if(mail($to,$mail,$message,$txt, $headers))
           {
               header("Location: contact-1.html?mailsend");
           }
       }
    }
    else
    {
        header("location:thankyou.html");
        echo("Failed");
    }
?>
