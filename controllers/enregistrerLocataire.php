<?php

include '../configuration/configuration.php';
include '../models/locataire.php';

$numLocataire = $_POST['numLocataire'];
$nomLocataire = $_POST['nomLocataire'];
$prenomLocataire = $_POST['prenomLocataire'];
$adresse1Locataire = $_POST['adresse1Locataire'];
$adresse2Locataire = $_POST['adresse2Locataire'];
$codePostalLocataire = $_POST['codePostalLocataire'];
$villeLocataire = $_POST['villeLocataire'];
$numTel1Locataire = $_POST['numTel1Locataire'];
$numTel2Locataire = $_POST['numTel2Locataire'];
$emailLocataire = $_POST['emailLocataire'];

$locataire = new Locataire ($numLocataire, $nomLocataire, $prenomLocataire, $adresse1Locataire,$adresse2Locataire,$codePostalLocataire,$villeLocataire,$numTel1Locataire,$numTel2Locataire,$emailLocataire);
if ($locataire -> enregistrerLocataire()){
    header("Location:../views/enregistrerLocataire.php");
}