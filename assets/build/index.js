/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/@emailjs/browser/es/api/sendPost.js":
/*!**********************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/api/sendPost.js ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "sendPost": () => (/* binding */ sendPost)
/* harmony export */ });
/* harmony import */ var _models_EmailJSResponseStatus__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../models/EmailJSResponseStatus */ "./node_modules/@emailjs/browser/es/models/EmailJSResponseStatus.js");
/* harmony import */ var _store_store__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../store/store */ "./node_modules/@emailjs/browser/es/store/store.js");


const sendPost = (url, data, headers = {}) => {
    return new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest();
        xhr.addEventListener('load', ({ target }) => {
            const responseStatus = new _models_EmailJSResponseStatus__WEBPACK_IMPORTED_MODULE_0__.EmailJSResponseStatus(target);
            if (responseStatus.status === 200 || responseStatus.text === 'OK') {
                resolve(responseStatus);
            }
            else {
                reject(responseStatus);
            }
        });
        xhr.addEventListener('error', ({ target }) => {
            reject(new _models_EmailJSResponseStatus__WEBPACK_IMPORTED_MODULE_0__.EmailJSResponseStatus(target));
        });
        xhr.open('POST', _store_store__WEBPACK_IMPORTED_MODULE_1__.store._origin + url, true);
        Object.keys(headers).forEach((key) => {
            xhr.setRequestHeader(key, headers[key]);
        });
        xhr.send(data);
    });
};


/***/ }),

/***/ "./node_modules/@emailjs/browser/es/index.js":
/*!***************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/index.js ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__),
/* harmony export */   "init": () => (/* reexport safe */ _methods_init_init__WEBPACK_IMPORTED_MODULE_0__.init),
/* harmony export */   "send": () => (/* reexport safe */ _methods_send_send__WEBPACK_IMPORTED_MODULE_1__.send),
/* harmony export */   "sendForm": () => (/* reexport safe */ _methods_sendForm_sendForm__WEBPACK_IMPORTED_MODULE_2__.sendForm)
/* harmony export */ });
/* harmony import */ var _methods_init_init__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./methods/init/init */ "./node_modules/@emailjs/browser/es/methods/init/init.js");
/* harmony import */ var _methods_send_send__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./methods/send/send */ "./node_modules/@emailjs/browser/es/methods/send/send.js");
/* harmony import */ var _methods_sendForm_sendForm__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./methods/sendForm/sendForm */ "./node_modules/@emailjs/browser/es/methods/sendForm/sendForm.js");




/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
    init: _methods_init_init__WEBPACK_IMPORTED_MODULE_0__.init,
    send: _methods_send_send__WEBPACK_IMPORTED_MODULE_1__.send,
    sendForm: _methods_sendForm_sendForm__WEBPACK_IMPORTED_MODULE_2__.sendForm,
});


/***/ }),

/***/ "./node_modules/@emailjs/browser/es/methods/init/init.js":
/*!***************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/methods/init/init.js ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "init": () => (/* binding */ init)
/* harmony export */ });
/* harmony import */ var _store_store__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../store/store */ "./node_modules/@emailjs/browser/es/store/store.js");

/**
 * Initiation
 * @param {string} publicKey - set the EmailJS public key
 * @param {string} origin - set the EmailJS origin
 */
const init = (publicKey, origin = 'https://api.emailjs.com') => {
    _store_store__WEBPACK_IMPORTED_MODULE_0__.store._userID = publicKey;
    _store_store__WEBPACK_IMPORTED_MODULE_0__.store._origin = origin;
};


/***/ }),

/***/ "./node_modules/@emailjs/browser/es/methods/send/send.js":
/*!***************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/methods/send/send.js ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "send": () => (/* binding */ send)
/* harmony export */ });
/* harmony import */ var _store_store__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../store/store */ "./node_modules/@emailjs/browser/es/store/store.js");
/* harmony import */ var _utils_validateParams__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../utils/validateParams */ "./node_modules/@emailjs/browser/es/utils/validateParams.js");
/* harmony import */ var _api_sendPost__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../api/sendPost */ "./node_modules/@emailjs/browser/es/api/sendPost.js");



/**
 * Send a template to the specific EmailJS service
 * @param {string} serviceID - the EmailJS service ID
 * @param {string} templateID - the EmailJS template ID
 * @param {object} templatePrams - the template params, what will be set to the EmailJS template
 * @param {string} publicKey - the EmailJS public key
 * @returns {Promise<EmailJSResponseStatus>}
 */
const send = (serviceID, templateID, templatePrams, publicKey) => {
    const uID = publicKey || _store_store__WEBPACK_IMPORTED_MODULE_0__.store._userID;
    (0,_utils_validateParams__WEBPACK_IMPORTED_MODULE_1__.validateParams)(uID, serviceID, templateID);
    const params = {
        lib_version: '3.10.0',
        user_id: uID,
        service_id: serviceID,
        template_id: templateID,
        template_params: templatePrams,
    };
    return (0,_api_sendPost__WEBPACK_IMPORTED_MODULE_2__.sendPost)('/api/v1.0/email/send', JSON.stringify(params), {
        'Content-type': 'application/json',
    });
};


/***/ }),

/***/ "./node_modules/@emailjs/browser/es/methods/sendForm/sendForm.js":
/*!***********************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/methods/sendForm/sendForm.js ***!
  \***********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "sendForm": () => (/* binding */ sendForm)
/* harmony export */ });
/* harmony import */ var _store_store__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../store/store */ "./node_modules/@emailjs/browser/es/store/store.js");
/* harmony import */ var _utils_validateParams__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../utils/validateParams */ "./node_modules/@emailjs/browser/es/utils/validateParams.js");
/* harmony import */ var _api_sendPost__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../api/sendPost */ "./node_modules/@emailjs/browser/es/api/sendPost.js");



const findHTMLForm = (form) => {
    let currentForm;
    if (typeof form === 'string') {
        currentForm = document.querySelector(form);
    }
    else {
        currentForm = form;
    }
    if (!currentForm || currentForm.nodeName !== 'FORM') {
        throw 'The 3rd parameter is expected to be the HTML form element or the style selector of form';
    }
    return currentForm;
};
/**
 * Send a form the specific EmailJS service
 * @param {string} serviceID - the EmailJS service ID
 * @param {string} templateID - the EmailJS template ID
 * @param {string | HTMLFormElement} form - the form element or selector
 * @param {string} publicKey - the EmailJS public key
 * @returns {Promise<EmailJSResponseStatus>}
 */
const sendForm = (serviceID, templateID, form, publicKey) => {
    const uID = publicKey || _store_store__WEBPACK_IMPORTED_MODULE_0__.store._userID;
    const currentForm = findHTMLForm(form);
    (0,_utils_validateParams__WEBPACK_IMPORTED_MODULE_1__.validateParams)(uID, serviceID, templateID);
    const formData = new FormData(currentForm);
    formData.append('lib_version', '3.10.0');
    formData.append('service_id', serviceID);
    formData.append('template_id', templateID);
    formData.append('user_id', uID);
    return (0,_api_sendPost__WEBPACK_IMPORTED_MODULE_2__.sendPost)('/api/v1.0/email/send-form', formData);
};


/***/ }),

/***/ "./node_modules/@emailjs/browser/es/models/EmailJSResponseStatus.js":
/*!**************************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/models/EmailJSResponseStatus.js ***!
  \**************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "EmailJSResponseStatus": () => (/* binding */ EmailJSResponseStatus)
/* harmony export */ });
class EmailJSResponseStatus {
    constructor(httpResponse) {
        this.status = httpResponse ? httpResponse.status : 0;
        this.text = httpResponse ? httpResponse.responseText : 'Network Error';
    }
}


/***/ }),

/***/ "./node_modules/@emailjs/browser/es/store/store.js":
/*!*********************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/store/store.js ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "store": () => (/* binding */ store)
/* harmony export */ });
const store = {
    _origin: 'https://api.emailjs.com',
};


/***/ }),

/***/ "./node_modules/@emailjs/browser/es/utils/validateParams.js":
/*!******************************************************************!*\
  !*** ./node_modules/@emailjs/browser/es/utils/validateParams.js ***!
  \******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "validateParams": () => (/* binding */ validateParams)
/* harmony export */ });
const validateParams = (publicKey, serviceID, templateID) => {
    if (!publicKey) {
        throw 'The public key is required. Visit https://dashboard.emailjs.com/admin/account';
    }
    if (!serviceID) {
        throw 'The service ID is required. Visit https://dashboard.emailjs.com/admin';
    }
    if (!templateID) {
        throw 'The template ID is required. Visit https://dashboard.emailjs.com/admin/templates';
    }
    return true;
};


/***/ }),

/***/ "./src/config/keys.js":
/*!****************************!*\
  !*** ./src/config/keys.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const Keys = {
  emailJS: "user_HQixmTuG9mMXopsr97IYS"
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Keys);

/***/ }),

/***/ "./src/modules/Email.js":
/*!******************************!*\
  !*** ./src/modules/Email.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _emailjs_browser__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @emailjs/browser */ "./node_modules/@emailjs/browser/es/index.js");
/* harmony import */ var _config_keys__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../config/keys */ "./src/config/keys.js");


class Email {
  constructor() {
    if (document.querySelector("#sendButton")) {
      this.sendButton = document.querySelector("#sendButton");
      this.submitEmail = document.querySelector("#submit");
      this.events();
      _emailjs_browser__WEBPACK_IMPORTED_MODULE_0__["default"].init(_config_keys__WEBPACK_IMPORTED_MODULE_1__["default"].emailJS);
    }
  }
  events = () => {
    this.sendButton.addEventListener("click", e => this.confirmSend(e));
    this.submitEmail.addEventListener("click", e => this.sendEmail(e));
  };
  confirmSend = e => {
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
  sendEmail = e => {
    e.preventDefault();
    let templateParams = {
      to_name: "Martin Dwyer",
      from_name: document.querySelector("#name").value,
      reply_to: document.querySelector("#email").value,
      message: document.querySelector("#comments").value
    };
    _emailjs_browser__WEBPACK_IMPORTED_MODULE_0__["default"].send("service_998jv3x", "template_gkvwqkc", templateParams).then(result => {
      document.querySelector("#success-message").innerHTML = "Thanks!  We will reply to your message within 24 hours.";
      document.getElementById("form").reset();
      console.log(result);
    }, error => {
      document.querySelector("#error-message").innerHTML = "A problem was incurred sending your message.  Please try again later.";
      document.getElementById("form").reset();
      console.log(error);
    });
  };
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Email);

/***/ }),

/***/ "./src/modules/Login.js":
/*!******************************!*\
  !*** ./src/modules/Login.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class Login {
  constructor() {
    this.siteTitle();
    this.loginForm();
  }
  loginForm = () => {
    let login = document.querySelector("#loginform");
    login.style = "border-radius: 8px";
    login.style = "margin-top: 0";
  };
  siteTitle = () => {
    let banner = document.querySelector("#login h1");
    let newNode = document.createElement("h2");
    let titleText = document.createTextNode("Primal Strength");
    banner.insertAdjacentHTML("beforebegin", ` <h2 style='text-align:center;color: white;font-size:2.5rem;margin-bottom:0rem;'>Primal Strength</h2>
        <h3 style="font-size: 1.75rem; text-align:center; color: white; margin-top:0; margin-bottom: 40px;line-height: .5;"><br>Member Portal</h3>
          `);
  };
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Login);

/***/ }),

/***/ "./src/modules/Navbar.js":
/*!*******************************!*\
  !*** ./src/modules/Navbar.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Navbar);

/***/ }),

/***/ "./src/modules/Scroll.js":
/*!*******************************!*\
  !*** ./src/modules/Scroll.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class Scroll {
  constructor() {
    if (document.querySelector("#back-to-top")) {
      this.backToTopButton = document.querySelector("#back-to-top");
      this.events();
    }
  }
  events() {
    this.backToTopButton.addEventListener("click", evt => {
      evt.preventDefault();
      this.backToTop();
    });
  }
  backToTop() {
    window.scrollTo(0, 0);
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Scroll);

/***/ }),

/***/ "./src/modules/Search.js":
/*!*******************************!*\
  !*** ./src/modules/Search.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class Search {
  constructor() {
    if (document.querySelector(".btn-search")) {
      console.log("search loading");
      this.searchButton = document.querySelector(".btn-search");
      this.searchDisplay = document.querySelector(".search-display");
      this.events();
    }
  }
  events = () => {};
  openSearchDisplay = evt => {};
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Search);

/***/ }),

/***/ "./src/modules/Terms.js":
/*!******************************!*\
  !*** ./src/modules/Terms.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class Terms {
  constructor() {
    if (document.querySelector("#terms-approval")) {
      this.approvalButton = document.querySelector("#terms-approval");
      this.loadTerms();
      this.events();
    }
  }
  events() {
    this.approvalButton.addEventListener("click", evt => {
      evt.preventDefault();
      this.cookiesApproval();
    });
  }
  loadTerms() {
    setTimeout(function () {
      if (sessionStorage.getItem("cookiesApproved") === null || sessionStorage.getItem("cookiesApproved") === "false") {
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Terms);

/***/ }),

/***/ "./css/main.scss":
/*!***********************!*\
  !*** ./css/main.scss ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/main.scss */ "./css/main.scss");
/* harmony import */ var _modules_Terms__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/Terms */ "./src/modules/Terms.js");
/* harmony import */ var _modules_Scroll__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/Scroll */ "./src/modules/Scroll.js");
/* harmony import */ var _modules_Navbar__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modules/Navbar */ "./src/modules/Navbar.js");
/* harmony import */ var _modules_Email__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./modules/Email */ "./src/modules/Email.js");
/* harmony import */ var _modules_Search__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./modules/Search */ "./src/modules/Search.js");
/* harmony import */ var _modules_Login__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./modules/Login */ "./src/modules/Login.js");







const terms = new _modules_Terms__WEBPACK_IMPORTED_MODULE_1__["default"]();
const scroll = new _modules_Scroll__WEBPACK_IMPORTED_MODULE_2__["default"]();
const navBar = new _modules_Navbar__WEBPACK_IMPORTED_MODULE_3__["default"]();
const search = new _modules_Search__WEBPACK_IMPORTED_MODULE_5__["default"]();
const email = new _modules_Email__WEBPACK_IMPORTED_MODULE_4__["default"]();
if (document.querySelector("body.login-action-login") || document.querySelector("body.login-action-register")) {
  const login = new _modules_Login__WEBPACK_IMPORTED_MODULE_6__["default"]();
}
})();

/******/ })()
;
//# sourceMappingURL=index.js.map