

<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    
    $message = $_POST['message'];
    

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ttvettuparambil@gmail.com'; // Gmail address which you want to use as SMTP server
        $mail->Password = 'AjayUday@97'; // Gmail address Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('ttvettuparambil@gmail.com'); // Gmail address which you used as SMTP server
        $mail->addAddress('ttvettuparambil@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

        $mail->isHTML(true);
        $mail->Subject = 'Wellness Contact Info';
        $mail->Body = "
        <div
        style='
            width: 500px;
            margin: 0 auto;
            padding: 10px 15px;
            background: rgb(100, 237, 162);
        '
        >

            <h3>Name: $name</h3>
            <h3>Email: $email</h3>
            <h3>Phone: $phone</h3>
            <h3>Subject: $subject</h3>
            <h3>Message: $message</h3>
        
        </div>
        ";

        $mail->send();
        $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
    } catch (Exception $e) {
        $alert = '<div class="alert-error">
                <span>' . $e->getMessage() . '</span>
              </div>';
    }
}
