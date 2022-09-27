<?php
session_start();

$_SESSION['link']="https://codeforces.com/problemset/problem/1338/E";

$_SESSION['problemname']="JYPnation";
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
       <dd class="name">JYPnation</dd>
       <br>
       <div class="limit">
         <dd> Time limit: 2 seconds</dd>
         <dd>Memory limit: 1024 megabytes</dd>
       </div>
      

    </div>

    <div style="background-color:#F4F0FF; " class="quetion-body">

      <p>Due to the success of TWICE, JYP Entertainment has earned countless money and emerged as the biggest entertainment firm by market capitalization. Therefore, the boss, JYP, has decided to create a new nation and has appointed you to provide a design diagram.</p>
      <p>The new nation consists of n cities and some roads between them. JYP has given some restrictions:</p>
      <ul>
        <li>To guarantee efficiency while avoiding chaos, for any 2 different cities A and B, there is exactly one road between them, and it is one-directional. There are no roads connecting a city to itself.</li>
        <li>The logo of rivaling companies should not appear in the plan, that is, there does not exist 4 distinct cities A,B,C,D , such that the following configuration occurs.</li>
      </ul>
      <img style="margin: 0 300px; height: 300px; width: 400px;" src="../image/YPnation_img1.PNG">
      <p>JYP has given criteria for your diagram. For two cities A,B, let dis(A,B) be the smallest number of roads you have to go through to get from A to B. If it is not possible to walk from A to B, dis(A,B)=614n. Then, the efficiency value is defined to be the sum of dis(A,B) for all ordered pairs of distinct cities (A,B).</p>
      <p>Note that dis(A,B) doesn't have to be equal to dis(B,A).</p>
      <p>You have drawn a design diagram that satisfies JYP's restrictions. Find the sum of dis(A,B) over all ordered pairs of cities (A,B) with A≠B.</p>
      <p>Note that the input is given in compressed form. But even though it is compressed, you'd better use fast input.</p>

      <div class="input"><p>Input</p></div>
      <p>The first line contains a single integer n (4≤n≤8000, n≡0(mod4)) — the number of cities.</p>
      <p>A binary matrix is encrypted in the following format. Each of n next lines contains n4 one-digit hexadecimal numbers (that is, these numbers can be represented either as digits from 0 to 9 or as uppercase Latin letters from A to F). Binary representation of each of these numbers denotes next 4 elements of the matrix in the corresponding row. For example, if the number B is given, then the corresponding elements are 1011, and if the number is 5, then the corresponding elements are 0101.</p>
      <p>After you obtain the decrypted binary matrix, the j-th character of the i-th row is 1 if the one-directional road between cities i and j is directed from i to j, and 0 otherwise. It is guaranteed that the graph satisfies the restrictions mentioned above.</p>

      <div class="input"><p>Output</p></div>
      <p>Output one integer, representing the sum of dis(A,B) over all ordered pairs of cities (A,B) with A≠B.</p>

      

      <div class="input-sample">Sample</div><br>


      <div class="input-sample">Input</div>
      <div style="margin: 0 10px;" class="text-input">
        <pre>
          4
          7
          2
          1
          4
        </pre>
      
      </div>

      <div class="input-sample">Output</div>
       <div style="margin: 0 10px;" class="text-input">
          <pre>
          7380
      </pre>
       </div>
       <br>
       <div class="input-sample">Input</div>
      <div style="margin: 0 10px;" class="text-input">
        <pre>
          8
          3F
          1F
          0C
          06
          03
          11
          18
        </pre>
      
      </div>

      <div class="input-sample">Output</div>
       <div style="margin: 0 10px;" class="text-input">
          <pre>
          88464
          </pre>
       </div>
       <br>
       
       <div class="input-sample">Note</div><br>
       The first example corresponds to the matrix:
       <p>0111<br>0010<br>0001<br>0100</p>
       <p>Which corresponds to this graph:</p>  <img style="margin: 0 300px; height: 300px; width: 400px;" src="../image/YPnation_img2.PNG">
    <p>dis(1,2)=dis(1,3)=dis(1,4)=dis(2,3)=dis(3,4)=dis(4,2)=1</p>
    <p>dis(2,4)=dis(4,3)=dis(3,2)=2</p>
    <p>dis(2,1)=dis(3,1)=dis(4,1)=2456</p>
    <dd>Therefore the answer for the diagram is 7380.</dd>
    
       

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