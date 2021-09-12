<?php


    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    
    if( empty($name) || empty($visitor_email) || empty($message)){
      echo "Please fill al the fields !!!";
    }
    else{

      $email_from = 'https://www.mantia.erolramacik.com';

      $email_subject = "erolramacik.com";
    
      $email_body = "User Name: $name.\n".
                      "User Email: $visitor_email.\n". 
                            "User Message: $message.\n";

                        

      if(isset($_POST['send'])){
        $to = "exwave96@gmail.com";

        $headers = "From: $email_from \r\n";

        $headers .= "Reply-To: $visitor_email \r\n";

         mail($to,$email_subject,$email_body,$headers);
        echo "<script>
        window.history.go(-1);
        </script>";
     
      }
    }
   /*
  
   
    $email_from = 'https://erolramacik.com/';

      $email_subject = "erolramacik.com";
    
      $email_body = "User Name: $name.\n".
                      "User Email: $visitor_email.\n". 
                            "User Message: $message.\n";

                        

    if(isset($_POST['send'])){
      $to = "exwave96@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: http://www.erolramacik.com/");
    }
   
   
   */
?>




  





