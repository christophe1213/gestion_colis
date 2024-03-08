<?php
  
   include __DIR__ ."/../controleur/connection.php";
   include __DIR__."/../controleur/voiture.php";
   modifier_voiture($conn);
   include __DIR__."/../header.php";

   $query = "SELECT * FROM voiture; "; 
   affichage_voiture($conn, $query);  
    $conn->close(); 


?>

    <?php
   include __DIR__ ."/../controleur/connection.php";
   include __DIR__ ."/../controleur/selection_donne.php";
  
   
    echo "<div class=\"a\">";
    echo "<div class=\"contenaire\">";
    if(isset($_GET["id"])&&isset($_GET["codeit"])&&isset($_GET["Design"])&&isset($_GET["frais"])){
        $idvoi             = $_GET["id"];
        $codeit_modifier   = $_GET["codeit"];
        $Design_modifier   = $_GET["Design"] ;
        $Frais_modifier    = $_GET["frais"] ;


         echo "<form  class=\"ajout\" action=\"modifier_voiture.php\" method=\"POST\">
         <a class=\"fermer\" href=\"interface_voiture.php\"><img class=\"icons\" src=\"../icons/delete.png\" alt=\"fermer\"></a>
                            <label for=\"idvoi\"> Idvoi</label></br>
                            <input type=\"texte\" value=\"".$idvoi."\" name=\"idvoit\"></br> 
                            <label for=\"idvoi\"> Code Intineraire</label></br>
                            <select class=\"selection\" name=\"codeit_nouveau\">";
                            $i="codeit";$table="Intineraire";
                            //selection donnée pour code Intineraire
                            selection_donne_intineraire_2($conn,$codeit_modifier);
                            echo "<select></br>";                
        echo                "<label for=\"Design\">Design</label></br>
                            <input type=\"texte\" value=\"".$Design_modifier."\" name=\"Design_nouveau\"></br>
                            <label for=\"idvoi\">Frais</label></br>
                            <input type=\"number\" value=\"".$Frais_modifier."\" name=\"frais_nouveau\">
                            <input type=\"submit\" value=\"Modifier\">
                </form>";
    }
    echo "</div>";
    echo "</div>";
    $conn->close(); 
   
    ?>
    <script src="../js/b.js"></script>
    <script>
        document.title="Modification du voiture"
        titre=document.querySelectorAll("#navbar")
        nav_courante("Voiture")
    </script>
</body>
</html>