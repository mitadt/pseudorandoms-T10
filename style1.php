<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include 'plugins.php'?>
    <style>

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
p.ex2 {
  font:bold 60px Georgia, serif;
}
p.ex1 {
  font:italic bold 15px Georgia, serif;
}
p.ex3 {
    font:bold 15px Georgia, serif;
    
}
</style>
</head>

<body>

<div class="container">
<br>
<br>
<BR>
<BR>
<br>
<br>

<form method="POST">
    <div class="container">
         <div class="row">
            <div class="col-md-8">
                HOSPITAL ID:
                <input class="form-control" type="text" name="hid" id="hid">
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-8">
            DOCTOR'S USERID:
            <input class="form-control" type="text" name="doctid" id="doctid">
            </div>
            </div>
            <br>
            <br>
           <div class="row">
                <div class="col-md-8">
                    ACCOUNT PASSWORD:
                    <input class="form-control" type="password" name="pass" id="pass">
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                    <div class="col-md-4">
                        <input class="btn btn-primary" type="submit" value="LOGIN"  onclick="window.location.href='dummy.php'">
                        </div>
                        </div>
                        <div class="row">
                <div class="col-md-4">
                   NEW USER?<a href="registration.php">REGISTER</a><onInput="windows.location.href='dummy.php'">
                </div>
            </div>
            
<?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $servername = "localhost";
            $username = "root";
            $password =  "";
            $dbname =  "maatru";
   //create connection
   $conn = mysqli_connect($servername, $username,$password,$dbname);
   //check connection
   if (!$conn)
   {
       die("connection failed: " . mysqli_connect_error());

   }
   $hid= $_POST['hid'];
   $doctid=$_POST['doctid'];
   $pass=$_POST['pass'];

$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$result = mysqli_query($conn,"SELECT * FROM doctordetails WHERE doctid='" . $_POST["doctid"] . "' and pass = '". $_POST["pass"]."'");
	$count  = mysqli_num_rows($result);
  if($count==0) 
  {
        echo "<script>swal('connection unsuccessful')</script>";

exit;
  } 
  else 
  {
        echo "<script>swal('connection successful')</script>";
        header("Location: http://localhost/Final/dummy.php");
	}
}

}
      ?>     
