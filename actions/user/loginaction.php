<?php 
session_start();
require('actions/database.php');

//validiation formulaire 
 if (isset($_POST['valide'])){
     
 //donnee user 
    $user_email=htmlspecialchars($_POST['email']);
 $user_password=htmlspecialchars($_POST['password'],PASSWORD_DEFAULT);
//verifier si lutilasteu exist 
$checkifuserexists = $bdd->prepare ('SELECT * from users where email=? ');
$checkifuserexists->execute(array($user_email));
//verfifer mdp
if ($checkifuserexists->rowcount()>0){
    $userinfo=$checkifuserexists->fetch();
     if(password_verify($user_password,$userinfo['mdp'])){
        $_SESSION['auth']= true;
        $_SESSION['id']=$userinfo['id'];
        $_SESSION['email']=$userinfo['email'];
        $_SESSION['name']=$userinfo['name'];
        $_SESSION['last']=$userinfo['last'];
        $_SESSION['phone']=$userinfo['phone'];
        $_SESSION['photo']=$userinfo['photo'];




     }else{
         $errorMsg="Wrong Password";
     }

}else{
    $errorMsg="Wrong Email";
} }
 