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
</head>

<body>

<br>
<br><br><br>
<form method="POST">
    <div class="container">
         <div class="row">
            <div class="col-md-6">
                PATIENT ID:
                <input class="form-control" type="text" name="pid" id="pid">
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
            PATIENT'S NAME:
            <input class="form-control" type="text" name="pname" id="pname">
            </div>
            </div>
            <br>
            <br>
           <div class="row">
                <div class="col-md-6">
                    ACCOUNT PASSWORD:
                    <input class="form-control" type="text" name="ppass" id="ppass">
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                    <div class="col-md-4">
                        <input class="btn btn-primary" type="submit" value="LOGIN" onclick="window.location.href='detail.php'" >
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
   $pid= $_POST['pid'];
   $pname=$_POST['pname'];
   $ppass=$_POST['ppass'];
  
   
 
   $sql1 = "SELECT pname FROM patientl WHERE pid='$pid'";
   $sql2 = "SELECT ppass FROM patientl WHERE pid='$pid'";
   if($pid==$sql1)
   {
    if($ppass==$sql2)
    {
     echo "<script>swal('Login matches')</script>";
   }
   else
   {
    echo "<script>swal('Unsuccessful login')</script>";
   }
}
   if(mysqli_query($conn,$sql1))
   {
        echo "<script>swal('connection successful')</script>";
      
   }
   else
   {
       echo "error:".mysqli_error($conn);
   }
   if(mysqli_query($conn,$sql2))
   {
        echo "<script>swal('connection successful')</script>";
        
   }
   else
   {
       echo "error:".mysqli_error($conn);
   }
}
  
   ?>     


</body>
</html>