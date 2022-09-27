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
    <link rel="shortcut icon" type="image/jpg" href="../../image/logo.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="../p1-style.css">
  <link rel="stylesheet" type="text/css" href="../page_design.css">



</head>
<body >


    <div class="head "style=" position: -webkit-sticky; position: sticky; top: 0;">
        <div class="contain"> 
             <div class="logo">
                 <img src="../../image/logo.jpg">
             </div>

            <div class="nav">

                <div class="nav-1">
                      <ul>
                             <li class="nav-item" id="nav-home"><a class="nav-link" href="../../home/home.php">Home</a> </li>
                            <li class="nav-item" id="nav-problem"> <a class="nav-link" href=../p1.php>Problem</a></li>
                            <li class="nav-item" id="nav-volume">   <a class="nav-link" href="../volume/volume.php">Volume</a> </li>
                             <li class="nav-item" id="nav-volume">   <a class="nav-link" href="mysubmission.php">Mysubmission</a> </li>
                      </ul>                     
                </div>

                <div class ="nav-2">
                       <ul>
                            <li class="nav-item" id=nav-login> <a class="nav-link" href="../../profile/my-account.php"><?php  echo  $_SESSION['username'];?>
                            </a></li>
                            <li class="nav-item" id="nav-register"> <a class="nav-link" href="../../home/logout.php">Logout</a></li>
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
          <th style="text-align: center;">Who</th>
          <th   style="text-align: center;">Problem</th>
          <th style="text-align: center;">Lang</th>
          <th   style="text-align: center;">Verdict</th>
          <th style="text-align: center;">Time</th>
          <th style="text-align: center;">Memory</th>

        </thead>
       <tbody>
         
          <?php
          $username=$_SESSION['username'];
          $Accepted="Accepted";
          $Wrong="Wrong answer";
          $Runtime="Runtime error";
          $compile="Compilation error";
          $time="Time limit";

    $conn=mysqli_connect('localhost','root','','codeland');

     $s   = "SELECT * FROM `usersubmission` ORDER BY submissionid DESC";
           $querydisplay    =mysqli_query($conn, $s);

       while($result=mysqli_fetch_array($querydisplay))
             {
        ?>
         <tr>
            <td><?php echo $result['username']; ?></td>

             <td><?php echo $result['problemname']; ?></td>
              <td><?php echo $result['language']; ?></td>

            <?php if($result['status']==$Accepted)   
            {?>
                <td style="color: Green"><?php echo $result['status']; ?></td>

           
              <?php
               } 
               else if($result['status']==$Wrong)
               {?>
                 <td style="color: Red"><?php echo $result['status']; ?></td>

              <?php }

               

                else if($result['status']==$Runtime)
               {?>
                   <td style="color: #00FFFF"><?php echo $result['status']; ?></td>

              <?php }

                


                 else if($result['status']==$compile)
               {?>
                   <td style="color: #B8860B"><?php echo $result['status']; ?></td>

              <?php }

              else if($result['status']==$time)
               {?>
                   <td style="color: #000080"><?php echo $result['status']; ?></td>

              <?php } 

                 else 
               {?>
                   <td ><?php echo $result['status']; ?></td>

              <?php }

                ?>


              <td><?php echo $result['time']; ?></td>

              <td><?php echo $result['memory']; ?></td>


        
        </tr>
        <?php
              }



                  
    
?> 
        </tbody>



      </table>
      
    </div>
    
  </div>  

 </div> 

    <div style="height: 100px;"></div>

</body>

</html>