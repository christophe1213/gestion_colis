
<?php include __DIR__."/../header.php";?>
<div class="envoyer">
<main class="table">
    <section class="table_header">
        <h1>The Table</h1>
        <p>Recette total de coopérative :
                  <?php include __DIR__. "/../../controleur/recette_total.php";?>
   
         </p>
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
        <table>
            <thead>
                <tr>
                <th class="id">N° </th>
                <th class="idvoit"> Idvoit </th>
                <th class="colis">Colis</th>
                <th class="NomEnvoyeur">Nom de l'envoyeur</th>
                <th class="email">Email </th>
                <th class="date"> date d'enoi </th>
                <th class="frais">frais</th>
                <th class="nomRecept">Nom de recepteur</th>
                <th class="contact">Contact</th>
                <th class="modifier">Modifier</th>
                <th class="supprimer">Supprimer</th>
                </tr>
            </thead>
            <tbody  id="searchResults">
            <?php
        include __DIR__."/../../controleur/envoyer.php";
        include __DIR__ ."/../../controleur/connection.php";
     
        $query = "SELECT * FROM envoyer; ";
        affichage_envoyer($conn,$query);

        $conn->close();
    ?>
            </tbody>
        </table>
    </section>
 </main>   
</div>
     <!-- <div class="envoyer">
        <main class="table">
             <section class="table_header">
                 <h1>Gestion d'envoye</h1>
               
         <div> -->
         <!-- <p>Recherche entre deux date </p>
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
    
             -->
    
         <!-- </section>
             <section class="table_body">
             <table class="tableau" >
        <thead>
            <tr>
               
            </tr>
        </thead>
        
        <tbody id="searchResults">

 
    </tbody>
     </table>
     </main>
       </section>
         </div> -->
    <script src="../../Style/js/nav.js"></script>
    <script>
        document.title="Envoyer"
        titre=document.querySelectorAll("#navbar")
    </script>
    <script>
        body =document.getElementById('corps')
        nav_courante("Envoyer")
    </script>

  <script src="../../Style/js/rechercheColis.js"></script>
  <script src="../../Style/js/recherche_entre_deux_dates.js"></script>
</body>
</body>
</html>