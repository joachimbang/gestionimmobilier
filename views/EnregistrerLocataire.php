<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enregiatrement d'un Locataire</title>
    <?php include_once "../includes/include1.php"?>
    <?php include_once "../includes/include2.php"?>
</head>
<body>
    
    <?php include_once "../includes/header.php"?>
    <?php include_once "../controllers/getListeLocataires.php" ?>
    <div class="text-center"><h1>ENREGISTREMENT D'UN LOCATAIRE</h1><hr></div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
        <h2 class="text-center">Veuillez saisir les differents Parametres</h2>
            <form action="../controllers/enregistrerLocataire.php" method="POST">
                <section class="row" style="margin: 15px;">
                    <div class="col-sm-6">
                        <label class="form-label">Num du Locataire</label>
                        <input name="numLocataire" type="number" class="form-control" required>
                        <label for="">Nom</label>
                        <input name="nomLocataire" type="text" class="form-control" required>
                        <label class="form-label">Prenom</label>
                        <input name="prenomLocataire" type="text" class="form-control" required>
                        <label class="form-label">Adresse 1</label>
                        <input name="adresse1Locataire" type="text" class="form-control" required>
                        <label class="form-label">Adresse 2</label>
                        <input name="adresse2Locataire" type="text" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Ville</label>
                        <input name="villeLocataire" type="text" class="form-control" required>
                        <label for="">Numero telephone 1</label>
                        <input name="numTel1Locataire" type="number" class="form-control" required>
                        <label for="">Numero telephone 2</label>
                        <input name="numTel2Locataire" type="number" class="form-control" >
                        <label class="form-label">Email</label>
                        <input name="emailLocataire" type="email" class="form-control" required>
                        <label class="form-label">Code Postal</label>
                        <input name="codePostalLocataire" type="text" class="form-control" required>
                    </div>
                </section>
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
    <div id="div_locataire" class="mx-3">
        <h2 class="text-center"> LES LOCATAIRES</h2>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Num</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse 1</th>
                    <th>Adresse 2</th>
                    <th>Code Postal</th>
                    <th>Ville</th>
                    <th>Numero Tel 1</th>
                    <th>Numero Tel 2</th>
                    <th>Email</th>
                </tr>
                <?php
                $locataires = getListeLocataires();
                for ($i = 0; $i < count($locataires); $i++)  {
                    echo "<tr>";
                    // echo "<th scope =\"row\">".$locataires[$i]->getNumlocation()."</th>";
                    echo "<td scope =\"row\">" .$locataires[$i]->getNumlocataire()."</td>";
                    echo "<td scope =\"row\">" .$locataires[$i]->getNomlocataire()."</td>";
                    echo "<td scope =\"row\">" .$locataires[$i]->getPrenomlocataire()."</td>";
                    echo "<td scope =\"row\">" .$locataires[$i]->getAdresse1locataire()."</td>";
                    echo "<td scope =\"row\">" .$locataires[$i]->getAdresse2locataire()."</td>";
                    echo "<td scope =\"row\">" .$locataires[$i]->getCodepostallocataire()."</td>";
                    echo "<td scope =\"row\">" .$locataires[$i]->getVillelocataire()."</td>";
                    echo "<td scope =\"row\">" .$locataires[$i]->getNumtel1locataire()."</td>";
                    echo "<td scope =\"row\">" .$locataires[$i]->getNumtel2locataire()."</td>";
                    echo "<td scope =\"row\">" .$locataires[$i]->getEmaillocataire()."</td>";
                }            
                ?>
            </thead>
        </table>
    </div>
</body>

</html>