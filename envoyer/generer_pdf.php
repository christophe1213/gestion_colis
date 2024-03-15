<?php 

    //  include "header.php";      
    //   include "controleur/connection.php";
    //   include "controleur/envoyer.php";

    include __DIR__."/../controleur/envoyer.php";
    include __DIR__ ."/../controleur/connection.php";  
    include __DIR__."/../header.php";
      $query = "SELECT * FROM envoyer; ";
      affichage_envoyer($conn, $query);
     
      $conn->close();
?>


<div class = "a">
       <div class="contenaire">
            <div class="suppression">
                <a class="fermer" href="interface_envoyer.php"><img class="icons" src="../icons/delete.png" alt="fermer"></a>
                <h1>Insetion réussi </h1>
                <p>Génerer en pdf</p>
            <?php
                   $i = $_GET["id"];
                //    echo "<button class=\"pdf\"><a href=\"pdf.php?id=".$i."\"><img src=\"../icons/printer.svg\" alt=\"modifier\" > </a></button>";  
                   echo "<button class=\"pdf\"><a href=\"dompdf.php?id=".$i."\"><img src=\"../icons/printer.svg\" alt=\"modifier\" > </a></button>";  
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
</body>
</html>
