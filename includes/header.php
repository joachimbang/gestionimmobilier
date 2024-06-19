<div class="header">
    <header class="row" style="background-color: gray; text-align: center;">
        <div class="col-4">
            <a href="acceuil.php" style="color: white;">
                <h2 style="margin: 4%; width:100%">APPARTEMENTS.ORG</h2>
            </a>
        </div>
       
        <script>// Récupère l'élément HTML avec l'id "myDiv" et le btn_affiche
        // Récupère l'élément HTML avec l'id "myDiv" et le bouton
// Récupère l'élément HTML avec l'id "myDiv" et le bouton
var div = document.getElementById("myDiv");
var bouton = document.getElementById("monBouton");

// Ajoute un écouteur d'événement au bouton
bouton.addEventListener("click", function() {
  // Vérifie l'état de la div
  if (div.style.display === "none") {
    // Si la div est cachée, l'affiche et change le texte du bouton
    div.style.display = "block";
    bouton.textContent = "Cacher";
  } else {
    // Sinon, cache la div et change le texte du bouton
    div.style.display = "none";
    bouton.textContent = "Afficher";
  }
});


</script>
        <div class="col-8">
            <nav class="navbar navbar-expand-sm  navbar-dark">
                <ul class="navbar-nav" style="margin-left: 25%;margin-top:5%; width:100%">
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Structure<span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background-color: gray; width: 50%;">
                            <li>
                                <p><a href="EnregistrerAppartement.php" style="color:white;">Creer un appartement</a></p>
                            </li>
                            <li>
                                <p><a href="EnregistrerProprietaire.php" style="color:white;">Creer un proprietaire</a></p>
                            </li>
                            <li>
                                <p><a href="EnregistrerTarif.php" style="color:white;">Creer un tarif</a></p>
                            </li>
                            <li >
                                <a href="EnregistrerLocataire.php" style="color:white;">Creer un locataire</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Traitement<span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background-color: gray; width: 50%;">
                            <li>
                                <p><a href="EnregistrerContrat.php" style="color:white;">Passer un contrat</a></p>
                            </li>
                            <li>
                                <p><a href="ModifierContrat.php" style="color:white;">Modifier un contrat</a></p>
                            </li>
                            <li>
                                <p><a href="ResilierContrat.php" style="color:white;">Resilier un contrat</a></p>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Impression<span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background-color: gray; width: 50%;">
                            <li>
                                <p><a href="ImprimerListeLocatires.php" style="color:white;">Imprimer Liste Locataires</a></p>
                            </li>
                            <li>
                                <p><a href="ImprimerListeProprietaires.php" style="color:white;">Imprimer Liste Proprietaires</a></p>
                            </li>
                            <li>
                                <p><a href="ImprimerListeContrats.php" style="color:white;">Imprimer Liste Contrats</a></p>
                            </li>
                            <li>
                                <p><a href="ImprimerListeAppartement.php" style="color:white;">Imprimer Liste Appartement</a></p>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</div>