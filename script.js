const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
let X = 0;

hamburger.addEventListener("click",() =>{
    if (X == 0){
        X = 1;
        document.getElementById("searchbar").style.flexGrow = "0";
        if(window.innerWidth< 479){
            document.getElementById("searchbar").style.right = "-30%";
            document.getElementById("searchbar").style.position = "Absolute";
        }
    }
    else{
        X = 0;
        document.getElementById("searchbar").style.flexGrow = "1";
        document.getElementById("searchbar").style.right = "0%";
        document.getElementById("searchbar").style.position = "static";
    }

    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");

    if(window.availWidth< 479){
        document.getElementById("searchbar").style.flexGrow = "0";
    }
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () =>{
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
    X = 0;
    document.getElementById("searchbar").style.flexGrow = "1";
    document.getElementById("searchbar").style.right = "0%";
    document.getElementById("searchbar").style.position = "static";
}))
