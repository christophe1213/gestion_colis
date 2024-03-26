function verification_cle_primaire(id){
    var forms = document.forms[0]
    forms.addEventListener('submit', function(e){
    e.preventDefault()
    const xhr =new XMLHttpRequest()
    var m,dernier_cle

    if(id=="codeit"){
        url='http://localhost/gestion_colis/AJAX/Backend/codeit.php'
        m='Code intinéraire'
        dernier_cle='I'
    }    
    else if(id=="idvoit"){
        url='http://localhost/gestion_colis/AJAX/Backend/idvoit.php'
        m='id voiture'
        dernier_cle='V'
    }
    else if(id=="idenvoi"){
        url='http://localhost/gestion_colis/AJAX/Backend/idenvoi.php'
        m='id envoi'
        dernier_cle=' '
}
    else {
        url='http://localhost/gestion_colis/AJAX/Backend/idrecept.php'
        m='id de réception'
        dernier_cle=' '
    }
    xhr.open('GET', url, true)

    xhr.onload =function(){
        var a =JSON.parse(xhr.responseText)   
        var text = document.getElementById(id).value.trim()
        let trouve=a.includes(text) 
        if(trouve){
            alert('Erreur ,' +m+' que vous avez saisie existe sur notre basse de données afin qu\'il n\'y a pas de duplication de clé primaire veuillez vérifiez votre formulaire(la derniere clé primaire est '+dernier_cle+a.length+' )')
        }else{
            forms.submit()
        }
      
    }
    xhr.send()
})
}