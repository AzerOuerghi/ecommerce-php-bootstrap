<?php
require('actions/database.php');

$getallpost=$bdd->query('SELECT * FROM post ORDER by id DESC LIMIT 1,12');
if  (isset($_GET['search']) AND !empty($_GET['search'])){
    $userserch= $_GET['search'];
    $getallpost=$bdd->query('SELECT * FROM post where subject LIKE "%'.$userserch.'%" OR message LIKE "%'.$userserch.'%" ORDER BY id DESC ');
    $check4=$getallpost->rowcount();
    

}


