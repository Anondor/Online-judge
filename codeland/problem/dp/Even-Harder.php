<?php
session_start();
$_SESSION['link']="https://codeforces.com/problemset/problem/1453/F";

$_SESSION['problemname']="Even Harder";
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
       <dd class="name">Even Harder</dd>
       <br>
       <div class="limit">
         <dd> Time limit: 2 seconds</dd>
         <dd>Memory limit: 512 megabytes</dd>
       </div>
    
    </div>

    <div style="background-color:#F4F0FF; " class="quetion-body">
      <p>Gildong is now developing a puzzle game. The puzzle consists of n platforms numbered from 1 to n. The player plays the game as a character that can stand on each platform and the goal of the game is to move the character from the 1-st platform to the n-th platform.</p>


      <p>The i-th platform is labeled with an integer ai (0≤ai≤n−i). When the character is standing on the i-th platform, the player can move the character to any of the j-th platforms where i+1 ≤ j ≤ i+ai. If the character is on the i-th platform where ai = 0 and i≠n, the player loses the game.</p>


      <p>Since Gildong thinks the current game is not hard enough, he wants to make it even harder. He wants to change some (possibly zero) labels to 0 so that there remains exactly one way to win. He wants to modify the game as little as possible, so he's asking you to find the minimum number of platforms that should have their labels changed. Two ways are different if and only if there exists a platform the character gets to in one way but not in the other way.</p>

      <div class="input"><p>Input</p></div>

      <p>The only line contains a single integer n (1≤n≤1000) — the number of steps the robot makes.</p>
      <p>Each test contains one or more test cases. The first line contains the number of test cases t (1 ≤ t ≤ 500).</p>

      <p>Each test case contains two lines. The first line of each test case consists of an integer n (2 ≤ n ≤ 3000) — the number of platforms of the game.</p>

      <p>The second line of each test case contains n integers. The i-th integer is ai (0 ≤ ai ≤ n−i) — the integer of the i-th platform.</p>

      <p>It is guaranteed that:</p>
      <p>
        <ul>
          <li>For each test case, there is at least one way to win initially.</li>
          <li>The sum of n in all test cases doesn't exceed 3000.</li>
        </ul>
      </p>
      

      <div class="input"><p>Output</p></div>

      <p>For each test case, print one integer — the minimum number of different labels that should be changed to 0 so that there remains exactly one way to win.</p>


      <div class="input-sample">Sample</div><br>


      <div class="input-sample">Input</div>
      <div style="margin: 0 10px;" class="text-input">
      <pre>
        3
        4
        1 1 1 0
        5
        4 3 2 1 0
        9
        4 1 4 2 1 0 2 1 0
      </pre>  
      </div>

      <div class="input-sample">Output</div>
       <div style="margin: 0 10px;" class="text-input">
          <pre>
            0
            3
            2
          </pre>
       </div>
       
       <div class="input-sample">Note</div>
       <dd>In the first case, the player can only move to the next platform until they get to the 4-th platform. Since there is already only one way to win, the answer is zero.

</dd>
<dd>In the second case, Gildong can change a2, a3, and a4 to 0 so that the game becomes 4 0 0 0 0. Now the only way the player can win is to move directly from the 1-st platform to the 5-th platform.</dd>
<dd>In the third case, Gildong can change a2 and a8 to 0, then the only way to win is to move in the following way: 1 – 3 – 7 – 9.</dd>



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