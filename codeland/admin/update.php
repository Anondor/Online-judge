<?php
include 'config.php';
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/jpg" href="../image/logo.jpg">
          <link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">


    <title>submission list</title>
</head>
<body style=""><div class="header "style=" position: -webkit-sticky; position: sticky; top: 0;">
        <div class="container"> 
             <div class="logo">
                 <img src="../image/logo.jpg">
             </div>

            <div class="nav">

                <div class="nav-1">
                      <ul>
                             <li class="nav-item" id="nav-home"><a class="nav-link" href="welcome.php">Home</a> </li>
                            <li class="nav-item" id="nav-problem"> <a class="nav-link" href="judging.php">Judge</a></li>
                            <li class="nav-item" id="nav-volume">   <a class="nav-link" href="#">Update</a> </li>
                      </ul>                     
                </div>

                <div class ="nav-2">
                       <ul>
                          <li class="nav-item" id=nav-login> <a class="nav-link" href="#"><?php  echo  $_SESSION['username'];?>
                            </a></li>
                          
                          
                            <li class="nav-item" id="nav-register"> <a class="nav-link" href="logout.php">Logout</a></li>
                        </ul>
                </div>

            </div>

        </div>

    </div>
<div class="reg" style="width: 70%; margin: auto;">

       <div class="container">
        <div class="login-box" style="max-width: 700px;float: none;margin: 150px auto;" >
        <div class="row">
          <div class="col-lg-6 d-block">
         
          <form action="resultupdate.php" method="post">
           <div class="form-group">
            <label>Submissionid</label>
            <input type="text" name="submissionid" class="form-control" required>
           </div>
           <div class="form-group">
            <label>Status</label>
            <input type="text" name="status" class="form-control" required>
           </div>
            <div class="form-group">

             <label>Time</label>
            <input type="text" name="time" class="form-control" required>
           </div>
            <div class="form-group">
            <label>Memory</label>
            <input type="text" name="memory" class="form-control" required>
           </div>

         <button style="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

       </div>
  
  </div>
</div>
</div>


   

</div>




</body>
</html>