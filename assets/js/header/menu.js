document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".menu-item.has-mega");
  let closeTimer = null;

  const closeAll = () => {
    document
      .querySelectorAll(".menu-item.mega-open")
      .forEach((i) => i.classList.remove("mega-open"));

    document
      .querySelectorAll(".mega-menu.is-active")
      .forEach((m) => m.classList.remove("is-active"));
  };

  items.forEach((item) => {
    const slug = item.dataset.menu;
    const mega = document.querySelector(`.mega-menu[data-mega-menu="${slug}"]`);

    if (!mega) {
      return;
    }

    const openMega = () => {
      clearTimeout(closeTimer);
      closeAll();
      item.classList.add("mega-open");
      mega.classList.add("is-active");
    };

    const delayedClose = () => {
      clearTimeout(closeTimer);

      closeTimer = setTimeout(() => {
        item.classList.remove("mega-open");
        mega.classList.remove("is-active");
      }, 150);
    };

    item.addEventListener("mouseenter", openMega);

    item.addEventListener("mouseleave", (e) => {
      if (mega.contains(e.relatedTarget)) {
        return;
      }

      delayedClose();
    });

    mega.addEventListener("mouseenter", openMega);

    mega.addEventListener("mouseleave", (e) => {
      if (item.contains(e.relatedTarget)) {
        return;
      }

      delayedClose();
    });
  });
});
