<?php

include '../configuration/configuration.php';
// include_once '../models/contrat.php';
include_once ("getListeContrats.php");

$numContrat = $_POST['numContrat'];
    $contrats = getListeContrats();

    foreach ($contrats as $contrat) {
        if(($contrat->getnumContrat()) == $numContrat) {

            if($contrat->resilierContrat()) {
                header("Location:../views/ResilierContrat.php");
            }
        }
    }