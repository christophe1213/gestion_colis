<?php
        //en tête de la page
       include __DIR__."/../header.php";
?>
    <?php
        //Connection de base de données et appelle les fonctions sur voiture.php
        include __DIR__ ."/../controleur/connection.php";
        include __DIR__."/../controleur/voiture.php";

        //Affichage de donné
        $query = "SELECT * FROM voiture; ";
        affichage_voiture($conn, $query);


        
        $conn->close();
    ?>
    <script src="../js/b.js"></script>
    <script>
        document.title="Voiture"
        titre=document.querySelectorAll("#navbar")
    </script>
    <script>
        body =document.getElementById('corps')
        // body.style.background="url(../fond2.avif) center/cover"
        nav_courante("Voiture")
    </script>
</body>
</html>