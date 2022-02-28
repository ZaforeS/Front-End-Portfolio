<?php 
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];

		$to='zafore8@gmail.com';
		$subject='Form Submission';
		$messgae="Name: ".$name."\n"."Message: ".$message;
		$headers="From: ".$email;
	}
?>