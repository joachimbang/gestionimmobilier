<?php

include '../configuration/configuration.php';
include '../models/tarif.php';

$codeTarif = $_POST['codeTarif'];
$prixSemHS = $_POST['prixSemHS'];
$prixSemBS = $_POST['prixSemBS'];

$tarif = new Tarif ($codeTarif,$prixSemHS,$prixSemBS);
if ($tarif -> enregistrerTarif()){
    header("Location:../views/enregistrerTarif.php");
}