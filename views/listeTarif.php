<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ListeTarif</title>
</head>
<body>
    <div class="mx-1">
        <h2 class="text-center"> LES TARIFS</h2>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Code</th>
                    <th>Prix Sem HS</th>
                    <th>Prix Sem BS</th>
                </tr>
            </thead>
            <?php
                $tarif = getListeTarif();
                for($i = 0; $i < count($tarif); $i++){
                    echo "<tr>";
                    echo "<td scope = \"row\">".$tarif[$i]->getCodetarif()."</td>";
                    echo "<td scope = \"row\">".$tarif[$i]->getPrixsemhs()."</td>";
                    echo "<td scope = \"row\">".$tarif[$i]->getPrixsembs()."</td>";
                }
            ?>
        </table>
     </div>
</body>
</html>