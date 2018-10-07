<html>
<head>
<title>Suicide Prevention Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
	margin: 0;
	padding: 0;
	border: 0;
	background:linear-gradient( 90deg, #00f2dc, #00c7ff);
}
#section1{
font-family: Courier, Arial, Serif;
color: #0097c1;
background-color: white;
height: 50%;
margin-top: 10%;		
border-radius: 10px;
width: 50%;
}

input[type=text]{
border: none;
outline: none;
color: #0097c1;
width: 100%;
background-color: white;
}

#submitbtn{
border: 1px solid #0097c1;
border-radius: 6px;
color: #0097c1;
font-weight: bold;
font-size: 1.5em;
background: none;
margin-top: 40px;
}

#logoutbtn{
border: 1px solid #0097c1;
border-radius: 6px;
color: #0097c1;
font-weight: bold;
font-size: 1.5em;
background: none;
margin-top: 10px;
margin-right: 20px;
}
@media only screen and (max-width: 767px){
	#section1{
		margin-top: 30%;
	}	
}
</style>
<?php
session_start();
unset($_SESSION['user']);
?>
</head>
<body>
<div style="width: 100%; text-align: right;">
<input type="submit" name="lgt" id="logoutbtn" value="Logout">
</div>
<div class="container" id="section1">
<center><h2 style="margin-top:20px;">ADMIN</h2></center>
<form method="post" action="adminvolfill.php">
<div class="row" style="margin-top: 20px;">
<div class="col-md-6 text-center" style="font-size: 1.5em;;">Volunteer Name:</div>
<div class="col-md-6">
<input type="text" name="volname" style="border-bottom: 3px solid #0097c1;">
</div>
</div>
<div class="row" style="margin-top: 20px;">
<div class="col-md-6 text-center" style="font-size: 1.5em;">Volunteer Phone No:</div>
<div class="col-md-6">
<input type="text" name="volnum" style="border-bottom: 3px solid #0097c1;">
</div>
</div>
<div class="row" style="margin-top: 20px;">
<div class="col-md-6 text-center" style="font-size: 1.5em;">Set Volunteer Password:</div>
<div class="col-md-6">
<input type="text" name="volpass" style="border-bottom: 3px solid #0097c1;">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 text-center"><input type="submit" name="sub" id="submitbtn" value="Add"></div>
<div class="col-md-4"></div>
</div>
</form>
</div>
</body>
</html>