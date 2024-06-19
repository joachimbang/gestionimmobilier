<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enregiatrement d'un Locataire</title>
    <?php include_once "../includes/include1.php"?>
    <?php include_once "../includes/include2.php"?>
</head>
<body>
    <script>
        function printDiv(div_locataire) {
            var printContents = document.getElementById(div_locataire).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
    <?php include_once "../includes/header.php"?>
    <?php include_once "../controllers/getListeLocataires.php" ?>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6"><br><br>
            <p>Pour imprimer cette liste cliquer ici <button class="btn btn-block" style="background-color: rgb(8, 134, 238); color:white; width:200px ; margin-left: auto; margin-right: auto;" onclick="printDiv('div_locataire')">Imprimer</button></p>
        </div>
        <div class="col-3"></div>
    </div>
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
                    echo "<th scope =\"row\">" .$locataires[$i]->getNumlocataire()."</th>";
                    echo "<td>" .$locataires[$i]->getNomlocataire()."</td>";
                    echo "<td>" .$locataires[$i]->getPrenomlocataire()."</td>";
                    echo "<td>" .$locataires[$i]->getAdresse1locataire()."</td>";
                    echo '<td>' .$locataires[$i]->getAdresse2locataire().'</td>';
                    echo "<td>" .$locataires[$i]->getCodepostallocataire()."</td>";
                    echo "<td>" .$locataires[$i]->getVillelocataire()."</td>";
                    echo "<td>" .$locataires[$i]->getNumtel1locataire()."</td>";
                    echo "<td>" .$locataires[$i]->getNumtel2locataire()."</td>";
                    echo "<td>" .$locataires[$i]->getEmaillocataire()."</td>";
                }            
                ?>
            </thead>
        </table>
    </div>
</body>

</html>