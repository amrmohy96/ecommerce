(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0], {

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
    "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/UserNotifications.vue?vue&type=template&id=23249cfc&":
    /*!********************************************************************************************************************************************************************************************************************!*\
      !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/UserNotifications.vue?vue&type=template&id=23249cfc& ***!
      \********************************************************************************************************************************************************************************************************************/
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
            return _c("li", {staticClass: "dropdown dropdown-notification nav-item"}, [
                _c(
                    "a",
                    {
                        staticClass: "nav-link nav-link-label",
                        attrs: {"data-toggle": "dropdown", href: "#"}
                    },
                    [
                        _c("i", {staticClass: " ft-bell icons-small"}),
                        _vm._v(" "),
                        _vm.unreadCount > 0
                            ? _c(
                            "span",
                            {
                                staticClass: "badge badge-pill badge-danger badge-up badge-glow"
                            },
                            [_vm._v(_vm._s(_vm.unreadCount))]
                            )
                            : _vm._e()
                    ]
                ),
                _vm._v(" "),
                _vm.unreadCount > 0
                    ? _c(
                    "ul",
                    {
                        staticClass: "dropdown-menu dropdown-menu-media dropdown-menu-right"
                    },
                    [
                        _vm._m(0),
                        _vm._v(" "),
                        _vm._l(_vm.unread, function (item) {
                            return _c(
                                "li",
                                {
                                    key: item.id,
                                    staticClass: "scrollable-container media-list w-100"
                                },
                                [
                                    _c("a", [
                                        _c("div", {staticClass: "media"}, [
                                            _vm._m(1, true),
                                            _vm._v(" "),
                                            _c("div", {staticClass: "media-body"}, [
                                                _c(
                                                    "p",
                                                    {
                                                        staticClass:
                                                            "notification-text font-small-3 text-muted"
                                                    },
                                                    [
                                                        _vm._v(
                                                            "\n                            " +
                                                            _vm._s(item.data.coupon) +
                                                            "\n                            " +
                                                            _vm._s(item.data.discount) +
                                                            "\n                        "
                                                        )
                                                    ]
                                                ),
                                                _c("small", [
                                                    _c(
                                                        "time",
                                                        {
                                                            staticClass: "media-meta text-muted",
                                                            attrs: {datetime: "2015-06-11T18:29:20+08:00"}
                                                        },
                                                        [
                                                            _vm._v(
                                                                "\n                            " +
                                                                _vm._s(item.data.created_at) +
                                                                "\n                        "
                                                            )
                                                        ]
                                                    )
                                                ])
                                            ])
                                        ])
                                    ])
                                ]
                            )
                        }),
                        _vm._v(" "),
                        _vm._m(2)
                    ],
                    2
                    )
                    : _vm._e()
            ])
        }
        var staticRenderFns = [
            function () {
                var _vm = this
                var _h = _vm.$createElement
                var _c = _vm._self._c || _h
                return _c("li", {staticClass: "dropdown-menu-header"}, [
                    _c("h6", {staticClass: "dropdown-header m-0"}, [
                        _c("span", {staticClass: "grey darken-2"}, [_vm._v("Notifications")])
                    ]),
                    _vm._v(" "),
                    _c(
                        "span",
                        {staticClass: "notification-tag badge badge-danger float-right m-0"},
                        [_vm._v("New")]
                    )
                ])
            },
            function () {
                var _vm = this
                var _h = _vm.$createElement
                var _c = _vm._self._c || _h
                return _c("div", {staticClass: "media-left align-self-center"}, [
                    _c("i", {staticClass: "ft-plus-square icon-bg-circle bg-cyan mr-0"})
                ])
            },
            function () {
                var _vm = this
                var _h = _vm.$createElement
                var _c = _vm._self._c || _h
                return _c("li", {staticClass: "dropdown-menu-footer"}, [
                    _c(
                        "a",
                        {
                            staticClass: "dropdown-item text-muted text-center",
                            attrs: {href: "javascript:void(0)"}
                        },
                        [_vm._v("Read all\n            notifications")]
                    )
                ])
            }
        ]
        render._withStripped = true


        /***/
    }),

    /***/
    "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
    /*!********************************************************************!*\
      !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
      \********************************************************************/
    /*! exports provided: default */
    /***/ (function (module, __webpack_exports__, __webpack_require__) {

        "use strict";
        __webpack_require__.r(__webpack_exports__);
        /* harmony export (binding) */
        __webpack_require__.d(__webpack_exports__, "default", function () {
            return normalizeComponent;
        });
        /* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

        function normalizeComponent(
            scriptExports,
            render,
            staticRenderFns,
            functionalTemplate,
            injectStyles,
            scopeId,
            moduleIdentifier, /* server only */
            shadowMode /* vue-cli only */
        ) {
            // Vue.extend constructor export interop
            var options = typeof scriptExports === 'function'
                ? scriptExports.options
                : scriptExports

            // render functions
            if (render) {
                options.render = render
                options.staticRenderFns = staticRenderFns
                options._compiled = true
            }

            // functional template
            if (functionalTemplate) {
                options.functional = true
            }

            // scopedId
            if (scopeId) {
                options._scopeId = 'data-v-' + scopeId
            }

            var hook
            if (moduleIdentifier) { // server build
                hook = function (context) {
                    // 2.3 injection
                    context =
                        context || // cached call
                        (this.$vnode && this.$vnode.ssrContext) || // stateful
                        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
                    // 2.2 with runInNewContext: true
                    if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
                        context = __VUE_SSR_CONTEXT__
                    }
                    // inject component styles
                    if (injectStyles) {
                        injectStyles.call(this, context)
                    }
                    // register component module identifier for async chunk inferrence
                    if (context && context._registeredComponents) {
                        context._registeredComponents.add(moduleIdentifier)
                    }
                }
                // used by ssr in case component is cached and beforeCreate
                // never gets called
                options._ssrRegister = hook
            } else if (injectStyles) {
                hook = shadowMode
                    ? function () {
                        injectStyles.call(
                            this,
                            (options.functional ? this.parent : this).$root.$options.shadowRoot
                        )
                    }
                    : injectStyles
            }

            if (hook) {
                if (options.functional) {
                    // for template-only hot-reload because in that case the render fn doesn't
                    // go through the normalizer
                    options._injectStyles = hook
                    // register for functional component in vue file
                    var originalRender = options.render
                    options.render = function renderWithStyleInjection(h, context) {
                        hook.call(context)
                        return originalRender(h, context)
                    }
                } else {
                    // inject component registration as beforeCreate hook
                    var existing = options.beforeCreate
                    options.beforeCreate = existing
                        ? [].concat(existing, hook)
                        : [hook]
                }
            }

            return {
                exports: scriptExports,
                options: options
            }
        }


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
        var _UserNotifications_vue_vue_type_template_id_23249cfc___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./UserNotifications.vue?vue&type=template&id=23249cfc& */ "./resources/js/components/UserNotifications.vue?vue&type=template&id=23249cfc&");
        /* harmony import */
        var _UserNotifications_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./UserNotifications.vue?vue&type=script&lang=js& */ "./resources/js/components/UserNotifications.vue?vue&type=script&lang=js&");
        /* empty/unused harmony star reexport *//* harmony import */
        var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");


        /* normalize component */

        var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
            _UserNotifications_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
            _UserNotifications_vue_vue_type_template_id_23249cfc___WEBPACK_IMPORTED_MODULE_0__["render"],
            _UserNotifications_vue_vue_type_template_id_23249cfc___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
            false,
            null,
            null,
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
    "./resources/js/components/UserNotifications.vue?vue&type=template&id=23249cfc&":
    /*!**************************************************************************************!*\
      !*** ./resources/js/components/UserNotifications.vue?vue&type=template&id=23249cfc& ***!
      \**************************************************************************************/
    /*! exports provided: render, staticRenderFns */
    /***/ (function (module, __webpack_exports__, __webpack_require__) {

        "use strict";
        __webpack_require__.r(__webpack_exports__);
        /* harmony import */
        var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_UserNotifications_vue_vue_type_template_id_23249cfc___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./UserNotifications.vue?vue&type=template&id=23249cfc& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/UserNotifications.vue?vue&type=template&id=23249cfc&");
        /* harmony reexport (safe) */
        __webpack_require__.d(__webpack_exports__, "render", function () {
            return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_UserNotifications_vue_vue_type_template_id_23249cfc___WEBPACK_IMPORTED_MODULE_0__["render"];
        });

        /* harmony reexport (safe) */
        __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () {
            return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_UserNotifications_vue_vue_type_template_id_23249cfc___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"];
        });


        /***/
    })

}]);
