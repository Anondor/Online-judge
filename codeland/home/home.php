<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Coldeland</title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="Problem list" />
	<meta name="autor" content="Azizul"> 
   <meta property="og:type" content="webpage"/>
    <meta property="og:url" content="https://codeland.net"/>
    <link rel="shortcut icon" type="image/jpg" href="../image/logo.jpg">
     <script src="https://kit.fontawesome.com/aeb2df46f3.js" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body >


    <div class="header "style=" position: -webkit-sticky; position: sticky; top: 0;">
        <div class="container"> 
             <div class="logo">
                 <img src="../image/logo.jpg">
             </div>

            <div class="nav">

                <div class="nav-1">
                      <ul>
                             <li class="nav-item" id="nav-home"><a class="nav-link" href="home.php">Home</a> </li>
                            <li class="nav-item" id="nav-problem"> <a class="nav-link" href="../problem/p1.php">Problem</a></li>
                            <li class="nav-item" id="nav-volume">   <a class="nav-link" href="../problem/volume/volume.php">Volume</a> </li>
                      </ul>                     
                </div>

                <div class ="nav-2">
                       <ul>
                            <li class="nav-item" id=nav-login> <a class="nav-link" href="../profile/my-account.php"><?php  echo  $_SESSION['username'];?>
                            </a></li>
                            <li class="nav-item" id="nav-register"> <a class="nav-link" href="logout.php">Logout</a></li>
                        </ul>
                </div>

            </div>

        </div>

    </div>

    
<div class="middle">
    
      <h1 style="font-size: 80px; margin-left:8px;">Codeland</h1>
       <p style="font-size: 30px;margin-left:8px;">Codeland is a problem  solving site where programmer get all the problem by their catagory and solve them. It  suports all other online judge.</p>
    </div>

</body>

</html>