<?php
   include __DIR__."/../controleur/Intineraire.php";
   include __DIR__ ."/../controleur/connection.php";
   
   modifier_intineraire($conn);
   include __DIR__."/../header.php";
    $query_affichage = "SELECT * FROM Intineraire;";
    affichage_Intineraire($conn, $query_affichage);  
    $conn->close(); 

?>

    <?php
 
    echo  "<div class=\"a\">";
    echo "<div class=\"contenaire\">";
    if(isset($_GET["id"])&&isset($_GET["villedep"])&&isset($_GET["villearriv"])){
         $codeit_modifier       = $_GET["id"];
         $villedep_modifier     = $_GET["villedep"] ;
         $villearriv_modifier   = $_GET["villearriv"] ;


         echo "<form  class=\"ajout\" action=\"modifier_Intineraire.php\" method=\"POST\">
                            <a class=\"fermer\" href=\"interface_intineraire.php\"><img class=\"icons\" src=\"../icons/delete.png\" alt=\"fermer\"></a>
                            <input type=\"texte\" value=\"".$codeit_modifier."\" name=\"codeit_nouveau\">
                            <input type=\"texte\" value=\"".$villedep_modifier."\" name=\"villedep_nouveau\">
                            <input type=\"texte\" value=\"".$villearriv_modifier."\" name=\"villearriv_nouveau\">
                            <input type=\"submit\" value=\"Modifier\">
                </form>";
    }
        echo "</div>";
        echo "</div>";
    
    ?>
 
   <script src="../js/b.js"></script>
    <script>
        document.title="Intineraire"
        titre=document.querySelectorAll("#navbar")
       
        nav_courante("Intineraire")
       
    </script>
</body>
</html>