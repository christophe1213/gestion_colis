var xhr = new XMLHttpRequest()
xhr.open('GET','recherche.php',true)
xhr.onload=function(){
    console.log(JSON.parse(xhr.responseText)['Hello'])
    var a =JSON.parse(xhr.responseText)['Hello']
    console.log(JSON.parse(xhr.responseText)['Hello'])
}
xhr.setRequestHeader('content')
xhr.send()