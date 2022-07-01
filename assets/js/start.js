

const boutonStart = document.getElementById("bouton-jeu");
let fond = document.querySelector(".fond");
let ecrans = document.querySelector(".ecrans-jeu");
let croix = document.querySelector(".croix");
let game = false;

boutonStart.addEventListener("click", start);
croix.addEventListener("click", end);

function end(){
    game = false
    fond.style.display = "none";
    ecrans.style.display = "none";
}

function start(){
     game = true;
    if(!game){
        console.log("false");
        
        game = true;

    }else{
        console.log("true");
        fond.style.display = "flex";
        ecrans.style.display = "flex";
    }
    console.log("j'ai cliqué");
     

     
    }
    
    


