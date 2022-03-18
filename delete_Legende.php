<?php

require_once 'database/legendeRequest.php';

include 'layout/header.php';

$id = htmlentities($_GET['id']);
$legende = deleteLegende($dbConnect, $id);

if (!$legende){
  header('Location: /');
  echo '<div class="alert alert-danger">Erreur de suppression</div>';
}else{
  header('Location: /');
  echo '<div class="alert alert-success alert-dismiss"> Personnage supprimez </div>';
}
