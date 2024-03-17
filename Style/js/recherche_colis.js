const searchInput = document.getElementById('recherche');
const searchResults = document.getElementById('searchResults');
  searchInput.addEventListener('input', ()=>{
    var termes = searchInput.value.trim();
    console.log(termes)
    if(termes!==''){
        const xhr =new XMLHttpRequest()
        xhr.open('GET', 'http://localhost/gestion_colis/controleur/recherche.php?q='+termes, true)
        xhr.onload =function(){
            searchResults.innerHTML=xhr.responseText
    
        
    }
        xhr.send()
    }else{
        searchResults.innerHTML = `
        <table class="tableau" id="searchResults">
        <thead>
            <tr>
                <th class=\"id\">Numero </th>
                <th> Voiture </th>
                <th>Colis</th>
                <th>Nom de l'envoyeur</th>
                <th>Email </th>
                <th> date d'enoi </th>
                <th>frais</th>
                <th>Nom de recepteur</th>
                <th>Contact</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        
        <tbody>
        `;
    }
})