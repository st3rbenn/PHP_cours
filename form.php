<?php

require_once 'utils.php';
require_once 'database/legendeRequest.php';

include 'layout/header.php';

session_start();

$legende['nom']        = formaterNom(htmlentities($_POST['nom']));
$legende['profession'] = htmlentities($_POST['profession']);
$legende['pv']         = htmlentities($_POST['pv']);
$legende['atk']        = htmlentities($_POST['atk']);

$isCreated = createLegende($dbConnect, $legende);

if ($isCreated) {
    $_SESSION['message'] = 'Le personnage a bien été créé !';
    header('location: /');
} else {
    echo '<div class="alert alert-danger">Un erreur est survenue lors de l\'enregistrement</div>';
};