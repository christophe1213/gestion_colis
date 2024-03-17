<?php
     
     include __DIR__."/../../controleur/envoyer.php";
     include __DIR__ ."/../../controleur/connection.php";
      insertion_envoyer($conn);
      include __DIR__."/../header.php";
    //   $query = "SELECT * FROM envoyer; ";
    //   affichage_envoyer($conn,$query);

      $conn->close();
?>
<div class="a">
    <div class="contenaire">
        <form class="ajout" action="insertion_envoyer.php" method = "POST">
        <a class="fermer" href="interface_Envoyer.php"><img class="icons" src="../../Style/icons/delete.png" alt="fermer" title="fermer"></a>
                <label for="idenvoi">N°</label><br>
                <?php
                       include __DIR__ ."/../../controleur/connection.php";
                        // include __DIR__. "/../controleur/selection_donne.php";
                        $querry="select max(idenvoi) from envoyer;";
                        $r=$conn->query($querry);
                        $line=$r->fetch_assoc();
                        $id=$line['max(idenvoi)']+1;
                        echo "<input type=\"number\" name=\"idenvoi\"  placeholder='$id' required ><br>";
                        $conn->close();
                    ?>
                <!-- <input type="number" name="idenvoi" required ><br> -->
                <label for="idvoit">N°voiture</label><br>
                <select class="selection" name="idvoit">
                    <?php
                      
                        include __DIR__. "/../../controleur/selection_donne.php";
                        $i="idvoit";$table="voiture";
                        //selection donnée pour identification VOITURE
                        selection_donne($conn,$i,$table);
                        $conn->close();
                    ?>
                </select><br>
                <label for="colist">colis</label><br>
                <input type="text" name="colis" required><br>
                <label for="nomEnvoyeur">Nom de l'envoyeur</label><br>
                <input type="text" name="nomEnvoyeur" ><br>
                <label for="emailEnvoyeur">Email</label><br>
                <input type="email" name="emailEnvoyeur" required ><br>
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
                
                <label for="frais">frais</label><br>
                <input type="number" name="frais" ><br>
                <label for="NomRecepteur">Nom du recepteur</label><br>
                <input type="text" name="nomRecepteur" required ><br>
                <label for="contact">contact</label></br>
                <input type="text" id="contactRecepteur" name="contactRecepteur" required maxlength="10" minlength="10" ><br>
                <input type="submit"value ="Ajouter" >

            </form>
    </div>
  
</div>

    <script src="../../Style/js/nav.js"></script>
    <script>
        document.title="Envoyer"
        titre=document.querySelectorAll("#navbar")
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