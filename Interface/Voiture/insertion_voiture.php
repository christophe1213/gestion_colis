<?php 
   //Connection de base de données et appelle les fonctions sur voiture.php
   include __DIR__ ."/../../controleur/connection.php";
   include __DIR__."/../../controleur/voiture.php"; 
   ajout_voiture($conn);
   //en tête de la page
  include __DIR__."/../header.php"; 
   $conn->close();

?>
    <div class="message">
        <div class="container">
        
            <form action="insertion_voiture.php" method = "POST">
            <a href="interface_voiture.php"><img src="../../Style/icons/delete.png" class="fermer" alt="fermer" title="fermer"></a>
                <p class="tittre_message">Modification du voiture</p>
                <input type="text" name="idvoit" required placeholder="Id Voiture" ><br>
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
                <input type="text" name="Design"  required placeholder="Design" ><br>
                <input type="number" name="frais" required placeholder="frais">
                <input type="submit"value ="Ajouter" >

            </form>
        </div>
    </div>
<

   <script src="../../Style/js/nav.js"></script>
    <script>
        document.title="Voiture"
        titre=document.querySelectorAll(".navbar a")
        nav_courante("Voiture")
    </script>
    <script src="../../Style/js/style.js"></script>
    <script>
        style(ajout)
    </script>

</body>
</html>