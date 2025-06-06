export default function initFooterAccordion() {
  const footerHeadings = document.querySelectorAll(".footer__heading");

  footerHeadings.forEach((heading, index) => {
    const column = heading.closest(".footer__column");
    const list = column?.querySelector(".footer__list");
    const divider = column?.querySelector(".footer__heading-divider");

    // Open the first toggle by default
    if (index === 0 && window.innerWidth <= 1024) {
      heading.classList.add("is-open");
      list?.classList.add("is-open");
      divider?.classList.add("is-hidden");
    }

    heading.addEventListener("click", () => {
      if (window.innerWidth <= 1024) {
        // Toggle current section only
        heading.classList.toggle("is-open");
        list?.classList.toggle("is-open");
        divider?.classList.toggle("is-hidden");
      }
    });
  });
}
