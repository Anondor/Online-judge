    <?php
    session_start();
    $conn=mysqli_connect('localhost','root','','codeland');

      
     if(isset($_POST['submit']))
     {
       
       $username=$_SESSION['username'];
       $file=$_FILES['file'];


       $filename=$file['name'];
       $fileerror=$file['error'];
       $filetmp=$file['tmp_name'];

       $fileext=explode('.', $filename);
       $filcheck=strtolower(end($fileext));
       $fileextstorted = array('png', 'jpg', 'jpeg' );
       if(in_array($filcheck, $fileextstorted))
       {
          $destinationfile='upload/'.$filename;
          move_uploaded_file($filetmp, $destinationfile);
          $s       = "SELECT * FROM  userimage where username='$username'";
           $result  = mysqli_query($conn, $s);
           $num1    = mysqli_num_rows($result);
           if($num1==0)
           {
            $q="INSERT INTO `userimage`(`username`, `image`) VALUES ('$username','$destinationfile')";

           $result    =mysqli_query($conn, $q);
           }

           else if($num1>0)
           {
            $q="UPDATE `userimage`   SET image='$destinationfile' WHERE username='$username'";
             $result    =mysqli_query($conn, $q);
           }




           
         

       }     header('location: my-account.php');


     } 

         

		
	
?>