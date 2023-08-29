<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use chillerlan\QRCode\QRCode;

//Load Composer's autoloader
require 'vendor/autoload.php';
require 'corpoEmail.php';
require_once 'credenciaisEmail.php';

if (isset($_POST['enviar'])) {
    $mail = new PHPMailer(true);

    // //Variavel de ambiente com a senha do email
    // $senhaEmail = getenv('senhaEmail');
    // $hostEmail = getenv('hostEmail');

    //Informações do formulario
    $nomeForm = $_POST['nome'];
    $emailForm = $_POST['email'];
    $mensagemForm = $_POST['mensagem'];

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $hostEmail;
        $mail->Password   = $senhaEmail;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;                                    
        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet = 'UTF-8';

        //Recipients
        $mail->setFrom($hostEmail, 'Formulário');
        $mail->addAddress($hostEmail, 'Site');
        $mail->addReplyTo($emailForm, $nomeForm);

        //Attachments
        if ($_FILES['arquivo']['error'] === UPLOAD_ERR_OK) {
            $pathArquivo = $_FILES['arquivo']['tmp_name'];
            $nomeArquivo = $_FILES['arquivo']['name'];

            $mail->addAttachment($pathArquivo , $nomeArquivo);
        }

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Assunto teste';
        $mail->Body = corpoEmail($nomeForm, $emailForm, $mensagemForm);
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->addEmbeddedImage('img/abacaxi.jpg', 'logo');

        //Gerar QRCode, fazer upload e adicionar ao email
        $qrcode = (new QRCode())->render('https://redevidaanimal.com.br/');

        $qr_image = str_replace('data:image/png;base64,', '', $qrcode);
        $path_upload = 'img/' . uniqid() . '.png';

        file_put_contents($path_upload, base64_decode($qr_image));

        $mail->addEmbeddedImage($path_upload, 'qrcode');

        $mail->send();
        echo 'Mensagem enviada';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
else {
    echo 'Erro ao enviar email';
}

