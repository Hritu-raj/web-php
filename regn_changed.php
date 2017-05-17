<?php
 $conn=mysqli_connect("mysql.hostinger,in","u676267388_user","Rajat1");
 $db=mysqli_select_db($conn,"u676267388_andlg");
if($conn)
{
	echo "connected";
}
else
{
	echo "not connected";
}

$username=$_POST['username'];
$password=$_POST['password'];
$emailid=$_POST['email'];
$mobileno=$_POST['Mobileno']
$sql="INSERT INTO users(username,password,email,created_at,mobile) VALUES('$username','$password','$email',now(),'$mobileno')";



mysqli_query($conn,$sql);
header('Location:login.html');
?>