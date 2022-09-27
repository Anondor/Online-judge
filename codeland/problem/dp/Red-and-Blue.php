<?php
session_start();

$_SESSION['link']="https://codeforces.com/problemset/problem/1469/B";

$_SESSION['problemname']="Red and Blue";
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
       <dd class="name">Red and Blue</dd>
       <br>
       <div class="limit">
         <dd> Time limit: 2 seconds</dd>
         <dd>Memory limit: 512 megabytes</dd>
       </div>
       

    </div>

    <div style="background-color:#F4F0FF; " class="quetion-body">
      <p>Monocarp had a sequence a consisting of n+m integers a1,a2,…,an+m. He painted the elements into two colors, red and blue; n elements were painted red, all other m elements were painted blue. </p>
      <p>After painting the elements, he has written two sequences r1,r2,…,rn and b1,b2,…,bm. The sequence r consisted of all red elements of a in the order they appeared in a; similarly, the sequence b consisted of all blue elements of a in the order they appeared in a as well.</p>
      <p>Unfortunately, the original sequence was lost, and Monocarp only has the sequences r and b. He wants to restore the original sequence. In case there are multiple ways to restore it, he wants to choose a way to restore that maximizes the value of</p>
      <p>f(a)=max(0,a1,(a1+a2),(a1+a2+a3),…,(a1+a2+a3+⋯+an+m))</p>
      <p>Help Monocarp to calculate the maximum possible value of f(a).</p>

      <div class="input"><p>Input</p></div>

      <p>The first line contains one integer t (1≤t≤1000) — the number of test cases. Then the test cases follow. Each test case consists of four lines.</p>
      <p>The first line of each test case contains one integer n (1≤n≤100). </p>
      <p>The second line contains n integers r1,r2,…,rn (−100≤ri≤100).</p>
      <p>The third line contains one integer m (1≤m≤100).</p>
      <p>The fourth line contains m integers b1,b2,…,bm (−100≤bi≤100).</p>

      <div class="input"><p>Output</p></div>
      <p>For each test case, print one integer — the maximum possible value of f(a). </p>
      <div class="input-sample">Sample</div>
      <div class="input-sample">Input</div>
      <div style="margin: 0 10px;" class="text-input">
        <div> 4</div>
        <div> 4</div>
        <div> 6 -5 7 -3</div>
        <div> 3</div>
        <div> 2 3 -4</div>
        <div> 2</div>
        <div> 1 1</div>
        <div> 4</div> 

        <div> 10 -3 2 2</div>
        <div> 5</div>
        <div> -1 -2 -3 -4 -5</div>
        <div> 5</div>
        <div> -1 -2 -3 -4 -5</div>
        <div> 1</div>
        <div> 0</div>
        <div> 1</div> 
        <div> 0</div>



      </div>
      <div class="input-sample">Output</div>
       <div style="margin: 0 10px;" class="text-input">
        <div> 13 </div>
        <div> 13</div>
        <div> 0 </div>
        <div> 0</div>
       </div>
       <div class="input-sample">Note</div>
       <dd>In the explanations for the sample test cases, red elements are marked as bold. </dd>
       <br>
       <dd>In the first test case, one of the possible sequences a is [6,2,−5,3,7,−3,−4].</dd>
       <dd>In the second test case, one of the possible sequences a is [10,1,−3,1,2,2].</dd>
       <dd>In the third test case, one of the possible sequences a is [−1,−1,−2,−3,−2,−4,−5,−3,−4,−5].</dd>
       <dd>In the fourth test case, one of the possible sequences a is [0,0].</dd>
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