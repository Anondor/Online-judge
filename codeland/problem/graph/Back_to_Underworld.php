<?php
session_start();

$_SESSION['link']="https://lightoj.com/problem/back-to-underworld";

$_SESSION['problemname']="Back to Underworld";
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
       <dd class="name">Back to Underworld</dd>
       <br>
       <div class="limit">
         <dd> Time limit: 2 seconds</dd>
         <dd>Memory limit: 64 MB</dd>
       </div>

    </div>

    <div style="background-color:#F4F0FF; " class="quetion-body">
      <p>The Vampires and Lykans are fighting each other to death. The war has become so fierce that, none knows who will win. The humans want to know who will survive finally. But humans are afraid of going to the battlefield. </p>
      <p>So, they made a plan. They collected the information from the newspapers of Vampires and Lykans. They found the information about all the dual fights. Dual fight means a fight between a Lykan and a Vampire. They know the name of the dual fighters, but don't know which one of them is a Vampire or a Lykan.</p>
      <p>So, the humans listed all the rivals. They want to find the maximum possible number of Vampires or Lykans.</p>

      <div class="input"><p>Input</p></div>

      <p>Input starts with an integer T (≤ 10), denoting the number of test cases.</p>
      <p>Each case contains an integer n (1 ≤ n ≤ 105), denoting the number of dual fights. Each of the next n lines will contain two different integers u v (1 ≤ u, v ≤ 20000) denoting there was a fight between u and v. No rival will be reported more than once. </p>

      <div class="input"><p>Output</p></div>
      <p>For each case, print the case number and the maximum possible members of any race. </p>
      <div class="input-sample">Sample</div>
      <div class="input-sample">Input</div>
      <div style="margin: 0 10px;" class="text-input">
        <div> 2</div>
        <div> 2</div>
        <div> 1 2</div>
        <div> 2 3</div>
        <div> 3</div>
        <div> 1 2</div>
        <div> 2 3</div>
        <div> 4 2</div> 
      </div>
      <div class="input-sample">Output</div>
       <div style="margin: 0 10px;" class="text-input">
        <div>Case 1: 2 </div>
        <div>Case 2: 3</div>
       </div>
       <div class="input-sample">Note</div>
       <dd>Dataset is huge, use faster I/O methods. </dd>




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