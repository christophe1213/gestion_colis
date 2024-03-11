<?php 
include "header.php";
?>
   <div class="contenaire">
        <p id="message_erreur"></p>
<form class="ajout"  action="intineraire.php" method = "POST">
<a class="fermer" href="interface_intineraire.php"><img class="icons" src="icons/delete.png" alt="fermer"></a>
        <label for="codeit" >Code Intinéraire</label>
        <input type="text" id="codeit" name="codeit" required ><br>
        <label for="Nom">Ville départ</label>
        <input type="text" id="villedep" name="villedep" required><br>
        <label for="ville">Ville d'arrivée</label>
        <input type="text" id="villearriv" name="villearriv" required ><br>
        <input  type="submit"value ="Ajouter" id="Ajout" >

    </form>
</div>
<?php
    include "controleur/connection.php";
    include "controleur/Intineraire.php";

    modifier_intineraire($conn);
    echo "<div class=\"contenaire\">";
    if(isset($_GET["id"])&&isset($_GET["villedep"])&&isset($_GET["villearriv"])){
         $codeit_modifier       = $_GET["id"];
         $villedep_modifier     = $_GET["villedep"] ;
         $villearriv_modifier   = $_GET["villearriv"] ;


         echo "<form  class=\"ajout\" action=\"intineraire.php\" method=\"POST\">
                            <a class=\"fermer\" href=\"interface_intineraire.php\"><img class=\"icons\" src=\"icons/delete.png\" alt=\"fermer\"></a>
                            <input type=\"texte\" value=\"".$codeit_modifier."\" name=\"codeit_nouveau\">
                            <input type=\"texte\" value=\"".$villedep_modifier."\" name=\"villedep_nouveau\">
                            <input type=\"texte\" value=\"".$villearriv_modifier."\" name=\"villearriv_nouveau\">
                            <input type=\"submit\" value=\"Modifier\">
                </form>";
    }
        echo "</div>";
    echo " <div class=\"b\">

       <main class=\"table\">
           <section class=\"table_header\">
               <h1>Intineraire</h1>
             
               <a href=\"insertion_intineraire.php\"><img class=\"icons\" src=\"img/ajout.jfif\" alt=\"ajouter\" width=\"20px\" height=\"20px\"></a>
   
           
   
           </section>
           <section class=\"table_body\">
            ";
            $query_affichage = "SELECT * FROM Intineraire;";
            affichage_Intineraire($conn, $query_affichage);
            ajout_Intinéraire($conn);  
            $conn->close(); 
    
    ?>
        </section>
    <script src="js/navbar.js"></script>
    <script>
        document.title="Intineraire"
        titre=document.querySelectorAll("#navbar")
    </script>
    <script>
        nav_courante("Intineraire")
    </script>
    <script>
        cont=document.querySelectorAll('.contenaire');
        //cacher par defaut tout les contenaire
        for(i=0;i<cont.length;i++){
            cont[i].style.display="none";
        }
        
    </script>
    <script>

    </script>
</body>
</html>

