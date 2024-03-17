
<?php
    include __DIR__."/../controleur/envoyer.php";
    include __DIR__ ."/../controleur/connection.php";

    include __DIR__."/../header.php";
    if(isset($_GET["recherche"])){
        $recherche=$_GET["recherche"];
        recherche($conn,$recherche);
    }
    if(isset($_GET["date_dep"])&&isset($_GET["date_fin"])){
        $date_debut = $_GET["date_dep"];
        $date_fin   = $_GET["date_fin"];
        recherche_entre_deux_date($conn, $date_debut, $date_fin);
    }
 
    $conn->close();

?>
   
   <script src="../../Style/js/nav.js"></script>
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