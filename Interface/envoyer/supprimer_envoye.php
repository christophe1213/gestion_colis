<?php
    include __DIR__."/../../controleur/envoyer.php";
    include __DIR__ ."/../../controleur/connection.php";
    if(isset($_GET["supp"])){
        supprimer_envoye($conn);
    }
    include __DIR__. "/../header.php";
    $conn->close();

?>
 <div class="message">
        <div class="box_message">
        <a class="fermer" href="interface_Envoyer.php"><img class="icons" src="../../Style/icons/delete.png" alt="fermer" title="fermer"></a>
                <p class="tittre_message">Vous voulez le supprimer</p>
                <?php
                    echo"<button class=\"btn_confi\"><a class=\"btn_confi_lien\"  href=\"supprimer_envoye.php?supp=ok&id=".$_GET['id']."\">OUI</a></button>
                        <button class=\"btn_confi\" ><a class=\"btn_confi_lien\"  href=\"interface_Envoyer.php\">NON</a></button>"
            ?>
        </div>

    </div>
    <script src="http://localhost/gestion_colis/Style/js/nav.js"></script>
    <script src="http://localhost/gestion_colis/Style/js/menu.js"></script>
    <script>
        document.title="Envoyer"
        titre=document.querySelectorAll("#navbar")
        nav_courante("Envoyer")
    </script> 
  *
</body>
</html>