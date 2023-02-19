import "../css/main.scss";
import Terms from "./modules/Terms";
import Scroll from "./modules/Scroll";
import Navbar from "./modules/Navbar";
import Email from "./modules/Email";
import Search from "./modules/Search";
import Login from "./modules/Login";
import Gallery from "./modules/Gallery";

const terms = new Terms();
const scroll = new Scroll();
const navBar = new Navbar();
const search = new Search();
const gallery = new Gallery();
const email = new Email();
const login = new Login();

if (
  document.querySelector("body.login-action-login") ||
  document.querySelector("body.login-action-register")
) {
  const login = new Login();
}
