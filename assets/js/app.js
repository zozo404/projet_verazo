document.addEventListener("DOMContentLoaded",function(){
       let carte = document.querySelector(".container-carte");
       let imgNav = document.querySelector(".img-nav");
       let invisible = document.querySelector(".invisible");

       imgNav.addEventListener("click", navCarteOpen);
       invisible.addEventListener("click", navCarteClose);


       function navCarteOpen(){
           imgNav.style.display = "none";
           carte.style.display = "block";
           invisible.style.display = "block";


       }

       function navCarteClose(){
            imgNav.style.display = "block";
            carte.style.display = "none";
            invisible.style.display = "none";
       }


       let move = false;


document.addEventListener("touchmove", navbolean);

            function navbolean(){
                if(move){
                    move = false;
                }else{
                    move = true;
                }
                console.log(move);
            }
 
       


    imgNav.addEventListener("touchmove", function(e){
        console.log(e);
                if(move){
                    var x = e.touches[0].clientX;
                    var y = e.touches[0].clientY;
                    console.log(x);
                    console.log(y);
                    document.querySelector(".img-nav").style.left = x + "px";
                    document.querySelector(".img-nav").style.top = y + "px";                
                }
    });

    $(function (){

        $(".menu a, .nav-mobile a").on("click", function(event){
            event.preventDefault();
            let hash = this.hash;
            $('body,html').animate({scrollTop: $(hash).offset().top} , 900, function (){window.location.hash = hash;})
        });
        
        
      })
});