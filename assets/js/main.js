import Lenis from 'lenis'

const Main = {
  init: function () {
    this.cacheSelectors();
    this.initScripts();
    this.initKeenBanner();
    this.initLenis();
  },
  cacheSelectors: function () {},
  initScripts: function () {},
  initLenis: function () {
    const lenis = new Lenis();
    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);
  },
  initKeenSliderBanner: function () {},
  Events: {
    handleMenu: () => {},
    scrollPage: () => {},
  },
  Helpers: {
    debounce: (func, wait) => {
      let timeout;
      return function (...args) {
        const context = this;
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(context, args), wait);
      };
    },
  },
};

document.addEventListener("DOMContentLoaded", function () {
  Main.init();
});
