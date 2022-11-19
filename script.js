let nav = document.querySelector("#hamburger-menu");
let btn = document.querySelector(".toggle-btn");
let mask = document.querySelector("#mask");

btn.onclick = () => {
    nav.classList.toggle("open");
};