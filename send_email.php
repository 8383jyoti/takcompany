<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$query_type = $_POST['query-type'];
$Name = $_POST['name'];
$phoneno = $_POST['phonenumber'];
$email = $_POST['email'];
$contry = $_POST['country'];
$state = $_POST['state'];

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();                                    
    $mail->Host       = 'smtp.gmail.com';               
    $mail->SMTPAuth   = true;                           
    $mail->Username   = 'mk519956@gmail.com';         
    $mail->Password   = 'llay vwib uatf bsqn';            
    $mail->SMTPSecure = 'tls';                          
    $mail->Port       = 587;                            

    $mail->setFrom('mk519956@gmail.com', 'Website');
    $mail->addAddress('mk519956@gmail.com');     

    $mail->isHTML(true);                                
    $mail->Subject = 'Contact Form Submission';
    $mail->Body    = "<strong>Query Type:</strong>$query_type <br>
                      <strong>Name:</strong> $Name  <br>
                      <strong>Email:</strong> $email <br>
                      <strong>Phone No:</strong> $phoneno <br>
                      <strong>State:</strong> $state <br>
                      <strong>Country</strong> $contry <br>
                      <br>";

    $mail->send();
    header("Location:formsubmited.html");
    exit;
    echo "Message Sent Successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Error: {$mail->ErrorInfo}";
}
?>
