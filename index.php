<?php

require_once 'utils.php';
require_once 'database/legendeRequest.php';

include 'layout/header.php';

session_start();

$legendesListe = getListeLegende($dbConnect);

?>


    <h1>Legendes Arthouriennes</h1>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Profession</th>
            <th scope="col">Points de vie</th>
            <th scope="col">Points d'attaque</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($legendesListe as $legende): ?>
            <tr class="table-active">
                <th scope="row"><?=$legende['id']?></th>
                <td><?= $legende['nom'] ?></td>
                <td><?= $legende['profession'] ?></td>
                <td><?= $legende['pv'] ?></td>
                <td><?= $legende['atk'] ?></td>
                <td>
                    <a href="/afficher_legende.php?id=<?= $legende['id'] ?>"><span class="fa-solid fa-search btn btn-info"></span></a>
                    <a href="/update_legende.php"><span class="fa-solid fa-pencil btn btn-warning"></span></a>
                    <a href="/delete_legende.php?id=<?= $legende['id'] ?>"><span class="fa-solid fa-trash btn btn-danger"></span></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <hr>

    <?= require_once('formulaire.php')?>

<?php
include 'layout/footer.php';


// Sortir le formulaire de la page index pour le mettre sur une page spécifique. 🏆🏆🏆🏆🏆
// Ajouter un message qui valide ou non le déroulement de la création du personnage.🏆🏆🏆🏆🏆
// Créer un formulaire de modification... ou chercher à réutiliser celui de la création.
// Ajouter une table pour gérer les professions via une jointure et modifier votre code en conséquence.
// Ajouter la navigation dans votre menu.