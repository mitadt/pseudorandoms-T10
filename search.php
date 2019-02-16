<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include 'plugins.php';?>
</head>
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
h5 {
  display: inline-block;
  padding: 10px;
  background: #B9121B;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.full-screen {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
<?php include 'header.php';?>
<br>
<br>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-md-4">
<a href="register.php"><input class="btn btn-primary" type="submit" value="REGISTER"></a>
</div>
<div class="col-md-4">
<a href="search.php"><input class="btn btn-primary" type="submit" value="SEARCH"></a>
</div>
<div class="col-md-4">
<a href="update.php"><input class="btn btn-primary" type="submit" value="UPDATE"></a>
</div>
</div>
<br>
<br>

    <div class="container">
         <div class="row">
            <div class="col-md-4">
                SEARCH BY PATIENT ID:
                </div>
                <div class="col-md-4">
                <input class="form-control" type="text" name="pid" id="pid">
            </div>
          
        </div>
        <br>
         <div class="row">
            <div class="col-md-4">
                SEARCH BY PATIENT NUMBER:
                </div>
                <div class="col-md-4">
                <input class="form-control" type="text" name="pcont" id="pcont">
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <input class="btn btn-primary" type="submit" value="GO">   <?php

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
$pid=$_POST['pid'];
$pname= $_POST['pname'];
$pocc=$_POST['pocc'];
$padd=$_POST['padd'];
$pcont=$_POST['pcont'];
$phistory=$_POST['phistory'];
$pmed=$_POST['pmed'];
$preports=$_POST['preports'];
$pcomments=$_POST['pcomments'];
$ppres=$_POST['ppres'];

$sql = "SELECT * FROM 'updations' WHERE pid = '$pid'";

  
if(mysqli_query($conn,$sql))
{
while($row = mysql_fetch_array($result,MYSQL_NUM))
{
  echo "'$row'";
}
}



echo "'$sql'";
  echo "<script>swal ('$sql')</script>";

else
{
echo "error:".mysqli_error($conn);
}
mysqli_close($conn);}
?>     
                        </div>       
        </div>
        </div>
        <br>
        <br>
       
                </div>
</div>
</div>
  </body>
</html>