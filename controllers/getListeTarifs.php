<?php
include '../configuration/configuration.php';
include '../models/tarif.php';

function getListeTarifs(){
    return tarif::getTarifs();// on apellle la methode avec deux double point (::)
}
?>