<?php

        require("connection.php");
		
	  if(isset($_POST['valider'])){
       
	    $email= htmlspecialchars($_POST['email']);
        $motdepasse=($_POST['motdepasse']);

$req= "insert into ajouter (email,motdepasse) values ('$email','$motdepasse')";
		mysql_query($req) or die(mysql_error());
		
	echo'<span class="success"> Enregistrer avec succes <br/></span>'; 
      echo'<div><img src="imm/ajax-loader.gif" atl="" style="width:50px;height:50px;" /></div>';
     echo'<span style="font-size:11px;"><i> Veuillez patienter vous serez redirigé vers la page récapitulative... </i><br/></span>';
         header('Refresh:3;url=index2.php');
				}
    else {
 echo'<span class="base"><a href="index.php">  </a></span><br/>'; } 
 
       
     ?>