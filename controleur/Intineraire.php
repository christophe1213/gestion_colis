<?php
    include "Execution_Requete.php";
    function affichage_Intineraire($c)
    {
        $query = "SELECT * FROM intineraire; ";
        $r = $c->query($query);
        if($r->num_rows>0){
            
            while($line = $r->fetch_assoc()){
                 echo" <tr>";
                 echo "<td>".$line["codeit"]."</td>";
                 echo "<td class=\"ville\">".$line["villedep"]."</td>";
                 echo "<td class=\"ville\">".$line["villearriv"]."</td>";
                 echo "<td class=\"modifier\"><a id=\"modif\" href=\"modifier_Intineraire.php?id=".$line["codeit"]."&villedep=".$line["villedep"]."&villearriv=".$line["villearriv"]."\">
                <img src=\"../../Style/icons/modifier.jfif\" alt=\"modifier\" ></a></td>";        

                echo "<td class=\"supprimmer\"><a id=\"supp\" href=\"supprimer_Intineraire.php?id=".$line["codeit"]."\">
                    <img src=\"../../Style/icons/supprimer.png\" alt=\"supprimer\"></a></td>";        
                 echo"</tr>";
        
            }
           
        }
        else{
            echo"";
        }
    }
    
    function ajout_Intinéraire($c)
    {
        
        if(isset($_POST["codeit"])&&isset($_POST["villedep"])&&isset($_POST["villearriv"])){
            $codeit = $_POST["codeit"];
            $villedep     = $_POST["villedep"] ;
            $villearriv   = $_POST["villearriv"] ;

            $query="INSERT INTO Intineraire VALUE
                    (\"".$codeit."\",\"".$villedep."\",\"".$villearriv."\");";
            execution_requete($c, $query);

        //   header("Location:interface_intineraire.php"); 
        }    
    }
    function modifier_intineraire($c)
    {
        if(isset($_POST["codeit_nouveau"])&&$_POST["villedep_nouveau"]&&$_POST["villearriv_nouveau"])
        {
            $codeit = $_POST["codeit_nouveau"];
            $villedep_nouveau = $_POST["villedep_nouveau"];
            $villearriv_nouveau     = $_POST["villearriv_nouveau"] ;
            $query="UPDATE Intineraire set villedep=\"".$villedep_nouveau."\",villearriv=\"".$villearriv_nouveau."\"  where codeit=\"".$codeit."\";";
            execution_requete($c, $query);

             header("Location:interface_intineraire.php");
           
        }   
    }
    
    function supprimer_intneraire($c)
    {
        if(isset($_GET["id"]))
        {
//          Suppresion d'un intinéraire par id    
            $codeit = $_GET["id"];
            $querry= "DELETE FROM Intineraire where codeit=\"".$codeit."\" ;";

            execution_requete($c, $querry);

      
            header("Location:interface_intineraire.php"); 
        }
    }
?>