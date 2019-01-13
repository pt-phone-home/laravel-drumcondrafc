const sideNavBtn1 = document.querySelector(".sidenav-btn");
const sideNavMenu = document.querySelector(".sidebar-nav");
const sideNavClose = document.querySelector(".sidebar-nav-close");
let logo = document.querySelector(".logo");

sideNavBtn1.onclick = function() {
    alert("working");
    sideNavMenu.style.display = "block";
};

// window.onclick = function(e) {
//   if (e.target == body1) {
//     sideNavMenu.style.display = "none";
//   }
// };

sideNavClose.onclick = function() {
    sideNavMenu.style.display = "none";
};
