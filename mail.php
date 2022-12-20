<?php require_once 'header.php';

require_once '_connect.php';

?>

<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $uploadDir = './src/uploads/';
    $uploadFile = $uploadDir . basename($_FILES['screenshot']['name']);
    $extension = pathinfo($_FILES['screenshot']['name'], PATHINFO_EXTENSION);
    $authorizedExtensions = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
    $maxFileSize = 100000;

    // Tests

    /****** Si l'extension est autorisée *************/
    if ((!in_array($extension, $authorizedExtensions))) {
        echo 'Veuillez sélectionner une image de type Jpg ou Jpeg ou Png ou gif ou webp !';
    }

    /****** On vérifie si l'image existe et si le poids est autorisé en octets *************/
    if (file_exists($_FILES['screenshot']['name']) && filesize($_FILES['screenshot']['name']) > $maxFileSize) {
        echo "Votre fichier doit faire moins de 1M !";
    }

    /****** Si je n'ai pas d"erreur alors j'upload *************/
    if ($_FILES['screenshot']['error'] === 0) {
        move_uploaded_file($_FILES['screenshot']['tmp_name'], $uploadFile);
?> <?php
    }
}

    ?>

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = SERVER;                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = EMAIL;                    //SMTP username
    $mail->Password   =  PASSWORD;                         //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = PORT;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom(EMAIL, $_POST['name']);
    $mail->addAddress(SENDTO, 'Herschel');     //Add a recipient

    //Attachments
    $uploadDir = './src/uploads/';
    $uploadFile = $uploadDir . basename($_FILES['screenshot']['name']);
    $mail->addAttachment($uploadFile);    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['textarea'] . ". <br/> <br/> You can join this person with this email " . $_POST['email'];

    $mail->send();

?>
    <div class="content">
        <h1>Success !</h1>
        <p> Thank you <?php echo $_POST['email'] ?> for contacting Fransoé. Your message : " <?php echo $_POST['textarea'] ?>" has been sent, with this image</p>
        <img src="<?php echo $uploadFile ?>" alt="pic" />
        <li><a href='index.php'>Back</a></li>
    </div>

<?php
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>