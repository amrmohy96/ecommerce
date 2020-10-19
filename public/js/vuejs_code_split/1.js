(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[1], {

    /***/
    "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/UserNotifications.vue?vue&type=script&lang=js&":
    /*!****************************************************************************************************************************************************************************!*\
      !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/UserNotifications.vue?vue&type=script&lang=js& ***!
      \****************************************************************************************************************************************************************************/
    /*! exports provided: default */
    /***/ (function (module, __webpack_exports__, __webpack_require__) {

        "use strict";
        __webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
        /* harmony default export */
        __webpack_exports__["default"] = ({
            data: function data() {
                return {
                    read: {},
                    unread: {},
                    unreadCount: 0
                };
            },
            created: function created() {
                var _this = this;

                this.getNotifications();
                var userId = $('meta[name="userId"]').attr('content');
                Echo["private"]('App.User.' + userId).notification(function (notification) {
                    _this.unread.unshift(notification);

                    _this.unreadCount++;
                });
            },
            methods: {
                getNotifications: function getNotifications() {
                    var _this2 = this;

                    axios.get('user/notifications/get').then(function (res) {
                        _this2.read = res.data.read;
                        _this2.unread = res.data.unread;
                        _this2.unreadCount = res.data.unread.length;
                    })["catch"](function (error) {
                        return Exception.handle(error);
                    });
                },
                readNotifications: function readNotifications(notification) {
                    var _this3 = this;

                    axios.post('user/notifications/read', {
                        id: notification.id
                    }).then(function (res) {
                        _this3.unread.splice(notification, 1);

                        _this3.read.push(notification);

                        _this3.unreadCount--;
                    });
                }
            }
        });

        /***/
    }),

    /***/
    "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/UserNotifications.vue?vue&type=style&index=0&id=23249cfc&scoped=true&lang=css&":
    /*!***********************************************************************************************************************************************************************************************************************************************************************************************************!*\
      !*** ./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/UserNotifications.vue?vue&type=style&index=0&id=23249cfc&scoped=true&lang=css& ***!
      \***********************************************************************************************************************************************************************************************************************************************************************************************************/
    /*! no static exports found */
    /***/ (function (module, exports, __webpack_require__) {

        exports = module.exports = __webpack_require__(/*! ../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
        exports.push([module.i, "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n    /* -----------------------------------------\n   Timeline\n----------------------------------------- */\n.timeline[data-v-23249cfc] {\n        list-style: none;\n        padding-left: 0;\n        position: relative;\n}\n.timeline[data-v-23249cfc]:after {\n        content: \"\";\n        height: auto;\n        width: 1px;\n        background: #e3e3e3;\n        position: absolute;\n        top: 5px;\n        left: 30px;\n        bottom: 25px;\n}\n.timeline.timeline-sm[data-v-23249cfc]:after {\n        left: 12px;\n}\n.timeline li[data-v-23249cfc] {\n        position: relative;\n        padding-left: 70px;\n        margin-bottom: 20px;\n}\n.timeline li[data-v-23249cfc]:after {\n        content: \"\";\n        width: 12px;\n        height: 12px;\n        border-radius: 50%;\n        background: #e3e3e3;\n        position: absolute;\n        left: 24px;\n        top: 5px;\n}\n.timeline li .timeline-date[data-v-23249cfc] {\n        display: inline-block;\n        width: 100%;\n        color: #a6a6a6;\n        font-style: italic;\n        font-size: 13px;\n}\n.timeline.timeline-icons li[data-v-23249cfc] {\n        padding-top: 7px;\n}\n.timeline.timeline-icons li[data-v-23249cfc]:after {\n        width: 32px;\n        height: 32px;\n        background: #fff;\n        border: 1px solid #e3e3e3;\n        left: 14px;\n        top: 0;\n        z-index: 11;\n}\n.timeline.timeline-icons li .timeline-icon[data-v-23249cfc] {\n        position: absolute;\n        left: 23.5px;\n        top: 7px;\n        z-index: 12;\n}\n.timeline.timeline-icons li .timeline-icon [class*=glyphicon][data-v-23249cfc] {\n        top: -1px !important;\n}\n.timeline.timeline-icons.timeline-sm li[data-v-23249cfc] {\n        padding-left: 40px;\n        margin-bottom: 10px;\n}\n.timeline.timeline-icons.timeline-sm li[data-v-23249cfc]:after {\n        left: -5px;\n}\n.timeline.timeline-icons.timeline-sm li .timeline-icon[data-v-23249cfc] {\n        left: 4.5px;\n}\n.timeline.timeline-advanced li[data-v-23249cfc] {\n        padding-top: 0;\n}\n.timeline.timeline-advanced li[data-v-23249cfc]:after {\n        background: #fff;\n        border: 1px solid #29b6d8;\n}\n.timeline.timeline-advanced li[data-v-23249cfc]:before {\n        content: \"\";\n        width: 52px;\n        height: 52px;\n        border: 10px solid #fff;\n        position: absolute;\n        left: 4px;\n        top: -10px;\n        border-radius: 50%;\n        z-index: 12;\n}\n.timeline.timeline-advanced li .timeline-icon[data-v-23249cfc] {\n        color: #29b6d8;\n}\n.timeline.timeline-advanced li .timeline-date[data-v-23249cfc] {\n        width: 75px;\n        position: absolute;\n        right: 5px;\n        top: 3px;\n        text-align: right;\n}\n.timeline.timeline-advanced li .timeline-title[data-v-23249cfc] {\n        font-size: 17px;\n        margin-bottom: 0;\n        padding-top: 5px;\n        font-weight: bold;\n}\n.timeline.timeline-advanced li .timeline-subtitle[data-v-23249cfc] {\n        display: inline-block;\n        width: 100%;\n        color: #a6a6a6;\n}\n.timeline.timeline-advanced li .timeline-content[data-v-23249cfc] {\n        margin-top: 10px;\n        margin-bottom: 10px;\n        padding-right: 70px;\n}\n.timeline.timeline-advanced li .timeline-content p[data-v-23249cfc] {\n        margin-bottom: 3px;\n}\n.timeline.timeline-advanced li .timeline-content .divider-dashed[data-v-23249cfc] {\n        padding-top: 0px;\n        margin-bottom: 7px;\n        width: 200px;\n}\n.timeline.timeline-advanced li .timeline-user[data-v-23249cfc] {\n        display: inline-block;\n        width: 100%;\n        margin-bottom: 10px;\n}\n.timeline.timeline-advanced li .timeline-user[data-v-23249cfc]:before,\n    .timeline.timeline-advanced li .timeline-user[data-v-23249cfc]:after {\n        content: \" \";\n        display: table;\n}\n.timeline.timeline-advanced li .timeline-user[data-v-23249cfc]:after {\n        clear: both;\n}\n.timeline.timeline-advanced li .timeline-user .timeline-avatar[data-v-23249cfc] {\n        border-radius: 50%;\n        width: 32px;\n        height: 32px;\n        float: left;\n        margin-right: 10px;\n}\n.timeline.timeline-advanced li .timeline-user .timeline-user-name[data-v-23249cfc] {\n        font-weight: bold;\n        margin-bottom: 0;\n}\n.timeline.timeline-advanced li .timeline-user .timeline-user-subtitle[data-v-23249cfc] {\n        color: #a6a6a6;\n        margin-top: -4px;\n        margin-bottom: 0;\n}\n.timeline.timeline-advanced li .timeline-link[data-v-23249cfc] {\n        margin-left: 5px;\n        display: inline-block;\n}\n.timeline-load-more-btn[data-v-23249cfc] {\n        margin-left: 70px;\n}\n.timeline-load-more-btn i[data-v-23249cfc] {\n        margin-right: 5px;\n}\n\n\n    /* -----------------------------------------\n       Dropdown\n    ----------------------------------------- */\n.dropdown-menu[data-v-23249cfc]{\n        padding:0 0 0 0;\n}\na.dropdown-menu-header[data-v-23249cfc] {\n        background: #f7f9fe;\n        font-weight: bold;\n        border-bottom: 1px solid #e3e3e3;\n}\n.dropdown-menu > li a[data-v-23249cfc] {\n        padding: 10px 20px;\n}\n\n    /* -----------------------------------------\n       Badge\n    ----------------------------------------- */\n.badge[data-v-23249cfc]{\n        padding: 3px 5px 2px;\n        position: absolute;\n        top: 8px;\n        right: 5px;\n        display: inline-block;\n        min-width: 10px;\n        font-size: 12px;\n        font-weight: bold;\n        color: #ffffff;\n        line-height: 1;\n        vertical-align: baseline;\n        white-space: nowrap;\n        text-align: center;\n        border-radius: 10px;\n}\n.badge-danger[data-v-23249cfc] {\n        background-color: #db5565;\n}\n", ""]);

// exports


        /***/
    }),

    /***/
    "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/UserNotifications.vue?vue&type=style&index=0&id=23249cfc&scoped=true&lang=css&":
    /*!***************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
      !*** ./node_modules/style-loader!./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/UserNotifications.vue?vue&type=style&index=0&id=23249cfc&scoped=true&lang=css& ***!
      \***************************************************************************************************************************************************************************************************************************************************************************************************************************************/
    /*! no static exports found */
    /***/ (function (module, exports, __webpack_require__) {


        var content = __webpack_require__(/*! !../../../node_modules/css-loader??ref--6-1!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/src??ref--6-2!../../../node_modules/vue-loader/lib??vue-loader-options!./UserNotifications.vue?vue&type=style&index=0&id=23249cfc&scoped=true&lang=css& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/UserNotifications.vue?vue&type=style&index=0&id=23249cfc&scoped=true&lang=css&");

        if (typeof content === 'string') content = [[module.i, content, '']];

        var transform;
        var insertInto;


        var options = {"hmr": true}

        options.transform = transform
        options.insertInto = undefined;

        var update = __webpack_require__(/*! ../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

        if (content.locals) module.exports = content.locals;

        if (false) {
        }

        /***/
    }),

    /***/
    "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/UserNotifications.vue?vue&type=template&id=23249cfc&scoped=true&":
    /*!********************************************************************************************************************************************************************************************************************************!*\
      !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/UserNotifications.vue?vue&type=template&id=23249cfc&scoped=true& ***!
      \********************************************************************************************************************************************************************************************************************************/
    /*! exports provided: render, staticRenderFns */
    /***/ (function (module, __webpack_exports__, __webpack_require__) {

        "use strict";
        __webpack_require__.r(__webpack_exports__);
        /* harmony export (binding) */
        __webpack_require__.d(__webpack_exports__, "render", function () {
            return render;
        });
        /* harmony export (binding) */
        __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () {
            return staticRenderFns;
        });
        var render = function () {
            var _vm = this
            var _h = _vm.$createElement
            var _c = _vm._self._c || _h
            return _vm._m(0)
        }
        var staticRenderFns = [
            function () {
                var _vm = this
                var _h = _vm.$createElement
                var _c = _vm._self._c || _h
                return _c(
                    "div",
                    {
                        staticClass: "dropdown",
                        staticStyle: {float: "right", padding: "13px"}
                    },
                    [
                        _c(
                            "a",
                            {
                                staticStyle: {float: "left"},
                                attrs: {
                                    href: "#",
                                    onclick: "return false;",
                                    role: "button",
                                    "data-toggle": "dropdown",
                                    id: "dropdownMenu1",
                                    "data-target": "#",
                                    "aria-expanded": "true"
                                }
                            },
                            [
                                _c("i", {
                                    staticClass: "fa fa-bell-o",
                                    staticStyle: {
                                        "font-size": "20px",
                                        float: "left",
                                        color: "black"
                                    }
                                })
                            ]
                        ),
                        _vm._v(" "),
                        _c("span", {staticClass: "badge badge-danger"}, [_vm._v("6")]),
                        _vm._v(" "),
                        _c(
                            "ul",
                            {
                                staticClass: "dropdown-menu dropdown-menu-left pull-right",
                                attrs: {role: "menu", "aria-labelledby": "dropdownMenu1"}
                            },
                            [
                                _c("li", {attrs: {role: "presentation"}}, [
                                    _c(
                                        "a",
                                        {staticClass: "dropdown-menu-header", attrs: {href: "#"}},
                                        [_vm._v("Notifications")]
                                    )
                                ]),
                                _vm._v(" "),
                                _c(
                                    "ul",
                                    {
                                        staticClass: "timeline timeline-icons timeline-sm",
                                        staticStyle: {margin: "10px", width: "210px"}
                                    },
                                    [
                                        _c("li", [
                                            _c("p", [
                                                _vm._v(
                                                    "\n                    Your “Volume Trendline” PDF is ready "
                                                ),
                                                _c("a", {attrs: {href: ""}}, [_vm._v("here")]),
                                                _vm._v(" "),
                                                _c("span", {staticClass: "timeline-icon"}, [
                                                    _c("i", {
                                                        staticClass: "fa fa-file-pdf-o",
                                                        staticStyle: {color: "red"}
                                                    })
                                                ]),
                                                _vm._v(" "),
                                                _c("span", {staticClass: "timeline-date"}, [
                                                    _vm._v("Dec 10, 22:00")
                                                ])
                                            ])
                                        ]),
                                        _vm._v(" "),
                                        _c("li", [
                                            _c("p", [
                                                _vm._v(
                                                    "\n                    Your “Marketplace Report” PDF is ready "
                                                ),
                                                _c("a", {attrs: {href: ""}}, [_vm._v("here")]),
                                                _vm._v(" "),
                                                _c("span", {staticClass: "timeline-icon"}, [
                                                    _c("i", {
                                                        staticClass: "fa fa-file-pdf-o",
                                                        staticStyle: {color: "red"}
                                                    })
                                                ]),
                                                _vm._v(" "),
                                                _c("span", {staticClass: "timeline-date"}, [
                                                    _vm._v("Dec 6, 10:17")
                                                ])
                                            ])
                                        ]),
                                        _vm._v(" "),
                                        _c("li", [
                                            _c("p", [
                                                _vm._v(
                                                    "\n                    Your “Top Words” spreadsheet is ready "
                                                ),
                                                _c("a", {attrs: {href: ""}}, [_vm._v("here")]),
                                                _vm._v(" "),
                                                _c("span", {staticClass: "timeline-icon"}, [
                                                    _c("i", {
                                                        staticClass: "fa fa-file-excel-o",
                                                        staticStyle: {color: "green"}
                                                    })
                                                ]),
                                                _vm._v(" "),
                                                _c("span", {staticClass: "timeline-date"}, [
                                                    _vm._v("Dec 5, 04:36")
                                                ])
                                            ])
                                        ])
                                    ]
                                ),
                                _vm._v(" "),
                                _c("li", {attrs: {role: "presentation"}}, [
                                    _c("a", {
                                        staticClass: "dropdown-menu-header",
                                        attrs: {href: "#"}
                                    })
                                ])
                            ]
                        )
                    ]
                )
            }
        ]
        render._withStripped = true


        /***/
    }),

    /***/
    "./resources/js/components/UserNotifications.vue":
    /*!*******************************************************!*\
      !*** ./resources/js/components/UserNotifications.vue ***!
      \*******************************************************/
    /*! exports provided: default */
    /***/ (function (module, __webpack_exports__, __webpack_require__) {

        "use strict";
        __webpack_require__.r(__webpack_exports__);
        /* harmony import */
        var _UserNotifications_vue_vue_type_template_id_23249cfc_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./UserNotifications.vue?vue&type=template&id=23249cfc&scoped=true& */ "./resources/js/components/UserNotifications.vue?vue&type=template&id=23249cfc&scoped=true&");
        /* harmony import */
        var _UserNotifications_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./UserNotifications.vue?vue&type=script&lang=js& */ "./resources/js/components/UserNotifications.vue?vue&type=script&lang=js&");
        /* empty/unused harmony star reexport *//* harmony import */
        var _UserNotifications_vue_vue_type_style_index_0_id_23249cfc_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./UserNotifications.vue?vue&type=style&index=0&id=23249cfc&scoped=true&lang=css& */ "./resources/js/components/UserNotifications.vue?vue&type=style&index=0&id=23249cfc&scoped=true&lang=css&");
        /* harmony import */
        var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");


        /* normalize component */

        var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
            _UserNotifications_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
            _UserNotifications_vue_vue_type_template_id_23249cfc_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
            _UserNotifications_vue_vue_type_template_id_23249cfc_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
            false,
            null,
            "23249cfc",
            null
        )

        /* hot reload */
        if (false) {
            var api;
        }
        component.options.__file = "resources/js/components/UserNotifications.vue"
        /* harmony default export */
        __webpack_exports__["default"] = (component.exports);

        /***/
    }),

    /***/
    "./resources/js/components/UserNotifications.vue?vue&type=script&lang=js&":
    /*!********************************************************************************!*\
      !*** ./resources/js/components/UserNotifications.vue?vue&type=script&lang=js& ***!
      \********************************************************************************/
    /*! exports provided: default */
    /***/ (function (module, __webpack_exports__, __webpack_require__) {

        "use strict";
        __webpack_require__.r(__webpack_exports__);
        /* harmony import */
        var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_UserNotifications_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./UserNotifications.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/UserNotifications.vue?vue&type=script&lang=js&");
        /* empty/unused harmony star reexport */ /* harmony default export */
        __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_UserNotifications_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

        /***/
    }),

    /***/
    "./resources/js/components/UserNotifications.vue?vue&type=style&index=0&id=23249cfc&scoped=true&lang=css&":
    /*!****************************************************************************************************************!*\
      !*** ./resources/js/components/UserNotifications.vue?vue&type=style&index=0&id=23249cfc&scoped=true&lang=css& ***!
      \****************************************************************************************************************/
    /*! no static exports found */
    /***/ (function (module, __webpack_exports__, __webpack_require__) {

        "use strict";
        __webpack_require__.r(__webpack_exports__);
        /* harmony import */
        var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_UserNotifications_vue_vue_type_style_index_0_id_23249cfc_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/style-loader!../../../node_modules/css-loader??ref--6-1!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/src??ref--6-2!../../../node_modules/vue-loader/lib??vue-loader-options!./UserNotifications.vue?vue&type=style&index=0&id=23249cfc&scoped=true&lang=css& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/UserNotifications.vue?vue&type=style&index=0&id=23249cfc&scoped=true&lang=css&");
        /* harmony import */
        var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_UserNotifications_vue_vue_type_style_index_0_id_23249cfc_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_UserNotifications_vue_vue_type_style_index_0_id_23249cfc_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__);
        /* harmony reexport (unknown) */
        for (var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_UserNotifications_vue_vue_type_style_index_0_id_23249cfc_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__) if (["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function (key) {
            __webpack_require__.d(__webpack_exports__, key, function () {
                return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_UserNotifications_vue_vue_type_style_index_0_id_23249cfc_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__[key];
            })
        }(__WEBPACK_IMPORT_KEY__));
        /* harmony default export */
        __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_UserNotifications_vue_vue_type_style_index_0_id_23249cfc_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default.a);

        /***/
    }),

    /***/
    "./resources/js/components/UserNotifications.vue?vue&type=template&id=23249cfc&scoped=true&":
    /*!**************************************************************************************************!*\
      !*** ./resources/js/components/UserNotifications.vue?vue&type=template&id=23249cfc&scoped=true& ***!
      \**************************************************************************************************/
    /*! exports provided: render, staticRenderFns */
    /***/ (function (module, __webpack_exports__, __webpack_require__) {

        "use strict";
        __webpack_require__.r(__webpack_exports__);
        /* harmony import */
        var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_UserNotifications_vue_vue_type_template_id_23249cfc_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./UserNotifications.vue?vue&type=template&id=23249cfc&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/UserNotifications.vue?vue&type=template&id=23249cfc&scoped=true&");
        /* harmony reexport (safe) */
        __webpack_require__.d(__webpack_exports__, "render", function () {
            return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_UserNotifications_vue_vue_type_template_id_23249cfc_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"];
        });

        /* harmony reexport (safe) */
        __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () {
            return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_UserNotifications_vue_vue_type_template_id_23249cfc_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"];
        });


        /***/
    })

}]);
