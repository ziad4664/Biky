let btn = document.querySelector(".scroll-to-top-btn");
window.addEventListener("scroll", function () {
  if (window.scrollY > 200) {
    btn.classList.remove("hide");
    btn.classList.add("active");
    btn.onclick = () => {
      window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth",
      });
    };
  } else {
    btn.classList.remove("active");
    btn.classList.add("hide");
  }
});