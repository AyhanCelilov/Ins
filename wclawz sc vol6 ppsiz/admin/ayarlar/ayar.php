<?php
 require_once('ayarlar/sifre.php');
session_start();
if(!isset($_SESSION[$sifre])){
    header("Refresh: 0; url=index.php"); 
    exit();
}
?>