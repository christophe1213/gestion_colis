<?php
       
       include __DIR__."/../../controleur/Intineraire.php";
       include __DIR__ ."/../../controleur/connection.php";
        ajout_Intinéraire($conn);
       
        include __DIR__."/../header.php";
        
        // $query = "SELECT * FROM intineraire; ";
        
        // affichage_Intineraire($conn, $query);
    
        $conn->close();
   
        
?>
<div class = 'a'>
    <div class="contenaire">
        <p id="message_erreur"></p>
        <form class="ajout"  action="insertion_intineraire.php" method = "POST">
        <a class="fermer" href="interface_intineraire.php"><img class="icons" src="../../Style/icons/delete.png" alt="fermer" title="fermer"></a>
        <label for="codeit" >Code Intinéraire</label>
        <input type="text" id="codeit" name="codeit" required ><br>
        <label for="Nom">Ville départ</label><br/>
        <input type="text" id="villedep" name="villedep" required><br>
        <label for="ville">Ville d'arrivée</label>
        <input type="text" id="villearriv" name="villearriv" required ><br>
        <input  type="submit"value ="Ajouter" id="Ajout" >

    </form>
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
        style(ajout)
    </script>

</body>
</html>