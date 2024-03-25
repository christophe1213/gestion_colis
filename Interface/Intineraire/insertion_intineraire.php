    <?php       
        include __DIR__."/../../controleur/Intineraire.php";
        include __DIR__ ."/../../controleur/connection.php";
        ajout_Intinéraire($conn);     
        include __DIR__."/../header.php";   
        $conn->close();        
    ?>
    <div class="message">
        <div class="container">
            <form action="insertion_intineraire.php" method = "POST">
                <a href="interface_intineraire.php"><img src="../../Style/icons/delete.png" class="fermer" alt="fermer" title="fermer"></a>
                <p class="tittre_message">Ajout d'Intineraire</p>
                <input type="text" id="codeit" name="codeit" placeholder="Code intineraire" pattern="[Ii][0-9]+" title="le format pour le code intineraire est I suivi d'un nombre" required ><br>
                <input type="text" id="villedep" name="villedep" placeholder="Ville départ" required><br>
                <input type="text" id="villearriv" name="villearriv" placeholder="Ville d'arrivée"  required ><br>
                <input  type="submit"value ="Ajouter" id="Ajout" >
            </form>
        </div>
    </div>
     
    <script src="http://localhost/gestion_colis/Style/js/nav.js"></script>
    <script src="http://localhost/gestion_colis/Style/js/menu.js"></script>
    <script src="http://localhost/gestion_colis/Ajax/verification_cle_primary.js"></script>
    <script>
        document.title="Intineraire"
        titre=document.querySelectorAll(".navbar a")    
        nav_courante("Intineraire")
        verification_cle_primaire('codeit')    
    </script>

</body>
</html>