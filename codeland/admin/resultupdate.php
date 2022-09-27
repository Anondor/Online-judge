<?php
include 'config.php';
session_start();

  $submissionid = $_POST['submissionid'];
  $status = $_POST['status'];
  $time=$_POST['time'];
  $memory=$_POST['memory'];

  $sql="UPDATE `usersubmission` SET `status`='$status',`time`='$time',`memory`='$memory' WHERE submissionid=$submissionid";
  $result    =mysqli_query($conn, $sql);

  header("location:judging.php")




?>