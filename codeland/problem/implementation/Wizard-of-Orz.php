<?php
session_start();
$_SESSION['link']="https://codeforces.com/contest/1467/problem/A?fbclid=IwAR1N__KSDqpD8PXC_WO4sJ3rz_YHPLpwditUokdz3UY4CqYzPUni3P_slZM";
$_SESSION['problemname']="Wizard of Orz";

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
       <dd class="name">Wizard of Orz</dd>
       <br>
       <div class="limit">
         <dd> Time limit: 1 seconds</dd>
         <dd>Memory limit: 256 megabytes</dd>
       </div>
      
      

    <div style="background-color:#F4F0FF; " class="quetion-body">
      <p>There are n digital panels placed in a straight line. Each panel can show any digit from 0 to 9. Initially, all panels show 0. </p>
      <p>Every second, the digit shown by each panel increases by 1. In other words, at the end of every second, a panel that showed 9 would now show 0, a panel that showed 0 would now show 1, a panel that showed 1 would now show 2, and so on.</p>
      <p>When a panel is paused, the digit displayed on the panel does not change in the subsequent seconds.</p>
      <p>You must pause exactly one of these panels, at any second you wish. Then, the panels adjacent to it get paused one second later, the panels adjacent to those get paused 2 seconds later, and so on. In other words, if you pause panel x, panel y (for all valid y) would be paused exactly |x−y| seconds later.</p>
      <p>For example, suppose there are 4 panels, and the 3-rd panel is paused when the digit 9 is on it.</p>
       <ul>
         <li>The panel 1 pauses 2 seconds later, so it has the digit 1;</li>
         <li>the panel 2 pauses 1 second later, so it has the digit 0;</li>
         <li>the panel 4 pauses 1 second later, so it has the digit 0.</li>
       </ul>
       <p>The resulting 4-digit number is 1090. Note that this example is not optimal for n=4.</p>
       <p>Once all panels have been paused, you write the digits displayed on them from left to right, to form an n digit number (it can consist of leading zeros). What is the largest possible number you can get? Initially, all panels show 0.</p>
      <div class="input"><p>Input</p></div>

      <p>The first line of the input contains a single integer t (1≤t≤100) — the number of test cases. Each test case consists of a single line containing a single integer n (1≤n≤2⋅10^5).</p>
      <p>Each case contains an integer n (1 ≤ n ≤ 10^5), denoting the number of dual fights. EacIt is guaranteed that the sum of n over all test cases does not exceed 2⋅10^5. </p>

      <div class="input"><p>Output</p></div>
      <p>For each test case, print the largest number you can achieve, if you pause one panel optimally. </p>
      <div class="input-sample">Sample</div>
      <div class="input-sample">Input</div>
      <div style="margin: 0 10px;" class="text-input">
        <div> 2</div>
        <div> 1</div>
        <div> 2</div>
      </div>
      <div class="input-sample">Output</div>
       <div style="margin: 0 10px;" class="text-input">
        <div>9 </div>
        <div>98</div>
       </div>
       <div class="input-sample">Note</div>
       <dd>In the first test case, it is optimal to pause the first panel when the number 9 is displayed on it. </dd>
       <dd>In the second test case, it is optimal to pause the second panel when the number 8 is displayed on it.</dd>




    </div><br><br>

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



    <div style="height: 100px;"></div>
 </div>

</body>

</html>