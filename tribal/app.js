'use strict';
function toggleSidebar(){
   document.getElementById("sidebar").classList.toggle('active');
}

let topPos = 0;
let dir = -1;
function hautBas() {
    if (topPos == 300) {dir = 1}
    else if (topPos == -50) {dir = -1}
    topPos += -2 * dir;

    requestAnimationFrame(hautBas);
}
requestAnimationFrame(hautBas);

/********slider***** */

/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/
var lien;
var nav;
var precedent;
var marche;
var suivant;
var aléatoire;
var indexImg = 1;
var image;
var timer;

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/
function click(){
    nav = document.querySelector('.toolbar');
    nav.classList.toggle('cache')
    }
    function préc(){

      indexImg--;
      if(indexImg < 1){
        indexImg = 8;
      }
      modif();
    }
    function play(){
      marche = document.getElementById('slider-toggle');
      if(typeof timer == "undefined"){

        timer = setInterval(suiv, 2000);
      }else {
        timer = clearInterval(timer);
      }
    }
    function suiv(){
        if(indexImg == 8){
          indexImg = 1;
        }
        else{indexImg++;}

        modif();
    }
    function aléa(){

        aléatoire = Math.floor((Math.random()*8)+1);

      indexImg = aléatoire;
      modif();
    }
    function modif(){
      image.setAttribute("src", "img/" + indexImg + ".jpg");
    }
    function survol(){

      nav = document.querySelector('.toolbar');
      nav.classList.add('voir')
    }
    function désurvol(){
      nav = document.querySelector('.toolbar');
      nav.classList.add('hide')
    }
/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/
lien = document.querySelector('.barre');
lien.addEventListener("click", click);
precedent = document.getElementById('slider-previous');
precedent.addEventListener("click", préc);
marche = document.getElementById('slider-toggle');
marche.addEventListener("click", play);
suivant = document.getElementById('next');
suivant.addEventListener("click", suiv, );
aléatoire = document.getElementById('slider-random');
aléatoire.addEventListener("click", aléa);
image = document.querySelector(".photos");
document.addEventListener('keypress', function(event) {
  const nomTouche = event.keyCode;

  switch (event.keyCode) {
    case 32:
    play();
        break;
    case 114:
    aléa();
        break;
    case 52:
    préc();
        break;
    case 54:
    suiv();
        break;
    default:

  }
});

/*************************************************************************************************/
/* ****************************************** MEMBRES ****************************************** */
/*************************************************************************************************/
var titre;
var membres;

function cache(){
    membres = document.querySelector('.groupe');

    membres.classList.toggle('hide');

  }

    titre = document.querySelector('.btn');

    titre.addEventListener("click", cache);
