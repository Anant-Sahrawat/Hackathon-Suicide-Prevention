<?php
$servername="localhost";
$username="root";
$password="tiger";
$dbname="hackncode";

if($_SERVER["REQUEST_METHOD"]=="POST"){
$user=$_POST['volname'];
$num=$_POST['volnum'];
$pass=$_POST['volpass'];

$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
die("Connection failed" . $conn->connect_error);
}
$stmt="insert into volunteer_details(username, phone, password) values('".$user."','".$num."','".$pass."');";
$conn->query($stmt);
if($conn->query($stmt)==FALSE){
	header("Location: ./admin.php");
	exit();
}
else{
echo "OOPS SOMETHING WENT WRONG....";	
}
}

else{
	header("Location: ./admin.php");
	exit();
}

?>