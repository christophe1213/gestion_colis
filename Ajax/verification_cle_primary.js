function verification_cle_primaire(id){
    var forms = document.forms[0]
    forms.addEventListener('submit', function(e){
    e.preventDefault()
    const xhr =new XMLHttpRequest()
    var m

    if(id=="codeit"){
        url='http://localhost/gestion_colis/AJAX/Backend/codeit.php'
        m='Code intinéraire'
    }    
    else if(id=="idvoit"){
        url='http://localhost/gestion_colis/AJAX/Backend/idvoit.php'
        m='id voiture'
    }
    else if(id=="idenvoi"){
        url='http://localhost/gestion_colis/AJAX/Backend/idenvoi.php'
        m='id envoi'
}
    else {
        url='http://localhost/gestion_colis/AJAX/Backend/idrecept.php'
        m='id de réception'
    }
    xhr.open('GET', url, true)

    xhr.onload =function(){
        var a =JSON.parse(xhr.responseText)   
        var text = document.getElementById(id).value.trim()
        let trouve=a.includes(text) 
        if(trouve){
            alert('Erreur ,'+m+' que vous avez saisie existe sur notre basse de données afin qu\'il n\'y a pas de duplication de clé primaire veuillez vérifiez votre formulaire ')
        }else{
            forms.submit()
        }
      
    }
    xhr.send()
})
}