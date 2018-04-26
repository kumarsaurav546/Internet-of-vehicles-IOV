<?php
$email = $_GET['e'];

session_start();
$_SESSION['user']=$email;
$_SESSION['status']="active";
echo "t";
/*$conn = mysqli_connect("localhost","root","","iov");
$s = "select * from users where username = '$email' and password = '$pass'";
$q=mysqli_query($conn,$s);
$n=mysqli_num_rows($q);
if($n>0)
{
	echo "t";
	session_start();
	$_SESSION['user']=$email;

}
else
{
	echo "error";
}*/

?>