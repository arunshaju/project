<?php
$str_email=$_POST['text_email'];
$str_password=$_POST['text_password'];
$conn=mysqli_connect('localhost','root','','myappdb');
$query=mysqli_query($conn,"select*from userdetails where vchr_emailid='$str_email'and vchr_password='$str_password'");
if(mysqli_num_rows($query)==1)
{
	echo"Success login";
	}
	else
	{
		echo"incorrect login";
	}
?>