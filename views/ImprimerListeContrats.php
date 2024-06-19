<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enregiatrement du Proprietaire</title>
    <?php include_once "../includes/include1.php"?>
    <?php include_once "../includes/include2.php"?>
</head>
<body>
<script>
        function printDiv(divcontrat) {
            var printContents = document.getElementById(divcontrat).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
    <?php include_once "../includes/header.php"?>
    <?php include_once "../includes/header.php"?>
    <?php include_once "../controllers/getListeContrats.php" ?>
    <?php include_once "../controllers/getListeLocataires.php" ?>
    <?php include_once "../controllers/getListeAppartements.php" ?>
    
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6"><br><br><p>Pour imprimer cette liste cliquer ici <button class="btn btn-block" style="background-color: rgb(8, 134, 238); color:white; width:200px ; margin-left: auto; margin-right: auto;" onclick="printDiv('divcontrat')">Imprimer</button></p></div>
        <div class="col-3"></div>
    </div>
    <div id="divcontrat" class="mx-3">
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