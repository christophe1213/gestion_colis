<?php
   //Connection de base de données et appelle les fonctions sur voiture.php
    include __DIR__ ."/../../controleur/connection.php";
    include __DIR__."/../../controleur/voiture.php";
    if(isset($_GET["supp"])){
        supprimer_voiture($conn);
    }        
    include __DIR__."/../header.php";
    $conn->close();
 
?>
 <div class="message">
        <div class="box_message">
        <a class="fermer" href="interface_Voiture.php"><img class="icons" src="../../Style/icons/delete.png" alt="fermer" title="fermer"></a>
                <p class="tittre_message">Vous voulez le supprimer</p>
                <?php
                    echo"<button class=\"btn_confi\"><a class=\"btn_confi_lien\"  href=\"supprimer_voiture.php?supp=ok&id=".$_GET['id']."\">OUI</a></button>
                        <button class=\"btn_confi\" ><a class=\"btn_confi_lien\"  href=\"interface_Voiture.php\">NON</a></button>"
                ?>
        </div>

    </div>

    <script src="http://localhost/gestion_colis/Style/js/nav.js"></script>
    <script src="http://localhost/gestion_colis/Style/js/menu.js"></script>
    <script>
        document.title="Voiture"
        titre=document.querySelectorAll("#navbar")
        nav_courante("Voiture")
    </script>
</body>
</html>