<?php 
   //Connection de base de données et appelle les fonctions sur voiture.php
   include __DIR__ ."/../../controleur/connection.php";
   include __DIR__."/../../controleur/voiture.php";
  
   ajout_voiture($conn);
   //en tête de la page
  include __DIR__."/../header.php";
  

//    $query = "SELECT * FROM voiture; "; 
//    affichage_voiture($conn, $query);  
   $conn->close();

?>
<div class='a'>
    <div class="contenaire">
        <form  class="ajout"  action="insertion_voiture.php" method = "POST">
            <a class="fermer" href="interface_voiture.php"><img class="icons" src="../../Style/icons/delete.png" alt="fermer"></a>        
            <label for="idvoit">Id Voiture</label>
            <input type="text" name="idvoit" required ><br>
            <label for="codeit">Code intinéraire</label><br>
            <select name="codeit" class='selection'><br>
                <?php 
                    //Connection de base de données et appelle les fonctions sur voiture.php
                    include __DIR__ ."/../../controleur/connection.php";
                    include __DIR__ ."/../../controleur/selection_donne.php";
                    $i="codeit";$table="Intineraire";
                    //selection donnée pour code Intineraire
                    // selection_donne($conn,$i,$table);
                    selection_donne_intineraire($conn);
                    $conn->close();
                ?>
            </select>
            <br>
            <label for="ville">Design</label>
            <input type="text" name="Design" required ><br>
            <label for="frais">Frais</label>
            <input type="number" name="frais" required>
            <input type="submit"value ="Ajouter" >

        </form>
    </div>
</div>

   <script src="../../Style/js/nav.js"></script>
    <script>
        document.title="Voiture"
        titre=document.querySelectorAll("#navbar")
        nav_courante("Voiture")
    </script>
    <script src="../../Style/js/style.js"></script>
    <script>
        style(ajout)
    </script>

</body>
</html>