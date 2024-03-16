
    <?php
        include __DIR__."/../controleur/envoyer.php";
        include __DIR__ ."/../controleur/connection.php";
        include __DIR__."/../header.php";
        $query = "SELECT * FROM envoyer; ";
        affichage_envoyer($conn,$query);

        $conn->close();
    ?>
 
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
</body>
</html>