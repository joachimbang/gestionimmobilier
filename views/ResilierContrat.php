<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modification du Contrat</title>
    <?php include_once "../includes/include1.php"?>
    <?php include_once "../includes/include2.php"?>
</head>
<body>
    <?php include_once "../includes/header.php"?>
    <?php include_once "../controllers/getListeContrats.php"?>
    <?php include_once "../controllers/ResilierContrat.php" ?>



    <div class="text-center"><h1>RESILIER UN CONTRAT</h1><hr></div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
        <h2 class="text-center">Veuillez saisir les differents Parametres</h2>
            <form action="../controllers/resilierContrat.php" method="POST">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                    <label for="" class="form-label">Contrat</label>
                        <select name="numContrat" class="form-control" required>
                            <option >choisissez le contrat</option>
                            <?php
                               foreach($contrats = getListeContrats() as $contrat){
                                if(($contrat->getEtat()) == 'En cours'){
                                    echo "<option value = ".$contrat->getNumContrat().">"."Num : ".$contrat->getEtat()." Etatcontrat :".$contrat->getDatecreation()." Datecreation :".$contrat->getDatedebut()." Datedebut :".$contrat->getDatefin()."</option>";
                                }
                                         
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <button type="submit" name="submit" value="Envoyer" class="btn btn-block" style="background-color: rgb(8, 134, 238); color:white; width:200px ; margin-left: auto; margin-right: auto;">Resilier</button>
                </div>
                <div class="col-4"></div>
            </div>
            </form>
            <br>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="mx-2">
        <h2 class="text-center">LES CONTRATS RESILIES</h2>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Numero</th>
                    <th>Date Creation</th>
                    <th>Etat</th>
                    <th>Date Debut</th>
                    <th>Date Fin</th>
                    <th>Appartement</th>
                    <th>Locataire</th>
                </tr>
            </thead>
            <?php
                $contrats = getContratResilie();
                    for($i = 0; $i < count($contrats); $i++){
                        if($contrat->getEtat() == 'Resilie'){
                            echo "<tr>";
                            echo "<td scope = \"row\">".$contrats[$i]->getNumcontrat()."</td>";
                            echo "<td scope = \"row\">".$contrats[$i]->getDatecreation()."</td>";
                            echo "<td scope = \"row\">".$contrats[$i]->getEtat()."</td>";
                            echo "<td scope = \"row\">".$contrats[$i]->getDatedebut()."</td>";
                            echo "<td scope = \"row\">".$contrats[$i]->getDatefin()."</td>";
                            echo "<td scope = \"row\">"."<strong>Num :</strong>".$contrats[$i]->getNumlocation()."<strong> Categorie :</strong>".$contrats[$i]->getCategorieAppartement()."<strong> Type :</strong>".$contrats[$i]->getTypeAppartement()."</td>";
                            echo "<td scope = \"row\">".$contrats[$i]->getNomLocataireContrat()."</td>";
                        }
                        
                        
                    }
            ?>
        </table>
    </div>
</body>

</html>