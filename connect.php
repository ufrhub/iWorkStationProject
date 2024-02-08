<?php

$conn= mysqli_connect('localhost','root','username','password','dbname')

if(isset($_POST['push']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$designation=$_POST['designation'];
	$city=$_POST['city'];
	$comment=$_POST['comment'];

	$query="INSERT INTO contact (`name`,`email`,`phone`,`designation`,`city`,`comment`) VALUES ('name','email','phone','designation','city','comment')";
	$result=mysqli_query($con,$query);

	echo "<center> Thank you for the contact.</contact>";
}


<?