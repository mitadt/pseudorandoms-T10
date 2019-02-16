<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <?php include('plugins.php');
    ?>
</head>

<body>



    <div class="container">
<br>
         <div class="row">
            <div class="col-md-4">
                PATIENT ID:
                </div>
                <div class="col-md-4">
                <input class="form-control" type="text" name="name" id="name">
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4">
            NAME:</div>
            <div class="col-md-4">
            <input class="form-control" type="text" name="password" id="password">
            </div>
            </div>
            <br>
            <br>
           <div class="row">
                <div class="col-md-4">
                    OCCUPATION:
                    </div>
                    <div class="col-md-4">
                    <input class="form-control" type="text" name="name" id="name">
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4">
                    ADDRESS:
                    </div>
                    <div class="col-md-4">
                    <textarea rows="4" cols="50">
                   </textarea>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4">
                    CONTACT:
                    </div>
                    <div class="col-md-4">
                    <input class="form-control" type="text" name="name" id="name">
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4">
                    HISTORY:
                    </div>
                    <div class="col-md-4">
                   <textarea rows="4" cols="50">
                   </textarea>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4">
                    MEDICINES:
                    </div>
                    <div class="col-md-4">
                    <textarea rows="4" cols="50">
                   </textarea>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4">
                    REPORTS SUGGESTED:
                    </div>
                    <div class="col-md-4">
                    <textarea rows="4" cols="50">
                   </textarea>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4">
                    COMMENTS:
                    </div>
                    <div class="col-md-4">
                    <textarea rows="4" cols="50">
                   </textarea>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                    <input class="btn btn-primary" type="submit" value="LOGOUT" onclick="window.location.href='logout.php'">
                    </div>
                        </div>
            </div>


</body>

</html>

