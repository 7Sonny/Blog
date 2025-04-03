<?php

include_once('functions.php');

if(isset($_POST["addcomment"]) && 
!empty($_POST['user'])
&& !empty($_POST['commentaire']))
{
    
    $user = htmlspecialchars($_POST['user']);
    $comment = htmlspecialchars($_POST['commentaire']);
    login($mail,$password);
    add_comment($id,$user,$comment);
}
