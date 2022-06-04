<?php 
require('actions/database.php');
if  (isset($_GET['id']) AND !empty($_GET['id'])){
$idofpost= $_GET['id'];
$checkifpostexist=$bdd->prepare('SELECT * FROM post where id=?');
$checkifpostexist->execute(array($idofpost));
if ($checkifpostexist->rowCount()>0){
    $postinfo = $checkifpostexist->fetch();
        $postsubject=$postinfo['subject'];
        $postmessage=$postinfo['message'];
        $postdate=$postinfo['datep'];
        $postauthor=$postinfo['author_name'];
        $postauthorID=$postinfo['author_id'];
        $postprice=$postinfo['price'];
        $postphoto=$postinfo['photo'];
        $postlocation=$postinfo['location'];


    }
}else{
    $errorMsg="no post found" ;
}
