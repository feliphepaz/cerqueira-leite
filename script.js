// Dropdown Menu

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

// Verify Menu Item

const path = window.location.pathname.replace("/cerqueiraleite/", "");

if (path === "imprensa/" || path === "videos/") {
  midiaBtn.classList.add("current-menu-item");
}

// Cookies

const container = document.querySelector(".cookie-container");
const save = document.querySelector(".cookie-container .cta");
const marketing = document.querySelector("#marketing");
const analytics = document.querySelector("#analytics");

if (
  !window.localStorage.getItem("marketing") &&
  !window.localStorage.getItem("analytics")
) {
  getCookies();
} else {
  container.style.display = "none";
  if (window.localStorage.getItem("marketing")) {
    getMarketing();
  }
  if (window.localStorage.getItem("analytics")) {
    getAnalytics();
  }
}

function getCookies() {
  save.addEventListener("click", getPref);

  function getPref() {
    if (marketing.checked) {
      getMarketing();
      window.localStorage.setItem("marketing", "cookie aceito");
    }
    if (analytics.checked) {
      getAnalytics();
      window.localStorage.setItem("analytics", "cookie aceito");
    }
    container.style.display = "none";
  }
}

function getMarketing() {
  console.log("Função de Marketing");
}

function getAnalytics() {
  console.log("Função do Analytics");
}
