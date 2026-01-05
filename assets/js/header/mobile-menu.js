document.addEventListener("DOMContentLoaded", () => {
  const toggle = document.querySelector(".menu-toggle.mobile-only");
  const mobileMenu = document.querySelector(".mobile-menu");

  if (!toggle || !mobileMenu) {
    console.warn("Menu mobile não encontrado.");
    return;
  }

  toggle.addEventListener("click", () => {
    toggle.classList.toggle("is-active");
    mobileMenu.classList.toggle("is-active");
  });

  const mobileItems = document.querySelectorAll(".mobile-item.has-submenu > a");

  mobileItems.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const parent = link.closest(".mobile-item");
      parent.classList.toggle("active");
    });
  });
});
