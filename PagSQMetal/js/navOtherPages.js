var nav = document.getElementById("nav");
var crownLogo = document.getElementById("nav");
var crownIcon = document.getElementById("crownLogoNvabar");
var dimHeight = crownLogo.clientHeight;
var navText = document.getElementById("containerTextNavbar");

window.onscroll = function(){
    if(window.pageYOffset > dimHeight) {
        //nav.style.position ="fixed";
        //nav.style.top =0;
        nav.classList.add("fixed-top");
        crownIcon.classList.add("crownIconImage");
        navText.classList.add("containerTextNavAfter");
        //console.log("Se cargo la clase");
    }else{
        //nav.style.top = dimHeight;
        nav.classList.remove("fixed-top");
        crownIcon.classList.remove("crownIconImage");
        navText.classList.remove("containerTextNavAfter");
        //console.log("Se elimino la clase");
    }
}