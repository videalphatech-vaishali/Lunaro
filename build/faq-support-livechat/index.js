/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/faq-support-livechat/edit.js":
/*!******************************************!*\
  !*** ./src/faq-support-livechat/edit.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Edit)
/* harmony export */ });
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__);




function Edit({
  attributes,
  setAttributes
}) {
  const {
    boxes,
    bottomText
  } = attributes;
  const blockProps = (0,_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.useBlockProps)({
    className: 'contact-boxes-section'
  });
  const updateBox = (index, field, value) => {
    const newBoxes = [...boxes];
    newBoxes[index][field] = value;
    setAttributes({
      boxes: newBoxes
    });
  };
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("div", {
    ...blockProps,
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("div", {
      className: "contact-row-body",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("div", {
        className: "grid gap-10 md:grid-cols-2 lg:grid-cols-3 mb-16",
        children: boxes.map((box, index) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("div", {
          className: "bg-[#FFF4E433] p-6 rounded-3xl shadow-lg border border-gray-700 hover:border-purple-500 transition",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("div", {
            className: "flex items-center justify-center w-12 h-12 rounded-full bg-[#A89469] mb-4",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.MediaUpload, {
              onSelect: media => updateBox(index, 'icon', media.url),
              render: ({
                open
              }) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.Fragment, {
                children: box.icon ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("img", {
                  src: box.icon,
                  alt: "",
                  style: {
                    cursor: 'pointer',
                    width: '32px'
                  },
                  onClick: open
                }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
                  onClick: open,
                  variant: "primary",
                  children: "Upload Icon"
                })
              })
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.RichText, {
            tagName: "h3",
            className: "text-2xl font-bold mb-4",
            value: box.title,
            onChange: value => updateBox(index, 'title', value),
            placeholder: "Enter title..."
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.RichText, {
            tagName: "p",
            className: "text-gray-300 text-sm leading-relaxed",
            value: box.text,
            onChange: value => updateBox(index, 'text', value),
            placeholder: "Enter description..."
          })]
        }, index))
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_1__.RichText, {
      tagName: "h3",
      className: "bottom-text",
      value: bottomText,
      onChange: value => setAttributes({
        bottomText: value
      }),
      placeholder: "Enter bottom text..."
    })]
  });
}

/***/ }),

/***/ "./src/faq-support-livechat/style.scss":
/*!*********************************************!*\
  !*** ./src/faq-support-livechat/style.scss ***!
  \*********************************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nHookWebpackError: Cannot find module '<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png'\n    at tryRunOrWebpackError (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\HookWebpackError.js:86:9)\n    at __webpack_require_module__ (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5299:12)\n    at __webpack_require__ (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5256:18)\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5328:20\n    at symbolIterator (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3485:9)\n    at done (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3527:9)\n    at Hook.eval [as callAsync] (eval at create (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5234:43\n    at symbolIterator (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3482:9)\n    at timesSync (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:2297:7)\n    at Object.eachLimit (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3463:5)\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5196:16\n    at symbolIterator (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3485:9)\n    at done (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3527:9)\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5110:8\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:3534:5\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Cache.js:97:5\n    at Hook.eval [as callAsync] (eval at create (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at Cache.get (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Cache.js:79:18)\n    at ItemCacheFacade.get (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\CacheFacade.js:115:15)\n    at Compilation._codeGenerationModule (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:3498:9)\n    at codeGen (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5098:11)\n    at symbolIterator (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3482:9)\n    at timesSync (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:2297:7)\n    at Object.eachLimit (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3463:5)\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5164:15\n    at symbolIterator (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3485:9)\n    at timesSync (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:2297:7)\n    at Object.eachLimit (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3463:5)\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5128:14\n    at processQueue (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\util\\processAsyncTree.js:61:4)\n    at process.processTicksAndRejections (node:internal/process/task_queues:85:11)\n-- inner error --\nError: Cannot find module '<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png'\n    at webpackMissingModule (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\css-loader\\dist\\cjs.js??ruleSet[1].rules[4].use[1]!C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\postcss-loader\\dist\\cjs.js??ruleSet[1].rules[4].use[2]!C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\sass-loader\\dist\\cjs.js??ruleSet[1].rules[4].use[3]!C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\src\\faq-support-livechat\\style.scss:15:113)\n    at Module.<anonymous> (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\css-loader\\dist\\cjs.js??ruleSet[1].rules[4].use[1]!C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\postcss-loader\\dist\\cjs.js??ruleSet[1].rules[4].use[2]!C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\sass-loader\\dist\\cjs.js??ruleSet[1].rules[4].use[3]!C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\src\\faq-support-livechat\\style.scss:15:258)\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\javascript\\JavascriptModulesPlugin.js:494:10\n    at Hook.eval [as call] (eval at create (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\tapable\\lib\\HookCodeFactory.js:19:10), <anonymous>:7:1)\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5301:39\n    at tryRunOrWebpackError (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\HookWebpackError.js:81:7)\n    at __webpack_require_module__ (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5299:12)\n    at __webpack_require__ (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5256:18)\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5328:20\n    at symbolIterator (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3485:9)\n    at done (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3527:9)\n    at Hook.eval [as callAsync] (eval at create (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5234:43\n    at symbolIterator (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3482:9)\n    at timesSync (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:2297:7)\n    at Object.eachLimit (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3463:5)\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5196:16\n    at symbolIterator (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3485:9)\n    at done (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3527:9)\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5110:8\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:3534:5\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Cache.js:97:5\n    at Hook.eval [as callAsync] (eval at create (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at Cache.get (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Cache.js:79:18)\n    at ItemCacheFacade.get (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\CacheFacade.js:115:15)\n    at Compilation._codeGenerationModule (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:3498:9)\n    at codeGen (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5098:11)\n    at symbolIterator (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3482:9)\n    at timesSync (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:2297:7)\n    at Object.eachLimit (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3463:5)\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5164:15\n    at symbolIterator (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3485:9)\n    at timesSync (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:2297:7)\n    at Object.eachLimit (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\neo-async\\async.js:3463:5)\n    at C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\Compilation.js:5128:14\n    at processQueue (C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\webpack\\lib\\util\\processAsyncTree.js:61:4)\n    at process.processTicksAndRejections (node:internal/process/task_queues:85:11)\n\nGenerated code for C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\css-loader\\dist\\cjs.js??ruleSet[1].rules[4].use[1]!C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\postcss-loader\\dist\\cjs.js??ruleSet[1].rules[4].use[2]!C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\node_modules\\sass-loader\\dist\\cjs.js??ruleSet[1].rules[4].use[3]!C:\\xampp\\htdocs\\wordpress\\wp-content\\themes\\twentytwenty\\src\\faq-support-livechat\\style.scss\n 1 | __webpack_require__.r(__webpack_exports__);\n 2 | /* harmony export */ __webpack_require__.d(__webpack_exports__, {\n 3 | /* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n 4 | /* harmony export */ });\n 5 | /* harmony import */ var _node_modules_css_loader_dist_runtime_sourceMaps_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../node_modules/css-loader/dist/runtime/sourceMaps.js */ \"C:\\\\xampp\\\\htdocs\\\\wordpress\\\\wp-content\\\\themes\\\\twentytwenty\\\\node_modules\\\\css-loader\\\\dist\\\\runtime\\\\sourceMaps.js\");\n 6 | /* harmony import */ var _node_modules_css_loader_dist_runtime_sourceMaps_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_sourceMaps_js__WEBPACK_IMPORTED_MODULE_0__);\n 7 | /* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../node_modules/css-loader/dist/runtime/api.js */ \"C:\\\\xampp\\\\htdocs\\\\wordpress\\\\wp-content\\\\themes\\\\twentytwenty\\\\node_modules\\\\css-loader\\\\dist\\\\runtime\\\\api.js\");\n 8 | /* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_1__);\n 9 | /* harmony import */ var _node_modules_css_loader_dist_runtime_getUrl_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/css-loader/dist/runtime/getUrl.js */ \"C:\\\\xampp\\\\htdocs\\\\wordpress\\\\wp-content\\\\themes\\\\twentytwenty\\\\node_modules\\\\css-loader\\\\dist\\\\runtime\\\\getUrl.js\");\n10 | /* harmony import */ var _node_modules_css_loader_dist_runtime_getUrl_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_getUrl_js__WEBPACK_IMPORTED_MODULE_2__);\n11 | // Imports\n12 | \n13 | \n14 | \n15 | var ___CSS_LOADER_URL_IMPORT_0___ = new URL(/* asset import */ Object(function webpackMissingModule() { var e = new Error(\"Cannot find module '<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png'\"); e.code = 'MODULE_NOT_FOUND'; throw e; }()), __webpack_require__.b);\n16 | var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_1___default()((_node_modules_css_loader_dist_runtime_sourceMaps_js__WEBPACK_IMPORTED_MODULE_0___default()));\n17 | var ___CSS_LOADER_URL_REPLACEMENT_0___ = _node_modules_css_loader_dist_runtime_getUrl_js__WEBPACK_IMPORTED_MODULE_2___default()(___CSS_LOADER_URL_IMPORT_0___);\n18 | // Module\n19 | ___CSS_LOADER_EXPORT___.push([module.id, \".contact-boxes-section {\\n  background: url(\" + ___CSS_LOADER_URL_REPLACEMENT_0___ + \") center/cover no-repeat;\\n  background-color: #000;\\n  padding: 100px 20px;\\n  /* background: #0B0D16; */\\n  text-align: center;\\n  display: column;\\n}\\n\\n.contact-boxes-section h2 {\\n  font-size: 36px;\\n  font-weight: 600;\\n  color: #fff;\\n  margin-bottom: 20px;\\n}\\n\\n.contact-row-body {\\n  gap: 20px;\\n  display: flex;\\n  flex-wrap: wrap;\\n  margin-top: 40px;\\n  align-items: center;\\n  justify-content: center;\\n}\\n\\n.contact-row-roundedContainer {\\n  background-color: rgba(255, 255, 255, 0.4);\\n  box-sizing: border-box;\\n  border-radius: 20px;\\n  text-align: left;\\n  flex: 1 1 30%;\\n  padding: 30px;\\n  margin: 20px;\\n}\", \"\",{\"version\":3,\"sources\":[\"webpack://./src/faq-support-livechat/style.scss\"],\"names\":[],\"mappings\":\"AAAA;EACE,0EAAA;EACD,sBAAA;EACC,mBAAA;EACA,yBAAA;EACA,kBAAA;EACA,eAAA;AACF;;AACA;EACE,eAAA;EACA,gBAAA;EACA,WAAA;EACA,mBAAA;AAEF;;AAAA;EACE,SAAA;EACA,aAAA;EACE,eAAA;EACA,gBAAA;EACA,mBAAA;EACA,uBAAA;AAGJ;;AADA;EACI,0CAAA;EACA,sBAAA;EACA,mBAAA;EACA,gBAAA;EACA,aAAA;EACA,aAAA;EACA,YAAA;AAIJ\",\"sourcesContent\":[\".contact-boxes-section {\\n  background: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-Table.png') center/cover no-repeat;\\n background-color: #000;\\n  padding: 100px 20px;\\n  /* background: #0B0D16; */\\n  text-align: center;\\n  display: column;\\n}\\n.contact-boxes-section h2{\\n  font-size: 36px;\\n  font-weight: 600;\\n  color: #fff;\\n  margin-bottom: 20px;\\n}\\n.contact-row-body {\\n  gap: 20px;\\n  display: flex;\\n    flex-wrap: wrap;\\n    margin-top: 40px;\\n    align-items: center;\\n    justify-content: center;\\n}\\n.contact-row-roundedContainer { \\n    background-color: rgba(255, 255, 255, 0.4);\\n    box-sizing: border-box;\\n    border-radius: 20px;\\n    text-align: left;\\n    flex: 1 1 30%;\\n    padding: 30px;\\n    margin: 20px;\\n}\\n\\n\\n\"],\"sourceRoot\":\"\"}]);\n20 | // Exports\n21 | /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);\n22 | ");

/***/ }),

/***/ "react/jsx-runtime":
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
/***/ ((module) => {

"use strict";
module.exports = window["ReactJSXRuntime"];

/***/ }),

/***/ "@wordpress/block-editor":
/*!*************************************!*\
  !*** external ["wp","blockEditor"] ***!
  \*************************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["blockEditor"];

/***/ }),

/***/ "@wordpress/blocks":
/*!********************************!*\
  !*** external ["wp","blocks"] ***!
  \********************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["blocks"];

/***/ }),

/***/ "@wordpress/components":
/*!************************************!*\
  !*** external ["wp","components"] ***!
  \************************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["components"];

/***/ }),

/***/ "@wordpress/i18n":
/*!******************************!*\
  !*** external ["wp","i18n"] ***!
  \******************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["i18n"];

/***/ }),

/***/ "./src/faq-support-livechat/block.json":
/*!*********************************************!*\
  !*** ./src/faq-support-livechat/block.json ***!
  \*********************************************/
/***/ ((module) => {

"use strict";
module.exports = /*#__PURE__*/JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":3,"name":"myblocks/faq","version":"0.1.0","title":"faq-support-livechat","category":"widgets","icon":"smiley","description":"Example block scaffolded with Create Block tool.","example":{},"supports":{"html":false},"textdomain":"faq-support-livechat","editorScript":"file:./index.js","editorStyle":"file:./index.css","style":"file:./style-index.css","render":"file:./render.php","viewScript":"file:./view.js"}');

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
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
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
// This entry needs to be wrapped in an IIFE because it needs to be in strict mode.
(() => {
"use strict";
/*!*******************************************!*\
  !*** ./src/faq-support-livechat/index.js ***!
  \*******************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./style.scss */ "./src/faq-support-livechat/style.scss");
/* harmony import */ var _edit__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./edit */ "./src/faq-support-livechat/edit.js");
/* harmony import */ var _block_json__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./block.json */ "./src/faq-support-livechat/block.json");
/**
 * Registers a new block provided a unique name and an object defining its behavior.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */


/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * All files containing `style` keyword are bundled together. The code used
 * gets applied both to the front of your site and to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */


/**
 * Internal dependencies
 */



/**
 * Every block starts by registering a new block type definition.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */
(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockType)(_block_json__WEBPACK_IMPORTED_MODULE_3__.name, {
  /**
   * @see ./edit.js
   */
  edit: _edit__WEBPACK_IMPORTED_MODULE_2__["default"]
});
})();

/******/ })()
;
//# sourceMappingURL=index.js.map