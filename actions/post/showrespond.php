<?php
require('actions/database.php');
$getallresponse= $bdd->prepare('SELECT * FROM respond where post_id=?  order by id desc ');
$getallresponse->execute(array($idofpost));