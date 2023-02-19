class Terms {
  constructor() {
    if (document.querySelector("#terms-approval")) {
      this.approvalButton = document.querySelector("#terms-approval");
      this.loadTerms();
      this.events();
    }
  }

  events() {
    this.approvalButton.addEventListener("click", (evt) => {
      evt.preventDefault();
      this.cookiesApproval();
    });
  }

  loadTerms() {
    setTimeout(function () {
      if (
        sessionStorage.getItem("cookiesApproved") === null ||
        sessionStorage.getItem("cookiesApproved") === "false"
      ) {
        document.querySelector("#cookie-disclosure").style.display = "flex";
        sessionStorage.setItem("cookiesApproved", "false");
      }
    }, 3000);
  }

  cookiesApproval() {
    document.querySelector("#cookie-disclosure").style.display = "none";
    sessionStorage.setItem("cookiesApproved", "true");
  }
}

export default Terms;
