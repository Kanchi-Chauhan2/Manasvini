<?php
$to="ids.interiors27@gmail.com";
if(isset($_POST) && !empty($_POST))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
	$content= 'Hi, <br><br> You have got a new email:<br> <br>
	<b>Name:</b>'.$name.'<br>
	<b>Email:</b>'.$email.'<br>
	<b>Phone:</b>'.$phone.'<br>
	<b>Message:</b>'.$message.'<br><br>Thanks';
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <ids.interiors27@gmail.com>' . "\r\n";
	$mail=mail($to,"New Contact Email",$content,$headers);
	if($mail != false)
   		$return=1;
	else
		$return=0;
}

echo $return;
exit();