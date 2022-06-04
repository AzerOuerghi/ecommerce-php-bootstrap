<?php 
try{

 
   $bdd=new PDO('mysql:host=localhost:3307;dbname=forum;charset=utf8;','root','root');
}catch(Exception $e){
    die(" ube erreur a ete trouver ". $e->getMessage()  );
}
  