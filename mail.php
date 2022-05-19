<?php 
$user_name = $_POST['name'];
$email_id = $_POST['email'];
$mobile_no = $_POST['phone'];
$message = $_POST['message'];
$subject = "Message from  ".$user_name;
$msg = "<tr>
<td bgcolor='#FFFFFF'><strong>Message from :</strong></td>
<td bgcolor='#FFFFFF'>$message</td>
</tr>";
$message = "<html><head>
<title>Form Details!</title>
</head>
<body>
<table width='70%' cellpadding='4' cellspacing='1' bgcolor='#000000'>
<tr>
<td bgcolor='#FFFFFF' colspan='2'><strong>Details of $user_name </strong></td>
</tr>
<tr>
<td width='45%' bgcolor='#FFFFFF'><strong>Name : </strong></td>
<td width='55%' bgcolor='#FFFFFF' >$user_name</td>
</tr>
<tr>
<td width='45%' bgcolor='#FFFFFF'><strong>Email Id : </strong></td>
<td width='55%' bgcolor='#FFFFFF' >$email_id</td>
</tr>
<tr>
<td bgcolor='#FFFFFF'><strong>Contact Number :</strong></td>
<td bgcolor='#FFFFFF'>$mobile_no</td>
</tr>
$msg
</table>
</body>	</html>";
$to= 'sokalsanjay@gmail.com';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: ".$user_name."  <".$email_id.">" . "\r\n";
$sendmail = mail($to, $subject,$message, $headers);
if($sendmail) {
    echo "<p style='padding:15px 20px;background:#8BAF12;border-radius:5px;color:#fff;font-weight:500;'>Send Message Success</p>";
    header('refresh:3;url=index.php');
}
?>