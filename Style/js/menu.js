
document.addEventListener("DOMContentLoaded", function() {
    var menu = document.querySelector('.menu')
    var navbar = document.querySelector('.navbar')

menu.addEventListener("click", function() {
if (navbar.style.display === "flex") {
  navbar.style.display = "none";
} else {
  navbar.style.display = "flex";
}
});
});
