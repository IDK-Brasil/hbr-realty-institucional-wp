document.addEventListener("DOMContentLoaded", () => {
  const track = document.querySelector(".units-track");
  const cards = document.querySelectorAll(".unit-card");
  const prevButtons = document.querySelectorAll(".units-arrow--left");
  const nextButtons = document.querySelectorAll(".units-arrow--right");
  const currentEl = document.getElementById("current-unit");

  if (!track || cards.length === 0) return;

  let index = 0;
  const total = cards.length;

  function update() {
    track.style.transform = `translateX(-${index * 100}%)`;
    currentEl.textContent = String(index + 1).padStart(2, "0");

    prevButtons.forEach((btn) => (btn.disabled = index === 0));
    nextButtons.forEach((btn) => (btn.disabled = index === total - 1));
  }

  prevButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      if (index > 0) {
        index--;
        update();
      }
    });
  });

  nextButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      if (index < total - 1) {
        index++;
        update();
      }
    });
  });

  update();
});
