<?php
include '../configuration/configuration.php';
include '../models/contrat.php';

function getListeResilie(){
    return Contrat::getContratResilie();// on apellle la methode avec deux double point (::)
}
?>