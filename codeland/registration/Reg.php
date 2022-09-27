<!DOCTYPE html>
<html>
<head>
  <title>User Registration | PHP</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/jpg" href="../image/logo.jpg">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body >
  
    <div class="header" style=" position: -webkit-sticky; position: sticky; top: 0;">
        <div class="container"> 
             <div class="logo">
                 <img src="../image/logo.jpg">
             </div>
            <div class="nav">
                 <div class="nav-1">
                      <ul>
                             <li class="nav-item" id="nav-home"><a class="nav-link" href="../home/homealrt.php">Home</a> </li>
                            <li class="nav-item" id="nav-problem"> <a class="nav-link" href="../home/homealrt.php">Problem</a></li>
                            <li class="nav-item" id="nav-volume">   <a class="nav-link" href="../home/homealrt.php">Volume</a> </li>
                      </ul>                     
                </div>
                <div class ="nav-2">
                       <ul>
                            <li class="nav-item" id=nav-login> <a class="nav-link" href="login.php">Login</a></li>
                            <li class="nav-item" id="nav-register"> <a class="nav-link" href="registration.php">Register</a></li>
                        </ul>
                </div>
            </div>
        </div>

    </div> 
       <div class="reg" style="width: 70%; margin: auto;">
    <?php
    session_start();
    $conn=mysqli_connect('localhost','root','','codeland');

  
      $firstname= $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $username = $_POST['username'];
      $email    = $_POST['email'];
      $country  = $_POST['country'];
      $password = $_POST['password'];
           $s       = "SELECT * FROM  users where username='$username'";
           $result  = mysqli_query($conn, $s);
           $num1    = mysqli_num_rows($result);
           $s       = "SELECT * FROM  users where email='$email'";
           $result  = mysqli_query($conn, $s);
           $num2    = mysqli_num_rows($result);


if($num1==1)
{
  echo "<h1 >Username is already register.</h1>";
  echo "<h1 >  Please, Try another name.</h1>";
}
else if($num2==1)
{
  echo "<h1 >Username is already register.</h1>";
  echo "<h1 >  Please, Try another name.</h1>";
}
else
{

  $sql="INSERT INTO users(firstname,lastname,username,email,country,password) VALUES('$firstname','$lastname','$username','$email' ,'$country','$password')";
          $data =mysqli_query($conn, $sql);   
            $_SESSION['username']=$username;

    $sql="INSERT INTO userprofile VALUES('$username','$pro.jpg')";  
    $data =mysqli_query($conn, $sql);       


         header('location:../home/home.php');
       }
    
    
?>
</div>
</body>
</html>