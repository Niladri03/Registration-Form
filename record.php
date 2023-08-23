<?php
header("Location:message.php");
$a=$_POST['fname'];
$b=$_POST['number'];
$c=$_POST["wp_number"];
$d=$_POST["email"];
$e=$_POST["address"];
$f=$_POST["pin"];
$g=$_POST["sub"];
$array=array("9038855169","1111111111","2222222222","9038855162");

if(in_array($b,$array))
{
    $msg= "Already Registered!!";
    $color="red";
}
else{
    $msg= "Registration Successful!!";
    $color="green";
}
session_start();
$_SESSION['msg']=$msg;
$_SESSION['color']=$color;
exit;
?>