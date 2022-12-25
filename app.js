const header = document.querySelector(".navbr");

window.addEventListener ("scroll", function(){
    header.classList.toggle ("sticky", window.scrollY > 0)
});

// this is drak mode theme js code

let icon = document.getElementById('icon');

icon.addEventListener('click', () => {
    document.body.classList.toggle("drak-theme");
    if(document.body.classList.contains("drak-theme")){
        icon.src = "./images/moon.png";
    } else{
        icon.src = "./images/sun.png";
    };
});

// this is contact jsvascript ocde 

