<?php 
require('actions/database.php');

//validiation formulaire 
 if (isset($_POST['valide'])) {
     //verfier tous les champs 
if (!empty($_POST['content'])  ){
 //donnee user 
    $respond_content=htmlspecialchars($_POST['content']);
 $respond_author_id=$_SESSION['id'];
 $respond_author_name=$_SESSION['name'];

 
$insetpostonwebsite = $bdd-> prepare('INSERT INTO  respond( content,author_id,author_name,post_id) value (?,?,?,?)' );
$insetpostonwebsite->execute(array($respond_content,$respond_author_id,$respond_author_name,$idofpost));


}}
    