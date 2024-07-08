const menu = document.querySelectorAll(".menu");
const burguerButton = document.querySelector(".menu__button");
const searchBar = document.querySelector(".search");
const bodyMain = document.querySelector("main");
const profileBar = document.querySelector(".profile");
const profileBar2 = document.querySelector(".profile2");
const profileMenu = document.querySelector(".profile-menu");
const profileMenu2 = document.querySelector(".profile-menu2");

burguerButton.addEventListener("click", () => {
  if (this.innerWidth < 769) {
    menu.forEach((list) => {
      if (list.style.display != "flex") {
        list.style.display = "flex";
        list.style.animation = "showMenu 0.5s linear";
        burguerButton.classList.remove("fa-bars");
        burguerButton.classList.add("fa-x");
      } else {
        list.style.animation = "hideMenu 0.5s linear";
        setTimeout(() => {
          list.style.display = "none";
        }, 490);
        burguerButton.classList.remove("fa-x");
        burguerButton.classList.add("fa-bars");
      }
    });
  }
});

searchBar.addEventListener("click", () => {
  if (!searchBar.classList.contains("active-search")) {
    searchBar.classList.add("active-search");
  }
});

bodyMain.addEventListener("click", () => {
  if (searchBar.classList.contains("active-search")) {
    searchBar.classList.remove("active-search");
  }
});

profileBar.addEventListener("click", () => {
  profileMenu.classList.toggle("active");
});

profileBar2.addEventListener("click", () => {
  profileMenu2.classList.toggle("active");
});

const headerBar = document.querySelector("header");
const mainHero = document.querySelector("section:first-child");

// if (window.location.pathname.includes('humo-de-mar') || window.location.pathname.includes('index.php') || window.location.pathname.includes('nosotros.php') || window.location.pathname.includes('contacto.php')  || window.location.pathname == '/' ) {
//   headerBar.style.backgroundColor = "transparent";
//   headerBar.style.mixBlendMode = "initial";
// }

// window.addEventListener("scroll", function () {
//   if (window.location.pathname.includes('humo-de-mar') || window.location.pathname.includes('index.php') || window.location.pathname.includes('nosotros.php') || window.location.pathname.includes('contacto.php')  || window.location.pathname == '/' ) {
//     if (window.scrollY === 0 && headerBar.offsetTop === mainHero.offsetTop) {
//       headerBar.style.backgroundColor = "transparent";
//       headerBar.style.mixBlendMode = "initial";
//     } else {
//       headerBar.style.backgroundColor = "rgba(255, 255, 255, 0.7)";
//       headerBar.style.mixBlendMode = "initial";
//     }
//   } else {
//     if (window.scrollY === 0 && headerBar.offsetTop === mainHero.offsetTop) {
//       headerBar.style.backgroundColor = "transparent";
//       headerBar.style.mixBlendMode = "difference";
//     } else {
//       headerBar.style.backgroundColor = "rgba(255, 255, 255, 0.7)";
//       headerBar.style.mixBlendMode = "initial";
//     }
//   }
// });

// const successModal = document.querySelector(".success-modal");
// const closeSuccessModal = document.querySelector(".close-success-modal");

// closeSuccessModal.addEventListener("click", () => {
//   successModal.style.display = "none";
//   document.documentElement.style.overflowY = "scroll";
// });

// document.addEventListener("DOMContentLoaded", function () {
//   const forms = document.querySelectorAll("form");
//   forms.forEach((form) => {
//     form.addEventListener("submit", function (event) {
//       successModal.style.display = "flex";
//       setTimeout(() => {
//         window.scrollTo({
//           top: 0,
//         });
//       }, 100);
//       document.documentElement.style.overflowY = "hidden";
//     });
//   });
// });
