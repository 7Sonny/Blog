<?php

include_once('functions.php');

if(isset($_POST['login']) && 
!empty($_POST['mail'])
&& !empty($_POST['password']))
{
    
    $mail = htmlspecialchars($_POST['mail']);
    $password = htmlspecialchars($_POST['password']);
    login($mail,$password);
}
else{
    header("Location: login.php");
   
}
