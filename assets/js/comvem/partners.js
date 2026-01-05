document.addEventListener("DOMContentLoaded", () => {
  const carousel = document.querySelector(".partners-carousel");
  const track = document.querySelector(".partners-track");

  if (!carousel || !track) {
    return;
  }

  const gap = 64;
  const items = track.children;
  const itemWidth = items[0].offsetWidth + gap;

  let index = 0;
  let isDragging = false;
  let startX = 0;
  let currentTranslate = 0;
  let prevTranslate = 0;
  let autoplayInterval;

  function setTranslate(x, withTransition = true) {
    track.style.transition = withTransition ? "transform 0.6s ease" : "none";
    track.style.transform = `translateX(${x}px)`;
  }

  function startAutoplay() {
    autoplayInterval = setInterval(() => {
      index++;
      currentTranslate = -itemWidth * index;
      setTranslate(currentTranslate);

      if (index >= items.length / 2) {
        setTimeout(() => {
          track.style.transition = "none";
          index = 0;
          currentTranslate = 0;
          setTranslate(0, false);
        }, 650);
      }
    }, 6000);
  }

  function stopAutoplay() {
    clearInterval(autoplayInterval);
  }

  function dragStart(x) {
    isDragging = true;
    startX = x;
    prevTranslate = currentTranslate;
    stopAutoplay();
    carousel.classList.add("is-dragging");
  }

  function dragMove(x) {
    if (!isDragging) {
      return;
    }

    const delta = x - startX;
    currentTranslate = prevTranslate + delta;
    setTranslate(currentTranslate, false);
  }

  function dragEnd() {
    if (!isDragging) {
      return;
    }

    isDragging = false;

    const movedBy = currentTranslate - prevTranslate;

    if (movedBy < -50) {
      index++;
    }

    if (movedBy > 50) {
      index--;
    }

    index = Math.max(0, index);
    currentTranslate = -itemWidth * index;
    setTranslate(currentTranslate);

    carousel.classList.remove("is-dragging");
    startAutoplay();
  }

  carousel.addEventListener("mousedown", (e) => dragStart(e.clientX));
  window.addEventListener("mousemove", (e) => dragMove(e.clientX));
  window.addEventListener("mouseup", dragEnd);

  carousel.addEventListener("touchstart", (e) =>
    dragStart(e.touches[0].clientX)
  );
  carousel.addEventListener("touchmove", (e) => dragMove(e.touches[0].clientX));
  carousel.addEventListener("touchend", dragEnd);

  setTranslate(0, false);
  startAutoplay();
});
