<?php
require('../database.php');

//Vérifier si l'id est rentré en paramètre dans l'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //L'id de la post en paramète
    $idOfThepost = $_GET['id'];

    //Vérifier si la post existe
    $checkIfpostExists = $bdd->prepare('SELECT author_id FROM post WHERE id = ?');
    $checkIfpostExists->execute(array($idOfThepost));

    if($checkIfpostExists->rowCount() > 0){



            //Supprimer la post en fonction de son id rentré en paramètre
            $deleteThispost = $bdd->prepare('DELETE FROM post WHERE id = ?');
            $deleteThispost->execute(array($idOfThepost));

            //Rediriger l'utilisateur vers ses post
            header('Location: ../../myposts.php');

        

    }else{
        echo "Aucune post n'a été trouvée";
    }
}

else{
    echo "Aucune post n'a été trouvée";
}
