! function(e, t) {
    "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function(e) {
        if (!e.document) throw new Error("jQuery requires a window with a document");
        return t(e)
    } : t(e)
}("undefined" != typeof window ? window : this, function(e, t) {
    function n(e) {
        var t = "length" in e && e.length,
            n = ie.type(e);
        return "function" === n || ie.isWindow(e) ? !1 : 1 === e.nodeType && t ? !0 : "array" === n || 0 === t || "number" == typeof t && t > 0 && t - 1 in e
    }

    function r(e, t, n) {
        if (ie.isFunction(t)) return ie.grep(e, function(e, r) {
            return !!t.call(e, r, e) !== n
        });
        if (t.nodeType) return ie.grep(e, function(e) {
            return e === t !== n
        });
        if ("string" == typeof t) {
            if (fe.test(t)) return ie.filter(t, e, n);
            t = ie.filter(t, e)
        }
        return ie.grep(e, function(e) {
            return ie.inArray(e, t) >= 0 !== n
        })
    }

    function i(e, t) {
        do e = e[t]; while (e && 1 !== e.nodeType);
        return e
    }

    function o(e) {
        var t = xe[e] = {};
        return ie.each(e.match(be) || [], function(e, n) {
            t[n] = !0
        }), t
    }

    function a() {
        he.addEventListener ? (he.removeEventListener("DOMContentLoaded", s, !1), e.removeEventListener("load", s, !1)) : (he.detachEvent("onreadystatechange", s), e.detachEvent("onload", s))
    }

    function s() {
        (he.addEventListener || "load" === event.type || "complete" === he.readyState) && (a(), ie.ready())
    }

    function u(e, t, n) {
        if (void 0 === n && 1 === e.nodeType) {
            var r = "data-" + t.replace(Ee, "-$1").toLowerCase();
            if (n = e.getAttribute(r), "string" == typeof n) {
                try {
                    n = "true" === n ? !0 : "false" === n ? !1 : "null" === n ? null : +n + "" === n ? +n : Ne.test(n) ? ie.parseJSON(n) : n
                } catch (i) {}
                ie.data(e, t, n)
            } else n = void 0
        }
        return n
    }

    function l(e) {
        var t;
        for (t in e)
            if (("data" !== t || !ie.isEmptyObject(e[t])) && "toJSON" !== t) return !1;
        return !0
    }

    function c(e, t, n, r) {
        if (ie.acceptData(e)) {
            var i, o, a = ie.expando,
                s = e.nodeType,
                u = s ? ie.cache : e,
                l = s ? e[a] : e[a] && a;
            if (l && u[l] && (r || u[l].data) || void 0 !== n || "string" != typeof t) return l || (l = s ? e[a] = J.pop() || ie.guid++ : a), u[l] || (u[l] = s ? {} : {
                toJSON: ie.noop
            }), ("object" == typeof t || "function" == typeof t) && (r ? u[l] = ie.extend(u[l], t) : u[l].data = ie.extend(u[l].data, t)), o = u[l], r || (o.data || (o.data = {}), o = o.data), void 0 !== n && (o[ie.camelCase(t)] = n), "string" == typeof t ? (i = o[t], null == i && (i = o[ie.camelCase(t)])) : i = o, i
        }
    }

    function d(e, t, n) {
        if (ie.acceptData(e)) {
            var r, i, o = e.nodeType,
                a = o ? ie.cache : e,
                s = o ? e[ie.expando] : ie.expando;
            if (a[s]) {
                if (t && (r = n ? a[s] : a[s].data)) {
                    ie.isArray(t) ? t = t.concat(ie.map(t, ie.camelCase)) : t in r ? t = [t] : (t = ie.camelCase(t), t = t in r ? [t] : t.split(" ")), i = t.length;
                    for (; i--;) delete r[t[i]];
                    if (n ? !l(r) : !ie.isEmptyObject(r)) return
                }(n || (delete a[s].data, l(a[s]))) && (o ? ie.cleanData([e], !0) : ne.deleteExpando || a != a.window ? delete a[s] : a[s] = null)
            }
        }
    }

    function f() {
        return !0
    }

    function p() {
        return !1
    }

    function h() {
        try {
            return he.activeElement
        } catch (e) {}
    }

    function m(e) {
        var t = Fe.split("|"),
            n = e.createDocumentFragment();
        if (n.createElement)
            for (; t.length;) n.createElement(t.pop());
        return n
    }

    function g(e, t) {
        var n, r, i = 0,
            o = typeof e.getElementsByTagName !== Ce ? e.getElementsByTagName(t || "*") : typeof e.querySelectorAll !== Ce ? e.querySelectorAll(t || "*") : void 0;
        if (!o)
            for (o = [], n = e.childNodes || e; null != (r = n[i]); i++) !t || ie.nodeName(r, t) ? o.push(r) : ie.merge(o, g(r, t));
        return void 0 === t || t && ie.nodeName(e, t) ? ie.merge([e], o) : o
    }

    function v(e) {
        je.test(e.type) && (e.defaultChecked = e.checked)
    }

    function y(e, t) {
        return ie.nodeName(e, "table") && ie.nodeName(11 !== t.nodeType ? t : t.firstChild, "tr") ? e.getElementsByTagName("tbody")[0] || e.appendChild(e.ownerDocument.createElement("tbody")) : e
    }

    function b(e) {
        return e.type = (null !== ie.find.attr(e, "type")) + "/" + e.type, e
    }

    function x(e) {
        var t = Ve.exec(e.type);
        return t ? e.type = t[1] : e.removeAttribute("type"), e
    }

    function w(e, t) {
        for (var n, r = 0; null != (n = e[r]); r++) ie._data(n, "globalEval", !t || ie._data(t[r], "globalEval"))
    }

    function T(e, t) {
        if (1 === t.nodeType && ie.hasData(e)) {
            var n, r, i, o = ie._data(e),
                a = ie._data(t, o),
                s = o.events;
            if (s) {
                delete a.handle, a.events = {};
                for (n in s)
                    for (r = 0, i = s[n].length; i > r; r++) ie.event.add(t, n, s[n][r])
            }
            a.data && (a.data = ie.extend({}, a.data))
        }
    }

    function C(e, t) {
        var n, r, i;
        if (1 === t.nodeType) {
            if (n = t.nodeName.toLowerCase(), !ne.noCloneEvent && t[ie.expando]) {
                i = ie._data(t);
                for (r in i.events) ie.removeEvent(t, r, i.handle);
                t.removeAttribute(ie.expando)
            }
            "script" === n && t.text !== e.text ? (b(t).text = e.text, x(t)) : "object" === n ? (t.parentNode && (t.outerHTML = e.outerHTML), ne.html5Clone && e.innerHTML && !ie.trim(t.innerHTML) && (t.innerHTML = e.innerHTML)) : "input" === n && je.test(e.type) ? (t.defaultChecked = t.checked = e.checked, t.value !== e.value && (t.value = e.value)) : "option" === n ? t.defaultSelected = t.selected = e.defaultSelected : ("input" === n || "textarea" === n) && (t.defaultValue = e.defaultValue)
        }
    }

    function N(t, n) {
        var r, i = ie(n.createElement(t)).appendTo(n.body),
            o = e.getDefaultComputedStyle && (r = e.getDefaultComputedStyle(i[0])) ? r.display : ie.css(i[0], "display");
        return i.detach(), o
    }

    function E(e) {
        var t = he,
            n = Ze[e];
        return n || (n = N(e, t), "none" !== n && n || (Ke = (Ke || ie("<iframe frameborder='0' width='0' height='0'/>")).appendTo(t.documentElement), t = (Ke[0].contentWindow || Ke[0].contentDocument).document, t.write(), t.close(), n = N(e, t), Ke.detach()), Ze[e] = n), n
    }

    function k(e, t) {
        return {
            get: function() {
                var n = e();
                return null != n ? n ? void delete this.get : (this.get = t).apply(this, arguments) : void 0
            }
        }
    }

    function S(e, t) {
        if (t in e) return t;
        for (var n = t.charAt(0).toUpperCase() + t.slice(1), r = t, i = ft.length; i--;)
            if (t = ft[i] + n, t in e) return t;
        return r
    }

    function A(e, t) {
        for (var n, r, i, o = [], a = 0, s = e.length; s > a; a++) r = e[a], r.style && (o[a] = ie._data(r, "olddisplay"), n = r.style.display, t ? (o[a] || "none" !== n || (r.style.display = ""), "" === r.style.display && Ae(r) && (o[a] = ie._data(r, "olddisplay", E(r.nodeName)))) : (i = Ae(r), (n && "none" !== n || !i) && ie._data(r, "olddisplay", i ? n : ie.css(r, "display"))));
        for (a = 0; s > a; a++) r = e[a], r.style && (t && "none" !== r.style.display && "" !== r.style.display || (r.style.display = t ? o[a] || "" : "none"));
        return e
    }

    function D(e, t, n) {
        var r = ut.exec(t);
        return r ? Math.max(0, r[1] - (n || 0)) + (r[2] || "px") : t
    }

    function j(e, t, n, r, i) {
        for (var o = n === (r ? "border" : "content") ? 4 : "width" === t ? 1 : 0, a = 0; 4 > o; o += 2) "margin" === n && (a += ie.css(e, n + Se[o], !0, i)), r ? ("content" === n && (a -= ie.css(e, "padding" + Se[o], !0, i)), "margin" !== n && (a -= ie.css(e, "border" + Se[o] + "Width", !0, i))) : (a += ie.css(e, "padding" + Se[o], !0, i), "padding" !== n && (a += ie.css(e, "border" + Se[o] + "Width", !0, i)));
        return a
    }

    function L(e, t, n) {
        var r = !0,
            i = "width" === t ? e.offsetWidth : e.offsetHeight,
            o = et(e),
            a = ne.boxSizing && "border-box" === ie.css(e, "boxSizing", !1, o);
        if (0 >= i || null == i) {
            if (i = tt(e, t, o), (0 > i || null == i) && (i = e.style[t]), rt.test(i)) return i;
            r = a && (ne.boxSizingReliable() || i === e.style[t]), i = parseFloat(i) || 0
        }
        return i + j(e, t, n || (a ? "border" : "content"), r, o) + "px"
    }

    function H(e, t, n, r, i) {
        return new H.prototype.init(e, t, n, r, i)
    }

    function q() {
        return setTimeout(function() {
            pt = void 0
        }), pt = ie.now()
    }

    function _(e, t) {
        var n, r = {
                height: e
            },
            i = 0;
        for (t = t ? 1 : 0; 4 > i; i += 2 - t) n = Se[i], r["margin" + n] = r["padding" + n] = e;
        return t && (r.opacity = r.width = e), r
    }

    function M(e, t, n) {
        for (var r, i = (bt[t] || []).concat(bt["*"]), o = 0, a = i.length; a > o; o++)
            if (r = i[o].call(n, t, e)) return r
    }

    function F(e, t, n) {
        var r, i, o, a, s, u, l, c, d = this,
            f = {},
            p = e.style,
            h = e.nodeType && Ae(e),
            m = ie._data(e, "fxshow");
        n.queue || (s = ie._queueHooks(e, "fx"), null == s.unqueued && (s.unqueued = 0, u = s.empty.fire, s.empty.fire = function() {
            s.unqueued || u()
        }), s.unqueued++, d.always(function() {
            d.always(function() {
                s.unqueued--, ie.queue(e, "fx").length || s.empty.fire()
            })
        })), 1 === e.nodeType && ("height" in t || "width" in t) && (n.overflow = [p.overflow, p.overflowX, p.overflowY], l = ie.css(e, "display"), c = "none" === l ? ie._data(e, "olddisplay") || E(e.nodeName) : l, "inline" === c && "none" === ie.css(e, "float") && (ne.inlineBlockNeedsLayout && "inline" !== E(e.nodeName) ? p.zoom = 1 : p.display = "inline-block")), n.overflow && (p.overflow = "hidden", ne.shrinkWrapBlocks() || d.always(function() {
            p.overflow = n.overflow[0], p.overflowX = n.overflow[1], p.overflowY = n.overflow[2]
        }));
        for (r in t)
            if (i = t[r], mt.exec(i)) {
                if (delete t[r], o = o || "toggle" === i, i === (h ? "hide" : "show")) {
                    if ("show" !== i || !m || void 0 === m[r]) continue;
                    h = !0
                }
                f[r] = m && m[r] || ie.style(e, r)
            } else l = void 0;
        if (ie.isEmptyObject(f)) "inline" === ("none" === l ? E(e.nodeName) : l) && (p.display = l);
        else {
            m ? "hidden" in m && (h = m.hidden) : m = ie._data(e, "fxshow", {}), o && (m.hidden = !h), h ? ie(e).show() : d.done(function() {
                ie(e).hide()
            }), d.done(function() {
                var t;
                ie._removeData(e, "fxshow");
                for (t in f) ie.style(e, t, f[t])
            });
            for (r in f) a = M(h ? m[r] : 0, r, d), r in m || (m[r] = a.start, h && (a.end = a.start, a.start = "width" === r || "height" === r ? 1 : 0))
        }
    }

    function O(e, t) {
        var n, r, i, o, a;
        for (n in e)
            if (r = ie.camelCase(n), i = t[r], o = e[n], ie.isArray(o) && (i = o[1], o = e[n] = o[0]), n !== r && (e[r] = o, delete e[n]), a = ie.cssHooks[r], a && "expand" in a) {
                o = a.expand(o), delete e[r];
                for (n in o) n in e || (e[n] = o[n], t[n] = i)
            } else t[r] = i
    }

    function B(e, t, n) {
        var r, i, o = 0,
            a = yt.length,
            s = ie.Deferred().always(function() {
                delete u.elem
            }),
            u = function() {
                if (i) return !1;
                for (var t = pt || q(), n = Math.max(0, l.startTime + l.duration - t), r = n / l.duration || 0, o = 1 - r, a = 0, u = l.tweens.length; u > a; a++) l.tweens[a].run(o);
                return s.notifyWith(e, [l, o, n]), 1 > o && u ? n : (s.resolveWith(e, [l]), !1)
            },
            l = s.promise({
                elem: e,
                props: ie.extend({}, t),
                opts: ie.extend(!0, {
                    specialEasing: {}
                }, n),
                originalProperties: t,
                originalOptions: n,
                startTime: pt || q(),
                duration: n.duration,
                tweens: [],
                createTween: function(t, n) {
                    var r = ie.Tween(e, l.opts, t, n, l.opts.specialEasing[t] || l.opts.easing);
                    return l.tweens.push(r), r
                },
                stop: function(t) {
                    var n = 0,
                        r = t ? l.tweens.length : 0;
                    if (i) return this;
                    for (i = !0; r > n; n++) l.tweens[n].run(1);
                    return t ? s.resolveWith(e, [l, t]) : s.rejectWith(e, [l, t]), this
                }
            }),
            c = l.props;
        for (O(c, l.opts.specialEasing); a > o; o++)
            if (r = yt[o].call(l, e, c, l.opts)) return r;
        return ie.map(c, M, l), ie.isFunction(l.opts.start) && l.opts.start.call(e, l), ie.fx.timer(ie.extend(u, {
            elem: e,
            anim: l,
            queue: l.opts.queue
        })), l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always)
    }

    function P(e) {
        return function(t, n) {
            "string" != typeof t && (n = t, t = "*");
            var r, i = 0,
                o = t.toLowerCase().match(be) || [];
            if (ie.isFunction(n))
                for (; r = o[i++];) "+" === r.charAt(0) ? (r = r.slice(1) || "*", (e[r] = e[r] || []).unshift(n)) : (e[r] = e[r] || []).push(n)
        }
    }

    function R(e, t, n, r) {
        function i(s) {
            var u;
            return o[s] = !0, ie.each(e[s] || [], function(e, s) {
                var l = s(t, n, r);
                return "string" != typeof l || a || o[l] ? a ? !(u = l) : void 0 : (t.dataTypes.unshift(l), i(l), !1)
            }), u
        }
        var o = {},
            a = e === zt;
        return i(t.dataTypes[0]) || !o["*"] && i("*")
    }

    function W(e, t) {
        var n, r, i = ie.ajaxSettings.flatOptions || {};
        for (r in t) void 0 !== t[r] && ((i[r] ? e : n || (n = {}))[r] = t[r]);
        return n && ie.extend(!0, e, n), e
    }

    function $(e, t, n) {
        for (var r, i, o, a, s = e.contents, u = e.dataTypes;
            "*" === u[0];) u.shift(), void 0 === i && (i = e.mimeType || t.getResponseHeader("Content-Type"));
        if (i)
            for (a in s)
                if (s[a] && s[a].test(i)) {
                    u.unshift(a);
                    break
                }
        if (u[0] in n) o = u[0];
        else {
            for (a in n) {
                if (!u[0] || e.converters[a + " " + u[0]]) {
                    o = a;
                    break
                }
                r || (r = a)
            }
            o = o || r
        }
        return o ? (o !== u[0] && u.unshift(o), n[o]) : void 0
    }

    function z(e, t, n, r) {
        var i, o, a, s, u, l = {},
            c = e.dataTypes.slice();
        if (c[1])
            for (a in e.converters) l[a.toLowerCase()] = e.converters[a];
        for (o = c.shift(); o;)
            if (e.responseFields[o] && (n[e.responseFields[o]] = t), !u && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), u = o, o = c.shift())
                if ("*" === o) o = u;
                else if ("*" !== u && u !== o) {
            if (a = l[u + " " + o] || l["* " + o], !a)
                for (i in l)
                    if (s = i.split(" "), s[1] === o && (a = l[u + " " + s[0]] || l["* " + s[0]])) {
                        a === !0 ? a = l[i] : l[i] !== !0 && (o = s[0], c.unshift(s[1]));
                        break
                    }
            if (a !== !0)
                if (a && e["throws"]) t = a(t);
                else try {
                    t = a(t)
                } catch (d) {
                    return {
                        state: "parsererror",
                        error: a ? d : "No conversion from " + u + " to " + o
                    }
                }
        }
        return {
            state: "success",
            data: t
        }
    }

    function I(e, t, n, r) {
        var i;
        if (ie.isArray(t)) ie.each(t, function(t, i) {
            n || Vt.test(e) ? r(e, i) : I(e + "[" + ("object" == typeof i ? t : "") + "]", i, n, r)
        });
        else if (n || "object" !== ie.type(t)) r(e, t);
        else
            for (i in t) I(e + "[" + i + "]", t[i], n, r)
    }

    function X() {
        try {
            return new e.XMLHttpRequest
        } catch (t) {}
    }

    function U() {
        try {
            return new e.ActiveXObject("Microsoft.XMLHTTP")
        } catch (t) {}
    }

    function V(e) {
        return ie.isWindow(e) ? e : 9 === e.nodeType ? e.defaultView || e.parentWindow : !1
    }
    var J = [],
        Y = J.slice,
        G = J.concat,
        Q = J.push,
        K = J.indexOf,
        Z = {},
        ee = Z.toString,
        te = Z.hasOwnProperty,
        ne = {},
        re = "1.11.3",
        ie = function(e, t) {
            return new ie.fn.init(e, t)
        },
        oe = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
        ae = /^-ms-/,
        se = /-([\da-z])/gi,
        ue = function(e, t) {
            return t.toUpperCase()
        };
    ie.fn = ie.prototype = {
        jquery: re,
        constructor: ie,
        selector: "",
        length: 0,
        toArray: function() {
            return Y.call(this)
        },
        get: function(e) {
            return null != e ? 0 > e ? this[e + this.length] : this[e] : Y.call(this)
        },
        pushStack: function(e) {
            var t = ie.merge(this.constructor(), e);
            return t.prevObject = this, t.context = this.context, t
        },
        each: function(e, t) {
            return ie.each(this, e, t)
        },
        map: function(e) {
            return this.pushStack(ie.map(this, function(t, n) {
                return e.call(t, n, t)
            }))
        },
        slice: function() {
            return this.pushStack(Y.apply(this, arguments))
        },
        first: function() {
            return this.eq(0)
        },
        last: function() {
            return this.eq(-1)
        },
        eq: function(e) {
            var t = this.length,
                n = +e + (0 > e ? t : 0);
            return this.pushStack(n >= 0 && t > n ? [this[n]] : [])
        },
        end: function() {
            return this.prevObject || this.constructor(null)
        },
        push: Q,
        sort: J.sort,
        splice: J.splice
    }, ie.extend = ie.fn.extend = function() {
        var e, t, n, r, i, o, a = arguments[0] || {},
            s = 1,
            u = arguments.length,
            l = !1;
        for ("boolean" == typeof a && (l = a, a = arguments[s] || {}, s++), "object" == typeof a || ie.isFunction(a) || (a = {}), s === u && (a = this, s--); u > s; s++)
            if (null != (i = arguments[s]))
                for (r in i) e = a[r], n = i[r], a !== n && (l && n && (ie.isPlainObject(n) || (t = ie.isArray(n))) ? (t ? (t = !1, o = e && ie.isArray(e) ? e : []) : o = e && ie.isPlainObject(e) ? e : {}, a[r] = ie.extend(l, o, n)) : void 0 !== n && (a[r] = n));
        return a
    }, ie.extend({
        expando: "jQuery" + (re + Math.random()).replace(/\D/g, ""),
        isReady: !0,
        error: function(e) {
            throw new Error(e)
        },
        noop: function() {},
        isFunction: function(e) {
            return "function" === ie.type(e)
        },
        isArray: Array.isArray || function(e) {
            return "array" === ie.type(e)
        },
        isWindow: function(e) {
            return null != e && e == e.window
        },
        isNumeric: function(e) {
            return !ie.isArray(e) && e - parseFloat(e) + 1 >= 0
        },
        isEmptyObject: function(e) {
            var t;
            for (t in e) return !1;
            return !0
        },
        isPlainObject: function(e) {
            var t;
            if (!e || "object" !== ie.type(e) || e.nodeType || ie.isWindow(e)) return !1;
            try {
                if (e.constructor && !te.call(e, "constructor") && !te.call(e.constructor.prototype, "isPrototypeOf")) return !1
            } catch (n) {
                return !1
            }
            if (ne.ownLast)
                for (t in e) return te.call(e, t);
            for (t in e);
            return void 0 === t || te.call(e, t)
        },
        type: function(e) {
            return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? Z[ee.call(e)] || "object" : typeof e
        },
        globalEval: function(t) {
            t && ie.trim(t) && (e.execScript || function(t) {
                e.eval.call(e, t)
            })(t)
        },
        camelCase: function(e) {
            return e.replace(ae, "ms-").replace(se, ue)
        },
        nodeName: function(e, t) {
            return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
        },
        each: function(e, t, r) {
            var i, o = 0,
                a = e.length,
                s = n(e);
            if (r) {
                if (s)
                    for (; a > o && (i = t.apply(e[o], r), i !== !1); o++);
                else
                    for (o in e)
                        if (i = t.apply(e[o], r), i === !1) break
            } else if (s)
                for (; a > o && (i = t.call(e[o], o, e[o]), i !== !1); o++);
            else
                for (o in e)
                    if (i = t.call(e[o], o, e[o]), i === !1) break;
            return e
        },
        trim: function(e) {
            return null == e ? "" : (e + "").replace(oe, "")
        },
        makeArray: function(e, t) {
            var r = t || [];
            return null != e && (n(Object(e)) ? ie.merge(r, "string" == typeof e ? [e] : e) : Q.call(r, e)), r
        },
        inArray: function(e, t, n) {
            var r;
            if (t) {
                if (K) return K.call(t, e, n);
                for (r = t.length, n = n ? 0 > n ? Math.max(0, r + n) : n : 0; r > n; n++)
                    if (n in t && t[n] === e) return n
            }
            return -1
        },
        merge: function(e, t) {
            for (var n = +t.length, r = 0, i = e.length; n > r;) e[i++] = t[r++];
            if (n !== n)
                for (; void 0 !== t[r];) e[i++] = t[r++];
            return e.length = i, e
        },
        grep: function(e, t, n) {
            for (var r, i = [], o = 0, a = e.length, s = !n; a > o; o++) r = !t(e[o], o), r !== s && i.push(e[o]);
            return i
        },
        map: function(e, t, r) {
            var i, o = 0,
                a = e.length,
                s = n(e),
                u = [];
            if (s)
                for (; a > o; o++) i = t(e[o], o, r), null != i && u.push(i);
            else
                for (o in e) i = t(e[o], o, r), null != i && u.push(i);
            return G.apply([], u)
        },
        guid: 1,
        proxy: function(e, t) {
            var n, r, i;
            return "string" == typeof t && (i = e[t], t = e, e = i), ie.isFunction(e) ? (n = Y.call(arguments, 2), r = function() {
                return e.apply(t || this, n.concat(Y.call(arguments)))
            }, r.guid = e.guid = e.guid || ie.guid++, r) : void 0
        },
        now: function() {
            return +new Date
        },
        support: ne
    }), ie.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function(e, t) {
        Z["[object " + t + "]"] = t.toLowerCase()
    });
    var le = function(e) {
        function t(e, t, n, r) {
            var i, o, a, s, u, l, d, p, h, m;
            if ((t ? t.ownerDocument || t : R) !== H && L(t), t = t || H, n = n || [], s = t.nodeType, "string" != typeof e || !e || 1 !== s && 9 !== s && 11 !== s) return n;
            if (!r && _) {
                if (11 !== s && (i = ye.exec(e)))
                    if (a = i[1]) {
                        if (9 === s) {
                            if (o = t.getElementById(a), !o || !o.parentNode) return n;
                            if (o.id === a) return n.push(o), n
                        } else if (t.ownerDocument && (o = t.ownerDocument.getElementById(a)) && B(t, o) && o.id === a) return n.push(o), n
                    } else {
                        if (i[2]) return K.apply(n, t.getElementsByTagName(e)), n;
                        if ((a = i[3]) && w.getElementsByClassName) return K.apply(n, t.getElementsByClassName(a)), n
                    }
                if (w.qsa && (!M || !M.test(e))) {
                    if (p = d = P, h = t, m = 1 !== s && e, 1 === s && "object" !== t.nodeName.toLowerCase()) {
                        for (l = E(e), (d = t.getAttribute("id")) ? p = d.replace(xe, "\\$&") : t.setAttribute("id", p), p = "[id='" + p + "'] ", u = l.length; u--;) l[u] = p + f(l[u]);
                        h = be.test(e) && c(t.parentNode) || t, m = l.join(",")
                    }
                    if (m) try {
                        return K.apply(n, h.querySelectorAll(m)), n
                    } catch (g) {} finally {
                        d || t.removeAttribute("id")
                    }
                }
            }
            return S(e.replace(ue, "$1"), t, n, r)
        }

        function n() {
            function e(n, r) {
                return t.push(n + " ") > T.cacheLength && delete e[t.shift()], e[n + " "] = r
            }
            var t = [];
            return e
        }

        function r(e) {
            return e[P] = !0, e
        }

        function i(e) {
            var t = H.createElement("div");
            try {
                return !!e(t)
            } catch (n) {
                return !1
            } finally {
                t.parentNode && t.parentNode.removeChild(t), t = null
            }
        }

        function o(e, t) {
            for (var n = e.split("|"), r = e.length; r--;) T.attrHandle[n[r]] = t
        }

        function a(e, t) {
            var n = t && e,
                r = n && 1 === e.nodeType && 1 === t.nodeType && (~t.sourceIndex || V) - (~e.sourceIndex || V);
            if (r) return r;
            if (n)
                for (; n = n.nextSibling;)
                    if (n === t) return -1;
            return e ? 1 : -1
        }

        function s(e) {
            return function(t) {
                var n = t.nodeName.toLowerCase();
                return "input" === n && t.type === e
            }
        }

        function u(e) {
            return function(t) {
                var n = t.nodeName.toLowerCase();
                return ("input" === n || "button" === n) && t.type === e
            }
        }

        function l(e) {
            return r(function(t) {
                return t = +t, r(function(n, r) {
                    for (var i, o = e([], n.length, t), a = o.length; a--;) n[i = o[a]] && (n[i] = !(r[i] = n[i]))
                })
            })
        }

        function c(e) {
            return e && "undefined" != typeof e.getElementsByTagName && e
        }

        function d() {}

        function f(e) {
            for (var t = 0, n = e.length, r = ""; n > t; t++) r += e[t].value;
            return r
        }

        function p(e, t, n) {
            var r = t.dir,
                i = n && "parentNode" === r,
                o = $++;
            return t.first ? function(t, n, o) {
                for (; t = t[r];)
                    if (1 === t.nodeType || i) return e(t, n, o)
            } : function(t, n, a) {
                var s, u, l = [W, o];
                if (a) {
                    for (; t = t[r];)
                        if ((1 === t.nodeType || i) && e(t, n, a)) return !0
                } else
                    for (; t = t[r];)
                        if (1 === t.nodeType || i) {
                            if (u = t[P] || (t[P] = {}), (s = u[r]) && s[0] === W && s[1] === o) return l[2] = s[2];
                            if (u[r] = l, l[2] = e(t, n, a)) return !0
                        }
            }
        }

        function h(e) {
            return e.length > 1 ? function(t, n, r) {
                for (var i = e.length; i--;)
                    if (!e[i](t, n, r)) return !1;
                return !0
            } : e[0]
        }

        function m(e, n, r) {
            for (var i = 0, o = n.length; o > i; i++) t(e, n[i], r);
            return r
        }

        function g(e, t, n, r, i) {
            for (var o, a = [], s = 0, u = e.length, l = null != t; u > s; s++)(o = e[s]) && (!n || n(o, r, i)) && (a.push(o), l && t.push(s));
            return a
        }

        function v(e, t, n, i, o, a) {
            return i && !i[P] && (i = v(i)), o && !o[P] && (o = v(o, a)), r(function(r, a, s, u) {
                var l, c, d, f = [],
                    p = [],
                    h = a.length,
                    v = r || m(t || "*", s.nodeType ? [s] : s, []),
                    y = !e || !r && t ? v : g(v, f, e, s, u),
                    b = n ? o || (r ? e : h || i) ? [] : a : y;
                if (n && n(y, b, s, u), i)
                    for (l = g(b, p), i(l, [], s, u), c = l.length; c--;)(d = l[c]) && (b[p[c]] = !(y[p[c]] = d));
                if (r) {
                    if (o || e) {
                        if (o) {
                            for (l = [], c = b.length; c--;)(d = b[c]) && l.push(y[c] = d);
                            o(null, b = [], l, u)
                        }
                        for (c = b.length; c--;)(d = b[c]) && (l = o ? ee(r, d) : f[c]) > -1 && (r[l] = !(a[l] = d))
                    }
                } else b = g(b === a ? b.splice(h, b.length) : b), o ? o(null, a, b, u) : K.apply(a, b)
            })
        }

        function y(e) {
            for (var t, n, r, i = e.length, o = T.relative[e[0].type], a = o || T.relative[" "], s = o ? 1 : 0, u = p(function(e) {
                    return e === t
                }, a, !0), l = p(function(e) {
                    return ee(t, e) > -1
                }, a, !0), c = [function(e, n, r) {
                    var i = !o && (r || n !== A) || ((t = n).nodeType ? u(e, n, r) : l(e, n, r));
                    return t = null, i
                }]; i > s; s++)
                if (n = T.relative[e[s].type]) c = [p(h(c), n)];
                else {
                    if (n = T.filter[e[s].type].apply(null, e[s].matches), n[P]) {
                        for (r = ++s; i > r && !T.relative[e[r].type]; r++);
                        return v(s > 1 && h(c), s > 1 && f(e.slice(0, s - 1).concat({
                            value: " " === e[s - 2].type ? "*" : ""
                        })).replace(ue, "$1"), n, r > s && y(e.slice(s, r)), i > r && y(e = e.slice(r)), i > r && f(e))
                    }
                    c.push(n)
                }
            return h(c)
        }

        function b(e, n) {
            var i = n.length > 0,
                o = e.length > 0,
                a = function(r, a, s, u, l) {
                    var c, d, f, p = 0,
                        h = "0",
                        m = r && [],
                        v = [],
                        y = A,
                        b = r || o && T.find.TAG("*", l),
                        x = W += null == y ? 1 : Math.random() || .1,
                        w = b.length;
                    for (l && (A = a !== H && a); h !== w && null != (c = b[h]); h++) {
                        if (o && c) {
                            for (d = 0; f = e[d++];)
                                if (f(c, a, s)) {
                                    u.push(c);
                                    break
                                }
                            l && (W = x)
                        }
                        i && ((c = !f && c) && p--, r && m.push(c))
                    }
                    if (p += h, i && h !== p) {
                        for (d = 0; f = n[d++];) f(m, v, a, s);
                        if (r) {
                            if (p > 0)
                                for (; h--;) m[h] || v[h] || (v[h] = G.call(u));
                            v = g(v)
                        }
                        K.apply(u, v), l && !r && v.length > 0 && p + n.length > 1 && t.uniqueSort(u)
                    }
                    return l && (W = x, A = y), m
                };
            return i ? r(a) : a
        }
        var x, w, T, C, N, E, k, S, A, D, j, L, H, q, _, M, F, O, B, P = "sizzle" + 1 * new Date,
            R = e.document,
            W = 0,
            $ = 0,
            z = n(),
            I = n(),
            X = n(),
            U = function(e, t) {
                return e === t && (j = !0), 0
            },
            V = 1 << 31,
            J = {}.hasOwnProperty,
            Y = [],
            G = Y.pop,
            Q = Y.push,
            K = Y.push,
            Z = Y.slice,
            ee = function(e, t) {
                for (var n = 0, r = e.length; r > n; n++)
                    if (e[n] === t) return n;
                return -1
            },
            te = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            ne = "[\\x20\\t\\r\\n\\f]",
            re = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
            ie = re.replace("w", "w#"),
            oe = "\\[" + ne + "*(" + re + ")(?:" + ne + "*([*^$|!~]?=)" + ne + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + ie + "))|)" + ne + "*\\]",
            ae = ":(" + re + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + oe + ")*)|.*)\\)|)",
            se = new RegExp(ne + "+", "g"),
            ue = new RegExp("^" + ne + "+|((?:^|[^\\\\])(?:\\\\.)*)" + ne + "+$", "g"),
            le = new RegExp("^" + ne + "*," + ne + "*"),
            ce = new RegExp("^" + ne + "*([>+~]|" + ne + ")" + ne + "*"),
            de = new RegExp("=" + ne + "*([^\\]'\"]*?)" + ne + "*\\]", "g"),
            fe = new RegExp(ae),
            pe = new RegExp("^" + ie + "$"),
            he = {
                ID: new RegExp("^#(" + re + ")"),
                CLASS: new RegExp("^\\.(" + re + ")"),
                TAG: new RegExp("^(" + re.replace("w", "w*") + ")"),
                ATTR: new RegExp("^" + oe),
                PSEUDO: new RegExp("^" + ae),
                CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + ne + "*(even|odd|(([+-]|)(\\d*)n|)" + ne + "*(?:([+-]|)" + ne + "*(\\d+)|))" + ne + "*\\)|)", "i"),
                bool: new RegExp("^(?:" + te + ")$", "i"),
                needsContext: new RegExp("^" + ne + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + ne + "*((?:-\\d)?\\d*)" + ne + "*\\)|)(?=[^-]|$)", "i")
            },
            me = /^(?:input|select|textarea|button)$/i,
            ge = /^h\d$/i,
            ve = /^[^{]+\{\s*\[native \w/,
            ye = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
            be = /[+~]/,
            xe = /'|\\/g,
            we = new RegExp("\\\\([\\da-f]{1,6}" + ne + "?|(" + ne + ")|.)", "ig"),
            Te = function(e, t, n) {
                var r = "0x" + t - 65536;
                return r !== r || n ? t : 0 > r ? String.fromCharCode(r + 65536) : String.fromCharCode(r >> 10 | 55296, 1023 & r | 56320)
            },
            Ce = function() {
                L()
            };
        try {
            K.apply(Y = Z.call(R.childNodes), R.childNodes), Y[R.childNodes.length].nodeType
        } catch (Ne) {
            K = {
                apply: Y.length ? function(e, t) {
                    Q.apply(e, Z.call(t))
                } : function(e, t) {
                    for (var n = e.length, r = 0; e[n++] = t[r++];);
                    e.length = n - 1
                }
            }
        }
        w = t.support = {}, N = t.isXML = function(e) {
            var t = e && (e.ownerDocument || e).documentElement;
            return t ? "HTML" !== t.nodeName : !1
        }, L = t.setDocument = function(e) {
            var t, n, r = e ? e.ownerDocument || e : R;
            return r !== H && 9 === r.nodeType && r.documentElement ? (H = r, q = r.documentElement, n = r.defaultView, n && n !== n.top && (n.addEventListener ? n.addEventListener("unload", Ce, !1) : n.attachEvent && n.attachEvent("onunload", Ce)), _ = !N(r), w.attributes = i(function(e) {
                return e.className = "i", !e.getAttribute("className")
            }), w.getElementsByTagName = i(function(e) {
                return e.appendChild(r.createComment("")), !e.getElementsByTagName("*").length
            }), w.getElementsByClassName = ve.test(r.getElementsByClassName), w.getById = i(function(e) {
                return q.appendChild(e).id = P, !r.getElementsByName || !r.getElementsByName(P).length
            }), w.getById ? (T.find.ID = function(e, t) {
                if ("undefined" != typeof t.getElementById && _) {
                    var n = t.getElementById(e);
                    return n && n.parentNode ? [n] : []
                }
            }, T.filter.ID = function(e) {
                var t = e.replace(we, Te);
                return function(e) {
                    return e.getAttribute("id") === t
                }
            }) : (delete T.find.ID, T.filter.ID = function(e) {
                var t = e.replace(we, Te);
                return function(e) {
                    var n = "undefined" != typeof e.getAttributeNode && e.getAttributeNode("id");
                    return n && n.value === t
                }
            }), T.find.TAG = w.getElementsByTagName ? function(e, t) {
                return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e) : w.qsa ? t.querySelectorAll(e) : void 0
            } : function(e, t) {
                var n, r = [],
                    i = 0,
                    o = t.getElementsByTagName(e);
                if ("*" === e) {
                    for (; n = o[i++];) 1 === n.nodeType && r.push(n);
                    return r
                }
                return o
            }, T.find.CLASS = w.getElementsByClassName && function(e, t) {
                return _ ? t.getElementsByClassName(e) : void 0
            }, F = [], M = [], (w.qsa = ve.test(r.querySelectorAll)) && (i(function(e) {
                q.appendChild(e).innerHTML = "<a id='" + P + "'></a><select id='" + P + "-\f]' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && M.push("[*^$]=" + ne + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || M.push("\\[" + ne + "*(?:value|" + te + ")"), e.querySelectorAll("[id~=" + P + "-]").length || M.push("~="), e.querySelectorAll(":checked").length || M.push(":checked"), e.querySelectorAll("a#" + P + "+*").length || M.push(".#.+[+~]")
            }), i(function(e) {
                var t = r.createElement("input");
                t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && M.push("name" + ne + "*[*^$|!~]?="), e.querySelectorAll(":enabled").length || M.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), M.push(",.*:")
            })), (w.matchesSelector = ve.test(O = q.matches || q.webkitMatchesSelector || q.mozMatchesSelector || q.oMatchesSelector || q.msMatchesSelector)) && i(function(e) {
                w.disconnectedMatch = O.call(e, "div"), O.call(e, "[s!='']:x"), F.push("!=", ae)
            }), M = M.length && new RegExp(M.join("|")), F = F.length && new RegExp(F.join("|")), t = ve.test(q.compareDocumentPosition), B = t || ve.test(q.contains) ? function(e, t) {
                var n = 9 === e.nodeType ? e.documentElement : e,
                    r = t && t.parentNode;
                return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)))
            } : function(e, t) {
                if (t)
                    for (; t = t.parentNode;)
                        if (t === e) return !0;
                return !1
            }, U = t ? function(e, t) {
                if (e === t) return j = !0, 0;
                var n = !e.compareDocumentPosition - !t.compareDocumentPosition;
                return n ? n : (n = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1, 1 & n || !w.sortDetached && t.compareDocumentPosition(e) === n ? e === r || e.ownerDocument === R && B(R, e) ? -1 : t === r || t.ownerDocument === R && B(R, t) ? 1 : D ? ee(D, e) - ee(D, t) : 0 : 4 & n ? -1 : 1)
            } : function(e, t) {
                if (e === t) return j = !0, 0;
                var n, i = 0,
                    o = e.parentNode,
                    s = t.parentNode,
                    u = [e],
                    l = [t];
                if (!o || !s) return e === r ? -1 : t === r ? 1 : o ? -1 : s ? 1 : D ? ee(D, e) - ee(D, t) : 0;
                if (o === s) return a(e, t);
                for (n = e; n = n.parentNode;) u.unshift(n);
                for (n = t; n = n.parentNode;) l.unshift(n);
                for (; u[i] === l[i];) i++;
                return i ? a(u[i], l[i]) : u[i] === R ? -1 : l[i] === R ? 1 : 0
            }, r) : H
        }, t.matches = function(e, n) {
            return t(e, null, null, n)
        }, t.matchesSelector = function(e, n) {
            if ((e.ownerDocument || e) !== H && L(e), n = n.replace(de, "='$1']"), !(!w.matchesSelector || !_ || F && F.test(n) || M && M.test(n))) try {
                var r = O.call(e, n);
                if (r || w.disconnectedMatch || e.document && 11 !== e.document.nodeType) return r
            } catch (i) {}
            return t(n, H, null, [e]).length > 0
        }, t.contains = function(e, t) {
            return (e.ownerDocument || e) !== H && L(e), B(e, t)
        }, t.attr = function(e, t) {
            (e.ownerDocument || e) !== H && L(e);
            var n = T.attrHandle[t.toLowerCase()],
                r = n && J.call(T.attrHandle, t.toLowerCase()) ? n(e, t, !_) : void 0;
            return void 0 !== r ? r : w.attributes || !_ ? e.getAttribute(t) : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
        }, t.error = function(e) {
            throw new Error("Syntax error, unrecognized expression: " + e)
        }, t.uniqueSort = function(e) {
            var t, n = [],
                r = 0,
                i = 0;
            if (j = !w.detectDuplicates, D = !w.sortStable && e.slice(0), e.sort(U), j) {
                for (; t = e[i++];) t === e[i] && (r = n.push(i));
                for (; r--;) e.splice(n[r], 1)
            }
            return D = null, e
        }, C = t.getText = function(e) {
            var t, n = "",
                r = 0,
                i = e.nodeType;
            if (i) {
                if (1 === i || 9 === i || 11 === i) {
                    if ("string" == typeof e.textContent) return e.textContent;
                    for (e = e.firstChild; e; e = e.nextSibling) n += C(e)
                } else if (3 === i || 4 === i) return e.nodeValue
            } else
                for (; t = e[r++];) n += C(t);
            return n
        }, T = t.selectors = {
            cacheLength: 50,
            createPseudo: r,
            match: he,
            attrHandle: {},
            find: {},
            relative: {
                ">": {
                    dir: "parentNode",
                    first: !0
                },
                " ": {
                    dir: "parentNode"
                },
                "+": {
                    dir: "previousSibling",
                    first: !0
                },
                "~": {
                    dir: "previousSibling"
                }
            },
            preFilter: {
                ATTR: function(e) {
                    return e[1] = e[1].replace(we, Te), e[3] = (e[3] || e[4] || e[5] || "").replace(we, Te), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4)
                },
                CHILD: function(e) {
                    return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || t.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && t.error(e[0]), e
                },
                PSEUDO: function(e) {
                    var t, n = !e[6] && e[2];
                    return he.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && fe.test(n) && (t = E(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3))
                }
            },
            filter: {
                TAG: function(e) {
                    var t = e.replace(we, Te).toLowerCase();
                    return "*" === e ? function() {
                        return !0
                    } : function(e) {
                        return e.nodeName && e.nodeName.toLowerCase() === t
                    }
                },
                CLASS: function(e) {
                    var t = z[e + " "];
                    return t || (t = new RegExp("(^|" + ne + ")" + e + "(" + ne + "|$)")) && z(e, function(e) {
                        return t.test("string" == typeof e.className && e.className || "undefined" != typeof e.getAttribute && e.getAttribute("class") || "")
                    })
                },
                ATTR: function(e, n, r) {
                    return function(i) {
                        var o = t.attr(i, e);
                        return null == o ? "!=" === n : n ? (o += "", "=" === n ? o === r : "!=" === n ? o !== r : "^=" === n ? r && 0 === o.indexOf(r) : "*=" === n ? r && o.indexOf(r) > -1 : "$=" === n ? r && o.slice(-r.length) === r : "~=" === n ? (" " + o.replace(se, " ") + " ").indexOf(r) > -1 : "|=" === n ? o === r || o.slice(0, r.length + 1) === r + "-" : !1) : !0
                    }
                },
                CHILD: function(e, t, n, r, i) {
                    var o = "nth" !== e.slice(0, 3),
                        a = "last" !== e.slice(-4),
                        s = "of-type" === t;
                    return 1 === r && 0 === i ? function(e) {
                        return !!e.parentNode
                    } : function(t, n, u) {
                        var l, c, d, f, p, h, m = o !== a ? "nextSibling" : "previousSibling",
                            g = t.parentNode,
                            v = s && t.nodeName.toLowerCase(),
                            y = !u && !s;
                        if (g) {
                            if (o) {
                                for (; m;) {
                                    for (d = t; d = d[m];)
                                        if (s ? d.nodeName.toLowerCase() === v : 1 === d.nodeType) return !1;
                                    h = m = "only" === e && !h && "nextSibling"
                                }
                                return !0
                            }
                            if (h = [a ? g.firstChild : g.lastChild], a && y) {
                                for (c = g[P] || (g[P] = {}), l = c[e] || [], p = l[0] === W && l[1], f = l[0] === W && l[2], d = p && g.childNodes[p]; d = ++p && d && d[m] || (f = p = 0) || h.pop();)
                                    if (1 === d.nodeType && ++f && d === t) {
                                        c[e] = [W, p, f];
                                        break
                                    }
                            } else if (y && (l = (t[P] || (t[P] = {}))[e]) && l[0] === W) f = l[1];
                            else
                                for (;
                                    (d = ++p && d && d[m] || (f = p = 0) || h.pop()) && ((s ? d.nodeName.toLowerCase() !== v : 1 !== d.nodeType) || !++f || (y && ((d[P] || (d[P] = {}))[e] = [W, f]), d !== t)););
                            return f -= i, f === r || f % r === 0 && f / r >= 0
                        }
                    }
                },
                PSEUDO: function(e, n) {
                    var i, o = T.pseudos[e] || T.setFilters[e.toLowerCase()] || t.error("unsupported pseudo: " + e);
                    return o[P] ? o(n) : o.length > 1 ? (i = [e, e, "", n], T.setFilters.hasOwnProperty(e.toLowerCase()) ? r(function(e, t) {
                        for (var r, i = o(e, n), a = i.length; a--;) r = ee(e, i[a]), e[r] = !(t[r] = i[a])
                    }) : function(e) {
                        return o(e, 0, i)
                    }) : o
                }
            },
            pseudos: {
                not: r(function(e) {
                    var t = [],
                        n = [],
                        i = k(e.replace(ue, "$1"));
                    return i[P] ? r(function(e, t, n, r) {
                        for (var o, a = i(e, null, r, []), s = e.length; s--;)(o = a[s]) && (e[s] = !(t[s] = o))
                    }) : function(e, r, o) {
                        return t[0] = e, i(t, null, o, n), t[0] = null, !n.pop()
                    }
                }),
                has: r(function(e) {
                    return function(n) {
                        return t(e, n).length > 0
                    }
                }),
                contains: r(function(e) {
                    return e = e.replace(we, Te),
                        function(t) {
                            return (t.textContent || t.innerText || C(t)).indexOf(e) > -1
                        }
                }),
                lang: r(function(e) {
                    return pe.test(e || "") || t.error("unsupported lang: " + e), e = e.replace(we, Te).toLowerCase(),
                        function(t) {
                            var n;
                            do
                                if (n = _ ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return n = n.toLowerCase(), n === e || 0 === n.indexOf(e + "-"); while ((t = t.parentNode) && 1 === t.nodeType);
                            return !1
                        }
                }),
                target: function(t) {
                    var n = e.location && e.location.hash;
                    return n && n.slice(1) === t.id
                },
                root: function(e) {
                    return e === q
                },
                focus: function(e) {
                    return e === H.activeElement && (!H.hasFocus || H.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
                },
                enabled: function(e) {
                    return e.disabled === !1
                },
                disabled: function(e) {
                    return e.disabled === !0
                },
                checked: function(e) {
                    var t = e.nodeName.toLowerCase();
                    return "input" === t && !!e.checked || "option" === t && !!e.selected
                },
                selected: function(e) {
                    return e.parentNode && e.parentNode.selectedIndex, e.selected === !0
                },
                empty: function(e) {
                    for (e = e.firstChild; e; e = e.nextSibling)
                        if (e.nodeType < 6) return !1;
                    return !0
                },
                parent: function(e) {
                    return !T.pseudos.empty(e)
                },
                header: function(e) {
                    return ge.test(e.nodeName)
                },
                input: function(e) {
                    return me.test(e.nodeName)
                },
                button: function(e) {
                    var t = e.nodeName.toLowerCase();
                    return "input" === t && "button" === e.type || "button" === t
                },
                text: function(e) {
                    var t;
                    return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
                },
                first: l(function() {
                    return [0]
                }),
                last: l(function(e, t) {
                    return [t - 1]
                }),
                eq: l(function(e, t, n) {
                    return [0 > n ? n + t : n]
                }),
                even: l(function(e, t) {
                    for (var n = 0; t > n; n += 2) e.push(n);
                    return e
                }),
                odd: l(function(e, t) {
                    for (var n = 1; t > n; n += 2) e.push(n);
                    return e
                }),
                lt: l(function(e, t, n) {
                    for (var r = 0 > n ? n + t : n; --r >= 0;) e.push(r);
                    return e
                }),
                gt: l(function(e, t, n) {
                    for (var r = 0 > n ? n + t : n; ++r < t;) e.push(r);
                    return e
                })
            }
        }, T.pseudos.nth = T.pseudos.eq;
        for (x in {
                radio: !0,
                checkbox: !0,
                file: !0,
                password: !0,
                image: !0
            }) T.pseudos[x] = s(x);
        for (x in {
                submit: !0,
                reset: !0
            }) T.pseudos[x] = u(x);
        return d.prototype = T.filters = T.pseudos, T.setFilters = new d, E = t.tokenize = function(e, n) {
            var r, i, o, a, s, u, l, c = I[e + " "];
            if (c) return n ? 0 : c.slice(0);
            for (s = e, u = [], l = T.preFilter; s;) {
                (!r || (i = le.exec(s))) && (i && (s = s.slice(i[0].length) || s), u.push(o = [])), r = !1, (i = ce.exec(s)) && (r = i.shift(), o.push({
                    value: r,
                    type: i[0].replace(ue, " ")
                }), s = s.slice(r.length));
                for (a in T.filter) !(i = he[a].exec(s)) || l[a] && !(i = l[a](i)) || (r = i.shift(),
                    o.push({
                        value: r,
                        type: a,
                        matches: i
                    }), s = s.slice(r.length));
                if (!r) break
            }
            return n ? s.length : s ? t.error(e) : I(e, u).slice(0)
        }, k = t.compile = function(e, t) {
            var n, r = [],
                i = [],
                o = X[e + " "];
            if (!o) {
                for (t || (t = E(e)), n = t.length; n--;) o = y(t[n]), o[P] ? r.push(o) : i.push(o);
                o = X(e, b(i, r)), o.selector = e
            }
            return o
        }, S = t.select = function(e, t, n, r) {
            var i, o, a, s, u, l = "function" == typeof e && e,
                d = !r && E(e = l.selector || e);
            if (n = n || [], 1 === d.length) {
                if (o = d[0] = d[0].slice(0), o.length > 2 && "ID" === (a = o[0]).type && w.getById && 9 === t.nodeType && _ && T.relative[o[1].type]) {
                    if (t = (T.find.ID(a.matches[0].replace(we, Te), t) || [])[0], !t) return n;
                    l && (t = t.parentNode), e = e.slice(o.shift().value.length)
                }
                for (i = he.needsContext.test(e) ? 0 : o.length; i-- && (a = o[i], !T.relative[s = a.type]);)
                    if ((u = T.find[s]) && (r = u(a.matches[0].replace(we, Te), be.test(o[0].type) && c(t.parentNode) || t))) {
                        if (o.splice(i, 1), e = r.length && f(o), !e) return K.apply(n, r), n;
                        break
                    }
            }
            return (l || k(e, d))(r, t, !_, n, be.test(e) && c(t.parentNode) || t), n
        }, w.sortStable = P.split("").sort(U).join("") === P, w.detectDuplicates = !!j, L(), w.sortDetached = i(function(e) {
            return 1 & e.compareDocumentPosition(H.createElement("div"))
        }), i(function(e) {
            return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href")
        }) || o("type|href|height|width", function(e, t, n) {
            return n ? void 0 : e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
        }), w.attributes && i(function(e) {
            return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value")
        }) || o("value", function(e, t, n) {
            return n || "input" !== e.nodeName.toLowerCase() ? void 0 : e.defaultValue
        }), i(function(e) {
            return null == e.getAttribute("disabled")
        }) || o(te, function(e, t, n) {
            var r;
            return n ? void 0 : e[t] === !0 ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
        }), t
    }(e);
    ie.find = le, ie.expr = le.selectors, ie.expr[":"] = ie.expr.pseudos, ie.unique = le.uniqueSort, ie.text = le.getText, ie.isXMLDoc = le.isXML, ie.contains = le.contains;
    var ce = ie.expr.match.needsContext,
        de = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
        fe = /^.[^:#\[\.,]*$/;
    ie.filter = function(e, t, n) {
        var r = t[0];
        return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? ie.find.matchesSelector(r, e) ? [r] : [] : ie.find.matches(e, ie.grep(t, function(e) {
            return 1 === e.nodeType
        }))
    }, ie.fn.extend({
        find: function(e) {
            var t, n = [],
                r = this,
                i = r.length;
            if ("string" != typeof e) return this.pushStack(ie(e).filter(function() {
                for (t = 0; i > t; t++)
                    if (ie.contains(r[t], this)) return !0
            }));
            for (t = 0; i > t; t++) ie.find(e, r[t], n);
            return n = this.pushStack(i > 1 ? ie.unique(n) : n), n.selector = this.selector ? this.selector + " " + e : e, n
        },
        filter: function(e) {
            return this.pushStack(r(this, e || [], !1))
        },
        not: function(e) {
            return this.pushStack(r(this, e || [], !0))
        },
        is: function(e) {
            return !!r(this, "string" == typeof e && ce.test(e) ? ie(e) : e || [], !1).length
        }
    });
    var pe, he = e.document,
        me = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,
        ge = ie.fn.init = function(e, t) {
            var n, r;
            if (!e) return this;
            if ("string" == typeof e) {
                if (n = "<" === e.charAt(0) && ">" === e.charAt(e.length - 1) && e.length >= 3 ? [null, e, null] : me.exec(e), !n || !n[1] && t) return !t || t.jquery ? (t || pe).find(e) : this.constructor(t).find(e);
                if (n[1]) {
                    if (t = t instanceof ie ? t[0] : t, ie.merge(this, ie.parseHTML(n[1], t && t.nodeType ? t.ownerDocument || t : he, !0)), de.test(n[1]) && ie.isPlainObject(t))
                        for (n in t) ie.isFunction(this[n]) ? this[n](t[n]) : this.attr(n, t[n]);
                    return this
                }
                if (r = he.getElementById(n[2]), r && r.parentNode) {
                    if (r.id !== n[2]) return pe.find(e);
                    this.length = 1, this[0] = r
                }
                return this.context = he, this.selector = e, this
            }
            return e.nodeType ? (this.context = this[0] = e, this.length = 1, this) : ie.isFunction(e) ? "undefined" != typeof pe.ready ? pe.ready(e) : e(ie) : (void 0 !== e.selector && (this.selector = e.selector, this.context = e.context), ie.makeArray(e, this))
        };
    ge.prototype = ie.fn, pe = ie(he);
    var ve = /^(?:parents|prev(?:Until|All))/,
        ye = {
            children: !0,
            contents: !0,
            next: !0,
            prev: !0
        };
    ie.extend({
        dir: function(e, t, n) {
            for (var r = [], i = e[t]; i && 9 !== i.nodeType && (void 0 === n || 1 !== i.nodeType || !ie(i).is(n));) 1 === i.nodeType && r.push(i), i = i[t];
            return r
        },
        sibling: function(e, t) {
            for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);
            return n
        }
    }), ie.fn.extend({
        has: function(e) {
            var t, n = ie(e, this),
                r = n.length;
            return this.filter(function() {
                for (t = 0; r > t; t++)
                    if (ie.contains(this, n[t])) return !0
            })
        },
        closest: function(e, t) {
            for (var n, r = 0, i = this.length, o = [], a = ce.test(e) || "string" != typeof e ? ie(e, t || this.context) : 0; i > r; r++)
                for (n = this[r]; n && n !== t; n = n.parentNode)
                    if (n.nodeType < 11 && (a ? a.index(n) > -1 : 1 === n.nodeType && ie.find.matchesSelector(n, e))) {
                        o.push(n);
                        break
                    }
            return this.pushStack(o.length > 1 ? ie.unique(o) : o)
        },
        index: function(e) {
            return e ? "string" == typeof e ? ie.inArray(this[0], ie(e)) : ie.inArray(e.jquery ? e[0] : e, this) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
        },
        add: function(e, t) {
            return this.pushStack(ie.unique(ie.merge(this.get(), ie(e, t))))
        },
        addBack: function(e) {
            return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
        }
    }), ie.each({
        parent: function(e) {
            var t = e.parentNode;
            return t && 11 !== t.nodeType ? t : null
        },
        parents: function(e) {
            return ie.dir(e, "parentNode")
        },
        parentsUntil: function(e, t, n) {
            return ie.dir(e, "parentNode", n)
        },
        next: function(e) {
            return i(e, "nextSibling")
        },
        prev: function(e) {
            return i(e, "previousSibling")
        },
        nextAll: function(e) {
            return ie.dir(e, "nextSibling")
        },
        prevAll: function(e) {
            return ie.dir(e, "previousSibling")
        },
        nextUntil: function(e, t, n) {
            return ie.dir(e, "nextSibling", n)
        },
        prevUntil: function(e, t, n) {
            return ie.dir(e, "previousSibling", n)
        },
        siblings: function(e) {
            return ie.sibling((e.parentNode || {}).firstChild, e)
        },
        children: function(e) {
            return ie.sibling(e.firstChild)
        },
        contents: function(e) {
            return ie.nodeName(e, "iframe") ? e.contentDocument || e.contentWindow.document : ie.merge([], e.childNodes)
        }
    }, function(e, t) {
        ie.fn[e] = function(n, r) {
            var i = ie.map(this, t, n);
            return "Until" !== e.slice(-5) && (r = n), r && "string" == typeof r && (i = ie.filter(r, i)), this.length > 1 && (ye[e] || (i = ie.unique(i)), ve.test(e) && (i = i.reverse())), this.pushStack(i)
        }
    });
    var be = /\S+/g,
        xe = {};
    ie.Callbacks = function(e) {
        e = "string" == typeof e ? xe[e] || o(e) : ie.extend({}, e);
        var t, n, r, i, a, s, u = [],
            l = !e.once && [],
            c = function(o) {
                for (n = e.memory && o, r = !0, a = s || 0, s = 0, i = u.length, t = !0; u && i > a; a++)
                    if (u[a].apply(o[0], o[1]) === !1 && e.stopOnFalse) {
                        n = !1;
                        break
                    }
                t = !1, u && (l ? l.length && c(l.shift()) : n ? u = [] : d.disable())
            },
            d = {
                add: function() {
                    if (u) {
                        var r = u.length;
                        ! function o(t) {
                            ie.each(t, function(t, n) {
                                var r = ie.type(n);
                                "function" === r ? e.unique && d.has(n) || u.push(n) : n && n.length && "string" !== r && o(n)
                            })
                        }(arguments), t ? i = u.length : n && (s = r, c(n))
                    }
                    return this
                },
                remove: function() {
                    return u && ie.each(arguments, function(e, n) {
                        for (var r;
                            (r = ie.inArray(n, u, r)) > -1;) u.splice(r, 1), t && (i >= r && i--, a >= r && a--)
                    }), this
                },
                has: function(e) {
                    return e ? ie.inArray(e, u) > -1 : !(!u || !u.length)
                },
                empty: function() {
                    return u = [], i = 0, this
                },
                disable: function() {
                    return u = l = n = void 0, this
                },
                disabled: function() {
                    return !u
                },
                lock: function() {
                    return l = void 0, n || d.disable(), this
                },
                locked: function() {
                    return !l
                },
                fireWith: function(e, n) {
                    return !u || r && !l || (n = n || [], n = [e, n.slice ? n.slice() : n], t ? l.push(n) : c(n)), this
                },
                fire: function() {
                    return d.fireWith(this, arguments), this
                },
                fired: function() {
                    return !!r
                }
            };
        return d
    }, ie.extend({
        Deferred: function(e) {
            var t = [
                    ["resolve", "done", ie.Callbacks("once memory"), "resolved"],
                    ["reject", "fail", ie.Callbacks("once memory"), "rejected"],
                    ["notify", "progress", ie.Callbacks("memory")]
                ],
                n = "pending",
                r = {
                    state: function() {
                        return n
                    },
                    always: function() {
                        return i.done(arguments).fail(arguments), this
                    },
                    then: function() {
                        var e = arguments;
                        return ie.Deferred(function(n) {
                            ie.each(t, function(t, o) {
                                var a = ie.isFunction(e[t]) && e[t];
                                i[o[1]](function() {
                                    var e = a && a.apply(this, arguments);
                                    e && ie.isFunction(e.promise) ? e.promise().done(n.resolve).fail(n.reject).progress(n.notify) : n[o[0] + "With"](this === r ? n.promise() : this, a ? [e] : arguments)
                                })
                            }), e = null
                        }).promise()
                    },
                    promise: function(e) {
                        return null != e ? ie.extend(e, r) : r
                    }
                },
                i = {};
            return r.pipe = r.then, ie.each(t, function(e, o) {
                var a = o[2],
                    s = o[3];
                r[o[1]] = a.add, s && a.add(function() {
                    n = s
                }, t[1 ^ e][2].disable, t[2][2].lock), i[o[0]] = function() {
                    return i[o[0] + "With"](this === i ? r : this, arguments), this
                }, i[o[0] + "With"] = a.fireWith
            }), r.promise(i), e && e.call(i, i), i
        },
        when: function(e) {
            var t, n, r, i = 0,
                o = Y.call(arguments),
                a = o.length,
                s = 1 !== a || e && ie.isFunction(e.promise) ? a : 0,
                u = 1 === s ? e : ie.Deferred(),
                l = function(e, n, r) {
                    return function(i) {
                        n[e] = this, r[e] = arguments.length > 1 ? Y.call(arguments) : i, r === t ? u.notifyWith(n, r) : --s || u.resolveWith(n, r)
                    }
                };
            if (a > 1)
                for (t = new Array(a), n = new Array(a), r = new Array(a); a > i; i++) o[i] && ie.isFunction(o[i].promise) ? o[i].promise().done(l(i, r, o)).fail(u.reject).progress(l(i, n, t)) : --s;
            return s || u.resolveWith(r, o), u.promise()
        }
    });
    var we;
    ie.fn.ready = function(e) {
        return ie.ready.promise().done(e), this
    }, ie.extend({
        isReady: !1,
        readyWait: 1,
        holdReady: function(e) {
            e ? ie.readyWait++ : ie.ready(!0)
        },
        ready: function(e) {
            if (e === !0 ? !--ie.readyWait : !ie.isReady) {
                if (!he.body) return setTimeout(ie.ready);
                ie.isReady = !0, e !== !0 && --ie.readyWait > 0 || (we.resolveWith(he, [ie]), ie.fn.triggerHandler && (ie(he).triggerHandler("ready"), ie(he).off("ready")))
            }
        }
    }), ie.ready.promise = function(t) {
        if (!we)
            if (we = ie.Deferred(), "complete" === he.readyState) setTimeout(ie.ready);
            else if (he.addEventListener) he.addEventListener("DOMContentLoaded", s, !1), e.addEventListener("load", s, !1);
        else {
            he.attachEvent("onreadystatechange", s), e.attachEvent("onload", s);
            var n = !1;
            try {
                n = null == e.frameElement && he.documentElement
            } catch (r) {}
            n && n.doScroll && ! function i() {
                if (!ie.isReady) {
                    try {
                        n.doScroll("left")
                    } catch (e) {
                        return setTimeout(i, 50)
                    }
                    a(), ie.ready()
                }
            }()
        }
        return we.promise(t)
    };
    var Te, Ce = "undefined";
    for (Te in ie(ne)) break;
    ne.ownLast = "0" !== Te, ne.inlineBlockNeedsLayout = !1, ie(function() {
            var e, t, n, r;
            n = he.getElementsByTagName("body")[0], n && n.style && (t = he.createElement("div"), r = he.createElement("div"), r.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", n.appendChild(r).appendChild(t), typeof t.style.zoom !== Ce && (t.style.cssText = "display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1", ne.inlineBlockNeedsLayout = e = 3 === t.offsetWidth, e && (n.style.zoom = 1)), n.removeChild(r))
        }),
        function() {
            var e = he.createElement("div");
            if (null == ne.deleteExpando) {
                ne.deleteExpando = !0;
                try {
                    delete e.test
                } catch (t) {
                    ne.deleteExpando = !1
                }
            }
            e = null
        }(), ie.acceptData = function(e) {
            var t = ie.noData[(e.nodeName + " ").toLowerCase()],
                n = +e.nodeType || 1;
            return 1 !== n && 9 !== n ? !1 : !t || t !== !0 && e.getAttribute("classid") === t
        };
    var Ne = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
        Ee = /([A-Z])/g;
    ie.extend({
        cache: {},
        noData: {
            "applet ": !0,
            "embed ": !0,
            "object ": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
        },
        hasData: function(e) {
            return e = e.nodeType ? ie.cache[e[ie.expando]] : e[ie.expando], !!e && !l(e)
        },
        data: function(e, t, n) {
            return c(e, t, n)
        },
        removeData: function(e, t) {
            return d(e, t)
        },
        _data: function(e, t, n) {
            return c(e, t, n, !0)
        },
        _removeData: function(e, t) {
            return d(e, t, !0)
        }
    }), ie.fn.extend({
        data: function(e, t) {
            var n, r, i, o = this[0],
                a = o && o.attributes;
            if (void 0 === e) {
                if (this.length && (i = ie.data(o), 1 === o.nodeType && !ie._data(o, "parsedAttrs"))) {
                    for (n = a.length; n--;) a[n] && (r = a[n].name, 0 === r.indexOf("data-") && (r = ie.camelCase(r.slice(5)), u(o, r, i[r])));
                    ie._data(o, "parsedAttrs", !0)
                }
                return i
            }
            return "object" == typeof e ? this.each(function() {
                ie.data(this, e)
            }) : arguments.length > 1 ? this.each(function() {
                ie.data(this, e, t)
            }) : o ? u(o, e, ie.data(o, e)) : void 0
        },
        removeData: function(e) {
            return this.each(function() {
                ie.removeData(this, e)
            })
        }
    }), ie.extend({
        queue: function(e, t, n) {
            var r;
            return e ? (t = (t || "fx") + "queue", r = ie._data(e, t), n && (!r || ie.isArray(n) ? r = ie._data(e, t, ie.makeArray(n)) : r.push(n)), r || []) : void 0
        },
        dequeue: function(e, t) {
            t = t || "fx";
            var n = ie.queue(e, t),
                r = n.length,
                i = n.shift(),
                o = ie._queueHooks(e, t),
                a = function() {
                    ie.dequeue(e, t)
                };
            "inprogress" === i && (i = n.shift(), r--), i && ("fx" === t && n.unshift("inprogress"), delete o.stop, i.call(e, a, o)), !r && o && o.empty.fire()
        },
        _queueHooks: function(e, t) {
            var n = t + "queueHooks";
            return ie._data(e, n) || ie._data(e, n, {
                empty: ie.Callbacks("once memory").add(function() {
                    ie._removeData(e, t + "queue"), ie._removeData(e, n)
                })
            })
        }
    }), ie.fn.extend({
        queue: function(e, t) {
            var n = 2;
            return "string" != typeof e && (t = e, e = "fx", n--), arguments.length < n ? ie.queue(this[0], e) : void 0 === t ? this : this.each(function() {
                var n = ie.queue(this, e, t);
                ie._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && ie.dequeue(this, e)
            })
        },
        dequeue: function(e) {
            return this.each(function() {
                ie.dequeue(this, e)
            })
        },
        clearQueue: function(e) {
            return this.queue(e || "fx", [])
        },
        promise: function(e, t) {
            var n, r = 1,
                i = ie.Deferred(),
                o = this,
                a = this.length,
                s = function() {
                    --r || i.resolveWith(o, [o])
                };
            for ("string" != typeof e && (t = e, e = void 0), e = e || "fx"; a--;) n = ie._data(o[a], e + "queueHooks"), n && n.empty && (r++, n.empty.add(s));
            return s(), i.promise(t)
        }
    });
    var ke = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
        Se = ["Top", "Right", "Bottom", "Left"],
        Ae = function(e, t) {
            return e = t || e, "none" === ie.css(e, "display") || !ie.contains(e.ownerDocument, e)
        },
        De = ie.access = function(e, t, n, r, i, o, a) {
            var s = 0,
                u = e.length,
                l = null == n;
            if ("object" === ie.type(n)) {
                i = !0;
                for (s in n) ie.access(e, t, s, n[s], !0, o, a)
            } else if (void 0 !== r && (i = !0, ie.isFunction(r) || (a = !0), l && (a ? (t.call(e, r), t = null) : (l = t, t = function(e, t, n) {
                    return l.call(ie(e), n)
                })), t))
                for (; u > s; s++) t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
            return i ? e : l ? t.call(e) : u ? t(e[0], n) : o
        },
        je = /^(?:checkbox|radio)$/i;
    ! function() {
        var e = he.createElement("input"),
            t = he.createElement("div"),
            n = he.createDocumentFragment();
        if (t.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", ne.leadingWhitespace = 3 === t.firstChild.nodeType, ne.tbody = !t.getElementsByTagName("tbody").length, ne.htmlSerialize = !!t.getElementsByTagName("link").length, ne.html5Clone = "<:nav></:nav>" !== he.createElement("nav").cloneNode(!0).outerHTML, e.type = "checkbox", e.checked = !0, n.appendChild(e), ne.appendChecked = e.checked, t.innerHTML = "<textarea>x</textarea>", ne.noCloneChecked = !!t.cloneNode(!0).lastChild.defaultValue, n.appendChild(t), t.innerHTML = "<input type='radio' checked='checked' name='t'/>", ne.checkClone = t.cloneNode(!0).cloneNode(!0).lastChild.checked, ne.noCloneEvent = !0, t.attachEvent && (t.attachEvent("onclick", function() {
                ne.noCloneEvent = !1
            }), t.cloneNode(!0).click()), null == ne.deleteExpando) {
            ne.deleteExpando = !0;
            try {
                delete t.test
            } catch (r) {
                ne.deleteExpando = !1
            }
        }
    }(),
    function() {
        var t, n, r = he.createElement("div");
        for (t in {
                submit: !0,
                change: !0,
                focusin: !0
            }) n = "on" + t, (ne[t + "Bubbles"] = n in e) || (r.setAttribute(n, "t"), ne[t + "Bubbles"] = r.attributes[n].expando === !1);
        r = null
    }();
    var Le = /^(?:input|select|textarea)$/i,
        He = /^key/,
        qe = /^(?:mouse|pointer|contextmenu)|click/,
        _e = /^(?:focusinfocus|focusoutblur)$/,
        Me = /^([^.]*)(?:\.(.+)|)$/;
    ie.event = {
        global: {},
        add: function(e, t, n, r, i) {
            var o, a, s, u, l, c, d, f, p, h, m, g = ie._data(e);
            if (g) {
                for (n.handler && (u = n, n = u.handler, i = u.selector), n.guid || (n.guid = ie.guid++), (a = g.events) || (a = g.events = {}), (c = g.handle) || (c = g.handle = function(e) {
                        return typeof ie === Ce || e && ie.event.triggered === e.type ? void 0 : ie.event.dispatch.apply(c.elem, arguments)
                    }, c.elem = e), t = (t || "").match(be) || [""], s = t.length; s--;) o = Me.exec(t[s]) || [], p = m = o[1], h = (o[2] || "").split(".").sort(), p && (l = ie.event.special[p] || {}, p = (i ? l.delegateType : l.bindType) || p, l = ie.event.special[p] || {}, d = ie.extend({
                    type: p,
                    origType: m,
                    data: r,
                    handler: n,
                    guid: n.guid,
                    selector: i,
                    needsContext: i && ie.expr.match.needsContext.test(i),
                    namespace: h.join(".")
                }, u), (f = a[p]) || (f = a[p] = [], f.delegateCount = 0, l.setup && l.setup.call(e, r, h, c) !== !1 || (e.addEventListener ? e.addEventListener(p, c, !1) : e.attachEvent && e.attachEvent("on" + p, c))), l.add && (l.add.call(e, d), d.handler.guid || (d.handler.guid = n.guid)), i ? f.splice(f.delegateCount++, 0, d) : f.push(d), ie.event.global[p] = !0);
                e = null
            }
        },
        remove: function(e, t, n, r, i) {
            var o, a, s, u, l, c, d, f, p, h, m, g = ie.hasData(e) && ie._data(e);
            if (g && (c = g.events)) {
                for (t = (t || "").match(be) || [""], l = t.length; l--;)
                    if (s = Me.exec(t[l]) || [], p = m = s[1], h = (s[2] || "").split(".").sort(), p) {
                        for (d = ie.event.special[p] || {}, p = (r ? d.delegateType : d.bindType) || p, f = c[p] || [], s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), u = o = f.length; o--;) a = f[o], !i && m !== a.origType || n && n.guid !== a.guid || s && !s.test(a.namespace) || r && r !== a.selector && ("**" !== r || !a.selector) || (f.splice(o, 1), a.selector && f.delegateCount--, d.remove && d.remove.call(e, a));
                        u && !f.length && (d.teardown && d.teardown.call(e, h, g.handle) !== !1 || ie.removeEvent(e, p, g.handle), delete c[p])
                    } else
                        for (p in c) ie.event.remove(e, p + t[l], n, r, !0);
                ie.isEmptyObject(c) && (delete g.handle, ie._removeData(e, "events"))
            }
        },
        trigger: function(t, n, r, i) {
            var o, a, s, u, l, c, d, f = [r || he],
                p = te.call(t, "type") ? t.type : t,
                h = te.call(t, "namespace") ? t.namespace.split(".") : [];
            if (s = c = r = r || he, 3 !== r.nodeType && 8 !== r.nodeType && !_e.test(p + ie.event.triggered) && (p.indexOf(".") >= 0 && (h = p.split("."), p = h.shift(), h.sort()), a = p.indexOf(":") < 0 && "on" + p, t = t[ie.expando] ? t : new ie.Event(p, "object" == typeof t && t), t.isTrigger = i ? 2 : 3, t.namespace = h.join("."), t.namespace_re = t.namespace ? new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = r), n = null == n ? [t] : ie.makeArray(n, [t]), l = ie.event.special[p] || {}, i || !l.trigger || l.trigger.apply(r, n) !== !1)) {
                if (!i && !l.noBubble && !ie.isWindow(r)) {
                    for (u = l.delegateType || p, _e.test(u + p) || (s = s.parentNode); s; s = s.parentNode) f.push(s), c = s;
                    c === (r.ownerDocument || he) && f.push(c.defaultView || c.parentWindow || e)
                }
                for (d = 0;
                    (s = f[d++]) && !t.isPropagationStopped();) t.type = d > 1 ? u : l.bindType || p, o = (ie._data(s, "events") || {})[t.type] && ie._data(s, "handle"), o && o.apply(s, n), o = a && s[a], o && o.apply && ie.acceptData(s) && (t.result = o.apply(s, n), t.result === !1 && t.preventDefault());
                if (t.type = p, !i && !t.isDefaultPrevented() && (!l._default || l._default.apply(f.pop(), n) === !1) && ie.acceptData(r) && a && r[p] && !ie.isWindow(r)) {
                    c = r[a], c && (r[a] = null), ie.event.triggered = p;
                    try {
                        r[p]()
                    } catch (m) {}
                    ie.event.triggered = void 0, c && (r[a] = c)
                }
                return t.result
            }
        },
        dispatch: function(e) {
            e = ie.event.fix(e);
            var t, n, r, i, o, a = [],
                s = Y.call(arguments),
                u = (ie._data(this, "events") || {})[e.type] || [],
                l = ie.event.special[e.type] || {};
            if (s[0] = e, e.delegateTarget = this, !l.preDispatch || l.preDispatch.call(this, e) !== !1) {
                for (a = ie.event.handlers.call(this, e, u), t = 0;
                    (i = a[t++]) && !e.isPropagationStopped();)
                    for (e.currentTarget = i.elem, o = 0;
                        (r = i.handlers[o++]) && !e.isImmediatePropagationStopped();)(!e.namespace_re || e.namespace_re.test(r.namespace)) && (e.handleObj = r, e.data = r.data, n = ((ie.event.special[r.origType] || {}).handle || r.handler).apply(i.elem, s), void 0 !== n && (e.result = n) === !1 && (e.preventDefault(), e.stopPropagation()));
                return l.postDispatch && l.postDispatch.call(this, e), e.result
            }
        },
        handlers: function(e, t) {
            var n, r, i, o, a = [],
                s = t.delegateCount,
                u = e.target;
            if (s && u.nodeType && (!e.button || "click" !== e.type))
                for (; u != this; u = u.parentNode || this)
                    if (1 === u.nodeType && (u.disabled !== !0 || "click" !== e.type)) {
                        for (i = [], o = 0; s > o; o++) r = t[o], n = r.selector + " ", void 0 === i[n] && (i[n] = r.needsContext ? ie(n, this).index(u) >= 0 : ie.find(n, this, null, [u]).length), i[n] && i.push(r);
                        i.length && a.push({
                            elem: u,
                            handlers: i
                        })
                    }
            return s < t.length && a.push({
                elem: this,
                handlers: t.slice(s)
            }), a
        },
        fix: function(e) {
            if (e[ie.expando]) return e;
            var t, n, r, i = e.type,
                o = e,
                a = this.fixHooks[i];
            for (a || (this.fixHooks[i] = a = qe.test(i) ? this.mouseHooks : He.test(i) ? this.keyHooks : {}), r = a.props ? this.props.concat(a.props) : this.props, e = new ie.Event(o), t = r.length; t--;) n = r[t], e[n] = o[n];
            return e.target || (e.target = o.srcElement || he), 3 === e.target.nodeType && (e.target = e.target.parentNode), e.metaKey = !!e.metaKey, a.filter ? a.filter(e, o) : e
        },
        props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),
        fixHooks: {},
        keyHooks: {
            props: "char charCode key keyCode".split(" "),
            filter: function(e, t) {
                return null == e.which && (e.which = null != t.charCode ? t.charCode : t.keyCode), e
            }
        },
        mouseHooks: {
            props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
            filter: function(e, t) {
                var n, r, i, o = t.button,
                    a = t.fromElement;
                return null == e.pageX && null != t.clientX && (r = e.target.ownerDocument || he, i = r.documentElement, n = r.body, e.pageX = t.clientX + (i && i.scrollLeft || n && n.scrollLeft || 0) - (i && i.clientLeft || n && n.clientLeft || 0), e.pageY = t.clientY + (i && i.scrollTop || n && n.scrollTop || 0) - (i && i.clientTop || n && n.clientTop || 0)), !e.relatedTarget && a && (e.relatedTarget = a === e.target ? t.toElement : a), e.which || void 0 === o || (e.which = 1 & o ? 1 : 2 & o ? 3 : 4 & o ? 2 : 0), e
            }
        },
        special: {
            load: {
                noBubble: !0
            },
            focus: {
                trigger: function() {
                    if (this !== h() && this.focus) try {
                        return this.focus(), !1
                    } catch (e) {}
                },
                delegateType: "focusin"
            },
            blur: {
                trigger: function() {
                    return this === h() && this.blur ? (this.blur(), !1) : void 0
                },
                delegateType: "focusout"
            },
            click: {
                trigger: function() {
                    return ie.nodeName(this, "input") && "checkbox" === this.type && this.click ? (this.click(), !1) : void 0
                },
                _default: function(e) {
                    return ie.nodeName(e.target, "a")
                }
            },
            beforeunload: {
                postDispatch: function(e) {
                    void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
                }
            }
        },
        simulate: function(e, t, n, r) {
            var i = ie.extend(new ie.Event, n, {
                type: e,
                isSimulated: !0,
                originalEvent: {}
            });
            r ? ie.event.trigger(i, null, t) : ie.event.dispatch.call(t, i), i.isDefaultPrevented() && n.preventDefault()
        }
    }, ie.removeEvent = he.removeEventListener ? function(e, t, n) {
        e.removeEventListener && e.removeEventListener(t, n, !1)
    } : function(e, t, n) {
        var r = "on" + t;
        e.detachEvent && (typeof e[r] === Ce && (e[r] = null), e.detachEvent(r, n))
    }, ie.Event = function(e, t) {
        return this instanceof ie.Event ? (e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && e.returnValue === !1 ? f : p) : this.type = e, t && ie.extend(this, t), this.timeStamp = e && e.timeStamp || ie.now(), void(this[ie.expando] = !0)) : new ie.Event(e, t)
    }, ie.Event.prototype = {
        isDefaultPrevented: p,
        isPropagationStopped: p,
        isImmediatePropagationStopped: p,
        preventDefault: function() {
            var e = this.originalEvent;
            this.isDefaultPrevented = f, e && (e.preventDefault ? e.preventDefault() : e.returnValue = !1)
        },
        stopPropagation: function() {
            var e = this.originalEvent;
            this.isPropagationStopped = f, e && (e.stopPropagation && e.stopPropagation(), e.cancelBubble = !0)
        },
        stopImmediatePropagation: function() {
            var e = this.originalEvent;
            this.isImmediatePropagationStopped = f, e && e.stopImmediatePropagation && e.stopImmediatePropagation(), this.stopPropagation()
        }
    }, ie.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout"
    }, function(e, t) {
        ie.event.special[e] = {
            delegateType: t,
            bindType: t,
            handle: function(e) {
                var n, r = this,
                    i = e.relatedTarget,
                    o = e.handleObj;
                return (!i || i !== r && !ie.contains(r, i)) && (e.type = o.origType, n = o.handler.apply(this, arguments), e.type = t), n
            }
        }
    }), ne.submitBubbles || (ie.event.special.submit = {
        setup: function() {
            return ie.nodeName(this, "form") ? !1 : void ie.event.add(this, "click._submit keypress._submit", function(e) {
                var t = e.target,
                    n = ie.nodeName(t, "input") || ie.nodeName(t, "button") ? t.form : void 0;
                n && !ie._data(n, "submitBubbles") && (ie.event.add(n, "submit._submit", function(e) {
                    e._submit_bubble = !0
                }), ie._data(n, "submitBubbles", !0))
            })
        },
        postDispatch: function(e) {
            e._submit_bubble && (delete e._submit_bubble, this.parentNode && !e.isTrigger && ie.event.simulate("submit", this.parentNode, e, !0))
        },
        teardown: function() {
            return ie.nodeName(this, "form") ? !1 : void ie.event.remove(this, "._submit")
        }
    }), ne.changeBubbles || (ie.event.special.change = {
        setup: function() {
            return Le.test(this.nodeName) ? (("checkbox" === this.type || "radio" === this.type) && (ie.event.add(this, "propertychange._change", function(e) {
                "checked" === e.originalEvent.propertyName && (this._just_changed = !0)
            }), ie.event.add(this, "click._change", function(e) {
                this._just_changed && !e.isTrigger && (this._just_changed = !1), ie.event.simulate("change", this, e, !0)
            })), !1) : void ie.event.add(this, "beforeactivate._change", function(e) {
                var t = e.target;
                Le.test(t.nodeName) && !ie._data(t, "changeBubbles") && (ie.event.add(t, "change._change", function(e) {
                    !this.parentNode || e.isSimulated || e.isTrigger || ie.event.simulate("change", this.parentNode, e, !0)
                }), ie._data(t, "changeBubbles", !0))
            })
        },
        handle: function(e) {
            var t = e.target;
            return this !== t || e.isSimulated || e.isTrigger || "radio" !== t.type && "checkbox" !== t.type ? e.handleObj.handler.apply(this, arguments) : void 0
        },
        teardown: function() {
            return ie.event.remove(this, "._change"), !Le.test(this.nodeName)
        }
    }), ne.focusinBubbles || ie.each({
        focus: "focusin",
        blur: "focusout"
    }, function(e, t) {
        var n = function(e) {
            ie.event.simulate(t, e.target, ie.event.fix(e), !0)
        };
        ie.event.special[t] = {
            setup: function() {
                var r = this.ownerDocument || this,
                    i = ie._data(r, t);
                i || r.addEventListener(e, n, !0), ie._data(r, t, (i || 0) + 1)
            },
            teardown: function() {
                var r = this.ownerDocument || this,
                    i = ie._data(r, t) - 1;
                i ? ie._data(r, t, i) : (r.removeEventListener(e, n, !0), ie._removeData(r, t))
            }
        }
    }), ie.fn.extend({
        on: function(e, t, n, r, i) {
            var o, a;
            if ("object" == typeof e) {
                "string" != typeof t && (n = n || t, t = void 0);
                for (o in e) this.on(o, t, n, e[o], i);
                return this
            }
            if (null == n && null == r ? (r = t, n = t = void 0) : null == r && ("string" == typeof t ? (r = n, n = void 0) : (r = n, n = t, t = void 0)), r === !1) r = p;
            else if (!r) return this;
            return 1 === i && (a = r, r = function(e) {
                return ie().off(e), a.apply(this, arguments)
            }, r.guid = a.guid || (a.guid = ie.guid++)), this.each(function() {
                ie.event.add(this, e, r, n, t)
            })
        },
        one: function(e, t, n, r) {
            return this.on(e, t, n, r, 1)
        },
        off: function(e, t, n) {
            var r, i;
            if (e && e.preventDefault && e.handleObj) return r = e.handleObj, ie(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this;
            if ("object" == typeof e) {
                for (i in e) this.off(i, t, e[i]);
                return this
            }
            return (t === !1 || "function" == typeof t) && (n = t, t = void 0), n === !1 && (n = p), this.each(function() {
                ie.event.remove(this, e, n, t)
            })
        },
        trigger: function(e, t) {
            return this.each(function() {
                ie.event.trigger(e, t, this)
            })
        },
        triggerHandler: function(e, t) {
            var n = this[0];
            return n ? ie.event.trigger(e, t, n, !0) : void 0
        }
    });
    var Fe = "abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",
        Oe = / jQuery\d+="(?:null|\d+)"/g,
        Be = new RegExp("<(?:" + Fe + ")[\\s/>]", "i"),
        Pe = /^\s+/,
        Re = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
        We = /<([\w:]+)/,
        $e = /<tbody/i,
        ze = /<|&#?\w+;/,
        Ie = /<(?:script|style|link)/i,
        Xe = /checked\s*(?:[^=]|=\s*.checked.)/i,
        Ue = /^$|\/(?:java|ecma)script/i,
        Ve = /^true\/(.*)/,
        Je = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
        Ye = {
            option: [1, "<select multiple='multiple'>", "</select>"],
            legend: [1, "<fieldset>", "</fieldset>"],
            area: [1, "<map>", "</map>"],
            param: [1, "<object>", "</object>"],
            thead: [1, "<table>", "</table>"],
            tr: [2, "<table><tbody>", "</tbody></table>"],
            col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"],
            td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
            _default: ne.htmlSerialize ? [0, "", ""] : [1, "X<div>", "</div>"]
        },
        Ge = m(he),
        Qe = Ge.appendChild(he.createElement("div"));
    Ye.optgroup = Ye.option, Ye.tbody = Ye.tfoot = Ye.colgroup = Ye.caption = Ye.thead, Ye.th = Ye.td, ie.extend({
        clone: function(e, t, n) {
            var r, i, o, a, s, u = ie.contains(e.ownerDocument, e);
            if (ne.html5Clone || ie.isXMLDoc(e) || !Be.test("<" + e.nodeName + ">") ? o = e.cloneNode(!0) : (Qe.innerHTML = e.outerHTML, Qe.removeChild(o = Qe.firstChild)), !(ne.noCloneEvent && ne.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || ie.isXMLDoc(e)))
                for (r = g(o), s = g(e), a = 0; null != (i = s[a]); ++a) r[a] && C(i, r[a]);
            if (t)
                if (n)
                    for (s = s || g(e), r = r || g(o), a = 0; null != (i = s[a]); a++) T(i, r[a]);
                else T(e, o);
            return r = g(o, "script"), r.length > 0 && w(r, !u && g(e, "script")), r = s = i = null, o
        },
        buildFragment: function(e, t, n, r) {
            for (var i, o, a, s, u, l, c, d = e.length, f = m(t), p = [], h = 0; d > h; h++)
                if (o = e[h], o || 0 === o)
                    if ("object" === ie.type(o)) ie.merge(p, o.nodeType ? [o] : o);
                    else if (ze.test(o)) {
                for (s = s || f.appendChild(t.createElement("div")), u = (We.exec(o) || ["", ""])[1].toLowerCase(), c = Ye[u] || Ye._default, s.innerHTML = c[1] + o.replace(Re, "<$1></$2>") + c[2], i = c[0]; i--;) s = s.lastChild;
                if (!ne.leadingWhitespace && Pe.test(o) && p.push(t.createTextNode(Pe.exec(o)[0])), !ne.tbody)
                    for (o = "table" !== u || $e.test(o) ? "<table>" !== c[1] || $e.test(o) ? 0 : s : s.firstChild, i = o && o.childNodes.length; i--;) ie.nodeName(l = o.childNodes[i], "tbody") && !l.childNodes.length && o.removeChild(l);
                for (ie.merge(p, s.childNodes), s.textContent = ""; s.firstChild;) s.removeChild(s.firstChild);
                s = f.lastChild
            } else p.push(t.createTextNode(o));
            for (s && f.removeChild(s), ne.appendChecked || ie.grep(g(p, "input"), v), h = 0; o = p[h++];)
                if ((!r || -1 === ie.inArray(o, r)) && (a = ie.contains(o.ownerDocument, o), s = g(f.appendChild(o), "script"), a && w(s), n))
                    for (i = 0; o = s[i++];) Ue.test(o.type || "") && n.push(o);
            return s = null, f
        },
        cleanData: function(e, t) {
            for (var n, r, i, o, a = 0, s = ie.expando, u = ie.cache, l = ne.deleteExpando, c = ie.event.special; null != (n = e[a]); a++)
                if ((t || ie.acceptData(n)) && (i = n[s], o = i && u[i])) {
                    if (o.events)
                        for (r in o.events) c[r] ? ie.event.remove(n, r) : ie.removeEvent(n, r, o.handle);
                    u[i] && (delete u[i], l ? delete n[s] : typeof n.removeAttribute !== Ce ? n.removeAttribute(s) : n[s] = null, J.push(i))
                }
        }
    }), ie.fn.extend({
        text: function(e) {
            return De(this, function(e) {
                return void 0 === e ? ie.text(this) : this.empty().append((this[0] && this[0].ownerDocument || he).createTextNode(e))
            }, null, e, arguments.length)
        },
        append: function() {
            return this.domManip(arguments, function(e) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var t = y(this, e);
                    t.appendChild(e)
                }
            })
        },
        prepend: function() {
            return this.domManip(arguments, function(e) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var t = y(this, e);
                    t.insertBefore(e, t.firstChild)
                }
            })
        },
        before: function() {
            return this.domManip(arguments, function(e) {
                this.parentNode && this.parentNode.insertBefore(e, this)
            })
        },
        after: function() {
            return this.domManip(arguments, function(e) {
                this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
            })
        },
        remove: function(e, t) {
            for (var n, r = e ? ie.filter(e, this) : this, i = 0; null != (n = r[i]); i++) t || 1 !== n.nodeType || ie.cleanData(g(n)), n.parentNode && (t && ie.contains(n.ownerDocument, n) && w(g(n, "script")), n.parentNode.removeChild(n));
            return this
        },
        empty: function() {
            for (var e, t = 0; null != (e = this[t]); t++) {
                for (1 === e.nodeType && ie.cleanData(g(e, !1)); e.firstChild;) e.removeChild(e.firstChild);
                e.options && ie.nodeName(e, "select") && (e.options.length = 0)
            }
            return this
        },
        clone: function(e, t) {
            return e = null == e ? !1 : e, t = null == t ? e : t, this.map(function() {
                return ie.clone(this, e, t)
            })
        },
        html: function(e) {
            return De(this, function(e) {
                var t = this[0] || {},
                    n = 0,
                    r = this.length;
                if (void 0 === e) return 1 === t.nodeType ? t.innerHTML.replace(Oe, "") : void 0;
                if (!("string" != typeof e || Ie.test(e) || !ne.htmlSerialize && Be.test(e) || !ne.leadingWhitespace && Pe.test(e) || Ye[(We.exec(e) || ["", ""])[1].toLowerCase()])) {
                    e = e.replace(Re, "<$1></$2>");
                    try {
                        for (; r > n; n++) t = this[n] || {}, 1 === t.nodeType && (ie.cleanData(g(t, !1)), t.innerHTML = e);
                        t = 0
                    } catch (i) {}
                }
                t && this.empty().append(e)
            }, null, e, arguments.length)
        },
        replaceWith: function() {
            var e = arguments[0];
            return this.domManip(arguments, function(t) {
                e = this.parentNode, ie.cleanData(g(this)), e && e.replaceChild(t, this)
            }), e && (e.length || e.nodeType) ? this : this.remove()
        },
        detach: function(e) {
            return this.remove(e, !0)
        },
        domManip: function(e, t) {
            e = G.apply([], e);
            var n, r, i, o, a, s, u = 0,
                l = this.length,
                c = this,
                d = l - 1,
                f = e[0],
                p = ie.isFunction(f);
            if (p || l > 1 && "string" == typeof f && !ne.checkClone && Xe.test(f)) return this.each(function(n) {
                var r = c.eq(n);
                p && (e[0] = f.call(this, n, r.html())), r.domManip(e, t)
            });
            if (l && (s = ie.buildFragment(e, this[0].ownerDocument, !1, this), n = s.firstChild, 1 === s.childNodes.length && (s = n), n)) {
                for (o = ie.map(g(s, "script"), b), i = o.length; l > u; u++) r = s, u !== d && (r = ie.clone(r, !0, !0), i && ie.merge(o, g(r, "script"))), t.call(this[u], r, u);
                if (i)
                    for (a = o[o.length - 1].ownerDocument, ie.map(o, x), u = 0; i > u; u++) r = o[u], Ue.test(r.type || "") && !ie._data(r, "globalEval") && ie.contains(a, r) && (r.src ? ie._evalUrl && ie._evalUrl(r.src) : ie.globalEval((r.text || r.textContent || r.innerHTML || "").replace(Je, "")));
                s = n = null
            }
            return this
        }
    }), ie.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function(e, t) {
        ie.fn[e] = function(e) {
            for (var n, r = 0, i = [], o = ie(e), a = o.length - 1; a >= r; r++) n = r === a ? this : this.clone(!0), ie(o[r])[t](n), Q.apply(i, n.get());
            return this.pushStack(i)
        }
    });
    var Ke, Ze = {};
    ! function() {
        var e;
        ne.shrinkWrapBlocks = function() {
            if (null != e) return e;
            e = !1;
            var t, n, r;
            return n = he.getElementsByTagName("body")[0], n && n.style ? (t = he.createElement("div"), r = he.createElement("div"), r.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", n.appendChild(r).appendChild(t), typeof t.style.zoom !== Ce && (t.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:1px;width:1px;zoom:1", t.appendChild(he.createElement("div")).style.width = "5px", e = 3 !== t.offsetWidth), n.removeChild(r), e) : void 0
        }
    }();
    var et, tt, nt = /^margin/,
        rt = new RegExp("^(" + ke + ")(?!px)[a-z%]+$", "i"),
        it = /^(top|right|bottom|left)$/;
    e.getComputedStyle ? (et = function(t) {
        return t.ownerDocument.defaultView.opener ? t.ownerDocument.defaultView.getComputedStyle(t, null) : e.getComputedStyle(t, null)
    }, tt = function(e, t, n) {
        var r, i, o, a, s = e.style;
        return n = n || et(e), a = n ? n.getPropertyValue(t) || n[t] : void 0, n && ("" !== a || ie.contains(e.ownerDocument, e) || (a = ie.style(e, t)), rt.test(a) && nt.test(t) && (r = s.width, i = s.minWidth,
            o = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = i, s.maxWidth = o)), void 0 === a ? a : a + ""
    }) : he.documentElement.currentStyle && (et = function(e) {
        return e.currentStyle
    }, tt = function(e, t, n) {
        var r, i, o, a, s = e.style;
        return n = n || et(e), a = n ? n[t] : void 0, null == a && s && s[t] && (a = s[t]), rt.test(a) && !it.test(t) && (r = s.left, i = e.runtimeStyle, o = i && i.left, o && (i.left = e.currentStyle.left), s.left = "fontSize" === t ? "1em" : a, a = s.pixelLeft + "px", s.left = r, o && (i.left = o)), void 0 === a ? a : a + "" || "auto"
    }), ! function() {
        function t() {
            var t, n, r, i;
            n = he.getElementsByTagName("body")[0], n && n.style && (t = he.createElement("div"), r = he.createElement("div"), r.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", n.appendChild(r).appendChild(t), t.style.cssText = "-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute", o = a = !1, u = !0, e.getComputedStyle && (o = "1%" !== (e.getComputedStyle(t, null) || {}).top, a = "4px" === (e.getComputedStyle(t, null) || {
                width: "4px"
            }).width, i = t.appendChild(he.createElement("div")), i.style.cssText = t.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0", i.style.marginRight = i.style.width = "0", t.style.width = "1px", u = !parseFloat((e.getComputedStyle(i, null) || {}).marginRight), t.removeChild(i)), t.innerHTML = "<table><tr><td></td><td>t</td></tr></table>", i = t.getElementsByTagName("td"), i[0].style.cssText = "margin:0;border:0;padding:0;display:none", s = 0 === i[0].offsetHeight, s && (i[0].style.display = "", i[1].style.display = "none", s = 0 === i[0].offsetHeight), n.removeChild(r))
        }
        var n, r, i, o, a, s, u;
        n = he.createElement("div"), n.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", i = n.getElementsByTagName("a")[0], (r = i && i.style) && (r.cssText = "float:left;opacity:.5", ne.opacity = "0.5" === r.opacity, ne.cssFloat = !!r.cssFloat, n.style.backgroundClip = "content-box", n.cloneNode(!0).style.backgroundClip = "", ne.clearCloneStyle = "content-box" === n.style.backgroundClip, ne.boxSizing = "" === r.boxSizing || "" === r.MozBoxSizing || "" === r.WebkitBoxSizing, ie.extend(ne, {
            reliableHiddenOffsets: function() {
                return null == s && t(), s
            },
            boxSizingReliable: function() {
                return null == a && t(), a
            },
            pixelPosition: function() {
                return null == o && t(), o
            },
            reliableMarginRight: function() {
                return null == u && t(), u
            }
        }))
    }(), ie.swap = function(e, t, n, r) {
        var i, o, a = {};
        for (o in t) a[o] = e.style[o], e.style[o] = t[o];
        i = n.apply(e, r || []);
        for (o in t) e.style[o] = a[o];
        return i
    };
    var ot = /alpha\([^)]*\)/i,
        at = /opacity\s*=\s*([^)]*)/,
        st = /^(none|table(?!-c[ea]).+)/,
        ut = new RegExp("^(" + ke + ")(.*)$", "i"),
        lt = new RegExp("^([+-])=(" + ke + ")", "i"),
        ct = {
            position: "absolute",
            visibility: "hidden",
            display: "block"
        },
        dt = {
            letterSpacing: "0",
            fontWeight: "400"
        },
        ft = ["Webkit", "O", "Moz", "ms"];
    ie.extend({
        cssHooks: {
            opacity: {
                get: function(e, t) {
                    if (t) {
                        var n = tt(e, "opacity");
                        return "" === n ? "1" : n
                    }
                }
            }
        },
        cssNumber: {
            columnCount: !0,
            fillOpacity: !0,
            flexGrow: !0,
            flexShrink: !0,
            fontWeight: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0
        },
        cssProps: {
            "float": ne.cssFloat ? "cssFloat" : "styleFloat"
        },
        style: function(e, t, n, r) {
            if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                var i, o, a, s = ie.camelCase(t),
                    u = e.style;
                if (t = ie.cssProps[s] || (ie.cssProps[s] = S(u, s)), a = ie.cssHooks[t] || ie.cssHooks[s], void 0 === n) return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i : u[t];
                if (o = typeof n, "string" === o && (i = lt.exec(n)) && (n = (i[1] + 1) * i[2] + parseFloat(ie.css(e, t)), o = "number"), null != n && n === n && ("number" !== o || ie.cssNumber[s] || (n += "px"), ne.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (u[t] = "inherit"), !(a && "set" in a && void 0 === (n = a.set(e, n, r))))) try {
                    u[t] = n
                } catch (l) {}
            }
        },
        css: function(e, t, n, r) {
            var i, o, a, s = ie.camelCase(t);
            return t = ie.cssProps[s] || (ie.cssProps[s] = S(e.style, s)), a = ie.cssHooks[t] || ie.cssHooks[s], a && "get" in a && (o = a.get(e, !0, n)), void 0 === o && (o = tt(e, t, r)), "normal" === o && t in dt && (o = dt[t]), "" === n || n ? (i = parseFloat(o), n === !0 || ie.isNumeric(i) ? i || 0 : o) : o
        }
    }), ie.each(["height", "width"], function(e, t) {
        ie.cssHooks[t] = {
            get: function(e, n, r) {
                return n ? st.test(ie.css(e, "display")) && 0 === e.offsetWidth ? ie.swap(e, ct, function() {
                    return L(e, t, r)
                }) : L(e, t, r) : void 0
            },
            set: function(e, n, r) {
                var i = r && et(e);
                return D(e, n, r ? j(e, t, r, ne.boxSizing && "border-box" === ie.css(e, "boxSizing", !1, i), i) : 0)
            }
        }
    }), ne.opacity || (ie.cssHooks.opacity = {
        get: function(e, t) {
            return at.test((t && e.currentStyle ? e.currentStyle.filter : e.style.filter) || "") ? .01 * parseFloat(RegExp.$1) + "" : t ? "1" : ""
        },
        set: function(e, t) {
            var n = e.style,
                r = e.currentStyle,
                i = ie.isNumeric(t) ? "alpha(opacity=" + 100 * t + ")" : "",
                o = r && r.filter || n.filter || "";
            n.zoom = 1, (t >= 1 || "" === t) && "" === ie.trim(o.replace(ot, "")) && n.removeAttribute && (n.removeAttribute("filter"), "" === t || r && !r.filter) || (n.filter = ot.test(o) ? o.replace(ot, i) : o + " " + i)
        }
    }), ie.cssHooks.marginRight = k(ne.reliableMarginRight, function(e, t) {
        return t ? ie.swap(e, {
            display: "inline-block"
        }, tt, [e, "marginRight"]) : void 0
    }), ie.each({
        margin: "",
        padding: "",
        border: "Width"
    }, function(e, t) {
        ie.cssHooks[e + t] = {
            expand: function(n) {
                for (var r = 0, i = {}, o = "string" == typeof n ? n.split(" ") : [n]; 4 > r; r++) i[e + Se[r] + t] = o[r] || o[r - 2] || o[0];
                return i
            }
        }, nt.test(e) || (ie.cssHooks[e + t].set = D)
    }), ie.fn.extend({
        css: function(e, t) {
            return De(this, function(e, t, n) {
                var r, i, o = {},
                    a = 0;
                if (ie.isArray(t)) {
                    for (r = et(e), i = t.length; i > a; a++) o[t[a]] = ie.css(e, t[a], !1, r);
                    return o
                }
                return void 0 !== n ? ie.style(e, t, n) : ie.css(e, t)
            }, e, t, arguments.length > 1)
        },
        show: function() {
            return A(this, !0)
        },
        hide: function() {
            return A(this)
        },
        toggle: function(e) {
            return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function() {
                Ae(this) ? ie(this).show() : ie(this).hide()
            })
        }
    }), ie.Tween = H, H.prototype = {
        constructor: H,
        init: function(e, t, n, r, i, o) {
            this.elem = e, this.prop = n, this.easing = i || "swing", this.options = t, this.start = this.now = this.cur(), this.end = r, this.unit = o || (ie.cssNumber[n] ? "" : "px")
        },
        cur: function() {
            var e = H.propHooks[this.prop];
            return e && e.get ? e.get(this) : H.propHooks._default.get(this)
        },
        run: function(e) {
            var t, n = H.propHooks[this.prop];
            return this.options.duration ? this.pos = t = ie.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : H.propHooks._default.set(this), this
        }
    }, H.prototype.init.prototype = H.prototype, H.propHooks = {
        _default: {
            get: function(e) {
                var t;
                return null == e.elem[e.prop] || e.elem.style && null != e.elem.style[e.prop] ? (t = ie.css(e.elem, e.prop, ""), t && "auto" !== t ? t : 0) : e.elem[e.prop]
            },
            set: function(e) {
                ie.fx.step[e.prop] ? ie.fx.step[e.prop](e) : e.elem.style && (null != e.elem.style[ie.cssProps[e.prop]] || ie.cssHooks[e.prop]) ? ie.style(e.elem, e.prop, e.now + e.unit) : e.elem[e.prop] = e.now
            }
        }
    }, H.propHooks.scrollTop = H.propHooks.scrollLeft = {
        set: function(e) {
            e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
        }
    }, ie.easing = {
        linear: function(e) {
            return e
        },
        swing: function(e) {
            return .5 - Math.cos(e * Math.PI) / 2
        }
    }, ie.fx = H.prototype.init, ie.fx.step = {};
    var pt, ht, mt = /^(?:toggle|show|hide)$/,
        gt = new RegExp("^(?:([+-])=|)(" + ke + ")([a-z%]*)$", "i"),
        vt = /queueHooks$/,
        yt = [F],
        bt = {
            "*": [function(e, t) {
                var n = this.createTween(e, t),
                    r = n.cur(),
                    i = gt.exec(t),
                    o = i && i[3] || (ie.cssNumber[e] ? "" : "px"),
                    a = (ie.cssNumber[e] || "px" !== o && +r) && gt.exec(ie.css(n.elem, e)),
                    s = 1,
                    u = 20;
                if (a && a[3] !== o) {
                    o = o || a[3], i = i || [], a = +r || 1;
                    do s = s || ".5", a /= s, ie.style(n.elem, e, a + o); while (s !== (s = n.cur() / r) && 1 !== s && --u)
                }
                return i && (a = n.start = +a || +r || 0, n.unit = o, n.end = i[1] ? a + (i[1] + 1) * i[2] : +i[2]), n
            }]
        };
    ie.Animation = ie.extend(B, {
            tweener: function(e, t) {
                ie.isFunction(e) ? (t = e, e = ["*"]) : e = e.split(" ");
                for (var n, r = 0, i = e.length; i > r; r++) n = e[r], bt[n] = bt[n] || [], bt[n].unshift(t)
            },
            prefilter: function(e, t) {
                t ? yt.unshift(e) : yt.push(e)
            }
        }), ie.speed = function(e, t, n) {
            var r = e && "object" == typeof e ? ie.extend({}, e) : {
                complete: n || !n && t || ie.isFunction(e) && e,
                duration: e,
                easing: n && t || t && !ie.isFunction(t) && t
            };
            return r.duration = ie.fx.off ? 0 : "number" == typeof r.duration ? r.duration : r.duration in ie.fx.speeds ? ie.fx.speeds[r.duration] : ie.fx.speeds._default, (null == r.queue || r.queue === !0) && (r.queue = "fx"), r.old = r.complete, r.complete = function() {
                ie.isFunction(r.old) && r.old.call(this), r.queue && ie.dequeue(this, r.queue)
            }, r
        }, ie.fn.extend({
            fadeTo: function(e, t, n, r) {
                return this.filter(Ae).css("opacity", 0).show().end().animate({
                    opacity: t
                }, e, n, r)
            },
            animate: function(e, t, n, r) {
                var i = ie.isEmptyObject(e),
                    o = ie.speed(t, n, r),
                    a = function() {
                        var t = B(this, ie.extend({}, e), o);
                        (i || ie._data(this, "finish")) && t.stop(!0)
                    };
                return a.finish = a, i || o.queue === !1 ? this.each(a) : this.queue(o.queue, a)
            },
            stop: function(e, t, n) {
                var r = function(e) {
                    var t = e.stop;
                    delete e.stop, t(n)
                };
                return "string" != typeof e && (n = t, t = e, e = void 0), t && e !== !1 && this.queue(e || "fx", []), this.each(function() {
                    var t = !0,
                        i = null != e && e + "queueHooks",
                        o = ie.timers,
                        a = ie._data(this);
                    if (i) a[i] && a[i].stop && r(a[i]);
                    else
                        for (i in a) a[i] && a[i].stop && vt.test(i) && r(a[i]);
                    for (i = o.length; i--;) o[i].elem !== this || null != e && o[i].queue !== e || (o[i].anim.stop(n), t = !1, o.splice(i, 1));
                    (t || !n) && ie.dequeue(this, e)
                })
            },
            finish: function(e) {
                return e !== !1 && (e = e || "fx"), this.each(function() {
                    var t, n = ie._data(this),
                        r = n[e + "queue"],
                        i = n[e + "queueHooks"],
                        o = ie.timers,
                        a = r ? r.length : 0;
                    for (n.finish = !0, ie.queue(this, e, []), i && i.stop && i.stop.call(this, !0), t = o.length; t--;) o[t].elem === this && o[t].queue === e && (o[t].anim.stop(!0), o.splice(t, 1));
                    for (t = 0; a > t; t++) r[t] && r[t].finish && r[t].finish.call(this);
                    delete n.finish
                })
            }
        }), ie.each(["toggle", "show", "hide"], function(e, t) {
            var n = ie.fn[t];
            ie.fn[t] = function(e, r, i) {
                return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(_(t, !0), e, r, i)
            }
        }), ie.each({
            slideDown: _("show"),
            slideUp: _("hide"),
            slideToggle: _("toggle"),
            fadeIn: {
                opacity: "show"
            },
            fadeOut: {
                opacity: "hide"
            },
            fadeToggle: {
                opacity: "toggle"
            }
        }, function(e, t) {
            ie.fn[e] = function(e, n, r) {
                return this.animate(t, e, n, r)
            }
        }), ie.timers = [], ie.fx.tick = function() {
            var e, t = ie.timers,
                n = 0;
            for (pt = ie.now(); n < t.length; n++) e = t[n], e() || t[n] !== e || t.splice(n--, 1);
            t.length || ie.fx.stop(), pt = void 0
        }, ie.fx.timer = function(e) {
            ie.timers.push(e), e() ? ie.fx.start() : ie.timers.pop()
        }, ie.fx.interval = 13, ie.fx.start = function() {
            ht || (ht = setInterval(ie.fx.tick, ie.fx.interval))
        }, ie.fx.stop = function() {
            clearInterval(ht), ht = null
        }, ie.fx.speeds = {
            slow: 600,
            fast: 200,
            _default: 400
        }, ie.fn.delay = function(e, t) {
            return e = ie.fx ? ie.fx.speeds[e] || e : e, t = t || "fx", this.queue(t, function(t, n) {
                var r = setTimeout(t, e);
                n.stop = function() {
                    clearTimeout(r)
                }
            })
        },
        function() {
            var e, t, n, r, i;
            t = he.createElement("div"), t.setAttribute("className", "t"), t.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", r = t.getElementsByTagName("a")[0], n = he.createElement("select"), i = n.appendChild(he.createElement("option")), e = t.getElementsByTagName("input")[0], r.style.cssText = "top:1px", ne.getSetAttribute = "t" !== t.className, ne.style = /top/.test(r.getAttribute("style")), ne.hrefNormalized = "/a" === r.getAttribute("href"), ne.checkOn = !!e.value, ne.optSelected = i.selected, ne.enctype = !!he.createElement("form").enctype, n.disabled = !0, ne.optDisabled = !i.disabled, e = he.createElement("input"), e.setAttribute("value", ""), ne.input = "" === e.getAttribute("value"), e.value = "t", e.setAttribute("type", "radio"), ne.radioValue = "t" === e.value
        }();
    var xt = /\r/g;
    ie.fn.extend({
        val: function(e) {
            var t, n, r, i = this[0];
            return arguments.length ? (r = ie.isFunction(e), this.each(function(n) {
                var i;
                1 === this.nodeType && (i = r ? e.call(this, n, ie(this).val()) : e, null == i ? i = "" : "number" == typeof i ? i += "" : ie.isArray(i) && (i = ie.map(i, function(e) {
                    return null == e ? "" : e + ""
                })), t = ie.valHooks[this.type] || ie.valHooks[this.nodeName.toLowerCase()], t && "set" in t && void 0 !== t.set(this, i, "value") || (this.value = i))
            })) : i ? (t = ie.valHooks[i.type] || ie.valHooks[i.nodeName.toLowerCase()], t && "get" in t && void 0 !== (n = t.get(i, "value")) ? n : (n = i.value, "string" == typeof n ? n.replace(xt, "") : null == n ? "" : n)) : void 0
        }
    }), ie.extend({
        valHooks: {
            option: {
                get: function(e) {
                    var t = ie.find.attr(e, "value");
                    return null != t ? t : ie.trim(ie.text(e))
                }
            },
            select: {
                get: function(e) {
                    for (var t, n, r = e.options, i = e.selectedIndex, o = "select-one" === e.type || 0 > i, a = o ? null : [], s = o ? i + 1 : r.length, u = 0 > i ? s : o ? i : 0; s > u; u++)
                        if (n = r[u], !(!n.selected && u !== i || (ne.optDisabled ? n.disabled : null !== n.getAttribute("disabled")) || n.parentNode.disabled && ie.nodeName(n.parentNode, "optgroup"))) {
                            if (t = ie(n).val(), o) return t;
                            a.push(t)
                        }
                    return a
                },
                set: function(e, t) {
                    for (var n, r, i = e.options, o = ie.makeArray(t), a = i.length; a--;)
                        if (r = i[a], ie.inArray(ie.valHooks.option.get(r), o) >= 0) try {
                            r.selected = n = !0
                        } catch (s) {
                            r.scrollHeight
                        } else r.selected = !1;
                    return n || (e.selectedIndex = -1), i
                }
            }
        }
    }), ie.each(["radio", "checkbox"], function() {
        ie.valHooks[this] = {
            set: function(e, t) {
                return ie.isArray(t) ? e.checked = ie.inArray(ie(e).val(), t) >= 0 : void 0
            }
        }, ne.checkOn || (ie.valHooks[this].get = function(e) {
            return null === e.getAttribute("value") ? "on" : e.value
        })
    });
    var wt, Tt, Ct = ie.expr.attrHandle,
        Nt = /^(?:checked|selected)$/i,
        Et = ne.getSetAttribute,
        kt = ne.input;
    ie.fn.extend({
        attr: function(e, t) {
            return De(this, ie.attr, e, t, arguments.length > 1)
        },
        removeAttr: function(e) {
            return this.each(function() {
                ie.removeAttr(this, e)
            })
        }
    }), ie.extend({
        attr: function(e, t, n) {
            var r, i, o = e.nodeType;
            return e && 3 !== o && 8 !== o && 2 !== o ? typeof e.getAttribute === Ce ? ie.prop(e, t, n) : (1 === o && ie.isXMLDoc(e) || (t = t.toLowerCase(), r = ie.attrHooks[t] || (ie.expr.match.bool.test(t) ? Tt : wt)), void 0 === n ? r && "get" in r && null !== (i = r.get(e, t)) ? i : (i = ie.find.attr(e, t), null == i ? void 0 : i) : null !== n ? r && "set" in r && void 0 !== (i = r.set(e, n, t)) ? i : (e.setAttribute(t, n + ""), n) : void ie.removeAttr(e, t)) : void 0
        },
        removeAttr: function(e, t) {
            var n, r, i = 0,
                o = t && t.match(be);
            if (o && 1 === e.nodeType)
                for (; n = o[i++];) r = ie.propFix[n] || n, ie.expr.match.bool.test(n) ? kt && Et || !Nt.test(n) ? e[r] = !1 : e[ie.camelCase("default-" + n)] = e[r] = !1 : ie.attr(e, n, ""), e.removeAttribute(Et ? n : r)
        },
        attrHooks: {
            type: {
                set: function(e, t) {
                    if (!ne.radioValue && "radio" === t && ie.nodeName(e, "input")) {
                        var n = e.value;
                        return e.setAttribute("type", t), n && (e.value = n), t
                    }
                }
            }
        }
    }), Tt = {
        set: function(e, t, n) {
            return t === !1 ? ie.removeAttr(e, n) : kt && Et || !Nt.test(n) ? e.setAttribute(!Et && ie.propFix[n] || n, n) : e[ie.camelCase("default-" + n)] = e[n] = !0, n
        }
    }, ie.each(ie.expr.match.bool.source.match(/\w+/g), function(e, t) {
        var n = Ct[t] || ie.find.attr;
        Ct[t] = kt && Et || !Nt.test(t) ? function(e, t, r) {
            var i, o;
            return r || (o = Ct[t], Ct[t] = i, i = null != n(e, t, r) ? t.toLowerCase() : null, Ct[t] = o), i
        } : function(e, t, n) {
            return n ? void 0 : e[ie.camelCase("default-" + t)] ? t.toLowerCase() : null
        }
    }), kt && Et || (ie.attrHooks.value = {
        set: function(e, t, n) {
            return ie.nodeName(e, "input") ? void(e.defaultValue = t) : wt && wt.set(e, t, n)
        }
    }), Et || (wt = {
        set: function(e, t, n) {
            var r = e.getAttributeNode(n);
            return r || e.setAttributeNode(r = e.ownerDocument.createAttribute(n)), r.value = t += "", "value" === n || t === e.getAttribute(n) ? t : void 0
        }
    }, Ct.id = Ct.name = Ct.coords = function(e, t, n) {
        var r;
        return n ? void 0 : (r = e.getAttributeNode(t)) && "" !== r.value ? r.value : null
    }, ie.valHooks.button = {
        get: function(e, t) {
            var n = e.getAttributeNode(t);
            return n && n.specified ? n.value : void 0
        },
        set: wt.set
    }, ie.attrHooks.contenteditable = {
        set: function(e, t, n) {
            wt.set(e, "" === t ? !1 : t, n)
        }
    }, ie.each(["width", "height"], function(e, t) {
        ie.attrHooks[t] = {
            set: function(e, n) {
                return "" === n ? (e.setAttribute(t, "auto"), n) : void 0
            }
        }
    })), ne.style || (ie.attrHooks.style = {
        get: function(e) {
            return e.style.cssText || void 0
        },
        set: function(e, t) {
            return e.style.cssText = t + ""
        }
    });
    var St = /^(?:input|select|textarea|button|object)$/i,
        At = /^(?:a|area)$/i;
    ie.fn.extend({
        prop: function(e, t) {
            return De(this, ie.prop, e, t, arguments.length > 1)
        },
        removeProp: function(e) {
            return e = ie.propFix[e] || e, this.each(function() {
                try {
                    this[e] = void 0, delete this[e]
                } catch (t) {}
            })
        }
    }), ie.extend({
        propFix: {
            "for": "htmlFor",
            "class": "className"
        },
        prop: function(e, t, n) {
            var r, i, o, a = e.nodeType;
            return e && 3 !== a && 8 !== a && 2 !== a ? (o = 1 !== a || !ie.isXMLDoc(e), o && (t = ie.propFix[t] || t, i = ie.propHooks[t]), void 0 !== n ? i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : e[t] = n : i && "get" in i && null !== (r = i.get(e, t)) ? r : e[t]) : void 0
        },
        propHooks: {
            tabIndex: {
                get: function(e) {
                    var t = ie.find.attr(e, "tabindex");
                    return t ? parseInt(t, 10) : St.test(e.nodeName) || At.test(e.nodeName) && e.href ? 0 : -1
                }
            }
        }
    }), ne.hrefNormalized || ie.each(["href", "src"], function(e, t) {
        ie.propHooks[t] = {
            get: function(e) {
                return e.getAttribute(t, 4)
            }
        }
    }), ne.optSelected || (ie.propHooks.selected = {
        get: function(e) {
            var t = e.parentNode;
            return t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex), null
        }
    }), ie.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
        ie.propFix[this.toLowerCase()] = this
    }), ne.enctype || (ie.propFix.enctype = "encoding");
    var Dt = /[\t\r\n\f]/g;
    ie.fn.extend({
        addClass: function(e) {
            var t, n, r, i, o, a, s = 0,
                u = this.length,
                l = "string" == typeof e && e;
            if (ie.isFunction(e)) return this.each(function(t) {
                ie(this).addClass(e.call(this, t, this.className))
            });
            if (l)
                for (t = (e || "").match(be) || []; u > s; s++)
                    if (n = this[s], r = 1 === n.nodeType && (n.className ? (" " + n.className + " ").replace(Dt, " ") : " ")) {
                        for (o = 0; i = t[o++];) r.indexOf(" " + i + " ") < 0 && (r += i + " ");
                        a = ie.trim(r), n.className !== a && (n.className = a)
                    }
            return this
        },
        removeClass: function(e) {
            var t, n, r, i, o, a, s = 0,
                u = this.length,
                l = 0 === arguments.length || "string" == typeof e && e;
            if (ie.isFunction(e)) return this.each(function(t) {
                ie(this).removeClass(e.call(this, t, this.className))
            });
            if (l)
                for (t = (e || "").match(be) || []; u > s; s++)
                    if (n = this[s], r = 1 === n.nodeType && (n.className ? (" " + n.className + " ").replace(Dt, " ") : "")) {
                        for (o = 0; i = t[o++];)
                            for (; r.indexOf(" " + i + " ") >= 0;) r = r.replace(" " + i + " ", " ");
                        a = e ? ie.trim(r) : "", n.className !== a && (n.className = a)
                    }
            return this
        },
        toggleClass: function(e, t) {
            var n = typeof e;
            return "boolean" == typeof t && "string" === n ? t ? this.addClass(e) : this.removeClass(e) : this.each(ie.isFunction(e) ? function(n) {
                ie(this).toggleClass(e.call(this, n, this.className, t), t)
            } : function() {
                if ("string" === n)
                    for (var t, r = 0, i = ie(this), o = e.match(be) || []; t = o[r++];) i.hasClass(t) ? i.removeClass(t) : i.addClass(t);
                else(n === Ce || "boolean" === n) && (this.className && ie._data(this, "__className__", this.className), this.className = this.className || e === !1 ? "" : ie._data(this, "__className__") || "")
            })
        },
        hasClass: function(e) {
            for (var t = " " + e + " ", n = 0, r = this.length; r > n; n++)
                if (1 === this[n].nodeType && (" " + this[n].className + " ").replace(Dt, " ").indexOf(t) >= 0) return !0;
            return !1
        }
    }), ie.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function(e, t) {
        ie.fn[t] = function(e, n) {
            return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t)
        }
    }), ie.fn.extend({
        hover: function(e, t) {
            return this.mouseenter(e).mouseleave(t || e)
        },
        bind: function(e, t, n) {
            return this.on(e, null, t, n)
        },
        unbind: function(e, t) {
            return this.off(e, null, t)
        },
        delegate: function(e, t, n, r) {
            return this.on(t, e, n, r)
        },
        undelegate: function(e, t, n) {
            return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
        }
    });
    var jt = ie.now(),
        Lt = /\?/,
        Ht = /(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;
    ie.parseJSON = function(t) {
        if (e.JSON && e.JSON.parse) return e.JSON.parse(t + "");
        var n, r = null,
            i = ie.trim(t + "");
        return i && !ie.trim(i.replace(Ht, function(e, t, i, o) {
            return n && t && (r = 0), 0 === r ? e : (n = i || t, r += !o - !i, "")
        })) ? Function("return " + i)() : ie.error("Invalid JSON: " + t)
    }, ie.parseXML = function(t) {
        var n, r;
        if (!t || "string" != typeof t) return null;
        try {
            e.DOMParser ? (r = new DOMParser, n = r.parseFromString(t, "text/xml")) : (n = new ActiveXObject("Microsoft.XMLDOM"), n.async = "false", n.loadXML(t))
        } catch (i) {
            n = void 0
        }
        return n && n.documentElement && !n.getElementsByTagName("parsererror").length || ie.error("Invalid XML: " + t), n
    };
    var qt, _t, Mt = /#.*$/,
        Ft = /([?&])_=[^&]*/,
        Ot = /^(.*?):[ \t]*([^\r\n]*)\r?$/gm,
        Bt = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
        Pt = /^(?:GET|HEAD)$/,
        Rt = /^\/\//,
        Wt = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,
        $t = {},
        zt = {},
        It = "*/".concat("*");
    try {
        _t = location.href
    } catch (Xt) {
        _t = he.createElement("a"), _t.href = "", _t = _t.href
    }
    qt = Wt.exec(_t.toLowerCase()) || [], ie.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
            url: _t,
            type: "GET",
            isLocal: Bt.test(qt[1]),
            global: !0,
            processData: !0,
            async: !0,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            accepts: {
                "*": It,
                text: "text/plain",
                html: "text/html",
                xml: "application/xml, text/xml",
                json: "application/json, text/javascript"
            },
            contents: {
                xml: /xml/,
                html: /html/,
                json: /json/
            },
            responseFields: {
                xml: "responseXML",
                text: "responseText",
                json: "responseJSON"
            },
            converters: {
                "* text": String,
                "text html": !0,
                "text json": ie.parseJSON,
                "text xml": ie.parseXML
            },
            flatOptions: {
                url: !0,
                context: !0
            }
        },
        ajaxSetup: function(e, t) {
            return t ? W(W(e, ie.ajaxSettings), t) : W(ie.ajaxSettings, e)
        },
        ajaxPrefilter: P($t),
        ajaxTransport: P(zt),
        ajax: function(e, t) {
            function n(e, t, n, r) {
                var i, c, v, y, x, T = t;
                2 !== b && (b = 2, s && clearTimeout(s), l = void 0, a = r || "", w.readyState = e > 0 ? 4 : 0, i = e >= 200 && 300 > e || 304 === e, n && (y = $(d, w, n)), y = z(d, y, w, i), i ? (d.ifModified && (x = w.getResponseHeader("Last-Modified"), x && (ie.lastModified[o] = x), x = w.getResponseHeader("etag"), x && (ie.etag[o] = x)), 204 === e || "HEAD" === d.type ? T = "nocontent" : 304 === e ? T = "notmodified" : (T = y.state, c = y.data, v = y.error, i = !v)) : (v = T, (e || !T) && (T = "error", 0 > e && (e = 0))), w.status = e, w.statusText = (t || T) + "", i ? h.resolveWith(f, [c, T, w]) : h.rejectWith(f, [w, T, v]), w.statusCode(g), g = void 0, u && p.trigger(i ? "ajaxSuccess" : "ajaxError", [w, d, i ? c : v]), m.fireWith(f, [w, T]), u && (p.trigger("ajaxComplete", [w, d]), --ie.active || ie.event.trigger("ajaxStop")))
            }
            "object" == typeof e && (t = e, e = void 0), t = t || {};
            var r, i, o, a, s, u, l, c, d = ie.ajaxSetup({}, t),
                f = d.context || d,
                p = d.context && (f.nodeType || f.jquery) ? ie(f) : ie.event,
                h = ie.Deferred(),
                m = ie.Callbacks("once memory"),
                g = d.statusCode || {},
                v = {},
                y = {},
                b = 0,
                x = "canceled",
                w = {
                    readyState: 0,
                    getResponseHeader: function(e) {
                        var t;
                        if (2 === b) {
                            if (!c)
                                for (c = {}; t = Ot.exec(a);) c[t[1].toLowerCase()] = t[2];
                            t = c[e.toLowerCase()]
                        }
                        return null == t ? null : t
                    },
                    getAllResponseHeaders: function() {
                        return 2 === b ? a : null
                    },
                    setRequestHeader: function(e, t) {
                        var n = e.toLowerCase();
                        return b || (e = y[n] = y[n] || e, v[e] = t), this
                    },
                    overrideMimeType: function(e) {
                        return b || (d.mimeType = e), this
                    },
                    statusCode: function(e) {
                        var t;
                        if (e)
                            if (2 > b)
                                for (t in e) g[t] = [g[t], e[t]];
                            else w.always(e[w.status]);
                        return this
                    },
                    abort: function(e) {
                        var t = e || x;
                        return l && l.abort(t), n(0, t), this
                    }
                };
            if (h.promise(w).complete = m.add, w.success = w.done, w.error = w.fail, d.url = ((e || d.url || _t) + "").replace(Mt, "").replace(Rt, qt[1] + "//"), d.type = t.method || t.type || d.method || d.type, d.dataTypes = ie.trim(d.dataType || "*").toLowerCase().match(be) || [""], null == d.crossDomain && (r = Wt.exec(d.url.toLowerCase()), d.crossDomain = !(!r || r[1] === qt[1] && r[2] === qt[2] && (r[3] || ("http:" === r[1] ? "80" : "443")) === (qt[3] || ("http:" === qt[1] ? "80" : "443")))), d.data && d.processData && "string" != typeof d.data && (d.data = ie.param(d.data, d.traditional)), R($t, d, t, w), 2 === b) return w;
            u = ie.event && d.global, u && 0 === ie.active++ && ie.event.trigger("ajaxStart"), d.type = d.type.toUpperCase(), d.hasContent = !Pt.test(d.type), o = d.url, d.hasContent || (d.data && (o = d.url += (Lt.test(o) ? "&" : "?") + d.data, delete d.data), d.cache === !1 && (d.url = Ft.test(o) ? o.replace(Ft, "$1_=" + jt++) : o + (Lt.test(o) ? "&" : "?") + "_=" + jt++)), d.ifModified && (ie.lastModified[o] && w.setRequestHeader("If-Modified-Since", ie.lastModified[o]), ie.etag[o] && w.setRequestHeader("If-None-Match", ie.etag[o])), (d.data && d.hasContent && d.contentType !== !1 || t.contentType) && w.setRequestHeader("Content-Type", d.contentType), w.setRequestHeader("Accept", d.dataTypes[0] && d.accepts[d.dataTypes[0]] ? d.accepts[d.dataTypes[0]] + ("*" !== d.dataTypes[0] ? ", " + It + "; q=0.01" : "") : d.accepts["*"]);
            for (i in d.headers) w.setRequestHeader(i, d.headers[i]);
            if (d.beforeSend && (d.beforeSend.call(f, w, d) === !1 || 2 === b)) return w.abort();
            x = "abort";
            for (i in {
                    success: 1,
                    error: 1,
                    complete: 1
                }) w[i](d[i]);
            if (l = R(zt, d, t, w)) {
                w.readyState = 1, u && p.trigger("ajaxSend", [w, d]), d.async && d.timeout > 0 && (s = setTimeout(function() {
                    w.abort("timeout")
                }, d.timeout));
                try {
                    b = 1, l.send(v, n)
                } catch (T) {
                    if (!(2 > b)) throw T;
                    n(-1, T)
                }
            } else n(-1, "No Transport");
            return w
        },
        getJSON: function(e, t, n) {
            return ie.get(e, t, n, "json")
        },
        getScript: function(e, t) {
            return ie.get(e, void 0, t, "script")
        }
    }), ie.each(["get", "post"], function(e, t) {
        ie[t] = function(e, n, r, i) {
            return ie.isFunction(n) && (i = i || r, r = n, n = void 0), ie.ajax({
                url: e,
                type: t,
                dataType: i,
                data: n,
                success: r
            })
        }
    }), ie._evalUrl = function(e) {
        return ie.ajax({
            url: e,
            type: "GET",
            dataType: "script",
            async: !1,
            global: !1,
            "throws": !0
        })
    }, ie.fn.extend({
        wrapAll: function(e) {
            if (ie.isFunction(e)) return this.each(function(t) {
                ie(this).wrapAll(e.call(this, t))
            });
            if (this[0]) {
                var t = ie(e, this[0].ownerDocument).eq(0).clone(!0);
                this[0].parentNode && t.insertBefore(this[0]), t.map(function() {
                    for (var e = this; e.firstChild && 1 === e.firstChild.nodeType;) e = e.firstChild;
                    return e
                }).append(this)
            }
            return this
        },
        wrapInner: function(e) {
            return this.each(ie.isFunction(e) ? function(t) {
                ie(this).wrapInner(e.call(this, t))
            } : function() {
                var t = ie(this),
                    n = t.contents();
                n.length ? n.wrapAll(e) : t.append(e)
            })
        },
        wrap: function(e) {
            var t = ie.isFunction(e);
            return this.each(function(n) {
                ie(this).wrapAll(t ? e.call(this, n) : e)
            })
        },
        unwrap: function() {
            return this.parent().each(function() {
                ie.nodeName(this, "body") || ie(this).replaceWith(this.childNodes)
            }).end()
        }
    }), ie.expr.filters.hidden = function(e) {
        return e.offsetWidth <= 0 && e.offsetHeight <= 0 || !ne.reliableHiddenOffsets() && "none" === (e.style && e.style.display || ie.css(e, "display"))
    }, ie.expr.filters.visible = function(e) {
        return !ie.expr.filters.hidden(e)
    };
    var Ut = /%20/g,
        Vt = /\[\]$/,
        Jt = /\r?\n/g,
        Yt = /^(?:submit|button|image|reset|file)$/i,
        Gt = /^(?:input|select|textarea|keygen)/i;
    ie.param = function(e, t) {
        var n, r = [],
            i = function(e, t) {
                t = ie.isFunction(t) ? t() : null == t ? "" : t, r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(t)
            };
        if (void 0 === t && (t = ie.ajaxSettings && ie.ajaxSettings.traditional), ie.isArray(e) || e.jquery && !ie.isPlainObject(e)) ie.each(e, function() {
            i(this.name, this.value)
        });
        else
            for (n in e) I(n, e[n], t, i);
        return r.join("&").replace(Ut, "+")
    }, ie.fn.extend({
        serialize: function() {
            return ie.param(this.serializeArray())
        },
        serializeArray: function() {
            return this.map(function() {
                var e = ie.prop(this, "elements");
                return e ? ie.makeArray(e) : this
            }).filter(function() {
                var e = this.type;
                return this.name && !ie(this).is(":disabled") && Gt.test(this.nodeName) && !Yt.test(e) && (this.checked || !je.test(e))
            }).map(function(e, t) {
                var n = ie(this).val();
                return null == n ? null : ie.isArray(n) ? ie.map(n, function(e) {
                    return {
                        name: t.name,
                        value: e.replace(Jt, "\r\n")
                    }
                }) : {
                    name: t.name,
                    value: n.replace(Jt, "\r\n")
                }
            }).get()
        }
    }), ie.ajaxSettings.xhr = void 0 !== e.ActiveXObject ? function() {
        return !this.isLocal && /^(get|post|head|put|delete|options)$/i.test(this.type) && X() || U()
    } : X;
    var Qt = 0,
        Kt = {},
        Zt = ie.ajaxSettings.xhr();
    e.attachEvent && e.attachEvent("onunload", function() {
        for (var e in Kt) Kt[e](void 0, !0)
    }), ne.cors = !!Zt && "withCredentials" in Zt, Zt = ne.ajax = !!Zt, Zt && ie.ajaxTransport(function(e) {
        if (!e.crossDomain || ne.cors) {
            var t;
            return {
                send: function(n, r) {
                    var i, o = e.xhr(),
                        a = ++Qt;
                    if (o.open(e.type, e.url, e.async, e.username, e.password), e.xhrFields)
                        for (i in e.xhrFields) o[i] = e.xhrFields[i];
                    e.mimeType && o.overrideMimeType && o.overrideMimeType(e.mimeType), e.crossDomain || n["X-Requested-With"] || (n["X-Requested-With"] = "XMLHttpRequest");
                    for (i in n) void 0 !== n[i] && o.setRequestHeader(i, n[i] + "");
                    o.send(e.hasContent && e.data || null), t = function(n, i) {
                        var s, u, l;
                        if (t && (i || 4 === o.readyState))
                            if (delete Kt[a], t = void 0, o.onreadystatechange = ie.noop, i) 4 !== o.readyState && o.abort();
                            else {
                                l = {}, s = o.status, "string" == typeof o.responseText && (l.text = o.responseText);
                                try {
                                    u = o.statusText
                                } catch (c) {
                                    u = ""
                                }
                                s || !e.isLocal || e.crossDomain ? 1223 === s && (s = 204) : s = l.text ? 200 : 404
                            }
                        l && r(s, u, l, o.getAllResponseHeaders())
                    }, e.async ? 4 === o.readyState ? setTimeout(t) : o.onreadystatechange = Kt[a] = t : t()
                },
                abort: function() {
                    t && t(void 0, !0)
                }
            }
        }
    }), ie.ajaxSetup({
        accepts: {
            script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
        },
        contents: {
            script: /(?:java|ecma)script/
        },
        converters: {
            "text script": function(e) {
                return ie.globalEval(e), e
            }
        }
    }), ie.ajaxPrefilter("script", function(e) {
        void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET", e.global = !1)
    }), ie.ajaxTransport("script", function(e) {
        if (e.crossDomain) {
            var t, n = he.head || ie("head")[0] || he.documentElement;
            return {
                send: function(r, i) {
                    t = he.createElement("script"), t.async = !0, e.scriptCharset && (t.charset = e.scriptCharset), t.src = e.url, t.onload = t.onreadystatechange = function(e, n) {
                        (n || !t.readyState || /loaded|complete/.test(t.readyState)) && (t.onload = t.onreadystatechange = null, t.parentNode && t.parentNode.removeChild(t), t = null, n || i(200, "success"))
                    }, n.insertBefore(t, n.firstChild)
                },
                abort: function() {
                    t && t.onload(void 0, !0)
                }
            }
        }
    });
    var en = [],
        tn = /(=)\?(?=&|$)|\?\?/;
    ie.ajaxSetup({
        jsonp: "callback",
        jsonpCallback: function() {
            var e = en.pop() || ie.expando + "_" + jt++;
            return this[e] = !0, e
        }
    }), ie.ajaxPrefilter("json jsonp", function(t, n, r) {
        var i, o, a, s = t.jsonp !== !1 && (tn.test(t.url) ? "url" : "string" == typeof t.data && !(t.contentType || "").indexOf("application/x-www-form-urlencoded") && tn.test(t.data) && "data");
        return s || "jsonp" === t.dataTypes[0] ? (i = t.jsonpCallback = ie.isFunction(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, s ? t[s] = t[s].replace(tn, "$1" + i) : t.jsonp !== !1 && (t.url += (Lt.test(t.url) ? "&" : "?") + t.jsonp + "=" + i), t.converters["script json"] = function() {
            return a || ie.error(i + " was not called"), a[0]
        }, t.dataTypes[0] = "json", o = e[i], e[i] = function() {
            a = arguments
        }, r.always(function() {
            e[i] = o, t[i] && (t.jsonpCallback = n.jsonpCallback, en.push(i)), a && ie.isFunction(o) && o(a[0]), a = o = void 0
        }), "script") : void 0
    }), ie.parseHTML = function(e, t, n) {
        if (!e || "string" != typeof e) return null;
        "boolean" == typeof t && (n = t, t = !1), t = t || he;
        var r = de.exec(e),
            i = !n && [];
        return r ? [t.createElement(r[1])] : (r = ie.buildFragment([e], t, i), i && i.length && ie(i).remove(), ie.merge([], r.childNodes))
    };
    var nn = ie.fn.load;
    ie.fn.load = function(e, t, n) {
        if ("string" != typeof e && nn) return nn.apply(this, arguments);
        var r, i, o, a = this,
            s = e.indexOf(" ");
        return s >= 0 && (r = ie.trim(e.slice(s, e.length)), e = e.slice(0, s)), ie.isFunction(t) ? (n = t, t = void 0) : t && "object" == typeof t && (o = "POST"), a.length > 0 && ie.ajax({
            url: e,
            type: o,
            dataType: "html",
            data: t
        }).done(function(e) {
            i = arguments, a.html(r ? ie("<div>").append(ie.parseHTML(e)).find(r) : e)
        }).complete(n && function(e, t) {
            a.each(n, i || [e.responseText, t, e])
        }), this
    }, ie.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(e, t) {
        ie.fn[t] = function(e) {
            return this.on(t, e)
        }
    }), ie.expr.filters.animated = function(e) {
        return ie.grep(ie.timers, function(t) {
            return e === t.elem
        }).length
    };
    var rn = e.document.documentElement;
    ie.offset = {
        setOffset: function(e, t, n) {
            var r, i, o, a, s, u, l, c = ie.css(e, "position"),
                d = ie(e),
                f = {};
            "static" === c && (e.style.position = "relative"), s = d.offset(), o = ie.css(e, "top"), u = ie.css(e, "left"), l = ("absolute" === c || "fixed" === c) && ie.inArray("auto", [o, u]) > -1, l ? (r = d.position(), a = r.top, i = r.left) : (a = parseFloat(o) || 0, i = parseFloat(u) || 0), ie.isFunction(t) && (t = t.call(e, n, s)), null != t.top && (f.top = t.top - s.top + a), null != t.left && (f.left = t.left - s.left + i), "using" in t ? t.using.call(e, f) : d.css(f)
        }
    }, ie.fn.extend({
        offset: function(e) {
            if (arguments.length) return void 0 === e ? this : this.each(function(t) {
                ie.offset.setOffset(this, e, t)
            });
            var t, n, r = {
                    top: 0,
                    left: 0
                },
                i = this[0],
                o = i && i.ownerDocument;
            return o ? (t = o.documentElement, ie.contains(t, i) ? (typeof i.getBoundingClientRect !== Ce && (r = i.getBoundingClientRect()), n = V(o), {
                top: r.top + (n.pageYOffset || t.scrollTop) - (t.clientTop || 0),
                left: r.left + (n.pageXOffset || t.scrollLeft) - (t.clientLeft || 0)
            }) : r) : void 0
        },
        position: function() {
            if (this[0]) {
                var e, t, n = {
                        top: 0,
                        left: 0
                    },
                    r = this[0];
                return "fixed" === ie.css(r, "position") ? t = r.getBoundingClientRect() : (e = this.offsetParent(), t = this.offset(), ie.nodeName(e[0], "html") || (n = e.offset()), n.top += ie.css(e[0], "borderTopWidth", !0), n.left += ie.css(e[0], "borderLeftWidth", !0)), {
                    top: t.top - n.top - ie.css(r, "marginTop", !0),
                    left: t.left - n.left - ie.css(r, "marginLeft", !0)
                }
            }
        },
        offsetParent: function() {
            return this.map(function() {
                for (var e = this.offsetParent || rn; e && !ie.nodeName(e, "html") && "static" === ie.css(e, "position");) e = e.offsetParent;
                return e || rn
            })
        }
    }), ie.each({
        scrollLeft: "pageXOffset",
        scrollTop: "pageYOffset"
    }, function(e, t) {
        var n = /Y/.test(t);
        ie.fn[e] = function(r) {
            return De(this, function(e, r, i) {
                var o = V(e);
                return void 0 === i ? o ? t in o ? o[t] : o.document.documentElement[r] : e[r] : void(o ? o.scrollTo(n ? ie(o).scrollLeft() : i, n ? i : ie(o).scrollTop()) : e[r] = i)
            }, e, r, arguments.length, null)
        }
    }), ie.each(["top", "left"], function(e, t) {
        ie.cssHooks[t] = k(ne.pixelPosition, function(e, n) {
            return n ? (n = tt(e, t), rt.test(n) ? ie(e).position()[t] + "px" : n) : void 0
        })
    }), ie.each({
        Height: "height",
        Width: "width"
    }, function(e, t) {
        ie.each({
            padding: "inner" + e,
            content: t,
            "": "outer" + e
        }, function(n, r) {
            ie.fn[r] = function(r, i) {
                var o = arguments.length && (n || "boolean" != typeof r),
                    a = n || (r === !0 || i === !0 ? "margin" : "border");
                return De(this, function(t, n, r) {
                    var i;
                    return ie.isWindow(t) ? t.document.documentElement["client" + e] : 9 === t.nodeType ? (i = t.documentElement, Math.max(t.body["scroll" + e], i["scroll" + e], t.body["offset" + e], i["offset" + e], i["client" + e])) : void 0 === r ? ie.css(t, n, a) : ie.style(t, n, r, a)
                }, t, o ? r : void 0, o, null)
            }
        })
    }), ie.fn.size = function() {
        return this.length
    }, ie.fn.andSelf = ie.fn.addBack, "function" == typeof define && define.amd && define("jquery", [], function() {
        return ie
    });
    var on = e.jQuery,
        an = e.$;
    return ie.noConflict = function(t) {
        return e.$ === ie && (e.$ = an), t && e.jQuery === ie && (e.jQuery = on), ie
    }, typeof t === Ce && (e.jQuery = e.$ = ie), ie
});
! function(t) {
    t.fn.yiiActiveForm = function(i) {
        return o[i] ? o[i].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof i && i ? (t.error("Method " + i + " does not exist on jQuery.yiiActiveForm"), !1) : o.init.apply(this, arguments)
    };
    var i, e = {
            beforeValidate: "beforeValidate",
            afterValidate: "afterValidate",
            beforeValidateAttribute: "beforeValidateAttribute",
            afterValidateAttribute: "afterValidateAttribute",
            beforeSubmit: "beforeSubmit",
            ajaxBeforeSend: "ajaxBeforeSend",
            ajaxComplete: "ajaxComplete"
        },
        a = {
            encodeErrorSummary: !0,
            errorSummary: ".error-summary",
            validateOnSubmit: !0,
            errorCssClass: "has-error",
            successCssClass: "has-success",
            validatingCssClass: "validating",
            ajaxParam: "ajax",
            ajaxDataType: "json",
            validationUrl: void 0,
            scrollToError: !0
        },
        s = {
            id: void 0,
            name: void 0,
            container: void 0,
            input: void 0,
            error: ".help-block",
            encodeError: !0,
            validateOnChange: !0,
            validateOnBlur: !0,
            validateOnType: !1,
            validationDelay: 500,
            enableAjaxValidation: !1,
            validate: void 0,
            status: 0,
            cancelled: !1,
            value: void 0
        },
        r = function(e) {
            i = t.Deferred(), e.data("yiiSubmitFinalizePromise", i.promise())
        },
        n = function(t) {
            i && (i.resolve(), i = void 0, t.removeData("yiiSubmitFinalizePromise"))
        },
        o = {
            init: function(i, e) {
                return this.each(function() {
                    var r = t(this);
                    if (!r.data("yiiActiveForm")) {
                        var n = t.extend({}, a, e || {});
                        void 0 === n.validationUrl && (n.validationUrl = r.attr("action")), t.each(i, function(e) {
                            i[e] = t.extend({
                                value: g(r, this)
                            }, s, this), u(r, i[e])
                        }), r.data("yiiActiveForm", {
                            settings: n,
                            attributes: i,
                            submitting: !1,
                            validated: !1
                        }), r.bind("reset.yiiActiveForm", o.resetForm), n.validateOnSubmit && (r.on("mouseup.yiiActiveForm keyup.yiiActiveForm", ":submit", function() {
                            r.data("yiiActiveForm").submitObject = t(this)
                        }), r.on("submit.yiiActiveForm", o.submitForm))
                    }
                })
            },
            add: function(i) {
                var e = t(this);
                i = t.extend({
                    value: g(e, i)
                }, s, i), e.data("yiiActiveForm").attributes.push(i), u(e, i)
            },
            remove: function(i) {
                var e = t(this),
                    a = e.data("yiiActiveForm").attributes,
                    s = -1,
                    r = void 0;
                return t.each(a, function(t) {
                    return a[t].id == i ? (s = t, r = a[t], !1) : void 0
                }), s >= 0 && (a.splice(s, 1), d(e, r)), r
            },
            validateAttribute: function(i) {
                var e = o.find.call(this, i);
                void 0 != e && l(t(this), e, !0)
            },
            find: function(i) {
                var e = t(this).data("yiiActiveForm").attributes,
                    a = void 0;
                return t.each(e, function(t) {
                    return e[t].id == i ? (a = e[t], !1) : void 0
                }), a
            },
            destroy: function() {
                return this.each(function() {
                    t(this).unbind(".yiiActiveForm"), t(this).removeData("yiiActiveForm")
                })
            },
            data: function() {
                return this.data("yiiActiveForm")
            },
            validate: function() {
                var i = t(this),
                    a = i.data("yiiActiveForm"),
                    s = !1,
                    r = {},
                    o = c(),
                    u = a.submitting;
                if (u) {
                    var d = t.Event(e.beforeValidate);
                    if (i.trigger(d, [r, o]), d.result === !1) return a.submitting = !1, void n(i)
                }
                t.each(a.attributes, function() {
                    if (!t(this.input).is(":disabled") && (this.cancelled = !1, a.submitting || 2 === this.status || 3 === this.status)) {
                        var n = r[this.id];
                        void 0 === n && (n = [], r[this.id] = n);
                        var u = t.Event(e.beforeValidateAttribute);
                        i.trigger(u, [this, n, o]), u.result !== !1 ? (this.validate && this.validate(this, g(i, this), n, o, i), this.enableAjaxValidation && (s = !0)) : this.cancelled = !0
                    }
                }), t.when.apply(this, o).always(function() {
                    for (var o in r) 0 === r[o].length && delete r[o];
                    if (s) {
                        var d = a.submitObject,
                            l = "&" + a.settings.ajaxParam + "=" + i.attr("id");
                        d && d.length && d.attr("name") && (l += "&" + d.attr("name") + "=" + d.attr("value")), t.ajax({
                            url: a.settings.validationUrl,
                            type: i.attr("method"),
                            data: i.serialize() + l,
                            dataType: a.settings.ajaxDataType,
                            complete: function(t, a) {
                                i.trigger(e.ajaxComplete, [t, a])
                            },
                            beforeSend: function(t, a) {
                                i.trigger(e.ajaxBeforeSend, [t, a])
                            },
                            success: function(e) {
                                null !== e && "object" == typeof e ? (t.each(a.attributes, function() {
                                    (!this.enableAjaxValidation || this.cancelled) && delete e[this.id]
                                }), v(i, t.extend(r, e), u)) : v(i, r, u)
                            },
                            error: function() {
                                a.submitting = !1, n(i)
                            }
                        })
                    } else a.submitting ? setTimeout(function() {
                        v(i, r, u)
                    }, 200) : v(i, r, u)
                })
            },
            submitForm: function() {
                var i = t(this),
                    a = i.data("yiiActiveForm");
                if (a.validated) {
                    a.submitting = !1;
                    var s = t.Event(e.beforeSubmit);
                    return i.trigger(s), s.result === !1 ? (a.validated = !1, n(i), !1) : (f(i), !0)
                }
                return r(i), void 0 !== a.settings.timer && clearTimeout(a.settings.timer), a.submitting = !0, o.validate.call(i), !1
            },
            resetForm: function() {
                var i = t(this),
                    e = i.data("yiiActiveForm");
                setTimeout(function() {
                    t.each(e.attributes, function() {
                        this.value = g(i, this), this.status = 0;
                        var t = i.find(this.container);
                        t.removeClass(e.settings.validatingCssClass + " " + e.settings.errorCssClass + " " + e.settings.successCssClass), t.find(this.error).html("")
                    }), i.find(e.settings.errorSummary).hide().find("ul").html("")
                }, 1)
            },
            updateMessages: function(i, e) {
                var a = t(this),
                    s = a.data("yiiActiveForm");
                t.each(s.attributes, function() {
                    m(a, this, i)
                }), e && h(a, i)
            },
            updateAttribute: function(i, e) {
                var a = o.find.call(this, i);
                if (void 0 != a) {
                    var s = {};
                    s[i] = e, m(t(this), a, s)
                }
            }
        },
        u = function(i, e) {
            var a = b(i, e);
            e.validateOnChange && a.on("change.yiiActiveForm", function() {
                l(i, e, !1)
            }), e.validateOnBlur && a.on("blur.yiiActiveForm", function() {
                (0 == e.status || 1 == e.status) && l(i, e, !0)
            }), e.validateOnType && a.on("keyup.yiiActiveForm", function(a) {
                -1 === t.inArray(a.which, [16, 17, 18, 37, 38, 39, 40]) && e.value !== g(i, e) && l(i, e, !1, e.validationDelay)
            })
        },
        d = function(t, i) {
            b(t, i).off(".yiiActiveForm")
        },
        l = function(i, e, a, s) {
            var r = i.data("yiiActiveForm");
            a && (e.status = 2), t.each(r.attributes, function() {
                this.value !== g(i, this) && (this.status = 2, a = !0)
            }), a && (void 0 !== r.settings.timer && clearTimeout(r.settings.timer), r.settings.timer = setTimeout(function() {
                r.submitting || i.is(":hidden") || (t.each(r.attributes, function() {
                    2 === this.status && (this.status = 3, i.find(this.container).addClass(r.settings.validatingCssClass))
                }), o.validate.call(i))
            }, s ? s : 200))
        },
        c = function() {
            var i = [];
            return i.add = function(i) {
                this.push(new t.Deferred(i))
            }, i
        },
        v = function(i, a, s) {
            var r = i.data("yiiActiveForm");
            if (s) {
                var o = [];
                if (t.each(r.attributes, function() {
                        t(this.input).is(":disabled") || this.cancelled || !m(i, this, a) || o.push(this)
                    }), i.trigger(e.afterValidate, [a, o]), h(i, a), o.length) {
                    if (r.settings.scrollToError) {
                        var u = i.find(t.map(o, function(t) {
                                return t.input
                            }).join(",")).first().closest(":visible").offset().top,
                            d = t(window).scrollTop();
                        (d > u || u > d + t(window).height()) && t(window).scrollTop(u)
                    }
                    r.submitting = !1
                } else r.validated = !0, i.submit()
            } else t.each(r.attributes, function() {
                this.cancelled || 2 !== this.status && 3 !== this.status || m(i, this, a)
            });
            n(i)
        },
        f = function(i) {
            var e = i.data("yiiActiveForm"),
                a = e.submitObject || i.find(":submit:first");
            if (a.length && "submit" == a.attr("type") && a.attr("name")) {
                var s = t('input[type="hidden"][name="' + a.attr("name") + '"]', i);
                s.length ? s.attr("value", a.attr("value")) : t("<input>").attr({
                    type: "hidden",
                    name: a.attr("name"),
                    value: a.attr("value")
                }).appendTo(i)
            }
        },
        m = function(i, a, s) {
            var r = i.data("yiiActiveForm"),
                n = b(i, a),
                o = !1;
            if (t.isArray(s[a.id]) || (s[a.id] = []), i.trigger(e.afterValidateAttribute, [a, s[a.id]]), a.status = 1, n.length) {
                o = s[a.id].length > 0;
                var u = i.find(a.container),
                    d = u.find(a.error);
                o ? (a.encodeError ? d.text(s[a.id][0]) : d.html(s[a.id][0]), u.removeClass(r.settings.validatingCssClass + " " + r.settings.successCssClass).addClass(r.settings.errorCssClass)) : (d.empty(), u.removeClass(r.settings.validatingCssClass + " " + r.settings.errorCssClass + " ").addClass(r.settings.successCssClass)), a.value = g(i, a)
            }
            return o
        },
        h = function(i, e) {
            var a = i.data("yiiActiveForm"),
                s = i.find(a.settings.errorSummary),
                r = s.find("ul").empty();
            s.length && e && (t.each(a.attributes, function() {
                if (t.isArray(e[this.id]) && e[this.id].length) {
                    var i = t("<li/>");
                    a.settings.encodeErrorSummary ? i.text(e[this.id][0]) : i.html(e[this.id][0]), r.append(i)
                }
            }), s.toggle(r.find("li").length > 0))
        },
        g = function(t, i) {
            var e = b(t, i),
                a = e.attr("type");
            if ("checkbox" === a || "radio" === a) {
                var s = e.filter(":checked");
                return s.length || (s = t.find('input[type=hidden][name="' + e.attr("name") + '"]')), s.val()
            }
            return e.val()
        },
        b = function(t, i) {
            var e = t.find(i.input);
            return e.length && "div" === e[0].tagName.toLowerCase() ? e.find("input") : e
        }
}(window.jQuery);
yii = function(t) {
    function e() {
        t(document).ajaxComplete(function(t, e, a) {
            var n = e.getResponseHeader("X-Redirect");
            n && (window.location = n)
        })
    }

    function a() {
        t.ajaxPrefilter(function(t, e, a) {
            !t.crossDomain && r.getCsrfParam() && a.setRequestHeader("X-CSRF-Token", r.getCsrfToken())
        }), r.refreshCsrfToken()
    }

    function n() {
        var e = function(e) {
            var a = t(this),
                n = a.data("method"),
                i = a.data("confirm");
            return void 0 === n && void 0 === i ? !0 : (void 0 !== i ? t.proxy(r.confirm, this)(i, function() {
                r.handleAction(a, e)
            }) : r.handleAction(a, e), e.stopImmediatePropagation(), !1)
        };
        t(document).on("click.yii", r.clickableSelector, e).on("change.yii", r.changeableSelector, e)
    }

    function i() {
        var e = location.protocol + "//" + location.host,
            a = t("script[src]").map(function() {
                return "/" === this.src.charAt(0) ? e + this.src : this.src
            }).toArray();
        t.ajaxPrefilter("script", function(n, i, o) {
            if ("jsonp" != n.dataType) {
                var c = "/" === n.url.charAt(0) ? e + n.url : n.url;
                if (-1 === t.inArray(c, a)) a.push(c);
                else {
                    var s = -1 !== t.inArray(c, t.map(r.reloadableScripts, function(t) {
                        return "/" === t.charAt(0) ? e + t : t
                    }));
                    s || o.abort()
                }
            }
        }), t(document).ajaxComplete(function(e, a, n) {
            var i = [];
            t("link[rel=stylesheet]").each(function() {
                -1 === t.inArray(this.href, r.reloadableScripts) && (-1 == t.inArray(this.href, i) ? i.push(this.href) : t(this).remove())
            })
        })
    }
    var r = {
        reloadableScripts: [],
        clickableSelector: 'a, button, input[type="submit"], input[type="button"], input[type="reset"], input[type="image"]',
        changeableSelector: "select, input, textarea",
        getCsrfParam: function() {
            return t("meta[name=csrf-param]").attr("content")
        },
        getCsrfToken: function() {
            return t("meta[name=csrf-token]").attr("content")
        },
        setCsrfToken: function(e, a) {
            t("meta[name=csrf-param]").attr("content", e), t("meta[name=csrf-token]").attr("content", a)
        },
        refreshCsrfToken: function() {
            var e = r.getCsrfToken();
            e && t('form input[name="' + r.getCsrfParam() + '"]').val(e)
        },
        confirm: function(t, e, a) {
            confirm(t) ? !e || e() : !a || a()
        },
        handleAction: function(e, a) {
            var n, i = e.data("method"),
                o = e.closest("form"),
                c = e.attr("href"),
                s = e.data("params"),
                u = e.data("pjax"),
                p = !!e.data("pjax-push-state"),
                d = !!e.data("pjax-replace-state"),
                l = e.data("pjax-timeout"),
                f = e.data("pjax-scrollto"),
                m = e.data("pjax-push-redirect"),
                h = e.data("pjax-replace-redirect"),
                v = e.data("pjax-skip-outer-containers"),
                g = {};
            if (void 0 !== u && t.support.pjax && (n = e.data("pjax-container") ? e.data("pjax-container") : e.closest('[data-pjax-container=""]'), n.length || (n = t("body")), g = {
                    container: n,
                    push: p,
                    replace: d,
                    scrollTo: f,
                    pushRedirect: m,
                    replaceRedirect: h,
                    pjaxSkipOuterContainers: v,
                    timeout: l,
                    originalEvent: a,
                    originalTarget: e
                }), void 0 === i) return void(c && "#" != c ? void 0 !== u && t.support.pjax ? t.pjax.click(a, g) : window.location = c : e.is(":submit") && o.length && (void 0 !== u && t.support.pjax && o.on("submit", function(e) {
                t.pjax.submit(e, g)
            }), o.trigger("submit")));
            var j = !o.length;
            if (j) {
                c && c.match(/(^\/|:\/\/)/) || (c = window.location.href), o = t("<form/>", {
                    method: i,
                    action: c
                });
                var y = e.attr("target");
                if (y && o.attr("target", y), i.match(/(get|post)/i) || (o.append(t("<input/>", {
                        name: "_method",
                        value: i,
                        type: "hidden"
                    })), i = "POST"), !i.match(/(get|head|options)/i)) {
                    var b = r.getCsrfParam();
                    b && o.append(t("<input/>", {
                        name: b,
                        value: r.getCsrfToken(),
                        type: "hidden"
                    }))
                }
                o.hide().appendTo("body")
            }
            var x = o.data("yiiActiveForm");
            x && (x.submitObject = e), s && t.isPlainObject(s) && t.each(s, function(e, a) {
                o.append(t("<input/>").attr({
                    name: e,
                    value: a,
                    type: "hidden"
                }))
            });
            var k = o.attr("method");
            o.attr("method", i);
            var C = null;
            c && "#" != c && (C = o.attr("action"), o.attr("action", c)), void 0 !== u && t.support.pjax && o.on("submit", function(e) {
                t.pjax.submit(e, g)
            }), o.trigger("submit"), t.when(o.data("yiiSubmitFinalizePromise")).then(function() {
                null != C && o.attr("action", C), o.attr("method", k), s && t.isPlainObject(s) && t.each(s, function(e, a) {
                    t('input[name="' + e + '"]', o).remove()
                }), j && o.remove()
            })
        },
        getQueryParams: function(e) {
            var a = e.indexOf("?");
            if (0 > a) return {};
            var n, i, r = e.substring(a + 1).split("&"),
                o = {};
            for (i = 0; i < r.length; i++) {
                n = r[i].split("=");
                var c = decodeURIComponent(n[0]),
                    s = decodeURIComponent(n[1]);
                c.length && (void 0 !== o[c] ? (t.isArray(o[c]) || (o[c] = [o[c]]), o[c].push(s || "")) : o[c] = s || "")
            }
            return o
        },
        initModule: function(e) {
            (void 0 === e.isActive || e.isActive) && (t.isFunction(e.init) && e.init(), t.each(e, function() {
                t.isPlainObject(this) && r.initModule(this)
            }))
        },
        init: function() {
            a(), e(), i(), n()
        }
    };
    return r
}(jQuery), jQuery(document).ready(function() {
    yii.initModule(yii)
});
! function(e) {
    function t(i, a) {
        return this instanceof t ? (e.isPlainObject(i) ? a = i : (a = a || {}, a.alias = i), this.el = void 0, this.opts = e.extend(!0, {}, this.defaults, a), this.noMasksCache = a && void 0 !== a.definitions, this.userOptions = a || {}, this.events = {}, void n(this.opts.alias, a, this.opts)) : new t(i, a)
    }

    function i(e) {
        var t = document.createElement("input"),
            i = "on" + e,
            a = i in t;
        return a || (t.setAttribute(i, "return;"), a = "function" == typeof t[i]), t = null, a
    }

    function a(t, i) {
        var a = t.getAttribute("type"),
            n = "INPUT" === t.tagName && -1 !== e.inArray(a, i.supportsInputType) || t.isContentEditable || "TEXTAREA" === t.tagName;
        if (!n) {
            var r = document.createElement("input");
            r.setAttribute("type", a), n = "text" === r.type, r = null
        }
        return n
    }

    function n(t, i, a) {
        var r = a.aliases[t];
        return r ? (r.alias && n(r.alias, void 0, a), e.extend(!0, a, r), e.extend(!0, a, i), !0) : (null === a.mask && (a.mask = t), !1)
    }

    function r(t, i, a) {
        function r(e, i) {
            i = void 0 !== i ? i : t.getAttribute("data-inputmask-" + e), null !== i && ("string" == typeof i && (0 === e.indexOf("on") ? i = window[i] : "false" === i ? i = !1 : "true" === i && (i = !0)), a[e] = i)
        }
        var o, s, l, u, c = t.getAttribute("data-inputmask");
        if (c && "" !== c && (c = c.replace(new RegExp("'", "g"), '"'), s = JSON.parse("{" + c + "}")), s) {
            l = void 0;
            for (u in s)
                if ("alias" === u.toLowerCase()) {
                    l = s[u];
                    break
                }
        }
        r("alias", l), a.alias && n(a.alias, a, i);
        for (o in i) {
            if (s) {
                l = void 0;
                for (u in s)
                    if (u.toLowerCase() === o.toLowerCase()) {
                        l = s[u];
                        break
                    }
            }
            r(o, l)
        }
        return e.extend(!0, i, a), i
    }

    function o(i, a) {
        function n(t) {
            function a(e, t, i, a) {
                this.matches = [], this.isGroup = e || !1, this.isOptional = t || !1, this.isQuantifier = i || !1, this.isAlternator = a || !1, this.quantifier = {
                    min: 1,
                    max: 1
                }
            }

            function n(t, a, n) {
                var r = i.definitions[a];
                n = void 0 !== n ? n : t.matches.length;
                var o = t.matches[n - 1];
                if (r && !g) {
                    r.placeholder = e.isFunction(r.placeholder) ? r.placeholder(i) : r.placeholder;
                    for (var s = r.prevalidator, l = s ? s.length : 0, u = 1; u < r.cardinality; u++) {
                        var c = l >= u ? s[u - 1] : [],
                            f = c.validator,
                            p = c.cardinality;
                        t.matches.splice(n++, 0, {
                            fn: f ? "string" == typeof f ? new RegExp(f) : new function() {
                                this.test = f
                            } : new RegExp("."),
                            cardinality: p ? p : 1,
                            optionality: t.isOptional,
                            newBlockMarker: void 0 === o || o.def !== (r.definitionSymbol || a),
                            casing: r.casing,
                            def: r.definitionSymbol || a,
                            placeholder: r.placeholder,
                            mask: a
                        }), o = t.matches[n - 1]
                    }
                    t.matches.splice(n++, 0, {
                        fn: r.validator ? "string" == typeof r.validator ? new RegExp(r.validator) : new function() {
                            this.test = r.validator
                        } : new RegExp("."),
                        cardinality: r.cardinality,
                        optionality: t.isOptional,
                        newBlockMarker: void 0 === o || o.def !== (r.definitionSymbol || a),
                        casing: r.casing,
                        def: r.definitionSymbol || a,
                        placeholder: r.placeholder,
                        mask: a
                    })
                } else t.matches.splice(n++, 0, {
                    fn: null,
                    cardinality: 0,
                    optionality: t.isOptional,
                    newBlockMarker: void 0 === o || o.def !== a,
                    casing: null,
                    def: i.staticDefinitionSymbol || a,
                    placeholder: void 0 !== i.staticDefinitionSymbol ? a : void 0,
                    mask: a
                }), g = !1
            }

            function r(e, t) {
                e.isGroup && (e.isGroup = !1, n(e, i.groupmarker.start, 0), t !== !0 && n(e, i.groupmarker.end))
            }

            function o(e, t, i, a) {
                t.matches.length > 0 && (void 0 === a || a) && (i = t.matches[t.matches.length - 1], r(i)), n(t, e)
            }

            function s() {
                if (k.length > 0) {
                    if (p = k[k.length - 1], o(c, p, m, !p.isAlternator), p.isAlternator) {
                        d = k.pop();
                        for (var e = 0; e < d.matches.length; e++) d.matches[e].isGroup = !1;
                        k.length > 0 ? (p = k[k.length - 1], p.matches.push(d)) : y.matches.push(d)
                    }
                } else o(c, y, m)
            }

            function l(e) {
                function t(e) {
                    return e === i.optionalmarker.start ? e = i.optionalmarker.end : e === i.optionalmarker.end ? e = i.optionalmarker.start : e === i.groupmarker.start ? e = i.groupmarker.end : e === i.groupmarker.end && (e = i.groupmarker.start), e
                }
                e.matches = e.matches.reverse();
                for (var a in e.matches) {
                    var n = parseInt(a);
                    if (e.matches[a].isQuantifier && e.matches[n + 1] && e.matches[n + 1].isGroup) {
                        var r = e.matches[a];
                        e.matches.splice(a, 1), e.matches.splice(n + 1, 0, r)
                    }
                    void 0 !== e.matches[a].matches ? e.matches[a] = l(e.matches[a]) : e.matches[a] = t(e.matches[a])
                }
                return e
            }
            for (var u, c, f, p, d, m, v, h = /(?:[?*+]|\{[0-9\+\*]+(?:,[0-9\+\*]*)?\})|[^.?*+^${[]()|\\]+|./g, g = !1, y = new a, k = [], x = []; u = h.exec(t);)
                if (c = u[0], g) s();
                else switch (c.charAt(0)) {
                    case i.escapeChar:
                        g = !0;
                        break;
                    case i.optionalmarker.end:
                    case i.groupmarker.end:
                        if (f = k.pop(), void 0 !== f)
                            if (k.length > 0) {
                                if (p = k[k.length - 1], p.matches.push(f), p.isAlternator) {
                                    d = k.pop();
                                    for (var b = 0; b < d.matches.length; b++) d.matches[b].isGroup = !1;
                                    k.length > 0 ? (p = k[k.length - 1], p.matches.push(d)) : y.matches.push(d)
                                }
                            } else y.matches.push(f);
                        else s();
                        break;
                    case i.optionalmarker.start:
                        k.push(new a(!1, !0));
                        break;
                    case i.groupmarker.start:
                        k.push(new a(!0));
                        break;
                    case i.quantifiermarker.start:
                        var P = new a(!1, !1, !0);
                        c = c.replace(/[{}]/g, "");
                        var S = c.split(","),
                            w = isNaN(S[0]) ? S[0] : parseInt(S[0]),
                            A = 1 === S.length ? w : isNaN(S[1]) ? S[1] : parseInt(S[1]);
                        if (("*" === A || "+" === A) && (w = "*" === A ? 0 : 1), P.quantifier = {
                                min: w,
                                max: A
                            }, k.length > 0) {
                            var C = k[k.length - 1].matches;
                            u = C.pop(), u.isGroup || (v = new a(!0), v.matches.push(u), u = v), C.push(u), C.push(P)
                        } else u = y.matches.pop(), u.isGroup || (v = new a(!0), v.matches.push(u), u = v), y.matches.push(u), y.matches.push(P);
                        break;
                    case i.alternatormarker:
                        k.length > 0 ? (p = k[k.length - 1], m = p.matches.pop()) : m = y.matches.pop(), m.isAlternator ? k.push(m) : (d = new a(!1, !1, !1, !0), d.matches.push(m), k.push(d));
                        break;
                    default:
                        s()
                }
            for (; k.length > 0;) f = k.pop(), r(f, !0), y.matches.push(f);
            return y.matches.length > 0 && (m = y.matches[y.matches.length - 1], r(m), x.push(y)), i.numericInput && l(x[0]), x
        }

        function r(r, o) {
            if (null === r || "" === r) return void 0;
            if (1 === r.length && i.greedy === !1 && 0 !== i.repeat && (i.placeholder = ""), i.repeat > 0 || "*" === i.repeat || "+" === i.repeat) {
                var s = "*" === i.repeat ? 0 : "+" === i.repeat ? 1 : i.repeat;
                r = i.groupmarker.start + r + i.groupmarker.end + i.quantifiermarker.start + s + "," + i.repeat + i.quantifiermarker.end
            }
            var l;
            return void 0 === t.prototype.masksCache[r] || a === !0 ? (l = {
                mask: r,
                maskToken: n(r),
                validPositions: {},
                _buffer: void 0,
                buffer: void 0,
                tests: {},
                metadata: o
            }, a !== !0 && (t.prototype.masksCache[i.numericInput ? r.split("").reverse().join("") : r] = l, l = e.extend(!0, {}, t.prototype.masksCache[i.numericInput ? r.split("").reverse().join("") : r]))) : l = e.extend(!0, {}, t.prototype.masksCache[i.numericInput ? r.split("").reverse().join("") : r]), l
        }

        function o(e) {
            return e = e.toString()
        }
        var s;
        if (e.isFunction(i.mask) && (i.mask = i.mask(i)), e.isArray(i.mask)) {
            if (i.mask.length > 1) {
                i.keepStatic = null === i.keepStatic ? !0 : i.keepStatic;
                var l = "(";
                return e.each(i.numericInput ? i.mask.reverse() : i.mask, function(t, i) {
                    l.length > 1 && (l += ")|("), l += o(void 0 === i.mask || e.isFunction(i.mask) ? i : i.mask)
                }), l += ")", r(l, i.mask)
            }
            i.mask = i.mask.pop()
        }
        return i.mask && (s = void 0 === i.mask.mask || e.isFunction(i.mask.mask) ? r(o(i.mask), i.mask) : r(o(i.mask.mask), i.mask)), s
    }

    function s(n, r, o) {
        function l(e, t, i) {
            t = t || 0;
            var a, n, r, s = [],
                l = 0,
                u = m();
            do {
                if (e === !0 && p().validPositions[l]) {
                    var c = p().validPositions[l];
                    n = c.match, a = c.locator.slice(), s.push(i === !0 ? c.input : I(l, n))
                } else r = g(l, a, l - 1), n = r.match, a = r.locator.slice(), (o.jitMasking === !1 || u > l || isFinite(o.jitMasking) && o.jitMasking > l) && s.push(I(l, n));
                l++
            } while ((void 0 === pe || pe > l - 1) && null !== n.fn || null === n.fn && "" !== n.def || t >= l);
            return "" === s[s.length - 1] && s.pop(), s
        }

        function p() {
            return r
        }

        function d(e) {
            var t = p();
            t.buffer = void 0, e !== !0 && (t.tests = {}, t._buffer = void 0, t.validPositions = {}, t.p = 0)
        }

        function m(e, t) {
            var i = -1,
                a = -1,
                n = p().validPositions;
            void 0 === e && (e = -1);
            for (var r in n) {
                var o = parseInt(r);
                n[o] && (t || null !== n[o].match.fn) && (e >= o && (i = o), o >= e && (a = o))
            }
            return -1 !== i && e - i > 1 || e > a ? i : a
        }

        function v(t, i, a) {
            if (o.insertMode && void 0 !== p().validPositions[t] && void 0 === a) {
                var n, r = e.extend(!0, {}, p().validPositions),
                    s = m();
                for (n = t; s >= n; n++) delete p().validPositions[n];
                p().validPositions[t] = i;
                var l, u = !0,
                    c = p().validPositions;
                for (n = l = t; s >= n; n++) {
                    var f = r[n];
                    if (void 0 !== f)
                        for (var v = l, h = -1; v < j() && (null == f.match.fn && c[n] && (c[n].match.optionalQuantifier === !0 || c[n].match.optionality === !0) || null != f.match.fn);) {
                            if (null === f.match.fn || !o.keepStatic && c[n] && (void 0 !== c[n + 1] && b(n + 1, c[n].locator.slice(), n).length > 1 || void 0 !== c[n].alternation) ? v++ : v = _(l), k(v, f.match.def)) {
                                var g = E(v, f.input, !0, !0);
                                u = g !== !1, l = g.caret || g.insert ? m() : v;
                                break
                            }
                            if (u = null == f.match.fn, h === v) break;
                            h = v
                        }
                    if (!u) break
                }
                if (!u) return p().validPositions = e.extend(!0, {}, r), d(!0), !1
            } else p().validPositions[t] = i;
            return d(!0), !0
        }

        function h(e, t, i, a) {
            var n, r = e;
            for (p().p = e, n = r; t > n; n++) void 0 !== p().validPositions[n] && (i === !0 || o.canClearPosition(p(), n, m(), a, o) !== !1) && delete p().validPositions[n];
            for (n = r + 1; n <= m();) {
                for (; void 0 !== p().validPositions[r];) r++;
                var s = p().validPositions[r];
                if (r > n && (n = r + 1), void 0 === p().validPositions[n] && R(n) || void 0 !== s) n++;
                else {
                    var l = g(n);
                    k(r, l.match.def) ? E(r, l.input || I(n), !0) !== !1 && (delete p().validPositions[n], n++) : R(n) || (n++, r--), r++
                }
            }
            var u = m(),
                c = j();
            for (a !== !0 && i !== !0 && void 0 !== p().validPositions[u] && p().validPositions[u].input === o.radixPoint && delete p().validPositions[u], n = u + 1; c >= n; n++) p().validPositions[n] && delete p().validPositions[n];
            d(!0)
        }

        function g(e, t, i) {
            var a = p().validPositions[e];
            if (void 0 === a)
                for (var n = b(e, t, i), r = m(), s = p().validPositions[r] || b(0)[0], l = void 0 !== s.alternation ? s.locator[s.alternation].toString().split(",") : [], u = 0; u < n.length && (a = n[u], !(a.match && (o.greedy && a.match.optionalQuantifier !== !0 || (a.match.optionality === !1 || a.match.newBlockMarker === !1) && a.match.optionalQuantifier !== !0) && (void 0 === s.alternation || s.alternation !== a.alternation || void 0 !== a.locator[s.alternation] && C(a.locator[s.alternation].toString().split(","), l)))); u++);
            return a
        }

        function y(e) {
            return p().validPositions[e] ? p().validPositions[e].match : b(e)[0].match
        }

        function k(e, t) {
            for (var i = !1, a = b(e), n = 0; n < a.length; n++)
                if (a[n].match && a[n].match.def === t) {
                    i = !0;
                    break
                }
            return i
        }

        function x(t, i) {
            var a, n;
            return (p().tests[t] || p().validPositions[t]) && e.each(p().tests[t] || [p().validPositions[t]], function(e, t) {
                var r = t.alternation ? t.locator[t.alternation].toString().indexOf(i) : -1;
                (void 0 === n || n > r) && -1 !== r && (a = t, n = r)
            }), a
        }

        function b(t, i, a) {
            function n(i, a, r, s) {
                function u(r, s, m) {
                    function v(t, i) {
                        var a = 0 === e.inArray(t, i.matches);
                        return a || e.each(i.matches, function(e, n) {
                            return n.isQuantifier === !0 && (a = v(t, i.matches[e - 1])) ? !1 : void 0
                        }), a
                    }

                    function h(e, t) {
                        var i = x(e, t);
                        return i ? i.locator.slice(i.alternation + 1) : []
                    }
                    if (l > 1e4) throw "Inputmask: There is probably an error in your mask definition or in the code. Create an issue on github with an example of the mask you are using. " + p().mask;
                    if (l === t && void 0 === r.matches) return c.push({
                        match: r,
                        locator: s.reverse(),
                        cd: d
                    }), !0;
                    if (void 0 !== r.matches) {
                        if (r.isGroup && m !== r) {
                            if (r = u(i.matches[e.inArray(r, i.matches) + 1], s)) return !0
                        } else if (r.isOptional) {
                            var g = r;
                            if (r = n(r, a, s, m)) {
                                if (o = c[c.length - 1].match, !v(o, g)) return !0;
                                f = !0, l = t
                            }
                        } else if (r.isAlternator) {
                            var y, k = r,
                                b = [],
                                P = c.slice(),
                                S = s.length,
                                w = a.length > 0 ? a.shift() : -1;
                            if (-1 === w || "string" == typeof w) {
                                var A, C = l,
                                    E = a.slice(),
                                    R = [];
                                if ("string" == typeof w) R = w.split(",");
                                else
                                    for (A = 0; A < k.matches.length; A++) R.push(A);
                                for (var j = 0; j < R.length; j++) {
                                    if (A = parseInt(R[j]), c = [], a = h(l, A), r = u(k.matches[A] || i.matches[A], [A].concat(s), m) || r, r !== !0 && void 0 !== r && R[R.length - 1] < k.matches.length) {
                                        var _ = e.inArray(r, i.matches) + 1;
                                        i.matches.length > _ && (r = u(i.matches[_], [_].concat(s.slice(1, s.length)), m), r && (R.push(_.toString()), e.each(c, function(e, t) {
                                            t.alternation = s.length - 1
                                        })))
                                    }
                                    y = c.slice(), l = C, c = [];
                                    for (var M = 0; M < E.length; M++) a[M] = E[M];
                                    for (var F = 0; F < y.length; F++) {
                                        var O = y[F];
                                        O.alternation = O.alternation || S;
                                        for (var I = 0; I < b.length; I++) {
                                            var D = b[I];
                                            if (O.match.def === D.match.def && ("string" != typeof w || -1 !== e.inArray(O.locator[O.alternation].toString(), R))) {
                                                O.match.mask === D.match.mask && (y.splice(F, 1), F--), -1 === D.locator[O.alternation].toString().indexOf(O.locator[O.alternation]) && (D.locator[O.alternation] = D.locator[O.alternation] + "," + O.locator[O.alternation], D.alternation = O.alternation);
                                                break
                                            }
                                        }
                                    }
                                    b = b.concat(y)
                                }
                                "string" == typeof w && (b = e.map(b, function(t, i) {
                                    if (isFinite(i)) {
                                        var a, n = t.alternation,
                                            r = t.locator[n].toString().split(",");
                                        t.locator[n] = void 0, t.alternation = void 0;
                                        for (var o = 0; o < r.length; o++) a = -1 !== e.inArray(r[o], R), a && (void 0 !== t.locator[n] ? (t.locator[n] += ",", t.locator[n] += r[o]) : t.locator[n] = parseInt(r[o]), t.alternation = n);
                                        if (void 0 !== t.locator[n]) return t
                                    }
                                })), c = P.concat(b), l = t, f = c.length > 0
                            } else r = u(k.matches[w] || i.matches[w], [w].concat(s), m);
                            if (r) return !0
                        } else if (r.isQuantifier && m !== i.matches[e.inArray(r, i.matches) - 1])
                            for (var T = r, G = a.length > 0 ? a.shift() : 0; G < (isNaN(T.quantifier.max) ? G + 1 : T.quantifier.max) && t >= l; G++) {
                                var N = i.matches[e.inArray(T, i.matches) - 1];
                                if (r = u(N, [G].concat(s), N)) {
                                    if (o = c[c.length - 1].match, o.optionalQuantifier = G > T.quantifier.min - 1, v(o, N)) {
                                        if (G > T.quantifier.min - 1) {
                                            f = !0, l = t;
                                            break
                                        }
                                        return !0
                                    }
                                    return !0
                                }
                            } else if (r = n(r, a, s, m)) return !0
                    } else l++
                }
                for (var m = a.length > 0 ? a.shift() : 0; m < i.matches.length; m++)
                    if (i.matches[m].isQuantifier !== !0) {
                        var v = u(i.matches[m], [m].concat(r), s);
                        if (v && l === t) return v;
                        if (l > t) break
                    }
            }

            function r(e) {
                var t = e[0] || e;
                return t.locator.slice()
            }
            var o, s = p().maskToken,
                l = i ? a : 0,
                u = i || [0],
                c = [],
                f = !1,
                d = i ? i.join("") : "";
            if (t > -1) {
                if (void 0 === i) {
                    for (var m, v = t - 1; void 0 === (m = p().validPositions[v] || p().tests[v]) && v > -1;) v--;
                    void 0 !== m && v > -1 && (u = r(m), d = u.join(""), m = m[0] || m, l = v)
                }
                if (p().tests[t] && p().tests[t][0].cd === d) return p().tests[t];
                for (var h = u.shift(); h < s.length; h++) {
                    var g = n(s[h], u, [h]);
                    if (g && l === t || l > t) break
                }
            }
            return (0 === c.length || f) && c.push({
                match: {
                    fn: null,
                    cardinality: 0,
                    optionality: !0,
                    casing: null,
                    def: ""
                },
                locator: []
            }), p().tests[t] = e.extend(!0, [], c), p().tests[t]
        }

        function P() {
            return void 0 === p()._buffer && (p()._buffer = l(!1, 1)), p()._buffer
        }

        function S(e) {
            if (void 0 === p().buffer || e === !0) {
                if (e === !0)
                    for (var t in p().tests) void 0 === p().validPositions[t] && delete p().tests[t];
                p().buffer = l(!0, m(), !0)
            }
            return p().buffer
        }

        function w(e, t, i) {
            var a;
            if (i = i, e === !0) d(), e = 0, t = i.length;
            else
                for (a = e; t > a; a++) delete p().validPositions[a], delete p().tests[a];
            for (a = e; t > a; a++) d(!0), i[a] !== o.skipOptionalPartCharacter && E(a, i[a], !0, !0)
        }

        function A(e, t) {
            switch (t.casing) {
                case "upper":
                    e = e.toUpperCase();
                    break;
                case "lower":
                    e = e.toLowerCase()
            }
            return e
        }

        function C(t, i) {
            for (var a = o.greedy ? i : i.slice(0, 1), n = !1, r = 0; r < t.length; r++)
                if (-1 !== e.inArray(t[r], a)) {
                    n = !0;
                    break
                }
            return n
        }

        function E(t, i, a, n) {
            function r(t, i, a, n) {
                var r = !1;
                return e.each(b(t), function(s, l) {
                    for (var u = l.match, c = i ? 1 : 0, f = "", g = u.cardinality; g > c; g--) f += F(t - (g - 1));
                    if (i && (f += i), S(!0), r = null != u.fn ? u.fn.test(f, p(), t, a, o) : i !== u.def && i !== o.skipOptionalPartCharacter || "" === u.def ? !1 : {
                            c: u.placeholder || u.def,
                            pos: t
                        }, r !== !1) {
                        var y = void 0 !== r.c ? r.c : i;
                        y = y === o.skipOptionalPartCharacter && null === u.fn ? u.placeholder || u.def : y;
                        var k = t,
                            x = S();
                        if (void 0 !== r.remove && (e.isArray(r.remove) || (r.remove = [r.remove]), e.each(r.remove.sort(function(e, t) {
                                return t - e
                            }), function(e, t) {
                                h(t, t + 1, !0)
                            })), void 0 !== r.insert && (e.isArray(r.insert) || (r.insert = [r.insert]), e.each(r.insert.sort(function(e, t) {
                                return e - t
                            }), function(e, t) {
                                E(t.pos, t.c, !1, n)
                            })), r.refreshFromBuffer) {
                            var b = r.refreshFromBuffer;
                            if (a = !0, w(b === !0 ? b : b.start, b.end, x), void 0 === r.pos && void 0 === r.c) return r.pos = m(), !1;
                            if (k = void 0 !== r.pos ? r.pos : t, k !== t) return r = e.extend(r, E(k, y, !0, n)), !1
                        } else if (r !== !0 && void 0 !== r.pos && r.pos !== t && (k = r.pos, w(t, k, S().slice()), k !== t)) return r = e.extend(r, E(k, y, !0)), !1;
                        return r !== !0 && void 0 === r.pos && void 0 === r.c ? !1 : (s > 0 && d(!0), v(k, e.extend({}, l, {
                            input: A(y, u)
                        }), n) || (r = !1), !1)
                    }
                }), r
            }

            function s(t, i, a, n) {
                for (var r, s, l, u, c, f, v = e.extend(!0, {}, p().validPositions), h = e.extend(!0, {}, p().tests), y = m(); y >= 0 && (u = p().validPositions[y], !u || void 0 === u.alternation || (r = y, s = p().validPositions[r].alternation, g(r).locator[u.alternation] === u.locator[u.alternation])); y--);
                if (void 0 !== s) {
                    r = parseInt(r);
                    for (var k in p().validPositions)
                        if (k = parseInt(k), u = p().validPositions[k], k >= r && void 0 !== u.alternation) {
                            var b;
                            0 === r ? (b = [], e.each(p().tests[r], function(e, t) {
                                void 0 !== t.locator[s] && (b = b.concat(t.locator[s].toString().split(",")))
                            })) : b = p().validPositions[r].locator[s].toString().split(",");
                            var P = void 0 !== u.locator[s] ? u.locator[s] : b[0];
                            P.length > 0 && (P = P.split(",")[0]);
                            for (var S = 0; S < b.length; S++) {
                                var w = [],
                                    A = 0,
                                    C = 0;
                                if (P < b[S]) {
                                    for (var R, j, _ = k; _ >= 0; _--)
                                        if (R = p().validPositions[_], void 0 !== R) {
                                            var M = x(_, b[S]);
                                            p().validPositions[_].match.def !== M.match.def && (w.push(p().validPositions[_].input), p().validPositions[_] = M, p().validPositions[_].input = I(_), null === p().validPositions[_].match.fn && C++, R = M), j = R.locator[s], R.locator[s] = parseInt(b[S]);
                                            break
                                        }
                                    if (P !== R.locator[s]) {
                                        for (c = k + 1; c < m(void 0, !0) + 1; c++) f = p().validPositions[c], f && null != f.match.fn ? w.push(f.input) : t > c && A++, delete p().validPositions[c], delete p().tests[c];
                                        for (d(!0), o.keepStatic = !o.keepStatic, l = !0; w.length > 0;) {
                                            var F = w.shift();
                                            if (F !== o.skipOptionalPartCharacter && !(l = E(m(void 0, !0) + 1, F, !1, n))) break
                                        }
                                        if (R.alternation = s, R.locator[s] = j, l) {
                                            var O = m(t) + 1;
                                            for (c = k + 1; c < m() + 1; c++) f = p().validPositions[c], (void 0 === f || null == f.match.fn) && t > c && C++;
                                            t += C - A, l = E(t > O ? O : t, i, a, n)
                                        }
                                        if (o.keepStatic = !o.keepStatic, l) return l;
                                        d(), p().validPositions = e.extend(!0, {}, v), p().tests = e.extend(!0, {}, h)
                                    }
                                }
                            }
                            break
                        }
                }
                return !1
            }

            function l(t, i) {
                for (var a = p().validPositions[i], n = a.locator, r = n.length, o = t; i > o; o++)
                    if (void 0 === p().validPositions[o] && !R(o, !0)) {
                        var s = b(o),
                            l = s[0],
                            u = -1;
                        e.each(s, function(e, t) {
                            for (var i = 0; r > i && void 0 !== t.locator[i] && C(t.locator[i].toString().split(","), n[i].toString().split(",")); i++) i > u && (u = i, l = t)
                        }), v(o, e.extend({}, l, {
                            input: l.match.placeholder || l.match.def
                        }), !0)
                    }
            }
            a = a === !0;
            for (var u = S(), c = t - 1; c > -1 && !p().validPositions[c]; c--);
            for (c++; t > c; c++) void 0 === p().validPositions[c] && ((!R(c) || u[c] !== I(c)) && b(c).length > 1 || u[c] === o.radixPoint || "0" === u[c] && e.inArray(o.radixPoint, u) < c) && r(c, u[c], !0, n);
            var f = t,
                y = !1,
                k = e.extend(!0, {}, p().validPositions);
            if (f < j() && (y = r(f, i, a, n), (!a || n === !0) && y === !1)) {
                var P = p().validPositions[f];
                if (!P || null !== P.match.fn || P.match.def !== i && i !== o.skipOptionalPartCharacter) {
                    if ((o.insertMode || void 0 === p().validPositions[_(f)]) && !R(f, !0)) {
                        var M = g(f).match,
                            M = M.placeholder || M.def;
                        r(f, M, a, n);
                        for (var O = f + 1, D = _(f); D >= O; O++)
                            if (y = r(O, i, a, n), y !== !1) {
                                l(f, O), f = O;
                                break
                            }
                    }
                } else y = {
                    caret: _(f)
                }
            }
            if (y === !1 && o.keepStatic && (y = s(t, i, a, n)), y === !0 && (y = {
                    pos: f
                }), e.isFunction(o.postValidation) && y !== !1 && !a && n !== !0) {
                var T = o.postValidation(S(!0), y, o);
                if (T) {
                    if (T.refreshFromBuffer) {
                        var G = T.refreshFromBuffer;
                        w(G === !0 ? G : G.start, G.end, T.buffer), d(!0), y = T
                    }
                } else d(!0), p().validPositions = e.extend(!0, {}, k), y = !1
            }
            return y
        }

        function R(e, t) {
            var i;
            if (t ? (i = g(e).match, "" == i.def && (i = y(e))) : i = y(e), null != i.fn) return i.fn;
            if (t !== !0 && e > -1 && !o.keepStatic && void 0 === p().validPositions[e]) {
                var a = b(e);
                return a.length > 2
            }
            return !1
        }

        function j() {
            var e;
            pe = void 0 !== ce ? ce.maxLength : void 0, -1 === pe && (pe = void 0);
            var t, i = m(),
                a = p().validPositions[i],
                n = void 0 !== a ? a.locator.slice() : void 0;
            for (t = i + 1; void 0 === a || null !== a.match.fn || null === a.match.fn && "" !== a.match.def; t++) a = g(t, n, t - 1), n = a.locator.slice();
            var r = y(t - 1);
            return e = "" !== r.def ? t : t - 1, void 0 === pe || pe > e ? e : pe
        }

        function _(e, t) {
            var i = j();
            if (e >= i) return i;
            for (var a = e; ++a < i && (t === !0 && (y(a).newBlockMarker !== !0 || !R(a)) || t !== !0 && !R(a) && (o.nojumps !== !0 || o.nojumpsThreshold > a)););
            return a
        }

        function M(e, t) {
            var i = e;
            if (0 >= i) return 0;
            for (; --i > 0 && (t === !0 && y(i).newBlockMarker !== !0 || t !== !0 && !R(i)););
            return i
        }

        function F(e) {
            return void 0 === p().validPositions[e] ? I(e) : p().validPositions[e].input
        }

        function O(t, i, a, n, r) {
            if (n && e.isFunction(o.onBeforeWrite)) {
                var s = o.onBeforeWrite(n, i, a, o);
                if (s) {
                    if (s.refreshFromBuffer) {
                        var l = s.refreshFromBuffer;
                        w(l === !0 ? l : l.start, l.end, s.buffer || i), i = S(!0)
                    }
                    void 0 !== a && (a = void 0 !== s.caret ? s.caret : a)
                }
            }
            t.inputmask._valueSet(i.join("")), void 0 === a || void 0 !== n && "blur" === n.type || G(t, a), r === !0 && (he = !0, e(t).trigger("input"))
        }

        function I(e, t) {
            if (t = t || y(e), void 0 !== t.placeholder) return t.placeholder;
            if (null === t.fn) {
                if (e > -1 && !o.keepStatic && void 0 === p().validPositions[e]) {
                    var i, a = b(e),
                        n = 0;
                    if (a.length > 2)
                        for (var r = 0; r < a.length; r++)
                            if (a[r].match.optionality !== !0 && a[r].match.optionalQuantifier !== !0 && (null === a[r].match.fn || void 0 === i || a[r].match.fn.test(i.match.def, p(), e, !0, o) !== !1) && (n++, null === a[r].match.fn && (i = a[r]), n > 1)) return o.placeholder.charAt(e % o.placeholder.length)
                }
                return t.def
            }
            return o.placeholder.charAt(e % o.placeholder.length)
        }

        function D(i, a, n, r) {
            function s() {
                var e = !1,
                    t = P().slice(c, _(c)).join("").indexOf(u);
                if (-1 !== t && !R(c)) {
                    e = !0;
                    for (var i = P().slice(c, c + t), a = 0; a < i.length; a++)
                        if (" " !== i[a]) {
                            e = !1;
                            break
                        }
                }
                return e
            }
            var l = r.slice(),
                u = "",
                c = 0;
            if (d(), p().p = _(-1), !n)
                if (o.autoUnmask !== !0) {
                    var f = P().slice(0, _(-1)).join(""),
                        v = l.join("").match(new RegExp("^" + t.escapeRegex(f), "g"));
                    v && v.length > 0 && (l.splice(0, v.length * f.length), c = _(c))
                } else c = _(c);
            e.each(l, function(t, a) {
                if (void 0 !== a) {
                    var r = new e.Event("keypress");
                    r.which = a.charCodeAt(0), u += a;
                    var l = m(void 0, !0),
                        f = p().validPositions[l],
                        d = g(l + 1, f ? f.locator.slice() : void 0, l);
                    if (!s() || n || o.autoUnmask) {
                        var v = n ? t : null == d.match.fn && d.match.optionality && l + 1 < p().p ? l + 1 : p().p;
                        V.call(i, r, !0, !1, n, v), c = v + 1, u = ""
                    } else V.call(i, r, !0, !1, !0, l + 1)
                }
            }), a && O(i, S(), document.activeElement === i ? _(m(0)) : void 0, new e.Event("checkval"))
        }

        function T(t) {
            if (t && void 0 === t.inputmask) return t.value;
            var i = [],
                a = p().validPositions;
            for (var n in a) a[n].match && null != a[n].match.fn && i.push(a[n].input);
            var r = 0 === i.length ? null : (me ? i.reverse() : i).join("");
            if (null !== r) {
                var s = (me ? S().slice().reverse() : S()).join("");
                e.isFunction(o.onUnMask) && (r = o.onUnMask(s, r, o) || r)
            }
            return r
        }

        function G(e, t, i, a) {
            function n(e) {
                if (a !== !0 && me && "number" == typeof e && (!o.greedy || "" !== o.placeholder)) {
                    var t = S().join("").length;
                    e = t - e
                }
                return e
            }
            var r;
            if ("number" != typeof t) return e.setSelectionRange ? (t = e.selectionStart, i = e.selectionEnd) : window.getSelection ? (r = window.getSelection().getRangeAt(0), (r.commonAncestorContainer.parentNode === e || r.commonAncestorContainer === e) && (t = r.startOffset, i = r.endOffset)) : document.selection && document.selection.createRange && (r = document.selection.createRange(), t = 0 - r.duplicate().moveStart("character", -1e5), i = t + r.text.length), {
                begin: n(t),
                end: n(i)
            };
            t = n(t), i = n(i), i = "number" == typeof i ? i : t;
            var s = parseInt(((e.ownerDocument.defaultView || window).getComputedStyle ? (e.ownerDocument.defaultView || window).getComputedStyle(e, null) : e.currentStyle).fontSize) * i;
            if (e.scrollLeft = s > e.scrollWidth ? s : 0, u || o.insertMode !== !1 || t !== i || i++, e.setSelectionRange) e.selectionStart = t, e.selectionEnd = i;
            else if (window.getSelection) {
                if (r = document.createRange(), void 0 === e.firstChild || null === e.firstChild) {
                    var l = document.createTextNode("");
                    e.appendChild(l)
                }
                r.setStart(e.firstChild, t < e.inputmask._valueGet().length ? t : e.inputmask._valueGet().length), r.setEnd(e.firstChild, i < e.inputmask._valueGet().length ? i : e.inputmask._valueGet().length), r.collapse(!0);
                var c = window.getSelection();
                c.removeAllRanges(), c.addRange(r)
            } else e.createTextRange && (r = e.createTextRange(), r.collapse(!0), r.moveEnd("character", i), r.moveStart("character", t), r.select())
        }

        function N(t) {
            var i, a, n = S(),
                r = n.length,
                o = m(),
                s = {},
                l = p().validPositions[o],
                u = void 0 !== l ? l.locator.slice() : void 0;
            for (i = o + 1; i < n.length; i++) a = g(i, u, i - 1), u = a.locator.slice(), s[i] = e.extend(!0, {}, a);
            var c = l && void 0 !== l.alternation ? l.locator[l.alternation] : void 0;
            for (i = r - 1; i > o && (a = s[i], (a.match.optionality || a.match.optionalQuantifier || c && (c !== s[i].locator[l.alternation] && null != a.match.fn || null === a.match.fn && a.locator[l.alternation] && C(a.locator[l.alternation].toString().split(","), c.toString().split(",")) && "" !== b(i)[0].def)) && n[i] === I(i, a.match)); i--) r--;
            return t ? {
                l: r,
                def: s[r] ? s[r].match : void 0
            } : r
        }

        function B(e) {
            for (var t = N(), i = e.length - 1; i > t && !R(i); i--);
            return e.splice(t, i + 1 - t), e
        }

        function K(t) {
            if (e.isFunction(o.isComplete)) return o.isComplete(t, o);
            if ("*" === o.repeat) return void 0;
            var i = !1,
                a = N(!0),
                n = M(a.l);
            if (void 0 === a.def || a.def.newBlockMarker || a.def.optionality || a.def.optionalQuantifier) {
                i = !0;
                for (var r = 0; n >= r; r++) {
                    var s = g(r).match;
                    if (null !== s.fn && void 0 === p().validPositions[r] && s.optionality !== !0 && s.optionalQuantifier !== !0 || null === s.fn && t[r] !== I(r, s)) {
                        i = !1;
                        break
                    }
                }
            }
            return i
        }

        function L(e, t) {
            return me ? e - t > 1 || e - t === 1 && o.insertMode : t - e > 1 || t - e === 1 && o.insertMode
        }

        function H(t) {
            function i(t) {
                if (e.valHooks && (void 0 === e.valHooks[t] || e.valHooks[t].inputmaskpatch !== !0)) {
                    var i = e.valHooks[t] && e.valHooks[t].get ? e.valHooks[t].get : function(e) {
                            return e.value
                        },
                        a = e.valHooks[t] && e.valHooks[t].set ? e.valHooks[t].set : function(e, t) {
                            return e.value = t, e
                        };
                    e.valHooks[t] = {
                        get: function(e) {
                            if (e.inputmask) {
                                if (e.inputmask.opts.autoUnmask) return e.inputmask.unmaskedvalue();
                                var t = i(e),
                                    a = e.inputmask.maskset,
                                    n = a._buffer;
                                return n = n ? n.join("") : "", t !== n ? t : ""
                            }
                            return i(e)
                        },
                        set: function(t, i) {
                            var n, r = e(t);
                            return n = a(t, i), t.inputmask && r.trigger("setvalue"), n
                        },
                        inputmaskpatch: !0
                    }
                }
            }

            function a() {
                return this.inputmask ? this.inputmask.opts.autoUnmask ? this.inputmask.unmaskedvalue() : s.call(this) !== P().join("") ? document.activeElement === this && o.clearMaskOnLostFocus ? (me ? B(S().slice()).reverse() : B(S().slice())).join("") : s.call(this) : "" : s.call(this)
            }

            function n(t) {
                l.call(this, t), this.inputmask && e(this).trigger("setvalue")
            }

            function r(t) {
                xe.on(t, "mouseenter", function(t) {
                    var i = e(this),
                        a = this,
                        n = a.inputmask._valueGet();
                    n !== S().join("") && m() > 0 && i.trigger("setvalue")
                })
            }
            var s, l;
            t.inputmask.__valueGet || (Object.getOwnPropertyDescriptor && void 0 === t.value ? (s = function() {
                return this.textContent
            }, l = function(e) {
                this.textContent = e
            }, Object.defineProperty(t, "value", {
                get: a,
                set: n
            })) : document.__lookupGetter__ && t.__lookupGetter__("value") ? (s = t.__lookupGetter__("value"), l = t.__lookupSetter__("value"), t.__defineGetter__("value", a), t.__defineSetter__("value", n)) : (s = function() {
                return t.value
            }, l = function(e) {
                t.value = e
            }, i(t.type), r(t)), t.inputmask.__valueGet = s, t.inputmask._valueGet = function(e) {
                return me && e !== !0 ? s.call(this.el).split("").reverse().join("") : s.call(this.el)
            }, t.inputmask.__valueSet = l, t.inputmask._valueSet = function(e, t) {
                l.call(this.el, null === e || void 0 === e ? "" : t !== !0 && me ? e.split("").reverse().join("") : e)
            })
        }

        function U(i, a, n, r) {
            function s() {
                if (o.keepStatic) {
                    d(!0);
                    var t, a = [],
                        n = e.extend(!0, {}, p().validPositions);
                    for (t = m(); t >= 0; t--) {
                        var r = p().validPositions[t];
                        if (r && (null != r.match.fn && a.push(r.input), delete p().validPositions[t], void 0 !== r.alternation && r.locator[r.alternation] === g(t).locator[r.alternation])) break
                    }
                    if (t > -1)
                        for (; a.length > 0;) {
                            p().p = _(m());
                            var s = new e.Event("keypress");
                            s.which = a.pop().charCodeAt(0), V.call(i, s, !0, !1, !1, p().p)
                        } else p().validPositions = e.extend(!0, {}, n)
                }
            }
            if ((o.numericInput || me) && (a === t.keyCode.BACKSPACE ? a = t.keyCode.DELETE : a === t.keyCode.DELETE && (a = t.keyCode.BACKSPACE), me)) {
                var l = n.end;
                n.end = n.begin, n.begin = l
            }
            a === t.keyCode.BACKSPACE && (n.end - n.begin < 1 || o.insertMode === !1) ? (n.begin = M(n.begin), void 0 === p().validPositions[n.begin] || p().validPositions[n.begin].input !== o.groupSeparator && p().validPositions[n.begin].input !== o.radixPoint || n.begin--) : a === t.keyCode.DELETE && n.begin === n.end && (n.end = R(n.end) ? n.end + 1 : _(n.end) + 1, void 0 === p().validPositions[n.begin] || p().validPositions[n.begin].input !== o.groupSeparator && p().validPositions[n.begin].input !== o.radixPoint || n.end++), h(n.begin, n.end, !1, r), r !== !0 && s();
            var u = m(n.begin);
            u < n.begin ? (-1 === u && d(), p().p = _(u)) : r !== !0 && (p().p = n.begin)
        }

        function Q(a) {
            var n = this,
                r = e(n),
                s = a.keyCode,
                l = G(n);
            if (s === t.keyCode.BACKSPACE || s === t.keyCode.DELETE || f && 127 === s || a.ctrlKey && 88 === s && !i("cut")) a.preventDefault(), 88 === s && (le = S().join("")), U(n, s, l), O(n, S(), p().p, a, le !== S().join("")), n.inputmask._valueGet() === P().join("") ? r.trigger("cleared") : K(S()) === !0 && r.trigger("complete"), o.showTooltip && (n.title = o.tooltip || p().mask);
            else if (s === t.keyCode.END || s === t.keyCode.PAGE_DOWN) {
                a.preventDefault();
                var u = _(m());
                o.insertMode || u !== j() || a.shiftKey || u--, G(n, a.shiftKey ? l.begin : u, u, !0)
            } else s === t.keyCode.HOME && !a.shiftKey || s === t.keyCode.PAGE_UP ? (a.preventDefault(), G(n, 0, a.shiftKey ? l.begin : 0, !0)) : (o.undoOnEscape && s === t.keyCode.ESCAPE || 90 === s && a.ctrlKey) && a.altKey !== !0 ? (D(n, !0, !1, le.split("")), r.trigger("click")) : s !== t.keyCode.INSERT || a.shiftKey || a.ctrlKey ? o.tabThrough === !0 && s === t.keyCode.TAB ? (a.shiftKey === !0 ? (null === y(l.begin).fn && (l.begin = _(l.begin)), l.end = M(l.begin, !0), l.begin = M(l.end, !0)) : (l.begin = _(l.begin, !0), l.end = _(l.begin, !0), l.end < j() && l.end--), l.begin < j() && (a.preventDefault(), G(n, l.begin, l.end))) : o.insertMode !== !1 || a.shiftKey || (s === t.keyCode.RIGHT ? setTimeout(function() {
                var e = G(n);
                G(n, e.begin)
            }, 0) : s === t.keyCode.LEFT && setTimeout(function() {
                var e = G(n);
                G(n, me ? e.begin + 1 : e.begin - 1)
            }, 0)) : (o.insertMode = !o.insertMode, G(n, o.insertMode || l.begin !== j() ? l.begin : l.begin - 1));
            o.onKeyDown.call(this, a, S(), G(n).begin, o), ge = -1 !== e.inArray(s, o.ignorables)
        }

        function V(i, a, n, r, s) {
            var l = this,
                u = e(l),
                c = i.which || i.charCode || i.keyCode;
            if (!(a === !0 || i.ctrlKey && i.altKey) && (i.ctrlKey || i.metaKey || ge)) return c === t.keyCode.ENTER && le !== S().join("") && (le = S().join(""), setTimeout(function() {
                u.trigger("change")
            }, 0)), !0;
            if (c) {
                46 === c && i.shiftKey === !1 && "," === o.radixPoint && (c = 44);
                var f, m = a ? {
                        begin: s,
                        end: s
                    } : G(l),
                    h = String.fromCharCode(c),
                    g = L(m.begin, m.end);
                g && (p().undoPositions = e.extend(!0, {}, p().validPositions), U(l, t.keyCode.DELETE, m, !0), m.begin = p().p, o.insertMode || (o.insertMode = !o.insertMode, v(m.begin, r), o.insertMode = !o.insertMode), g = !o.multi), p().writeOutBuffer = !0;
                var y = me && !g ? m.end : m.begin,
                    k = E(y, h, r);
                if (k !== !1) {
                    if (k !== !0 && (y = void 0 !== k.pos ? k.pos : y, h = void 0 !== k.c ? k.c : h), d(!0), void 0 !== k.caret) f = k.caret;
                    else {
                        var x = p().validPositions;
                        f = !o.keepStatic && (void 0 !== x[y + 1] && b(y + 1, x[y].locator.slice(), y).length > 1 || void 0 !== x[y].alternation) ? y + 1 : _(y)
                    }
                    p().p = f
                }
                if (n !== !1) {
                    var P = this;
                    if (setTimeout(function() {
                            o.onKeyValidation.call(P, c, k, o)
                        }, 0), p().writeOutBuffer && k !== !1) {
                        var A = S();
                        O(l, A, o.numericInput && void 0 === k.caret ? M(f) : f, i, a !== !0), a !== !0 && setTimeout(function() {
                            K(A) === !0 && u.trigger("complete")
                        }, 0)
                    } else g && (p().buffer = void 0, p().validPositions = p().undoPositions)
                } else g && (p().buffer = void 0, p().validPositions = p().undoPositions);
                if (o.showTooltip && (l.title = o.tooltip || p().mask), a && e.isFunction(o.onBeforeWrite)) {
                    var C = o.onBeforeWrite(i, S(), f, o);
                    if (C && C.refreshFromBuffer) {
                        var R = C.refreshFromBuffer;
                        w(R === !0 ? R : R.start, R.end, C.buffer), d(!0), C.caret && (p().p = C.caret)
                    }
                }
                if (i.preventDefault(), a) return k
            }
        }

        function q(t) {
            var i = this,
                a = t.originalEvent || t,
                n = e(i),
                r = i.inputmask._valueGet(!0),
                s = G(i),
                l = r.substr(0, s.begin),
                u = r.substr(s.end, r.length);
            l === P().slice(0, s.begin).join("") && (l = ""), u === P().slice(s.end).join("") && (u = ""), window.clipboardData && window.clipboardData.getData ? r = l + window.clipboardData.getData("Text") + u : a.clipboardData && a.clipboardData.getData && (r = l + a.clipboardData.getData("text/plain") + u);
            var c = r;
            if (e.isFunction(o.onBeforePaste)) {
                if (c = o.onBeforePaste(r, o), c === !1) return t.preventDefault(), !1;
                c || (c = r)
            }
            return D(i, !1, !1, me ? c.split("").reverse() : c.toString().split("")), O(i, S(), void 0, t, !0), n.trigger("click"), K(S()) === !0 && n.trigger("complete"), !1
        }

        function z(i) {
            var a = this,
                n = a.inputmask._valueGet();
            if (S().join("") !== n) {
                var r = G(a);
                if (n = n.replace(new RegExp("(" + t.escapeRegex(P().join("")) + ")*"), ""), c) {
                    var o = n.replace(S().join(""), "");
                    if (1 === o.length) {
                        var s = new e.Event("keypress");
                        return s.which = o.charCodeAt(0), V.call(a, s, !0, !0, !1, p().validPositions[r.begin - 1] ? r.begin : r.begin - 1), !1
                    }
                }
                if (r.begin > n.length && (G(a, n.length), r = G(a)), S().length - n.length !== 1 || n.charAt(r.begin) === S()[r.begin] || n.charAt(r.begin + 1) === S()[r.begin] || R(r.begin)) {
                    for (var l = m() + 1, u = S().slice(l).join(""); null === n.match(t.escapeRegex(u) + "$");) u = u.slice(1);
                    n = n.replace(u, ""), n = n.split(""), D(a, !0, !1, n), K(S()) === !0 && e(a).trigger("complete")
                } else i.keyCode = t.keyCode.BACKSPACE, Q.call(a, i);
                i.preventDefault()
            }
        }

        function W(e) {
            var t = e.originalEvent || e;
            le = S().join(""), "" === ue || 0 !== t.data.indexOf(ue)
        }

        function Y(t) {
            var i = this,
                a = t.originalEvent || t,
                n = S().join("");
            0 === a.data.indexOf(ue) && (d(), p().p = _(-1));
            for (var r = a.data, s = 0; s < r.length; s++) {
                var l = new e.Event("keypress");
                l.which = r.charCodeAt(s), ve = !1, ge = !1, V.call(i, l, !0, !1, !1, p().p)
            }
            n !== S().join("") && setTimeout(function() {
                var e = p().p;
                O(i, S(), o.numericInput ? M(e) : e)
            }, 0), ue = a.data
        }

        function $(e) {}

        function Z(t) {
            var i = this,
                a = i.inputmask._valueGet();
            D(i, !0, !1, (e.isFunction(o.onBeforeMask) ? o.onBeforeMask(a, o) || a : a).split("")), le = S().join(""), (o.clearMaskOnLostFocus || o.clearIncomplete) && i.inputmask._valueGet() === P().join("") && i.inputmask._valueSet("")
        }

        function J(e) {
            var t = this,
                i = t.inputmask._valueGet();
            o.showMaskOnFocus && (!o.showMaskOnHover || o.showMaskOnHover && "" === i) ? t.inputmask._valueGet() !== S().join("") && O(t, S(), _(m())) : ye === !1 && G(t, _(m())), o.positionCaretOnTab === !0 && setTimeout(function() {
                G(t, _(m()))
            }, 0), le = S().join("")
        }

        function X(e) {
            var t = this;
            if (ye = !1, o.clearMaskOnLostFocus && document.activeElement !== t) {
                var i = S().slice(),
                    a = t.inputmask._valueGet();
                a !== t.getAttribute("placeholder") && "" !== a && (-1 === m() && a === P().join("") ? i = [] : B(i), O(t, i))
            }
        }

        function ee(t) {
            function i(t) {
                if (o.radixFocus && "" !== o.radixPoint) {
                    var i = p().validPositions;
                    if (void 0 === i[t] || i[t].input === I(t)) {
                        if (t < _(-1)) return !0;
                        var a = e.inArray(o.radixPoint, S());
                        if (-1 !== a) {
                            for (var n in i)
                                if (n > a && i[n].input !== I(n)) return !1;
                            return !0
                        }
                    }
                }
                return !1
            }
            var a = this;
            if (document.activeElement === a) {
                var n = G(a);
                if (n.begin === n.end)
                    if (i(n.begin)) G(a, o.numericInput ? _(e.inArray(o.radixPoint, S())) : e.inArray(o.radixPoint, S()));
                    else {
                        var r = n.begin,
                            s = m(r),
                            l = _(s);
                        l > r ? G(a, R(r) || R(r - 1) ? r : _(r)) : ((S()[l] !== I(l) || !R(l, !0) && y(l).def === I(l)) && (l = _(l)), G(a, l))
                    }
            }
        }

        function te(e) {
            var t = this;
            setTimeout(function() {
                G(t, 0, _(m()))
            }, 0)
        }

        function ie(i) {
            var a = this,
                n = e(a),
                r = G(a),
                s = i.originalEvent || i,
                l = window.clipboardData || s.clipboardData,
                u = me ? S().slice(r.end, r.begin) : S().slice(r.begin, r.end);
            l.setData("text", me ? u.reverse().join("") : u.join("")), document.execCommand && document.execCommand("copy"), U(a, t.keyCode.DELETE, r), O(a, S(), p().p, i, le !== S().join("")), a.inputmask._valueGet() === P().join("") && n.trigger("cleared"), o.showTooltip && (a.title = o.tooltip || p().mask)
        }

        function ae(t) {
            var i = e(this),
                a = this;
            if (a.inputmask) {
                var n = a.inputmask._valueGet(),
                    r = S().slice();
                le !== r.join("") && setTimeout(function() {
                    i.trigger("change"), le = r.join("")
                }, 0), "" !== n && (o.clearMaskOnLostFocus && (-1 === m() && n === P().join("") ? r = [] : B(r)), K(r) === !1 && (setTimeout(function() {
                    i.trigger("incomplete")
                }, 0), o.clearIncomplete && (d(), r = o.clearMaskOnLostFocus ? [] : P().slice())), O(a, r, void 0, t))
            }
        }

        function ne(e) {
            var t = this;
            ye = !0, document.activeElement !== t && o.showMaskOnHover && t.inputmask._valueGet() !== S().join("") && O(t, S())
        }

        function re(e) {
            le !== S().join("") && fe.trigger("change"), o.clearMaskOnLostFocus && -1 === m() && ce.inputmask._valueGet && ce.inputmask._valueGet() === P().join("") && ce.inputmask._valueSet(""), o.removeMaskOnSubmit && (ce.inputmask._valueSet(ce.inputmask.unmaskedvalue(), !0), setTimeout(function() {
                O(ce, S())
            }, 0))
        }

        function oe(e) {
            setTimeout(function() {
                fe.trigger("setvalue")
            }, 0)
        }

        function se(t) {
            if (ce = t, fe = e(ce), o.showTooltip && (ce.title = o.tooltip || p().mask), ("rtl" === ce.dir || o.rightAlign) && (ce.style.textAlign = "right"), ("rtl" === ce.dir || o.numericInput) && (ce.dir = "ltr", ce.removeAttribute("dir"), ce.inputmask.isRTL = !0, me = !0), xe.off(ce), H(ce), a(ce, o) && (xe.on(ce, "submit", re), xe.on(ce, "reset", oe), xe.on(ce, "mouseenter", ne), xe.on(ce, "blur", ae), xe.on(ce, "focus", J), xe.on(ce, "mouseleave", X), xe.on(ce, "click", ee), xe.on(ce, "dblclick", te), xe.on(ce, "paste", q), xe.on(ce, "dragdrop", q), xe.on(ce, "drop", q), xe.on(ce, "cut", ie), xe.on(ce, "complete", o.oncomplete), xe.on(ce, "incomplete", o.onincomplete), xe.on(ce, "cleared", o.oncleared), xe.on(ce, "keydown", Q), xe.on(ce, "keypress", V), xe.on(ce, "input", z), u || (xe.on(ce, "compositionstart", W), xe.on(ce, "compositionupdate", Y), xe.on(ce, "compositionend", $))), xe.on(ce, "setvalue", Z), "" !== ce.inputmask._valueGet() || o.clearMaskOnLostFocus === !1) {
                var i = e.isFunction(o.onBeforeMask) ? o.onBeforeMask(ce.inputmask._valueGet(), o) || ce.inputmask._valueGet() : ce.inputmask._valueGet();
                D(ce, !0, !1, i.split(""));
                var n = S().slice();
                le = n.join(""), K(n) === !1 && o.clearIncomplete && d(), o.clearMaskOnLostFocus && (n.join("") === P().join("") ? n = [] : B(n)), O(ce, n), document.activeElement === ce && G(ce, _(m()))
            }
        }
        var le, ue, ce, fe, pe, de, me = !1,
            ve = !1,
            he = !1,
            ge = !1,
            ye = !0,
            ke = !1,
            xe = {
                on: function(i, a, n) {
                    var r = function(i) {
                        if (void 0 === this.inputmask && "FORM" !== this.nodeName) {
                            var a = e.data(this, "_inputmask_opts");
                            a ? new t(a).mask(this) : xe.off(this)
                        } else {
                            if ("setvalue" === i.type || !(this.disabled || this.readOnly && !("keydown" === i.type && i.ctrlKey && 67 === i.keyCode || o.tabThrough === !1 && i.keyCode === t.keyCode.TAB))) {
                                switch (i.type) {
                                    case "input":
                                        if (he === !0 || ke === !0) return he = ke, i.preventDefault();
                                        break;
                                    case "keydown":
                                        ve = !1, he = !1, ke = !1;
                                        break;
                                    case "keypress":
                                        if (ve === !0) return i.preventDefault();
                                        ve = !0;
                                        break;
                                    case "compositionstart":
                                        ke = !0;
                                        break;
                                    case "compositionupdate":
                                        he = !0;
                                        break;
                                    case "compositionend":
                                        ke = !1;
                                        break;
                                    case "cut":
                                        he = !0;
                                        break;
                                    case "click":
                                        if (c) {
                                            var r = this;
                                            return setTimeout(function() {
                                                n.apply(r, arguments)
                                            }, 0), !1
                                        }
                                }
                                return n.apply(this, arguments)
                            }
                            i.preventDefault()
                        }
                    };
                    i.inputmask.events[a] = i.inputmask.events[a] || [], i.inputmask.events[a].push(r), -1 !== e.inArray(a, ["submit", "reset"]) ? null != i.form && e(i.form).on(a, r) : e(i).on(a, r)
                },
                off: function(t, i) {
                    if (t.inputmask && t.inputmask.events) {
                        var a;
                        i ? (a = [], a[i] = t.inputmask.events[i]) : a = t.inputmask.events, e.each(a, function(i, a) {
                            for (; a.length > 0;) {
                                var n = a.pop(); - 1 !== e.inArray(i, ["submit", "reset"]) ? null != t.form && e(t.form).off(i, n) : e(t).off(i, n)
                            }
                            delete t.inputmask.events[i]
                        })
                    }
                }
            };
        if (void 0 !== n) switch (n.action) {
            case "isComplete":
                return ce = n.el, K(S());
            case "unmaskedvalue":
                return ce = n.el, void 0 !== ce && void 0 !== ce.inputmask ? (r = ce.inputmask.maskset, o = ce.inputmask.opts, me = ce.inputmask.isRTL) : (de = n.value, o.numericInput && (me = !0), de = (e.isFunction(o.onBeforeMask) ? o.onBeforeMask(de, o) || de : de).split(""), D(void 0, !1, !1, me ? de.reverse() : de), e.isFunction(o.onBeforeWrite) && o.onBeforeWrite(void 0, S(), 0, o)), T(ce);
            case "mask":
                ce = n.el, r = ce.inputmask.maskset, o = ce.inputmask.opts, me = ce.inputmask.isRTL, le = S().join(""), se(ce);
                break;
            case "format":
                return o.numericInput && (me = !0), de = (e.isFunction(o.onBeforeMask) ? o.onBeforeMask(n.value, o) || n.value : n.value).split(""), D(void 0, !1, !1, me ? de.reverse() : de), e.isFunction(o.onBeforeWrite) && o.onBeforeWrite(void 0, S(), 0, o), n.metadata ? {
                    value: me ? S().slice().reverse().join("") : S().join(""),
                    metadata: s({
                        action: "getmetadata"
                    }, r, o)
                } : me ? S().slice().reverse().join("") : S().join("");
            case "isValid":
                o.numericInput && (me = !0), n.value ? (de = n.value.split(""), D(void 0, !1, !0, me ? de.reverse() : de)) : n.value = S().join("");
                for (var be = S(), Pe = N(), Se = be.length - 1; Se > Pe && !R(Se); Se--);
                return be.splice(Pe, Se + 1 - Pe), K(be) && n.value === S().join("");
            case "getemptymask":
                return P();
            case "remove":
                ce = n.el, fe = e(ce), r = ce.inputmask.maskset, o = ce.inputmask.opts, ce.inputmask._valueSet(T(ce)), xe.off(ce);
                var we;
                Object.getOwnPropertyDescriptor && (we = Object.getOwnPropertyDescriptor(ce, "value")), we && we.get ? ce.inputmask.__valueGet && Object.defineProperty(ce, "value", {
                    get: ce.inputmask.__valueGet,
                    set: ce.inputmask.__valueSet
                }) : document.__lookupGetter__ && ce.__lookupGetter__("value") && ce.inputmask.__valueGet && (ce.__defineGetter__("value", ce.inputmask.__valueGet), ce.__defineSetter__("value", ce.inputmask.__valueSet)), ce.inputmask = void 0;
                break;
            case "getmetadata":
                if (e.isArray(r.metadata)) {
                    for (var Ae, Ce = m(), Ee = Ce; Ee >= 0; Ee--)
                        if (p().validPositions[Ee] && void 0 !== p().validPositions[Ee].alternation) {
                            Ae = p().validPositions[Ee].alternation;
                            break
                        }
                    return void 0 !== Ae ? r.metadata[p().validPositions[Ce].locator[Ae]] : r.metadata[0]
                }
                return r.metadata
        }
    }
    t.prototype = {
        defaults: {
            placeholder: "_",
            optionalmarker: {
                start: "[",
                end: "]"
            },
            quantifiermarker: {
                start: "{",
                end: "}"
            },
            groupmarker: {
                start: "(",
                end: ")"
            },
            alternatormarker: "|",
            escapeChar: "\\",
            mask: null,
            oncomplete: e.noop,
            onincomplete: e.noop,
            oncleared: e.noop,
            repeat: 0,
            greedy: !0,
            autoUnmask: !1,
            removeMaskOnSubmit: !1,
            clearMaskOnLostFocus: !0,
            insertMode: !0,
            clearIncomplete: !1,
            aliases: {},
            alias: null,
            onKeyDown: e.noop,
            onBeforeMask: null,
            onBeforePaste: function(t, i) {
                return e.isFunction(i.onBeforeMask) ? i.onBeforeMask(t, i) : t
            },
            onBeforeWrite: null,
            onUnMask: null,
            showMaskOnFocus: !0,
            showMaskOnHover: !0,
            onKeyValidation: e.noop,
            skipOptionalPartCharacter: " ",
            showTooltip: !1,
            tooltip: void 0,
            numericInput: !1,
            rightAlign: !1,
            undoOnEscape: !0,
            radixPoint: "",
            groupSeparator: "",
            radixFocus: !1,
            nojumps: !1,
            nojumpsThreshold: 0,
            keepStatic: null,
            positionCaretOnTab: !1,
            tabThrough: !1,
            supportsInputType: ["text", "tel", "password"],
            definitions: {
                9: {
                    validator: "[0-9]",
                    cardinality: 1,
                    definitionSymbol: "*"
                },
                a: {
                    validator: "[A-Za-zА-яЁёÀ-ÿµ]",
                    cardinality: 1,
                    definitionSymbol: "*"
                },
                "*": {
                    validator: "[0-9A-Za-zА-яЁёÀ-ÿµ]",
                    cardinality: 1
                }
            },
            ignorables: [8, 9, 13, 19, 27, 33, 34, 35, 36, 37, 38, 39, 40, 45, 46, 93, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123],
            isComplete: null,
            canClearPosition: e.noop,
            postValidation: null,
            staticDefinitionSymbol: void 0,
            jitMasking: !1
        },
        masksCache: {},
        mask: function(i) {
            var a = this;
            return "string" == typeof i && (i = document.getElementById(i) || document.querySelectorAll(i)), i = i.nodeName ? [i] : i, e.each(i, function(i, n) {
                var l = e.extend(!0, {}, a.opts);
                r(n, l, e.extend(!0, {}, a.userOptions));
                var u = o(l, a.noMasksCache);
                void 0 !== u && (void 0 !== n.inputmask && n.inputmask.remove(), n.inputmask = new t, n.inputmask.opts = l, n.inputmask.noMasksCache = a.noMasksCache, n.inputmask.userOptions = e.extend(!0, {}, a.userOptions), n.inputmask.el = n, n.inputmask.maskset = u, n.inputmask.isRTL = !1, e.data(n, "_inputmask_opts", l), s({
                    action: "mask",
                    el: n
                }))
            }), i && i[0] ? i[0].inputmask || this : this
        },
        option: function(t) {
            return "string" == typeof t ? this.opts[t] : "object" == typeof t ? (e.extend(this.opts, t), e.extend(this.userOptions, t), this.el && (void 0 !== t.mask || void 0 !== t.alias ? this.mask(this.el) : (e.data(this.el, "_inputmask_opts", this.opts), s({
                action: "mask",
                el: this.el
            }))), this) : void 0
        },
        unmaskedvalue: function(e) {
            return s({
                action: "unmaskedvalue",
                el: this.el,
                value: e
            }, this.el && this.el.inputmask ? this.el.inputmask.maskset : o(this.opts, this.noMasksCache), this.opts)
        },
        remove: function() {
            return this.el ? (s({
                action: "remove",
                el: this.el
            }), this.el.inputmask = void 0, this.el) : void 0
        },
        getemptymask: function() {
            return s({
                action: "getemptymask"
            }, this.maskset || o(this.opts, this.noMasksCache), this.opts)
        },
        hasMaskedValue: function() {
            return !this.opts.autoUnmask
        },
        isComplete: function() {
            return s({
                action: "isComplete",
                el: this.el
            }, this.maskset || o(this.opts, this.noMasksCache), this.opts)
        },
        getmetadata: function() {
            return s({
                action: "getmetadata"
            }, this.maskset || o(this.opts, this.noMasksCache), this.opts)
        },
        isValid: function(e) {
            return s({
                action: "isValid",
                value: e
            }, this.maskset || o(this.opts, this.noMasksCache), this.opts)
        },
        format: function(e, t) {
            return s({
                action: "format",
                value: e,
                metadata: t
            }, this.maskset || o(this.opts, this.noMasksCache), this.opts)
        }
    }, t.extendDefaults = function(i) {
        e.extend(!0, t.prototype.defaults, i)
    }, t.extendDefinitions = function(i) {
        e.extend(!0, t.prototype.defaults.definitions, i)
    }, t.extendAliases = function(i) {
        e.extend(!0, t.prototype.defaults.aliases, i)
    }, t.format = function(e, i, a) {
        return t(i).format(e, a)
    }, t.unmask = function(e, i) {
        return t(i).unmaskedvalue(e)
    }, t.isValid = function(e, i) {
        return t(i).isValid(e)
    }, t.remove = function(t) {
        e.each(t, function(e, t) {
            t.inputmask && t.inputmask.remove()
        })
    }, t.escapeRegex = function(e) {
        var t = ["/", ".", "*", "+", "?", "|", "(", ")", "[", "]", "{", "}", "\\", "$", "^"];
        return e.replace(new RegExp("(\\" + t.join("|\\") + ")", "gim"), "\\$1")
    }, t.keyCode = {
        ALT: 18,
        BACKSPACE: 8,
        CAPS_LOCK: 20,
        COMMA: 188,
        COMMAND: 91,
        COMMAND_LEFT: 91,
        COMMAND_RIGHT: 93,
        CONTROL: 17,
        DELETE: 46,
        DOWN: 40,
        END: 35,
        ENTER: 13,
        ESCAPE: 27,
        HOME: 36,
        INSERT: 45,
        LEFT: 37,
        MENU: 93,
        NUMPAD_ADD: 107,
        NUMPAD_DECIMAL: 110,
        NUMPAD_DIVIDE: 111,
        NUMPAD_ENTER: 108,
        NUMPAD_MULTIPLY: 106,
        NUMPAD_SUBTRACT: 109,
        PAGE_DOWN: 34,
        PAGE_UP: 33,
        PERIOD: 190,
        RIGHT: 39,
        SHIFT: 16,
        SPACE: 32,
        TAB: 9,
        UP: 38,
        WINDOWS: 91
    };
    var l = navigator.userAgent,
        u = /mobile/i.test(l),
        c = /iemobile/i.test(l),
        f = /iphone/i.test(l) && !c;
    return /android.*safari.*/i.test(l) && !c, window.Inputmask = t, t
}(jQuery),
function(e, t) {
    return void 0 === e.fn.inputmask && (e.fn.inputmask = function(i, a) {
        var n, r = this[0];
        if (a = a || {}, "string" == typeof i) switch (i) {
            case "unmaskedvalue":
                return r && r.inputmask ? r.inputmask.unmaskedvalue() : e(r).val();
            case "remove":
                return this.each(function() {
                    this.inputmask && this.inputmask.remove()
                });
            case "getemptymask":
                return r && r.inputmask ? r.inputmask.getemptymask() : "";
            case "hasMaskedValue":
                return r && r.inputmask ? r.inputmask.hasMaskedValue() : !1;
            case "isComplete":
                return r && r.inputmask ? r.inputmask.isComplete() : !0;
            case "getmetadata":
                return r && r.inputmask ? r.inputmask.getmetadata() : void 0;
            case "setvalue":
                e(r).val(a), r && void 0 !== r.inputmask && e(r).triggerHandler("setvalue");
                break;
            case "option":
                if ("string" != typeof a) return this.each(function() {
                    return void 0 !== this.inputmask ? this.inputmask.option(a) : void 0
                });
                if (r && void 0 !== r.inputmask) return r.inputmask.option(a);
                break;
            default:
                return a.alias = i, n = new t(a), this.each(function() {
                    n.mask(this)
                })
        } else {
            if ("object" == typeof i) return n = new t(i), void 0 === i.mask && void 0 === i.alias ? this.each(function() {
                return void 0 !== this.inputmask ? this.inputmask.option(i) : void n.mask(this)
            }) : this.each(function() {
                n.mask(this)
            });
            if (void 0 === i) return this.each(function() {
                n = new t(a), n.mask(this)
            })
        }
    }), e.fn.inputmask
}(jQuery, Inputmask),
function(e, t) {
    return t.extendDefinitions({
        h: {
            validator: "[01][0-9]|2[0-3]",
            cardinality: 2,
            prevalidator: [{
                validator: "[0-2]",
                cardinality: 1
            }]
        },
        s: {
            validator: "[0-5][0-9]",
            cardinality: 2,
            prevalidator: [{
                validator: "[0-5]",
                cardinality: 1
            }]
        },
        d: {
            validator: "0[1-9]|[12][0-9]|3[01]",
            cardinality: 2,
            prevalidator: [{
                validator: "[0-3]",
                cardinality: 1
            }]
        },
        m: {
            validator: "0[1-9]|1[012]",
            cardinality: 2,
            prevalidator: [{
                validator: "[01]",
                cardinality: 1
            }]
        },
        y: {
            validator: "(19|20)\\d{2}",
            cardinality: 4,
            prevalidator: [{
                validator: "[12]",
                cardinality: 1
            }, {
                validator: "(19|20)",
                cardinality: 2
            }, {
                validator: "(19|20)\\d",
                cardinality: 3
            }]
        }
    }), t.extendAliases({
        "dd/mm/yyyy": {
            mask: "1/2/y",
            placeholder: "dd/mm/yyyy",
            regex: {
                val1pre: new RegExp("[0-3]"),
                val1: new RegExp("0[1-9]|[12][0-9]|3[01]"),
                val2pre: function(e) {
                    var i = t.escapeRegex.call(this, e);
                    return new RegExp("((0[1-9]|[12][0-9]|3[01])" + i + "[01])")
                },
                val2: function(e) {
                    var i = t.escapeRegex.call(this, e);
                    return new RegExp("((0[1-9]|[12][0-9])" + i + "(0[1-9]|1[012]))|(30" + i + "(0[13-9]|1[012]))|(31" + i + "(0[13578]|1[02]))")
                }
            },
            leapday: "29/02/",
            separator: "/",
            yearrange: {
                minyear: 1900,
                maxyear: 2099
            },
            isInYearRange: function(e, t, i) {
                if (isNaN(e)) return !1;
                var a = parseInt(e.concat(t.toString().slice(e.length))),
                    n = parseInt(e.concat(i.toString().slice(e.length)));
                return (isNaN(a) ? !1 : a >= t && i >= a) || (isNaN(n) ? !1 : n >= t && i >= n)
            },
            determinebaseyear: function(e, t, i) {
                var a = (new Date).getFullYear();
                if (e > a) return e;
                if (a > t) {
                    for (var n = t.toString().slice(0, 2), r = t.toString().slice(2, 4); n + i > t;) n--;
                    var o = n + r;
                    return e > o ? e : o
                }
                return a
            },
            onKeyDown: function(i, a, n, r) {
                var o = e(this);
                if (i.ctrlKey && i.keyCode === t.keyCode.RIGHT) {
                    var s = new Date;
                    o.val(s.getDate().toString() + (s.getMonth() + 1).toString() + s.getFullYear().toString()), o.trigger("setvalue")
                }
            },
            getFrontValue: function(e, t, i) {
                for (var a = 0, n = 0, r = 0; r < e.length && "2" !== e.charAt(r); r++) {
                    var o = i.definitions[e.charAt(r)];
                    o ? (a += n, n = o.cardinality) : n++
                }
                return t.join("").substr(a, n)
            },
            definitions: {
                1: {
                    validator: function(e, t, i, a, n) {
                        var r = n.regex.val1.test(e);
                        return a || r || e.charAt(1) !== n.separator && -1 === "-./".indexOf(e.charAt(1)) || !(r = n.regex.val1.test("0" + e.charAt(0))) ? r : (t.buffer[i - 1] = "0", {
                            refreshFromBuffer: {
                                start: i - 1,
                                end: i
                            },
                            pos: i,
                            c: e.charAt(0)
                        })
                    },
                    cardinality: 2,
                    prevalidator: [{
                        validator: function(e, t, i, a, n) {
                            var r = e;
                            isNaN(t.buffer[i + 1]) || (r += t.buffer[i + 1]);
                            var o = 1 === r.length ? n.regex.val1pre.test(r) : n.regex.val1.test(r);
                            if (!a && !o) {
                                if (o = n.regex.val1.test(e + "0")) return t.buffer[i] = e, t.buffer[++i] = "0", {
                                    pos: i,
                                    c: "0"
                                };
                                if (o = n.regex.val1.test("0" + e)) return t.buffer[i] = "0", i++, {
                                    pos: i
                                }
                            }
                            return o
                        },
                        cardinality: 1
                    }]
                },
                2: {
                    validator: function(e, t, i, a, n) {
                        var r = n.getFrontValue(t.mask, t.buffer, n); - 1 !== r.indexOf(n.placeholder[0]) && (r = "01" + n.separator);
                        var o = n.regex.val2(n.separator).test(r + e);
                        if (!a && !o && (e.charAt(1) === n.separator || -1 !== "-./".indexOf(e.charAt(1))) && (o = n.regex.val2(n.separator).test(r + "0" + e.charAt(0)))) return t.buffer[i - 1] = "0", {
                            refreshFromBuffer: {
                                start: i - 1,
                                end: i
                            },
                            pos: i,
                            c: e.charAt(0)
                        };
                        if (n.mask.indexOf("2") === n.mask.length - 1 && o) {
                            var s = t.buffer.join("").substr(4, 4) + e;
                            if (s !== n.leapday) return !0;
                            var l = parseInt(t.buffer.join("").substr(0, 4), 10);
                            return l % 4 === 0 ? l % 100 === 0 ? l % 400 === 0 ? !0 : !1 : !0 : !1
                        }
                        return o
                    },
                    cardinality: 2,
                    prevalidator: [{
                        validator: function(e, t, i, a, n) {
                            isNaN(t.buffer[i + 1]) || (e += t.buffer[i + 1]);
                            var r = n.getFrontValue(t.mask, t.buffer, n); - 1 !== r.indexOf(n.placeholder[0]) && (r = "01" + n.separator);
                            var o = 1 === e.length ? n.regex.val2pre(n.separator).test(r + e) : n.regex.val2(n.separator).test(r + e);
                            return a || o || !(o = n.regex.val2(n.separator).test(r + "0" + e)) ? o : (t.buffer[i] = "0", i++, {
                                pos: i
                            })
                        },
                        cardinality: 1
                    }]
                },
                y: {
                    validator: function(e, t, i, a, n) {
                        if (n.isInYearRange(e, n.yearrange.minyear, n.yearrange.maxyear)) {
                            var r = t.buffer.join("").substr(0, 6);
                            if (r !== n.leapday) return !0;
                            var o = parseInt(e, 10);
                            return o % 4 === 0 ? o % 100 === 0 ? o % 400 === 0 ? !0 : !1 : !0 : !1
                        }
                        return !1
                    },
                    cardinality: 4,
                    prevalidator: [{
                        validator: function(e, t, i, a, n) {
                            var r = n.isInYearRange(e, n.yearrange.minyear, n.yearrange.maxyear);
                            if (!a && !r) {
                                var o = n.determinebaseyear(n.yearrange.minyear, n.yearrange.maxyear, e + "0").toString().slice(0, 1);
                                if (r = n.isInYearRange(o + e, n.yearrange.minyear, n.yearrange.maxyear)) return t.buffer[i++] = o.charAt(0), {
                                    pos: i
                                };
                                if (o = n.determinebaseyear(n.yearrange.minyear, n.yearrange.maxyear, e + "0").toString().slice(0, 2), r = n.isInYearRange(o + e, n.yearrange.minyear, n.yearrange.maxyear)) return t.buffer[i++] = o.charAt(0), t.buffer[i++] = o.charAt(1), {
                                    pos: i
                                }
                            }
                            return r
                        },
                        cardinality: 1
                    }, {
                        validator: function(e, t, i, a, n) {
                            var r = n.isInYearRange(e, n.yearrange.minyear, n.yearrange.maxyear);
                            if (!a && !r) {
                                var o = n.determinebaseyear(n.yearrange.minyear, n.yearrange.maxyear, e).toString().slice(0, 2);
                                if (r = n.isInYearRange(e[0] + o[1] + e[1], n.yearrange.minyear, n.yearrange.maxyear)) return t.buffer[i++] = o.charAt(1), {
                                    pos: i
                                };
                                if (o = n.determinebaseyear(n.yearrange.minyear, n.yearrange.maxyear, e).toString().slice(0, 2), n.isInYearRange(o + e, n.yearrange.minyear, n.yearrange.maxyear)) {
                                    var s = t.buffer.join("").substr(0, 6);
                                    if (s !== n.leapday) r = !0;
                                    else {
                                        var l = parseInt(e, 10);
                                        r = l % 4 === 0 ? l % 100 === 0 ? l % 400 === 0 ? !0 : !1 : !0 : !1
                                    }
                                } else r = !1;
                                if (r) return t.buffer[i - 1] = o.charAt(0), t.buffer[i++] = o.charAt(1), t.buffer[i++] = e.charAt(0), {
                                    refreshFromBuffer: {
                                        start: i - 3,
                                        end: i
                                    },
                                    pos: i
                                }
                            }
                            return r
                        },
                        cardinality: 2
                    }, {
                        validator: function(e, t, i, a, n) {
                            return n.isInYearRange(e, n.yearrange.minyear, n.yearrange.maxyear)
                        },
                        cardinality: 3
                    }]
                }
            },
            insertMode: !1,
            autoUnmask: !1
        },
        "mm/dd/yyyy": {
            placeholder: "mm/dd/yyyy",
            alias: "dd/mm/yyyy",
            regex: {
                val2pre: function(e) {
                    var i = t.escapeRegex.call(this, e);
                    return new RegExp("((0[13-9]|1[012])" + i + "[0-3])|(02" + i + "[0-2])")
                },
                val2: function(e) {
                    var i = t.escapeRegex.call(this, e);
                    return new RegExp("((0[1-9]|1[012])" + i + "(0[1-9]|[12][0-9]))|((0[13-9]|1[012])" + i + "30)|((0[13578]|1[02])" + i + "31)")
                },
                val1pre: new RegExp("[01]"),
                val1: new RegExp("0[1-9]|1[012]")
            },
            leapday: "02/29/",
            onKeyDown: function(i, a, n, r) {
                var o = e(this);
                if (i.ctrlKey && i.keyCode === t.keyCode.RIGHT) {
                    var s = new Date;
                    o.val((s.getMonth() + 1).toString() + s.getDate().toString() + s.getFullYear().toString()), o.trigger("setvalue")
                }
            }
        },
        "yyyy/mm/dd": {
            mask: "y/1/2",
            placeholder: "yyyy/mm/dd",
            alias: "mm/dd/yyyy",
            leapday: "/02/29",
            onKeyDown: function(i, a, n, r) {
                var o = e(this);
                if (i.ctrlKey && i.keyCode === t.keyCode.RIGHT) {
                    var s = new Date;
                    o.val(s.getFullYear().toString() + (s.getMonth() + 1).toString() + s.getDate().toString()), o.trigger("setvalue")
                }
            }
        },
        "dd.mm.yyyy": {
            mask: "1.2.y",
            placeholder: "dd.mm.yyyy",
            leapday: "29.02.",
            separator: ".",
            alias: "dd/mm/yyyy"
        },
        "dd-mm-yyyy": {
            mask: "1-2-y",
            placeholder: "dd-mm-yyyy",
            leapday: "29-02-",
            separator: "-",
            alias: "dd/mm/yyyy"
        },
        "mm.dd.yyyy": {
            mask: "1.2.y",
            placeholder: "mm.dd.yyyy",
            leapday: "02.29.",
            separator: ".",
            alias: "mm/dd/yyyy"
        },
        "mm-dd-yyyy": {
            mask: "1-2-y",
            placeholder: "mm-dd-yyyy",
            leapday: "02-29-",
            separator: "-",
            alias: "mm/dd/yyyy"
        },
        "yyyy.mm.dd": {
            mask: "y.1.2",
            placeholder: "yyyy.mm.dd",
            leapday: ".02.29",
            separator: ".",
            alias: "yyyy/mm/dd"
        },
        "yyyy-mm-dd": {
            mask: "y-1-2",
            placeholder: "yyyy-mm-dd",
            leapday: "-02-29",
            separator: "-",
            alias: "yyyy/mm/dd"
        },
        datetime: {
            mask: "1/2/y h:s",
            placeholder: "dd/mm/yyyy hh:mm",
            alias: "dd/mm/yyyy",
            regex: {
                hrspre: new RegExp("[012]"),
                hrs24: new RegExp("2[0-4]|1[3-9]"),
                hrs: new RegExp("[01][0-9]|2[0-4]"),
                ampm: new RegExp("^[a|p|A|P][m|M]"),
                mspre: new RegExp("[0-5]"),
                ms: new RegExp("[0-5][0-9]")
            },
            timeseparator: ":",
            hourFormat: "24",
            definitions: {
                h: {
                    validator: function(e, t, i, a, n) {
                        if ("24" === n.hourFormat && 24 === parseInt(e, 10)) return t.buffer[i - 1] = "0", t.buffer[i] = "0", {
                            refreshFromBuffer: {
                                start: i - 1,
                                end: i
                            },
                            c: "0"
                        };
                        var r = n.regex.hrs.test(e);
                        if (!a && !r && (e.charAt(1) === n.timeseparator || -1 !== "-.:".indexOf(e.charAt(1))) && (r = n.regex.hrs.test("0" + e.charAt(0)))) return t.buffer[i - 1] = "0", t.buffer[i] = e.charAt(0), i++, {
                            refreshFromBuffer: {
                                start: i - 2,
                                end: i
                            },
                            pos: i,
                            c: n.timeseparator
                        };
                        if (r && "24" !== n.hourFormat && n.regex.hrs24.test(e)) {
                            var o = parseInt(e, 10);
                            return 24 === o ? (t.buffer[i + 5] = "a", t.buffer[i + 6] = "m") : (t.buffer[i + 5] = "p", t.buffer[i + 6] = "m"), o -= 12, 10 > o ? (t.buffer[i] = o.toString(), t.buffer[i - 1] = "0") : (t.buffer[i] = o.toString().charAt(1), t.buffer[i - 1] = o.toString().charAt(0)), {
                                refreshFromBuffer: {
                                    start: i - 1,
                                    end: i + 6
                                },
                                c: t.buffer[i]
                            }
                        }
                        return r
                    },
                    cardinality: 2,
                    prevalidator: [{
                        validator: function(e, t, i, a, n) {
                            var r = n.regex.hrspre.test(e);
                            return a || r || !(r = n.regex.hrs.test("0" + e)) ? r : (t.buffer[i] = "0", i++, {
                                pos: i
                            })
                        },
                        cardinality: 1
                    }]
                },
                s: {
                    validator: "[0-5][0-9]",
                    cardinality: 2,
                    prevalidator: [{
                        validator: function(e, t, i, a, n) {
                            var r = n.regex.mspre.test(e);
                            return a || r || !(r = n.regex.ms.test("0" + e)) ? r : (t.buffer[i] = "0", i++, {
                                pos: i
                            })
                        },
                        cardinality: 1
                    }]
                },
                t: {
                    validator: function(e, t, i, a, n) {
                        return n.regex.ampm.test(e + "m")
                    },
                    casing: "lower",
                    cardinality: 1
                }
            },
            insertMode: !1,
            autoUnmask: !1
        },
        datetime12: {
            mask: "1/2/y h:s t\\m",
            placeholder: "dd/mm/yyyy hh:mm xm",
            alias: "datetime",
            hourFormat: "12"
        },
        "mm/dd/yyyy hh:mm xm": {
            mask: "1/2/y h:s t\\m",
            placeholder: "mm/dd/yyyy hh:mm xm",
            alias: "datetime12",
            regex: {
                val2pre: function(e) {
                    var i = t.escapeRegex.call(this, e);
                    return new RegExp("((0[13-9]|1[012])" + i + "[0-3])|(02" + i + "[0-2])")
                },
                val2: function(e) {
                    var i = t.escapeRegex.call(this, e);
                    return new RegExp("((0[1-9]|1[012])" + i + "(0[1-9]|[12][0-9]))|((0[13-9]|1[012])" + i + "30)|((0[13578]|1[02])" + i + "31)")
                },
                val1pre: new RegExp("[01]"),
                val1: new RegExp("0[1-9]|1[012]")
            },
            leapday: "02/29/",
            onKeyDown: function(i, a, n, r) {
                var o = e(this);
                if (i.ctrlKey && i.keyCode === t.keyCode.RIGHT) {
                    var s = new Date;
                    o.val((s.getMonth() + 1).toString() + s.getDate().toString() + s.getFullYear().toString()), o.trigger("setvalue")
                }
            }
        },
        "hh:mm t": {
            mask: "h:s t\\m",
            placeholder: "hh:mm xm",
            alias: "datetime",
            hourFormat: "12"
        },
        "h:s t": {
            mask: "h:s t\\m",
            placeholder: "hh:mm xm",
            alias: "datetime",
            hourFormat: "12"
        },
        "hh:mm:ss": {
            mask: "h:s:s",
            placeholder: "hh:mm:ss",
            alias: "datetime",
            autoUnmask: !1
        },
        "hh:mm": {
            mask: "h:s",
            placeholder: "hh:mm",
            alias: "datetime",
            autoUnmask: !1
        },
        date: {
            alias: "dd/mm/yyyy"
        },
        "mm/yyyy": {
            mask: "1/y",
            placeholder: "mm/yyyy",
            leapday: "donotuse",
            separator: "/",
            alias: "mm/dd/yyyy"
        },
        shamsi: {
            regex: {
                val2pre: function(e) {
                    var i = t.escapeRegex.call(this, e);
                    return new RegExp("((0[1-9]|1[012])" + i + "[0-3])")
                },
                val2: function(e) {
                    var i = t.escapeRegex.call(this, e);
                    return new RegExp("((0[1-9]|1[012])" + i + "(0[1-9]|[12][0-9]))|((0[1-9]|1[012])" + i + "30)|((0[1-6])" + i + "31)")
                },
                val1pre: new RegExp("[01]"),
                val1: new RegExp("0[1-9]|1[012]")
            },
            yearrange: {
                minyear: 1300,
                maxyear: 1499
            },
            mask: "y/1/2",
            leapday: "/12/30",
            placeholder: "yyyy/mm/dd",
            alias: "mm/dd/yyyy",
            clearIncomplete: !0
        }
    }), t
}(jQuery, Inputmask),
function(e, t) {
    return t.extendDefinitions({
        A: {
            validator: "[A-Za-zА-яЁёÀ-ÿµ]",
            cardinality: 1,
            casing: "upper"
        },
        "&": {
            validator: "[0-9A-Za-zА-яЁёÀ-ÿµ]",
            cardinality: 1,
            casing: "upper"
        },
        "#": {
            validator: "[0-9A-Fa-f]",
            cardinality: 1,
            casing: "upper"
        }
    }), t.extendAliases({
        url: {
            definitions: {
                i: {
                    validator: ".",
                    cardinality: 1
                }
            },
            mask: "(\\http://)|(\\http\\s://)|(ftp://)|(ftp\\s://)i{+}",
            insertMode: !1,
            autoUnmask: !1
        },
        ip: {
            mask: "i[i[i]].i[i[i]].i[i[i]].i[i[i]]",
            definitions: {
                i: {
                    validator: function(e, t, i, a, n) {
                        return i - 1 > -1 && "." !== t.buffer[i - 1] ? (e = t.buffer[i - 1] + e, e = i - 2 > -1 && "." !== t.buffer[i - 2] ? t.buffer[i - 2] + e : "0" + e) : e = "00" + e, new RegExp("25[0-5]|2[0-4][0-9]|[01][0-9][0-9]").test(e)
                    },
                    cardinality: 1
                }
            },
            onUnMask: function(e, t, i) {
                return e
            }
        },
        email: {
            mask: "*{1,64}[.*{1,64}][.*{1,64}][.*{1,64}]@*{1,64}[.*{2,64}][.*{2,6}][.*{1,2}]",
            greedy: !1,
            onBeforePaste: function(e, t) {
                return e = e.toLowerCase(), e.replace("mailto:", "")
            },
            definitions: {
                "*": {
                    validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~-]",
                    cardinality: 1,
                    casing: "lower"
                }
            },
            onUnMask: function(e, t, i) {
                return e
            }
        },
        mac: {
            mask: "##:##:##:##:##:##"
        }
    }), t
}(jQuery, Inputmask),
function(e, t) {
    return t.extendAliases({
        numeric: {
            mask: function(e) {
                function t(t) {
                    for (var i = "", a = 0; a < t.length; a++) i += e.definitions[t.charAt(a)] ? "\\" + t.charAt(a) : t.charAt(a);
                    return i
                }
                if (0 !== e.repeat && isNaN(e.integerDigits) && (e.integerDigits = e.repeat), e.repeat = 0, e.groupSeparator === e.radixPoint && ("." === e.radixPoint ? e.groupSeparator = "," : "," === e.radixPoint ? e.groupSeparator = "." : e.groupSeparator = ""), " " === e.groupSeparator && (e.skipOptionalPartCharacter = void 0), e.autoGroup = e.autoGroup && "" !== e.groupSeparator, e.autoGroup && ("string" == typeof e.groupSize && isFinite(e.groupSize) && (e.groupSize = parseInt(e.groupSize)), isFinite(e.integerDigits))) {
                    var i = Math.floor(e.integerDigits / e.groupSize),
                        a = e.integerDigits % e.groupSize;
                    e.integerDigits = parseInt(e.integerDigits) + (0 === a ? i - 1 : i), e.integerDigits < 1 && (e.integerDigits = "*")
                }
                e.placeholder.length > 1 && (e.placeholder = e.placeholder.charAt(0)), e.radixFocus = e.radixFocus && "" !== e.placeholder && e.integerOptional === !0, e.definitions[";"] = e.definitions["~"], e.definitions[";"].definitionSymbol = "~", 1 == e.numericInput && (e.radixFocus = !1, e.digitsOptional = !1, isNaN(e.digits) && (e.digits = 2), e.decimalProtect = !1);
                var n = t(e.prefix);
                return n += "[+]", n += e.integerOptional === !0 ? "~{1," + e.integerDigits + "}" : "~{" + e.integerDigits + "}", void 0 !== e.digits && (isNaN(e.digits) || parseInt(e.digits) > 0) && (n += e.digitsOptional ? "[" + (e.decimalProtect ? ":" : e.radixPoint) + ";{1," + e.digits + "}]" : (e.decimalProtect ? ":" : e.radixPoint) + ";{" + e.digits + "}"), "" !== e.negationSymbol.back && (n += "[-]"), n += t(e.suffix), e.greedy = !1, n
            },
            placeholder: "",
            greedy: !1,
            digits: "*",
            digitsOptional: !0,
            radixPoint: ".",
            radixFocus: !0,
            groupSize: 3,
            groupSeparator: "",
            autoGroup: !1,
            allowPlus: !0,
            allowMinus: !0,
            negationSymbol: {
                front: "-",
                back: ""
            },
            integerDigits: "+",
            integerOptional: !0,
            prefix: "",
            suffix: "",
            rightAlign: !0,
            decimalProtect: !0,
            min: null,
            max: null,
            step: 1,
            insertMode: !0,
            autoUnmask: !1,
            unmaskAsNumber: !1,
            postFormat: function(i, a, n, r) {
                r.numericInput === !0 && (i = i.reverse(), isFinite(a) && (a = i.join("").length - a - 1));
                var o, s, l = !1;
                i.length >= r.suffix.length && i.join("").indexOf(r.suffix) === i.length - r.suffix.length && (i.length = i.length - r.suffix.length, l = !0), a = a >= i.length ? i.length - 1 : a < r.prefix.length ? r.prefix.length : a;
                var u = !1,
                    c = i[a];
                if ("" === r.groupSeparator || r.numericInput !== !0 && -1 !== e.inArray(r.radixPoint, i) && a > e.inArray(r.radixPoint, i) || new RegExp("[" + t.escapeRegex(r.negationSymbol.front) + "+]").test(c)) {
                    if (l)
                        for (o = 0, s = r.suffix.length; s > o; o++) i.push(r.suffix.charAt(o));
                    return {
                        pos: a
                    }
                }
                var f = i.slice();
                c === r.groupSeparator && (f.splice(a--, 1), c = f[a]), n ? c !== r.radixPoint && (f[a] = "?") : f.splice(a, 0, "?");
                var p = f.join(""),
                    d = p;
                if (p.length > 0 && r.autoGroup || n && -1 !== p.indexOf(r.groupSeparator)) {
                    var m = t.escapeRegex(r.groupSeparator);
                    u = 0 === p.indexOf(r.groupSeparator), p = p.replace(new RegExp(m, "g"), "");
                    var v = p.split(r.radixPoint);
                    if (p = "" === r.radixPoint ? p : v[0], p !== r.prefix + "?0" && p.length >= r.groupSize + r.prefix.length)
                        for (var h = new RegExp("([-+]?[\\d?]+)([\\d?]{" + r.groupSize + "})"); h.test(p);) p = p.replace(h, "$1" + r.groupSeparator + "$2"), p = p.replace(r.groupSeparator + r.groupSeparator, r.groupSeparator);
                    "" !== r.radixPoint && v.length > 1 && (p += r.radixPoint + v[1])
                }
                for (u = d !== p, i.length = p.length, o = 0, s = p.length; s > o; o++) i[o] = p.charAt(o);
                var g = e.inArray("?", i);
                if (-1 === g && c === r.radixPoint && (g = e.inArray(r.radixPoint, i)), n ? i[g] = c : i.splice(g, 1), !u && l)
                    for (o = 0, s = r.suffix.length; s > o; o++) i.push(r.suffix.charAt(o));
                return g = r.numericInput && isFinite(a) ? i.join("").length - g - 1 : g, r.numericInput && (i = i.reverse(), e.inArray(r.radixPoint, i) < g && i.join("").length - r.suffix.length !== g && (g -= 1)), {
                    pos: g,
                    refreshFromBuffer: u,
                    buffer: i
                }
            },
            onBeforeWrite: function(i, a, n, r) {
                if (i && ("blur" === i.type || "checkval" === i.type)) {
                    var o = a.join(""),
                        s = o.replace(r.prefix, "");
                    if (s = s.replace(r.suffix, ""), s = s.replace(new RegExp(t.escapeRegex(r.groupSeparator), "g"), ""), "," === r.radixPoint && (s = s.replace(t.escapeRegex(r.radixPoint), ".")), isFinite(s) && isFinite(r.min) && parseFloat(s) < parseFloat(r.min)) return e.extend(!0, {
                        refreshFromBuffer: !0,
                        buffer: (r.prefix + r.min).split("")
                    }, r.postFormat((r.prefix + r.min).split(""), 0, !0, r));
                    if (r.numericInput !== !0) {
                        var l = "" !== r.radixPoint ? a.join("").split(r.radixPoint) : [a.join("")],
                            u = l[0].match(r.regex.integerPart(r)),
                            c = 2 === l.length ? l[1].match(r.regex.integerNPart(r)) : void 0;
                        if (u) {
                            u[0] !== r.negationSymbol.front + "0" && u[0] !== r.negationSymbol.front && "+" !== u[0] || void 0 !== c && !c[0].match(/^0+$/) || a.splice(u.index, 1);
                            var f = e.inArray(r.radixPoint, a);
                            if (-1 !== f) {
                                if (isFinite(r.digits) && !r.digitsOptional) {
                                    for (var p = 1; p <= r.digits; p++)(void 0 === a[f + p] || a[f + p] === r.placeholder.charAt(0)) && (a[f + p] = "0");
                                    return {
                                        refreshFromBuffer: o !== a.join(""),
                                        buffer: a
                                    }
                                }
                                if (f === a.length - r.suffix.length - 1) return a.splice(f, 1), {
                                    refreshFromBuffer: !0,
                                    buffer: a
                                }
                            }
                        }
                    }
                }
                if (r.autoGroup) {
                    var d = r.postFormat(a, r.numericInput ? n : n - 1, !0, r);
                    return d.caret = n <= r.prefix.length ? d.pos : d.pos + 1, d
                }
            },
            regex: {
                integerPart: function(e) {
                    return new RegExp("[" + t.escapeRegex(e.negationSymbol.front) + "+]?\\d+")
                },
                integerNPart: function(e) {
                    return new RegExp("[\\d" + t.escapeRegex(e.groupSeparator) + "]+")
                }
            },
            signHandler: function(e, t, i, a, n) {
                if (!a && n.allowMinus && "-" === e || n.allowPlus && "+" === e) {
                    var r = t.buffer.join("").match(n.regex.integerPart(n));
                    if (r && r[0].length > 0) return t.buffer[r.index] === ("-" === e ? "+" : n.negationSymbol.front) ? "-" === e ? "" !== n.negationSymbol.back ? {
                        pos: r.index,
                        c: n.negationSymbol.front,
                        remove: r.index,
                        caret: i,
                        insert: {
                            pos: t.buffer.length - n.suffix.length - 1,
                            c: n.negationSymbol.back
                        }
                    } : {
                        pos: r.index,
                        c: n.negationSymbol.front,
                        remove: r.index,
                        caret: i
                    } : "" !== n.negationSymbol.back ? {
                        pos: r.index,
                        c: "+",
                        remove: [r.index, t.buffer.length - n.suffix.length - 1],
                        caret: i
                    } : {
                        pos: r.index,
                        c: "+",
                        remove: r.index,
                        caret: i
                    } : t.buffer[r.index] === ("-" === e ? n.negationSymbol.front : "+") ? "-" === e && "" !== n.negationSymbol.back ? {
                        remove: [r.index, t.buffer.length - n.suffix.length - 1],
                        caret: i - 1
                    } : {
                        remove: r.index,
                        caret: i - 1
                    } : "-" === e ? "" !== n.negationSymbol.back ? {
                        pos: r.index,
                        c: n.negationSymbol.front,
                        caret: i + 1,
                        insert: {
                            pos: t.buffer.length - n.suffix.length,
                            c: n.negationSymbol.back
                        }
                    } : {
                        pos: r.index,
                        c: n.negationSymbol.front,
                        caret: i + 1
                    } : {
                        pos: r.index,
                        c: e,
                        caret: i + 1
                    }
                }
                return !1
            },
            radixHandler: function(t, i, a, n, r) {
                if (!n && (-1 !== e.inArray(t, [",", "."]) && (t = r.radixPoint), t === r.radixPoint && void 0 !== r.digits && (isNaN(r.digits) || parseInt(r.digits) > 0))) {
                    var o = e.inArray(r.radixPoint, i.buffer),
                        s = i.buffer.join("").match(r.regex.integerPart(r));
                    if (-1 !== o && i.validPositions[o]) return i.validPositions[o - 1] ? {
                        caret: o + 1
                    } : {
                        pos: s.index,
                        c: s[0],
                        caret: o + 1
                    };
                    if (!s || "0" === s[0] && s.index + 1 !== a) return i.buffer[s ? s.index : a] = "0", {
                        pos: (s ? s.index : a) + 1,
                        c: r.radixPoint
                    }
                }
                return !1
            },
            leadingZeroHandler: function(t, i, a, n, r) {
                if (r.numericInput === !0) {
                    if ("0" === i.buffer[i.buffer.length - r.prefix.length - 1]) return {
                        pos: a,
                        remove: i.buffer.length - r.prefix.length - 1
                    }
                } else {
                    var o = i.buffer.join("").match(r.regex.integerNPart(r)),
                        s = e.inArray(r.radixPoint, i.buffer);
                    if (o && !n && (-1 === s || s >= a))
                        if (0 === o[0].indexOf("0")) {
                            a < r.prefix.length && (a = o.index);
                            var l = e.inArray(r.radixPoint, i._buffer),
                                u = i._buffer && i.buffer.slice(s).join("") === i._buffer.slice(l).join("") || 0 === parseInt(i.buffer.slice(s + 1).join("")),
                                c = i._buffer && i.buffer.slice(o.index, s).join("") === i._buffer.slice(r.prefix.length, l).join("") || "0" === i.buffer.slice(o.index, s).join("");
                            if (-1 === s || u && c) return i.buffer.splice(o.index, 1), a = a > o.index ? a - 1 : o.index, {
                                pos: a,
                                remove: o.index
                            };
                            if (o.index + 1 === a || "0" === t) return i.buffer.splice(o.index, 1), a = o.index, {
                                pos: a,
                                remove: o.index
                            }
                        } else if ("0" === t && a <= o.index && o[0] !== r.groupSeparator) return !1
                }
                return !0
            },
            postValidation: function(e, i, a) {
                var n = !0,
                    r = a.numericInput ? e.slice().reverse().join("") : e.join(""),
                    o = r.replace(a.prefix, "");
                return o = o.replace(a.suffix, ""), o = o.replace(new RegExp(t.escapeRegex(a.groupSeparator), "g"), ""), "," === a.radixPoint && (o = o.replace(t.escapeRegex(a.radixPoint), ".")), o = o.replace(new RegExp("^" + t.escapeRegex(a.negationSymbol.front)), "-"), o = o.replace(new RegExp(t.escapeRegex(a.negationSymbol.back) + "$"), ""), o = o === a.negationSymbol.front ? o + "0" : o, isFinite(o) && (null !== a.max && isFinite(a.max) && (o = parseFloat(o) > parseFloat(a.max) ? a.max : o, n = a.postFormat((a.prefix + o).split(""), 0, !0, a)), null !== a.min && isFinite(a.min) && (o = parseFloat(o) < parseFloat(a.min) ? a.min : o, n = a.postFormat((a.prefix + o).split(""), 0, !0, a))), n
            },
            definitions: {
                "~": {
                    validator: function(i, a, n, r, o) {
                        var s = o.signHandler(i, a, n, r, o);
                        if (!s && (s = o.radixHandler(i, a, n, r, o), !s && (s = r ? new RegExp("[0-9" + t.escapeRegex(o.groupSeparator) + "]").test(i) : new RegExp("[0-9]").test(i), s === !0 && (s = o.leadingZeroHandler(i, a, n, r, o), s === !0)))) {
                            var l = e.inArray(o.radixPoint, a.buffer);
                            s = -1 !== l && o.digitsOptional === !1 && o.numericInput !== !0 && n > l && !r ? {
                                pos: n,
                                remove: n
                            } : {
                                pos: n
                            }
                        }
                        return s
                    },
                    cardinality: 1,
                    prevalidator: null
                },
                "+": {
                    validator: function(e, t, i, a, n) {
                        var r = n.signHandler(e, t, i, a, n);
                        return !r && (a && n.allowMinus && e === n.negationSymbol.front || n.allowMinus && "-" === e || n.allowPlus && "+" === e) && (r = "-" === e ? "" !== n.negationSymbol.back ? {
                            pos: i,
                            c: "-" === e ? n.negationSymbol.front : "+",
                            caret: i + 1,
                            insert: {
                                pos: t.buffer.length,
                                c: n.negationSymbol.back
                            }
                        } : {
                            pos: i,
                            c: "-" === e ? n.negationSymbol.front : "+",
                            caret: i + 1
                        } : !0), r
                    },
                    cardinality: 1,
                    prevalidator: null,
                    placeholder: ""
                },
                "-": {
                    validator: function(e, t, i, a, n) {
                        var r = n.signHandler(e, t, i, a, n);
                        return !r && a && n.allowMinus && e === n.negationSymbol.back && (r = !0), r
                    },
                    cardinality: 1,
                    prevalidator: null,
                    placeholder: ""
                },
                ":": {
                    validator: function(e, i, a, n, r) {
                        var o = r.signHandler(e, i, a, n, r);
                        if (!o) {
                            var s = "[" + t.escapeRegex(r.radixPoint) + ",\\.]";
                            o = new RegExp(s).test(e), o && i.validPositions[a] && i.validPositions[a].match.placeholder === r.radixPoint && (o = {
                                caret: a + 1
                            })
                        }
                        return o ? {
                            c: r.radixPoint
                        } : o
                    },
                    cardinality: 1,
                    prevalidator: null,
                    placeholder: function(e) {
                        return e.radixPoint
                    }
                }
            },
            onUnMask: function(e, i, a) {
                var n = e.replace(a.prefix, "");
                return n = n.replace(a.suffix, ""), n = n.replace(new RegExp(t.escapeRegex(a.groupSeparator), "g"), ""), a.unmaskAsNumber ? ("" !== a.radixPoint && -1 !== n.indexOf(a.radixPoint) && (n = n.replace(t.escapeRegex.call(this, a.radixPoint), ".")), Number(n)) : n
            },
            isComplete: function(e, i) {
                var a = e.join(""),
                    n = e.slice();
                if (i.postFormat(n, 0, !0, i), n.join("") !== a) return !1;
                var r = a.replace(i.prefix, "");
                return r = r.replace(i.suffix, ""), r = r.replace(new RegExp(t.escapeRegex(i.groupSeparator), "g"), ""), "," === i.radixPoint && (r = r.replace(t.escapeRegex(i.radixPoint), ".")), isFinite(r)
            },
            onBeforeMask: function(e, i) {
                if ("" !== i.radixPoint && isFinite(e)) e = e.toString().replace(".", i.radixPoint);
                else {
                    var a = e.match(/,/g),
                        n = e.match(/\./g);
                    n && a ? n.length > a.length ? (e = e.replace(/\./g, ""), e = e.replace(",", i.radixPoint)) : a.length > n.length ? (e = e.replace(/,/g, ""), e = e.replace(".", i.radixPoint)) : e = e.indexOf(".") < e.indexOf(",") ? e.replace(/\./g, "") : e = e.replace(/,/g, "") : e = e.replace(new RegExp(t.escapeRegex(i.groupSeparator), "g"), "")
                }
                if (0 === i.digits && (-1 !== e.indexOf(".") ? e = e.substring(0, e.indexOf(".")) : -1 !== e.indexOf(",") && (e = e.substring(0, e.indexOf(",")))), "" !== i.radixPoint && isFinite(i.digits) && -1 !== e.indexOf(i.radixPoint)) {
                    var r = e.split(i.radixPoint),
                        o = r[1].match(new RegExp("\\d*"))[0];
                    if (parseInt(i.digits) < o.toString().length) {
                        var s = Math.pow(10, parseInt(i.digits));
                        e = e.replace(t.escapeRegex(i.radixPoint), "."), e = Math.round(parseFloat(e) * s) / s, e = e.toString().replace(".", i.radixPoint)
                    }
                }
                return e.toString()
            },
            canClearPosition: function(i, a, n, r, o) {
                var s = i.validPositions[a].input,
                    l = s !== o.radixPoint || null !== i.validPositions[a].match.fn && o.decimalProtect === !1 || isFinite(s) || a === n || s === o.groupSeparator || s === o.negationSymbol.front || s === o.negationSymbol.back;
                if (l && isFinite(s)) {
                    var u, c = e.inArray(o.radixPoint, i.buffer),
                        f = !1;
                    if (void 0 === i.validPositions[c] && (i.validPositions[c] = {
                            input: o.radixPoint
                        }, f = !0), !r && i.buffer) {
                        u = i.buffer.join("").substr(0, a).match(o.regex.integerNPart(o));
                        var p = a + 1,
                            d = null == u || 0 === parseInt(u[0].replace(new RegExp(t.escapeRegex(o.groupSeparator), "g"), ""));
                        if (d)
                            for (; i.validPositions[p] && (i.validPositions[p].input === o.groupSeparator || "0" === i.validPositions[p].input);) delete i.validPositions[p], p++
                    }
                    var m = [];
                    for (var v in i.validPositions) void 0 !== i.validPositions[v].input && m.push(i.validPositions[v].input);
                    if (f && delete i.validPositions[c], c > 0) {
                        var h = m.join("");
                        if (u = h.match(o.regex.integerNPart(o)))
                            if (c >= a)
                                if (0 === u[0].indexOf("0")) l = u.index !== a || "0" === o.placeholder;
                                else {
                                    var g = parseInt(u[0].replace(new RegExp(t.escapeRegex(o.groupSeparator), "g"), "")),
                                        y = parseInt(h.split(o.radixPoint)[1]);
                                    10 > g && i.validPositions[a] && ("0" !== o.placeholder || y > 0) && (i.validPositions[a].input = "0", i.p = o.prefix.length + 1, l = !1)
                                }
                        else 0 === u[0].indexOf("0") && 3 === h.length && (i.validPositions = {}, l = !1)
                    }
                }
                return l
            },
            onKeyDown: function(i, a, n, r) {
                var o = e(this);
                if (i.ctrlKey) switch (i.keyCode) {
                    case t.keyCode.UP:
                        o.val(parseFloat(this.inputmask.unmaskedvalue()) + parseInt(r.step)), o.trigger("setvalue");
                        break;
                    case t.keyCode.DOWN:
                        o.val(parseFloat(this.inputmask.unmaskedvalue()) - parseInt(r.step)), o.trigger("setvalue")
                }
            }
        },
        currency: {
            prefix: "$ ",
            groupSeparator: ",",
            alias: "numeric",
            placeholder: "0",
            autoGroup: !0,
            digits: 2,
            digitsOptional: !1,
            clearMaskOnLostFocus: !1
        },
        decimal: {
            alias: "numeric"
        },
        integer: {
            alias: "numeric",
            digits: 0,
            radixPoint: ""
        },
        percentage: {
            alias: "numeric",
            digits: 2,
            radixPoint: ".",
            placeholder: "0",
            autoGroup: !1,
            min: 0,
            max: 100,
            suffix: " %",
            allowPlus: !1,
            allowMinus: !1
        }
    }), t
}(jQuery, Inputmask),
function(e, t) {
    return t.extendAliases({
        phone: {
            url: "phone-codes/phone-codes.js",
            countrycode: "",
            phoneCodeCache: {},
            mask: function(t) {
                if (void 0 === t.phoneCodeCache[t.url]) {
                    var i = [];
                    t.definitions["#"] = t.definitions[9], e.ajax({
                        url: t.url,
                        async: !1,
                        type: "get",
                        dataType: "json",
                        success: function(e) {
                            i = e
                        },
                        error: function(e, i, a) {
                            alert(a + " - " + t.url)
                        }
                    }), t.phoneCodeCache[t.url] = i.sort(function(e, t) {
                        return (e.mask || e) < (t.mask || t) ? -1 : 1
                    })
                }
                return t.phoneCodeCache[t.url]
            },
            keepStatic: !1,
            nojumps: !0,
            nojumpsThreshold: 1,
            onBeforeMask: function(e, t) {
                var i = e.replace(/^0{1,2}/, "").replace(/[\s]/g, "");
                return (i.indexOf(t.countrycode) > 1 || -1 === i.indexOf(t.countrycode)) && (i = "+" + t.countrycode + i), i
            }
        },
        phonebe: {
            alias: "phone",
            url: "phone-codes/phone-be.js",
            countrycode: "32",
            nojumpsThreshold: 4
        }
    }), t
}(jQuery, Inputmask),
function(e, t) {
    return t.extendAliases({
        Regex: {
            mask: "r",
            greedy: !1,
            repeat: "*",
            regex: null,
            regexTokens: null,
            tokenizer: /\[\^?]?(?:[^\\\]]+|\\[\S\s]?)*]?|\\(?:0(?:[0-3][0-7]{0,2}|[4-7][0-7]?)?|[1-9][0-9]*|x[0-9A-Fa-f]{2}|u[0-9A-Fa-f]{4}|c[A-Za-z]|[\S\s]?)|\((?:\?[:=!]?)?|(?:[?*+]|\{[0-9]+(?:,[0-9]*)?\})\??|[^.?*+^${[()|\\]+|./g,
            quantifierFilter: /[0-9]+[^,]/,
            isComplete: function(e, t) {
                return new RegExp(t.regex).test(e.join(""))
            },
            definitions: {
                r: {
                    validator: function(t, i, a, n, r) {
                        function o(e, t) {
                            this.matches = [], this.isGroup = e || !1, this.isQuantifier = t || !1, this.quantifier = {
                                min: 1,
                                max: 1
                            }, this.repeaterPart = void 0
                        }

                        function s() {
                            var e, t, i = new o,
                                a = [];
                            for (r.regexTokens = []; e = r.tokenizer.exec(r.regex);) switch (t = e[0], t.charAt(0)) {
                                case "(":
                                    a.push(new o(!0));
                                    break;
                                case ")":
                                    c = a.pop(), a.length > 0 ? a[a.length - 1].matches.push(c) : i.matches.push(c);
                                    break;
                                case "{":
                                case "+":
                                case "*":
                                    var n = new o(!1, !0);
                                    t = t.replace(/[{}]/g, "");
                                    var s = t.split(","),
                                        l = isNaN(s[0]) ? s[0] : parseInt(s[0]),
                                        u = 1 === s.length ? l : isNaN(s[1]) ? s[1] : parseInt(s[1]);
                                    if (n.quantifier = {
                                            min: l,
                                            max: u
                                        }, a.length > 0) {
                                        var f = a[a.length - 1].matches;
                                        e = f.pop(), e.isGroup || (c = new o(!0), c.matches.push(e), e = c), f.push(e), f.push(n)
                                    } else e = i.matches.pop(), e.isGroup || (c = new o(!0), c.matches.push(e), e = c), i.matches.push(e), i.matches.push(n);
                                    break;
                                default:
                                    a.length > 0 ? a[a.length - 1].matches.push(t) : i.matches.push(t)
                            }
                            i.matches.length > 0 && r.regexTokens.push(i)
                        }

                        function l(t, i) {
                            var a = !1;
                            i && (p += "(", m++);
                            for (var n = 0; n < t.matches.length; n++) {
                                var r = t.matches[n];
                                if (r.isGroup === !0) a = l(r, !0);
                                else if (r.isQuantifier === !0) {
                                    var o = e.inArray(r, t.matches),
                                        s = t.matches[o - 1],
                                        c = p;
                                    if (isNaN(r.quantifier.max)) {
                                        for (; r.repeaterPart && r.repeaterPart !== p && r.repeaterPart.length > p.length && !(a = l(s, !0)););
                                        a = a || l(s, !0), a && (r.repeaterPart = p), p = c + r.quantifier.max
                                    } else {
                                        for (var f = 0, d = r.quantifier.max - 1; d > f && !(a = l(s, !0)); f++);
                                        p = c + "{" + r.quantifier.min + "," + r.quantifier.max + "}"
                                    }
                                } else if (void 0 !== r.matches)
                                    for (var v = 0; v < r.length && !(a = l(r[v], i)); v++);
                                else {
                                    var h;
                                    if ("[" == r.charAt(0)) {
                                        h = p, h += r;
                                        for (var g = 0; m > g; g++) h += ")";
                                        var y = new RegExp("^(" + h + ")$");
                                        a = y.test(u)
                                    } else
                                        for (var k = 0, x = r.length; x > k; k++)
                                            if ("\\" !== r.charAt(k)) {
                                                h = p, h += r.substr(0, k + 1), h = h.replace(/\|$/, "");
                                                for (var g = 0; m > g; g++) h += ")";
                                                var y = new RegExp("^(" + h + ")$");
                                                if (a = y.test(u)) break
                                            }
                                    p += r
                                }
                                if (a) break
                            }
                            return i && (p += ")", m--), a
                        }
                        var u, c, f = i.buffer.slice(),
                            p = "",
                            d = !1,
                            m = 0;
                        null === r.regexTokens && s(), f.splice(a, 0, t), u = f.join("");
                        for (var v = 0; v < r.regexTokens.length; v++) {
                            var h = r.regexTokens[v];
                            if (d = l(h, h.isGroup)) break
                        }
                        return d
                    },
                    cardinality: 1
                }
            }
        }
    }), t
}(jQuery, Inputmask);
yii.validation = function(e) {
    function a(a, s, t) {
        if ("undefined" == typeof File) return [];
        var i = e(a.input).get(0).files;
        return i ? 0 === i.length ? (t.skipOnEmpty || s.push(t.uploadRequired), []) : t.maxFiles && t.maxFiles < i.length ? (s.push(t.tooMany), []) : i : (s.push(t.message), [])
    }

    function s(e, a, s) {
        if (s.extensions && s.extensions.length > 0) {
            var t, i;
            t = e.name.lastIndexOf("."), i = ~t ? e.name.substr(t + 1, e.name.length).toLowerCase() : "", ~s.extensions.indexOf(i) || a.push(s.wrongExtension.replace(/\{file\}/g, e.name))
        }
        s.mimeTypes && s.mimeTypes.length > 0 && (~s.mimeTypes.indexOf(e.type) || a.push(s.wrongMimeType.replace(/\{file\}/g, e.name))), s.maxSize && s.maxSize < e.size && a.push(s.tooBig.replace(/\{file\}/g, e.name)), s.minSize && s.minSize > e.size && a.push(s.tooSmall.replace(/\{file\}/g, e.name))
    }
    var t = {
        isEmpty: function(e) {
            return null === e || void 0 === e || e == [] || "" === e
        },
        addMessage: function(e, a, s) {
            e.push(a.replace(/\{value\}/g, s))
        },
        required: function(a, s, i) {
            var n = !1;
            if (void 0 === i.requiredValue) {
                var r = "string" == typeof a || a instanceof String;
                (i.strict && void 0 !== a || !i.strict && !t.isEmpty(r ? e.trim(a) : a)) && (n = !0)
            } else(!i.strict && a == i.requiredValue || i.strict && a === i.requiredValue) && (n = !0);
            n || t.addMessage(s, i.message, a)
        },
        "boolean": function(e, a, s) {
            if (!s.skipOnEmpty || !t.isEmpty(e)) {
                var i = !s.strict && (e == s.trueValue || e == s.falseValue) || s.strict && (e === s.trueValue || e === s.falseValue);
                i || t.addMessage(a, s.message, e)
            }
        },
        string: function(e, a, s) {
            if (!s.skipOnEmpty || !t.isEmpty(e)) {
                if ("string" != typeof e) return void t.addMessage(a, s.message, e);
                void 0 !== s.min && e.length < s.min && t.addMessage(a, s.tooShort, e), void 0 !== s.max && e.length > s.max && t.addMessage(a, s.tooLong, e), void 0 !== s.is && e.length != s.is && t.addMessage(a, s.notEqual, e)
            }
        },
        file: function(t, i, n) {
            var r = a(t, i, n);
            e.each(r, function(e, a) {
                s(a, i, n)
            })
        },
        image: function(t, i, n, r) {
            var o = a(t, i, n);
            e.each(o, function(a, t) {
                if (s(t, i, n), "undefined" != typeof FileReader) {
                    var o = e.Deferred(),
                        m = new FileReader,
                        l = new Image;
                    l.onload = function() {
                        n.minWidth && this.width < n.minWidth && i.push(n.underWidth.replace(/\{file\}/g, t.name)), n.maxWidth && this.width > n.maxWidth && i.push(n.overWidth.replace(/\{file\}/g, t.name)), n.minHeight && this.height < n.minHeight && i.push(n.underHeight.replace(/\{file\}/g, t.name)), n.maxHeight && this.height > n.maxHeight && i.push(n.overHeight.replace(/\{file\}/g, t.name)), o.resolve()
                    }, l.onerror = function() {
                        i.push(n.notImage.replace(/\{file\}/g, t.name)), o.resolve()
                    }, m.onload = function() {
                        l.src = m.result
                    }, m.onerror = function() {
                        o.resolve()
                    }, m.readAsDataURL(t), r.push(o)
                }
            })
        },
        number: function(e, a, s) {
            if (!s.skipOnEmpty || !t.isEmpty(e)) {
                if ("string" == typeof e && !e.match(s.pattern)) return void t.addMessage(a, s.message, e);
                void 0 !== s.min && e < s.min && t.addMessage(a, s.tooSmall, e), void 0 !== s.max && e > s.max && t.addMessage(a, s.tooBig, e)
            }
        },
        range: function(a, s, i) {
            if (!i.skipOnEmpty || !t.isEmpty(a)) {
                if (!i.allowArray && e.isArray(a)) return void t.addMessage(s, i.message, a);
                var n = !0;
                e.each(e.isArray(a) ? a : [a], function(a, s) {
                    return -1 == e.inArray(s, i.range) ? (n = !1, !1) : !0
                }), i.not === n && t.addMessage(s, i.message, a)
            }
        },
        regularExpression: function(e, a, s) {
            s.skipOnEmpty && t.isEmpty(e) || (!s.not && !e.match(s.pattern) || s.not && e.match(s.pattern)) && t.addMessage(a, s.message, e)
        },
        email: function(e, a, s) {
            if (!s.skipOnEmpty || !t.isEmpty(e)) {
                var i = !0,
                    n = /^((?:"?([^"]*)"?\s)?)(?:\s+)?(?:(<?)((.+)@([^>]+))(>?))$/,
                    r = n.exec(e);
                null === r ? i = !1 : (s.enableIDN && (r[5] = punycode.toASCII(r[5]), r[6] = punycode.toASCII(r[6]), e = r[1] + r[3] + r[5] + "@" + r[6] + r[7]), i = r[5].length > 64 ? !1 : (r[5] + "@" + r[6]).length > 254 ? !1 : e.match(s.pattern) || s.allowName && e.match(s.fullPattern)), i || t.addMessage(a, s.message, e)
            }
        },
        url: function(e, a, s) {
            if (!s.skipOnEmpty || !t.isEmpty(e)) {
                s.defaultScheme && !e.match(/:\/\//) && (e = s.defaultScheme + "://" + e);
                var i = !0;
                if (s.enableIDN) {
                    var n = /^([^:]+):\/\/([^\/]+)(.*)$/,
                        r = n.exec(e);
                    null === r ? i = !1 : e = r[1] + "://" + punycode.toASCII(r[2]) + r[3]
                }
                i && e.match(s.pattern) || t.addMessage(a, s.message, e)
            }
        },
        trim: function(a, s, i) {
            var n = a.find(s.input),
                r = n.val();
            return i.skipOnEmpty && t.isEmpty(r) || (r = e.trim(r), n.val(r)), r
        },
        captcha: function(a, s, i) {
            if (!i.skipOnEmpty || !t.isEmpty(a)) {
                var n = e("body").data(i.hashKey);
                n = null == n ? i.hash : n[i.caseSensitive ? 0 : 1];
                for (var r = i.caseSensitive ? a : a.toLowerCase(), o = r.length - 1, m = 0; o >= 0; --o) m += r.charCodeAt(o);
                m != n && t.addMessage(s, i.message, a)
            }
        },
        compare: function(a, s, i) {
            if (!i.skipOnEmpty || !t.isEmpty(a)) {
                var n, r = !0;
                switch (n = void 0 === i.compareAttribute ? i.compareValue : e("#" + i.compareAttribute).val(), "number" === i.type && (a = parseFloat(a), n = parseFloat(n)), i.operator) {
                    case "==":
                        r = a == n;
                        break;
                    case "===":
                        r = a === n;
                        break;
                    case "!=":
                        r = a != n;
                        break;
                    case "!==":
                        r = a !== n;
                        break;
                    case ">":
                        r = a > n;
                        break;
                    case ">=":
                        r = a >= n;
                        break;
                    case "<":
                        r = n > a;
                        break;
                    case "<=":
                        r = n >= a;
                        break;
                    default:
                        r = !1
                }
                r || t.addMessage(s, i.message, a)
            }
        },
        ip: function(e, a, s) {
            var i = function(e) {
                    return -1 === e.indexOf(":") ? 4 : 6
                },
                n = null,
                r = null;
            if (!s.skipOnEmpty || !t.isEmpty(e)) {
                var o = new RegExp(s.ipParsePattern).exec(e);
                return o && (n = o[1] || null, e = o[2], r = o[4] || null), s.subnet === !0 && null === r ? void t.addMessage(a, s.messages.noSubnet, e) : s.subnet === !1 && null !== r ? void t.addMessage(a, s.messages.hasSubnet, e) : s.negation === !1 && null !== n ? void t.addMessage(a, s.messages.message, e) : void(6 == i(e) ? (s.ipv6 || t.addMessage(a, s.messages.ipv6NotAllowed, e), new RegExp(s.ipv6Pattern).test(e) || t.addMessage(a, s.messages.message, e)) : (s.ipv4 || t.addMessage(a, s.messages.ipv4NotAllowed, e), new RegExp(s.ipv4Pattern).test(e) || t.addMessage(a, s.messages.message, e)))
            }
        }
    };
    return t
}(jQuery);
jQuery.cookie = function(e, i, o) {
    if ("undefined" == typeof i) {
        var n = null;
        if (document.cookie && "" != document.cookie)
            for (var r = document.cookie.split(";"), t = 0; t < r.length; t++) {
                var p = jQuery.trim(r[t]);
                if (p.substring(0, e.length + 1) == e + "=") {
                    n = decodeURIComponent(p.substring(e.length + 1));
                    break
                }
            }
        return n
    }
    o = o || {}, null === i && (i = "", o.expires = -1);
    var u = "";
    if (o.expires && ("number" == typeof o.expires || o.expires.toUTCString)) {
        var s;
        "number" == typeof o.expires ? (s = new Date, s.setTime(s.getTime() + 24 * o.expires * 60 * 60 * 1e3)) : s = o.expires, u = "; expires=" + s.toUTCString()
    }
    var a = o.path ? "; path=" + o.path : "",
        c = o.domain ? "; domain=" + o.domain : "",
        m = o.secure ? "; secure" : "";
    document.cookie = [e, "=", encodeURIComponent(i), u, a, c, m].join("")
};
! function() {
    for (var n, e = function() {}, t = "assert clear count debug dir dirxml error exception group groupCollapsed groupEnd info log markTimeline profile profileEnd table time timeEnd timeStamp trace warn".split(" "), u = t.length, a = window.console = window.console || {}; u--;) n = t[u], a[n] || (a[n] = e)
}(),
function(n) {
    n.fn.loremImages = function(e, t, u) {
        var a = n.extend({}, n.fn.loremImages.defaults, u);
        return this.each(function(u, r) {
            var o = n(r),
                i = "";
            for (u = 0; u < a.count; u++) {
                var s = e + Math.round(Math.random() * a.randomWidth),
                    c = t + Math.round(Math.random() * a.randomHeight);
                i += a.itemBuilder.call(o, u, "//lorempixel.com/" + (a.grey ? "g/" : "") + s + "/" + c + "/" + (a.category ? a.category + "/" : "") + "?" + Math.round(1e3 * Math.random()), s, c)
            }
            o.append(i)
        })
    }, n.fn.loremImages.defaults = {
        count: 10,
        grey: 0,
        randomWidth: 0,
        randomHeight: 0,
        category: 0,
        itemBuilder: function(n, e) {
            return '<img src="' + e + '" alt="Lorempixel">'
        }
    }
}(jQuery), jQuery.easing.jswing = jQuery.easing.swing, jQuery.extend(jQuery.easing, {
        def: "easeOutQuad",
        swing: function(n, e, t, u, a) {
            return jQuery.easing[jQuery.easing.def](n, e, t, u, a)
        },
        easeInQuad: function(n, e, t, u, a) {
            return u * (e /= a) * e + t
        },
        easeOutQuad: function(n, e, t, u, a) {
            return -u * (e /= a) * (e - 2) + t
        },
        easeInOutQuad: function(n, e, t, u, a) {
            return 1 > (e /= a / 2) ? u / 2 * e * e + t : -u / 2 * (--e * (e - 2) - 1) + t
        },
        easeInCubic: function(n, e, t, u, a) {
            return u * (e /= a) * e * e + t
        },
        easeOutCubic: function(n, e, t, u, a) {
            return u * ((e = e / a - 1) * e * e + 1) + t
        },
        easeInOutCubic: function(n, e, t, u, a) {
            return 1 > (e /= a / 2) ? u / 2 * e * e * e + t : u / 2 * ((e -= 2) * e * e + 2) + t
        },
        easeInQuart: function(n, e, t, u, a) {
            return u * (e /= a) * e * e * e + t
        },
        easeOutQuart: function(n, e, t, u, a) {
            return -u * ((e = e / a - 1) * e * e * e - 1) + t
        },
        easeInOutQuart: function(n, e, t, u, a) {
            return 1 > (e /= a / 2) ? u / 2 * e * e * e * e + t : -u / 2 * ((e -= 2) * e * e * e - 2) + t
        },
        easeInQuint: function(n, e, t, u, a) {
            return u * (e /= a) * e * e * e * e + t
        },
        easeOutQuint: function(n, e, t, u, a) {
            return u * ((e = e / a - 1) * e * e * e * e + 1) + t
        },
        easeInOutQuint: function(n, e, t, u, a) {
            return 1 > (e /= a / 2) ? u / 2 * e * e * e * e * e + t : u / 2 * ((e -= 2) * e * e * e * e + 2) + t
        },
        easeInSine: function(n, e, t, u, a) {
            return -u * Math.cos(e / a * (Math.PI / 2)) + u + t
        },
        easeOutSine: function(n, e, t, u, a) {
            return u * Math.sin(e / a * (Math.PI / 2)) + t
        },
        easeInOutSine: function(n, e, t, u, a) {
            return -u / 2 * (Math.cos(Math.PI * e / a) - 1) + t
        },
        easeInExpo: function(n, e, t, u, a) {
            return 0 == e ? t : u * Math.pow(2, 10 * (e / a - 1)) + t
        },
        easeOutExpo: function(n, e, t, u, a) {
            return e == a ? t + u : u * (-Math.pow(2, -10 * e / a) + 1) + t
        },
        easeInOutExpo: function(n, e, t, u, a) {
            return 0 == e ? t : e == a ? t + u : 1 > (e /= a / 2) ? u / 2 * Math.pow(2, 10 * (e - 1)) + t : u / 2 * (-Math.pow(2, -10 * --e) + 2) + t
        },
        easeInCirc: function(n, e, t, u, a) {
            return -u * (Math.sqrt(1 - (e /= a) * e) - 1) + t
        },
        easeOutCirc: function(n, e, t, u, a) {
            return u * Math.sqrt(1 - (e = e / a - 1) * e) + t
        },
        easeInOutCirc: function(n, e, t, u, a) {
            return 1 > (e /= a / 2) ? -u / 2 * (Math.sqrt(1 - e * e) - 1) + t : u / 2 * (Math.sqrt(1 - (e -= 2) * e) + 1) + t
        },
        easeInElastic: function(n, e, t, u, a) {
            var n = 1.70158,
                r = 0,
                o = u;
            return 0 == e ? t : 1 == (e /= a) ? t + u : (r || (r = .3 * a), o < Math.abs(u) ? (o = u, n = r / 4) : n = r / (2 * Math.PI) * Math.asin(u / o), -(o * Math.pow(2, 10 * (e -= 1)) * Math.sin(2 * (e * a - n) * Math.PI / r)) + t)
        },
        easeOutElastic: function(n, e, t, u, a) {
            var n = 1.70158,
                r = 0,
                o = u;
            return 0 == e ? t : 1 == (e /= a) ? t + u : (r || (r = .3 * a), o < Math.abs(u) ? (o = u, n = r / 4) : n = r / (2 * Math.PI) * Math.asin(u / o), o * Math.pow(2, -10 * e) * Math.sin(2 * (e * a - n) * Math.PI / r) + u + t)
        },
        easeInOutElastic: function(n, e, t, u, a) {
            var n = 1.70158,
                r = 0,
                o = u;
            return 0 == e ? t : 2 == (e /= a / 2) ? t + u : (r || (r = .3 * a * 1.5), o < Math.abs(u) ? (o = u, n = r / 4) : n = r / (2 * Math.PI) * Math.asin(u / o), 1 > e ? -.5 * o * Math.pow(2, 10 * (e -= 1)) * Math.sin(2 * (e * a - n) * Math.PI / r) + t : .5 * o * Math.pow(2, -10 * (e -= 1)) * Math.sin(2 * (e * a - n) * Math.PI / r) + u + t)
        },
        easeInBack: function(n, e, t, u, a, r) {
            return void 0 == r && (r = 1.70158), u * (e /= a) * e * ((r + 1) * e - r) + t
        },
        easeOutBack: function(n, e, t, u, a, r) {
            return void 0 == r && (r = 1.70158), u * ((e = e / a - 1) * e * ((r + 1) * e + r) + 1) + t
        },
        easeInOutBack: function(n, e, t, u, a, r) {
            return void 0 == r && (r = 1.70158), 1 > (e /= a / 2) ? u / 2 * e * e * (((r *= 1.525) + 1) * e - r) + t : u / 2 * ((e -= 2) * e * (((r *= 1.525) + 1) * e + r) + 2) + t
        },
        easeInBounce: function(n, e, t, u, a) {
            return u - jQuery.easing.easeOutBounce(n, a - e, 0, u, a) + t
        },
        easeOutBounce: function(n, e, t, u, a) {
            return (e /= a) < 1 / 2.75 ? 7.5625 * u * e * e + t : 2 / 2.75 > e ? u * (7.5625 * (e -= 1.5 / 2.75) * e + .75) + t : 2.5 / 2.75 > e ? u * (7.5625 * (e -= 2.25 / 2.75) * e + .9375) + t : u * (7.5625 * (e -= 2.625 / 2.75) * e + .984375) + t
        },
        easeInOutBounce: function(n, e, t, u, a) {
            return a / 2 > e ? .5 * jQuery.easing.easeInBounce(n, 2 * e, 0, u, a) + t : .5 * jQuery.easing.easeOutBounce(n, 2 * e - a, 0, u, a) + .5 * u + t
        }
    }),
    function(n, e) {
        var t, u = n.jQuery || n.Cowboy || (n.Cowboy = {});
        u.throttle = t = function(n, t, a, r) {
            function o() {
                function u() {
                    s = +new Date, a.apply(c, h)
                }

                function o() {
                    i = e
                }
                var c = this,
                    f = +new Date - s,
                    h = arguments;
                r && !i && u(), i && clearTimeout(i), r === e && f > n ? u() : t !== !0 && (i = setTimeout(r ? o : u, r === e ? n - f : n))
            }
            var i, s = 0;
            return "boolean" != typeof t && (r = a, a = t, t = e), u.guid && (o.guid = a.guid = a.guid || u.guid++), o
        }, u.debounce = function(n, u, a) {
            return a === e ? t(n, u, !1) : t(n, a, u !== !1)
        }
    }(this);
! function(e, t, a) {
    "use strict";

    function n(t, p, g) {
        function H(a) {
            var n = 0,
                i = Ee.length;
            if (Ce.old = e.extend({}, Ce), Ie = we ? 0 : be[me.horizontal ? "width" : "height"](), Te = Be[me.horizontal ? "width" : "height"](), ze = we ? t : Pe[me.horizontal ? "outerWidth" : "outerHeight"](), Ee.length = 0, Ce.start = 0, Ce.end = q(ze - Ie, 0), Re) {
                n = Oe.length, qe = Pe.children(me.itemSelector), Oe.length = 0;
                var r, s = c(Pe, me.horizontal ? "paddingLeft" : "paddingTop"),
                    o = c(Pe, me.horizontal ? "paddingRight" : "paddingBottom"),
                    l = "border-box" === e(qe).css("boxSizing"),
                    u = "none" !== qe.css("float"),
                    f = 0,
                    v = qe.length - 1;
                ze = 0, qe.each(function(t, a) {
                    var n = e(a),
                        i = a.getBoundingClientRect(),
                        l = E(me.horizontal ? i.width || i.right - i.left : i.height || i.bottom - i.top),
                        d = c(n, me.horizontal ? "marginLeft" : "marginTop"),
                        h = c(n, me.horizontal ? "marginRight" : "marginBottom"),
                        p = l + d + h,
                        g = !d || !h,
                        m = {};
                    m.el = a, m.size = g ? l : p, m.half = m.size / 2, m.start = ze + (g ? d : 0), m.center = m.start - E(Ie / 2 - m.size / 2), m.end = m.start - Ie + m.size, t || (ze += s), ze += p, me.horizontal || u || h && d && t > 0 && (ze -= O(d, h)), t === v && (m.end += o, ze += o, f = g ? h : 0), Oe.push(m), r = m
                }), Pe[0].style[me.horizontal ? "width" : "height"] = (l ? ze : ze - s - o) + "px", ze -= f, Oe.length ? (Ce.start = Oe[0][Fe ? "center" : "start"], Ce.end = Fe ? r.center : ze > Ie ? r.end : Ce.start) : Ce.start = Ce.end = 0
            }
            if (Ce.center = E(Ce.end / 2 + Ce.start / 2), Q(), Se.length && Te > 0 && (me.dynamicHandle ? (ke = Ce.start === Ce.end ? Te : E(Te * Ie / ze), ke = d(ke, me.minHandleSize, Te), Se[0].style[me.horizontal ? "width" : "height"] = ke + "px") : ke = Se[me.horizontal ? "outerWidth" : "outerHeight"](), xe.end = Te - ke, it || M()), !we && Ie > 0) {
                var h = Ce.start,
                    p = "";
                if (Re) e.each(Oe, function(e, t) {
                    Fe ? Ee.push(t.center) : t.start + t.size > h && h <= Ce.end && (h = t.start, Ee.push(h), h += Ie, h > Ce.end && h < Ce.end + Ie && Ee.push(Ce.end))
                });
                else
                    for (; h - Ie < Ce.end;) Ee.push(h), h += Ie;
                if (De[0] && i !== Ee.length) {
                    for (var g = 0; g < Ee.length; g++) p += me.pageBuilder.call(ye, g);
                    Ae = De.html(p).children(), Ae.eq(Ne.activePage).addClass(me.activeClass)
                }
            }
            if (Ne.slideeSize = ze, Ne.frameSize = Ie, Ne.sbSize = Te, Ne.handleSize = ke, Re) {
                a && null != me.startAt && (U(me.startAt), ye[Le ? "toCenter" : "toStart"](me.startAt));
                var m = Oe[Ne.activeItem];
                X(Le && m ? m.center : d(Ce.dest, Ce.start, Ce.end))
            } else a ? null != me.startAt && X(me.startAt, 1) : X(d(Ce.dest, Ce.start, Ce.end));
            he("load")
        }

        function X(e, t, a) {
            if (Re && at.released && !a) {
                var n = $(e),
                    i = e > Ce.start && e < Ce.end;
                Le ? (i && (e = Oe[n.centerItem].center), Fe && me.activateMiddle && U(n.centerItem)) : i && (e = Oe[n.firstItem].start)
            }
            at.init && at.slidee && me.elasticBounds ? e > Ce.end ? e = Ce.end + (e - Ce.end) / 6 : e < Ce.start && (e = Ce.start + (e - Ce.start) / 6) : e = d(e, Ce.start, Ce.end), et.start = +new Date, et.time = 0, et.from = Ce.cur, et.to = e, et.delta = e - Ce.cur, et.tweesing = at.tweese || at.init && !at.slidee, et.immediate = !et.tweesing && (t || at.init && at.slidee || !me.speed), at.tweese = 0, e !== Ce.dest && (Ce.dest = e, he("change"), it || Y()), K(), Q(), Z(), j()
        }

        function Y() {
            if (ye.initialized) {
                if (!it) return it = w(Y), void(at.released && he("moveStart"));
                et.immediate ? Ce.cur = et.to : et.tweesing ? (et.tweeseDelta = et.to - Ce.cur, x(et.tweeseDelta) < .1 ? Ce.cur = et.to : Ce.cur += et.tweeseDelta * (at.released ? me.swingSpeed : me.syncSpeed)) : (et.time = O(+new Date - et.start, me.speed), Ce.cur = et.from + et.delta * e.easing[me.easing](et.time / me.speed, et.time, 0, 1, me.speed)), et.to === Ce.cur ? (Ce.cur = et.to, at.tweese = it = 0) : it = w(Y), he("move"), we || (f ? Pe[0].style[f] = v + (me.horizontal ? "translateX" : "translateY") + "(" + -Ce.cur + "px)" : Pe[0].style[me.horizontal ? "left" : "top"] = -E(Ce.cur) + "px"), !it && at.released && he("moveEnd"), M()
            }
        }

        function M() {
            Se.length && (xe.cur = Ce.start === Ce.end ? 0 : ((at.init && !at.slidee ? Ce.dest : Ce.cur) - Ce.start) / (Ce.end - Ce.start) * xe.end, xe.cur = d(E(xe.cur), xe.start, xe.end), _e.hPos !== xe.cur && (_e.hPos = xe.cur, f ? Se[0].style[f] = v + (me.horizontal ? "translateX" : "translateY") + "(" + xe.cur + "px)" : Se[0].style[me.horizontal ? "left" : "top"] = xe.cur + "px"))
        }

        function j() {
            Ae[0] && _e.page !== Ne.activePage && (_e.page = Ne.activePage, Ae.removeClass(me.activeClass).eq(Ne.activePage).addClass(me.activeClass), he("activePage", _e.page))
        }

        function F() {
            tt.speed && Ce.cur !== (tt.speed > 0 ? Ce.end : Ce.start) || ye.stop(), ot = at.init ? w(F) : 0, tt.now = +new Date, tt.pos = Ce.cur + (tt.now - tt.lastTime) / 1e3 * tt.speed, X(at.init ? tt.pos : E(tt.pos)), at.init || Ce.cur !== Ce.dest || he("moveEnd"), tt.lastTime = tt.now
        }

        function L(e, t, n) {
            if ("boolean" === i(t) && (n = t, t = a), t === a) X(Ce[e], n);
            else {
                if (Le && "center" !== e) return;
                var r = ye.getPos(t);
                r && X(r[e], n, !Le)
            }
        }

        function R(e) {
            return null != e ? l(e) ? e >= 0 && e < Oe.length ? e : -1 : qe.index(e) : -1
        }

        function W(e) {
            return R(l(e) && 0 > e ? e + Oe.length : e)
        }

        function U(e, t) {
            var a = R(e);
            return !Re || 0 > a ? !1 : ((_e.active !== a || t) && (qe.eq(Ne.activeItem).removeClass(me.activeClass), qe.eq(a).addClass(me.activeClass), _e.active = Ne.activeItem = a, Z(), he("active", a)), a)
        }

        function $(e) {
            e = d(l(e) ? e : Ce.dest, Ce.start, Ce.end);
            var t = {},
                a = Fe ? 0 : Ie / 2;
            if (!we)
                for (var n = 0, i = Ee.length; i > n; n++) {
                    if (e >= Ce.end || n === Ee.length - 1) {
                        t.activePage = Ee.length - 1;
                        break
                    }
                    if (e <= Ee[n] + a) {
                        t.activePage = n;
                        break
                    }
                }
            if (Re) {
                for (var r = !1, s = !1, o = !1, c = 0, u = Oe.length; u > c; c++)
                    if (r === !1 && e <= Oe[c].start + Oe[c].half && (r = c), o === !1 && e <= Oe[c].center + Oe[c].half && (o = c), c === u - 1 || e <= Oe[c].end + Oe[c].half) {
                        s = c;
                        break
                    }
                t.firstItem = l(r) ? r : 0, t.centerItem = l(o) ? o : t.firstItem, t.lastItem = l(s) ? s : t.centerItem
            }
            return t
        }

        function Q(t) {
            e.extend(Ne, $(t))
        }

        function Z() {
            var e = Ce.dest <= Ce.start,
                t = Ce.dest >= Ce.end,
                a = (e ? 1 : 0) | (t ? 2 : 0);
            if (_e.slideePosState !== a && (_e.slideePosState = a, Je.is("button,input") && Je.prop("disabled", e), Ke.is("button,input") && Ke.prop("disabled", t), Je.add(Qe)[e ? "addClass" : "removeClass"](me.disabledClass), Ke.add($e)[t ? "addClass" : "removeClass"](me.disabledClass)), _e.fwdbwdState !== a && at.released && (_e.fwdbwdState = a, Qe.is("button,input") && Qe.prop("disabled", e), $e.is("button,input") && $e.prop("disabled", t)), Re && null != Ne.activeItem) {
                var n = 0 === Ne.activeItem,
                    i = Ne.activeItem >= Oe.length - 1,
                    r = (n ? 1 : 0) | (i ? 2 : 0);
                _e.itemsButtonState !== r && (_e.itemsButtonState = r, Ze.is("button,input") && Ze.prop("disabled", n), Ge.is("button,input") && Ge.prop("disabled", i), Ze[n ? "addClass" : "removeClass"](me.disabledClass), Ge[i ? "addClass" : "removeClass"](me.disabledClass))
            }
        }

        function G(e, t, a) {
            if (e = W(e), t = W(t), e > -1 && t > -1 && e !== t && (!a || t !== e - 1) && (a || t !== e + 1)) {
                qe.eq(e)[a ? "insertAfter" : "insertBefore"](Oe[t].el);
                var n = t > e ? e : a ? t : t - 1,
                    i = e > t ? e : a ? t + 1 : t,
                    r = e > t;
                null != Ne.activeItem && (e === Ne.activeItem ? _e.active = Ne.activeItem = a ? r ? t + 1 : t : r ? t : t - 1 : Ne.activeItem > n && Ne.activeItem < i && (_e.active = Ne.activeItem += r ? 1 : -1)), H()
            }
        }

        function J(e, t) {
            for (var a = 0, n = Ve[e].length; n > a; a++)
                if (Ve[e][a] === t) return a;
            return -1
        }

        function K() {
            at.released && !ye.isPaused && ye.resume()
        }

        function V(e) {
            return E(d(e, xe.start, xe.end) / xe.end * (Ce.end - Ce.start)) + Ce.start
        }

        function _() {
            at.history[0] = at.history[1], at.history[1] = at.history[2], at.history[2] = at.history[3], at.history[3] = at.delta
        }

        function ee(e) {
            at.released = 0, at.source = e, at.slidee = "slidee" === e
        }

        function te(t) {
            var a = "touchstart" === t.type,
                n = t.data.source,
                i = "slidee" === n;
            at.init || !a && ie(t.target) || ("handle" !== n || me.dragHandle && xe.start !== xe.end) && (!i || (a ? me.touchDragging : me.mouseDragging && t.which < 2)) && (a || r(t), ee(n), at.init = 0, at.$source = e(t.target), at.touch = a, at.pointer = a ? t.originalEvent.touches[0] : t, at.initX = at.pointer.pageX, at.initY = at.pointer.pageY, at.initPos = i ? Ce.cur : xe.cur, at.start = +new Date, at.time = 0, at.path = 0, at.delta = 0, at.locked = 0, at.history = [0, 0, 0, 0], at.pathToLock = i ? a ? 30 : 10 : 0, b.on(a ? z : I, ae), ye.pause(1), (i ? Pe : Se).addClass(me.draggedClass), he("moveStart"), i && (rt = setInterval(_, 10)))
        }

        function ae(e) {
            if (at.released = "mouseup" === e.type || "touchend" === e.type, at.pointer = at.touch ? e.originalEvent[at.released ? "changedTouches" : "touches"][0] : e, at.pathX = at.pointer.pageX - at.initX, at.pathY = at.pointer.pageY - at.initY, at.path = D(A(at.pathX, 2) + A(at.pathY, 2)), at.delta = me.horizontal ? at.pathX : at.pathY, at.released || !(at.path < 1)) {
                if (!at.init) {
                    if (at.path < me.dragThreshold) return at.released ? ne() : a;
                    if (!(me.horizontal ? x(at.pathX) > x(at.pathY) : x(at.pathX) < x(at.pathY))) return ne();
                    at.init = 1
                }
                r(e), !at.locked && at.path > at.pathToLock && at.slidee && (at.locked = 1, at.$source.on(B, s)), at.released && (ne(), me.releaseSwing && at.slidee && (at.swing = (at.delta - at.history[0]) / 40 * 300, at.delta += at.swing, at.tweese = x(at.swing) > 10)), X(at.slidee ? E(at.initPos - at.delta) : V(at.initPos + at.delta))
            }
        }

        function ne() {
            clearInterval(rt), at.released = !0, b.off(at.touch ? z : I, ae), (at.slidee ? Pe : Se).removeClass(me.draggedClass), setTimeout(function() {
                at.$source.off(B, s)
            }), Ce.cur === Ce.dest && at.init && he("moveEnd"), ye.resume(1), at.init = 0
        }

        function ie(t) {
            return ~e.inArray(t.nodeName, T) || e(t).is(me.interactive)
        }

        function re() {
            ye.stop(), b.off("mouseup", re)
        }

        function se(e) {
            switch (r(e), this) {
                case $e[0]:
                case Qe[0]:
                    ye.moveBy($e.is(this) ? me.moveBy : -me.moveBy), b.on("mouseup", re);
                    break;
                case Ze[0]:
                    ye.prev();
                    break;
                case Ge[0]:
                    ye.next();
                    break;
                case Je[0]:
                    ye.prevPage();
                    break;
                case Ke[0]:
                    ye.nextPage()
            }
        }

        function oe(e) {
            return nt.curDelta = (me.horizontal ? e.deltaY || e.deltaX : e.deltaY) || -e.wheelDelta, nt.curDelta /= 1 === e.deltaMode ? 3 : 100, Re ? (h = +new Date, nt.last < h - nt.resetTime && (nt.delta = 0), nt.last = h, nt.delta += nt.curDelta, x(nt.delta) < 1 ? nt.finalDelta = 0 : (nt.finalDelta = E(nt.delta / 1), nt.delta %= 1), nt.finalDelta) : nt.curDelta
        }

        function le(e) {
            e.originalEvent[m] = ye;
            var t = +new Date;
            if (N + me.scrollHijack > t && We[0] !== document && We[0] !== window) return void(N = t);
            if (me.scrollBy && Ce.start !== Ce.end) {
                var a = oe(e.originalEvent);
                (me.scrollTrap || a > 0 && Ce.dest < Ce.end || 0 > a && Ce.dest > Ce.start) && r(e, 1), ye.slideBy(me.scrollBy * a)
            }
        }

        function ce(e) {
            me.clickBar && e.target === Be[0] && (r(e), X(V((me.horizontal ? e.pageX - Be.offset().left : e.pageY - Be.offset().top) - ke / 2)))
        }

        function de(e) {
            if (me.keyboardNavBy) switch (e.which) {
                case me.horizontal ? 37:
                    38: r(e), ye["pages" === me.keyboardNavBy ? "prevPage" : "prev"]();
                    break;
                case me.horizontal ? 39:
                    40: r(e), ye["pages" === me.keyboardNavBy ? "nextPage" : "next"]()
            }
        }

        function ue(e) {
            return ie(this) ? void(e.originalEvent[m + "ignore"] = !0) : void(this.parentNode !== Pe[0] || e.originalEvent[m + "ignore"] || ye.activate(this))
        }

        function fe() {
            this.parentNode === De[0] && ye.activatePage(Ae.index(this))
        }

        function ve(e) {
            me.pauseOnHover && ye["mouseenter" === e.type ? "pause" : "resume"](2)
        }

        function he(e, t) {
            if (Ve[e]) {
                for (ge = Ve[e].length, k.length = 0, pe = 0; ge > pe; pe++) k.push(Ve[e][pe]);
                for (pe = 0; ge > pe; pe++) k[pe].call(ye, e, t)
            }
        }
        var pe, ge, me = e.extend({}, n.defaults, p),
            ye = this,
            we = l(t),
            be = e(t),
            Pe = me.slidee ? e(me.slidee).eq(0) : be.children().eq(0),
            Ie = 0,
            ze = 0,
            Ce = {
                start: 0,
                center: 0,
                end: 0,
                cur: 0,
                dest: 0
            },
            Be = e(me.scrollBar).eq(0),
            Se = Be.children().eq(0),
            Te = 0,
            ke = 0,
            xe = {
                start: 0,
                end: 0,
                cur: 0
            },
            De = e(me.pagesBar),
            Ae = 0,
            Ee = [],
            qe = 0,
            Oe = [],
            Ne = {
                firstItem: 0,
                lastItem: 0,
                centerItem: 0,
                activeItem: null,
                activePage: 0
            },
            He = new u(be[0]),
            Xe = new u(Pe[0]),
            Ye = new u(Be[0]),
            Me = new u(Se[0]),
            je = "basic" === me.itemNav,
            Fe = "forceCentered" === me.itemNav,
            Le = "centered" === me.itemNav || Fe,
            Re = !we && (je || Le || Fe),
            We = me.scrollSource ? e(me.scrollSource) : be,
            Ue = me.dragSource ? e(me.dragSource) : be,
            $e = e(me.forward),
            Qe = e(me.backward),
            Ze = e(me.prev),
            Ge = e(me.next),
            Je = e(me.prevPage),
            Ke = e(me.nextPage),
            Ve = {},
            _e = {},
            et = {},
            tt = {},
            at = {
                released: 1
            },
            nt = {
                last: 0,
                delta: 0,
                resetTime: 200
            },
            it = 0,
            rt = 0,
            st = 0,
            ot = 0;
        we || (t = be[0]), ye.initialized = 0, ye.frame = t, ye.slidee = Pe[0], ye.pos = Ce, ye.rel = Ne, ye.items = Oe, ye.pages = Ee, ye.isPaused = 0, ye.options = me, ye.dragging = at, ye.reload = function() {
            H()
        }, ye.getPos = function(e) {
            if (Re) {
                var t = R(e);
                return -1 !== t ? Oe[t] : !1
            }
            var a = Pe.find(e).eq(0);
            if (a[0]) {
                var n = me.horizontal ? a.offset().left - Pe.offset().left : a.offset().top - Pe.offset().top,
                    i = a[me.horizontal ? "outerWidth" : "outerHeight"]();
                return {
                    start: n,
                    center: n - Ie / 2 + i / 2,
                    end: n - Ie + i,
                    size: i
                }
            }
            return !1
        }, ye.moveBy = function(e) {
            tt.speed = e, !at.init && tt.speed && Ce.cur !== (tt.speed > 0 ? Ce.end : Ce.start) && (tt.lastTime = +new Date, tt.startPos = Ce.cur, ee("button"), at.init = 1, he("moveStart"), y(ot), F())
        }, ye.stop = function() {
            "button" === at.source && (at.init = 0, at.released = 1)
        }, ye.prev = function() {
            ye.activate(null == Ne.activeItem ? 0 : Ne.activeItem - 1)
        }, ye.next = function() {
            ye.activate(null == Ne.activeItem ? 0 : Ne.activeItem + 1)
        }, ye.prevPage = function() {
            ye.activatePage(Ne.activePage - 1)
        }, ye.nextPage = function() {
            ye.activatePage(Ne.activePage + 1)
        }, ye.slideBy = function(e, t) {
            e && (Re ? ye[Le ? "toCenter" : "toStart"](d((Le ? Ne.centerItem : Ne.firstItem) + me.scrollBy * e, 0, Oe.length)) : X(Ce.dest + e, t))
        }, ye.slideTo = function(e, t) {
            X(e, t)
        }, ye.toStart = function(e, t) {
            L("start", e, t)
        }, ye.toEnd = function(e, t) {
            L("end", e, t)
        }, ye.toCenter = function(e, t) {
            L("center", e, t)
        }, ye.getIndex = R, ye.activate = function(e, t) {
            var a = U(e);
            me.smart && a !== !1 && (Le ? ye.toCenter(a, t) : a >= Ne.lastItem ? ye.toStart(a, t) : a <= Ne.firstItem ? ye.toEnd(a, t) : K())
        }, ye.activatePage = function(e, t) {
            l(e) && X(Ee[d(e, 0, Ee.length - 1)], t)
        }, ye.resume = function(e) {
            me.cycleBy && me.cycleInterval && ("items" !== me.cycleBy || Oe[0] && null != Ne.activeItem) && !(e < ye.isPaused) && (ye.isPaused = 0, st ? st = clearTimeout(st) : he("resume"), st = setTimeout(function() {
                switch (he("cycle"), me.cycleBy) {
                    case "items":
                        ye.activate(Ne.activeItem >= Oe.length - 1 ? 0 : Ne.activeItem + 1);
                        break;
                    case "pages":
                        ye.activatePage(Ne.activePage >= Ee.length - 1 ? 0 : Ne.activePage + 1)
                }
            }, me.cycleInterval))
        }, ye.pause = function(e) {
            e < ye.isPaused || (ye.isPaused = e || 100, st && (st = clearTimeout(st), he("pause")))
        }, ye.toggle = function() {
            ye[st ? "pause" : "resume"]()
        }, ye.set = function(t, a) {
            e.isPlainObject(t) ? e.extend(me, t) : me.hasOwnProperty(t) && (me[t] = a)
        }, ye.add = function(t, a) {
            var n = e(t);
            Re ? (null == a || !Oe[0] || a >= Oe.length ? n.appendTo(Pe) : Oe.length && n.insertBefore(Oe[a].el), null != Ne.activeItem && a <= Ne.activeItem && (_e.active = Ne.activeItem += n.length)) : Pe.append(n), H()
        }, ye.remove = function(t) {
            if (Re) {
                var a = W(t);
                if (a > -1) {
                    qe.eq(a).remove();
                    var n = a === Ne.activeItem;
                    null != Ne.activeItem && a < Ne.activeItem && (_e.active = --Ne.activeItem), H(), n && (_e.active = null, ye.activate(Ne.activeItem))
                }
            } else e(t).remove(), H()
        }, ye.moveAfter = function(e, t) {
            G(e, t, 1)
        }, ye.moveBefore = function(e, t) {
            G(e, t)
        }, ye.on = function(e, t) {
            if ("object" === i(e))
                for (var a in e) e.hasOwnProperty(a) && ye.on(a, e[a]);
            else if ("function" === i(t))
                for (var n = e.split(" "), r = 0, s = n.length; s > r; r++) Ve[n[r]] = Ve[n[r]] || [], -1 === J(n[r], t) && Ve[n[r]].push(t);
            else if ("array" === i(t))
                for (var o = 0, l = t.length; l > o; o++) ye.on(e, t[o])
        }, ye.one = function(e, t) {
            function a() {
                t.apply(ye, arguments), ye.off(e, a)
            }
            ye.on(e, a)
        }, ye.off = function(e, t) {
            if (t instanceof Array)
                for (var a = 0, n = t.length; n > a; a++) ye.off(e, t[a]);
            else
                for (var i = e.split(" "), r = 0, s = i.length; s > r; r++)
                    if (Ve[i[r]] = Ve[i[r]] || [], null == t) Ve[i[r]].length = 0;
                    else {
                        var o = J(i[r], t); - 1 !== o && Ve[i[r]].splice(o, 1)
                    }
        }, ye.destroy = function() {
            return We.add(Se).add(Be).add(De).add($e).add(Qe).add(Ze).add(Ge).add(Je).add(Ke).off("." + m), b.off("keydown", de), Ze.add(Ge).add(Je).add(Ke).removeClass(me.disabledClass), qe && null != Ne.activeItem && qe.eq(Ne.activeItem).removeClass(me.activeClass), De.empty(), we || (be.off("." + m), He.restore(), Xe.restore(), Ye.restore(), Me.restore(), e.removeData(t, m)), Oe.length = Ee.length = 0, _e = {}, ye.initialized = 0, ye
        }, ye.init = function() {
            if (!ye.initialized) {
                ye.on(g);
                var e = ["overflow", "position"],
                    t = ["position", "webkitTransform", "msTransform", "transform", "left", "top", "width", "height"];
                He.save.apply(He, e), Ye.save.apply(Ye, e), Xe.save.apply(Xe, t), Me.save.apply(Me, t);
                var a = Se;
                return we || (a = a.add(Pe), be.css("overflow", "hidden"), f || "static" !== be.css("position") || be.css("position", "relative")), f ? v && a.css(f, v) : ("static" === Be.css("position") && Be.css("position", "relative"), a.css({
                    position: "absolute"
                })), me.forward && $e.on(S, se), me.backward && Qe.on(S, se), me.prev && Ze.on(B, se), me.next && Ge.on(B, se), me.prevPage && Je.on(B, se), me.nextPage && Ke.on(B, se), We.on(C, le), Be[0] && Be.on(B, ce), Re && me.activateOn && be.on(me.activateOn + "." + m, "*", ue), De[0] && me.activatePageOn && De.on(me.activatePageOn + "." + m, "*", fe), Ue.on(P, {
                    source: "slidee"
                }, te), Se && Se.on(P, {
                    source: "handle"
                }, te), b.on("keydown", de), we || (be.on("mouseenter." + m + " mouseleave." + m, ve), be.on("scroll." + m, o)), ye.initialized = 1, H(!0), me.cycleBy && !we && ye[me.startPaused ? "pause" : "resume"](), ye
            }
        }
    }

    function i(e) {
        return null == e ? String(e) : "object" == typeof e || "function" == typeof e ? Object.prototype.toString.call(e).match(/\s([a-z]+)/i)[1].toLowerCase() || "object" : typeof e
    }

    function r(e, t) {
        e.preventDefault(), t && e.stopPropagation()
    }

    function s(t) {
        r(t, 1), e(this).off(t.type, s)
    }

    function o() {
        this.scrollLeft = 0, this.scrollTop = 0
    }

    function l(e) {
        return !isNaN(parseFloat(e)) && isFinite(e)
    }

    function c(e, t) {
        return 0 | E(String(e.css(t)).replace(/[^\-0-9.]/g, ""))
    }

    function d(e, t, a) {
        return t > e ? t : e > a ? a : e
    }

    function u(e) {
        var t = {};
        return t.style = {}, t.save = function() {
            if (e && e.nodeType) {
                for (var a = 0; a < arguments.length; a++) t.style[arguments[a]] = e.style[arguments[a]];
                return t
            }
        }, t.restore = function() {
            if (e && e.nodeType) {
                for (var a in t.style) t.style.hasOwnProperty(a) && (e.style[a] = t.style[a]);
                return t
            }
        }, t
    }
    var f, v, h, p = "sly",
        g = "Sly",
        m = p,
        y = t.cancelAnimationFrame || t.cancelRequestAnimationFrame,
        w = t.requestAnimationFrame,
        b = e(document),
        P = "touchstart." + m + " mousedown." + m,
        I = "mousemove." + m + " mouseup." + m,
        z = "touchmove." + m + " touchend." + m,
        C = (document.implementation.hasFeature("Event.wheel", "3.0") ? "wheel." : "mousewheel.") + m,
        B = "click." + m,
        S = "mousedown." + m,
        T = ["INPUT", "SELECT", "BUTTON", "TEXTAREA"],
        k = [],
        x = Math.abs,
        D = Math.sqrt,
        A = Math.pow,
        E = Math.round,
        q = Math.max,
        O = Math.min,
        N = 0;
    b.on(C, function(e) {
            var t = e.originalEvent[m],
                a = +new Date;
            (!t || t.options.scrollHijack < a - N) && (N = a)
        }),
        function(e) {
            function t(e) {
                var t = (new Date).getTime(),
                    n = Math.max(0, 16 - (t - a)),
                    i = setTimeout(e, n);
                return a = t, i
            }
            w = e.requestAnimationFrame || e.webkitRequestAnimationFrame || t;
            var a = (new Date).getTime(),
                n = e.cancelAnimationFrame || e.webkitCancelAnimationFrame || e.clearTimeout;
            y = function(t) {
                n.call(e, t)
            }
        }(window),
        function() {
            function e(e) {
                for (var n = 0, i = t.length; i > n; n++) {
                    var r = t[n] ? t[n] + e.charAt(0).toUpperCase() + e.slice(1) : e;
                    if (null != a.style[r]) return r
                }
            }
            var t = ["", "Webkit", "Moz", "ms", "O"],
                a = document.createElement("div");
            f = e("transform"), v = e("perspective") ? "translateZ(0) " : ""
        }(), t[g] = n, e.fn[p] = function(t, a) {
            var r, s;
            return e.isPlainObject(t) || (("string" === i(t) || t === !1) && (r = t === !1 ? "destroy" : t, s = Array.prototype.slice.call(arguments, 1)), t = {}), this.each(function(i, o) {
                var l = e.data(o, m);
                l || r ? l && r && l[r] && l[r].apply(l, s) : l = e.data(o, m, new n(o, t, a).init())
            })
        }, n.defaults = {
            slidee: null,
            horizontal: !1,
            itemNav: null,
            itemSelector: null,
            smart: !1,
            activateOn: null,
            activateMiddle: !1,
            scrollSource: null,
            scrollBy: 0,
            scrollHijack: 300,
            scrollTrap: !1,
            dragSource: null,
            mouseDragging: !1,
            touchDragging: !1,
            releaseSwing: !1,
            swingSpeed: .2,
            elasticBounds: !1,
            dragThreshold: 3,
            interactive: null,
            scrollBar: null,
            dragHandle: !1,
            dynamicHandle: !1,
            minHandleSize: 50,
            clickBar: !1,
            syncSpeed: .5,
            pagesBar: null,
            activatePageOn: null,
            pageBuilder: function(e) {
                return "<li>" + (e + 1) + "</li>"
            },
            forward: null,
            backward: null,
            prev: null,
            next: null,
            prevPage: null,
            nextPage: null,
            cycleBy: null,
            cycleInterval: 5e3,
            pauseOnHover: !1,
            startPaused: !1,
            moveBy: 300,
            speed: 0,
            easing: "swing",
            startAt: null,
            keyboardNavBy: null,
            draggedClass: "dragged",
            activeClass: "active",
            disabledClass: "disabled"
        }
}(jQuery, window);
! function() {
    "use strict";

    function e(e) {
        e.fn.swiper = function(a) {
            var s;
            return e(this).each(function() {
                var e = new t(this, a);
                s || (s = e)
            }), s
        }
    }
    var a, t = function(e, s) {
        function r(e) {
            return Math.floor(e)
        }

        function i() {
            var e = T.params.autoplay,
                a = T.slides.eq(T.activeIndex);
            a.attr("data-swiper-autoplay") && (e = a.attr("data-swiper-autoplay") || T.params.autoplay), T.autoplayTimeoutId = setTimeout(function() {
                T.params.loop ? (T.fixLoop(), T._slideNext(), T.emit("onAutoplay", T)) : T.isEnd ? s.autoplayStopOnLast ? T.stopAutoplay() : (T._slideTo(0), T.emit("onAutoplay", T)) : (T._slideNext(), T.emit("onAutoplay", T))
            }, e)
        }

        function n(e, t) {
            var s = a(e.target);
            if (!s.is(t))
                if ("string" == typeof t) s = s.parents(t);
                else if (t.nodeType) {
                var r;
                return s.parents().each(function(e, a) {
                    a === t && (r = t)
                }), r ? t : void 0
            }
            return 0 !== s.length ? s[0] : void 0
        }

        function o(e, a) {
            a = a || {};
            var t = window.MutationObserver || window.WebkitMutationObserver,
                s = new t(function(e) {
                    e.forEach(function(e) {
                        T.onResize(!0), T.emit("onObserverUpdate", T, e)
                    })
                });
            s.observe(e, {
                attributes: "undefined" == typeof a.attributes || a.attributes,
                childList: "undefined" == typeof a.childList || a.childList,
                characterData: "undefined" == typeof a.characterData || a.characterData
            }), T.observers.push(s)
        }

        function l(e) {
            e.originalEvent && (e = e.originalEvent);
            var a = e.keyCode || e.charCode;
            if (!T.params.allowSwipeToNext && (T.isHorizontal() && 39 === a || !T.isHorizontal() && 40 === a)) return !1;
            if (!T.params.allowSwipeToPrev && (T.isHorizontal() && 37 === a || !T.isHorizontal() && 38 === a)) return !1;
            if (!(e.shiftKey || e.altKey || e.ctrlKey || e.metaKey || document.activeElement && document.activeElement.nodeName && ("input" === document.activeElement.nodeName.toLowerCase() || "textarea" === document.activeElement.nodeName.toLowerCase()))) {
                if (37 === a || 39 === a || 38 === a || 40 === a) {
                    var t = !1;
                    if (T.container.parents("." + T.params.slideClass).length > 0 && 0 === T.container.parents("." + T.params.slideActiveClass).length) return;
                    var s = {
                            left: window.pageXOffset,
                            top: window.pageYOffset
                        },
                        r = window.innerWidth,
                        i = window.innerHeight,
                        n = T.container.offset();
                    T.rtl && (n.left = n.left - T.container[0].scrollLeft);
                    for (var o = [
                            [n.left, n.top],
                            [n.left + T.width, n.top],
                            [n.left, n.top + T.height],
                            [n.left + T.width, n.top + T.height]
                        ], l = 0; l < o.length; l++) {
                        var p = o[l];
                        p[0] >= s.left && p[0] <= s.left + r && p[1] >= s.top && p[1] <= s.top + i && (t = !0)
                    }
                    if (!t) return
                }
                T.isHorizontal() ? (37 !== a && 39 !== a || (e.preventDefault ? e.preventDefault() : e.returnValue = !1), (39 === a && !T.rtl || 37 === a && T.rtl) && T.slideNext(), (37 === a && !T.rtl || 39 === a && T.rtl) && T.slidePrev()) : (38 !== a && 40 !== a || (e.preventDefault ? e.preventDefault() : e.returnValue = !1), 40 === a && T.slideNext(), 38 === a && T.slidePrev())
            }
        }

        function p() {
            var e = "onwheel",
                a = e in document;
            if (!a) {
                var t = document.createElement("div");
                t.setAttribute(e, "return;"), a = "function" == typeof t[e]
            }
            return !a && document.implementation && document.implementation.hasFeature && document.implementation.hasFeature("", "") !== !0 && (a = document.implementation.hasFeature("Events.wheel", "3.0")), a
        }

        function d(e) {
            e.originalEvent && (e = e.originalEvent);
            var a = 0,
                t = T.rtl ? -1 : 1,
                s = u(e);
            if (T.params.mousewheelForceToAxis)
                if (T.isHorizontal()) {
                    if (!(Math.abs(s.pixelX) > Math.abs(s.pixelY))) return;
                    a = s.pixelX * t
                } else {
                    if (!(Math.abs(s.pixelY) > Math.abs(s.pixelX))) return;
                    a = s.pixelY
                }
            else a = Math.abs(s.pixelX) > Math.abs(s.pixelY) ? -s.pixelX * t : -s.pixelY;
            if (0 !== a) {
                if (T.params.mousewheelInvert && (a = -a), T.params.freeMode) {
                    var r = T.getWrapperTranslate() + a * T.params.mousewheelSensitivity,
                        i = T.isBeginning,
                        n = T.isEnd;
                    if (r >= T.minTranslate() && (r = T.minTranslate()), r <= T.maxTranslate() && (r = T.maxTranslate()), T.setWrapperTransition(0), T.setWrapperTranslate(r), T.updateProgress(), T.updateActiveIndex(), (!i && T.isBeginning || !n && T.isEnd) && T.updateClasses(), T.params.freeModeSticky ? (clearTimeout(T.mousewheel.timeout), T.mousewheel.timeout = setTimeout(function() {
                            T.slideReset()
                        }, 300)) : T.params.lazyLoading && T.lazy && T.lazy.load(), T.emit("onScroll", T, e), T.params.autoplay && T.params.autoplayDisableOnInteraction && T.stopAutoplay(), 0 === r || r === T.maxTranslate()) return
                } else {
                    if ((new window.Date).getTime() - T.mousewheel.lastScrollTime > 60)
                        if (0 > a)
                            if (T.isEnd && !T.params.loop || T.animating) {
                                if (T.params.mousewheelReleaseOnEdges) return !0
                            } else T.slideNext(), T.emit("onScroll", T, e);
                    else if (T.isBeginning && !T.params.loop || T.animating) {
                        if (T.params.mousewheelReleaseOnEdges) return !0
                    } else T.slidePrev(), T.emit("onScroll", T, e);
                    T.mousewheel.lastScrollTime = (new window.Date).getTime()
                }
                return e.preventDefault ? e.preventDefault() : e.returnValue = !1, !1
            }
        }

        function u(e) {
            var a = 10,
                t = 40,
                s = 800,
                r = 0,
                i = 0,
                n = 0,
                o = 0;
            return "detail" in e && (i = e.detail), "wheelDelta" in e && (i = -e.wheelDelta / 120), "wheelDeltaY" in e && (i = -e.wheelDeltaY / 120), "wheelDeltaX" in e && (r = -e.wheelDeltaX / 120), "axis" in e && e.axis === e.HORIZONTAL_AXIS && (r = i, i = 0), n = r * a, o = i * a, "deltaY" in e && (o = e.deltaY), "deltaX" in e && (n = e.deltaX), (n || o) && e.deltaMode && (1 === e.deltaMode ? (n *= t, o *= t) : (n *= s, o *= s)), n && !r && (r = 1 > n ? -1 : 1), o && !i && (i = 1 > o ? -1 : 1), {
                spinX: r,
                spinY: i,
                pixelX: n,
                pixelY: o
            }
        }

        function m(e, t) {
            e = a(e);
            var s, r, i, n = T.rtl ? -1 : 1;
            s = e.attr("data-swiper-parallax") || "0", r = e.attr("data-swiper-parallax-x"), i = e.attr("data-swiper-parallax-y"), r || i ? (r = r || "0", i = i || "0") : T.isHorizontal() ? (r = s, i = "0") : (i = s, r = "0"), r = r.indexOf("%") >= 0 ? parseInt(r, 10) * t * n + "%" : r * t * n + "px", i = i.indexOf("%") >= 0 ? parseInt(i, 10) * t + "%" : i * t + "px", e.transform("translate3d(" + r + ", " + i + ",0px)")
        }

        function c(e) {
            return 0 !== e.indexOf("on") && (e = e[0] !== e[0].toUpperCase() ? "on" + e[0].toUpperCase() + e.substring(1) : "on" + e), e
        }
        if (!(this instanceof t)) return new t(e, s);
        var g = {
                direction: "horizontal",
                touchEventsTarget: "container",
                initialSlide: 0,
                speed: 300,
                autoplay: !1,
                autoplayDisableOnInteraction: !0,
                autoplayStopOnLast: !1,
                iOSEdgeSwipeDetection: !1,
                iOSEdgeSwipeThreshold: 20,
                freeMode: !1,
                freeModeMomentum: !0,
                freeModeMomentumRatio: 1,
                freeModeMomentumBounce: !0,
                freeModeMomentumBounceRatio: 1,
                freeModeMomentumVelocityRatio: 1,
                freeModeSticky: !1,
                freeModeMinimumVelocity: .02,
                autoHeight: !1,
                setWrapperSize: !1,
                virtualTranslate: !1,
                effect: "slide",
                coverflow: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: !0
                },
                flip: {
                    slideShadows: !0,
                    limitRotation: !0
                },
                cube: {
                    slideShadows: !0,
                    shadow: !0,
                    shadowOffset: 20,
                    shadowScale: .94
                },
                fade: {
                    crossFade: !1
                },
                parallax: !1,
                zoom: !1,
                zoomMax: 3,
                zoomMin: 1,
                zoomToggle: !0,
                scrollbar: null,
                scrollbarHide: !0,
                scrollbarDraggable: !1,
                scrollbarSnapOnRelease: !1,
                keyboardControl: !1,
                mousewheelControl: !1,
                mousewheelReleaseOnEdges: !1,
                mousewheelInvert: !1,
                mousewheelForceToAxis: !1,
                mousewheelSensitivity: 1,
                mousewheelEventsTarged: "container",
                hashnav: !1,
                hashnavWatchState: !1,
                history: !1,
                replaceState: !1,
                breakpoints: void 0,
                spaceBetween: 0,
                slidesPerView: 1,
                slidesPerColumn: 1,
                slidesPerColumnFill: "column",
                slidesPerGroup: 1,
                centeredSlides: !1,
                slidesOffsetBefore: 0,
                slidesOffsetAfter: 0,
                roundLengths: !1,
                touchRatio: 1,
                touchAngle: 45,
                simulateTouch: !0,
                shortSwipes: !0,
                longSwipes: !0,
                longSwipesRatio: .5,
                longSwipesMs: 300,
                followFinger: !0,
                onlyExternal: !1,
                threshold: 0,
                touchMoveStopPropagation: !0,
                touchReleaseOnEdges: !1,
                uniqueNavElements: !0,
                pagination: null,
                paginationElement: "span",
                paginationClickable: !1,
                paginationHide: !1,
                paginationBulletRender: null,
                paginationProgressRender: null,
                paginationFractionRender: null,
                paginationCustomRender: null,
                paginationType: "bullets",
                resistance: !0,
                resistanceRatio: .85,
                nextButton: null,
                prevButton: null,
                watchSlidesProgress: !1,
                watchSlidesVisibility: !1,
                grabCursor: !1,
                preventClicks: !0,
                preventClicksPropagation: !0,
                slideToClickedSlide: !1,
                lazyLoading: !1,
                lazyLoadingInPrevNext: !1,
                lazyLoadingInPrevNextAmount: 1,
                lazyLoadingOnTransitionStart: !1,
                preloadImages: !0,
                updateOnImagesReady: !0,
                loop: !1,
                loopAdditionalSlides: 0,
                loopedSlides: null,
                control: void 0,
                controlInverse: !1,
                controlBy: "slide",
                normalizeSlideIndex: !0,
                allowSwipeToPrev: !0,
                allowSwipeToNext: !0,
                swipeHandler: null,
                noSwiping: !0,
                noSwipingClass: "swiper-no-swiping",
                passiveListeners: !0,
                containerModifierClass: "swiper-container-",
                slideClass: "swiper-slide",
                slideActiveClass: "swiper-slide-active",
                slideDuplicateActiveClass: "swiper-slide-duplicate-active",
                slideVisibleClass: "swiper-slide-visible",
                slideDuplicateClass: "swiper-slide-duplicate",
                slideNextClass: "swiper-slide-next",
                slideDuplicateNextClass: "swiper-slide-duplicate-next",
                slidePrevClass: "swiper-slide-prev",
                slideDuplicatePrevClass: "swiper-slide-duplicate-prev",
                wrapperClass: "swiper-wrapper",
                bulletClass: "swiper-pagination-bullet",
                bulletActiveClass: "swiper-pagination-bullet-active",
                buttonDisabledClass: "swiper-button-disabled",
                paginationCurrentClass: "swiper-pagination-current",
                paginationTotalClass: "swiper-pagination-total",
                paginationHiddenClass: "swiper-pagination-hidden",
                paginationProgressbarClass: "swiper-pagination-progressbar",
                paginationClickableClass: "swiper-pagination-clickable",
                paginationModifierClass: "swiper-pagination-",
                lazyLoadingClass: "swiper-lazy",
                lazyStatusLoadingClass: "swiper-lazy-loading",
                lazyStatusLoadedClass: "swiper-lazy-loaded",
                lazyPreloaderClass: "swiper-lazy-preloader",
                notificationClass: "swiper-notification",
                preloaderClass: "preloader",
                zoomContainerClass: "swiper-zoom-container",
                observer: !1,
                observeParents: !1,
                a11y: !1,
                prevSlideMessage: "Previous slide",
                nextSlideMessage: "Next slide",
                firstSlideMessage: "This is the first slide",
                lastSlideMessage: "This is the last slide",
                paginationBulletMessage: "Go to slide {{index}}",
                runCallbacksOnInit: !0
            },
            h = s && s.virtualTranslate;
        s = s || {};
        var f = {};
        for (var v in s)
            if ("object" != typeof s[v] || null === s[v] || s[v].nodeType || s[v] === window || s[v] === document || "undefined" != typeof Dom7 && s[v] instanceof Dom7 || "undefined" != typeof jQuery && s[v] instanceof jQuery) f[v] = s[v];
            else {
                f[v] = {};
                for (var w in s[v]) f[v][w] = s[v][w]
            }
        for (var y in g)
            if ("undefined" == typeof s[y]) s[y] = g[y];
            else if ("object" == typeof s[y])
            for (var x in g[y]) "undefined" == typeof s[y][x] && (s[y][x] = g[y][x]);
        var T = this;
        if (T.params = s, T.originalParams = f, T.classNames = [], "undefined" != typeof a && "undefined" != typeof Dom7 && (a = Dom7), ("undefined" != typeof a || (a = "undefined" == typeof Dom7 ? window.Dom7 || window.Zepto || window.jQuery : Dom7)) && (T.$ = a, T.currentBreakpoint = void 0, T.getActiveBreakpoint = function() {
                if (!T.params.breakpoints) return !1;
                var e, a = !1,
                    t = [];
                for (e in T.params.breakpoints) T.params.breakpoints.hasOwnProperty(e) && t.push(e);
                t.sort(function(e, a) {
                    return parseInt(e, 10) > parseInt(a, 10)
                });
                for (var s = 0; s < t.length; s++) e = t[s], e >= window.innerWidth && !a && (a = e);
                return a || "max"
            }, T.setBreakpoint = function() {
                var e = T.getActiveBreakpoint();
                if (e && T.currentBreakpoint !== e) {
                    var a = e in T.params.breakpoints ? T.params.breakpoints[e] : T.originalParams,
                        t = T.params.loop && a.slidesPerView !== T.params.slidesPerView;
                    for (var s in a) T.params[s] = a[s];
                    T.currentBreakpoint = e, t && T.destroyLoop && T.reLoop(!0)
                }
            }, T.params.breakpoints && T.setBreakpoint(), T.container = a(e), 0 !== T.container.length)) {
            if (T.container.length > 1) {
                var b = [];
                return T.container.each(function() {
                    b.push(new t(this, s))
                }), b
            }
            T.container[0].swiper = T, T.container.data("swiper", T), T.classNames.push(T.params.containerModifierClass + T.params.direction), T.params.freeMode && T.classNames.push(T.params.containerModifierClass + "free-mode"), T.support.flexbox || (T.classNames.push(T.params.containerModifierClass + "no-flexbox"), T.params.slidesPerColumn = 1), T.params.autoHeight && T.classNames.push(T.params.containerModifierClass + "autoheight"), (T.params.parallax || T.params.watchSlidesVisibility) && (T.params.watchSlidesProgress = !0), T.params.touchReleaseOnEdges && (T.params.resistanceRatio = 0), ["cube", "coverflow", "flip"].indexOf(T.params.effect) >= 0 && (T.support.transforms3d ? (T.params.watchSlidesProgress = !0, T.classNames.push(T.params.containerModifierClass + "3d")) : T.params.effect = "slide"), "slide" !== T.params.effect && T.classNames.push(T.params.containerModifierClass + T.params.effect), "cube" === T.params.effect && (T.params.resistanceRatio = 0, T.params.slidesPerView = 1, T.params.slidesPerColumn = 1, T.params.slidesPerGroup = 1, T.params.centeredSlides = !1, T.params.spaceBetween = 0, T.params.virtualTranslate = !0, T.params.setWrapperSize = !1), "fade" !== T.params.effect && "flip" !== T.params.effect || (T.params.slidesPerView = 1, T.params.slidesPerColumn = 1, T.params.slidesPerGroup = 1, T.params.watchSlidesProgress = !0, T.params.spaceBetween = 0, T.params.setWrapperSize = !1, "undefined" == typeof h && (T.params.virtualTranslate = !0)), T.params.grabCursor && T.support.touch && (T.params.grabCursor = !1), T.wrapper = T.container.children("." + T.params.wrapperClass), T.params.pagination && (T.paginationContainer = a(T.params.pagination), T.params.uniqueNavElements && "string" == typeof T.params.pagination && T.paginationContainer.length > 1 && 1 === T.container.find(T.params.pagination).length && (T.paginationContainer = T.container.find(T.params.pagination)), "bullets" === T.params.paginationType && T.params.paginationClickable ? T.paginationContainer.addClass(T.params.paginationModifierClass + "clickable") : T.params.paginationClickable = !1, T.paginationContainer.addClass(T.params.paginationModifierClass + T.params.paginationType)), (T.params.nextButton || T.params.prevButton) && (T.params.nextButton && (T.nextButton = a(T.params.nextButton), T.params.uniqueNavElements && "string" == typeof T.params.nextButton && T.nextButton.length > 1 && 1 === T.container.find(T.params.nextButton).length && (T.nextButton = T.container.find(T.params.nextButton))), T.params.prevButton && (T.prevButton = a(T.params.prevButton), T.params.uniqueNavElements && "string" == typeof T.params.prevButton && T.prevButton.length > 1 && 1 === T.container.find(T.params.prevButton).length && (T.prevButton = T.container.find(T.params.prevButton)))), T.isHorizontal = function() {
                return "horizontal" === T.params.direction
            }, T.rtl = T.isHorizontal() && ("rtl" === T.container[0].dir.toLowerCase() || "rtl" === T.container.css("direction")), T.rtl && T.classNames.push(T.params.containerModifierClass + "rtl"), T.rtl && (T.wrongRTL = "-webkit-box" === T.wrapper.css("display")), T.params.slidesPerColumn > 1 && T.classNames.push(T.params.containerModifierClass + "multirow"), T.device.android && T.classNames.push(T.params.containerModifierClass + "android"), T.container.addClass(T.classNames.join(" ")), T.translate = 0, T.progress = 0, T.velocity = 0, T.lockSwipeToNext = function() {
                T.params.allowSwipeToNext = !1, T.params.allowSwipeToPrev === !1 && T.params.grabCursor && T.unsetGrabCursor()
            }, T.lockSwipeToPrev = function() {
                T.params.allowSwipeToPrev = !1, T.params.allowSwipeToNext === !1 && T.params.grabCursor && T.unsetGrabCursor()
            }, T.lockSwipes = function() {
                T.params.allowSwipeToNext = T.params.allowSwipeToPrev = !1, T.params.grabCursor && T.unsetGrabCursor()
            }, T.unlockSwipeToNext = function() {
                T.params.allowSwipeToNext = !0, T.params.allowSwipeToPrev === !0 && T.params.grabCursor && T.setGrabCursor()
            }, T.unlockSwipeToPrev = function() {
                T.params.allowSwipeToPrev = !0, T.params.allowSwipeToNext === !0 && T.params.grabCursor && T.setGrabCursor()
            }, T.unlockSwipes = function() {
                T.params.allowSwipeToNext = T.params.allowSwipeToPrev = !0, T.params.grabCursor && T.setGrabCursor()
            }, T.setGrabCursor = function(e) {
                T.container[0].style.cursor = "move", T.container[0].style.cursor = e ? "-webkit-grabbing" : "-webkit-grab", T.container[0].style.cursor = e ? "-moz-grabbin" : "-moz-grab", T.container[0].style.cursor = e ? "grabbing" : "grab"
            }, T.unsetGrabCursor = function() {
                T.container[0].style.cursor = ""
            }, T.params.grabCursor && T.setGrabCursor(), T.imagesToLoad = [], T.imagesLoaded = 0, T.loadImage = function(e, a, t, s, r, i) {
                function n() {
                    i && i()
                }
                var o;
                e.complete && r ? n() : a ? (o = new window.Image, o.onload = n, o.onerror = n, s && (o.sizes = s), t && (o.srcset = t), a && (o.src = a)) : n()
            }, T.preloadImages = function() {
                function e() {
                    "undefined" != typeof T && null !== T && T && (void 0 !== T.imagesLoaded && T.imagesLoaded++, T.imagesLoaded === T.imagesToLoad.length && (T.params.updateOnImagesReady && T.update(), T.emit("onImagesReady", T)))
                }
                T.imagesToLoad = T.container.find("img");
                for (var a = 0; a < T.imagesToLoad.length; a++) T.loadImage(T.imagesToLoad[a], T.imagesToLoad[a].currentSrc || T.imagesToLoad[a].getAttribute("src"), T.imagesToLoad[a].srcset || T.imagesToLoad[a].getAttribute("srcset"), T.imagesToLoad[a].sizes || T.imagesToLoad[a].getAttribute("sizes"), !0, e)
            }, T.autoplayTimeoutId = void 0, T.autoplaying = !1, T.autoplayPaused = !1, T.startAutoplay = function() {
                return "undefined" == typeof T.autoplayTimeoutId && !!T.params.autoplay && !T.autoplaying && (T.autoplaying = !0, T.emit("onAutoplayStart", T), void i())
            }, T.stopAutoplay = function(e) {
                T.autoplayTimeoutId && (T.autoplayTimeoutId && clearTimeout(T.autoplayTimeoutId), T.autoplaying = !1, T.autoplayTimeoutId = void 0, T.emit("onAutoplayStop", T))
            }, T.pauseAutoplay = function(e) {
                T.autoplayPaused || (T.autoplayTimeoutId && clearTimeout(T.autoplayTimeoutId), T.autoplayPaused = !0, 0 === e ? (T.autoplayPaused = !1, i()) : T.wrapper.transitionEnd(function() {
                    T && (T.autoplayPaused = !1, T.autoplaying ? i() : T.stopAutoplay())
                }))
            }, T.minTranslate = function() {
                return -T.snapGrid[0]
            }, T.maxTranslate = function() {
                return -T.snapGrid[T.snapGrid.length - 1]
            }, T.updateAutoHeight = function() {
                var e, a = [],
                    t = 0;
                if ("auto" !== T.params.slidesPerView && T.params.slidesPerView > 1)
                    for (e = 0; e < Math.ceil(T.params.slidesPerView); e++) {
                        var s = T.activeIndex + e;
                        if (s > T.slides.length) break;
                        a.push(T.slides.eq(s)[0])
                    } else a.push(T.slides.eq(T.activeIndex)[0]);
                for (e = 0; e < a.length; e++)
                    if ("undefined" != typeof a[e]) {
                        var r = a[e].offsetHeight;
                        t = r > t ? r : t
                    }
                t && T.wrapper.css("height", t + "px")
            }, T.updateContainerSize = function() {
                var e, a;
                e = "undefined" != typeof T.params.width ? T.params.width : T.container[0].clientWidth, a = "undefined" != typeof T.params.height ? T.params.height : T.container[0].clientHeight, 0 === e && T.isHorizontal() || 0 === a && !T.isHorizontal() || (e = e - parseInt(T.container.css("padding-left"), 10) - parseInt(T.container.css("padding-right"), 10), a = a - parseInt(T.container.css("padding-top"), 10) - parseInt(T.container.css("padding-bottom"), 10), T.width = e, T.height = a, T.size = T.isHorizontal() ? T.width : T.height)
            }, T.updateSlidesSize = function() {
                T.slides = T.wrapper.children("." + T.params.slideClass), T.snapGrid = [], T.slidesGrid = [], T.slidesSizesGrid = [];
                var e, a = T.params.spaceBetween,
                    t = -T.params.slidesOffsetBefore,
                    s = 0,
                    i = 0;
                if ("undefined" != typeof T.size) {
                    "string" == typeof a && a.indexOf("%") >= 0 && (a = parseFloat(a.replace("%", "")) / 100 * T.size), T.virtualSize = -a, T.rtl ? T.slides.css({
                        marginLeft: "",
                        marginTop: ""
                    }) : T.slides.css({
                        marginRight: "",
                        marginBottom: ""
                    });
                    var n;
                    T.params.slidesPerColumn > 1 && (n = Math.floor(T.slides.length / T.params.slidesPerColumn) === T.slides.length / T.params.slidesPerColumn ? T.slides.length : Math.ceil(T.slides.length / T.params.slidesPerColumn) * T.params.slidesPerColumn, "auto" !== T.params.slidesPerView && "row" === T.params.slidesPerColumnFill && (n = Math.max(n, T.params.slidesPerView * T.params.slidesPerColumn)));
                    var o, l = T.params.slidesPerColumn,
                        p = n / l,
                        d = p - (T.params.slidesPerColumn * p - T.slides.length);
                    for (e = 0; e < T.slides.length; e++) {
                        o = 0;
                        var u = T.slides.eq(e);
                        if (T.params.slidesPerColumn > 1) {
                            var m, c, g;
                            "column" === T.params.slidesPerColumnFill ? (c = Math.floor(e / l), g = e - c * l, (c > d || c === d && g === l - 1) && ++g >= l && (g = 0, c++), m = c + g * n / l, u.css({
                                "-webkit-box-ordinal-group": m,
                                "-moz-box-ordinal-group": m,
                                "-ms-flex-order": m,
                                "-webkit-order": m,
                                order: m
                            })) : (g = Math.floor(e / p), c = e - g * p), u.css("margin-" + (T.isHorizontal() ? "top" : "left"), 0 !== g && T.params.spaceBetween && T.params.spaceBetween + "px").attr("data-swiper-column", c).attr("data-swiper-row", g)
                        }
                        "none" !== u.css("display") && ("auto" === T.params.slidesPerView ? (o = T.isHorizontal() ? u.outerWidth(!0) : u.outerHeight(!0), T.params.roundLengths && (o = r(o))) : (o = (T.size - (T.params.slidesPerView - 1) * a) / T.params.slidesPerView, T.params.roundLengths && (o = r(o)), T.isHorizontal() ? T.slides[e].style.width = o + "px" : T.slides[e].style.height = o + "px"), T.slides[e].swiperSlideSize = o, T.slidesSizesGrid.push(o), T.params.centeredSlides ? (t = t + o / 2 + s / 2 + a, 0 === e && (t = t - T.size / 2 - a), Math.abs(t) < .001 && (t = 0), i % T.params.slidesPerGroup === 0 && T.snapGrid.push(t), T.slidesGrid.push(t)) : (i % T.params.slidesPerGroup === 0 && T.snapGrid.push(t), T.slidesGrid.push(t), t = t + o + a), T.virtualSize += o + a, s = o, i++)
                    }
                    T.virtualSize = Math.max(T.virtualSize, T.size) + T.params.slidesOffsetAfter;
                    var h;
                    if (T.rtl && T.wrongRTL && ("slide" === T.params.effect || "coverflow" === T.params.effect) && T.wrapper.css({
                            width: T.virtualSize + T.params.spaceBetween + "px"
                        }), T.support.flexbox && !T.params.setWrapperSize || (T.isHorizontal() ? T.wrapper.css({
                            width: T.virtualSize + T.params.spaceBetween + "px"
                        }) : T.wrapper.css({
                            height: T.virtualSize + T.params.spaceBetween + "px"
                        })), T.params.slidesPerColumn > 1 && (T.virtualSize = (o + T.params.spaceBetween) * n, T.virtualSize = Math.ceil(T.virtualSize / T.params.slidesPerColumn) - T.params.spaceBetween, T.isHorizontal() ? T.wrapper.css({
                            width: T.virtualSize + T.params.spaceBetween + "px"
                        }) : T.wrapper.css({
                            height: T.virtualSize + T.params.spaceBetween + "px"
                        }), T.params.centeredSlides)) {
                        for (h = [], e = 0; e < T.snapGrid.length; e++) T.snapGrid[e] < T.virtualSize + T.snapGrid[0] && h.push(T.snapGrid[e]);
                        T.snapGrid = h
                    }
                    if (!T.params.centeredSlides) {
                        for (h = [], e = 0; e < T.snapGrid.length; e++) T.snapGrid[e] <= T.virtualSize - T.size && h.push(T.snapGrid[e]);
                        T.snapGrid = h, Math.floor(T.virtualSize - T.size) - Math.floor(T.snapGrid[T.snapGrid.length - 1]) > 1 && T.snapGrid.push(T.virtualSize - T.size)
                    }
                    0 === T.snapGrid.length && (T.snapGrid = [0]), 0 !== T.params.spaceBetween && (T.isHorizontal() ? T.rtl ? T.slides.css({
                        marginLeft: a + "px"
                    }) : T.slides.css({
                        marginRight: a + "px"
                    }) : T.slides.css({
                        marginBottom: a + "px"
                    })), T.params.watchSlidesProgress && T.updateSlidesOffset()
                }
            }, T.updateSlidesOffset = function() {
                for (var e = 0; e < T.slides.length; e++) T.slides[e].swiperSlideOffset = T.isHorizontal() ? T.slides[e].offsetLeft : T.slides[e].offsetTop
            }, T.currentSlidesPerView = function() {
                var e, a, t = 1;
                if (T.params.centeredSlides) {
                    var s, r = T.slides[T.activeIndex].swiperSlideSize;
                    for (e = T.activeIndex + 1; e < T.slides.length; e++) T.slides[e] && !s && (r += T.slides[e].swiperSlideSize, t++, r > T.size && (s = !0));
                    for (a = T.activeIndex - 1; a >= 0; a--) T.slides[a] && !s && (r += T.slides[a].swiperSlideSize, t++, r > T.size && (s = !0))
                } else
                    for (e = T.activeIndex + 1; e < T.slides.length; e++) T.slidesGrid[e] - T.slidesGrid[T.activeIndex] < T.size && t++;
                return t
            }, T.updateSlidesProgress = function(e) {
                if ("undefined" == typeof e && (e = T.translate || 0), 0 !== T.slides.length) {
                    "undefined" == typeof T.slides[0].swiperSlideOffset && T.updateSlidesOffset();
                    var a = -e;
                    T.rtl && (a = e), T.slides.removeClass(T.params.slideVisibleClass);
                    for (var t = 0; t < T.slides.length; t++) {
                        var s = T.slides[t],
                            r = (a + (T.params.centeredSlides ? T.minTranslate() : 0) - s.swiperSlideOffset) / (s.swiperSlideSize + T.params.spaceBetween);
                        if (T.params.watchSlidesVisibility) {
                            var i = -(a - s.swiperSlideOffset),
                                n = i + T.slidesSizesGrid[t],
                                o = i >= 0 && i < T.size || n > 0 && n <= T.size || 0 >= i && n >= T.size;
                            o && T.slides.eq(t).addClass(T.params.slideVisibleClass)
                        }
                        s.progress = T.rtl ? -r : r
                    }
                }
            }, T.updateProgress = function(e) {
                "undefined" == typeof e && (e = T.translate || 0);
                var a = T.maxTranslate() - T.minTranslate(),
                    t = T.isBeginning,
                    s = T.isEnd;
                0 === a ? (T.progress = 0, T.isBeginning = T.isEnd = !0) : (T.progress = (e - T.minTranslate()) / a, T.isBeginning = T.progress <= 0, T.isEnd = T.progress >= 1), T.isBeginning && !t && T.emit("onReachBeginning", T), T.isEnd && !s && T.emit("onReachEnd", T), T.params.watchSlidesProgress && T.updateSlidesProgress(e), T.emit("onProgress", T, T.progress)
            }, T.updateActiveIndex = function() {
                var e, a, t, s = T.rtl ? T.translate : -T.translate;
                for (a = 0; a < T.slidesGrid.length; a++) "undefined" != typeof T.slidesGrid[a + 1] ? s >= T.slidesGrid[a] && s < T.slidesGrid[a + 1] - (T.slidesGrid[a + 1] - T.slidesGrid[a]) / 2 ? e = a : s >= T.slidesGrid[a] && s < T.slidesGrid[a + 1] && (e = a + 1) : s >= T.slidesGrid[a] && (e = a);
                T.params.normalizeSlideIndex && (0 > e || "undefined" == typeof e) && (e = 0), t = Math.floor(e / T.params.slidesPerGroup), t >= T.snapGrid.length && (t = T.snapGrid.length - 1), e !== T.activeIndex && (T.snapIndex = t, T.previousIndex = T.activeIndex, T.activeIndex = e, T.updateClasses(), T.updateRealIndex())
            }, T.updateRealIndex = function() {
                T.realIndex = parseInt(T.slides.eq(T.activeIndex).attr("data-swiper-slide-index") || T.activeIndex, 10)
            }, T.updateClasses = function() {
                T.slides.removeClass(T.params.slideActiveClass + " " + T.params.slideNextClass + " " + T.params.slidePrevClass + " " + T.params.slideDuplicateActiveClass + " " + T.params.slideDuplicateNextClass + " " + T.params.slideDuplicatePrevClass);
                var e = T.slides.eq(T.activeIndex);
                e.addClass(T.params.slideActiveClass), s.loop && (e.hasClass(T.params.slideDuplicateClass) ? T.wrapper.children("." + T.params.slideClass + ":not(." + T.params.slideDuplicateClass + ')[data-swiper-slide-index="' + T.realIndex + '"]').addClass(T.params.slideDuplicateActiveClass) : T.wrapper.children("." + T.params.slideClass + "." + T.params.slideDuplicateClass + '[data-swiper-slide-index="' + T.realIndex + '"]').addClass(T.params.slideDuplicateActiveClass));
                var t = e.next("." + T.params.slideClass).addClass(T.params.slideNextClass);
                T.params.loop && 0 === t.length && (t = T.slides.eq(0), t.addClass(T.params.slideNextClass));
                var r = e.prev("." + T.params.slideClass).addClass(T.params.slidePrevClass);
                if (T.params.loop && 0 === r.length && (r = T.slides.eq(-1), r.addClass(T.params.slidePrevClass)), s.loop && (t.hasClass(T.params.slideDuplicateClass) ? T.wrapper.children("." + T.params.slideClass + ":not(." + T.params.slideDuplicateClass + ')[data-swiper-slide-index="' + t.attr("data-swiper-slide-index") + '"]').addClass(T.params.slideDuplicateNextClass) : T.wrapper.children("." + T.params.slideClass + "." + T.params.slideDuplicateClass + '[data-swiper-slide-index="' + t.attr("data-swiper-slide-index") + '"]').addClass(T.params.slideDuplicateNextClass), r.hasClass(T.params.slideDuplicateClass) ? T.wrapper.children("." + T.params.slideClass + ":not(." + T.params.slideDuplicateClass + ')[data-swiper-slide-index="' + r.attr("data-swiper-slide-index") + '"]').addClass(T.params.slideDuplicatePrevClass) : T.wrapper.children("." + T.params.slideClass + "." + T.params.slideDuplicateClass + '[data-swiper-slide-index="' + r.attr("data-swiper-slide-index") + '"]').addClass(T.params.slideDuplicatePrevClass)), T.paginationContainer && T.paginationContainer.length > 0) {
                    var i, n = T.params.loop ? Math.ceil((T.slides.length - 2 * T.loopedSlides) / T.params.slidesPerGroup) : T.snapGrid.length;
                    if (T.params.loop ? (i = Math.ceil((T.activeIndex - T.loopedSlides) / T.params.slidesPerGroup), i > T.slides.length - 1 - 2 * T.loopedSlides && (i -= T.slides.length - 2 * T.loopedSlides), i > n - 1 && (i -= n), 0 > i && "bullets" !== T.params.paginationType && (i = n + i)) : i = "undefined" != typeof T.snapIndex ? T.snapIndex : T.activeIndex || 0, "bullets" === T.params.paginationType && T.bullets && T.bullets.length > 0 && (T.bullets.removeClass(T.params.bulletActiveClass), T.paginationContainer.length > 1 ? T.bullets.each(function() {
                            a(this).index() === i && a(this).addClass(T.params.bulletActiveClass)
                        }) : T.bullets.eq(i).addClass(T.params.bulletActiveClass)), "fraction" === T.params.paginationType && (T.paginationContainer.find("." + T.params.paginationCurrentClass).text(i + 1), T.paginationContainer.find("." + T.params.paginationTotalClass).text(n)), "progress" === T.params.paginationType) {
                        var o = (i + 1) / n,
                            l = o,
                            p = 1;
                        T.isHorizontal() || (p = o, l = 1), T.paginationContainer.find("." + T.params.paginationProgressbarClass).transform("translate3d(0,0,0) scaleX(" + l + ") scaleY(" + p + ")").transition(T.params.speed)
                    }
                    "custom" === T.params.paginationType && T.params.paginationCustomRender && (T.paginationContainer.html(T.params.paginationCustomRender(T, i + 1, n)), T.emit("onPaginationRendered", T, T.paginationContainer[0]))
                }
                T.params.loop || (T.params.prevButton && T.prevButton && T.prevButton.length > 0 && (T.isBeginning ? (T.prevButton.addClass(T.params.buttonDisabledClass), T.params.a11y && T.a11y && T.a11y.disable(T.prevButton)) : (T.prevButton.removeClass(T.params.buttonDisabledClass), T.params.a11y && T.a11y && T.a11y.enable(T.prevButton))), T.params.nextButton && T.nextButton && T.nextButton.length > 0 && (T.isEnd ? (T.nextButton.addClass(T.params.buttonDisabledClass), T.params.a11y && T.a11y && T.a11y.disable(T.nextButton)) : (T.nextButton.removeClass(T.params.buttonDisabledClass), T.params.a11y && T.a11y && T.a11y.enable(T.nextButton))))
            }, T.updatePagination = function() {
                if (T.params.pagination && T.paginationContainer && T.paginationContainer.length > 0) {
                    var e = "";
                    if ("bullets" === T.params.paginationType) {
                        for (var a = T.params.loop ? Math.ceil((T.slides.length - 2 * T.loopedSlides) / T.params.slidesPerGroup) : T.snapGrid.length, t = 0; a > t; t++) e += T.params.paginationBulletRender ? T.params.paginationBulletRender(T, t, T.params.bulletClass) : "<" + T.params.paginationElement + ' class="' + T.params.bulletClass + '"></' + T.params.paginationElement + ">";
                        T.paginationContainer.html(e), T.bullets = T.paginationContainer.find("." + T.params.bulletClass), T.params.paginationClickable && T.params.a11y && T.a11y && T.a11y.initPagination()
                    }
                    "fraction" === T.params.paginationType && (e = T.params.paginationFractionRender ? T.params.paginationFractionRender(T, T.params.paginationCurrentClass, T.params.paginationTotalClass) : '<span class="' + T.params.paginationCurrentClass + '"></span> / <span class="' + T.params.paginationTotalClass + '"></span>', T.paginationContainer.html(e)), "progress" === T.params.paginationType && (e = T.params.paginationProgressRender ? T.params.paginationProgressRender(T, T.params.paginationProgressbarClass) : '<span class="' + T.params.paginationProgressbarClass + '"></span>', T.paginationContainer.html(e)), "custom" !== T.params.paginationType && T.emit("onPaginationRendered", T, T.paginationContainer[0])
                }
            }, T.update = function(e) {
                function a() {
                    T.rtl ? -T.translate : T.translate, s = Math.min(Math.max(T.translate, T.maxTranslate()), T.minTranslate()), T.setWrapperTranslate(s), T.updateActiveIndex(), T.updateClasses()
                }
                if (T)
                    if (T.updateContainerSize(), T.updateSlidesSize(), T.updateProgress(), T.updatePagination(), T.updateClasses(), T.params.scrollbar && T.scrollbar && T.scrollbar.set(), e) {
                        var t, s;
                        T.controller && T.controller.spline && (T.controller.spline = void 0), T.params.freeMode ? (a(), T.params.autoHeight && T.updateAutoHeight()) : (t = ("auto" === T.params.slidesPerView || T.params.slidesPerView > 1) && T.isEnd && !T.params.centeredSlides ? T.slideTo(T.slides.length - 1, 0, !1, !0) : T.slideTo(T.activeIndex, 0, !1, !0), t || a())
                    } else T.params.autoHeight && T.updateAutoHeight()
            }, T.onResize = function(e) {
                T.params.breakpoints && T.setBreakpoint();
                var a = T.params.allowSwipeToPrev,
                    t = T.params.allowSwipeToNext;
                T.params.allowSwipeToPrev = T.params.allowSwipeToNext = !0, T.updateContainerSize(), T.updateSlidesSize(), ("auto" === T.params.slidesPerView || T.params.freeMode || e) && T.updatePagination(), T.params.scrollbar && T.scrollbar && T.scrollbar.set(), T.controller && T.controller.spline && (T.controller.spline = void 0);
                var s = !1;
                if (T.params.freeMode) {
                    var r = Math.min(Math.max(T.translate, T.maxTranslate()), T.minTranslate());
                    T.setWrapperTranslate(r), T.updateActiveIndex(), T.updateClasses(), T.params.autoHeight && T.updateAutoHeight()
                } else T.updateClasses(), s = ("auto" === T.params.slidesPerView || T.params.slidesPerView > 1) && T.isEnd && !T.params.centeredSlides ? T.slideTo(T.slides.length - 1, 0, !1, !0) : T.slideTo(T.activeIndex, 0, !1, !0);
                T.params.lazyLoading && !s && T.lazy && T.lazy.load(), T.params.allowSwipeToPrev = a, T.params.allowSwipeToNext = t
            }, T.touchEventsDesktop = {
                start: "mousedown",
                move: "mousemove",
                end: "mouseup"
            }, window.navigator.pointerEnabled ? T.touchEventsDesktop = {
                start: "pointerdown",
                move: "pointermove",
                end: "pointerup"
            } : window.navigator.msPointerEnabled && (T.touchEventsDesktop = {
                start: "MSPointerDown",
                move: "MSPointerMove",
                end: "MSPointerUp"
            }), T.touchEvents = {
                start: T.support.touch || !T.params.simulateTouch ? "touchstart" : T.touchEventsDesktop.start,
                move: T.support.touch || !T.params.simulateTouch ? "touchmove" : T.touchEventsDesktop.move,
                end: T.support.touch || !T.params.simulateTouch ? "touchend" : T.touchEventsDesktop.end
            }, (window.navigator.pointerEnabled || window.navigator.msPointerEnabled) && ("container" === T.params.touchEventsTarget ? T.container : T.wrapper).addClass("swiper-wp8-" + T.params.direction), T.initEvents = function(e) {
                var a = e ? "off" : "on",
                    t = e ? "removeEventListener" : "addEventListener",
                    r = "container" === T.params.touchEventsTarget ? T.container[0] : T.wrapper[0],
                    i = T.support.touch ? r : document,
                    n = !!T.params.nested;
                if (T.browser.ie) r[t](T.touchEvents.start, T.onTouchStart, !1), i[t](T.touchEvents.move, T.onTouchMove, n), i[t](T.touchEvents.end, T.onTouchEnd, !1);
                else {
                    if (T.support.touch) {
                        var o = !("touchstart" !== T.touchEvents.start || !T.support.passiveListener || !T.params.passiveListeners) && {
                            passive: !0,
                            capture: !1
                        };
                        r[t](T.touchEvents.start, T.onTouchStart, o), r[t](T.touchEvents.move, T.onTouchMove, n), r[t](T.touchEvents.end, T.onTouchEnd, o)
                    }(s.simulateTouch && !T.device.ios && !T.device.android || s.simulateTouch && !T.support.touch && T.device.ios) && (r[t]("mousedown", T.onTouchStart, !1), document[t]("mousemove", T.onTouchMove, n), document[t]("mouseup", T.onTouchEnd, !1))
                }
                window[t]("resize", T.onResize), T.params.nextButton && T.nextButton && T.nextButton.length > 0 && (T.nextButton[a]("click", T.onClickNext), T.params.a11y && T.a11y && T.nextButton[a]("keydown", T.a11y.onEnterKey)), T.params.prevButton && T.prevButton && T.prevButton.length > 0 && (T.prevButton[a]("click", T.onClickPrev), T.params.a11y && T.a11y && T.prevButton[a]("keydown", T.a11y.onEnterKey)), T.params.pagination && T.params.paginationClickable && (T.paginationContainer[a]("click", "." + T.params.bulletClass, T.onClickIndex), T.params.a11y && T.a11y && T.paginationContainer[a]("keydown", "." + T.params.bulletClass, T.a11y.onEnterKey)), (T.params.preventClicks || T.params.preventClicksPropagation) && r[t]("click", T.preventClicks, !0);
            }, T.attachEvents = function() {
                T.initEvents()
            }, T.detachEvents = function() {
                T.initEvents(!0)
            }, T.allowClick = !0, T.preventClicks = function(e) {
                T.allowClick || (T.params.preventClicks && e.preventDefault(), T.params.preventClicksPropagation && T.animating && (e.stopPropagation(), e.stopImmediatePropagation()))
            }, T.onClickNext = function(e) {
                e.preventDefault(), T.isEnd && !T.params.loop || T.slideNext()
            }, T.onClickPrev = function(e) {
                e.preventDefault(), T.isBeginning && !T.params.loop || T.slidePrev()
            }, T.onClickIndex = function(e) {
                e.preventDefault();
                var t = a(this).index() * T.params.slidesPerGroup;
                T.params.loop && (t += T.loopedSlides), T.slideTo(t)
            }, T.updateClickedSlide = function(e) {
                var t = n(e, "." + T.params.slideClass),
                    s = !1;
                if (t)
                    for (var r = 0; r < T.slides.length; r++) T.slides[r] === t && (s = !0);
                if (!t || !s) return T.clickedSlide = void 0, void(T.clickedIndex = void 0);
                if (T.clickedSlide = t, T.clickedIndex = a(t).index(), T.params.slideToClickedSlide && void 0 !== T.clickedIndex && T.clickedIndex !== T.activeIndex) {
                    var i, o = T.clickedIndex,
                        l = "auto" === T.params.slidesPerView ? T.currentSlidesPerView() : T.params.slidesPerView;
                    if (T.params.loop) {
                        if (T.animating) return;
                        i = parseInt(a(T.clickedSlide).attr("data-swiper-slide-index"), 10), T.params.centeredSlides ? o < T.loopedSlides - l / 2 || o > T.slides.length - T.loopedSlides + l / 2 ? (T.fixLoop(), o = T.wrapper.children("." + T.params.slideClass + '[data-swiper-slide-index="' + i + '"]:not(.' + T.params.slideDuplicateClass + ")").eq(0).index(), setTimeout(function() {
                            T.slideTo(o)
                        }, 0)) : T.slideTo(o) : o > T.slides.length - l ? (T.fixLoop(), o = T.wrapper.children("." + T.params.slideClass + '[data-swiper-slide-index="' + i + '"]:not(.' + T.params.slideDuplicateClass + ")").eq(0).index(), setTimeout(function() {
                            T.slideTo(o)
                        }, 0)) : T.slideTo(o)
                    } else T.slideTo(o)
                }
            };
            var S, C, z, M, P, E, I, k, D, L, B = "input, select, textarea, button, video",
                H = Date.now(),
                G = [];
            T.animating = !1, T.touches = {
                startX: 0,
                startY: 0,
                currentX: 0,
                currentY: 0,
                diff: 0
            };
            var X, Y;
            T.onTouchStart = function(e) {
                if (e.originalEvent && (e = e.originalEvent), X = "touchstart" === e.type, X || !("which" in e) || 3 !== e.which) {
                    if (T.params.noSwiping && n(e, "." + T.params.noSwipingClass)) return void(T.allowClick = !0);
                    if (!T.params.swipeHandler || n(e, T.params.swipeHandler)) {
                        var t = T.touches.currentX = "touchstart" === e.type ? e.targetTouches[0].pageX : e.pageX,
                            s = T.touches.currentY = "touchstart" === e.type ? e.targetTouches[0].pageY : e.pageY;
                        if (!(T.device.ios && T.params.iOSEdgeSwipeDetection && t <= T.params.iOSEdgeSwipeThreshold)) {
                            if (S = !0, C = !1, z = !0, P = void 0, Y = void 0, T.touches.startX = t, T.touches.startY = s, M = Date.now(), T.allowClick = !0, T.updateContainerSize(), T.swipeDirection = void 0, T.params.threshold > 0 && (k = !1), "touchstart" !== e.type) {
                                var r = !0;
                                a(e.target).is(B) && (r = !1), document.activeElement && a(document.activeElement).is(B) && document.activeElement.blur(), r && e.preventDefault()
                            }
                            T.emit("onTouchStart", T, e)
                        }
                    }
                }
            }, T.onTouchMove = function(e) {
                if (e.originalEvent && (e = e.originalEvent), !X || "mousemove" !== e.type) {
                    if (e.preventedByNestedSwiper) return T.touches.startX = "touchmove" === e.type ? e.targetTouches[0].pageX : e.pageX, void(T.touches.startY = "touchmove" === e.type ? e.targetTouches[0].pageY : e.pageY);
                    if (T.params.onlyExternal) return T.allowClick = !1, void(S && (T.touches.startX = T.touches.currentX = "touchmove" === e.type ? e.targetTouches[0].pageX : e.pageX, T.touches.startY = T.touches.currentY = "touchmove" === e.type ? e.targetTouches[0].pageY : e.pageY, M = Date.now()));
                    if (X && T.params.touchReleaseOnEdges && !T.params.loop)
                        if (T.isHorizontal()) {
                            if (T.touches.currentX < T.touches.startX && T.translate <= T.maxTranslate() || T.touches.currentX > T.touches.startX && T.translate >= T.minTranslate()) return
                        } else if (T.touches.currentY < T.touches.startY && T.translate <= T.maxTranslate() || T.touches.currentY > T.touches.startY && T.translate >= T.minTranslate()) return;
                    if (X && document.activeElement && e.target === document.activeElement && a(e.target).is(B)) return C = !0, void(T.allowClick = !1);
                    if (z && T.emit("onTouchMove", T, e), !(e.targetTouches && e.targetTouches.length > 1)) {
                        if (T.touches.currentX = "touchmove" === e.type ? e.targetTouches[0].pageX : e.pageX, T.touches.currentY = "touchmove" === e.type ? e.targetTouches[0].pageY : e.pageY, "undefined" == typeof P) {
                            var t;
                            T.isHorizontal() && T.touches.currentY === T.touches.startY || !T.isHorizontal() && T.touches.currentX === T.touches.startX ? P = !1 : (t = 180 * Math.atan2(Math.abs(T.touches.currentY - T.touches.startY), Math.abs(T.touches.currentX - T.touches.startX)) / Math.PI, P = T.isHorizontal() ? t > T.params.touchAngle : 90 - t > T.params.touchAngle)
                        }
                        if (P && T.emit("onTouchMoveOpposite", T, e), "undefined" == typeof Y && T.browser.ieTouch && (T.touches.currentX === T.touches.startX && T.touches.currentY === T.touches.startY || (Y = !0)), S) {
                            if (P) return void(S = !1);
                            if (Y || !T.browser.ieTouch) {
                                T.allowClick = !1, T.emit("onSliderMove", T, e), e.preventDefault(), T.params.touchMoveStopPropagation && !T.params.nested && e.stopPropagation(), C || (s.loop && T.fixLoop(), I = T.getWrapperTranslate(), T.setWrapperTransition(0), T.animating && T.wrapper.trigger("webkitTransitionEnd transitionend oTransitionEnd MSTransitionEnd msTransitionEnd"), T.params.autoplay && T.autoplaying && (T.params.autoplayDisableOnInteraction ? T.stopAutoplay() : T.pauseAutoplay()), L = !1, !T.params.grabCursor || T.params.allowSwipeToNext !== !0 && T.params.allowSwipeToPrev !== !0 || T.setGrabCursor(!0)), C = !0;
                                var r = T.touches.diff = T.isHorizontal() ? T.touches.currentX - T.touches.startX : T.touches.currentY - T.touches.startY;
                                r *= T.params.touchRatio, T.rtl && (r = -r), T.swipeDirection = r > 0 ? "prev" : "next", E = r + I;
                                var i = !0;
                                if (r > 0 && E > T.minTranslate() ? (i = !1, T.params.resistance && (E = T.minTranslate() - 1 + Math.pow(-T.minTranslate() + I + r, T.params.resistanceRatio))) : 0 > r && E < T.maxTranslate() && (i = !1, T.params.resistance && (E = T.maxTranslate() + 1 - Math.pow(T.maxTranslate() - I - r, T.params.resistanceRatio))), i && (e.preventedByNestedSwiper = !0), !T.params.allowSwipeToNext && "next" === T.swipeDirection && I > E && (E = I), !T.params.allowSwipeToPrev && "prev" === T.swipeDirection && E > I && (E = I), T.params.threshold > 0) {
                                    if (!(Math.abs(r) > T.params.threshold || k)) return void(E = I);
                                    if (!k) return k = !0, T.touches.startX = T.touches.currentX, T.touches.startY = T.touches.currentY, E = I, void(T.touches.diff = T.isHorizontal() ? T.touches.currentX - T.touches.startX : T.touches.currentY - T.touches.startY)
                                }
                                T.params.followFinger && ((T.params.freeMode || T.params.watchSlidesProgress) && T.updateActiveIndex(), T.params.freeMode && (0 === G.length && G.push({
                                    position: T.touches[T.isHorizontal() ? "startX" : "startY"],
                                    time: M
                                }), G.push({
                                    position: T.touches[T.isHorizontal() ? "currentX" : "currentY"],
                                    time: (new window.Date).getTime()
                                })), T.updateProgress(E), T.setWrapperTranslate(E))
                            }
                        }
                    }
                }
            }, T.onTouchEnd = function(e) {
                if (e.originalEvent && (e = e.originalEvent), z && T.emit("onTouchEnd", T, e), z = !1, S) {
                    T.params.grabCursor && C && S && (T.params.allowSwipeToNext === !0 || T.params.allowSwipeToPrev === !0) && T.setGrabCursor(!1);
                    var t = Date.now(),
                        s = t - M;
                    if (T.allowClick && (T.updateClickedSlide(e), T.emit("onTap", T, e), 300 > s && t - H > 300 && (D && clearTimeout(D), D = setTimeout(function() {
                            T && (T.params.paginationHide && T.paginationContainer.length > 0 && !a(e.target).hasClass(T.params.bulletClass) && T.paginationContainer.toggleClass(T.params.paginationHiddenClass), T.emit("onClick", T, e))
                        }, 300)), 300 > s && 300 > t - H && (D && clearTimeout(D), T.emit("onDoubleTap", T, e))), H = Date.now(), setTimeout(function() {
                            T && (T.allowClick = !0)
                        }, 0), !S || !C || !T.swipeDirection || 0 === T.touches.diff || E === I) return void(S = C = !1);
                    S = C = !1;
                    var r;
                    if (r = T.params.followFinger ? T.rtl ? T.translate : -T.translate : -E, T.params.freeMode) {
                        if (r < -T.minTranslate()) return void T.slideTo(T.activeIndex);
                        if (r > -T.maxTranslate()) return void(T.slides.length < T.snapGrid.length ? T.slideTo(T.snapGrid.length - 1) : T.slideTo(T.slides.length - 1));
                        if (T.params.freeModeMomentum) {
                            if (G.length > 1) {
                                var i = G.pop(),
                                    n = G.pop(),
                                    o = i.position - n.position,
                                    l = i.time - n.time;
                                T.velocity = o / l, T.velocity = T.velocity / 2, Math.abs(T.velocity) < T.params.freeModeMinimumVelocity && (T.velocity = 0), (l > 150 || (new window.Date).getTime() - i.time > 300) && (T.velocity = 0)
                            } else T.velocity = 0;
                            T.velocity = T.velocity * T.params.freeModeMomentumVelocityRatio, G.length = 0;
                            var p = 1e3 * T.params.freeModeMomentumRatio,
                                d = T.velocity * p,
                                u = T.translate + d;
                            T.rtl && (u = -u);
                            var m, c = !1,
                                g = 20 * Math.abs(T.velocity) * T.params.freeModeMomentumBounceRatio;
                            if (u < T.maxTranslate()) T.params.freeModeMomentumBounce ? (u + T.maxTranslate() < -g && (u = T.maxTranslate() - g), m = T.maxTranslate(), c = !0, L = !0) : u = T.maxTranslate();
                            else if (u > T.minTranslate()) T.params.freeModeMomentumBounce ? (u - T.minTranslate() > g && (u = T.minTranslate() + g), m = T.minTranslate(), c = !0, L = !0) : u = T.minTranslate();
                            else if (T.params.freeModeSticky) {
                                var h, f = 0;
                                for (f = 0; f < T.snapGrid.length; f += 1)
                                    if (T.snapGrid[f] > -u) {
                                        h = f;
                                        break
                                    }
                                u = Math.abs(T.snapGrid[h] - u) < Math.abs(T.snapGrid[h - 1] - u) || "next" === T.swipeDirection ? T.snapGrid[h] : T.snapGrid[h - 1], T.rtl || (u = -u)
                            }
                            if (0 !== T.velocity) p = T.rtl ? Math.abs((-u - T.translate) / T.velocity) : Math.abs((u - T.translate) / T.velocity);
                            else if (T.params.freeModeSticky) return void T.slideReset();
                            T.params.freeModeMomentumBounce && c ? (T.updateProgress(m), T.setWrapperTransition(p), T.setWrapperTranslate(u), T.onTransitionStart(), T.animating = !0, T.wrapper.transitionEnd(function() {
                                T && L && (T.emit("onMomentumBounce", T), T.setWrapperTransition(T.params.speed), T.setWrapperTranslate(m), T.wrapper.transitionEnd(function() {
                                    T && T.onTransitionEnd()
                                }))
                            })) : T.velocity ? (T.updateProgress(u), T.setWrapperTransition(p), T.setWrapperTranslate(u), T.onTransitionStart(), T.animating || (T.animating = !0, T.wrapper.transitionEnd(function() {
                                T && T.onTransitionEnd()
                            }))) : T.updateProgress(u), T.updateActiveIndex()
                        }
                        return void((!T.params.freeModeMomentum || s >= T.params.longSwipesMs) && (T.updateProgress(), T.updateActiveIndex()))
                    }
                    var v, w = 0,
                        y = T.slidesSizesGrid[0];
                    for (v = 0; v < T.slidesGrid.length; v += T.params.slidesPerGroup) "undefined" != typeof T.slidesGrid[v + T.params.slidesPerGroup] ? r >= T.slidesGrid[v] && r < T.slidesGrid[v + T.params.slidesPerGroup] && (w = v, y = T.slidesGrid[v + T.params.slidesPerGroup] - T.slidesGrid[v]) : r >= T.slidesGrid[v] && (w = v, y = T.slidesGrid[T.slidesGrid.length - 1] - T.slidesGrid[T.slidesGrid.length - 2]);
                    var x = (r - T.slidesGrid[w]) / y;
                    if (s > T.params.longSwipesMs) {
                        if (!T.params.longSwipes) return void T.slideTo(T.activeIndex);
                        "next" === T.swipeDirection && (x >= T.params.longSwipesRatio ? T.slideTo(w + T.params.slidesPerGroup) : T.slideTo(w)), "prev" === T.swipeDirection && (x > 1 - T.params.longSwipesRatio ? T.slideTo(w + T.params.slidesPerGroup) : T.slideTo(w))
                    } else {
                        if (!T.params.shortSwipes) return void T.slideTo(T.activeIndex);
                        "next" === T.swipeDirection && T.slideTo(w + T.params.slidesPerGroup), "prev" === T.swipeDirection && T.slideTo(w)
                    }
                }
            }, T._slideTo = function(e, a) {
                return T.slideTo(e, a, !0, !0)
            }, T.slideTo = function(e, a, t, s) {
                "undefined" == typeof t && (t = !0), "undefined" == typeof e && (e = 0), 0 > e && (e = 0), T.snapIndex = Math.floor(e / T.params.slidesPerGroup), T.snapIndex >= T.snapGrid.length && (T.snapIndex = T.snapGrid.length - 1);
                var r = -T.snapGrid[T.snapIndex];
                if (T.params.autoplay && T.autoplaying && (s || !T.params.autoplayDisableOnInteraction ? T.pauseAutoplay(a) : T.stopAutoplay()), T.updateProgress(r), T.params.normalizeSlideIndex)
                    for (var i = 0; i < T.slidesGrid.length; i++) - Math.floor(100 * r) >= Math.floor(100 * T.slidesGrid[i]) && (e = i);
                return !(!T.params.allowSwipeToNext && r < T.translate && r < T.minTranslate() || !T.params.allowSwipeToPrev && r > T.translate && r > T.maxTranslate() && (T.activeIndex || 0) !== e || ("undefined" == typeof a && (a = T.params.speed), T.previousIndex = T.activeIndex || 0, T.activeIndex = e, T.updateRealIndex(), T.rtl && -r === T.translate || !T.rtl && r === T.translate ? (T.params.autoHeight && T.updateAutoHeight(), T.updateClasses(), "slide" !== T.params.effect && T.setWrapperTranslate(r), 1) : (T.updateClasses(), T.onTransitionStart(t), 0 === a || T.browser.lteIE9 ? (T.setWrapperTranslate(r), T.setWrapperTransition(0), T.onTransitionEnd(t)) : (T.setWrapperTranslate(r), T.setWrapperTransition(a), T.animating || (T.animating = !0, T.wrapper.transitionEnd(function() {
                    T && T.onTransitionEnd(t)
                }))), 0)))
            }, T.onTransitionStart = function(e) {
                "undefined" == typeof e && (e = !0), T.params.autoHeight && T.updateAutoHeight(), T.lazy && T.lazy.onTransitionStart(), e && (T.emit("onTransitionStart", T), T.activeIndex !== T.previousIndex && (T.emit("onSlideChangeStart", T), T.activeIndex > T.previousIndex ? T.emit("onSlideNextStart", T) : T.emit("onSlidePrevStart", T)))
            }, T.onTransitionEnd = function(e) {
                T.animating = !1, T.setWrapperTransition(0), "undefined" == typeof e && (e = !0), T.lazy && T.lazy.onTransitionEnd(), e && (T.emit("onTransitionEnd", T), T.activeIndex !== T.previousIndex && (T.emit("onSlideChangeEnd", T), T.activeIndex > T.previousIndex ? T.emit("onSlideNextEnd", T) : T.emit("onSlidePrevEnd", T))), T.params.history && T.history && T.history.setHistory(T.params.history, T.activeIndex), T.params.hashnav && T.hashnav && T.hashnav.setHash()
            }, T.slideNext = function(e, a, t) {
                return T.params.loop ? T.animating ? !1 : (T.fixLoop(), T.container[0].clientLeft, T.slideTo(T.activeIndex + T.params.slidesPerGroup, a, e, t)) : T.slideTo(T.activeIndex + T.params.slidesPerGroup, a, e, t)
            }, T._slideNext = function(e) {
                return T.slideNext(!0, e, !0)
            }, T.slidePrev = function(e, a, t) {
                return T.params.loop ? T.animating ? !1 : (T.fixLoop(), T.container[0].clientLeft, T.slideTo(T.activeIndex - 1, a, e, t)) : T.slideTo(T.activeIndex - 1, a, e, t)
            }, T._slidePrev = function(e) {
                return T.slidePrev(!0, e, !0)
            }, T.slideReset = function(e, a, t) {
                return T.slideTo(T.activeIndex, a, e)
            }, T.disableTouchControl = function() {
                return T.params.onlyExternal = !0, !0
            }, T.enableTouchControl = function() {
                return T.params.onlyExternal = !1, !0
            }, T.setWrapperTransition = function(e, a) {
                T.wrapper.transition(e), "slide" !== T.params.effect && T.effects[T.params.effect] && T.effects[T.params.effect].setTransition(e), T.params.parallax && T.parallax && T.parallax.setTransition(e), T.params.scrollbar && T.scrollbar && T.scrollbar.setTransition(e), T.params.control && T.controller && T.controller.setTransition(e, a), T.emit("onSetTransition", T, e)
            }, T.setWrapperTranslate = function(e, a, t) {
                var s = 0,
                    i = 0,
                    n = 0;
                T.isHorizontal() ? s = T.rtl ? -e : e : i = e, T.params.roundLengths && (s = r(s), i = r(i)), T.params.virtualTranslate || (T.support.transforms3d ? T.wrapper.transform("translate3d(" + s + "px, " + i + "px, " + n + "px)") : T.wrapper.transform("translate(" + s + "px, " + i + "px)")), T.translate = T.isHorizontal() ? s : i;
                var o, l = T.maxTranslate() - T.minTranslate();
                o = 0 === l ? 0 : (e - T.minTranslate()) / l, o !== T.progress && T.updateProgress(e), a && T.updateActiveIndex(), "slide" !== T.params.effect && T.effects[T.params.effect] && T.effects[T.params.effect].setTranslate(T.translate), T.params.parallax && T.parallax && T.parallax.setTranslate(T.translate), T.params.scrollbar && T.scrollbar && T.scrollbar.setTranslate(T.translate), T.params.control && T.controller && T.controller.setTranslate(T.translate, t), T.emit("onSetTranslate", T, T.translate)
            }, T.getTranslate = function(e, a) {
                var t, s, r, i;
                return "undefined" == typeof a && (a = "x"), T.params.virtualTranslate ? T.rtl ? -T.translate : T.translate : (r = window.getComputedStyle(e, null), window.WebKitCSSMatrix ? (s = r.transform || r.webkitTransform, s.split(",").length > 6 && (s = s.split(", ").map(function(e) {
                    return e.replace(",", ".")
                }).join(", ")), i = new window.WebKitCSSMatrix("none" === s ? "" : s)) : (i = r.MozTransform || r.OTransform || r.MsTransform || r.msTransform || r.transform || r.getPropertyValue("transform").replace("translate(", "matrix(1, 0, 0, 1,"), t = i.toString().split(",")), "x" === a && (s = window.WebKitCSSMatrix ? i.m41 : 16 === t.length ? parseFloat(t[12]) : parseFloat(t[4])), "y" === a && (s = window.WebKitCSSMatrix ? i.m42 : 16 === t.length ? parseFloat(t[13]) : parseFloat(t[5])), T.rtl && s && (s = -s), s || 0)
            }, T.getWrapperTranslate = function(e) {
                return "undefined" == typeof e && (e = T.isHorizontal() ? "x" : "y"), T.getTranslate(T.wrapper[0], e)
            }, T.observers = [], T.initObservers = function() {
                if (T.params.observeParents)
                    for (var e = T.container.parents(), a = 0; a < e.length; a++) o(e[a]);
                o(T.container[0], {
                    childList: !1
                }), o(T.wrapper[0], {
                    attributes: !1
                })
            }, T.disconnectObservers = function() {
                for (var e = 0; e < T.observers.length; e++) T.observers[e].disconnect();
                T.observers = []
            }, T.createLoop = function() {
                T.wrapper.children("." + T.params.slideClass + "." + T.params.slideDuplicateClass).remove();
                var e = T.wrapper.children("." + T.params.slideClass);
                "auto" !== T.params.slidesPerView || T.params.loopedSlides || (T.params.loopedSlides = e.length), T.loopedSlides = parseInt(T.params.loopedSlides || T.params.slidesPerView, 10), T.loopedSlides = T.loopedSlides + T.params.loopAdditionalSlides, T.loopedSlides > e.length && (T.loopedSlides = e.length);
                var t, s = [],
                    r = [];
                for (e.each(function(t, i) {
                        var n = a(this);
                        t < T.loopedSlides && r.push(i), t < e.length && t >= e.length - T.loopedSlides && s.push(i), n.attr("data-swiper-slide-index", t)
                    }), t = 0; t < r.length; t++) T.wrapper.append(a(r[t].cloneNode(!0)).addClass(T.params.slideDuplicateClass));
                for (t = s.length - 1; t >= 0; t--) T.wrapper.prepend(a(s[t].cloneNode(!0)).addClass(T.params.slideDuplicateClass))
            }, T.destroyLoop = function() {
                T.wrapper.children("." + T.params.slideClass + "." + T.params.slideDuplicateClass).remove(), T.slides.removeAttr("data-swiper-slide-index")
            }, T.reLoop = function(e) {
                var a = T.activeIndex - T.loopedSlides;
                T.destroyLoop(), T.createLoop(), T.updateSlidesSize(), e && T.slideTo(a + T.loopedSlides, 0, !1)
            }, T.fixLoop = function() {
                var e;
                T.activeIndex < T.loopedSlides ? (e = T.slides.length - 3 * T.loopedSlides + T.activeIndex, e += T.loopedSlides, T.slideTo(e, 0, !1, !0)) : ("auto" === T.params.slidesPerView && T.activeIndex >= 2 * T.loopedSlides || T.activeIndex > T.slides.length - 2 * T.params.slidesPerView) && (e = -T.slides.length + T.activeIndex + T.loopedSlides, e += T.loopedSlides, T.slideTo(e, 0, !1, !0))
            }, T.appendSlide = function(e) {
                if (T.params.loop && T.destroyLoop(), "object" == typeof e && e.length)
                    for (var a = 0; a < e.length; a++) e[a] && T.wrapper.append(e[a]);
                else T.wrapper.append(e);
                T.params.loop && T.createLoop(), T.params.observer && T.support.observer || T.update(!0)
            }, T.prependSlide = function(e) {
                T.params.loop && T.destroyLoop();
                var a = T.activeIndex + 1;
                if ("object" == typeof e && e.length) {
                    for (var t = 0; t < e.length; t++) e[t] && T.wrapper.prepend(e[t]);
                    a = T.activeIndex + e.length
                } else T.wrapper.prepend(e);
                T.params.loop && T.createLoop(), T.params.observer && T.support.observer || T.update(!0), T.slideTo(a, 0, !1)
            }, T.removeSlide = function(e) {
                T.params.loop && (T.destroyLoop(), T.slides = T.wrapper.children("." + T.params.slideClass));
                var a, t = T.activeIndex;
                if ("object" == typeof e && e.length) {
                    for (var s = 0; s < e.length; s++) a = e[s], T.slides[a] && T.slides.eq(a).remove(), t > a && t--;
                    t = Math.max(t, 0)
                } else a = e, T.slides[a] && T.slides.eq(a).remove(), t > a && t--, t = Math.max(t, 0);
                T.params.loop && T.createLoop(), T.params.observer && T.support.observer || T.update(!0), T.params.loop ? T.slideTo(t + T.loopedSlides, 0, !1) : T.slideTo(t, 0, !1)
            }, T.removeAllSlides = function() {
                for (var e = [], a = 0; a < T.slides.length; a++) e.push(a);
                T.removeSlide(e)
            }, T.effects = {
                fade: {
                    setTranslate: function() {
                        for (var e = 0; e < T.slides.length; e++) {
                            var a = T.slides.eq(e),
                                t = a[0].swiperSlideOffset,
                                s = -t;
                            T.params.virtualTranslate || (s -= T.translate);
                            var r = 0;
                            T.isHorizontal() || (r = s, s = 0);
                            var i = T.params.fade.crossFade ? Math.max(1 - Math.abs(a[0].progress), 0) : 1 + Math.min(Math.max(a[0].progress, -1), 0);
                            a.css({
                                opacity: i
                            }).transform("translate3d(" + s + "px, " + r + "px, 0px)")
                        }
                    },
                    setTransition: function(e) {
                        if (T.slides.transition(e), T.params.virtualTranslate && 0 !== e) {
                            var a = !1;
                            T.slides.transitionEnd(function() {
                                if (!a && T) {
                                    a = !0, T.animating = !1;
                                    for (var e = ["webkitTransitionEnd", "transitionend", "oTransitionEnd", "MSTransitionEnd", "msTransitionEnd"], t = 0; t < e.length; t++) T.wrapper.trigger(e[t])
                                }
                            })
                        }
                    }
                },
                flip: {
                    setTranslate: function() {
                        for (var e = 0; e < T.slides.length; e++) {
                            var t = T.slides.eq(e),
                                s = t[0].progress;
                            T.params.flip.limitRotation && (s = Math.max(Math.min(t[0].progress, 1), -1));
                            var r = t[0].swiperSlideOffset,
                                i = -180 * s,
                                n = i,
                                o = 0,
                                l = -r,
                                p = 0;
                            if (T.isHorizontal() ? T.rtl && (n = -n) : (p = l, l = 0, o = -n, n = 0), t[0].style.zIndex = -Math.abs(Math.round(s)) + T.slides.length, T.params.flip.slideShadows) {
                                var d = T.isHorizontal() ? t.find(".swiper-slide-shadow-left") : t.find(".swiper-slide-shadow-top"),
                                    u = T.isHorizontal() ? t.find(".swiper-slide-shadow-right") : t.find(".swiper-slide-shadow-bottom");
                                0 === d.length && (d = a('<div class="swiper-slide-shadow-' + (T.isHorizontal() ? "left" : "top") + '"></div>'), t.append(d)), 0 === u.length && (u = a('<div class="swiper-slide-shadow-' + (T.isHorizontal() ? "right" : "bottom") + '"></div>'), t.append(u)), d.length && (d[0].style.opacity = Math.max(-s, 0)), u.length && (u[0].style.opacity = Math.max(s, 0))
                            }
                            t.transform("translate3d(" + l + "px, " + p + "px, 0px) rotateX(" + o + "deg) rotateY(" + n + "deg)")
                        }
                    },
                    setTransition: function(e) {
                        if (T.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e), T.params.virtualTranslate && 0 !== e) {
                            var t = !1;
                            T.slides.eq(T.activeIndex).transitionEnd(function() {
                                if (!t && T && a(this).hasClass(T.params.slideActiveClass)) {
                                    t = !0, T.animating = !1;
                                    for (var e = ["webkitTransitionEnd", "transitionend", "oTransitionEnd", "MSTransitionEnd", "msTransitionEnd"], s = 0; s < e.length; s++) T.wrapper.trigger(e[s])
                                }
                            })
                        }
                    }
                },
                cube: {
                    setTranslate: function() {
                        var e, t = 0;
                        T.params.cube.shadow && (T.isHorizontal() ? (e = T.wrapper.find(".swiper-cube-shadow"), 0 === e.length && (e = a('<div class="swiper-cube-shadow"></div>'), T.wrapper.append(e)), e.css({
                            height: T.width + "px"
                        })) : (e = T.container.find(".swiper-cube-shadow"), 0 === e.length && (e = a('<div class="swiper-cube-shadow"></div>'), T.container.append(e))));
                        for (var s = 0; s < T.slides.length; s++) {
                            var r = T.slides.eq(s),
                                i = 90 * s,
                                n = Math.floor(i / 360);
                            T.rtl && (i = -i, n = Math.floor(-i / 360));
                            var o = Math.max(Math.min(r[0].progress, 1), -1),
                                l = 0,
                                p = 0,
                                d = 0;
                            s % 4 === 0 ? (l = 4 * -n * T.size, d = 0) : (s - 1) % 4 === 0 ? (l = 0, d = 4 * -n * T.size) : (s - 2) % 4 === 0 ? (l = T.size + 4 * n * T.size, d = T.size) : (s - 3) % 4 === 0 && (l = -T.size, d = 3 * T.size + 4 * T.size * n), T.rtl && (l = -l), T.isHorizontal() || (p = l, l = 0);
                            var u = "rotateX(" + (T.isHorizontal() ? 0 : -i) + "deg) rotateY(" + (T.isHorizontal() ? i : 0) + "deg) translate3d(" + l + "px, " + p + "px, " + d + "px)";
                            if (1 >= o && o > -1 && (t = 90 * s + 90 * o, T.rtl && (t = 90 * -s - 90 * o)), r.transform(u), T.params.cube.slideShadows) {
                                var m = T.isHorizontal() ? r.find(".swiper-slide-shadow-left") : r.find(".swiper-slide-shadow-top"),
                                    c = T.isHorizontal() ? r.find(".swiper-slide-shadow-right") : r.find(".swiper-slide-shadow-bottom");
                                0 === m.length && (m = a('<div class="swiper-slide-shadow-' + (T.isHorizontal() ? "left" : "top") + '"></div>'), r.append(m)), 0 === c.length && (c = a('<div class="swiper-slide-shadow-' + (T.isHorizontal() ? "right" : "bottom") + '"></div>'), r.append(c)), m.length && (m[0].style.opacity = Math.max(-o, 0)), c.length && (c[0].style.opacity = Math.max(o, 0))
                            }
                        }
                        if (T.wrapper.css({
                                "-webkit-transform-origin": "50% 50% -" + T.size / 2 + "px",
                                "-moz-transform-origin": "50% 50% -" + T.size / 2 + "px",
                                "-ms-transform-origin": "50% 50% -" + T.size / 2 + "px",
                                "transform-origin": "50% 50% -" + T.size / 2 + "px"
                            }), T.params.cube.shadow)
                            if (T.isHorizontal()) e.transform("translate3d(0px, " + (T.width / 2 + T.params.cube.shadowOffset) + "px, " + -T.width / 2 + "px) rotateX(90deg) rotateZ(0deg) scale(" + T.params.cube.shadowScale + ")");
                            else {
                                var g = Math.abs(t) - 90 * Math.floor(Math.abs(t) / 90),
                                    h = 1.5 - (Math.sin(2 * g * Math.PI / 360) / 2 + Math.cos(2 * g * Math.PI / 360) / 2),
                                    f = T.params.cube.shadowScale,
                                    v = T.params.cube.shadowScale / h,
                                    w = T.params.cube.shadowOffset;
                                e.transform("scale3d(" + f + ", 1, " + v + ") translate3d(0px, " + (T.height / 2 + w) + "px, " + -T.height / 2 / v + "px) rotateX(-90deg)")
                            }
                        var y = T.isSafari || T.isUiWebView ? -T.size / 2 : 0;
                        T.wrapper.transform("translate3d(0px,0," + y + "px) rotateX(" + (T.isHorizontal() ? 0 : t) + "deg) rotateY(" + (T.isHorizontal() ? -t : 0) + "deg)")
                    },
                    setTransition: function(e) {
                        T.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e), T.params.cube.shadow && !T.isHorizontal() && T.container.find(".swiper-cube-shadow").transition(e)
                    }
                },
                coverflow: {
                    setTranslate: function() {
                        for (var e = T.translate, t = T.isHorizontal() ? -e + T.width / 2 : -e + T.height / 2, s = T.isHorizontal() ? T.params.coverflow.rotate : -T.params.coverflow.rotate, r = T.params.coverflow.depth, i = 0, n = T.slides.length; n > i; i++) {
                            var o = T.slides.eq(i),
                                l = T.slidesSizesGrid[i],
                                p = o[0].swiperSlideOffset,
                                d = (t - p - l / 2) / l * T.params.coverflow.modifier,
                                u = T.isHorizontal() ? s * d : 0,
                                m = T.isHorizontal() ? 0 : s * d,
                                c = -r * Math.abs(d),
                                g = T.isHorizontal() ? 0 : T.params.coverflow.stretch * d,
                                h = T.isHorizontal() ? T.params.coverflow.stretch * d : 0;
                            Math.abs(h) < .001 && (h = 0), Math.abs(g) < .001 && (g = 0), Math.abs(c) < .001 && (c = 0), Math.abs(u) < .001 && (u = 0), Math.abs(m) < .001 && (m = 0);
                            var f = "translate3d(" + h + "px," + g + "px," + c + "px)  rotateX(" + m + "deg) rotateY(" + u + "deg)";
                            if (o.transform(f), o[0].style.zIndex = -Math.abs(Math.round(d)) + 1, T.params.coverflow.slideShadows) {
                                var v = T.isHorizontal() ? o.find(".swiper-slide-shadow-left") : o.find(".swiper-slide-shadow-top"),
                                    w = T.isHorizontal() ? o.find(".swiper-slide-shadow-right") : o.find(".swiper-slide-shadow-bottom");
                                0 === v.length && (v = a('<div class="swiper-slide-shadow-' + (T.isHorizontal() ? "left" : "top") + '"></div>'), o.append(v)), 0 === w.length && (w = a('<div class="swiper-slide-shadow-' + (T.isHorizontal() ? "right" : "bottom") + '"></div>'), o.append(w)), v.length && (v[0].style.opacity = d > 0 ? d : 0), w.length && (w[0].style.opacity = -d > 0 ? -d : 0)
                            }
                        }
                        if (T.browser.ie) {
                            var y = T.wrapper[0].style;
                            y.perspectiveOrigin = t + "px 50%"
                        }
                    },
                    setTransition: function(e) {
                        T.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e)
                    }
                }
            }, T.lazy = {
                initialImageLoaded: !1,
                loadImageInSlide: function(e, t) {
                    if ("undefined" != typeof e && ("undefined" == typeof t && (t = !0), 0 !== T.slides.length)) {
                        var s = T.slides.eq(e),
                            r = s.find("." + T.params.lazyLoadingClass + ":not(." + T.params.lazyStatusLoadedClass + "):not(." + T.params.lazyStatusLoadingClass + ")");
                        !s.hasClass(T.params.lazyLoadingClass) || s.hasClass(T.params.lazyStatusLoadedClass) || s.hasClass(T.params.lazyStatusLoadingClass) || (r = r.add(s[0])), 0 !== r.length && r.each(function() {
                            var e = a(this);
                            e.addClass(T.params.lazyStatusLoadingClass);
                            var r = e.attr("data-background"),
                                i = e.attr("data-src"),
                                n = e.attr("data-srcset"),
                                o = e.attr("data-sizes");
                            T.loadImage(e[0], i || r, n, o, !1, function() {
                                if (r ? (e.css("background-image", 'url("' + r + '")'), e.removeAttr("data-background")) : (n && (e.attr("srcset", n), e.removeAttr("data-srcset")), o && (e.attr("sizes", o), e.removeAttr("data-sizes")), i && (e.attr("src", i), e.removeAttr("data-src"))), e.addClass(T.params.lazyStatusLoadedClass).removeClass(T.params.lazyStatusLoadingClass), s.find("." + T.params.lazyPreloaderClass + ", ." + T.params.preloaderClass).remove(), T.params.loop && t) {
                                    var a = s.attr("data-swiper-slide-index");
                                    if (s.hasClass(T.params.slideDuplicateClass)) {
                                        var l = T.wrapper.children('[data-swiper-slide-index="' + a + '"]:not(.' + T.params.slideDuplicateClass + ")");
                                        T.lazy.loadImageInSlide(l.index(), !1)
                                    } else {
                                        var p = T.wrapper.children("." + T.params.slideDuplicateClass + '[data-swiper-slide-index="' + a + '"]');
                                        T.lazy.loadImageInSlide(p.index(), !1)
                                    }
                                }
                                T.emit("onLazyImageReady", T, s[0], e[0])
                            }), T.emit("onLazyImageLoad", T, s[0], e[0])
                        })
                    }
                },
                load: function() {
                    var e, t = T.params.slidesPerView;
                    if ("auto" === t && (t = 0), T.lazy.initialImageLoaded || (T.lazy.initialImageLoaded = !0), T.params.watchSlidesVisibility) T.wrapper.children("." + T.params.slideVisibleClass).each(function() {
                        T.lazy.loadImageInSlide(a(this).index())
                    });
                    else if (t > 1)
                        for (e = T.activeIndex; e < T.activeIndex + t; e++) T.slides[e] && T.lazy.loadImageInSlide(e);
                    else T.lazy.loadImageInSlide(T.activeIndex);
                    if (T.params.lazyLoadingInPrevNext)
                        if (t > 1 || T.params.lazyLoadingInPrevNextAmount && T.params.lazyLoadingInPrevNextAmount > 1) {
                            var s = T.params.lazyLoadingInPrevNextAmount,
                                r = t,
                                i = Math.min(T.activeIndex + r + Math.max(s, r), T.slides.length),
                                n = Math.max(T.activeIndex - Math.max(r, s), 0);
                            for (e = T.activeIndex + t; i > e; e++) T.slides[e] && T.lazy.loadImageInSlide(e);
                            for (e = n; e < T.activeIndex; e++) T.slides[e] && T.lazy.loadImageInSlide(e)
                        } else {
                            var o = T.wrapper.children("." + T.params.slideNextClass);
                            o.length > 0 && T.lazy.loadImageInSlide(o.index());
                            var l = T.wrapper.children("." + T.params.slidePrevClass);
                            l.length > 0 && T.lazy.loadImageInSlide(l.index())
                        }
                },
                onTransitionStart: function() {
                    T.params.lazyLoading && (T.params.lazyLoadingOnTransitionStart || !T.params.lazyLoadingOnTransitionStart && !T.lazy.initialImageLoaded) && T.lazy.load()
                },
                onTransitionEnd: function() {
                    T.params.lazyLoading && !T.params.lazyLoadingOnTransitionStart && T.lazy.load()
                }
            }, T.scrollbar = {
                isTouched: !1,
                setDragPosition: function(e) {
                    var a = T.scrollbar,
                        t = T.isHorizontal() ? "touchstart" === e.type || "touchmove" === e.type ? e.targetTouches[0].pageX : e.pageX || e.clientX : "touchstart" === e.type || "touchmove" === e.type ? e.targetTouches[0].pageY : e.pageY || e.clientY,
                        s = t - a.track.offset()[T.isHorizontal() ? "left" : "top"] - a.dragSize / 2,
                        r = -T.minTranslate() * a.moveDivider,
                        i = -T.maxTranslate() * a.moveDivider;
                    r > s ? s = r : s > i && (s = i), s = -s / a.moveDivider, T.updateProgress(s), T.setWrapperTranslate(s, !0)
                },
                dragStart: function(e) {
                    var a = T.scrollbar;
                    a.isTouched = !0, e.preventDefault(), e.stopPropagation(), a.setDragPosition(e), clearTimeout(a.dragTimeout), a.track.transition(0), T.params.scrollbarHide && a.track.css("opacity", 1), T.wrapper.transition(100), a.drag.transition(100), T.emit("onScrollbarDragStart", T)
                },
                dragMove: function(e) {
                    var a = T.scrollbar;
                    a.isTouched && (e.preventDefault ? e.preventDefault() : e.returnValue = !1, a.setDragPosition(e), T.wrapper.transition(0), a.track.transition(0), a.drag.transition(0), T.emit("onScrollbarDragMove", T))
                },
                dragEnd: function(e) {
                    var a = T.scrollbar;
                    a.isTouched && (a.isTouched = !1, T.params.scrollbarHide && (clearTimeout(a.dragTimeout), a.dragTimeout = setTimeout(function() {
                        a.track.css("opacity", 0), a.track.transition(400)
                    }, 1e3)), T.emit("onScrollbarDragEnd", T), T.params.scrollbarSnapOnRelease && T.slideReset())
                },
                draggableEvents: function() {
                    return T.params.simulateTouch !== !1 || T.support.touch ? T.touchEvents : T.touchEventsDesktop
                }(),
                enableDraggable: function() {
                    var e = T.scrollbar,
                        t = T.support.touch ? e.track : document;
                    a(e.track).on(e.draggableEvents.start, e.dragStart), a(t).on(e.draggableEvents.move, e.dragMove), a(t).on(e.draggableEvents.end, e.dragEnd)
                },
                disableDraggable: function() {
                    var e = T.scrollbar,
                        t = T.support.touch ? e.track : document;
                    a(e.track).off(e.draggableEvents.start, e.dragStart), a(t).off(e.draggableEvents.move, e.dragMove), a(t).off(e.draggableEvents.end, e.dragEnd)
                },
                set: function() {
                    if (T.params.scrollbar) {
                        var e = T.scrollbar;
                        e.track = a(T.params.scrollbar), T.params.uniqueNavElements && "string" == typeof T.params.scrollbar && e.track.length > 1 && 1 === T.container.find(T.params.scrollbar).length && (e.track = T.container.find(T.params.scrollbar)), e.drag = e.track.find(".swiper-scrollbar-drag"), 0 === e.drag.length && (e.drag = a('<div class="swiper-scrollbar-drag"></div>'), e.track.append(e.drag)), e.drag[0].style.width = "", e.drag[0].style.height = "", e.trackSize = T.isHorizontal() ? e.track[0].offsetWidth : e.track[0].offsetHeight, e.divider = T.size / T.virtualSize, e.moveDivider = e.divider * (e.trackSize / T.size), e.dragSize = e.trackSize * e.divider, T.isHorizontal() ? e.drag[0].style.width = e.dragSize + "px" : e.drag[0].style.height = e.dragSize + "px", e.divider >= 1 ? e.track[0].style.display = "none" : e.track[0].style.display = "", T.params.scrollbarHide && (e.track[0].style.opacity = 0)
                    }
                },
                setTranslate: function() {
                    if (T.params.scrollbar) {
                        var e, a = T.scrollbar,
                            t = (T.translate || 0, a.dragSize);
                        e = (a.trackSize - a.dragSize) * T.progress, T.rtl && T.isHorizontal() ? (e = -e, e > 0 ? (t = a.dragSize - e, e = 0) : -e + a.dragSize > a.trackSize && (t = a.trackSize + e)) : 0 > e ? (t = a.dragSize + e, e = 0) : e + a.dragSize > a.trackSize && (t = a.trackSize - e), T.isHorizontal() ? (T.support.transforms3d ? a.drag.transform("translate3d(" + e + "px, 0, 0)") : a.drag.transform("translateX(" + e + "px)"), a.drag[0].style.width = t + "px") : (T.support.transforms3d ? a.drag.transform("translate3d(0px, " + e + "px, 0)") : a.drag.transform("translateY(" + e + "px)"), a.drag[0].style.height = t + "px"), T.params.scrollbarHide && (clearTimeout(a.timeout), a.track[0].style.opacity = 1, a.timeout = setTimeout(function() {
                            a.track[0].style.opacity = 0, a.track.transition(400)
                        }, 1e3))
                    }
                },
                setTransition: function(e) {
                    T.params.scrollbar && T.scrollbar.drag.transition(e)
                }
            }, T.controller = {
                LinearSpline: function(e, a) {
                    this.x = e, this.y = a, this.lastIndex = e.length - 1;
                    var t, s;
                    this.x.length, this.interpolate = function(e) {
                        return e ? (s = r(this.x, e), t = s - 1, (e - this.x[t]) * (this.y[s] - this.y[t]) / (this.x[s] - this.x[t]) + this.y[t]) : 0
                    };
                    var r = function() {
                        var e, a, t;
                        return function(s, r) {
                            for (a = -1, e = s.length; e - a > 1;) s[t = e + a >> 1] <= r ? a = t : e = t;
                            return e
                        }
                    }()
                },
                getInterpolateFunction: function(e) {
                    T.controller.spline || (T.controller.spline = T.params.loop ? new T.controller.LinearSpline(T.slidesGrid, e.slidesGrid) : new T.controller.LinearSpline(T.snapGrid, e.snapGrid))
                },
                setTranslate: function(e, a) {
                    function s(a) {
                        e = a.rtl && "horizontal" === a.params.direction ? -T.translate : T.translate, "slide" === T.params.controlBy && (T.controller.getInterpolateFunction(a), i = -T.controller.spline.interpolate(-e)), i && "container" !== T.params.controlBy || (r = (a.maxTranslate() - a.minTranslate()) / (T.maxTranslate() - T.minTranslate()), i = (e - T.minTranslate()) * r + a.minTranslate()), T.params.controlInverse && (i = a.maxTranslate() - i), a.updateProgress(i), a.setWrapperTranslate(i, !1, T), a.updateActiveIndex()
                    }
                    var r, i, n = T.params.control;
                    if (T.isArray(n))
                        for (var o = 0; o < n.length; o++) n[o] !== a && n[o] instanceof t && s(n[o]);
                    else n instanceof t && a !== n && s(n)
                },
                setTransition: function(e, a) {
                    function s(a) {
                        a.setWrapperTransition(e, T), 0 !== e && (a.onTransitionStart(),
                            a.wrapper.transitionEnd(function() {
                                i && (a.params.loop && "slide" === T.params.controlBy && a.fixLoop(), a.onTransitionEnd())
                            }))
                    }
                    var r, i = T.params.control;
                    if (T.isArray(i))
                        for (r = 0; r < i.length; r++) i[r] !== a && i[r] instanceof t && s(i[r]);
                    else i instanceof t && a !== i && s(i)
                }
            }, T.hashnav = {
                onHashCange: function(e, a) {
                    var t = document.location.hash.replace("#", ""),
                        s = T.slides.eq(T.activeIndex).attr("data-hash");
                    t !== s && T.slideTo(T.wrapper.children("." + T.params.slideClass + '[data-hash="' + t + '"]').index())
                },
                attachEvents: function(e) {
                    var t = e ? "off" : "on";
                    a(window)[t]("hashchange", T.hashnav.onHashCange)
                },
                setHash: function() {
                    if (T.hashnav.initialized && T.params.hashnav)
                        if (T.params.replaceState && window.history && window.history.replaceState) window.history.replaceState(null, null, "#" + T.slides.eq(T.activeIndex).attr("data-hash") || "");
                        else {
                            var e = T.slides.eq(T.activeIndex),
                                a = e.attr("data-hash") || e.attr("data-history");
                            document.location.hash = a || ""
                        }
                },
                init: function() {
                    if (T.params.hashnav && !T.params.history) {
                        T.hashnav.initialized = !0;
                        var e = document.location.hash.replace("#", "");
                        if (e)
                            for (var a = 0, t = 0, s = T.slides.length; s > t; t++) {
                                var r = T.slides.eq(t),
                                    i = r.attr("data-hash") || r.attr("data-history");
                                if (i === e && !r.hasClass(T.params.slideDuplicateClass)) {
                                    var n = r.index();
                                    T.slideTo(n, a, T.params.runCallbacksOnInit, !0)
                                }
                            }
                        T.params.hashnavWatchState && T.hashnav.attachEvents()
                    }
                },
                destroy: function() {
                    T.params.hashnavWatchState && T.hashnav.attachEvents(!0)
                }
            }, T.history = {
                init: function() {
                    if (T.params.history) {
                        if (!window.history || !window.history.pushState) return T.params.history = !1, void(T.params.hashnav = !0);
                        T.history.initialized = !0, this.paths = this.getPathValues(), (this.paths.key || this.paths.value) && (this.scrollToSlide(0, this.paths.value, T.params.runCallbacksOnInit), T.params.replaceState || window.addEventListener("popstate", this.setHistoryPopState))
                    }
                },
                setHistoryPopState: function() {
                    T.history.paths = T.history.getPathValues(), T.history.scrollToSlide(T.params.speed, T.history.paths.value, !1)
                },
                getPathValues: function() {
                    var e = window.location.pathname.slice(1).split("/"),
                        a = e.length,
                        t = e[a - 2],
                        s = e[a - 1];
                    return {
                        key: t,
                        value: s
                    }
                },
                setHistory: function(e, a) {
                    if (T.history.initialized && T.params.history) {
                        var t = T.slides.eq(a),
                            s = this.slugify(t.attr("data-history"));
                        window.location.pathname.includes(e) || (s = e + "/" + s), T.params.replaceState ? window.history.replaceState(null, null, s) : window.history.pushState(null, null, s)
                    }
                },
                slugify: function(e) {
                    return e.toString().toLowerCase().replace(/\s+/g, "-").replace(/[^\w\-]+/g, "").replace(/\-\-+/g, "-").replace(/^-+/, "").replace(/-+$/, "")
                },
                scrollToSlide: function(e, a, t) {
                    if (a)
                        for (var s = 0, r = T.slides.length; r > s; s++) {
                            var i = T.slides.eq(s),
                                n = this.slugify(i.attr("data-history"));
                            if (n === a && !i.hasClass(T.params.slideDuplicateClass)) {
                                var o = i.index();
                                T.slideTo(o, e, t)
                            }
                        } else T.slideTo(0, e, t)
                }
            }, T.disableKeyboardControl = function() {
                T.params.keyboardControl = !1, a(document).off("keydown", l)
            }, T.enableKeyboardControl = function() {
                T.params.keyboardControl = !0, a(document).on("keydown", l)
            }, T.mousewheel = {
                event: !1,
                lastScrollTime: (new window.Date).getTime()
            }, T.params.mousewheelControl && (T.mousewheel.event = navigator.userAgent.indexOf("firefox") > -1 ? "DOMMouseScroll" : p() ? "wheel" : "mousewheel"), T.disableMousewheelControl = function() {
                if (!T.mousewheel.event) return !1;
                var e = T.container;
                return "container" !== T.params.mousewheelEventsTarged && (e = a(T.params.mousewheelEventsTarged)), e.off(T.mousewheel.event, d), !0
            }, T.enableMousewheelControl = function() {
                if (!T.mousewheel.event) return !1;
                var e = T.container;
                return "container" !== T.params.mousewheelEventsTarged && (e = a(T.params.mousewheelEventsTarged)), e.on(T.mousewheel.event, d), !0
            }, T.parallax = {
                setTranslate: function() {
                    T.container.children("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function() {
                        m(this, T.progress)
                    }), T.slides.each(function() {
                        var e = a(this);
                        e.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function() {
                            var a = Math.min(Math.max(e[0].progress, -1), 1);
                            m(this, a)
                        })
                    })
                },
                setTransition: function(e) {
                    "undefined" == typeof e && (e = T.params.speed), T.container.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function() {
                        var t = a(this),
                            s = parseInt(t.attr("data-swiper-parallax-duration"), 10) || e;
                        0 === e && (s = 0), t.transition(s)
                    })
                }
            }, T.zoom = {
                scale: 1,
                currentScale: 1,
                isScaling: !1,
                gesture: {
                    slide: void 0,
                    slideWidth: void 0,
                    slideHeight: void 0,
                    image: void 0,
                    imageWrap: void 0,
                    zoomMax: T.params.zoomMax
                },
                image: {
                    isTouched: void 0,
                    isMoved: void 0,
                    currentX: void 0,
                    currentY: void 0,
                    minX: void 0,
                    minY: void 0,
                    maxX: void 0,
                    maxY: void 0,
                    width: void 0,
                    height: void 0,
                    startX: void 0,
                    startY: void 0,
                    touchesStart: {},
                    touchesCurrent: {}
                },
                velocity: {
                    x: void 0,
                    y: void 0,
                    prevPositionX: void 0,
                    prevPositionY: void 0,
                    prevTime: void 0
                },
                getDistanceBetweenTouches: function(e) {
                    if (e.targetTouches.length < 2) return 1;
                    var a = e.targetTouches[0].pageX,
                        t = e.targetTouches[0].pageY,
                        s = e.targetTouches[1].pageX,
                        r = e.targetTouches[1].pageY,
                        i = Math.sqrt(Math.pow(s - a, 2) + Math.pow(r - t, 2));
                    return i
                },
                onGestureStart: function(e) {
                    var t = T.zoom;
                    if (!T.support.gestures) {
                        if ("touchstart" !== e.type || "touchstart" === e.type && e.targetTouches.length < 2) return;
                        t.gesture.scaleStart = t.getDistanceBetweenTouches(e)
                    }
                    return t.gesture.slide && t.gesture.slide.length || (t.gesture.slide = a(this), 0 === t.gesture.slide.length && (t.gesture.slide = T.slides.eq(T.activeIndex)), t.gesture.image = t.gesture.slide.find("img, svg, canvas"), t.gesture.imageWrap = t.gesture.image.parent("." + T.params.zoomContainerClass), t.gesture.zoomMax = t.gesture.imageWrap.attr("data-swiper-zoom") || T.params.zoomMax, 0 !== t.gesture.imageWrap.length) ? (t.gesture.image.transition(0), void(t.isScaling = !0)) : void(t.gesture.image = void 0)
                },
                onGestureChange: function(e) {
                    var a = T.zoom;
                    if (!T.support.gestures) {
                        if ("touchmove" !== e.type || "touchmove" === e.type && e.targetTouches.length < 2) return;
                        a.gesture.scaleMove = a.getDistanceBetweenTouches(e)
                    }
                    a.gesture.image && 0 !== a.gesture.image.length && (T.support.gestures ? a.scale = e.scale * a.currentScale : a.scale = a.gesture.scaleMove / a.gesture.scaleStart * a.currentScale, a.scale > a.gesture.zoomMax && (a.scale = a.gesture.zoomMax - 1 + Math.pow(a.scale - a.gesture.zoomMax + 1, .5)), a.scale < T.params.zoomMin && (a.scale = T.params.zoomMin + 1 - Math.pow(T.params.zoomMin - a.scale + 1, .5)), a.gesture.image.transform("translate3d(0,0,0) scale(" + a.scale + ")"))
                },
                onGestureEnd: function(e) {
                    var a = T.zoom;
                    !T.support.gestures && ("touchend" !== e.type || "touchend" === e.type && e.changedTouches.length < 2) || a.gesture.image && 0 !== a.gesture.image.length && (a.scale = Math.max(Math.min(a.scale, a.gesture.zoomMax), T.params.zoomMin), a.gesture.image.transition(T.params.speed).transform("translate3d(0,0,0) scale(" + a.scale + ")"), a.currentScale = a.scale, a.isScaling = !1, 1 === a.scale && (a.gesture.slide = void 0))
                },
                onTouchStart: function(e, a) {
                    var t = e.zoom;
                    t.gesture.image && 0 !== t.gesture.image.length && (t.image.isTouched || ("android" === e.device.os && a.preventDefault(), t.image.isTouched = !0, t.image.touchesStart.x = "touchstart" === a.type ? a.targetTouches[0].pageX : a.pageX, t.image.touchesStart.y = "touchstart" === a.type ? a.targetTouches[0].pageY : a.pageY))
                },
                onTouchMove: function(e) {
                    var a = T.zoom;
                    if (a.gesture.image && 0 !== a.gesture.image.length && (T.allowClick = !1, a.image.isTouched && a.gesture.slide)) {
                        a.image.isMoved || (a.image.width = a.gesture.image[0].offsetWidth, a.image.height = a.gesture.image[0].offsetHeight, a.image.startX = T.getTranslate(a.gesture.imageWrap[0], "x") || 0, a.image.startY = T.getTranslate(a.gesture.imageWrap[0], "y") || 0, a.gesture.slideWidth = a.gesture.slide[0].offsetWidth, a.gesture.slideHeight = a.gesture.slide[0].offsetHeight, a.gesture.imageWrap.transition(0), T.rtl && (a.image.startX = -a.image.startX), T.rtl && (a.image.startY = -a.image.startY));
                        var t = a.image.width * a.scale,
                            s = a.image.height * a.scale;
                        if (!(t < a.gesture.slideWidth && s < a.gesture.slideHeight)) {
                            if (a.image.minX = Math.min(a.gesture.slideWidth / 2 - t / 2, 0), a.image.maxX = -a.image.minX, a.image.minY = Math.min(a.gesture.slideHeight / 2 - s / 2, 0), a.image.maxY = -a.image.minY, a.image.touchesCurrent.x = "touchmove" === e.type ? e.targetTouches[0].pageX : e.pageX, a.image.touchesCurrent.y = "touchmove" === e.type ? e.targetTouches[0].pageY : e.pageY, !a.image.isMoved && !a.isScaling) {
                                if (T.isHorizontal() && Math.floor(a.image.minX) === Math.floor(a.image.startX) && a.image.touchesCurrent.x < a.image.touchesStart.x || Math.floor(a.image.maxX) === Math.floor(a.image.startX) && a.image.touchesCurrent.x > a.image.touchesStart.x) return void(a.image.isTouched = !1);
                                if (!T.isHorizontal() && Math.floor(a.image.minY) === Math.floor(a.image.startY) && a.image.touchesCurrent.y < a.image.touchesStart.y || Math.floor(a.image.maxY) === Math.floor(a.image.startY) && a.image.touchesCurrent.y > a.image.touchesStart.y) return void(a.image.isTouched = !1)
                            }
                            e.preventDefault(), e.stopPropagation(), a.image.isMoved = !0, a.image.currentX = a.image.touchesCurrent.x - a.image.touchesStart.x + a.image.startX, a.image.currentY = a.image.touchesCurrent.y - a.image.touchesStart.y + a.image.startY, a.image.currentX < a.image.minX && (a.image.currentX = a.image.minX + 1 - Math.pow(a.image.minX - a.image.currentX + 1, .8)), a.image.currentX > a.image.maxX && (a.image.currentX = a.image.maxX - 1 + Math.pow(a.image.currentX - a.image.maxX + 1, .8)), a.image.currentY < a.image.minY && (a.image.currentY = a.image.minY + 1 - Math.pow(a.image.minY - a.image.currentY + 1, .8)), a.image.currentY > a.image.maxY && (a.image.currentY = a.image.maxY - 1 + Math.pow(a.image.currentY - a.image.maxY + 1, .8)), a.velocity.prevPositionX || (a.velocity.prevPositionX = a.image.touchesCurrent.x), a.velocity.prevPositionY || (a.velocity.prevPositionY = a.image.touchesCurrent.y), a.velocity.prevTime || (a.velocity.prevTime = Date.now()), a.velocity.x = (a.image.touchesCurrent.x - a.velocity.prevPositionX) / (Date.now() - a.velocity.prevTime) / 2, a.velocity.y = (a.image.touchesCurrent.y - a.velocity.prevPositionY) / (Date.now() - a.velocity.prevTime) / 2, Math.abs(a.image.touchesCurrent.x - a.velocity.prevPositionX) < 2 && (a.velocity.x = 0), Math.abs(a.image.touchesCurrent.y - a.velocity.prevPositionY) < 2 && (a.velocity.y = 0), a.velocity.prevPositionX = a.image.touchesCurrent.x, a.velocity.prevPositionY = a.image.touchesCurrent.y, a.velocity.prevTime = Date.now(), a.gesture.imageWrap.transform("translate3d(" + a.image.currentX + "px, " + a.image.currentY + "px,0)")
                        }
                    }
                },
                onTouchEnd: function(e, a) {
                    var t = e.zoom;
                    if (t.gesture.image && 0 !== t.gesture.image.length) {
                        if (!t.image.isTouched || !t.image.isMoved) return t.image.isTouched = !1, void(t.image.isMoved = !1);
                        t.image.isTouched = !1, t.image.isMoved = !1;
                        var s = 300,
                            r = 300,
                            i = t.velocity.x * s,
                            n = t.image.currentX + i,
                            o = t.velocity.y * r,
                            l = t.image.currentY + o;
                        0 !== t.velocity.x && (s = Math.abs((n - t.image.currentX) / t.velocity.x)), 0 !== t.velocity.y && (r = Math.abs((l - t.image.currentY) / t.velocity.y));
                        var p = Math.max(s, r);
                        t.image.currentX = n, t.image.currentY = l;
                        var d = t.image.width * t.scale,
                            u = t.image.height * t.scale;
                        t.image.minX = Math.min(t.gesture.slideWidth / 2 - d / 2, 0), t.image.maxX = -t.image.minX, t.image.minY = Math.min(t.gesture.slideHeight / 2 - u / 2, 0), t.image.maxY = -t.image.minY, t.image.currentX = Math.max(Math.min(t.image.currentX, t.image.maxX), t.image.minX), t.image.currentY = Math.max(Math.min(t.image.currentY, t.image.maxY), t.image.minY), t.gesture.imageWrap.transition(p).transform("translate3d(" + t.image.currentX + "px, " + t.image.currentY + "px,0)")
                    }
                },
                onTransitionEnd: function(e) {
                    var a = e.zoom;
                    a.gesture.slide && e.previousIndex !== e.activeIndex && (a.gesture.image.transform("translate3d(0,0,0) scale(1)"), a.gesture.imageWrap.transform("translate3d(0,0,0)"), a.gesture.slide = a.gesture.image = a.gesture.imageWrap = void 0, a.scale = a.currentScale = 1)
                },
                toggleZoom: function(e, t) {
                    var s = e.zoom;
                    if (s.gesture.slide || (s.gesture.slide = e.clickedSlide ? a(e.clickedSlide) : e.slides.eq(e.activeIndex), s.gesture.image = s.gesture.slide.find("img, svg, canvas"), s.gesture.imageWrap = s.gesture.image.parent("." + e.params.zoomContainerClass)), s.gesture.image && 0 !== s.gesture.image.length) {
                        var r, i, n, o, l, p, d, u, m, c, g, h, f, v, w, y, x, T;
                        "undefined" == typeof s.image.touchesStart.x && t ? (r = "touchend" === t.type ? t.changedTouches[0].pageX : t.pageX, i = "touchend" === t.type ? t.changedTouches[0].pageY : t.pageY) : (r = s.image.touchesStart.x, i = s.image.touchesStart.y), s.scale && 1 !== s.scale ? (s.scale = s.currentScale = 1, s.gesture.imageWrap.transition(300).transform("translate3d(0,0,0)"), s.gesture.image.transition(300).transform("translate3d(0,0,0) scale(1)"), s.gesture.slide = void 0) : (s.scale = s.currentScale = s.gesture.imageWrap.attr("data-swiper-zoom") || e.params.zoomMax, t ? (x = s.gesture.slide[0].offsetWidth, T = s.gesture.slide[0].offsetHeight, n = s.gesture.slide.offset().left, o = s.gesture.slide.offset().top, l = n + x / 2 - r, p = o + T / 2 - i, m = s.gesture.image[0].offsetWidth, c = s.gesture.image[0].offsetHeight, g = m * s.scale, h = c * s.scale, f = Math.min(x / 2 - g / 2, 0), v = Math.min(T / 2 - h / 2, 0), w = -f, y = -v, d = l * s.scale, u = p * s.scale, f > d && (d = f), d > w && (d = w), v > u && (u = v), u > y && (u = y)) : (d = 0, u = 0), s.gesture.imageWrap.transition(300).transform("translate3d(" + d + "px, " + u + "px,0)"), s.gesture.image.transition(300).transform("translate3d(0,0,0) scale(" + s.scale + ")"))
                    }
                },
                attachEvents: function(e) {
                    var t = e ? "off" : "on";
                    if (T.params.zoom) {
                        var s = (T.slides, !("touchstart" !== T.touchEvents.start || !T.support.passiveListener || !T.params.passiveListeners) && {
                            passive: !0,
                            capture: !1
                        });
                        T.support.gestures ? (T.slides[t]("gesturestart", T.zoom.onGestureStart, s), T.slides[t]("gesturechange", T.zoom.onGestureChange, s), T.slides[t]("gestureend", T.zoom.onGestureEnd, s)) : "touchstart" === T.touchEvents.start && (T.slides[t](T.touchEvents.start, T.zoom.onGestureStart, s), T.slides[t](T.touchEvents.move, T.zoom.onGestureChange, s), T.slides[t](T.touchEvents.end, T.zoom.onGestureEnd, s)), T[t]("touchStart", T.zoom.onTouchStart), T.slides.each(function(e, s) {
                            a(s).find("." + T.params.zoomContainerClass).length > 0 && a(s)[t](T.touchEvents.move, T.zoom.onTouchMove)
                        }), T[t]("touchEnd", T.zoom.onTouchEnd), T[t]("transitionEnd", T.zoom.onTransitionEnd), T.params.zoomToggle && T.on("doubleTap", T.zoom.toggleZoom)
                    }
                },
                init: function() {
                    T.zoom.attachEvents()
                },
                destroy: function() {
                    T.zoom.attachEvents(!0)
                }
            }, T._plugins = [];
            for (var A in T.plugins) {
                var O = T.plugins[A](T, T.params[A]);
                O && T._plugins.push(O)
            }
            return T.callPlugins = function(e) {
                for (var a = 0; a < T._plugins.length; a++) e in T._plugins[a] && T._plugins[a][e](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5])
            }, T.emitterEventListeners = {}, T.emit = function(e) {
                T.params[e] && T.params[e](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5]);
                var a;
                if (T.emitterEventListeners[e])
                    for (a = 0; a < T.emitterEventListeners[e].length; a++) T.emitterEventListeners[e][a](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5]);
                T.callPlugins && T.callPlugins(e, arguments[1], arguments[2], arguments[3], arguments[4], arguments[5])
            }, T.on = function(e, a) {
                return e = c(e), T.emitterEventListeners[e] || (T.emitterEventListeners[e] = []), T.emitterEventListeners[e].push(a), T
            }, T.off = function(e, a) {
                var t;
                if (e = c(e), "undefined" == typeof a) return T.emitterEventListeners[e] = [], T;
                if (T.emitterEventListeners[e] && 0 !== T.emitterEventListeners[e].length) {
                    for (t = 0; t < T.emitterEventListeners[e].length; t++) T.emitterEventListeners[e][t] === a && T.emitterEventListeners[e].splice(t, 1);
                    return T
                }
            }, T.once = function(e, a) {
                e = c(e);
                var t = function() {
                    a(arguments[0], arguments[1], arguments[2], arguments[3], arguments[4]), T.off(e, t)
                };
                return T.on(e, t), T
            }, T.a11y = {
                makeFocusable: function(e) {
                    return e.attr("tabIndex", "0"), e
                },
                addRole: function(e, a) {
                    return e.attr("role", a), e
                },
                addLabel: function(e, a) {
                    return e.attr("aria-label", a), e
                },
                disable: function(e) {
                    return e.attr("aria-disabled", !0), e
                },
                enable: function(e) {
                    return e.attr("aria-disabled", !1), e
                },
                onEnterKey: function(e) {
                    13 === e.keyCode && (a(e.target).is(T.params.nextButton) ? (T.onClickNext(e), T.isEnd ? T.a11y.notify(T.params.lastSlideMessage) : T.a11y.notify(T.params.nextSlideMessage)) : a(e.target).is(T.params.prevButton) && (T.onClickPrev(e), T.isBeginning ? T.a11y.notify(T.params.firstSlideMessage) : T.a11y.notify(T.params.prevSlideMessage)), a(e.target).is("." + T.params.bulletClass) && a(e.target)[0].click())
                },
                liveRegion: a('<span class="' + T.params.notificationClass + '" aria-live="assertive" aria-atomic="true"></span>'),
                notify: function(e) {
                    var a = T.a11y.liveRegion;
                    0 !== a.length && (a.html(""), a.html(e))
                },
                init: function() {
                    T.params.nextButton && T.nextButton && T.nextButton.length > 0 && (T.a11y.makeFocusable(T.nextButton), T.a11y.addRole(T.nextButton, "button"), T.a11y.addLabel(T.nextButton, T.params.nextSlideMessage)), T.params.prevButton && T.prevButton && T.prevButton.length > 0 && (T.a11y.makeFocusable(T.prevButton), T.a11y.addRole(T.prevButton, "button"), T.a11y.addLabel(T.prevButton, T.params.prevSlideMessage)), a(T.container).append(T.a11y.liveRegion)
                },
                initPagination: function() {
                    T.params.pagination && T.params.paginationClickable && T.bullets && T.bullets.length && T.bullets.each(function() {
                        var e = a(this);
                        T.a11y.makeFocusable(e), T.a11y.addRole(e, "button"), T.a11y.addLabel(e, T.params.paginationBulletMessage.replace(/{{index}}/, e.index() + 1))
                    })
                },
                destroy: function() {
                    T.a11y.liveRegion && T.a11y.liveRegion.length > 0 && T.a11y.liveRegion.remove()
                }
            }, T.init = function() {
                T.params.loop && T.createLoop(), T.updateContainerSize(), T.updateSlidesSize(), T.updatePagination(), T.params.scrollbar && T.scrollbar && (T.scrollbar.set(), T.params.scrollbarDraggable && T.scrollbar.enableDraggable()), "slide" !== T.params.effect && T.effects[T.params.effect] && (T.params.loop || T.updateProgress(), T.effects[T.params.effect].setTranslate()), T.params.loop ? T.slideTo(T.params.initialSlide + T.loopedSlides, 0, T.params.runCallbacksOnInit) : (T.slideTo(T.params.initialSlide, 0, T.params.runCallbacksOnInit), 0 === T.params.initialSlide && (T.parallax && T.params.parallax && T.parallax.setTranslate(), T.lazy && T.params.lazyLoading && (T.lazy.load(), T.lazy.initialImageLoaded = !0))), T.attachEvents(), T.params.observer && T.support.observer && T.initObservers(), T.params.preloadImages && !T.params.lazyLoading && T.preloadImages(), T.params.zoom && T.zoom && T.zoom.init(), T.params.autoplay && T.startAutoplay(), T.params.keyboardControl && T.enableKeyboardControl && T.enableKeyboardControl(), T.params.mousewheelControl && T.enableMousewheelControl && T.enableMousewheelControl(), T.params.hashnavReplaceState && (T.params.replaceState = T.params.hashnavReplaceState), T.params.history && T.history && T.history.init(), T.params.hashnav && T.hashnav && T.hashnav.init(), T.params.a11y && T.a11y && T.a11y.init(), T.emit("onInit", T)
            }, T.cleanupStyles = function() {
                T.container.removeClass(T.classNames.join(" ")).removeAttr("style"), T.wrapper.removeAttr("style"), T.slides && T.slides.length && T.slides.removeClass([T.params.slideVisibleClass, T.params.slideActiveClass, T.params.slideNextClass, T.params.slidePrevClass].join(" ")).removeAttr("style").removeAttr("data-swiper-column").removeAttr("data-swiper-row"), T.paginationContainer && T.paginationContainer.length && T.paginationContainer.removeClass(T.params.paginationHiddenClass), T.bullets && T.bullets.length && T.bullets.removeClass(T.params.bulletActiveClass), T.params.prevButton && a(T.params.prevButton).removeClass(T.params.buttonDisabledClass), T.params.nextButton && a(T.params.nextButton).removeClass(T.params.buttonDisabledClass), T.params.scrollbar && T.scrollbar && (T.scrollbar.track && T.scrollbar.track.length && T.scrollbar.track.removeAttr("style"), T.scrollbar.drag && T.scrollbar.drag.length && T.scrollbar.drag.removeAttr("style"))
            }, T.destroy = function(e, a) {
                T.detachEvents(), T.stopAutoplay(), T.params.scrollbar && T.scrollbar && T.params.scrollbarDraggable && T.scrollbar.disableDraggable(), T.params.loop && T.destroyLoop(), a && T.cleanupStyles(), T.disconnectObservers(), T.params.zoom && T.zoom && T.zoom.destroy(), T.params.keyboardControl && T.disableKeyboardControl && T.disableKeyboardControl(), T.params.mousewheelControl && T.disableMousewheelControl && T.disableMousewheelControl(), T.params.a11y && T.a11y && T.a11y.destroy(), T.params.history && !T.params.replaceState && window.removeEventListener("popstate", T.history.setHistoryPopState), T.params.hashnav && T.hashnav && T.hashnav.destroy(), T.emit("onDestroy"), e !== !1 && (T = null)
            }, T.init(), T
        }
    };
    t.prototype = {
        isSafari: function() {
            var e = window.navigator.userAgent.toLowerCase();
            return e.indexOf("safari") >= 0 && e.indexOf("chrome") < 0 && e.indexOf("android") < 0
        }(),
        isUiWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(window.navigator.userAgent),
        isArray: function(e) {
            return "[object Array]" === Object.prototype.toString.apply(e)
        },
        browser: {
            ie: window.navigator.pointerEnabled || window.navigator.msPointerEnabled,
            ieTouch: window.navigator.msPointerEnabled && window.navigator.msMaxTouchPoints > 1 || window.navigator.pointerEnabled && window.navigator.maxTouchPoints > 1,
            lteIE9: function() {
                var e = document.createElement("div");
                return e.innerHTML = "<!--[if lte IE 9]><i></i><![endif]-->", 1 === e.getElementsByTagName("i").length
            }()
        },
        device: function() {
            var e = window.navigator.userAgent,
                a = e.match(/(Android);?[\s\/]+([\d.]+)?/),
                t = e.match(/(iPad).*OS\s([\d_]+)/),
                s = e.match(/(iPod)(.*OS\s([\d_]+))?/),
                r = !t && e.match(/(iPhone\sOS|iOS)\s([\d_]+)/);
            return {
                ios: t || r || s,
                android: a
            }
        }(),
        support: {
            touch: window.Modernizr && Modernizr.touch === !0 || function() {
                return !!("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch)
            }(),
            transforms3d: window.Modernizr && Modernizr.csstransforms3d === !0 || function() {
                var e = document.createElement("div").style;
                return "webkitPerspective" in e || "MozPerspective" in e || "OPerspective" in e || "MsPerspective" in e || "perspective" in e
            }(),
            flexbox: function() {
                for (var e = document.createElement("div").style, a = "alignItems webkitAlignItems webkitBoxAlign msFlexAlign mozBoxAlign webkitFlexDirection msFlexDirection mozBoxDirection mozBoxOrient webkitBoxDirection webkitBoxOrient".split(" "), t = 0; t < a.length; t++)
                    if (a[t] in e) return !0
            }(),
            observer: function() {
                return "MutationObserver" in window || "WebkitMutationObserver" in window
            }(),
            passiveListener: function() {
                var e = !1;
                try {
                    var a = Object.defineProperty({}, "passive", {
                        get: function() {
                            e = !0
                        }
                    });
                    window.addEventListener("testPassiveListener", null, a)
                } catch (e) {}
                return e
            }(),
            gestures: function() {
                return "ongesturestart" in window
            }()
        },
        plugins: {}
    };
    for (var s = ["jQuery", "Zepto", "Dom7"], r = 0; r < s.length; r++) window[s[r]] && e(window[s[r]]);
    var i;
    i = "undefined" == typeof Dom7 ? window.Dom7 || window.Zepto || window.jQuery : Dom7, i && ("transitionEnd" in i.fn || (i.fn.transitionEnd = function(e) {
        function a(i) {
            if (i.target === this)
                for (e.call(this, i), t = 0; t < s.length; t++) r.off(s[t], a)
        }
        var t, s = ["webkitTransitionEnd", "transitionend", "oTransitionEnd", "MSTransitionEnd", "msTransitionEnd"],
            r = this;
        if (e)
            for (t = 0; t < s.length; t++) r.on(s[t], a);
        return this
    }), "transform" in i.fn || (i.fn.transform = function(e) {
        for (var a = 0; a < this.length; a++) {
            var t = this[a].style;
            t.webkitTransform = t.MsTransform = t.msTransform = t.MozTransform = t.OTransform = t.transform = e
        }
        return this
    }), "transition" in i.fn || (i.fn.transition = function(e) {
        "string" != typeof e && (e += "ms");
        for (var a = 0; a < this.length; a++) {
            var t = this[a].style;
            t.webkitTransitionDuration = t.MsTransitionDuration = t.msTransitionDuration = t.MozTransitionDuration = t.OTransitionDuration = t.transitionDuration = e
        }
        return this
    }), "outerWidth" in i.fn || (i.fn.outerWidth = function(e) {
        return this.length > 0 ? e ? this[0].offsetWidth + parseFloat(this.css("margin-right")) + parseFloat(this.css("margin-left")) : this[0].offsetWidth : null
    })), window.Swiper = t
}(), "undefined" != typeof module ? module.exports = window.Swiper : "function" == typeof define && define.amd && define([], function() {
    "use strict";
    return window.Swiper
});
! function(t) {
    "function" == typeof define && define.amd ? define(["jquery"], t) : t(jQuery)
}(function(t) {
    function e(e, s) {
        var n, o, a, r = e.nodeName.toLowerCase();
        return "area" === r ? (n = e.parentNode, o = n.name, e.href && o && "map" === n.nodeName.toLowerCase() ? (a = t("img[usemap='#" + o + "']")[0], !!a && i(a)) : !1) : (/^(input|select|textarea|button|object)$/.test(r) ? !e.disabled : "a" === r ? e.href || s : s) && i(e)
    }

    function i(e) {
        return t.expr.filters.visible(e) && !t(e).parents().addBack().filter(function() {
            return "hidden" === t.css(this, "visibility")
        }).length
    }

    function s(t) {
        for (var e, i; t.length && t[0] !== document;) {
            if (e = t.css("position"), ("absolute" === e || "relative" === e || "fixed" === e) && (i = parseInt(t.css("zIndex"), 10), !isNaN(i) && 0 !== i)) return i;
            t = t.parent()
        }
        return 0
    }

    function n() {
        this._curInst = null, this._keyEvent = !1, this._disabledInputs = [], this._datepickerShowing = !1, this._inDialog = !1, this._mainDivId = "ui-datepicker-div", this._inlineClass = "ui-datepicker-inline", this._appendClass = "ui-datepicker-append", this._triggerClass = "ui-datepicker-trigger", this._dialogClass = "ui-datepicker-dialog", this._disableClass = "ui-datepicker-disabled", this._unselectableClass = "ui-datepicker-unselectable", this._currentClass = "ui-datepicker-current-day", this._dayOverClass = "ui-datepicker-days-cell-over", this.regional = [], this.regional[""] = {
            closeText: "Done",
            prevText: "Prev",
            nextText: "Next",
            currentText: "Today",
            monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            dayNamesMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
            weekHeader: "Wk",
            dateFormat: "mm/dd/yy",
            firstDay: 0,
            isRTL: !1,
            showMonthAfterYear: !1,
            yearSuffix: ""
        }, this._defaults = {
            showOn: "focus",
            showAnim: "fadeIn",
            showOptions: {},
            defaultDate: null,
            appendText: "",
            buttonText: "...",
            buttonImage: "",
            buttonImageOnly: !1,
            hideIfNoPrevNext: !1,
            navigationAsDateFormat: !1,
            gotoCurrent: !1,
            changeMonth: !1,
            changeYear: !1,
            yearRange: "c-10:c+10",
            showOtherMonths: !1,
            selectOtherMonths: !1,
            showWeek: !1,
            calculateWeek: this.iso8601Week,
            shortYearCutoff: "+10",
            minDate: null,
            maxDate: null,
            duration: "fast",
            beforeShowDay: null,
            beforeShow: null,
            onSelect: null,
            onChangeMonthYear: null,
            onClose: null,
            numberOfMonths: 1,
            showCurrentAtPos: 0,
            stepMonths: 1,
            stepBigMonths: 12,
            altField: "",
            altFormat: "",
            constrainInput: !0,
            showButtonPanel: !1,
            autoSize: !1,
            disabled: !1
        }, t.extend(this._defaults, this.regional[""]), this.regional.en = t.extend(!0, {}, this.regional[""]), this.regional["en-US"] = t.extend(!0, {}, this.regional.en), this.dpDiv = o(t("<div id='" + this._mainDivId + "' class='ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>"))
    }

    function o(e) {
        var i = "button, .ui-datepicker-prev, .ui-datepicker-next, .ui-datepicker-calendar td a";
        return e.delegate(i, "mouseout", function() {
            t(this).removeClass("ui-state-hover"), -1 !== this.className.indexOf("ui-datepicker-prev") && t(this).removeClass("ui-datepicker-prev-hover"), -1 !== this.className.indexOf("ui-datepicker-next") && t(this).removeClass("ui-datepicker-next-hover")
        }).delegate(i, "mouseover", a)
    }

    function a() {
        t.datepicker._isDisabledDatepicker(v.inline ? v.dpDiv.parent()[0] : v.input[0]) || (t(this).parents(".ui-datepicker-calendar").find("a").removeClass("ui-state-hover"), t(this).addClass("ui-state-hover"), -1 !== this.className.indexOf("ui-datepicker-prev") && t(this).addClass("ui-datepicker-prev-hover"), -1 !== this.className.indexOf("ui-datepicker-next") && t(this).addClass("ui-datepicker-next-hover"))
    }

    function r(e, i) {
        t.extend(e, i);
        for (var s in i) null == i[s] && (e[s] = i[s]);
        return e
    }

    function h(t) {
        return function() {
            var e = this.element.val();
            t.apply(this, arguments), this._refresh(), e !== this.element.val() && this._trigger("change")
        }
    }
    t.ui = t.ui || {}, t.extend(t.ui, {
        version: "1.11.4",
        keyCode: {
            BACKSPACE: 8,
            COMMA: 188,
            DELETE: 46,
            DOWN: 40,
            END: 35,
            ENTER: 13,
            ESCAPE: 27,
            HOME: 36,
            LEFT: 37,
            PAGE_DOWN: 34,
            PAGE_UP: 33,
            PERIOD: 190,
            RIGHT: 39,
            SPACE: 32,
            TAB: 9,
            UP: 38
        }
    }), t.fn.extend({
        scrollParent: function(e) {
            var i = this.css("position"),
                s = "absolute" === i,
                n = e ? /(auto|scroll|hidden)/ : /(auto|scroll)/,
                o = this.parents().filter(function() {
                    var e = t(this);
                    return s && "static" === e.css("position") ? !1 : n.test(e.css("overflow") + e.css("overflow-y") + e.css("overflow-x"))
                }).eq(0);
            return "fixed" !== i && o.length ? o : t(this[0].ownerDocument || document)
        },
        uniqueId: function() {
            var t = 0;
            return function() {
                return this.each(function() {
                    this.id || (this.id = "ui-id-" + ++t)
                })
            }
        }(),
        removeUniqueId: function() {
            return this.each(function() {
                /^ui-id-\d+$/.test(this.id) && t(this).removeAttr("id")
            })
        }
    }), t.extend(t.expr[":"], {
        data: t.expr.createPseudo ? t.expr.createPseudo(function(e) {
            return function(i) {
                return !!t.data(i, e)
            }
        }) : function(e, i, s) {
            return !!t.data(e, s[3])
        },
        focusable: function(i) {
            return e(i, !isNaN(t.attr(i, "tabindex")))
        },
        tabbable: function(i) {
            var s = t.attr(i, "tabindex"),
                n = isNaN(s);
            return (n || s >= 0) && e(i, !n)
        }
    }), t("<a>").outerWidth(1).jquery || t.each(["Width", "Height"], function(e, i) {
        function s(e, i, s, o) {
            return t.each(n, function() {
                i -= parseFloat(t.css(e, "padding" + this)) || 0, s && (i -= parseFloat(t.css(e, "border" + this + "Width")) || 0), o && (i -= parseFloat(t.css(e, "margin" + this)) || 0)
            }), i
        }
        var n = "Width" === i ? ["Left", "Right"] : ["Top", "Bottom"],
            o = i.toLowerCase(),
            a = {
                innerWidth: t.fn.innerWidth,
                innerHeight: t.fn.innerHeight,
                outerWidth: t.fn.outerWidth,
                outerHeight: t.fn.outerHeight
            };
        t.fn["inner" + i] = function(e) {
            return void 0 === e ? a["inner" + i].call(this) : this.each(function() {
                t(this).css(o, s(this, e) + "px")
            })
        }, t.fn["outer" + i] = function(e, n) {
            return "number" != typeof e ? a["outer" + i].call(this, e) : this.each(function() {
                t(this).css(o, s(this, e, !0, n) + "px")
            })
        }
    }), t.fn.addBack || (t.fn.addBack = function(t) {
        return this.add(null == t ? this.prevObject : this.prevObject.filter(t))
    }), t("<a>").data("a-b", "a").removeData("a-b").data("a-b") && (t.fn.removeData = function(e) {
        return function(i) {
            return arguments.length ? e.call(this, t.camelCase(i)) : e.call(this)
        }
    }(t.fn.removeData)), t.ui.ie = !!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase()), t.fn.extend({
        focus: function(e) {
            return function(i, s) {
                return "number" == typeof i ? this.each(function() {
                    var e = this;
                    setTimeout(function() {
                        t(e).focus(), s && s.call(e)
                    }, i)
                }) : e.apply(this, arguments)
            }
        }(t.fn.focus),
        disableSelection: function() {
            var t = "onselectstart" in document.createElement("div") ? "selectstart" : "mousedown";
            return function() {
                return this.bind(t + ".ui-disableSelection", function(t) {
                    t.preventDefault()
                })
            }
        }(),
        enableSelection: function() {
            return this.unbind(".ui-disableSelection")
        },
        zIndex: function(e) {
            if (void 0 !== e) return this.css("zIndex", e);
            if (this.length)
                for (var i, s, n = t(this[0]); n.length && n[0] !== document;) {
                    if (i = n.css("position"), ("absolute" === i || "relative" === i || "fixed" === i) && (s = parseInt(n.css("zIndex"), 10), !isNaN(s) && 0 !== s)) return s;
                    n = n.parent()
                }
            return 0
        }
    }), t.ui.plugin = {
        add: function(e, i, s) {
            var n, o = t.ui[e].prototype;
            for (n in s) o.plugins[n] = o.plugins[n] || [], o.plugins[n].push([i, s[n]])
        },
        call: function(t, e, i, s) {
            var n, o = t.plugins[e];
            if (o && (s || t.element[0].parentNode && 11 !== t.element[0].parentNode.nodeType))
                for (n = 0; n < o.length; n++) t.options[o[n][0]] && o[n][1].apply(t.element, i)
        }
    };
    var l = 0,
        u = Array.prototype.slice;
    t.cleanData = function(e) {
        return function(i) {
            var s, n, o;
            for (o = 0; null != (n = i[o]); o++) try {
                s = t._data(n, "events"), s && s.remove && t(n).triggerHandler("remove")
            } catch (a) {}
            e(i)
        }
    }(t.cleanData), t.widget = function(e, i, s) {
        var n, o, a, r, h = {},
            l = e.split(".")[0];
        return e = e.split(".")[1], n = l + "-" + e, s || (s = i, i = t.Widget), t.expr[":"][n.toLowerCase()] = function(e) {
            return !!t.data(e, n)
        }, t[l] = t[l] || {}, o = t[l][e], a = t[l][e] = function(t, e) {
            return this._createWidget ? void(arguments.length && this._createWidget(t, e)) : new a(t, e)
        }, t.extend(a, o, {
            version: s.version,
            _proto: t.extend({}, s),
            _childConstructors: []
        }), r = new i, r.options = t.widget.extend({}, r.options), t.each(s, function(e, s) {
            return t.isFunction(s) ? void(h[e] = function() {
                var t = function() {
                        return i.prototype[e].apply(this, arguments)
                    },
                    n = function(t) {
                        return i.prototype[e].apply(this, t)
                    };
                return function() {
                    var e, i = this._super,
                        o = this._superApply;
                    return this._super = t, this._superApply = n, e = s.apply(this, arguments), this._super = i, this._superApply = o, e
                }
            }()) : void(h[e] = s)
        }), a.prototype = t.widget.extend(r, {
            widgetEventPrefix: o ? r.widgetEventPrefix || e : e
        }, h, {
            constructor: a,
            namespace: l,
            widgetName: e,
            widgetFullName: n
        }), o ? (t.each(o._childConstructors, function(e, i) {
            var s = i.prototype;
            t.widget(s.namespace + "." + s.widgetName, a, i._proto)
        }), delete o._childConstructors) : i._childConstructors.push(a), t.widget.bridge(e, a), a
    }, t.widget.extend = function(e) {
        for (var i, s, n = u.call(arguments, 1), o = 0, a = n.length; a > o; o++)
            for (i in n[o]) s = n[o][i], n[o].hasOwnProperty(i) && void 0 !== s && (t.isPlainObject(s) ? e[i] = t.isPlainObject(e[i]) ? t.widget.extend({}, e[i], s) : t.widget.extend({}, s) : e[i] = s);
        return e
    }, t.widget.bridge = function(e, i) {
        var s = i.prototype.widgetFullName || e;
        t.fn[e] = function(n) {
            var o = "string" == typeof n,
                a = u.call(arguments, 1),
                r = this;
            return o ? this.each(function() {
                var i, o = t.data(this, s);
                return "instance" === n ? (r = o, !1) : o ? t.isFunction(o[n]) && "_" !== n.charAt(0) ? (i = o[n].apply(o, a), i !== o && void 0 !== i ? (r = i && i.jquery ? r.pushStack(i.get()) : i, !1) : void 0) : t.error("no such method '" + n + "' for " + e + " widget instance") : t.error("cannot call methods on " + e + " prior to initialization; attempted to call method '" + n + "'")
            }) : (a.length && (n = t.widget.extend.apply(null, [n].concat(a))), this.each(function() {
                var e = t.data(this, s);
                e ? (e.option(n || {}), e._init && e._init()) : t.data(this, s, new i(n, this))
            })), r
        }
    }, t.Widget = function() {}, t.Widget._childConstructors = [], t.Widget.prototype = {
        widgetName: "widget",
        widgetEventPrefix: "",
        defaultElement: "<div>",
        options: {
            disabled: !1,
            create: null
        },
        _createWidget: function(e, i) {
            i = t(i || this.defaultElement || this)[0], this.element = t(i), this.uuid = l++, this.eventNamespace = "." + this.widgetName + this.uuid, this.bindings = t(), this.hoverable = t(), this.focusable = t(), i !== this && (t.data(i, this.widgetFullName, this), this._on(!0, this.element, {
                remove: function(t) {
                    t.target === i && this.destroy()
                }
            }), this.document = t(i.style ? i.ownerDocument : i.document || i), this.window = t(this.document[0].defaultView || this.document[0].parentWindow)), this.options = t.widget.extend({}, this.options, this._getCreateOptions(), e), this._create(), this._trigger("create", null, this._getCreateEventData()), this._init()
        },
        _getCreateOptions: t.noop,
        _getCreateEventData: t.noop,
        _create: t.noop,
        _init: t.noop,
        destroy: function() {
            this._destroy(), this.element.unbind(this.eventNamespace).removeData(this.widgetFullName).removeData(t.camelCase(this.widgetFullName)), this.widget().unbind(this.eventNamespace).removeAttr("aria-disabled").removeClass(this.widgetFullName + "-disabled ui-state-disabled"), this.bindings.unbind(this.eventNamespace), this.hoverable.removeClass("ui-state-hover"), this.focusable.removeClass("ui-state-focus")
        },
        _destroy: t.noop,
        widget: function() {
            return this.element
        },
        option: function(e, i) {
            var s, n, o, a = e;
            if (0 === arguments.length) return t.widget.extend({}, this.options);
            if ("string" == typeof e)
                if (a = {}, s = e.split("."), e = s.shift(), s.length) {
                    for (n = a[e] = t.widget.extend({}, this.options[e]), o = 0; o < s.length - 1; o++) n[s[o]] = n[s[o]] || {}, n = n[s[o]];
                    if (e = s.pop(), 1 === arguments.length) return void 0 === n[e] ? null : n[e];
                    n[e] = i
                } else {
                    if (1 === arguments.length) return void 0 === this.options[e] ? null : this.options[e];
                    a[e] = i
                }
            return this._setOptions(a), this
        },
        _setOptions: function(t) {
            var e;
            for (e in t) this._setOption(e, t[e]);
            return this
        },
        _setOption: function(t, e) {
            return this.options[t] = e, "disabled" === t && (this.widget().toggleClass(this.widgetFullName + "-disabled", !!e), e && (this.hoverable.removeClass("ui-state-hover"), this.focusable.removeClass("ui-state-focus"))), this
        },
        enable: function() {
            return this._setOptions({
                disabled: !1
            })
        },
        disable: function() {
            return this._setOptions({
                disabled: !0
            })
        },
        _on: function(e, i, s) {
            var n, o = this;
            "boolean" != typeof e && (s = i, i = e, e = !1), s ? (i = n = t(i), this.bindings = this.bindings.add(i)) : (s = i, i = this.element, n = this.widget()), t.each(s, function(s, a) {
                function r() {
                    return e || o.options.disabled !== !0 && !t(this).hasClass("ui-state-disabled") ? ("string" == typeof a ? o[a] : a).apply(o, arguments) : void 0
                }
                "string" != typeof a && (r.guid = a.guid = a.guid || r.guid || t.guid++);
                var h = s.match(/^([\w:-]*)\s*(.*)$/),
                    l = h[1] + o.eventNamespace,
                    u = h[2];
                u ? n.delegate(u, l, r) : i.bind(l, r)
            })
        },
        _off: function(e, i) {
            i = (i || "").split(" ").join(this.eventNamespace + " ") + this.eventNamespace, e.unbind(i).undelegate(i), this.bindings = t(this.bindings.not(e).get()), this.focusable = t(this.focusable.not(e).get()), this.hoverable = t(this.hoverable.not(e).get())
        },
        _delay: function(t, e) {
            function i() {
                return ("string" == typeof t ? s[t] : t).apply(s, arguments)
            }
            var s = this;
            return setTimeout(i, e || 0)
        },
        _hoverable: function(e) {
            this.hoverable = this.hoverable.add(e), this._on(e, {
                mouseenter: function(e) {
                    t(e.currentTarget).addClass("ui-state-hover")
                },
                mouseleave: function(e) {
                    t(e.currentTarget).removeClass("ui-state-hover")
                }
            })
        },
        _focusable: function(e) {
            this.focusable = this.focusable.add(e), this._on(e, {
                focusin: function(e) {
                    t(e.currentTarget).addClass("ui-state-focus")
                },
                focusout: function(e) {
                    t(e.currentTarget).removeClass("ui-state-focus")
                }
            })
        },
        _trigger: function(e, i, s) {
            var n, o, a = this.options[e];
            if (s = s || {}, i = t.Event(i), i.type = (e === this.widgetEventPrefix ? e : this.widgetEventPrefix + e).toLowerCase(), i.target = this.element[0], o = i.originalEvent)
                for (n in o) n in i || (i[n] = o[n]);
            return this.element.trigger(i, s), !(t.isFunction(a) && a.apply(this.element[0], [i].concat(s)) === !1 || i.isDefaultPrevented())
        }
    }, t.each({
        show: "fadeIn",
        hide: "fadeOut"
    }, function(e, i) {
        t.Widget.prototype["_" + e] = function(s, n, o) {
            "string" == typeof n && (n = {
                effect: n
            });
            var a, r = n ? n === !0 || "number" == typeof n ? i : n.effect || i : e;
            n = n || {}, "number" == typeof n && (n = {
                duration: n
            }), a = !t.isEmptyObject(n), n.complete = o, n.delay && s.delay(n.delay), a && t.effects && t.effects.effect[r] ? s[e](n) : r !== e && s[r] ? s[r](n.duration, n.easing, o) : s.queue(function(i) {
                t(this)[e](), o && o.call(s[0]), i()
            })
        }
    });
    var c = (t.widget, !1);
    t(document).mouseup(function() {
        c = !1
    });
    t.widget("ui.mouse", {
        version: "1.11.4",
        options: {
            cancel: "input,textarea,button,select,option",
            distance: 1,
            delay: 0
        },
        _mouseInit: function() {
            var e = this;
            this.element.bind("mousedown." + this.widgetName, function(t) {
                return e._mouseDown(t)
            }).bind("click." + this.widgetName, function(i) {
                return !0 === t.data(i.target, e.widgetName + ".preventClickEvent") ? (t.removeData(i.target, e.widgetName + ".preventClickEvent"), i.stopImmediatePropagation(), !1) : void 0
            }), this.started = !1
        },
        _mouseDestroy: function() {
            this.element.unbind("." + this.widgetName), this._mouseMoveDelegate && this.document.unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate)
        },
        _mouseDown: function(e) {
            if (!c) {
                this._mouseMoved = !1, this._mouseStarted && this._mouseUp(e), this._mouseDownEvent = e;
                var i = this,
                    s = 1 === e.which,
                    n = "string" == typeof this.options.cancel && e.target.nodeName ? t(e.target).closest(this.options.cancel).length : !1;
                return s && !n && this._mouseCapture(e) ? (this.mouseDelayMet = !this.options.delay, this.mouseDelayMet || (this._mouseDelayTimer = setTimeout(function() {
                    i.mouseDelayMet = !0
                }, this.options.delay)), this._mouseDistanceMet(e) && this._mouseDelayMet(e) && (this._mouseStarted = this._mouseStart(e) !== !1, !this._mouseStarted) ? (e.preventDefault(), !0) : (!0 === t.data(e.target, this.widgetName + ".preventClickEvent") && t.removeData(e.target, this.widgetName + ".preventClickEvent"), this._mouseMoveDelegate = function(t) {
                    return i._mouseMove(t)
                }, this._mouseUpDelegate = function(t) {
                    return i._mouseUp(t)
                }, this.document.bind("mousemove." + this.widgetName, this._mouseMoveDelegate).bind("mouseup." + this.widgetName, this._mouseUpDelegate), e.preventDefault(), c = !0, !0)) : !0
            }
        },
        _mouseMove: function(e) {
            if (this._mouseMoved) {
                if (t.ui.ie && (!document.documentMode || document.documentMode < 9) && !e.button) return this._mouseUp(e);
                if (!e.which) return this._mouseUp(e)
            }
            return (e.which || e.button) && (this._mouseMoved = !0), this._mouseStarted ? (this._mouseDrag(e), e.preventDefault()) : (this._mouseDistanceMet(e) && this._mouseDelayMet(e) && (this._mouseStarted = this._mouseStart(this._mouseDownEvent, e) !== !1, this._mouseStarted ? this._mouseDrag(e) : this._mouseUp(e)), !this._mouseStarted)
        },
        _mouseUp: function(e) {
            return this.document.unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate), this._mouseStarted && (this._mouseStarted = !1, e.target === this._mouseDownEvent.target && t.data(e.target, this.widgetName + ".preventClickEvent", !0), this._mouseStop(e)), c = !1, !1
        },
        _mouseDistanceMet: function(t) {
            return Math.max(Math.abs(this._mouseDownEvent.pageX - t.pageX), Math.abs(this._mouseDownEvent.pageY - t.pageY)) >= this.options.distance
        },
        _mouseDelayMet: function() {
            return this.mouseDelayMet
        },
        _mouseStart: function() {},
        _mouseDrag: function() {},
        _mouseStop: function() {},
        _mouseCapture: function() {
            return !0
        }
    });
    ! function() {
        function e(t, e, i) {
            return [parseFloat(t[0]) * (p.test(t[0]) ? e / 100 : 1), parseFloat(t[1]) * (p.test(t[1]) ? i / 100 : 1)]
        }

        function i(e, i) {
            return parseInt(t.css(e, i), 10) || 0
        }

        function s(e) {
            var i = e[0];
            return 9 === i.nodeType ? {
                width: e.width(),
                height: e.height(),
                offset: {
                    top: 0,
                    left: 0
                }
            } : t.isWindow(i) ? {
                width: e.width(),
                height: e.height(),
                offset: {
                    top: e.scrollTop(),
                    left: e.scrollLeft()
                }
            } : i.preventDefault ? {
                width: 0,
                height: 0,
                offset: {
                    top: i.pageY,
                    left: i.pageX
                }
            } : {
                width: e.outerWidth(),
                height: e.outerHeight(),
                offset: e.offset()
            }
        }
        t.ui = t.ui || {};
        var n, o, a = Math.max,
            r = Math.abs,
            h = Math.round,
            l = /left|center|right/,
            u = /top|center|bottom/,
            c = /[\+\-]\d+(\.[\d]+)?%?/,
            d = /^\w+/,
            p = /%$/,
            f = t.fn.position;
        t.position = {
                scrollbarWidth: function() {
                    if (void 0 !== n) return n;
                    var e, i, s = t("<div style='display:block;position:absolute;width:50px;height:50px;overflow:hidden;'><div style='height:100px;width:auto;'></div></div>"),
                        o = s.children()[0];
                    return t("body").append(s), e = o.offsetWidth, s.css("overflow", "scroll"), i = o.offsetWidth, e === i && (i = s[0].clientWidth), s.remove(), n = e - i
                },
                getScrollInfo: function(e) {
                    var i = e.isWindow || e.isDocument ? "" : e.element.css("overflow-x"),
                        s = e.isWindow || e.isDocument ? "" : e.element.css("overflow-y"),
                        n = "scroll" === i || "auto" === i && e.width < e.element[0].scrollWidth,
                        o = "scroll" === s || "auto" === s && e.height < e.element[0].scrollHeight;
                    return {
                        width: o ? t.position.scrollbarWidth() : 0,
                        height: n ? t.position.scrollbarWidth() : 0
                    }
                },
                getWithinInfo: function(e) {
                    var i = t(e || window),
                        s = t.isWindow(i[0]),
                        n = !!i[0] && 9 === i[0].nodeType;
                    return {
                        element: i,
                        isWindow: s,
                        isDocument: n,
                        offset: i.offset() || {
                            left: 0,
                            top: 0
                        },
                        scrollLeft: i.scrollLeft(),
                        scrollTop: i.scrollTop(),
                        width: s || n ? i.width() : i.outerWidth(),
                        height: s || n ? i.height() : i.outerHeight()
                    }
                }
            }, t.fn.position = function(n) {
                if (!n || !n.of) return f.apply(this, arguments);
                n = t.extend({}, n);
                var p, m, g, v, _, b, y = t(n.of),
                    w = t.position.getWithinInfo(n.within),
                    x = t.position.getScrollInfo(w),
                    k = (n.collision || "flip").split(" "),
                    C = {};
                return b = s(y), y[0].preventDefault && (n.at = "left top"), m = b.width, g = b.height, v = b.offset, _ = t.extend({}, v), t.each(["my", "at"], function() {
                    var t, e, i = (n[this] || "").split(" ");
                    1 === i.length && (i = l.test(i[0]) ? i.concat(["center"]) : u.test(i[0]) ? ["center"].concat(i) : ["center", "center"]), i[0] = l.test(i[0]) ? i[0] : "center", i[1] = u.test(i[1]) ? i[1] : "center", t = c.exec(i[0]), e = c.exec(i[1]), C[this] = [t ? t[0] : 0, e ? e[0] : 0], n[this] = [d.exec(i[0])[0], d.exec(i[1])[0]]
                }), 1 === k.length && (k[1] = k[0]), "right" === n.at[0] ? _.left += m : "center" === n.at[0] && (_.left += m / 2), "bottom" === n.at[1] ? _.top += g : "center" === n.at[1] && (_.top += g / 2), p = e(C.at, m, g), _.left += p[0], _.top += p[1], this.each(function() {
                    var s, l, u = t(this),
                        c = u.outerWidth(),
                        d = u.outerHeight(),
                        f = i(this, "marginLeft"),
                        b = i(this, "marginTop"),
                        D = c + f + i(this, "marginRight") + x.width,
                        I = d + b + i(this, "marginBottom") + x.height,
                        T = t.extend({}, _),
                        P = e(C.my, u.outerWidth(), u.outerHeight());
                    "right" === n.my[0] ? T.left -= c : "center" === n.my[0] && (T.left -= c / 2), "bottom" === n.my[1] ? T.top -= d : "center" === n.my[1] && (T.top -= d / 2), T.left += P[0], T.top += P[1], o || (T.left = h(T.left), T.top = h(T.top)), s = {
                        marginLeft: f,
                        marginTop: b
                    }, t.each(["left", "top"], function(e, i) {
                        t.ui.position[k[e]] && t.ui.position[k[e]][i](T, {
                            targetWidth: m,
                            targetHeight: g,
                            elemWidth: c,
                            elemHeight: d,
                            collisionPosition: s,
                            collisionWidth: D,
                            collisionHeight: I,
                            offset: [p[0] + P[0], p[1] + P[1]],
                            my: n.my,
                            at: n.at,
                            within: w,
                            elem: u
                        })
                    }), n.using && (l = function(t) {
                        var e = v.left - T.left,
                            i = e + m - c,
                            s = v.top - T.top,
                            o = s + g - d,
                            h = {
                                target: {
                                    element: y,
                                    left: v.left,
                                    top: v.top,
                                    width: m,
                                    height: g
                                },
                                element: {
                                    element: u,
                                    left: T.left,
                                    top: T.top,
                                    width: c,
                                    height: d
                                },
                                horizontal: 0 > i ? "left" : e > 0 ? "right" : "center",
                                vertical: 0 > o ? "top" : s > 0 ? "bottom" : "middle"
                            };
                        c > m && r(e + i) < m && (h.horizontal = "center"), d > g && r(s + o) < g && (h.vertical = "middle"), a(r(e), r(i)) > a(r(s), r(o)) ? h.important = "horizontal" : h.important = "vertical", n.using.call(this, t, h)
                    }), u.offset(t.extend(T, {
                        using: l
                    }))
                })
            }, t.ui.position = {
                fit: {
                    left: function(t, e) {
                        var i, s = e.within,
                            n = s.isWindow ? s.scrollLeft : s.offset.left,
                            o = s.width,
                            r = t.left - e.collisionPosition.marginLeft,
                            h = n - r,
                            l = r + e.collisionWidth - o - n;
                        e.collisionWidth > o ? h > 0 && 0 >= l ? (i = t.left + h + e.collisionWidth - o - n, t.left += h - i) : l > 0 && 0 >= h ? t.left = n : h > l ? t.left = n + o - e.collisionWidth : t.left = n : h > 0 ? t.left += h : l > 0 ? t.left -= l : t.left = a(t.left - r, t.left)
                    },
                    top: function(t, e) {
                        var i, s = e.within,
                            n = s.isWindow ? s.scrollTop : s.offset.top,
                            o = e.within.height,
                            r = t.top - e.collisionPosition.marginTop,
                            h = n - r,
                            l = r + e.collisionHeight - o - n;
                        e.collisionHeight > o ? h > 0 && 0 >= l ? (i = t.top + h + e.collisionHeight - o - n, t.top += h - i) : l > 0 && 0 >= h ? t.top = n : h > l ? t.top = n + o - e.collisionHeight : t.top = n : h > 0 ? t.top += h : l > 0 ? t.top -= l : t.top = a(t.top - r, t.top)
                    }
                },
                flip: {
                    left: function(t, e) {
                        var i, s, n = e.within,
                            o = n.offset.left + n.scrollLeft,
                            a = n.width,
                            h = n.isWindow ? n.scrollLeft : n.offset.left,
                            l = t.left - e.collisionPosition.marginLeft,
                            u = l - h,
                            c = l + e.collisionWidth - a - h,
                            d = "left" === e.my[0] ? -e.elemWidth : "right" === e.my[0] ? e.elemWidth : 0,
                            p = "left" === e.at[0] ? e.targetWidth : "right" === e.at[0] ? -e.targetWidth : 0,
                            f = -2 * e.offset[0];
                        0 > u ? (i = t.left + d + p + f + e.collisionWidth - a - o, (0 > i || i < r(u)) && (t.left += d + p + f)) : c > 0 && (s = t.left - e.collisionPosition.marginLeft + d + p + f - h, (s > 0 || r(s) < c) && (t.left += d + p + f))
                    },
                    top: function(t, e) {
                        var i, s, n = e.within,
                            o = n.offset.top + n.scrollTop,
                            a = n.height,
                            h = n.isWindow ? n.scrollTop : n.offset.top,
                            l = t.top - e.collisionPosition.marginTop,
                            u = l - h,
                            c = l + e.collisionHeight - a - h,
                            d = "top" === e.my[1],
                            p = d ? -e.elemHeight : "bottom" === e.my[1] ? e.elemHeight : 0,
                            f = "top" === e.at[1] ? e.targetHeight : "bottom" === e.at[1] ? -e.targetHeight : 0,
                            m = -2 * e.offset[1];
                        0 > u ? (s = t.top + p + f + m + e.collisionHeight - a - o, (0 > s || s < r(u)) && (t.top += p + f + m)) : c > 0 && (i = t.top - e.collisionPosition.marginTop + p + f + m - h, (i > 0 || r(i) < c) && (t.top += p + f + m))
                    }
                },
                flipfit: {
                    left: function() {
                        t.ui.position.flip.left.apply(this, arguments), t.ui.position.fit.left.apply(this, arguments)
                    },
                    top: function() {
                        t.ui.position.flip.top.apply(this, arguments), t.ui.position.fit.top.apply(this, arguments)
                    }
                }
            },
            function() {
                var e, i, s, n, a, r = document.getElementsByTagName("body")[0],
                    h = document.createElement("div");
                e = document.createElement(r ? "div" : "body"), s = {
                    visibility: "hidden",
                    width: 0,
                    height: 0,
                    border: 0,
                    margin: 0,
                    background: "none"
                }, r && t.extend(s, {
                    position: "absolute",
                    left: "-1000px",
                    top: "-1000px"
                });
                for (a in s) e.style[a] = s[a];
                e.appendChild(h), i = r || document.documentElement, i.insertBefore(e, i.firstChild), h.style.cssText = "position: absolute; left: 10.7432222px;", n = t(h).offset().left, o = n > 10 && 11 > n, e.innerHTML = "", i.removeChild(e)
            }()
    }();
    t.ui.position, t.widget("ui.accordion", {
        version: "1.11.4",
        options: {
            active: 0,
            animate: {},
            collapsible: !1,
            event: "click",
            header: "> li > :first-child,> :not(li):even",
            heightStyle: "auto",
            icons: {
                activeHeader: "ui-icon-triangle-1-s",
                header: "ui-icon-triangle-1-e"
            },
            activate: null,
            beforeActivate: null
        },
        hideProps: {
            borderTopWidth: "hide",
            borderBottomWidth: "hide",
            paddingTop: "hide",
            paddingBottom: "hide",
            height: "hide"
        },
        showProps: {
            borderTopWidth: "show",
            borderBottomWidth: "show",
            paddingTop: "show",
            paddingBottom: "show",
            height: "show"
        },
        _create: function() {
            var e = this.options;
            this.prevShow = this.prevHide = t(), this.element.addClass("ui-accordion ui-widget ui-helper-reset").attr("role", "tablist"), e.collapsible || e.active !== !1 && null != e.active || (e.active = 0), this._processPanels(), e.active < 0 && (e.active += this.headers.length), this._refresh()
        },
        _getCreateEventData: function() {
            return {
                header: this.active,
                panel: this.active.length ? this.active.next() : t()
            }
        },
        _createIcons: function() {
            var e = this.options.icons;
            e && (t("<span>").addClass("ui-accordion-header-icon ui-icon " + e.header).prependTo(this.headers), this.active.children(".ui-accordion-header-icon").removeClass(e.header).addClass(e.activeHeader), this.headers.addClass("ui-accordion-icons"))
        },
        _destroyIcons: function() {
            this.headers.removeClass("ui-accordion-icons").children(".ui-accordion-header-icon").remove()
        },
        _destroy: function() {
            var t;
            this.element.removeClass("ui-accordion ui-widget ui-helper-reset").removeAttr("role"), this.headers.removeClass("ui-accordion-header ui-accordion-header-active ui-state-default ui-corner-all ui-state-active ui-state-disabled ui-corner-top").removeAttr("role").removeAttr("aria-expanded").removeAttr("aria-selected").removeAttr("aria-controls").removeAttr("tabIndex").removeUniqueId(), this._destroyIcons(), t = this.headers.next().removeClass("ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content ui-accordion-content-active ui-state-disabled").css("display", "").removeAttr("role").removeAttr("aria-hidden").removeAttr("aria-labelledby").removeUniqueId(), "content" !== this.options.heightStyle && t.css("height", "")
        },
        _setOption: function(t, e) {
            return "active" === t ? void this._activate(e) : ("event" === t && (this.options.event && this._off(this.headers, this.options.event), this._setupEvents(e)), this._super(t, e), "collapsible" !== t || e || this.options.active !== !1 || this._activate(0), "icons" === t && (this._destroyIcons(), e && this._createIcons()), void("disabled" === t && (this.element.toggleClass("ui-state-disabled", !!e).attr("aria-disabled", e), this.headers.add(this.headers.next()).toggleClass("ui-state-disabled", !!e))))
        },
        _keydown: function(e) {
            if (!e.altKey && !e.ctrlKey) {
                var i = t.ui.keyCode,
                    s = this.headers.length,
                    n = this.headers.index(e.target),
                    o = !1;
                switch (e.keyCode) {
                    case i.RIGHT:
                    case i.DOWN:
                        o = this.headers[(n + 1) % s];
                        break;
                    case i.LEFT:
                    case i.UP:
                        o = this.headers[(n - 1 + s) % s];
                        break;
                    case i.SPACE:
                    case i.ENTER:
                        this._eventHandler(e);
                        break;
                    case i.HOME:
                        o = this.headers[0];
                        break;
                    case i.END:
                        o = this.headers[s - 1]
                }
                o && (t(e.target).attr("tabIndex", -1), t(o).attr("tabIndex", 0), o.focus(), e.preventDefault())
            }
        },
        _panelKeyDown: function(e) {
            e.keyCode === t.ui.keyCode.UP && e.ctrlKey && t(e.currentTarget).prev().focus()
        },
        refresh: function() {
            var e = this.options;
            this._processPanels(), e.active === !1 && e.collapsible === !0 || !this.headers.length ? (e.active = !1, this.active = t()) : e.active === !1 ? this._activate(0) : this.active.length && !t.contains(this.element[0], this.active[0]) ? this.headers.length === this.headers.find(".ui-state-disabled").length ? (e.active = !1, this.active = t()) : this._activate(Math.max(0, e.active - 1)) : e.active = this.headers.index(this.active), this._destroyIcons(), this._refresh()
        },
        _processPanels: function() {
            var t = this.headers,
                e = this.panels;
            this.headers = this.element.find(this.options.header).addClass("ui-accordion-header ui-state-default ui-corner-all"), this.panels = this.headers.next().addClass("ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom").filter(":not(.ui-accordion-content-active)").hide(), e && (this._off(t.not(this.headers)), this._off(e.not(this.panels)))
        },
        _refresh: function() {
            var e, i = this.options,
                s = i.heightStyle,
                n = this.element.parent();
            this.active = this._findActive(i.active).addClass("ui-accordion-header-active ui-state-active ui-corner-top").removeClass("ui-corner-all"), this.active.next().addClass("ui-accordion-content-active").show(), this.headers.attr("role", "tab").each(function() {
                var e = t(this),
                    i = e.uniqueId().attr("id"),
                    s = e.next(),
                    n = s.uniqueId().attr("id");
                e.attr("aria-controls", n), s.attr("aria-labelledby", i)
            }).next().attr("role", "tabpanel"), this.headers.not(this.active).attr({
                "aria-selected": "false",
                "aria-expanded": "false",
                tabIndex: -1
            }).next().attr({
                "aria-hidden": "true"
            }).hide(), this.active.length ? this.active.attr({
                "aria-selected": "true",
                "aria-expanded": "true",
                tabIndex: 0
            }).next().attr({
                "aria-hidden": "false"
            }) : this.headers.eq(0).attr("tabIndex", 0), this._createIcons(), this._setupEvents(i.event), "fill" === s ? (e = n.height(), this.element.siblings(":visible").each(function() {
                var i = t(this),
                    s = i.css("position");
                "absolute" !== s && "fixed" !== s && (e -= i.outerHeight(!0))
            }), this.headers.each(function() {
                e -= t(this).outerHeight(!0)
            }), this.headers.next().each(function() {
                t(this).height(Math.max(0, e - t(this).innerHeight() + t(this).height()))
            }).css("overflow", "auto")) : "auto" === s && (e = 0, this.headers.next().each(function() {
                e = Math.max(e, t(this).css("height", "").height())
            }).height(e))
        },
        _activate: function(e) {
            var i = this._findActive(e)[0];
            i !== this.active[0] && (i = i || this.active[0], this._eventHandler({
                target: i,
                currentTarget: i,
                preventDefault: t.noop
            }))
        },
        _findActive: function(e) {
            return "number" == typeof e ? this.headers.eq(e) : t()
        },
        _setupEvents: function(e) {
            var i = {
                keydown: "_keydown"
            };
            e && t.each(e.split(" "), function(t, e) {
                i[e] = "_eventHandler"
            }), this._off(this.headers.add(this.headers.next())), this._on(this.headers, i), this._on(this.headers.next(), {
                keydown: "_panelKeyDown"
            }), this._hoverable(this.headers), this._focusable(this.headers)
        },
        _eventHandler: function(e) {
            var i = this.options,
                s = this.active,
                n = t(e.currentTarget),
                o = n[0] === s[0],
                a = o && i.collapsible,
                r = a ? t() : n.next(),
                h = s.next(),
                l = {
                    oldHeader: s,
                    oldPanel: h,
                    newHeader: a ? t() : n,
                    newPanel: r
                };
            e.preventDefault(), o && !i.collapsible || this._trigger("beforeActivate", e, l) === !1 || (i.active = a ? !1 : this.headers.index(n), this.active = o ? t() : n, this._toggle(l), s.removeClass("ui-accordion-header-active ui-state-active"), i.icons && s.children(".ui-accordion-header-icon").removeClass(i.icons.activeHeader).addClass(i.icons.header), o || (n.removeClass("ui-corner-all").addClass("ui-accordion-header-active ui-state-active ui-corner-top"), i.icons && n.children(".ui-accordion-header-icon").removeClass(i.icons.header).addClass(i.icons.activeHeader), n.next().addClass("ui-accordion-content-active")))
        },
        _toggle: function(e) {
            var i = e.newPanel,
                s = this.prevShow.length ? this.prevShow : e.oldPanel;
            this.prevShow.add(this.prevHide).stop(!0, !0), this.prevShow = i, this.prevHide = s, this.options.animate ? this._animate(i, s, e) : (s.hide(), i.show(), this._toggleComplete(e)), s.attr({
                "aria-hidden": "true"
            }), s.prev().attr({
                "aria-selected": "false",
                "aria-expanded": "false"
            }), i.length && s.length ? s.prev().attr({
                tabIndex: -1,
                "aria-expanded": "false"
            }) : i.length && this.headers.filter(function() {
                return 0 === parseInt(t(this).attr("tabIndex"), 10)
            }).attr("tabIndex", -1), i.attr("aria-hidden", "false").prev().attr({
                "aria-selected": "true",
                "aria-expanded": "true",
                tabIndex: 0
            })
        },
        _animate: function(t, e, i) {
            var s, n, o, a = this,
                r = 0,
                h = t.css("box-sizing"),
                l = t.length && (!e.length || t.index() < e.index()),
                u = this.options.animate || {},
                c = l && u.down || u,
                d = function() {
                    a._toggleComplete(i)
                };
            return "number" == typeof c && (o = c), "string" == typeof c && (n = c), n = n || c.easing || u.easing, o = o || c.duration || u.duration, e.length ? t.length ? (s = t.show().outerHeight(), e.animate(this.hideProps, {
                duration: o,
                easing: n,
                step: function(t, e) {
                    e.now = Math.round(t)
                }
            }), void t.hide().animate(this.showProps, {
                duration: o,
                easing: n,
                complete: d,
                step: function(t, i) {
                    i.now = Math.round(t), "height" !== i.prop ? "content-box" === h && (r += i.now) : "content" !== a.options.heightStyle && (i.now = Math.round(s - e.outerHeight() - r), r = 0)
                }
            })) : e.animate(this.hideProps, o, n, d) : t.animate(this.showProps, o, n, d)
        },
        _toggleComplete: function(t) {
            var e = t.oldPanel;
            e.removeClass("ui-accordion-content-active").prev().removeClass("ui-corner-top").addClass("ui-corner-all"), e.length && (e.parent()[0].className = e.parent()[0].className), this._trigger("activate", null, t)
        }
    }), t.widget("ui.menu", {
        version: "1.11.4",
        defaultElement: "<ul>",
        delay: 300,
        options: {
            icons: {
                submenu: "ui-icon-carat-1-e"
            },
            items: "> *",
            menus: "ul",
            position: {
                my: "left-1 top",
                at: "right top"
            },
            role: "menu",
            blur: null,
            focus: null,
            select: null
        },
        _create: function() {
            this.activeMenu = this.element, this.mouseHandled = !1, this.element.uniqueId().addClass("ui-menu ui-widget ui-widget-content").toggleClass("ui-menu-icons", !!this.element.find(".ui-icon").length).attr({
                role: this.options.role,
                tabIndex: 0
            }), this.options.disabled && this.element.addClass("ui-state-disabled").attr("aria-disabled", "true"), this._on({
                "mousedown .ui-menu-item": function(t) {
                    t.preventDefault()
                },
                "click .ui-menu-item": function(e) {
                    var i = t(e.target);
                    !this.mouseHandled && i.not(".ui-state-disabled").length && (this.select(e), e.isPropagationStopped() || (this.mouseHandled = !0), i.has(".ui-menu").length ? this.expand(e) : !this.element.is(":focus") && t(this.document[0].activeElement).closest(".ui-menu").length && (this.element.trigger("focus", [!0]), this.active && 1 === this.active.parents(".ui-menu").length && clearTimeout(this.timer)))
                },
                "mouseenter .ui-menu-item": function(e) {
                    if (!this.previousFilter) {
                        var i = t(e.currentTarget);
                        i.siblings(".ui-state-active").removeClass("ui-state-active"), this.focus(e, i)
                    }
                },
                mouseleave: "collapseAll",
                "mouseleave .ui-menu": "collapseAll",
                focus: function(t, e) {
                    var i = this.active || this.element.find(this.options.items).eq(0);
                    e || this.focus(t, i)
                },
                blur: function(e) {
                    this._delay(function() {
                        t.contains(this.element[0], this.document[0].activeElement) || this.collapseAll(e)
                    })
                },
                keydown: "_keydown"
            }), this.refresh(), this._on(this.document, {
                click: function(t) {
                    this._closeOnDocumentClick(t) && this.collapseAll(t), this.mouseHandled = !1
                }
            })
        },
        _destroy: function() {
            this.element.removeAttr("aria-activedescendant").find(".ui-menu").addBack().removeClass("ui-menu ui-widget ui-widget-content ui-menu-icons ui-front").removeAttr("role").removeAttr("tabIndex").removeAttr("aria-labelledby").removeAttr("aria-expanded").removeAttr("aria-hidden").removeAttr("aria-disabled").removeUniqueId().show(), this.element.find(".ui-menu-item").removeClass("ui-menu-item").removeAttr("role").removeAttr("aria-disabled").removeUniqueId().removeClass("ui-state-hover").removeAttr("tabIndex").removeAttr("role").removeAttr("aria-haspopup").children().each(function() {
                var e = t(this);
                e.data("ui-menu-submenu-carat") && e.remove()
            }), this.element.find(".ui-menu-divider").removeClass("ui-menu-divider ui-widget-content")
        },
        _keydown: function(e) {
            var i, s, n, o, a = !0;
            switch (e.keyCode) {
                case t.ui.keyCode.PAGE_UP:
                    this.previousPage(e);
                    break;
                case t.ui.keyCode.PAGE_DOWN:
                    this.nextPage(e);
                    break;
                case t.ui.keyCode.HOME:
                    this._move("first", "first", e);
                    break;
                case t.ui.keyCode.END:
                    this._move("last", "last", e);
                    break;
                case t.ui.keyCode.UP:
                    this.previous(e);
                    break;
                case t.ui.keyCode.DOWN:
                    this.next(e);
                    break;
                case t.ui.keyCode.LEFT:
                    this.collapse(e);
                    break;
                case t.ui.keyCode.RIGHT:
                    this.active && !this.active.is(".ui-state-disabled") && this.expand(e);
                    break;
                case t.ui.keyCode.ENTER:
                case t.ui.keyCode.SPACE:
                    this._activate(e);
                    break;
                case t.ui.keyCode.ESCAPE:
                    this.collapse(e);
                    break;
                default:
                    a = !1, s = this.previousFilter || "", n = String.fromCharCode(e.keyCode), o = !1, clearTimeout(this.filterTimer), n === s ? o = !0 : n = s + n, i = this._filterMenuItems(n), i = o && -1 !== i.index(this.active.next()) ? this.active.nextAll(".ui-menu-item") : i, i.length || (n = String.fromCharCode(e.keyCode), i = this._filterMenuItems(n)), i.length ? (this.focus(e, i), this.previousFilter = n, this.filterTimer = this._delay(function() {
                        delete this.previousFilter
                    }, 1e3)) : delete this.previousFilter
            }
            a && e.preventDefault()
        },
        _activate: function(t) {
            this.active.is(".ui-state-disabled") || (this.active.is("[aria-haspopup='true']") ? this.expand(t) : this.select(t))
        },
        refresh: function() {
            var e, i, s = this,
                n = this.options.icons.submenu,
                o = this.element.find(this.options.menus);
            this.element.toggleClass("ui-menu-icons", !!this.element.find(".ui-icon").length), o.filter(":not(.ui-menu)").addClass("ui-menu ui-widget ui-widget-content ui-front").hide().attr({
                role: this.options.role,
                "aria-hidden": "true",
                "aria-expanded": "false"
            }).each(function() {
                var e = t(this),
                    i = e.parent(),
                    s = t("<span>").addClass("ui-menu-icon ui-icon " + n).data("ui-menu-submenu-carat", !0);
                i.attr("aria-haspopup", "true").prepend(s), e.attr("aria-labelledby", i.attr("id"))
            }), e = o.add(this.element), i = e.find(this.options.items), i.not(".ui-menu-item").each(function() {
                var e = t(this);
                s._isDivider(e) && e.addClass("ui-widget-content ui-menu-divider")
            }), i.not(".ui-menu-item, .ui-menu-divider").addClass("ui-menu-item").uniqueId().attr({
                tabIndex: -1,
                role: this._itemRole()
            }), i.filter(".ui-state-disabled").attr("aria-disabled", "true"), this.active && !t.contains(this.element[0], this.active[0]) && this.blur()
        },
        _itemRole: function() {
            return {
                menu: "menuitem",
                listbox: "option"
            }[this.options.role]
        },
        _setOption: function(t, e) {
            "icons" === t && this.element.find(".ui-menu-icon").removeClass(this.options.icons.submenu).addClass(e.submenu), "disabled" === t && this.element.toggleClass("ui-state-disabled", !!e).attr("aria-disabled", e), this._super(t, e)
        },
        focus: function(t, e) {
            var i, s;
            this.blur(t, t && "focus" === t.type), this._scrollIntoView(e), this.active = e.first(), s = this.active.addClass("ui-state-focus").removeClass("ui-state-active"), this.options.role && this.element.attr("aria-activedescendant", s.attr("id")), this.active.parent().closest(".ui-menu-item").addClass("ui-state-active"), t && "keydown" === t.type ? this._close() : this.timer = this._delay(function() {
                this._close()
            }, this.delay), i = e.children(".ui-menu"), i.length && t && /^mouse/.test(t.type) && this._startOpening(i), this.activeMenu = e.parent(), this._trigger("focus", t, {
                item: e
            })
        },
        _scrollIntoView: function(e) {
            var i, s, n, o, a, r;
            this._hasScroll() && (i = parseFloat(t.css(this.activeMenu[0], "borderTopWidth")) || 0, s = parseFloat(t.css(this.activeMenu[0], "paddingTop")) || 0, n = e.offset().top - this.activeMenu.offset().top - i - s, o = this.activeMenu.scrollTop(), a = this.activeMenu.height(), r = e.outerHeight(), 0 > n ? this.activeMenu.scrollTop(o + n) : n + r > a && this.activeMenu.scrollTop(o + n - a + r))
        },
        blur: function(t, e) {
            e || clearTimeout(this.timer), this.active && (this.active.removeClass("ui-state-focus"), this.active = null, this._trigger("blur", t, {
                item: this.active
            }))
        },
        _startOpening: function(t) {
            clearTimeout(this.timer), "true" === t.attr("aria-hidden") && (this.timer = this._delay(function() {
                this._close(), this._open(t)
            }, this.delay))
        },
        _open: function(e) {
            var i = t.extend({ of: this.active
            }, this.options.position);
            clearTimeout(this.timer), this.element.find(".ui-menu").not(e.parents(".ui-menu")).hide().attr("aria-hidden", "true"), e.show().removeAttr("aria-hidden").attr("aria-expanded", "true").position(i)
        },
        collapseAll: function(e, i) {
            clearTimeout(this.timer), this.timer = this._delay(function() {
                var s = i ? this.element : t(e && e.target).closest(this.element.find(".ui-menu"));
                s.length || (s = this.element), this._close(s), this.blur(e), this.activeMenu = s
            }, this.delay)
        },
        _close: function(t) {
            t || (t = this.active ? this.active.parent() : this.element), t.find(".ui-menu").hide().attr("aria-hidden", "true").attr("aria-expanded", "false").end().find(".ui-state-active").not(".ui-state-focus").removeClass("ui-state-active")
        },
        _closeOnDocumentClick: function(e) {
            return !t(e.target).closest(".ui-menu").length
        },
        _isDivider: function(t) {
            return !/[^\-\u2014\u2013\s]/.test(t.text())
        },
        collapse: function(t) {
            var e = this.active && this.active.parent().closest(".ui-menu-item", this.element);
            e && e.length && (this._close(), this.focus(t, e))
        },
        expand: function(t) {
            var e = this.active && this.active.children(".ui-menu ").find(this.options.items).first();
            e && e.length && (this._open(e.parent()), this._delay(function() {
                this.focus(t, e)
            }))
        },
        next: function(t) {
            this._move("next", "first", t)
        },
        previous: function(t) {
            this._move("prev", "last", t)
        },
        isFirstItem: function() {
            return this.active && !this.active.prevAll(".ui-menu-item").length
        },
        isLastItem: function() {
            return this.active && !this.active.nextAll(".ui-menu-item").length
        },
        _move: function(t, e, i) {
            var s;
            this.active && (s = "first" === t || "last" === t ? this.active["first" === t ? "prevAll" : "nextAll"](".ui-menu-item").eq(-1) : this.active[t + "All"](".ui-menu-item").eq(0)), s && s.length && this.active || (s = this.activeMenu.find(this.options.items)[e]()), this.focus(i, s)
        },
        nextPage: function(e) {
            var i, s, n;
            return this.active ? void(this.isLastItem() || (this._hasScroll() ? (s = this.active.offset().top, n = this.element.height(), this.active.nextAll(".ui-menu-item").each(function() {
                return i = t(this), i.offset().top - s - n < 0
            }), this.focus(e, i)) : this.focus(e, this.activeMenu.find(this.options.items)[this.active ? "last" : "first"]()))) : void this.next(e)
        },
        previousPage: function(e) {
            var i, s, n;
            return this.active ? void(this.isFirstItem() || (this._hasScroll() ? (s = this.active.offset().top, n = this.element.height(), this.active.prevAll(".ui-menu-item").each(function() {
                return i = t(this), i.offset().top - s + n > 0
            }), this.focus(e, i)) : this.focus(e, this.activeMenu.find(this.options.items).first()))) : void this.next(e)
        },
        _hasScroll: function() {
            return this.element.outerHeight() < this.element.prop("scrollHeight")
        },
        select: function(e) {
            this.active = this.active || t(e.target).closest(".ui-menu-item");
            var i = {
                item: this.active
            };
            this.active.has(".ui-menu").length || this.collapseAll(e, !0), this._trigger("select", e, i)
        },
        _filterMenuItems: function(e) {
            var i = e.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&"),
                s = new RegExp("^" + i, "i");
            return this.activeMenu.find(this.options.items).filter(".ui-menu-item").filter(function() {
                return s.test(t.trim(t(this).text()))
            })
        }
    });
    t.widget("ui.autocomplete", {
        version: "1.11.4",
        defaultElement: "<input>",
        options: {
            appendTo: null,
            autoFocus: !1,
            delay: 300,
            minLength: 1,
            position: {
                my: "left top",
                at: "left bottom",
                collision: "none"
            },
            source: null,
            change: null,
            close: null,
            focus: null,
            open: null,
            response: null,
            search: null,
            select: null
        },
        requestIndex: 0,
        pending: 0,
        _create: function() {
            var e, i, s, n = this.element[0].nodeName.toLowerCase(),
                o = "textarea" === n,
                a = "input" === n;
            this.isMultiLine = o ? !0 : a ? !1 : this.element.prop("isContentEditable"), this.valueMethod = this.element[o || a ? "val" : "text"], this.isNewMenu = !0, this.element.addClass("ui-autocomplete-input").attr("autocomplete", "off"), this._on(this.element, {
                keydown: function(n) {
                    if (this.element.prop("readOnly")) return e = !0, s = !0, void(i = !0);
                    e = !1, s = !1, i = !1;
                    var o = t.ui.keyCode;
                    switch (n.keyCode) {
                        case o.PAGE_UP:
                            e = !0, this._move("previousPage", n);
                            break;
                        case o.PAGE_DOWN:
                            e = !0, this._move("nextPage", n);
                            break;
                        case o.UP:
                            e = !0, this._keyEvent("previous", n);
                            break;
                        case o.DOWN:
                            e = !0, this._keyEvent("next", n);
                            break;
                        case o.ENTER:
                            this.menu.active && (e = !0, n.preventDefault(), this.menu.select(n));
                            break;
                        case o.TAB:
                            this.menu.active && this.menu.select(n);
                            break;
                        case o.ESCAPE:
                            this.menu.element.is(":visible") && (this.isMultiLine || this._value(this.term), this.close(n), n.preventDefault());
                            break;
                        default:
                            i = !0, this._searchTimeout(n)
                    }
                },
                keypress: function(s) {
                    if (e) return e = !1, void((!this.isMultiLine || this.menu.element.is(":visible")) && s.preventDefault());
                    if (!i) {
                        var n = t.ui.keyCode;
                        switch (s.keyCode) {
                            case n.PAGE_UP:
                                this._move("previousPage", s);
                                break;
                            case n.PAGE_DOWN:
                                this._move("nextPage", s);
                                break;
                            case n.UP:
                                this._keyEvent("previous", s);
                                break;
                            case n.DOWN:
                                this._keyEvent("next", s)
                        }
                    }
                },
                input: function(t) {
                    return s ? (s = !1, void t.preventDefault()) : void this._searchTimeout(t)
                },
                focus: function() {
                    this.selectedItem = null, this.previous = this._value()
                },
                blur: function(t) {
                    return this.cancelBlur ? void delete this.cancelBlur : (clearTimeout(this.searching), this.close(t), void this._change(t))
                }
            }), this._initSource(), this.menu = t("<ul>").addClass("ui-autocomplete ui-front").appendTo(this._appendTo()).menu({
                role: null
            }).hide().menu("instance"), this._on(this.menu.element, {
                mousedown: function(e) {
                    e.preventDefault(), this.cancelBlur = !0, this._delay(function() {
                        delete this.cancelBlur
                    });
                    var i = this.menu.element[0];
                    t(e.target).closest(".ui-menu-item").length || this._delay(function() {
                        var e = this;
                        this.document.one("mousedown", function(s) {
                            s.target === e.element[0] || s.target === i || t.contains(i, s.target) || e.close()
                        })
                    })
                },
                menufocus: function(e, i) {
                    var s, n;
                    return this.isNewMenu && (this.isNewMenu = !1, e.originalEvent && /^mouse/.test(e.originalEvent.type)) ? (this.menu.blur(), void this.document.one("mousemove", function() {
                        t(e.target).trigger(e.originalEvent)
                    })) : (n = i.item.data("ui-autocomplete-item"), !1 !== this._trigger("focus", e, {
                        item: n
                    }) && e.originalEvent && /^key/.test(e.originalEvent.type) && this._value(n.value), s = i.item.attr("aria-label") || n.value, void(s && t.trim(s).length && (this.liveRegion.children().hide(), t("<div>").text(s).appendTo(this.liveRegion))))
                },
                menuselect: function(t, e) {
                    var i = e.item.data("ui-autocomplete-item"),
                        s = this.previous;
                    this.element[0] !== this.document[0].activeElement && (this.element.focus(), this.previous = s, this._delay(function() {
                        this.previous = s, this.selectedItem = i
                    })), !1 !== this._trigger("select", t, {
                        item: i
                    }) && this._value(i.value), this.term = this._value(), this.close(t), this.selectedItem = i
                }
            }), this.liveRegion = t("<span>", {
                role: "status",
                "aria-live": "assertive",
                "aria-relevant": "additions"
            }).addClass("ui-helper-hidden-accessible").appendTo(this.document[0].body), this._on(this.window, {
                beforeunload: function() {
                    this.element.removeAttr("autocomplete")
                }
            })
        },
        _destroy: function() {
            clearTimeout(this.searching), this.element.removeClass("ui-autocomplete-input").removeAttr("autocomplete"), this.menu.element.remove(), this.liveRegion.remove()
        },
        _setOption: function(t, e) {
            this._super(t, e), "source" === t && this._initSource(), "appendTo" === t && this.menu.element.appendTo(this._appendTo()), "disabled" === t && e && this.xhr && this.xhr.abort()
        },
        _appendTo: function() {
            var e = this.options.appendTo;
            return e && (e = e.jquery || e.nodeType ? t(e) : this.document.find(e).eq(0)), e && e[0] || (e = this.element.closest(".ui-front")), e.length || (e = this.document[0].body), e
        },
        _initSource: function() {
            var e, i, s = this;
            t.isArray(this.options.source) ? (e = this.options.source, this.source = function(i, s) {
                s(t.ui.autocomplete.filter(e, i.term))
            }) : "string" == typeof this.options.source ? (i = this.options.source, this.source = function(e, n) {
                s.xhr && s.xhr.abort(), s.xhr = t.ajax({
                    url: i,
                    data: e,
                    dataType: "json",
                    success: function(t) {
                        n(t)
                    },
                    error: function() {
                        n([])
                    }
                })
            }) : this.source = this.options.source
        },
        _searchTimeout: function(t) {
            clearTimeout(this.searching), this.searching = this._delay(function() {
                var e = this.term === this._value(),
                    i = this.menu.element.is(":visible"),
                    s = t.altKey || t.ctrlKey || t.metaKey || t.shiftKey;
                (!e || e && !i && !s) && (this.selectedItem = null, this.search(null, t))
            }, this.options.delay)
        },
        search: function(t, e) {
            return t = null != t ? t : this._value(), this.term = this._value(), t.length < this.options.minLength ? this.close(e) : this._trigger("search", e) !== !1 ? this._search(t) : void 0
        },
        _search: function(t) {
            this.pending++, this.element.addClass("ui-autocomplete-loading"), this.cancelSearch = !1, this.source({
                term: t
            }, this._response())
        },
        _response: function() {
            var e = ++this.requestIndex;
            return t.proxy(function(t) {
                e === this.requestIndex && this.__response(t), this.pending--, this.pending || this.element.removeClass("ui-autocomplete-loading")
            }, this)
        },
        __response: function(t) {
            t && (t = this._normalize(t)), this._trigger("response", null, {
                content: t
            }), !this.options.disabled && t && t.length && !this.cancelSearch ? (this._suggest(t), this._trigger("open")) : this._close()
        },
        close: function(t) {
            this.cancelSearch = !0, this._close(t)
        },
        _close: function(t) {
            this.menu.element.is(":visible") && (this.menu.element.hide(), this.menu.blur(), this.isNewMenu = !0, this._trigger("close", t))
        },
        _change: function(t) {
            this.previous !== this._value() && this._trigger("change", t, {
                item: this.selectedItem
            })
        },
        _normalize: function(e) {
            return e.length && e[0].label && e[0].value ? e : t.map(e, function(e) {
                return "string" == typeof e ? {
                    label: e,
                    value: e
                } : t.extend({}, e, {
                    label: e.label || e.value,
                    value: e.value || e.label
                })
            })
        },
        _suggest: function(e) {
            var i = this.menu.element.empty();
            this._renderMenu(i, e), this.isNewMenu = !0, this.menu.refresh(), i.show(), this._resizeMenu(), i.position(t.extend({ of: this.element
            }, this.options.position)), this.options.autoFocus && this.menu.next()
        },
        _resizeMenu: function() {
            var t = this.menu.element;
            t.outerWidth(Math.max(t.width("").outerWidth() + 1, this.element.outerWidth()))
        },
        _renderMenu: function(e, i) {
            var s = this;
            t.each(i, function(t, i) {
                s._renderItemData(e, i)
            })
        },
        _renderItemData: function(t, e) {
            return this._renderItem(t, e).data("ui-autocomplete-item", e)
        },
        _renderItem: function(e, i) {
            return t("<li>").text(i.label).appendTo(e)
        },
        _move: function(t, e) {
            return this.menu.element.is(":visible") ? this.menu.isFirstItem() && /^previous/.test(t) || this.menu.isLastItem() && /^next/.test(t) ? (this.isMultiLine || this._value(this.term), void this.menu.blur()) : void this.menu[t](e) : void this.search(null, e)
        },
        widget: function() {
            return this.menu.element
        },
        _value: function() {
            return this.valueMethod.apply(this.element, arguments)
        },
        _keyEvent: function(t, e) {
            (!this.isMultiLine || this.menu.element.is(":visible")) && (this._move(t, e), e.preventDefault())
        }
    }), t.extend(t.ui.autocomplete, {
        escapeRegex: function(t) {
            return t.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&")
        },
        filter: function(e, i) {
            var s = new RegExp(t.ui.autocomplete.escapeRegex(i), "i");
            return t.grep(e, function(t) {
                return s.test(t.label || t.value || t)
            })
        }
    }), t.widget("ui.autocomplete", t.ui.autocomplete, {
        options: {
            messages: {
                noResults: "No search results.",
                results: function(t) {
                    return t + (t > 1 ? " results are" : " result is") + " available, use up and down arrow keys to navigate."
                }
            }
        },
        __response: function(e) {
            var i;
            this._superApply(arguments), this.options.disabled || this.cancelSearch || (i = e && e.length ? this.options.messages.results(e.length) : this.options.messages.noResults, this.liveRegion.children().hide(), t("<div>").text(i).appendTo(this.liveRegion))
        }
    });
    var d, p = (t.ui.autocomplete, "ui-button ui-widget ui-state-default ui-corner-all"),
        f = "ui-button-icons-only ui-button-icon-only ui-button-text-icons ui-button-text-icon-primary ui-button-text-icon-secondary ui-button-text-only",
        m = function() {
            var e = t(this);
            setTimeout(function() {
                e.find(":ui-button").button("refresh")
            }, 1)
        },
        g = function(e) {
            var i = e.name,
                s = e.form,
                n = t([]);
            return i && (i = i.replace(/'/g, "\\'"), n = s ? t(s).find("[name='" + i + "'][type=radio]") : t("[name='" + i + "'][type=radio]", e.ownerDocument).filter(function() {
                return !this.form
            })), n
        };
    t.widget("ui.button", {
        version: "1.11.4",
        defaultElement: "<button>",
        options: {
            disabled: null,
            text: !0,
            label: null,
            icons: {
                primary: null,
                secondary: null
            }
        },
        _create: function() {
            this.element.closest("form").unbind("reset" + this.eventNamespace).bind("reset" + this.eventNamespace, m), "boolean" != typeof this.options.disabled ? this.options.disabled = !!this.element.prop("disabled") : this.element.prop("disabled", this.options.disabled), this._determineButtonType(), this.hasTitle = !!this.buttonElement.attr("title");
            var e = this,
                i = this.options,
                s = "checkbox" === this.type || "radio" === this.type,
                n = s ? "" : "ui-state-active";
            null === i.label && (i.label = "input" === this.type ? this.buttonElement.val() : this.buttonElement.html()), this._hoverable(this.buttonElement), this.buttonElement.addClass(p).attr("role", "button").bind("mouseenter" + this.eventNamespace, function() {
                i.disabled || this === d && t(this).addClass("ui-state-active")
            }).bind("mouseleave" + this.eventNamespace, function() {
                i.disabled || t(this).removeClass(n)
            }).bind("click" + this.eventNamespace, function(t) {
                i.disabled && (t.preventDefault(), t.stopImmediatePropagation())
            }), this._on({
                focus: function() {
                    this.buttonElement.addClass("ui-state-focus")
                },
                blur: function() {
                    this.buttonElement.removeClass("ui-state-focus")
                }
            }), s && this.element.bind("change" + this.eventNamespace, function() {
                e.refresh()
            }), "checkbox" === this.type ? this.buttonElement.bind("click" + this.eventNamespace, function() {
                return i.disabled ? !1 : void 0
            }) : "radio" === this.type ? this.buttonElement.bind("click" + this.eventNamespace, function() {
                if (i.disabled) return !1;
                t(this).addClass("ui-state-active"), e.buttonElement.attr("aria-pressed", "true");
                var s = e.element[0];
                g(s).not(s).map(function() {
                    return t(this).button("widget")[0]
                }).removeClass("ui-state-active").attr("aria-pressed", "false")
            }) : (this.buttonElement.bind("mousedown" + this.eventNamespace, function() {
                return i.disabled ? !1 : (t(this).addClass("ui-state-active"), d = this, void e.document.one("mouseup", function() {
                    d = null
                }))
            }).bind("mouseup" + this.eventNamespace, function() {
                return i.disabled ? !1 : void t(this).removeClass("ui-state-active")
            }).bind("keydown" + this.eventNamespace, function(e) {
                return i.disabled ? !1 : void((e.keyCode === t.ui.keyCode.SPACE || e.keyCode === t.ui.keyCode.ENTER) && t(this).addClass("ui-state-active"))
            }).bind("keyup" + this.eventNamespace + " blur" + this.eventNamespace, function() {
                t(this).removeClass("ui-state-active")
            }), this.buttonElement.is("a") && this.buttonElement.keyup(function(e) {
                e.keyCode === t.ui.keyCode.SPACE && t(this).click()
            })), this._setOption("disabled", i.disabled), this._resetButton()
        },
        _determineButtonType: function() {
            var t, e, i;
            this.element.is("[type=checkbox]") ? this.type = "checkbox" : this.element.is("[type=radio]") ? this.type = "radio" : this.element.is("input") ? this.type = "input" : this.type = "button", "checkbox" === this.type || "radio" === this.type ? (t = this.element.parents().last(), e = "label[for='" + this.element.attr("id") + "']", this.buttonElement = t.find(e), this.buttonElement.length || (t = t.length ? t.siblings() : this.element.siblings(), this.buttonElement = t.filter(e), this.buttonElement.length || (this.buttonElement = t.find(e))), this.element.addClass("ui-helper-hidden-accessible"), i = this.element.is(":checked"), i && this.buttonElement.addClass("ui-state-active"), this.buttonElement.prop("aria-pressed", i)) : this.buttonElement = this.element
        },
        widget: function() {
            return this.buttonElement
        },
        _destroy: function() {
            this.element.removeClass("ui-helper-hidden-accessible"), this.buttonElement.removeClass(p + " ui-state-active " + f).removeAttr("role").removeAttr("aria-pressed").html(this.buttonElement.find(".ui-button-text").html()), this.hasTitle || this.buttonElement.removeAttr("title")
        },
        _setOption: function(t, e) {
            return this._super(t, e), "disabled" === t ? (this.widget().toggleClass("ui-state-disabled", !!e), this.element.prop("disabled", !!e), void(e && ("checkbox" === this.type || "radio" === this.type ? this.buttonElement.removeClass("ui-state-focus") : this.buttonElement.removeClass("ui-state-focus ui-state-active")))) : void this._resetButton()
        },
        refresh: function() {
            var e = this.element.is("input, button") ? this.element.is(":disabled") : this.element.hasClass("ui-button-disabled");
            e !== this.options.disabled && this._setOption("disabled", e), "radio" === this.type ? g(this.element[0]).each(function() {
                t(this).is(":checked") ? t(this).button("widget").addClass("ui-state-active").attr("aria-pressed", "true") : t(this).button("widget").removeClass("ui-state-active").attr("aria-pressed", "false")
            }) : "checkbox" === this.type && (this.element.is(":checked") ? this.buttonElement.addClass("ui-state-active").attr("aria-pressed", "true") : this.buttonElement.removeClass("ui-state-active").attr("aria-pressed", "false"))
        },
        _resetButton: function() {
            if ("input" === this.type) return void(this.options.label && this.element.val(this.options.label));
            var e = this.buttonElement.removeClass(f),
                i = t("<span></span>", this.document[0]).addClass("ui-button-text").html(this.options.label).appendTo(e.empty()).text(),
                s = this.options.icons,
                n = s.primary && s.secondary,
                o = [];
            s.primary || s.secondary ? (this.options.text && o.push("ui-button-text-icon" + (n ? "s" : s.primary ? "-primary" : "-secondary")), s.primary && e.prepend("<span class='ui-button-icon-primary ui-icon " + s.primary + "'></span>"), s.secondary && e.append("<span class='ui-button-icon-secondary ui-icon " + s.secondary + "'></span>"), this.options.text || (o.push(n ? "ui-button-icons-only" : "ui-button-icon-only"), this.hasTitle || e.attr("title", t.trim(i)))) : o.push("ui-button-text-only"), e.addClass(o.join(" "))
        }
    }), t.widget("ui.buttonset", {
        version: "1.11.4",
        options: {
            items: "button, input[type=button], input[type=submit], input[type=reset], input[type=checkbox], input[type=radio], a, :data(ui-button)"
        },
        _create: function() {
            this.element.addClass("ui-buttonset")
        },
        _init: function() {
            this.refresh()
        },
        _setOption: function(t, e) {
            "disabled" === t && this.buttons.button("option", t, e), this._super(t, e)
        },
        refresh: function() {
            var e = "rtl" === this.element.css("direction"),
                i = this.element.find(this.options.items),
                s = i.filter(":ui-button");
            i.not(":ui-button").button(), s.button("refresh"), this.buttons = i.map(function() {
                return t(this).button("widget")[0]
            }).removeClass("ui-corner-all ui-corner-left ui-corner-right").filter(":first").addClass(e ? "ui-corner-right" : "ui-corner-left").end().filter(":last").addClass(e ? "ui-corner-left" : "ui-corner-right").end().end()
        },
        _destroy: function() {
            this.element.removeClass("ui-buttonset"), this.buttons.map(function() {
                return t(this).button("widget")[0]
            }).removeClass("ui-corner-left ui-corner-right").end().button("destroy")
        }
    });
    t.ui.button;
    t.extend(t.ui, {
        datepicker: {
            version: "1.11.4"
        }
    });
    var v;
    t.extend(n.prototype, {
        markerClassName: "hasDatepicker",
        maxRows: 4,
        _widgetDatepicker: function() {
            return this.dpDiv
        },
        setDefaults: function(t) {
            return r(this._defaults, t || {}), this
        },
        _attachDatepicker: function(e, i) {
            var s, n, o;
            s = e.nodeName.toLowerCase(), n = "div" === s || "span" === s, e.id || (this.uuid += 1, e.id = "dp" + this.uuid), o = this._newInst(t(e), n), o.settings = t.extend({}, i || {}), "input" === s ? this._connectDatepicker(e, o) : n && this._inlineDatepicker(e, o)
        },
        _newInst: function(e, i) {
            var s = e[0].id.replace(/([^A-Za-z0-9_\-])/g, "\\\\$1");
            return {
                id: s,
                input: e,
                selectedDay: 0,
                selectedMonth: 0,
                selectedYear: 0,
                drawMonth: 0,
                drawYear: 0,
                inline: i,
                dpDiv: i ? o(t("<div class='" + this._inlineClass + " ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>")) : this.dpDiv
            }
        },
        _connectDatepicker: function(e, i) {
            var s = t(e);
            i.append = t([]), i.trigger = t([]), s.hasClass(this.markerClassName) || (this._attachments(s, i), s.addClass(this.markerClassName).keydown(this._doKeyDown).keypress(this._doKeyPress).keyup(this._doKeyUp), this._autoSize(i), t.data(e, "datepicker", i), i.settings.disabled && this._disableDatepicker(e))
        },
        _attachments: function(e, i) {
            var s, n, o, a = this._get(i, "appendText"),
                r = this._get(i, "isRTL");
            i.append && i.append.remove(), a && (i.append = t("<span class='" + this._appendClass + "'>" + a + "</span>"), e[r ? "before" : "after"](i.append)), e.unbind("focus", this._showDatepicker), i.trigger && i.trigger.remove(), s = this._get(i, "showOn"), ("focus" === s || "both" === s) && e.focus(this._showDatepicker), ("button" === s || "both" === s) && (n = this._get(i, "buttonText"), o = this._get(i, "buttonImage"), i.trigger = t(this._get(i, "buttonImageOnly") ? t("<img/>").addClass(this._triggerClass).attr({
                src: o,
                alt: n,
                title: n
            }) : t("<button type='button'></button>").addClass(this._triggerClass).html(o ? t("<img/>").attr({
                src: o,
                alt: n,
                title: n
            }) : n)), e[r ? "before" : "after"](i.trigger), i.trigger.click(function() {
                return t.datepicker._datepickerShowing && t.datepicker._lastInput === e[0] ? t.datepicker._hideDatepicker() : t.datepicker._datepickerShowing && t.datepicker._lastInput !== e[0] ? (t.datepicker._hideDatepicker(), t.datepicker._showDatepicker(e[0])) : t.datepicker._showDatepicker(e[0]), !1
            }))
        },
        _autoSize: function(t) {
            if (this._get(t, "autoSize") && !t.inline) {
                var e, i, s, n, o = new Date(2009, 11, 20),
                    a = this._get(t, "dateFormat");
                a.match(/[DM]/) && (e = function(t) {
                    for (i = 0, s = 0, n = 0; n < t.length; n++) t[n].length > i && (i = t[n].length, s = n);
                    return s
                }, o.setMonth(e(this._get(t, a.match(/MM/) ? "monthNames" : "monthNamesShort"))), o.setDate(e(this._get(t, a.match(/DD/) ? "dayNames" : "dayNamesShort")) + 20 - o.getDay())), t.input.attr("size", this._formatDate(t, o).length)
            }
        },
        _inlineDatepicker: function(e, i) {
            var s = t(e);
            s.hasClass(this.markerClassName) || (s.addClass(this.markerClassName).append(i.dpDiv), t.data(e, "datepicker", i), this._setDate(i, this._getDefaultDate(i), !0), this._updateDatepicker(i), this._updateAlternate(i), i.settings.disabled && this._disableDatepicker(e), i.dpDiv.css("display", "block"))
        },
        _dialogDatepicker: function(e, i, s, n, o) {
            var a, h, l, u, c, d = this._dialogInst;
            return d || (this.uuid += 1, a = "dp" + this.uuid, this._dialogInput = t("<input type='text' id='" + a + "' style='position: absolute; top: -100px; width: 0px;'/>"), this._dialogInput.keydown(this._doKeyDown), t("body").append(this._dialogInput), d = this._dialogInst = this._newInst(this._dialogInput, !1), d.settings = {}, t.data(this._dialogInput[0], "datepicker", d)), r(d.settings, n || {}), i = i && i.constructor === Date ? this._formatDate(d, i) : i, this._dialogInput.val(i), this._pos = o ? o.length ? o : [o.pageX, o.pageY] : null, this._pos || (h = document.documentElement.clientWidth, l = document.documentElement.clientHeight, u = document.documentElement.scrollLeft || document.body.scrollLeft, c = document.documentElement.scrollTop || document.body.scrollTop, this._pos = [h / 2 - 100 + u, l / 2 - 150 + c]), this._dialogInput.css("left", this._pos[0] + 20 + "px").css("top", this._pos[1] + "px"), d.settings.onSelect = s, this._inDialog = !0, this.dpDiv.addClass(this._dialogClass), this._showDatepicker(this._dialogInput[0]), t.blockUI && t.blockUI(this.dpDiv), t.data(this._dialogInput[0], "datepicker", d), this
        },
        _destroyDatepicker: function(e) {
            var i, s = t(e),
                n = t.data(e, "datepicker");
            s.hasClass(this.markerClassName) && (i = e.nodeName.toLowerCase(), t.removeData(e, "datepicker"), "input" === i ? (n.append.remove(), n.trigger.remove(), s.removeClass(this.markerClassName).unbind("focus", this._showDatepicker).unbind("keydown", this._doKeyDown).unbind("keypress", this._doKeyPress).unbind("keyup", this._doKeyUp)) : ("div" === i || "span" === i) && s.removeClass(this.markerClassName).empty(), v === n && (v = null))
        },
        _enableDatepicker: function(e) {
            var i, s, n = t(e),
                o = t.data(e, "datepicker");
            n.hasClass(this.markerClassName) && (i = e.nodeName.toLowerCase(), "input" === i ? (e.disabled = !1, o.trigger.filter("button").each(function() {
                this.disabled = !1
            }).end().filter("img").css({
                opacity: "1.0",
                cursor: ""
            })) : ("div" === i || "span" === i) && (s = n.children("." + this._inlineClass), s.children().removeClass("ui-state-disabled"), s.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled", !1)), this._disabledInputs = t.map(this._disabledInputs, function(t) {
                return t === e ? null : t
            }))
        },
        _disableDatepicker: function(e) {
            var i, s, n = t(e),
                o = t.data(e, "datepicker");
            n.hasClass(this.markerClassName) && (i = e.nodeName.toLowerCase(), "input" === i ? (e.disabled = !0, o.trigger.filter("button").each(function() {
                this.disabled = !0
            }).end().filter("img").css({
                opacity: "0.5",
                cursor: "default"
            })) : ("div" === i || "span" === i) && (s = n.children("." + this._inlineClass), s.children().addClass("ui-state-disabled"), s.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled", !0)), this._disabledInputs = t.map(this._disabledInputs, function(t) {
                return t === e ? null : t
            }), this._disabledInputs[this._disabledInputs.length] = e)
        },
        _isDisabledDatepicker: function(t) {
            if (!t) return !1;
            for (var e = 0; e < this._disabledInputs.length; e++)
                if (this._disabledInputs[e] === t) return !0;
            return !1
        },
        _getInst: function(e) {
            try {
                return t.data(e, "datepicker")
            } catch (i) {
                throw "Missing instance data for this datepicker"
            }
        },
        _optionDatepicker: function(e, i, s) {
            var n, o, a, h, l = this._getInst(e);
            return 2 === arguments.length && "string" == typeof i ? "defaults" === i ? t.extend({}, t.datepicker._defaults) : l ? "all" === i ? t.extend({}, l.settings) : this._get(l, i) : null : (n = i || {}, "string" == typeof i && (n = {}, n[i] = s), void(l && (this._curInst === l && this._hideDatepicker(), o = this._getDateDatepicker(e, !0), a = this._getMinMaxDate(l, "min"), h = this._getMinMaxDate(l, "max"), r(l.settings, n), null !== a && void 0 !== n.dateFormat && void 0 === n.minDate && (l.settings.minDate = this._formatDate(l, a)), null !== h && void 0 !== n.dateFormat && void 0 === n.maxDate && (l.settings.maxDate = this._formatDate(l, h)), "disabled" in n && (n.disabled ? this._disableDatepicker(e) : this._enableDatepicker(e)), this._attachments(t(e), l), this._autoSize(l), this._setDate(l, o), this._updateAlternate(l), this._updateDatepicker(l))))
        },
        _changeDatepicker: function(t, e, i) {
            this._optionDatepicker(t, e, i)
        },
        _refreshDatepicker: function(t) {
            var e = this._getInst(t);
            e && this._updateDatepicker(e)
        },
        _setDateDatepicker: function(t, e) {
            var i = this._getInst(t);
            i && (this._setDate(i, e), this._updateDatepicker(i), this._updateAlternate(i))
        },
        _getDateDatepicker: function(t, e) {
            var i = this._getInst(t);
            return i && !i.inline && this._setDateFromField(i, e), i ? this._getDate(i) : null
        },
        _doKeyDown: function(e) {
            var i, s, n, o = t.datepicker._getInst(e.target),
                a = !0,
                r = o.dpDiv.is(".ui-datepicker-rtl");
            if (o._keyEvent = !0, t.datepicker._datepickerShowing) switch (e.keyCode) {
                case 9:
                    t.datepicker._hideDatepicker(), a = !1;
                    break;
                case 13:
                    return n = t("td." + t.datepicker._dayOverClass + ":not(." + t.datepicker._currentClass + ")", o.dpDiv), n[0] && t.datepicker._selectDay(e.target, o.selectedMonth, o.selectedYear, n[0]), i = t.datepicker._get(o, "onSelect"), i ? (s = t.datepicker._formatDate(o), i.apply(o.input ? o.input[0] : null, [s, o])) : t.datepicker._hideDatepicker(), !1;
                case 27:
                    t.datepicker._hideDatepicker();
                    break;
                case 33:
                    t.datepicker._adjustDate(e.target, e.ctrlKey ? -t.datepicker._get(o, "stepBigMonths") : -t.datepicker._get(o, "stepMonths"), "M");
                    break;
                case 34:
                    t.datepicker._adjustDate(e.target, e.ctrlKey ? +t.datepicker._get(o, "stepBigMonths") : +t.datepicker._get(o, "stepMonths"), "M");
                    break;
                case 35:
                    (e.ctrlKey || e.metaKey) && t.datepicker._clearDate(e.target), a = e.ctrlKey || e.metaKey;
                    break;
                case 36:
                    (e.ctrlKey || e.metaKey) && t.datepicker._gotoToday(e.target), a = e.ctrlKey || e.metaKey;
                    break;
                case 37:
                    (e.ctrlKey || e.metaKey) && t.datepicker._adjustDate(e.target, r ? 1 : -1, "D"), a = e.ctrlKey || e.metaKey, e.originalEvent.altKey && t.datepicker._adjustDate(e.target, e.ctrlKey ? -t.datepicker._get(o, "stepBigMonths") : -t.datepicker._get(o, "stepMonths"), "M");
                    break;
                case 38:
                    (e.ctrlKey || e.metaKey) && t.datepicker._adjustDate(e.target, -7, "D"), a = e.ctrlKey || e.metaKey;
                    break;
                case 39:
                    (e.ctrlKey || e.metaKey) && t.datepicker._adjustDate(e.target, r ? -1 : 1, "D"), a = e.ctrlKey || e.metaKey, e.originalEvent.altKey && t.datepicker._adjustDate(e.target, e.ctrlKey ? +t.datepicker._get(o, "stepBigMonths") : +t.datepicker._get(o, "stepMonths"), "M");
                    break;
                case 40:
                    (e.ctrlKey || e.metaKey) && t.datepicker._adjustDate(e.target, 7, "D"), a = e.ctrlKey || e.metaKey;
                    break;
                default:
                    a = !1
            } else 36 === e.keyCode && e.ctrlKey ? t.datepicker._showDatepicker(this) : a = !1;
            a && (e.preventDefault(), e.stopPropagation())
        },
        _doKeyPress: function(e) {
            var i, s, n = t.datepicker._getInst(e.target);
            return t.datepicker._get(n, "constrainInput") ? (i = t.datepicker._possibleChars(t.datepicker._get(n, "dateFormat")), s = String.fromCharCode(null == e.charCode ? e.keyCode : e.charCode), e.ctrlKey || e.metaKey || " " > s || !i || i.indexOf(s) > -1) : void 0
        },
        _doKeyUp: function(e) {
            var i, s = t.datepicker._getInst(e.target);
            if (s.input.val() !== s.lastVal) try {
                i = t.datepicker.parseDate(t.datepicker._get(s, "dateFormat"), s.input ? s.input.val() : null, t.datepicker._getFormatConfig(s)), i && (t.datepicker._setDateFromField(s), t.datepicker._updateAlternate(s), t.datepicker._updateDatepicker(s))
            } catch (n) {}
            return !0
        },
        _showDatepicker: function(e) {
            if (e = e.target || e, "input" !== e.nodeName.toLowerCase() && (e = t("input", e.parentNode)[0]), !t.datepicker._isDisabledDatepicker(e) && t.datepicker._lastInput !== e) {
                var i, n, o, a, h, l, u;
                i = t.datepicker._getInst(e), t.datepicker._curInst && t.datepicker._curInst !== i && (t.datepicker._curInst.dpDiv.stop(!0, !0), i && t.datepicker._datepickerShowing && t.datepicker._hideDatepicker(t.datepicker._curInst.input[0])), n = t.datepicker._get(i, "beforeShow"), o = n ? n.apply(e, [e, i]) : {}, o !== !1 && (r(i.settings, o), i.lastVal = null, t.datepicker._lastInput = e, t.datepicker._setDateFromField(i), t.datepicker._inDialog && (e.value = ""), t.datepicker._pos || (t.datepicker._pos = t.datepicker._findPos(e), t.datepicker._pos[1] += e.offsetHeight), a = !1, t(e).parents().each(function() {
                    return a |= "fixed" === t(this).css("position"), !a
                }), h = {
                    left: t.datepicker._pos[0],
                    top: t.datepicker._pos[1]
                }, t.datepicker._pos = null, i.dpDiv.empty(), i.dpDiv.css({
                    position: "absolute",
                    display: "block",
                    top: "-1000px"
                }), t.datepicker._updateDatepicker(i), h = t.datepicker._checkOffset(i, h, a), i.dpDiv.css({
                    position: t.datepicker._inDialog && t.blockUI ? "static" : a ? "fixed" : "absolute",
                    display: "none",
                    left: h.left + "px",
                    top: h.top + "px"
                }), i.inline || (l = t.datepicker._get(i, "showAnim"), u = t.datepicker._get(i, "duration"), i.dpDiv.css("z-index", s(t(e)) + 1), t.datepicker._datepickerShowing = !0, t.effects && t.effects.effect[l] ? i.dpDiv.show(l, t.datepicker._get(i, "showOptions"), u) : i.dpDiv[l || "show"](l ? u : null), t.datepicker._shouldFocusInput(i) && i.input.focus(), t.datepicker._curInst = i))
            }
        },
        _updateDatepicker: function(e) {
            this.maxRows = 4, v = e, e.dpDiv.empty().append(this._generateHTML(e)), this._attachHandlers(e);
            var i, s = this._getNumberOfMonths(e),
                n = s[1],
                o = 17,
                r = e.dpDiv.find("." + this._dayOverClass + " a");
            r.length > 0 && a.apply(r.get(0)), e.dpDiv.removeClass("ui-datepicker-multi-2 ui-datepicker-multi-3 ui-datepicker-multi-4").width(""), n > 1 && e.dpDiv.addClass("ui-datepicker-multi-" + n).css("width", o * n + "em"), e.dpDiv[(1 !== s[0] || 1 !== s[1] ? "add" : "remove") + "Class"]("ui-datepicker-multi"), e.dpDiv[(this._get(e, "isRTL") ? "add" : "remove") + "Class"]("ui-datepicker-rtl"), e === t.datepicker._curInst && t.datepicker._datepickerShowing && t.datepicker._shouldFocusInput(e) && e.input.focus(), e.yearshtml && (i = e.yearshtml, setTimeout(function() {
                i === e.yearshtml && e.yearshtml && e.dpDiv.find("select.ui-datepicker-year:first").replaceWith(e.yearshtml), i = e.yearshtml = null
            }, 0))
        },
        _shouldFocusInput: function(t) {
            return t.input && t.input.is(":visible") && !t.input.is(":disabled") && !t.input.is(":focus")
        },
        _checkOffset: function(e, i, s) {
            var n = e.dpDiv.outerWidth(),
                o = e.dpDiv.outerHeight(),
                a = e.input ? e.input.outerWidth() : 0,
                r = e.input ? e.input.outerHeight() : 0,
                h = document.documentElement.clientWidth + (s ? 0 : t(document).scrollLeft()),
                l = document.documentElement.clientHeight + (s ? 0 : t(document).scrollTop());
            return i.left -= this._get(e, "isRTL") ? n - a : 0, i.left -= s && i.left === e.input.offset().left ? t(document).scrollLeft() : 0, i.top -= s && i.top === e.input.offset().top + r ? t(document).scrollTop() : 0, i.left -= Math.min(i.left, i.left + n > h && h > n ? Math.abs(i.left + n - h) : 0), i.top -= Math.min(i.top, i.top + o > l && l > o ? Math.abs(o + r) : 0), i
        },
        _findPos: function(e) {
            for (var i, s = this._getInst(e), n = this._get(s, "isRTL"); e && ("hidden" === e.type || 1 !== e.nodeType || t.expr.filters.hidden(e));) e = e[n ? "previousSibling" : "nextSibling"];
            return i = t(e).offset(), [i.left, i.top]
        },
        _hideDatepicker: function(e) {
            var i, s, n, o, a = this._curInst;
            !a || e && a !== t.data(e, "datepicker") || this._datepickerShowing && (i = this._get(a, "showAnim"), s = this._get(a, "duration"), n = function() {
                t.datepicker._tidyDialog(a)
            }, t.effects && (t.effects.effect[i] || t.effects[i]) ? a.dpDiv.hide(i, t.datepicker._get(a, "showOptions"), s, n) : a.dpDiv["slideDown" === i ? "slideUp" : "fadeIn" === i ? "fadeOut" : "hide"](i ? s : null, n), i || n(), this._datepickerShowing = !1, o = this._get(a, "onClose"), o && o.apply(a.input ? a.input[0] : null, [a.input ? a.input.val() : "", a]), this._lastInput = null, this._inDialog && (this._dialogInput.css({
                position: "absolute",
                left: "0",
                top: "-100px"
            }), t.blockUI && (t.unblockUI(), t("body").append(this.dpDiv))), this._inDialog = !1)
        },
        _tidyDialog: function(t) {
            t.dpDiv.removeClass(this._dialogClass).unbind(".ui-datepicker-calendar")
        },
        _checkExternalClick: function(e) {
            if (t.datepicker._curInst) {
                var i = t(e.target),
                    s = t.datepicker._getInst(i[0]);
                (i[0].id !== t.datepicker._mainDivId && 0 === i.parents("#" + t.datepicker._mainDivId).length && !i.hasClass(t.datepicker.markerClassName) && !i.closest("." + t.datepicker._triggerClass).length && t.datepicker._datepickerShowing && (!t.datepicker._inDialog || !t.blockUI) || i.hasClass(t.datepicker.markerClassName) && t.datepicker._curInst !== s) && t.datepicker._hideDatepicker()
            }
        },
        _adjustDate: function(e, i, s) {
            var n = t(e),
                o = this._getInst(n[0]);
            this._isDisabledDatepicker(n[0]) || (this._adjustInstDate(o, i + ("M" === s ? this._get(o, "showCurrentAtPos") : 0), s), this._updateDatepicker(o))
        },
        _gotoToday: function(e) {
            var i, s = t(e),
                n = this._getInst(s[0]);
            this._get(n, "gotoCurrent") && n.currentDay ? (n.selectedDay = n.currentDay, n.drawMonth = n.selectedMonth = n.currentMonth, n.drawYear = n.selectedYear = n.currentYear) : (i = new Date, n.selectedDay = i.getDate(), n.drawMonth = n.selectedMonth = i.getMonth(), n.drawYear = n.selectedYear = i.getFullYear()), this._notifyChange(n), this._adjustDate(s)
        },
        _selectMonthYear: function(e, i, s) {
            var n = t(e),
                o = this._getInst(n[0]);
            o["selected" + ("M" === s ? "Month" : "Year")] = o["draw" + ("M" === s ? "Month" : "Year")] = parseInt(i.options[i.selectedIndex].value, 10), this._notifyChange(o), this._adjustDate(n)
        },
        _selectDay: function(e, i, s, n) {
            var o, a = t(e);
            t(n).hasClass(this._unselectableClass) || this._isDisabledDatepicker(a[0]) || (o = this._getInst(a[0]), o.selectedDay = o.currentDay = t("a", n).html(), o.selectedMonth = o.currentMonth = i, o.selectedYear = o.currentYear = s, this._selectDate(e, this._formatDate(o, o.currentDay, o.currentMonth, o.currentYear)))
        },
        _clearDate: function(e) {
            var i = t(e);
            this._selectDate(i, "")
        },
        _selectDate: function(e, i) {
            var s, n = t(e),
                o = this._getInst(n[0]);
            i = null != i ? i : this._formatDate(o), o.input && o.input.val(i), this._updateAlternate(o), s = this._get(o, "onSelect"), s ? s.apply(o.input ? o.input[0] : null, [i, o]) : o.input && o.input.trigger("change"), o.inline ? this._updateDatepicker(o) : (this._hideDatepicker(), this._lastInput = o.input[0], "object" != typeof o.input[0] && o.input.focus(), this._lastInput = null)
        },
        _updateAlternate: function(e) {
            var i, s, n, o = this._get(e, "altField");
            o && (i = this._get(e, "altFormat") || this._get(e, "dateFormat"), s = this._getDate(e), n = this.formatDate(i, s, this._getFormatConfig(e)), t(o).each(function() {
                t(this).val(n)
            }))
        },
        noWeekends: function(t) {
            var e = t.getDay();
            return [e > 0 && 6 > e, ""]
        },
        iso8601Week: function(t) {
            var e, i = new Date(t.getTime());
            return i.setDate(i.getDate() + 4 - (i.getDay() || 7)), e = i.getTime(), i.setMonth(0), i.setDate(1), Math.floor(Math.round((e - i) / 864e5) / 7) + 1
        },
        parseDate: function(e, i, s) {
            if (null == e || null == i) throw "Invalid arguments";
            if (i = "object" == typeof i ? i.toString() : i + "", "" === i) return null;
            var n, o, a, r, h = 0,
                l = (s ? s.shortYearCutoff : null) || this._defaults.shortYearCutoff,
                u = "string" != typeof l ? l : (new Date).getFullYear() % 100 + parseInt(l, 10),
                c = (s ? s.dayNamesShort : null) || this._defaults.dayNamesShort,
                d = (s ? s.dayNames : null) || this._defaults.dayNames,
                p = (s ? s.monthNamesShort : null) || this._defaults.monthNamesShort,
                f = (s ? s.monthNames : null) || this._defaults.monthNames,
                m = -1,
                g = -1,
                v = -1,
                _ = -1,
                b = !1,
                y = function(t) {
                    var i = n + 1 < e.length && e.charAt(n + 1) === t;
                    return i && n++, i
                },
                w = function(t) {
                    var e = y(t),
                        s = "@" === t ? 14 : "!" === t ? 20 : "y" === t && e ? 4 : "o" === t ? 3 : 2,
                        n = "y" === t ? s : 1,
                        o = new RegExp("^\\d{" + n + "," + s + "}"),
                        a = i.substring(h).match(o);
                    if (!a) throw "Missing number at position " + h;
                    return h += a[0].length, parseInt(a[0], 10)
                },
                x = function(e, s, n) {
                    var o = -1,
                        a = t.map(y(e) ? n : s, function(t, e) {
                            return [
                                [e, t]
                            ]
                        }).sort(function(t, e) {
                            return -(t[1].length - e[1].length)
                        });
                    if (t.each(a, function(t, e) {
                            var s = e[1];
                            return i.substr(h, s.length).toLowerCase() === s.toLowerCase() ? (o = e[0], h += s.length, !1) : void 0
                        }), -1 !== o) return o + 1;
                    throw "Unknown name at position " + h
                },
                k = function() {
                    if (i.charAt(h) !== e.charAt(n)) throw "Unexpected literal at position " + h;
                    h++
                };
            for (n = 0; n < e.length; n++)
                if (b) "'" !== e.charAt(n) || y("'") ? k() : b = !1;
                else switch (e.charAt(n)) {
                    case "d":
                        v = w("d");
                        break;
                    case "D":
                        x("D", c, d);
                        break;
                    case "o":
                        _ = w("o");
                        break;
                    case "m":
                        g = w("m");
                        break;
                    case "M":
                        g = x("M", p, f);
                        break;
                    case "y":
                        m = w("y");
                        break;
                    case "@":
                        r = new Date(w("@")), m = r.getFullYear(), g = r.getMonth() + 1, v = r.getDate();
                        break;
                    case "!":
                        r = new Date((w("!") - this._ticksTo1970) / 1e4), m = r.getFullYear(), g = r.getMonth() + 1, v = r.getDate();
                        break;
                    case "'":
                        y("'") ? k() : b = !0;
                        break;
                    default:
                        k()
                }
            if (h < i.length && (a = i.substr(h), !/^\s+/.test(a))) throw "Extra/unparsed characters found in date: " + a;
            if (-1 === m ? m = (new Date).getFullYear() : 100 > m && (m += (new Date).getFullYear() - (new Date).getFullYear() % 100 + (u >= m ? 0 : -100)), _ > -1)
                for (g = 1, v = _;;) {
                    if (o = this._getDaysInMonth(m, g - 1), o >= v) break;
                    g++, v -= o
                }
            if (r = this._daylightSavingAdjust(new Date(m, g - 1, v)), r.getFullYear() !== m || r.getMonth() + 1 !== g || r.getDate() !== v) throw "Invalid date";
            return r
        },
        ATOM: "yy-mm-dd",
        COOKIE: "D, dd M yy",
        ISO_8601: "yy-mm-dd",
        RFC_822: "D, d M y",
        RFC_850: "DD, dd-M-y",
        RFC_1036: "D, d M y",
        RFC_1123: "D, d M yy",
        RFC_2822: "D, d M yy",
        RSS: "D, d M y",
        TICKS: "!",
        TIMESTAMP: "@",
        W3C: "yy-mm-dd",
        _ticksTo1970: 24 * (718685 + Math.floor(492.5) - Math.floor(19.7) + Math.floor(4.925)) * 60 * 60 * 1e7,
        formatDate: function(t, e, i) {
            if (!e) return "";
            var s, n = (i ? i.dayNamesShort : null) || this._defaults.dayNamesShort,
                o = (i ? i.dayNames : null) || this._defaults.dayNames,
                a = (i ? i.monthNamesShort : null) || this._defaults.monthNamesShort,
                r = (i ? i.monthNames : null) || this._defaults.monthNames,
                h = function(e) {
                    var i = s + 1 < t.length && t.charAt(s + 1) === e;
                    return i && s++, i
                },
                l = function(t, e, i) {
                    var s = "" + e;
                    if (h(t))
                        for (; s.length < i;) s = "0" + s;
                    return s
                },
                u = function(t, e, i, s) {
                    return h(t) ? s[e] : i[e]
                },
                c = "",
                d = !1;
            if (e)
                for (s = 0; s < t.length; s++)
                    if (d) "'" !== t.charAt(s) || h("'") ? c += t.charAt(s) : d = !1;
                    else switch (t.charAt(s)) {
                        case "d":
                            c += l("d", e.getDate(), 2);
                            break;
                        case "D":
                            c += u("D", e.getDay(), n, o);
                            break;
                        case "o":
                            c += l("o", Math.round((new Date(e.getFullYear(), e.getMonth(), e.getDate()).getTime() - new Date(e.getFullYear(), 0, 0).getTime()) / 864e5), 3);
                            break;
                        case "m":
                            c += l("m", e.getMonth() + 1, 2);
                            break;
                        case "M":
                            c += u("M", e.getMonth(), a, r);
                            break;
                        case "y":
                            c += h("y") ? e.getFullYear() : (e.getYear() % 100 < 10 ? "0" : "") + e.getYear() % 100;
                            break;
                        case "@":
                            c += e.getTime();
                            break;
                        case "!":
                            c += 1e4 * e.getTime() + this._ticksTo1970;
                            break;
                        case "'":
                            h("'") ? c += "'" : d = !0;
                            break;
                        default:
                            c += t.charAt(s)
                    }
            return c
        },
        _possibleChars: function(t) {
            var e, i = "",
                s = !1,
                n = function(i) {
                    var s = e + 1 < t.length && t.charAt(e + 1) === i;
                    return s && e++, s
                };
            for (e = 0; e < t.length; e++)
                if (s) "'" !== t.charAt(e) || n("'") ? i += t.charAt(e) : s = !1;
                else switch (t.charAt(e)) {
                    case "d":
                    case "m":
                    case "y":
                    case "@":
                        i += "0123456789";
                        break;
                    case "D":
                    case "M":
                        return null;
                    case "'":
                        n("'") ? i += "'" : s = !0;
                        break;
                    default:
                        i += t.charAt(e)
                }
            return i
        },
        _get: function(t, e) {
            return void 0 !== t.settings[e] ? t.settings[e] : this._defaults[e]
        },
        _setDateFromField: function(t, e) {
            if (t.input.val() !== t.lastVal) {
                var i = this._get(t, "dateFormat"),
                    s = t.lastVal = t.input ? t.input.val() : null,
                    n = this._getDefaultDate(t),
                    o = n,
                    a = this._getFormatConfig(t);
                try {
                    o = this.parseDate(i, s, a) || n
                } catch (r) {
                    s = e ? "" : s
                }
                t.selectedDay = o.getDate(), t.drawMonth = t.selectedMonth = o.getMonth(), t.drawYear = t.selectedYear = o.getFullYear(), t.currentDay = s ? o.getDate() : 0, t.currentMonth = s ? o.getMonth() : 0, t.currentYear = s ? o.getFullYear() : 0, this._adjustInstDate(t)
            }
        },
        _getDefaultDate: function(t) {
            return this._restrictMinMax(t, this._determineDate(t, this._get(t, "defaultDate"), new Date))
        },
        _determineDate: function(e, i, s) {
            var n = function(t) {
                    var e = new Date;
                    return e.setDate(e.getDate() + t), e
                },
                o = function(i) {
                    try {
                        return t.datepicker.parseDate(t.datepicker._get(e, "dateFormat"), i, t.datepicker._getFormatConfig(e))
                    } catch (s) {}
                    for (var n = (i.toLowerCase().match(/^c/) ? t.datepicker._getDate(e) : null) || new Date, o = n.getFullYear(), a = n.getMonth(), r = n.getDate(), h = /([+\-]?[0-9]+)\s*(d|D|w|W|m|M|y|Y)?/g, l = h.exec(i); l;) {
                        switch (l[2] || "d") {
                            case "d":
                            case "D":
                                r += parseInt(l[1], 10);
                                break;
                            case "w":
                            case "W":
                                r += 7 * parseInt(l[1], 10);
                                break;
                            case "m":
                            case "M":
                                a += parseInt(l[1], 10), r = Math.min(r, t.datepicker._getDaysInMonth(o, a));
                                break;
                            case "y":
                            case "Y":
                                o += parseInt(l[1], 10), r = Math.min(r, t.datepicker._getDaysInMonth(o, a))
                        }
                        l = h.exec(i)
                    }
                    return new Date(o, a, r)
                },
                a = null == i || "" === i ? s : "string" == typeof i ? o(i) : "number" == typeof i ? isNaN(i) ? s : n(i) : new Date(i.getTime());
            return a = a && "Invalid Date" === a.toString() ? s : a, a && (a.setHours(0), a.setMinutes(0), a.setSeconds(0), a.setMilliseconds(0)), this._daylightSavingAdjust(a)
        },
        _daylightSavingAdjust: function(t) {
            return t ? (t.setHours(t.getHours() > 12 ? t.getHours() + 2 : 0), t) : null
        },
        _setDate: function(t, e, i) {
            var s = !e,
                n = t.selectedMonth,
                o = t.selectedYear,
                a = this._restrictMinMax(t, this._determineDate(t, e, new Date));
            t.selectedDay = t.currentDay = a.getDate(), t.drawMonth = t.selectedMonth = t.currentMonth = a.getMonth(), t.drawYear = t.selectedYear = t.currentYear = a.getFullYear(), n === t.selectedMonth && o === t.selectedYear || i || this._notifyChange(t), this._adjustInstDate(t), t.input && t.input.val(s ? "" : this._formatDate(t))
        },
        _getDate: function(t) {
            var e = !t.currentYear || t.input && "" === t.input.val() ? null : this._daylightSavingAdjust(new Date(t.currentYear, t.currentMonth, t.currentDay));
            return e
        },
        _attachHandlers: function(e) {
            var i = this._get(e, "stepMonths"),
                s = "#" + e.id.replace(/\\\\/g, "\\");
            e.dpDiv.find("[data-handler]").map(function() {
                var e = {
                    prev: function() {
                        t.datepicker._adjustDate(s, -i, "M")
                    },
                    next: function() {
                        t.datepicker._adjustDate(s, +i, "M")
                    },
                    hide: function() {
                        t.datepicker._hideDatepicker()
                    },
                    today: function() {
                        t.datepicker._gotoToday(s)
                    },
                    selectDay: function() {
                        return t.datepicker._selectDay(s, +this.getAttribute("data-month"), +this.getAttribute("data-year"), this), !1
                    },
                    selectMonth: function() {
                        return t.datepicker._selectMonthYear(s, this, "M"), !1
                    },
                    selectYear: function() {
                        return t.datepicker._selectMonthYear(s, this, "Y"), !1
                    }
                };
                t(this).bind(this.getAttribute("data-event"), e[this.getAttribute("data-handler")])
            })
        },
        _generateHTML: function(t) {
            var e, i, s, n, o, a, r, h, l, u, c, d, p, f, m, g, v, _, b, y, w, x, k, C, D, I, T, P, M, S, z, H, A, N, E, W, O, F, R, L = new Date,
                Y = this._daylightSavingAdjust(new Date(L.getFullYear(), L.getMonth(), L.getDate())),
                B = this._get(t, "isRTL"),
                j = this._get(t, "showButtonPanel"),
                q = this._get(t, "hideIfNoPrevNext"),
                K = this._get(t, "navigationAsDateFormat"),
                U = this._getNumberOfMonths(t),
                V = this._get(t, "showCurrentAtPos"),
                X = this._get(t, "stepMonths"),
                $ = 1 !== U[0] || 1 !== U[1],
                G = this._daylightSavingAdjust(t.currentDay ? new Date(t.currentYear, t.currentMonth, t.currentDay) : new Date(9999, 9, 9)),
                Q = this._getMinMaxDate(t, "min"),
                J = this._getMinMaxDate(t, "max"),
                Z = t.drawMonth - V,
                tt = t.drawYear;
            if (0 > Z && (Z += 12, tt--), J)
                for (e = this._daylightSavingAdjust(new Date(J.getFullYear(), J.getMonth() - U[0] * U[1] + 1, J.getDate())), e = Q && Q > e ? Q : e; this._daylightSavingAdjust(new Date(tt, Z, 1)) > e;) Z--, 0 > Z && (Z = 11, tt--);
            for (t.drawMonth = Z, t.drawYear = tt, i = this._get(t, "prevText"), i = K ? this.formatDate(i, this._daylightSavingAdjust(new Date(tt, Z - X, 1)), this._getFormatConfig(t)) : i, s = this._canAdjustMonth(t, -1, tt, Z) ? "<a class='ui-datepicker-prev ui-corner-all' data-handler='prev' data-event='click' title='" + i + "'><span class='ui-icon ui-icon-circle-triangle-" + (B ? "e" : "w") + "'>" + i + "</span></a>" : q ? "" : "<a class='ui-datepicker-prev ui-corner-all ui-state-disabled' title='" + i + "'><span class='ui-icon ui-icon-circle-triangle-" + (B ? "e" : "w") + "'>" + i + "</span></a>", n = this._get(t, "nextText"), n = K ? this.formatDate(n, this._daylightSavingAdjust(new Date(tt, Z + X, 1)), this._getFormatConfig(t)) : n, o = this._canAdjustMonth(t, 1, tt, Z) ? "<a class='ui-datepicker-next ui-corner-all' data-handler='next' data-event='click' title='" + n + "'><span class='ui-icon ui-icon-circle-triangle-" + (B ? "w" : "e") + "'>" + n + "</span></a>" : q ? "" : "<a class='ui-datepicker-next ui-corner-all ui-state-disabled' title='" + n + "'><span class='ui-icon ui-icon-circle-triangle-" + (B ? "w" : "e") + "'>" + n + "</span></a>", a = this._get(t, "currentText"), r = this._get(t, "gotoCurrent") && t.currentDay ? G : Y, a = K ? this.formatDate(a, r, this._getFormatConfig(t)) : a, h = t.inline ? "" : "<button type='button' class='ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all' data-handler='hide' data-event='click'>" + this._get(t, "closeText") + "</button>", l = j ? "<div class='ui-datepicker-buttonpane ui-widget-content'>" + (B ? h : "") + (this._isInRange(t, r) ? "<button type='button' class='ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all' data-handler='today' data-event='click'>" + a + "</button>" : "") + (B ? "" : h) + "</div>" : "", u = parseInt(this._get(t, "firstDay"), 10), u = isNaN(u) ? 0 : u, c = this._get(t, "showWeek"), d = this._get(t, "dayNames"), p = this._get(t, "dayNamesMin"), f = this._get(t, "monthNames"), m = this._get(t, "monthNamesShort"), g = this._get(t, "beforeShowDay"), v = this._get(t, "showOtherMonths"), _ = this._get(t, "selectOtherMonths"), b = this._getDefaultDate(t), y = "", x = 0; x < U[0]; x++) {
                for (k = "", this.maxRows = 4, C = 0; C < U[1]; C++) {
                    if (D = this._daylightSavingAdjust(new Date(tt, Z, t.selectedDay)), I = " ui-corner-all", T = "", $) {
                        if (T += "<div class='ui-datepicker-group", U[1] > 1) switch (C) {
                            case 0:
                                T += " ui-datepicker-group-first", I = " ui-corner-" + (B ? "right" : "left");
                                break;
                            case U[1] - 1:
                                T += " ui-datepicker-group-last", I = " ui-corner-" + (B ? "left" : "right");
                                break;
                            default:
                                T += " ui-datepicker-group-middle", I = ""
                        }
                        T += "'>"
                    }
                    for (T += "<div class='ui-datepicker-header ui-widget-header ui-helper-clearfix" + I + "'>" + (/all|left/.test(I) && 0 === x ? B ? o : s : "") + (/all|right/.test(I) && 0 === x ? B ? s : o : "") + this._generateMonthYearHeader(t, Z, tt, Q, J, x > 0 || C > 0, f, m) + "</div><table class='ui-datepicker-calendar'><thead><tr>", P = c ? "<th class='ui-datepicker-week-col'>" + this._get(t, "weekHeader") + "</th>" : "", w = 0; 7 > w; w++) M = (w + u) % 7, P += "<th scope='col'" + ((w + u + 6) % 7 >= 5 ? " class='ui-datepicker-week-end'" : "") + "><span title='" + d[M] + "'>" + p[M] + "</span></th>";
                    for (T += P + "</tr></thead><tbody>", S = this._getDaysInMonth(tt, Z), tt === t.selectedYear && Z === t.selectedMonth && (t.selectedDay = Math.min(t.selectedDay, S)), z = (this._getFirstDayOfMonth(tt, Z) - u + 7) % 7, H = Math.ceil((z + S) / 7), A = $ && this.maxRows > H ? this.maxRows : H, this.maxRows = A, N = this._daylightSavingAdjust(new Date(tt, Z, 1 - z)), E = 0; A > E; E++) {
                        for (T += "<tr>", W = c ? "<td class='ui-datepicker-week-col'>" + this._get(t, "calculateWeek")(N) + "</td>" : "", w = 0; 7 > w; w++) O = g ? g.apply(t.input ? t.input[0] : null, [N]) : [!0, ""], F = N.getMonth() !== Z, R = F && !_ || !O[0] || Q && Q > N || J && N > J, W += "<td class='" + ((w + u + 6) % 7 >= 5 ? " ui-datepicker-week-end" : "") + (F ? " ui-datepicker-other-month" : "") + (N.getTime() === D.getTime() && Z === t.selectedMonth && t._keyEvent || b.getTime() === N.getTime() && b.getTime() === D.getTime() ? " " + this._dayOverClass : "") + (R ? " " + this._unselectableClass + " ui-state-disabled" : "") + (F && !v ? "" : " " + O[1] + (N.getTime() === G.getTime() ? " " + this._currentClass : "") + (N.getTime() === Y.getTime() ? " ui-datepicker-today" : "")) + "'" + (F && !v || !O[2] ? "" : " title='" + O[2].replace(/'/g, "&#39;") + "'") + (R ? "" : " data-handler='selectDay' data-event='click' data-month='" + N.getMonth() + "' data-year='" + N.getFullYear() + "'") + ">" + (F && !v ? "&#xa0;" : R ? "<span class='ui-state-default'>" + N.getDate() + "</span>" : "<a class='ui-state-default" + (N.getTime() === Y.getTime() ? " ui-state-highlight" : "") + (N.getTime() === G.getTime() ? " ui-state-active" : "") + (F ? " ui-priority-secondary" : "") + "' href='#'>" + N.getDate() + "</a>") + "</td>", N.setDate(N.getDate() + 1), N = this._daylightSavingAdjust(N);
                        T += W + "</tr>"
                    }
                    Z++, Z > 11 && (Z = 0, tt++), T += "</tbody></table>" + ($ ? "</div>" + (U[0] > 0 && C === U[1] - 1 ? "<div class='ui-datepicker-row-break'></div>" : "") : ""), k += T
                }
                y += k
            }
            return y += l, t._keyEvent = !1, y
        },
        _generateMonthYearHeader: function(t, e, i, s, n, o, a, r) {
            var h, l, u, c, d, p, f, m, g = this._get(t, "changeMonth"),
                v = this._get(t, "changeYear"),
                _ = this._get(t, "showMonthAfterYear"),
                b = "<div class='ui-datepicker-title'>",
                y = "";
            if (o || !g) y += "<span class='ui-datepicker-month'>" + a[e] + "</span>";
            else {
                for (h = s && s.getFullYear() === i, l = n && n.getFullYear() === i, y += "<select class='ui-datepicker-month' data-handler='selectMonth' data-event='change'>", u = 0; 12 > u; u++)(!h || u >= s.getMonth()) && (!l || u <= n.getMonth()) && (y += "<option value='" + u + "'" + (u === e ? " selected='selected'" : "") + ">" + r[u] + "</option>");
                y += "</select>"
            }
            if (_ || (b += y + (!o && g && v ? "" : "&#xa0;")), !t.yearshtml)
                if (t.yearshtml = "", o || !v) b += "<span class='ui-datepicker-year'>" + i + "</span>";
                else {
                    for (c = this._get(t, "yearRange").split(":"), d = (new Date).getFullYear(), p = function(t) {
                            var e = t.match(/c[+\-].*/) ? i + parseInt(t.substring(1), 10) : t.match(/[+\-].*/) ? d + parseInt(t, 10) : parseInt(t, 10);
                            return isNaN(e) ? d : e
                        }, f = p(c[0]), m = Math.max(f, p(c[1] || "")), f = s ? Math.max(f, s.getFullYear()) : f, m = n ? Math.min(m, n.getFullYear()) : m, t.yearshtml += "<select class='ui-datepicker-year' data-handler='selectYear' data-event='change'>"; m >= f; f++) t.yearshtml += "<option value='" + f + "'" + (f === i ? " selected='selected'" : "") + ">" + f + "</option>";
                    t.yearshtml += "</select>", b += t.yearshtml, t.yearshtml = null
                }
            return b += this._get(t, "yearSuffix"), _ && (b += (!o && g && v ? "" : "&#xa0;") + y), b += "</div>"
        },
        _adjustInstDate: function(t, e, i) {
            var s = t.drawYear + ("Y" === i ? e : 0),
                n = t.drawMonth + ("M" === i ? e : 0),
                o = Math.min(t.selectedDay, this._getDaysInMonth(s, n)) + ("D" === i ? e : 0),
                a = this._restrictMinMax(t, this._daylightSavingAdjust(new Date(s, n, o)));
            t.selectedDay = a.getDate(), t.drawMonth = t.selectedMonth = a.getMonth(), t.drawYear = t.selectedYear = a.getFullYear(), ("M" === i || "Y" === i) && this._notifyChange(t)
        },
        _restrictMinMax: function(t, e) {
            var i = this._getMinMaxDate(t, "min"),
                s = this._getMinMaxDate(t, "max"),
                n = i && i > e ? i : e;
            return s && n > s ? s : n
        },
        _notifyChange: function(t) {
            var e = this._get(t, "onChangeMonthYear");
            e && e.apply(t.input ? t.input[0] : null, [t.selectedYear, t.selectedMonth + 1, t])
        },
        _getNumberOfMonths: function(t) {
            var e = this._get(t, "numberOfMonths");
            return null == e ? [1, 1] : "number" == typeof e ? [1, e] : e
        },
        _getMinMaxDate: function(t, e) {
            return this._determineDate(t, this._get(t, e + "Date"), null)
        },
        _getDaysInMonth: function(t, e) {
            return 32 - this._daylightSavingAdjust(new Date(t, e, 32)).getDate()
        },
        _getFirstDayOfMonth: function(t, e) {
            return new Date(t, e, 1).getDay()
        },
        _canAdjustMonth: function(t, e, i, s) {
            var n = this._getNumberOfMonths(t),
                o = this._daylightSavingAdjust(new Date(i, s + (0 > e ? e : n[0] * n[1]), 1));
            return 0 > e && o.setDate(this._getDaysInMonth(o.getFullYear(), o.getMonth())), this._isInRange(t, o)
        },
        _isInRange: function(t, e) {
            var i, s, n = this._getMinMaxDate(t, "min"),
                o = this._getMinMaxDate(t, "max"),
                a = null,
                r = null,
                h = this._get(t, "yearRange");
            return h && (i = h.split(":"), s = (new Date).getFullYear(), a = parseInt(i[0], 10), r = parseInt(i[1], 10), i[0].match(/[+\-].*/) && (a += s), i[1].match(/[+\-].*/) && (r += s)), (!n || e.getTime() >= n.getTime()) && (!o || e.getTime() <= o.getTime()) && (!a || e.getFullYear() >= a) && (!r || e.getFullYear() <= r)
        },
        _getFormatConfig: function(t) {
            var e = this._get(t, "shortYearCutoff");
            return e = "string" != typeof e ? e : (new Date).getFullYear() % 100 + parseInt(e, 10), {
                shortYearCutoff: e,
                dayNamesShort: this._get(t, "dayNamesShort"),
                dayNames: this._get(t, "dayNames"),
                monthNamesShort: this._get(t, "monthNamesShort"),
                monthNames: this._get(t, "monthNames")
            }
        },
        _formatDate: function(t, e, i, s) {
            e || (t.currentDay = t.selectedDay, t.currentMonth = t.selectedMonth, t.currentYear = t.selectedYear);
            var n = e ? "object" == typeof e ? e : this._daylightSavingAdjust(new Date(s, i, e)) : this._daylightSavingAdjust(new Date(t.currentYear, t.currentMonth, t.currentDay));
            return this.formatDate(this._get(t, "dateFormat"), n, this._getFormatConfig(t))
        }
    }), t.fn.datepicker = function(e) {
        if (!this.length) return this;
        t.datepicker.initialized || (t(document).mousedown(t.datepicker._checkExternalClick), t.datepicker.initialized = !0), 0 === t("#" + t.datepicker._mainDivId).length && t("body").append(t.datepicker.dpDiv);
        var i = Array.prototype.slice.call(arguments, 1);
        return "string" != typeof e || "isDisabled" !== e && "getDate" !== e && "widget" !== e ? "option" === e && 2 === arguments.length && "string" == typeof arguments[1] ? t.datepicker["_" + e + "Datepicker"].apply(t.datepicker, [this[0]].concat(i)) : this.each(function() {
            "string" == typeof e ? t.datepicker["_" + e + "Datepicker"].apply(t.datepicker, [this].concat(i)) : t.datepicker._attachDatepicker(this, e)
        }) : t.datepicker["_" + e + "Datepicker"].apply(t.datepicker, [this[0]].concat(i))
    }, t.datepicker = new n, t.datepicker.initialized = !1, t.datepicker.uuid = (new Date).getTime(), t.datepicker.version = "1.11.4";
    t.datepicker;
    t.widget("ui.draggable", t.ui.mouse, {
        version: "1.11.4",
        widgetEventPrefix: "drag",
        options: {
            addClasses: !0,
            appendTo: "parent",
            axis: !1,
            connectToSortable: !1,
            containment: !1,
            cursor: "auto",
            cursorAt: !1,
            grid: !1,
            handle: !1,
            helper: "original",
            iframeFix: !1,
            opacity: !1,
            refreshPositions: !1,
            revert: !1,
            revertDuration: 500,
            scope: "default",
            scroll: !0,
            scrollSensitivity: 20,
            scrollSpeed: 20,
            snap: !1,
            snapMode: "both",
            snapTolerance: 20,
            stack: !1,
            zIndex: !1,
            drag: null,
            start: null,
            stop: null
        },
        _create: function() {
            "original" === this.options.helper && this._setPositionRelative(), this.options.addClasses && this.element.addClass("ui-draggable"), this.options.disabled && this.element.addClass("ui-draggable-disabled"), this._setHandleClassName(), this._mouseInit()
        },
        _setOption: function(t, e) {
            this._super(t, e), "handle" === t && (this._removeHandleClassName(), this._setHandleClassName())
        },
        _destroy: function() {
            return (this.helper || this.element).is(".ui-draggable-dragging") ? void(this.destroyOnClear = !0) : (this.element.removeClass("ui-draggable ui-draggable-dragging ui-draggable-disabled"), this._removeHandleClassName(), void this._mouseDestroy())
        },
        _mouseCapture: function(e) {
            var i = this.options;
            return this._blurActiveElement(e), this.helper || i.disabled || t(e.target).closest(".ui-resizable-handle").length > 0 ? !1 : (this.handle = this._getHandle(e), this.handle ? (this._blockFrames(i.iframeFix === !0 ? "iframe" : i.iframeFix), !0) : !1)
        },
        _blockFrames: function(e) {
            this.iframeBlocks = this.document.find(e).map(function() {
                var e = t(this);
                return t("<div>").css("position", "absolute").appendTo(e.parent()).outerWidth(e.outerWidth()).outerHeight(e.outerHeight()).offset(e.offset())[0]
            })
        },
        _unblockFrames: function() {
            this.iframeBlocks && (this.iframeBlocks.remove(), delete this.iframeBlocks)
        },
        _blurActiveElement: function(e) {
            var i = this.document[0];
            if (this.handleElement.is(e.target)) try {
                i.activeElement && "body" !== i.activeElement.nodeName.toLowerCase() && t(i.activeElement).blur()
            } catch (s) {}
        },
        _mouseStart: function(e) {
            var i = this.options;
            return this.helper = this._createHelper(e), this.helper.addClass("ui-draggable-dragging"), this._cacheHelperProportions(), t.ui.ddmanager && (t.ui.ddmanager.current = this), this._cacheMargins(), this.cssPosition = this.helper.css("position"), this.scrollParent = this.helper.scrollParent(!0), this.offsetParent = this.helper.offsetParent(), this.hasFixedAncestor = this.helper.parents().filter(function() {
                return "fixed" === t(this).css("position")
            }).length > 0, this.positionAbs = this.element.offset(), this._refreshOffsets(e), this.originalPosition = this.position = this._generatePosition(e, !1), this.originalPageX = e.pageX, this.originalPageY = e.pageY, i.cursorAt && this._adjustOffsetFromHelper(i.cursorAt), this._setContainment(), this._trigger("start", e) === !1 ? (this._clear(), !1) : (this._cacheHelperProportions(), t.ui.ddmanager && !i.dropBehaviour && t.ui.ddmanager.prepareOffsets(this, e), this._normalizeRightBottom(), this._mouseDrag(e, !0), t.ui.ddmanager && t.ui.ddmanager.dragStart(this, e), !0)
        },
        _refreshOffsets: function(t) {
            this.offset = {
                top: this.positionAbs.top - this.margins.top,
                left: this.positionAbs.left - this.margins.left,
                scroll: !1,
                parent: this._getParentOffset(),
                relative: this._getRelativeOffset()
            }, this.offset.click = {
                left: t.pageX - this.offset.left,
                top: t.pageY - this.offset.top
            }
        },
        _mouseDrag: function(e, i) {
            if (this.hasFixedAncestor && (this.offset.parent = this._getParentOffset()), this.position = this._generatePosition(e, !0), this.positionAbs = this._convertPositionTo("absolute"), !i) {
                var s = this._uiHash();
                if (this._trigger("drag", e, s) === !1) return this._mouseUp({}), !1;
                this.position = s.position
            }
            return this.helper[0].style.left = this.position.left + "px", this.helper[0].style.top = this.position.top + "px", t.ui.ddmanager && t.ui.ddmanager.drag(this, e), !1
        },
        _mouseStop: function(e) {
            var i = this,
                s = !1;
            return t.ui.ddmanager && !this.options.dropBehaviour && (s = t.ui.ddmanager.drop(this, e)), this.dropped && (s = this.dropped, this.dropped = !1), "invalid" === this.options.revert && !s || "valid" === this.options.revert && s || this.options.revert === !0 || t.isFunction(this.options.revert) && this.options.revert.call(this.element, s) ? t(this.helper).animate(this.originalPosition, parseInt(this.options.revertDuration, 10), function() {
                i._trigger("stop", e) !== !1 && i._clear()
            }) : this._trigger("stop", e) !== !1 && this._clear(), !1
        },
        _mouseUp: function(e) {
            return this._unblockFrames(), t.ui.ddmanager && t.ui.ddmanager.dragStop(this, e), this.handleElement.is(e.target) && this.element.focus(), t.ui.mouse.prototype._mouseUp.call(this, e)
        },
        cancel: function() {
            return this.helper.is(".ui-draggable-dragging") ? this._mouseUp({}) : this._clear(), this
        },
        _getHandle: function(e) {
            return this.options.handle ? !!t(e.target).closest(this.element.find(this.options.handle)).length : !0
        },
        _setHandleClassName: function() {
            this.handleElement = this.options.handle ? this.element.find(this.options.handle) : this.element, this.handleElement.addClass("ui-draggable-handle")
        },
        _removeHandleClassName: function() {
            this.handleElement.removeClass("ui-draggable-handle")
        },
        _createHelper: function(e) {
            var i = this.options,
                s = t.isFunction(i.helper),
                n = s ? t(i.helper.apply(this.element[0], [e])) : "clone" === i.helper ? this.element.clone().removeAttr("id") : this.element;
            return n.parents("body").length || n.appendTo("parent" === i.appendTo ? this.element[0].parentNode : i.appendTo), s && n[0] === this.element[0] && this._setPositionRelative(), n[0] === this.element[0] || /(fixed|absolute)/.test(n.css("position")) || n.css("position", "absolute"), n
        },
        _setPositionRelative: function() {
            /^(?:r|a|f)/.test(this.element.css("position")) || (this.element[0].style.position = "relative")
        },
        _adjustOffsetFromHelper: function(e) {
            "string" == typeof e && (e = e.split(" ")), t.isArray(e) && (e = {
                left: +e[0],
                top: +e[1] || 0
            }), "left" in e && (this.offset.click.left = e.left + this.margins.left), "right" in e && (this.offset.click.left = this.helperProportions.width - e.right + this.margins.left), "top" in e && (this.offset.click.top = e.top + this.margins.top), "bottom" in e && (this.offset.click.top = this.helperProportions.height - e.bottom + this.margins.top)
        },
        _isRootNode: function(t) {
            return /(html|body)/i.test(t.tagName) || t === this.document[0]
        },
        _getParentOffset: function() {
            var e = this.offsetParent.offset(),
                i = this.document[0];
            return "absolute" === this.cssPosition && this.scrollParent[0] !== i && t.contains(this.scrollParent[0], this.offsetParent[0]) && (e.left += this.scrollParent.scrollLeft(), e.top += this.scrollParent.scrollTop()), this._isRootNode(this.offsetParent[0]) && (e = {
                top: 0,
                left: 0
            }), {
                top: e.top + (parseInt(this.offsetParent.css("borderTopWidth"), 10) || 0),
                left: e.left + (parseInt(this.offsetParent.css("borderLeftWidth"), 10) || 0)
            }
        },
        _getRelativeOffset: function() {
            if ("relative" !== this.cssPosition) return {
                top: 0,
                left: 0
            };
            var t = this.element.position(),
                e = this._isRootNode(this.scrollParent[0]);
            return {
                top: t.top - (parseInt(this.helper.css("top"), 10) || 0) + (e ? 0 : this.scrollParent.scrollTop()),
                left: t.left - (parseInt(this.helper.css("left"), 10) || 0) + (e ? 0 : this.scrollParent.scrollLeft())
            }
        },
        _cacheMargins: function() {
            this.margins = {
                left: parseInt(this.element.css("marginLeft"), 10) || 0,
                top: parseInt(this.element.css("marginTop"), 10) || 0,
                right: parseInt(this.element.css("marginRight"), 10) || 0,
                bottom: parseInt(this.element.css("marginBottom"), 10) || 0
            }
        },
        _cacheHelperProportions: function() {
            this.helperProportions = {
                width: this.helper.outerWidth(),
                height: this.helper.outerHeight()
            }
        },
        _setContainment: function() {
            var e, i, s, n = this.options,
                o = this.document[0];
            return this.relativeContainer = null, n.containment ? "window" === n.containment ? void(this.containment = [t(window).scrollLeft() - this.offset.relative.left - this.offset.parent.left, t(window).scrollTop() - this.offset.relative.top - this.offset.parent.top, t(window).scrollLeft() + t(window).width() - this.helperProportions.width - this.margins.left, t(window).scrollTop() + (t(window).height() || o.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top]) : "document" === n.containment ? void(this.containment = [0, 0, t(o).width() - this.helperProportions.width - this.margins.left, (t(o).height() || o.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top]) : n.containment.constructor === Array ? void(this.containment = n.containment) : ("parent" === n.containment && (n.containment = this.helper[0].parentNode),
                i = t(n.containment), s = i[0], void(s && (e = /(scroll|auto)/.test(i.css("overflow")), this.containment = [(parseInt(i.css("borderLeftWidth"), 10) || 0) + (parseInt(i.css("paddingLeft"), 10) || 0), (parseInt(i.css("borderTopWidth"), 10) || 0) + (parseInt(i.css("paddingTop"), 10) || 0), (e ? Math.max(s.scrollWidth, s.offsetWidth) : s.offsetWidth) - (parseInt(i.css("borderRightWidth"), 10) || 0) - (parseInt(i.css("paddingRight"), 10) || 0) - this.helperProportions.width - this.margins.left - this.margins.right, (e ? Math.max(s.scrollHeight, s.offsetHeight) : s.offsetHeight) - (parseInt(i.css("borderBottomWidth"), 10) || 0) - (parseInt(i.css("paddingBottom"), 10) || 0) - this.helperProportions.height - this.margins.top - this.margins.bottom], this.relativeContainer = i))) : void(this.containment = null)
        },
        _convertPositionTo: function(t, e) {
            e || (e = this.position);
            var i = "absolute" === t ? 1 : -1,
                s = this._isRootNode(this.scrollParent[0]);
            return {
                top: e.top + this.offset.relative.top * i + this.offset.parent.top * i - ("fixed" === this.cssPosition ? -this.offset.scroll.top : s ? 0 : this.offset.scroll.top) * i,
                left: e.left + this.offset.relative.left * i + this.offset.parent.left * i - ("fixed" === this.cssPosition ? -this.offset.scroll.left : s ? 0 : this.offset.scroll.left) * i
            }
        },
        _generatePosition: function(t, e) {
            var i, s, n, o, a = this.options,
                r = this._isRootNode(this.scrollParent[0]),
                h = t.pageX,
                l = t.pageY;
            return r && this.offset.scroll || (this.offset.scroll = {
                top: this.scrollParent.scrollTop(),
                left: this.scrollParent.scrollLeft()
            }), e && (this.containment && (this.relativeContainer ? (s = this.relativeContainer.offset(), i = [this.containment[0] + s.left, this.containment[1] + s.top, this.containment[2] + s.left, this.containment[3] + s.top]) : i = this.containment, t.pageX - this.offset.click.left < i[0] && (h = i[0] + this.offset.click.left), t.pageY - this.offset.click.top < i[1] && (l = i[1] + this.offset.click.top), t.pageX - this.offset.click.left > i[2] && (h = i[2] + this.offset.click.left), t.pageY - this.offset.click.top > i[3] && (l = i[3] + this.offset.click.top)), a.grid && (n = a.grid[1] ? this.originalPageY + Math.round((l - this.originalPageY) / a.grid[1]) * a.grid[1] : this.originalPageY, l = i ? n - this.offset.click.top >= i[1] || n - this.offset.click.top > i[3] ? n : n - this.offset.click.top >= i[1] ? n - a.grid[1] : n + a.grid[1] : n, o = a.grid[0] ? this.originalPageX + Math.round((h - this.originalPageX) / a.grid[0]) * a.grid[0] : this.originalPageX, h = i ? o - this.offset.click.left >= i[0] || o - this.offset.click.left > i[2] ? o : o - this.offset.click.left >= i[0] ? o - a.grid[0] : o + a.grid[0] : o), "y" === a.axis && (h = this.originalPageX), "x" === a.axis && (l = this.originalPageY)), {
                top: l - this.offset.click.top - this.offset.relative.top - this.offset.parent.top + ("fixed" === this.cssPosition ? -this.offset.scroll.top : r ? 0 : this.offset.scroll.top),
                left: h - this.offset.click.left - this.offset.relative.left - this.offset.parent.left + ("fixed" === this.cssPosition ? -this.offset.scroll.left : r ? 0 : this.offset.scroll.left)
            }
        },
        _clear: function() {
            this.helper.removeClass("ui-draggable-dragging"), this.helper[0] === this.element[0] || this.cancelHelperRemoval || this.helper.remove(), this.helper = null, this.cancelHelperRemoval = !1, this.destroyOnClear && this.destroy()
        },
        _normalizeRightBottom: function() {
            "y" !== this.options.axis && "auto" !== this.helper.css("right") && (this.helper.width(this.helper.width()), this.helper.css("right", "auto")), "x" !== this.options.axis && "auto" !== this.helper.css("bottom") && (this.helper.height(this.helper.height()), this.helper.css("bottom", "auto"))
        },
        _trigger: function(e, i, s) {
            return s = s || this._uiHash(), t.ui.plugin.call(this, e, [i, s, this], !0), /^(drag|start|stop)/.test(e) && (this.positionAbs = this._convertPositionTo("absolute"), s.offset = this.positionAbs), t.Widget.prototype._trigger.call(this, e, i, s)
        },
        plugins: {},
        _uiHash: function() {
            return {
                helper: this.helper,
                position: this.position,
                originalPosition: this.originalPosition,
                offset: this.positionAbs
            }
        }
    }), t.ui.plugin.add("draggable", "connectToSortable", {
        start: function(e, i, s) {
            var n = t.extend({}, i, {
                item: s.element
            });
            s.sortables = [], t(s.options.connectToSortable).each(function() {
                var i = t(this).sortable("instance");
                i && !i.options.disabled && (s.sortables.push(i), i.refreshPositions(), i._trigger("activate", e, n))
            })
        },
        stop: function(e, i, s) {
            var n = t.extend({}, i, {
                item: s.element
            });
            s.cancelHelperRemoval = !1, t.each(s.sortables, function() {
                var t = this;
                t.isOver ? (t.isOver = 0, s.cancelHelperRemoval = !0, t.cancelHelperRemoval = !1, t._storedCSS = {
                    position: t.placeholder.css("position"),
                    top: t.placeholder.css("top"),
                    left: t.placeholder.css("left")
                }, t._mouseStop(e), t.options.helper = t.options._helper) : (t.cancelHelperRemoval = !0, t._trigger("deactivate", e, n))
            })
        },
        drag: function(e, i, s) {
            t.each(s.sortables, function() {
                var n = !1,
                    o = this;
                o.positionAbs = s.positionAbs, o.helperProportions = s.helperProportions, o.offset.click = s.offset.click, o._intersectsWith(o.containerCache) && (n = !0, t.each(s.sortables, function() {
                    return this.positionAbs = s.positionAbs, this.helperProportions = s.helperProportions, this.offset.click = s.offset.click, this !== o && this._intersectsWith(this.containerCache) && t.contains(o.element[0], this.element[0]) && (n = !1), n
                })), n ? (o.isOver || (o.isOver = 1, s._parent = i.helper.parent(), o.currentItem = i.helper.appendTo(o.element).data("ui-sortable-item", !0), o.options._helper = o.options.helper, o.options.helper = function() {
                    return i.helper[0]
                }, e.target = o.currentItem[0], o._mouseCapture(e, !0), o._mouseStart(e, !0, !0), o.offset.click.top = s.offset.click.top, o.offset.click.left = s.offset.click.left, o.offset.parent.left -= s.offset.parent.left - o.offset.parent.left, o.offset.parent.top -= s.offset.parent.top - o.offset.parent.top, s._trigger("toSortable", e), s.dropped = o.element, t.each(s.sortables, function() {
                    this.refreshPositions()
                }), s.currentItem = s.element, o.fromOutside = s), o.currentItem && (o._mouseDrag(e), i.position = o.position)) : o.isOver && (o.isOver = 0, o.cancelHelperRemoval = !0, o.options._revert = o.options.revert, o.options.revert = !1, o._trigger("out", e, o._uiHash(o)), o._mouseStop(e, !0), o.options.revert = o.options._revert, o.options.helper = o.options._helper, o.placeholder && o.placeholder.remove(), i.helper.appendTo(s._parent), s._refreshOffsets(e), i.position = s._generatePosition(e, !0), s._trigger("fromSortable", e), s.dropped = !1, t.each(s.sortables, function() {
                    this.refreshPositions()
                }))
            })
        }
    }), t.ui.plugin.add("draggable", "cursor", {
        start: function(e, i, s) {
            var n = t("body"),
                o = s.options;
            n.css("cursor") && (o._cursor = n.css("cursor")), n.css("cursor", o.cursor)
        },
        stop: function(e, i, s) {
            var n = s.options;
            n._cursor && t("body").css("cursor", n._cursor)
        }
    }), t.ui.plugin.add("draggable", "opacity", {
        start: function(e, i, s) {
            var n = t(i.helper),
                o = s.options;
            n.css("opacity") && (o._opacity = n.css("opacity")), n.css("opacity", o.opacity)
        },
        stop: function(e, i, s) {
            var n = s.options;
            n._opacity && t(i.helper).css("opacity", n._opacity)
        }
    }), t.ui.plugin.add("draggable", "scroll", {
        start: function(t, e, i) {
            i.scrollParentNotHidden || (i.scrollParentNotHidden = i.helper.scrollParent(!1)), i.scrollParentNotHidden[0] !== i.document[0] && "HTML" !== i.scrollParentNotHidden[0].tagName && (i.overflowOffset = i.scrollParentNotHidden.offset())
        },
        drag: function(e, i, s) {
            var n = s.options,
                o = !1,
                a = s.scrollParentNotHidden[0],
                r = s.document[0];
            a !== r && "HTML" !== a.tagName ? (n.axis && "x" === n.axis || (s.overflowOffset.top + a.offsetHeight - e.pageY < n.scrollSensitivity ? a.scrollTop = o = a.scrollTop + n.scrollSpeed : e.pageY - s.overflowOffset.top < n.scrollSensitivity && (a.scrollTop = o = a.scrollTop - n.scrollSpeed)), n.axis && "y" === n.axis || (s.overflowOffset.left + a.offsetWidth - e.pageX < n.scrollSensitivity ? a.scrollLeft = o = a.scrollLeft + n.scrollSpeed : e.pageX - s.overflowOffset.left < n.scrollSensitivity && (a.scrollLeft = o = a.scrollLeft - n.scrollSpeed))) : (n.axis && "x" === n.axis || (e.pageY - t(r).scrollTop() < n.scrollSensitivity ? o = t(r).scrollTop(t(r).scrollTop() - n.scrollSpeed) : t(window).height() - (e.pageY - t(r).scrollTop()) < n.scrollSensitivity && (o = t(r).scrollTop(t(r).scrollTop() + n.scrollSpeed))), n.axis && "y" === n.axis || (e.pageX - t(r).scrollLeft() < n.scrollSensitivity ? o = t(r).scrollLeft(t(r).scrollLeft() - n.scrollSpeed) : t(window).width() - (e.pageX - t(r).scrollLeft()) < n.scrollSensitivity && (o = t(r).scrollLeft(t(r).scrollLeft() + n.scrollSpeed)))), o !== !1 && t.ui.ddmanager && !n.dropBehaviour && t.ui.ddmanager.prepareOffsets(s, e)
        }
    }), t.ui.plugin.add("draggable", "snap", {
        start: function(e, i, s) {
            var n = s.options;
            s.snapElements = [], t(n.snap.constructor !== String ? n.snap.items || ":data(ui-draggable)" : n.snap).each(function() {
                var e = t(this),
                    i = e.offset();
                this !== s.element[0] && s.snapElements.push({
                    item: this,
                    width: e.outerWidth(),
                    height: e.outerHeight(),
                    top: i.top,
                    left: i.left
                })
            })
        },
        drag: function(e, i, s) {
            var n, o, a, r, h, l, u, c, d, p, f = s.options,
                m = f.snapTolerance,
                g = i.offset.left,
                v = g + s.helperProportions.width,
                _ = i.offset.top,
                b = _ + s.helperProportions.height;
            for (d = s.snapElements.length - 1; d >= 0; d--) h = s.snapElements[d].left - s.margins.left, l = h + s.snapElements[d].width, u = s.snapElements[d].top - s.margins.top, c = u + s.snapElements[d].height, h - m > v || g > l + m || u - m > b || _ > c + m || !t.contains(s.snapElements[d].item.ownerDocument, s.snapElements[d].item) ? (s.snapElements[d].snapping && s.options.snap.release && s.options.snap.release.call(s.element, e, t.extend(s._uiHash(), {
                snapItem: s.snapElements[d].item
            })), s.snapElements[d].snapping = !1) : ("inner" !== f.snapMode && (n = Math.abs(u - b) <= m, o = Math.abs(c - _) <= m, a = Math.abs(h - v) <= m, r = Math.abs(l - g) <= m, n && (i.position.top = s._convertPositionTo("relative", {
                top: u - s.helperProportions.height,
                left: 0
            }).top), o && (i.position.top = s._convertPositionTo("relative", {
                top: c,
                left: 0
            }).top), a && (i.position.left = s._convertPositionTo("relative", {
                top: 0,
                left: h - s.helperProportions.width
            }).left), r && (i.position.left = s._convertPositionTo("relative", {
                top: 0,
                left: l
            }).left)), p = n || o || a || r, "outer" !== f.snapMode && (n = Math.abs(u - _) <= m, o = Math.abs(c - b) <= m, a = Math.abs(h - g) <= m, r = Math.abs(l - v) <= m, n && (i.position.top = s._convertPositionTo("relative", {
                top: u,
                left: 0
            }).top), o && (i.position.top = s._convertPositionTo("relative", {
                top: c - s.helperProportions.height,
                left: 0
            }).top), a && (i.position.left = s._convertPositionTo("relative", {
                top: 0,
                left: h
            }).left), r && (i.position.left = s._convertPositionTo("relative", {
                top: 0,
                left: l - s.helperProportions.width
            }).left)), !s.snapElements[d].snapping && (n || o || a || r || p) && s.options.snap.snap && s.options.snap.snap.call(s.element, e, t.extend(s._uiHash(), {
                snapItem: s.snapElements[d].item
            })), s.snapElements[d].snapping = n || o || a || r || p)
        }
    }), t.ui.plugin.add("draggable", "stack", {
        start: function(e, i, s) {
            var n, o = s.options,
                a = t.makeArray(t(o.stack)).sort(function(e, i) {
                    return (parseInt(t(e).css("zIndex"), 10) || 0) - (parseInt(t(i).css("zIndex"), 10) || 0)
                });
            a.length && (n = parseInt(t(a[0]).css("zIndex"), 10) || 0, t(a).each(function(e) {
                t(this).css("zIndex", n + e)
            }), this.css("zIndex", n + a.length))
        }
    }), t.ui.plugin.add("draggable", "zIndex", {
        start: function(e, i, s) {
            var n = t(i.helper),
                o = s.options;
            n.css("zIndex") && (o._zIndex = n.css("zIndex")), n.css("zIndex", o.zIndex)
        },
        stop: function(e, i, s) {
            var n = s.options;
            n._zIndex && t(i.helper).css("zIndex", n._zIndex)
        }
    });
    t.ui.draggable;
    t.widget("ui.resizable", t.ui.mouse, {
        version: "1.11.4",
        widgetEventPrefix: "resize",
        options: {
            alsoResize: !1,
            animate: !1,
            animateDuration: "slow",
            animateEasing: "swing",
            aspectRatio: !1,
            autoHide: !1,
            containment: !1,
            ghost: !1,
            grid: !1,
            handles: "e,s,se",
            helper: !1,
            maxHeight: null,
            maxWidth: null,
            minHeight: 10,
            minWidth: 10,
            zIndex: 90,
            resize: null,
            start: null,
            stop: null
        },
        _num: function(t) {
            return parseInt(t, 10) || 0
        },
        _isNumber: function(t) {
            return !isNaN(parseInt(t, 10))
        },
        _hasScroll: function(e, i) {
            if ("hidden" === t(e).css("overflow")) return !1;
            var s = i && "left" === i ? "scrollLeft" : "scrollTop",
                n = !1;
            return e[s] > 0 ? !0 : (e[s] = 1, n = e[s] > 0, e[s] = 0, n)
        },
        _create: function() {
            var e, i, s, n, o, a = this,
                r = this.options;
            if (this.element.addClass("ui-resizable"), t.extend(this, {
                    _aspectRatio: !!r.aspectRatio,
                    aspectRatio: r.aspectRatio,
                    originalElement: this.element,
                    _proportionallyResizeElements: [],
                    _helper: r.helper || r.ghost || r.animate ? r.helper || "ui-resizable-helper" : null
                }), this.element[0].nodeName.match(/^(canvas|textarea|input|select|button|img)$/i) && (this.element.wrap(t("<div class='ui-wrapper' style='overflow: hidden;'></div>").css({
                    position: this.element.css("position"),
                    width: this.element.outerWidth(),
                    height: this.element.outerHeight(),
                    top: this.element.css("top"),
                    left: this.element.css("left")
                })), this.element = this.element.parent().data("ui-resizable", this.element.resizable("instance")), this.elementIsWrapper = !0, this.element.css({
                    marginLeft: this.originalElement.css("marginLeft"),
                    marginTop: this.originalElement.css("marginTop"),
                    marginRight: this.originalElement.css("marginRight"),
                    marginBottom: this.originalElement.css("marginBottom")
                }), this.originalElement.css({
                    marginLeft: 0,
                    marginTop: 0,
                    marginRight: 0,
                    marginBottom: 0
                }), this.originalResizeStyle = this.originalElement.css("resize"), this.originalElement.css("resize", "none"), this._proportionallyResizeElements.push(this.originalElement.css({
                    position: "static",
                    zoom: 1,
                    display: "block"
                })), this.originalElement.css({
                    margin: this.originalElement.css("margin")
                }), this._proportionallyResize()), this.handles = r.handles || (t(".ui-resizable-handle", this.element).length ? {
                    n: ".ui-resizable-n",
                    e: ".ui-resizable-e",
                    s: ".ui-resizable-s",
                    w: ".ui-resizable-w",
                    se: ".ui-resizable-se",
                    sw: ".ui-resizable-sw",
                    ne: ".ui-resizable-ne",
                    nw: ".ui-resizable-nw"
                } : "e,s,se"), this._handles = t(), this.handles.constructor === String)
                for ("all" === this.handles && (this.handles = "n,e,s,w,se,sw,ne,nw"), e = this.handles.split(","), this.handles = {}, i = 0; i < e.length; i++) s = t.trim(e[i]), o = "ui-resizable-" + s, n = t("<div class='ui-resizable-handle " + o + "'></div>"), n.css({
                    zIndex: r.zIndex
                }), "se" === s && n.addClass("ui-icon ui-icon-gripsmall-diagonal-se"), this.handles[s] = ".ui-resizable-" + s, this.element.append(n);
            this._renderAxis = function(e) {
                var i, s, n, o;
                e = e || this.element;
                for (i in this.handles) this.handles[i].constructor === String ? this.handles[i] = this.element.children(this.handles[i]).first().show() : (this.handles[i].jquery || this.handles[i].nodeType) && (this.handles[i] = t(this.handles[i]), this._on(this.handles[i], {
                    mousedown: a._mouseDown
                })), this.elementIsWrapper && this.originalElement[0].nodeName.match(/^(textarea|input|select|button)$/i) && (s = t(this.handles[i], this.element), o = /sw|ne|nw|se|n|s/.test(i) ? s.outerHeight() : s.outerWidth(), n = ["padding", /ne|nw|n/.test(i) ? "Top" : /se|sw|s/.test(i) ? "Bottom" : /^e$/.test(i) ? "Right" : "Left"].join(""), e.css(n, o), this._proportionallyResize()), this._handles = this._handles.add(this.handles[i])
            }, this._renderAxis(this.element), this._handles = this._handles.add(this.element.find(".ui-resizable-handle")), this._handles.disableSelection(), this._handles.mouseover(function() {
                a.resizing || (this.className && (n = this.className.match(/ui-resizable-(se|sw|ne|nw|n|e|s|w)/i)), a.axis = n && n[1] ? n[1] : "se")
            }), r.autoHide && (this._handles.hide(), t(this.element).addClass("ui-resizable-autohide").mouseenter(function() {
                r.disabled || (t(this).removeClass("ui-resizable-autohide"), a._handles.show())
            }).mouseleave(function() {
                r.disabled || a.resizing || (t(this).addClass("ui-resizable-autohide"), a._handles.hide())
            })), this._mouseInit()
        },
        _destroy: function() {
            this._mouseDestroy();
            var e, i = function(e) {
                t(e).removeClass("ui-resizable ui-resizable-disabled ui-resizable-resizing").removeData("resizable").removeData("ui-resizable").unbind(".resizable").find(".ui-resizable-handle").remove()
            };
            return this.elementIsWrapper && (i(this.element), e = this.element, this.originalElement.css({
                position: e.css("position"),
                width: e.outerWidth(),
                height: e.outerHeight(),
                top: e.css("top"),
                left: e.css("left")
            }).insertAfter(e), e.remove()), this.originalElement.css("resize", this.originalResizeStyle), i(this.originalElement), this
        },
        _mouseCapture: function(e) {
            var i, s, n = !1;
            for (i in this.handles) s = t(this.handles[i])[0], (s === e.target || t.contains(s, e.target)) && (n = !0);
            return !this.options.disabled && n
        },
        _mouseStart: function(e) {
            var i, s, n, o = this.options,
                a = this.element;
            return this.resizing = !0, this._renderProxy(), i = this._num(this.helper.css("left")), s = this._num(this.helper.css("top")), o.containment && (i += t(o.containment).scrollLeft() || 0, s += t(o.containment).scrollTop() || 0), this.offset = this.helper.offset(), this.position = {
                left: i,
                top: s
            }, this.size = this._helper ? {
                width: this.helper.width(),
                height: this.helper.height()
            } : {
                width: a.width(),
                height: a.height()
            }, this.originalSize = this._helper ? {
                width: a.outerWidth(),
                height: a.outerHeight()
            } : {
                width: a.width(),
                height: a.height()
            }, this.sizeDiff = {
                width: a.outerWidth() - a.width(),
                height: a.outerHeight() - a.height()
            }, this.originalPosition = {
                left: i,
                top: s
            }, this.originalMousePosition = {
                left: e.pageX,
                top: e.pageY
            }, this.aspectRatio = "number" == typeof o.aspectRatio ? o.aspectRatio : this.originalSize.width / this.originalSize.height || 1, n = t(".ui-resizable-" + this.axis).css("cursor"), t("body").css("cursor", "auto" === n ? this.axis + "-resize" : n), a.addClass("ui-resizable-resizing"), this._propagate("start", e), !0
        },
        _mouseDrag: function(e) {
            var i, s, n = this.originalMousePosition,
                o = this.axis,
                a = e.pageX - n.left || 0,
                r = e.pageY - n.top || 0,
                h = this._change[o];
            return this._updatePrevProperties(), h ? (i = h.apply(this, [e, a, r]), this._updateVirtualBoundaries(e.shiftKey), (this._aspectRatio || e.shiftKey) && (i = this._updateRatio(i, e)), i = this._respectSize(i, e), this._updateCache(i), this._propagate("resize", e), s = this._applyChanges(), !this._helper && this._proportionallyResizeElements.length && this._proportionallyResize(), t.isEmptyObject(s) || (this._updatePrevProperties(), this._trigger("resize", e, this.ui()), this._applyChanges()), !1) : !1
        },
        _mouseStop: function(e) {
            this.resizing = !1;
            var i, s, n, o, a, r, h, l = this.options,
                u = this;
            return this._helper && (i = this._proportionallyResizeElements, s = i.length && /textarea/i.test(i[0].nodeName), n = s && this._hasScroll(i[0], "left") ? 0 : u.sizeDiff.height, o = s ? 0 : u.sizeDiff.width, a = {
                width: u.helper.width() - o,
                height: u.helper.height() - n
            }, r = parseInt(u.element.css("left"), 10) + (u.position.left - u.originalPosition.left) || null, h = parseInt(u.element.css("top"), 10) + (u.position.top - u.originalPosition.top) || null, l.animate || this.element.css(t.extend(a, {
                top: h,
                left: r
            })), u.helper.height(u.size.height), u.helper.width(u.size.width), this._helper && !l.animate && this._proportionallyResize()), t("body").css("cursor", "auto"), this.element.removeClass("ui-resizable-resizing"), this._propagate("stop", e), this._helper && this.helper.remove(), !1
        },
        _updatePrevProperties: function() {
            this.prevPosition = {
                top: this.position.top,
                left: this.position.left
            }, this.prevSize = {
                width: this.size.width,
                height: this.size.height
            }
        },
        _applyChanges: function() {
            var t = {};
            return this.position.top !== this.prevPosition.top && (t.top = this.position.top + "px"), this.position.left !== this.prevPosition.left && (t.left = this.position.left + "px"), this.size.width !== this.prevSize.width && (t.width = this.size.width + "px"), this.size.height !== this.prevSize.height && (t.height = this.size.height + "px"), this.helper.css(t), t
        },
        _updateVirtualBoundaries: function(t) {
            var e, i, s, n, o, a = this.options;
            o = {
                minWidth: this._isNumber(a.minWidth) ? a.minWidth : 0,
                maxWidth: this._isNumber(a.maxWidth) ? a.maxWidth : 1 / 0,
                minHeight: this._isNumber(a.minHeight) ? a.minHeight : 0,
                maxHeight: this._isNumber(a.maxHeight) ? a.maxHeight : 1 / 0
            }, (this._aspectRatio || t) && (e = o.minHeight * this.aspectRatio, s = o.minWidth / this.aspectRatio, i = o.maxHeight * this.aspectRatio, n = o.maxWidth / this.aspectRatio, e > o.minWidth && (o.minWidth = e), s > o.minHeight && (o.minHeight = s), i < o.maxWidth && (o.maxWidth = i), n < o.maxHeight && (o.maxHeight = n)), this._vBoundaries = o
        },
        _updateCache: function(t) {
            this.offset = this.helper.offset(), this._isNumber(t.left) && (this.position.left = t.left), this._isNumber(t.top) && (this.position.top = t.top), this._isNumber(t.height) && (this.size.height = t.height), this._isNumber(t.width) && (this.size.width = t.width)
        },
        _updateRatio: function(t) {
            var e = this.position,
                i = this.size,
                s = this.axis;
            return this._isNumber(t.height) ? t.width = t.height * this.aspectRatio : this._isNumber(t.width) && (t.height = t.width / this.aspectRatio), "sw" === s && (t.left = e.left + (i.width - t.width), t.top = null), "nw" === s && (t.top = e.top + (i.height - t.height), t.left = e.left + (i.width - t.width)), t
        },
        _respectSize: function(t) {
            var e = this._vBoundaries,
                i = this.axis,
                s = this._isNumber(t.width) && e.maxWidth && e.maxWidth < t.width,
                n = this._isNumber(t.height) && e.maxHeight && e.maxHeight < t.height,
                o = this._isNumber(t.width) && e.minWidth && e.minWidth > t.width,
                a = this._isNumber(t.height) && e.minHeight && e.minHeight > t.height,
                r = this.originalPosition.left + this.originalSize.width,
                h = this.position.top + this.size.height,
                l = /sw|nw|w/.test(i),
                u = /nw|ne|n/.test(i);
            return o && (t.width = e.minWidth), a && (t.height = e.minHeight), s && (t.width = e.maxWidth), n && (t.height = e.maxHeight), o && l && (t.left = r - e.minWidth), s && l && (t.left = r - e.maxWidth), a && u && (t.top = h - e.minHeight), n && u && (t.top = h - e.maxHeight), t.width || t.height || t.left || !t.top ? t.width || t.height || t.top || !t.left || (t.left = null) : t.top = null, t
        },
        _getPaddingPlusBorderDimensions: function(t) {
            for (var e = 0, i = [], s = [t.css("borderTopWidth"), t.css("borderRightWidth"), t.css("borderBottomWidth"), t.css("borderLeftWidth")], n = [t.css("paddingTop"), t.css("paddingRight"), t.css("paddingBottom"), t.css("paddingLeft")]; 4 > e; e++) i[e] = parseInt(s[e], 10) || 0, i[e] += parseInt(n[e], 10) || 0;
            return {
                height: i[0] + i[2],
                width: i[1] + i[3]
            }
        },
        _proportionallyResize: function() {
            if (this._proportionallyResizeElements.length)
                for (var t, e = 0, i = this.helper || this.element; e < this._proportionallyResizeElements.length; e++) t = this._proportionallyResizeElements[e], this.outerDimensions || (this.outerDimensions = this._getPaddingPlusBorderDimensions(t)), t.css({
                    height: i.height() - this.outerDimensions.height || 0,
                    width: i.width() - this.outerDimensions.width || 0
                })
        },
        _renderProxy: function() {
            var e = this.element,
                i = this.options;
            this.elementOffset = e.offset(), this._helper ? (this.helper = this.helper || t("<div style='overflow:hidden;'></div>"), this.helper.addClass(this._helper).css({
                width: this.element.outerWidth() - 1,
                height: this.element.outerHeight() - 1,
                position: "absolute",
                left: this.elementOffset.left + "px",
                top: this.elementOffset.top + "px",
                zIndex: ++i.zIndex
            }), this.helper.appendTo("body").disableSelection()) : this.helper = this.element
        },
        _change: {
            e: function(t, e) {
                return {
                    width: this.originalSize.width + e
                }
            },
            w: function(t, e) {
                var i = this.originalSize,
                    s = this.originalPosition;
                return {
                    left: s.left + e,
                    width: i.width - e
                }
            },
            n: function(t, e, i) {
                var s = this.originalSize,
                    n = this.originalPosition;
                return {
                    top: n.top + i,
                    height: s.height - i
                }
            },
            s: function(t, e, i) {
                return {
                    height: this.originalSize.height + i
                }
            },
            se: function(e, i, s) {
                return t.extend(this._change.s.apply(this, arguments), this._change.e.apply(this, [e, i, s]))
            },
            sw: function(e, i, s) {
                return t.extend(this._change.s.apply(this, arguments), this._change.w.apply(this, [e, i, s]))
            },
            ne: function(e, i, s) {
                return t.extend(this._change.n.apply(this, arguments), this._change.e.apply(this, [e, i, s]))
            },
            nw: function(e, i, s) {
                return t.extend(this._change.n.apply(this, arguments), this._change.w.apply(this, [e, i, s]))
            }
        },
        _propagate: function(e, i) {
            t.ui.plugin.call(this, e, [i, this.ui()]), "resize" !== e && this._trigger(e, i, this.ui())
        },
        plugins: {},
        ui: function() {
            return {
                originalElement: this.originalElement,
                element: this.element,
                helper: this.helper,
                position: this.position,
                size: this.size,
                originalSize: this.originalSize,
                originalPosition: this.originalPosition
            }
        }
    }), t.ui.plugin.add("resizable", "animate", {
        stop: function(e) {
            var i = t(this).resizable("instance"),
                s = i.options,
                n = i._proportionallyResizeElements,
                o = n.length && /textarea/i.test(n[0].nodeName),
                a = o && i._hasScroll(n[0], "left") ? 0 : i.sizeDiff.height,
                r = o ? 0 : i.sizeDiff.width,
                h = {
                    width: i.size.width - r,
                    height: i.size.height - a
                },
                l = parseInt(i.element.css("left"), 10) + (i.position.left - i.originalPosition.left) || null,
                u = parseInt(i.element.css("top"), 10) + (i.position.top - i.originalPosition.top) || null;
            i.element.animate(t.extend(h, u && l ? {
                top: u,
                left: l
            } : {}), {
                duration: s.animateDuration,
                easing: s.animateEasing,
                step: function() {
                    var s = {
                        width: parseInt(i.element.css("width"), 10),
                        height: parseInt(i.element.css("height"), 10),
                        top: parseInt(i.element.css("top"), 10),
                        left: parseInt(i.element.css("left"), 10)
                    };
                    n && n.length && t(n[0]).css({
                        width: s.width,
                        height: s.height
                    }), i._updateCache(s), i._propagate("resize", e)
                }
            })
        }
    }), t.ui.plugin.add("resizable", "containment", {
        start: function() {
            var e, i, s, n, o, a, r, h = t(this).resizable("instance"),
                l = h.options,
                u = h.element,
                c = l.containment,
                d = c instanceof t ? c.get(0) : /parent/.test(c) ? u.parent().get(0) : c;
            d && (h.containerElement = t(d), /document/.test(c) || c === document ? (h.containerOffset = {
                left: 0,
                top: 0
            }, h.containerPosition = {
                left: 0,
                top: 0
            }, h.parentData = {
                element: t(document),
                left: 0,
                top: 0,
                width: t(document).width(),
                height: t(document).height() || document.body.parentNode.scrollHeight
            }) : (e = t(d), i = [], t(["Top", "Right", "Left", "Bottom"]).each(function(t, s) {
                i[t] = h._num(e.css("padding" + s))
            }), h.containerOffset = e.offset(), h.containerPosition = e.position(), h.containerSize = {
                height: e.innerHeight() - i[3],
                width: e.innerWidth() - i[1]
            }, s = h.containerOffset, n = h.containerSize.height, o = h.containerSize.width, a = h._hasScroll(d, "left") ? d.scrollWidth : o, r = h._hasScroll(d) ? d.scrollHeight : n, h.parentData = {
                element: d,
                left: s.left,
                top: s.top,
                width: a,
                height: r
            }))
        },
        resize: function(e) {
            var i, s, n, o, a = t(this).resizable("instance"),
                r = a.options,
                h = a.containerOffset,
                l = a.position,
                u = a._aspectRatio || e.shiftKey,
                c = {
                    top: 0,
                    left: 0
                },
                d = a.containerElement,
                p = !0;
            d[0] !== document && /static/.test(d.css("position")) && (c = h), l.left < (a._helper ? h.left : 0) && (a.size.width = a.size.width + (a._helper ? a.position.left - h.left : a.position.left - c.left), u && (a.size.height = a.size.width / a.aspectRatio, p = !1), a.position.left = r.helper ? h.left : 0), l.top < (a._helper ? h.top : 0) && (a.size.height = a.size.height + (a._helper ? a.position.top - h.top : a.position.top), u && (a.size.width = a.size.height * a.aspectRatio, p = !1), a.position.top = a._helper ? h.top : 0), n = a.containerElement.get(0) === a.element.parent().get(0), o = /relative|absolute/.test(a.containerElement.css("position")), n && o ? (a.offset.left = a.parentData.left + a.position.left, a.offset.top = a.parentData.top + a.position.top) : (a.offset.left = a.element.offset().left, a.offset.top = a.element.offset().top), i = Math.abs(a.sizeDiff.width + (a._helper ? a.offset.left - c.left : a.offset.left - h.left)), s = Math.abs(a.sizeDiff.height + (a._helper ? a.offset.top - c.top : a.offset.top - h.top)), i + a.size.width >= a.parentData.width && (a.size.width = a.parentData.width - i, u && (a.size.height = a.size.width / a.aspectRatio, p = !1)), s + a.size.height >= a.parentData.height && (a.size.height = a.parentData.height - s, u && (a.size.width = a.size.height * a.aspectRatio, p = !1)), p || (a.position.left = a.prevPosition.left, a.position.top = a.prevPosition.top, a.size.width = a.prevSize.width, a.size.height = a.prevSize.height)
        },
        stop: function() {
            var e = t(this).resizable("instance"),
                i = e.options,
                s = e.containerOffset,
                n = e.containerPosition,
                o = e.containerElement,
                a = t(e.helper),
                r = a.offset(),
                h = a.outerWidth() - e.sizeDiff.width,
                l = a.outerHeight() - e.sizeDiff.height;
            e._helper && !i.animate && /relative/.test(o.css("position")) && t(this).css({
                left: r.left - n.left - s.left,
                width: h,
                height: l
            }), e._helper && !i.animate && /static/.test(o.css("position")) && t(this).css({
                left: r.left - n.left - s.left,
                width: h,
                height: l
            })
        }
    }), t.ui.plugin.add("resizable", "alsoResize", {
        start: function() {
            var e = t(this).resizable("instance"),
                i = e.options;
            t(i.alsoResize).each(function() {
                var e = t(this);
                e.data("ui-resizable-alsoresize", {
                    width: parseInt(e.width(), 10),
                    height: parseInt(e.height(), 10),
                    left: parseInt(e.css("left"), 10),
                    top: parseInt(e.css("top"), 10)
                })
            })
        },
        resize: function(e, i) {
            var s = t(this).resizable("instance"),
                n = s.options,
                o = s.originalSize,
                a = s.originalPosition,
                r = {
                    height: s.size.height - o.height || 0,
                    width: s.size.width - o.width || 0,
                    top: s.position.top - a.top || 0,
                    left: s.position.left - a.left || 0
                };
            t(n.alsoResize).each(function() {
                var e = t(this),
                    s = t(this).data("ui-resizable-alsoresize"),
                    n = {},
                    o = e.parents(i.originalElement[0]).length ? ["width", "height"] : ["width", "height", "top", "left"];
                t.each(o, function(t, e) {
                    var i = (s[e] || 0) + (r[e] || 0);
                    i && i >= 0 && (n[e] = i || null)
                }), e.css(n)
            })
        },
        stop: function() {
            t(this).removeData("resizable-alsoresize")
        }
    }), t.ui.plugin.add("resizable", "ghost", {
        start: function() {
            var e = t(this).resizable("instance"),
                i = e.options,
                s = e.size;
            e.ghost = e.originalElement.clone(), e.ghost.css({
                opacity: .25,
                display: "block",
                position: "relative",
                height: s.height,
                width: s.width,
                margin: 0,
                left: 0,
                top: 0
            }).addClass("ui-resizable-ghost").addClass("string" == typeof i.ghost ? i.ghost : ""), e.ghost.appendTo(e.helper)
        },
        resize: function() {
            var e = t(this).resizable("instance");
            e.ghost && e.ghost.css({
                position: "relative",
                height: e.size.height,
                width: e.size.width
            })
        },
        stop: function() {
            var e = t(this).resizable("instance");
            e.ghost && e.helper && e.helper.get(0).removeChild(e.ghost.get(0))
        }
    }), t.ui.plugin.add("resizable", "grid", {
        resize: function() {
            var e, i = t(this).resizable("instance"),
                s = i.options,
                n = i.size,
                o = i.originalSize,
                a = i.originalPosition,
                r = i.axis,
                h = "number" == typeof s.grid ? [s.grid, s.grid] : s.grid,
                l = h[0] || 1,
                u = h[1] || 1,
                c = Math.round((n.width - o.width) / l) * l,
                d = Math.round((n.height - o.height) / u) * u,
                p = o.width + c,
                f = o.height + d,
                m = s.maxWidth && s.maxWidth < p,
                g = s.maxHeight && s.maxHeight < f,
                v = s.minWidth && s.minWidth > p,
                _ = s.minHeight && s.minHeight > f;
            s.grid = h, v && (p += l), _ && (f += u), m && (p -= l), g && (f -= u), /^(se|s|e)$/.test(r) ? (i.size.width = p, i.size.height = f) : /^(ne)$/.test(r) ? (i.size.width = p, i.size.height = f, i.position.top = a.top - d) : /^(sw)$/.test(r) ? (i.size.width = p, i.size.height = f, i.position.left = a.left - c) : ((0 >= f - u || 0 >= p - l) && (e = i._getPaddingPlusBorderDimensions(this)), f - u > 0 ? (i.size.height = f, i.position.top = a.top - d) : (f = u - e.height, i.size.height = f, i.position.top = a.top + o.height - f), p - l > 0 ? (i.size.width = p, i.position.left = a.left - c) : (p = l - e.width, i.size.width = p, i.position.left = a.left + o.width - p))
        }
    });
    t.ui.resizable, t.widget("ui.dialog", {
        version: "1.11.4",
        options: {
            appendTo: "body",
            autoOpen: !0,
            buttons: [],
            closeOnEscape: !0,
            closeText: "Close",
            dialogClass: "",
            draggable: !0,
            hide: null,
            height: "auto",
            maxHeight: null,
            maxWidth: null,
            minHeight: 150,
            minWidth: 150,
            modal: !1,
            position: {
                my: "center",
                at: "center",
                of: window,
                collision: "fit",
                using: function(e) {
                    var i = t(this).css(e).offset().top;
                    0 > i && t(this).css("top", e.top - i)
                }
            },
            resizable: !0,
            show: null,
            title: null,
            width: 300,
            beforeClose: null,
            close: null,
            drag: null,
            dragStart: null,
            dragStop: null,
            focus: null,
            open: null,
            resize: null,
            resizeStart: null,
            resizeStop: null
        },
        sizeRelatedOptions: {
            buttons: !0,
            height: !0,
            maxHeight: !0,
            maxWidth: !0,
            minHeight: !0,
            minWidth: !0,
            width: !0
        },
        resizableRelatedOptions: {
            maxHeight: !0,
            maxWidth: !0,
            minHeight: !0,
            minWidth: !0
        },
        _create: function() {
            this.originalCss = {
                display: this.element[0].style.display,
                width: this.element[0].style.width,
                minHeight: this.element[0].style.minHeight,
                maxHeight: this.element[0].style.maxHeight,
                height: this.element[0].style.height
            }, this.originalPosition = {
                parent: this.element.parent(),
                index: this.element.parent().children().index(this.element)
            }, this.originalTitle = this.element.attr("title"), this.options.title = this.options.title || this.originalTitle, this._createWrapper(), this.element.show().removeAttr("title").addClass("ui-dialog-content ui-widget-content").appendTo(this.uiDialog), this._createTitlebar(), this._createButtonPane(), this.options.draggable && t.fn.draggable && this._makeDraggable(), this.options.resizable && t.fn.resizable && this._makeResizable(), this._isOpen = !1, this._trackFocus()
        },
        _init: function() {
            this.options.autoOpen && this.open()
        },
        _appendTo: function() {
            var e = this.options.appendTo;
            return e && (e.jquery || e.nodeType) ? t(e) : this.document.find(e || "body").eq(0)
        },
        _destroy: function() {
            var t, e = this.originalPosition;
            this._untrackInstance(), this._destroyOverlay(), this.element.removeUniqueId().removeClass("ui-dialog-content ui-widget-content").css(this.originalCss).detach(), this.uiDialog.stop(!0, !0).remove(), this.originalTitle && this.element.attr("title", this.originalTitle), t = e.parent.children().eq(e.index), t.length && t[0] !== this.element[0] ? t.before(this.element) : e.parent.append(this.element)
        },
        widget: function() {
            return this.uiDialog
        },
        disable: t.noop,
        enable: t.noop,
        close: function(e) {
            var i, s = this;
            if (this._isOpen && this._trigger("beforeClose", e) !== !1) {
                if (this._isOpen = !1, this._focusedElement = null, this._destroyOverlay(), this._untrackInstance(), !this.opener.filter(":focusable").focus().length) try {
                    i = this.document[0].activeElement, i && "body" !== i.nodeName.toLowerCase() && t(i).blur()
                } catch (n) {}
                this._hide(this.uiDialog, this.options.hide, function() {
                    s._trigger("close", e)
                })
            }
        },
        isOpen: function() {
            return this._isOpen
        },
        moveToTop: function() {
            this._moveToTop()
        },
        _moveToTop: function(e, i) {
            var s = !1,
                n = this.uiDialog.siblings(".ui-front:visible").map(function() {
                    return +t(this).css("z-index")
                }).get(),
                o = Math.max.apply(null, n);
            return o >= +this.uiDialog.css("z-index") && (this.uiDialog.css("z-index", o + 1), s = !0), s && !i && this._trigger("focus", e), s
        },
        open: function() {
            var e = this;
            return this._isOpen ? void(this._moveToTop() && this._focusTabbable()) : (this._isOpen = !0, this.opener = t(this.document[0].activeElement), this._size(), this._position(), this._createOverlay(), this._moveToTop(null, !0), this.overlay && this.overlay.css("z-index", this.uiDialog.css("z-index") - 1), this._show(this.uiDialog, this.options.show, function() {
                    e._focusTabbable(), e._trigger("focus")
                }), this._makeFocusTarget(),
                void this._trigger("open"))
        },
        _focusTabbable: function() {
            var t = this._focusedElement;
            t || (t = this.element.find("[autofocus]")), t.length || (t = this.element.find(":tabbable")), t.length || (t = this.uiDialogButtonPane.find(":tabbable")), t.length || (t = this.uiDialogTitlebarClose.filter(":tabbable")), t.length || (t = this.uiDialog), t.eq(0).focus()
        },
        _keepFocus: function(e) {
            function i() {
                var e = this.document[0].activeElement,
                    i = this.uiDialog[0] === e || t.contains(this.uiDialog[0], e);
                i || this._focusTabbable()
            }
            e.preventDefault(), i.call(this), this._delay(i)
        },
        _createWrapper: function() {
            this.uiDialog = t("<div>").addClass("ui-dialog ui-widget ui-widget-content ui-corner-all ui-front " + this.options.dialogClass).hide().attr({
                tabIndex: -1,
                role: "dialog"
            }).appendTo(this._appendTo()), this._on(this.uiDialog, {
                keydown: function(e) {
                    if (this.options.closeOnEscape && !e.isDefaultPrevented() && e.keyCode && e.keyCode === t.ui.keyCode.ESCAPE) return e.preventDefault(), void this.close(e);
                    if (e.keyCode === t.ui.keyCode.TAB && !e.isDefaultPrevented()) {
                        var i = this.uiDialog.find(":tabbable"),
                            s = i.filter(":first"),
                            n = i.filter(":last");
                        e.target !== n[0] && e.target !== this.uiDialog[0] || e.shiftKey ? e.target !== s[0] && e.target !== this.uiDialog[0] || !e.shiftKey || (this._delay(function() {
                            n.focus()
                        }), e.preventDefault()) : (this._delay(function() {
                            s.focus()
                        }), e.preventDefault())
                    }
                },
                mousedown: function(t) {
                    this._moveToTop(t) && this._focusTabbable()
                }
            }), this.element.find("[aria-describedby]").length || this.uiDialog.attr({
                "aria-describedby": this.element.uniqueId().attr("id")
            })
        },
        _createTitlebar: function() {
            var e;
            this.uiDialogTitlebar = t("<div>").addClass("ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix").prependTo(this.uiDialog), this._on(this.uiDialogTitlebar, {
                mousedown: function(e) {
                    t(e.target).closest(".ui-dialog-titlebar-close") || this.uiDialog.focus()
                }
            }), this.uiDialogTitlebarClose = t("<button type='button'></button>").button({
                label: this.options.closeText,
                icons: {
                    primary: "ui-icon-closethick"
                },
                text: !1
            }).addClass("ui-dialog-titlebar-close").appendTo(this.uiDialogTitlebar), this._on(this.uiDialogTitlebarClose, {
                click: function(t) {
                    t.preventDefault(), this.close(t)
                }
            }), e = t("<span>").uniqueId().addClass("ui-dialog-title").prependTo(this.uiDialogTitlebar), this._title(e), this.uiDialog.attr({
                "aria-labelledby": e.attr("id")
            })
        },
        _title: function(t) {
            this.options.title || t.html("&#160;"), t.text(this.options.title)
        },
        _createButtonPane: function() {
            this.uiDialogButtonPane = t("<div>").addClass("ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"), this.uiButtonSet = t("<div>").addClass("ui-dialog-buttonset").appendTo(this.uiDialogButtonPane), this._createButtons()
        },
        _createButtons: function() {
            var e = this,
                i = this.options.buttons;
            return this.uiDialogButtonPane.remove(), this.uiButtonSet.empty(), t.isEmptyObject(i) || t.isArray(i) && !i.length ? void this.uiDialog.removeClass("ui-dialog-buttons") : (t.each(i, function(i, s) {
                var n, o;
                s = t.isFunction(s) ? {
                    click: s,
                    text: i
                } : s, s = t.extend({
                    type: "button"
                }, s), n = s.click, s.click = function() {
                    n.apply(e.element[0], arguments)
                }, o = {
                    icons: s.icons,
                    text: s.showText
                }, delete s.icons, delete s.showText, t("<button></button>", s).button(o).appendTo(e.uiButtonSet)
            }), this.uiDialog.addClass("ui-dialog-buttons"), void this.uiDialogButtonPane.appendTo(this.uiDialog))
        },
        _makeDraggable: function() {
            function e(t) {
                return {
                    position: t.position,
                    offset: t.offset
                }
            }
            var i = this,
                s = this.options;
            this.uiDialog.draggable({
                cancel: ".ui-dialog-content, .ui-dialog-titlebar-close",
                handle: ".ui-dialog-titlebar",
                containment: "document",
                start: function(s, n) {
                    t(this).addClass("ui-dialog-dragging"), i._blockFrames(), i._trigger("dragStart", s, e(n))
                },
                drag: function(t, s) {
                    i._trigger("drag", t, e(s))
                },
                stop: function(n, o) {
                    var a = o.offset.left - i.document.scrollLeft(),
                        r = o.offset.top - i.document.scrollTop();
                    s.position = {
                        my: "left top",
                        at: "left" + (a >= 0 ? "+" : "") + a + " top" + (r >= 0 ? "+" : "") + r,
                        of: i.window
                    }, t(this).removeClass("ui-dialog-dragging"), i._unblockFrames(), i._trigger("dragStop", n, e(o))
                }
            })
        },
        _makeResizable: function() {
            function e(t) {
                return {
                    originalPosition: t.originalPosition,
                    originalSize: t.originalSize,
                    position: t.position,
                    size: t.size
                }
            }
            var i = this,
                s = this.options,
                n = s.resizable,
                o = this.uiDialog.css("position"),
                a = "string" == typeof n ? n : "n,e,s,w,se,sw,ne,nw";
            this.uiDialog.resizable({
                cancel: ".ui-dialog-content",
                containment: "document",
                alsoResize: this.element,
                maxWidth: s.maxWidth,
                maxHeight: s.maxHeight,
                minWidth: s.minWidth,
                minHeight: this._minHeight(),
                handles: a,
                start: function(s, n) {
                    t(this).addClass("ui-dialog-resizing"), i._blockFrames(), i._trigger("resizeStart", s, e(n))
                },
                resize: function(t, s) {
                    i._trigger("resize", t, e(s))
                },
                stop: function(n, o) {
                    var a = i.uiDialog.offset(),
                        r = a.left - i.document.scrollLeft(),
                        h = a.top - i.document.scrollTop();
                    s.height = i.uiDialog.height(), s.width = i.uiDialog.width(), s.position = {
                        my: "left top",
                        at: "left" + (r >= 0 ? "+" : "") + r + " top" + (h >= 0 ? "+" : "") + h,
                        of: i.window
                    }, t(this).removeClass("ui-dialog-resizing"), i._unblockFrames(), i._trigger("resizeStop", n, e(o))
                }
            }).css("position", o)
        },
        _trackFocus: function() {
            this._on(this.widget(), {
                focusin: function(e) {
                    this._makeFocusTarget(), this._focusedElement = t(e.target)
                }
            })
        },
        _makeFocusTarget: function() {
            this._untrackInstance(), this._trackingInstances().unshift(this)
        },
        _untrackInstance: function() {
            var e = this._trackingInstances(),
                i = t.inArray(this, e); - 1 !== i && e.splice(i, 1)
        },
        _trackingInstances: function() {
            var t = this.document.data("ui-dialog-instances");
            return t || (t = [], this.document.data("ui-dialog-instances", t)), t
        },
        _minHeight: function() {
            var t = this.options;
            return "auto" === t.height ? t.minHeight : Math.min(t.minHeight, t.height)
        },
        _position: function() {
            var t = this.uiDialog.is(":visible");
            t || this.uiDialog.show(), this.uiDialog.position(this.options.position), t || this.uiDialog.hide()
        },
        _setOptions: function(e) {
            var i = this,
                s = !1,
                n = {};
            t.each(e, function(t, e) {
                i._setOption(t, e), t in i.sizeRelatedOptions && (s = !0), t in i.resizableRelatedOptions && (n[t] = e)
            }), s && (this._size(), this._position()), this.uiDialog.is(":data(ui-resizable)") && this.uiDialog.resizable("option", n)
        },
        _setOption: function(t, e) {
            var i, s, n = this.uiDialog;
            "dialogClass" === t && n.removeClass(this.options.dialogClass).addClass(e), "disabled" !== t && (this._super(t, e), "appendTo" === t && this.uiDialog.appendTo(this._appendTo()), "buttons" === t && this._createButtons(), "closeText" === t && this.uiDialogTitlebarClose.button({
                label: "" + e
            }), "draggable" === t && (i = n.is(":data(ui-draggable)"), i && !e && n.draggable("destroy"), !i && e && this._makeDraggable()), "position" === t && this._position(), "resizable" === t && (s = n.is(":data(ui-resizable)"), s && !e && n.resizable("destroy"), s && "string" == typeof e && n.resizable("option", "handles", e), s || e === !1 || this._makeResizable()), "title" === t && this._title(this.uiDialogTitlebar.find(".ui-dialog-title")))
        },
        _size: function() {
            var t, e, i, s = this.options;
            this.element.show().css({
                width: "auto",
                minHeight: 0,
                maxHeight: "none",
                height: 0
            }), s.minWidth > s.width && (s.width = s.minWidth), t = this.uiDialog.css({
                height: "auto",
                width: s.width
            }).outerHeight(), e = Math.max(0, s.minHeight - t), i = "number" == typeof s.maxHeight ? Math.max(0, s.maxHeight - t) : "none", "auto" === s.height ? this.element.css({
                minHeight: e,
                maxHeight: i,
                height: "auto"
            }) : this.element.height(Math.max(0, s.height - t)), this.uiDialog.is(":data(ui-resizable)") && this.uiDialog.resizable("option", "minHeight", this._minHeight())
        },
        _blockFrames: function() {
            this.iframeBlocks = this.document.find("iframe").map(function() {
                var e = t(this);
                return t("<div>").css({
                    position: "absolute",
                    width: e.outerWidth(),
                    height: e.outerHeight()
                }).appendTo(e.parent()).offset(e.offset())[0]
            })
        },
        _unblockFrames: function() {
            this.iframeBlocks && (this.iframeBlocks.remove(), delete this.iframeBlocks)
        },
        _allowInteraction: function(e) {
            return t(e.target).closest(".ui-dialog").length ? !0 : !!t(e.target).closest(".ui-datepicker").length
        },
        _createOverlay: function() {
            if (this.options.modal) {
                var e = !0;
                this._delay(function() {
                    e = !1
                }), this.document.data("ui-dialog-overlays") || this._on(this.document, {
                    focusin: function(t) {
                        e || this._allowInteraction(t) || (t.preventDefault(), this._trackingInstances()[0]._focusTabbable())
                    }
                }), this.overlay = t("<div>").addClass("ui-widget-overlay ui-front").appendTo(this._appendTo()), this._on(this.overlay, {
                    mousedown: "_keepFocus"
                }), this.document.data("ui-dialog-overlays", (this.document.data("ui-dialog-overlays") || 0) + 1)
            }
        },
        _destroyOverlay: function() {
            if (this.options.modal && this.overlay) {
                var t = this.document.data("ui-dialog-overlays") - 1;
                t ? this.document.data("ui-dialog-overlays", t) : this.document.unbind("focusin").removeData("ui-dialog-overlays"), this.overlay.remove(), this.overlay = null
            }
        }
    });
    t.widget("ui.droppable", {
        version: "1.11.4",
        widgetEventPrefix: "drop",
        options: {
            accept: "*",
            activeClass: !1,
            addClasses: !0,
            greedy: !1,
            hoverClass: !1,
            scope: "default",
            tolerance: "intersect",
            activate: null,
            deactivate: null,
            drop: null,
            out: null,
            over: null
        },
        _create: function() {
            var e, i = this.options,
                s = i.accept;
            this.isover = !1, this.isout = !0, this.accept = t.isFunction(s) ? s : function(t) {
                return t.is(s)
            }, this.proportions = function() {
                return arguments.length ? void(e = arguments[0]) : e ? e : e = {
                    width: this.element[0].offsetWidth,
                    height: this.element[0].offsetHeight
                }
            }, this._addToManager(i.scope), i.addClasses && this.element.addClass("ui-droppable")
        },
        _addToManager: function(e) {
            t.ui.ddmanager.droppables[e] = t.ui.ddmanager.droppables[e] || [], t.ui.ddmanager.droppables[e].push(this)
        },
        _splice: function(t) {
            for (var e = 0; e < t.length; e++) t[e] === this && t.splice(e, 1)
        },
        _destroy: function() {
            var e = t.ui.ddmanager.droppables[this.options.scope];
            this._splice(e), this.element.removeClass("ui-droppable ui-droppable-disabled")
        },
        _setOption: function(e, i) {
            if ("accept" === e) this.accept = t.isFunction(i) ? i : function(t) {
                return t.is(i)
            };
            else if ("scope" === e) {
                var s = t.ui.ddmanager.droppables[this.options.scope];
                this._splice(s), this._addToManager(i)
            }
            this._super(e, i)
        },
        _activate: function(e) {
            var i = t.ui.ddmanager.current;
            this.options.activeClass && this.element.addClass(this.options.activeClass), i && this._trigger("activate", e, this.ui(i))
        },
        _deactivate: function(e) {
            var i = t.ui.ddmanager.current;
            this.options.activeClass && this.element.removeClass(this.options.activeClass), i && this._trigger("deactivate", e, this.ui(i))
        },
        _over: function(e) {
            var i = t.ui.ddmanager.current;
            i && (i.currentItem || i.element)[0] !== this.element[0] && this.accept.call(this.element[0], i.currentItem || i.element) && (this.options.hoverClass && this.element.addClass(this.options.hoverClass), this._trigger("over", e, this.ui(i)))
        },
        _out: function(e) {
            var i = t.ui.ddmanager.current;
            i && (i.currentItem || i.element)[0] !== this.element[0] && this.accept.call(this.element[0], i.currentItem || i.element) && (this.options.hoverClass && this.element.removeClass(this.options.hoverClass), this._trigger("out", e, this.ui(i)))
        },
        _drop: function(e, i) {
            var s = i || t.ui.ddmanager.current,
                n = !1;
            return s && (s.currentItem || s.element)[0] !== this.element[0] ? (this.element.find(":data(ui-droppable)").not(".ui-draggable-dragging").each(function() {
                var i = t(this).droppable("instance");
                return i.options.greedy && !i.options.disabled && i.options.scope === s.options.scope && i.accept.call(i.element[0], s.currentItem || s.element) && t.ui.intersect(s, t.extend(i, {
                    offset: i.element.offset()
                }), i.options.tolerance, e) ? (n = !0, !1) : void 0
            }), n ? !1 : this.accept.call(this.element[0], s.currentItem || s.element) ? (this.options.activeClass && this.element.removeClass(this.options.activeClass), this.options.hoverClass && this.element.removeClass(this.options.hoverClass), this._trigger("drop", e, this.ui(s)), this.element) : !1) : !1
        },
        ui: function(t) {
            return {
                draggable: t.currentItem || t.element,
                helper: t.helper,
                position: t.position,
                offset: t.positionAbs
            }
        }
    }), t.ui.intersect = function() {
        function t(t, e, i) {
            return t >= e && e + i > t
        }
        return function(e, i, s, n) {
            if (!i.offset) return !1;
            var o = (e.positionAbs || e.position.absolute).left + e.margins.left,
                a = (e.positionAbs || e.position.absolute).top + e.margins.top,
                r = o + e.helperProportions.width,
                h = a + e.helperProportions.height,
                l = i.offset.left,
                u = i.offset.top,
                c = l + i.proportions().width,
                d = u + i.proportions().height;
            switch (s) {
                case "fit":
                    return o >= l && c >= r && a >= u && d >= h;
                case "intersect":
                    return l < o + e.helperProportions.width / 2 && r - e.helperProportions.width / 2 < c && u < a + e.helperProportions.height / 2 && h - e.helperProportions.height / 2 < d;
                case "pointer":
                    return t(n.pageY, u, i.proportions().height) && t(n.pageX, l, i.proportions().width);
                case "touch":
                    return (a >= u && d >= a || h >= u && d >= h || u > a && h > d) && (o >= l && c >= o || r >= l && c >= r || l > o && r > c);
                default:
                    return !1
            }
        }
    }(), t.ui.ddmanager = {
        current: null,
        droppables: {
            "default": []
        },
        prepareOffsets: function(e, i) {
            var s, n, o = t.ui.ddmanager.droppables[e.options.scope] || [],
                a = i ? i.type : null,
                r = (e.currentItem || e.element).find(":data(ui-droppable)").addBack();
            t: for (s = 0; s < o.length; s++)
                if (!(o[s].options.disabled || e && !o[s].accept.call(o[s].element[0], e.currentItem || e.element))) {
                    for (n = 0; n < r.length; n++)
                        if (r[n] === o[s].element[0]) {
                            o[s].proportions().height = 0;
                            continue t
                        }
                    o[s].visible = "none" !== o[s].element.css("display"), o[s].visible && ("mousedown" === a && o[s]._activate.call(o[s], i), o[s].offset = o[s].element.offset(), o[s].proportions({
                        width: o[s].element[0].offsetWidth,
                        height: o[s].element[0].offsetHeight
                    }))
                }
        },
        drop: function(e, i) {
            var s = !1;
            return t.each((t.ui.ddmanager.droppables[e.options.scope] || []).slice(), function() {
                this.options && (!this.options.disabled && this.visible && t.ui.intersect(e, this, this.options.tolerance, i) && (s = this._drop.call(this, i) || s), !this.options.disabled && this.visible && this.accept.call(this.element[0], e.currentItem || e.element) && (this.isout = !0, this.isover = !1, this._deactivate.call(this, i)))
            }), s
        },
        dragStart: function(e, i) {
            e.element.parentsUntil("body").bind("scroll.droppable", function() {
                e.options.refreshPositions || t.ui.ddmanager.prepareOffsets(e, i)
            })
        },
        drag: function(e, i) {
            e.options.refreshPositions && t.ui.ddmanager.prepareOffsets(e, i), t.each(t.ui.ddmanager.droppables[e.options.scope] || [], function() {
                if (!this.options.disabled && !this.greedyChild && this.visible) {
                    var s, n, o, a = t.ui.intersect(e, this, this.options.tolerance, i),
                        r = !a && this.isover ? "isout" : a && !this.isover ? "isover" : null;
                    r && (this.options.greedy && (n = this.options.scope, o = this.element.parents(":data(ui-droppable)").filter(function() {
                        return t(this).droppable("instance").options.scope === n
                    }), o.length && (s = t(o[0]).droppable("instance"), s.greedyChild = "isover" === r)), s && "isover" === r && (s.isover = !1, s.isout = !0, s._out.call(s, i)), this[r] = !0, this["isout" === r ? "isover" : "isout"] = !1, this["isover" === r ? "_over" : "_out"].call(this, i), s && "isout" === r && (s.isout = !1, s.isover = !0, s._over.call(s, i)))
                }
            })
        },
        dragStop: function(e, i) {
            e.element.parentsUntil("body").unbind("scroll.droppable"), e.options.refreshPositions || t.ui.ddmanager.prepareOffsets(e, i)
        }
    };
    var _ = (t.ui.droppable, "ui-effects-"),
        b = t;
    t.effects = {
            effect: {}
        },
        function(t, e) {
            function i(t, e, i) {
                var s = c[e.type] || {};
                return null == t ? i || !e.def ? null : e.def : (t = s.floor ? ~~t : parseFloat(t), isNaN(t) ? e.def : s.mod ? (t + s.mod) % s.mod : 0 > t ? 0 : s.max < t ? s.max : t)
            }

            function s(e) {
                var i = l(),
                    s = i._rgba = [];
                return e = e.toLowerCase(), f(h, function(t, n) {
                    var o, a = n.re.exec(e),
                        r = a && n.parse(a),
                        h = n.space || "rgba";
                    return r ? (o = i[h](r), i[u[h].cache] = o[u[h].cache], s = i._rgba = o._rgba, !1) : void 0
                }), s.length ? ("0,0,0,0" === s.join() && t.extend(s, o.transparent), i) : o[e]
            }

            function n(t, e, i) {
                return i = (i + 1) % 1, 1 > 6 * i ? t + (e - t) * i * 6 : 1 > 2 * i ? e : 2 > 3 * i ? t + (e - t) * (2 / 3 - i) * 6 : t
            }
            var o, a = "backgroundColor borderBottomColor borderLeftColor borderRightColor borderTopColor color columnRuleColor outlineColor textDecorationColor textEmphasisColor",
                r = /^([\-+])=\s*(\d+\.?\d*)/,
                h = [{
                    re: /rgba?\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,
                    parse: function(t) {
                        return [t[1], t[2], t[3], t[4]]
                    }
                }, {
                    re: /rgba?\(\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,
                    parse: function(t) {
                        return [2.55 * t[1], 2.55 * t[2], 2.55 * t[3], t[4]]
                    }
                }, {
                    re: /#([a-f0-9]{2})([a-f0-9]{2})([a-f0-9]{2})/,
                    parse: function(t) {
                        return [parseInt(t[1], 16), parseInt(t[2], 16), parseInt(t[3], 16)]
                    }
                }, {
                    re: /#([a-f0-9])([a-f0-9])([a-f0-9])/,
                    parse: function(t) {
                        return [parseInt(t[1] + t[1], 16), parseInt(t[2] + t[2], 16), parseInt(t[3] + t[3], 16)]
                    }
                }, {
                    re: /hsla?\(\s*(\d+(?:\.\d+)?)\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,
                    space: "hsla",
                    parse: function(t) {
                        return [t[1], t[2] / 100, t[3] / 100, t[4]]
                    }
                }],
                l = t.Color = function(e, i, s, n) {
                    return new t.Color.fn.parse(e, i, s, n)
                },
                u = {
                    rgba: {
                        props: {
                            red: {
                                idx: 0,
                                type: "byte"
                            },
                            green: {
                                idx: 1,
                                type: "byte"
                            },
                            blue: {
                                idx: 2,
                                type: "byte"
                            }
                        }
                    },
                    hsla: {
                        props: {
                            hue: {
                                idx: 0,
                                type: "degrees"
                            },
                            saturation: {
                                idx: 1,
                                type: "percent"
                            },
                            lightness: {
                                idx: 2,
                                type: "percent"
                            }
                        }
                    }
                },
                c = {
                    "byte": {
                        floor: !0,
                        max: 255
                    },
                    percent: {
                        max: 1
                    },
                    degrees: {
                        mod: 360,
                        floor: !0
                    }
                },
                d = l.support = {},
                p = t("<p>")[0],
                f = t.each;
            p.style.cssText = "background-color:rgba(1,1,1,.5)", d.rgba = p.style.backgroundColor.indexOf("rgba") > -1, f(u, function(t, e) {
                e.cache = "_" + t, e.props.alpha = {
                    idx: 3,
                    type: "percent",
                    def: 1
                }
            }), l.fn = t.extend(l.prototype, {
                parse: function(n, a, r, h) {
                    if (n === e) return this._rgba = [null, null, null, null], this;
                    (n.jquery || n.nodeType) && (n = t(n).css(a), a = e);
                    var c = this,
                        d = t.type(n),
                        p = this._rgba = [];
                    return a !== e && (n = [n, a, r, h], d = "array"), "string" === d ? this.parse(s(n) || o._default) : "array" === d ? (f(u.rgba.props, function(t, e) {
                        p[e.idx] = i(n[e.idx], e)
                    }), this) : "object" === d ? (n instanceof l ? f(u, function(t, e) {
                        n[e.cache] && (c[e.cache] = n[e.cache].slice())
                    }) : f(u, function(e, s) {
                        var o = s.cache;
                        f(s.props, function(t, e) {
                            if (!c[o] && s.to) {
                                if ("alpha" === t || null == n[t]) return;
                                c[o] = s.to(c._rgba)
                            }
                            c[o][e.idx] = i(n[t], e, !0)
                        }), c[o] && t.inArray(null, c[o].slice(0, 3)) < 0 && (c[o][3] = 1, s.from && (c._rgba = s.from(c[o])))
                    }), this) : void 0
                },
                is: function(t) {
                    var e = l(t),
                        i = !0,
                        s = this;
                    return f(u, function(t, n) {
                        var o, a = e[n.cache];
                        return a && (o = s[n.cache] || n.to && n.to(s._rgba) || [], f(n.props, function(t, e) {
                            return null != a[e.idx] ? i = a[e.idx] === o[e.idx] : void 0
                        })), i
                    }), i
                },
                _space: function() {
                    var t = [],
                        e = this;
                    return f(u, function(i, s) {
                        e[s.cache] && t.push(i)
                    }), t.pop()
                },
                transition: function(t, e) {
                    var s = l(t),
                        n = s._space(),
                        o = u[n],
                        a = 0 === this.alpha() ? l("transparent") : this,
                        r = a[o.cache] || o.to(a._rgba),
                        h = r.slice();
                    return s = s[o.cache], f(o.props, function(t, n) {
                        var o = n.idx,
                            a = r[o],
                            l = s[o],
                            u = c[n.type] || {};
                        null !== l && (null === a ? h[o] = l : (u.mod && (l - a > u.mod / 2 ? a += u.mod : a - l > u.mod / 2 && (a -= u.mod)), h[o] = i((l - a) * e + a, n)))
                    }), this[n](h)
                },
                blend: function(e) {
                    if (1 === this._rgba[3]) return this;
                    var i = this._rgba.slice(),
                        s = i.pop(),
                        n = l(e)._rgba;
                    return l(t.map(i, function(t, e) {
                        return (1 - s) * n[e] + s * t
                    }))
                },
                toRgbaString: function() {
                    var e = "rgba(",
                        i = t.map(this._rgba, function(t, e) {
                            return null == t ? e > 2 ? 1 : 0 : t
                        });
                    return 1 === i[3] && (i.pop(), e = "rgb("), e + i.join() + ")"
                },
                toHslaString: function() {
                    var e = "hsla(",
                        i = t.map(this.hsla(), function(t, e) {
                            return null == t && (t = e > 2 ? 1 : 0), e && 3 > e && (t = Math.round(100 * t) + "%"), t
                        });
                    return 1 === i[3] && (i.pop(), e = "hsl("), e + i.join() + ")"
                },
                toHexString: function(e) {
                    var i = this._rgba.slice(),
                        s = i.pop();
                    return e && i.push(~~(255 * s)), "#" + t.map(i, function(t) {
                        return t = (t || 0).toString(16), 1 === t.length ? "0" + t : t
                    }).join("")
                },
                toString: function() {
                    return 0 === this._rgba[3] ? "transparent" : this.toRgbaString()
                }
            }), l.fn.parse.prototype = l.fn, u.hsla.to = function(t) {
                if (null == t[0] || null == t[1] || null == t[2]) return [null, null, null, t[3]];
                var e, i, s = t[0] / 255,
                    n = t[1] / 255,
                    o = t[2] / 255,
                    a = t[3],
                    r = Math.max(s, n, o),
                    h = Math.min(s, n, o),
                    l = r - h,
                    u = r + h,
                    c = .5 * u;
                return e = h === r ? 0 : s === r ? 60 * (n - o) / l + 360 : n === r ? 60 * (o - s) / l + 120 : 60 * (s - n) / l + 240, i = 0 === l ? 0 : .5 >= c ? l / u : l / (2 - u), [Math.round(e) % 360, i, c, null == a ? 1 : a]
            }, u.hsla.from = function(t) {
                if (null == t[0] || null == t[1] || null == t[2]) return [null, null, null, t[3]];
                var e = t[0] / 360,
                    i = t[1],
                    s = t[2],
                    o = t[3],
                    a = .5 >= s ? s * (1 + i) : s + i - s * i,
                    r = 2 * s - a;
                return [Math.round(255 * n(r, a, e + 1 / 3)), Math.round(255 * n(r, a, e)), Math.round(255 * n(r, a, e - 1 / 3)), o]
            }, f(u, function(s, n) {
                var o = n.props,
                    a = n.cache,
                    h = n.to,
                    u = n.from;
                l.fn[s] = function(s) {
                    if (h && !this[a] && (this[a] = h(this._rgba)), s === e) return this[a].slice();
                    var n, r = t.type(s),
                        c = "array" === r || "object" === r ? s : arguments,
                        d = this[a].slice();
                    return f(o, function(t, e) {
                        var s = c["object" === r ? t : e.idx];
                        null == s && (s = d[e.idx]), d[e.idx] = i(s, e)
                    }), u ? (n = l(u(d)), n[a] = d, n) : l(d)
                }, f(o, function(e, i) {
                    l.fn[e] || (l.fn[e] = function(n) {
                        var o, a = t.type(n),
                            h = "alpha" === e ? this._hsla ? "hsla" : "rgba" : s,
                            l = this[h](),
                            u = l[i.idx];
                        return "undefined" === a ? u : ("function" === a && (n = n.call(this, u), a = t.type(n)), null == n && i.empty ? this : ("string" === a && (o = r.exec(n), o && (n = u + parseFloat(o[2]) * ("+" === o[1] ? 1 : -1))), l[i.idx] = n, this[h](l)))
                    })
                })
            }), l.hook = function(e) {
                var i = e.split(" ");
                f(i, function(e, i) {
                    t.cssHooks[i] = {
                        set: function(e, n) {
                            var o, a, r = "";
                            if ("transparent" !== n && ("string" !== t.type(n) || (o = s(n)))) {
                                if (n = l(o || n), !d.rgba && 1 !== n._rgba[3]) {
                                    for (a = "backgroundColor" === i ? e.parentNode : e;
                                        ("" === r || "transparent" === r) && a && a.style;) try {
                                        r = t.css(a, "backgroundColor"), a = a.parentNode
                                    } catch (h) {}
                                    n = n.blend(r && "transparent" !== r ? r : "_default")
                                }
                                n = n.toRgbaString()
                            }
                            try {
                                e.style[i] = n
                            } catch (h) {}
                        }
                    }, t.fx.step[i] = function(e) {
                        e.colorInit || (e.start = l(e.elem, i), e.end = l(e.end), e.colorInit = !0), t.cssHooks[i].set(e.elem, e.start.transition(e.end, e.pos))
                    }
                })
            }, l.hook(a), t.cssHooks.borderColor = {
                expand: function(t) {
                    var e = {};
                    return f(["Top", "Right", "Bottom", "Left"], function(i, s) {
                        e["border" + s + "Color"] = t
                    }), e
                }
            }, o = t.Color.names = {
                aqua: "#00ffff",
                black: "#000000",
                blue: "#0000ff",
                fuchsia: "#ff00ff",
                gray: "#808080",
                green: "#008000",
                lime: "#00ff00",
                maroon: "#800000",
                navy: "#000080",
                olive: "#808000",
                purple: "#800080",
                red: "#ff0000",
                silver: "#c0c0c0",
                teal: "#008080",
                white: "#ffffff",
                yellow: "#ffff00",
                transparent: [null, null, null, 0],
                _default: "#ffffff"
            }
        }(b),
        function() {
            function e(e) {
                var i, s, n = e.ownerDocument.defaultView ? e.ownerDocument.defaultView.getComputedStyle(e, null) : e.currentStyle,
                    o = {};
                if (n && n.length && n[0] && n[n[0]])
                    for (s = n.length; s--;) i = n[s], "string" == typeof n[i] && (o[t.camelCase(i)] = n[i]);
                else
                    for (i in n) "string" == typeof n[i] && (o[i] = n[i]);
                return o
            }

            function i(e, i) {
                var s, o, a = {};
                for (s in i) o = i[s], e[s] !== o && (n[s] || (t.fx.step[s] || !isNaN(parseFloat(o))) && (a[s] = o));
                return a
            }
            var s = ["add", "remove", "toggle"],
                n = {
                    border: 1,
                    borderBottom: 1,
                    borderColor: 1,
                    borderLeft: 1,
                    borderRight: 1,
                    borderTop: 1,
                    borderWidth: 1,
                    margin: 1,
                    padding: 1
                };
            t.each(["borderLeftStyle", "borderRightStyle", "borderBottomStyle", "borderTopStyle"], function(e, i) {
                t.fx.step[i] = function(t) {
                    ("none" !== t.end && !t.setAttr || 1 === t.pos && !t.setAttr) && (b.style(t.elem, i, t.end), t.setAttr = !0)
                }
            }), t.fn.addBack || (t.fn.addBack = function(t) {
                return this.add(null == t ? this.prevObject : this.prevObject.filter(t))
            }), t.effects.animateClass = function(n, o, a, r) {
                var h = t.speed(o, a, r);
                return this.queue(function() {
                    var o, a = t(this),
                        r = a.attr("class") || "",
                        l = h.children ? a.find("*").addBack() : a;
                    l = l.map(function() {
                        var i = t(this);
                        return {
                            el: i,
                            start: e(this)
                        }
                    }), o = function() {
                        t.each(s, function(t, e) {
                            n[e] && a[e + "Class"](n[e])
                        })
                    }, o(), l = l.map(function() {
                        return this.end = e(this.el[0]), this.diff = i(this.start, this.end), this
                    }), a.attr("class", r), l = l.map(function() {
                        var e = this,
                            i = t.Deferred(),
                            s = t.extend({}, h, {
                                queue: !1,
                                complete: function() {
                                    i.resolve(e)
                                }
                            });
                        return this.el.animate(this.diff, s), i.promise()
                    }), t.when.apply(t, l.get()).done(function() {
                        o(), t.each(arguments, function() {
                            var e = this.el;
                            t.each(this.diff, function(t) {
                                e.css(t, "")
                            })
                        }), h.complete.call(a[0])
                    })
                })
            }, t.fn.extend({
                addClass: function(e) {
                    return function(i, s, n, o) {
                        return s ? t.effects.animateClass.call(this, {
                            add: i
                        }, s, n, o) : e.apply(this, arguments)
                    }
                }(t.fn.addClass),
                removeClass: function(e) {
                    return function(i, s, n, o) {
                        return arguments.length > 1 ? t.effects.animateClass.call(this, {
                            remove: i
                        }, s, n, o) : e.apply(this, arguments)
                    }
                }(t.fn.removeClass),
                toggleClass: function(e) {
                    return function(i, s, n, o, a) {
                        return "boolean" == typeof s || void 0 === s ? n ? t.effects.animateClass.call(this, s ? {
                            add: i
                        } : {
                            remove: i
                        }, n, o, a) : e.apply(this, arguments) : t.effects.animateClass.call(this, {
                            toggle: i
                        }, s, n, o)
                    }
                }(t.fn.toggleClass),
                switchClass: function(e, i, s, n, o) {
                    return t.effects.animateClass.call(this, {
                        add: i,
                        remove: e
                    }, s, n, o)
                }
            })
        }(),
        function() {
            function e(e, i, s, n) {
                return t.isPlainObject(e) && (i = e, e = e.effect), e = {
                    effect: e
                }, null == i && (i = {}), t.isFunction(i) && (n = i, s = null, i = {}), ("number" == typeof i || t.fx.speeds[i]) && (n = s, s = i, i = {}), t.isFunction(s) && (n = s, s = null), i && t.extend(e, i), s = s || i.duration, e.duration = t.fx.off ? 0 : "number" == typeof s ? s : s in t.fx.speeds ? t.fx.speeds[s] : t.fx.speeds._default, e.complete = n || i.complete, e
            }

            function i(e) {
                return !e || "number" == typeof e || t.fx.speeds[e] ? !0 : "string" != typeof e || t.effects.effect[e] ? t.isFunction(e) ? !0 : "object" != typeof e || e.effect ? !1 : !0 : !0
            }
            t.extend(t.effects, {
                version: "1.11.4",
                save: function(t, e) {
                    for (var i = 0; i < e.length; i++) null !== e[i] && t.data(_ + e[i], t[0].style[e[i]])
                },
                restore: function(t, e) {
                    var i, s;
                    for (s = 0; s < e.length; s++) null !== e[s] && (i = t.data(_ + e[s]), void 0 === i && (i = ""), t.css(e[s], i))
                },
                setMode: function(t, e) {
                    return "toggle" === e && (e = t.is(":hidden") ? "show" : "hide"), e
                },
                getBaseline: function(t, e) {
                    var i, s;
                    switch (t[0]) {
                        case "top":
                            i = 0;
                            break;
                        case "middle":
                            i = .5;
                            break;
                        case "bottom":
                            i = 1;
                            break;
                        default:
                            i = t[0] / e.height
                    }
                    switch (t[1]) {
                        case "left":
                            s = 0;
                            break;
                        case "center":
                            s = .5;
                            break;
                        case "right":
                            s = 1;
                            break;
                        default:
                            s = t[1] / e.width
                    }
                    return {
                        x: s,
                        y: i
                    }
                },
                createWrapper: function(e) {
                    if (e.parent().is(".ui-effects-wrapper")) return e.parent();
                    var i = {
                            width: e.outerWidth(!0),
                            height: e.outerHeight(!0),
                            "float": e.css("float")
                        },
                        s = t("<div></div>").addClass("ui-effects-wrapper").css({
                            fontSize: "100%",
                            background: "transparent",
                            border: "none",
                            margin: 0,
                            padding: 0
                        }),
                        n = {
                            width: e.width(),
                            height: e.height()
                        },
                        o = document.activeElement;
                    try {
                        o.id
                    } catch (a) {
                        o = document.body
                    }
                    return e.wrap(s), (e[0] === o || t.contains(e[0], o)) && t(o).focus(), s = e.parent(), "static" === e.css("position") ? (s.css({
                        position: "relative"
                    }), e.css({
                        position: "relative"
                    })) : (t.extend(i, {
                        position: e.css("position"),
                        zIndex: e.css("z-index")
                    }), t.each(["top", "left", "bottom", "right"], function(t, s) {
                        i[s] = e.css(s), isNaN(parseInt(i[s], 10)) && (i[s] = "auto")
                    }), e.css({
                        position: "relative",
                        top: 0,
                        left: 0,
                        right: "auto",
                        bottom: "auto"
                    })), e.css(n), s.css(i).show()
                },
                removeWrapper: function(e) {
                    var i = document.activeElement;
                    return e.parent().is(".ui-effects-wrapper") && (e.parent().replaceWith(e), (e[0] === i || t.contains(e[0], i)) && t(i).focus()), e
                },
                setTransition: function(e, i, s, n) {
                    return n = n || {}, t.each(i, function(t, i) {
                        var o = e.cssUnit(i);
                        o[0] > 0 && (n[i] = o[0] * s + o[1])
                    }), n
                }
            }), t.fn.extend({
                effect: function() {
                    function i(e) {
                        function i() {
                            t.isFunction(o) && o.call(n[0]), t.isFunction(e) && e()
                        }
                        var n = t(this),
                            o = s.complete,
                            r = s.mode;
                        (n.is(":hidden") ? "hide" === r : "show" === r) ? (n[r](), i()) : a.call(n[0], s, i)
                    }
                    var s = e.apply(this, arguments),
                        n = s.mode,
                        o = s.queue,
                        a = t.effects.effect[s.effect];
                    return t.fx.off || !a ? n ? this[n](s.duration, s.complete) : this.each(function() {
                        s.complete && s.complete.call(this)
                    }) : o === !1 ? this.each(i) : this.queue(o || "fx", i)
                },
                show: function(t) {
                    return function(s) {
                        if (i(s)) return t.apply(this, arguments);
                        var n = e.apply(this, arguments);
                        return n.mode = "show", this.effect.call(this, n)
                    }
                }(t.fn.show),
                hide: function(t) {
                    return function(s) {
                        if (i(s)) return t.apply(this, arguments);
                        var n = e.apply(this, arguments);
                        return n.mode = "hide", this.effect.call(this, n)
                    }
                }(t.fn.hide),
                toggle: function(t) {
                    return function(s) {
                        if (i(s) || "boolean" == typeof s) return t.apply(this, arguments);
                        var n = e.apply(this, arguments);
                        return n.mode = "toggle", this.effect.call(this, n)
                    }
                }(t.fn.toggle),
                cssUnit: function(e) {
                    var i = this.css(e),
                        s = [];
                    return t.each(["em", "px", "%", "pt"], function(t, e) {
                        i.indexOf(e) > 0 && (s = [parseFloat(i), e])
                    }), s
                }
            })
        }(),
        function() {
            var e = {};
            t.each(["Quad", "Cubic", "Quart", "Quint", "Expo"], function(t, i) {
                e[i] = function(e) {
                    return Math.pow(e, t + 2)
                }
            }), t.extend(e, {
                Sine: function(t) {
                    return 1 - Math.cos(t * Math.PI / 2)
                },
                Circ: function(t) {
                    return 1 - Math.sqrt(1 - t * t)
                },
                Elastic: function(t) {
                    return 0 === t || 1 === t ? t : -Math.pow(2, 8 * (t - 1)) * Math.sin((80 * (t - 1) - 7.5) * Math.PI / 15)
                },
                Back: function(t) {
                    return t * t * (3 * t - 2)
                },
                Bounce: function(t) {
                    for (var e, i = 4; t < ((e = Math.pow(2, --i)) - 1) / 11;);
                    return 1 / Math.pow(4, 3 - i) - 7.5625 * Math.pow((3 * e - 2) / 22 - t, 2)
                }
            }), t.each(e, function(e, i) {
                t.easing["easeIn" + e] = i, t.easing["easeOut" + e] = function(t) {
                    return 1 - i(1 - t)
                }, t.easing["easeInOut" + e] = function(t) {
                    return .5 > t ? i(2 * t) / 2 : 1 - i(-2 * t + 2) / 2
                }
            })
        }();
    t.effects, t.effects.effect.blind = function(e, i) {
        var s, n, o, a = t(this),
            r = /up|down|vertical/,
            h = /up|left|vertical|horizontal/,
            l = ["position", "top", "bottom", "left", "right", "height", "width"],
            u = t.effects.setMode(a, e.mode || "hide"),
            c = e.direction || "up",
            d = r.test(c),
            p = d ? "height" : "width",
            f = d ? "top" : "left",
            m = h.test(c),
            g = {},
            v = "show" === u;
        a.parent().is(".ui-effects-wrapper") ? t.effects.save(a.parent(), l) : t.effects.save(a, l), a.show(), s = t.effects.createWrapper(a).css({
            overflow: "hidden"
        }), n = s[p](), o = parseFloat(s.css(f)) || 0, g[p] = v ? n : 0, m || (a.css(d ? "bottom" : "right", 0).css(d ? "top" : "left", "auto").css({
            position: "absolute"
        }), g[f] = v ? o : n + o), v && (s.css(p, 0), m || s.css(f, o + n)), s.animate(g, {
            duration: e.duration,
            easing: e.easing,
            queue: !1,
            complete: function() {
                "hide" === u && a.hide(), t.effects.restore(a, l), t.effects.removeWrapper(a), i()
            }
        })
    }, t.effects.effect.bounce = function(e, i) {
        var s, n, o, a = t(this),
            r = ["position", "top", "bottom", "left", "right", "height", "width"],
            h = t.effects.setMode(a, e.mode || "effect"),
            l = "hide" === h,
            u = "show" === h,
            c = e.direction || "up",
            d = e.distance,
            p = e.times || 5,
            f = 2 * p + (u || l ? 1 : 0),
            m = e.duration / f,
            g = e.easing,
            v = "up" === c || "down" === c ? "top" : "left",
            _ = "up" === c || "left" === c,
            b = a.queue(),
            y = b.length;
        for ((u || l) && r.push("opacity"), t.effects.save(a, r), a.show(), t.effects.createWrapper(a), d || (d = a["top" === v ? "outerHeight" : "outerWidth"]() / 3), u && (o = {
                opacity: 1
            }, o[v] = 0, a.css("opacity", 0).css(v, _ ? 2 * -d : 2 * d).animate(o, m, g)), l && (d /= Math.pow(2, p - 1)), o = {}, o[v] = 0, s = 0; p > s; s++) n = {}, n[v] = (_ ? "-=" : "+=") + d, a.animate(n, m, g).animate(o, m, g), d = l ? 2 * d : d / 2;
        l && (n = {
            opacity: 0
        }, n[v] = (_ ? "-=" : "+=") + d, a.animate(n, m, g)), a.queue(function() {
            l && a.hide(), t.effects.restore(a, r), t.effects.removeWrapper(a), i()
        }), y > 1 && b.splice.apply(b, [1, 0].concat(b.splice(y, f + 1))), a.dequeue()
    }, t.effects.effect.clip = function(e, i) {
        var s, n, o, a = t(this),
            r = ["position", "top", "bottom", "left", "right", "height", "width"],
            h = t.effects.setMode(a, e.mode || "hide"),
            l = "show" === h,
            u = e.direction || "vertical",
            c = "vertical" === u,
            d = c ? "height" : "width",
            p = c ? "top" : "left",
            f = {};
        t.effects.save(a, r), a.show(), s = t.effects.createWrapper(a).css({
            overflow: "hidden"
        }), n = "IMG" === a[0].tagName ? s : a, o = n[d](), l && (n.css(d, 0), n.css(p, o / 2)), f[d] = l ? o : 0, f[p] = l ? 0 : o / 2, n.animate(f, {
            queue: !1,
            duration: e.duration,
            easing: e.easing,
            complete: function() {
                l || a.hide(), t.effects.restore(a, r), t.effects.removeWrapper(a), i()
            }
        })
    }, t.effects.effect.drop = function(e, i) {
        var s, n = t(this),
            o = ["position", "top", "bottom", "left", "right", "opacity", "height", "width"],
            a = t.effects.setMode(n, e.mode || "hide"),
            r = "show" === a,
            h = e.direction || "left",
            l = "up" === h || "down" === h ? "top" : "left",
            u = "up" === h || "left" === h ? "pos" : "neg",
            c = {
                opacity: r ? 1 : 0
            };
        t.effects.save(n, o), n.show(), t.effects.createWrapper(n), s = e.distance || n["top" === l ? "outerHeight" : "outerWidth"](!0) / 2, r && n.css("opacity", 0).css(l, "pos" === u ? -s : s), c[l] = (r ? "pos" === u ? "+=" : "-=" : "pos" === u ? "-=" : "+=") + s, n.animate(c, {
            queue: !1,
            duration: e.duration,
            easing: e.easing,
            complete: function() {
                "hide" === a && n.hide(), t.effects.restore(n, o), t.effects.removeWrapper(n), i()
            }
        })
    }, t.effects.effect.explode = function(e, i) {
        function s() {
            b.push(this), b.length === c * d && n()
        }

        function n() {
            p.css({
                visibility: "visible"
            }), t(b).remove(), m || p.hide(), i()
        }
        var o, a, r, h, l, u, c = e.pieces ? Math.round(Math.sqrt(e.pieces)) : 3,
            d = c,
            p = t(this),
            f = t.effects.setMode(p, e.mode || "hide"),
            m = "show" === f,
            g = p.show().css("visibility", "hidden").offset(),
            v = Math.ceil(p.outerWidth() / d),
            _ = Math.ceil(p.outerHeight() / c),
            b = [];
        for (o = 0; c > o; o++)
            for (h = g.top + o * _, u = o - (c - 1) / 2, a = 0; d > a; a++) r = g.left + a * v, l = a - (d - 1) / 2, p.clone().appendTo("body").wrap("<div></div>").css({
                position: "absolute",
                visibility: "visible",
                left: -a * v,
                top: -o * _
            }).parent().addClass("ui-effects-explode").css({
                position: "absolute",
                overflow: "hidden",
                width: v,
                height: _,
                left: r + (m ? l * v : 0),
                top: h + (m ? u * _ : 0),
                opacity: m ? 0 : 1
            }).animate({
                left: r + (m ? 0 : l * v),
                top: h + (m ? 0 : u * _),
                opacity: m ? 1 : 0
            }, e.duration || 500, e.easing, s)
    }, t.effects.effect.fade = function(e, i) {
        var s = t(this),
            n = t.effects.setMode(s, e.mode || "toggle");
        s.animate({
            opacity: n
        }, {
            queue: !1,
            duration: e.duration,
            easing: e.easing,
            complete: i
        })
    }, t.effects.effect.fold = function(e, i) {
        var s, n, o = t(this),
            a = ["position", "top", "bottom", "left", "right", "height", "width"],
            r = t.effects.setMode(o, e.mode || "hide"),
            h = "show" === r,
            l = "hide" === r,
            u = e.size || 15,
            c = /([0-9]+)%/.exec(u),
            d = !!e.horizFirst,
            p = h !== d,
            f = p ? ["width", "height"] : ["height", "width"],
            m = e.duration / 2,
            g = {},
            v = {};
        t.effects.save(o, a), o.show(), s = t.effects.createWrapper(o).css({
            overflow: "hidden"
        }), n = p ? [s.width(), s.height()] : [s.height(), s.width()], c && (u = parseInt(c[1], 10) / 100 * n[l ? 0 : 1]), h && s.css(d ? {
            height: 0,
            width: u
        } : {
            height: u,
            width: 0
        }), g[f[0]] = h ? n[0] : u, v[f[1]] = h ? n[1] : 0, s.animate(g, m, e.easing).animate(v, m, e.easing, function() {
            l && o.hide(), t.effects.restore(o, a), t.effects.removeWrapper(o), i()
        })
    }, t.effects.effect.highlight = function(e, i) {
        var s = t(this),
            n = ["backgroundImage", "backgroundColor", "opacity"],
            o = t.effects.setMode(s, e.mode || "show"),
            a = {
                backgroundColor: s.css("backgroundColor")
            };
        "hide" === o && (a.opacity = 0), t.effects.save(s, n), s.show().css({
            backgroundImage: "none",
            backgroundColor: e.color || "#ffff99"
        }).animate(a, {
            queue: !1,
            duration: e.duration,
            easing: e.easing,
            complete: function() {
                "hide" === o && s.hide(), t.effects.restore(s, n), i()
            }
        })
    }, t.effects.effect.size = function(e, i) {
        var s, n, o, a = t(this),
            r = ["position", "top", "bottom", "left", "right", "width", "height", "overflow", "opacity"],
            h = ["position", "top", "bottom", "left", "right", "overflow", "opacity"],
            l = ["width", "height", "overflow"],
            u = ["fontSize"],
            c = ["borderTopWidth", "borderBottomWidth", "paddingTop", "paddingBottom"],
            d = ["borderLeftWidth", "borderRightWidth", "paddingLeft", "paddingRight"],
            p = t.effects.setMode(a, e.mode || "effect"),
            f = e.restore || "effect" !== p,
            m = e.scale || "both",
            g = e.origin || ["middle", "center"],
            v = a.css("position"),
            _ = f ? r : h,
            b = {
                height: 0,
                width: 0,
                outerHeight: 0,
                outerWidth: 0
            };
        "show" === p && a.show(), s = {
            height: a.height(),
            width: a.width(),
            outerHeight: a.outerHeight(),
            outerWidth: a.outerWidth()
        }, "toggle" === e.mode && "show" === p ? (a.from = e.to || b, a.to = e.from || s) : (a.from = e.from || ("show" === p ? b : s), a.to = e.to || ("hide" === p ? b : s)), o = {
            from: {
                y: a.from.height / s.height,
                x: a.from.width / s.width
            },
            to: {
                y: a.to.height / s.height,
                x: a.to.width / s.width
            }
        }, ("box" === m || "both" === m) && (o.from.y !== o.to.y && (_ = _.concat(c), a.from = t.effects.setTransition(a, c, o.from.y, a.from), a.to = t.effects.setTransition(a, c, o.to.y, a.to)), o.from.x !== o.to.x && (_ = _.concat(d), a.from = t.effects.setTransition(a, d, o.from.x, a.from), a.to = t.effects.setTransition(a, d, o.to.x, a.to))), ("content" === m || "both" === m) && o.from.y !== o.to.y && (_ = _.concat(u).concat(l), a.from = t.effects.setTransition(a, u, o.from.y, a.from), a.to = t.effects.setTransition(a, u, o.to.y, a.to)), t.effects.save(a, _), a.show(), t.effects.createWrapper(a), a.css("overflow", "hidden").css(a.from), g && (n = t.effects.getBaseline(g, s), a.from.top = (s.outerHeight - a.outerHeight()) * n.y, a.from.left = (s.outerWidth - a.outerWidth()) * n.x, a.to.top = (s.outerHeight - a.to.outerHeight) * n.y, a.to.left = (s.outerWidth - a.to.outerWidth) * n.x), a.css(a.from), ("content" === m || "both" === m) && (c = c.concat(["marginTop", "marginBottom"]).concat(u), d = d.concat(["marginLeft", "marginRight"]), l = r.concat(c).concat(d), a.find("*[width]").each(function() {
            var i = t(this),
                s = {
                    height: i.height(),
                    width: i.width(),
                    outerHeight: i.outerHeight(),
                    outerWidth: i.outerWidth()
                };
            f && t.effects.save(i, l), i.from = {
                height: s.height * o.from.y,
                width: s.width * o.from.x,
                outerHeight: s.outerHeight * o.from.y,
                outerWidth: s.outerWidth * o.from.x
            }, i.to = {
                height: s.height * o.to.y,
                width: s.width * o.to.x,
                outerHeight: s.height * o.to.y,
                outerWidth: s.width * o.to.x
            }, o.from.y !== o.to.y && (i.from = t.effects.setTransition(i, c, o.from.y, i.from), i.to = t.effects.setTransition(i, c, o.to.y, i.to)), o.from.x !== o.to.x && (i.from = t.effects.setTransition(i, d, o.from.x, i.from), i.to = t.effects.setTransition(i, d, o.to.x, i.to)), i.css(i.from), i.animate(i.to, e.duration, e.easing, function() {
                f && t.effects.restore(i, l)
            })
        })), a.animate(a.to, {
            queue: !1,
            duration: e.duration,
            easing: e.easing,
            complete: function() {
                0 === a.to.opacity && a.css("opacity", a.from.opacity), "hide" === p && a.hide(), t.effects.restore(a, _), f || ("static" === v ? a.css({
                    position: "relative",
                    top: a.to.top,
                    left: a.to.left
                }) : t.each(["top", "left"], function(t, e) {
                    a.css(e, function(e, i) {
                        var s = parseInt(i, 10),
                            n = t ? a.to.left : a.to.top;
                        return "auto" === i ? n + "px" : s + n + "px"
                    })
                })), t.effects.removeWrapper(a), i()
            }
        })
    }, t.effects.effect.scale = function(e, i) {
        var s = t(this),
            n = t.extend(!0, {}, e),
            o = t.effects.setMode(s, e.mode || "effect"),
            a = parseInt(e.percent, 10) || (0 === parseInt(e.percent, 10) ? 0 : "hide" === o ? 0 : 100),
            r = e.direction || "both",
            h = e.origin,
            l = {
                height: s.height(),
                width: s.width(),
                outerHeight: s.outerHeight(),
                outerWidth: s.outerWidth()
            },
            u = {
                y: "horizontal" !== r ? a / 100 : 1,
                x: "vertical" !== r ? a / 100 : 1
            };
        n.effect = "size", n.queue = !1, n.complete = i, "effect" !== o && (n.origin = h || ["middle", "center"], n.restore = !0), n.from = e.from || ("show" === o ? {
            height: 0,
            width: 0,
            outerHeight: 0,
            outerWidth: 0
        } : l), n.to = {
            height: l.height * u.y,
            width: l.width * u.x,
            outerHeight: l.outerHeight * u.y,
            outerWidth: l.outerWidth * u.x
        }, n.fade && ("show" === o && (n.from.opacity = 0, n.to.opacity = 1), "hide" === o && (n.from.opacity = 1, n.to.opacity = 0)), s.effect(n)
    }, t.effects.effect.puff = function(e, i) {
        var s = t(this),
            n = t.effects.setMode(s, e.mode || "hide"),
            o = "hide" === n,
            a = parseInt(e.percent, 10) || 150,
            r = a / 100,
            h = {
                height: s.height(),
                width: s.width(),
                outerHeight: s.outerHeight(),
                outerWidth: s.outerWidth()
            };
        t.extend(e, {
            effect: "scale",
            queue: !1,
            fade: !0,
            mode: n,
            complete: i,
            percent: o ? a : 100,
            from: o ? h : {
                height: h.height * r,
                width: h.width * r,
                outerHeight: h.outerHeight * r,
                outerWidth: h.outerWidth * r
            }
        }), s.effect(e)
    }, t.effects.effect.pulsate = function(e, i) {
        var s, n = t(this),
            o = t.effects.setMode(n, e.mode || "show"),
            a = "show" === o,
            r = "hide" === o,
            h = a || "hide" === o,
            l = 2 * (e.times || 5) + (h ? 1 : 0),
            u = e.duration / l,
            c = 0,
            d = n.queue(),
            p = d.length;
        for ((a || !n.is(":visible")) && (n.css("opacity", 0).show(), c = 1), s = 1; l > s; s++) n.animate({
            opacity: c
        }, u, e.easing), c = 1 - c;
        n.animate({
            opacity: c
        }, u, e.easing), n.queue(function() {
            r && n.hide(), i()
        }), p > 1 && d.splice.apply(d, [1, 0].concat(d.splice(p, l + 1))), n.dequeue()
    }, t.effects.effect.shake = function(e, i) {
        var s, n = t(this),
            o = ["position", "top", "bottom", "left", "right", "height", "width"],
            a = t.effects.setMode(n, e.mode || "effect"),
            r = e.direction || "left",
            h = e.distance || 20,
            l = e.times || 3,
            u = 2 * l + 1,
            c = Math.round(e.duration / u),
            d = "up" === r || "down" === r ? "top" : "left",
            p = "up" === r || "left" === r,
            f = {},
            m = {},
            g = {},
            v = n.queue(),
            _ = v.length;
        for (t.effects.save(n, o), n.show(), t.effects.createWrapper(n), f[d] = (p ? "-=" : "+=") + h, m[d] = (p ? "+=" : "-=") + 2 * h, g[d] = (p ? "-=" : "+=") + 2 * h, n.animate(f, c, e.easing), s = 1; l > s; s++) n.animate(m, c, e.easing).animate(g, c, e.easing);
        n.animate(m, c, e.easing).animate(f, c / 2, e.easing).queue(function() {
            "hide" === a && n.hide(), t.effects.restore(n, o), t.effects.removeWrapper(n), i()
        }), _ > 1 && v.splice.apply(v, [1, 0].concat(v.splice(_, u + 1))), n.dequeue()
    }, t.effects.effect.slide = function(e, i) {
        var s, n = t(this),
            o = ["position", "top", "bottom", "left", "right", "width", "height"],
            a = t.effects.setMode(n, e.mode || "show"),
            r = "show" === a,
            h = e.direction || "left",
            l = "up" === h || "down" === h ? "top" : "left",
            u = "up" === h || "left" === h,
            c = {};
        t.effects.save(n, o), n.show(), s = e.distance || n["top" === l ? "outerHeight" : "outerWidth"](!0), t.effects.createWrapper(n).css({
            overflow: "hidden"
        }), r && n.css(l, u ? isNaN(s) ? "-" + s : -s : s), c[l] = (r ? u ? "+=" : "-=" : u ? "-=" : "+=") + s, n.animate(c, {
            queue: !1,
            duration: e.duration,
            easing: e.easing,
            complete: function() {
                "hide" === a && n.hide(), t.effects.restore(n, o), t.effects.removeWrapper(n), i()
            }
        })
    }, t.effects.effect.transfer = function(e, i) {
        var s = t(this),
            n = t(e.to),
            o = "fixed" === n.css("position"),
            a = t("body"),
            r = o ? a.scrollTop() : 0,
            h = o ? a.scrollLeft() : 0,
            l = n.offset(),
            u = {
                top: l.top - r,
                left: l.left - h,
                height: n.innerHeight(),
                width: n.innerWidth()
            },
            c = s.offset(),
            d = t("<div class='ui-effects-transfer'></div>").appendTo(document.body).addClass(e.className).css({
                top: c.top - r,
                left: c.left - h,
                height: s.innerHeight(),
                width: s.innerWidth(),
                position: o ? "fixed" : "absolute"
            }).animate(u, e.duration, e.easing, function() {
                d.remove(), i()
            })
    }, t.widget("ui.progressbar", {
        version: "1.11.4",
        options: {
            max: 100,
            value: 0,
            change: null,
            complete: null
        },
        min: 0,
        _create: function() {
            this.oldValue = this.options.value = this._constrainedValue(), this.element.addClass("ui-progressbar ui-widget ui-widget-content ui-corner-all").attr({
                role: "progressbar",
                "aria-valuemin": this.min
            }), this.valueDiv = t("<div class='ui-progressbar-value ui-widget-header ui-corner-left'></div>").appendTo(this.element), this._refreshValue()
        },
        _destroy: function() {
            this.element.removeClass("ui-progressbar ui-widget ui-widget-content ui-corner-all").removeAttr("role").removeAttr("aria-valuemin").removeAttr("aria-valuemax").removeAttr("aria-valuenow"), this.valueDiv.remove()
        },
        value: function(t) {
            return void 0 === t ? this.options.value : (this.options.value = this._constrainedValue(t), void this._refreshValue())
        },
        _constrainedValue: function(t) {
            return void 0 === t && (t = this.options.value), this.indeterminate = t === !1, "number" != typeof t && (t = 0), this.indeterminate ? !1 : Math.min(this.options.max, Math.max(this.min, t))
        },
        _setOptions: function(t) {
            var e = t.value;
            delete t.value, this._super(t), this.options.value = this._constrainedValue(e), this._refreshValue()
        },
        _setOption: function(t, e) {
            "max" === t && (e = Math.max(this.min, e)), "disabled" === t && this.element.toggleClass("ui-state-disabled", !!e).attr("aria-disabled", e), this._super(t, e)
        },
        _percentage: function() {
            return this.indeterminate ? 100 : 100 * (this.options.value - this.min) / (this.options.max - this.min)
        },
        _refreshValue: function() {
            var e = this.options.value,
                i = this._percentage();
            this.valueDiv.toggle(this.indeterminate || e > this.min).toggleClass("ui-corner-right", e === this.options.max).width(i.toFixed(0) + "%"), this.element.toggleClass("ui-progressbar-indeterminate", this.indeterminate), this.indeterminate ? (this.element.removeAttr("aria-valuenow"), this.overlayDiv || (this.overlayDiv = t("<div class='ui-progressbar-overlay'></div>").appendTo(this.valueDiv))) : (this.element.attr({
                "aria-valuemax": this.options.max,
                "aria-valuenow": e
            }), this.overlayDiv && (this.overlayDiv.remove(), this.overlayDiv = null)), this.oldValue !== e && (this.oldValue = e, this._trigger("change")), e === this.options.max && this._trigger("complete")
        }
    }), t.widget("ui.selectable", t.ui.mouse, {
        version: "1.11.4",
        options: {
            appendTo: "body",
            autoRefresh: !0,
            distance: 0,
            filter: "*",
            tolerance: "touch",
            selected: null,
            selecting: null,
            start: null,
            stop: null,
            unselected: null,
            unselecting: null
        },
        _create: function() {
            var e, i = this;
            this.element.addClass("ui-selectable"), this.dragged = !1, this.refresh = function() {
                e = t(i.options.filter, i.element[0]), e.addClass("ui-selectee"), e.each(function() {
                    var e = t(this),
                        i = e.offset();
                    t.data(this, "selectable-item", {
                        element: this,
                        $element: e,
                        left: i.left,
                        top: i.top,
                        right: i.left + e.outerWidth(),
                        bottom: i.top + e.outerHeight(),
                        startselected: !1,
                        selected: e.hasClass("ui-selected"),
                        selecting: e.hasClass("ui-selecting"),
                        unselecting: e.hasClass("ui-unselecting")
                    })
                })
            }, this.refresh(), this.selectees = e.addClass("ui-selectee"), this._mouseInit(), this.helper = t("<div class='ui-selectable-helper'></div>")
        },
        _destroy: function() {
            this.selectees.removeClass("ui-selectee").removeData("selectable-item"), this.element.removeClass("ui-selectable ui-selectable-disabled"), this._mouseDestroy()
        },
        _mouseStart: function(e) {
            var i = this,
                s = this.options;
            this.opos = [e.pageX, e.pageY], this.options.disabled || (this.selectees = t(s.filter, this.element[0]), this._trigger("start", e), t(s.appendTo).append(this.helper), this.helper.css({
                left: e.pageX,
                top: e.pageY,
                width: 0,
                height: 0
            }), s.autoRefresh && this.refresh(), this.selectees.filter(".ui-selected").each(function() {
                var s = t.data(this, "selectable-item");
                s.startselected = !0, e.metaKey || e.ctrlKey || (s.$element.removeClass("ui-selected"), s.selected = !1, s.$element.addClass("ui-unselecting"), s.unselecting = !0, i._trigger("unselecting", e, {
                    unselecting: s.element
                }))
            }), t(e.target).parents().addBack().each(function() {
                var s, n = t.data(this, "selectable-item");
                return n ? (s = !e.metaKey && !e.ctrlKey || !n.$element.hasClass("ui-selected"), n.$element.removeClass(s ? "ui-unselecting" : "ui-selected").addClass(s ? "ui-selecting" : "ui-unselecting"), n.unselecting = !s, n.selecting = s, n.selected = s, s ? i._trigger("selecting", e, {
                    selecting: n.element
                }) : i._trigger("unselecting", e, {
                    unselecting: n.element
                }), !1) : void 0
            }))
        },
        _mouseDrag: function(e) {
            if (this.dragged = !0, !this.options.disabled) {
                var i, s = this,
                    n = this.options,
                    o = this.opos[0],
                    a = this.opos[1],
                    r = e.pageX,
                    h = e.pageY;
                return o > r && (i = r, r = o, o = i), a > h && (i = h, h = a, a = i), this.helper.css({
                    left: o,
                    top: a,
                    width: r - o,
                    height: h - a
                }), this.selectees.each(function() {
                    var i = t.data(this, "selectable-item"),
                        l = !1;
                    i && i.element !== s.element[0] && ("touch" === n.tolerance ? l = !(i.left > r || i.right < o || i.top > h || i.bottom < a) : "fit" === n.tolerance && (l = i.left > o && i.right < r && i.top > a && i.bottom < h), l ? (i.selected && (i.$element.removeClass("ui-selected"), i.selected = !1), i.unselecting && (i.$element.removeClass("ui-unselecting"), i.unselecting = !1), i.selecting || (i.$element.addClass("ui-selecting"), i.selecting = !0, s._trigger("selecting", e, {
                        selecting: i.element
                    }))) : (i.selecting && ((e.metaKey || e.ctrlKey) && i.startselected ? (i.$element.removeClass("ui-selecting"), i.selecting = !1, i.$element.addClass("ui-selected"), i.selected = !0) : (i.$element.removeClass("ui-selecting"), i.selecting = !1, i.startselected && (i.$element.addClass("ui-unselecting"), i.unselecting = !0), s._trigger("unselecting", e, {
                        unselecting: i.element
                    }))), i.selected && (e.metaKey || e.ctrlKey || i.startselected || (i.$element.removeClass("ui-selected"), i.selected = !1, i.$element.addClass("ui-unselecting"), i.unselecting = !0, s._trigger("unselecting", e, {
                        unselecting: i.element
                    })))))
                }), !1
            }
        },
        _mouseStop: function(e) {
            var i = this;
            return this.dragged = !1, t(".ui-unselecting", this.element[0]).each(function() {
                var s = t.data(this, "selectable-item");
                s.$element.removeClass("ui-unselecting"), s.unselecting = !1, s.startselected = !1, i._trigger("unselected", e, {
                    unselected: s.element
                })
            }), t(".ui-selecting", this.element[0]).each(function() {
                var s = t.data(this, "selectable-item");
                s.$element.removeClass("ui-selecting").addClass("ui-selected"), s.selecting = !1, s.selected = !0, s.startselected = !0, i._trigger("selected", e, {
                    selected: s.element
                })
            }), this._trigger("stop", e), this.helper.remove(), !1
        }
    }), t.widget("ui.selectmenu", {
        version: "1.11.4",
        defaultElement: "<select>",
        options: {
            appendTo: null,
            disabled: null,
            icons: {
                button: "ui-icon-triangle-1-s"
            },
            position: {
                my: "left top",
                at: "left bottom",
                collision: "none"
            },
            width: null,
            change: null,
            close: null,
            focus: null,
            open: null,
            select: null
        },
        _create: function() {
            var t = this.element.uniqueId().attr("id");
            this.ids = {
                element: t,
                button: t + "-button",
                menu: t + "-menu"
            }, this._drawButton(), this._drawMenu(), this.options.disabled && this.disable()
        },
        _drawButton: function() {
            var e = this;
            this.label = t("label[for='" + this.ids.element + "']").attr("for", this.ids.button), this._on(this.label, {
                click: function(t) {
                    this.button.focus(), t.preventDefault()
                }
            }), this.element.hide(), this.button = t("<span>", {
                "class": "ui-selectmenu-button ui-widget ui-state-default ui-corner-all",
                tabindex: this.options.disabled ? -1 : 0,
                id: this.ids.button,
                role: "combobox",
                "aria-expanded": "false",
                "aria-autocomplete": "list",
                "aria-owns": this.ids.menu,
                "aria-haspopup": "true"
            }).insertAfter(this.element), t("<span>", {
                "class": "ui-icon " + this.options.icons.button
            }).prependTo(this.button), this.buttonText = t("<span>", {
                "class": "ui-selectmenu-text"
            }).appendTo(this.button), this._setText(this.buttonText, this.element.find("option:selected").text()), this._resizeButton(), this._on(this.button, this._buttonEvents), this.button.one("focusin", function() {
                e.menuItems || e._refreshMenu()
            }), this._hoverable(this.button), this._focusable(this.button)
        },
        _drawMenu: function() {
            var e = this;
            this.menu = t("<ul>", {
                "aria-hidden": "true",
                "aria-labelledby": this.ids.button,
                id: this.ids.menu
            }), this.menuWrap = t("<div>", {
                "class": "ui-selectmenu-menu ui-front"
            }).append(this.menu).appendTo(this._appendTo()), this.menuInstance = this.menu.menu({
                role: "listbox",
                select: function(t, i) {
                    t.preventDefault(), e._setSelection(), e._select(i.item.data("ui-selectmenu-item"), t)
                },
                focus: function(t, i) {
                    var s = i.item.data("ui-selectmenu-item");
                    null != e.focusIndex && s.index !== e.focusIndex && (e._trigger("focus", t, {
                        item: s
                    }), e.isOpen || e._select(s, t)), e.focusIndex = s.index, e.button.attr("aria-activedescendant", e.menuItems.eq(s.index).attr("id"))
                }
            }).menu("instance"), this.menu.addClass("ui-corner-bottom").removeClass("ui-corner-all"), this.menuInstance._off(this.menu, "mouseleave"), this.menuInstance._closeOnDocumentClick = function() {
                return !1
            }, this.menuInstance._isDivider = function() {
                return !1
            }
        },
        refresh: function() {
            this._refreshMenu(), this._setText(this.buttonText, this._getSelectedItem().text()), this.options.width || this._resizeButton()
        },
        _refreshMenu: function() {
            this.menu.empty();
            var t, e = this.element.find("option");
            e.length && (this._parseOptions(e), this._renderMenu(this.menu, this.items), this.menuInstance.refresh(), this.menuItems = this.menu.find("li").not(".ui-selectmenu-optgroup"), t = this._getSelectedItem(), this.menuInstance.focus(null, t), this._setAria(t.data("ui-selectmenu-item")), this._setOption("disabled", this.element.prop("disabled")))
        },
        open: function(t) {
            this.options.disabled || (this.menuItems ? (this.menu.find(".ui-state-focus").removeClass("ui-state-focus"), this.menuInstance.focus(null, this._getSelectedItem())) : this._refreshMenu(), this.isOpen = !0, this._toggleAttr(), this._resizeMenu(), this._position(), this._on(this.document, this._documentClick), this._trigger("open", t))
        },
        _position: function() {
            this.menuWrap.position(t.extend({ of: this.button
            }, this.options.position))
        },
        close: function(t) {
            this.isOpen && (this.isOpen = !1, this._toggleAttr(), this.range = null, this._off(this.document), this._trigger("close", t))
        },
        widget: function() {
            return this.button
        },
        menuWidget: function() {
            return this.menu
        },
        _renderMenu: function(e, i) {
            var s = this,
                n = "";
            t.each(i, function(i, o) {
                o.optgroup !== n && (t("<li>", {
                    "class": "ui-selectmenu-optgroup ui-menu-divider" + (o.element.parent("optgroup").prop("disabled") ? " ui-state-disabled" : ""),
                    text: o.optgroup
                }).appendTo(e), n = o.optgroup), s._renderItemData(e, o)
            })
        },
        _renderItemData: function(t, e) {
            return this._renderItem(t, e).data("ui-selectmenu-item", e)
        },
        _renderItem: function(e, i) {
            var s = t("<li>");
            return i.disabled && s.addClass("ui-state-disabled"), this._setText(s, i.label), s.appendTo(e)
        },
        _setText: function(t, e) {
            e ? t.text(e) : t.html("&#160;")
        },
        _move: function(t, e) {
            var i, s, n = ".ui-menu-item";
            this.isOpen ? i = this.menuItems.eq(this.focusIndex) : (i = this.menuItems.eq(this.element[0].selectedIndex), n += ":not(.ui-state-disabled)"), s = "first" === t || "last" === t ? i["first" === t ? "prevAll" : "nextAll"](n).eq(-1) : i[t + "All"](n).eq(0), s.length && this.menuInstance.focus(e, s)
        },
        _getSelectedItem: function() {
            return this.menuItems.eq(this.element[0].selectedIndex)
        },
        _toggle: function(t) {
            this[this.isOpen ? "close" : "open"](t)
        },
        _setSelection: function() {
            var t;
            this.range && (window.getSelection ? (t = window.getSelection(), t.removeAllRanges(), t.addRange(this.range)) : this.range.select(), this.button.focus())
        },
        _documentClick: {
            mousedown: function(e) {
                this.isOpen && (t(e.target).closest(".ui-selectmenu-menu, #" + this.ids.button).length || this.close(e))
            }
        },
        _buttonEvents: {
            mousedown: function() {
                var t;
                window.getSelection ? (t = window.getSelection(), t.rangeCount && (this.range = t.getRangeAt(0))) : this.range = document.selection.createRange()
            },
            click: function(t) {
                this._setSelection(), this._toggle(t)
            },
            keydown: function(e) {
                var i = !0;
                switch (e.keyCode) {
                    case t.ui.keyCode.TAB:
                    case t.ui.keyCode.ESCAPE:
                        this.close(e), i = !1;
                        break;
                    case t.ui.keyCode.ENTER:
                        this.isOpen && this._selectFocusedItem(e);
                        break;
                    case t.ui.keyCode.UP:
                        e.altKey ? this._toggle(e) : this._move("prev", e);
                        break;
                    case t.ui.keyCode.DOWN:
                        e.altKey ? this._toggle(e) : this._move("next", e);
                        break;
                    case t.ui.keyCode.SPACE:
                        this.isOpen ? this._selectFocusedItem(e) : this._toggle(e);
                        break;
                    case t.ui.keyCode.LEFT:
                        this._move("prev", e);
                        break;
                    case t.ui.keyCode.RIGHT:
                        this._move("next", e);
                        break;
                    case t.ui.keyCode.HOME:
                    case t.ui.keyCode.PAGE_UP:
                        this._move("first", e);
                        break;
                    case t.ui.keyCode.END:
                    case t.ui.keyCode.PAGE_DOWN:
                        this._move("last", e);
                        break;
                    default:
                        this.menu.trigger(e), i = !1
                }
                i && e.preventDefault()
            }
        },
        _selectFocusedItem: function(t) {
            var e = this.menuItems.eq(this.focusIndex);
            e.hasClass("ui-state-disabled") || this._select(e.data("ui-selectmenu-item"), t)
        },
        _select: function(t, e) {
            var i = this.element[0].selectedIndex;
            this.element[0].selectedIndex = t.index, this._setText(this.buttonText, t.label), this._setAria(t), this._trigger("select", e, {
                item: t
            }), t.index !== i && this._trigger("change", e, {
                item: t
            }), this.close(e)
        },
        _setAria: function(t) {
            var e = this.menuItems.eq(t.index).attr("id");
            this.button.attr({
                "aria-labelledby": e,
                "aria-activedescendant": e
            }), this.menu.attr("aria-activedescendant", e)
        },
        _setOption: function(t, e) {
            "icons" === t && this.button.find("span.ui-icon").removeClass(this.options.icons.button).addClass(e.button), this._super(t, e), "appendTo" === t && this.menuWrap.appendTo(this._appendTo()), "disabled" === t && (this.menuInstance.option("disabled", e), this.button.toggleClass("ui-state-disabled", e).attr("aria-disabled", e), this.element.prop("disabled", e), e ? (this.button.attr("tabindex", -1), this.close()) : this.button.attr("tabindex", 0)), "width" === t && this._resizeButton()
        },
        _appendTo: function() {
            var e = this.options.appendTo;
            return e && (e = e.jquery || e.nodeType ? t(e) : this.document.find(e).eq(0)), e && e[0] || (e = this.element.closest(".ui-front")), e.length || (e = this.document[0].body), e
        },
        _toggleAttr: function() {
            this.button.toggleClass("ui-corner-top", this.isOpen).toggleClass("ui-corner-all", !this.isOpen).attr("aria-expanded", this.isOpen), this.menuWrap.toggleClass("ui-selectmenu-open", this.isOpen), this.menu.attr("aria-hidden", !this.isOpen)
        },
        _resizeButton: function() {
            var t = this.options.width;
            t || (t = this.element.show().outerWidth(), this.element.hide()), this.button.outerWidth(t)
        },
        _resizeMenu: function() {
            this.menu.outerWidth(Math.max(this.button.outerWidth(), this.menu.width("").outerWidth() + 1))
        },
        _getCreateOptions: function() {
            return {
                disabled: this.element.prop("disabled")
            }
        },
        _parseOptions: function(e) {
            var i = [];
            e.each(function(e, s) {
                var n = t(s),
                    o = n.parent("optgroup");
                i.push({
                    element: n,
                    index: e,
                    value: n.val(),
                    label: n.text(),
                    optgroup: o.attr("label") || "",
                    disabled: o.prop("disabled") || n.prop("disabled")
                })
            }), this.items = i
        },
        _destroy: function() {
            this.menuWrap.remove(), this.button.remove(), this.element.show(), this.element.removeUniqueId(), this.label.attr("for", this.ids.element)
        }
    }), t.widget("ui.slider", t.ui.mouse, {
        version: "1.11.4",
        widgetEventPrefix: "slide",
        options: {
            animate: !1,
            distance: 0,
            max: 100,
            min: 0,
            orientation: "horizontal",
            range: !1,
            step: 1,
            value: 0,
            values: null,
            change: null,
            slide: null,
            start: null,
            stop: null
        },
        numPages: 5,
        _create: function() {
            this._keySliding = !1, this._mouseSliding = !1, this._animateOff = !0, this._handleIndex = null, this._detectOrientation(), this._mouseInit(), this._calculateNewMax(), this.element.addClass("ui-slider ui-slider-" + this.orientation + " ui-widget ui-widget-content ui-corner-all"), this._refresh(), this._setOption("disabled", this.options.disabled), this._animateOff = !1
        },
        _refresh: function() {
            this._createRange(), this._createHandles(), this._setupEvents(), this._refreshValue()
        },
        _createHandles: function() {
            var e, i, s = this.options,
                n = this.element.find(".ui-slider-handle").addClass("ui-state-default ui-corner-all"),
                o = "<span class='ui-slider-handle ui-state-default ui-corner-all' tabindex='0'></span>",
                a = [];
            for (i = s.values && s.values.length || 1, n.length > i && (n.slice(i).remove(), n = n.slice(0, i)), e = n.length; i > e; e++) a.push(o);
            this.handles = n.add(t(a.join("")).appendTo(this.element)), this.handle = this.handles.eq(0), this.handles.each(function(e) {
                t(this).data("ui-slider-handle-index", e)
            })
        },
        _createRange: function() {
            var e = this.options,
                i = "";
            e.range ? (e.range === !0 && (e.values ? e.values.length && 2 !== e.values.length ? e.values = [e.values[0], e.values[0]] : t.isArray(e.values) && (e.values = e.values.slice(0)) : e.values = [this._valueMin(), this._valueMin()]), this.range && this.range.length ? this.range.removeClass("ui-slider-range-min ui-slider-range-max").css({
                left: "",
                bottom: ""
            }) : (this.range = t("<div></div>").appendTo(this.element), i = "ui-slider-range ui-widget-header ui-corner-all"), this.range.addClass(i + ("min" === e.range || "max" === e.range ? " ui-slider-range-" + e.range : ""))) : (this.range && this.range.remove(), this.range = null)
        },
        _setupEvents: function() {
            this._off(this.handles), this._on(this.handles, this._handleEvents), this._hoverable(this.handles), this._focusable(this.handles)
        },
        _destroy: function() {
            this.handles.remove(), this.range && this.range.remove(), this.element.removeClass("ui-slider ui-slider-horizontal ui-slider-vertical ui-widget ui-widget-content ui-corner-all"), this._mouseDestroy()
        },
        _mouseCapture: function(e) {
            var i, s, n, o, a, r, h, l, u = this,
                c = this.options;
            return c.disabled ? !1 : (this.elementSize = {
                width: this.element.outerWidth(),
                height: this.element.outerHeight()
            }, this.elementOffset = this.element.offset(), i = {
                x: e.pageX,
                y: e.pageY
            }, s = this._normValueFromMouse(i), n = this._valueMax() - this._valueMin() + 1, this.handles.each(function(e) {
                var i = Math.abs(s - u.values(e));
                (n > i || n === i && (e === u._lastChangedValue || u.values(e) === c.min)) && (n = i, o = t(this), a = e)
            }), r = this._start(e, a), r === !1 ? !1 : (this._mouseSliding = !0, this._handleIndex = a, o.addClass("ui-state-active").focus(), h = o.offset(), l = !t(e.target).parents().addBack().is(".ui-slider-handle"), this._clickOffset = l ? {
                left: 0,
                top: 0
            } : {
                left: e.pageX - h.left - o.width() / 2,
                top: e.pageY - h.top - o.height() / 2 - (parseInt(o.css("borderTopWidth"), 10) || 0) - (parseInt(o.css("borderBottomWidth"), 10) || 0) + (parseInt(o.css("marginTop"), 10) || 0)
            }, this.handles.hasClass("ui-state-hover") || this._slide(e, a, s), this._animateOff = !0, !0))
        },
        _mouseStart: function() {
            return !0
        },
        _mouseDrag: function(t) {
            var e = {
                    x: t.pageX,
                    y: t.pageY
                },
                i = this._normValueFromMouse(e);
            return this._slide(t, this._handleIndex, i), !1
        },
        _mouseStop: function(t) {
            return this.handles.removeClass("ui-state-active"), this._mouseSliding = !1, this._stop(t, this._handleIndex), this._change(t, this._handleIndex), this._handleIndex = null, this._clickOffset = null, this._animateOff = !1, !1
        },
        _detectOrientation: function() {
            this.orientation = "vertical" === this.options.orientation ? "vertical" : "horizontal"
        },
        _normValueFromMouse: function(t) {
            var e, i, s, n, o;
            return "horizontal" === this.orientation ? (e = this.elementSize.width, i = t.x - this.elementOffset.left - (this._clickOffset ? this._clickOffset.left : 0)) : (e = this.elementSize.height, i = t.y - this.elementOffset.top - (this._clickOffset ? this._clickOffset.top : 0)), s = i / e, s > 1 && (s = 1), 0 > s && (s = 0), "vertical" === this.orientation && (s = 1 - s), n = this._valueMax() - this._valueMin(), o = this._valueMin() + s * n, this._trimAlignValue(o)
        },
        _start: function(t, e) {
            var i = {
                handle: this.handles[e],
                value: this.value()
            };
            return this.options.values && this.options.values.length && (i.value = this.values(e), i.values = this.values()), this._trigger("start", t, i)
        },
        _slide: function(t, e, i) {
            var s, n, o;
            this.options.values && this.options.values.length ? (s = this.values(e ? 0 : 1), 2 === this.options.values.length && this.options.range === !0 && (0 === e && i > s || 1 === e && s > i) && (i = s), i !== this.values(e) && (n = this.values(), n[e] = i, o = this._trigger("slide", t, {
                handle: this.handles[e],
                value: i,
                values: n
            }), s = this.values(e ? 0 : 1), o !== !1 && this.values(e, i))) : i !== this.value() && (o = this._trigger("slide", t, {
                handle: this.handles[e],
                value: i
            }), o !== !1 && this.value(i))
        },
        _stop: function(t, e) {
            var i = {
                handle: this.handles[e],
                value: this.value()
            };
            this.options.values && this.options.values.length && (i.value = this.values(e), i.values = this.values()), this._trigger("stop", t, i)
        },
        _change: function(t, e) {
            if (!this._keySliding && !this._mouseSliding) {
                var i = {
                    handle: this.handles[e],
                    value: this.value()
                };
                this.options.values && this.options.values.length && (i.value = this.values(e), i.values = this.values()), this._lastChangedValue = e, this._trigger("change", t, i)
            }
        },
        value: function(t) {
            return arguments.length ? (this.options.value = this._trimAlignValue(t), this._refreshValue(), void this._change(null, 0)) : this._value()
        },
        values: function(e, i) {
            var s, n, o;
            if (arguments.length > 1) return this.options.values[e] = this._trimAlignValue(i), this._refreshValue(), void this._change(null, e);
            if (!arguments.length) return this._values();
            if (!t.isArray(arguments[0])) return this.options.values && this.options.values.length ? this._values(e) : this.value();
            for (s = this.options.values, n = arguments[0], o = 0; o < s.length; o += 1) s[o] = this._trimAlignValue(n[o]), this._change(null, o);
            this._refreshValue()
        },
        _setOption: function(e, i) {
            var s, n = 0;
            switch ("range" === e && this.options.range === !0 && ("min" === i ? (this.options.value = this._values(0), this.options.values = null) : "max" === i && (this.options.value = this._values(this.options.values.length - 1), this.options.values = null)), t.isArray(this.options.values) && (n = this.options.values.length), "disabled" === e && this.element.toggleClass("ui-state-disabled", !!i), this._super(e, i), e) {
                case "orientation":
                    this._detectOrientation(), this.element.removeClass("ui-slider-horizontal ui-slider-vertical").addClass("ui-slider-" + this.orientation), this._refreshValue(), this.handles.css("horizontal" === i ? "bottom" : "left", "");
                    break;
                case "value":
                    this._animateOff = !0, this._refreshValue(), this._change(null, 0), this._animateOff = !1;
                    break;
                case "values":
                    for (this._animateOff = !0, this._refreshValue(), s = 0; n > s; s += 1) this._change(null, s);
                    this._animateOff = !1;
                    break;
                case "step":
                case "min":
                case "max":
                    this._animateOff = !0, this._calculateNewMax(), this._refreshValue(), this._animateOff = !1;
                    break;
                case "range":
                    this._animateOff = !0, this._refresh(), this._animateOff = !1
            }
        },
        _value: function() {
            var t = this.options.value;
            return t = this._trimAlignValue(t)
        },
        _values: function(t) {
            var e, i, s;
            if (arguments.length) return e = this.options.values[t], e = this._trimAlignValue(e);
            if (this.options.values && this.options.values.length) {
                for (i = this.options.values.slice(), s = 0; s < i.length; s += 1) i[s] = this._trimAlignValue(i[s]);
                return i
            }
            return []
        },
        _trimAlignValue: function(t) {
            if (t <= this._valueMin()) return this._valueMin();
            if (t >= this._valueMax()) return this._valueMax();
            var e = this.options.step > 0 ? this.options.step : 1,
                i = (t - this._valueMin()) % e,
                s = t - i;
            return 2 * Math.abs(i) >= e && (s += i > 0 ? e : -e), parseFloat(s.toFixed(5))
        },
        _calculateNewMax: function() {
            var t = this.options.max,
                e = this._valueMin(),
                i = this.options.step,
                s = Math.floor(+(t - e).toFixed(this._precision()) / i) * i;
            t = s + e, this.max = parseFloat(t.toFixed(this._precision()))
        },
        _precision: function() {
            var t = this._precisionOf(this.options.step);
            return null !== this.options.min && (t = Math.max(t, this._precisionOf(this.options.min))), t
        },
        _precisionOf: function(t) {
            var e = t.toString(),
                i = e.indexOf(".");
            return -1 === i ? 0 : e.length - i - 1
        },
        _valueMin: function() {
            return this.options.min
        },
        _valueMax: function() {
            return this.max
        },
        _refreshValue: function() {
            var e, i, s, n, o, a = this.options.range,
                r = this.options,
                h = this,
                l = this._animateOff ? !1 : r.animate,
                u = {};
            this.options.values && this.options.values.length ? this.handles.each(function(s) {
                i = (h.values(s) - h._valueMin()) / (h._valueMax() - h._valueMin()) * 100, u["horizontal" === h.orientation ? "left" : "bottom"] = i + "%", t(this).stop(1, 1)[l ? "animate" : "css"](u, r.animate), h.options.range === !0 && ("horizontal" === h.orientation ? (0 === s && h.range.stop(1, 1)[l ? "animate" : "css"]({
                    left: i + "%"
                }, r.animate), 1 === s && h.range[l ? "animate" : "css"]({
                    width: i - e + "%"
                }, {
                    queue: !1,
                    duration: r.animate
                })) : (0 === s && h.range.stop(1, 1)[l ? "animate" : "css"]({
                    bottom: i + "%"
                }, r.animate), 1 === s && h.range[l ? "animate" : "css"]({
                    height: i - e + "%"
                }, {
                    queue: !1,
                    duration: r.animate
                }))), e = i
            }) : (s = this.value(), n = this._valueMin(), o = this._valueMax(), i = o !== n ? (s - n) / (o - n) * 100 : 0, u["horizontal" === this.orientation ? "left" : "bottom"] = i + "%", this.handle.stop(1, 1)[l ? "animate" : "css"](u, r.animate), "min" === a && "horizontal" === this.orientation && this.range.stop(1, 1)[l ? "animate" : "css"]({
                width: i + "%"
            }, r.animate), "max" === a && "horizontal" === this.orientation && this.range[l ? "animate" : "css"]({
                width: 100 - i + "%"
            }, {
                queue: !1,
                duration: r.animate
            }), "min" === a && "vertical" === this.orientation && this.range.stop(1, 1)[l ? "animate" : "css"]({
                height: i + "%"
            }, r.animate), "max" === a && "vertical" === this.orientation && this.range[l ? "animate" : "css"]({
                height: 100 - i + "%"
            }, {
                queue: !1,
                duration: r.animate
            }))
        },
        _handleEvents: {
            keydown: function(e) {
                var i, s, n, o, a = t(e.target).data("ui-slider-handle-index");
                switch (e.keyCode) {
                    case t.ui.keyCode.HOME:
                    case t.ui.keyCode.END:
                    case t.ui.keyCode.PAGE_UP:
                    case t.ui.keyCode.PAGE_DOWN:
                    case t.ui.keyCode.UP:
                    case t.ui.keyCode.RIGHT:
                    case t.ui.keyCode.DOWN:
                    case t.ui.keyCode.LEFT:
                        if (e.preventDefault(), !this._keySliding && (this._keySliding = !0, t(e.target).addClass("ui-state-active"), i = this._start(e, a), i === !1)) return
                }
                switch (o = this.options.step, s = n = this.options.values && this.options.values.length ? this.values(a) : this.value(), e.keyCode) {
                    case t.ui.keyCode.HOME:
                        n = this._valueMin();
                        break;
                    case t.ui.keyCode.END:
                        n = this._valueMax();
                        break;
                    case t.ui.keyCode.PAGE_UP:
                        n = this._trimAlignValue(s + (this._valueMax() - this._valueMin()) / this.numPages);
                        break;
                    case t.ui.keyCode.PAGE_DOWN:
                        n = this._trimAlignValue(s - (this._valueMax() - this._valueMin()) / this.numPages);
                        break;
                    case t.ui.keyCode.UP:
                    case t.ui.keyCode.RIGHT:
                        if (s === this._valueMax()) return;
                        n = this._trimAlignValue(s + o);
                        break;
                    case t.ui.keyCode.DOWN:
                    case t.ui.keyCode.LEFT:
                        if (s === this._valueMin()) return;
                        n = this._trimAlignValue(s - o)
                }
                this._slide(e, a, n)
            },
            keyup: function(e) {
                var i = t(e.target).data("ui-slider-handle-index");
                this._keySliding && (this._keySliding = !1, this._stop(e, i), this._change(e, i), t(e.target).removeClass("ui-state-active"))
            }
        }
    }), t.widget("ui.sortable", t.ui.mouse, {
        version: "1.11.4",
        widgetEventPrefix: "sort",
        ready: !1,
        options: {
            appendTo: "parent",
            axis: !1,
            connectWith: !1,
            containment: !1,
            cursor: "auto",
            cursorAt: !1,
            dropOnEmpty: !0,
            forcePlaceholderSize: !1,
            forceHelperSize: !1,
            grid: !1,
            handle: !1,
            helper: "original",
            items: "> *",
            opacity: !1,
            placeholder: !1,
            revert: !1,
            scroll: !0,
            scrollSensitivity: 20,
            scrollSpeed: 20,
            scope: "default",
            tolerance: "intersect",
            zIndex: 1e3,
            activate: null,
            beforeStop: null,
            change: null,
            deactivate: null,
            out: null,
            over: null,
            receive: null,
            remove: null,
            sort: null,
            start: null,
            stop: null,
            update: null
        },
        _isOverAxis: function(t, e, i) {
            return t >= e && e + i > t
        },
        _isFloating: function(t) {
            return /left|right/.test(t.css("float")) || /inline|table-cell/.test(t.css("display"));
        },
        _create: function() {
            this.containerCache = {}, this.element.addClass("ui-sortable"), this.refresh(), this.offset = this.element.offset(), this._mouseInit(), this._setHandleClassName(), this.ready = !0
        },
        _setOption: function(t, e) {
            this._super(t, e), "handle" === t && this._setHandleClassName()
        },
        _setHandleClassName: function() {
            this.element.find(".ui-sortable-handle").removeClass("ui-sortable-handle"), t.each(this.items, function() {
                (this.instance.options.handle ? this.item.find(this.instance.options.handle) : this.item).addClass("ui-sortable-handle")
            })
        },
        _destroy: function() {
            this.element.removeClass("ui-sortable ui-sortable-disabled").find(".ui-sortable-handle").removeClass("ui-sortable-handle"), this._mouseDestroy();
            for (var t = this.items.length - 1; t >= 0; t--) this.items[t].item.removeData(this.widgetName + "-item");
            return this
        },
        _mouseCapture: function(e, i) {
            var s = null,
                n = !1,
                o = this;
            return this.reverting ? !1 : this.options.disabled || "static" === this.options.type ? !1 : (this._refreshItems(e), t(e.target).parents().each(function() {
                return t.data(this, o.widgetName + "-item") === o ? (s = t(this), !1) : void 0
            }), t.data(e.target, o.widgetName + "-item") === o && (s = t(e.target)), s && (!this.options.handle || i || (t(this.options.handle, s).find("*").addBack().each(function() {
                this === e.target && (n = !0)
            }), n)) ? (this.currentItem = s, this._removeCurrentsFromItems(), !0) : !1)
        },
        _mouseStart: function(e, i, s) {
            var n, o, a = this.options;
            if (this.currentContainer = this, this.refreshPositions(), this.helper = this._createHelper(e), this._cacheHelperProportions(), this._cacheMargins(), this.scrollParent = this.helper.scrollParent(), this.offset = this.currentItem.offset(), this.offset = {
                    top: this.offset.top - this.margins.top,
                    left: this.offset.left - this.margins.left
                }, t.extend(this.offset, {
                    click: {
                        left: e.pageX - this.offset.left,
                        top: e.pageY - this.offset.top
                    },
                    parent: this._getParentOffset(),
                    relative: this._getRelativeOffset()
                }), this.helper.css("position", "absolute"), this.cssPosition = this.helper.css("position"), this.originalPosition = this._generatePosition(e), this.originalPageX = e.pageX, this.originalPageY = e.pageY, a.cursorAt && this._adjustOffsetFromHelper(a.cursorAt), this.domPosition = {
                    prev: this.currentItem.prev()[0],
                    parent: this.currentItem.parent()[0]
                }, this.helper[0] !== this.currentItem[0] && this.currentItem.hide(), this._createPlaceholder(), a.containment && this._setContainment(), a.cursor && "auto" !== a.cursor && (o = this.document.find("body"), this.storedCursor = o.css("cursor"), o.css("cursor", a.cursor), this.storedStylesheet = t("<style>*{ cursor: " + a.cursor + " !important; }</style>").appendTo(o)), a.opacity && (this.helper.css("opacity") && (this._storedOpacity = this.helper.css("opacity")), this.helper.css("opacity", a.opacity)), a.zIndex && (this.helper.css("zIndex") && (this._storedZIndex = this.helper.css("zIndex")), this.helper.css("zIndex", a.zIndex)), this.scrollParent[0] !== this.document[0] && "HTML" !== this.scrollParent[0].tagName && (this.overflowOffset = this.scrollParent.offset()), this._trigger("start", e, this._uiHash()), this._preserveHelperProportions || this._cacheHelperProportions(), !s)
                for (n = this.containers.length - 1; n >= 0; n--) this.containers[n]._trigger("activate", e, this._uiHash(this));
            return t.ui.ddmanager && (t.ui.ddmanager.current = this), t.ui.ddmanager && !a.dropBehaviour && t.ui.ddmanager.prepareOffsets(this, e), this.dragging = !0, this.helper.addClass("ui-sortable-helper"), this._mouseDrag(e), !0
        },
        _mouseDrag: function(e) {
            var i, s, n, o, a = this.options,
                r = !1;
            for (this.position = this._generatePosition(e), this.positionAbs = this._convertPositionTo("absolute"), this.lastPositionAbs || (this.lastPositionAbs = this.positionAbs), this.options.scroll && (this.scrollParent[0] !== this.document[0] && "HTML" !== this.scrollParent[0].tagName ? (this.overflowOffset.top + this.scrollParent[0].offsetHeight - e.pageY < a.scrollSensitivity ? this.scrollParent[0].scrollTop = r = this.scrollParent[0].scrollTop + a.scrollSpeed : e.pageY - this.overflowOffset.top < a.scrollSensitivity && (this.scrollParent[0].scrollTop = r = this.scrollParent[0].scrollTop - a.scrollSpeed), this.overflowOffset.left + this.scrollParent[0].offsetWidth - e.pageX < a.scrollSensitivity ? this.scrollParent[0].scrollLeft = r = this.scrollParent[0].scrollLeft + a.scrollSpeed : e.pageX - this.overflowOffset.left < a.scrollSensitivity && (this.scrollParent[0].scrollLeft = r = this.scrollParent[0].scrollLeft - a.scrollSpeed)) : (e.pageY - this.document.scrollTop() < a.scrollSensitivity ? r = this.document.scrollTop(this.document.scrollTop() - a.scrollSpeed) : this.window.height() - (e.pageY - this.document.scrollTop()) < a.scrollSensitivity && (r = this.document.scrollTop(this.document.scrollTop() + a.scrollSpeed)), e.pageX - this.document.scrollLeft() < a.scrollSensitivity ? r = this.document.scrollLeft(this.document.scrollLeft() - a.scrollSpeed) : this.window.width() - (e.pageX - this.document.scrollLeft()) < a.scrollSensitivity && (r = this.document.scrollLeft(this.document.scrollLeft() + a.scrollSpeed))), r !== !1 && t.ui.ddmanager && !a.dropBehaviour && t.ui.ddmanager.prepareOffsets(this, e)), this.positionAbs = this._convertPositionTo("absolute"), this.options.axis && "y" === this.options.axis || (this.helper[0].style.left = this.position.left + "px"), this.options.axis && "x" === this.options.axis || (this.helper[0].style.top = this.position.top + "px"), i = this.items.length - 1; i >= 0; i--)
                if (s = this.items[i], n = s.item[0], o = this._intersectsWithPointer(s), o && s.instance === this.currentContainer && n !== this.currentItem[0] && this.placeholder[1 === o ? "next" : "prev"]()[0] !== n && !t.contains(this.placeholder[0], n) && ("semi-dynamic" === this.options.type ? !t.contains(this.element[0], n) : !0)) {
                    if (this.direction = 1 === o ? "down" : "up", "pointer" !== this.options.tolerance && !this._intersectsWithSides(s)) break;
                    this._rearrange(e, s), this._trigger("change", e, this._uiHash());
                    break
                }
            return this._contactContainers(e), t.ui.ddmanager && t.ui.ddmanager.drag(this, e), this._trigger("sort", e, this._uiHash()), this.lastPositionAbs = this.positionAbs, !1
        },
        _mouseStop: function(e, i) {
            if (e) {
                if (t.ui.ddmanager && !this.options.dropBehaviour && t.ui.ddmanager.drop(this, e), this.options.revert) {
                    var s = this,
                        n = this.placeholder.offset(),
                        o = this.options.axis,
                        a = {};
                    o && "x" !== o || (a.left = n.left - this.offset.parent.left - this.margins.left + (this.offsetParent[0] === this.document[0].body ? 0 : this.offsetParent[0].scrollLeft)), o && "y" !== o || (a.top = n.top - this.offset.parent.top - this.margins.top + (this.offsetParent[0] === this.document[0].body ? 0 : this.offsetParent[0].scrollTop)), this.reverting = !0, t(this.helper).animate(a, parseInt(this.options.revert, 10) || 500, function() {
                        s._clear(e)
                    })
                } else this._clear(e, i);
                return !1
            }
        },
        cancel: function() {
            if (this.dragging) {
                this._mouseUp({
                    target: null
                }), "original" === this.options.helper ? this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper") : this.currentItem.show();
                for (var e = this.containers.length - 1; e >= 0; e--) this.containers[e]._trigger("deactivate", null, this._uiHash(this)), this.containers[e].containerCache.over && (this.containers[e]._trigger("out", null, this._uiHash(this)), this.containers[e].containerCache.over = 0)
            }
            return this.placeholder && (this.placeholder[0].parentNode && this.placeholder[0].parentNode.removeChild(this.placeholder[0]), "original" !== this.options.helper && this.helper && this.helper[0].parentNode && this.helper.remove(), t.extend(this, {
                helper: null,
                dragging: !1,
                reverting: !1,
                _noFinalSort: null
            }), this.domPosition.prev ? t(this.domPosition.prev).after(this.currentItem) : t(this.domPosition.parent).prepend(this.currentItem)), this
        },
        serialize: function(e) {
            var i = this._getItemsAsjQuery(e && e.connected),
                s = [];
            return e = e || {}, t(i).each(function() {
                var i = (t(e.item || this).attr(e.attribute || "id") || "").match(e.expression || /(.+)[\-=_](.+)/);
                i && s.push((e.key || i[1] + "[]") + "=" + (e.key && e.expression ? i[1] : i[2]))
            }), !s.length && e.key && s.push(e.key + "="), s.join("&")
        },
        toArray: function(e) {
            var i = this._getItemsAsjQuery(e && e.connected),
                s = [];
            return e = e || {}, i.each(function() {
                s.push(t(e.item || this).attr(e.attribute || "id") || "")
            }), s
        },
        _intersectsWith: function(t) {
            var e = this.positionAbs.left,
                i = e + this.helperProportions.width,
                s = this.positionAbs.top,
                n = s + this.helperProportions.height,
                o = t.left,
                a = o + t.width,
                r = t.top,
                h = r + t.height,
                l = this.offset.click.top,
                u = this.offset.click.left,
                c = "x" === this.options.axis || s + l > r && h > s + l,
                d = "y" === this.options.axis || e + u > o && a > e + u,
                p = c && d;
            return "pointer" === this.options.tolerance || this.options.forcePointerForContainers || "pointer" !== this.options.tolerance && this.helperProportions[this.floating ? "width" : "height"] > t[this.floating ? "width" : "height"] ? p : o < e + this.helperProportions.width / 2 && i - this.helperProportions.width / 2 < a && r < s + this.helperProportions.height / 2 && n - this.helperProportions.height / 2 < h
        },
        _intersectsWithPointer: function(t) {
            var e = "x" === this.options.axis || this._isOverAxis(this.positionAbs.top + this.offset.click.top, t.top, t.height),
                i = "y" === this.options.axis || this._isOverAxis(this.positionAbs.left + this.offset.click.left, t.left, t.width),
                s = e && i,
                n = this._getDragVerticalDirection(),
                o = this._getDragHorizontalDirection();
            return s ? this.floating ? o && "right" === o || "down" === n ? 2 : 1 : n && ("down" === n ? 2 : 1) : !1
        },
        _intersectsWithSides: function(t) {
            var e = this._isOverAxis(this.positionAbs.top + this.offset.click.top, t.top + t.height / 2, t.height),
                i = this._isOverAxis(this.positionAbs.left + this.offset.click.left, t.left + t.width / 2, t.width),
                s = this._getDragVerticalDirection(),
                n = this._getDragHorizontalDirection();
            return this.floating && n ? "right" === n && i || "left" === n && !i : s && ("down" === s && e || "up" === s && !e)
        },
        _getDragVerticalDirection: function() {
            var t = this.positionAbs.top - this.lastPositionAbs.top;
            return 0 !== t && (t > 0 ? "down" : "up")
        },
        _getDragHorizontalDirection: function() {
            var t = this.positionAbs.left - this.lastPositionAbs.left;
            return 0 !== t && (t > 0 ? "right" : "left")
        },
        refresh: function(t) {
            return this._refreshItems(t), this._setHandleClassName(), this.refreshPositions(), this
        },
        _connectWith: function() {
            var t = this.options;
            return t.connectWith.constructor === String ? [t.connectWith] : t.connectWith
        },
        _getItemsAsjQuery: function(e) {
            function i() {
                r.push(this)
            }
            var s, n, o, a, r = [],
                h = [],
                l = this._connectWith();
            if (l && e)
                for (s = l.length - 1; s >= 0; s--)
                    for (o = t(l[s], this.document[0]), n = o.length - 1; n >= 0; n--) a = t.data(o[n], this.widgetFullName), a && a !== this && !a.options.disabled && h.push([t.isFunction(a.options.items) ? a.options.items.call(a.element) : t(a.options.items, a.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"), a]);
            for (h.push([t.isFunction(this.options.items) ? this.options.items.call(this.element, null, {
                    options: this.options,
                    item: this.currentItem
                }) : t(this.options.items, this.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"), this]), s = h.length - 1; s >= 0; s--) h[s][0].each(i);
            return t(r)
        },
        _removeCurrentsFromItems: function() {
            var e = this.currentItem.find(":data(" + this.widgetName + "-item)");
            this.items = t.grep(this.items, function(t) {
                for (var i = 0; i < e.length; i++)
                    if (e[i] === t.item[0]) return !1;
                return !0
            })
        },
        _refreshItems: function(e) {
            this.items = [], this.containers = [this];
            var i, s, n, o, a, r, h, l, u = this.items,
                c = [
                    [t.isFunction(this.options.items) ? this.options.items.call(this.element[0], e, {
                        item: this.currentItem
                    }) : t(this.options.items, this.element), this]
                ],
                d = this._connectWith();
            if (d && this.ready)
                for (i = d.length - 1; i >= 0; i--)
                    for (n = t(d[i], this.document[0]), s = n.length - 1; s >= 0; s--) o = t.data(n[s], this.widgetFullName), o && o !== this && !o.options.disabled && (c.push([t.isFunction(o.options.items) ? o.options.items.call(o.element[0], e, {
                        item: this.currentItem
                    }) : t(o.options.items, o.element), o]), this.containers.push(o));
            for (i = c.length - 1; i >= 0; i--)
                for (a = c[i][1], r = c[i][0], s = 0, l = r.length; l > s; s++) h = t(r[s]), h.data(this.widgetName + "-item", a), u.push({
                    item: h,
                    instance: a,
                    width: 0,
                    height: 0,
                    left: 0,
                    top: 0
                })
        },
        refreshPositions: function(e) {
            this.floating = this.items.length ? "x" === this.options.axis || this._isFloating(this.items[0].item) : !1, this.offsetParent && this.helper && (this.offset.parent = this._getParentOffset());
            var i, s, n, o;
            for (i = this.items.length - 1; i >= 0; i--) s = this.items[i], s.instance !== this.currentContainer && this.currentContainer && s.item[0] !== this.currentItem[0] || (n = this.options.toleranceElement ? t(this.options.toleranceElement, s.item) : s.item, e || (s.width = n.outerWidth(), s.height = n.outerHeight()), o = n.offset(), s.left = o.left, s.top = o.top);
            if (this.options.custom && this.options.custom.refreshContainers) this.options.custom.refreshContainers.call(this);
            else
                for (i = this.containers.length - 1; i >= 0; i--) o = this.containers[i].element.offset(), this.containers[i].containerCache.left = o.left, this.containers[i].containerCache.top = o.top, this.containers[i].containerCache.width = this.containers[i].element.outerWidth(), this.containers[i].containerCache.height = this.containers[i].element.outerHeight();
            return this
        },
        _createPlaceholder: function(e) {
            e = e || this;
            var i, s = e.options;
            s.placeholder && s.placeholder.constructor !== String || (i = s.placeholder, s.placeholder = {
                element: function() {
                    var s = e.currentItem[0].nodeName.toLowerCase(),
                        n = t("<" + s + ">", e.document[0]).addClass(i || e.currentItem[0].className + " ui-sortable-placeholder").removeClass("ui-sortable-helper");
                    return "tbody" === s ? e._createTrPlaceholder(e.currentItem.find("tr").eq(0), t("<tr>", e.document[0]).appendTo(n)) : "tr" === s ? e._createTrPlaceholder(e.currentItem, n) : "img" === s && n.attr("src", e.currentItem.attr("src")), i || n.css("visibility", "hidden"), n
                },
                update: function(t, n) {
                    (!i || s.forcePlaceholderSize) && (n.height() || n.height(e.currentItem.innerHeight() - parseInt(e.currentItem.css("paddingTop") || 0, 10) - parseInt(e.currentItem.css("paddingBottom") || 0, 10)), n.width() || n.width(e.currentItem.innerWidth() - parseInt(e.currentItem.css("paddingLeft") || 0, 10) - parseInt(e.currentItem.css("paddingRight") || 0, 10)))
                }
            }), e.placeholder = t(s.placeholder.element.call(e.element, e.currentItem)), e.currentItem.after(e.placeholder), s.placeholder.update(e, e.placeholder)
        },
        _createTrPlaceholder: function(e, i) {
            var s = this;
            e.children().each(function() {
                t("<td>&#160;</td>", s.document[0]).attr("colspan", t(this).attr("colspan") || 1).appendTo(i)
            })
        },
        _contactContainers: function(e) {
            var i, s, n, o, a, r, h, l, u, c, d = null,
                p = null;
            for (i = this.containers.length - 1; i >= 0; i--)
                if (!t.contains(this.currentItem[0], this.containers[i].element[0]))
                    if (this._intersectsWith(this.containers[i].containerCache)) {
                        if (d && t.contains(this.containers[i].element[0], d.element[0])) continue;
                        d = this.containers[i], p = i
                    } else this.containers[i].containerCache.over && (this.containers[i]._trigger("out", e, this._uiHash(this)), this.containers[i].containerCache.over = 0);
            if (d)
                if (1 === this.containers.length) this.containers[p].containerCache.over || (this.containers[p]._trigger("over", e, this._uiHash(this)), this.containers[p].containerCache.over = 1);
                else {
                    for (n = 1e4, o = null, u = d.floating || this._isFloating(this.currentItem), a = u ? "left" : "top", r = u ? "width" : "height", c = u ? "clientX" : "clientY", s = this.items.length - 1; s >= 0; s--) t.contains(this.containers[p].element[0], this.items[s].item[0]) && this.items[s].item[0] !== this.currentItem[0] && (h = this.items[s].item.offset()[a], l = !1, e[c] - h > this.items[s][r] / 2 && (l = !0), Math.abs(e[c] - h) < n && (n = Math.abs(e[c] - h), o = this.items[s], this.direction = l ? "up" : "down"));
                    if (!o && !this.options.dropOnEmpty) return;
                    if (this.currentContainer === this.containers[p]) return void(this.currentContainer.containerCache.over || (this.containers[p]._trigger("over", e, this._uiHash()), this.currentContainer.containerCache.over = 1));
                    o ? this._rearrange(e, o, null, !0) : this._rearrange(e, null, this.containers[p].element, !0), this._trigger("change", e, this._uiHash()), this.containers[p]._trigger("change", e, this._uiHash(this)), this.currentContainer = this.containers[p], this.options.placeholder.update(this.currentContainer, this.placeholder), this.containers[p]._trigger("over", e, this._uiHash(this)), this.containers[p].containerCache.over = 1
                }
        },
        _createHelper: function(e) {
            var i = this.options,
                s = t.isFunction(i.helper) ? t(i.helper.apply(this.element[0], [e, this.currentItem])) : "clone" === i.helper ? this.currentItem.clone() : this.currentItem;
            return s.parents("body").length || t("parent" !== i.appendTo ? i.appendTo : this.currentItem[0].parentNode)[0].appendChild(s[0]), s[0] === this.currentItem[0] && (this._storedCSS = {
                width: this.currentItem[0].style.width,
                height: this.currentItem[0].style.height,
                position: this.currentItem.css("position"),
                top: this.currentItem.css("top"),
                left: this.currentItem.css("left")
            }), (!s[0].style.width || i.forceHelperSize) && s.width(this.currentItem.width()), (!s[0].style.height || i.forceHelperSize) && s.height(this.currentItem.height()), s
        },
        _adjustOffsetFromHelper: function(e) {
            "string" == typeof e && (e = e.split(" ")), t.isArray(e) && (e = {
                left: +e[0],
                top: +e[1] || 0
            }), "left" in e && (this.offset.click.left = e.left + this.margins.left), "right" in e && (this.offset.click.left = this.helperProportions.width - e.right + this.margins.left), "top" in e && (this.offset.click.top = e.top + this.margins.top), "bottom" in e && (this.offset.click.top = this.helperProportions.height - e.bottom + this.margins.top)
        },
        _getParentOffset: function() {
            this.offsetParent = this.helper.offsetParent();
            var e = this.offsetParent.offset();
            return "absolute" === this.cssPosition && this.scrollParent[0] !== this.document[0] && t.contains(this.scrollParent[0], this.offsetParent[0]) && (e.left += this.scrollParent.scrollLeft(), e.top += this.scrollParent.scrollTop()), (this.offsetParent[0] === this.document[0].body || this.offsetParent[0].tagName && "html" === this.offsetParent[0].tagName.toLowerCase() && t.ui.ie) && (e = {
                top: 0,
                left: 0
            }), {
                top: e.top + (parseInt(this.offsetParent.css("borderTopWidth"), 10) || 0),
                left: e.left + (parseInt(this.offsetParent.css("borderLeftWidth"), 10) || 0)
            }
        },
        _getRelativeOffset: function() {
            if ("relative" === this.cssPosition) {
                var t = this.currentItem.position();
                return {
                    top: t.top - (parseInt(this.helper.css("top"), 10) || 0) + this.scrollParent.scrollTop(),
                    left: t.left - (parseInt(this.helper.css("left"), 10) || 0) + this.scrollParent.scrollLeft()
                }
            }
            return {
                top: 0,
                left: 0
            }
        },
        _cacheMargins: function() {
            this.margins = {
                left: parseInt(this.currentItem.css("marginLeft"), 10) || 0,
                top: parseInt(this.currentItem.css("marginTop"), 10) || 0
            }
        },
        _cacheHelperProportions: function() {
            this.helperProportions = {
                width: this.helper.outerWidth(),
                height: this.helper.outerHeight()
            }
        },
        _setContainment: function() {
            var e, i, s, n = this.options;
            "parent" === n.containment && (n.containment = this.helper[0].parentNode), ("document" === n.containment || "window" === n.containment) && (this.containment = [0 - this.offset.relative.left - this.offset.parent.left, 0 - this.offset.relative.top - this.offset.parent.top, "document" === n.containment ? this.document.width() : this.window.width() - this.helperProportions.width - this.margins.left, ("document" === n.containment ? this.document.width() : this.window.height() || this.document[0].body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top]), /^(document|window|parent)$/.test(n.containment) || (e = t(n.containment)[0], i = t(n.containment).offset(), s = "hidden" !== t(e).css("overflow"), this.containment = [i.left + (parseInt(t(e).css("borderLeftWidth"), 10) || 0) + (parseInt(t(e).css("paddingLeft"), 10) || 0) - this.margins.left, i.top + (parseInt(t(e).css("borderTopWidth"), 10) || 0) + (parseInt(t(e).css("paddingTop"), 10) || 0) - this.margins.top, i.left + (s ? Math.max(e.scrollWidth, e.offsetWidth) : e.offsetWidth) - (parseInt(t(e).css("borderLeftWidth"), 10) || 0) - (parseInt(t(e).css("paddingRight"), 10) || 0) - this.helperProportions.width - this.margins.left, i.top + (s ? Math.max(e.scrollHeight, e.offsetHeight) : e.offsetHeight) - (parseInt(t(e).css("borderTopWidth"), 10) || 0) - (parseInt(t(e).css("paddingBottom"), 10) || 0) - this.helperProportions.height - this.margins.top])
        },
        _convertPositionTo: function(e, i) {
            i || (i = this.position);
            var s = "absolute" === e ? 1 : -1,
                n = "absolute" !== this.cssPosition || this.scrollParent[0] !== this.document[0] && t.contains(this.scrollParent[0], this.offsetParent[0]) ? this.scrollParent : this.offsetParent,
                o = /(html|body)/i.test(n[0].tagName);
            return {
                top: i.top + this.offset.relative.top * s + this.offset.parent.top * s - ("fixed" === this.cssPosition ? -this.scrollParent.scrollTop() : o ? 0 : n.scrollTop()) * s,
                left: i.left + this.offset.relative.left * s + this.offset.parent.left * s - ("fixed" === this.cssPosition ? -this.scrollParent.scrollLeft() : o ? 0 : n.scrollLeft()) * s
            }
        },
        _generatePosition: function(e) {
            var i, s, n = this.options,
                o = e.pageX,
                a = e.pageY,
                r = "absolute" !== this.cssPosition || this.scrollParent[0] !== this.document[0] && t.contains(this.scrollParent[0], this.offsetParent[0]) ? this.scrollParent : this.offsetParent,
                h = /(html|body)/i.test(r[0].tagName);
            return "relative" !== this.cssPosition || this.scrollParent[0] !== this.document[0] && this.scrollParent[0] !== this.offsetParent[0] || (this.offset.relative = this._getRelativeOffset()), this.originalPosition && (this.containment && (e.pageX - this.offset.click.left < this.containment[0] && (o = this.containment[0] + this.offset.click.left), e.pageY - this.offset.click.top < this.containment[1] && (a = this.containment[1] + this.offset.click.top), e.pageX - this.offset.click.left > this.containment[2] && (o = this.containment[2] + this.offset.click.left), e.pageY - this.offset.click.top > this.containment[3] && (a = this.containment[3] + this.offset.click.top)), n.grid && (i = this.originalPageY + Math.round((a - this.originalPageY) / n.grid[1]) * n.grid[1], a = this.containment ? i - this.offset.click.top >= this.containment[1] && i - this.offset.click.top <= this.containment[3] ? i : i - this.offset.click.top >= this.containment[1] ? i - n.grid[1] : i + n.grid[1] : i, s = this.originalPageX + Math.round((o - this.originalPageX) / n.grid[0]) * n.grid[0], o = this.containment ? s - this.offset.click.left >= this.containment[0] && s - this.offset.click.left <= this.containment[2] ? s : s - this.offset.click.left >= this.containment[0] ? s - n.grid[0] : s + n.grid[0] : s)), {
                top: a - this.offset.click.top - this.offset.relative.top - this.offset.parent.top + ("fixed" === this.cssPosition ? -this.scrollParent.scrollTop() : h ? 0 : r.scrollTop()),
                left: o - this.offset.click.left - this.offset.relative.left - this.offset.parent.left + ("fixed" === this.cssPosition ? -this.scrollParent.scrollLeft() : h ? 0 : r.scrollLeft())
            }
        },
        _rearrange: function(t, e, i, s) {
            i ? i[0].appendChild(this.placeholder[0]) : e.item[0].parentNode.insertBefore(this.placeholder[0], "down" === this.direction ? e.item[0] : e.item[0].nextSibling), this.counter = this.counter ? ++this.counter : 1;
            var n = this.counter;
            this._delay(function() {
                n === this.counter && this.refreshPositions(!s)
            })
        },
        _clear: function(t, e) {
            function i(t, e, i) {
                return function(s) {
                    i._trigger(t, s, e._uiHash(e))
                }
            }
            this.reverting = !1;
            var s, n = [];
            if (!this._noFinalSort && this.currentItem.parent().length && this.placeholder.before(this.currentItem), this._noFinalSort = null, this.helper[0] === this.currentItem[0]) {
                for (s in this._storedCSS)("auto" === this._storedCSS[s] || "static" === this._storedCSS[s]) && (this._storedCSS[s] = "");
                this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper")
            } else this.currentItem.show();
            for (this.fromOutside && !e && n.push(function(t) {
                    this._trigger("receive", t, this._uiHash(this.fromOutside))
                }), !this.fromOutside && this.domPosition.prev === this.currentItem.prev().not(".ui-sortable-helper")[0] && this.domPosition.parent === this.currentItem.parent()[0] || e || n.push(function(t) {
                    this._trigger("update", t, this._uiHash())
                }), this !== this.currentContainer && (e || (n.push(function(t) {
                    this._trigger("remove", t, this._uiHash())
                }), n.push(function(t) {
                    return function(e) {
                        t._trigger("receive", e, this._uiHash(this))
                    }
                }.call(this, this.currentContainer)), n.push(function(t) {
                    return function(e) {
                        t._trigger("update", e, this._uiHash(this))
                    }
                }.call(this, this.currentContainer)))), s = this.containers.length - 1; s >= 0; s--) e || n.push(i("deactivate", this, this.containers[s])), this.containers[s].containerCache.over && (n.push(i("out", this, this.containers[s])), this.containers[s].containerCache.over = 0);
            if (this.storedCursor && (this.document.find("body").css("cursor", this.storedCursor), this.storedStylesheet.remove()), this._storedOpacity && this.helper.css("opacity", this._storedOpacity), this._storedZIndex && this.helper.css("zIndex", "auto" === this._storedZIndex ? "" : this._storedZIndex), this.dragging = !1, e || this._trigger("beforeStop", t, this._uiHash()), this.placeholder[0].parentNode.removeChild(this.placeholder[0]), this.cancelHelperRemoval || (this.helper[0] !== this.currentItem[0] && this.helper.remove(), this.helper = null), !e) {
                for (s = 0; s < n.length; s++) n[s].call(this, t);
                this._trigger("stop", t, this._uiHash())
            }
            return this.fromOutside = !1, !this.cancelHelperRemoval
        },
        _trigger: function() {
            t.Widget.prototype._trigger.apply(this, arguments) === !1 && this.cancel()
        },
        _uiHash: function(e) {
            var i = e || this;
            return {
                helper: i.helper,
                placeholder: i.placeholder || t([]),
                position: i.position,
                originalPosition: i.originalPosition,
                offset: i.positionAbs,
                item: i.currentItem,
                sender: e ? e.element : null
            }
        }
    }), t.widget("ui.spinner", {
        version: "1.11.4",
        defaultElement: "<input>",
        widgetEventPrefix: "spin",
        options: {
            culture: null,
            icons: {
                down: "ui-icon-triangle-1-s",
                up: "ui-icon-triangle-1-n"
            },
            incremental: !0,
            max: null,
            min: null,
            numberFormat: null,
            page: 10,
            step: 1,
            change: null,
            spin: null,
            start: null,
            stop: null
        },
        _create: function() {
            this._setOption("max", this.options.max), this._setOption("min", this.options.min), this._setOption("step", this.options.step), "" !== this.value() && this._value(this.element.val(), !0), this._draw(), this._on(this._events), this._refresh(), this._on(this.window, {
                beforeunload: function() {
                    this.element.removeAttr("autocomplete")
                }
            })
        },
        _getCreateOptions: function() {
            var e = {},
                i = this.element;
            return t.each(["min", "max", "step"], function(t, s) {
                var n = i.attr(s);
                void 0 !== n && n.length && (e[s] = n)
            }), e
        },
        _events: {
            keydown: function(t) {
                this._start(t) && this._keydown(t) && t.preventDefault()
            },
            keyup: "_stop",
            focus: function() {
                this.previous = this.element.val()
            },
            blur: function(t) {
                return this.cancelBlur ? void delete this.cancelBlur : (this._stop(), this._refresh(), void(this.previous !== this.element.val() && this._trigger("change", t)))
            },
            mousewheel: function(t, e) {
                if (e) {
                    if (!this.spinning && !this._start(t)) return !1;
                    this._spin((e > 0 ? 1 : -1) * this.options.step, t), clearTimeout(this.mousewheelTimer), this.mousewheelTimer = this._delay(function() {
                        this.spinning && this._stop(t)
                    }, 100), t.preventDefault()
                }
            },
            "mousedown .ui-spinner-button": function(e) {
                function i() {
                    var t = this.element[0] === this.document[0].activeElement;
                    t || (this.element.focus(), this.previous = s, this._delay(function() {
                        this.previous = s
                    }))
                }
                var s;
                s = this.element[0] === this.document[0].activeElement ? this.previous : this.element.val(), e.preventDefault(), i.call(this), this.cancelBlur = !0, this._delay(function() {
                    delete this.cancelBlur, i.call(this)
                }), this._start(e) !== !1 && this._repeat(null, t(e.currentTarget).hasClass("ui-spinner-up") ? 1 : -1, e)
            },
            "mouseup .ui-spinner-button": "_stop",
            "mouseenter .ui-spinner-button": function(e) {
                return t(e.currentTarget).hasClass("ui-state-active") ? this._start(e) === !1 ? !1 : void this._repeat(null, t(e.currentTarget).hasClass("ui-spinner-up") ? 1 : -1, e) : void 0
            },
            "mouseleave .ui-spinner-button": "_stop"
        },
        _draw: function() {
            var t = this.uiSpinner = this.element.addClass("ui-spinner-input").attr("autocomplete", "off").wrap(this._uiSpinnerHtml()).parent().append(this._buttonHtml());
            this.element.attr("role", "spinbutton"), this.buttons = t.find(".ui-spinner-button").attr("tabIndex", -1).button().removeClass("ui-corner-all"), this.buttons.height() > Math.ceil(.5 * t.height()) && t.height() > 0 && t.height(t.height()), this.options.disabled && this.disable()
        },
        _keydown: function(e) {
            var i = this.options,
                s = t.ui.keyCode;
            switch (e.keyCode) {
                case s.UP:
                    return this._repeat(null, 1, e), !0;
                case s.DOWN:
                    return this._repeat(null, -1, e), !0;
                case s.PAGE_UP:
                    return this._repeat(null, i.page, e), !0;
                case s.PAGE_DOWN:
                    return this._repeat(null, -i.page, e), !0
            }
            return !1
        },
        _uiSpinnerHtml: function() {
            return "<span class='ui-spinner ui-widget ui-widget-content ui-corner-all'></span>"
        },
        _buttonHtml: function() {
            return "<a class='ui-spinner-button ui-spinner-up ui-corner-tr'><span class='ui-icon " + this.options.icons.up + "'>&#9650;</span></a><a class='ui-spinner-button ui-spinner-down ui-corner-br'><span class='ui-icon " + this.options.icons.down + "'>&#9660;</span></a>"
        },
        _start: function(t) {
            return this.spinning || this._trigger("start", t) !== !1 ? (this.counter || (this.counter = 1), this.spinning = !0, !0) : !1
        },
        _repeat: function(t, e, i) {
            t = t || 500, clearTimeout(this.timer), this.timer = this._delay(function() {
                this._repeat(40, e, i)
            }, t), this._spin(e * this.options.step, i)
        },
        _spin: function(t, e) {
            var i = this.value() || 0;
            this.counter || (this.counter = 1), i = this._adjustValue(i + t * this._increment(this.counter)), this.spinning && this._trigger("spin", e, {
                value: i
            }) === !1 || (this._value(i), this.counter++)
        },
        _increment: function(e) {
            var i = this.options.incremental;
            return i ? t.isFunction(i) ? i(e) : Math.floor(e * e * e / 5e4 - e * e / 500 + 17 * e / 200 + 1) : 1
        },
        _precision: function() {
            var t = this._precisionOf(this.options.step);
            return null !== this.options.min && (t = Math.max(t, this._precisionOf(this.options.min))), t
        },
        _precisionOf: function(t) {
            var e = t.toString(),
                i = e.indexOf(".");
            return -1 === i ? 0 : e.length - i - 1
        },
        _adjustValue: function(t) {
            var e, i, s = this.options;
            return e = null !== s.min ? s.min : 0, i = t - e, i = Math.round(i / s.step) * s.step, t = e + i, t = parseFloat(t.toFixed(this._precision())), null !== s.max && t > s.max ? s.max : null !== s.min && t < s.min ? s.min : t
        },
        _stop: function(t) {
            this.spinning && (clearTimeout(this.timer), clearTimeout(this.mousewheelTimer), this.counter = 0, this.spinning = !1, this._trigger("stop", t))
        },
        _setOption: function(t, e) {
            if ("culture" === t || "numberFormat" === t) {
                var i = this._parse(this.element.val());
                return this.options[t] = e, void this.element.val(this._format(i))
            }("max" === t || "min" === t || "step" === t) && "string" == typeof e && (e = this._parse(e)), "icons" === t && (this.buttons.first().find(".ui-icon").removeClass(this.options.icons.up).addClass(e.up), this.buttons.last().find(".ui-icon").removeClass(this.options.icons.down).addClass(e.down)), this._super(t, e), "disabled" === t && (this.widget().toggleClass("ui-state-disabled", !!e), this.element.prop("disabled", !!e), this.buttons.button(e ? "disable" : "enable"))
        },
        _setOptions: h(function(t) {
            this._super(t)
        }),
        _parse: function(t) {
            return "string" == typeof t && "" !== t && (t = window.Globalize && this.options.numberFormat ? Globalize.parseFloat(t, 10, this.options.culture) : +t), "" === t || isNaN(t) ? null : t
        },
        _format: function(t) {
            return "" === t ? "" : window.Globalize && this.options.numberFormat ? Globalize.format(t, this.options.numberFormat, this.options.culture) : t
        },
        _refresh: function() {
            this.element.attr({
                "aria-valuemin": this.options.min,
                "aria-valuemax": this.options.max,
                "aria-valuenow": this._parse(this.element.val())
            })
        },
        isValid: function() {
            var t = this.value();
            return null === t ? !1 : t === this._adjustValue(t)
        },
        _value: function(t, e) {
            var i;
            "" !== t && (i = this._parse(t), null !== i && (e || (i = this._adjustValue(i)), t = this._format(i))), this.element.val(t), this._refresh()
        },
        _destroy: function() {
            this.element.removeClass("ui-spinner-input").prop("disabled", !1).removeAttr("autocomplete").removeAttr("role").removeAttr("aria-valuemin").removeAttr("aria-valuemax").removeAttr("aria-valuenow"), this.uiSpinner.replaceWith(this.element)
        },
        stepUp: h(function(t) {
            this._stepUp(t)
        }),
        _stepUp: function(t) {
            this._start() && (this._spin((t || 1) * this.options.step), this._stop())
        },
        stepDown: h(function(t) {
            this._stepDown(t)
        }),
        _stepDown: function(t) {
            this._start() && (this._spin((t || 1) * -this.options.step), this._stop())
        },
        pageUp: h(function(t) {
            this._stepUp((t || 1) * this.options.page)
        }),
        pageDown: h(function(t) {
            this._stepDown((t || 1) * this.options.page)
        }),
        value: function(t) {
            return arguments.length ? void h(this._value).call(this, t) : this._parse(this.element.val())
        },
        widget: function() {
            return this.uiSpinner
        }
    }), t.widget("ui.tabs", {
        version: "1.11.4",
        delay: 300,
        options: {
            active: null,
            collapsible: !1,
            event: "click",
            heightStyle: "content",
            hide: null,
            show: null,
            activate: null,
            beforeActivate: null,
            beforeLoad: null,
            load: null
        },
        _isLocal: function() {
            var t = /#.*$/;
            return function(e) {
                var i, s;
                e = e.cloneNode(!1), i = e.href.replace(t, ""), s = location.href.replace(t, "");
                try {
                    i = decodeURIComponent(i)
                } catch (n) {}
                try {
                    s = decodeURIComponent(s)
                } catch (n) {}
                return e.hash.length > 1 && i === s
            }
        }(),
        _create: function() {
            var e = this,
                i = this.options;
            this.running = !1, this.element.addClass("ui-tabs ui-widget ui-widget-content ui-corner-all").toggleClass("ui-tabs-collapsible", i.collapsible), this._processTabs(), i.active = this._initialActive(), t.isArray(i.disabled) && (i.disabled = t.unique(i.disabled.concat(t.map(this.tabs.filter(".ui-state-disabled"), function(t) {
                return e.tabs.index(t)
            }))).sort()), this.options.active !== !1 && this.anchors.length ? this.active = this._findActive(i.active) : this.active = t(), this._refresh(), this.active.length && this.load(i.active)
        },
        _initialActive: function() {
            var e = this.options.active,
                i = this.options.collapsible,
                s = location.hash.substring(1);
            return null === e && (s && this.tabs.each(function(i, n) {
                return t(n).attr("aria-controls") === s ? (e = i, !1) : void 0
            }), null === e && (e = this.tabs.index(this.tabs.filter(".ui-tabs-active"))), (null === e || -1 === e) && (e = this.tabs.length ? 0 : !1)), e !== !1 && (e = this.tabs.index(this.tabs.eq(e)), -1 === e && (e = i ? !1 : 0)), !i && e === !1 && this.anchors.length && (e = 0), e
        },
        _getCreateEventData: function() {
            return {
                tab: this.active,
                panel: this.active.length ? this._getPanelForTab(this.active) : t()
            }
        },
        _tabKeydown: function(e) {
            var i = t(this.document[0].activeElement).closest("li"),
                s = this.tabs.index(i),
                n = !0;
            if (!this._handlePageNav(e)) {
                switch (e.keyCode) {
                    case t.ui.keyCode.RIGHT:
                    case t.ui.keyCode.DOWN:
                        s++;
                        break;
                    case t.ui.keyCode.UP:
                    case t.ui.keyCode.LEFT:
                        n = !1, s--;
                        break;
                    case t.ui.keyCode.END:
                        s = this.anchors.length - 1;
                        break;
                    case t.ui.keyCode.HOME:
                        s = 0;
                        break;
                    case t.ui.keyCode.SPACE:
                        return e.preventDefault(), clearTimeout(this.activating), void this._activate(s);
                    case t.ui.keyCode.ENTER:
                        return e.preventDefault(), clearTimeout(this.activating), void this._activate(s === this.options.active ? !1 : s);
                    default:
                        return
                }
                e.preventDefault(), clearTimeout(this.activating), s = this._focusNextTab(s, n), e.ctrlKey || e.metaKey || (i.attr("aria-selected", "false"), this.tabs.eq(s).attr("aria-selected", "true"), this.activating = this._delay(function() {
                    this.option("active", s)
                }, this.delay))
            }
        },
        _panelKeydown: function(e) {
            this._handlePageNav(e) || e.ctrlKey && e.keyCode === t.ui.keyCode.UP && (e.preventDefault(), this.active.focus())
        },
        _handlePageNav: function(e) {
            return e.altKey && e.keyCode === t.ui.keyCode.PAGE_UP ? (this._activate(this._focusNextTab(this.options.active - 1, !1)), !0) : e.altKey && e.keyCode === t.ui.keyCode.PAGE_DOWN ? (this._activate(this._focusNextTab(this.options.active + 1, !0)), !0) : void 0
        },
        _findNextTab: function(e, i) {
            function s() {
                return e > n && (e = 0), 0 > e && (e = n), e
            }
            for (var n = this.tabs.length - 1; - 1 !== t.inArray(s(), this.options.disabled);) e = i ? e + 1 : e - 1;
            return e
        },
        _focusNextTab: function(t, e) {
            return t = this._findNextTab(t, e), this.tabs.eq(t).focus(), t
        },
        _setOption: function(t, e) {
            return "active" === t ? void this._activate(e) : "disabled" === t ? void this._setupDisabled(e) : (this._super(t, e), "collapsible" === t && (this.element.toggleClass("ui-tabs-collapsible", e), e || this.options.active !== !1 || this._activate(0)), "event" === t && this._setupEvents(e), void("heightStyle" === t && this._setupHeightStyle(e)))
        },
        _sanitizeSelector: function(t) {
            return t ? t.replace(/[!"$%&'()*+,.\/:;<=>?@\[\]\^`{|}~]/g, "\\$&") : ""
        },
        refresh: function() {
            var e = this.options,
                i = this.tablist.children(":has(a[href])");
            e.disabled = t.map(i.filter(".ui-state-disabled"), function(t) {
                return i.index(t)
            }), this._processTabs(), e.active !== !1 && this.anchors.length ? this.active.length && !t.contains(this.tablist[0], this.active[0]) ? this.tabs.length === e.disabled.length ? (e.active = !1, this.active = t()) : this._activate(this._findNextTab(Math.max(0, e.active - 1), !1)) : e.active = this.tabs.index(this.active) : (e.active = !1, this.active = t()), this._refresh()
        },
        _refresh: function() {
            this._setupDisabled(this.options.disabled), this._setupEvents(this.options.event), this._setupHeightStyle(this.options.heightStyle), this.tabs.not(this.active).attr({
                "aria-selected": "false",
                "aria-expanded": "false",
                tabIndex: -1
            }), this.panels.not(this._getPanelForTab(this.active)).hide().attr({
                "aria-hidden": "true"
            }), this.active.length ? (this.active.addClass("ui-tabs-active ui-state-active").attr({
                "aria-selected": "true",
                "aria-expanded": "true",
                tabIndex: 0
            }), this._getPanelForTab(this.active).show().attr({
                "aria-hidden": "false"
            })) : this.tabs.eq(0).attr("tabIndex", 0)
        },
        _processTabs: function() {
            var e = this,
                i = this.tabs,
                s = this.anchors,
                n = this.panels;
            this.tablist = this._getList().addClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all").attr("role", "tablist").delegate("> li", "mousedown" + this.eventNamespace, function(e) {
                t(this).is(".ui-state-disabled") && e.preventDefault()
            }).delegate(".ui-tabs-anchor", "focus" + this.eventNamespace, function() {
                t(this).closest("li").is(".ui-state-disabled") && this.blur()
            }), this.tabs = this.tablist.find("> li:has(a[href])").addClass("ui-state-default ui-corner-top").attr({
                role: "tab",
                tabIndex: -1
            }), this.anchors = this.tabs.map(function() {
                return t("a", this)[0]
            }).addClass("ui-tabs-anchor").attr({
                role: "presentation",
                tabIndex: -1
            }), this.panels = t(), this.anchors.each(function(i, s) {
                var n, o, a, r = t(s).uniqueId().attr("id"),
                    h = t(s).closest("li"),
                    l = h.attr("aria-controls");
                e._isLocal(s) ? (n = s.hash, a = n.substring(1), o = e.element.find(e._sanitizeSelector(n))) : (a = h.attr("aria-controls") || t({}).uniqueId()[0].id, n = "#" + a, o = e.element.find(n), o.length || (o = e._createPanel(a), o.insertAfter(e.panels[i - 1] || e.tablist)), o.attr("aria-live", "polite")), o.length && (e.panels = e.panels.add(o)), l && h.data("ui-tabs-aria-controls", l), h.attr({
                    "aria-controls": a,
                    "aria-labelledby": r
                }), o.attr("aria-labelledby", r)
            }), this.panels.addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").attr("role", "tabpanel"), i && (this._off(i.not(this.tabs)), this._off(s.not(this.anchors)), this._off(n.not(this.panels)))
        },
        _getList: function() {
            return this.tablist || this.element.find("ol,ul").eq(0)
        },
        _createPanel: function(e) {
            return t("<div>").attr("id", e).addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").data("ui-tabs-destroy", !0)
        },
        _setupDisabled: function(e) {
            t.isArray(e) && (e.length ? e.length === this.anchors.length && (e = !0) : e = !1);
            for (var i, s = 0; i = this.tabs[s]; s++) e === !0 || -1 !== t.inArray(s, e) ? t(i).addClass("ui-state-disabled").attr("aria-disabled", "true") : t(i).removeClass("ui-state-disabled").removeAttr("aria-disabled");
            this.options.disabled = e
        },
        _setupEvents: function(e) {
            var i = {};
            e && t.each(e.split(" "), function(t, e) {
                i[e] = "_eventHandler"
            }), this._off(this.anchors.add(this.tabs).add(this.panels)), this._on(!0, this.anchors, {
                click: function(t) {
                    t.preventDefault()
                }
            }), this._on(this.anchors, i), this._on(this.tabs, {
                keydown: "_tabKeydown"
            }), this._on(this.panels, {
                keydown: "_panelKeydown"
            }), this._focusable(this.tabs), this._hoverable(this.tabs)
        },
        _setupHeightStyle: function(e) {
            var i, s = this.element.parent();
            "fill" === e ? (i = s.height(), i -= this.element.outerHeight() - this.element.height(), this.element.siblings(":visible").each(function() {
                var e = t(this),
                    s = e.css("position");
                "absolute" !== s && "fixed" !== s && (i -= e.outerHeight(!0))
            }), this.element.children().not(this.panels).each(function() {
                i -= t(this).outerHeight(!0)
            }), this.panels.each(function() {
                t(this).height(Math.max(0, i - t(this).innerHeight() + t(this).height()))
            }).css("overflow", "auto")) : "auto" === e && (i = 0, this.panels.each(function() {
                i = Math.max(i, t(this).height("").height())
            }).height(i))
        },
        _eventHandler: function(e) {
            var i = this.options,
                s = this.active,
                n = t(e.currentTarget),
                o = n.closest("li"),
                a = o[0] === s[0],
                r = a && i.collapsible,
                h = r ? t() : this._getPanelForTab(o),
                l = s.length ? this._getPanelForTab(s) : t(),
                u = {
                    oldTab: s,
                    oldPanel: l,
                    newTab: r ? t() : o,
                    newPanel: h
                };
            e.preventDefault(), o.hasClass("ui-state-disabled") || o.hasClass("ui-tabs-loading") || this.running || a && !i.collapsible || this._trigger("beforeActivate", e, u) === !1 || (i.active = r ? !1 : this.tabs.index(o), this.active = a ? t() : o, this.xhr && this.xhr.abort(), l.length || h.length || t.error("jQuery UI Tabs: Mismatching fragment identifier."), h.length && this.load(this.tabs.index(o), e), this._toggle(e, u))
        },
        _toggle: function(e, i) {
            function s() {
                o.running = !1, o._trigger("activate", e, i)
            }

            function n() {
                i.newTab.closest("li").addClass("ui-tabs-active ui-state-active"), a.length && o.options.show ? o._show(a, o.options.show, s) : (a.show(), s())
            }
            var o = this,
                a = i.newPanel,
                r = i.oldPanel;
            this.running = !0, r.length && this.options.hide ? this._hide(r, this.options.hide, function() {
                i.oldTab.closest("li").removeClass("ui-tabs-active ui-state-active"), n()
            }) : (i.oldTab.closest("li").removeClass("ui-tabs-active ui-state-active"), r.hide(), n()), r.attr("aria-hidden", "true"), i.oldTab.attr({
                "aria-selected": "false",
                "aria-expanded": "false"
            }), a.length && r.length ? i.oldTab.attr("tabIndex", -1) : a.length && this.tabs.filter(function() {
                return 0 === t(this).attr("tabIndex")
            }).attr("tabIndex", -1), a.attr("aria-hidden", "false"), i.newTab.attr({
                "aria-selected": "true",
                "aria-expanded": "true",
                tabIndex: 0
            })
        },
        _activate: function(e) {
            var i, s = this._findActive(e);
            s[0] !== this.active[0] && (s.length || (s = this.active), i = s.find(".ui-tabs-anchor")[0], this._eventHandler({
                target: i,
                currentTarget: i,
                preventDefault: t.noop
            }))
        },
        _findActive: function(e) {
            return e === !1 ? t() : this.tabs.eq(e)
        },
        _getIndex: function(t) {
            return "string" == typeof t && (t = this.anchors.index(this.anchors.filter("[href$='" + t + "']"))), t
        },
        _destroy: function() {
            this.xhr && this.xhr.abort(), this.element.removeClass("ui-tabs ui-widget ui-widget-content ui-corner-all ui-tabs-collapsible"), this.tablist.removeClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all").removeAttr("role"), this.anchors.removeClass("ui-tabs-anchor").removeAttr("role").removeAttr("tabIndex").removeUniqueId(), this.tablist.unbind(this.eventNamespace), this.tabs.add(this.panels).each(function() {
                t.data(this, "ui-tabs-destroy") ? t(this).remove() : t(this).removeClass("ui-state-default ui-state-active ui-state-disabled ui-corner-top ui-corner-bottom ui-widget-content ui-tabs-active ui-tabs-panel").removeAttr("tabIndex").removeAttr("aria-live").removeAttr("aria-busy").removeAttr("aria-selected").removeAttr("aria-labelledby").removeAttr("aria-hidden").removeAttr("aria-expanded").removeAttr("role")
            }), this.tabs.each(function() {
                var e = t(this),
                    i = e.data("ui-tabs-aria-controls");
                i ? e.attr("aria-controls", i).removeData("ui-tabs-aria-controls") : e.removeAttr("aria-controls")
            }), this.panels.show(), "content" !== this.options.heightStyle && this.panels.css("height", "")
        },
        enable: function(e) {
            var i = this.options.disabled;
            i !== !1 && (void 0 === e ? i = !1 : (e = this._getIndex(e), i = t.isArray(i) ? t.map(i, function(t) {
                return t !== e ? t : null
            }) : t.map(this.tabs, function(t, i) {
                return i !== e ? i : null
            })), this._setupDisabled(i))
        },
        disable: function(e) {
            var i = this.options.disabled;
            if (i !== !0) {
                if (void 0 === e) i = !0;
                else {
                    if (e = this._getIndex(e), -1 !== t.inArray(e, i)) return;
                    i = t.isArray(i) ? t.merge([e], i).sort() : [e]
                }
                this._setupDisabled(i)
            }
        },
        load: function(e, i) {
            e = this._getIndex(e);
            var s = this,
                n = this.tabs.eq(e),
                o = n.find(".ui-tabs-anchor"),
                a = this._getPanelForTab(n),
                r = {
                    tab: n,
                    panel: a
                },
                h = function(t, e) {
                    "abort" === e && s.panels.stop(!1, !0), n.removeClass("ui-tabs-loading"), a.removeAttr("aria-busy"), t === s.xhr && delete s.xhr
                };
            this._isLocal(o[0]) || (this.xhr = t.ajax(this._ajaxSettings(o, i, r)), this.xhr && "canceled" !== this.xhr.statusText && (n.addClass("ui-tabs-loading"), a.attr("aria-busy", "true"), this.xhr.done(function(t, e, n) {
                setTimeout(function() {
                    a.html(t), s._trigger("load", i, r), h(n, e)
                }, 1)
            }).fail(function(t, e) {
                setTimeout(function() {
                    h(t, e)
                }, 1)
            })))
        },
        _ajaxSettings: function(e, i, s) {
            var n = this;
            return {
                url: e.attr("href"),
                beforeSend: function(e, o) {
                    return n._trigger("beforeLoad", i, t.extend({
                        jqXHR: e,
                        ajaxSettings: o
                    }, s))
                }
            }
        },
        _getPanelForTab: function(e) {
            var i = t(e).attr("aria-controls");
            return this.element.find(this._sanitizeSelector("#" + i))
        }
    }), t.widget("ui.tooltip", {
        version: "1.11.4",
        options: {
            content: function() {
                var e = t(this).attr("title") || "";
                return t("<a>").text(e).html()
            },
            hide: !0,
            items: "[title]:not([disabled])",
            position: {
                my: "left top+15",
                at: "left bottom",
                collision: "flipfit flip"
            },
            show: !0,
            tooltipClass: null,
            track: !1,
            close: null,
            open: null
        },
        _addDescribedBy: function(e, i) {
            var s = (e.attr("aria-describedby") || "").split(/\s+/);
            s.push(i), e.data("ui-tooltip-id", i).attr("aria-describedby", t.trim(s.join(" ")))
        },
        _removeDescribedBy: function(e) {
            var i = e.data("ui-tooltip-id"),
                s = (e.attr("aria-describedby") || "").split(/\s+/),
                n = t.inArray(i, s); - 1 !== n && s.splice(n, 1), e.removeData("ui-tooltip-id"), s = t.trim(s.join(" ")), s ? e.attr("aria-describedby", s) : e.removeAttr("aria-describedby")
        },
        _create: function() {
            this._on({
                mouseover: "open",
                focusin: "open"
            }), this.tooltips = {}, this.parents = {}, this.options.disabled && this._disable(), this.liveRegion = t("<div>").attr({
                role: "log",
                "aria-live": "assertive",
                "aria-relevant": "additions"
            }).addClass("ui-helper-hidden-accessible").appendTo(this.document[0].body)
        },
        _setOption: function(e, i) {
            var s = this;
            return "disabled" === e ? (this[i ? "_disable" : "_enable"](), void(this.options[e] = i)) : (this._super(e, i), void("content" === e && t.each(this.tooltips, function(t, e) {
                s._updateContent(e.element)
            })))
        },
        _disable: function() {
            var e = this;
            t.each(this.tooltips, function(i, s) {
                var n = t.Event("blur");
                n.target = n.currentTarget = s.element[0], e.close(n, !0)
            }), this.element.find(this.options.items).addBack().each(function() {
                var e = t(this);
                e.is("[title]") && e.data("ui-tooltip-title", e.attr("title")).removeAttr("title")
            })
        },
        _enable: function() {
            this.element.find(this.options.items).addBack().each(function() {
                var e = t(this);
                e.data("ui-tooltip-title") && e.attr("title", e.data("ui-tooltip-title"))
            })
        },
        open: function(e) {
            var i = this,
                s = t(e ? e.target : this.element).closest(this.options.items);
            s.length && !s.data("ui-tooltip-id") && (s.attr("title") && s.data("ui-tooltip-title", s.attr("title")), s.data("ui-tooltip-open", !0), e && "mouseover" === e.type && s.parents().each(function() {
                var e, s = t(this);
                s.data("ui-tooltip-open") && (e = t.Event("blur"), e.target = e.currentTarget = this, i.close(e, !0)), s.attr("title") && (s.uniqueId(), i.parents[this.id] = {
                    element: this,
                    title: s.attr("title")
                }, s.attr("title", ""))
            }), this._registerCloseHandlers(e, s), this._updateContent(s, e))
        },
        _updateContent: function(t, e) {
            var i, s = this.options.content,
                n = this,
                o = e ? e.type : null;
            return "string" == typeof s ? this._open(e, t, s) : (i = s.call(t[0], function(i) {
                n._delay(function() {
                    t.data("ui-tooltip-open") && (e && (e.type = o), this._open(e, t, i))
                })
            }), void(i && this._open(e, t, i)))
        },
        _open: function(e, i, s) {
            function n(t) {
                l.of = t, a.is(":hidden") || a.position(l)
            }
            var o, a, r, h, l = t.extend({}, this.options.position);
            if (s) {
                if (o = this._find(i)) return void o.tooltip.find(".ui-tooltip-content").html(s);
                i.is("[title]") && (e && "mouseover" === e.type ? i.attr("title", "") : i.removeAttr("title")), o = this._tooltip(i), a = o.tooltip, this._addDescribedBy(i, a.attr("id")), a.find(".ui-tooltip-content").html(s), this.liveRegion.children().hide(), s.clone ? (h = s.clone(), h.removeAttr("id").find("[id]").removeAttr("id")) : h = s, t("<div>").html(h).appendTo(this.liveRegion), this.options.track && e && /^mouse/.test(e.type) ? (this._on(this.document, {
                    mousemove: n
                }), n(e)) : a.position(t.extend({ of: i
                }, this.options.position)), a.hide(), this._show(a, this.options.show), this.options.show && this.options.show.delay && (r = this.delayedShow = setInterval(function() {
                    a.is(":visible") && (n(l.of), clearInterval(r))
                }, t.fx.interval)), this._trigger("open", e, {
                    tooltip: a
                })
            }
        },
        _registerCloseHandlers: function(e, i) {
            var s = {
                keyup: function(e) {
                    if (e.keyCode === t.ui.keyCode.ESCAPE) {
                        var s = t.Event(e);
                        s.currentTarget = i[0], this.close(s, !0)
                    }
                }
            };
            i[0] !== this.element[0] && (s.remove = function() {
                this._removeTooltip(this._find(i).tooltip)
            }), e && "mouseover" !== e.type || (s.mouseleave = "close"), e && "focusin" !== e.type || (s.focusout = "close"), this._on(!0, i, s)
        },
        close: function(e) {
            var i, s = this,
                n = t(e ? e.currentTarget : this.element),
                o = this._find(n);
            return o ? (i = o.tooltip, void(o.closing || (clearInterval(this.delayedShow), n.data("ui-tooltip-title") && !n.attr("title") && n.attr("title", n.data("ui-tooltip-title")), this._removeDescribedBy(n), o.hiding = !0, i.stop(!0), this._hide(i, this.options.hide, function() {
                s._removeTooltip(t(this))
            }), n.removeData("ui-tooltip-open"), this._off(n, "mouseleave focusout keyup"), n[0] !== this.element[0] && this._off(n, "remove"), this._off(this.document, "mousemove"), e && "mouseleave" === e.type && t.each(this.parents, function(e, i) {
                t(i.element).attr("title", i.title), delete s.parents[e]
            }), o.closing = !0, this._trigger("close", e, {
                tooltip: i
            }), o.hiding || (o.closing = !1)))) : void n.removeData("ui-tooltip-open")
        },
        _tooltip: function(e) {
            var i = t("<div>").attr("role", "tooltip").addClass("ui-tooltip ui-widget ui-corner-all ui-widget-content " + (this.options.tooltipClass || "")),
                s = i.uniqueId().attr("id");
            return t("<div>").addClass("ui-tooltip-content").appendTo(i), i.appendTo(this.document[0].body), this.tooltips[s] = {
                element: e,
                tooltip: i
            }
        },
        _find: function(t) {
            var e = t.data("ui-tooltip-id");
            return e ? this.tooltips[e] : null
        },
        _removeTooltip: function(t) {
            t.remove(), delete this.tooltips[t.attr("id")]
        },
        _destroy: function() {
            var e = this;
            t.each(this.tooltips, function(i, s) {
                var n = t.Event("blur"),
                    o = s.element;
                n.target = n.currentTarget = o[0], e.close(n, !0), t("#" + i).remove(), o.data("ui-tooltip-title") && (o.attr("title") || o.attr("title", o.data("ui-tooltip-title")), o.removeData("ui-tooltip-title"))
            }), this.liveRegion.remove()
        }
    })
});

function myFunction() {
    var e, i, t, s, n, a;
    for (e = document.getElementById("myInput-Brend"), i = e.value.toUpperCase(), t = document.getElementById("myBrend"), s = t.getElementsByTagName("li"), a = 0; a < s.length; a++) n = s[a].getElementsByTagName("a")[0], n.innerHTML.toUpperCase().indexOf(i) > -1 ? s[a].style.display = "" : s[a].style.display = "none"
}
$(window).on("load", function() {
    $("body").addClass("page_ready")
}), $(function() {
    function e() {
        $(".menu__tab").removeClass("menu__tab_active"), $(".menu__section").removeClass("menu__section_active"), $(".menu").removeClass("menu_active");
        var e = $(".menu__tabs").height();
        $(window).width() > 599 ? $(".header__panel").height(e) : $(".header__panel").height(e + 49)
    }
    $(".header__burger").on("click", function() {
        $("body").toggleClass("page_open"), $("body").hasClass("page_open") ? $(".header__panel").height(69) : ($(".header__panel").height(0), e())
    }), $(window).scroll(function() {
        var i = $(window).scrollTop(),
            t = 108;
        t = $(window).width() > 599 ? 108 : 73, i > t ? (108 == t && ($("body").addClass("page_scrolled").removeClass("page_open"), e()), $(".nav__item").removeClass("nav__item_active")) : $("body").removeClass("page_scrolled")
    }).scroll(), $(".js-anchor").click(function() {
        return $("html, body").animate({
            scrollTop: $($.attr(this, "href")).offset().top
        }, 500), !1
    }), $(".menu__tab").on("mouseover", function() {
        $(this).addClass("menu__tab_active").siblings().removeClass("menu__tab_active"), $(".menu__section[data-menu-section=" + $(this).data("menu-tab") + "]").addClass("menu__section_active").siblings().removeClass("menu__section_active"), $(".menu").addClass("menu_active");
        var e = $(".menu__content").height() + $(".menu__tabs").height();
        $(window).width() > 599 ? $(".header__panel").height(e) : $(".header__panel").height(e + 49)
    }), $(".menu").on("mouseleave", function() {
        e()
    }), $(window).click(function() {
        $(".nav__item_location").removeClass("nav__item_active")
    }), $(".nav__item_location").click(function(e) {
        e.stopImmediatePropagation()
    }), $(".nav__link").click(function(e) {
        $(".menu__item").removeClass("menu__item_active");
        var i = $(this).closest(".nav__item");
        i.children(".nav__subnav").length > 0 && (e.preventDefault(), i.toggleClass("nav__item_active").siblings().removeClass("nav__item_active"))
    }), $(".nav__sublink").click(function(e) {
        e.preventDefault();
        var i = $(this);
        $.cookie("city", i.text(), {
            expires: 365,
            path: "/"
        }), $(".nav__item_location .nav__label").text(i.text()), i.closest(".nav__item").removeClass("nav__item_active"), $.cookie("cityNow", i.parent().data("city"), {
            expires: 365,
            path: "/"
        }), $(".connect__phone[data-phone=" + $.cookie("cityNow") + "]").addClass("connect__phone_active").siblings().removeClass("connect__phone_active");
        var t = $(this).attr("id");
        $.cookie("city-text", t, {
            expires: 365,
            path: "/"
        }), $.ajax({
            type: "POST",
            url: "/geoip/",
            data: {
                sity_change_btn: t
            },
            success: function(e) {
                location.reload()
            }
        })
    }), ("city-moscow" == $.cookie("city-text") || null == $.cookie("city-text")) && ($(".city-chek-msk").show(), $(".city-chek-spb").hide()), "city-spb" == $.cookie("city-text") && ($(".city-chek-msk").hide(), $(".city-chek-spb").show()), null != $.cookie("city") && $(".nav__item_location .nav__label").text($.cookie("city")), "" != $.cookie("cityNow") && $(".connect__phone[data-phone=" + $.cookie("cityNow") + "]").addClass("connect__phone_active").siblings().removeClass("connect__phone_active")
}), $(function() {
    $(".post__play").on("click", function(e) {
        var i = $(this).closest(".post__video");
        i.addClass("post__video_active"), i.find(".post__movie")[0].src += "&autoplay=1", e.preventDefault()
    })
}), $(function() {
    $(".breaking__list_accordion .breaking__name").on("click", function(e) {
        e.preventDefault();
        var i = $(this).parent(),
            t = i.data("breaking");
        i.hasClass("breaking__item_active") ? (i.removeClass("breaking__item_active"), $('.breaking__point[data-breaking-point="' + t + '"]').removeClass("breaking__point_active")) : (i.addClass("breaking__item_active").siblings().removeClass("breaking__item_active"), $('.breaking__point[data-breaking-point="' + t + '"]').addClass("breaking__point_active").siblings().removeClass("breaking__point_active"))
    }), $(".breaking__point").on("click", function(e) {
        e.preventDefault();
        var i = $(this),
            t = i.data("breaking-point");
        i.hasClass("breaking__point_active") ? (i.removeClass("breaking__point_active"), $('.breaking__item[data-breaking="' + t + '"]').removeClass("breaking__item_active")) : (i.addClass("breaking__point_active").siblings().removeClass("breaking__point_active"), $('.breaking__item[data-breaking="' + t + '"]').addClass("breaking__item_active").siblings().removeClass("breaking__item_active"))
    })
}), $(function() {
    $(".faq__head").on("click", function() {
        $(this).parent().toggleClass("faq__item_active").siblings().removeClass("faq__item_active")
    })
}), $(function() {
    new Swiper(".reviews__slider", {
        loop: !0,
        slidesPerView: 3,
        slidesPerGroup: 3,
        breakpoints: {
            1e3: {
                slidesPerView: 2,
                slidesPerGroup: 2
            },
            762: {
                slidesPerView: 1,
                slidesPerGroup: 1
            }
        },
        nextButton: ".reviews__next",
        prevButton: ".reviews__prev"
    }), new Swiper(".breaking__slider", {
        loop: !0,
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 10,
        breakpoints: {
            1e3: {
                slidesPerView: 2,
                slidesPerGroup: 2
            },
            762: {
                slidesPerView: 1,
                slidesPerGroup: 1
            }
        },
        paginationClickable: !0,
        pagination: ".breaking__pagination"
    }), new Swiper(".consultation__slider", {
        loop: !0,
        slidesPerView: 4,
        slidesPerGroup: 4,
        breakpoints: {
            1200: {
                slidesPerView: 3,
                slidesPerGroup: 3
            },
            1e3: {
                slidesPerView: 2,
                slidesPerGroup: 2
            },
            762: {
                slidesPerView: 1,
                slidesPerGroup: 1
            }
        },
        nextButton: ".consultation__next",
        prevButton: ".consultation__prev"
    }), new Swiper(".articles__slider", {
        loop: !0,
        slidesPerView: 4,
        slidesPerGroup: 4,
        breakpoints: {
            1200: {
                slidesPerView: 3,
                slidesPerGroup: 3
            },
            1e3: {
                slidesPerView: 2,
                slidesPerGroup: 2
            },
            762: {
                slidesPerView: 1,
                slidesPerGroup: 1
            }
        },
        nextButton: ".articles__next",
        prevButton: ".articles__prev"
    }), new Swiper(".brands__slider", {
        loop: !0,
        slidesPerView: 7,
        slidesPerGroup: 7,
        paginationClickable: !0,
        breakpoints: {
            1260: {
                slidesPerView: 6,
                slidesPerGroup: 6
            },
            1e3: {
                slidesPerView: 5,
                slidesPerGroup: 5
            },
            900: {
                slidesPerView: 4,
                slidesPerGroup: 4
            },
            800: {
                slidesPerView: 3,
                slidesPerGroup: 3
            },
            560: {
                slidesPerView: 2,
                slidesPerGroup: 2
            }
        },
        pagination: ".brands__pagination",
        nextButton: ".brands__next",
        prevButton: ".brands__prev"
    }), new Swiper(".brands__slider2", {
        loop: !0,
        slidesPerView: 7,
        slidesPerGroup: 7,
        paginationClickable: !0,
        breakpoints: {
            1260: {
                slidesPerView: 6,
                slidesPerGroup: 6
            },
            1e3: {
                slidesPerView: 5,
                slidesPerGroup: 5
            },
            900: {
                slidesPerView: 4,
                slidesPerGroup: 4
            },
            800: {
                slidesPerView: 3,
                slidesPerGroup: 3
            },
            560: {
                slidesPerView: 2,
                slidesPerGroup: 2
            }
        },
        pagination: ".brands__pagination2",
        nextButton: ".brands__next",
        prevButton: ".brands__prev"
    })
}), $(window).on("load resize", function() {
    $(".js-popup").on("click", function(e) {
        e.preventDefault(), $(".popup").removeClass("popup_active"), $("body").addClass("popup-open");
        var i = $(this).find(".menu__action-text").text(),
            t = ".popup_" + $(this).data("popup");
        "" == i && (i = $(this).text()), $(t).find("h3").text(i), $(t).addClass("popup_active")
    }), $(".popup__close, .popup__bg").on("click", function() {
        $("body").removeClass("popup-open"), $(".popup").removeClass("popup_active")
    })
}), $(function() {
    $(".feeds2").length && $(".popup_request_full").addClass("popup_active"), $(".feeds3").length && $(".popup_request_success").addClass("popup_active")
}), $(document).ready(function() {
    $(".spoiler-form-title").click(function() {
        return $(this).parent().children(".spoiler-form-body").slideToggle(), !1
    })
}); 
$(document).ready(function() {
    $(".office-content.other-table h2").click(function() {
        $(".other-table").toggleClass("active")
    })
});