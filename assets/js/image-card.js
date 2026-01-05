document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".image-card-swiper").forEach((swiperEl, index) => {
    new Swiper(swiperEl, {
      loop: true,
      slidesPerView: 1,
      speed: 600,

      autoplay: {
        delay: 6000 + index * 1200,
        disableOnInteraction: false,
      },

      pagination: {
        el: swiperEl.querySelector(".swiper-pagination"),
        clickable: true,
      },
    });
  });
});
