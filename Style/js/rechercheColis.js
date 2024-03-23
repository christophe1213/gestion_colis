const searchInput = document.getElementById('recherche');
const searchResults = document.getElementById('searchResults');
  searchInput.addEventListener('input', ()=>{
    var termes = searchInput.value.trim();
    console.log(termes)
    // if(termes!==''){
        const xhr =new XMLHttpRequest()
        xhr.open('GET', 'http://localhost/gestion_colis/controleur/recherche.php?q='+termes, true)
        xhr.onload =function(){
            searchResults.innerHTML=xhr.responseText
    
        
    }
      
    // }else{
    //     searchResults.innerHTML = "";
        
    // }
    xhr.send()
})