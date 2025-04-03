<?php

include_once('functions.php');

if(isset($_POST["submit_update"]) &&
!empty($_POST['title'])  &&
!empty($_POST['content']) 
) 
{
    
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);
    $user_id =  get_id_by_username($_SESSION['mail']);
    $id = htmlspecialchars($_POST['id']);
    update_article($id,$title,$content,$user_id);
}