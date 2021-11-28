<?php

    $message_sent= false;
    if(isset($_POST['email'])&& $_POST['email']!= '') {
        
            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
                //submit the form
                $userName= $_POST['fname'];
    $userEmail= $_POST['email'];
    $userSong= $_POST['sname'];
    $userPreference= $_POST['preference'];
    $message= $_POST['message'];


    $to="fayamouhamed7@gmail.com";
    $body= " ";

    $body .="From: " .$userName. "\r\n";
    $body .="Email: " .$userEmail. "\r\n";
    $body .="Message: " .$message. "\r\n";

    mail($to,$userPreference,$body);

    $message_sent= true;


            }
        
    }

    

?>
 <?php
        if(message_sent):
      ?>

        <h3>Thanks, we will be in touch!</h3>

      <?php
        else:
      ?>


          <?php
          endif;
          ?>