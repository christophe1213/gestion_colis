
<?php include __DIR__."/../header.php";?>
     <div class="b">
        <main class="table">
             <section class="table_header">
                 <h1>Gestion d'envoye</h1>
                 <p>Recette total de coopérative :
<?php include __DIR__. "/../../controleur/recette_total.php";?>
    <!-- //     include __DIR__. "/../../controleur/recette_total.php"; -->
         </p>
         <div>
         <p>Recherche entre deux date </p>
           <form class="search" method="get" action="resultat_recherche.php" >
         <input type="datetime-local\" name="date_dep" placeholder="date debut">
         <input type="datetime-local" name="date_fin" placeholder="date fin">
         <button type ="submit"><img class="icons"  src="../../Style/icons/search.png" alt="Recherche"></button>
     </form>       
         </div>
                   <form class="search"  >
                     <input type="search" id="recherche" name="recherche" placeholder="Recherche">
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
  <script>
        const searchInput = document.getElementById('recherche');
    const searchResults = document.getElementById('searchResults');
      searchInput.addEventListener('input', ()=>{
        var termes = searchInput.value.trim();
        console.log(termes)
        if(termes!==''){
            const xhr =new XMLHttpRequest()
            xhr.open('GET', 'recherche.php?q='+termes, true)
            xhr.onload =function(){
                searchResults.innerHTML=xhr.responseText
            }
            xhr.send()
        }
    })
  </script>
</body>
</body>
</html>