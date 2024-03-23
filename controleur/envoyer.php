<?php
    include "Execution_Requete.php";  
    function affichage_envoyer($c, $q)
    {
        // echo "<table class=\"tableau\" id=\"searchResults\">
        // <thead>
        //     <tr>
        //         <th class=\"id\">Numero </th>
        //         <th > Voiture </th>
        //         <th>Colis</th>
        //         <th>Nom de l'envoyeur</th>
        //         <th>Email </th>
        //         <th class=\"date\"> date d'enoi </th>
        //         <th class=\"frais\">frais</th>
        //         <th>Nom de recepteur</th>
        //         <th>Contact</th>
        //         <th>Modifier</th>
        //         <th>Supprimer</th>
        //     </tr>
        // </thead>
        
        // <tbody>";    
        $r = $c->query($q);
        if($r->num_rows>0){
            
            while($line = $r->fetch_assoc()){
                 echo" <tr>";
                 echo "<td class=\"id\">".$line["idenvoi"]."</td>";
                 echo "<td class=\"idvoit\">".$line["idvoit"]."</td>";
                 echo "<td class=\"colis\">".$line["colis"]."</td>";
                 echo "<td class=\"NomEnvoyeur\">".$line["nomEnvoyeur"]."</td>";
                 echo "<td class=\"email\">".$line["emailEnvoyeur"]."</td>";
                 echo "<td class=\"date\">".$line["date_envoi"]."</td>";
                 echo "<td class=\"frais\">".$line["frais"]." Ar</td>";
                 echo "<td class=\"nomRecept\">".$line["nomRecepteur"]."</td>";
                 echo "<td class=\"contact\">".$line["contactRecepteur"]."</td>";
                echo "<td class=\"modifier\"><a href=\"modifier_envoye.php?id=".$line["idenvoi"].
                                                        "&idvoit=".$line["idvoit"].
                                                        "&colis=".$line["colis"].
                                                        "&nomEnvoyeur=".$line["nomEnvoyeur"].
                                                        "&emailEnvoyeur=".$line["emailEnvoyeur"].
                                                        "&date_envoi=".$line["date_envoi"].
                                                        "&frais=".$line["frais"].
                                                        "&nomRecepteur=".$line["nomRecepteur"].
                                                        "&contactRecepteur=".$line["contactRecepteur"]."\">
                <img src=\"../../Style/icons/modifier.jfif\" alt=\"modifier\" width=\"25px\" height=\"25px\"></a></td>";        

                echo "<td class=\"supprimer\"><a href=\"supprimer_envoye.php?id=".$line["idenvoi"]."\">
                    <img src=\"../../Style/icons/supprimer.png\" alt=\"supprimer\" width=\"25px\" height=\"25px\"></a></td>";        
                 echo"</tr>";
        
            }
        }
        else{
            echo" <tr>";
            echo "<td class=\"id\"></td>";
            echo "<td class=\"idvoit\"></td>";
            echo "<td class=\"colis\">Aucune envoyer</td>";
         
           
            echo"</tr>";
   
        }
      
    
    }
    

    function insertion_envoyer($c)
    {  
        if( isset($_POST["idenvoi"])&&
            isset($_POST["idvoit"])&&
            isset($_POST["colis"])&&
            isset($_POST["nomEnvoyeur"])&&
            isset($_POST["emailEnvoyeur"])&&
            isset($_POST["date_envoi"])&&
            isset($_POST["frais"])&&
            isset($_POST["nomRecepteur"])&&
            isset($_POST["contactRecepteur"])){
            
                $idenvoi            = $_POST["idenvoi"];
                $idvoit             = $_POST["idvoit"] ;
                $colis              = $_POST["colis"]; 
                $nomEnvoyer         = $_POST["nomEnvoyeur"] ;
                $date_envoi         = $_POST["date_envoi"]; 
                $email_envoi        = $_POST["emailEnvoyeur"]; 
                $frais              = $_POST["frais"]; 
                $nomRecepteur       = $_POST["nomRecepteur"]; 
                $contactRecepteur   = $_POST["contactRecepteur"];
                
            $query="INSERT INTO envoyer VALUE
                    (\"".$idenvoi."\",
                    \"".$idvoit."\",
                    \"".$colis."\",
                    \"".$nomEnvoyer."\",
                    \"".$email_envoi."\",
                    \"".$date_envoi."\",
                    \"".$frais."\",
                    \"".$nomRecepteur."\",
                    \"".$contactRecepteur."\");";
          execution_requete($c, $query);
          header('Location:generer_pdf.php?id='.$idenvoi);
  
        }
    }
    function modifier_envoyer($c)
{

    
        if( isset($_POST["idenvoi"])&&
        isset($_POST["idvoit_nouveau"])&&
        isset($_POST["colis_nouveau"])&&
        isset($_POST["nomEnvoyeur_nouveau"])&&
        isset($_POST["emailEnvoyeur_nouveau"])&&
        isset($_POST["date_envoi_nouveau"])&&
        isset($_POST["frais_nouveau"])&&
        isset($_POST["nomRecepteur_nouveau"])&&
        isset($_POST["contactRecepteur_nouveau"])){
        
            $idenvoi            = $_POST["idenvoi"];
            $idvoit             = $_POST["idvoit_nouveau"] ;
            $colis              = $_POST["colis_nouveau"]; 
            $nomEnvoyer         = $_POST["nomEnvoyeur_nouveau"] ;
            $date_envoi         = $_POST["date_envoi_nouveau"]; 
            $email_envoi        = $_POST["emailEnvoyeur_nouveau"]; 
            $frais              = $_POST["frais_nouveau"]; 
            $nomRecepteur       = $_POST["nomRecepteur_nouveau"]; 
            $contactRecepteur   = $_POST["contactRecepteur_nouveau"];
            

            $query="UPDATE envoyer set idvoit=\"".$idvoit."\",
                                      colis=\"".$colis."\",
                                      nomEnvoyeur=\"".$nomEnvoyer."\",
                                      date_envoi=\"".$date_envoi."\",
                                      emailEnvoyeur=\"".$email_envoi."\",
                                      frais=".$frais.",  
                                      nomRecepteur=\"".$nomRecepteur."\",
                                      contactRecepteur=\"".$contactRecepteur."\"
                                      where idenvoi=".$idenvoi.";";

          execution_requete($c, $query);
        
          header("Location:interface_envoyer.php"); 
             
        }   
    }
    function supprimer_envoye($c)
    {
        if(isset($_GET["id"]))
        {
    
            $id = $_GET["id"];
            $querry= "DELETE FROM envoyer where idenvoi=\"".$id."\" ;";
            execution_requete($c, $querry);
            header("Location:interface_envoyer.php"); 
        }       
         else
         {
            echo "Echec ";
         }
       
    }

    function recherche($c, $r)
    {
        if($r==''){
            affichage_envoyer($c,"SELECT * FROM envoyer;");   
        }
        else{
        $query_recherche="SELECT * FROM envoyer where idenvoi like \"".$r."\" or colis like \"%".$r."%\" ;";
        affichage_envoyer($c,$query_recherche);
        }
    }

    function recherche_entre_deux_date($c,$d1,$d2){
        $querry = "SELECT * FROM envoyer where date_envoi  between '$d1' and '$d2';";
        affichage_envoyer($c,$querry);

    }   
?>