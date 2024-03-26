var welcome=document.getElementById('welcome')
welcome.textContent=""
text="Bienvenue"
let i=0
// welcome.textContent=text
setInterval(()=>{
    if(i==text.length){
        welcome.textContent=text
    }else{
        welcome.textContent+=text[i];
        i++
    };
},100)
