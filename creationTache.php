<?php
require_once 'connexion.php';

$requete=$bdd->prepare('INSERT INTO taches(id, tache) value("'. $_POST['id'] .'" , "'.$_POST['tache'] .'")'); 
$requete->execute();
header('location: index.php');
