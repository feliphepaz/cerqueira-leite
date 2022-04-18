const midiaBtn = document.querySelector("#menu-item-24");
const midiaMenu = document.querySelector(".midia-menu");
const midiaCloseBtn = document.querySelector(".midia-menu span");

midiaBtn.addEventListener("click", (e) => {
  e.preventDefault();
  midiaMenu.classList.toggle("active");
});

midiaCloseBtn.addEventListener("click", () => {
  midiaMenu.classList.remove("active");
});
