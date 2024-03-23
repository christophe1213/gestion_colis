    <?php
        include __DIR__."/../header.php";
    ?>
    <main class="table">
        <section class="table_header">
            <h1>Intineraire</h1>
            <a href="insertion_Intineraire.php"><img class="icons" src="../../Style/icons/ajout.jfif" alt="ajout" title="ajout"></a>
        </section>
        <section class="table_body">
            <table>
                <thead>
                    <tr>
                        <th>Codeit</th>
                        <th class="ville">Ville départ</th>
                        <th class="ville">Ville d'arrivée</th>
                        <th class="modifier">Modifier</th>
                        <th class="supprimmer">Supprimer</th>     
                </tr>
                </thead>
                <tbody>
                    <?php
                        include __DIR__."/../../controleur/Intineraire.php";
                        include __DIR__ ."/../../controleur/connection.php";
                        //Affichage de donnée

                        affichage_Intineraire($conn);      
                        $conn->close();
                    ?>
                </tbody>
            </table>
        </section>
    </main>
    <script src="../../Style/js/nav.js"></script>
    <script>
        document.title="Intineraire"
        titre=document.querySelectorAll(".navbar a")
       
        nav_courante("Intineraire")
        
       
    </script>
</body>
</html>