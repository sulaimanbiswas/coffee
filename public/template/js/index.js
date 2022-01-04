/*
=========
Navbar JS
=========
*/

let navbar = document.querySelector(".navbar")

document.querySelector("#menu-btn").onclick = () =>{
    navbar.classList.toggle("active");
    cartItem.classList.remove("active");
    searchForm.classList.remove("active");
}

/*
============
Cart Item JS
============
*/

let cartItem = document.querySelector(".cart-item-container")

document.querySelector("#cart-btn").onclick = () =>{
    cartItem.classList.toggle("active");
    navbar.classList.remove("active");
    searchForm.classList.remove("active");
}

/*
==========
Search  JS
==========
*/

let searchForm = document.querySelector(".search-form")

document.querySelector("#search-btn").onclick = () =>{
    searchForm.classList.toggle("active");
    navbar.classList.remove("active");
    cartItem.classList.remove("active");
}

/*
=========
Scroll JS
=========
*/

window.onscroll = () =>{
    navbar.classList.remove("active");
    cartItem.classList.remove("active");
    searchForm.classList.remove("active");
}