<?php

session_start();
include("init.php");
require_once 'Exception.php';
require_once 'PHPMailer.php';
require_once 'SMTP.php';
//Load Composer's autoloader
require_once 'vendor/autoload.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$n=15;

function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}


$uni = getName($n);
$pass = getName($n);


if(isset($_POST['data_1'], $_POST['data_2'], $_POST['data_3'], $_POST['data_4'])){
    $data_1 = trim($_POST['data_1']);
    $data_2 = trim($_POST['data_2']);
    $data_3 = trim($_POST['data_3']);
    $data_4 = trim($_POST['data_4']);
    $query = mysqli_query($init, "SELECT email_address FROM students WHERE email_address = '$data_3'");
    $is_it = mysqli_num_rows($query);
    if($is_it > 0){
        echo "Email address already in use";
    }else{
        $query = mysqli_query($init, "INSERT INTO students VALUES ('$uni','$data_1','$data_2','$data_3','$pass','$data_4','')");        
        if($query){
        $subject = "Login details for library";
        $body = "";
        $body .='
        These are your login details <br>
        Email- '.$data_3.'<br>'.
        'Password- '.$pass.'
        ';
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'rimtadmin.e-library.ng';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'mail@rimtadmin.e-library.ng';                     //SMTP username
        $mail->Password   = 'KzB7gX9hujJDJfw';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //Recipients
        $mail->setFrom('mail@rimtadmin.e-library.ng', 'Library access');
        $mail->addAddress($data_3, '');     //Add a recipient
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = $body;

        $mail->send();
        echo "Student added";
        } catch (Exception $e) {
echo $e;
        }
                }
            }
        }