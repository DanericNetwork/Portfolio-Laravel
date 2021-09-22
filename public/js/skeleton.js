const $el = document.querySelector(".text-test");

// Loading finished
setTimeout(() => {
  $el.classList.remove("skeleton");
  $el
    .querySelectorAll(".hide-text")
    .forEach((el) => el.classList.remove("hide-text"));
}, 3000);