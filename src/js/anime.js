AOS.init();
let arrow = document.getElementById('arrow');
window.onload = function(){
    // je suis executé au demarrage
    anime({
        targets: arrow,
        translateY: 25,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutSine'
      });
    }

window.addEventListener('scroll', function () {
    const value1 = window.scrollY;
    
    if(value1 == 0){
        console.log("visible");
        arrow.style.visibility="visible";
        anime({
            targets: arrow,
            translateY: 25,
            direction: 'alternate',
            loop: true,
            easing: 'easeInOutSine',
            off
          });
    }
    else{
        console.log("caché");
        
        arrow.style.visibility= "hidden";
        
    }

});