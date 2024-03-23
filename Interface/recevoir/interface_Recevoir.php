<?php
    include __DIR__."/../header.php";
?>
<main class="table">
    <section class="table_header">
        <h1>Recevoir</h1>
        <a href="insertion_recevoir.php"><img class="icons" src="../../Style/icons/ajout.jfif" alt="ajout" title="ajout"></a>
    </section>
    <section class="table_body">
        <table>
            <thead>
                <tr>
                    <th>idreceot</th>
                    <th>idenvoi</th>
                    <th>date de</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
        
                  
                </tr>
            </thead>
            <tbody>
                    <?php
                        
                        include __DIR__. "/../../controleur/connection.php";
                        include __DIR__."/../../controleur/recevoir.php";
                            //Affichage de donné
                            
                            affichage_recevoir($conn); 
                            $conn->close();
                    ?>
            </tbody>
        </table>
    </section>
</main>  
   <script src="../../Style/js/nav.js"></script>
    <script>
        document.title="Recevoir"
        titre=document.querySelectorAll(".navbar a")
    </script>
    <script>
        body =document.getElementById('corps')
        nav_courante("Recevoir")
    </script>
    
</body>
</body>
</html>