<?php
session_start();
      $value=$_SESSION['msg'];
      $value2=$_SESSION['color'];
      ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
.button {
      background-color: #051046;
      color: white;
      padding: 24px 38px;
      font-size: 20px;
      cursor: pointer;
      text-align: center;
      border-radius: 15%;
}
h1 {
  font-weight: bold;
  font-size: 7ch;
  color: <?=$value2?>
}
.button:hover{
    background-color: <?=$value2?>;
    border: none;
}

</style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="style.css" rel="stylesheet" />
    <title>XYZ Classes</title>
    <link rel="icon" href="logo.jpg">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <img style='height: 70px; width: 70px; position: absolute; top: 0px; right: 0px;' src="logo.jpg" width="100" 
    height="100">
    <br><br><br><br>
    <center>
    <div class="a"><h1 style="color:<?=$value2?>"><?=$value?></h1></div>
    <form action="index.html">
    <br><br>
    <button type="submit" class="button">Continue</button>
  </form></center>
    </body>
</html>