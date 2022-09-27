    <?php
    session_start();
    $conn=mysqli_connect('localhost','root','','codeland');

      
      $username = $_POST['user'];
      $password = $_POST['password'];

      $s        = "SELECT * FROM  users where username='$username'&& password='$password'";
           $result    =mysqli_query($conn, $s);
           $num   =mysqli_num_rows($result);

         

		if($num==1)
		{
              $_SESSION['username']=$username;
              $_SESSION["firstname"]=$firstname;
              $_SESSION['lastname']=$lastname;
              $_SESSION["email"]=$email;
              $_SESSION['country']=$country;
			 header('location:../home/home.php');
		}
		else 
		{
		 header('location:login.php');
		} 
?>