<?php



include_once('functions.php');

if(isset($_POST["submit_add"]) &&
!empty($_POST['title'])  &&
!empty($_POST['content']) 
) 
{
    
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);
    $user_id =  get_id_by_username($_SESSION['mail']);
    add($user_id,$title, $content,);
}