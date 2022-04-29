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

// Slide

const slideLideres = document.querySelectorAll("#slide-lideres > ul li");
const slideJuridico = document.querySelectorAll("#slide-juridico > ul li");
const slideStaff = document.querySelectorAll("#slide-staff > ul li");

slideLideres.forEach((li) => {
  li.style.width = `calc(100% / ${slideLideres.length})`;
  li.addEventListener("mouseover", (e) => {
    for (var i = 0; i < slideLideres.length; i++) {
      if (e.currentTarget != slideLideres[i]) {
        slideLideres[i].style.width = "7.5%";
      } else {
        slideLideres[i].style.width = "70%";
        slideLideres[i].style.transition = ".2s";
        slideLideres[i].classList.add("onOver");
        slideLideres[i].classList.remove("onOut");
        verifyHover(slideLideres[i]);
      }
    }
  });
  li.addEventListener("mouseout", (e) => {
    li.children[0].style.display = "none";
    for (var i = 0; i < slideLideres.length; i++) {
      if (e.currentTarget != slideLideres[i]) {
        slideLideres[i].style.width = `calc(100% / ${slideLideres.length})`;
      } else {
        slideLideres[i].style.width = `calc(100% / ${slideLideres.length})`;
        slideLideres[i].classList.add("onOut");
        slideLideres[i].classList.remove("onOver");
      }
    }
  });
});

slideJuridico.forEach((li) => {
  li.style.width = `calc(100% / ${slideJuridico.length})`;
  li.addEventListener("mouseover", (e) => {
    for (var i = 0; i < slideJuridico.length; i++) {
      if (e.currentTarget != slideJuridico[i]) {
        slideJuridico[i].style.width = "7.5%";
      } else {
        slideJuridico[i].style.width = "70%";
        slideJuridico[i].style.transition = ".2s";
        slideJuridico[i].classList.add("onOver");
        slideJuridico[i].classList.remove("onOut");
        verifyHover(slideJuridico[i]);
      }
    }
  });
  li.addEventListener("mouseout", (e) => {
    li.children[0].style.display = "none";
    for (var i = 0; i < slideJuridico.length; i++) {
      if (e.currentTarget != slideJuridico[i]) {
        slideJuridico[i].style.width = `calc(100% / ${slideJuridico.length})`;
      } else {
        slideJuridico[i].style.width = `calc(100% / ${slideJuridico.length})`;
        slideJuridico[i].classList.add("onOut");
        slideJuridico[i].classList.remove("onOver");
      }
    }
  });
});

slideStaff.forEach((li) => {
  li.style.width = `calc(100% / ${slideStaff.length})`;
  li.addEventListener("mouseover", (e) => {
    for (var i = 0; i < slideStaff.length; i++) {
      if (e.currentTarget != slideStaff[i]) {
        slideStaff[i].style.width = "7.5%";
      } else {
        slideStaff[i].style.width = "70%";
        slideStaff[i].style.transition = ".2s";
        slideStaff[i].classList.add("onOver");
        slideStaff[i].classList.remove("onOut");
        verifyHover(slideStaff[i]);
      }
    }
  });
  li.addEventListener("mouseout", (e) => {
    li.children[0].style.display = "none";
    for (var i = 0; i < slideStaff.length; i++) {
      if (e.currentTarget != slideStaff[i]) {
        slideStaff[i].style.width = `calc(100% / ${slideStaff.length})`;
      } else {
        slideStaff[i].style.width = `calc(100% / ${slideStaff.length})`;
        slideStaff[i].classList.add("onOut");
        slideStaff[i].classList.remove("onOver");
      }
    }
  });
});

function verifyHover(i) {
  setTimeout(() => {
    if (i.classList.contains("onOver")) {
      i.children[0].style.display = "block";
    }
  }, 200);
}
