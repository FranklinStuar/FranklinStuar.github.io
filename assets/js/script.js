var swiper = new Swiper(".skills__slider", {
  spaceBetween: 30,
  slidesPerView: "auto",
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


let menuFuntion = () => {
  const body  = document.querySelector("body")
  const menuHeader = document.querySelector(".header-page")
  
  // functions
  let openMenu = (tag) => {
    tag.addEventListener("click", () => {
      menuHeader.classList.add("header-page--menu-open")
      body.classList.add("no-scroll")
    })
  }
  let closeMenu = (tag) => {
    tag.addEventListener("click", () => {
      menuHeader.classList.remove("header-page--menu-open")
      body.classList.remove("no-scroll")
    })
  }
  
  // events
  openMenu(menuHeader.querySelector(".menu__icon--open"))
  closeMenu(menuHeader.querySelector(".menu__icon--opened"))
  menuHeader.querySelectorAll(".menu__link").forEach(item => {
    closeMenu(item)
  });
}
menuFuntion()