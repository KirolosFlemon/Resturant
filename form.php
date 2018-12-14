<?php
include "include/templete/head.inc";
include "include/templete/nav.inc";
include "connect.php";

?>

    <!--Start contact Me-->
    <div class="contact-form">
        <div class="container">
            <div class="info">
                <h2>Contact Me</h2>
                <p>Nascetur nostrum, primis vitae ligula sapien quas cupidatat.<br>
                    Dicta nisi perferendis torquent nullam,<br> deleniti, proident, habitasse euismod hymenaeos?
                    Hic repellat dolore sodales tempus mus? Ullamco voluptatum class numquam.</p>
                <p>122 Street Name<br>
                    Cairo<br>
                    sksk Area
                </p>
                <p>
                    <strong>Email: </strong>Me@Email.com<br>
                    <strong>Phone:   </strong>0123456789
                </p>
            </div>

            <form class="form" action="index.php" method="POST">
                <div class="form-row">
                    <div class="name">
                        <label> Your First Name:</label>
                    </div>
                    <div class="col-12 setting">
                        <input name="firstname" type="text" placeholder="First name" required autocomplete="off">
                    </div>
                    <div class="name">
                        <label> Your Last Name:</label>
                    </div>
                    <div class="col-12 setting">
                        <input name="lastname" type="text" placeholder="Last name" required autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input name="email" type="email" placeholder="Enter email" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" type="number" placeholder="number" autocomplete="off">
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="your issues" autocomplete="off"></textarea>
                    <button type="submit" class="btn btn-primary setting">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!--End contact Me-->

<?php

/*require_once "vendor/autoload.php";

$mail = new PHPMailer;

//Enable SMTP debugging.
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password
$mail->Username = "kirolous.felemon95@gmail.com";
$mail->Password = "Koko0110279119";
//If SMTP requires TLS encryption then set it
//$mail->SMTPSecure = "tls";
//Set TCP port to connect to
$mail->Port = 587;

$mail->From = "kirolous.felemon95@gmail.com";
$mail->FromName = "Full Name";

$mail->smtpConnect(
    array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        )
    )
);
$mail->addAddress("reciever@ymail.com", "Recepient Name");
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send())
{
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
    echo "Message has been sent successfully";
};*/?>

<?php
include "include/templete/footer.inc";?>