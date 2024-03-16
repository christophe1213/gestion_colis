
function nav_courante(nav){
   
 
     for(i=0;i<titre.length;i++){

         if(titre[i].textContent==nav){
         titre[i].style.textDecoration="underline";      
     }
     if(i>0){
            titre[i].href="../"+titre[i].textContent+"/interface_"+titre[i].textContent+".php"
    } 

 }
 document.body.style.background="url(../../Style/img/fond.avif) center/cover"
 titre[0].href="../../index.php"

}
