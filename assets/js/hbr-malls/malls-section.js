document.addEventListener("DOMContentLoaded", () => {
  const wrapper = document.querySelector(".shopping-tabs-wrapper");
  const tabs = document.querySelectorAll(".shopping-tab");
  const contents = document.querySelectorAll(".shopping-content");

  if (!wrapper || tabs.length === 0) {
    return;
  }

  function activateTab(index, smooth = true) {
    tabs.forEach((t) => t.classList.remove("is-active"));
    contents.forEach((c) => c.classList.remove("is-active"));

    const tab = tabs[index];
    const content = document.querySelector(
      `.shopping-content[data-index="${index}"]`
    );

    if (!tab || !content) {
      return;
    }

    tab.classList.add("is-active");
    content.classList.add("is-active");

    tab.scrollIntoView({
      behavior: smooth ? "smooth" : "auto",
      inline: "center",
      block: "nearest",
    });
  }

  tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => activateTab(index));
  });

  requestAnimationFrame(() => activateTab(0, false));
});
