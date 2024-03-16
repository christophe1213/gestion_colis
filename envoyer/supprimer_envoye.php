<?php
     include __DIR__."/../controleur/envoyer.php";
     include __DIR__ ."/../controleur/connection.php";
        if(isset($_GET["supp"])){
            supprimer_envoye($conn);
        }

    include __DIR__. "/../header.php";
    // $query = "SELECT * FROM envoyer; ";
    // affichage_envoyer($conn, $query);
    $conn->close();

?>
 <div class = "a">
       <div class="contenaire">
            <div class="suppression">
                <a class="fermer" href="interface_Envoyer.php"><img class="icons" src="../icons/delete.png" alt="fermer"></a>
                <p>Vous voulez le supprimer</p>
            <?php
                    echo"<button class=\"btn_confi\"><a class=\"btn_confi_lien\"  href=\"supprimer_envoye.php?supp=ok&id=".$_GET['id']."\">OUI</a></button>
                        <button class=\"btn_confi\" ><a class=\"btn_confi_lien\"  href=\"interface_Envoyer.php\">NON</a></button>"
            ?>
            </div>

        </div>
    </div>  
    <script src="../js/b.js"></script>
    <script>
        document.title="Envoyer"
        titre=document.querySelectorAll("#navbar")
    </script>
    <script>
        body =document.getElementById('corps')
        nav_courante("Envoyer")
    </script>
      <script src="../js/style.js"></script>
    <script>
        style(suppression)
    </script>
</body>
</html>