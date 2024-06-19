<?php

include '../configuration/configuration.php';
include '../models/proprietaire.php';

$numProprietaire = $_POST['numProprietaire'];
$nomProprietaire = $_POST['nomProprietaire'];
$prenomProprietaire = $_POST['prenomProprietaire'];
$adresse1Proprietaire = $_POST['adresse1Proprietaire'];
$adresse2Proprietaire = $_POST['adresse2Proprietaire'];
$codePostalProprietaire = $_POST['codePostalProprietaire'];
$villeProprietaire = $_POST['villeProprietaire'];
$numTel1Proprietaire = $_POST['numTel1Proprietaire'];
$numTel2Proprietaire = $_POST['numTel2Proprietaire'];
$caCumuleProprietaire = $_POST['caCumuleProprietaire'];
$emailProprietaire = $_POST['emailProprietaire'];

$proprietaire = new Proprietaire ($numProprietaire, $nomProprietaire, $prenomProprietaire, $adresse1Proprietaire,$adresse2Proprietaire,$codePostalProprietaire,$villeProprietaire, $numTel1Proprietaire, $numTel2Proprietaire, $caCumuleProprietaire,$emailProprietaire);
if ($proprietaire -> enregistrerPropietaire()){
    header("Location:../views/enregistrerProprietaire.php");
}