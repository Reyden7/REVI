/*********************************************************************
 *          Changement du fond de la nav barre au scroll de la page
 *********************************************************************/

var bgpattern = document.querySelector('.bg');

window.addEventListener('scroll', function () {
    const value1 = window.scrollY;
    
    if(value1 == 0){
        console.log("transparent");
        $(bgpattern).stop().animate({ opacity: 0.7}, 200);
    }
    else{
        console.log("Blanc");
        $(bgpattern).stop().animate({  opacity: 0.92}, 200);
       
    }

});

