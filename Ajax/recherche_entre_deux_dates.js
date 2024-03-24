var button_date = document.getElementById('recherche_deux_date')
console.log(button_date)
button_date.addEventListener('click', ()=>{
     const date_deb =document.getElementById('date_deb')
     const date_fin =document.getElementById('date_fin')
     console.log(date_deb.value+date_fin.value)
     const xhr =new XMLHttpRequest()
     xhr.open('GET', 'http://localhost/gestion_colis/controleur/recherche_entre_deux_dates.php?date_deb='+date_deb.value+'&date_fin='+date_fin.value, true)
     xhr.onload =function(){
        searchResults.innerHTML=xhr.responseText
        console.log(xhr.responseText)
 }
 xhr.send()
})