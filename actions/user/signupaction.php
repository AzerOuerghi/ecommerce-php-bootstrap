<?php 
session_start();

require('actions/database.php');

//validiation formulaire 
 if (isset($_POST['valide'])){
     //verfier tous les champs 
if (!empty($_POST['namee'])  AND !empty($_POST['password']) AND!empty($_POST['email'])){
 //donnee user 
    $user_email=htmlspecialchars($_POST['email']);
 $user_name=htmlspecialchars($_POST['namee']);
 $user_last=htmlspecialchars($_POST['last']);
 $user_password=password_hash($_POST['password'],PASSWORD_DEFAULT);
 $user_phone=htmlspecialchars($_POST['phone']);


 $typeFile = $_FILES['photo']['type'];
 $sizeFile = $_FILES['photo']['size'];
 $errFile = $_FILES['photo']['error'];
 $fileName = $_FILES['photo']['name'];
 $fileTmpName = $_FILES['photo']['tmp_name']; 
$filenamenew=uniqid('',true).".jpg";




 $extensions = ['png', 'jpg', 'jpeg', 'gif'];
        // Type d'image
        $type = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'];
        // On récupère
        $extension = explode('.', $fileName);
        // Max size
        $max_size = 10000000;


        
        // On vérifie que le type est autorisés
        if(in_array($typeFile, $type))
        {
            // On vérifie que il n'y a que deux extensions
            if(count($extension) <= 2 && in_array(strtolower(end($extension)), $extensions))
            {
                // On vérifie le poids de l'image
                if($sizeFile < $max_size)
                {
                    $path = 'uploads/'.$filenamenew;
                    move_uploaded_file($fileTmpName,$path);


 //check exist 
 $checkifuserexixsts= $bdd->prepare('SELECT email from users where email=?  ');
$checkifuserexixsts->execute(array($user_email));
if ($checkifuserexixsts->rowcount()==0){
$insetuseronwebsite = $bdd-> prepare('INSERT INTO  users( name,last,email,mdp,photo,phone) value (?,?,?,?,?,?)' );
$insetuseronwebsite->execute(array($user_name,$user_last,$user_email,$user_password,$path,$user_phone));


$getuserinfo= $bdd->prepare('SELECT id,email,name,last from users where email=? ');
$getuserinfo->execute(array($user_email,$user_name,$user_last));
$userinfo=$getuserinfo->fetch();
 $_SESSION['auth']= true;
 $_SESSION['id']=$userinfo['id'];
 $_SESSION['email']=$userinfo['email'];
 $_SESSION['namee']=$userinfo['namee'];
 $_SESSION['last']=$userinfo['last'];

session_destroy();
header('location: ../../login.php');
}


else{
    $errorMsg="user already exists";
}

}else{
        $errorMsg= "veillez vompleter tous les champ ";
 } }       }
 else 
 {
     $errorMsg= "Fichier trop lourd ou format incorrect";
 }
}
else 
{
 $errorMsg= "Extension failed";
}
}   
