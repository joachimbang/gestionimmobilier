<?php

include '../configuration/configuration.php';
include '../models/appartement.php';


function getListeAppartements(){
     return Appartement :: getAppartements();
}
 