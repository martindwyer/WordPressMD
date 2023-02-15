class Navbar {
  constructor() {
    this.navItems = document.querySelectorAll(".navbar-nav > li");
    this.navLinks = document.querySelectorAll(".navbar-nav > li > a");
    this.setUpNav();
    this.setActiveLink();
  }

  setUpNav = () => {
    for (let item of this.navItems) {
      item.classList.add("nav-item");
    }

    for (let link of this.navLinks) {
      link.classList.add("nav-link");
    }
  };

  setActiveLink = () => {
    let activeSet = false;
    let homeLink;
    for (let link of this.navLinks) {
      if (window.location.href.includes(link.outerText.toLowerCase())) {
        link.classList.add("active");
        activeSet = true;
      }
      if (link.outerText.toLowerCase() === "home") {
        homeLink = link;
      }
    }
    if (!activeSet) {
      homeLink.classList.add("active");
    }
  };
}

export default Navbar;
