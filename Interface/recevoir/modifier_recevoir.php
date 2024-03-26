<?php
    include __DIR__. "/../../controleur/connection.php";
    include __DIR__."/../../controleur/recevoir.php";
    modifier_recevoir($conn);
    include __DIR__."/../header.php";        
    $conn->close(); 
?>
 <?php
    include __DIR__. "/../../controleur/connection.php";
    include __DIR__."/../../controleur/selection_donne.php";
        echo"<div class=\"message\">
         <div class=\"container\">";
        if( isset($_GET["id"])&&isset($_GET["idenvoi"])&&isset($_GET["date_recept"])){

            $idrecpt            = $_GET["id"];
            $idenvoi            = $_GET["idenvoi"] ;
            $date_recept        = $_GET["date_recept"]; 
        

             echo "<form action=\"modifier_recevoir.php\" method=\"POST\">
             <a class=\"fermer\" href=\"interface_recevoir.php\"><img class=\"icons\" src=\"../../Style/icons/delete.png\" alt=\"fermer\" title=\"fermer\"></a>
             <p class=\"tittre_message\">Modification</p>
                            <input type=\"number\" value=\"".$idrecpt."\" name=\"idrecept\" placeholder=\"id reception\" required><br>
                            <label for=\"idenvoi\">N° envoye</label><br>
                            <select class=\"selection\" name=\"idenvoi_nouveau\"><br>";
                            $i="idenvoi";$table="envoyer";
                            //selection donnée pour id envoye
                            // selection_donne($conn,$i,$table);
                            selection_donne_modifie($conn,$i,$table,$idenvoi);
                            echo "<select><br>";     

            echo            "
                            <label for=\"colis\">Date de reception</label><br>
                            <input type=\"texte\" value=\"".$date_recept."\" name=\"date_recept_nouveau\" required><br>
                            <input type=\"submit\" value=\"Modifier\">
                    </form>";
    }
        echo "</div>
        </div>"; 
    // ?>
   <script src="../../Style/js/nav.js"></script>
    <script>
        document.title="Recevoir"
        titre=document.querySelectorAll("#navbar")
    </script>
    <script>
        body =document.getElementById('corps')
        nav_courante("Recevoir")
    </script>
  <script src="../../Style/js/style.js"></script>
    <script>
        style(ajout)
    </script>

  
</body>
</html>