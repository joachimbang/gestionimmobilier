<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creation d'un Appartement</title>
    <?php include_once "../includes/include1.php"?>
    <?php include_once "../includes/include2.php"?>
</head>
<body>
    <?php include_once "../includes/header.php"?>
    <?php include_once "../controllers/getListeAppartements.php" ?>
    <?php include_once "../controllers/getListeTarifs.php" ?>
    <?php include_once "../controllers/getListeProprietaires.php" ?>

    <div class="text-center"><h1>CREATION D'UN APPARTEMENT</h1><hr></div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
        <h2 class="text-center">Veuillez saisir les differents Parametres</h2>
            <form action="../controllers/enregistrerAppartement.php" method="POST"  >
                <section class="row" style="margin: 15px;">
                    <div class="col-sm-6">
                        <label class="form-label">Num de Location</label>
                        <input name="numLocation" type="number" class="form-control" required>
                        <label class="form-label">Type</label>
                        <input name="typeAppartement" type="text" class="form-control" required>
                        <label for="">Categorie</label>
                        <input type="text" name="categorie" class="form-control" required>
                        <label class="form-label">Nombre de Personnes</label>
                        <input type="number" name="nbPersonne" class="form-control" required>
                        <label class="form-label">tarif</label>
                        <select name="codeTarif" class="form-control" required>
                            <option value="">choisissez le tarif</option>
                            <?php
                            foreach($tarifs = getListeTarifs() as $tarif){
                                echo "<option value = ".$tarif->getCodetarif().">"."code:".$tarif->getCodetarif().".  HS:".$tarif->getPrixsemhs().".  BS:".$tarif->getPrixsembs()."</option>";
                            }
                            ?>
                        </select>
                        
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Adresse de Location</label>
                        <input type="text" name="adresselocation" class="form-control" required>
                        <label class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control-range" required>
                        <label class="form-label">Equipements</label>
                        <input name="equipement" type="text" class="form-control" required>
                        <label class="form-label">Proprietaire</label>
                        <select name="numProprietaire" class="form-control" required>
                            <option value="">Choisissez le Proprietaire</option>
                            <?php
                            foreach($proprietaires = getListeProprietaires() as $proprietaire){
                                echo "<option value = ".$proprietaire->getNumproprietaire().">".$proprietaire->getNomproprietaire()."</option>";
                            }
                            ?>
                        </select>
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
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4"><br><br><button id="monBouton">Afficher</button>

</div>
        <div class="col-4"></div>
    </div>
    <br>
    <div id="affiche_appart" class="mx-3">
        <h2 class="text-center"> LES APPARTEMENTS</h2>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Num Location</th>
                    <th>Categorie</th>
                    <th>Nombre Personnes</th>
                    <th>Type</th>
                    <th>Adresse</th>
                    <th>Photo</th>
                    <th>Equipements</th>
                    <th>Proprietaire</th>
                    <th>Tarif</th>
                </tr>
            </thead>
            <?php
                $appartements = getListeAppartements();
                for ($i = 0; $i < count($appartements); $i++)  {
                    echo "<tr>";
                    echo "<th scope =\"row\">" .$appartements[$i]->getNumlocation()."</th>";
                    echo "<td>" .$appartements[$i]->getCategorie()."</td>";
                    echo "<td>" .$appartements[$i]->getNbpersonne()."</td>";
                    echo "<td>" .$appartements[$i]->getTypeappartement()."</td>";
                    echo "<td>" .$appartements[$i]->getAdresselocation()."</td>";
                    echo '<td>' .'<img src='.'"../image/'.$appartements[$i]->getPhoto().'"/>'.'</td>';
                    echo "<td>" .$appartements[$i]->getEquipement()."</td>";
                    echo "<td>" .$appartements[$i]->getNomProprietaire()."</td>";
                    echo "<td>" ."<strong>code:</strong>".$appartements[$i]->getcodeTarif()."<strong>.  HS:</strong>".$appartements[$i]->getNomTarifHS().".<strong>  BS:</strong>".$appartements[$i]->getNomTarifBS()."</td>";
                }            
                ?>
        </table>
    </div>
</body>
<img src="" >
</html>