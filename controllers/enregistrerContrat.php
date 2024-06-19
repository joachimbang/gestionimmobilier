<?php

include '../configuration/configuration.php';
include '../models/contrat.php';

$numContrat = $_POST['numContrat'];
$dateCreation = $_POST['dateCreation'];
$etatContrat = $_POST['etatContrat'];
$dateDebut = $_POST['dateDebut'];
$dateFin = $_POST['dateFin'];
$numLocation = $_POST['numLocation'];
$numLocataire = $_POST['numLocataire'];

$contrat = new Contrat ($numContrat, $etatContrat, $dateCreation, $dateDebut, $dateFin ,$numLocation ,$numLocataire);
if ($contrat -> enregistrerContrat()){
    header("Location:../views/enregistrerContrat.php");
}