<?php
       include __DIR__. "/../controleur/connection.php";
       include __DIR__."/../controleur/recevoir.php";
    modifier_recevoir($conn);

    include __DIR__."/../header.php";
    $query = "SELECT * FROM recevoir; ";
    affichage_recevoir($conn, $query);
        
    $conn->close(); 
?>

    <?php
    include __DIR__. "/../controleur/connection.php";
   
    include __DIR__."/../controleur/selection_donne.php";

    echo "<div class=\"a\">";
    echo "<div class=\"contenaire\">";
    if( isset($_GET["id"])&&isset($_GET["idenvoi"])&&isset($_GET["date_recept"])){

            $idrecpt            = $_GET["id"];
            $idenvoi            = $_GET["idenvoi"] ;
            $date_recept        = $_GET["date_recept"]; 
        

             echo "<form  class=\"ajout\" action=\"modifier_recevoir.php\" method=\"POST\">
             <a class=\"fermer\" href=\"interface_recevoir.php\"><img class=\"icons\" src=\"../icons/delete.png\" alt=\"fermer\"></a>
                            <label for=\"idrecept\">N° reception</label>
                            <input type=\"number\" value=\"".$idrecpt."\" name=\"idrecept\"><br>
                            <label for=\"idenvoi\">N° envoye</label> 
                            <select name=\"idenvoi_nouveau\"><br>";
                            $i="idenvoi";$table="envoyer";
                            //selection donnée pour id envoye
                            selection_donne($conn,$i,$table);
                            echo "<select><br>";     

            echo            "
                            <label for=\"colis\">Date de reception</label><br>
                            <input type=\"texte\" value=\"".$date_recept."\" name=\"date_recept_nouveau\"><br>
                            <input type=\"submit\" value=\"Modifier\">
                    </form>";
    }
    echo "</div>";
    echo "</div>";
    ?>
   <script src="../js/b.js"></script>
    <script>
        document.title="Recevoir"
        titre=document.querySelectorAll("#navbar")
    </script>
    <script>
        body =document.getElementById('corps')
        nav_courante("Recevoir")
    </script>
  
</body>
</html>