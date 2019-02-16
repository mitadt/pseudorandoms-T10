<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <?php include 'plugins.php'; ?>
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
   <?php
// define variables and set to empty values
$doctname = $doctemail =  $doctcont = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  $doctname = test_input($_POST["doctname"]);
  $doctemail = test_input($_POST["doctemail"]);
  $doctcont = test_input($_POST["doctcont"]);
 
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  
  ?>
</head>



<body>

                    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <div class="container">
    <div class="row">
                <div class="col-md-6">
                    HOSPITAL REGISTRATION NUMBER:
                    <input class="form-control" type="text" name="hid" id="hid">
                </div>
            </div>
            <br>
            <br>
         <div class="row">
            <div class="col-md-6">
                DOCTOR"S NAME:
                <input class="form-control" type="text" name="doctname" id="doctname">
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                DOCTOR"S E-MAIL ID:
                <input class="form-control" type="text" name="doctemail" id="doctemail">
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                DOCTOR"S CONTACT:
                <input class="form-control" type="text" name="doctcont" id="doctcont">
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
            PASSWORD:
            <input class="form-control" type="password" name="pass" id="pass">
            </div>
        </div>
           
            <br>
            <br>
            <div class="row">
                    <div class="col-md-6">
                        <input class="btn btn-primary" type="submit" value="LOGIN"><?php
$name = $email = "";
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    if(empty($_POST["doctname"])) 
    {
        echo "<script>swal('Name is required');</script>";
    } 
    else 
    {
        $name = test_input($_POST["doctname"]);
        // check if name only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z ]*$/",$doctname)) 
        {
            echo "<script>swal('IOnly alphabets and whitespaces allowed');</script>";
        }
    else if(empty($_POST["doctemail"])) 
    {
        echo "<script>swal('E-Mail is required');</script>";
    } 
    else 
    {
        $doctemail = test_input($_POST["doctemail"]);
        // check if e-mail address is well-formed
        if (!filter_var($doctemail, FILTER_VALIDATE_EMAIL)) 
        {
            echo "<script>swal('Invalid E-mail format');</script>";
        }
    }
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
   $hid=$_POST['hid'];
   $doctname= $_POST['doctname'];
   $doctemail=$_POST['doctemail'];
   $doctcont=$_POST['doctcont'];
   $pass=$_POST['pass'];
   
 
   $sql = "INSERT INTO doctordetails(doctname, doctemail, doctcont, pass) VALUES('$doctname','$doctemail','$doctcont','$pass')";
   if(mysqli_query($conn,$sql))
   {
     $sql1="SELECT doctid FROM doctor where doctname='$doctname";
        echo "<script>swal ('Your unique doctor id is'+'$sql1')</script>";
       
   }
   else
   {
       echo "error:".mysqli_error($conn);
   }
   mysqli_close($conn);
}
   ?>     
                        </div>
</div>

</form>
</div>
</body>
</html>