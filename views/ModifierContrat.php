<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Enregiatrement du Proprietaire</title>
    <?php include_once "../includes/include1.php" ?>
    <?php include_once "../includes/include2.php" ?>
</head>

<body>
    <?php include_once "../includes/header.php" ?>
    <?php include_once "../controllers/getListeContrats.php" ?>
    <?php include_once "../controllers/getListeLocataires.php" ?>
    <?php include_once "../controllers/getListeAppartements.php" ?>

    <div class="text-center">
        <h1>MODIFIER UN CONTRAT</h1>
        <hr>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-10">
            <h2 class="text-center">Veuillez saisir les differents Parametres</h2>

            <form action="../controllers/modifierContrat.php" method="POST">
                
                        <!-- </section>   -->
            </form>
        </div>
        <div class="col-2"></div>
    </div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <form action="../controllers/modifierContrat.php" method="POST">
        <section class="row" style="margin: 15px;">
                    <div class="col-sm-6">
                        <label class="form-label">Contrat</label>
                        <select name="numContrat" class="form-control" required>
                            <option value="">Choisissez le Contrat</option>
                            <?php
                            foreach ($contrats = getListeContrats() as $contrat) {
                                echo "<option value = " . $numContrat . ">" . $numContrat . " " . $contrat->getNumcontrat() . $contrat->getEtat() . "</option>";
                            }
                            // .$contrat->getNomlocataire().$contrat->getNomlocataire().$contrat->getEtat().$contrat->getDatecreation().$contrat->getdateDebut().$contrat->getdateFin().$contrat->getnumLocataire().$contrat->getNumlocation()
                            ?>
                        </select>
                        <?php
                        // $_SESSION['numContrat'] = $contrat->getNumcontrat(); 
                        // $_SESSION['dateCreation'] = $contrat->getDatecreation();
                        ?>
            <section class="row" style="margin: 15px;">
                <div class="col-sm-6">
                    <label for="etatContrat">Etat</label>
                    <select name="etatContrat" class="form-control" required>

                    <option value="">Choisissez Etat</option>
                            <option value="En cours">En cours</option>
                            <option value="Resilie">Resilie</option>
                    </select>
                    <label class="form-label">Appartement</label>
                    <select name="" class="form-control" required>
                        <option value="$numLocation"></option>
                        <?php
                            foreach ($appartements = getListeAppartements() as $appartement){
                                echo "<option value = ".$appartement->getNumlocation().">"."Num : ".$appartement->getNumlocation()." Categorie :".$appartement->getCategorie()." <strong>et</strong> Type :".$appartement->getTypeappartement()."</option>";
                            }
                            ?>
                    </select>
                    <label class="form-label">Numero du Locataire</label>
                    <select name="nomLocataire" class="form-control" required>
                    <option value="">Choisissez le Nom du locataire</option>
                            <?php
                            foreach ($locataires = getListeLocataires() as $locataire){
                                echo "<option value = ".$locataire->getNumlocataire().">".$locataire->getNomlocataire()."</option>";
                            }
                            ?>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="">Date Debut</label>
                    <input name="dateDebut" type="date" class="form-control" required>
                    <!-- <label for="">Date De creation</label>
                    <input name="dateDebut" type="date" class="form-control" readonly required> -->
                    <label for="">Date Fin</label>
                    <input name="dateFin" type="date" class="form-control" required><br>
                    <button type="submit" name="enregistrer" value="Envoyer" class="btn btn-block" style="background-color: rgb(8, 134, 238); color:white; width:200px ; margin-left: auto; margin-right: auto;">Enregistrer</button>
                </div>
            </section>
        </form>
    </div>
    <div class="col-2"></div>
    </div>
    <!-- <div class="col-2"></div> -->
    </div>
    <br>
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
                    echo "<td scope = \"row\">".$contrats[$i]->getdateDebut()."</td>";
                    echo "<td scope = \"row\">".$contrats[$i]->getdateFin()."</td>";
                    echo "<td scope = \"row\">"."<strong>Num :</strong>".$contrats[$i]->getNumlocation()."<strong> Categorie :</strong>".$contrats[$i]->getCategorieAppartement()."<strong> Type :</strong>".$contrats[$i]->getTypeAppartement()."</td>";
                    echo "<td scope = \"row\">".$contrats[$i]->getNomLocataireContrat()."</td>";

                }
            ?>
        </table>
    </div>
</body>

</html>