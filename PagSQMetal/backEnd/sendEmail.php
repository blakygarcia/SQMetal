<?php
//Include required phpmailer files
/*
require 'include/PHPMailer.php';
require 'include/SMTP.php';
require 'include/Exception.php';



//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
*/
if(isset($_POST['submitEmail'])){

    $name = $_POST['usernameEmail'];
    $email =  $_POST['userEmail'];
    $subject =  $_POST['subjectEmail'];
    $message = $_POST['comentsEmail'];
    $completeMessage = "'$message' \r\n\r\n\r\n Email: '$email'\r\n nombre:'$name'";

    $header = "From: noreplay@example.com \r\n";
    $header .= "Replay-To: noreplay@example.com \r\n";
    $header .= "X-Mailer: PHP/" . phpversion();
    $mail = @mail($email, $subject, $completeMessage, $header);

    if($mail){
        echo "
        <script>
            alert('The email have been sent successfully');
            window.location.href = '../ContactUs.php';
        </script>";
    }else{
        echo"
        <script>
            alert('The email cannot be send');
            window.location.href = '../ContactUs.php';
        </script>";
    }



    /*

    $mail = new PHPMailer();

    //Set mailer to use smtp
    $mail -> isSMTP();

    //Define smtp host
    $mail->Host = "smtp.gmail.com";

    //enable smtp authentication
    $mail -> SMTPAuth = "true";

    //set type of encryption (sl/tls)
    $mail -> SMTPSecure = "tls";

    //set port to connect smtp
    $mail -> Port = "587";

    //set gmail username
    $mail -> Username = "fihnec.occidente.jovenes@gmail.com";

    //set gmail password
    $mail ->Password = "fgbmficryouth"; //Contraseña del correo

    //set email subject
    $mail -> Subject = "$subject";

    //set sender email
    $mail->setFrom("fihnec.occidente.jovenes@gmail.com");

    //Email body
    $mail->Body = "$completeMessage";

    //add recipient
    $mail ->addAddress($email); //Aqui tenemos que colocar el correo de Scrap Queen Metal

    //Finally send email

    if($mail->Send()){
        echo "
        <script>
            alert('The email have been sent successfully');
        </script>"; 
        
        header('location: user-otp.php');
    }else{
        echo "
        <script>
            alert('The email cannot be send');
        </script>";
    }

    //closing smtp connection
    $mail->smtpClose();
    */





}//Termina la condición de enviar el correo  

?>