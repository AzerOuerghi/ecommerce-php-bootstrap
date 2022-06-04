<?php 
require('actions/database.php');
if  (isset($_GET['id']) AND !empty($_GET['id'])){
$idofuser= $_GET['id'];
$checkifuserexist=$bdd->prepare('SELECT name FROM users where id=?');
$checkifpostexist->execute(array($idofuser));
if ($checkifpostexist->rowCount()>0){
    $userinfo = $checkifuserexist->fetch();
        $username=$username['name'];
$getallpost =$bdd->prepare('SELECT * FROM post where id_author=?');
$getallpost ->execute(array($idofuser));

}}else{
    echo'no user found' 
}