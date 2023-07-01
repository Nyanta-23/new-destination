var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  centeredSlides: true,
  watchOverflow: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    pagination: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


// const firstScrollSpyEl = document.querySelector('[data-bs-spy="scroll"]')
// firstScrollSpyEl.addEventListener('activate.bs.scrollspy', () => {
  
// })