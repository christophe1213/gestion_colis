    <?php
        include __DIR__."/../../controleur/Intineraire.php";
        include __DIR__ ."/../../controleur/connection.php";  
        modifier_intineraire($conn);
        include __DIR__."/../header.php";
        $conn->close(); 
    ?>
    <?php
        echo"<div class=\"message\">
        <div class=\"container\">";
        if(isset($_GET["id"])&&isset($_GET["villedep"])&&isset($_GET["villearriv"])){
            $codeit_modifier       = $_GET["id"];
            $villedep_modifier     = $_GET["villedep"] ;
            $villearriv_modifier   = $_GET["villearriv"] ;
            echo"<form action=\"modifier_Intineraire.php\" method = \"POST\">
                    <a class=\"fermer\" href=\"interface_intineraire.php\"><img class=\"icons\" src=\"../../Style/icons/delete.png\" alt=\"fermer\" title=\"fermer\"></a>
                    <p class=\"tittre_message\">Modification</p>
                    <input type=\"texte\" value=\"".$codeit_modifier."\"  name=\"codeit_nouveau\" required>
                    <input type=\"texte\" value=\"".$villedep_modifier."\" name=\"villedep_nouveau\" required>
                    <input type=\"texte\" value=\"".$villearriv_modifier."\" name=\"villearriv_nouveau\" required>
                    <input type=\"submit\" value=\"Modifier\">
                </form>";
            }
        echo "</div>
        </div>"; 
    ?>
    <script src="../../Style/js/nav.js"></script>
    <script>
        document.title="Intineraire"
        titre=document.querySelectorAll("#navbar")
       
        nav_courante("Intineraire")
    </script>
      <script src="../../Style/js/style.js"></script>
    <script>
        style(ajout)
    </script>

</body>
</html>