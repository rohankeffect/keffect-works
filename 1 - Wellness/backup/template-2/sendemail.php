

<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if (isset($_POST['submit'])) {
    $appointmentDate = $_POST['appointmentDate'];
    $name = $_POST['name'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $age = $_POST['age'];
    $MRDnumber = $_POST['MRDnumber'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $streetAddress = $_POST['streetAddress'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $state = $_POST['state'];
    

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
        $mail->Subject = 'Patient Appointment Request';
        $mail->Body = "
        <h3>Patient Details</h3>
        <table>
        <tr>
            <td style='padding: 10px; font-weight: bold;'>Name of Patient</td>
            <td>&nbsp;&nbsp;$name</td>
        </tr>

        <tr>
            <td style='padding: 10px; font-weight: bold;'>Appointment Date requested</td>
            <td>&nbsp;&nbsp;$appointmentDate</td>
        </tr>

        <tr>
            <td style='padding: 10px; font-weight: bold;'>Date of Birth</td>
            <td>&nbsp;&nbsp;$dateOfBirth</td>
        </tr>

        <tr>
            <td style='padding: 10px; font-weight: bold;'>Age</td>
            <td>&nbsp;&nbsp;$age</td>
        </tr>

        <tr>
            <td style='padding: 10px; font-weight: bold;'>MRD Number</td>
            <td>&nbsp;&nbsp;$MRDnumber</td>
        </tr>

        <tr>
            <td style='padding: 10px; font-weight: bold;'>Phone Number</td>
            <td>&nbsp;&nbsp;<a href='tel:$phone'>$phone</a></td>
        </tr>

        <tr>
            <td style='padding: 10px; font-weight: bold;'>Email</td>
            <td>&nbsp;&nbsp;$email</td>
        </tr>

        <tr>
            <td style='padding: 10px; font-weight: bold;'>Gender</td>
            <td>&nbsp;&nbsp;$gender</td>
        </tr>

        <tr>
            <td style='padding: 10px; font-weight: bold;'>Address</td>
            <td>&nbsp;&nbsp;$address, $streetAddress, $state, $city - $pincode</td>
        </tr>
        </table>
        
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
