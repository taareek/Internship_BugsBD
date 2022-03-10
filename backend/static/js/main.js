//active navbar 
let nav = document.querySelector('.navigation-wrap');
window.onscroll = function(){
    if(document.documentElement.scrollTop >20){
        nav.classList.add("scroll-on");
    }else{
        nav.classList.remove("scroll-on");
    }
}

//nav hide
let navBar= document.querySelectorAll('.nav-link');
let navCollaps = document.querySelector('.navbar-collapse.collapse');
navBar.forEach(function(a){
    a.addEventListener("click", function(){
        navCollaps.classList.remove("show");
    })
})

//audio play and pause
var mySong = document.getElementById("mySong");
    var icon = document.getElementById("icon");

    icon.onclick = function (){
        if(mySong.paused){
            mySong.play();
            icon.src= "static/audio/pause.png";
        }else{
            mySong.pause();
            icon.src= "static/audio/play.png"
        }
    }