<?php 
    include __DIR__."/../../controleur/envoyer.php";
    include __DIR__ ."/../../controleur/connection.php";  
    include __DIR__."/../header.php";
     
     $conn->close();
?>

<div class="message">
        <div class="box_message">
            <a class="fermer" href="interface_Envoyer.php"><img class="icons" src="../../Style/icons/delete.png" alt="fermer" title="fermer"></a>
            <p class="tittre_message">Insertion réussi<br>Génerer en pdf</p>
            <?php
               $i = $_GET["id"];
               echo "<button class=\"pdf\"><a href=\"../../controleur/dompdf.php?id=".$i."\"><img src=\"../../Style/icons/printer.svg\" alt=\"modifier\" > </a></button>";  
            ?>
        </div>
    </div>
    </div>  
    <script src="http://localhost/gestion_colis/Style/js/nav.js"></script>
    <script src="http://localhost/gestion_colis/Style/js/menu.js"></script>
    <script>
        document.title="Envoyer"
        titre=document.querySelectorAll(".navbar a")

        nav_courante("Envoyer")
    </script>
   
</body>
</html>
