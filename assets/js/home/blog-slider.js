document.addEventListener("DOMContentLoaded", () => {
  const el = document.getElementById("blogSlider");

  if (!el) {
    return;
  }

  if (window.innerWidth < 768) {
    new KeenSlider("#blogSlider", {
      loop: true,
      slides: { perView: 1, spacing: 16 },
    });
  }
});
