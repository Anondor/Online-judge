<?php
session_start();

     $conn=mysqli_connect('localhost','root','','codeland');
   
         $name=$_SESSION['username'];

         $s       = "SELECT * FROM  users where username='$name'";
           $result  = mysqli_query($conn, $s);
          
         
        while($row = mysqli_fetch_assoc($result)) 
        {

          $_SESSION['firstname']=$row['firstname'];

          $_SESSION['lastname']=$row['lastname'];
          $_SESSION['email']=$row['email'];
          $_SESSION['country']=$row['country'];
        }

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

	<link rel="stylesheet" type="text/css" href="../problem/p1-style.css">
  <link rel="stylesheet" type="text/css" href="style.css">
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
                            <li class="nav-item" id="nav-problem"> <a class="nav-link" href=../problem/p1.php>Problem</a></li>
                            <li class="nav-item" id="nav-volume">   <a class="nav-link" href="../problem/volume/volume.php">Volume</a> </li>
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

    
<div class="middle">
  <div class="partition">
    <div class="left">
      <h1 style="font-size: 35px"><?php  echo  $_SESSION['username'];?></h1>
      <div class="marge">

      <div style="color:gray;"><?php  echo  $_SESSION['firstname']." ".$_SESSION['lastname']." from";?></div>
      <div><?php  echo $_SESSION['country'];  ?></div>
    </div>

     <div class="email"><i class="fas fa-envelope-square" style="color:black;"></i><?php echo " ".$_SESSION['email']; ?></div>
     <br>
     <div class="submision">
       
       <a href="../problem/judge/mysubmission.php">Submission</a>

     </div>
      
    </div>
    <div class="right">


      <div class="container">
        <br>
        <br>
        
         <?php

           

            $conn=mysqli_connect('localhost','root','','codeland');

            $display="SELECT * FROM userimage where username='$name'";
             $querydisplay=mysqli_query($conn,$display);

             while($result=mysqli_fetch_array($querydisplay))
             {
        ?>
         <tr>
             <td><img src=" <?php echo $result['image']; ?>" height="150px" width="150px"></td>
        
        </tr>
        <?php
              }

              ?>

        <br>
       

        <div class="col-lg-10 m auto d-block">
        <form action="upload.php" method="post" enctype="multipart/form-data">
         
         <div class="form-group">
          <label for="file"> </label>
          <input type="file" name="file" id="file" class="form-control">
         </div>
         <input type="submit" name=" submit" value="submit" bt>


        </form> 
      </div>
      </div>
    
      
    </div>
    

  </div>


 
 </div>

</body>

</html>