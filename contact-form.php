<?php 

if(isset($_POST['submit'])){
    $to = "sanjubora84@gmail.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $fname = $_POST['Name'];
    $mobile = $_POST['Phone'];
    $lname = $_POST['LastName'];
    $Pcode = $_POST["Postal"];
   
    $detail = $_POST['Message'];
    $subject = "Contact Form - Enquiry";
    $message = "Email: " .$from."<br>"."Name: " .$fname. "<br>" ."LastName: " .$lname."<br>" . "Phone: " .$mobile. "<br>". "Postal: " .$Pcode. "<br>".  "Message: " .$detail;
    $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
  $headers .= "From:" .$from. "\r\n" .
  "Reply-To: bajajitsolution24@gmail.com" . "\r\n" .
  "X-Mailer: PHP/" . phpversion();
    $success = mail($to,$subject,$message,$headers);
     if( $success == true )  
   {
      echo '<script>alert("Email has been sent successfully. we will contact you shortly.");</script>';
   }
   else
   {
	    echo '<script>alert("Message could not be sent....");</script>';
      
   }
   
    }
    echo '<script>window.location="https://bajajitsolution.com/training/sanjay/simple-security/"</script>';
    
?>