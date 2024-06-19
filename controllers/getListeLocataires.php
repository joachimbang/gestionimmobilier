<?php

include '../configuration/configuration.php';
include '../models/locataire.php';


function getListeLocataires(){
     return Locataire :: getLocataires();
}
?>