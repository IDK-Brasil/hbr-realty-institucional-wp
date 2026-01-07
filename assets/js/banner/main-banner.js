document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".hero-bg-swiper").forEach((swiperEl) => {
    const section = swiperEl.closest(".hero-banner-idk-1225");
    const paginationEl = section.querySelector(".hero-swiper-pagination");

    const swiper = new Swiper(swiperEl, {
      slidesPerView: 1,
      loop: true,
      speed: 800,
      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
      },
      pagination: {
        el: paginationEl,
        clickable: true,
      },
      observer: true,
      observeParents: true,
    });

    window.addEventListener("orientationchange", () => {
      setTimeout(() => swiper.update(), 300);
    });

    window.addEventListener("resize", () => {
      swiper.update();
    });
  });
});
