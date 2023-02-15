import emailjs from "@emailjs/browser";
import Keys from "../config/keys";

class Email {
  constructor() {
    if (document.querySelector("#sendButton")) {
      this.sendButton = document.querySelector("#sendButton");
      this.submitEmail = document.querySelector("#submit");
      this.events();
      emailjs.init(Keys.emailJS);
    }
  }

  events = () => {
    this.sendButton.addEventListener("click", (e) => this.confirmSend(e));
    this.submitEmail.addEventListener("click", (e) => this.sendEmail(e));
  };

  confirmSend = (e) => {
    console.log("starting confirm");
    document.querySelector("#close-modal").click();
    document.querySelector("#submit-button").style.backgroundColor = "#009900";
    document.querySelector("#submit-button").style.border = "1px solid #009900";
    document.querySelector("#submit-button").classList.add("shadow-none");
    document.querySelector("#submit").disabled = false;
    document.querySelector("#submit").click();
    console.log("just submitted");
    document.querySelector("#submit").disabled = true;
  };

  sendEmail = (e) => {
    e.preventDefault();
    let templateParams = {
      to_name: "Martin Dwyer",
      from_name: document.querySelector("#name").value,
      reply_to: document.querySelector("#email").value,
      message: document.querySelector("#comments").value,
    };

    emailjs.send("service_998jv3x", "template_gkvwqkc", templateParams).then(
      (result) => {
        document.querySelector("#success-message").innerHTML =
          "Thanks!  We will reply to your message within 24 hours.";
        document.getElementById("form").reset();
        console.log(result);
      },
      (error) => {
        document.querySelector("#error-message").innerHTML =
          "A problem was incurred sending your message.  Please try again later.";
        document.getElementById("form").reset();
        console.log(error);
      }
    );
  };
}

export default Email;
