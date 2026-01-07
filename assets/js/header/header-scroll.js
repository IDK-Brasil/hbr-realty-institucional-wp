document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector(".site-header-idk-1225");
  const isNotFoundPage = document.body.querySelector(
    ".not-found-page-idk-1225"
  );

  if (!header) {
    return;
  }

  function updateHeader() {
    if (window.scrollY < 10 && !isNotFoundPage) {
      header.classList.add("is-top");
    } else {
      header.classList.remove("is-top");
    }
  }

  updateHeader();
  window.addEventListener("scroll", updateHeader);
});
