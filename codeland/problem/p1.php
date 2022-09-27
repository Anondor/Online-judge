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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="p1-style.css">
  <link rel="stylesheet" type="text/css" href="page_design.css">



</head>
<body >


    <div class="head "style=" position: -webkit-sticky; position: sticky; top: 0;">
        <div class="contain"> 
             <div class="logo">
                 <img src="../image/logo.jpg">
             </div>

            <div class="nav">

                <div class="nav-1">
                      <ul>
                             <li class="nav-item" id="nav-home"><a class="nav-link" href="../home/home.php">Home</a> </li>
                            <li class="nav-item" id="nav-problem"> <a class="nav-link" href=p1.php>Problem</a></li>
                            <li class="nav-item" id="nav-volume">   <a class="nav-link" href="volume/volume.php">Volume</a> </li>
                      </ul>                     
                </div>

                <div class ="nav-2">
                       <ul>
                            <li class="nav-item" id=nav-login> <a class="nav-link" href="../profile/my-account.php"><?php  echo  $_SESSION['username'];?>
                            </a></li>
                            <li class="nav-item" id="nav-register"> <a class="nav-link" href="../home/logout.php">Logout</a></li>
                        </ul>
                </div>

            </div>

        </div>

    </div>


    <br>
<div  class="middle" style="background-color: #F4F0FF;">
  <div class="container">
    
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover" >
        <thead>
          <th   style="text-align: center;">#</th>
          <th style="text-align: center;">Name</th>
        </thead>
        <tbody>
          <tr> <td ><a class="a1" href="implementation/Wizard-of-Orz.php">1000</a></td> <td><a class="a2" href="implementation/Wizard-of-Orz.php">Wizard of Orz</a></td> </tr>
          <tr> <td><a class="a1" href="implementation/Fibseive.php">1001</a></td> <td><a class="a2" href="implementation/Fibseive.php">Fibsieve's Fantabulous Birthday</a></td> </tr>
          <tr> <td ><a class="a1" href="graph/Back_to_Underworld.php">1002</a></td> <td ><a class="a2" href="graph/Back_to_Underworld.php">Back to Underworld</a></td> </tr>
          <tr> <td ><a class="a1" href="dp/Red-and-Blue.php">1003</a></td> <td ><a class="a2" href="dp/Red-and-Blue.php">Red-and-Blue</a></td> </tr>
         <tr> <td><a class="a1" href="dp/Move-and-Turn.php">1004</a></td> <td><a class="a2" href="dp/Move-and-Turn.php">Move and Turn</a></td> </tr>

    <tr> <td ><a class="a1" href="dp/Even-Harder.php">1005</a></td> <td><a class="a2" href="dp/Even-Harder.php">Even-Harder</a></td> </tr>

    <tr> <td ><a class="a1" href="dp/Cakes-for-Clones.php">1006</a></td> <td><a class="a2" href="dp/Cakes-for-Clones.php">Cake-for-Clones</a></li></ul></td> </tr>

    <tr> <td ><a class="a1" href="dp/Glass-Half-Spilled.php">1007</a></td> <td ><a class="a2" href="dp/Glass-Half-Spilled.php">Glass-Half-Spilled</a></td> </tr>

    <tr> <td ><a class="a1" href="dp/JYPnation.php">1008</a></td> <td ><a class="a2" href="dp/JYPnation.php">JYPnation</a></td> </tr>
        </tbody>


      </table>
      
    </div>
    
  </div>  

 </div> 

    <div style="height: 100px;"></div>

</body>

</html>