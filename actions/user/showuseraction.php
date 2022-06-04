<?php 
require('actions/database.php');

$checkifuserexist= $bdd->prepare('SELECT author_id FROM post where id=? ');
$checkifuserexist->execute(array($idofpost));
if ($checkifuserexist->rowCount()>0){
    $userinfoo = $checkifuserexist->fetch();
$user_id= $userinfoo['author_id'];

$checkifuserexistt= $bdd->prepare('SELECT * FROM users where id=? ');
$checkifuserexistt->execute(array($user_id));
if ($checkifuserexistt->rowCount()>0){
    $userinfo = $checkifuserexistt->fetch();
        $username=$userinfo['name'];
        $userlast=$userinfo['last'];
        $userphone=$userinfo['phone'];
        $userphoto=$userinfo['photo'];

     
    } }

