<?php
    //en tête de la page
    include __DIR__."/../header.php";
?>
<main class="table">
    <section class="table_header">
        <h1>Voiture</h1>
        <a href="insertion_voiture.php"><img class="icons" src="../../Style/icons/ajout.jfif" alt="ajout" title="ajout"></a>
    </section>
    <section class="table_body">
        <table>
            <thead>
                <tr>
                    <th>Idvoit</th>
                    <th>codeit</th>
                    <th>Design</th>
                    <th>Frais</th>
                    <th class="modifier">modifier</th>
                    <th class="supprimer">Supprimer</th>  
                </tr>
            </thead>
            <tbody>
                <?php
                    //Connection de base de données et appelle les fonctions sur voiture.php
                    include __DIR__ ."/../../controleur/connection.php";
                    include __DIR__."/../../controleur/voiture.php";

                    //Affichage de donné
                    affichage_voiture($conn);    
                    $conn->close();
                ?>
            </tbody>
        </table>
    </section>
 </main>  
    <script src="../../Style/js/nav.js"></script>
    <script>
        document.title="Voiture"
        titre=document.querySelectorAll(".navbar a")
    </script>
    <script>
        nav_courante("Voiture")
    </script>
</body>
</html>