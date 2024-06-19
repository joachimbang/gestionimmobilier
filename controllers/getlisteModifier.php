<?php
include '../configuration/configuration.php';
include '../models/contrat.php';

function getListeContrats(){
    return contrat::getContrats();// on appelle la methode avec deux double point (::)
}

function getContratResilie(){
    return contrat::getContratResilie();
}
?>