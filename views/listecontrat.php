<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enregiatrement du Proprietaire</title>
    <?php include_once "../includes/include1.php"?>
    <?php include_once "../includes/include2.php"?>
</head>
<body>
    <?php include_once "../includes/header.php"?>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6"></div>
        <div class="col-3"></div>
    </div>
    <div class="mx-3">
        <h2 class="text-center"> LES PROPRIETAIRES</h2>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Num du Contrat</th>
                    <th>Date de creation</th>
                    <th>Etat</th>
                    <th>Date debut du Contrat</th>
                    <th>Date fin du Contrat</th>
                    <th>Appartement</th>
                    <th>Locataire</th>
                </tr>
            </thead>
            <?php
                $contrats = getListeContrats();
                    for($i = 0; $i < count($contrats); $i++){
                        echo "<tr>";
                        echo "<td scope = \"row\">".$contrats[$i]->getNumcontrat()."</td>";
                        echo "<td scope = \"row\">".$contrats[$i]->getDatecreation()."</td>";
                        echo "<td scope = \"row\">".$contrats[$i]->getEtat()."</td>";
                        echo "<td scope = \"row\">".$contrats[$i]->getDatedebut()."</td>";
                        echo "<td scope = \"row\">".$contrats[$i]->getDatefin()."</td>";
                        echo "<td scope = \"row\">"."<strong>Num :</strong>".$contrats[$i]->getNumlocation()."<strong> Categorie :</strong>".$contrats[$i]->getCategorieAppartement()."<strong> Type :</strong>".$contrats[$i]->getTypeAppartement()."</td>";
                        echo "<td scope = \"row\">".$contrats[$i]->getNomLocataireContrat()."</td>";
                        
                    }
            ?>
        </table>
    </div>
</body>

</html>