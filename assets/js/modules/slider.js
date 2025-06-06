import Splide from "@splidejs/splide";

export default function initHeroSlider() {
  const splideEl = document.querySelector("#heroSplide");
  if (!splideEl) return;

  const splide = new Splide(splideEl, {
    type: "loop",
    perPage: 1,
    arrows: false,
    pagination: true,
    speed: 800,
    autoplay: false,
    interval: 5000,
  }).mount();

  // Add event listeners to custom arrows
  const prevButton = document.querySelector(".slider-arrows__prev");
  const nextButton = document.querySelector(".slider-arrows__next");

  if (prevButton && nextButton) {
    prevButton.addEventListener("click", () => splide.go("<"));
    nextButton.addEventListener("click", () => splide.go(">"));
  }
}
