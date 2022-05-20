<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];

$to = "sokalsanjay@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Message</th>
</tr>
<tr>
<td>$name</td>
<td>$email</td>
<td>$phone</td>
<td>$msg</td>
</tr>
</table>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";
$headers .= 'Cc: sokalsanjay@gmail.com' . "\r\n";

$mail = mail($to,$subject,$message,$headers);
if($mail){
    echo "Thankyou for contacting us. We will contact you soon";
}else{
    echo 'An error found!';
}
?>