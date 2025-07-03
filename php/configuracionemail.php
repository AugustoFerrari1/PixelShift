<?php 
    use PHPMailer\PHPMailer\PHPMailer;

    require_once('PHPMailer/Exception.php');
    require_once('PHPMailer/PHPMailer.php');
    require_once('PHPMailer/SMTP.php');

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'pixelshiftoficial@gmail.com'; // Cambiar por tu email [ACORDARSE QUE TIENE QUE EXISTIR] [CONSEJO: USAR GMAIL GUSTO PERSONAL]
    $mail->Password = 'hvvp zxea fzkq ynff'; // Cambiar por la contra de ese mail [ACORDARSE QUE TIENE SER LA VERDADERA CONTRASEÑA DEL EMAIL]
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

?>