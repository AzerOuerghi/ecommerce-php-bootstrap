<?php 
require('actions/database.php');

//validiation formulaire 
 if (isset($_POST['valide'])){
     //verfier tous les champs 
if (!empty($_POST['subject'])  AND !empty($_POST['message'])){
 //donnee user 
    $post_subject=htmlspecialchars($_POST['subject']);
    $post_price=htmlspecialchars($_POST['price']);
    $post_country=htmlspecialchars($_POST['Country']);

 $post_message=nl2br(htmlspecialchars($_POST['message']));
 $post_date= date('d/m/Y H:i');
 $post_author_id=$_SESSION['id'];
 $post_author_name=$_SESSION['name'];


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

 
$insetpostonwebsite = $bdd-> prepare('INSERT INTO  post( subject,message,author_id,author_name,datep,photo,price,location) value (?,?,?,?,?,?,?,?)' );
$insetpostonwebsite->execute(array($post_subject,$post_message,$post_author_id,$post_author_name,$post_date,$path,$post_price,$post_country));

header ('Location: myposts.php ');

}
else{
    $errorMsg="veillez vompleter tous les champ";
}}else{
     $errorMsg= "veillez vompleter tous les champ ";
 }      }
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
else 
{
$errorMsg="Type non autorisé";
}