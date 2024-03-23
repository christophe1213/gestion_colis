        <?php
            
            include __DIR__."/../../controleur/envoyer.php";
            include __DIR__ ."/../../controleur/connection.php";
            insertion_envoyer($conn);
            include __DIR__."/../header.php";
            $conn->close();
        ?>
        <div class="message" id="insertion_envoyer">
            <div class="container">
            <form action="insertion_envoyer.php" method = "POST">
                <a href="interface_Envoyer.php"><img src="../../Style/icons/delete.png" class="fermer" alt="fermer" title="fermer"></a>
                <p class="tittre_message">Insertion d'envoie</p>
                <input type="number" name="idenvoi" placeholder="Id envoi"><br>
                <select class="selection" name="idvoit">
                    <?php
                      
                        include __DIR__. "/../../controleur/selection_donne.php";
                        $i="idvoit";$table="voiture";
                        //selection donnée pour identification VOITURE
                        selection_donne($conn,$i,$table);
                        $conn->close();
                    ?>
                </select><br>
                <input type="text" name="colis" required placeholder="colis"><br>
                <label for="nomEnvoyeur">Nom de l'envoyeur</label><br>
                <input type="text" name="nomEnvoyeur" ><br>
                <input type="email" name="emailEnvoyeur" required placeholder="Email" ><br>
                <label for="date_envoi">date d'envoi</label><br>
                <?php
                   include __DIR__ ."/../../controleur/connection.php";
                   if($r = $conn->query("SELECT now();")){
                        while($row = $r->fetch_assoc()){
                            $d=$row['now()'];
                            echo "<input type=\"datetime-local\" name=\"date_envoi\" required value=\"".$row['now()']."\" ><br>";
                        }
                   }
                   else{
                    echo "echec";
                   }
                  
                    $conn->close();
                ?>
                <input type="number" name="frais" placeholder="frais" ><br>
                <input type="text" name="nomRecepteur" required placeholder="Nom du recepteur" ><br>
                <input type="text" id="contactRecepteur" name="contactRecepteur"  required maxlength="10" minlength="10" placeholder="contact du recepteur" ><br>
                <input type="submit"value ="Ajouter" > 
            </form>
        </div>
    </div>
    <script src="../../Style/js/nav.js"></script>
    <script>
        document.title="Envoyer"
        titre=document.querySelectorAll(".navbar a")
    </script>
    <script>
        body =document.getElementById('corps')
        nav_courante("Envoyer")
    </script>
    <script src="../../Style/js/style.js"></script>
    <script>
        style(ajout)
    </script>

  
</body>
</html>