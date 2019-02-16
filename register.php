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
</style>
<?php include 'header.php'; ?>
</head>
<body>

<br>
<br>
<br>
<br>
<br>
<div class="container">
 <div class="row">
   <div class="col-md-4">
    <a href="register.php"> <input class="btn btn-primary" type="submit" value="REGISTER"></a>
   </div>
   <div class="col-md-4">
<a href="search.php"><input class="btn btn-primary" type="submit" value="SEARCH"></a>
</div>
<div class="col-md-4">
<a href="update.php"><input class="btn btn-primary" type="submit" value="UPDATE"></a>
</div>
</div>
</div>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <div class="container">
    <div class="row">
                <div class="col-md-8">
                    PATIENT NAME:
                    <input class="form-control" type="text" name="pname" id="pname">
                </div>
            </div>
            <br>
            <br>
         <div class="row">
            <div class="col-md-8">
                PATIENT OCCUPATION:
                <input class="form-control" type="text" name="pocc" id="pocc">
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-8">
                PATIENT ADDRESS:
                <input class="form-control" type="text" name="padd" id="padd">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-8">
                PATIENT CONTACT:
                <input class="form-control" type="text" name="pcont" id="pcont">
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-8">
            PATIENT PASSWORD:
            <input class="form-control" type="password" name="password" id="password">
            </div>
        </div>
  <br>
            <br>
            <div class="row">
                    <div class="col-md-8">
                        <input class="btn btn-primary" type="submit" value="SUBMIT"><?php
$pname = $padd = $pocc = $pcont = $ppasss= "";
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    if(empty($_POST["pname"])) 
    {
        echo "<script>swal('Name is required');</script>";
    } 
    
    else if(empty($_POST["padd"])) 
    {
        echo "<script>swal('Address is required');</script>";
    } 
   
 }
    ?>            
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
   $pname= $_POST['pname'];
   $pocc=$_POST['pocc'];
   $padd=$_POST['padd'];
   $pcont=$_POST['pcont'];
   $ppass=$_POST['ppass'];
   
 
   $sql = "INSERT INTO patient(pname, pocc, padd, pcont, ppass)VALUES('$pname','$pocc','$padd','$pcont','$ppass')";
   if(mysqli_query($conn,$sql))
   {
        echo "<script>swal('registration successful')</script>";
       
   }
   else
   {
       echo "error:".mysqli_error($conn);
   }
   mysqli_close($conn);
}
/*$sql1 = "INSERT INTO update(pname, pocc, padd, pcont)VALUES('$pname','$pocc','$padd','$pcont')";*/
   ?>     
                        </div>
</div>
</form>
                        <?php include 'footer.php'; ?>

</div>
    
</body>
</html>