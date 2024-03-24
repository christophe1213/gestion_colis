<?php
    include __DIR__. "/../../controleur/connection.php";
    include __DIR__."/../../controleur/recevoir.php";
    if(isset($_GET["supp"])){
        supprimer_recevoir($conn);
    }
    include __DIR__."/../header.php";
    $conn->close();
?>
 <div class="message">
        <div class="box_message">
        <a class="fermer" href="interface_Voiture.php"><img class="icons" src="../../Style/icons/delete.png" alt="fermer" title="fermer"></a>
                <p class="tittre_message">Vous voulez le supprimer</p>
                <?php
                    echo"<button class=\"btn_confi\"><a class=\"btn_confi_lien\"  href=\"supprimer_recevoir.php?supp=ok&id=".$_GET['id']."\">OUI</a></button>
                        <button class=\"btn_confi\" ><a class=\"btn_confi_lien\"  href=\"interface_Recevoir.php\">NON</a></button>"
                ?>
        </div>

    </div>
    <script src="http://localhost/gestion_colis/Style/js/nav.js"></script>
    <script src="http://localhost/gestion_colis/Style/js/menu.js"></script>
    <script>
        document.title="Recevoir"
        titre=document.querySelectorAll(".navbar a")
 
        nav_courante("Recevoir")
    
    </script>
    
    <body>
    </html>