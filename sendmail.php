<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "almsry258@gmail.com";
         $subject = $_POST["subject"];
         
         $message = $_POST["message"];
        
         
         $header = "From: \r".$_POST["email"]."\n";
         
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>