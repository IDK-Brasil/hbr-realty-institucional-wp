document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("contactModal");
  const openBtns = document.querySelectorAll(
    ".desktop-btn, .mobile-cta, .press-cta, .open-contact-modal"
  );
  const closeBtn = document.querySelector(".modal-close");

  if (!modal || !openBtns.length || !closeBtn) {
    return;
  }

  const open = () => modal.classList.add("is-active");
  const close = () => modal.classList.remove("is-active");

  openBtns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      open();
    });
  });

  closeBtn.addEventListener("click", close);

  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      close();
    }
  });
});
