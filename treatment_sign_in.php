<?php

include_once('functions.php');

if(isset($_POST['sign_in']) && 
!empty($_POST['mail'])
&& !empty($_POST['password']))
{
    $mail = htmlspecialchars($_POST['mail']);
    $password = htmlspecialchars($_POST['password']);
    sign_in($mail,$password);
   // header("Location: account.php");
   
}
else{
    header("Location: sign_in.php");
   
}
