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
        function printDiv(div_proprietaire) {
            var printContents = document.getElementById(div_proprietaire).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
    <?php include_once "../includes/header.php"?>
    <?php include_once "../controllers/getListeProprietaires.php"?>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6"><br><br>
            <p>Pour imprimer cette liste cliquer ici <button onclick="printDiv('div_proprietaire')" class="btn btn-block" style="background-color: rgb(8, 134, 238); color:white; width:200px ; margin-left: auto; margin-right: auto;" >Imprimer</button></p>
        </div>
        <div class="col-3"></div>
    </div>
    <div id="div_proprietaire" class="mx-3">
        <h2 class="text-center"> LES PROPRIETAIRES</h2>
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
                    <th>Numero Tel1</th>
                    <th>Numero Tel2</th>
                    <th>CA Cumule</th>
                    <th>Email</th>
                </tr>

                <?php
                $proprietaires = getListeProprietaires();
                for ($i = 0; $i < count($proprietaires); $i++)  {
                    echo "<tr>";
                    // echo "<th scope =\"row\">".$proprietaires[$i]->getNumlocation()."</th>";
                    echo "<td scope = \"row\">" .$proprietaires[$i]->getnumProprietaire()."</td>";
                    echo "<td scope = \"row\">" .$proprietaires[$i]->getNomproprietaire()."</td>";
                    echo "<td scope = \"row\">" .$proprietaires[$i]->getPrenomproprietaire()."</td>";
                    echo "<td scope = \"row\">" .$proprietaires[$i]->getAdresse1proprietaire()."</td>";
                    echo "<td scope = \"row\">" .$proprietaires[$i]->getAdresse2proprietaire()."</td>";
                    echo "<td scope = \"row\">" .$proprietaires[$i]->getCodepostalproprietaire()."</td>";
                    echo "<td scope = \"row\">" .$proprietaires[$i]->getVilleproprietaire()."</td>";
                    echo "<td scope = \"row\">" .$proprietaires[$i]->getNumtel1proprietaire()."</td>";
                    echo "<td scope = \"row\">" .$proprietaires[$i]->getNumtel2proprietaire()."</td>";
                    echo "<td scope = \"row\">" .$proprietaires[$i]->getCacumuleproprietaire()."</td>";
                    echo "<td scope = \"row\">" .$proprietaires[$i]->getEmailproprietaire()."</td>";
                }            
                ?>
            </thead>
        </table>
    </div>
</body>

</html>