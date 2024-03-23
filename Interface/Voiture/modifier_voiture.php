<?php 
  include __DIR__ ."/../../controleur/connection.php";
  include __DIR__."/../../controleur/voiture.php";
   modifier_voiture($conn);
   include __DIR__."/../header.php";
    $conn->close(); 


?>
<?php
    include __DIR__ ."/../../controleur/connection.php";
    include __DIR__ ."/../../controleur/selection_donne.php";
    echo"<div class=\"message\">
            <div class=\"container\">   ";
    if(isset($_GET["id"])&&isset($_GET["codeit"])&&isset($_GET["Design"])&&isset($_GET["frais"])){
        $idvoi             = $_GET["id"];
        $codeit_modifier   = $_GET["codeit"];
        $Design_modifier   = $_GET["Design"] ;
        $Frais_modifier    = $_GET["frais"] ;
        
        
        echo "<form action=\"modifier_voiture.php\" method=\"POST\">
                <a class=\"fermer\" href=\"interface_Voiture.php\"><img class=\"icons\" src=\"../../Style/icons/delete.png\" alt=\"fermer\" title=\"fermer\"></a>                   
                <p class=\"tittre_message\">Modifier Voiture</p>
                <input type=\"texte\" value=\"".$idvoi."\" name=\"idvoit\"></br> 
                <label for=\"idvoi\"> Code Intineraire</label></br>
                <select class=\"selection\" name=\"codeit_nouveau\">";
        $i="codeit";$table="Intineraire".
        //selection donnée pour code Intineraire
            selection_donne_intineraire_2($conn,$codeit_modifier);
            echo "<select></br>";                
            echo"<input type=\"texte\" value=\"".$Design_modifier."\" name=\"Design_nouveau\"></br>
                <input type=\"number\" value=\"".$Frais_modifier."\" name=\"frais_nouveau\">
                <input type=\"submit\" value=\"Modifier\">
                </form>";
        }
    echo"  </div>
    </div>";
    $conn->close(); 
?>
   <script src="../../Style/js/nav.js"></script>
    <script>
        document.title="Modification du voiture"
        titre=document.querySelectorAll(".navbar a")
        nav_courante("Voiture")
    </script>
    <script src="../../Style/js/style.js"></script>
    <script>
        style(ajout)
    </script>

</body>
</html>