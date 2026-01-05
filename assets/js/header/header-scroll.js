document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector(".site-header-idk-1225");

  if (!header) {
    return;
  }

  function updateHeader() {
    if (window.scrollY > 10) {
      header.classList.remove("is-top");
    } else {
      header.classList.add("is-top");
    }
  }

  updateHeader();
  window.addEventListener("scroll", updateHeader);
});
