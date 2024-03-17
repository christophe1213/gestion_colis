
<?php include __DIR__."/../header.php";?>
     <div class="b">
        <main class="table">
             <section class="table_header">
                 <h1>Gestion d'envoye</h1>
                 <p>Recette total de coopérative :
<?php include __DIR__. "/../../controleur/recette_total.php";?>
   
         </p>
         <div>
         <p>Recherche entre deux date </p>
           <div class="search"  >
         <input type="datetime-local" name="date_dep" id="date_deb" placeholder="date debut">
         <input type="datetime-local" name="date_fin" id="date_fin" placeholder="date fin">
         <button  id="recherche_deux_date"><img class="icons"  src="../../Style/icons/search.png" alt="Recherche" title="recherche"></button>
            </div>      
         </div>
                   <form class="search"  >
                     <input type="search" id="recherche"  placeholder="Recherche">
                     <button type ="submit"><img class="icons"  src="../../Style/icons/search.png" alt="Recherche"></button>
             </form>
              
                <a href="insertion_envoyer.php"><img class="icons" src="../../Style/icons/ajout.jfif" alt="ajouter" title="ajout"></a>
    
            
    
         </section>
             <section class="table_body">

    <?php
        include __DIR__."/../../controleur/envoyer.php";
        include __DIR__ ."/../../controleur/connection.php";
     
        $query = "SELECT * FROM envoyer; ";
        $query = "SELECT * FROM envoyer; ";
        affichage_envoyer($conn,$query);

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

  <script src="../../Style/js/recherche_colis.js"></script>
  <script src="../../Style/js/recherche_entre_deux_dates.js"></script>
</body>
</body>
</html>