<!-- <form action="mail.php" method="post"></form> -->

<?php

      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

      require_once('/usr/share/php/libphp-phpmailer/class.phpmailer.php');
      $mail = new PHPMailer(); // defaults to using php "mail()"
      $mail->AddReplyTo($_POST['fullName']); //Form var must be 'fullName'
      $mail->SetFrom($_POST['email']); //form var must be email
      $mail->AddAddress("thenewest000@gmail.com");
      $mail->Subject    = "Inquiry From:  ". $_POST['fullName']. '-' .$_POST['company'];
      $mail->MsgHTML($_POST['phone'].'-'.$_POST['message']); //var must be the textarea from your form

      if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
      } else {
            echo "Message sent!";
      }
      
      header('location: /#contact');
      
?>
