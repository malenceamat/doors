!function (t, s) {
    "use strict";
    var e, i, a = [].indexOf || function (t) {
        for (var s = 0, e = this.length; s < e; s++) if (s in this && this[s] === t) return s;
        return -1
    }, o = [].slice, n = function (t, s) {
        return function () {
            return t.apply(s, arguments)
        }
    }, r = function (t) {
        return t.replace(/(-|\.)(\w)/g, function (t, s) {
            return s.toUpperCase()
        })
    }, f = function (t) {
        return t.replace(/[A-Z]/g, function (t, s) {
            return (0 == s ? "" : "-") + t.toLowerCase()
        })
    }, c = function (s, e, i) {
        var a, o;
        if (void 0 === e && (e = t.fn.msfavorites.defaults.ns), a = r(e), o = s.data("msFavorites"), t.each(i, function (t, e) {
            s.data(a + "-" + t, e)
        }), o) switch (a) {
            case"data":
                o.data = t.extend(!0, o.data, i);
                break;
            case"options":
                o.options = t.extend(!0, o.options, i)
        }
        return i
    }, l = function (s, e) {
        var i, a;
        return void 0 === e && (e = t.fn.msfavorites.defaults.ns), i = r(e), a = s.data(i) || {}, t.each(s.data(), function (t, s) {
            if (0 === t.indexOf(i)) {
                var e = f(t.replace(i, ""));
                e.length > 0 && (a[e] = s)
            }
        }), a
    }, d = function (t, s) {
        if ("function" == typeof t) return t.apply(s, Array.prototype.slice.call(arguments, 2));
        if ("object" == typeof t) for (var e in t) if (t.hasOwnProperty(e) && !1 === t[e].apply(s, Array.prototype.slice.call(arguments, 2))) return !1;
        return !0
    };
    e = ["extended", "included"], function () {
        function t() {
        }

        t.extend = function (t) {
            var s, i, o;
            for (s in t) o = t[s], a.call(e, s) < 0 && (this[s] = o);
            return null != (i = t.extended) && i.apply(this), this
        }, t.include = function (t) {
            var s, i, o;
            for (s in t) o = t[s], a.call(e, s) < 0 && (this.prototype[s] = o);
            return null != (i = t.included) && i.apply(this), this
        }
    }(), (i = function (e, i) {
        this.defaults = t.fn.msfavorites.defaults, this.selectors = t.fn.msfavorites.selectors, this.$body = t("body"), this.$element = t(e), this.$parent = this.$element.closest(this.selectors.parent), this.$parent.length < 1 && (this.$parent = t("body")), this.options = t.extend(!0, {}, l(this.$parent), i), this.data = t.extend(!0, {
            id: 0,
            ctx: s.ctx
        }, l(this.$parent, "data"), l(this.$element, "data")), this.list = this.$body.data("msFavoritesList"), this.list || (this.setFavoritesList({}), this.getFavoritesList()), this.updateFavorites()
    }).prototype = {
        constructor: i, init: function () {
            this.processSuccess = n(this.processSuccess, this), this.processFailure = n(this.processFailure, this), this.processAction = n(this.processAction, this), this.getFavoritesList = n(this.getFavoritesList, this), this.setFavoritesList = n(this.setFavoritesList, this), this.addMethodAction = n(this.addMethodAction, this), this.removeMethodAction = n(this.removeMethodAction, this)
        }, getFavoritesList: function () {
            var e;
            e = t.extend(!0, this.data, {
                action: "favorites/multiple",
                limit: 0,
                options: this.options
            }), t.ajax({url: s.actionUrl, type: "get", dataType: "json", cache: !1, data: e}).done(function (t) {
                return function (s) {
                    t.processSuccess(s), t.setFavoritesList(s.data), t.updateFavorites(s.data)
                }
            }(this)).fail(function (t) {
                return function (s) {
                    t.processFailure(s)
                }
            }(this))
        }, setFavoritesList: function (t) {
            this.$body.data("msFavoritesList", t || {})
        }, updateFavorites: function (s, e) {
            var i, a, o, n, r;
            switch (s || (s = this.$body.data("msFavoritesList")), r = this.$parent.parent(), i = t(t.fn.msfavorites.selectors.main), a = t(t.fn.msfavorites.selectors.total), o = t(t.fn.msfavorites.selectors.totalAll), n = t(t.fn.msfavorites.selectors.totalUser), "object" == typeof s.list && t.each(i.not(this.defaults.cls.load), function (e) {
                return function () {
                    var i, a, o;
                    a = (i = t(this)).data("data-list"), o = i.data("data-id"), s.list[a] && t.inArray(o, s.list[a]) > -1 ? i.addClass(e.defaults.cls.load).addClass(e.defaults.cls.voted) : s.list[a] && t.inArray(o, s.list[a]) < 0 && i.addClass(e.defaults.cls.load).removeClass(e.defaults.cls.voted)
                }
            }(this)), "object" == typeof s.total && t.each(a, function () {
                var e, i, a;
                i = (e = t(this)).data("data-list"), a = parseInt(s.total[i] || 0), e.text(a)
            }), "object" == typeof s.total && t.each(o, function () {
                var e, i;
                i = (e = t(this)).data("data-list"), parseInt(s.total[i] || 0) ? e.show() : e.hide()
            }), "object" == typeof s.user && t.each(n, function () {
                var e, i, a, o;
                i = (e = t(this)).data("data-list"), a = e.data("data-id"), s = s.user[i] || {}, o = parseInt(s[a] || 0), e.text(o)
            }), !0) {
                case"list" == this.options.mode && "remove" == e:
                    this.$parent.remove(), r.find(this.selectors.parent).length < 1 && location.reload();
                    break;
                case"clear" == e:
                    var f;
                    (f = this.$element.data("data-list")) && s.list && !s.list[f] && (this.$parent.remove(), location.reload())
            }
            i.not(this.defaults.cls.load).addClass(this.defaults.cls.load)
        }, processAction: function () {
            var e, i, a;
            i = this.$element.hasClass(this.defaults.cls.action) ? this.data.method : this.$element.hasClass(this.defaults.cls.voted) ? "remove" : "add", a = t.extend(!0, this.data, {
                action: "favorites/multiple",
                method: i
            }), e = t.Event(t.fn.msfavorites.PROCESS_ACTION), this.$element.trigger(e, a), e.isDefaultPrevented() || (this.$element.removeClass(this.defaults.cls.load).removeClass(this.defaults.cls.voted), t.ajax({
                url: s.actionUrl,
                type: "post",
                dataType: "json",
                cache: !1,
                data: a
            }).done(function (t) {
                return function (s) {
                    t.processSuccess(s), t.setFavoritesList(s.data), t.updateFavorites(s.data, i)
                }
            }(this)).fail(function (t) {
                return function (s) {
                    t.processFailure(s)
                }
            }(this)))
        }, processSuccess: function (s) {
            var e, i;
            if (e = t.Event(t.fn.msfavorites.PROCESS_SUCCESS), this.$element.trigger(e, s), !e.isDefaultPrevented()) return s.success || ((i = s.message) || (i = "error unknown"), console.log(i)), d(t.fn.msfavorites.methodActions.success, this, s), !0
        }, processFailure: function (s) {
            var e, i;
            if (e = t.Event(t.fn.msfavorites.PROCESS_FAILURE), this.$element.trigger(e, s), !e.isDefaultPrevented()) return (i = s.responseJSON) || (i = "error unknown"), console.log(i), d(t.fn.msfavorites.methodActions.failure, this, s.responseJSON), !1
        }, addMethodAction: function (s, e, i) {
            return "function" == typeof i && (t.fn.msfavorites.methodActions[s] || (t.fn.msfavorites.methodActions[s] = {}), t.fn.msfavorites.methodActions[s][e] = i, !0)
        }, removeMethodAction: function (s, e) {
            return t.fn.msfavorites.methodActions[s] || (t.fn.msfavorites.methodActions[s] = {}), delete t.fn.msfavorites.methodActions[s][e], !0
        }
    }, t.fn.msfavorites = function () {
        var s, e;
        return e = arguments[0], s = 2 <= arguments.length ? o.call(arguments, 1) : [], this.each(function () {
            var a, o, n, r;
            if (a = t(this), (n = a.data("msFavorites")) || ((o = a.closest(t.fn.msfavorites.selectors.parent)).length < 1 && (o = t("body")), (r = t.extend(!0, {}, l(o), l(a))).mode, (n = new i(this, r)) && (a.data("msFavorites", n), n.init())), "string" == typeof e) return n[e].apply(n, s)
        })
    }, t.fn.msfavorites.CONTENT_CHANGE = "msfavorites:content-change.msfavorites", t.fn.msfavorites.PROCESS_SUCCESS = "msfavorites:process-success.msfavorites", t.fn.msfavorites.PROCESS_FAILURE = "msfavorites:process-failure.msfavorites", t.fn.msfavorites.PROCESS_ACTION = "msfavorites:process-action.msfavorites", t.fn.msfavorites.defaults = {
        ns: "msfavorites",
        cls: {load: "load", voted: "voted", action: "msfavorites-action"},
        timeout: 300
    }, t.fn.msfavorites.selectors = {
        main: "." + t.fn.msfavorites.defaults.ns,
        total: "." + t.fn.msfavorites.defaults.ns + "-total",
        totalAll: "." + t.fn.msfavorites.defaults.ns + "-total-all",
        totalUser: "." + t.fn.msfavorites.defaults.ns + "-total-user",
        parent: "." + t.fn.msfavorites.defaults.ns + "-parent",
        actionClick: "[data-click]",
        actionFormSubmit: "[data-formsubmit]",
        actionFormChange: "[data-formchange]"
    }, t.fn.msfavorites.methodActions = {
        success: {}, failure: {
            "set.cls.load": function (t) {
                this.$element && this.defaults.cls && this.$element.addClass(this.defaults.cls.load)
            }, "miniShop2.Message.initialize": function (t) {
                "object" == typeof miniShop2 && (miniShop2.Message.initialize(), t.message && miniShop2.Message.error(t.message))
            }
        }
    }, function (t) {
        jQuery.fn.originalHtml = jQuery.fn.html, jQuery.fn.html = function () {
            var s = this.originalHtml();
            return arguments.length ? (jQuery.fn.originalHtml.apply(this, arguments), this.trigger(t.fn.msfavorites.CONTENT_CHANGE, jQuery.merge([s], arguments)), this) : s
        }
    }(jQuery), t(document).on("click", t.fn.msfavorites.selectors.main + t.fn.msfavorites.selectors.actionClick, function (s) {
        var e = t(this);
        if (e.is("a") && s.preventDefault(), e.is("form")) {
            var i = {};
            t.map(e.serializeArray() || [], function (t, s) {
                i[t.name] = t.value
            }), c(e, "data", i)
        }
        e.msfavorites("processAction")
    }), t(document).on("submit", t.fn.msfavorites.selectors.main + t.fn.msfavorites.selectors.actionFormSubmit, function (s) {
        var e = t(this), i = {};
        s.preventDefault(), t.map(e.serializeArray() || [], function (t, s) {
            i[t.name] = t.value
        }), c(e, "data", i), e.msfavorites("processAction")
    }), t(document).on("change", t.fn.msfavorites.selectors.main + t.fn.msfavorites.selectors.actionFormChange, function (s) {
        var e = t(this), i = {};
        s.preventDefault(), t.map(e.serializeArray() || [], function (t, s) {
            i[t.name] = t.value
        }), c(e, "data", i), e.msfavorites("processAction")
    }), t(document).on(t.fn.msfavorites.CONTENT_CHANGE, function () {
        t(t.fn.msfavorites.selectors.main).msfavorites()
    }), t(window).on("load", function () {
        t(t.fn.msfavorites.selectors.main).msfavorites()
    }), window.msFavorites = new i(null, s.options)
}(window.jQuery, msFavoritesConfig);
