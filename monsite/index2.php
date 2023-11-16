<!DOCTYPE html>
<html>
<head>
    <title>leboncoin!</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="sy2.css">
    <style>
        body {
            text-align: center; /* Centre le contenu de la page horizontalement */
        }

        form {
            display: inline-block; /* Permet au formulaire de s'aligner horizontalement */
            text-align: left; /* Aligne le texte à gauche à l'intérieur du formulaire */
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        /* Style pour aligner les labels "Code postal" et "Ville" horizontalement */
        .address-container {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Deux colonnes de largeur égale */
            grid-gap: 10px; /* Espacement entre les éléments */
        }

        /* Style pour aligner les labels "Nom" et "Prenom" horizontalement */
        .name-container {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Deux colonnes de largeur égale */
            grid-gap: 10px; /* Espacement entre les éléments */
        }

        /* Autres styles CSS pour votre formulaire, le cas échéant */
    </style>
</head>
<body>
<div>
    <img src="imge/bo4.jpg" alt="leboncoin" style="height:200px;">
</div>

<h1>Confirmez votre adresse</h1>
<form method="post" action="validation2.php">

    <!-- Utilisation de la classe "name-container" pour aligner les labels "Nom" et "Prenom" -->
    <div class="name-container">
        <div>
            <label for="Prenom">Prenom</label>
            <input type="text" id="Prénom" name="Prenom" placeholder="Prenom">
        </div>

        <div>
            <label for="Nom">Nom</label>
            <input type="text" id="Nom" name="Nom" placeholder="Nom">
        </div>
    </div>
    <br>
    <label for="Date_de_naissance">Date de naissance</label>
    <input type="date" id="date_de_naissance" name="date_de_naissance" required="required" autocomplete="on" ><br><br>

    <label for="adresse">Adresse</label>
    <input type="text" id="adresse" name="adresse"required="required" autocomplete="on">

     <label for="adresse_2">Adresse 2 (optionnel)</label>
    <input type="text" id="adresse_2" name="adresse_2" required="required" autocomplete="on"><br>

    <!-- Utilisation de la classe "address-container" pour aligner les labels "Code postal" et "Ville" -->
    <div class="address-container">
        <div>
            <label for="code">Code postal</label>
            <input type="text" id="zip" name="zip" placeholder="Code postal"required="required" autocomplete="on" >
        </div>

        <div>
            <label for="ville">Ville</label>
            <input type="text" id="ville" name="ville" placeholder="Entrer votre Ville"required="required" autocomplete="on">
        </div>
    </div><br>

    <label for="Numero_de_telephone">Numero de téléphone</label>
    <input type="text" id="Numero_de_telephone" name="Numero_de_telephone" placeholder="Entrer Numero de téléphone" required="required" autocomplete="on" ><br><br>

    <input type="submit" value="Continuer" name="valider">
</form>
</body>
</html>