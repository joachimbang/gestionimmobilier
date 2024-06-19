<?php

include '../configuration/configuration.php';
include '../models/appartement.php';

$numLocation = $_POST['numLocation'];
$categorie = $_POST['categorie'];
$typeAppartement = $_POST['typeAppartement'];
$nbPersonne = $_POST['nbPersonne'];
$codeTarif = $_POST['codeTarif'];
$adresselocation = $_POST['adresselocation'];
$photo = $_FILES['photo']['name'];$photo = '';
if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
    $photo = $_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'], "../image/" . $photo);
}
$equipement = $_POST['equipement'];
$numProprietaire = $_POST['numProprietaire'];
$appartement = new Appartement($numLocation, $categorie, $typeAppartement, $nbPersonne, $codeTarif, $adresselocation, $photo, $equipement, $numProprietaire);
if ($appartement->enregistrerAppartement()) {
    header("Location:../views/enregistrerAppartement.php");
    exit(); // Ajout de la fonction exit() pour terminer le script après la redirection
}