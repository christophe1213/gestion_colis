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
    <div class = "a">
       <div class="contenaire">
            <div class="suppression">
                <a class="fermer" href="interface_intineraire.php"><img class="icons" src="../../Style/icons/delete.png" alt="fermer" title="fermer"></a>
                <p>Vous voulez le supprimer</p>
            <?php
                    echo"<button class=\"btn_confi\"><a class=\"btn_confi_lien\"  href=\"supprimer_intineraire.php?supp=ok&id=".$_GET['id']."\">OUI</a></button>
                        <button class=\"btn_confi\" ><a class=\"btn_confi_lien\"  href=\"interface_intineraire.php\">NON</a></button>"
            ?>
            </div>

        </div>
    </div> 

    <script src="../../Style/js/b.js"></script>
    <script>
        document.title="Intineraire"
        titre=document.querySelectorAll("#navbar")
       
        nav_courante("Intineraire")
    </script>
    <script src="../../Style/js/style.js"></script>
    <script>
        style(suppression)
    </script>        
    </body>
    </html>
   