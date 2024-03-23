<?php
    include "Execution_Requete.php";
    function affichage_voiture($c)
    { 
        $q= "SELECT * FROM voiture; ";
        $r = $c->query($q);
        if($r->num_rows>0){
            
            while($line = $r->fetch_assoc()){
                 echo" <tr>";
                 echo "<td>".$line["idvoit"]."</td>";
                 echo "<td>".$line["codeit"]."</td>";
                 echo "<td>".$line["Design"]."</td>";
                 echo "<td>".$line["frais"]."</td>";
                echo "<td><a href=\"modifier_voiture.php?id=".$line["idvoit"]."&codeit=".$line["codeit"]."&Design=".$line["Design"]."&frais=".$line["frais"]."\">
                <img src=\"../../Style/icons/modifier.jfif\" alt=\"modifier\" width=\"25px\" height=\"25px\"></a></td>";        

                echo "<td><a href=\"supprimer_voiture.php?id=".$line["idvoit"]."\">
                    <img src=\"../../Style/icons/supprimer.png\" alt=\"supprimer\" width=\"25px\" height=\"25px\"></a></td>";        
                 echo"</tr>";
        
            }
        }
        else{
            echo" Aucune voiture";
        }
    
    }
    
    function ajout_voiture($c)
    {
        if(isset($_POST["idvoit"])&&isset($_POST["codeit"])&&isset($_POST["Design"])&&isset($_POST["frais"])){
            $idvoiture = $_POST["idvoit"];
            $codeit    = $_POST["codeit"] ;
            $Design    = $_POST["Design"] ;
            $frais     = $_POST["frais"]; 

            $query="INSERT INTO voiture VALUE
                    (\"".$idvoiture."\",\"".$codeit."\",\"".$Design."\",".$frais.");";
          execution_requete($c, $query);
          header("Location:interface_voiture.php"); 
        }
    }
    function modifier_voiture($c)
    {
        if(isset($_POST["idvoit"])&&$_POST["codeit_nouveau"]&&$_POST["Design_nouveau"]&&$_POST["frais_nouveau"])
        {
            $idvoi             = $_POST["idvoit"];
            $codeit_nouveau    = $_POST["codeit_nouveau"];
            $Design_nouveau    = $_POST["Design_nouveau"] ;
            $Frais_nouveau     = $_POST["frais_nouveau"] ;

           $query="UPDATE voiture set codeit=\"".$codeit_nouveau."\",
                                      Design=\"".$Design_nouveau."\",
                                      frais=".$Frais_nouveau."  
                                      where idvoit=\"".$idvoi."\";";

          execution_requete($c, $query);
          header("Location:interface_voiture.php"); 
             
        }   
    }
    function supprimer_voiture($c)
    {
        if(isset($_GET["id"]))
        {
    
            $id = $_GET["id"];
            $querry= "DELETE FROM voiture where idvoit=\"".$id."\" ;";
            execution_requete($c, $querry);
            header("Location:interface_voiture.php"); 
        }       
         else
         {
            echo "Echec ";
         }
         
    }
?>