<?php

include '../configuration/configuration.php';
include '../models/proprietaire.php';


function getListeProprietaires(){
     return Proprietaire :: getProprietaire();
}
?>