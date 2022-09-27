<?php
session_start();
$_SESSION['link']="https://lightoj.com/problem/fibsieves-fantabulous-birthday";
$_SESSION['problemname']="Fibsieve's Fantabulous Birthday";

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
       <dd class="name">Fibsieve's Fantabulous Birthday </dd>
       <br>
       <div class="limit">
         <dd> Time limit: 1 second</dd>
         <dd>Memory limit: 64 MB</dd>
       </div>
     

    </div>

    <div style="background-color:#F4F0FF; " class="quetion-body">
      <p>Fibsieve had a fantabulous (yes, it's an actual word) birthday party this year. He had so many gifts that he was actually thinking of not having a party next year. Among these gifts there was an N x N glass chessboard that had a light in each of its cells. When the board was turned on a distinct cell would light up every second, and then go dark. </p>
      <p>The cells would light up in the sequence shown in the diagram. Each cell is marked with the second in which it would light up. </p>

      <img style="margin: auto; height: 300px; width: 400px;" src="../image/Fibseivs.PNG">
      <p>In the first second the light at cell (1, 1) would be on. And in the 5th second the cell (3, 1) would be on. Now, Fibsieve is trying to predict which cell will light up at a certain time (given in seconds). Assume that N is large enough. </p>

      <div class="input"><p>Input</p></div>

      <p>Input starts with an integer T (≤ 200), denoting the number of test cases.</p>
      <p>Each case will contain an integer S (1 ≤ S ≤ 10^15) which stands for the time. </p>

      <div class="input"><p>Output</p></div>
      <p>For each case you have to print the case number and two numbers (x, y), the column and the row number.  </p>
      <div class="input-sample">Sample</div>
      <div class="input-sample">Input</div>
      <div style="margin: 0 10px;" class="text-input">
        <div> 3</div>
        <div> 8</div>
        <div> 20</div>
        <div> 25</div>
      </div>
      <div class="input-sample">Output</div>
       <div style="margin: 0 10px;" class="text-input">
        <div>Case 1: 2  3</div>
        <div>Case 2: 5 4</div>
        <div>Case 3: 1 5</div>
       </div>
     

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