document.addEventListener("DOMContentLoaded", () => {
  const mobilePrev = document.querySelector(".mobile-prev");
  const mobileNext = document.querySelector(".mobile-next");

  const swiper = new Swiper(".enterprise-gallery-swiper", {
    slidesPerView: 1,
    speed: 600,

    navigation: {
      nextEl: ".enterprise-gallery-swiper > .swiper-button-next",
      prevEl: ".enterprise-gallery-swiper > .swiper-button-prev",
    },

    pagination: {
      el: ".enterprise-gallery .swiper-pagination",
      clickable: true,
    },

    on: {
      slideChange: syncMobileArrows,
    },
  });

  function syncMobileArrows() {
    if (!mobilePrev || !mobileNext) {
      return;
    }

    mobilePrev.disabled = swiper.isBeginning;
    mobileNext.disabled = swiper.isEnd;

    mobilePrev.classList.toggle("swiper-button-disabled", swiper.isBeginning);
    mobileNext.classList.toggle("swiper-button-disabled", swiper.isEnd);
  }

  syncMobileArrows();

  if (mobilePrev) {
    mobilePrev.addEventListener("click", () => {
      if (!swiper.isBeginning) swiper.slidePrev();
    });
  }

  if (mobileNext) {
    mobileNext.addEventListener("click", () => {
      if (!swiper.isEnd) swiper.slideNext();
    });
  }
});
