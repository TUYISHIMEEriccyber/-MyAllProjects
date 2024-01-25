var MenuBtn = document.getElementById("MenuBtn")
var sidenav = document.getElementById("sidenav")
var menu = document.getElementById("menu")
sidenav.style.right = "-220px";
MenuBtn.onclick= function() {
    if (sidenav.style.right == "-220px"){
        sidenav.style.right = "0";
        menu.src = "close.jpg";
    }
    else {
        sidenav.style.right = "-220px";
        menu.src = "menu.jpg";
    }

}
var h1 = document.querySelector("h1");
var myh1 = document.getElementById("eric");
var p = document.querySelector("p");
var myp = document.getElementById("tuyi");
var a = document.querySelector("a");
var mya1 = document.getElementById("mmm");
var mya = document.getElementById("mafia");
var ul = document.querySelector("ul");
var myul = document.getElementById("eline");

    if(myh1.style.background =="grey"){
        h1.onclick = function mee(){
    }}
    else {
        h1.onclick = function changeColor() {
            myh1.style.background = "grey";}
    }

