export default function initNavbarToggle() {
  // Hamburger Toggle Animation
  const toggleBtn = document.querySelector(".navbar__toggle");
  if (toggleBtn) {
    toggleBtn.addEventListener("click", () => {
      toggleBtn.classList.toggle("is-open");
    });
  }
}
