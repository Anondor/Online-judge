<?php
session_start();
$_SESSION['link']="https://codeforces.com/problemset/problem/1459/B";

$_SESSION['problemname']="Move and Turn";
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

	<link rel="stylesheet" type="text/css" href="../../style.css">
  <link rel="stylesheet" type="text/css" href="../problem_design.css">
</head>
<body >


    <div class="header "style=" position: -webkit-sticky; position: sticky; top: 0;">
        <div class="container"> 
             <div class="logo">
                 <img src="../../image/logo.jpg">
             </div>

            <div class="nav">

                <div class="nav-1">
                      <ul>
                             <li class="nav-item" id="nav-home"><a class="nav-link" href="../../home/home.php">Home</a> </li>
                            <li class="nav-item" id="nav-problem"> <a class="nav-link" href="../p1.php">Problem</a></li>
                            <li class="nav-item" id="nav-volume">   <a class="nav-link" href="../volume/volume.php">Volume</a> </li>
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

    
<div class="middle">
    
    <div class="problem_head">
       <dd class="name">Move and Turn</dd>
       <br>
       <div class="limit">
         <dd> Time limit: 2 seconds</dd>
         <dd>Memory limit: 512 megabytes</dd>
       </div>
       

    </div>

    <div style="background-color:#F4F0FF; " class="quetion-body">
      <p>A robot is standing at the origin of the infinite two-dimensional plane. Each second the robot moves exactly 1 meter in one of the four cardinal directions: north, south, west, and east. For the first step the robot <strong>can choose any of the four directions</strong>, but then at the end of every second it <strong>has to turn</strong> 90 degrees left or right with respect to the direction it just moved in. For example, if the robot has just moved north or south, the next step it takes has to be either west or east, and vice versa.</p>


      <p>The robot makes <strong>exactly</strong> n steps from its starting position according to the rules above. How many different points can the robot arrive to at the end? The final orientation of the robot can be ignored.</p>

      <div class="input"><p>Input</p></div>

      <p>The only line contains a single integer n (1≤n≤1000) — the number of steps the robot makes.</p>
      

      <div class="input"><p>Output</p></div>

      <p>Print a single integer — the number of different possible locations after exactly n steps.</p>

      <div class="input-sample">Sample</div>


      <div class="input-sample">Input</div>
      <div style="margin: 0 10px;" class="text-input">
        <div> 1</div>
        
      </div>
      <div class="input-sample">Output</div>
       <div style="margin: 0 10px;" class="text-input">

        <div>4 </div>
       </div>
       <div class="input-sample">Input</div>
      <div style="margin: 0 10px;" class="text-input">
        <div> 2</div>
        
      </div>
      <div class="input-sample">Output</div>
       <div style="margin: 0 10px;" class="text-input">
        <div>4 </div>
       </div>
       <div class="input-sample">Input</div>
      <div style="margin: 0 10px;" class="text-input">
        <div> 3</div>
        
      </div>
      <div class="input-sample">Output</div>
       <div style="margin: 0 10px;" class="text-input">
        <div>12</div>
       </div>
       <div class="input-sample">Note</div>
       <dd>In the first sample case, the robot will end up 1 meter north, south, west, or east depending on its initial direction.

</dd>
<dd>In the second sample case, the robot will always end up 2–√ meters north-west, north-east, south-west, or south-east.</dd>



    </div>

     <br><br>

              <div style="text-align: center;font-size: 20px;">
                     <form action="../judge/judge.php" method="post">
                           <label for="language">Choose a language: </label>
                           <select name="language" id="language">
                            <option value="C">C</option>
                            <option value="Java">Java</option>
                            <option value="Python">Python</option>
                            </select>
                            <br><br>
                            <label for="Code">Insert Your Code:</label>
                            <br>


                            <textarea id="code" name="code" rows="30" cols="50"></textarea><br>
                            <input type="submit" value="submit" style="font-size: 20px;">
                       </form>
              </div>

    <div style="height: 20px; background-color:#F4F0FF; "></div>

    <div style="height: 100px;"></div>
      

 </div>

</body>

</html>