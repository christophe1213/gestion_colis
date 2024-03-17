    <?php
        include __DIR__."/../header.php";
    ?>
    <?php
        include __DIR__."/../../controleur/Intineraire.php";
        include __DIR__ ."/../../controleur/connection.php";
        //Affichage de donnée

        $query = "SELECT * FROM intineraire; ";
        affichage_Intineraire($conn, $query);      
        $conn->close();
    ?>
    <script src="../../Style/js/nav.js"></script>
    <script>
        document.title="Intineraire"
        titre=document.querySelectorAll("#navbar")
       
        nav_courante("Intineraire")
       
    </script>
</body>
</html>