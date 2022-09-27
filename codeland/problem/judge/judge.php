


<?php
session_start();

    $conn=mysqli_connect('localhost','root','','codeland');


    $username=$_SESSION['username'];
    $problemname=$_SESSION['problemname'];
    $language=$_POST['language'];
    $link=$_SESSION['link'];
    $code=$_POST['code'];
    $time="";
    $memory="";



$status="in queue";


$q="INSERT INTO `usersubmission`( `username`, `problemname`, `language`, `link`, `code`, `status`, `time`, `memory`) VALUES ('$username','$problemname',' $language','$link','$code','$status','$time','$memory')";

      $result    =mysqli_query($conn, $q);

       $display="SELECT * FROM usersubmission where username='$username'";
            $querydisplay=mysqli_query($conn,$display);
            
        
header("location:submission.php");

     
       		
?>