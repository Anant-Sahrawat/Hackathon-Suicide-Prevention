<html>
<head>
<title>We Are Happy To Help!</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="shortcut icon" type="image/jpg" href="./images/smile.jpg">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="script.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Charmonman|K2D" rel="stylesheet">
</head>
<body>
<?php 
include "navbar.php";
include "chatbox.php";
?>
<center><h3>Contact These People...They are your friends...</h3></center>
<?php
$servername="localhost";
$username="root";
$password="tiger";
$dbname="hackncode";

$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
die("Connection failed" . $conn->connect_error);
}
$sql="select username, phone from volunteer_details;";
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
echo "<br>".$row["username"]." <a href=\"tel:\ ".$row["phone"]."\">Call Me!</a>";
}
$conn->close();
?>

</body>
</html>