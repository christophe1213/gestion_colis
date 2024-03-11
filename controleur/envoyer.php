<?php
    include "Execution_Requete.php";
    require('fpdf/fpdf.php');
    function affichage_envoyer($c, $q)
    {
        $query = "SELECT * FROM envoyer; ";
        echo"<div class=\"b\">
        <main class=\"table\">
            <section class=\"table_header\">
                <h1>Gestion d'envoye</h1>";
           
        echo "<p>Recette total de coopérative :";
        include "recette_total.php";
        echo "</p>";
        echo "<div>
        <p>Recherche entre deux date </p>
          <form class=\"search\" method=\"get\" action=\"resultat_recherche.php\" >
        <input type=\"datetime-local\" name=\"date_dep\" placeholder=\"date debut\">
        <input type=\"datetime-local\" name=\"date_fin\" placeholder=\"date fin\">
        <button type =\"submit\"><img class=\"icons\"  src=\"../icons/search.png\" alt=\"Recherche\"></button>
    </form>       
        </div>";
                echo      "  <form class=\"search\" method=\"get\" action=\"resultat_recherche.php\" >
                    <input type=\"search\" name=\"recherche\" placeholder=\"Recherche\">
                    <button type =\"submit\"><img class=\"icons\"  src=\"../icons/search.png\" alt=\"Recherche\"></button>
                </form>
              
                <a href=\"insertion_envoyer.php\"><img class=\"icons\" src=\"../icons/ajout.jfif\" alt=\"ajouter\"></a>
    
            
    
            </section>
            <section class=\"table_body\">
                ";
        echo "<table class=\"tableau\">
        <thead>
            <tr>
                <th class=\"id\">Numero </th>
                <th> Voiture </th>
                <th>Colis</th>
                <th>Nom de l'envoyeur</th>
                <th>Email </th>
                <th> date d'enoi </th>
                <th>frais</th>
                <th>Nom de recepteur</th>
                <th>Contact</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        
        <tbody>";    
        $r = $c->query($q);
        if($r->num_rows>0){
            
            while($line = $r->fetch_assoc()){
                 echo" <tr>";
                 echo "<td class=\"id\">".$line["idenvoi"]."</td>";
                 echo "<td>".$line["idvoit"]."</td>";
                 echo "<td>".$line["colis"]."</td>";
                 echo "<td>".$line["nomEnvoyeur"]."</td>";
                 echo "<td>".$line["emailEnvoyeur"]."</td>";
                 echo "<td class=\"date\">".$line["date_envoi"]."</td>";
                 echo "<td class=\"frais\">".$line["frais"]." Ar</td>";
                 echo "<td>".$line["nomRecepteur"]."</td>";
                 echo "<td>".$line["contactRecepteur"]."</td>";
                echo "<td><a href=\"modifier_envoye.php?id=".$line["idenvoi"].
                                                        "&idvoit=".$line["idvoit"].
                                                        "&colis=".$line["colis"].
                                                        "&nomEnvoyeur=".$line["nomEnvoyeur"].
                                                        "&emailEnvoyeur=".$line["emailEnvoyeur"].
                                                        "&date_envoi=".$line["date_envoi"].
                                                        "&frais=".$line["frais"].
                                                        "&nomRecepteur=".$line["nomRecepteur"].
                                                        "&contactRecepteur=".$line["contactRecepteur"]."\">
                <img src=\"../icons/modifier.jfif\" alt=\"modifier\" width=\"25px\" height=\"25px\"></a></td>";        

                echo "<td><a href=\"supprimer_envoye.php?id=".$line["idenvoi"]."\">
                    <img src=\"../icons/supprimer.png\" alt=\"supprimer\" width=\"25px\" height=\"25px\"></a></td>";        
                 echo"</tr>";
        
            }
        }
        else{
            echo" Aucune envoye";
        }
        echo"    </tbody>
        </table>";
        echo"   </section>
        </div>
        ";
    
    }
    
    function ajout_envoyer($c)
    {
     echo "dd";
    
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
        $query_recherche="SELECT * FROM envoyer where idenvoi like \"%".$r."%\" or colis like \"%".$r."\" ;";
        affichage_envoyer($c,$query_recherche);

    }

    function recherche_entre_deux_date($c,$d1,$d2){
        $querry = "SELECT * FROM envoyer where date_envoi  between '$d1' and '$d2';";
        affichage_envoyer($c,$querry);

    }
    
    function generer_pdf($c,$i)
    {
   
        $sql = "SELECT * FROM envoyer where idenvoi=\"".$i."\" ;";
        if($r = $c->query($sql)){
            // echo "requète reussi";
        }else echo "echec de requète";
        $fact =$r->fetch_assoc();
        $f_pdf = new FPDF();
        $f_pdf ->AddPage();
        $f_pdf ->SetFont('Arial', 'B',17);
    
        $f_pdf ->Cell(40,10,$i,1,0, 'C');
        $f_pdf->Ln(10);
        $f_pdf->SetFont('Arial','',12 );
        $f_pdf->Cell(40,10, 'Date d\'envoi : '.date($fact["date_envoi"]),0,1,'L');
        $f_pdf->Ln(3);
        $f_pdf->Cell(40,10,'Nom de l\'Envoyeur : '.$fact['nomEnvoyeur'],0,1,'L');
        $f_pdf->Ln(3);
        $f_pdf->Cell(40,10,'Id de voiture  : '.$fact['idvoit'],0,1,'L');
        $f_pdf->Ln(3);
        $f_pdf->Cell(40,10,'Colis : '.$fact['colis'],0,1,'L');
        $f_pdf->Ln(3);
        $f_pdf->Cell(40,10,'Frais: '.$fact['frais'].' AR',0,1,'L');
        $f_pdf->Ln(3);
        $f_pdf->Cell(40,10,'Nom de Récepteur: '.$fact['nomRecepteur'],0,1,'L');
        $f_pdf->Ln(3);
        $f_pdf->Cell(40,10,'Contact du Récepteur : '.$fact['contactRecepteur'],0,1,'L');
        $f_pdf->Ln(3);
        $f_pdf ->Output('C:/Users/Thierry Christophe/Desktop/fi.pdf','F');

       
    }

    
?>