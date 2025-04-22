

document.querySelectorAll(".hamburger").forEach((element) => {
  element.addEventListener("click", () => {
      element.classList.toggle("is_active");
      document.querySelector(".big_menu").classList.toggle("is_active");
  });
});

