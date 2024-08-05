<?php
session_start();
if(isset($_SESSION['hamrog_userid']))
{
    $_SESSION['hamrog_userid']=NULL;
    unset($_SERVER['REQUEST_METHOD']);
}
 

 header("Location:login.php");
 die;
 ?>
