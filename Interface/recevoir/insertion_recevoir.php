<?php
    include __DIR__. "/../../controleur/connection.php";
    include __DIR__."/../../controleur/recevoir.php";
    //Fonction pour inserer des données
    insertion_recevoir($conn);
    include __DIR__."/../header.php";

    $conn->close();

?>
 <div class="message">
        <div class="container">
        
            <form action="insertion_Recevoir.php" method = "POST">
            <a href="interface_Recevoir.php"><img src="../../Style/icons/delete.png" class="fermer" alt="fermer" title="fermer"></a>
                <p class="tittre_message">Insertion</p>
                <input type="number" name="idrecept" id="idrecept"  required placeholder="Id recption" ><br>
                <label for="idenvoi">Id envoi</label><br>
                <!-- <input type="number" name="idenvoi" ><br> -->
                <select class="selection" name="idenvoi">
                    <?php
                        include __DIR__. "/../../controleur/connection.php";
                        include __DIR__."/../../controleur/selection_donne.php";
                        $i="idenvoi";$table="envoyer";
                        //selection donnée pour code Intineraire
                        selection_donne($conn,$i,$table);
                        $conn->close();
                    ?>
                </select><br>
                <label for="date_recept">date recption</label><br>
                <?php
                    include __DIR__. "/../../controleur/connection.php";
                    if($r = $conn->query("SELECT now();")){
                        while($row = $r->fetch_assoc()){

                            echo "<input type=\"datetime-local\" name=\"date_recept\" required value=\"".$row['now()']."\" ><br>";
                        }
                   }
                   else{
                    echo "echec";
                   }
                    $conn->close();
                ?>
                <input type="submit"value ="Ajouter"> 

            </form>
        </div>
    </div>
    <script src="http://localhost/gestion_colis/Style/js/nav.js"></script>
    <script src="http://localhost/gestion_colis/Style/js/menu.js"></script>
    <script src="http://localhost/gestion_colis/Ajax/verification_cle_primary.js"></script>
    <script>
        document.title="Recevoir"
        titre=document.querySelectorAll(".navbar a")
        nav_courante("Recevoir")
        verification_cle_primaire('idrecept')        
    </script>
 

</<body>
</html>