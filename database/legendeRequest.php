<?php

require_once 'database/dbconnect.php';

/**
 * @param PDO $dbConnect
 * @return array
 */
function getListeLegende(PDO $dbConnect): array
{
    // return $dbConnect->query('SELECT * FROM legende;')->fetchAll(PDO::FETCH_ASSOC);
    $query = $dbConnect->query('SELECT * FROM legende;');

    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getLegendeById(PDO $dbConnect, $id)
{
    $query = $dbConnect->prepare('SELECT * FROM legende WHERE id = :id;');
    $query->execute([':id' => $id]);

    return $query->fetch(PDO::FETCH_ASSOC);
}

function createLegende(PDO $dbConnect, array $legende): bool
{
    $query = $dbConnect->prepare(
        'INSERT INTO legende (nom, profession, pv, atk) VALUES (:nom, :profession, :pv, :atk);'
    );

    return $query->execute(
        [
            ':nom'        => $legende['nom'],
            ':profession' => $legende['profession'],
            ':pv'         => $legende['pv'],
            ':atk'        => $legende['atk']
        ]
    );
}


function deleteLegende($dbConnect, $legendID){
  $query = $dbConnect->prepare('DELETE FROM legende WHERE id = :legendID');
  return $query->execute([
    ':legendID' => $legendID
  ]);
}


function modifyLegende($dbConnect, $legende, $legendID){
  $query = $dbConnect->prepare('UPDATE legende SET nom = :nom, profession = :profession , pv = :pv, atk = :atk WHERE id = :id');

  return $query->execute([
    ':id' => $legendID,
      ':nom' => $legende['nom'],
      ':profession' => $legende['profession'],
      ':pv' => $legende['pv'],
      ':atk' => $legende['atk']
  ]);
}