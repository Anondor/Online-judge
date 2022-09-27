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

       <div class="container">
       	<div class="login-box" style="max-width: 700px;float: none;margin: 150px auto;" >
       	<div class="row">
       		<div class="col-lg-6 d-block">
       		<h1>Login</h1>
       		<form action="validation.php" method="post">
       		 <div class="form-group">
       		 	<label>Username</label>
       		 	<input type="text" name="user" class="form-control" required>
       		 </div>
       		 <div class="form-group">
       		 	<label>Password</label>
       		 	<input type="Password" name="password" class="form-control" required>
       		 </div>
       		 <button style="submit" class="btn btn-primary">Login</button>
       		 <a href="recover_email.php">  Forget Password?</a>
       		</form>
       	</div>

       </div>
	
	</div>
</div>
</div>
</body>
</html>