<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
        /*background: url(fond2.avif) center/cover;*/
        
      }
      *{
    margin: 0;
    padding: 0;
}
body{
   
    /* height: 100vh; */
     /* background-color: #212121; */
    background: url(Style/img/fond.avif) center/cover;
    height: 100vh;
    /* width: 40vw; */
    position: relative;
    top: 150px;
    /* display: flex;
    justify-content: center; */
    align-items: center;
    font-family:sans-serif;

}
.contenaire{
    
    /* position: absolute;
    left: 500px; */
    
    z-index: 6;
}
.a{ 
   
            display: flex;
            justify-content: center;
            text-align: center;
            position: absolute;
            
            width: 100%;
           

}
.contenaire_tableau{
    /* background-color: red; */
    width: 81.8rem;
    display: flex;
    position: absolute;
    top:-60px;
    width: auto;
    /* height: 90vh; */
    margin-top: 50px;
    margin-left: 300px;
    background-color: #fff4;
    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;
    justify-content: center;
    display: flex;
    justify-content: center;
}
.tableau
{   
    /* position: absolute;
    top:-50px; */
    /* left:500px; */
    /* display: flex;
    justify-content: center; */
    z-index: 5;
}
.ajout{
    z-index: 8;
    background-color:white;
    padding: 3rem;
    height: auto;
    width: 250px;
    border-radius: 20px;
    border-left:1px solid rgba(255,255,255,.3) ;
    border-top: 1px solid rgba(255,255,255,.3);
    box-shadow: 20px 20px 40px -6px rgba(0,0,0,.3) ;
    text-align: center;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);

}
.titre_formulaire
{
    color: white;
    font-weight: 500;
    opacity: .7;
    font-size: 1.5rem;
    margin-bottom: 60px;
    text-shadow: 2px 2px 4px rgba(0,0,0,.2);
}
input{
    background: transparent;
    border: none;

    border-left: 1px solid rgba(255,255,255 ,.3);
    border-top: 1px solid rgba(255,255,255 ,.3); 
    padding: 0.3rem;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    box-shadow: 4px  4px 60px rgba(0,0,0,.3);
    color: black;
    font-weight: 500;
    text-shadow: 2px 2px 4px rgba(0,0,0,.2);
    /* width: 20px; */
    border-radius: 20px;
    transition: all 0.3s;
    margin-bottom: 2em;

}

input:hover, input[type="text"]:focus{
    background-color: rgba(255,255,255 ,.1);
    box-shadow: 4px  4px 60px 8px rgba(0,0,0,.3);
}
input[type="submit"]{
    cursor: pointer;
    margin-top: 10px;
    font-size: 1rem;
    width: 150px;

}

.tete{
    background-color: #141414;
    /* paddin: 20px; */
    padding: 20px;
    width: 81.8rem;
    display: flex;
    position: absolute;
    top: -150px;
    justify-content:center ;
    align-items: center;
}
.nav_menu{
list-style: none;

}
.nav_menu li{
display: inline-block;
padding:20px

}
.nav_menu a
{
transition: all 0.3s ease 0s;
}
.nav_menu a:hover{
color: #007bff;
}
li, a{
font-family: sans-serif;
color: whitesmoke;
text-decoration: none;
font-weight: 500;

}
table, th, td{
    padding: 1rem;
    border-collapse: collapse;
}
main.table{
    width: auto;
    height: auto;
    background-color: #fff4;
    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;
    padding-bottom: .8rem;
}
.table_header{
    width: auto;
    height :auto;
    background-color: #fff4;
    padding: .8rem 1rem;

}
.table_body{
    width: auto;
    max-height: auto;
    background-color: #fffb;
    margin: .8rem auto;
    border-radius: 0.6rem;
    margin: 1rem;
    }

    thead tr {
    background-color: midnightblue;
color: white;

}
th, td{
/* padding: 10px 20; */
/* width: 100px; */
}
.b{
    /* background: url(hero-bg.jpg) center/cover;
    background:linear-gradient(45deg, #161616,#3171b9); */
    display: flex;
    justify-content: center;
    position: absolute;
    align-items: center;
    width: 100%;
}
td img{
   width: 25px;
    height: 25px;
    margin-right: .5rem ;
    }
.id{
    width: -10px;
}    
.frais{
    width: 100px;
}
.date{
    width: 200px;
}
tr:hover,tr:nth-child(even):hover{
    background-color:  #007bff;;
}
tbody tr:nth-child(even){
background-color: #f3f3f3;
}
  .pdf{
    border-radius:50px ;
    width: 150px;
    height: 50px;
    color: #fff;
    margin: 50px;
    background-color: rgba(126, 6, 2, 0.966);
  } 

  .generer_pdf{
    position: absolute;
    width: 50%;
    text-align: center;
    background-color: white;
    border-radius: 25px;

    /* top: 50%;
    left: 50%; */
    transform:translate(50%,50%)  ;
  }
  .fermer{
    color: red;
    margin-left: 250px;
  
}

      .btn_confi{
        width: 70px;
        height: 30px;
        border-radius: 20px;
        border: solid 0.1px white;
        margin-top:20px;
        margin-left:10px ;
        margin-right:10px ;
        background-color: #218838;
        Background-color: white;
        box-shadow: 20px 20px 40px -6px rgba(0,0,0,.3) ;
      }
      
      .btn-success {
  color: #fff;
  background-color: #218838;
  border-color: #1e7e34;
}
.suppression{
        background-color: white;
        z-index: 8;
        /* Background-color: rgba(255,255,255 ,.1); */
        padding: 3rem;
         height: auto;
         width: 200px;
        border-radius: 20px;
        border-left:1px solid rgba(255,255,255,.3) ;
        border-top: 1px solid rgba(255,255,255,.3);
        box-shadow: 20px 20px 40px -6px rgba(0,0,0,.3) ;
        text-align: center;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
    }
    .btn_confi:hover{
        background-color: #47d365;
    }
    
    .btn_confi_lien:hover{
        color: ;
    }
.icons{
  width: 25px;
  height: 25px;
}

.btn_confi{
    
    width: 100px;
    height: 30px;
    border-radius: 20px;
    border: solid 0.1px white;
    margin-top:20px;
    margin-left:10px ;
    margin-right:10px ;
    background-color: #218838;
    Background-color: rgba(240, 240, 240, 0.986);

  }
.suppression{
    background-color: white;
    z-index: 8;
    /* Background-color: rgba(255,255,255 ,.1); */
    padding: 3rem;
     height: auto;
     width: 250px;
    border-radius: 20px;
    border-left:1px solid rgba(255,255,255,.3) ;
    border-top: 1px solid rgba(255,255,255,.3);
    box-shadow: 20px 20px 40px -6px rgba(0,0,0,.3) ;
    text-align: center;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}
.btn_confi:hover{
    background-color: #47d365;
}
.btn_confi_lien{
    color :black;
    margin: 10px;
    font-size: 17px;

}
.btn_confi_lien:hover{
    color: aliceblue;
}
.selection{
        /* width: 70px; */
        margin: 10px;
        padding-top: 7px;
        padding-bottom: 7px;
        padding-left: 10px;
        border-radius: 20px;
        text-align: center;
          /* background: transparent;
            border: none;

            border-left: 1px solid rgba(255,255,255 ,.3);
            border-top: 1px solid rgba(255,255,255 ,.3); 
            padding: 0.3rem;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 4px  4px 60px rgba(0,0,0,.3);
            color: black;
            font-weight: 500;
            text-shadow: 2px 2px 4px rgba(0,0,0,.2);
            /* width: 20px; */
            /* border-radius: 20px;
            transition: all 0.3s;
            margin-bottom: 2em; */ 
    }
    .selection:optional{
        border-radius: 15px;
    }
    .titre_projet{
        color: #194574;
        
    }
    nav{
        margin-left: 200px;
    }
    </style>
</head>
<body id="corps">
<header class="tete" >
    <h1 class='titre_projet'>Géstion de colis coopérative</h1>
      <nav>
        <ul class="nav_menu">
          <li><a id="navbar" href="index.php">Acceuil</a></li>
          <li><a id="navbar" href="Interface/Intineraire/interface_Intineraire.php">Intineraire</a></li>
          <li><a id="navbar" href="Voiture/interface_Voiture">Voiture</a></li>
          <li><a id="navbar" href="Envoyer/interface_Envoyer.php">Envoyer</a></li>
          <li><a id="navbar" href="Recevoir/interface_Recevoir.php">Recevoir</a></li>
        </ul>
      </nav>
      
    </header>
