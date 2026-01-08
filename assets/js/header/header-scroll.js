document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector(".site-header-idk-1225");
  const needBlueHeader = document.body.querySelector(".blue-header");

  if (!header) {
    return;
  }

  function updateHeader() {
    if (window.scrollY < 10 && !needBlueHeader) {
      header.classList.add("is-top");
    } else {
      header.classList.remove("is-top");
    }
  }

  updateHeader();
  window.addEventListener("scroll", updateHeader);
});
