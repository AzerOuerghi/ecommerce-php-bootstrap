<?php 
require('actions/database.php');

//validiation formulaire 
 if (isset($_POST['valide'])){
     //verfier tous les champs 
if (!empty($_POST['subject'])  AND !empty($_POST['message'])){
 //donnee user 
    $new_post_subject=htmlspecialchars($_POST['subject']);
 $new_post_message=nl2br(htmlspecialchars($_POST['message']));


 
$editpostonwebsite = $bdd-> prepare('UPDATE   post set subject=? ,message=? WHERE id=?' ) ;
$editpostonwebsite->execute(array($new_post_subject,$new_post_message,$idofpost));
header ('Location: myposts.php ');


}
else{
    $errorMsg="bien piblier";
}}else{
     $errorMsg= "veillez vompleter tous les champ ";
 }