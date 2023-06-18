<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['enviar'])) {
    $mail = new PHPMailer(true);

    //Variavel de ambiente com a senha do email
    $senhaEmail = getenv('senhaEmail');

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'joao.souza@injunior.com.br';
        $mail->Password   = $senhaEmail;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;                                    
        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('joao.souza@injunior.com.br', 'João');
        $mail->addAddress('joao.souza@injunior.com.br', 'Site');
        $mail->addReplyTo('joao.souza@injunior.com.br', 'Information');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Assunto teste';
        $mail->Body    = 'Corpo da mensagem';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Mensagem enviada';
    } catch (Exception $e) {
        echo "Message não enviada. Erro: {$mail->ErrorInfo}";
    }
}

