// Initialize Splide.js
document.addEventListener("DOMContentLoaded", function () {
  const splide = new Splide("#heroSplide", {
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
    prevButton.addEventListener("click", () => {
      splide.go("<");
    });

    nextButton.addEventListener("click", () => {
      splide.go(">");
    });
  }

  // Footer Accordion Functionality (Tablet & Mobile)
  const footerHeadings = document.querySelectorAll(".footer__heading");

  footerHeadings.forEach((heading, index) => {
    const column = heading.closest(".footer__column");
    const list = column.querySelector(".footer__list");
    const divider = column.querySelector(".footer__heading-divider");

    // Open the first toggle by default
    if (index === 0 && window.innerWidth <= 1024) {
      heading.classList.add("is-open");
      list.classList.add("is-open");
      if (divider) divider.classList.add("is-hidden");
    }

    heading.addEventListener("click", () => {
      if (window.innerWidth <= 1024) {
        const isOpen = heading.classList.contains("is-open");

        // Toggle current section only
        heading.classList.toggle("is-open");
        list.classList.toggle("is-open");
        if (divider) divider.classList.toggle("is-hidden");
      }
    });
  });

  // Hamburger Toggle Animation
  const toggleBtn = document.querySelector(".navbar__toggle");
  if (toggleBtn) {
    toggleBtn.addEventListener("click", () => {
      toggleBtn.classList.toggle("is-open");
    });
  }
});
