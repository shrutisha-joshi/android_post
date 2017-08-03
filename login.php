<?php
$servername = "mysql5.gear.host";
$username = "database8";
$password = "Uc77Vvjkh!s-";
$dbname = "database8";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if ($conn){
	echo "success";
}
else{
	echo "failure";
}
$uname=$_POST["username"];
$pass=$_POST["password"];
$query="SELECT * FROM user_details WHERE username='$uname' AND password='$pass';";
$res = mysqli_query($conn,$query);

if (mysqli_num_rows($res)>0){
	echo 'true';}
	else{
		echo 'false';}
mysqli_close($conn);
?>
