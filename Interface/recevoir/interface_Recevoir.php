<?php
       
       include __DIR__. "/../../controleur/connection.php";
       include __DIR__."/../../controleur/recevoir.php";
        include __DIR__."/../header.php";
        //Affichage de donné
        $query = "SELECT * FROM recevoir; ";
        affichage_recevoir($conn, $query);

        
        
        $conn->close();
?>
   
   <script src="../../Style/js/b.js"></script>
    <script>
        document.title="Recevoir"
        titre=document.querySelectorAll("#navbar")
    </script>
    <script>
        body =document.getElementById('corps')
        nav_courante("Recevoir")
    </script>
    
</body>
</body>
</html>