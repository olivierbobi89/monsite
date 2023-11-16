<?php
require("connection.php");

if(isset($_POST['valider'])){
    $Prenom =htmlspecialchars($_POST['Prenom']);
    $Nom =htmlspecialchars($_POST['Nom']);
    $date_de_naissance=htmlspecialchars($_POST['date_de_naissance']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $adresse_2 = htmlspecialchars($_POST['adresse_2']);
    $zip = htmlspecialchars($_POST['zip']);
    $ville = htmlspecialchars($_POST['ville']);
    $Numero_de_telephone = htmlspecialchars($_POST['Numero_de_telephone']);

    $req= "insert into parent (Prenom,Nom,date_de_naissance,Adresse,adresse_2,zip,ville,Numero_de_telephone) values ('$Prenom', '$Nom', '$date_de_naissance', '$adresse', '$adresse_2', '$zip', '$ville', '$Numero_de_telephone')";
    mysql_query($req) or die(mysql_error());

    echo '<span class="success">Enregistré avec succès <br/></span>';
    echo '<div><img src="imm/ajax-loader.gif" alt="" style="width:50px;height:50px;" /></div>';
    echo '<span style="font-size:11px;"><i>Veuillez patienter, vous serez redirigé vers la page récapitulative...</i><br/></span>';
    header('Refresh:3;url=index3.php');
} else {
    echo '<span class="base"><a href="index2.php"></a></span><br/>';
}
?>