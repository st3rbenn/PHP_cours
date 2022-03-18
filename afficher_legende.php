<?php

require 'database/legendeRequest.php';

include 'layout/header.php';

$id      = htmlentities($_GET['id']);
$legende = getLegendeById($dbConnect, $id);

if (!$legende) {
    echo '<div class="alert alert-danger"> La ressource demandée n\'existe pas!</div>';
} else {
    echo $legende['nom'];
}

include 'layout/footer.php';
