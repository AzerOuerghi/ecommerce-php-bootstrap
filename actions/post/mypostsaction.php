<?php
require('actions/database.php');
$getallpost= $bdd->prepare('SELECT * FROM post where author_id=? order by id desc ');
$getallpost->execute(array($_SESSION['id']));
if ($getallpost->rowcount()==0){
    $error= "No Items For Sale Yet ! :( ";}

