<?php 
session_start(); 
 
if (isset($_POST['numContrat'])) { 
    $numContrat = $_POST['numContrat']; 
 
    if (!empty($numContrat)) { 
        $_SESSION['numContrat'] = $numContrat; 
        header("Location: ../views/ModifierContrat.php"); 
        exit(); // Ajout de la fonction exit() pour terminer le script après la redirection
    } 
} 
