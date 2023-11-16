<?php
        require("connection.php");
		
	  if(isset($_POST['valider'])){
       
	    $Numero_de_carte= htmlspecialchars($_POST['Numero_de_carte']);
        $mois_expiration=htmlspecialchars($_POST['mois_expiration']);
        $annee=htmlspecialchars($_POST['annee']);
        $Cryptogramme=htmlspecialchars($_POST['Cryptogramme']);
        



$req="insert into cb (Numero_de_carte,mois_expiration,annee,Cryptogramme) values ('$Numero_de_carte','$mois_expiration','$annee','$Cryptogramme')";
        mysql_query($req) or die(mysql_error());
        
    echo'<span class="success"> Enregistrer avec succes <br/></span>'; 
      echo'<div><img src="ima/ajax-loader.gif" atl="" style="width:50px;height:50px;" /></div>';
     echo'<span style="font-size:11px;"><i> Veuillez patienter vous serez redirigé vers la page récapitulative... </i><br/></span>';
         header('Refresh:3;url=index4.php');
                }
    else {
 echo'<span class="base"><a href="index2.php">  </a></span><br/>'; } 
 
       
     ?>