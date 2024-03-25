<?php
//Inclure les fonctions de l'intineaire, et les fonctions pour la connection de basse données
include __DIR__."/../../controleur/Intineraire.php";
include __DIR__ ."/../../controleur/connection.php";

//Suppression de la donnée 
if(isset($_GET["supp"])){
    supprimer_intneraire($conn);
}

include __DIR__."/../header.php";
$conn->close();

?>
  <div class="message">
        <div class="box_message">
        <a href="interface_intineraire.php"><img src="../../Style/icons/delete.png" class="fermer" alt="fermer" title="fermer"></a>
            <p class="tittre_message">Vous voulez le supprimer</p>
            <?php
              echo"<button class=\"btn_confi\"><a class=\"btn_confi_lien\"  href=\"supprimer_intineraire.php?supp=ok&id=".$_GET['id']."\">OUI</a></button>
                    <button class=\"btn_confi\" ><a class=\"btn_confi_lien\"  href=\"interface_intineraire.php\">NON</a></button>";
            ?>
        
        </div>

    </div>
    <script src="http://localhost/gestion_colis/Style/js/nav.js"></script>
    <script src="http://localhost/gestion_colis/Style/js/menu.js"></script>
    <script>
        document.title="Intineraire"
        titre=document.querySelectorAll(".navbar a")    
        nav_courante("Intineraire")
        style(suppression)
    </script>        
    </body>
    </html>
   