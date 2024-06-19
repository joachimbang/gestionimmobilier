<?php
include '../configuration/configuration.php';
include '../models/contrat.php';

function getListeContrats(){
    return contrat::getContrats();// on apellle la methode avec deux double point (::)
}

function getContratResilie(){
    return contrat::getContratResilie();
}
?>