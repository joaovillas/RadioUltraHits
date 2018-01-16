<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once 'src/PHPMailer.php';
require_once 'src/SMTP.php';

$nome = $_POST['name'];
$email = $_POST['email'];
$assunto = $_POST['message'];
$contato = $_POST['phone'];

if(!(empty($email) && !empty( $nome) && !empty($telefone) && !empty($message))){
  echo'entrou no if<br>';
    if(strlen($nome)<=2){
      echo '<script>alert("nome invalido")</script>';
     # header("Location: http://localhost/RadioUltraHits/#contact");
    }else if(!is_numeric($contato)){
      echo '<script>alert("Número Inválido")</script>';
     # header("Location: http://localhost/RadioUltraHits/#contact");
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo '<script>alert("Email inválido")</script>';    
     #header("Location: http://localhost/RadioUltraHits/#contact");
    
    }else{
    


$mail = new PHPMailer(true);  

// Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = '		smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'radioultrahits2@gmail.com';                 // SMTP username
    $mail->Password = 'mdhostsc';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587 ;    #587                                 // TCP port to connect to

    

    //Recipients
    $mail->setFrom($email);
    
    $mail->addAddress("radioultrahits2@gmail.com");     // Add a recipient
    // Name is optional

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Pedido do Site Ultrahits.net';
    $mail->Body    = "<strong>Nome : $nome</strong> <br><br>-------------------------------<br><br>
    <strong>Email:</strong>:$email <br><br>-------------------------------<br><br><strong>Telefone</strong>:$contato<br><br>-------------------------------<br><br><strong>Assunto</strong>:$assunto<br><br><br>";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}



    }

  
    header("Location: http://localhost/RadioUltraHits/#contact");



}else{
echo'<script>alert(" Um ou mais campos estão vazios ")</script>';
header("Location: http://localhost/RadioUltraHits/#contact");
}



?>