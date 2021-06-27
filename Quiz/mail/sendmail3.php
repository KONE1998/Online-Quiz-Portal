 <?php
require_once('PHPMailerAutoload.php');
$mail = new PHPMailer(true);

//Send mail using gmail
$mail->IsSendmail();

    $mail->IsSMTP(); // telling the class to use SMTP
   // $mail->SMTPDebug = 2;
	//$mail->SMTPDebug = 1;
	$mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->Username = "dineshkumar31230@gmail.com"; // GMAIL username
    $mail->Password = "66841531230"; // GMAIL password
    //$mail->SMTPDebug = 3 ;
$email = "dineshkumar.r2016@vitstudent.ac.in";
$email2 = "dineshkumar31230@gmail.com";
$name = "name";
//Typical mail data
$mail->AddAddress($email, $name);
$mail->SetFrom($email2, "name");
$mail->Subject = "Mail from AngularJS";
$mail->Body = "This mail is sent from AngularJS";

try{
    $mail->Send();
    echo "Success!";
} catch(Exception $e){
    //Something went bad
    echo "Fail - " . $mail->ErrorInfo;
}
?>