<?php


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["send"])) {
    
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $college = $_POST["college"];
    $course = $_POST["course"];

    //Load Composer's autoloader
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'cestudiosweb@gmail.com';                     //SMTP username
        $mail->Password   = 'csdy yjox zmxm ngdb';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('cestudiosweb@gmail.com', 'Skillmindz');
        $mail->addAddress('eduroutezcontent@gmail.com', 'Joe User'); 
        $mail->addAddress('leadsrma@gmail.com', 'Joe User'); 

    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Test Form';
        $mail->Body    = "Sender Name - $name <br> Contact Number - $number <br> Sender Email - $email <br> Location - $city <br> Selected College - $college <br> Selected Course - $course";
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        // $mail->send();
        // echo 'Message has been sent';
        
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        echo "Message could not be sent.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>
    <!-- Style.css -->
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body> 
       <?php $mail->send()  ?>
    <div class="thankYou">
        <h1>Thank you for submitting the form. Our counselor will contact you soon.</h1>
        <div class="inquiry">
            <a href="https://wa.me/8828991111">
                <i class="fa-brands fa-whatsapp"></i>
            <span>ENQUIRY NOW</span>
            </a>
        </div>
    </div>
    
</body>
</html>