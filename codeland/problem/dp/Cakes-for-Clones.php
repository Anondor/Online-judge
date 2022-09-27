<?php
session_start();

$_SESSION['link']="https://codeforces.com/problemset/problem/1415/F";

$_SESSION['problemname']="Cakes for Clones";
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
       <dd class="name">Cakes for Clones</dd>
       <br>
       <div class="limit">
         <dd> Time limit: 3 seconds</dd>
         <dd>Memory limit: 256 megabytes</dd>
       </div>
       

    </div>

    <div style="background-color:#F4F0FF; " class="quetion-body">
      <p>You live on a number line. You are initially (at time moment t=0) located at point x=0. There are n events of the following type: at time ti a small cake appears at coordinate xi. To collect this cake, you have to be at this coordinate at this point, otherwise the cake spoils immediately. No two cakes appear at the same time and no two cakes appear at the same coordinate.</p>


      <p>You can move with the speed of 1 length unit per one time unit. Also, at any moment you can create a clone of yourself at the same point where you are located. The clone can't move, but it will collect the cakes appearing at this position for you. The clone disappears when you create another clone. If the new clone is created at time moment t, the old clone can collect the cakes that appear before or at the time moment t, and the new clone can collect the cakes that appear at or after time moment t.</p>


      <p>Can you collect all the cakes (by yourself or with the help of clones)?</p>

      <div class="input"><p>Input</p></div>

      <p>The first line contains a single integer n (1≤n≤5000) — the number of cakes.</p>
      <p>Each of the next n lines contains two integers ti and xi (1≤ti≤109, −109≤xi≤109) — the time and coordinate of a cake's appearance.</p>
      <p>All times are distinct and are given in increasing order, all the coordinates are distinct.</p>

      
      

      <div class="input"><p>Output</p></div>

      <p>Print "YES" if you can collect all cakes, otherwise print "NO".</p>


      <div class="input-sample">Sample</div><br>


      <div class="input-sample">Input</div>
      <div style="margin: 0 10px;" class="text-input">
      <pre>
        3
        2 2
        5 5
        6 1
      </pre>  
      </div>

      <div class="input-sample">Output</div>
       <div style="margin: 0 10px;" class="text-input">
         
        <pre>
         YES
        </pre>
       </div>
       <br>
       <div class="input-sample">Input</div>
      <div style="margin: 0 10px;" class="text-input">
      <pre>
        3
        2 2
        5 5
        6 1
      </pre>  
      </div>

      <div class="input-sample">Output</div>
       <div style="margin: 0 10px;" class="text-input">
        <pre>
         YES
        </pre>
       </div>
       <br>
       <div class="input-sample">Input</div>
      <div style="margin: 0 10px;" class="text-input">
      <pre>
       3
       2 1
       5 5
       6 0
      </pre>  
      </div>

      <div class="input-sample">Output</div>
       <div style="margin: 0 10px;" class="text-input">
        <pre>
         NO
        </pre>
       </div>
       <br>
       
       <div class="input-sample">Note</div>
       <dd>
        In the first example you should start moving towards 5 right away, leaving a clone at position 1 at time moment 1, and collecting the cake at position 2 at time moment 2. At time moment 5 you are at the position 5 and collect a cake there, your clone collects the last cake at time moment 6.

       </dd>
       <br>
       <dd>
       In the second example you have to leave a clone at position 0 and start moving towards position 5. At time moment 1 the clone collects a cake. At time moment 2 you should create a new clone at the current position 2, it will collect the last cake in future. You will collect the second cake at position 5.
       </dd>
       <br>
      <dd>
      In the third example there is no way to collect all cakes.
      </dd>

       

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