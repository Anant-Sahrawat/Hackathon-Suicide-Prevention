<?php
//echo "mysql php connection test.....";
$servername="localhost";
$username="root";
$password="tiger";
$dbname="hackncode";

if($_SERVER["REQUEST_METHOD"]=="POST"){
$usr=($_POST["volname"]);
$pass=($_POST["volpassword"]);
$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
die("Connection failed" . $conn->connect_error);
}
//$sql="select*from logindetails;";
$stmt=$conn->prepare("select username,password from logindetails where username=? and password=? LIMIT 1;");
$stmt->bind_param("ss", $usr, $pass); //each s stands for one bind variable it can be any other character other than s also
$stmt->execute();
$stmt->bind_result($usr, $pass);
$stmt->store_result();

if($stmt->num_rows==1){
	session_start();
$_SESSION['user']=$usr;
header("Location: ./volmain.php");
//$_SESSION['user']=$usr;
//exit();
}
else{
echo "wrong username or password";	
}

}


else{
header("Location: /myphpproject/home.php");
//exit();	
}




//if($result->num_rows>0){
//while($row=$result->fetch_assoc()){
//echo "<br>".$row["sr_no"]." ".$row["user"]." ".$row["name"];

//else{
//echo "0 results";
//}
$stmt->close();
$conn->close();
?>