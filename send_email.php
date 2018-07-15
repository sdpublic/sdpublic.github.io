<?php
    ob_start();
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];
		$phone_no = $_POST['lib_phone_no'];
		$to='sssatyajeet180@gmail.com';
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone No: ".$phone_no."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;
   		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
			header( "refresh:3;url=index.html" );
		}
		else{
			echo "Something went wrong!";
		}
	}
?>