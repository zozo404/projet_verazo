document.addEventListener("DOMContentLoaded",function(){
 $(function (){

     $(".menu .menu-accueil a, .menu .menu-news a, .menu .menu-classement a, .nav-mobile .menu-accueil a, .nav-mobile .menu-news a, .nav-mobile .menu-classement a").on("click", function(event){
         event.preventDefault();
         let hash = this.hash;
         $('body,html').animate({scrollTop: $(hash).offset().top} , 900, function (){window.location.hash = hash;})
     });
     
     
   })
});