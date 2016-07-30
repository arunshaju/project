<?php
$str_email=$_POST['text_email'];
$str_contactno=$_POST['text_contactno'];
$str_password=$_POST['text_password'];
$conn=mysqli_connect('localhost','root','','myappdb');
mysqli_query($conn,"insert into userdetails values('$str_contactno','$str_email','$str_password');");
	?>