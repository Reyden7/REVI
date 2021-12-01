/*********************************************************************
 *          Changement du fond de la nav barre au scroll de la page
 *********************************************************************/

var bgpattern = document.querySelector('.bg');
window.addEventListener('scroll', function () {
    const value1 = window.scrollY;
    if(value1 == 0){
        console.log("transparent");
        $(bgpattern).stop().animate({ backgroundColor: 'rgba(255, 255, 255, 0)'}, 200);
    }
    else{
        console.log("Blanc");
        $(bgpattern).stop().animate({ backgroundColor: 'rgba(255, 255, 255, 255)'}, 200);
    }

});