function verification_cle_primaire(id){
    var forms = document.forms[0]
    forms.addEventListener('submit', function(e){
    e.preventDefault()
    const xhr =new XMLHttpRequest()


    if(id=="codeit")url='http://localhost/gestion_colis/AJAX/Backend/codeit.php'
    else if(id=="idvoit")url='http://localhost/gestion_colis/AJAX/Backend/idvoit.php'
    else if(id=="idenvoi")url='http://localhost/gestion_colis/AJAX/Backend/idenvoi.php'
    else url='http://localhost/gestion_colis/AJAX/Backend/idrecept.php'
    xhr.open('GET', url, true)

    xhr.onload =function(){
        var a =JSON.parse(xhr.responseText)   
        var text = document.getElementById(id).value.trim()
        let trouve=a.includes(text) 
        if(trouve){
            alert('Erreur , vérifier le clé primaire')
        }else{
            forms.submit()
        }
      
    }
    xhr.send()
})
}