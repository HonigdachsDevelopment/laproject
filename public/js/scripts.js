(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/scripts"],{

/***/ "./resources/js/scripts.js":
/*!*********************************!*\
  !*** ./resources/js/scripts.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var checkbox = document.querySelector('input[type="checkbox"]#toggleDM');
var root = document.querySelector("html");

function checkSystem() {
  var prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;

  if (prefersDark) {
    root.classList.add("DarkMode");
  } else {
    root.classList.remove("DarkMode");
  }
}

function initDarkMode() {
  checkSystem();

  if (root.classList.contains("DarkMode")) {
    checkbox.setAttribute("checked", true);
  }

  checkbox.addEventListener("change", function (event) {
    root.classList.toggle("DarkMode");
    var isDarkMode = root.classList.contains("DarkMode");
    checkbox.setAttribute("checked", isDarkMode);
  });
}

initDarkMode();

/***/ }),

/***/ 1:
/*!***************************************!*\
  !*** multi ./resources/js/scripts.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\LaravelProjects\lasocial\resources\js\scripts.js */"./resources/js/scripts.js");


/***/ })

},[[1,"/js/manifest"]]]);