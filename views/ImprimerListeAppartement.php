<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creation d'un Appartement</title>
    <?php include_once "../includes/include1.php"?>
    <?php include_once "../includes/include2.php"?>
</head>
<body>
    <script>
        function printDiv(div_appartement) {
            var printContents = document.getElementById(div_appartement).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
        </script>
    <?php include_once "../includes/header.php"?>
    <?php include_once "../controllers/getListeAppartements.php" ?>
    <?php include_once "../controllers/getListeTarifs.php" ?>
    <?php include_once "../controllers/getListeProprietaires.php" ?>
    <script>
        function printDiv(div_appartement) {
            var printContents = document.getElementById(div_appartement).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6"><br><br><p>Pour imprimer cette liste cliquer ici <button class="btn btn-block" style="background-color: rgb(8, 134, 238); color:white; width:200px ; margin-left: auto; margin-right: auto;" onclick="printDiv('div_appartement')">Imprimer</button></p></div>
        <div class="col-3"></div>
    </div>
    <div id="div_appartement" class="mx-3">
        <h2 class="text-center"> LES APPARTEMENTS</h2>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Num Location</th>
                    <th>Categorie</th>
                    <th>Nombre Personnes</th>
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