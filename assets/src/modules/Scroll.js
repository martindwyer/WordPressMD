class Scroll {
  constructor() {
    if (document.querySelector("#back-to-top")) {
      this.backToTopButton = document.querySelector("#back-to-top");
      this.events();
    }
  }

  events() {
    this.backToTopButton.addEventListener("click", (evt) => {
      evt.preventDefault();
      this.backToTop();
    });
  }

  backToTop() {
    window.scrollTo(0, 0);
  }
}

export default Scroll;
