<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/jpg" href="../image/logo.jpg">
        	<link rel="stylesheet" type="text/css" href="../style.css">


    <title>Welcome</title>
</head>
<body style=""><div class="header "style=" position: -webkit-sticky; position: sticky; top: 0;">
        <div class="container"> 
             <div class="logo">
                 <img src="../image/logo.jpg">
             </div>

            <div class="nav">

                <div class="nav-1">
                      <ul>
                             <li class="nav-item" id="nav-home"><a class="nav-link" href="#">Home</a> </li>
                            <li class="nav-item" id="nav-problem"> <a class="nav-link" href="judging.php">Judge</a></li>
                            <li class="nav-item" id="nav-volume">   <a class="nav-link" href="update.php">Update</a> </li>
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
</body>
</html>