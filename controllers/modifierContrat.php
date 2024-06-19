<?php
if(isset($_POST['enregistrer'])&&!empty($numContrat)){
    //update dateCreation
    // if(!empty($dateCreation)){
        // mysqli_query($conn,"UPDATE contrat SET dateCreation='$dateCreation' WHERE numContrat='$numContrat'");
        // }$mess1="<b>Modification éffectuée avec succès!</b>";
    //update etatContrat
    if(!empty($etatContrat)){
        mysqli_query($conn,"UPDATE contrat SET etatContrat='$etatContrat' WHERE numContrat='$numContrat'");
        }$mess1="<b>Modification éffectuée avec succès!</b>";
    //update dateCreation du pere
    if(!empty($dateDebut)){
        mysqli_query($conn,"UPDATE contrat SET dateDebut='$dateDebut' WHERE numContrat='$numContrat'");
        }$mess1="<b>Modification éffectuée avec succès!</b>";
    //update dateCreation de la mere
    if(!empty($dateFin)){
        mysqli_query($conn,"UPDATE contrat SET dateFin='$dateFin' WHERE numContrat='$numContrat'");
        }$mess1="<b>Modification éffectuée avec succès!</b>";
    //update lieu de naissance
    if(!empty($numLocation)){
        mysqli_query($conn,"UPDATE contrat SET numLocation='$numLocation' WHERE numContrat='$numContrat'");
        }$mess1="<b>Modification éffectuée avec succès!</b>";
    //update date de naissance
    if(!empty($numLocataire)){
        mysqli_query($conn,"UPDATE contrat SET numLocataire='$numLocataire' WHERE numContrat='$numContrat'");
        }$mess1="<b>Modification éffectuée avec succès!</b>";
    // if(!empty($age)){
        // mysqli_query($conn,"UPDATE contrat SET numLocataire='$age' WHERE numContrat='$numContrat'");
    // }
    //update date d'arrive
    }

    header("Location:../views/ModifierContrat.php");
