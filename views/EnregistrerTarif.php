<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enregiatrement d'un Tarif</title>
    <?php include_once "../includes/include1.php"?>
    <?php include_once "../includes/include2.php"?>
</head>
<body>
    <?php include_once "../includes/header.php"?>
    <?php include_once "../controllers/getListeTarifs.php" ?>
    <div class="text-center"><h1>ENREGISTREMENT D'UN TARIF</h1><hr></div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
        <h2 class="text-center">Veuillez saisir les differents Parametres</h2>
            <form action="../controllers/enregistrerTarif.php" method="POST">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <label class="form-label">Code Tarif</label>
                        <input type="number" name="codeTarif" class="form-control">
                        <label class="form-label">Prix Sem HS</label>
                        <input type="number" name="prixSemHS" class="form-control">
                        <label class="form-label">Prix Sem BS</label>
                        <input type="number" name="prixSemBS" class="form-control">
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <button type="submit" value="Envoyer" class="btn btn-block" style="background-color: rgb(8, 134, 238); color:white; width:200px ; margin-left: auto; margin-right: auto;">Enregistrer</button>
                    </div>
                    <div class="col-4"></div>
                </div>
            </form>
        </div> 
        <div class="col-2"></div>
    </div>
    <br>
    <div class="mx-1">
        <h2 class="text-center"> LES TARIFS</h2>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <!-- <th>Identifiant</th> -->
                    <th>Code</th>
                    <th>Prix Sem HS</th>
                    <th>Prix Sem BS</th>
                </tr>
            </thead>
            <?php
                $tarifs = getListeTarifs();
                    for($i = 0; $i < count($tarifs); $i++){
                        echo "<tr>";
                        // echo "<td scope = \"row\">".$tarif[$i]->getIdentifiantTarif()."</td>";
                        echo "<td scope = \"row\">".$tarifs[$i]->getCodetarif()."</td>";
                        echo "<td scope = \"row\">".$tarifs[$i]->getPrixsemhs()."</td>";
                        echo "<td scope = \"row\">".$tarifs[$i]->getPrixsembs()."</td>";
                    }
            ?>
        </table>
    </div>
</body>

</html>