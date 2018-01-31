if (function(t, e) {
        function i(t) {
            var e = t.length,
                i = rt.type(t);
            return !rt.isWindow(t) && (!(1 !== t.nodeType || !e) || ("array" === i || "function" !== i && (0 === e || "number" == typeof e && e > 0 && e - 1 in t)))
        }

        function n(t) {
            var e = wt[t] = {};
            return rt.each(t.match(ht) || [], function(t, i) {
                e[i] = !0
            }), e
        }

        function s(t, i, n, s) {
            if (rt.acceptData(t)) {
                var o, a, r = rt.expando,
                    l = "string" == typeof i,
                    h = t.nodeType,
                    c = h ? rt.cache : t,
                    u = h ? t[r] : t[r] && r;
                if (u && c[u] && (s || c[u].data) || !l || n !== e) return u || (h ? t[r] = u = Z.pop() || rt.guid++ : u = r), c[u] || (c[u] = {}, h || (c[u].toJSON = rt.noop)), ("object" == typeof i || "function" == typeof i) && (s ? c[u] = rt.extend(c[u], i) : c[u].data = rt.extend(c[u].data, i)), o = c[u], s || (o.data || (o.data = {}), o = o.data), n !== e && (o[rt.camelCase(i)] = n), l ? null == (a = o[i]) && (a = o[rt.camelCase(i)]) : a = o, a
            }
        }

        function o(t, e, i) {
            if (rt.acceptData(t)) {
                var n, s, o, a = t.nodeType,
                    l = a ? rt.cache : t,
                    h = a ? t[rt.expando] : rt.expando;
                if (l[h]) {
                    if (e && (o = i ? l[h] : l[h].data)) {
                        rt.isArray(e) ? e = e.concat(rt.map(e, rt.camelCase)) : e in o ? e = [e] : (e = rt.camelCase(e), e = e in o ? [e] : e.split(" "));
                        for (n = 0, s = e.length; s > n; n++) delete o[e[n]];
                        if (!(i ? r : rt.isEmptyObject)(o)) return
                    }(i || (delete l[h].data, r(l[h]))) && (a ? rt.cleanData([t], !0) : rt.support.deleteExpando || l != l.window ? delete l[h] : l[h] = null)
                }
            }
        }

        function a(t, i, n) {
            if (n === e && 1 === t.nodeType) {
                var s = "data-" + i.replace(Ct, "-$1").toLowerCase();
                if ("string" == typeof(n = t.getAttribute(s))) {
                    try {
                        n = "true" === n || "false" !== n && ("null" === n ? null : +n + "" === n ? +n : kt.test(n) ? rt.parseJSON(n) : n)
                    } catch (t) {}
                    rt.data(t, i, n)
                } else n = e
            }
            return n
        }

        function r(t) {
            var e;
            for (e in t)
                if (("data" !== e || !rt.isEmptyObject(t[e])) && "toJSON" !== e) return !1;
            return !0
        }

        function l() {
            return !0
        }

        function h() {
            return !1
        }

        function c(t, e) {
            do {
                t = t[e]
            } while (t && 1 !== t.nodeType);
            return t
        }

        function u(t, e, i) {
            if (e = e || 0, rt.isFunction(e)) return rt.grep(t, function(t, n) {
                return !!e.call(t, n, t) === i
            });
            if (e.nodeType) return rt.grep(t, function(t) {
                return t === e === i
            });
            if ("string" == typeof e) {
                var n = rt.grep(t, function(t) {
                    return 1 === t.nodeType
                });
                if ($t.test(e)) return rt.filter(e, n, !i);
                e = rt.filter(e, n)
            }
            return rt.grep(t, function(t) {
                return rt.inArray(t, e) >= 0 === i
            })
        }

        function d(t) {
            var e = Ut.split("|"),
                i = t.createDocumentFragment();
            if (i.createElement)
                for (; e.length;) i.createElement(e.pop());
            return i
        }

        function p(t, e) {
            return t.getElementsByTagName(e)[0] || t.appendChild(t.ownerDocument.createElement(e))
        }

        function f(t) {
            var e = t.getAttributeNode("type");
            return t.type = (e && e.specified) + "/" + t.type, t
        }

        function m(t) {
            var e = ne.exec(t.type);
            return e ? t.type = e[1] : t.removeAttribute("type"), t
        }

        function g(t, e) {
            for (var i, n = 0; null != (i = t[n]); n++) rt._data(i, "globalEval", !e || rt._data(e[n], "globalEval"))
        }

        function v(t, e) {
            if (1 === e.nodeType && rt.hasData(t)) {
                var i, n, s, o = rt._data(t),
                    a = rt._data(e, o),
                    r = o.events;
                if (r) {
                    delete a.handle, a.events = {};
                    for (i in r)
                        for (n = 0, s = r[i].length; s > n; n++) rt.event.add(e, i, r[i][n])
                }
                a.data && (a.data = rt.extend({}, a.data))
            }
        }

        function y(t, e) {
            var i, n, s;
            if (1 === e.nodeType) {
                if (i = e.nodeName.toLowerCase(), !rt.support.noCloneEvent && e[rt.expando]) {
                    s = rt._data(e);
                    for (n in s.events) rt.removeEvent(e, n, s.handle);
                    e.removeAttribute(rt.expando)
                }
                "script" === i && e.text !== t.text ? (f(e).text = t.text, m(e)) : "object" === i ? (e.parentNode && (e.outerHTML = t.outerHTML), rt.support.html5Clone && t.innerHTML && !rt.trim(e.innerHTML) && (e.innerHTML = t.innerHTML)) : "input" === i && te.test(t.type) ? (e.defaultChecked = e.checked = t.checked, e.value !== t.value && (e.value = t.value)) : "option" === i ? e.defaultSelected = e.selected = t.defaultSelected : ("input" === i || "textarea" === i) && (e.defaultValue = t.defaultValue)
            }
        }

        function b(t, i) {
            var n, s, o = 0,
                a = typeof t.getElementsByTagName !== Y ? t.getElementsByTagName(i || "*") : typeof t.querySelectorAll !== Y ? t.querySelectorAll(i || "*") : e;
            if (!a)
                for (a = [], n = t.childNodes || t; null != (s = n[o]); o++) !i || rt.nodeName(s, i) ? a.push(s) : rt.merge(a, b(s, i));
            return i === e || i && rt.nodeName(t, i) ? rt.merge([t], a) : a
        }

        function _(t) {
            te.test(t.type) && (t.defaultChecked = t.checked)
        }

        function x(t, e) {
            if (e in t) return e;
            for (var i = e.charAt(0).toUpperCase() + e.slice(1), n = e, s = we.length; s--;)
                if ((e = we[s] + i) in t) return e;
            return n
        }

        function w(t, e) {
            return t = e || t, "none" === rt.css(t, "display") || !rt.contains(t.ownerDocument, t)
        }

        function k(t, e) {
            for (var i, n, s, o = [], a = 0, r = t.length; r > a; a++)(n = t[a]).style && (o[a] = rt._data(n, "olddisplay"), i = n.style.display, e ? (o[a] || "none" !== i || (n.style.display = ""), "" === n.style.display && w(n) && (o[a] = rt._data(n, "olddisplay", T(n.nodeName)))) : o[a] || (s = w(n), (i && "none" !== i || !s) && rt._data(n, "olddisplay", s ? i : rt.css(n, "display"))));
            for (a = 0; r > a; a++)(n = t[a]).style && (e && "none" !== n.style.display && "" !== n.style.display || (n.style.display = e ? o[a] || "" : "none"));
            return t
        }

        function C(t, e, i) {
            var n = me.exec(e);
            return n ? Math.max(0, n[1] - (i || 0)) + (n[2] || "px") : e
        }

        function D(t, e, i, n, s) {
            for (var o = i === (n ? "border" : "content") ? 4 : "width" === e ? 1 : 0, a = 0; 4 > o; o += 2) "margin" === i && (a += rt.css(t, i + xe[o], !0, s)), n ? ("content" === i && (a -= rt.css(t, "padding" + xe[o], !0, s)), "margin" !== i && (a -= rt.css(t, "border" + xe[o] + "Width", !0, s))) : (a += rt.css(t, "padding" + xe[o], !0, s), "padding" !== i && (a += rt.css(t, "border" + xe[o] + "Width", !0, s)));
            return a
        }

        function A(t, e, i) {
            var n = !0,
                s = "width" === e ? t.offsetWidth : t.offsetHeight,
                o = le(t),
                a = rt.support.boxSizing && "border-box" === rt.css(t, "boxSizing", !1, o);
            if (0 >= s || null == s) {
                if ((0 > (s = he(t, e, o)) || null == s) && (s = t.style[e]), ge.test(s)) return s;
                n = a && (rt.support.boxSizingReliable || s === t.style[e]), s = parseFloat(s) || 0
            }
            return s + D(t, e, i || (a ? "border" : "content"), n, o) + "px"
        }

        function T(t) {
            var e = G,
                i = ye[t];
            return i || ("none" !== (i = I(t, e)) && i || (re = (re || rt("<iframe frameborder='0' width='0' height='0'/>").css("cssText", "display:block !important")).appendTo(e.documentElement), (e = (re[0].contentWindow || re[0].contentDocument).document).write("<!doctype html><html><body>"), e.close(), i = I(t, e), re.detach()), ye[t] = i), i
        }

        function I(t, e) {
            var i = rt(e.createElement(t)).appendTo(e.body),
                n = rt.css(i[0], "display");
            return i.remove(), n
        }

        function S(t, e, i, n) {
            var s;
            if (rt.isArray(e)) rt.each(e, function(e, s) {
                i || Ce.test(t) ? n(t, s) : S(t + "[" + ("object" == typeof s ? e : "") + "]", s, i, n)
            });
            else if (i || "object" !== rt.type(e)) n(t, e);
            else
                for (s in e) S(t + "[" + s + "]", e[s], i, n)
        }

        function E(t) {
            return function(e, i) {
                "string" != typeof e && (i = e, e = "*");
                var n, s = 0,
                    o = e.toLowerCase().match(ht) || [];
                if (rt.isFunction(i))
                    for (; n = o[s++];) "+" === n[0] ? (n = n.slice(1) || "*", (t[n] = t[n] || []).unshift(i)) : (t[n] = t[n] || []).push(i)
            }
        }

        function P(t, i, n, s) {
            function o(l) {
                var h;
                return a[l] = !0, rt.each(t[l] || [], function(t, l) {
                    var c = l(i, n, s);
                    return "string" != typeof c || r || a[c] ? r ? !(h = c) : e : (i.dataTypes.unshift(c), o(c), !1)
                }), h
            }
            var a = {},
                r = t === ze;
            return o(i.dataTypes[0]) || !a["*"] && o("*")
        }

        function N(t, i) {
            var n, s, o = rt.ajaxSettings.flatOptions || {};
            for (s in i) i[s] !== e && ((o[s] ? t : n || (n = {}))[s] = i[s]);
            return n && rt.extend(!0, t, n), t
        }

        function M(t, i, n) {
            var s, o, a, r, l = t.contents,
                h = t.dataTypes,
                c = t.responseFields;
            for (r in c) r in n && (i[c[r]] = n[r]);
            for (;
                "*" === h[0];) h.shift(), o === e && (o = t.mimeType || i.getResponseHeader("Content-Type"));
            if (o)
                for (r in l)
                    if (l[r] && l[r].test(o)) {
                        h.unshift(r);
                        break
                    }
            if (h[0] in n) a = h[0];
            else {
                for (r in n) {
                    if (!h[0] || t.converters[r + " " + h[0]]) {
                        a = r;
                        break
                    }
                    s || (s = r)
                }
                a = a || s
            }
            return a ? (a !== h[0] && h.unshift(a), n[a]) : e
        }

        function O(t, e) {
            var i, n, s, o, a = {},
                r = 0,
                l = t.dataTypes.slice(),
                h = l[0];
            if (t.dataFilter && (e = t.dataFilter(e, t.dataType)), l[1])
                for (s in t.converters) a[s.toLowerCase()] = t.converters[s];
            for (; n = l[++r];)
                if ("*" !== n) {
                    if ("*" !== h && h !== n) {
                        if (!(s = a[h + " " + n] || a["* " + n]))
                            for (i in a)
                                if ((o = i.split(" "))[1] === n && (s = a[h + " " + o[0]] || a["* " + o[0]])) {
                                    !0 === s ? s = a[i] : !0 !== a[i] && (n = o[0], l.splice(r--, 0, n));
                                    break
                                }
                        if (!0 !== s)
                            if (s && t.throws) e = s(e);
                            else try {
                                e = s(e)
                            } catch (t) {
                                return {
                                    state: "parsererror",
                                    error: s ? t : "No conversion from " + h + " to " + n
                                }
                            }
                    }
                    h = n
                }
            return {
                state: "success",
                data: e
            }
        }

        function j() {
            try {
                return new t.XMLHttpRequest
            } catch (t) {}
        }

        function H() {
            try {
                return new t.ActiveXObject("Microsoft.XMLHTTP")
            } catch (t) {}
        }

        function R() {
            return setTimeout(function() {
                Ve = e
            }), Ve = rt.now()
        }

        function F(t, e) {
            rt.each(e, function(e, i) {
                for (var n = (ei[e] || []).concat(ei["*"]), s = 0, o = n.length; o > s; s++)
                    if (n[s].call(t, e, i)) return
            })
        }

        function L(t, e, i) {
            var n, s, o = 0,
                a = ti.length,
                r = rt.Deferred().always(function() {
                    delete l.elem
                }),
                l = function() {
                    if (s) return !1;
                    for (var e = Ve || R(), i = Math.max(0, h.startTime + h.duration - e), n = 1 - (i / h.duration || 0), o = 0, a = h.tweens.length; a > o; o++) h.tweens[o].run(n);
                    return r.notifyWith(t, [h, n, i]), 1 > n && a ? i : (r.resolveWith(t, [h]), !1)
                },
                h = r.promise({
                    elem: t,
                    props: rt.extend({}, e),
                    opts: rt.extend(!0, {
                        specialEasing: {}
                    }, i),
                    originalProperties: e,
                    originalOptions: i,
                    startTime: Ve || R(),
                    duration: i.duration,
                    tweens: [],
                    createTween: function(e, i) {
                        var n = rt.Tween(t, h.opts, e, i, h.opts.specialEasing[e] || h.opts.easing);
                        return h.tweens.push(n), n
                    },
                    stop: function(e) {
                        var i = 0,
                            n = e ? h.tweens.length : 0;
                        if (s) return this;
                        for (s = !0; n > i; i++) h.tweens[i].run(1);
                        return e ? r.resolveWith(t, [h, e]) : r.rejectWith(t, [h, e]), this
                    }
                }),
                c = h.props;
            for (B(c, h.opts.specialEasing); a > o; o++)
                if (n = ti[o].call(h, t, c, h.opts)) return n;
            return F(h, c), rt.isFunction(h.opts.start) && h.opts.start.call(t, h), rt.fx.timer(rt.extend(l, {
                elem: t,
                anim: h,
                queue: h.opts.queue
            })), h.progress(h.opts.progress).done(h.opts.done, h.opts.complete).fail(h.opts.fail).always(h.opts.always)
        }

        function B(t, e) {
            var i, n, s, o, a;
            for (s in t)
                if (n = rt.camelCase(s), o = e[n], i = t[s], rt.isArray(i) && (o = i[1], i = t[s] = i[0]), s !== n && (t[n] = i, delete t[s]), (a = rt.cssHooks[n]) && "expand" in a) {
                    i = a.expand(i), delete t[n];
                    for (s in i) s in t || (t[s] = i[s], e[s] = o)
                } else e[n] = o
        }

        function z(t, e, i, n, s) {
            return new z.prototype.init(t, e, i, n, s)
        }

        function $(t, e) {
            var i, n = {
                    height: t
                },
                s = 0;
            for (e = e ? 1 : 0; 4 > s; s += 2 - e) i = xe[s], n["margin" + i] = n["padding" + i] = t;
            return e && (n.opacity = n.width = t), n
        }

        function W(t) {
            return rt.isWindow(t) ? t : 9 === t.nodeType && (t.defaultView || t.parentWindow)
        }
        var q, U, Y = typeof e,
            G = t.document,
            K = t.location,
            V = t.jQuery,
            Q = t.$,
            X = {},
            Z = [],
            J = "1.9.1",
            tt = Z.concat,
            et = Z.push,
            it = Z.slice,
            nt = Z.indexOf,
            st = X.toString,
            ot = X.hasOwnProperty,
            at = J.trim,
            rt = function(t, e) {
                return new rt.fn.init(t, e, U)
            },
            lt = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
            ht = /\S+/g,
            ct = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
            ut = /^(?:(<[\w\W]+>)[^>]*|#([\w-]*))$/,
            dt = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
            pt = /^[\],:{}\s]*$/,
            ft = /(?:^|:|,)(?:\s*\[)+/g,
            mt = /\\(?:["\\\/bfnrt]|u[\da-fA-F]{4})/g,
            gt = /"[^"\\\r\n]*"|true|false|null|-?(?:\d+\.|)\d+(?:[eE][+-]?\d+|)/g,
            vt = /^-ms-/,
            yt = /-([\da-z])/gi,
            bt = function(t, e) {
                return e.toUpperCase()
            },
            _t = function(t) {
                (G.addEventListener || "load" === t.type || "complete" === G.readyState) && (xt(), rt.ready())
            },
            xt = function() {
                G.addEventListener ? (G.removeEventListener("DOMContentLoaded", _t, !1), t.removeEventListener("load", _t, !1)) : (G.detachEvent("onreadystatechange", _t), t.detachEvent("onload", _t))
            };
        rt.fn = rt.prototype = {
            jquery: J,
            constructor: rt,
            init: function(t, i, n) {
                var s, o;
                if (!t) return this;
                if ("string" == typeof t) {
                    if (!(s = "<" === t.charAt(0) && ">" === t.charAt(t.length - 1) && t.length >= 3 ? [null, t, null] : ut.exec(t)) || !s[1] && i) return !i || i.jquery ? (i || n).find(t) : this.constructor(i).find(t);
                    if (s[1]) {
                        if (i = i instanceof rt ? i[0] : i, rt.merge(this, rt.parseHTML(s[1], i && i.nodeType ? i.ownerDocument || i : G, !0)), dt.test(s[1]) && rt.isPlainObject(i))
                            for (s in i) rt.isFunction(this[s]) ? this[s](i[s]) : this.attr(s, i[s]);
                        return this
                    }
                    if ((o = G.getElementById(s[2])) && o.parentNode) {
                        if (o.id !== s[2]) return n.find(t);
                        this.length = 1, this[0] = o
                    }
                    return this.context = G, this.selector = t, this
                }
                return t.nodeType ? (this.context = this[0] = t, this.length = 1, this) : rt.isFunction(t) ? n.ready(t) : (t.selector !== e && (this.selector = t.selector, this.context = t.context), rt.makeArray(t, this))
            },
            selector: "",
            length: 0,
            size: function() {
                return this.length
            },
            toArray: function() {
                return it.call(this)
            },
            get: function(t) {
                return null == t ? this.toArray() : 0 > t ? this[this.length + t] : this[t]
            },
            pushStack: function(t) {
                var e = rt.merge(this.constructor(), t);
                return e.prevObject = this, e.context = this.context, e
            },
            each: function(t, e) {
                return rt.each(this, t, e)
            },
            ready: function(t) {
                return rt.ready.promise().done(t), this
            },
            slice: function() {
                return this.pushStack(it.apply(this, arguments))
            },
            first: function() {
                return this.eq(0)
            },
            last: function() {
                return this.eq(-1)
            },
            eq: function(t) {
                var e = this.length,
                    i = +t + (0 > t ? e : 0);
                return this.pushStack(i >= 0 && e > i ? [this[i]] : [])
            },
            map: function(t) {
                return this.pushStack(rt.map(this, function(e, i) {
                    return t.call(e, i, e)
                }))
            },
            end: function() {
                return this.prevObject || this.constructor(null)
            },
            push: et,
            sort: [].sort,
            splice: [].splice
        }, rt.fn.init.prototype = rt.fn, rt.extend = rt.fn.extend = function() {
            var t, i, n, s, o, a, r = arguments[0] || {},
                l = 1,
                h = arguments.length,
                c = !1;
            for ("boolean" == typeof r && (c = r, r = arguments[1] || {}, l = 2), "object" == typeof r || rt.isFunction(r) || (r = {}), h === l && (r = this, --l); h > l; l++)
                if (null != (o = arguments[l]))
                    for (s in o) t = r[s], n = o[s], r !== n && (c && n && (rt.isPlainObject(n) || (i = rt.isArray(n))) ? (i ? (i = !1, a = t && rt.isArray(t) ? t : []) : a = t && rt.isPlainObject(t) ? t : {}, r[s] = rt.extend(c, a, n)) : n !== e && (r[s] = n));
            return r
        }, rt.extend({
            noConflict: function(e) {
                return t.$ === rt && (t.$ = Q), e && t.jQuery === rt && (t.jQuery = V), rt
            },
            isReady: !1,
            readyWait: 1,
            holdReady: function(t) {
                t ? rt.readyWait++ : rt.ready(!0)
            },
            ready: function(t) {
                if (!0 === t ? !--rt.readyWait : !rt.isReady) {
                    if (!G.body) return setTimeout(rt.ready);
                    rt.isReady = !0, !0 !== t && --rt.readyWait > 0 || (q.resolveWith(G, [rt]), rt.fn.trigger && rt(G).trigger("ready").off("ready"))
                }
            },
            isFunction: function(t) {
                return "function" === rt.type(t)
            },
            isArray: Array.isArray || function(t) {
                return "array" === rt.type(t)
            },
            isWindow: function(t) {
                return null != t && t == t.window
            },
            isNumeric: function(t) {
                return !isNaN(parseFloat(t)) && isFinite(t)
            },
            type: function(t) {
                return null == t ? t + "" : "object" == typeof t || "function" == typeof t ? X[st.call(t)] || "object" : typeof t
            },
            isPlainObject: function(t) {
                if (!t || "object" !== rt.type(t) || t.nodeType || rt.isWindow(t)) return !1;
                try {
                    if (t.constructor && !ot.call(t, "constructor") && !ot.call(t.constructor.prototype, "isPrototypeOf")) return !1
                } catch (t) {
                    return !1
                }
                var i;
                for (i in t);
                return i === e || ot.call(t, i)
            },
            isEmptyObject: function(t) {
                var e;
                for (e in t) return !1;
                return !0
            },
            error: function(t) {
                throw Error(t)
            },
            parseHTML: function(t, e, i) {
                if (!t || "string" != typeof t) return null;
                "boolean" == typeof e && (i = e, e = !1), e = e || G;
                var n = dt.exec(t),
                    s = !i && [];
                return n ? [e.createElement(n[1])] : (n = rt.buildFragment([t], e, s), s && rt(s).remove(), rt.merge([], n.childNodes))
            },
            parseJSON: function(i) {
                return t.JSON && t.JSON.parse ? t.JSON.parse(i) : null === i ? i : "string" == typeof i && (i = rt.trim(i)) && pt.test(i.replace(mt, "@").replace(gt, "]").replace(ft, "")) ? Function("return " + i)() : (rt.error("Invalid JSON: " + i), e)
            },
            parseXML: function(i) {
                var n, s;
                if (!i || "string" != typeof i) return null;
                try {
                    t.DOMParser ? (s = new DOMParser, n = s.parseFromString(i, "text/xml")) : (n = new ActiveXObject("Microsoft.XMLDOM"), n.async = "false", n.loadXML(i))
                } catch (t) {
                    n = e
                }
                return n && n.documentElement && !n.getElementsByTagName("parsererror").length || rt.error("Invalid XML: " + i), n
            },
            noop: function() {},
            globalEval: function(e) {
                e && rt.trim(e) && (t.execScript || function(e) {
                    t.eval.call(t, e)
                })(e)
            },
            camelCase: function(t) {
                return t.replace(vt, "ms-").replace(yt, bt)
            },
            nodeName: function(t, e) {
                return t.nodeName && t.nodeName.toLowerCase() === e.toLowerCase()
            },
            each: function(t, e, n) {
                var s = 0,
                    o = t.length,
                    a = i(t);
                if (n) {
                    if (a)
                        for (; o > s && !1 !== e.apply(t[s], n); s++);
                    else
                        for (s in t)
                            if (!1 === e.apply(t[s], n)) break
                } else if (a)
                    for (; o > s && !1 !== e.call(t[s], s, t[s]); s++);
                else
                    for (s in t)
                        if (!1 === e.call(t[s], s, t[s])) break;
                return t
            },
            trim: at && !at.call("\ufeff ") ? function(t) {
                return null == t ? "" : at.call(t)
            } : function(t) {
                return null == t ? "" : (t + "").replace(ct, "")
            },
            makeArray: function(t, e) {
                var n = e || [];
                return null != t && (i(Object(t)) ? rt.merge(n, "string" == typeof t ? [t] : t) : et.call(n, t)), n
            },
            inArray: function(t, e, i) {
                var n;
                if (e) {
                    if (nt) return nt.call(e, t, i);
                    for (n = e.length, i = i ? 0 > i ? Math.max(0, n + i) : i : 0; n > i; i++)
                        if (i in e && e[i] === t) return i
                }
                return -1
            },
            merge: function(t, i) {
                var n = i.length,
                    s = t.length,
                    o = 0;
                if ("number" == typeof n)
                    for (; n > o; o++) t[s++] = i[o];
                else
                    for (; i[o] !== e;) t[s++] = i[o++];
                return t.length = s, t
            },
            grep: function(t, e, i) {
                var n, s = [],
                    o = 0,
                    a = t.length;
                for (i = !!i; a > o; o++) n = !!e(t[o], o), i !== n && s.push(t[o]);
                return s
            },
            map: function(t, e, n) {
                var s, o = 0,
                    a = t.length,
                    r = [];
                if (i(t))
                    for (; a > o; o++) null != (s = e(t[o], o, n)) && (r[r.length] = s);
                else
                    for (o in t) null != (s = e(t[o], o, n)) && (r[r.length] = s);
                return tt.apply([], r)
            },
            guid: 1,
            proxy: function(t, i) {
                var n, s, o;
                return "string" == typeof i && (o = t[i], i = t, t = o), rt.isFunction(t) ? (n = it.call(arguments, 2), s = function() {
                    return t.apply(i || this, n.concat(it.call(arguments)))
                }, s.guid = t.guid = t.guid || rt.guid++, s) : e
            },
            access: function(t, i, n, s, o, a, r) {
                var l = 0,
                    h = t.length,
                    c = null == n;
                if ("object" === rt.type(n)) {
                    o = !0;
                    for (l in n) rt.access(t, i, l, n[l], !0, a, r)
                } else if (s !== e && (o = !0, rt.isFunction(s) || (r = !0), c && (r ? (i.call(t, s), i = null) : (c = i, i = function(t, e, i) {
                        return c.call(rt(t), i)
                    })), i))
                    for (; h > l; l++) i(t[l], n, r ? s : s.call(t[l], l, i(t[l], n)));
                return o ? t : c ? i.call(t) : h ? i(t[0], n) : a
            },
            now: function() {
                return (new Date).getTime()
            }
        }), rt.ready.promise = function(e) {
            if (!q)
                if (q = rt.Deferred(), "complete" === G.readyState) setTimeout(rt.ready);
                else if (G.addEventListener) G.addEventListener("DOMContentLoaded", _t, !1), t.addEventListener("load", _t, !1);
            else {
                G.attachEvent("onreadystatechange", _t), t.attachEvent("onload", _t);
                var i = !1;
                try {
                    i = null == t.frameElement && G.documentElement
                } catch (t) {}
                i && i.doScroll && function t() {
                    if (!rt.isReady) {
                        try {
                            i.doScroll("left")
                        } catch (e) {
                            return setTimeout(t, 50)
                        }
                        xt(), rt.ready()
                    }
                }()
            }
            return q.promise(e)
        }, rt.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function(t, e) {
            X["[object " + e + "]"] = e.toLowerCase()
        }), U = rt(G);
        var wt = {};
        rt.Callbacks = function(t) {
            var i, s, o, a, r, l, h = [],
                c = !(t = "string" == typeof t ? wt[t] || n(t) : rt.extend({}, t)).once && [],
                u = function(e) {
                    for (s = t.memory && e, o = !0, r = l || 0, l = 0, a = h.length, i = !0; h && a > r; r++)
                        if (!1 === h[r].apply(e[0], e[1]) && t.stopOnFalse) {
                            s = !1;
                            break
                        }
                    i = !1, h && (c ? c.length && u(c.shift()) : s ? h = [] : d.disable())
                },
                d = {
                    add: function() {
                        if (h) {
                            var e = h.length;
                            (function e(i) {
                                rt.each(i, function(i, n) {
                                    var s = rt.type(n);
                                    "function" === s ? t.unique && d.has(n) || h.push(n) : n && n.length && "string" !== s && e(n)
                                })
                            })(arguments), i ? a = h.length : s && (l = e, u(s))
                        }
                        return this
                    },
                    remove: function() {
                        return h && rt.each(arguments, function(t, e) {
                            for (var n;
                                (n = rt.inArray(e, h, n)) > -1;) h.splice(n, 1), i && (a >= n && a--, r >= n && r--)
                        }), this
                    },
                    has: function(t) {
                        return t ? rt.inArray(t, h) > -1 : !(!h || !h.length)
                    },
                    empty: function() {
                        return h = [], this
                    },
                    disable: function() {
                        return h = c = s = e, this
                    },
                    disabled: function() {
                        return !h
                    },
                    lock: function() {
                        return c = e, s || d.disable(), this
                    },
                    locked: function() {
                        return !c
                    },
                    fireWith: function(t, e) {
                        return e = e || [], e = [t, e.slice ? e.slice() : e], !h || o && !c || (i ? c.push(e) : u(e)), this
                    },
                    fire: function() {
                        return d.fireWith(this, arguments), this
                    },
                    fired: function() {
                        return !!o
                    }
                };
            return d
        }, rt.extend({
            Deferred: function(t) {
                var e = [
                        ["resolve", "done", rt.Callbacks("once memory"), "resolved"],
                        ["reject", "fail", rt.Callbacks("once memory"), "rejected"],
                        ["notify", "progress", rt.Callbacks("memory")]
                    ],
                    i = "pending",
                    n = {
                        state: function() {
                            return i
                        },
                        always: function() {
                            return s.done(arguments).fail(arguments), this
                        },
                        then: function() {
                            var t = arguments;
                            return rt.Deferred(function(i) {
                                rt.each(e, function(e, o) {
                                    var a = o[0],
                                        r = rt.isFunction(t[e]) && t[e];
                                    s[o[1]](function() {
                                        var t = r && r.apply(this, arguments);
                                        t && rt.isFunction(t.promise) ? t.promise().done(i.resolve).fail(i.reject).progress(i.notify) : i[a + "With"](this === n ? i.promise() : this, r ? [t] : arguments)
                                    })
                                }), t = null
                            }).promise()
                        },
                        promise: function(t) {
                            return null != t ? rt.extend(t, n) : n
                        }
                    },
                    s = {};
                return n.pipe = n.then, rt.each(e, function(t, o) {
                    var a = o[2],
                        r = o[3];
                    n[o[1]] = a.add, r && a.add(function() {
                        i = r
                    }, e[1 ^ t][2].disable, e[2][2].lock), s[o[0]] = function() {
                        return s[o[0] + "With"](this === s ? n : this, arguments), this
                    }, s[o[0] + "With"] = a.fireWith
                }), n.promise(s), t && t.call(s, s), s
            },
            when: function(t) {
                var e, i, n, s = 0,
                    o = it.call(arguments),
                    a = o.length,
                    r = 1 !== a || t && rt.isFunction(t.promise) ? a : 0,
                    l = 1 === r ? t : rt.Deferred(),
                    h = function(t, i, n) {
                        return function(s) {
                            i[t] = this, n[t] = arguments.length > 1 ? it.call(arguments) : s, n === e ? l.notifyWith(i, n) : --r || l.resolveWith(i, n)
                        }
                    };
                if (a > 1)
                    for (e = Array(a), i = Array(a), n = Array(a); a > s; s++) o[s] && rt.isFunction(o[s].promise) ? o[s].promise().done(h(s, n, o)).fail(l.reject).progress(h(s, i, e)) : --r;
                return r || l.resolveWith(n, o), l.promise()
            }
        }), rt.support = function() {
            var e, i, n, s, o, a, r, l, h, c, u = G.createElement("div");
            if (u.setAttribute("className", "t"), u.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", i = u.getElementsByTagName("*"), n = u.getElementsByTagName("a")[0], !i || !n || !i.length) return {};
            r = (o = G.createElement("select")).appendChild(G.createElement("option")), s = u.getElementsByTagName("input")[0], n.style.cssText = "top:1px;float:left;opacity:.5", e = {
                getSetAttribute: "t" !== u.className,
                leadingWhitespace: 3 === u.firstChild.nodeType,
                tbody: !u.getElementsByTagName("tbody").length,
                htmlSerialize: !!u.getElementsByTagName("link").length,
                style: /top/.test(n.getAttribute("style")),
                hrefNormalized: "/a" === n.getAttribute("href"),
                opacity: /^0.5/.test(n.style.opacity),
                cssFloat: !!n.style.cssFloat,
                checkOn: !!s.value,
                optSelected: r.selected,
                enctype: !!G.createElement("form").enctype,
                html5Clone: "<:nav></:nav>" !== G.createElement("nav").cloneNode(!0).outerHTML,
                boxModel: "CSS1Compat" === G.compatMode,
                deleteExpando: !0,
                noCloneEvent: !0,
                inlineBlockNeedsLayout: !1,
                shrinkWrapBlocks: !1,
                reliableMarginRight: !0,
                boxSizingReliable: !0,
                pixelPosition: !1
            }, s.checked = !0, e.noCloneChecked = s.cloneNode(!0).checked, o.disabled = !0, e.optDisabled = !r.disabled;
            try {
                delete u.test
            } catch (t) {
                e.deleteExpando = !1
            }(s = G.createElement("input")).setAttribute("value", ""), e.input = "" === s.getAttribute("value"), s.value = "t", s.setAttribute("type", "radio"), e.radioValue = "t" === s.value, s.setAttribute("checked", "t"), s.setAttribute("name", "t"), (a = G.createDocumentFragment()).appendChild(s), e.appendChecked = s.checked, e.checkClone = a.cloneNode(!0).cloneNode(!0).lastChild.checked, u.attachEvent && (u.attachEvent("onclick", function() {
                e.noCloneEvent = !1
            }), u.cloneNode(!0).click());
            for (c in {
                    submit: !0,
                    change: !0,
                    focusin: !0
                }) u.setAttribute(l = "on" + c, "t"), e[c + "Bubbles"] = l in t || !1 === u.attributes[l].expando;
            return u.style.backgroundClip = "content-box", u.cloneNode(!0).style.backgroundClip = "", e.clearCloneStyle = "content-box" === u.style.backgroundClip, rt(function() {
                var i, n, s, o = "padding:0;margin:0;border:0;display:block;box-sizing:content-box;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;",
                    a = G.getElementsByTagName("body")[0];
                a && (i = G.createElement("div"), i.style.cssText = "border:0;width:0;height:0;position:absolute;top:0;left:-9999px;margin-top:1px", a.appendChild(i).appendChild(u), u.innerHTML = "<table><tr><td></td><td>t</td></tr></table>", s = u.getElementsByTagName("td"), s[0].style.cssText = "padding:0;margin:0;border:0;display:none", h = 0 === s[0].offsetHeight, s[0].style.display = "", s[1].style.display = "none", e.reliableHiddenOffsets = h && 0 === s[0].offsetHeight, u.innerHTML = "", u.style.cssText = "box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding:1px;border:1px;display:block;width:4px;margin-top:1%;position:absolute;top:1%;", e.boxSizing = 4 === u.offsetWidth, e.doesNotIncludeMarginInBodyOffset = 1 !== a.offsetTop, t.getComputedStyle && (e.pixelPosition = "1%" !== (t.getComputedStyle(u, null) || {}).top, e.boxSizingReliable = "4px" === (t.getComputedStyle(u, null) || {
                    width: "4px"
                }).width, n = u.appendChild(G.createElement("div")), n.style.cssText = u.style.cssText = o, n.style.marginRight = n.style.width = "0", u.style.width = "1px", e.reliableMarginRight = !parseFloat((t.getComputedStyle(n, null) || {}).marginRight)), typeof u.style.zoom !== Y && (u.innerHTML = "", u.style.cssText = o + "width:1px;padding:1px;display:inline;zoom:1", e.inlineBlockNeedsLayout = 3 === u.offsetWidth, u.style.display = "block", u.innerHTML = "<div></div>", u.firstChild.style.width = "5px", e.shrinkWrapBlocks = 3 !== u.offsetWidth, e.inlineBlockNeedsLayout && (a.style.zoom = 1)), a.removeChild(i), i = u = s = n = null)
            }), i = o = a = r = n = s = null, e
        }();
        var kt = /(?:\{[\s\S]*\}|\[[\s\S]*\])$/,
            Ct = /([A-Z])/g;
        rt.extend({
            cache: {},
            expando: "jQuery" + (J + Math.random()).replace(/\D/g, ""),
            noData: {
                embed: !0,
                object: "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",
                applet: !0
            },
            hasData: function(t) {
                return !!(t = t.nodeType ? rt.cache[t[rt.expando]] : t[rt.expando]) && !r(t)
            },
            data: function(t, e, i) {
                return s(t, e, i)
            },
            removeData: function(t, e) {
                return o(t, e)
            },
            _data: function(t, e, i) {
                return s(t, e, i, !0)
            },
            _removeData: function(t, e) {
                return o(t, e, !0)
            },
            acceptData: function(t) {
                if (t.nodeType && 1 !== t.nodeType && 9 !== t.nodeType) return !1;
                var e = t.nodeName && rt.noData[t.nodeName.toLowerCase()];
                return !e || !0 !== e && t.getAttribute("classid") === e
            }
        }), rt.fn.extend({
            data: function(t, i) {
                var n, s, o = this[0],
                    r = 0,
                    l = null;
                if (t === e) {
                    if (this.length && (l = rt.data(o), 1 === o.nodeType && !rt._data(o, "parsedAttrs"))) {
                        for (n = o.attributes; n.length > r; r++)(s = n[r].name).indexOf("data-") || (s = rt.camelCase(s.slice(5)), a(o, s, l[s]));
                        rt._data(o, "parsedAttrs", !0)
                    }
                    return l
                }
                return "object" == typeof t ? this.each(function() {
                    rt.data(this, t)
                }) : rt.access(this, function(i) {
                    return i === e ? o ? a(o, t, rt.data(o, t)) : null : (this.each(function() {
                        rt.data(this, t, i)
                    }), e)
                }, null, i, arguments.length > 1, null, !0)
            },
            removeData: function(t) {
                return this.each(function() {
                    rt.removeData(this, t)
                })
            }
        }), rt.extend({
            queue: function(t, i, n) {
                var s;
                return t ? (i = (i || "fx") + "queue", s = rt._data(t, i), n && (!s || rt.isArray(n) ? s = rt._data(t, i, rt.makeArray(n)) : s.push(n)), s || []) : e
            },
            dequeue: function(t, e) {
                e = e || "fx";
                var i = rt.queue(t, e),
                    n = i.length,
                    s = i.shift(),
                    o = rt._queueHooks(t, e);
                "inprogress" === s && (s = i.shift(), n--), o.cur = s, s && ("fx" === e && i.unshift("inprogress"), delete o.stop, s.call(t, function() {
                    rt.dequeue(t, e)
                }, o)), !n && o && o.empty.fire()
            },
            _queueHooks: function(t, e) {
                var i = e + "queueHooks";
                return rt._data(t, i) || rt._data(t, i, {
                    empty: rt.Callbacks("once memory").add(function() {
                        rt._removeData(t, e + "queue"), rt._removeData(t, i)
                    })
                })
            }
        }), rt.fn.extend({
            queue: function(t, i) {
                var n = 2;
                return "string" != typeof t && (i = t, t = "fx", n--), n > arguments.length ? rt.queue(this[0], t) : i === e ? this : this.each(function() {
                    var e = rt.queue(this, t, i);
                    rt._queueHooks(this, t), "fx" === t && "inprogress" !== e[0] && rt.dequeue(this, t)
                })
            },
            dequeue: function(t) {
                return this.each(function() {
                    rt.dequeue(this, t)
                })
            },
            delay: function(t, e) {
                return t = rt.fx ? rt.fx.speeds[t] || t : t, e = e || "fx", this.queue(e, function(e, i) {
                    var n = setTimeout(e, t);
                    i.stop = function() {
                        clearTimeout(n)
                    }
                })
            },
            clearQueue: function(t) {
                return this.queue(t || "fx", [])
            },
            promise: function(t, i) {
                var n, s = 1,
                    o = rt.Deferred(),
                    a = this,
                    r = this.length,
                    l = function() {
                        --s || o.resolveWith(a, [a])
                    };
                for ("string" != typeof t && (i = t, t = e), t = t || "fx"; r--;)(n = rt._data(a[r], t + "queueHooks")) && n.empty && (s++, n.empty.add(l));
                return l(), o.promise(i)
            }
        });
        var Dt, At, Tt = /[\t\r\n]/g,
            It = /\r/g,
            St = /^(?:input|select|textarea|button|object)$/i,
            Et = /^(?:a|area)$/i,
            Pt = /^(?:checked|selected|autofocus|autoplay|async|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped)$/i,
            Nt = /^(?:checked|selected)$/i,
            Mt = rt.support.getSetAttribute,
            Ot = rt.support.input;
        rt.fn.extend({
            attr: function(t, e) {
                return rt.access(this, rt.attr, t, e, arguments.length > 1)
            },
            removeAttr: function(t) {
                return this.each(function() {
                    rt.removeAttr(this, t)
                })
            },
            prop: function(t, e) {
                return rt.access(this, rt.prop, t, e, arguments.length > 1)
            },
            removeProp: function(t) {
                return t = rt.propFix[t] || t, this.each(function() {
                    try {
                        this[t] = e, delete this[t]
                    } catch (t) {}
                })
            },
            addClass: function(t) {
                var e, i, n, s, o, a = 0,
                    r = this.length,
                    l = "string" == typeof t && t;
                if (rt.isFunction(t)) return this.each(function(e) {
                    rt(this).addClass(t.call(this, e, this.className))
                });
                if (l)
                    for (e = (t || "").match(ht) || []; r > a; a++)
                        if (i = this[a], n = 1 === i.nodeType && (i.className ? (" " + i.className + " ").replace(Tt, " ") : " ")) {
                            for (o = 0; s = e[o++];) 0 > n.indexOf(" " + s + " ") && (n += s + " ");
                            i.className = rt.trim(n)
                        }
                return this
            },
            removeClass: function(t) {
                var e, i, n, s, o, a = 0,
                    r = this.length,
                    l = 0 === arguments.length || "string" == typeof t && t;
                if (rt.isFunction(t)) return this.each(function(e) {
                    rt(this).removeClass(t.call(this, e, this.className))
                });
                if (l)
                    for (e = (t || "").match(ht) || []; r > a; a++)
                        if (i = this[a], n = 1 === i.nodeType && (i.className ? (" " + i.className + " ").replace(Tt, " ") : "")) {
                            for (o = 0; s = e[o++];)
                                for (; n.indexOf(" " + s + " ") >= 0;) n = n.replace(" " + s + " ", " ");
                            i.className = t ? rt.trim(n) : ""
                        }
                return this
            },
            toggleClass: function(t, e) {
                var i = typeof t,
                    n = "boolean" == typeof e;
                return rt.isFunction(t) ? this.each(function(i) {
                    rt(this).toggleClass(t.call(this, i, this.className, e), e)
                }) : this.each(function() {
                    if ("string" === i)
                        for (var s, o = 0, a = rt(this), r = e, l = t.match(ht) || []; s = l[o++];) r = n ? r : !a.hasClass(s), a[r ? "addClass" : "removeClass"](s);
                    else(i === Y || "boolean" === i) && (this.className && rt._data(this, "__className__", this.className), this.className = this.className || !1 === t ? "" : rt._data(this, "__className__") || "")
                })
            },
            hasClass: function(t) {
                for (var e = " " + t + " ", i = 0, n = this.length; n > i; i++)
                    if (1 === this[i].nodeType && (" " + this[i].className + " ").replace(Tt, " ").indexOf(e) >= 0) return !0;
                return !1
            },
            val: function(t) {
                var i, n, s, o = this[0];
                return arguments.length ? (s = rt.isFunction(t), this.each(function(i) {
                    var o, a = rt(this);
                    1 === this.nodeType && (null == (o = s ? t.call(this, i, a.val()) : t) ? o = "" : "number" == typeof o ? o += "" : rt.isArray(o) && (o = rt.map(o, function(t) {
                        return null == t ? "" : t + ""
                    })), (n = rt.valHooks[this.type] || rt.valHooks[this.nodeName.toLowerCase()]) && "set" in n && n.set(this, o, "value") !== e || (this.value = o))
                })) : o ? (n = rt.valHooks[o.type] || rt.valHooks[o.nodeName.toLowerCase()]) && "get" in n && (i = n.get(o, "value")) !== e ? i : "string" == typeof(i = o.value) ? i.replace(It, "") : null == i ? "" : i : void 0
            }
        }), rt.extend({
            valHooks: {
                option: {
                    get: function(t) {
                        var e = t.attributes.value;
                        return !e || e.specified ? t.value : t.text
                    }
                },
                select: {
                    get: function(t) {
                        for (var e, i, n = t.options, s = t.selectedIndex, o = "select-one" === t.type || 0 > s, a = o ? null : [], r = o ? s + 1 : n.length, l = 0 > s ? r : o ? s : 0; r > l; l++)
                            if (!(!(i = n[l]).selected && l !== s || (rt.support.optDisabled ? i.disabled : null !== i.getAttribute("disabled")) || i.parentNode.disabled && rt.nodeName(i.parentNode, "optgroup"))) {
                                if (e = rt(i).val(), o) return e;
                                a.push(e)
                            }
                        return a
                    },
                    set: function(t, e) {
                        var i = rt.makeArray(e);
                        return rt(t).find("option").each(function() {
                            this.selected = rt.inArray(rt(this).val(), i) >= 0
                        }), i.length || (t.selectedIndex = -1), i
                    }
                }
            },
            attr: function(t, i, n) {
                var s, o, a, r = t.nodeType;
                if (t && 3 !== r && 8 !== r && 2 !== r) return typeof t.getAttribute === Y ? rt.prop(t, i, n) : ((o = 1 !== r || !rt.isXMLDoc(t)) && (i = i.toLowerCase(), s = rt.attrHooks[i] || (Pt.test(i) ? At : Dt)), n === e ? s && o && "get" in s && null !== (a = s.get(t, i)) ? a : (typeof t.getAttribute !== Y && (a = t.getAttribute(i)), null == a ? e : a) : null !== n ? s && o && "set" in s && (a = s.set(t, n, i)) !== e ? a : (t.setAttribute(i, n + ""), n) : (rt.removeAttr(t, i), e))
            },
            removeAttr: function(t, e) {
                var i, n, s = 0,
                    o = e && e.match(ht);
                if (o && 1 === t.nodeType)
                    for (; i = o[s++];) n = rt.propFix[i] || i, Pt.test(i) ? !Mt && Nt.test(i) ? t[rt.camelCase("default-" + i)] = t[n] = !1 : t[n] = !1 : rt.attr(t, i, ""), t.removeAttribute(Mt ? i : n)
            },
            attrHooks: {
                type: {
                    set: function(t, e) {
                        if (!rt.support.radioValue && "radio" === e && rt.nodeName(t, "input")) {
                            var i = t.value;
                            return t.setAttribute("type", e), i && (t.value = i), e
                        }
                    }
                }
            },
            propFix: {
                tabindex: "tabIndex",
                readonly: "readOnly",
                for: "htmlFor",
                class: "className",
                maxlength: "maxLength",
                cellspacing: "cellSpacing",
                cellpadding: "cellPadding",
                rowspan: "rowSpan",
                colspan: "colSpan",
                usemap: "useMap",
                frameborder: "frameBorder",
                contenteditable: "contentEditable"
            },
            prop: function(t, i, n) {
                var s, o, a = t.nodeType;
                if (t && 3 !== a && 8 !== a && 2 !== a) return (1 !== a || !rt.isXMLDoc(t)) && (i = rt.propFix[i] || i, o = rt.propHooks[i]), n !== e ? o && "set" in o && (s = o.set(t, n, i)) !== e ? s : t[i] = n : o && "get" in o && null !== (s = o.get(t, i)) ? s : t[i]
            },
            propHooks: {
                tabIndex: {
                    get: function(t) {
                        var i = t.getAttributeNode("tabindex");
                        return i && i.specified ? parseInt(i.value, 10) : St.test(t.nodeName) || Et.test(t.nodeName) && t.href ? 0 : e
                    }
                }
            }
        }), At = {
            get: function(t, i) {
                var n = rt.prop(t, i),
                    s = "boolean" == typeof n && t.getAttribute(i),
                    o = "boolean" == typeof n ? Ot && Mt ? null != s : Nt.test(i) ? t[rt.camelCase("default-" + i)] : !!s : t.getAttributeNode(i);
                return o && !1 !== o.value ? i.toLowerCase() : e
            },
            set: function(t, e, i) {
                return !1 === e ? rt.removeAttr(t, i) : Ot && Mt || !Nt.test(i) ? t.setAttribute(!Mt && rt.propFix[i] || i, i) : t[rt.camelCase("default-" + i)] = t[i] = !0, i
            }
        }, Ot && Mt || (rt.attrHooks.value = {
            get: function(t, i) {
                var n = t.getAttributeNode(i);
                return rt.nodeName(t, "input") ? t.defaultValue : n && n.specified ? n.value : e
            },
            set: function(t, i, n) {
                return rt.nodeName(t, "input") ? (t.defaultValue = i, e) : Dt && Dt.set(t, i, n)
            }
        }), Mt || (Dt = rt.valHooks.button = {
            get: function(t, i) {
                var n = t.getAttributeNode(i);
                return n && ("id" === i || "name" === i || "coords" === i ? "" !== n.value : n.specified) ? n.value : e
            },
            set: function(t, i, n) {
                var s = t.getAttributeNode(n);
                return s || t.setAttributeNode(s = t.ownerDocument.createAttribute(n)), s.value = i += "", "value" === n || i === t.getAttribute(n) ? i : e
            }
        }, rt.attrHooks.contenteditable = {
            get: Dt.get,
            set: function(t, e, i) {
                Dt.set(t, "" !== e && e, i)
            }
        }, rt.each(["width", "height"], function(t, i) {
            rt.attrHooks[i] = rt.extend(rt.attrHooks[i], {
                set: function(t, n) {
                    return "" === n ? (t.setAttribute(i, "auto"), n) : e
                }
            })
        })), rt.support.hrefNormalized || (rt.each(["href", "src", "width", "height"], function(t, i) {
            rt.attrHooks[i] = rt.extend(rt.attrHooks[i], {
                get: function(t) {
                    var n = t.getAttribute(i, 2);
                    return null == n ? e : n
                }
            })
        }), rt.each(["href", "src"], function(t, e) {
            rt.propHooks[e] = {
                get: function(t) {
                    return t.getAttribute(e, 4)
                }
            }
        })), rt.support.style || (rt.attrHooks.style = {
            get: function(t) {
                return t.style.cssText || e
            },
            set: function(t, e) {
                return t.style.cssText = e + ""
            }
        }), rt.support.optSelected || (rt.propHooks.selected = rt.extend(rt.propHooks.selected, {
            get: function(t) {
                var e = t.parentNode;
                return e && (e.selectedIndex, e.parentNode && e.parentNode.selectedIndex), null
            }
        })), rt.support.enctype || (rt.propFix.enctype = "encoding"), rt.support.checkOn || rt.each(["radio", "checkbox"], function() {
            rt.valHooks[this] = {
                get: function(t) {
                    return null === t.getAttribute("value") ? "on" : t.value
                }
            }
        }), rt.each(["radio", "checkbox"], function() {
            rt.valHooks[this] = rt.extend(rt.valHooks[this], {
                set: function(t, i) {
                    return rt.isArray(i) ? t.checked = rt.inArray(rt(t).val(), i) >= 0 : e
                }
            })
        });
        var jt = /^(?:input|select|textarea)$/i,
            Ht = /^key/,
            Rt = /^(?:mouse|contextmenu)|click/,
            Ft = /^(?:focusinfocus|focusoutblur)$/,
            Lt = /^([^.]*)(?:\.(.+)|)$/;
        rt.event = {
                global: {},
                add: function(t, i, n, s, o) {
                    var a, r, l, h, c, u, d, p, f, m, g, v = rt._data(t);
                    if (v) {
                        for (n.handler && (h = n, n = h.handler, o = h.selector), n.guid || (n.guid = rt.guid++), (r = v.events) || (r = v.events = {}), (u = v.handle) || (u = v.handle = function(t) {
                                return typeof rt === Y || t && rt.event.triggered === t.type ? e : rt.event.dispatch.apply(u.elem, arguments)
                            }, u.elem = t), l = (i = (i || "").match(ht) || [""]).length; l--;) a = Lt.exec(i[l]) || [], f = g = a[1], m = (a[2] || "").split(".").sort(), c = rt.event.special[f] || {}, f = (o ? c.delegateType : c.bindType) || f, c = rt.event.special[f] || {}, d = rt.extend({
                            type: f,
                            origType: g,
                            data: s,
                            handler: n,
                            guid: n.guid,
                            selector: o,
                            needsContext: o && rt.expr.match.needsContext.test(o),
                            namespace: m.join(".")
                        }, h), (p = r[f]) || (p = r[f] = [], p.delegateCount = 0, c.setup && !1 !== c.setup.call(t, s, m, u) || (t.addEventListener ? t.addEventListener(f, u, !1) : t.attachEvent && t.attachEvent("on" + f, u))), c.add && (c.add.call(t, d), d.handler.guid || (d.handler.guid = n.guid)), o ? p.splice(p.delegateCount++, 0, d) : p.push(d), rt.event.global[f] = !0;
                        t = null
                    }
                },
                remove: function(t, e, i, n, s) {
                    var o, a, r, l, h, c, u, d, p, f, m, g = rt.hasData(t) && rt._data(t);
                    if (g && (c = g.events)) {
                        for (h = (e = (e || "").match(ht) || [""]).length; h--;)
                            if (r = Lt.exec(e[h]) || [], p = m = r[1], f = (r[2] || "").split(".").sort(), p) {
                                for (u = rt.event.special[p] || {}, d = c[p = (n ? u.delegateType : u.bindType) || p] || [], r = r[2] && RegExp("(^|\\.)" + f.join("\\.(?:.*\\.|)") + "(\\.|$)"), l = o = d.length; o--;) a = d[o], !s && m !== a.origType || i && i.guid !== a.guid || r && !r.test(a.namespace) || n && n !== a.selector && ("**" !== n || !a.selector) || (d.splice(o, 1), a.selector && d.delegateCount--, u.remove && u.remove.call(t, a));
                                l && !d.length && (u.teardown && !1 !== u.teardown.call(t, f, g.handle) || rt.removeEvent(t, p, g.handle), delete c[p])
                            } else
                                for (p in c) rt.event.remove(t, p + e[h], i, n, !0);
                        rt.isEmptyObject(c) && (delete g.handle, rt._removeData(t, "events"))
                    }
                },
                trigger: function(i, n, s, o) {
                    var a, r, l, h, c, u, d, p = [s || G],
                        f = ot.call(i, "type") ? i.type : i,
                        m = ot.call(i, "namespace") ? i.namespace.split(".") : [];
                    if (l = u = s = s || G, 3 !== s.nodeType && 8 !== s.nodeType && !Ft.test(f + rt.event.triggered) && (f.indexOf(".") >= 0 && (m = f.split("."), f = m.shift(), m.sort()), r = 0 > f.indexOf(":") && "on" + f, i = i[rt.expando] ? i : new rt.Event(f, "object" == typeof i && i), i.isTrigger = !0, i.namespace = m.join("."), i.namespace_re = i.namespace ? RegExp("(^|\\.)" + m.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, i.result = e, i.target || (i.target = s), n = null == n ? [i] : rt.makeArray(n, [i]), c = rt.event.special[f] || {}, o || !c.trigger || !1 !== c.trigger.apply(s, n))) {
                        if (!o && !c.noBubble && !rt.isWindow(s)) {
                            for (h = c.delegateType || f, Ft.test(h + f) || (l = l.parentNode); l; l = l.parentNode) p.push(l), u = l;
                            u === (s.ownerDocument || G) && p.push(u.defaultView || u.parentWindow || t)
                        }
                        for (d = 0;
                            (l = p[d++]) && !i.isPropagationStopped();) i.type = d > 1 ? h : c.bindType || f, (a = (rt._data(l, "events") || {})[i.type] && rt._data(l, "handle")) && a.apply(l, n), (a = r && l[r]) && rt.acceptData(l) && a.apply && !1 === a.apply(l, n) && i.preventDefault();
                        if (i.type = f, !(o || i.isDefaultPrevented() || c._default && !1 !== c._default.apply(s.ownerDocument, n) || "click" === f && rt.nodeName(s, "a") || !rt.acceptData(s) || !r || !s[f] || rt.isWindow(s))) {
                            (u = s[r]) && (s[r] = null), rt.event.triggered = f;
                            try {
                                s[f]()
                            } catch (t) {}
                            rt.event.triggered = e, u && (s[r] = u)
                        }
                        return i.result
                    }
                },
                dispatch: function(t) {
                    t = rt.event.fix(t);
                    var i, n, s, o, a, r = [],
                        l = it.call(arguments),
                        h = (rt._data(this, "events") || {})[t.type] || [],
                        c = rt.event.special[t.type] || {};
                    if (l[0] = t, t.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, t)) {
                        for (r = rt.event.handlers.call(this, t, h), i = 0;
                            (o = r[i++]) && !t.isPropagationStopped();)
                            for (t.currentTarget = o.elem, a = 0;
                                (s = o.handlers[a++]) && !t.isImmediatePropagationStopped();)(!t.namespace_re || t.namespace_re.test(s.namespace)) && (t.handleObj = s, t.data = s.data, (n = ((rt.event.special[s.origType] || {}).handle || s.handler).apply(o.elem, l)) !== e && !1 === (t.result = n) && (t.preventDefault(), t.stopPropagation()));
                        return c.postDispatch && c.postDispatch.call(this, t), t.result
                    }
                },
                handlers: function(t, i) {
                    var n, s, o, a, r = [],
                        l = i.delegateCount,
                        h = t.target;
                    if (l && h.nodeType && (!t.button || "click" !== t.type))
                        for (; h != this; h = h.parentNode || this)
                            if (1 === h.nodeType && (!0 !== h.disabled || "click" !== t.type)) {
                                for (o = [], a = 0; l > a; a++) s = i[a], n = s.selector + " ", o[n] === e && (o[n] = s.needsContext ? rt(n, this).index(h) >= 0 : rt.find(n, this, null, [h]).length), o[n] && o.push(s);
                                o.length && r.push({
                                    elem: h,
                                    handlers: o
                                })
                            }
                    return i.length > l && r.push({
                        elem: this,
                        handlers: i.slice(l)
                    }), r
                },
                fix: function(t) {
                    if (t[rt.expando]) return t;
                    var e, i, n, s = t.type,
                        o = t,
                        a = this.fixHooks[s];
                    for (a || (this.fixHooks[s] = a = Rt.test(s) ? this.mouseHooks : Ht.test(s) ? this.keyHooks : {}), n = a.props ? this.props.concat(a.props) : this.props, t = new rt.Event(o), e = n.length; e--;) i = n[e], t[i] = o[i];
                    return t.target || (t.target = o.srcElement || G), 3 === t.target.nodeType && (t.target = t.target.parentNode), t.metaKey = !!t.metaKey, a.filter ? a.filter(t, o) : t
                },
                props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),
                fixHooks: {},
                keyHooks: {
                    props: "char charCode key keyCode".split(" "),
                    filter: function(t, e) {
                        return null == t.which && (t.which = null != e.charCode ? e.charCode : e.keyCode), t
                    }
                },
                mouseHooks: {
                    props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
                    filter: function(t, i) {
                        var n, s, o, a = i.button,
                            r = i.fromElement;
                        return null == t.pageX && null != i.clientX && (s = t.target.ownerDocument || G, o = s.documentElement, n = s.body, t.pageX = i.clientX + (o && o.scrollLeft || n && n.scrollLeft || 0) - (o && o.clientLeft || n && n.clientLeft || 0), t.pageY = i.clientY + (o && o.scrollTop || n && n.scrollTop || 0) - (o && o.clientTop || n && n.clientTop || 0)), !t.relatedTarget && r && (t.relatedTarget = r === t.target ? i.toElement : r), t.which || a === e || (t.which = 1 & a ? 1 : 2 & a ? 3 : 4 & a ? 2 : 0), t
                    }
                },
                special: {
                    load: {
                        noBubble: !0
                    },
                    click: {
                        trigger: function() {
                            return rt.nodeName(this, "input") && "checkbox" === this.type && this.click ? (this.click(), !1) : e
                        }
                    },
                    focus: {
                        trigger: function() {
                            if (this !== G.activeElement && this.focus) try {
                                return this.focus(), !1
                            } catch (t) {}
                        },
                        delegateType: "focusin"
                    },
                    blur: {
                        trigger: function() {
                            return this === G.activeElement && this.blur ? (this.blur(), !1) : e
                        },
                        delegateType: "focusout"
                    },
                    beforeunload: {
                        postDispatch: function(t) {
                            t.result !== e && (t.originalEvent.returnValue = t.result)
                        }
                    }
                },
                simulate: function(t, e, i, n) {
                    var s = rt.extend(new rt.Event, i, {
                        type: t,
                        isSimulated: !0,
                        originalEvent: {}
                    });
                    n ? rt.event.trigger(s, null, e) : rt.event.dispatch.call(e, s), s.isDefaultPrevented() && i.preventDefault()
                }
            }, rt.removeEvent = G.removeEventListener ? function(t, e, i) {
                t.removeEventListener && t.removeEventListener(e, i, !1)
            } : function(t, e, i) {
                var n = "on" + e;
                t.detachEvent && (typeof t[n] === Y && (t[n] = null), t.detachEvent(n, i))
            }, rt.Event = function(t, i) {
                return this instanceof rt.Event ? (t && t.type ? (this.originalEvent = t, this.type = t.type, this.isDefaultPrevented = t.defaultPrevented || !1 === t.returnValue || t.getPreventDefault && t.getPreventDefault() ? l : h) : this.type = t, i && rt.extend(this, i), this.timeStamp = t && t.timeStamp || rt.now(), this[rt.expando] = !0, e) : new rt.Event(t, i)
            }, rt.Event.prototype = {
                isDefaultPrevented: h,
                isPropagationStopped: h,
                isImmediatePropagationStopped: h,
                preventDefault: function() {
                    var t = this.originalEvent;
                    this.isDefaultPrevented = l, t && (t.preventDefault ? t.preventDefault() : t.returnValue = !1)
                },
                stopPropagation: function() {
                    var t = this.originalEvent;
                    this.isPropagationStopped = l, t && (t.stopPropagation && t.stopPropagation(), t.cancelBubble = !0)
                },
                stopImmediatePropagation: function() {
                    this.isImmediatePropagationStopped = l, this.stopPropagation()
                }
            }, rt.each({
                mouseenter: "mouseover",
                mouseleave: "mouseout"
            }, function(t, e) {
                rt.event.special[t] = {
                    delegateType: e,
                    bindType: e,
                    handle: function(t) {
                        var i, n = this,
                            s = t.relatedTarget,
                            o = t.handleObj;
                        return (!s || s !== n && !rt.contains(n, s)) && (t.type = o.origType, i = o.handler.apply(this, arguments), t.type = e), i
                    }
                }
            }), rt.support.submitBubbles || (rt.event.special.submit = {
                setup: function() {
                    return !rt.nodeName(this, "form") && (rt.event.add(this, "click._submit keypress._submit", function(t) {
                        var i = t.target,
                            n = rt.nodeName(i, "input") || rt.nodeName(i, "button") ? i.form : e;
                        n && !rt._data(n, "submitBubbles") && (rt.event.add(n, "submit._submit", function(t) {
                            t._submit_bubble = !0
                        }), rt._data(n, "submitBubbles", !0))
                    }), e)
                },
                postDispatch: function(t) {
                    t._submit_bubble && (delete t._submit_bubble, this.parentNode && !t.isTrigger && rt.event.simulate("submit", this.parentNode, t, !0))
                },
                teardown: function() {
                    return !rt.nodeName(this, "form") && (rt.event.remove(this, "._submit"), e)
                }
            }), rt.support.changeBubbles || (rt.event.special.change = {
                setup: function() {
                    return jt.test(this.nodeName) ? (("checkbox" === this.type || "radio" === this.type) && (rt.event.add(this, "propertychange._change", function(t) {
                        "checked" === t.originalEvent.propertyName && (this._just_changed = !0)
                    }), rt.event.add(this, "click._change", function(t) {
                        this._just_changed && !t.isTrigger && (this._just_changed = !1), rt.event.simulate("change", this, t, !0)
                    })), !1) : (rt.event.add(this, "beforeactivate._change", function(t) {
                        var e = t.target;
                        jt.test(e.nodeName) && !rt._data(e, "changeBubbles") && (rt.event.add(e, "change._change", function(t) {
                            !this.parentNode || t.isSimulated || t.isTrigger || rt.event.simulate("change", this.parentNode, t, !0)
                        }), rt._data(e, "changeBubbles", !0))
                    }), e)
                },
                handle: function(t) {
                    var i = t.target;
                    return this !== i || t.isSimulated || t.isTrigger || "radio" !== i.type && "checkbox" !== i.type ? t.handleObj.handler.apply(this, arguments) : e
                },
                teardown: function() {
                    return rt.event.remove(this, "._change"), !jt.test(this.nodeName)
                }
            }), rt.support.focusinBubbles || rt.each({
                focus: "focusin",
                blur: "focusout"
            }, function(t, e) {
                var i = 0,
                    n = function(t) {
                        rt.event.simulate(e, t.target, rt.event.fix(t), !0)
                    };
                rt.event.special[e] = {
                    setup: function() {
                        0 == i++ && G.addEventListener(t, n, !0)
                    },
                    teardown: function() {
                        0 == --i && G.removeEventListener(t, n, !0)
                    }
                }
            }), rt.fn.extend({
                on: function(t, i, n, s, o) {
                    var a, r;
                    if ("object" == typeof t) {
                        "string" != typeof i && (n = n || i, i = e);
                        for (a in t) this.on(a, i, n, t[a], o);
                        return this
                    }
                    if (null == n && null == s ? (s = i, n = i = e) : null == s && ("string" == typeof i ? (s = n, n = e) : (s = n, n = i, i = e)), !1 === s) s = h;
                    else if (!s) return this;
                    return 1 === o && (r = s, s = function(t) {
                        return rt().off(t), r.apply(this, arguments)
                    }, s.guid = r.guid || (r.guid = rt.guid++)), this.each(function() {
                        rt.event.add(this, t, s, n, i)
                    })
                },
                one: function(t, e, i, n) {
                    return this.on(t, e, i, n, 1)
                },
                off: function(t, i, n) {
                    var s, o;
                    if (t && t.preventDefault && t.handleObj) return s = t.handleObj, rt(t.delegateTarget).off(s.namespace ? s.origType + "." + s.namespace : s.origType, s.selector, s.handler), this;
                    if ("object" == typeof t) {
                        for (o in t) this.off(o, i, t[o]);
                        return this
                    }
                    return (!1 === i || "function" == typeof i) && (n = i, i = e), !1 === n && (n = h), this.each(function() {
                        rt.event.remove(this, t, n, i)
                    })
                },
                bind: function(t, e, i) {
                    return this.on(t, null, e, i)
                },
                unbind: function(t, e) {
                    return this.off(t, null, e)
                },
                delegate: function(t, e, i, n) {
                    return this.on(e, t, i, n)
                },
                undelegate: function(t, e, i) {
                    return 1 === arguments.length ? this.off(t, "**") : this.off(e, t || "**", i)
                },
                trigger: function(t, e) {
                    return this.each(function() {
                        rt.event.trigger(t, e, this)
                    })
                },
                triggerHandler: function(t, i) {
                    var n = this[0];
                    return n ? rt.event.trigger(t, i, n, !0) : e
                }
            }),
            function(t, e) {
                function i(t) {
                    return ut.test(t + "")
                }

                function n() {
                    var t, e = [];
                    return t = function(i, n) {
                        return e.push(i += " ") > w.cacheLength && delete t[e.shift()], t[i] = n
                    }
                }

                function s(t) {
                    return t[R] = !0, t
                }

                function o(t) {
                    var e = S.createElement("div");
                    try {
                        return t(e)
                    } catch (t) {
                        return !1
                    } finally {
                        e = null
                    }
                }

                function a(t, e, i, n) {
                    var s, o, a, r, l, u, d, p, f, m;
                    if ((e ? e.ownerDocument || e : F) !== S && I(e), e = e || S, i = i || [], !t || "string" != typeof t) return i;
                    if (1 !== (r = e.nodeType) && 9 !== r) return [];
                    if (!P && !n) {
                        if (s = dt.exec(t))
                            if (a = s[1]) {
                                if (9 === r) {
                                    if (!(o = e.getElementById(a)) || !o.parentNode) return i;
                                    if (o.id === a) return i.push(o), i
                                } else if (e.ownerDocument && (o = e.ownerDocument.getElementById(a)) && j(e, o) && o.id === a) return i.push(o), i
                            } else {
                                if (s[2]) return V.apply(i, Q.call(e.getElementsByTagName(t), 0)), i;
                                if ((a = s[3]) && L.getByClassName && e.getElementsByClassName) return V.apply(i, Q.call(e.getElementsByClassName(a), 0)), i
                            }
                        if (L.qsa && !N.test(t)) {
                            if (d = !0, p = R, f = e, m = 9 === r && t, 1 === r && "object" !== e.nodeName.toLowerCase()) {
                                for (u = h(t), (d = e.getAttribute("id")) ? p = d.replace(mt, "\\$&") : e.setAttribute("id", p), p = "[id='" + p + "'] ", l = u.length; l--;) u[l] = p + c(u[l]);
                                f = ct.test(t) && e.parentNode || e, m = u.join(",")
                            }
                            if (m) try {
                                return V.apply(i, Q.call(f.querySelectorAll(m), 0)), i
                            } catch (t) {} finally {
                                d || e.removeAttribute("id")
                            }
                        }
                    }
                    return y(t.replace(nt, "$1"), e, i, n)
                }

                function r(t, e) {
                    var i = e && t,
                        n = i && (~e.sourceIndex || Y) - (~t.sourceIndex || Y);
                    if (n) return n;
                    if (i)
                        for (; i = i.nextSibling;)
                            if (i === e) return -1;
                    return t ? 1 : -1
                }

                function l(t) {
                    return s(function(e) {
                        return e = +e, s(function(i, n) {
                            for (var s, o = t([], i.length, e), a = o.length; a--;) i[s = o[a]] && (i[s] = !(n[s] = i[s]))
                        })
                    })
                }

                function h(t, e) {
                    var i, n, s, o, r, l, h, c = W[t + " "];
                    if (c) return e ? 0 : c.slice(0);
                    for (r = t, l = [], h = w.preFilter; r;) {
                        (!i || (n = st.exec(r))) && (n && (r = r.slice(n[0].length) || r), l.push(s = [])), i = !1, (n = ot.exec(r)) && (i = n.shift(), s.push({
                            value: i,
                            type: n[0].replace(nt, " ")
                        }), r = r.slice(i.length));
                        for (o in w.filter) !(n = ht[o].exec(r)) || h[o] && !(n = h[o](n)) || (i = n.shift(), s.push({
                            value: i,
                            type: o,
                            matches: n
                        }), r = r.slice(i.length));
                        if (!i) break
                    }
                    return e ? r.length : r ? a.error(t) : W(t, l).slice(0)
                }

                function c(t) {
                    for (var e = 0, i = t.length, n = ""; i > e; e++) n += t[e].value;
                    return n
                }

                function u(t, e, i) {
                    var n = e.dir,
                        s = i && "parentNode" === n,
                        o = z++;
                    return e.first ? function(e, i, o) {
                        for (; e = e[n];)
                            if (1 === e.nodeType || s) return t(e, i, o)
                    } : function(e, i, a) {
                        var r, l, h, c = B + " " + o;
                        if (a) {
                            for (; e = e[n];)
                                if ((1 === e.nodeType || s) && t(e, i, a)) return !0
                        } else
                            for (; e = e[n];)
                                if (1 === e.nodeType || s)
                                    if (h = e[R] || (e[R] = {}), (l = h[n]) && l[0] === c) {
                                        if (!0 === (r = l[1]) || r === x) return !0 === r
                                    } else if (l = h[n] = [c], l[1] = t(e, i, a) || x, !0 === l[1]) return !0
                    }
                }

                function d(t) {
                    return t.length > 1 ? function(e, i, n) {
                        for (var s = t.length; s--;)
                            if (!t[s](e, i, n)) return !1;
                        return !0
                    } : t[0]
                }

                function p(t, e, i, n, s) {
                    for (var o, a = [], r = 0, l = t.length, h = null != e; l > r; r++)(o = t[r]) && (!i || i(o, n, s)) && (a.push(o), h && e.push(r));
                    return a
                }

                function f(t, e, i, n, o, a) {
                    return n && !n[R] && (n = f(n)), o && !o[R] && (o = f(o, a)), s(function(s, a, r, l) {
                        var h, c, u, d = [],
                            f = [],
                            m = a.length,
                            g = s || v(e || "*", r.nodeType ? [r] : r, []),
                            y = !t || !s && e ? g : p(g, d, t, r, l),
                            b = i ? o || (s ? t : m || n) ? [] : a : y;
                        if (i && i(y, b, r, l), n)
                            for (h = p(b, f), n(h, [], r, l), c = h.length; c--;)(u = h[c]) && (b[f[c]] = !(y[f[c]] = u));
                        if (s) {
                            if (o || t) {
                                if (o) {
                                    for (h = [], c = b.length; c--;)(u = b[c]) && h.push(y[c] = u);
                                    o(null, b = [], h, l)
                                }
                                for (c = b.length; c--;)(u = b[c]) && (h = o ? X.call(s, u) : d[c]) > -1 && (s[h] = !(a[h] = u))
                            }
                        } else b = p(b === a ? b.splice(m, b.length) : b), o ? o(null, a, b, l) : V.apply(a, b)
                    })
                }

                function m(t) {
                    for (var e, i, n, s = t.length, o = w.relative[t[0].type], a = o || w.relative[" "], r = o ? 1 : 0, l = u(function(t) {
                            return t === e
                        }, a, !0), h = u(function(t) {
                            return X.call(e, t) > -1
                        }, a, !0), p = [function(t, i, n) {
                            return !o && (n || i !== T) || ((e = i).nodeType ? l(t, i, n) : h(t, i, n))
                        }]; s > r; r++)
                        if (i = w.relative[t[r].type]) p = [u(d(p), i)];
                        else {
                            if ((i = w.filter[t[r].type].apply(null, t[r].matches))[R]) {
                                for (n = ++r; s > n && !w.relative[t[n].type]; n++);
                                return f(r > 1 && d(p), r > 1 && c(t.slice(0, r - 1)).replace(nt, "$1"), i, n > r && m(t.slice(r, n)), s > n && m(t = t.slice(n)), s > n && c(t))
                            }
                            p.push(i)
                        }
                    return d(p)
                }

                function g(t, e) {
                    var i = 0,
                        n = e.length > 0,
                        o = t.length > 0,
                        r = function(s, r, l, h, c) {
                            var u, d, f, m = [],
                                g = 0,
                                v = "0",
                                y = s && [],
                                b = null != c,
                                _ = T,
                                k = s || o && w.find.TAG("*", c && r.parentNode || r),
                                C = B += null == _ ? 1 : Math.random() || .1;
                            for (b && (T = r !== S && r, x = i); null != (u = k[v]); v++) {
                                if (o && u) {
                                    for (d = 0; f = t[d++];)
                                        if (f(u, r, l)) {
                                            h.push(u);
                                            break
                                        }
                                    b && (B = C, x = ++i)
                                }
                                n && ((u = !f && u) && g--, s && y.push(u))
                            }
                            if (g += v, n && v !== g) {
                                for (d = 0; f = e[d++];) f(y, m, r, l);
                                if (s) {
                                    if (g > 0)
                                        for (; v--;) y[v] || m[v] || (m[v] = K.call(h));
                                    m = p(m)
                                }
                                V.apply(h, m), b && !s && m.length > 0 && g + e.length > 1 && a.uniqueSort(h)
                            }
                            return b && (B = C, T = _), y
                        };
                    return n ? s(r) : r
                }

                function v(t, e, i) {
                    for (var n = 0, s = e.length; s > n; n++) a(t, e[n], i);
                    return i
                }

                function y(t, e, i, n) {
                    var s, o, a, r, l, u = h(t);
                    if (!n && 1 === u.length) {
                        if ((o = u[0] = u[0].slice(0)).length > 2 && "ID" === (a = o[0]).type && 9 === e.nodeType && !P && w.relative[o[1].type]) {
                            if (!(e = w.find.ID(a.matches[0].replace(vt, yt), e)[0])) return i;
                            t = t.slice(o.shift().value.length)
                        }
                        for (s = ht.needsContext.test(t) ? 0 : o.length; s-- && (a = o[s], !w.relative[r = a.type]);)
                            if ((l = w.find[r]) && (n = l(a.matches[0].replace(vt, yt), ct.test(o[0].type) && e.parentNode || e))) {
                                if (o.splice(s, 1), !(t = n.length && c(o))) return V.apply(i, Q.call(n, 0)), i;
                                break
                            }
                    }
                    return D(t, u)(n, e, P, i, ct.test(t)), i
                }

                function b() {}
                var _, x, w, k, C, D, A, T, I, S, E, P, N, M, O, j, H, R = "sizzle" + -new Date,
                    F = t.document,
                    L = {},
                    B = 0,
                    z = 0,
                    $ = n(),
                    W = n(),
                    q = n(),
                    U = typeof e,
                    Y = 1 << 31,
                    G = [],
                    K = G.pop,
                    V = G.push,
                    Q = G.slice,
                    X = G.indexOf || function(t) {
                        for (var e = 0, i = this.length; i > e; e++)
                            if (this[e] === t) return e;
                        return -1
                    },
                    Z = "[\\x20\\t\\r\\n\\f]",
                    J = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
                    tt = J.replace("w", "w#"),
                    et = "\\[" + Z + "*(" + J + ")" + Z + "*(?:([*^$|!~]?=)" + Z + "*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|(" + tt + ")|)|)" + Z + "*\\]",
                    it = ":(" + J + ")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|" + et.replace(3, 8) + ")*)|.*)\\)|)",
                    nt = RegExp("^" + Z + "+|((?:^|[^\\\\])(?:\\\\.)*)" + Z + "+$", "g"),
                    st = RegExp("^" + Z + "*," + Z + "*"),
                    ot = RegExp("^" + Z + "*([\\x20\\t\\r\\n\\f>+~])" + Z + "*"),
                    at = RegExp(it),
                    lt = RegExp("^" + tt + "$"),
                    ht = {
                        ID: RegExp("^#(" + J + ")"),
                        CLASS: RegExp("^\\.(" + J + ")"),
                        NAME: RegExp("^\\[name=['\"]?(" + J + ")['\"]?\\]"),
                        TAG: RegExp("^(" + J.replace("w", "w*") + ")"),
                        ATTR: RegExp("^" + et),
                        PSEUDO: RegExp("^" + it),
                        CHILD: RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + Z + "*(even|odd|(([+-]|)(\\d*)n|)" + Z + "*(?:([+-]|)" + Z + "*(\\d+)|))" + Z + "*\\)|)", "i"),
                        needsContext: RegExp("^" + Z + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + Z + "*((?:-\\d)?\\d*)" + Z + "*\\)|)(?=[^-]|$)", "i")
                    },
                    ct = /[\x20\t\r\n\f]*[+~]/,
                    ut = /^[^{]+\{\s*\[native code/,
                    dt = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
                    pt = /^(?:input|select|textarea|button)$/i,
                    ft = /^h\d$/i,
                    mt = /'|\\/g,
                    gt = /\=[\x20\t\r\n\f]*([^'"\]]*)[\x20\t\r\n\f]*\]/g,
                    vt = /\\([\da-fA-F]{1,6}[\x20\t\r\n\f]?|.)/g,
                    yt = function(t, e) {
                        var i = "0x" + e - 65536;
                        return i !== i ? e : 0 > i ? String.fromCharCode(i + 65536) : String.fromCharCode(55296 | i >> 10, 56320 | 1023 & i)
                    };
                try {
                    Q.call(F.documentElement.childNodes, 0)[0].nodeType
                } catch (t) {
                    Q = function(t) {
                        for (var e, i = []; e = this[t++];) i.push(e);
                        return i
                    }
                }
                C = a.isXML = function(t) {
                    var e = t && (t.ownerDocument || t).documentElement;
                    return !!e && "HTML" !== e.nodeName
                }, I = a.setDocument = function(t) {
                    var n = t ? t.ownerDocument || t : F;
                    return n !== S && 9 === n.nodeType && n.documentElement ? (S = n, E = n.documentElement, P = C(n), L.tagNameNoComments = o(function(t) {
                        return t.appendChild(n.createComment("")), !t.getElementsByTagName("*").length
                    }), L.attributes = o(function(t) {
                        t.innerHTML = "<select></select>";
                        var e = typeof t.lastChild.getAttribute("multiple");
                        return "boolean" !== e && "string" !== e
                    }), L.getByClassName = o(function(t) {
                        return t.innerHTML = "<div class='hidden e'></div><div class='hidden'></div>", !(!t.getElementsByClassName || !t.getElementsByClassName("e").length) && (t.lastChild.className = "e", 2 === t.getElementsByClassName("e").length)
                    }), L.getByName = o(function(t) {
                        t.id = R + 0, t.innerHTML = "<a name='" + R + "'></a><div name='" + R + "'></div>", E.insertBefore(t, E.firstChild);
                        var e = n.getElementsByName && n.getElementsByName(R).length === 2 + n.getElementsByName(R + 0).length;
                        return L.getIdNotName = !n.getElementById(R), E.removeChild(t), e
                    }), w.attrHandle = o(function(t) {
                        return t.innerHTML = "<a href='#'></a>", t.firstChild && typeof t.firstChild.getAttribute !== U && "#" === t.firstChild.getAttribute("href")
                    }) ? {} : {
                        href: function(t) {
                            return t.getAttribute("href", 2)
                        },
                        type: function(t) {
                            return t.getAttribute("type")
                        }
                    }, L.getIdNotName ? (w.find.ID = function(t, e) {
                        if (typeof e.getElementById !== U && !P) {
                            var i = e.getElementById(t);
                            return i && i.parentNode ? [i] : []
                        }
                    }, w.filter.ID = function(t) {
                        var e = t.replace(vt, yt);
                        return function(t) {
                            return t.getAttribute("id") === e
                        }
                    }) : (w.find.ID = function(t, i) {
                        if (typeof i.getElementById !== U && !P) {
                            var n = i.getElementById(t);
                            return n ? n.id === t || typeof n.getAttributeNode !== U && n.getAttributeNode("id").value === t ? [n] : e : []
                        }
                    }, w.filter.ID = function(t) {
                        var e = t.replace(vt, yt);
                        return function(t) {
                            var i = typeof t.getAttributeNode !== U && t.getAttributeNode("id");
                            return i && i.value === e
                        }
                    }), w.find.TAG = L.tagNameNoComments ? function(t, i) {
                        return typeof i.getElementsByTagName !== U ? i.getElementsByTagName(t) : e
                    } : function(t, e) {
                        var i, n = [],
                            s = 0,
                            o = e.getElementsByTagName(t);
                        if ("*" === t) {
                            for (; i = o[s++];) 1 === i.nodeType && n.push(i);
                            return n
                        }
                        return o
                    }, w.find.NAME = L.getByName && function(t, i) {
                        return typeof i.getElementsByName !== U ? i.getElementsByName(name) : e
                    }, w.find.CLASS = L.getByClassName && function(t, i) {
                        return typeof i.getElementsByClassName === U || P ? e : i.getElementsByClassName(t)
                    }, M = [], N = [":focus"], (L.qsa = i(n.querySelectorAll)) && (o(function(t) {
                        t.innerHTML = "<select><option selected=''></option></select>", t.querySelectorAll("[selected]").length || N.push("\\[" + Z + "*(?:checked|disabled|ismap|multiple|readonly|selected|value)"), t.querySelectorAll(":checked").length || N.push(":checked")
                    }), o(function(t) {
                        t.innerHTML = "<input type='hidden' i=''/>", t.querySelectorAll("[i^='']").length && N.push("[*^$]=" + Z + "*(?:\"\"|'')"), t.querySelectorAll(":enabled").length || N.push(":enabled", ":disabled"), t.querySelectorAll("*,:x"), N.push(",.*:")
                    })), (L.matchesSelector = i(O = E.matchesSelector || E.mozMatchesSelector || E.webkitMatchesSelector || E.oMatchesSelector || E.msMatchesSelector)) && o(function(t) {
                        L.disconnectedMatch = O.call(t, "div"), O.call(t, "[s!='']:x"), M.push("!=", it)
                    }), N = RegExp(N.join("|")), M = RegExp(M.join("|")), j = i(E.contains) || E.compareDocumentPosition ? function(t, e) {
                        var i = 9 === t.nodeType ? t.documentElement : t,
                            n = e && e.parentNode;
                        return t === n || !(!n || 1 !== n.nodeType || !(i.contains ? i.contains(n) : t.compareDocumentPosition && 16 & t.compareDocumentPosition(n)))
                    } : function(t, e) {
                        if (e)
                            for (; e = e.parentNode;)
                                if (e === t) return !0;
                        return !1
                    }, H = E.compareDocumentPosition ? function(t, e) {
                        var i;
                        return t === e ? (A = !0, 0) : (i = e.compareDocumentPosition && t.compareDocumentPosition && t.compareDocumentPosition(e)) ? 1 & i || t.parentNode && 11 === t.parentNode.nodeType ? t === n || j(F, t) ? -1 : e === n || j(F, e) ? 1 : 0 : 4 & i ? -1 : 1 : t.compareDocumentPosition ? -1 : 1
                    } : function(t, e) {
                        var i, s = 0,
                            o = t.parentNode,
                            a = e.parentNode,
                            l = [t],
                            h = [e];
                        if (t === e) return A = !0, 0;
                        if (!o || !a) return t === n ? -1 : e === n ? 1 : o ? -1 : a ? 1 : 0;
                        if (o === a) return r(t, e);
                        for (i = t; i = i.parentNode;) l.unshift(i);
                        for (i = e; i = i.parentNode;) h.unshift(i);
                        for (; l[s] === h[s];) s++;
                        return s ? r(l[s], h[s]) : l[s] === F ? -1 : h[s] === F ? 1 : 0
                    }, A = !1, [0, 0].sort(H), L.detectDuplicates = A, S) : S
                }, a.matches = function(t, e) {
                    return a(t, null, null, e)
                }, a.matchesSelector = function(t, e) {
                    if ((t.ownerDocument || t) !== S && I(t), e = e.replace(gt, "='$1']"), !(!L.matchesSelector || P || M && M.test(e) || N.test(e))) try {
                        var i = O.call(t, e);
                        if (i || L.disconnectedMatch || t.document && 11 !== t.document.nodeType) return i
                    } catch (t) {}
                    return a(e, S, null, [t]).length > 0
                }, a.contains = function(t, e) {
                    return (t.ownerDocument || t) !== S && I(t), j(t, e)
                }, a.attr = function(t, e) {
                    var i;
                    return (t.ownerDocument || t) !== S && I(t), P || (e = e.toLowerCase()), (i = w.attrHandle[e]) ? i(t) : P || L.attributes ? t.getAttribute(e) : ((i = t.getAttributeNode(e)) || t.getAttribute(e)) && !0 === t[e] ? e : i && i.specified ? i.value : null
                }, a.error = function(t) {
                    throw Error("Syntax error, unrecognized expression: " + t)
                }, a.uniqueSort = function(t) {
                    var e, i = [],
                        n = 1,
                        s = 0;
                    if (A = !L.detectDuplicates, t.sort(H), A) {
                        for (; e = t[n]; n++) e === t[n - 1] && (s = i.push(n));
                        for (; s--;) t.splice(i[s], 1)
                    }
                    return t
                }, k = a.getText = function(t) {
                    var e, i = "",
                        n = 0,
                        s = t.nodeType;
                    if (s) {
                        if (1 === s || 9 === s || 11 === s) {
                            if ("string" == typeof t.textContent) return t.textContent;
                            for (t = t.firstChild; t; t = t.nextSibling) i += k(t)
                        } else if (3 === s || 4 === s) return t.nodeValue
                    } else
                        for (; e = t[n]; n++) i += k(e);
                    return i
                }, w = a.selectors = {
                    cacheLength: 50,
                    createPseudo: s,
                    match: ht,
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
                        ATTR: function(t) {
                            return t[1] = t[1].replace(vt, yt), t[3] = (t[4] || t[5] || "").replace(vt, yt), "~=" === t[2] && (t[3] = " " + t[3] + " "), t.slice(0, 4)
                        },
                        CHILD: function(t) {
                            return t[1] = t[1].toLowerCase(), "nth" === t[1].slice(0, 3) ? (t[3] || a.error(t[0]), t[4] = +(t[4] ? t[5] + (t[6] || 1) : 2 * ("even" === t[3] || "odd" === t[3])), t[5] = +(t[7] + t[8] || "odd" === t[3])) : t[3] && a.error(t[0]), t
                        },
                        PSEUDO: function(t) {
                            var e, i = !t[5] && t[2];
                            return ht.CHILD.test(t[0]) ? null : (t[4] ? t[2] = t[4] : i && at.test(i) && (e = h(i, !0)) && (e = i.indexOf(")", i.length - e) - i.length) && (t[0] = t[0].slice(0, e), t[2] = i.slice(0, e)), t.slice(0, 3))
                        }
                    },
                    filter: {
                        TAG: function(t) {
                            return "*" === t ? function() {
                                return !0
                            } : (t = t.replace(vt, yt).toLowerCase(), function(e) {
                                return e.nodeName && e.nodeName.toLowerCase() === t
                            })
                        },
                        CLASS: function(t) {
                            var e = $[t + " "];
                            return e || (e = RegExp("(^|" + Z + ")" + t + "(" + Z + "|$)")) && $(t, function(t) {
                                return e.test(t.className || typeof t.getAttribute !== U && t.getAttribute("class") || "")
                            })
                        },
                        ATTR: function(t, e, i) {
                            return function(n) {
                                var s = a.attr(n, t);
                                return null == s ? "!=" === e : !e || (s += "", "=" === e ? s === i : "!=" === e ? s !== i : "^=" === e ? i && 0 === s.indexOf(i) : "*=" === e ? i && s.indexOf(i) > -1 : "$=" === e ? i && s.slice(-i.length) === i : "~=" === e ? (" " + s + " ").indexOf(i) > -1 : "|=" === e && (s === i || s.slice(0, i.length + 1) === i + "-"))
                            }
                        },
                        CHILD: function(t, e, i, n, s) {
                            var o = "nth" !== t.slice(0, 3),
                                a = "last" !== t.slice(-4),
                                r = "of-type" === e;
                            return 1 === n && 0 === s ? function(t) {
                                return !!t.parentNode
                            } : function(e, i, l) {
                                var h, c, u, d, p, f, m = o !== a ? "nextSibling" : "previousSibling",
                                    g = e.parentNode,
                                    v = r && e.nodeName.toLowerCase(),
                                    y = !l && !r;
                                if (g) {
                                    if (o) {
                                        for (; m;) {
                                            for (u = e; u = u[m];)
                                                if (r ? u.nodeName.toLowerCase() === v : 1 === u.nodeType) return !1;
                                            f = m = "only" === t && !f && "nextSibling"
                                        }
                                        return !0
                                    }
                                    if (f = [a ? g.firstChild : g.lastChild], a && y) {
                                        for (p = (h = (c = g[R] || (g[R] = {}))[t] || [])[0] === B && h[1], d = h[0] === B && h[2], u = p && g.childNodes[p]; u = ++p && u && u[m] || (d = p = 0) || f.pop();)
                                            if (1 === u.nodeType && ++d && u === e) {
                                                c[t] = [B, p, d];
                                                break
                                            }
                                    } else if (y && (h = (e[R] || (e[R] = {}))[t]) && h[0] === B) d = h[1];
                                    else
                                        for (;
                                            (u = ++p && u && u[m] || (d = p = 0) || f.pop()) && ((r ? u.nodeName.toLowerCase() !== v : 1 !== u.nodeType) || !++d || (y && ((u[R] || (u[R] = {}))[t] = [B, d]), u !== e)););
                                    return (d -= s) === n || 0 == d % n && d / n >= 0
                                }
                            }
                        },
                        PSEUDO: function(t, e) {
                            var i, n = w.pseudos[t] || w.setFilters[t.toLowerCase()] || a.error("unsupported pseudo: " + t);
                            return n[R] ? n(e) : n.length > 1 ? (i = [t, t, "", e], w.setFilters.hasOwnProperty(t.toLowerCase()) ? s(function(t, i) {
                                for (var s, o = n(t, e), a = o.length; a--;) s = X.call(t, o[a]), t[s] = !(i[s] = o[a])
                            }) : function(t) {
                                return n(t, 0, i)
                            }) : n
                        }
                    },
                    pseudos: {
                        not: s(function(t) {
                            var e = [],
                                i = [],
                                n = D(t.replace(nt, "$1"));
                            return n[R] ? s(function(t, e, i, s) {
                                for (var o, a = n(t, null, s, []), r = t.length; r--;)(o = a[r]) && (t[r] = !(e[r] = o))
                            }) : function(t, s, o) {
                                return e[0] = t, n(e, null, o, i), !i.pop()
                            }
                        }),
                        has: s(function(t) {
                            return function(e) {
                                return a(t, e).length > 0
                            }
                        }),
                        contains: s(function(t) {
                            return function(e) {
                                return (e.textContent || e.innerText || k(e)).indexOf(t) > -1
                            }
                        }),
                        lang: s(function(t) {
                            return lt.test(t || "") || a.error("unsupported lang: " + t), t = t.replace(vt, yt).toLowerCase(),
                                function(e) {
                                    var i;
                                    do {
                                        if (i = P ? e.getAttribute("xml:lang") || e.getAttribute("lang") : e.lang) return (i = i.toLowerCase()) === t || 0 === i.indexOf(t + "-")
                                    } while ((e = e.parentNode) && 1 === e.nodeType);
                                    return !1
                                }
                        }),
                        target: function(e) {
                            var i = t.location && t.location.hash;
                            return i && i.slice(1) === e.id
                        },
                        root: function(t) {
                            return t === E
                        },
                        focus: function(t) {
                            return t === S.activeElement && (!S.hasFocus || S.hasFocus()) && !!(t.type || t.href || ~t.tabIndex)
                        },
                        enabled: function(t) {
                            return !1 === t.disabled
                        },
                        disabled: function(t) {
                            return !0 === t.disabled
                        },
                        checked: function(t) {
                            var e = t.nodeName.toLowerCase();
                            return "input" === e && !!t.checked || "option" === e && !!t.selected
                        },
                        selected: function(t) {
                            return t.parentNode && t.parentNode.selectedIndex, !0 === t.selected
                        },
                        empty: function(t) {
                            for (t = t.firstChild; t; t = t.nextSibling)
                                if (t.nodeName > "@" || 3 === t.nodeType || 4 === t.nodeType) return !1;
                            return !0
                        },
                        parent: function(t) {
                            return !w.pseudos.empty(t)
                        },
                        header: function(t) {
                            return ft.test(t.nodeName)
                        },
                        input: function(t) {
                            return pt.test(t.nodeName)
                        },
                        button: function(t) {
                            var e = t.nodeName.toLowerCase();
                            return "input" === e && "button" === t.type || "button" === e
                        },
                        text: function(t) {
                            var e;
                            return "input" === t.nodeName.toLowerCase() && "text" === t.type && (null == (e = t.getAttribute("type")) || e.toLowerCase() === t.type)
                        },
                        first: l(function() {
                            return [0]
                        }),
                        last: l(function(t, e) {
                            return [e - 1]
                        }),
                        eq: l(function(t, e, i) {
                            return [0 > i ? i + e : i]
                        }),
                        even: l(function(t, e) {
                            for (var i = 0; e > i; i += 2) t.push(i);
                            return t
                        }),
                        odd: l(function(t, e) {
                            for (var i = 1; e > i; i += 2) t.push(i);
                            return t
                        }),
                        lt: l(function(t, e, i) {
                            for (var n = 0 > i ? i + e : i; --n >= 0;) t.push(n);
                            return t
                        }),
                        gt: l(function(t, e, i) {
                            for (var n = 0 > i ? i + e : i; e > ++n;) t.push(n);
                            return t
                        })
                    }
                };
                for (_ in {
                        radio: !0,
                        checkbox: !0,
                        file: !0,
                        password: !0,
                        image: !0
                    }) w.pseudos[_] = function(t) {
                    return function(e) {
                        return "input" === e.nodeName.toLowerCase() && e.type === t
                    }
                }(_);
                for (_ in {
                        submit: !0,
                        reset: !0
                    }) w.pseudos[_] = function(t) {
                    return function(e) {
                        var i = e.nodeName.toLowerCase();
                        return ("input" === i || "button" === i) && e.type === t
                    }
                }(_);
                D = a.compile = function(t, e) {
                    var i, n = [],
                        s = [],
                        o = q[t + " "];
                    if (!o) {
                        for (e || (e = h(t)), i = e.length; i--;)(o = m(e[i]))[R] ? n.push(o) : s.push(o);
                        o = q(t, g(s, n))
                    }
                    return o
                }, w.pseudos.nth = w.pseudos.eq, w.filters = b.prototype = w.pseudos, w.setFilters = new b, I(), a.attr = rt.attr, rt.find = a, rt.expr = a.selectors, rt.expr[":"] = rt.expr.pseudos, rt.unique = a.uniqueSort, rt.text = a.getText, rt.isXMLDoc = a.isXML, rt.contains = a.contains
            }(t);
        var Bt = /Until$/,
            zt = /^(?:parents|prev(?:Until|All))/,
            $t = /^.[^:#\[\.,]*$/,
            Wt = rt.expr.match.needsContext,
            qt = {
                children: !0,
                contents: !0,
                next: !0,
                prev: !0
            };
        rt.fn.extend({
            find: function(t) {
                var e, i, n, s = this.length;
                if ("string" != typeof t) return n = this, this.pushStack(rt(t).filter(function() {
                    for (e = 0; s > e; e++)
                        if (rt.contains(n[e], this)) return !0
                }));
                for (i = [], e = 0; s > e; e++) rt.find(t, this[e], i);
                return i = this.pushStack(s > 1 ? rt.unique(i) : i), i.selector = (this.selector ? this.selector + " " : "") + t, i
            },
            has: function(t) {
                var e, i = rt(t, this),
                    n = i.length;
                return this.filter(function() {
                    for (e = 0; n > e; e++)
                        if (rt.contains(this, i[e])) return !0
                })
            },
            not: function(t) {
                return this.pushStack(u(this, t, !1))
            },
            filter: function(t) {
                return this.pushStack(u(this, t, !0))
            },
            is: function(t) {
                return !!t && ("string" == typeof t ? Wt.test(t) ? rt(t, this.context).index(this[0]) >= 0 : rt.filter(t, this).length > 0 : this.filter(t).length > 0)
            },
            closest: function(t, e) {
                for (var i, n = 0, s = this.length, o = [], a = Wt.test(t) || "string" != typeof t ? rt(t, e || this.context) : 0; s > n; n++)
                    for (i = this[n]; i && i.ownerDocument && i !== e && 11 !== i.nodeType;) {
                        if (a ? a.index(i) > -1 : rt.find.matchesSelector(i, t)) {
                            o.push(i);
                            break
                        }
                        i = i.parentNode
                    }
                return this.pushStack(o.length > 1 ? rt.unique(o) : o)
            },
            index: function(t) {
                return t ? "string" == typeof t ? rt.inArray(this[0], rt(t)) : rt.inArray(t.jquery ? t[0] : t, this) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
            },
            add: function(t, e) {
                var i = "string" == typeof t ? rt(t, e) : rt.makeArray(t && t.nodeType ? [t] : t),
                    n = rt.merge(this.get(), i);
                return this.pushStack(rt.unique(n))
            },
            addBack: function(t) {
                return this.add(null == t ? this.prevObject : this.prevObject.filter(t))
            }
        }), rt.fn.andSelf = rt.fn.addBack, rt.each({
            parent: function(t) {
                var e = t.parentNode;
                return e && 11 !== e.nodeType ? e : null
            },
            parents: function(t) {
                return rt.dir(t, "parentNode")
            },
            parentsUntil: function(t, e, i) {
                return rt.dir(t, "parentNode", i)
            },
            next: function(t) {
                return c(t, "nextSibling")
            },
            prev: function(t) {
                return c(t, "previousSibling")
            },
            nextAll: function(t) {
                return rt.dir(t, "nextSibling")
            },
            prevAll: function(t) {
                return rt.dir(t, "previousSibling")
            },
            nextUntil: function(t, e, i) {
                return rt.dir(t, "nextSibling", i)
            },
            prevUntil: function(t, e, i) {
                return rt.dir(t, "previousSibling", i)
            },
            siblings: function(t) {
                return rt.sibling((t.parentNode || {}).firstChild, t)
            },
            children: function(t) {
                return rt.sibling(t.firstChild)
            },
            contents: function(t) {
                return rt.nodeName(t, "iframe") ? t.contentDocument || t.contentWindow.document : rt.merge([], t.childNodes)
            }
        }, function(t, e) {
            rt.fn[t] = function(i, n) {
                var s = rt.map(this, e, i);
                return Bt.test(t) || (n = i), n && "string" == typeof n && (s = rt.filter(n, s)), s = this.length > 1 && !qt[t] ? rt.unique(s) : s, this.length > 1 && zt.test(t) && (s = s.reverse()), this.pushStack(s)
            }
        }), rt.extend({
            filter: function(t, e, i) {
                return i && (t = ":not(" + t + ")"), 1 === e.length ? rt.find.matchesSelector(e[0], t) ? [e[0]] : [] : rt.find.matches(t, e)
            },
            dir: function(t, i, n) {
                for (var s = [], o = t[i]; o && 9 !== o.nodeType && (n === e || 1 !== o.nodeType || !rt(o).is(n));) 1 === o.nodeType && s.push(o), o = o[i];
                return s
            },
            sibling: function(t, e) {
                for (var i = []; t; t = t.nextSibling) 1 === t.nodeType && t !== e && i.push(t);
                return i
            }
        });
        var Ut = "abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",
            Yt = / jQuery\d+="(?:null|\d+)"/g,
            Gt = RegExp("<(?:" + Ut + ")[\\s/>]", "i"),
            Kt = /^\s+/,
            Vt = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
            Qt = /<([\w:]+)/,
            Xt = /<tbody/i,
            Zt = /<|&#?\w+;/,
            Jt = /<(?:script|style|link)/i,
            te = /^(?:checkbox|radio)$/i,
            ee = /checked\s*(?:[^=]|=\s*.checked.)/i,
            ie = /^$|\/(?:java|ecma)script/i,
            ne = /^true\/(.*)/,
            se = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
            oe = {
                option: [1, "<select multiple='multiple'>", "</select>"],
                legend: [1, "<fieldset>", "</fieldset>"],
                area: [1, "<map>", "</map>"],
                param: [1, "<object>", "</object>"],
                thead: [1, "<table>", "</table>"],
                tr: [2, "<table><tbody>", "</tbody></table>"],
                col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"],
                td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
                _default: rt.support.htmlSerialize ? [0, "", ""] : [1, "X<div>", "</div>"]
            },
            ae = d(G).appendChild(G.createElement("div"));
        oe.optgroup = oe.option, oe.tbody = oe.tfoot = oe.colgroup = oe.caption = oe.thead, oe.th = oe.td, rt.fn.extend({
            text: function(t) {
                return rt.access(this, function(t) {
                    return t === e ? rt.text(this) : this.empty().append((this[0] && this[0].ownerDocument || G).createTextNode(t))
                }, null, t, arguments.length)
            },
            wrapAll: function(t) {
                if (rt.isFunction(t)) return this.each(function(e) {
                    rt(this).wrapAll(t.call(this, e))
                });
                if (this[0]) {
                    var e = rt(t, this[0].ownerDocument).eq(0).clone(!0);
                    this[0].parentNode && e.insertBefore(this[0]), e.map(function() {
                        for (var t = this; t.firstChild && 1 === t.firstChild.nodeType;) t = t.firstChild;
                        return t
                    }).append(this)
                }
                return this
            },
            wrapInner: function(t) {
                return rt.isFunction(t) ? this.each(function(e) {
                    rt(this).wrapInner(t.call(this, e))
                }) : this.each(function() {
                    var e = rt(this),
                        i = e.contents();
                    i.length ? i.wrapAll(t) : e.append(t)
                })
            },
            wrap: function(t) {
                var e = rt.isFunction(t);
                return this.each(function(i) {
                    rt(this).wrapAll(e ? t.call(this, i) : t)
                })
            },
            unwrap: function() {
                return this.parent().each(function() {
                    rt.nodeName(this, "body") || rt(this).replaceWith(this.childNodes)
                }).end()
            },
            append: function() {
                return this.domManip(arguments, !0, function(t) {
                    (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) && this.appendChild(t)
                })
            },
            prepend: function() {
                return this.domManip(arguments, !0, function(t) {
                    (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) && this.insertBefore(t, this.firstChild)
                })
            },
            before: function() {
                return this.domManip(arguments, !1, function(t) {
                    this.parentNode && this.parentNode.insertBefore(t, this)
                })
            },
            after: function() {
                return this.domManip(arguments, !1, function(t) {
                    this.parentNode && this.parentNode.insertBefore(t, this.nextSibling)
                })
            },
            remove: function(t, e) {
                for (var i, n = 0; null != (i = this[n]); n++)(!t || rt.filter(t, [i]).length > 0) && (e || 1 !== i.nodeType || rt.cleanData(b(i)), i.parentNode && (e && rt.contains(i.ownerDocument, i) && g(b(i, "script")), i.parentNode.removeChild(i)));
                return this
            },
            empty: function() {
                for (var t, e = 0; null != (t = this[e]); e++) {
                    for (1 === t.nodeType && rt.cleanData(b(t, !1)); t.firstChild;) t.removeChild(t.firstChild);
                    t.options && rt.nodeName(t, "select") && (t.options.length = 0)
                }
                return this
            },
            clone: function(t, e) {
                return t = null != t && t, e = null == e ? t : e, this.map(function() {
                    return rt.clone(this, t, e)
                })
            },
            html: function(t) {
                return rt.access(this, function(t) {
                    var i = this[0] || {},
                        n = 0,
                        s = this.length;
                    if (t === e) return 1 === i.nodeType ? i.innerHTML.replace(Yt, "") : e;
                    if (!("string" != typeof t || Jt.test(t) || !rt.support.htmlSerialize && Gt.test(t) || !rt.support.leadingWhitespace && Kt.test(t) || oe[(Qt.exec(t) || ["", ""])[1].toLowerCase()])) {
                        t = t.replace(Vt, "<$1></$2>");
                        try {
                            for (; s > n; n++) 1 === (i = this[n] || {}).nodeType && (rt.cleanData(b(i, !1)), i.innerHTML = t);
                            i = 0
                        } catch (t) {}
                    }
                    i && this.empty().append(t)
                }, null, t, arguments.length)
            },
            replaceWith: function(t) {
                return rt.isFunction(t) || "string" == typeof t || (t = rt(t).not(this).detach()), this.domManip([t], !0, function(t) {
                    var e = this.nextSibling,
                        i = this.parentNode;
                    i && (rt(this).remove(), i.insertBefore(t, e))
                })
            },
            detach: function(t) {
                return this.remove(t, !0)
            },
            domManip: function(t, i, n) {
                t = tt.apply([], t);
                var s, o, a, r, l, h, c = 0,
                    u = this.length,
                    d = this,
                    g = u - 1,
                    v = t[0],
                    y = rt.isFunction(v);
                if (y || !(1 >= u || "string" != typeof v || rt.support.checkClone) && ee.test(v)) return this.each(function(s) {
                    var o = d.eq(s);
                    y && (t[0] = v.call(this, s, i ? o.html() : e)), o.domManip(t, i, n)
                });
                if (u && (h = rt.buildFragment(t, this[0].ownerDocument, !1, this), s = h.firstChild, 1 === h.childNodes.length && (h = s), s)) {
                    for (i = i && rt.nodeName(s, "tr"), a = (r = rt.map(b(h, "script"), f)).length; u > c; c++) o = h, c !== g && (o = rt.clone(o, !0, !0), a && rt.merge(r, b(o, "script"))), n.call(i && rt.nodeName(this[c], "table") ? p(this[c], "tbody") : this[c], o, c);
                    if (a)
                        for (l = r[r.length - 1].ownerDocument, rt.map(r, m), c = 0; a > c; c++) o = r[c], ie.test(o.type || "") && !rt._data(o, "globalEval") && rt.contains(l, o) && (o.src ? rt.ajax({
                            url: o.src,
                            type: "GET",
                            dataType: "script",
                            async: !1,
                            global: !1,
                            throws: !0
                        }) : rt.globalEval((o.text || o.textContent || o.innerHTML || "").replace(se, "")));
                    h = s = null
                }
                return this
            }
        }), rt.each({
            appendTo: "append",
            prependTo: "prepend",
            insertBefore: "before",
            insertAfter: "after",
            replaceAll: "replaceWith"
        }, function(t, e) {
            rt.fn[t] = function(t) {
                for (var i, n = 0, s = [], o = rt(t), a = o.length - 1; a >= n; n++) i = n === a ? this : this.clone(!0), rt(o[n])[e](i), et.apply(s, i.get());
                return this.pushStack(s)
            }
        }), rt.extend({
            clone: function(t, e, i) {
                var n, s, o, a, r, l = rt.contains(t.ownerDocument, t);
                if (rt.support.html5Clone || rt.isXMLDoc(t) || !Gt.test("<" + t.nodeName + ">") ? o = t.cloneNode(!0) : (ae.innerHTML = t.outerHTML, ae.removeChild(o = ae.firstChild)), !(rt.support.noCloneEvent && rt.support.noCloneChecked || 1 !== t.nodeType && 11 !== t.nodeType || rt.isXMLDoc(t)))
                    for (n = b(o), r = b(t), a = 0; null != (s = r[a]); ++a) n[a] && y(s, n[a]);
                if (e)
                    if (i)
                        for (r = r || b(t), n = n || b(o), a = 0; null != (s = r[a]); a++) v(s, n[a]);
                    else v(t, o);
                return (n = b(o, "script")).length > 0 && g(n, !l && b(t, "script")), n = r = s = null, o
            },
            buildFragment: function(t, e, i, n) {
                for (var s, o, a, r, l, h, c, u = t.length, p = d(e), f = [], m = 0; u > m; m++)
                    if ((o = t[m]) || 0 === o)
                        if ("object" === rt.type(o)) rt.merge(f, o.nodeType ? [o] : o);
                        else if (Zt.test(o)) {
                    for (r = r || p.appendChild(e.createElement("div")), l = (Qt.exec(o) || ["", ""])[1].toLowerCase(), c = oe[l] || oe._default, r.innerHTML = c[1] + o.replace(Vt, "<$1></$2>") + c[2], s = c[0]; s--;) r = r.lastChild;
                    if (!rt.support.leadingWhitespace && Kt.test(o) && f.push(e.createTextNode(Kt.exec(o)[0])), !rt.support.tbody)
                        for (s = (o = "table" !== l || Xt.test(o) ? "<table>" !== c[1] || Xt.test(o) ? 0 : r : r.firstChild) && o.childNodes.length; s--;) rt.nodeName(h = o.childNodes[s], "tbody") && !h.childNodes.length && o.removeChild(h);
                    for (rt.merge(f, r.childNodes), r.textContent = ""; r.firstChild;) r.removeChild(r.firstChild);
                    r = p.lastChild
                } else f.push(e.createTextNode(o));
                for (r && p.removeChild(r), rt.support.appendChecked || rt.grep(b(f, "input"), _), m = 0; o = f[m++];)
                    if ((!n || -1 === rt.inArray(o, n)) && (a = rt.contains(o.ownerDocument, o), r = b(p.appendChild(o), "script"), a && g(r), i))
                        for (s = 0; o = r[s++];) ie.test(o.type || "") && i.push(o);
                return r = null, p
            },
            cleanData: function(t, e) {
                for (var i, n, s, o, a = 0, r = rt.expando, l = rt.cache, h = rt.support.deleteExpando, c = rt.event.special; null != (i = t[a]); a++)
                    if ((e || rt.acceptData(i)) && (s = i[r], o = s && l[s])) {
                        if (o.events)
                            for (n in o.events) c[n] ? rt.event.remove(i, n) : rt.removeEvent(i, n, o.handle);
                        l[s] && (delete l[s], h ? delete i[r] : typeof i.removeAttribute !== Y ? i.removeAttribute(r) : i[r] = null, Z.push(s))
                    }
            }
        });
        var re, le, he, ce = /alpha\([^)]*\)/i,
            ue = /opacity\s*=\s*([^)]*)/,
            de = /^(top|right|bottom|left)$/,
            pe = /^(none|table(?!-c[ea]).+)/,
            fe = /^margin/,
            me = RegExp("^(" + lt + ")(.*)$", "i"),
            ge = RegExp("^(" + lt + ")(?!px)[a-z%]+$", "i"),
            ve = RegExp("^([+-])=(" + lt + ")", "i"),
            ye = {
                BODY: "block"
            },
            be = {
                position: "absolute",
                visibility: "hidden",
                display: "block"
            },
            _e = {
                letterSpacing: 0,
                fontWeight: 400
            },
            xe = ["Top", "Right", "Bottom", "Left"],
            we = ["Webkit", "O", "Moz", "ms"];
        rt.fn.extend({
            css: function(t, i) {
                return rt.access(this, function(t, i, n) {
                    var s, o, a = {},
                        r = 0;
                    if (rt.isArray(i)) {
                        for (o = le(t), s = i.length; s > r; r++) a[i[r]] = rt.css(t, i[r], !1, o);
                        return a
                    }
                    return n !== e ? rt.style(t, i, n) : rt.css(t, i)
                }, t, i, arguments.length > 1)
            },
            show: function() {
                return k(this, !0)
            },
            hide: function() {
                return k(this)
            },
            toggle: function(t) {
                var e = "boolean" == typeof t;
                return this.each(function() {
                    (e ? t : w(this)) ? rt(this).show(): rt(this).hide()
                })
            }
        }), rt.extend({
            cssHooks: {
                opacity: {
                    get: function(t, e) {
                        if (e) {
                            var i = he(t, "opacity");
                            return "" === i ? "1" : i
                        }
                    }
                }
            },
            cssNumber: {
                columnCount: !0,
                fillOpacity: !0,
                fontWeight: !0,
                lineHeight: !0,
                opacity: !0,
                orphans: !0,
                widows: !0,
                zIndex: !0,
                zoom: !0
            },
            cssProps: {
                float: rt.support.cssFloat ? "cssFloat" : "styleFloat"
            },
            style: function(t, i, n, s) {
                if (t && 3 !== t.nodeType && 8 !== t.nodeType && t.style) {
                    var o, a, r, l = rt.camelCase(i),
                        h = t.style;
                    if (i = rt.cssProps[l] || (rt.cssProps[l] = x(h, l)), r = rt.cssHooks[i] || rt.cssHooks[l], n === e) return r && "get" in r && (o = r.get(t, !1, s)) !== e ? o : h[i];
                    if ("string" === (a = typeof n) && (o = ve.exec(n)) && (n = (o[1] + 1) * o[2] + parseFloat(rt.css(t, i)), a = "number"), !(null == n || "number" === a && isNaN(n) || ("number" !== a || rt.cssNumber[l] || (n += "px"), rt.support.clearCloneStyle || "" !== n || 0 !== i.indexOf("background") || (h[i] = "inherit"), r && "set" in r && (n = r.set(t, n, s)) === e))) try {
                        h[i] = n
                    } catch (t) {}
                }
            },
            css: function(t, i, n, s) {
                var o, a, r, l = rt.camelCase(i);
                return i = rt.cssProps[l] || (rt.cssProps[l] = x(t.style, l)), (r = rt.cssHooks[i] || rt.cssHooks[l]) && "get" in r && (a = r.get(t, !0, n)), a === e && (a = he(t, i, s)), "normal" === a && i in _e && (a = _e[i]), "" === n || n ? (o = parseFloat(a), !0 === n || rt.isNumeric(o) ? o || 0 : a) : a
            },
            swap: function(t, e, i, n) {
                var s, o, a = {};
                for (o in e) a[o] = t.style[o], t.style[o] = e[o];
                s = i.apply(t, n || []);
                for (o in e) t.style[o] = a[o];
                return s
            }
        }), t.getComputedStyle ? (le = function(e) {
            return t.getComputedStyle(e, null)
        }, he = function(t, i, n) {
            var s, o, a, r = n || le(t),
                l = r ? r.getPropertyValue(i) || r[i] : e,
                h = t.style;
            return r && ("" !== l || rt.contains(t.ownerDocument, t) || (l = rt.style(t, i)), ge.test(l) && fe.test(i) && (s = h.width, o = h.minWidth, a = h.maxWidth, h.minWidth = h.maxWidth = h.width = l, l = r.width, h.width = s, h.minWidth = o, h.maxWidth = a)), l
        }) : G.documentElement.currentStyle && (le = function(t) {
            return t.currentStyle
        }, he = function(t, i, n) {
            var s, o, a, r = n || le(t),
                l = r ? r[i] : e,
                h = t.style;
            return null == l && h && h[i] && (l = h[i]), ge.test(l) && !de.test(i) && (s = h.left, o = t.runtimeStyle, (a = o && o.left) && (o.left = t.currentStyle.left), h.left = "fontSize" === i ? "1em" : l, l = h.pixelLeft + "px", h.left = s, a && (o.left = a)), "" === l ? "auto" : l
        }), rt.each(["height", "width"], function(t, i) {
            rt.cssHooks[i] = {
                get: function(t, n, s) {
                    return n ? 0 === t.offsetWidth && pe.test(rt.css(t, "display")) ? rt.swap(t, be, function() {
                        return A(t, i, s)
                    }) : A(t, i, s) : e
                },
                set: function(t, e, n) {
                    var s = n && le(t);
                    return C(0, e, n ? D(t, i, n, rt.support.boxSizing && "border-box" === rt.css(t, "boxSizing", !1, s), s) : 0)
                }
            }
        }), rt.support.opacity || (rt.cssHooks.opacity = {
            get: function(t, e) {
                return ue.test((e && t.currentStyle ? t.currentStyle.filter : t.style.filter) || "") ? .01 * parseFloat(RegExp.$1) + "" : e ? "1" : ""
            },
            set: function(t, e) {
                var i = t.style,
                    n = t.currentStyle,
                    s = rt.isNumeric(e) ? "alpha(opacity=" + 100 * e + ")" : "",
                    o = n && n.filter || i.filter || "";
                i.zoom = 1, (e >= 1 || "" === e) && "" === rt.trim(o.replace(ce, "")) && i.removeAttribute && (i.removeAttribute("filter"), "" === e || n && !n.filter) || (i.filter = ce.test(o) ? o.replace(ce, s) : o + " " + s)
            }
        }), rt(function() {
            rt.support.reliableMarginRight || (rt.cssHooks.marginRight = {
                get: function(t, i) {
                    return i ? rt.swap(t, {
                        display: "inline-block"
                    }, he, [t, "marginRight"]) : e
                }
            }), !rt.support.pixelPosition && rt.fn.position && rt.each(["top", "left"], function(t, i) {
                rt.cssHooks[i] = {
                    get: function(t, n) {
                        return n ? (n = he(t, i), ge.test(n) ? rt(t).position()[i] + "px" : n) : e
                    }
                }
            })
        }), rt.expr && rt.expr.filters && (rt.expr.filters.hidden = function(t) {
            return 0 >= t.offsetWidth && 0 >= t.offsetHeight || !rt.support.reliableHiddenOffsets && "none" === (t.style && t.style.display || rt.css(t, "display"))
        }, rt.expr.filters.visible = function(t) {
            return !rt.expr.filters.hidden(t)
        }), rt.each({
            margin: "",
            padding: "",
            border: "Width"
        }, function(t, e) {
            rt.cssHooks[t + e] = {
                expand: function(i) {
                    for (var n = 0, s = {}, o = "string" == typeof i ? i.split(" ") : [i]; 4 > n; n++) s[t + xe[n] + e] = o[n] || o[n - 2] || o[0];
                    return s
                }
            }, fe.test(t) || (rt.cssHooks[t + e].set = C)
        });
        var ke = /%20/g,
            Ce = /\[\]$/,
            De = /\r?\n/g,
            Ae = /^(?:submit|button|image|reset|file)$/i,
            Te = /^(?:input|select|textarea|keygen)/i;
        rt.fn.extend({
            serialize: function() {
                return rt.param(this.serializeArray())
            },
            serializeArray: function() {
                return this.map(function() {
                    var t = rt.prop(this, "elements");
                    return t ? rt.makeArray(t) : this
                }).filter(function() {
                    var t = this.type;
                    return this.name && !rt(this).is(":disabled") && Te.test(this.nodeName) && !Ae.test(t) && (this.checked || !te.test(t))
                }).map(function(t, e) {
                    var i = rt(this).val();
                    return null == i ? null : rt.isArray(i) ? rt.map(i, function(t) {
                        return {
                            name: e.name,
                            value: t.replace(De, "\r\n")
                        }
                    }) : {
                        name: e.name,
                        value: i.replace(De, "\r\n")
                    }
                }).get()
            }
        }), rt.param = function(t, i) {
            var n, s = [],
                o = function(t, e) {
                    e = rt.isFunction(e) ? e() : null == e ? "" : e, s[s.length] = encodeURIComponent(t) + "=" + encodeURIComponent(e)
                };
            if (i === e && (i = rt.ajaxSettings && rt.ajaxSettings.traditional), rt.isArray(t) || t.jquery && !rt.isPlainObject(t)) rt.each(t, function() {
                o(this.name, this.value)
            });
            else
                for (n in t) S(n, t[n], i, o);
            return s.join("&").replace(ke, "+")
        }, rt.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function(t, e) {
            rt.fn[e] = function(t, i) {
                return arguments.length > 0 ? this.on(e, null, t, i) : this.trigger(e)
            }
        }), rt.fn.hover = function(t, e) {
            return this.mouseenter(t).mouseleave(e || t)
        };
        var Ie, Se, Ee = rt.now(),
            Pe = /\?/,
            Ne = /#.*$/,
            Me = /([?&])_=[^&]*/,
            Oe = /^(.*?):[ \t]*([^\r\n]*)\r?$/gm,
            je = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
            He = /^(?:GET|HEAD)$/,
            Re = /^\/\//,
            Fe = /^([\w.+-]+:)(?:\/\/([^\/?#:]*)(?::(\d+)|)|)/,
            Le = rt.fn.load,
            Be = {},
            ze = {},
            $e = "*/".concat("*");
        try {
            Se = K.href
        } catch (t) {
            (Se = G.createElement("a")).href = "", Se = Se.href
        }
        Ie = Fe.exec(Se.toLowerCase()) || [], rt.fn.load = function(t, i, n) {
            if ("string" != typeof t && Le) return Le.apply(this, arguments);
            var s, o, a, r = this,
                l = t.indexOf(" ");
            return l >= 0 && (s = t.slice(l, t.length), t = t.slice(0, l)), rt.isFunction(i) ? (n = i, i = e) : i && "object" == typeof i && (a = "POST"), r.length > 0 && rt.ajax({
                url: t,
                type: a,
                dataType: "html",
                data: i
            }).done(function(t) {
                o = arguments, r.html(s ? rt("<div>").append(rt.parseHTML(t)).find(s) : t)
            }).complete(n && function(t, e) {
                r.each(n, o || [t.responseText, e, t])
            }), this
        }, rt.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(t, e) {
            rt.fn[e] = function(t) {
                return this.on(e, t)
            }
        }), rt.each(["get", "post"], function(t, i) {
            rt[i] = function(t, n, s, o) {
                return rt.isFunction(n) && (o = o || s, s = n, n = e), rt.ajax({
                    url: t,
                    type: i,
                    dataType: o,
                    data: n,
                    success: s
                })
            }
        }), rt.extend({
            active: 0,
            lastModified: {},
            etag: {},
            ajaxSettings: {
                url: Se,
                type: "GET",
                isLocal: je.test(Ie[1]),
                global: !0,
                processData: !0,
                async: !0,
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                accepts: {
                    "*": $e,
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
                    text: "responseText"
                },
                converters: {
                    "* text": t.String,
                    "text html": !0,
                    "text json": rt.parseJSON,
                    "text xml": rt.parseXML
                },
                flatOptions: {
                    url: !0,
                    context: !0
                }
            },
            ajaxSetup: function(t, e) {
                return e ? N(N(t, rt.ajaxSettings), e) : N(rt.ajaxSettings, t)
            },
            ajaxPrefilter: E(Be),
            ajaxTransport: E(ze),
            ajax: function(t, i) {
                function n(t, i, n, s) {
                    var o, u, y, b, x, k = i;
                    2 !== _ && (_ = 2, l && clearTimeout(l), c = e, r = s || "", w.readyState = t > 0 ? 4 : 0, n && (b = M(d, w, n)), t >= 200 && 300 > t || 304 === t ? (d.ifModified && ((x = w.getResponseHeader("Last-Modified")) && (rt.lastModified[a] = x), (x = w.getResponseHeader("etag")) && (rt.etag[a] = x)), 204 === t ? (o = !0, k = "nocontent") : 304 === t ? (o = !0, k = "notmodified") : (o = O(d, b), k = o.state, u = o.data, y = o.error, o = !y)) : (y = k, (t || !k) && (k = "error", 0 > t && (t = 0))), w.status = t, w.statusText = (i || k) + "", o ? m.resolveWith(p, [u, k, w]) : m.rejectWith(p, [w, k, y]), w.statusCode(v), v = e, h && f.trigger(o ? "ajaxSuccess" : "ajaxError", [w, d, o ? u : y]), g.fireWith(p, [w, k]), h && (f.trigger("ajaxComplete", [w, d]), --rt.active || rt.event.trigger("ajaxStop")))
                }
                "object" == typeof t && (i = t, t = e), i = i || {};
                var s, o, a, r, l, h, c, u, d = rt.ajaxSetup({}, i),
                    p = d.context || d,
                    f = d.context && (p.nodeType || p.jquery) ? rt(p) : rt.event,
                    m = rt.Deferred(),
                    g = rt.Callbacks("once memory"),
                    v = d.statusCode || {},
                    y = {},
                    b = {},
                    _ = 0,
                    x = "canceled",
                    w = {
                        readyState: 0,
                        getResponseHeader: function(t) {
                            var e;
                            if (2 === _) {
                                if (!u)
                                    for (u = {}; e = Oe.exec(r);) u[e[1].toLowerCase()] = e[2];
                                e = u[t.toLowerCase()]
                            }
                            return null == e ? null : e
                        },
                        getAllResponseHeaders: function() {
                            return 2 === _ ? r : null
                        },
                        setRequestHeader: function(t, e) {
                            var i = t.toLowerCase();
                            return _ || (t = b[i] = b[i] || t, y[t] = e), this
                        },
                        overrideMimeType: function(t) {
                            return _ || (d.mimeType = t), this
                        },
                        statusCode: function(t) {
                            var e;
                            if (t)
                                if (2 > _)
                                    for (e in t) v[e] = [v[e], t[e]];
                                else w.always(t[w.status]);
                            return this
                        },
                        abort: function(t) {
                            var e = t || x;
                            return c && c.abort(e), n(0, e), this
                        }
                    };
                if (m.promise(w).complete = g.add, w.success = w.done, w.error = w.fail, d.url = ((t || d.url || Se) + "").replace(Ne, "").replace(Re, Ie[1] + "//"), d.type = i.method || i.type || d.method || d.type, d.dataTypes = rt.trim(d.dataType || "*").toLowerCase().match(ht) || [""], null == d.crossDomain && (s = Fe.exec(d.url.toLowerCase()), d.crossDomain = !(!s || s[1] === Ie[1] && s[2] === Ie[2] && (s[3] || ("http:" === s[1] ? 80 : 443)) == (Ie[3] || ("http:" === Ie[1] ? 80 : 443)))), d.data && d.processData && "string" != typeof d.data && (d.data = rt.param(d.data, d.traditional)), P(Be, d, i, w), 2 === _) return w;
                (h = d.global) && 0 == rt.active++ && rt.event.trigger("ajaxStart"), d.type = d.type.toUpperCase(), d.hasContent = !He.test(d.type), a = d.url, d.hasContent || (d.data && (a = d.url += (Pe.test(a) ? "&" : "?") + d.data, delete d.data), !1 === d.cache && (d.url = Me.test(a) ? a.replace(Me, "$1_=" + Ee++) : a + (Pe.test(a) ? "&" : "?") + "_=" + Ee++)), d.ifModified && (rt.lastModified[a] && w.setRequestHeader("If-Modified-Since", rt.lastModified[a]), rt.etag[a] && w.setRequestHeader("If-None-Match", rt.etag[a])), (d.data && d.hasContent && !1 !== d.contentType || i.contentType) && w.setRequestHeader("Content-Type", d.contentType), w.setRequestHeader("Accept", d.dataTypes[0] && d.accepts[d.dataTypes[0]] ? d.accepts[d.dataTypes[0]] + ("*" !== d.dataTypes[0] ? ", " + $e + "; q=0.01" : "") : d.accepts["*"]);
                for (o in d.headers) w.setRequestHeader(o, d.headers[o]);
                if (d.beforeSend && (!1 === d.beforeSend.call(p, w, d) || 2 === _)) return w.abort();
                x = "abort";
                for (o in {
                        success: 1,
                        error: 1,
                        complete: 1
                    }) w[o](d[o]);
                if (c = P(ze, d, i, w)) {
                    w.readyState = 1, h && f.trigger("ajaxSend", [w, d]), d.async && d.timeout > 0 && (l = setTimeout(function() {
                        w.abort("timeout")
                    }, d.timeout));
                    try {
                        _ = 1, c.send(y, n)
                    } catch (t) {
                        if (!(2 > _)) throw t;
                        n(-1, t)
                    }
                } else n(-1, "No Transport");
                return w
            },
            getScript: function(t, i) {
                return rt.get(t, e, i, "script")
            },
            getJSON: function(t, e, i) {
                return rt.get(t, e, i, "json")
            }
        }), rt.ajaxSetup({
            accepts: {
                script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
            },
            contents: {
                script: /(?:java|ecma)script/
            },
            converters: {
                "text script": function(t) {
                    return rt.globalEval(t), t
                }
            }
        }), rt.ajaxPrefilter("script", function(t) {
            t.cache === e && (t.cache = !1), t.crossDomain && (t.type = "GET", t.global = !1)
        }), rt.ajaxTransport("script", function(t) {
            if (t.crossDomain) {
                var i, n = G.head || rt("head")[0] || G.documentElement;
                return {
                    send: function(e, s) {
                        (i = G.createElement("script")).async = !0, t.scriptCharset && (i.charset = t.scriptCharset), i.src = t.url, i.onload = i.onreadystatechange = function(t, e) {
                            (e || !i.readyState || /loaded|complete/.test(i.readyState)) && (i.onload = i.onreadystatechange = null, i.parentNode && i.parentNode.removeChild(i), i = null, e || s(200, "success"))
                        }, n.insertBefore(i, n.firstChild)
                    },
                    abort: function() {
                        i && i.onload(e, !0)
                    }
                }
            }
        });
        var We = [],
            qe = /(=)\?(?=&|$)|\?\?/;
        rt.ajaxSetup({
            jsonp: "callback",
            jsonpCallback: function() {
                var t = We.pop() || rt.expando + "_" + Ee++;
                return this[t] = !0, t
            }
        }), rt.ajaxPrefilter("json jsonp", function(i, n, s) {
            var o, a, r, l = !1 !== i.jsonp && (qe.test(i.url) ? "url" : "string" == typeof i.data && !(i.contentType || "").indexOf("application/x-www-form-urlencoded") && qe.test(i.data) && "data");
            return l || "jsonp" === i.dataTypes[0] ? (o = i.jsonpCallback = rt.isFunction(i.jsonpCallback) ? i.jsonpCallback() : i.jsonpCallback, l ? i[l] = i[l].replace(qe, "$1" + o) : !1 !== i.jsonp && (i.url += (Pe.test(i.url) ? "&" : "?") + i.jsonp + "=" + o), i.converters["script json"] = function() {
                return r || rt.error(o + " was not called"), r[0]
            }, i.dataTypes[0] = "json", a = t[o], t[o] = function() {
                r = arguments
            }, s.always(function() {
                t[o] = a, i[o] && (i.jsonpCallback = n.jsonpCallback, We.push(o)), r && rt.isFunction(a) && a(r[0]), r = a = e
            }), "script") : e
        });
        var Ue, Ye, Ge = 0,
            Ke = t.ActiveXObject && function() {
                var t;
                for (t in Ue) Ue[t](e, !0)
            };
        rt.ajaxSettings.xhr = t.ActiveXObject ? function() {
            return !this.isLocal && j() || H()
        } : j, Ye = rt.ajaxSettings.xhr(), rt.support.cors = !!Ye && "withCredentials" in Ye, (Ye = rt.support.ajax = !!Ye) && rt.ajaxTransport(function(i) {
            if (!i.crossDomain || rt.support.cors) {
                var n;
                return {
                    send: function(s, o) {
                        var a, r, l = i.xhr();
                        if (i.username ? l.open(i.type, i.url, i.async, i.username, i.password) : l.open(i.type, i.url, i.async), i.xhrFields)
                            for (r in i.xhrFields) l[r] = i.xhrFields[r];
                        i.mimeType && l.overrideMimeType && l.overrideMimeType(i.mimeType), i.crossDomain || s["X-Requested-With"] || (s["X-Requested-With"] = "XMLHttpRequest");
                        try {
                            for (r in s) l.setRequestHeader(r, s[r])
                        } catch (t) {}
                        l.send(i.hasContent && i.data || null), n = function(t, s) {
                            var r, h, c, u;
                            try {
                                if (n && (s || 4 === l.readyState))
                                    if (n = e, a && (l.onreadystatechange = rt.noop, Ke && delete Ue[a]), s) 4 !== l.readyState && l.abort();
                                    else {
                                        u = {}, r = l.status, h = l.getAllResponseHeaders(), "string" == typeof l.responseText && (u.text = l.responseText);
                                        try {
                                            c = l.statusText
                                        } catch (t) {
                                            c = ""
                                        }
                                        r || !i.isLocal || i.crossDomain ? 1223 === r && (r = 204) : r = u.text ? 200 : 404
                                    }
                            } catch (t) {
                                s || o(-1, t)
                            }
                            u && o(r, c, u, h)
                        }, i.async ? 4 === l.readyState ? setTimeout(n) : (a = ++Ge, Ke && (Ue || (Ue = {}, rt(t).unload(Ke)), Ue[a] = n), l.onreadystatechange = n) : n()
                    },
                    abort: function() {
                        n && n(e, !0)
                    }
                }
            }
        });
        var Ve, Qe, Xe = /^(?:toggle|show|hide)$/,
            Ze = RegExp("^(?:([+-])=|)(" + lt + ")([a-z%]*)$", "i"),
            Je = /queueHooks$/,
            ti = [function(t, e, i) {
                var n, s, o, a, r, l, h, c, u, d = this,
                    p = t.style,
                    f = {},
                    m = [],
                    g = t.nodeType && w(t);
                i.queue || (null == (c = rt._queueHooks(t, "fx")).unqueued && (c.unqueued = 0, u = c.empty.fire, c.empty.fire = function() {
                    c.unqueued || u()
                }), c.unqueued++, d.always(function() {
                    d.always(function() {
                        c.unqueued--, rt.queue(t, "fx").length || c.empty.fire()
                    })
                })), 1 === t.nodeType && ("height" in e || "width" in e) && (i.overflow = [p.overflow, p.overflowX, p.overflowY], "inline" === rt.css(t, "display") && "none" === rt.css(t, "float") && (rt.support.inlineBlockNeedsLayout && "inline" !== T(t.nodeName) ? p.zoom = 1 : p.display = "inline-block")), i.overflow && (p.overflow = "hidden", rt.support.shrinkWrapBlocks || d.always(function() {
                    p.overflow = i.overflow[0], p.overflowX = i.overflow[1], p.overflowY = i.overflow[2]
                }));
                for (s in e)
                    if (a = e[s], Xe.exec(a)) {
                        if (delete e[s], l = l || "toggle" === a, a === (g ? "hide" : "show")) continue;
                        m.push(s)
                    }
                if (o = m.length) {
                    "hidden" in (r = rt._data(t, "fxshow") || rt._data(t, "fxshow", {})) && (g = r.hidden), l && (r.hidden = !g), g ? rt(t).show() : d.done(function() {
                        rt(t).hide()
                    }), d.done(function() {
                        var e;
                        rt._removeData(t, "fxshow");
                        for (e in f) rt.style(t, e, f[e])
                    });
                    for (s = 0; o > s; s++) n = m[s], h = d.createTween(n, g ? r[n] : 0), f[n] = r[n] || rt.style(t, n), n in r || (r[n] = h.start, g && (h.end = h.start, h.start = "width" === n || "height" === n ? 1 : 0))
                }
            }],
            ei = {
                "*": [function(t, e) {
                    var i, n, s = this.createTween(t, e),
                        o = Ze.exec(e),
                        a = s.cur(),
                        r = +a || 0,
                        l = 1,
                        h = 20;
                    if (o) {
                        if (i = +o[2], "px" !== (n = o[3] || (rt.cssNumber[t] ? "" : "px")) && r) {
                            r = rt.css(s.elem, t, !0) || i || 1;
                            do {
                                l = l || ".5", r /= l, rt.style(s.elem, t, r + n)
                            } while (l !== (l = s.cur() / a) && 1 !== l && --h)
                        }
                        s.unit = n, s.start = r, s.end = o[1] ? r + (o[1] + 1) * i : i
                    }
                    return s
                }]
            };
        rt.Animation = rt.extend(L, {
            tweener: function(t, e) {
                rt.isFunction(t) ? (e = t, t = ["*"]) : t = t.split(" ");
                for (var i, n = 0, s = t.length; s > n; n++) i = t[n], ei[i] = ei[i] || [], ei[i].unshift(e)
            },
            prefilter: function(t, e) {
                e ? ti.unshift(t) : ti.push(t)
            }
        }), rt.Tween = z, z.prototype = {
            constructor: z,
            init: function(t, e, i, n, s, o) {
                this.elem = t, this.prop = i, this.easing = s || "swing", this.options = e, this.start = this.now = this.cur(), this.end = n, this.unit = o || (rt.cssNumber[i] ? "" : "px")
            },
            cur: function() {
                var t = z.propHooks[this.prop];
                return t && t.get ? t.get(this) : z.propHooks._default.get(this)
            },
            run: function(t) {
                var e, i = z.propHooks[this.prop];
                return this.pos = e = this.options.duration ? rt.easing[this.easing](t, this.options.duration * t, 0, 1, this.options.duration) : t, this.now = (this.end - this.start) * e + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), i && i.set ? i.set(this) : z.propHooks._default.set(this), this
            }
        }, z.prototype.init.prototype = z.prototype, z.propHooks = {
            _default: {
                get: function(t) {
                    var e;
                    return null == t.elem[t.prop] || t.elem.style && null != t.elem.style[t.prop] ? (e = rt.css(t.elem, t.prop, "")) && "auto" !== e ? e : 0 : t.elem[t.prop]
                },
                set: function(t) {
                    rt.fx.step[t.prop] ? rt.fx.step[t.prop](t) : t.elem.style && (null != t.elem.style[rt.cssProps[t.prop]] || rt.cssHooks[t.prop]) ? rt.style(t.elem, t.prop, t.now + t.unit) : t.elem[t.prop] = t.now
                }
            }
        }, z.propHooks.scrollTop = z.propHooks.scrollLeft = {
            set: function(t) {
                t.elem.nodeType && t.elem.parentNode && (t.elem[t.prop] = t.now)
            }
        }, rt.each(["toggle", "show", "hide"], function(t, e) {
            var i = rt.fn[e];
            rt.fn[e] = function(t, n, s) {
                return null == t || "boolean" == typeof t ? i.apply(this, arguments) : this.animate($(e, !0), t, n, s)
            }
        }), rt.fn.extend({
            fadeTo: function(t, e, i, n) {
                return this.filter(w).css("opacity", 0).show().end().animate({
                    opacity: e
                }, t, i, n)
            },
            animate: function(t, e, i, n) {
                var s = rt.isEmptyObject(t),
                    o = rt.speed(e, i, n),
                    a = function() {
                        var e = L(this, rt.extend({}, t), o);
                        a.finish = function() {
                            e.stop(!0)
                        }, (s || rt._data(this, "finish")) && e.stop(!0)
                    };
                return a.finish = a, s || !1 === o.queue ? this.each(a) : this.queue(o.queue, a)
            },
            stop: function(t, i, n) {
                var s = function(t) {
                    var e = t.stop;
                    delete t.stop, e(n)
                };
                return "string" != typeof t && (n = i, i = t, t = e), i && !1 !== t && this.queue(t || "fx", []), this.each(function() {
                    var e = !0,
                        i = null != t && t + "queueHooks",
                        o = rt.timers,
                        a = rt._data(this);
                    if (i) a[i] && a[i].stop && s(a[i]);
                    else
                        for (i in a) a[i] && a[i].stop && Je.test(i) && s(a[i]);
                    for (i = o.length; i--;) o[i].elem !== this || null != t && o[i].queue !== t || (o[i].anim.stop(n), e = !1, o.splice(i, 1));
                    (e || !n) && rt.dequeue(this, t)
                })
            },
            finish: function(t) {
                return !1 !== t && (t = t || "fx"), this.each(function() {
                    var e, i = rt._data(this),
                        n = i[t + "queue"],
                        s = i[t + "queueHooks"],
                        o = rt.timers,
                        a = n ? n.length : 0;
                    for (i.finish = !0, rt.queue(this, t, []), s && s.cur && s.cur.finish && s.cur.finish.call(this), e = o.length; e--;) o[e].elem === this && o[e].queue === t && (o[e].anim.stop(!0), o.splice(e, 1));
                    for (e = 0; a > e; e++) n[e] && n[e].finish && n[e].finish.call(this);
                    delete i.finish
                })
            }
        }), rt.each({
            slideDown: $("show"),
            slideUp: $("hide"),
            slideToggle: $("toggle"),
            fadeIn: {
                opacity: "show"
            },
            fadeOut: {
                opacity: "hide"
            },
            fadeToggle: {
                opacity: "toggle"
            }
        }, function(t, e) {
            rt.fn[t] = function(t, i, n) {
                return this.animate(e, t, i, n)
            }
        }), rt.speed = function(t, e, i) {
            var n = t && "object" == typeof t ? rt.extend({}, t) : {
                complete: i || !i && e || rt.isFunction(t) && t,
                duration: t,
                easing: i && e || e && !rt.isFunction(e) && e
            };
            return n.duration = rt.fx.off ? 0 : "number" == typeof n.duration ? n.duration : n.duration in rt.fx.speeds ? rt.fx.speeds[n.duration] : rt.fx.speeds._default, (null == n.queue || !0 === n.queue) && (n.queue = "fx"), n.old = n.complete, n.complete = function() {
                rt.isFunction(n.old) && n.old.call(this), n.queue && rt.dequeue(this, n.queue)
            }, n
        }, rt.easing = {
            linear: function(t) {
                return t
            },
            swing: function(t) {
                return .5 - Math.cos(t * Math.PI) / 2
            }
        }, rt.timers = [], rt.fx = z.prototype.init, rt.fx.tick = function() {
            var t, i = rt.timers,
                n = 0;
            for (Ve = rt.now(); i.length > n; n++)(t = i[n])() || i[n] !== t || i.splice(n--, 1);
            i.length || rt.fx.stop(), Ve = e
        }, rt.fx.timer = function(t) {
            t() && rt.timers.push(t) && rt.fx.start()
        }, rt.fx.interval = 13, rt.fx.start = function() {
            Qe || (Qe = setInterval(rt.fx.tick, rt.fx.interval))
        }, rt.fx.stop = function() {
            clearInterval(Qe), Qe = null
        }, rt.fx.speeds = {
            slow: 600,
            fast: 200,
            _default: 400
        }, rt.fx.step = {}, rt.expr && rt.expr.filters && (rt.expr.filters.animated = function(t) {
            return rt.grep(rt.timers, function(e) {
                return t === e.elem
            }).length
        }), rt.fn.offset = function(t) {
            if (arguments.length) return t === e ? this : this.each(function(e) {
                rt.offset.setOffset(this, t, e)
            });
            var i, n, s = {
                    top: 0,
                    left: 0
                },
                o = this[0],
                a = o && o.ownerDocument;
            return a ? (i = a.documentElement, rt.contains(i, o) ? (typeof o.getBoundingClientRect !== Y && (s = o.getBoundingClientRect()), n = W(a), {
                top: s.top + (n.pageYOffset || i.scrollTop) - (i.clientTop || 0),
                left: s.left + (n.pageXOffset || i.scrollLeft) - (i.clientLeft || 0)
            }) : s) : void 0
        }, rt.offset = {
            setOffset: function(t, e, i) {
                var n = rt.css(t, "position");
                "static" === n && (t.style.position = "relative");
                var s, o, a = rt(t),
                    r = a.offset(),
                    l = rt.css(t, "top"),
                    h = rt.css(t, "left"),
                    c = {},
                    u = {};
                ("absolute" === n || "fixed" === n) && rt.inArray("auto", [l, h]) > -1 ? (u = a.position(), s = u.top, o = u.left) : (s = parseFloat(l) || 0, o = parseFloat(h) || 0), rt.isFunction(e) && (e = e.call(t, i, r)), null != e.top && (c.top = e.top - r.top + s), null != e.left && (c.left = e.left - r.left + o), "using" in e ? e.using.call(t, c) : a.css(c)
            }
        }, rt.fn.extend({
            position: function() {
                if (this[0]) {
                    var t, e, i = {
                            top: 0,
                            left: 0
                        },
                        n = this[0];
                    return "fixed" === rt.css(n, "position") ? e = n.getBoundingClientRect() : (t = this.offsetParent(), e = this.offset(), rt.nodeName(t[0], "html") || (i = t.offset()), i.top += rt.css(t[0], "borderTopWidth", !0), i.left += rt.css(t[0], "borderLeftWidth", !0)), {
                        top: e.top - i.top - rt.css(n, "marginTop", !0),
                        left: e.left - i.left - rt.css(n, "marginLeft", !0)
                    }
                }
            },
            offsetParent: function() {
                return this.map(function() {
                    for (var t = this.offsetParent || G.documentElement; t && !rt.nodeName(t, "html") && "static" === rt.css(t, "position");) t = t.offsetParent;
                    return t || G.documentElement
                })
            }
        }), rt.each({
            scrollLeft: "pageXOffset",
            scrollTop: "pageYOffset"
        }, function(t, i) {
            var n = /Y/.test(i);
            rt.fn[t] = function(s) {
                return rt.access(this, function(t, s, o) {
                    var a = W(t);
                    return o === e ? a ? i in a ? a[i] : a.document.documentElement[s] : t[s] : (a ? a.scrollTo(n ? rt(a).scrollLeft() : o, n ? o : rt(a).scrollTop()) : t[s] = o, e)
                }, t, s, arguments.length, null)
            }
        }), rt.each({
            Height: "height",
            Width: "width"
        }, function(t, i) {
            rt.each({
                padding: "inner" + t,
                content: i,
                "": "outer" + t
            }, function(n, s) {
                rt.fn[s] = function(s, o) {
                    var a = arguments.length && (n || "boolean" != typeof s),
                        r = n || (!0 === s || !0 === o ? "margin" : "border");
                    return rt.access(this, function(i, n, s) {
                        var o;
                        return rt.isWindow(i) ? i.document.documentElement["client" + t] : 9 === i.nodeType ? (o = i.documentElement, Math.max(i.body["scroll" + t], o["scroll" + t], i.body["offset" + t], o["offset" + t], o["client" + t])) : s === e ? rt.css(i, n, r) : rt.style(i, n, s, r)
                    }, i, a ? s : e, a, null)
                }
            })
        }), t.jQuery = t.$ = rt, "function" == typeof define && define.amd && define.amd.jQuery && define("jquery", [], function() {
            return rt
        })
    }(window), function(t) {
        "function" == typeof define && define.amd ? define(["jquery"], t) : t(jQuery)
    }(function(t) {
        function e(e, n) {
            var s, o, a, r = e.nodeName.toLowerCase();
            return "area" === r ? (s = e.parentNode, o = s.name, !(!e.href || !o || "map" !== s.nodeName.toLowerCase()) && (!!(a = t("img[usemap='#" + o + "']")[0]) && i(a))) : (/^(input|select|textarea|button|object)$/.test(r) ? !e.disabled : "a" === r ? e.href || n : n) && i(e)
        }

        function i(e) {
            return t.expr.filters.visible(e) && !t(e).parents().addBack().filter(function() {
                return "hidden" === t.css(this, "visibility")
            }).length
        }

        function n(t) {
            for (var e, i; t.length && t[0] !== document;) {
                if (("absolute" === (e = t.css("position")) || "relative" === e || "fixed" === e) && (i = parseInt(t.css("zIndex"), 10), !isNaN(i) && 0 !== i)) return i;
                t = t.parent()
            }
            return 0
        }

        function s() {
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
            for (var n in i) null == i[n] && (e[n] = i[n]);
            return e
        }

        function l(t) {
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
                    n = "absolute" === i,
                    s = e ? /(auto|scroll|hidden)/ : /(auto|scroll)/,
                    o = this.parents().filter(function() {
                        var e = t(this);
                        return (!n || "static" !== e.css("position")) && s.test(e.css("overflow") + e.css("overflow-y") + e.css("overflow-x"))
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
            }) : function(e, i, n) {
                return !!t.data(e, n[3])
            },
            focusable: function(i) {
                return e(i, !isNaN(t.attr(i, "tabindex")))
            },
            tabbable: function(i) {
                var n = t.attr(i, "tabindex"),
                    s = isNaN(n);
                return (s || n >= 0) && e(i, !s)
            }
        }), t("<a>").outerWidth(1).jquery || t.each(["Width", "Height"], function(e, i) {
            function n(e, i, n, o) {
                return t.each(s, function() {
                    i -= parseFloat(t.css(e, "padding" + this)) || 0, n && (i -= parseFloat(t.css(e, "border" + this + "Width")) || 0), o && (i -= parseFloat(t.css(e, "margin" + this)) || 0)
                }), i
            }
            var s = "Width" === i ? ["Left", "Right"] : ["Top", "Bottom"],
                o = i.toLowerCase(),
                a = {
                    innerWidth: t.fn.innerWidth,
                    innerHeight: t.fn.innerHeight,
                    outerWidth: t.fn.outerWidth,
                    outerHeight: t.fn.outerHeight
                };
            t.fn["inner" + i] = function(e) {
                return void 0 === e ? a["inner" + i].call(this) : this.each(function() {
                    t(this).css(o, n(this, e) + "px")
                })
            }, t.fn["outer" + i] = function(e, s) {
                return "number" != typeof e ? a["outer" + i].call(this, e) : this.each(function() {
                    t(this).css(o, n(this, e, !0, s) + "px")
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
                return function(i, n) {
                    return "number" == typeof i ? this.each(function() {
                        var e = this;
                        setTimeout(function() {
                            t(e).focus(), n && n.call(e)
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
                    for (var i, n, s = t(this[0]); s.length && s[0] !== document;) {
                        if (("absolute" === (i = s.css("position")) || "relative" === i || "fixed" === i) && (n = parseInt(s.css("zIndex"), 10), !isNaN(n) && 0 !== n)) return n;
                        s = s.parent()
                    }
                return 0
            }
        }), t.ui.plugin = {
            add: function(e, i, n) {
                var s, o = t.ui[e].prototype;
                for (s in n) o.plugins[s] = o.plugins[s] || [], o.plugins[s].push([i, n[s]])
            },
            call: function(t, e, i, n) {
                var s, o = t.plugins[e];
                if (o && (n || t.element[0].parentNode && 11 !== t.element[0].parentNode.nodeType))
                    for (s = 0; s < o.length; s++) t.options[o[s][0]] && o[s][1].apply(t.element, i)
            }
        };
        var h = 0,
            c = Array.prototype.slice;
        t.cleanData = function(e) {
            return function(i) {
                var n, s, o;
                for (o = 0; null != (s = i[o]); o++) try {
                    (n = t._data(s, "events")) && n.remove && t(s).triggerHandler("remove")
                } catch (t) {}
                e(i)
            }
        }(t.cleanData), t.widget = function(e, i, n) {
            var s, o, a, r, l = {},
                h = e.split(".")[0];
            return e = e.split(".")[1], s = h + "-" + e, n || (n = i, i = t.Widget), t.expr[":"][s.toLowerCase()] = function(e) {
                return !!t.data(e, s)
            }, t[h] = t[h] || {}, o = t[h][e], a = t[h][e] = function(t, e) {
                if (!this._createWidget) return new a(t, e);
                arguments.length && this._createWidget(t, e)
            }, t.extend(a, o, {
                version: n.version,
                _proto: t.extend({}, n),
                _childConstructors: []
            }), r = new i, r.options = t.widget.extend({}, r.options), t.each(n, function(e, n) {
                t.isFunction(n) ? l[e] = function() {
                    var t = function() {
                            return i.prototype[e].apply(this, arguments)
                        },
                        s = function(t) {
                            return i.prototype[e].apply(this, t)
                        };
                    return function() {
                        var e, i = this._super,
                            o = this._superApply;
                        return this._super = t, this._superApply = s, e = n.apply(this, arguments), this._super = i, this._superApply = o, e
                    }
                }() : l[e] = n
            }), a.prototype = t.widget.extend(r, {
                widgetEventPrefix: o ? r.widgetEventPrefix || e : e
            }, l, {
                constructor: a,
                namespace: h,
                widgetName: e,
                widgetFullName: s
            }), o ? (t.each(o._childConstructors, function(e, i) {
                var n = i.prototype;
                t.widget(n.namespace + "." + n.widgetName, a, i._proto)
            }), delete o._childConstructors) : i._childConstructors.push(a), t.widget.bridge(e, a), a
        }, t.widget.extend = function(e) {
            for (var i, n, s = c.call(arguments, 1), o = 0, a = s.length; o < a; o++)
                for (i in s[o]) n = s[o][i], s[o].hasOwnProperty(i) && void 0 !== n && (t.isPlainObject(n) ? e[i] = t.isPlainObject(e[i]) ? t.widget.extend({}, e[i], n) : t.widget.extend({}, n) : e[i] = n);
            return e
        }, t.widget.bridge = function(e, i) {
            var n = i.prototype.widgetFullName || e;
            t.fn[e] = function(s) {
                var o = "string" == typeof s,
                    a = c.call(arguments, 1),
                    r = this;
                return o ? this.each(function() {
                    var i, o = t.data(this, n);
                    return "instance" === s ? (r = o, !1) : o ? t.isFunction(o[s]) && "_" !== s.charAt(0) ? (i = o[s].apply(o, a)) !== o && void 0 !== i ? (r = i && i.jquery ? r.pushStack(i.get()) : i, !1) : void 0 : t.error("no such method '" + s + "' for " + e + " widget instance") : t.error("cannot call methods on " + e + " prior to initialization; attempted to call method '" + s + "'")
                }) : (a.length && (s = t.widget.extend.apply(null, [s].concat(a))), this.each(function() {
                    var e = t.data(this, n);
                    e ? (e.option(s || {}), e._init && e._init()) : t.data(this, n, new i(s, this))
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
                i = t(i || this.defaultElement || this)[0], this.element = t(i), this.uuid = h++, this.eventNamespace = "." + this.widgetName + this.uuid, this.bindings = t(), this.hoverable = t(), this.focusable = t(), i !== this && (t.data(i, this.widgetFullName, this), this._on(!0, this.element, {
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
                var n, s, o, a = e;
                if (0 === arguments.length) return t.widget.extend({}, this.options);
                if ("string" == typeof e)
                    if (a = {}, n = e.split("."), e = n.shift(), n.length) {
                        for (s = a[e] = t.widget.extend({}, this.options[e]), o = 0; o < n.length - 1; o++) s[n[o]] = s[n[o]] || {}, s = s[n[o]];
                        if (e = n.pop(), 1 === arguments.length) return void 0 === s[e] ? null : s[e];
                        s[e] = i
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
            _on: function(e, i, n) {
                var s, o = this;
                "boolean" != typeof e && (n = i, i = e, e = !1), n ? (i = s = t(i), this.bindings = this.bindings.add(i)) : (n = i, i = this.element, s = this.widget()), t.each(n, function(n, a) {
                    function r() {
                        if (e || !0 !== o.options.disabled && !t(this).hasClass("ui-state-disabled")) return ("string" == typeof a ? o[a] : a).apply(o, arguments)
                    }
                    "string" != typeof a && (r.guid = a.guid = a.guid || r.guid || t.guid++);
                    var l = n.match(/^([\w:-]*)\s*(.*)$/),
                        h = l[1] + o.eventNamespace,
                        c = l[2];
                    c ? s.delegate(c, h, r) : i.bind(h, r)
                })
            },
            _off: function(e, i) {
                i = (i || "").split(" ").join(this.eventNamespace + " ") + this.eventNamespace, e.unbind(i).undelegate(i), this.bindings = t(this.bindings.not(e).get()), this.focusable = t(this.focusable.not(e).get()), this.hoverable = t(this.hoverable.not(e).get())
            },
            _delay: function(t, e) {
                var i = this;
                return setTimeout(function() {
                    return ("string" == typeof t ? i[t] : t).apply(i, arguments)
                }, e || 0)
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
            _trigger: function(e, i, n) {
                var s, o, a = this.options[e];
                if (n = n || {}, i = t.Event(i), i.type = (e === this.widgetEventPrefix ? e : this.widgetEventPrefix + e).toLowerCase(), i.target = this.element[0], o = i.originalEvent)
                    for (s in o) s in i || (i[s] = o[s]);
                return this.element.trigger(i, n), !(t.isFunction(a) && !1 === a.apply(this.element[0], [i].concat(n)) || i.isDefaultPrevented())
            }
        }, t.each({
            show: "fadeIn",
            hide: "fadeOut"
        }, function(e, i) {
            t.Widget.prototype["_" + e] = function(n, s, o) {
                "string" == typeof s && (s = {
                    effect: s
                });
                var a, r = s ? !0 === s || "number" == typeof s ? i : s.effect || i : e;
                "number" == typeof(s = s || {}) && (s = {
                    duration: s
                }), a = !t.isEmptyObject(s), s.complete = o, s.delay && n.delay(s.delay), a && t.effects && t.effects.effect[r] ? n[e](s) : r !== e && n[r] ? n[r](s.duration, s.easing, o) : n.queue(function(i) {
                    t(this)[e](), o && o.call(n[0]), i()
                })
            }
        });
        t.widget;
        var u = !1;
        t(document).mouseup(function() {
            u = !1
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
                    if (!0 === t.data(i.target, e.widgetName + ".preventClickEvent")) return t.removeData(i.target, e.widgetName + ".preventClickEvent"), i.stopImmediatePropagation(), !1
                }), this.started = !1
            },
            _mouseDestroy: function() {
                this.element.unbind("." + this.widgetName), this._mouseMoveDelegate && this.document.unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate)
            },
            _mouseDown: function(e) {
                if (!u) {
                    this._mouseMoved = !1, this._mouseStarted && this._mouseUp(e), this._mouseDownEvent = e;
                    var i = this,
                        n = 1 === e.which,
                        s = !("string" != typeof this.options.cancel || !e.target.nodeName) && t(e.target).closest(this.options.cancel).length;
                    return !(n && !s && this._mouseCapture(e)) || (this.mouseDelayMet = !this.options.delay, this.mouseDelayMet || (this._mouseDelayTimer = setTimeout(function() {
                        i.mouseDelayMet = !0
                    }, this.options.delay)), this._mouseDistanceMet(e) && this._mouseDelayMet(e) && (this._mouseStarted = !1 !== this._mouseStart(e), !this._mouseStarted) ? (e.preventDefault(), !0) : (!0 === t.data(e.target, this.widgetName + ".preventClickEvent") && t.removeData(e.target, this.widgetName + ".preventClickEvent"), this._mouseMoveDelegate = function(t) {
                        return i._mouseMove(t)
                    }, this._mouseUpDelegate = function(t) {
                        return i._mouseUp(t)
                    }, this.document.bind("mousemove." + this.widgetName, this._mouseMoveDelegate).bind("mouseup." + this.widgetName, this._mouseUpDelegate), e.preventDefault(), u = !0, !0))
                }
            },
            _mouseMove: function(e) {
                if (this._mouseMoved) {
                    if (t.ui.ie && (!document.documentMode || document.documentMode < 9) && !e.button) return this._mouseUp(e);
                    if (!e.which) return this._mouseUp(e)
                }
                return (e.which || e.button) && (this._mouseMoved = !0), this._mouseStarted ? (this._mouseDrag(e), e.preventDefault()) : (this._mouseDistanceMet(e) && this._mouseDelayMet(e) && (this._mouseStarted = !1 !== this._mouseStart(this._mouseDownEvent, e), this._mouseStarted ? this._mouseDrag(e) : this._mouseUp(e)), !this._mouseStarted)
            },
            _mouseUp: function(e) {
                return this.document.unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate), this._mouseStarted && (this._mouseStarted = !1, e.target === this._mouseDownEvent.target && t.data(e.target, this.widgetName + ".preventClickEvent", !0), this._mouseStop(e)), u = !1, !1
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

            function n(e) {
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
            var s, o, a = Math.max,
                r = Math.abs,
                l = Math.round,
                h = /left|center|right/,
                c = /top|center|bottom/,
                u = /[\+\-]\d+(\.[\d]+)?%?/,
                d = /^\w+/,
                p = /%$/,
                f = t.fn.position;
            t.position = {
                    scrollbarWidth: function() {
                        if (void 0 !== s) return s;
                        var e, i, n = t("<div style='display:block;position:absolute;width:50px;height:50px;overflow:hidden;'><div style='height:100px;width:auto;'></div></div>"),
                            o = n.children()[0];
                        return t("body").append(n), e = o.offsetWidth, n.css("overflow", "scroll"), i = o.offsetWidth, e === i && (i = n[0].clientWidth), n.remove(), s = e - i
                    },
                    getScrollInfo: function(e) {
                        var i = e.isWindow || e.isDocument ? "" : e.element.css("overflow-x"),
                            n = e.isWindow || e.isDocument ? "" : e.element.css("overflow-y"),
                            s = "scroll" === i || "auto" === i && e.width < e.element[0].scrollWidth;
                        return {
                            width: "scroll" === n || "auto" === n && e.height < e.element[0].scrollHeight ? t.position.scrollbarWidth() : 0,
                            height: s ? t.position.scrollbarWidth() : 0
                        }
                    },
                    getWithinInfo: function(e) {
                        var i = t(e || window),
                            n = t.isWindow(i[0]),
                            s = !!i[0] && 9 === i[0].nodeType;
                        return {
                            element: i,
                            isWindow: n,
                            isDocument: s,
                            offset: i.offset() || {
                                left: 0,
                                top: 0
                            },
                            scrollLeft: i.scrollLeft(),
                            scrollTop: i.scrollTop(),
                            width: n || s ? i.width() : i.outerWidth(),
                            height: n || s ? i.height() : i.outerHeight()
                        }
                    }
                }, t.fn.position = function(s) {
                    if (!s || !s.of) return f.apply(this, arguments);
                    s = t.extend({}, s);
                    var p, m, g, v, y, b, _ = t(s.of),
                        x = t.position.getWithinInfo(s.within),
                        w = t.position.getScrollInfo(x),
                        k = (s.collision || "flip").split(" "),
                        C = {};
                    return b = n(_), _[0].preventDefault && (s.at = "left top"), m = b.width, g = b.height, v = b.offset, y = t.extend({}, v), t.each(["my", "at"], function() {
                        var t, e, i = (s[this] || "").split(" ");
                        1 === i.length && (i = h.test(i[0]) ? i.concat(["center"]) : c.test(i[0]) ? ["center"].concat(i) : ["center", "center"]), i[0] = h.test(i[0]) ? i[0] : "center", i[1] = c.test(i[1]) ? i[1] : "center", t = u.exec(i[0]), e = u.exec(i[1]), C[this] = [t ? t[0] : 0, e ? e[0] : 0], s[this] = [d.exec(i[0])[0], d.exec(i[1])[0]]
                    }), 1 === k.length && (k[1] = k[0]), "right" === s.at[0] ? y.left += m : "center" === s.at[0] && (y.left += m / 2), "bottom" === s.at[1] ? y.top += g : "center" === s.at[1] && (y.top += g / 2), p = e(C.at, m, g), y.left += p[0], y.top += p[1], this.each(function() {
                        var n, h, c = t(this),
                            u = c.outerWidth(),
                            d = c.outerHeight(),
                            f = i(this, "marginLeft"),
                            b = i(this, "marginTop"),
                            D = u + f + i(this, "marginRight") + w.width,
                            A = d + b + i(this, "marginBottom") + w.height,
                            T = t.extend({}, y),
                            I = e(C.my, c.outerWidth(), c.outerHeight());
                        "right" === s.my[0] ? T.left -= u : "center" === s.my[0] && (T.left -= u / 2), "bottom" === s.my[1] ? T.top -= d : "center" === s.my[1] && (T.top -= d / 2), T.left += I[0], T.top += I[1], o || (T.left = l(T.left), T.top = l(T.top)), n = {
                            marginLeft: f,
                            marginTop: b
                        }, t.each(["left", "top"], function(e, i) {
                            t.ui.position[k[e]] && t.ui.position[k[e]][i](T, {
                                targetWidth: m,
                                targetHeight: g,
                                elemWidth: u,
                                elemHeight: d,
                                collisionPosition: n,
                                collisionWidth: D,
                                collisionHeight: A,
                                offset: [p[0] + I[0], p[1] + I[1]],
                                my: s.my,
                                at: s.at,
                                within: x,
                                elem: c
                            })
                        }), s.using && (h = function(t) {
                            var e = v.left - T.left,
                                i = e + m - u,
                                n = v.top - T.top,
                                o = n + g - d,
                                l = {
                                    target: {
                                        element: _,
                                        left: v.left,
                                        top: v.top,
                                        width: m,
                                        height: g
                                    },
                                    element: {
                                        element: c,
                                        left: T.left,
                                        top: T.top,
                                        width: u,
                                        height: d
                                    },
                                    horizontal: i < 0 ? "left" : e > 0 ? "right" : "center",
                                    vertical: o < 0 ? "top" : n > 0 ? "bottom" : "middle"
                                };
                            m < u && r(e + i) < m && (l.horizontal = "center"), g < d && r(n + o) < g && (l.vertical = "middle"), a(r(e), r(i)) > a(r(n), r(o)) ? l.important = "horizontal" : l.important = "vertical", s.using.call(this, t, l)
                        }), c.offset(t.extend(T, {
                            using: h
                        }))
                    })
                }, t.ui.position = {
                    fit: {
                        left: function(t, e) {
                            var i, n = e.within,
                                s = n.isWindow ? n.scrollLeft : n.offset.left,
                                o = n.width,
                                r = t.left - e.collisionPosition.marginLeft,
                                l = s - r,
                                h = r + e.collisionWidth - o - s;
                            e.collisionWidth > o ? l > 0 && h <= 0 ? (i = t.left + l + e.collisionWidth - o - s, t.left += l - i) : t.left = h > 0 && l <= 0 ? s : l > h ? s + o - e.collisionWidth : s : l > 0 ? t.left += l : h > 0 ? t.left -= h : t.left = a(t.left - r, t.left)
                        },
                        top: function(t, e) {
                            var i, n = e.within,
                                s = n.isWindow ? n.scrollTop : n.offset.top,
                                o = e.within.height,
                                r = t.top - e.collisionPosition.marginTop,
                                l = s - r,
                                h = r + e.collisionHeight - o - s;
                            e.collisionHeight > o ? l > 0 && h <= 0 ? (i = t.top + l + e.collisionHeight - o - s, t.top += l - i) : t.top = h > 0 && l <= 0 ? s : l > h ? s + o - e.collisionHeight : s : l > 0 ? t.top += l : h > 0 ? t.top -= h : t.top = a(t.top - r, t.top)
                        }
                    },
                    flip: {
                        left: function(t, e) {
                            var i, n, s = e.within,
                                o = s.offset.left + s.scrollLeft,
                                a = s.width,
                                l = s.isWindow ? s.scrollLeft : s.offset.left,
                                h = t.left - e.collisionPosition.marginLeft,
                                c = h - l,
                                u = h + e.collisionWidth - a - l,
                                d = "left" === e.my[0] ? -e.elemWidth : "right" === e.my[0] ? e.elemWidth : 0,
                                p = "left" === e.at[0] ? e.targetWidth : "right" === e.at[0] ? -e.targetWidth : 0,
                                f = -2 * e.offset[0];
                            c < 0 ? ((i = t.left + d + p + f + e.collisionWidth - a - o) < 0 || i < r(c)) && (t.left += d + p + f) : u > 0 && ((n = t.left - e.collisionPosition.marginLeft + d + p + f - l) > 0 || r(n) < u) && (t.left += d + p + f)
                        },
                        top: function(t, e) {
                            var i, n, s = e.within,
                                o = s.offset.top + s.scrollTop,
                                a = s.height,
                                l = s.isWindow ? s.scrollTop : s.offset.top,
                                h = t.top - e.collisionPosition.marginTop,
                                c = h - l,
                                u = h + e.collisionHeight - a - l,
                                d = "top" === e.my[1] ? -e.elemHeight : "bottom" === e.my[1] ? e.elemHeight : 0,
                                p = "top" === e.at[1] ? e.targetHeight : "bottom" === e.at[1] ? -e.targetHeight : 0,
                                f = -2 * e.offset[1];
                            c < 0 ? ((n = t.top + d + p + f + e.collisionHeight - a - o) < 0 || n < r(c)) && (t.top += d + p + f) : u > 0 && ((i = t.top - e.collisionPosition.marginTop + d + p + f - l) > 0 || r(i) < u) && (t.top += d + p + f)
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
                    var e, i, n, s, a, r = document.getElementsByTagName("body")[0],
                        l = document.createElement("div");
                    e = document.createElement(r ? "div" : "body"), n = {
                        visibility: "hidden",
                        width: 0,
                        height: 0,
                        border: 0,
                        margin: 0,
                        background: "none"
                    }, r && t.extend(n, {
                        position: "absolute",
                        left: "-1000px",
                        top: "-1000px"
                    });
                    for (a in n) e.style[a] = n[a];
                    e.appendChild(l), (i = r || document.documentElement).insertBefore(e, i.firstChild), l.style.cssText = "position: absolute; left: 10.7432222px;", s = t(l).offset().left, o = s > 10 && s < 11, e.innerHTML = "", i.removeChild(e)
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
                this.prevShow = this.prevHide = t(), this.element.addClass("ui-accordion ui-widget ui-helper-reset").attr("role", "tablist"), e.collapsible || !1 !== e.active && null != e.active || (e.active = 0), this._processPanels(), e.active < 0 && (e.active += this.headers.length), this._refresh()
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
                "active" !== t ? ("event" === t && (this.options.event && this._off(this.headers, this.options.event), this._setupEvents(e)), this._super(t, e), "collapsible" !== t || e || !1 !== this.options.active || this._activate(0), "icons" === t && (this._destroyIcons(), e && this._createIcons()), "disabled" === t && (this.element.toggleClass("ui-state-disabled", !!e).attr("aria-disabled", e), this.headers.add(this.headers.next()).toggleClass("ui-state-disabled", !!e))) : this._activate(e)
            },
            _keydown: function(e) {
                if (!e.altKey && !e.ctrlKey) {
                    var i = t.ui.keyCode,
                        n = this.headers.length,
                        s = this.headers.index(e.target),
                        o = !1;
                    switch (e.keyCode) {
                        case i.RIGHT:
                        case i.DOWN:
                            o = this.headers[(s + 1) % n];
                            break;
                        case i.LEFT:
                        case i.UP:
                            o = this.headers[(s - 1 + n) % n];
                            break;
                        case i.SPACE:
                        case i.ENTER:
                            this._eventHandler(e);
                            break;
                        case i.HOME:
                            o = this.headers[0];
                            break;
                        case i.END:
                            o = this.headers[n - 1]
                    }
                    o && (t(e.target).attr("tabIndex", -1), t(o).attr("tabIndex", 0), o.focus(), e.preventDefault())
                }
            },
            _panelKeyDown: function(e) {
                e.keyCode === t.ui.keyCode.UP && e.ctrlKey && t(e.currentTarget).prev().focus()
            },
            refresh: function() {
                var e = this.options;
                this._processPanels(), !1 === e.active && !0 === e.collapsible || !this.headers.length ? (e.active = !1, this.active = t()) : !1 === e.active ? this._activate(0) : this.active.length && !t.contains(this.element[0], this.active[0]) ? this.headers.length === this.headers.find(".ui-state-disabled").length ? (e.active = !1, this.active = t()) : this._activate(Math.max(0, e.active - 1)) : e.active = this.headers.index(this.active), this._destroyIcons(), this._refresh()
            },
            _processPanels: function() {
                var t = this.headers,
                    e = this.panels;
                this.headers = this.element.find(this.options.header).addClass("ui-accordion-header ui-state-default ui-corner-all"), this.panels = this.headers.next().addClass("ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom").filter(":not(.ui-accordion-content-active)").hide(), e && (this._off(t.not(this.headers)), this._off(e.not(this.panels)))
            },
            _refresh: function() {
                var e, i = this.options,
                    n = i.heightStyle,
                    s = this.element.parent();
                this.active = this._findActive(i.active).addClass("ui-accordion-header-active ui-state-active ui-corner-top").removeClass("ui-corner-all"), this.active.next().addClass("ui-accordion-content-active").show(), this.headers.attr("role", "tab").each(function() {
                    var e = t(this),
                        i = e.uniqueId().attr("id"),
                        n = e.next(),
                        s = n.uniqueId().attr("id");
                    e.attr("aria-controls", s), n.attr("aria-labelledby", i)
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
                }) : this.headers.eq(0).attr("tabIndex", 0), this._createIcons(), this._setupEvents(i.event), "fill" === n ? (e = s.height(), this.element.siblings(":visible").each(function() {
                    var i = t(this),
                        n = i.css("position");
                    "absolute" !== n && "fixed" !== n && (e -= i.outerHeight(!0))
                }), this.headers.each(function() {
                    e -= t(this).outerHeight(!0)
                }), this.headers.next().each(function() {
                    t(this).height(Math.max(0, e - t(this).innerHeight() + t(this).height()))
                }).css("overflow", "auto")) : "auto" === n && (e = 0, this.headers.next().each(function() {
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
                    n = this.active,
                    s = t(e.currentTarget),
                    o = s[0] === n[0],
                    a = o && i.collapsible,
                    r = a ? t() : s.next(),
                    l = {
                        oldHeader: n,
                        oldPanel: n.next(),
                        newHeader: a ? t() : s,
                        newPanel: r
                    };
                e.preventDefault(), o && !i.collapsible || !1 === this._trigger("beforeActivate", e, l) || (i.active = !a && this.headers.index(s), this.active = o ? t() : s, this._toggle(l), n.removeClass("ui-accordion-header-active ui-state-active"), i.icons && n.children(".ui-accordion-header-icon").removeClass(i.icons.activeHeader).addClass(i.icons.header), o || (s.removeClass("ui-corner-all").addClass("ui-accordion-header-active ui-state-active ui-corner-top"), i.icons && s.children(".ui-accordion-header-icon").removeClass(i.icons.header).addClass(i.icons.activeHeader), s.next().addClass("ui-accordion-content-active")))
            },
            _toggle: function(e) {
                var i = e.newPanel,
                    n = this.prevShow.length ? this.prevShow : e.oldPanel;
                this.prevShow.add(this.prevHide).stop(!0, !0), this.prevShow = i, this.prevHide = n, this.options.animate ? this._animate(i, n, e) : (n.hide(), i.show(), this._toggleComplete(e)), n.attr({
                    "aria-hidden": "true"
                }), n.prev().attr({
                    "aria-selected": "false",
                    "aria-expanded": "false"
                }), i.length && n.length ? n.prev().attr({
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
                var n, s, o, a = this,
                    r = 0,
                    l = t.css("box-sizing"),
                    h = t.length && (!e.length || t.index() < e.index()),
                    c = this.options.animate || {},
                    u = h && c.down || c,
                    d = function() {
                        a._toggleComplete(i)
                    };
                return "number" == typeof u && (o = u), "string" == typeof u && (s = u), s = s || u.easing || c.easing, o = o || u.duration || c.duration, e.length ? t.length ? (n = t.show().outerHeight(), e.animate(this.hideProps, {
                    duration: o,
                    easing: s,
                    step: function(t, e) {
                        e.now = Math.round(t)
                    }
                }), void t.hide().animate(this.showProps, {
                    duration: o,
                    easing: s,
                    complete: d,
                    step: function(t, i) {
                        i.now = Math.round(t), "height" !== i.prop ? "content-box" === l && (r += i.now) : "content" !== a.options.heightStyle && (i.now = Math.round(n - e.outerHeight() - r), r = 0)
                    }
                })) : e.animate(this.hideProps, o, s, d) : t.animate(this.showProps, o, s, d)
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
                var i, n, s, o, a = !0;
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
                        a = !1, n = this.previousFilter || "", s = String.fromCharCode(e.keyCode), o = !1, clearTimeout(this.filterTimer), s === n ? o = !0 : s = n + s, i = this._filterMenuItems(s), (i = o && -1 !== i.index(this.active.next()) ? this.active.nextAll(".ui-menu-item") : i).length || (s = String.fromCharCode(e.keyCode), i = this._filterMenuItems(s)), i.length ? (this.focus(e, i), this.previousFilter = s, this.filterTimer = this._delay(function() {
                            delete this.previousFilter
                        }, 1e3)) : delete this.previousFilter
                }
                a && e.preventDefault()
            },
            _activate: function(t) {
                this.active.is(".ui-state-disabled") || (this.active.is("[aria-haspopup='true']") ? this.expand(t) : this.select(t))
            },
            refresh: function() {
                var e, i = this,
                    n = this.options.icons.submenu,
                    s = this.element.find(this.options.menus);
                this.element.toggleClass("ui-menu-icons", !!this.element.find(".ui-icon").length), s.filter(":not(.ui-menu)").addClass("ui-menu ui-widget ui-widget-content ui-front").hide().attr({
                    role: this.options.role,
                    "aria-hidden": "true",
                    "aria-expanded": "false"
                }).each(function() {
                    var e = t(this),
                        i = e.parent(),
                        s = t("<span>").addClass("ui-menu-icon ui-icon " + n).data("ui-menu-submenu-carat", !0);
                    i.attr("aria-haspopup", "true").prepend(s), e.attr("aria-labelledby", i.attr("id"))
                }), (e = s.add(this.element).find(this.options.items)).not(".ui-menu-item").each(function() {
                    var e = t(this);
                    i._isDivider(e) && e.addClass("ui-widget-content ui-menu-divider")
                }), e.not(".ui-menu-item, .ui-menu-divider").addClass("ui-menu-item").uniqueId().attr({
                    tabIndex: -1,
                    role: this._itemRole()
                }), e.filter(".ui-state-disabled").attr("aria-disabled", "true"), this.active && !t.contains(this.element[0], this.active[0]) && this.blur()
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
                var i, n;
                this.blur(t, t && "focus" === t.type), this._scrollIntoView(e), this.active = e.first(), n = this.active.addClass("ui-state-focus").removeClass("ui-state-active"), this.options.role && this.element.attr("aria-activedescendant", n.attr("id")), this.active.parent().closest(".ui-menu-item").addClass("ui-state-active"), t && "keydown" === t.type ? this._close() : this.timer = this._delay(function() {
                    this._close()
                }, this.delay), (i = e.children(".ui-menu")).length && t && /^mouse/.test(t.type) && this._startOpening(i), this.activeMenu = e.parent(), this._trigger("focus", t, {
                    item: e
                })
            },
            _scrollIntoView: function(e) {
                var i, n, s, o, a, r;
                this._hasScroll() && (i = parseFloat(t.css(this.activeMenu[0], "borderTopWidth")) || 0, n = parseFloat(t.css(this.activeMenu[0], "paddingTop")) || 0, s = e.offset().top - this.activeMenu.offset().top - i - n, o = this.activeMenu.scrollTop(), a = this.activeMenu.height(), r = e.outerHeight(), s < 0 ? this.activeMenu.scrollTop(o + s) : s + r > a && this.activeMenu.scrollTop(o + s - a + r))
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
                    var n = i ? this.element : t(e && e.target).closest(this.element.find(".ui-menu"));
                    n.length || (n = this.element), this._close(n), this.blur(e), this.activeMenu = n
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
                var n;
                this.active && (n = "first" === t || "last" === t ? this.active["first" === t ? "prevAll" : "nextAll"](".ui-menu-item").eq(-1) : this.active[t + "All"](".ui-menu-item").eq(0)), n && n.length && this.active || (n = this.activeMenu.find(this.options.items)[e]()), this.focus(i, n)
            },
            nextPage: function(e) {
                var i, n, s;
                this.active ? this.isLastItem() || (this._hasScroll() ? (n = this.active.offset().top, s = this.element.height(), this.active.nextAll(".ui-menu-item").each(function() {
                    return (i = t(this)).offset().top - n - s < 0
                }), this.focus(e, i)) : this.focus(e, this.activeMenu.find(this.options.items)[this.active ? "last" : "first"]())) : this.next(e)
            },
            previousPage: function(e) {
                var i, n, s;
                this.active ? this.isFirstItem() || (this._hasScroll() ? (n = this.active.offset().top, s = this.element.height(), this.active.prevAll(".ui-menu-item").each(function() {
                    return (i = t(this)).offset().top - n + s > 0
                }), this.focus(e, i)) : this.focus(e, this.activeMenu.find(this.options.items).first())) : this.next(e)
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
                    n = new RegExp("^" + i, "i");
                return this.activeMenu.find(this.options.items).filter(".ui-menu-item").filter(function() {
                    return n.test(t.trim(t(this).text()))
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
                var e, i, n, s = this.element[0].nodeName.toLowerCase(),
                    o = "textarea" === s,
                    a = "input" === s;
                this.isMultiLine = !!o || !a && this.element.prop("isContentEditable"), this.valueMethod = this.element[o || a ? "val" : "text"], this.isNewMenu = !0, this.element.addClass("ui-autocomplete-input").attr("autocomplete", "off"), this._on(this.element, {
                    keydown: function(s) {
                        if (this.element.prop("readOnly")) return e = !0, n = !0, void(i = !0);
                        e = !1, n = !1, i = !1;
                        var o = t.ui.keyCode;
                        switch (s.keyCode) {
                            case o.PAGE_UP:
                                e = !0, this._move("previousPage", s);
                                break;
                            case o.PAGE_DOWN:
                                e = !0, this._move("nextPage", s);
                                break;
                            case o.UP:
                                e = !0, this._keyEvent("previous", s);
                                break;
                            case o.DOWN:
                                e = !0, this._keyEvent("next", s);
                                break;
                            case o.ENTER:
                                this.menu.active && (e = !0, s.preventDefault(), this.menu.select(s));
                                break;
                            case o.TAB:
                                this.menu.active && this.menu.select(s);
                                break;
                            case o.ESCAPE:
                                this.menu.element.is(":visible") && (this.isMultiLine || this._value(this.term), this.close(s), s.preventDefault());
                                break;
                            default:
                                i = !0, this._searchTimeout(s)
                        }
                    },
                    keypress: function(n) {
                        if (e) return e = !1, void(this.isMultiLine && !this.menu.element.is(":visible") || n.preventDefault());
                        if (!i) {
                            var s = t.ui.keyCode;
                            switch (n.keyCode) {
                                case s.PAGE_UP:
                                    this._move("previousPage", n);
                                    break;
                                case s.PAGE_DOWN:
                                    this._move("nextPage", n);
                                    break;
                                case s.UP:
                                    this._keyEvent("previous", n);
                                    break;
                                case s.DOWN:
                                    this._keyEvent("next", n)
                            }
                        }
                    },
                    input: function(t) {
                        if (n) return n = !1, void t.preventDefault();
                        this._searchTimeout(t)
                    },
                    focus: function() {
                        this.selectedItem = null, this.previous = this._value()
                    },
                    blur: function(t) {
                        this.cancelBlur ? delete this.cancelBlur : (clearTimeout(this.searching), this.close(t), this._change(t))
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
                            this.document.one("mousedown", function(n) {
                                n.target === e.element[0] || n.target === i || t.contains(i, n.target) || e.close()
                            })
                        })
                    },
                    menufocus: function(e, i) {
                        var n, s;
                        if (this.isNewMenu && (this.isNewMenu = !1, e.originalEvent && /^mouse/.test(e.originalEvent.type))) return this.menu.blur(), void this.document.one("mousemove", function() {
                            t(e.target).trigger(e.originalEvent)
                        });
                        s = i.item.data("ui-autocomplete-item"), !1 !== this._trigger("focus", e, {
                            item: s
                        }) && e.originalEvent && /^key/.test(e.originalEvent.type) && this._value(s.value), (n = i.item.attr("aria-label") || s.value) && t.trim(n).length && (this.liveRegion.children().hide(), t("<div>").text(n).appendTo(this.liveRegion))
                    },
                    menuselect: function(t, e) {
                        var i = e.item.data("ui-autocomplete-item"),
                            n = this.previous;
                        this.element[0] !== this.document[0].activeElement && (this.element.focus(), this.previous = n, this._delay(function() {
                            this.previous = n, this.selectedItem = i
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
                var e, i, n = this;
                t.isArray(this.options.source) ? (e = this.options.source, this.source = function(i, n) {
                    n(t.ui.autocomplete.filter(e, i.term))
                }) : "string" == typeof this.options.source ? (i = this.options.source, this.source = function(e, s) {
                    n.xhr && n.xhr.abort(), n.xhr = t.ajax({
                        url: i,
                        data: e,
                        dataType: "json",
                        success: function(t) {
                            s(t)
                        },
                        error: function() {
                            s([])
                        }
                    })
                }) : this.source = this.options.source
            },
            _searchTimeout: function(t) {
                clearTimeout(this.searching), this.searching = this._delay(function() {
                    var e = this.term === this._value(),
                        i = this.menu.element.is(":visible"),
                        n = t.altKey || t.ctrlKey || t.metaKey || t.shiftKey;
                    e && (!e || i || n) || (this.selectedItem = null, this.search(null, t))
                }, this.options.delay)
            },
            search: function(t, e) {
                return t = null != t ? t : this._value(), this.term = this._value(), t.length < this.options.minLength ? this.close(e) : !1 !== this._trigger("search", e) ? this._search(t) : void 0
            },
            _search: function(t) {
                this.pending++, this.element.addClass("ui-autocomplete-loading"), this.cancelSearch = !1, this.source({
                    term: t
                }, this._response())
            },
            _response: function() {
                var e = ++this.requestIndex;
                return t.proxy(function(t) {
                    e === this.requestIndex && this.__response(t), --this.pending || this.element.removeClass("ui-autocomplete-loading")
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
                var n = this;
                t.each(i, function(t, i) {
                    n._renderItemData(e, i)
                })
            },
            _renderItemData: function(t, e) {
                return this._renderItem(t, e).data("ui-autocomplete-item", e)
            },
            _renderItem: function(e, i) {
                return t("<li>").text(i.label).appendTo(e)
            },
            _move: function(t, e) {
                if (this.menu.element.is(":visible")) return this.menu.isFirstItem() && /^previous/.test(t) || this.menu.isLastItem() && /^next/.test(t) ? (this.isMultiLine || this._value(this.term), void this.menu.blur()) : void this.menu[t](e);
                this.search(null, e)
            },
            widget: function() {
                return this.menu.element
            },
            _value: function() {
                return this.valueMethod.apply(this.element, arguments)
            },
            _keyEvent: function(t, e) {
                this.isMultiLine && !this.menu.element.is(":visible") || (this._move(t, e), e.preventDefault())
            }
        }), t.extend(t.ui.autocomplete, {
            escapeRegex: function(t) {
                return t.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&")
            },
            filter: function(e, i) {
                var n = new RegExp(t.ui.autocomplete.escapeRegex(i), "i");
                return t.grep(e, function(t) {
                    return n.test(t.label || t.value || t)
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
        t.ui.autocomplete;
        var d, p = "ui-button ui-widget ui-state-default ui-corner-all",
            f = "ui-button-icons-only ui-button-icon-only ui-button-text-icons ui-button-text-icon-primary ui-button-text-icon-secondary ui-button-text-only",
            m = function() {
                var e = t(this);
                setTimeout(function() {
                    e.find(":ui-button").button("refresh")
                }, 1)
            },
            g = function(e) {
                var i = e.name,
                    n = e.form,
                    s = t([]);
                return i && (i = i.replace(/'/g, "\\'"), s = n ? t(n).find("[name='" + i + "'][type=radio]") : t("[name='" + i + "'][type=radio]", e.ownerDocument).filter(function() {
                    return !this.form
                })), s
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
                    n = "checkbox" === this.type || "radio" === this.type,
                    s = n ? "" : "ui-state-active";
                null === i.label && (i.label = "input" === this.type ? this.buttonElement.val() : this.buttonElement.html()), this._hoverable(this.buttonElement), this.buttonElement.addClass(p).attr("role", "button").bind("mouseenter" + this.eventNamespace, function() {
                    i.disabled || this === d && t(this).addClass("ui-state-active")
                }).bind("mouseleave" + this.eventNamespace, function() {
                    i.disabled || t(this).removeClass(s)
                }).bind("click" + this.eventNamespace, function(t) {
                    i.disabled && (t.preventDefault(), t.stopImmediatePropagation())
                }), this._on({
                    focus: function() {
                        this.buttonElement.addClass("ui-state-focus")
                    },
                    blur: function() {
                        this.buttonElement.removeClass("ui-state-focus")
                    }
                }), n && this.element.bind("change" + this.eventNamespace, function() {
                    e.refresh()
                }), "checkbox" === this.type ? this.buttonElement.bind("click" + this.eventNamespace, function() {
                    if (i.disabled) return !1
                }) : "radio" === this.type ? this.buttonElement.bind("click" + this.eventNamespace, function() {
                    if (i.disabled) return !1;
                    t(this).addClass("ui-state-active"), e.buttonElement.attr("aria-pressed", "true");
                    var n = e.element[0];
                    g(n).not(n).map(function() {
                        return t(this).button("widget")[0]
                    }).removeClass("ui-state-active").attr("aria-pressed", "false")
                }) : (this.buttonElement.bind("mousedown" + this.eventNamespace, function() {
                    if (i.disabled) return !1;
                    t(this).addClass("ui-state-active"), d = this, e.document.one("mouseup", function() {
                        d = null
                    })
                }).bind("mouseup" + this.eventNamespace, function() {
                    if (i.disabled) return !1;
                    t(this).removeClass("ui-state-active")
                }).bind("keydown" + this.eventNamespace, function(e) {
                    if (i.disabled) return !1;
                    e.keyCode !== t.ui.keyCode.SPACE && e.keyCode !== t.ui.keyCode.ENTER || t(this).addClass("ui-state-active")
                }).bind("keyup" + this.eventNamespace + " blur" + this.eventNamespace, function() {
                    t(this).removeClass("ui-state-active")
                }), this.buttonElement.is("a") && this.buttonElement.keyup(function(e) {
                    e.keyCode === t.ui.keyCode.SPACE && t(this).click()
                })), this._setOption("disabled", i.disabled), this._resetButton()
            },
            _determineButtonType: function() {
                var t, e, i;
                this.element.is("[type=checkbox]") ? this.type = "checkbox" : this.element.is("[type=radio]") ? this.type = "radio" : this.element.is("input") ? this.type = "input" : this.type = "button", "checkbox" === this.type || "radio" === this.type ? (t = this.element.parents().last(), e = "label[for='" + this.element.attr("id") + "']", this.buttonElement = t.find(e), this.buttonElement.length || (t = t.length ? t.siblings() : this.element.siblings(), this.buttonElement = t.filter(e), this.buttonElement.length || (this.buttonElement = t.find(e))), this.element.addClass("ui-helper-hidden-accessible"), (i = this.element.is(":checked")) && this.buttonElement.addClass("ui-state-active"), this.buttonElement.prop("aria-pressed", i)) : this.buttonElement = this.element
            },
            widget: function() {
                return this.buttonElement
            },
            _destroy: function() {
                this.element.removeClass("ui-helper-hidden-accessible"), this.buttonElement.removeClass(p + " ui-state-active " + f).removeAttr("role").removeAttr("aria-pressed").html(this.buttonElement.find(".ui-button-text").html()), this.hasTitle || this.buttonElement.removeAttr("title")
            },
            _setOption: function(t, e) {
                if (this._super(t, e), "disabled" === t) return this.widget().toggleClass("ui-state-disabled", !!e), this.element.prop("disabled", !!e), void(e && ("checkbox" === this.type || "radio" === this.type ? this.buttonElement.removeClass("ui-state-focus") : this.buttonElement.removeClass("ui-state-focus ui-state-active")));
                this._resetButton()
            },
            refresh: function() {
                var e = this.element.is("input, button") ? this.element.is(":disabled") : this.element.hasClass("ui-button-disabled");
                e !== this.options.disabled && this._setOption("disabled", e), "radio" === this.type ? g(this.element[0]).each(function() {
                    t(this).is(":checked") ? t(this).button("widget").addClass("ui-state-active").attr("aria-pressed", "true") : t(this).button("widget").removeClass("ui-state-active").attr("aria-pressed", "false")
                }) : "checkbox" === this.type && (this.element.is(":checked") ? this.buttonElement.addClass("ui-state-active").attr("aria-pressed", "true") : this.buttonElement.removeClass("ui-state-active").attr("aria-pressed", "false"))
            },
            _resetButton: function() {
                if ("input" !== this.type) {
                    var e = this.buttonElement.removeClass(f),
                        i = t("<span></span>", this.document[0]).addClass("ui-button-text").html(this.options.label).appendTo(e.empty()).text(),
                        n = this.options.icons,
                        s = n.primary && n.secondary,
                        o = [];
                    n.primary || n.secondary ? (this.options.text && o.push("ui-button-text-icon" + (s ? "s" : n.primary ? "-primary" : "-secondary")), n.primary && e.prepend("<span class='ui-button-icon-primary ui-icon " + n.primary + "'></span>"), n.secondary && e.append("<span class='ui-button-icon-secondary ui-icon " + n.secondary + "'></span>"), this.options.text || (o.push(s ? "ui-button-icons-only" : "ui-button-icon-only"), this.hasTitle || e.attr("title", t.trim(i)))) : o.push("ui-button-text-only"), e.addClass(o.join(" "))
                } else this.options.label && this.element.val(this.options.label)
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
                    n = i.filter(":ui-button");
                i.not(":ui-button").button(), n.button("refresh"), this.buttons = i.map(function() {
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
        t.extend(s.prototype, {
            markerClassName: "hasDatepicker",
            maxRows: 4,
            _widgetDatepicker: function() {
                return this.dpDiv
            },
            setDefaults: function(t) {
                return r(this._defaults, t || {}), this
            },
            _attachDatepicker: function(e, i) {
                var n, s, o;
                s = "div" === (n = e.nodeName.toLowerCase()) || "span" === n, e.id || (this.uuid += 1, e.id = "dp" + this.uuid), (o = this._newInst(t(e), s)).settings = t.extend({}, i || {}), "input" === n ? this._connectDatepicker(e, o) : s && this._inlineDatepicker(e, o)
            },
            _newInst: function(e, i) {
                return {
                    id: e[0].id.replace(/([^A-Za-z0-9_\-])/g, "\\\\$1"),
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
                var n = t(e);
                i.append = t([]), i.trigger = t([]), n.hasClass(this.markerClassName) || (this._attachments(n, i), n.addClass(this.markerClassName).keydown(this._doKeyDown).keypress(this._doKeyPress).keyup(this._doKeyUp), this._autoSize(i), t.data(e, "datepicker", i), i.settings.disabled && this._disableDatepicker(e))
            },
            _attachments: function(e, i) {
                var n, s, o, a = this._get(i, "appendText"),
                    r = this._get(i, "isRTL");
                i.append && i.append.remove(), a && (i.append = t("<span class='" + this._appendClass + "'>" + a + "</span>"), e[r ? "before" : "after"](i.append)), e.unbind("focus", this._showDatepicker), i.trigger && i.trigger.remove(), "focus" !== (n = this._get(i, "showOn")) && "both" !== n || e.focus(this._showDatepicker), "button" !== n && "both" !== n || (s = this._get(i, "buttonText"), o = this._get(i, "buttonImage"), i.trigger = t(this._get(i, "buttonImageOnly") ? t("<img/>").addClass(this._triggerClass).attr({
                    src: o,
                    alt: s,
                    title: s
                }) : t("<button type='button'></button>").addClass(this._triggerClass).html(o ? t("<img/>").attr({
                    src: o,
                    alt: s,
                    title: s
                }) : s)), e[r ? "before" : "after"](i.trigger), i.trigger.click(function() {
                    return t.datepicker._datepickerShowing && t.datepicker._lastInput === e[0] ? t.datepicker._hideDatepicker() : t.datepicker._datepickerShowing && t.datepicker._lastInput !== e[0] ? (t.datepicker._hideDatepicker(), t.datepicker._showDatepicker(e[0])) : t.datepicker._showDatepicker(e[0]), !1
                }))
            },
            _autoSize: function(t) {
                if (this._get(t, "autoSize") && !t.inline) {
                    var e, i, n, s, o = new Date(2009, 11, 20),
                        a = this._get(t, "dateFormat");
                    a.match(/[DM]/) && (e = function(t) {
                        for (i = 0, n = 0, s = 0; s < t.length; s++) t[s].length > i && (i = t[s].length, n = s);
                        return n
                    }, o.setMonth(e(this._get(t, a.match(/MM/) ? "monthNames" : "monthNamesShort"))), o.setDate(e(this._get(t, a.match(/DD/) ? "dayNames" : "dayNamesShort")) + 20 - o.getDay())), t.input.attr("size", this._formatDate(t, o).length)
                }
            },
            _inlineDatepicker: function(e, i) {
                var n = t(e);
                n.hasClass(this.markerClassName) || (n.addClass(this.markerClassName).append(i.dpDiv), t.data(e, "datepicker", i), this._setDate(i, this._getDefaultDate(i), !0), this._updateDatepicker(i), this._updateAlternate(i), i.settings.disabled && this._disableDatepicker(e), i.dpDiv.css("display", "block"))
            },
            _dialogDatepicker: function(e, i, n, s, o) {
                var a, l, h, c, u, d = this._dialogInst;
                return d || (this.uuid += 1, a = "dp" + this.uuid, this._dialogInput = t("<input type='text' id='" + a + "' style='position: absolute; top: -100px; width: 0px;'/>"), this._dialogInput.keydown(this._doKeyDown), t("body").append(this._dialogInput), (d = this._dialogInst = this._newInst(this._dialogInput, !1)).settings = {}, t.data(this._dialogInput[0], "datepicker", d)), r(d.settings, s || {}), i = i && i.constructor === Date ? this._formatDate(d, i) : i, this._dialogInput.val(i), this._pos = o ? o.length ? o : [o.pageX, o.pageY] : null, this._pos || (l = document.documentElement.clientWidth, h = document.documentElement.clientHeight, c = document.documentElement.scrollLeft || document.body.scrollLeft, u = document.documentElement.scrollTop || document.body.scrollTop, this._pos = [l / 2 - 100 + c, h / 2 - 150 + u]), this._dialogInput.css("left", this._pos[0] + 20 + "px").css("top", this._pos[1] + "px"), d.settings.onSelect = n, this._inDialog = !0, this.dpDiv.addClass(this._dialogClass), this._showDatepicker(this._dialogInput[0]), t.blockUI && t.blockUI(this.dpDiv), t.data(this._dialogInput[0], "datepicker", d), this
            },
            _destroyDatepicker: function(e) {
                var i, n = t(e),
                    s = t.data(e, "datepicker");
                n.hasClass(this.markerClassName) && (i = e.nodeName.toLowerCase(), t.removeData(e, "datepicker"), "input" === i ? (s.append.remove(), s.trigger.remove(), n.removeClass(this.markerClassName).unbind("focus", this._showDatepicker).unbind("keydown", this._doKeyDown).unbind("keypress", this._doKeyPress).unbind("keyup", this._doKeyUp)) : "div" !== i && "span" !== i || n.removeClass(this.markerClassName).empty(), v === s && (v = null))
            },
            _enableDatepicker: function(e) {
                var i, n, s = t(e),
                    o = t.data(e, "datepicker");
                s.hasClass(this.markerClassName) && ("input" === (i = e.nodeName.toLowerCase()) ? (e.disabled = !1, o.trigger.filter("button").each(function() {
                    this.disabled = !1
                }).end().filter("img").css({
                    opacity: "1.0",
                    cursor: ""
                })) : "div" !== i && "span" !== i || ((n = s.children("." + this._inlineClass)).children().removeClass("ui-state-disabled"), n.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled", !1)), this._disabledInputs = t.map(this._disabledInputs, function(t) {
                    return t === e ? null : t
                }))
            },
            _disableDatepicker: function(e) {
                var i, n, s = t(e),
                    o = t.data(e, "datepicker");
                s.hasClass(this.markerClassName) && ("input" === (i = e.nodeName.toLowerCase()) ? (e.disabled = !0, o.trigger.filter("button").each(function() {
                    this.disabled = !0
                }).end().filter("img").css({
                    opacity: "0.5",
                    cursor: "default"
                })) : "div" !== i && "span" !== i || ((n = s.children("." + this._inlineClass)).children().addClass("ui-state-disabled"), n.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled", !0)), this._disabledInputs = t.map(this._disabledInputs, function(t) {
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
                } catch (t) {
                    throw "Missing instance data for this datepicker"
                }
            },
            _optionDatepicker: function(e, i, n) {
                var s, o, a, l, h = this._getInst(e);
                if (2 === arguments.length && "string" == typeof i) return "defaults" === i ? t.extend({}, t.datepicker._defaults) : h ? "all" === i ? t.extend({}, h.settings) : this._get(h, i) : null;
                s = i || {}, "string" == typeof i && ((s = {})[i] = n), h && (this._curInst === h && this._hideDatepicker(), o = this._getDateDatepicker(e, !0), a = this._getMinMaxDate(h, "min"), l = this._getMinMaxDate(h, "max"), r(h.settings, s), null !== a && void 0 !== s.dateFormat && void 0 === s.minDate && (h.settings.minDate = this._formatDate(h, a)), null !== l && void 0 !== s.dateFormat && void 0 === s.maxDate && (h.settings.maxDate = this._formatDate(h, l)), "disabled" in s && (s.disabled ? this._disableDatepicker(e) : this._enableDatepicker(e)), this._attachments(t(e), h), this._autoSize(h), this._setDate(h, o), this._updateAlternate(h), this._updateDatepicker(h))
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
                var i, n, s, o = t.datepicker._getInst(e.target),
                    a = !0,
                    r = o.dpDiv.is(".ui-datepicker-rtl");
                if (o._keyEvent = !0, t.datepicker._datepickerShowing) switch (e.keyCode) {
                    case 9:
                        t.datepicker._hideDatepicker(), a = !1;
                        break;
                    case 13:
                        return (s = t("td." + t.datepicker._dayOverClass + ":not(." + t.datepicker._currentClass + ")", o.dpDiv))[0] && t.datepicker._selectDay(e.target, o.selectedMonth, o.selectedYear, s[0]), (i = t.datepicker._get(o, "onSelect")) ? (n = t.datepicker._formatDate(o), i.apply(o.input ? o.input[0] : null, [n, o])) : t.datepicker._hideDatepicker(), !1;
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
                var i, n, s = t.datepicker._getInst(e.target);
                if (t.datepicker._get(s, "constrainInput")) return i = t.datepicker._possibleChars(t.datepicker._get(s, "dateFormat")), n = String.fromCharCode(null == e.charCode ? e.keyCode : e.charCode), e.ctrlKey || e.metaKey || n < " " || !i || i.indexOf(n) > -1
            },
            _doKeyUp: function(e) {
                var i = t.datepicker._getInst(e.target);
                if (i.input.val() !== i.lastVal) try {
                    t.datepicker.parseDate(t.datepicker._get(i, "dateFormat"), i.input ? i.input.val() : null, t.datepicker._getFormatConfig(i)) && (t.datepicker._setDateFromField(i), t.datepicker._updateAlternate(i), t.datepicker._updateDatepicker(i))
                } catch (t) {}
                return !0
            },
            _showDatepicker: function(e) {
                if ("input" !== (e = e.target || e).nodeName.toLowerCase() && (e = t("input", e.parentNode)[0]), !t.datepicker._isDisabledDatepicker(e) && t.datepicker._lastInput !== e) {
                    var i, s, o, a, l, h, c;
                    i = t.datepicker._getInst(e), t.datepicker._curInst && t.datepicker._curInst !== i && (t.datepicker._curInst.dpDiv.stop(!0, !0), i && t.datepicker._datepickerShowing && t.datepicker._hideDatepicker(t.datepicker._curInst.input[0])), !1 !== (o = (s = t.datepicker._get(i, "beforeShow")) ? s.apply(e, [e, i]) : {}) && (r(i.settings, o), i.lastVal = null, t.datepicker._lastInput = e, t.datepicker._setDateFromField(i), t.datepicker._inDialog && (e.value = ""), t.datepicker._pos || (t.datepicker._pos = t.datepicker._findPos(e), t.datepicker._pos[1] += e.offsetHeight), a = !1, t(e).parents().each(function() {
                        return !(a |= "fixed" === t(this).css("position"))
                    }), l = {
                        left: t.datepicker._pos[0],
                        top: t.datepicker._pos[1]
                    }, t.datepicker._pos = null, i.dpDiv.empty(), i.dpDiv.css({
                        position: "absolute",
                        display: "block",
                        top: "-1000px"
                    }), t.datepicker._updateDatepicker(i), l = t.datepicker._checkOffset(i, l, a), i.dpDiv.css({
                        position: t.datepicker._inDialog && t.blockUI ? "static" : a ? "fixed" : "absolute",
                        display: "none",
                        left: l.left + "px",
                        top: l.top + "px"
                    }), i.inline || (h = t.datepicker._get(i, "showAnim"), c = t.datepicker._get(i, "duration"), i.dpDiv.css("z-index", n(t(e)) + 1), t.datepicker._datepickerShowing = !0, t.effects && t.effects.effect[h] ? i.dpDiv.show(h, t.datepicker._get(i, "showOptions"), c) : i.dpDiv[h || "show"](h ? c : null), t.datepicker._shouldFocusInput(i) && i.input.focus(), t.datepicker._curInst = i))
                }
            },
            _updateDatepicker: function(e) {
                this.maxRows = 4, v = e, e.dpDiv.empty().append(this._generateHTML(e)), this._attachHandlers(e);
                var i, n = this._getNumberOfMonths(e),
                    s = n[1],
                    o = e.dpDiv.find("." + this._dayOverClass + " a");
                o.length > 0 && a.apply(o.get(0)), e.dpDiv.removeClass("ui-datepicker-multi-2 ui-datepicker-multi-3 ui-datepicker-multi-4").width(""), s > 1 && e.dpDiv.addClass("ui-datepicker-multi-" + s).css("width", 17 * s + "em"), e.dpDiv[(1 !== n[0] || 1 !== n[1] ? "add" : "remove") + "Class"]("ui-datepicker-multi"), e.dpDiv[(this._get(e, "isRTL") ? "add" : "remove") + "Class"]("ui-datepicker-rtl"), e === t.datepicker._curInst && t.datepicker._datepickerShowing && t.datepicker._shouldFocusInput(e) && e.input.focus(), e.yearshtml && (i = e.yearshtml, setTimeout(function() {
                    i === e.yearshtml && e.yearshtml && e.dpDiv.find("select.ui-datepicker-year:first").replaceWith(e.yearshtml), i = e.yearshtml = null
                }, 0))
            },
            _shouldFocusInput: function(t) {
                return t.input && t.input.is(":visible") && !t.input.is(":disabled") && !t.input.is(":focus")
            },
            _checkOffset: function(e, i, n) {
                var s = e.dpDiv.outerWidth(),
                    o = e.dpDiv.outerHeight(),
                    a = e.input ? e.input.outerWidth() : 0,
                    r = e.input ? e.input.outerHeight() : 0,
                    l = document.documentElement.clientWidth + (n ? 0 : t(document).scrollLeft()),
                    h = document.documentElement.clientHeight + (n ? 0 : t(document).scrollTop());
                return i.left -= this._get(e, "isRTL") ? s - a : 0, i.left -= n && i.left === e.input.offset().left ? t(document).scrollLeft() : 0, i.top -= n && i.top === e.input.offset().top + r ? t(document).scrollTop() : 0, i.left -= Math.min(i.left, i.left + s > l && l > s ? Math.abs(i.left + s - l) : 0), i.top -= Math.min(i.top, i.top + o > h && h > o ? Math.abs(o + r) : 0), i
            },
            _findPos: function(e) {
                for (var i, n = this._getInst(e), s = this._get(n, "isRTL"); e && ("hidden" === e.type || 1 !== e.nodeType || t.expr.filters.hidden(e));) e = e[s ? "previousSibling" : "nextSibling"];
                return i = t(e).offset(), [i.left, i.top]
            },
            _hideDatepicker: function(e) {
                var i, n, s, o, a = this._curInst;
                !a || e && a !== t.data(e, "datepicker") || this._datepickerShowing && (i = this._get(a, "showAnim"), n = this._get(a, "duration"), s = function() {
                    t.datepicker._tidyDialog(a)
                }, t.effects && (t.effects.effect[i] || t.effects[i]) ? a.dpDiv.hide(i, t.datepicker._get(a, "showOptions"), n, s) : a.dpDiv["slideDown" === i ? "slideUp" : "fadeIn" === i ? "fadeOut" : "hide"](i ? n : null, s), i || s(), this._datepickerShowing = !1, (o = this._get(a, "onClose")) && o.apply(a.input ? a.input[0] : null, [a.input ? a.input.val() : "", a]), this._lastInput = null, this._inDialog && (this._dialogInput.css({
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
                        n = t.datepicker._getInst(i[0]);
                    (i[0].id === t.datepicker._mainDivId || 0 !== i.parents("#" + t.datepicker._mainDivId).length || i.hasClass(t.datepicker.markerClassName) || i.closest("." + t.datepicker._triggerClass).length || !t.datepicker._datepickerShowing || t.datepicker._inDialog && t.blockUI) && (!i.hasClass(t.datepicker.markerClassName) || t.datepicker._curInst === n) || t.datepicker._hideDatepicker()
                }
            },
            _adjustDate: function(e, i, n) {
                var s = t(e),
                    o = this._getInst(s[0]);
                this._isDisabledDatepicker(s[0]) || (this._adjustInstDate(o, i + ("M" === n ? this._get(o, "showCurrentAtPos") : 0), n), this._updateDatepicker(o))
            },
            _gotoToday: function(e) {
                var i, n = t(e),
                    s = this._getInst(n[0]);
                this._get(s, "gotoCurrent") && s.currentDay ? (s.selectedDay = s.currentDay, s.drawMonth = s.selectedMonth = s.currentMonth, s.drawYear = s.selectedYear = s.currentYear) : (i = new Date, s.selectedDay = i.getDate(), s.drawMonth = s.selectedMonth = i.getMonth(), s.drawYear = s.selectedYear = i.getFullYear()), this._notifyChange(s), this._adjustDate(n)
            },
            _selectMonthYear: function(e, i, n) {
                var s = t(e),
                    o = this._getInst(s[0]);
                o["selected" + ("M" === n ? "Month" : "Year")] = o["draw" + ("M" === n ? "Month" : "Year")] = parseInt(i.options[i.selectedIndex].value, 10), this._notifyChange(o), this._adjustDate(s)
            },
            _selectDay: function(e, i, n, s) {
                var o, a = t(e);
                t(s).hasClass(this._unselectableClass) || this._isDisabledDatepicker(a[0]) || ((o = this._getInst(a[0])).selectedDay = o.currentDay = t("a", s).html(), o.selectedMonth = o.currentMonth = i, o.selectedYear = o.currentYear = n, this._selectDate(e, this._formatDate(o, o.currentDay, o.currentMonth, o.currentYear)))
            },
            _clearDate: function(e) {
                var i = t(e);
                this._selectDate(i, "")
            },
            _selectDate: function(e, i) {
                var n, s = t(e),
                    o = this._getInst(s[0]);
                i = null != i ? i : this._formatDate(o), o.input && o.input.val(i), this._updateAlternate(o), (n = this._get(o, "onSelect")) ? n.apply(o.input ? o.input[0] : null, [i, o]) : o.input && o.input.trigger("change"), o.inline ? this._updateDatepicker(o) : (this._hideDatepicker(), this._lastInput = o.input[0], "object" != typeof o.input[0] && o.input.focus(), this._lastInput = null)
            },
            _updateAlternate: function(e) {
                var i, n, s, o = this._get(e, "altField");
                o && (i = this._get(e, "altFormat") || this._get(e, "dateFormat"), n = this._getDate(e), s = this.formatDate(i, n, this._getFormatConfig(e)), t(o).each(function() {
                    t(this).val(s)
                }))
            },
            noWeekends: function(t) {
                var e = t.getDay();
                return [e > 0 && e < 6, ""]
            },
            iso8601Week: function(t) {
                var e, i = new Date(t.getTime());
                return i.setDate(i.getDate() + 4 - (i.getDay() || 7)), e = i.getTime(), i.setMonth(0), i.setDate(1), Math.floor(Math.round((e - i) / 864e5) / 7) + 1
            },
            parseDate: function(e, i, n) {
                if (null == e || null == i) throw "Invalid arguments";
                if ("" === (i = "object" == typeof i ? i.toString() : i + "")) return null;
                var s, o, a, r, l = 0,
                    h = (n ? n.shortYearCutoff : null) || this._defaults.shortYearCutoff,
                    c = "string" != typeof h ? h : (new Date).getFullYear() % 100 + parseInt(h, 10),
                    u = (n ? n.dayNamesShort : null) || this._defaults.dayNamesShort,
                    d = (n ? n.dayNames : null) || this._defaults.dayNames,
                    p = (n ? n.monthNamesShort : null) || this._defaults.monthNamesShort,
                    f = (n ? n.monthNames : null) || this._defaults.monthNames,
                    m = -1,
                    g = -1,
                    v = -1,
                    y = -1,
                    b = !1,
                    _ = function(t) {
                        var i = s + 1 < e.length && e.charAt(s + 1) === t;
                        return i && s++, i
                    },
                    x = function(t) {
                        var e = _(t),
                            n = "@" === t ? 14 : "!" === t ? 20 : "y" === t && e ? 4 : "o" === t ? 3 : 2,
                            s = "y" === t ? n : 1,
                            o = new RegExp("^\\d{" + s + "," + n + "}"),
                            a = i.substring(l).match(o);
                        if (!a) throw "Missing number at position " + l;
                        return l += a[0].length, parseInt(a[0], 10)
                    },
                    w = function(e, n, s) {
                        var o = -1,
                            a = t.map(_(e) ? s : n, function(t, e) {
                                return [
                                    [e, t]
                                ]
                            }).sort(function(t, e) {
                                return -(t[1].length - e[1].length)
                            });
                        if (t.each(a, function(t, e) {
                                var n = e[1];
                                if (i.substr(l, n.length).toLowerCase() === n.toLowerCase()) return o = e[0], l += n.length, !1
                            }), -1 !== o) return o + 1;
                        throw "Unknown name at position " + l
                    },
                    k = function() {
                        if (i.charAt(l) !== e.charAt(s)) throw "Unexpected literal at position " + l;
                        l++
                    };
                for (s = 0; s < e.length; s++)
                    if (b) "'" !== e.charAt(s) || _("'") ? k() : b = !1;
                    else switch (e.charAt(s)) {
                        case "d":
                            v = x("d");
                            break;
                        case "D":
                            w("D", u, d);
                            break;
                        case "o":
                            y = x("o");
                            break;
                        case "m":
                            g = x("m");
                            break;
                        case "M":
                            g = w("M", p, f);
                            break;
                        case "y":
                            m = x("y");
                            break;
                        case "@":
                            m = (r = new Date(x("@"))).getFullYear(), g = r.getMonth() + 1, v = r.getDate();
                            break;
                        case "!":
                            m = (r = new Date((x("!") - this._ticksTo1970) / 1e4)).getFullYear(), g = r.getMonth() + 1, v = r.getDate();
                            break;
                        case "'":
                            _("'") ? k() : b = !0;
                            break;
                        default:
                            k()
                    }
                if (l < i.length && (a = i.substr(l), !/^\s+/.test(a))) throw "Extra/unparsed characters found in date: " + a;
                if (-1 === m ? m = (new Date).getFullYear() : m < 100 && (m += (new Date).getFullYear() - (new Date).getFullYear() % 100 + (m <= c ? 0 : -100)), y > -1)
                    for (g = 1, v = y;;) {
                        if (o = this._getDaysInMonth(m, g - 1), v <= o) break;
                        g++, v -= o
                    }
                if ((r = this._daylightSavingAdjust(new Date(m, g - 1, v))).getFullYear() !== m || r.getMonth() + 1 !== g || r.getDate() !== v) throw "Invalid date";
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
                var n, s = (i ? i.dayNamesShort : null) || this._defaults.dayNamesShort,
                    o = (i ? i.dayNames : null) || this._defaults.dayNames,
                    a = (i ? i.monthNamesShort : null) || this._defaults.monthNamesShort,
                    r = (i ? i.monthNames : null) || this._defaults.monthNames,
                    l = function(e) {
                        var i = n + 1 < t.length && t.charAt(n + 1) === e;
                        return i && n++, i
                    },
                    h = function(t, e, i) {
                        var n = "" + e;
                        if (l(t))
                            for (; n.length < i;) n = "0" + n;
                        return n
                    },
                    c = function(t, e, i, n) {
                        return l(t) ? n[e] : i[e]
                    },
                    u = "",
                    d = !1;
                if (e)
                    for (n = 0; n < t.length; n++)
                        if (d) "'" !== t.charAt(n) || l("'") ? u += t.charAt(n) : d = !1;
                        else switch (t.charAt(n)) {
                            case "d":
                                u += h("d", e.getDate(), 2);
                                break;
                            case "D":
                                u += c("D", e.getDay(), s, o);
                                break;
                            case "o":
                                u += h("o", Math.round((new Date(e.getFullYear(), e.getMonth(), e.getDate()).getTime() - new Date(e.getFullYear(), 0, 0).getTime()) / 864e5), 3);
                                break;
                            case "m":
                                u += h("m", e.getMonth() + 1, 2);
                                break;
                            case "M":
                                u += c("M", e.getMonth(), a, r);
                                break;
                            case "y":
                                u += l("y") ? e.getFullYear() : (e.getYear() % 100 < 10 ? "0" : "") + e.getYear() % 100;
                                break;
                            case "@":
                                u += e.getTime();
                                break;
                            case "!":
                                u += 1e4 * e.getTime() + this._ticksTo1970;
                                break;
                            case "'":
                                l("'") ? u += "'" : d = !0;
                                break;
                            default:
                                u += t.charAt(n)
                        }
                return u
            },
            _possibleChars: function(t) {
                var e, i = "",
                    n = !1,
                    s = function(i) {
                        var n = e + 1 < t.length && t.charAt(e + 1) === i;
                        return n && e++, n
                    };
                for (e = 0; e < t.length; e++)
                    if (n) "'" !== t.charAt(e) || s("'") ? i += t.charAt(e) : n = !1;
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
                            s("'") ? i += "'" : n = !0;
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
                        n = t.lastVal = t.input ? t.input.val() : null,
                        s = this._getDefaultDate(t),
                        o = s,
                        a = this._getFormatConfig(t);
                    try {
                        o = this.parseDate(i, n, a) || s
                    } catch (t) {
                        n = e ? "" : n
                    }
                    t.selectedDay = o.getDate(), t.drawMonth = t.selectedMonth = o.getMonth(), t.drawYear = t.selectedYear = o.getFullYear(), t.currentDay = n ? o.getDate() : 0, t.currentMonth = n ? o.getMonth() : 0, t.currentYear = n ? o.getFullYear() : 0, this._adjustInstDate(t)
                }
            },
            _getDefaultDate: function(t) {
                return this._restrictMinMax(t, this._determineDate(t, this._get(t, "defaultDate"), new Date))
            },
            _determineDate: function(e, i, n) {
                var s = null == i || "" === i ? n : "string" == typeof i ? function(i) {
                    try {
                        return t.datepicker.parseDate(t.datepicker._get(e, "dateFormat"), i, t.datepicker._getFormatConfig(e))
                    } catch (t) {}
                    for (var n = (i.toLowerCase().match(/^c/) ? t.datepicker._getDate(e) : null) || new Date, s = n.getFullYear(), o = n.getMonth(), a = n.getDate(), r = /([+\-]?[0-9]+)\s*(d|D|w|W|m|M|y|Y)?/g, l = r.exec(i); l;) {
                        switch (l[2] || "d") {
                            case "d":
                            case "D":
                                a += parseInt(l[1], 10);
                                break;
                            case "w":
                            case "W":
                                a += 7 * parseInt(l[1], 10);
                                break;
                            case "m":
                            case "M":
                                o += parseInt(l[1], 10), a = Math.min(a, t.datepicker._getDaysInMonth(s, o));
                                break;
                            case "y":
                            case "Y":
                                s += parseInt(l[1], 10), a = Math.min(a, t.datepicker._getDaysInMonth(s, o))
                        }
                        l = r.exec(i)
                    }
                    return new Date(s, o, a)
                }(i) : "number" == typeof i ? isNaN(i) ? n : function(t) {
                    var e = new Date;
                    return e.setDate(e.getDate() + t), e
                }(i) : new Date(i.getTime());
                return (s = s && "Invalid Date" === s.toString() ? n : s) && (s.setHours(0), s.setMinutes(0), s.setSeconds(0), s.setMilliseconds(0)), this._daylightSavingAdjust(s)
            },
            _daylightSavingAdjust: function(t) {
                return t ? (t.setHours(t.getHours() > 12 ? t.getHours() + 2 : 0), t) : null
            },
            _setDate: function(t, e, i) {
                var n = !e,
                    s = t.selectedMonth,
                    o = t.selectedYear,
                    a = this._restrictMinMax(t, this._determineDate(t, e, new Date));
                t.selectedDay = t.currentDay = a.getDate(), t.drawMonth = t.selectedMonth = t.currentMonth = a.getMonth(), t.drawYear = t.selectedYear = t.currentYear = a.getFullYear(), s === t.selectedMonth && o === t.selectedYear || i || this._notifyChange(t), this._adjustInstDate(t), t.input && t.input.val(n ? "" : this._formatDate(t))
            },
            _getDate: function(t) {
                return !t.currentYear || t.input && "" === t.input.val() ? null : this._daylightSavingAdjust(new Date(t.currentYear, t.currentMonth, t.currentDay))
            },
            _attachHandlers: function(e) {
                var i = this._get(e, "stepMonths"),
                    n = "#" + e.id.replace(/\\\\/g, "\\");
                e.dpDiv.find("[data-handler]").map(function() {
                    var e = {
                        prev: function() {
                            t.datepicker._adjustDate(n, -i, "M")
                        },
                        next: function() {
                            t.datepicker._adjustDate(n, +i, "M")
                        },
                        hide: function() {
                            t.datepicker._hideDatepicker()
                        },
                        today: function() {
                            t.datepicker._gotoToday(n)
                        },
                        selectDay: function() {
                            return t.datepicker._selectDay(n, +this.getAttribute("data-month"), +this.getAttribute("data-year"), this), !1
                        },
                        selectMonth: function() {
                            return t.datepicker._selectMonthYear(n, this, "M"), !1
                        },
                        selectYear: function() {
                            return t.datepicker._selectMonthYear(n, this, "Y"), !1
                        }
                    };
                    t(this).bind(this.getAttribute("data-event"), e[this.getAttribute("data-handler")])
                })
            },
            _generateHTML: function(t) {
                var e, i, n, s, o, a, r, l, h, c, u, d, p, f, m, g, v, y, b, _, x, w, k, C, D, A, T, I, S, E, P, N, M, O, j, H, R, F, L, B = new Date,
                    z = this._daylightSavingAdjust(new Date(B.getFullYear(), B.getMonth(), B.getDate())),
                    $ = this._get(t, "isRTL"),
                    W = this._get(t, "showButtonPanel"),
                    q = this._get(t, "hideIfNoPrevNext"),
                    U = this._get(t, "navigationAsDateFormat"),
                    Y = this._getNumberOfMonths(t),
                    G = this._get(t, "showCurrentAtPos"),
                    K = this._get(t, "stepMonths"),
                    V = 1 !== Y[0] || 1 !== Y[1],
                    Q = this._daylightSavingAdjust(t.currentDay ? new Date(t.currentYear, t.currentMonth, t.currentDay) : new Date(9999, 9, 9)),
                    X = this._getMinMaxDate(t, "min"),
                    Z = this._getMinMaxDate(t, "max"),
                    J = t.drawMonth - G,
                    tt = t.drawYear;
                if (J < 0 && (J += 12, tt--), Z)
                    for (e = this._daylightSavingAdjust(new Date(Z.getFullYear(), Z.getMonth() - Y[0] * Y[1] + 1, Z.getDate())), e = X && e < X ? X : e; this._daylightSavingAdjust(new Date(tt, J, 1)) > e;) --J < 0 && (J = 11, tt--);
                for (t.drawMonth = J, t.drawYear = tt, i = this._get(t, "prevText"), i = U ? this.formatDate(i, this._daylightSavingAdjust(new Date(tt, J - K, 1)), this._getFormatConfig(t)) : i, n = this._canAdjustMonth(t, -1, tt, J) ? "<a class='ui-datepicker-prev ui-corner-all' data-handler='prev' data-event='click' title='" + i + "'><span class='ui-icon ui-icon-circle-triangle-" + ($ ? "e" : "w") + "'>" + i + "</span></a>" : q ? "" : "<a class='ui-datepicker-prev ui-corner-all ui-state-disabled' title='" + i + "'><span class='ui-icon ui-icon-circle-triangle-" + ($ ? "e" : "w") + "'>" + i + "</span></a>", s = this._get(t, "nextText"), s = U ? this.formatDate(s, this._daylightSavingAdjust(new Date(tt, J + K, 1)), this._getFormatConfig(t)) : s, o = this._canAdjustMonth(t, 1, tt, J) ? "<a class='ui-datepicker-next ui-corner-all' data-handler='next' data-event='click' title='" + s + "'><span class='ui-icon ui-icon-circle-triangle-" + ($ ? "w" : "e") + "'>" + s + "</span></a>" : q ? "" : "<a class='ui-datepicker-next ui-corner-all ui-state-disabled' title='" + s + "'><span class='ui-icon ui-icon-circle-triangle-" + ($ ? "w" : "e") + "'>" + s + "</span></a>", a = this._get(t, "currentText"), r = this._get(t, "gotoCurrent") && t.currentDay ? Q : z, a = U ? this.formatDate(a, r, this._getFormatConfig(t)) : a, l = t.inline ? "" : "<button type='button' class='ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all' data-handler='hide' data-event='click'>" + this._get(t, "closeText") + "</button>", h = W ? "<div class='ui-datepicker-buttonpane ui-widget-content'>" + ($ ? l : "") + (this._isInRange(t, r) ? "<button type='button' class='ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all' data-handler='today' data-event='click'>" + a + "</button>" : "") + ($ ? "" : l) + "</div>" : "", c = parseInt(this._get(t, "firstDay"), 10), c = isNaN(c) ? 0 : c, u = this._get(t, "showWeek"), d = this._get(t, "dayNames"), p = this._get(t, "dayNamesMin"), f = this._get(t, "monthNames"), m = this._get(t, "monthNamesShort"), g = this._get(t, "beforeShowDay"), v = this._get(t, "showOtherMonths"), y = this._get(t, "selectOtherMonths"), b = this._getDefaultDate(t), _ = "", w = 0; w < Y[0]; w++) {
                    for (k = "", this.maxRows = 4, C = 0; C < Y[1]; C++) {
                        if (D = this._daylightSavingAdjust(new Date(tt, J, t.selectedDay)), A = " ui-corner-all", T = "", V) {
                            if (T += "<div class='ui-datepicker-group", Y[1] > 1) switch (C) {
                                case 0:
                                    T += " ui-datepicker-group-first", A = " ui-corner-" + ($ ? "right" : "left");
                                    break;
                                case Y[1] - 1:
                                    T += " ui-datepicker-group-last", A = " ui-corner-" + ($ ? "left" : "right");
                                    break;
                                default:
                                    T += " ui-datepicker-group-middle", A = ""
                            }
                            T += "'>"
                        }
                        for (T += "<div class='ui-datepicker-header ui-widget-header ui-helper-clearfix" + A + "'>" + (/all|left/.test(A) && 0 === w ? $ ? o : n : "") + (/all|right/.test(A) && 0 === w ? $ ? n : o : "") + this._generateMonthYearHeader(t, J, tt, X, Z, w > 0 || C > 0, f, m) + "</div><table class='ui-datepicker-calendar'><thead><tr>", I = u ? "<th class='ui-datepicker-week-col'>" + this._get(t, "weekHeader") + "</th>" : "", x = 0; x < 7; x++) S = (x + c) % 7, I += "<th scope='col'" + ((x + c + 6) % 7 >= 5 ? " class='ui-datepicker-week-end'" : "") + "><span title='" + d[S] + "'>" + p[S] + "</span></th>";
                        for (T += I + "</tr></thead><tbody>", E = this._getDaysInMonth(tt, J), tt === t.selectedYear && J === t.selectedMonth && (t.selectedDay = Math.min(t.selectedDay, E)), P = (this._getFirstDayOfMonth(tt, J) - c + 7) % 7, N = Math.ceil((P + E) / 7), M = V && this.maxRows > N ? this.maxRows : N, this.maxRows = M, O = this._daylightSavingAdjust(new Date(tt, J, 1 - P)), j = 0; j < M; j++) {
                            for (T += "<tr>", H = u ? "<td class='ui-datepicker-week-col'>" + this._get(t, "calculateWeek")(O) + "</td>" : "", x = 0; x < 7; x++) R = g ? g.apply(t.input ? t.input[0] : null, [O]) : [!0, ""], L = (F = O.getMonth() !== J) && !y || !R[0] || X && O < X || Z && O > Z, H += "<td class='" + ((x + c + 6) % 7 >= 5 ? " ui-datepicker-week-end" : "") + (F ? " ui-datepicker-other-month" : "") + (O.getTime() === D.getTime() && J === t.selectedMonth && t._keyEvent || b.getTime() === O.getTime() && b.getTime() === D.getTime() ? " " + this._dayOverClass : "") + (L ? " " + this._unselectableClass + " ui-state-disabled" : "") + (F && !v ? "" : " " + R[1] + (O.getTime() === Q.getTime() ? " " + this._currentClass : "") + (O.getTime() === z.getTime() ? " ui-datepicker-today" : "")) + "'" + (F && !v || !R[2] ? "" : " title='" + R[2].replace(/'/g, "&#39;") + "'") + (L ? "" : " data-handler='selectDay' data-event='click' data-month='" + O.getMonth() + "' data-year='" + O.getFullYear() + "'") + ">" + (F && !v ? "&#xa0;" : L ? "<span class='ui-state-default'>" + O.getDate() + "</span>" : "<a class='ui-state-default" + (O.getTime() === z.getTime() ? " ui-state-highlight" : "") + (O.getTime() === Q.getTime() ? " ui-state-active" : "") + (F ? " ui-priority-secondary" : "") + "' href='#'>" + O.getDate() + "</a>") + "</td>", O.setDate(O.getDate() + 1), O = this._daylightSavingAdjust(O);
                            T += H + "</tr>"
                        }++J > 11 && (J = 0, tt++), k += T += "</tbody></table>" + (V ? "</div>" + (Y[0] > 0 && C === Y[1] - 1 ? "<div class='ui-datepicker-row-break'></div>" : "") : "")
                    }
                    _ += k
                }
                return _ += h, t._keyEvent = !1, _
            },
            _generateMonthYearHeader: function(t, e, i, n, s, o, a, r) {
                var l, h, c, u, d, p, f, m, g = this._get(t, "changeMonth"),
                    v = this._get(t, "changeYear"),
                    y = this._get(t, "showMonthAfterYear"),
                    b = "<div class='ui-datepicker-title'>",
                    _ = "";
                if (o || !g) _ += "<span class='ui-datepicker-month'>" + a[e] + "</span>";
                else {
                    for (l = n && n.getFullYear() === i, h = s && s.getFullYear() === i, _ += "<select class='ui-datepicker-month' data-handler='selectMonth' data-event='change'>", c = 0; c < 12; c++)(!l || c >= n.getMonth()) && (!h || c <= s.getMonth()) && (_ += "<option value='" + c + "'" + (c === e ? " selected='selected'" : "") + ">" + r[c] + "</option>");
                    _ += "</select>"
                }
                if (y || (b += _ + (!o && g && v ? "" : "&#xa0;")), !t.yearshtml)
                    if (t.yearshtml = "", o || !v) b += "<span class='ui-datepicker-year'>" + i + "</span>";
                    else {
                        for (u = this._get(t, "yearRange").split(":"), d = (new Date).getFullYear(), f = (p = function(t) {
                                var e = t.match(/c[+\-].*/) ? i + parseInt(t.substring(1), 10) : t.match(/[+\-].*/) ? d + parseInt(t, 10) : parseInt(t, 10);
                                return isNaN(e) ? d : e
                            })(u[0]), m = Math.max(f, p(u[1] || "")), f = n ? Math.max(f, n.getFullYear()) : f, m = s ? Math.min(m, s.getFullYear()) : m, t.yearshtml += "<select class='ui-datepicker-year' data-handler='selectYear' data-event='change'>"; f <= m; f++) t.yearshtml += "<option value='" + f + "'" + (f === i ? " selected='selected'" : "") + ">" + f + "</option>";
                        t.yearshtml += "</select>", b += t.yearshtml, t.yearshtml = null
                    }
                return b += this._get(t, "yearSuffix"), y && (b += (!o && g && v ? "" : "&#xa0;") + _), b += "</div>"
            },
            _adjustInstDate: function(t, e, i) {
                var n = t.drawYear + ("Y" === i ? e : 0),
                    s = t.drawMonth + ("M" === i ? e : 0),
                    o = Math.min(t.selectedDay, this._getDaysInMonth(n, s)) + ("D" === i ? e : 0),
                    a = this._restrictMinMax(t, this._daylightSavingAdjust(new Date(n, s, o)));
                t.selectedDay = a.getDate(), t.drawMonth = t.selectedMonth = a.getMonth(), t.drawYear = t.selectedYear = a.getFullYear(), "M" !== i && "Y" !== i || this._notifyChange(t)
            },
            _restrictMinMax: function(t, e) {
                var i = this._getMinMaxDate(t, "min"),
                    n = this._getMinMaxDate(t, "max"),
                    s = i && e < i ? i : e;
                return n && s > n ? n : s
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
            _canAdjustMonth: function(t, e, i, n) {
                var s = this._getNumberOfMonths(t),
                    o = this._daylightSavingAdjust(new Date(i, n + (e < 0 ? e : s[0] * s[1]), 1));
                return e < 0 && o.setDate(this._getDaysInMonth(o.getFullYear(), o.getMonth())), this._isInRange(t, o)
            },
            _isInRange: function(t, e) {
                var i, n, s = this._getMinMaxDate(t, "min"),
                    o = this._getMinMaxDate(t, "max"),
                    a = null,
                    r = null,
                    l = this._get(t, "yearRange");
                return l && (i = l.split(":"), n = (new Date).getFullYear(), a = parseInt(i[0], 10), r = parseInt(i[1], 10), i[0].match(/[+\-].*/) && (a += n), i[1].match(/[+\-].*/) && (r += n)), (!s || e.getTime() >= s.getTime()) && (!o || e.getTime() <= o.getTime()) && (!a || e.getFullYear() >= a) && (!r || e.getFullYear() <= r)
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
            _formatDate: function(t, e, i, n) {
                e || (t.currentDay = t.selectedDay, t.currentMonth = t.selectedMonth, t.currentYear = t.selectedYear);
                var s = e ? "object" == typeof e ? e : this._daylightSavingAdjust(new Date(n, i, e)) : this._daylightSavingAdjust(new Date(t.currentYear, t.currentMonth, t.currentDay));
                return this.formatDate(this._get(t, "dateFormat"), s, this._getFormatConfig(t))
            }
        }), t.fn.datepicker = function(e) {
            if (!this.length) return this;
            t.datepicker.initialized || (t(document).mousedown(t.datepicker._checkExternalClick), t.datepicker.initialized = !0), 0 === t("#" + t.datepicker._mainDivId).length && t("body").append(t.datepicker.dpDiv);
            var i = Array.prototype.slice.call(arguments, 1);
            return "string" != typeof e || "isDisabled" !== e && "getDate" !== e && "widget" !== e ? "option" === e && 2 === arguments.length && "string" == typeof arguments[1] ? t.datepicker["_" + e + "Datepicker"].apply(t.datepicker, [this[0]].concat(i)) : this.each(function() {
                "string" == typeof e ? t.datepicker["_" + e + "Datepicker"].apply(t.datepicker, [this].concat(i)) : t.datepicker._attachDatepicker(this, e)
            }) : t.datepicker["_" + e + "Datepicker"].apply(t.datepicker, [this[0]].concat(i))
        }, t.datepicker = new s, t.datepicker.initialized = !1, t.datepicker.uuid = (new Date).getTime(), t.datepicker.version = "1.11.4";
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
                (this.helper || this.element).is(".ui-draggable-dragging") ? this.destroyOnClear = !0 : (this.element.removeClass("ui-draggable ui-draggable-dragging ui-draggable-disabled"), this._removeHandleClassName(), this._mouseDestroy())
            },
            _mouseCapture: function(e) {
                var i = this.options;
                return this._blurActiveElement(e), !(this.helper || i.disabled || t(e.target).closest(".ui-resizable-handle").length > 0) && (this.handle = this._getHandle(e), !!this.handle && (this._blockFrames(!0 === i.iframeFix ? "iframe" : i.iframeFix), !0))
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
                } catch (t) {}
            },
            _mouseStart: function(e) {
                var i = this.options;
                return this.helper = this._createHelper(e), this.helper.addClass("ui-draggable-dragging"), this._cacheHelperProportions(), t.ui.ddmanager && (t.ui.ddmanager.current = this), this._cacheMargins(), this.cssPosition = this.helper.css("position"), this.scrollParent = this.helper.scrollParent(!0), this.offsetParent = this.helper.offsetParent(), this.hasFixedAncestor = this.helper.parents().filter(function() {
                    return "fixed" === t(this).css("position")
                }).length > 0, this.positionAbs = this.element.offset(), this._refreshOffsets(e), this.originalPosition = this.position = this._generatePosition(e, !1), this.originalPageX = e.pageX, this.originalPageY = e.pageY, i.cursorAt && this._adjustOffsetFromHelper(i.cursorAt), this._setContainment(), !1 === this._trigger("start", e) ? (this._clear(), !1) : (this._cacheHelperProportions(), t.ui.ddmanager && !i.dropBehaviour && t.ui.ddmanager.prepareOffsets(this, e), this._normalizeRightBottom(), this._mouseDrag(e, !0), t.ui.ddmanager && t.ui.ddmanager.dragStart(this, e), !0)
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
                    var n = this._uiHash();
                    if (!1 === this._trigger("drag", e, n)) return this._mouseUp({}), !1;
                    this.position = n.position
                }
                return this.helper[0].style.left = this.position.left + "px", this.helper[0].style.top = this.position.top + "px", t.ui.ddmanager && t.ui.ddmanager.drag(this, e), !1
            },
            _mouseStop: function(e) {
                var i = this,
                    n = !1;
                return t.ui.ddmanager && !this.options.dropBehaviour && (n = t.ui.ddmanager.drop(this, e)), this.dropped && (n = this.dropped, this.dropped = !1), "invalid" === this.options.revert && !n || "valid" === this.options.revert && n || !0 === this.options.revert || t.isFunction(this.options.revert) && this.options.revert.call(this.element, n) ? t(this.helper).animate(this.originalPosition, parseInt(this.options.revertDuration, 10), function() {
                    !1 !== i._trigger("stop", e) && i._clear()
                }) : !1 !== this._trigger("stop", e) && this._clear(), !1
            },
            _mouseUp: function(e) {
                return this._unblockFrames(), t.ui.ddmanager && t.ui.ddmanager.dragStop(this, e), this.handleElement.is(e.target) && this.element.focus(), t.ui.mouse.prototype._mouseUp.call(this, e)
            },
            cancel: function() {
                return this.helper.is(".ui-draggable-dragging") ? this._mouseUp({}) : this._clear(), this
            },
            _getHandle: function(e) {
                return !this.options.handle || !!t(e.target).closest(this.element.find(this.options.handle)).length
            },
            _setHandleClassName: function() {
                this.handleElement = this.options.handle ? this.element.find(this.options.handle) : this.element, this.handleElement.addClass("ui-draggable-handle")
            },
            _removeHandleClassName: function() {
                this.handleElement.removeClass("ui-draggable-handle")
            },
            _createHelper: function(e) {
                var i = this.options,
                    n = t.isFunction(i.helper),
                    s = n ? t(i.helper.apply(this.element[0], [e])) : "clone" === i.helper ? this.element.clone().removeAttr("id") : this.element;
                return s.parents("body").length || s.appendTo("parent" === i.appendTo ? this.element[0].parentNode : i.appendTo), n && s[0] === this.element[0] && this._setPositionRelative(), s[0] === this.element[0] || /(fixed|absolute)/.test(s.css("position")) || s.css("position", "absolute"), s
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
                var e, i, n, s = this.options,
                    o = this.document[0];
                this.relativeContainer = null, s.containment ? "window" !== s.containment ? "document" !== s.containment ? s.containment.constructor !== Array ? ("parent" === s.containment && (s.containment = this.helper[0].parentNode), (n = (i = t(s.containment))[0]) && (e = /(scroll|auto)/.test(i.css("overflow")), this.containment = [(parseInt(i.css("borderLeftWidth"), 10) || 0) + (parseInt(i.css("paddingLeft"), 10) || 0), (parseInt(i.css("borderTopWidth"), 10) || 0) + (parseInt(i.css("paddingTop"), 10) || 0), (e ? Math.max(n.scrollWidth, n.offsetWidth) : n.offsetWidth) - (parseInt(i.css("borderRightWidth"), 10) || 0) - (parseInt(i.css("paddingRight"), 10) || 0) - this.helperProportions.width - this.margins.left - this.margins.right, (e ? Math.max(n.scrollHeight, n.offsetHeight) : n.offsetHeight) - (parseInt(i.css("borderBottomWidth"), 10) || 0) - (parseInt(i.css("paddingBottom"), 10) || 0) - this.helperProportions.height - this.margins.top - this.margins.bottom], this.relativeContainer = i)) : this.containment = s.containment : this.containment = [0, 0, t(o).width() - this.helperProportions.width - this.margins.left, (t(o).height() || o.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top] : this.containment = [t(window).scrollLeft() - this.offset.relative.left - this.offset.parent.left, t(window).scrollTop() - this.offset.relative.top - this.offset.parent.top, t(window).scrollLeft() + t(window).width() - this.helperProportions.width - this.margins.left, t(window).scrollTop() + (t(window).height() || o.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top] : this.containment = null
            },
            _convertPositionTo: function(t, e) {
                e || (e = this.position);
                var i = "absolute" === t ? 1 : -1,
                    n = this._isRootNode(this.scrollParent[0]);
                return {
                    top: e.top + this.offset.relative.top * i + this.offset.parent.top * i - ("fixed" === this.cssPosition ? -this.offset.scroll.top : n ? 0 : this.offset.scroll.top) * i,
                    left: e.left + this.offset.relative.left * i + this.offset.parent.left * i - ("fixed" === this.cssPosition ? -this.offset.scroll.left : n ? 0 : this.offset.scroll.left) * i
                }
            },
            _generatePosition: function(t, e) {
                var i, n, s, o, a = this.options,
                    r = this._isRootNode(this.scrollParent[0]),
                    l = t.pageX,
                    h = t.pageY;
                return r && this.offset.scroll || (this.offset.scroll = {
                    top: this.scrollParent.scrollTop(),
                    left: this.scrollParent.scrollLeft()
                }), e && (this.containment && (this.relativeContainer ? (n = this.relativeContainer.offset(), i = [this.containment[0] + n.left, this.containment[1] + n.top, this.containment[2] + n.left, this.containment[3] + n.top]) : i = this.containment, t.pageX - this.offset.click.left < i[0] && (l = i[0] + this.offset.click.left), t.pageY - this.offset.click.top < i[1] && (h = i[1] + this.offset.click.top), t.pageX - this.offset.click.left > i[2] && (l = i[2] + this.offset.click.left), t.pageY - this.offset.click.top > i[3] && (h = i[3] + this.offset.click.top)), a.grid && (s = a.grid[1] ? this.originalPageY + Math.round((h - this.originalPageY) / a.grid[1]) * a.grid[1] : this.originalPageY, h = i ? s - this.offset.click.top >= i[1] || s - this.offset.click.top > i[3] ? s : s - this.offset.click.top >= i[1] ? s - a.grid[1] : s + a.grid[1] : s, o = a.grid[0] ? this.originalPageX + Math.round((l - this.originalPageX) / a.grid[0]) * a.grid[0] : this.originalPageX, l = i ? o - this.offset.click.left >= i[0] || o - this.offset.click.left > i[2] ? o : o - this.offset.click.left >= i[0] ? o - a.grid[0] : o + a.grid[0] : o), "y" === a.axis && (l = this.originalPageX), "x" === a.axis && (h = this.originalPageY)), {
                    top: h - this.offset.click.top - this.offset.relative.top - this.offset.parent.top + ("fixed" === this.cssPosition ? -this.offset.scroll.top : r ? 0 : this.offset.scroll.top),
                    left: l - this.offset.click.left - this.offset.relative.left - this.offset.parent.left + ("fixed" === this.cssPosition ? -this.offset.scroll.left : r ? 0 : this.offset.scroll.left)
                }
            },
            _clear: function() {
                this.helper.removeClass("ui-draggable-dragging"), this.helper[0] === this.element[0] || this.cancelHelperRemoval || this.helper.remove(), this.helper = null, this.cancelHelperRemoval = !1, this.destroyOnClear && this.destroy()
            },
            _normalizeRightBottom: function() {
                "y" !== this.options.axis && "auto" !== this.helper.css("right") && (this.helper.width(this.helper.width()), this.helper.css("right", "auto")), "x" !== this.options.axis && "auto" !== this.helper.css("bottom") && (this.helper.height(this.helper.height()), this.helper.css("bottom", "auto"))
            },
            _trigger: function(e, i, n) {
                return n = n || this._uiHash(), t.ui.plugin.call(this, e, [i, n, this], !0), /^(drag|start|stop)/.test(e) && (this.positionAbs = this._convertPositionTo("absolute"), n.offset = this.positionAbs), t.Widget.prototype._trigger.call(this, e, i, n)
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
            start: function(e, i, n) {
                var s = t.extend({}, i, {
                    item: n.element
                });
                n.sortables = [], t(n.options.connectToSortable).each(function() {
                    var i = t(this).sortable("instance");
                    i && !i.options.disabled && (n.sortables.push(i), i.refreshPositions(), i._trigger("activate", e, s))
                })
            },
            stop: function(e, i, n) {
                var s = t.extend({}, i, {
                    item: n.element
                });
                n.cancelHelperRemoval = !1, t.each(n.sortables, function() {
                    var t = this;
                    t.isOver ? (t.isOver = 0, n.cancelHelperRemoval = !0, t.cancelHelperRemoval = !1, t._storedCSS = {
                        position: t.placeholder.css("position"),
                        top: t.placeholder.css("top"),
                        left: t.placeholder.css("left")
                    }, t._mouseStop(e), t.options.helper = t.options._helper) : (t.cancelHelperRemoval = !0, t._trigger("deactivate", e, s))
                })
            },
            drag: function(e, i, n) {
                t.each(n.sortables, function() {
                    var s = !1,
                        o = this;
                    o.positionAbs = n.positionAbs, o.helperProportions = n.helperProportions, o.offset.click = n.offset.click, o._intersectsWith(o.containerCache) && (s = !0, t.each(n.sortables, function() {
                        return this.positionAbs = n.positionAbs, this.helperProportions = n.helperProportions, this.offset.click = n.offset.click, this !== o && this._intersectsWith(this.containerCache) && t.contains(o.element[0], this.element[0]) && (s = !1), s
                    })), s ? (o.isOver || (o.isOver = 1, n._parent = i.helper.parent(), o.currentItem = i.helper.appendTo(o.element).data("ui-sortable-item", !0), o.options._helper = o.options.helper, o.options.helper = function() {
                        return i.helper[0]
                    }, e.target = o.currentItem[0], o._mouseCapture(e, !0), o._mouseStart(e, !0, !0), o.offset.click.top = n.offset.click.top, o.offset.click.left = n.offset.click.left, o.offset.parent.left -= n.offset.parent.left - o.offset.parent.left, o.offset.parent.top -= n.offset.parent.top - o.offset.parent.top, n._trigger("toSortable", e), n.dropped = o.element, t.each(n.sortables, function() {
                        this.refreshPositions()
                    }), n.currentItem = n.element, o.fromOutside = n), o.currentItem && (o._mouseDrag(e), i.position = o.position)) : o.isOver && (o.isOver = 0, o.cancelHelperRemoval = !0, o.options._revert = o.options.revert, o.options.revert = !1, o._trigger("out", e, o._uiHash(o)), o._mouseStop(e, !0), o.options.revert = o.options._revert, o.options.helper = o.options._helper, o.placeholder && o.placeholder.remove(), i.helper.appendTo(n._parent), n._refreshOffsets(e), i.position = n._generatePosition(e, !0), n._trigger("fromSortable", e), n.dropped = !1, t.each(n.sortables, function() {
                        this.refreshPositions()
                    }))
                })
            }
        }), t.ui.plugin.add("draggable", "cursor", {
            start: function(e, i, n) {
                var s = t("body"),
                    o = n.options;
                s.css("cursor") && (o._cursor = s.css("cursor")), s.css("cursor", o.cursor)
            },
            stop: function(e, i, n) {
                var s = n.options;
                s._cursor && t("body").css("cursor", s._cursor)
            }
        }), t.ui.plugin.add("draggable", "opacity", {
            start: function(e, i, n) {
                var s = t(i.helper),
                    o = n.options;
                s.css("opacity") && (o._opacity = s.css("opacity")), s.css("opacity", o.opacity)
            },
            stop: function(e, i, n) {
                var s = n.options;
                s._opacity && t(i.helper).css("opacity", s._opacity)
            }
        }), t.ui.plugin.add("draggable", "scroll", {
            start: function(t, e, i) {
                i.scrollParentNotHidden || (i.scrollParentNotHidden = i.helper.scrollParent(!1)), i.scrollParentNotHidden[0] !== i.document[0] && "HTML" !== i.scrollParentNotHidden[0].tagName && (i.overflowOffset = i.scrollParentNotHidden.offset())
            },
            drag: function(e, i, n) {
                var s = n.options,
                    o = !1,
                    a = n.scrollParentNotHidden[0],
                    r = n.document[0];
                a !== r && "HTML" !== a.tagName ? (s.axis && "x" === s.axis || (n.overflowOffset.top + a.offsetHeight - e.pageY < s.scrollSensitivity ? a.scrollTop = o = a.scrollTop + s.scrollSpeed : e.pageY - n.overflowOffset.top < s.scrollSensitivity && (a.scrollTop = o = a.scrollTop - s.scrollSpeed)), s.axis && "y" === s.axis || (n.overflowOffset.left + a.offsetWidth - e.pageX < s.scrollSensitivity ? a.scrollLeft = o = a.scrollLeft + s.scrollSpeed : e.pageX - n.overflowOffset.left < s.scrollSensitivity && (a.scrollLeft = o = a.scrollLeft - s.scrollSpeed))) : (s.axis && "x" === s.axis || (e.pageY - t(r).scrollTop() < s.scrollSensitivity ? o = t(r).scrollTop(t(r).scrollTop() - s.scrollSpeed) : t(window).height() - (e.pageY - t(r).scrollTop()) < s.scrollSensitivity && (o = t(r).scrollTop(t(r).scrollTop() + s.scrollSpeed))), s.axis && "y" === s.axis || (e.pageX - t(r).scrollLeft() < s.scrollSensitivity ? o = t(r).scrollLeft(t(r).scrollLeft() - s.scrollSpeed) : t(window).width() - (e.pageX - t(r).scrollLeft()) < s.scrollSensitivity && (o = t(r).scrollLeft(t(r).scrollLeft() + s.scrollSpeed)))), !1 !== o && t.ui.ddmanager && !s.dropBehaviour && t.ui.ddmanager.prepareOffsets(n, e)
            }
        }), t.ui.plugin.add("draggable", "snap", {
            start: function(e, i, n) {
                var s = n.options;
                n.snapElements = [], t(s.snap.constructor !== String ? s.snap.items || ":data(ui-draggable)" : s.snap).each(function() {
                    var e = t(this),
                        i = e.offset();
                    this !== n.element[0] && n.snapElements.push({
                        item: this,
                        width: e.outerWidth(),
                        height: e.outerHeight(),
                        top: i.top,
                        left: i.left
                    })
                })
            },
            drag: function(e, i, n) {
                var s, o, a, r, l, h, c, u, d, p, f = n.options,
                    m = f.snapTolerance,
                    g = i.offset.left,
                    v = g + n.helperProportions.width,
                    y = i.offset.top,
                    b = y + n.helperProportions.height;
                for (d = n.snapElements.length - 1; d >= 0; d--) h = (l = n.snapElements[d].left - n.margins.left) + n.snapElements[d].width, u = (c = n.snapElements[d].top - n.margins.top) + n.snapElements[d].height, v < l - m || g > h + m || b < c - m || y > u + m || !t.contains(n.snapElements[d].item.ownerDocument, n.snapElements[d].item) ? (n.snapElements[d].snapping && n.options.snap.release && n.options.snap.release.call(n.element, e, t.extend(n._uiHash(), {
                    snapItem: n.snapElements[d].item
                })), n.snapElements[d].snapping = !1) : ("inner" !== f.snapMode && (s = Math.abs(c - b) <= m, o = Math.abs(u - y) <= m, a = Math.abs(l - v) <= m, r = Math.abs(h - g) <= m, s && (i.position.top = n._convertPositionTo("relative", {
                    top: c - n.helperProportions.height,
                    left: 0
                }).top), o && (i.position.top = n._convertPositionTo("relative", {
                    top: u,
                    left: 0
                }).top), a && (i.position.left = n._convertPositionTo("relative", {
                    top: 0,
                    left: l - n.helperProportions.width
                }).left), r && (i.position.left = n._convertPositionTo("relative", {
                    top: 0,
                    left: h
                }).left)), p = s || o || a || r, "outer" !== f.snapMode && (s = Math.abs(c - y) <= m, o = Math.abs(u - b) <= m, a = Math.abs(l - g) <= m, r = Math.abs(h - v) <= m, s && (i.position.top = n._convertPositionTo("relative", {
                    top: c,
                    left: 0
                }).top), o && (i.position.top = n._convertPositionTo("relative", {
                    top: u - n.helperProportions.height,
                    left: 0
                }).top), a && (i.position.left = n._convertPositionTo("relative", {
                    top: 0,
                    left: l
                }).left), r && (i.position.left = n._convertPositionTo("relative", {
                    top: 0,
                    left: h - n.helperProportions.width
                }).left)), !n.snapElements[d].snapping && (s || o || a || r || p) && n.options.snap.snap && n.options.snap.snap.call(n.element, e, t.extend(n._uiHash(), {
                    snapItem: n.snapElements[d].item
                })), n.snapElements[d].snapping = s || o || a || r || p)
            }
        }), t.ui.plugin.add("draggable", "stack", {
            start: function(e, i, n) {
                var s, o = n.options,
                    a = t.makeArray(t(o.stack)).sort(function(e, i) {
                        return (parseInt(t(e).css("zIndex"), 10) || 0) - (parseInt(t(i).css("zIndex"), 10) || 0)
                    });
                a.length && (s = parseInt(t(a[0]).css("zIndex"), 10) || 0, t(a).each(function(e) {
                    t(this).css("zIndex", s + e)
                }), this.css("zIndex", s + a.length))
            }
        }), t.ui.plugin.add("draggable", "zIndex", {
            start: function(e, i, n) {
                var s = t(i.helper),
                    o = n.options;
                s.css("zIndex") && (o._zIndex = s.css("zIndex")), s.css("zIndex", o.zIndex)
            },
            stop: function(e, i, n) {
                var s = n.options;
                s._zIndex && t(i.helper).css("zIndex", s._zIndex)
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
                var n = i && "left" === i ? "scrollLeft" : "scrollTop",
                    s = !1;
                return e[n] > 0 || (e[n] = 1, s = e[n] > 0, e[n] = 0, s)
            },
            _create: function() {
                var e, i, n, s, o = this,
                    a = this.options;
                if (this.element.addClass("ui-resizable"), t.extend(this, {
                        _aspectRatio: !!a.aspectRatio,
                        aspectRatio: a.aspectRatio,
                        originalElement: this.element,
                        _proportionallyResizeElements: [],
                        _helper: a.helper || a.ghost || a.animate ? a.helper || "ui-resizable-helper" : null
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
                    }), this._proportionallyResize()), this.handles = a.handles || (t(".ui-resizable-handle", this.element).length ? {
                        n: ".ui-resizable-n",
                        e: ".ui-resizable-e",
                        s: ".ui-resizable-s",
                        w: ".ui-resizable-w",
                        se: ".ui-resizable-se",
                        sw: ".ui-resizable-sw",
                        ne: ".ui-resizable-ne",
                        nw: ".ui-resizable-nw"
                    } : "e,s,se"), this._handles = t(), this.handles.constructor === String)
                    for ("all" === this.handles && (this.handles = "n,e,s,w,se,sw,ne,nw"), e = this.handles.split(","), this.handles = {}, i = 0; i < e.length; i++) n = t.trim(e[i]), (s = t("<div class='ui-resizable-handle " + ("ui-resizable-" + n) + "'></div>")).css({
                        zIndex: a.zIndex
                    }), "se" === n && s.addClass("ui-icon ui-icon-gripsmall-diagonal-se"), this.handles[n] = ".ui-resizable-" + n, this.element.append(s);
                this._renderAxis = function(e) {
                    var i, n, s, a;
                    e = e || this.element;
                    for (i in this.handles) this.handles[i].constructor === String ? this.handles[i] = this.element.children(this.handles[i]).first().show() : (this.handles[i].jquery || this.handles[i].nodeType) && (this.handles[i] = t(this.handles[i]), this._on(this.handles[i], {
                        mousedown: o._mouseDown
                    })), this.elementIsWrapper && this.originalElement[0].nodeName.match(/^(textarea|input|select|button)$/i) && (n = t(this.handles[i], this.element), a = /sw|ne|nw|se|n|s/.test(i) ? n.outerHeight() : n.outerWidth(), s = ["padding", /ne|nw|n/.test(i) ? "Top" : /se|sw|s/.test(i) ? "Bottom" : /^e$/.test(i) ? "Right" : "Left"].join(""), e.css(s, a), this._proportionallyResize()), this._handles = this._handles.add(this.handles[i])
                }, this._renderAxis(this.element), this._handles = this._handles.add(this.element.find(".ui-resizable-handle")), this._handles.disableSelection(), this._handles.mouseover(function() {
                    o.resizing || (this.className && (s = this.className.match(/ui-resizable-(se|sw|ne|nw|n|e|s|w)/i)), o.axis = s && s[1] ? s[1] : "se")
                }), a.autoHide && (this._handles.hide(), t(this.element).addClass("ui-resizable-autohide").mouseenter(function() {
                    a.disabled || (t(this).removeClass("ui-resizable-autohide"), o._handles.show())
                }).mouseleave(function() {
                    a.disabled || o.resizing || (t(this).addClass("ui-resizable-autohide"), o._handles.hide())
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
                var i, n, s = !1;
                for (i in this.handles)((n = t(this.handles[i])[0]) === e.target || t.contains(n, e.target)) && (s = !0);
                return !this.options.disabled && s
            },
            _mouseStart: function(e) {
                var i, n, s, o = this.options,
                    a = this.element;
                return this.resizing = !0, this._renderProxy(), i = this._num(this.helper.css("left")), n = this._num(this.helper.css("top")), o.containment && (i += t(o.containment).scrollLeft() || 0, n += t(o.containment).scrollTop() || 0), this.offset = this.helper.offset(), this.position = {
                    left: i,
                    top: n
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
                    top: n
                }, this.originalMousePosition = {
                    left: e.pageX,
                    top: e.pageY
                }, this.aspectRatio = "number" == typeof o.aspectRatio ? o.aspectRatio : this.originalSize.width / this.originalSize.height || 1, s = t(".ui-resizable-" + this.axis).css("cursor"), t("body").css("cursor", "auto" === s ? this.axis + "-resize" : s), a.addClass("ui-resizable-resizing"), this._propagate("start", e), !0
            },
            _mouseDrag: function(e) {
                var i, n, s = this.originalMousePosition,
                    o = this.axis,
                    a = e.pageX - s.left || 0,
                    r = e.pageY - s.top || 0,
                    l = this._change[o];
                return this._updatePrevProperties(), !!l && (i = l.apply(this, [e, a, r]), this._updateVirtualBoundaries(e.shiftKey), (this._aspectRatio || e.shiftKey) && (i = this._updateRatio(i, e)), i = this._respectSize(i, e), this._updateCache(i), this._propagate("resize", e), n = this._applyChanges(), !this._helper && this._proportionallyResizeElements.length && this._proportionallyResize(), t.isEmptyObject(n) || (this._updatePrevProperties(), this._trigger("resize", e, this.ui()), this._applyChanges()), !1)
            },
            _mouseStop: function(e) {
                this.resizing = !1;
                var i, n, s, o, a, r, l, h = this.options,
                    c = this;
                return this._helper && (s = (n = (i = this._proportionallyResizeElements).length && /textarea/i.test(i[0].nodeName)) && this._hasScroll(i[0], "left") ? 0 : c.sizeDiff.height, o = n ? 0 : c.sizeDiff.width, a = {
                    width: c.helper.width() - o,
                    height: c.helper.height() - s
                }, r = parseInt(c.element.css("left"), 10) + (c.position.left - c.originalPosition.left) || null, l = parseInt(c.element.css("top"), 10) + (c.position.top - c.originalPosition.top) || null, h.animate || this.element.css(t.extend(a, {
                    top: l,
                    left: r
                })), c.helper.height(c.size.height), c.helper.width(c.size.width), this._helper && !h.animate && this._proportionallyResize()), t("body").css("cursor", "auto"), this.element.removeClass("ui-resizable-resizing"), this._propagate("stop", e), this._helper && this.helper.remove(), !1
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
                var e, i, n, s, o, a = this.options;
                o = {
                    minWidth: this._isNumber(a.minWidth) ? a.minWidth : 0,
                    maxWidth: this._isNumber(a.maxWidth) ? a.maxWidth : 1 / 0,
                    minHeight: this._isNumber(a.minHeight) ? a.minHeight : 0,
                    maxHeight: this._isNumber(a.maxHeight) ? a.maxHeight : 1 / 0
                }, (this._aspectRatio || t) && (e = o.minHeight * this.aspectRatio, n = o.minWidth / this.aspectRatio, i = o.maxHeight * this.aspectRatio, s = o.maxWidth / this.aspectRatio, e > o.minWidth && (o.minWidth = e), n > o.minHeight && (o.minHeight = n), i < o.maxWidth && (o.maxWidth = i), s < o.maxHeight && (o.maxHeight = s)), this._vBoundaries = o
            },
            _updateCache: function(t) {
                this.offset = this.helper.offset(), this._isNumber(t.left) && (this.position.left = t.left), this._isNumber(t.top) && (this.position.top = t.top), this._isNumber(t.height) && (this.size.height = t.height), this._isNumber(t.width) && (this.size.width = t.width)
            },
            _updateRatio: function(t) {
                var e = this.position,
                    i = this.size,
                    n = this.axis;
                return this._isNumber(t.height) ? t.width = t.height * this.aspectRatio : this._isNumber(t.width) && (t.height = t.width / this.aspectRatio), "sw" === n && (t.left = e.left + (i.width - t.width), t.top = null), "nw" === n && (t.top = e.top + (i.height - t.height), t.left = e.left + (i.width - t.width)), t
            },
            _respectSize: function(t) {
                var e = this._vBoundaries,
                    i = this.axis,
                    n = this._isNumber(t.width) && e.maxWidth && e.maxWidth < t.width,
                    s = this._isNumber(t.height) && e.maxHeight && e.maxHeight < t.height,
                    o = this._isNumber(t.width) && e.minWidth && e.minWidth > t.width,
                    a = this._isNumber(t.height) && e.minHeight && e.minHeight > t.height,
                    r = this.originalPosition.left + this.originalSize.width,
                    l = this.position.top + this.size.height,
                    h = /sw|nw|w/.test(i),
                    c = /nw|ne|n/.test(i);
                return o && (t.width = e.minWidth), a && (t.height = e.minHeight), n && (t.width = e.maxWidth), s && (t.height = e.maxHeight), o && h && (t.left = r - e.minWidth), n && h && (t.left = r - e.maxWidth), a && c && (t.top = l - e.minHeight), s && c && (t.top = l - e.maxHeight), t.width || t.height || t.left || !t.top ? t.width || t.height || t.top || !t.left || (t.left = null) : t.top = null, t
            },
            _getPaddingPlusBorderDimensions: function(t) {
                for (var e = 0, i = [], n = [t.css("borderTopWidth"), t.css("borderRightWidth"), t.css("borderBottomWidth"), t.css("borderLeftWidth")], s = [t.css("paddingTop"), t.css("paddingRight"), t.css("paddingBottom"), t.css("paddingLeft")]; e < 4; e++) i[e] = parseInt(n[e], 10) || 0, i[e] += parseInt(s[e], 10) || 0;
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
                    var i = this.originalSize;
                    return {
                        left: this.originalPosition.left + e,
                        width: i.width - e
                    }
                },
                n: function(t, e, i) {
                    var n = this.originalSize;
                    return {
                        top: this.originalPosition.top + i,
                        height: n.height - i
                    }
                },
                s: function(t, e, i) {
                    return {
                        height: this.originalSize.height + i
                    }
                },
                se: function(e, i, n) {
                    return t.extend(this._change.s.apply(this, arguments), this._change.e.apply(this, [e, i, n]))
                },
                sw: function(e, i, n) {
                    return t.extend(this._change.s.apply(this, arguments), this._change.w.apply(this, [e, i, n]))
                },
                ne: function(e, i, n) {
                    return t.extend(this._change.n.apply(this, arguments), this._change.e.apply(this, [e, i, n]))
                },
                nw: function(e, i, n) {
                    return t.extend(this._change.n.apply(this, arguments), this._change.w.apply(this, [e, i, n]))
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
                    n = i.options,
                    s = i._proportionallyResizeElements,
                    o = s.length && /textarea/i.test(s[0].nodeName),
                    a = o && i._hasScroll(s[0], "left") ? 0 : i.sizeDiff.height,
                    r = o ? 0 : i.sizeDiff.width,
                    l = {
                        width: i.size.width - r,
                        height: i.size.height - a
                    },
                    h = parseInt(i.element.css("left"), 10) + (i.position.left - i.originalPosition.left) || null,
                    c = parseInt(i.element.css("top"), 10) + (i.position.top - i.originalPosition.top) || null;
                i.element.animate(t.extend(l, c && h ? {
                    top: c,
                    left: h
                } : {}), {
                    duration: n.animateDuration,
                    easing: n.animateEasing,
                    step: function() {
                        var n = {
                            width: parseInt(i.element.css("width"), 10),
                            height: parseInt(i.element.css("height"), 10),
                            top: parseInt(i.element.css("top"), 10),
                            left: parseInt(i.element.css("left"), 10)
                        };
                        s && s.length && t(s[0]).css({
                            width: n.width,
                            height: n.height
                        }), i._updateCache(n), i._propagate("resize", e)
                    }
                })
            }
        }), t.ui.plugin.add("resizable", "containment", {
            start: function() {
                var e, i, n, s, o, a, r, l = t(this).resizable("instance"),
                    h = l.options,
                    c = l.element,
                    u = h.containment,
                    d = u instanceof t ? u.get(0) : /parent/.test(u) ? c.parent().get(0) : u;
                d && (l.containerElement = t(d), /document/.test(u) || u === document ? (l.containerOffset = {
                    left: 0,
                    top: 0
                }, l.containerPosition = {
                    left: 0,
                    top: 0
                }, l.parentData = {
                    element: t(document),
                    left: 0,
                    top: 0,
                    width: t(document).width(),
                    height: t(document).height() || document.body.parentNode.scrollHeight
                }) : (e = t(d), i = [], t(["Top", "Right", "Left", "Bottom"]).each(function(t, n) {
                    i[t] = l._num(e.css("padding" + n))
                }), l.containerOffset = e.offset(), l.containerPosition = e.position(), l.containerSize = {
                    height: e.innerHeight() - i[3],
                    width: e.innerWidth() - i[1]
                }, n = l.containerOffset, s = l.containerSize.height, o = l.containerSize.width, a = l._hasScroll(d, "left") ? d.scrollWidth : o, r = l._hasScroll(d) ? d.scrollHeight : s, l.parentData = {
                    element: d,
                    left: n.left,
                    top: n.top,
                    width: a,
                    height: r
                }))
            },
            resize: function(e) {
                var i, n, s, o, a = t(this).resizable("instance"),
                    r = a.options,
                    l = a.containerOffset,
                    h = a.position,
                    c = a._aspectRatio || e.shiftKey,
                    u = {
                        top: 0,
                        left: 0
                    },
                    d = a.containerElement,
                    p = !0;
                d[0] !== document && /static/.test(d.css("position")) && (u = l), h.left < (a._helper ? l.left : 0) && (a.size.width = a.size.width + (a._helper ? a.position.left - l.left : a.position.left - u.left), c && (a.size.height = a.size.width / a.aspectRatio, p = !1), a.position.left = r.helper ? l.left : 0), h.top < (a._helper ? l.top : 0) && (a.size.height = a.size.height + (a._helper ? a.position.top - l.top : a.position.top), c && (a.size.width = a.size.height * a.aspectRatio, p = !1), a.position.top = a._helper ? l.top : 0), s = a.containerElement.get(0) === a.element.parent().get(0), o = /relative|absolute/.test(a.containerElement.css("position")), s && o ? (a.offset.left = a.parentData.left + a.position.left, a.offset.top = a.parentData.top + a.position.top) : (a.offset.left = a.element.offset().left, a.offset.top = a.element.offset().top), i = Math.abs(a.sizeDiff.width + (a._helper ? a.offset.left - u.left : a.offset.left - l.left)), n = Math.abs(a.sizeDiff.height + (a._helper ? a.offset.top - u.top : a.offset.top - l.top)), i + a.size.width >= a.parentData.width && (a.size.width = a.parentData.width - i, c && (a.size.height = a.size.width / a.aspectRatio, p = !1)), n + a.size.height >= a.parentData.height && (a.size.height = a.parentData.height - n, c && (a.size.width = a.size.height * a.aspectRatio, p = !1)), p || (a.position.left = a.prevPosition.left, a.position.top = a.prevPosition.top, a.size.width = a.prevSize.width, a.size.height = a.prevSize.height)
            },
            stop: function() {
                var e = t(this).resizable("instance"),
                    i = e.options,
                    n = e.containerOffset,
                    s = e.containerPosition,
                    o = e.containerElement,
                    a = t(e.helper),
                    r = a.offset(),
                    l = a.outerWidth() - e.sizeDiff.width,
                    h = a.outerHeight() - e.sizeDiff.height;
                e._helper && !i.animate && /relative/.test(o.css("position")) && t(this).css({
                    left: r.left - s.left - n.left,
                    width: l,
                    height: h
                }), e._helper && !i.animate && /static/.test(o.css("position")) && t(this).css({
                    left: r.left - s.left - n.left,
                    width: l,
                    height: h
                })
            }
        }), t.ui.plugin.add("resizable", "alsoResize", {
            start: function() {
                var e = t(this).resizable("instance").options;
                t(e.alsoResize).each(function() {
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
                var n = t(this).resizable("instance"),
                    s = n.options,
                    o = n.originalSize,
                    a = n.originalPosition,
                    r = {
                        height: n.size.height - o.height || 0,
                        width: n.size.width - o.width || 0,
                        top: n.position.top - a.top || 0,
                        left: n.position.left - a.left || 0
                    };
                t(s.alsoResize).each(function() {
                    var e = t(this),
                        n = t(this).data("ui-resizable-alsoresize"),
                        s = {},
                        o = e.parents(i.originalElement[0]).length ? ["width", "height"] : ["width", "height", "top", "left"];
                    t.each(o, function(t, e) {
                        var i = (n[e] || 0) + (r[e] || 0);
                        i && i >= 0 && (s[e] = i || null)
                    }), e.css(s)
                })
            },
            stop: function() {
                t(this).removeData("resizable-alsoresize")
            }
        }), t.ui.plugin.add("resizable", "ghost", {
            start: function() {
                var e = t(this).resizable("instance"),
                    i = e.options,
                    n = e.size;
                e.ghost = e.originalElement.clone(), e.ghost.css({
                    opacity: .25,
                    display: "block",
                    position: "relative",
                    height: n.height,
                    width: n.width,
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
                    n = i.options,
                    s = i.size,
                    o = i.originalSize,
                    a = i.originalPosition,
                    r = i.axis,
                    l = "number" == typeof n.grid ? [n.grid, n.grid] : n.grid,
                    h = l[0] || 1,
                    c = l[1] || 1,
                    u = Math.round((s.width - o.width) / h) * h,
                    d = Math.round((s.height - o.height) / c) * c,
                    p = o.width + u,
                    f = o.height + d,
                    m = n.maxWidth && n.maxWidth < p,
                    g = n.maxHeight && n.maxHeight < f,
                    v = n.minWidth && n.minWidth > p,
                    y = n.minHeight && n.minHeight > f;
                n.grid = l, v && (p += h), y && (f += c), m && (p -= h), g && (f -= c), /^(se|s|e)$/.test(r) ? (i.size.width = p, i.size.height = f) : /^(ne)$/.test(r) ? (i.size.width = p, i.size.height = f, i.position.top = a.top - d) : /^(sw)$/.test(r) ? (i.size.width = p, i.size.height = f, i.position.left = a.left - u) : ((f - c <= 0 || p - h <= 0) && (e = i._getPaddingPlusBorderDimensions(this)), f - c > 0 ? (i.size.height = f, i.position.top = a.top - d) : (f = c - e.height, i.size.height = f, i.position.top = a.top + o.height - f), p - h > 0 ? (i.size.width = p, i.position.left = a.left - u) : (p = h - e.width, i.size.width = p, i.position.left = a.left + o.width - p))
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
                        i < 0 && t(this).css("top", e.top - i)
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
                this._untrackInstance(), this._destroyOverlay(), this.element.removeUniqueId().removeClass("ui-dialog-content ui-widget-content").css(this.originalCss).detach(), this.uiDialog.stop(!0, !0).remove(), this.originalTitle && this.element.attr("title", this.originalTitle), (t = e.parent.children().eq(e.index)).length && t[0] !== this.element[0] ? t.before(this.element) : e.parent.append(this.element)
            },
            widget: function() {
                return this.uiDialog
            },
            disable: t.noop,
            enable: t.noop,
            close: function(e) {
                var i, n = this;
                if (this._isOpen && !1 !== this._trigger("beforeClose", e)) {
                    if (this._isOpen = !1, this._focusedElement = null, this._destroyOverlay(), this._untrackInstance(), !this.opener.filter(":focusable").focus().length) try {
                        (i = this.document[0].activeElement) && "body" !== i.nodeName.toLowerCase() && t(i).blur()
                    } catch (t) {}
                    this._hide(this.uiDialog, this.options.hide, function() {
                        n._trigger("close", e)
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
                var n = !1,
                    s = this.uiDialog.siblings(".ui-front:visible").map(function() {
                        return +t(this).css("z-index")
                    }).get(),
                    o = Math.max.apply(null, s);
                return o >= +this.uiDialog.css("z-index") && (this.uiDialog.css("z-index", o + 1), n = !0), n && !i && this._trigger("focus", e), n
            },
            open: function() {
                var e = this;
                this._isOpen ? this._moveToTop() && this._focusTabbable() : (this._isOpen = !0, this.opener = t(this.document[0].activeElement), this._size(), this._position(), this._createOverlay(), this._moveToTop(null, !0), this.overlay && this.overlay.css("z-index", this.uiDialog.css("z-index") - 1), this._show(this.uiDialog, this.options.show, function() {
                    e._focusTabbable(), e._trigger("focus")
                }), this._makeFocusTarget(), this._trigger("open"))
            },
            _focusTabbable: function() {
                var t = this._focusedElement;
                t || (t = this.element.find("[autofocus]")), t.length || (t = this.element.find(":tabbable")), t.length || (t = this.uiDialogButtonPane.find(":tabbable")), t.length || (t = this.uiDialogTitlebarClose.filter(":tabbable")), t.length || (t = this.uiDialog), t.eq(0).focus()
            },
            _keepFocus: function(e) {
                function i() {
                    var e = this.document[0].activeElement;
                    this.uiDialog[0] === e || t.contains(this.uiDialog[0], e) || this._focusTabbable()
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
                                n = i.filter(":first"),
                                s = i.filter(":last");
                            e.target !== s[0] && e.target !== this.uiDialog[0] || e.shiftKey ? e.target !== n[0] && e.target !== this.uiDialog[0] || !e.shiftKey || (this._delay(function() {
                                s.focus()
                            }), e.preventDefault()) : (this._delay(function() {
                                n.focus()
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
                this.uiDialogButtonPane.remove(), this.uiButtonSet.empty(), t.isEmptyObject(i) || t.isArray(i) && !i.length ? this.uiDialog.removeClass("ui-dialog-buttons") : (t.each(i, function(i, n) {
                    var s, o;
                    n = t.isFunction(n) ? {
                        click: n,
                        text: i
                    } : n, n = t.extend({
                        type: "button"
                    }, n), s = n.click, n.click = function() {
                        s.apply(e.element[0], arguments)
                    }, o = {
                        icons: n.icons,
                        text: n.showText
                    }, delete n.icons, delete n.showText, t("<button></button>", n).button(o).appendTo(e.uiButtonSet)
                }), this.uiDialog.addClass("ui-dialog-buttons"), this.uiDialogButtonPane.appendTo(this.uiDialog))
            },
            _makeDraggable: function() {
                function e(t) {
                    return {
                        position: t.position,
                        offset: t.offset
                    }
                }
                var i = this,
                    n = this.options;
                this.uiDialog.draggable({
                    cancel: ".ui-dialog-content, .ui-dialog-titlebar-close",
                    handle: ".ui-dialog-titlebar",
                    containment: "document",
                    start: function(n, s) {
                        t(this).addClass("ui-dialog-dragging"), i._blockFrames(), i._trigger("dragStart", n, e(s))
                    },
                    drag: function(t, n) {
                        i._trigger("drag", t, e(n))
                    },
                    stop: function(s, o) {
                        var a = o.offset.left - i.document.scrollLeft(),
                            r = o.offset.top - i.document.scrollTop();
                        n.position = {
                            my: "left top",
                            at: "left" + (a >= 0 ? "+" : "") + a + " top" + (r >= 0 ? "+" : "") + r,
                            of: i.window
                        }, t(this).removeClass("ui-dialog-dragging"), i._unblockFrames(), i._trigger("dragStop", s, e(o))
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
                    n = this.options,
                    s = n.resizable,
                    o = this.uiDialog.css("position"),
                    a = "string" == typeof s ? s : "n,e,s,w,se,sw,ne,nw";
                this.uiDialog.resizable({
                    cancel: ".ui-dialog-content",
                    containment: "document",
                    alsoResize: this.element,
                    maxWidth: n.maxWidth,
                    maxHeight: n.maxHeight,
                    minWidth: n.minWidth,
                    minHeight: this._minHeight(),
                    handles: a,
                    start: function(n, s) {
                        t(this).addClass("ui-dialog-resizing"), i._blockFrames(), i._trigger("resizeStart", n, e(s))
                    },
                    resize: function(t, n) {
                        i._trigger("resize", t, e(n))
                    },
                    stop: function(s, o) {
                        var a = i.uiDialog.offset(),
                            r = a.left - i.document.scrollLeft(),
                            l = a.top - i.document.scrollTop();
                        n.height = i.uiDialog.height(), n.width = i.uiDialog.width(), n.position = {
                            my: "left top",
                            at: "left" + (r >= 0 ? "+" : "") + r + " top" + (l >= 0 ? "+" : "") + l,
                            of: i.window
                        }, t(this).removeClass("ui-dialog-resizing"), i._unblockFrames(), i._trigger("resizeStop", s, e(o))
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
                    n = !1,
                    s = {};
                t.each(e, function(t, e) {
                    i._setOption(t, e), t in i.sizeRelatedOptions && (n = !0), t in i.resizableRelatedOptions && (s[t] = e)
                }), n && (this._size(), this._position()), this.uiDialog.is(":data(ui-resizable)") && this.uiDialog.resizable("option", s)
            },
            _setOption: function(t, e) {
                var i, n, s = this.uiDialog;
                "dialogClass" === t && s.removeClass(this.options.dialogClass).addClass(e), "disabled" !== t && (this._super(t, e), "appendTo" === t && this.uiDialog.appendTo(this._appendTo()), "buttons" === t && this._createButtons(), "closeText" === t && this.uiDialogTitlebarClose.button({
                    label: "" + e
                }), "draggable" === t && ((i = s.is(":data(ui-draggable)")) && !e && s.draggable("destroy"), !i && e && this._makeDraggable()), "position" === t && this._position(), "resizable" === t && ((n = s.is(":data(ui-resizable)")) && !e && s.resizable("destroy"), n && "string" == typeof e && s.resizable("option", "handles", e), n || !1 === e || this._makeResizable()), "title" === t && this._title(this.uiDialogTitlebar.find(".ui-dialog-title")))
            },
            _size: function() {
                var t, e, i, n = this.options;
                this.element.show().css({
                    width: "auto",
                    minHeight: 0,
                    maxHeight: "none",
                    height: 0
                }), n.minWidth > n.width && (n.width = n.minWidth), t = this.uiDialog.css({
                    height: "auto",
                    width: n.width
                }).outerHeight(), e = Math.max(0, n.minHeight - t), i = "number" == typeof n.maxHeight ? Math.max(0, n.maxHeight - t) : "none", "auto" === n.height ? this.element.css({
                    minHeight: e,
                    maxHeight: i,
                    height: "auto"
                }) : this.element.height(Math.max(0, n.height - t)), this.uiDialog.is(":data(ui-resizable)") && this.uiDialog.resizable("option", "minHeight", this._minHeight())
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
                return !!t(e.target).closest(".ui-dialog").length || !!t(e.target).closest(".ui-datepicker").length
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
                    n = i.accept;
                this.isover = !1, this.isout = !0, this.accept = t.isFunction(n) ? n : function(t) {
                    return t.is(n)
                }, this.proportions = function() {
                    if (!arguments.length) return e || (e = {
                        width: this.element[0].offsetWidth,
                        height: this.element[0].offsetHeight
                    });
                    e = arguments[0]
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
                    var n = t.ui.ddmanager.droppables[this.options.scope];
                    this._splice(n), this._addToManager(i)
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
                var n = i || t.ui.ddmanager.current,
                    s = !1;
                return !(!n || (n.currentItem || n.element)[0] === this.element[0]) && (this.element.find(":data(ui-droppable)").not(".ui-draggable-dragging").each(function() {
                    var i = t(this).droppable("instance");
                    if (i.options.greedy && !i.options.disabled && i.options.scope === n.options.scope && i.accept.call(i.element[0], n.currentItem || n.element) && t.ui.intersect(n, t.extend(i, {
                            offset: i.element.offset()
                        }), i.options.tolerance, e)) return s = !0, !1
                }), !s && (!!this.accept.call(this.element[0], n.currentItem || n.element) && (this.options.activeClass && this.element.removeClass(this.options.activeClass), this.options.hoverClass && this.element.removeClass(this.options.hoverClass), this._trigger("drop", e, this.ui(n)), this.element)))
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
                return t >= e && t < e + i
            }
            return function(e, i, n, s) {
                if (!i.offset) return !1;
                var o = (e.positionAbs || e.position.absolute).left + e.margins.left,
                    a = (e.positionAbs || e.position.absolute).top + e.margins.top,
                    r = o + e.helperProportions.width,
                    l = a + e.helperProportions.height,
                    h = i.offset.left,
                    c = i.offset.top,
                    u = h + i.proportions().width,
                    d = c + i.proportions().height;
                switch (n) {
                    case "fit":
                        return h <= o && r <= u && c <= a && l <= d;
                    case "intersect":
                        return h < o + e.helperProportions.width / 2 && r - e.helperProportions.width / 2 < u && c < a + e.helperProportions.height / 2 && l - e.helperProportions.height / 2 < d;
                    case "pointer":
                        return t(s.pageY, c, i.proportions().height) && t(s.pageX, h, i.proportions().width);
                    case "touch":
                        return (a >= c && a <= d || l >= c && l <= d || a < c && l > d) && (o >= h && o <= u || r >= h && r <= u || o < h && r > u);
                    default:
                        return !1
                }
            }
        }(), t.ui.ddmanager = {
            current: null,
            droppables: {
                default: []
            },
            prepareOffsets: function(e, i) {
                var n, s, o = t.ui.ddmanager.droppables[e.options.scope] || [],
                    a = i ? i.type : null,
                    r = (e.currentItem || e.element).find(":data(ui-droppable)").addBack();
                t: for (n = 0; n < o.length; n++)
                    if (!(o[n].options.disabled || e && !o[n].accept.call(o[n].element[0], e.currentItem || e.element))) {
                        for (s = 0; s < r.length; s++)
                            if (r[s] === o[n].element[0]) {
                                o[n].proportions().height = 0;
                                continue t
                            }
                        o[n].visible = "none" !== o[n].element.css("display"), o[n].visible && ("mousedown" === a && o[n]._activate.call(o[n], i), o[n].offset = o[n].element.offset(), o[n].proportions({
                            width: o[n].element[0].offsetWidth,
                            height: o[n].element[0].offsetHeight
                        }))
                    }
            },
            drop: function(e, i) {
                var n = !1;
                return t.each((t.ui.ddmanager.droppables[e.options.scope] || []).slice(), function() {
                    this.options && (!this.options.disabled && this.visible && t.ui.intersect(e, this, this.options.tolerance, i) && (n = this._drop.call(this, i) || n), !this.options.disabled && this.visible && this.accept.call(this.element[0], e.currentItem || e.element) && (this.isout = !0, this.isover = !1, this._deactivate.call(this, i)))
                }), n
            },
            dragStart: function(e, i) {
                e.element.parentsUntil("body").bind("scroll.droppable", function() {
                    e.options.refreshPositions || t.ui.ddmanager.prepareOffsets(e, i)
                })
            },
            drag: function(e, i) {
                e.options.refreshPositions && t.ui.ddmanager.prepareOffsets(e, i), t.each(t.ui.ddmanager.droppables[e.options.scope] || [], function() {
                    if (!this.options.disabled && !this.greedyChild && this.visible) {
                        var n, s, o, a = t.ui.intersect(e, this, this.options.tolerance, i),
                            r = !a && this.isover ? "isout" : a && !this.isover ? "isover" : null;
                        r && (this.options.greedy && (s = this.options.scope, (o = this.element.parents(":data(ui-droppable)").filter(function() {
                            return t(this).droppable("instance").options.scope === s
                        })).length && ((n = t(o[0]).droppable("instance")).greedyChild = "isover" === r)), n && "isover" === r && (n.isover = !1, n.isout = !0, n._out.call(n, i)), this[r] = !0, this["isout" === r ? "isover" : "isout"] = !1, this["isover" === r ? "_over" : "_out"].call(this, i), n && "isout" === r && (n.isout = !1, n.isover = !0, n._over.call(n, i)))
                    }
                })
            },
            dragStop: function(e, i) {
                e.element.parentsUntil("body").unbind("scroll.droppable"), e.options.refreshPositions || t.ui.ddmanager.prepareOffsets(e, i)
            }
        };
        t.ui.droppable;
        var y = t;
        t.effects = {
                effect: {}
            },
            function(t, e) {
                function i(t, e, i) {
                    var n = c[e.type] || {};
                    return null == t ? i || !e.def ? null : e.def : (t = n.floor ? ~~t : parseFloat(t), isNaN(t) ? e.def : n.mod ? (t + n.mod) % n.mod : 0 > t ? 0 : n.max < t ? n.max : t)
                }

                function n(e) {
                    var i = l(),
                        n = i._rgba = [];
                    return e = e.toLowerCase(), p(r, function(t, s) {
                        var o, a = s.re.exec(e),
                            r = a && s.parse(a),
                            l = s.space || "rgba";
                        if (r) return o = i[l](r), i[h[l].cache] = o[h[l].cache], n = i._rgba = o._rgba, !1
                    }), n.length ? ("0,0,0,0" === n.join() && t.extend(n, o.transparent), i) : o[e]
                }

                function s(t, e, i) {
                    return 6 * (i = (i + 1) % 1) < 1 ? t + (e - t) * i * 6 : 2 * i < 1 ? e : 3 * i < 2 ? t + (e - t) * (2 / 3 - i) * 6 : t
                }
                var o, a = /^([\-+])=\s*(\d+\.?\d*)/,
                    r = [{
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
                    l = t.Color = function(e, i, n, s) {
                        return new t.Color.fn.parse(e, i, n, s)
                    },
                    h = {
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
                        byte: {
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
                    u = l.support = {},
                    d = t("<p>")[0],
                    p = t.each;
                d.style.cssText = "background-color:rgba(1,1,1,.5)", u.rgba = d.style.backgroundColor.indexOf("rgba") > -1, p(h, function(t, e) {
                    e.cache = "_" + t, e.props.alpha = {
                        idx: 3,
                        type: "percent",
                        def: 1
                    }
                }), l.fn = t.extend(l.prototype, {
                    parse: function(e, s, a, r) {
                        if (void 0 === e) return this._rgba = [null, null, null, null], this;
                        (e.jquery || e.nodeType) && (e = t(e).css(s), s = void 0);
                        var c = this,
                            u = t.type(e),
                            d = this._rgba = [];
                        return void 0 !== s && (e = [e, s, a, r], u = "array"), "string" === u ? this.parse(n(e) || o._default) : "array" === u ? (p(h.rgba.props, function(t, n) {
                            d[n.idx] = i(e[n.idx], n)
                        }), this) : "object" === u ? (e instanceof l ? p(h, function(t, i) {
                            e[i.cache] && (c[i.cache] = e[i.cache].slice())
                        }) : p(h, function(n, s) {
                            var o = s.cache;
                            p(s.props, function(t, n) {
                                if (!c[o] && s.to) {
                                    if ("alpha" === t || null == e[t]) return;
                                    c[o] = s.to(c._rgba)
                                }
                                c[o][n.idx] = i(e[t], n, !0)
                            }), c[o] && t.inArray(null, c[o].slice(0, 3)) < 0 && (c[o][3] = 1, s.from && (c._rgba = s.from(c[o])))
                        }), this) : void 0
                    },
                    is: function(t) {
                        var e = l(t),
                            i = !0,
                            n = this;
                        return p(h, function(t, s) {
                            var o, a = e[s.cache];
                            return a && (o = n[s.cache] || s.to && s.to(n._rgba) || [], p(s.props, function(t, e) {
                                if (null != a[e.idx]) return i = a[e.idx] === o[e.idx]
                            })), i
                        }), i
                    },
                    _space: function() {
                        var t = [],
                            e = this;
                        return p(h, function(i, n) {
                            e[n.cache] && t.push(i)
                        }), t.pop()
                    },
                    transition: function(t, e) {
                        var n = l(t),
                            s = n._space(),
                            o = h[s],
                            a = 0 === this.alpha() ? l("transparent") : this,
                            r = a[o.cache] || o.to(a._rgba),
                            u = r.slice();
                        return n = n[o.cache], p(o.props, function(t, s) {
                            var o = s.idx,
                                a = r[o],
                                l = n[o],
                                h = c[s.type] || {};
                            null !== l && (null === a ? u[o] = l : (h.mod && (l - a > h.mod / 2 ? a += h.mod : a - l > h.mod / 2 && (a -= h.mod)), u[o] = i((l - a) * e + a, s)))
                        }), this[s](u)
                    },
                    blend: function(e) {
                        if (1 === this._rgba[3]) return this;
                        var i = this._rgba.slice(),
                            n = i.pop(),
                            s = l(e)._rgba;
                        return l(t.map(i, function(t, e) {
                            return (1 - n) * s[e] + n * t
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
                                return null == t && (t = e > 2 ? 1 : 0), e && e < 3 && (t = Math.round(100 * t) + "%"), t
                            });
                        return 1 === i[3] && (i.pop(), e = "hsl("), e + i.join() + ")"
                    },
                    toHexString: function(e) {
                        var i = this._rgba.slice(),
                            n = i.pop();
                        return e && i.push(~~(255 * n)), "#" + t.map(i, function(t) {
                            return 1 === (t = (t || 0).toString(16)).length ? "0" + t : t
                        }).join("")
                    },
                    toString: function() {
                        return 0 === this._rgba[3] ? "transparent" : this.toRgbaString()
                    }
                }), l.fn.parse.prototype = l.fn, h.hsla.to = function(t) {
                    if (null == t[0] || null == t[1] || null == t[2]) return [null, null, null, t[3]];
                    var e, i, n = t[0] / 255,
                        s = t[1] / 255,
                        o = t[2] / 255,
                        a = t[3],
                        r = Math.max(n, s, o),
                        l = Math.min(n, s, o),
                        h = r - l,
                        c = r + l,
                        u = .5 * c;
                    return e = l === r ? 0 : n === r ? 60 * (s - o) / h + 360 : s === r ? 60 * (o - n) / h + 120 : 60 * (n - s) / h + 240, i = 0 === h ? 0 : u <= .5 ? h / c : h / (2 - c), [Math.round(e) % 360, i, u, null == a ? 1 : a]
                }, h.hsla.from = function(t) {
                    if (null == t[0] || null == t[1] || null == t[2]) return [null, null, null, t[3]];
                    var e = t[0] / 360,
                        i = t[1],
                        n = t[2],
                        o = t[3],
                        a = n <= .5 ? n * (1 + i) : n + i - n * i,
                        r = 2 * n - a;
                    return [Math.round(255 * s(r, a, e + 1 / 3)), Math.round(255 * s(r, a, e)), Math.round(255 * s(r, a, e - 1 / 3)), o]
                }, p(h, function(e, n) {
                    var s = n.props,
                        o = n.cache,
                        r = n.to,
                        h = n.from;
                    l.fn[e] = function(e) {
                        if (r && !this[o] && (this[o] = r(this._rgba)), void 0 === e) return this[o].slice();
                        var n, a = t.type(e),
                            c = "array" === a || "object" === a ? e : arguments,
                            u = this[o].slice();
                        return p(s, function(t, e) {
                            var n = c["object" === a ? t : e.idx];
                            null == n && (n = u[e.idx]), u[e.idx] = i(n, e)
                        }), h ? (n = l(h(u)), n[o] = u, n) : l(u)
                    }, p(s, function(i, n) {
                        l.fn[i] || (l.fn[i] = function(s) {
                            var o, r = t.type(s),
                                l = "alpha" === i ? this._hsla ? "hsla" : "rgba" : e,
                                h = this[l](),
                                c = h[n.idx];
                            return "undefined" === r ? c : ("function" === r && (s = s.call(this, c), r = t.type(s)), null == s && n.empty ? this : ("string" === r && (o = a.exec(s)) && (s = c + parseFloat(o[2]) * ("+" === o[1] ? 1 : -1)), h[n.idx] = s, this[l](h)))
                        })
                    })
                }), l.hook = function(e) {
                    var i = e.split(" ");
                    p(i, function(e, i) {
                        t.cssHooks[i] = {
                            set: function(e, s) {
                                var o, a, r = "";
                                if ("transparent" !== s && ("string" !== t.type(s) || (o = n(s)))) {
                                    if (s = l(o || s), !u.rgba && 1 !== s._rgba[3]) {
                                        for (a = "backgroundColor" === i ? e.parentNode : e;
                                            ("" === r || "transparent" === r) && a && a.style;) try {
                                            r = t.css(a, "backgroundColor"), a = a.parentNode
                                        } catch (t) {}
                                        s = s.blend(r && "transparent" !== r ? r : "_default")
                                    }
                                    s = s.toRgbaString()
                                }
                                try {
                                    e.style[i] = s
                                } catch (t) {}
                            }
                        }, t.fx.step[i] = function(e) {
                            e.colorInit || (e.start = l(e.elem, i), e.end = l(e.end), e.colorInit = !0), t.cssHooks[i].set(e.elem, e.start.transition(e.end, e.pos))
                        }
                    })
                }, l.hook("backgroundColor borderBottomColor borderLeftColor borderRightColor borderTopColor color columnRuleColor outlineColor textDecorationColor textEmphasisColor"), t.cssHooks.borderColor = {
                    expand: function(t) {
                        var e = {};
                        return p(["Top", "Right", "Bottom", "Left"], function(i, n) {
                            e["border" + n + "Color"] = t
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
            }(y),
            function() {
                function e(e) {
                    var i, n, s = e.ownerDocument.defaultView ? e.ownerDocument.defaultView.getComputedStyle(e, null) : e.currentStyle,
                        o = {};
                    if (s && s.length && s[0] && s[s[0]])
                        for (n = s.length; n--;) "string" == typeof s[i = s[n]] && (o[t.camelCase(i)] = s[i]);
                    else
                        for (i in s) "string" == typeof s[i] && (o[i] = s[i]);
                    return o
                }

                function i(e, i) {
                    var n, o, a = {};
                    for (n in i) o = i[n], e[n] !== o && (s[n] || !t.fx.step[n] && isNaN(parseFloat(o)) || (a[n] = o));
                    return a
                }
                var n = ["add", "remove", "toggle"],
                    s = {
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
                        ("none" !== t.end && !t.setAttr || 1 === t.pos && !t.setAttr) && (y.style(t.elem, i, t.end), t.setAttr = !0)
                    }
                }), t.fn.addBack || (t.fn.addBack = function(t) {
                    return this.add(null == t ? this.prevObject : this.prevObject.filter(t))
                }), t.effects.animateClass = function(s, o, a, r) {
                    var l = t.speed(o, a, r);
                    return this.queue(function() {
                        var o, a = t(this),
                            r = a.attr("class") || "",
                            h = l.children ? a.find("*").addBack() : a;
                        h = h.map(function() {
                            return {
                                el: t(this),
                                start: e(this)
                            }
                        }), (o = function() {
                            t.each(n, function(t, e) {
                                s[e] && a[e + "Class"](s[e])
                            })
                        })(), h = h.map(function() {
                            return this.end = e(this.el[0]), this.diff = i(this.start, this.end), this
                        }), a.attr("class", r), h = h.map(function() {
                            var e = this,
                                i = t.Deferred(),
                                n = t.extend({}, l, {
                                    queue: !1,
                                    complete: function() {
                                        i.resolve(e)
                                    }
                                });
                            return this.el.animate(this.diff, n), i.promise()
                        }), t.when.apply(t, h.get()).done(function() {
                            o(), t.each(arguments, function() {
                                var e = this.el;
                                t.each(this.diff, function(t) {
                                    e.css(t, "")
                                })
                            }), l.complete.call(a[0])
                        })
                    })
                }, t.fn.extend({
                    addClass: function(e) {
                        return function(i, n, s, o) {
                            return n ? t.effects.animateClass.call(this, {
                                add: i
                            }, n, s, o) : e.apply(this, arguments)
                        }
                    }(t.fn.addClass),
                    removeClass: function(e) {
                        return function(i, n, s, o) {
                            return arguments.length > 1 ? t.effects.animateClass.call(this, {
                                remove: i
                            }, n, s, o) : e.apply(this, arguments)
                        }
                    }(t.fn.removeClass),
                    toggleClass: function(e) {
                        return function(i, n, s, o, a) {
                            return "boolean" == typeof n || void 0 === n ? s ? t.effects.animateClass.call(this, n ? {
                                add: i
                            } : {
                                remove: i
                            }, s, o, a) : e.apply(this, arguments) : t.effects.animateClass.call(this, {
                                toggle: i
                            }, n, s, o)
                        }
                    }(t.fn.toggleClass),
                    switchClass: function(e, i, n, s, o) {
                        return t.effects.animateClass.call(this, {
                            add: i,
                            remove: e
                        }, n, s, o)
                    }
                })
            }(),
            function() {
                function e(e, i, n, s) {
                    return t.isPlainObject(e) && (i = e, e = e.effect), e = {
                        effect: e
                    }, null == i && (i = {}), t.isFunction(i) && (s = i, n = null, i = {}), ("number" == typeof i || t.fx.speeds[i]) && (s = n, n = i, i = {}), t.isFunction(n) && (s = n, n = null), i && t.extend(e, i), n = n || i.duration, e.duration = t.fx.off ? 0 : "number" == typeof n ? n : n in t.fx.speeds ? t.fx.speeds[n] : t.fx.speeds._default, e.complete = s || i.complete, e
                }

                function i(e) {
                    return !(e && "number" != typeof e && !t.fx.speeds[e]) || ("string" == typeof e && !t.effects.effect[e] || (!!t.isFunction(e) || "object" == typeof e && !e.effect))
                }
                t.extend(t.effects, {
                    version: "1.11.4",
                    save: function(t, e) {
                        for (var i = 0; i < e.length; i++) null !== e[i] && t.data("ui-effects-" + e[i], t[0].style[e[i]])
                    },
                    restore: function(t, e) {
                        var i, n;
                        for (n = 0; n < e.length; n++) null !== e[n] && (void 0 === (i = t.data("ui-effects-" + e[n])) && (i = ""), t.css(e[n], i))
                    },
                    setMode: function(t, e) {
                        return "toggle" === e && (e = t.is(":hidden") ? "show" : "hide"), e
                    },
                    getBaseline: function(t, e) {
                        var i, n;
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
                                n = 0;
                                break;
                            case "center":
                                n = .5;
                                break;
                            case "right":
                                n = 1;
                                break;
                            default:
                                n = t[1] / e.width
                        }
                        return {
                            x: n,
                            y: i
                        }
                    },
                    createWrapper: function(e) {
                        if (e.parent().is(".ui-effects-wrapper")) return e.parent();
                        var i = {
                                width: e.outerWidth(!0),
                                height: e.outerHeight(!0),
                                float: e.css("float")
                            },
                            n = t("<div></div>").addClass("ui-effects-wrapper").css({
                                fontSize: "100%",
                                background: "transparent",
                                border: "none",
                                margin: 0,
                                padding: 0
                            }),
                            s = {
                                width: e.width(),
                                height: e.height()
                            },
                            o = document.activeElement;
                        try {
                            o.id
                        } catch (t) {
                            o = document.body
                        }
                        return e.wrap(n), (e[0] === o || t.contains(e[0], o)) && t(o).focus(), n = e.parent(), "static" === e.css("position") ? (n.css({
                            position: "relative"
                        }), e.css({
                            position: "relative"
                        })) : (t.extend(i, {
                            position: e.css("position"),
                            zIndex: e.css("z-index")
                        }), t.each(["top", "left", "bottom", "right"], function(t, n) {
                            i[n] = e.css(n), isNaN(parseInt(i[n], 10)) && (i[n] = "auto")
                        }), e.css({
                            position: "relative",
                            top: 0,
                            left: 0,
                            right: "auto",
                            bottom: "auto"
                        })), e.css(s), n.css(i).show()
                    },
                    removeWrapper: function(e) {
                        var i = document.activeElement;
                        return e.parent().is(".ui-effects-wrapper") && (e.parent().replaceWith(e), (e[0] === i || t.contains(e[0], i)) && t(i).focus()), e
                    },
                    setTransition: function(e, i, n, s) {
                        return s = s || {}, t.each(i, function(t, i) {
                            var o = e.cssUnit(i);
                            o[0] > 0 && (s[i] = o[0] * n + o[1])
                        }), s
                    }
                }), t.fn.extend({
                    effect: function() {
                        function i(e) {
                            function i() {
                                t.isFunction(o) && o.call(s[0]), t.isFunction(e) && e()
                            }
                            var s = t(this),
                                o = n.complete,
                                r = n.mode;
                            (s.is(":hidden") ? "hide" === r : "show" === r) ? (s[r](), i()) : a.call(s[0], n, i)
                        }
                        var n = e.apply(this, arguments),
                            s = n.mode,
                            o = n.queue,
                            a = t.effects.effect[n.effect];
                        return t.fx.off || !a ? s ? this[s](n.duration, n.complete) : this.each(function() {
                            n.complete && n.complete.call(this)
                        }) : !1 === o ? this.each(i) : this.queue(o || "fx", i)
                    },
                    show: function(t) {
                        return function(n) {
                            if (i(n)) return t.apply(this, arguments);
                            var s = e.apply(this, arguments);
                            return s.mode = "show", this.effect.call(this, s)
                        }
                    }(t.fn.show),
                    hide: function(t) {
                        return function(n) {
                            if (i(n)) return t.apply(this, arguments);
                            var s = e.apply(this, arguments);
                            return s.mode = "hide", this.effect.call(this, s)
                        }
                    }(t.fn.hide),
                    toggle: function(t) {
                        return function(n) {
                            if (i(n) || "boolean" == typeof n) return t.apply(this, arguments);
                            var s = e.apply(this, arguments);
                            return s.mode = "toggle", this.effect.call(this, s)
                        }
                    }(t.fn.toggle),
                    cssUnit: function(e) {
                        var i = this.css(e),
                            n = [];
                        return t.each(["em", "px", "%", "pt"], function(t, e) {
                            i.indexOf(e) > 0 && (n = [parseFloat(i), e])
                        }), n
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
                        return t < .5 ? i(2 * t) / 2 : 1 - i(-2 * t + 2) / 2
                    }
                })
            }();
        t.effects, t.effects.effect.blind = function(e, i) {
            var n, s, o, a = t(this),
                r = /up|down|vertical/,
                l = /up|left|vertical|horizontal/,
                h = ["position", "top", "bottom", "left", "right", "height", "width"],
                c = t.effects.setMode(a, e.mode || "hide"),
                u = e.direction || "up",
                d = r.test(u),
                p = d ? "height" : "width",
                f = d ? "top" : "left",
                m = l.test(u),
                g = {},
                v = "show" === c;
            a.parent().is(".ui-effects-wrapper") ? t.effects.save(a.parent(), h) : t.effects.save(a, h), a.show(), s = (n = t.effects.createWrapper(a).css({
                overflow: "hidden"
            }))[p](), o = parseFloat(n.css(f)) || 0, g[p] = v ? s : 0, m || (a.css(d ? "bottom" : "right", 0).css(d ? "top" : "left", "auto").css({
                position: "absolute"
            }), g[f] = v ? o : s + o), v && (n.css(p, 0), m || n.css(f, o + s)), n.animate(g, {
                duration: e.duration,
                easing: e.easing,
                queue: !1,
                complete: function() {
                    "hide" === c && a.hide(), t.effects.restore(a, h), t.effects.removeWrapper(a), i()
                }
            })
        }, t.effects.effect.bounce = function(e, i) {
            var n, s, o, a = t(this),
                r = ["position", "top", "bottom", "left", "right", "height", "width"],
                l = t.effects.setMode(a, e.mode || "effect"),
                h = "hide" === l,
                c = "show" === l,
                u = e.direction || "up",
                d = e.distance,
                p = e.times || 5,
                f = 2 * p + (c || h ? 1 : 0),
                m = e.duration / f,
                g = e.easing,
                v = "up" === u || "down" === u ? "top" : "left",
                y = "up" === u || "left" === u,
                b = a.queue(),
                _ = b.length;
            for ((c || h) && r.push("opacity"), t.effects.save(a, r), a.show(), t.effects.createWrapper(a), d || (d = a["top" === v ? "outerHeight" : "outerWidth"]() / 3), c && ((o = {
                    opacity: 1
                })[v] = 0, a.css("opacity", 0).css(v, y ? 2 * -d : 2 * d).animate(o, m, g)), h && (d /= Math.pow(2, p - 1)), (o = {})[v] = 0, n = 0; n < p; n++)(s = {})[v] = (y ? "-=" : "+=") + d, a.animate(s, m, g).animate(o, m, g), d = h ? 2 * d : d / 2;
            h && ((s = {
                opacity: 0
            })[v] = (y ? "-=" : "+=") + d, a.animate(s, m, g)), a.queue(function() {
                h && a.hide(), t.effects.restore(a, r), t.effects.removeWrapper(a), i()
            }), _ > 1 && b.splice.apply(b, [1, 0].concat(b.splice(_, f + 1))), a.dequeue()
        }, t.effects.effect.clip = function(e, i) {
            var n, s, o, a = t(this),
                r = ["position", "top", "bottom", "left", "right", "height", "width"],
                l = "show" === t.effects.setMode(a, e.mode || "hide"),
                h = "vertical" === (e.direction || "vertical"),
                c = h ? "height" : "width",
                u = h ? "top" : "left",
                d = {};
            t.effects.save(a, r), a.show(), n = t.effects.createWrapper(a).css({
                overflow: "hidden"
            }), o = (s = "IMG" === a[0].tagName ? n : a)[c](), l && (s.css(c, 0), s.css(u, o / 2)), d[c] = l ? o : 0, d[u] = l ? 0 : o / 2, s.animate(d, {
                queue: !1,
                duration: e.duration,
                easing: e.easing,
                complete: function() {
                    l || a.hide(), t.effects.restore(a, r), t.effects.removeWrapper(a), i()
                }
            })
        }, t.effects.effect.drop = function(e, i) {
            var n, s = t(this),
                o = ["position", "top", "bottom", "left", "right", "opacity", "height", "width"],
                a = t.effects.setMode(s, e.mode || "hide"),
                r = "show" === a,
                l = e.direction || "left",
                h = "up" === l || "down" === l ? "top" : "left",
                c = "up" === l || "left" === l ? "pos" : "neg",
                u = {
                    opacity: r ? 1 : 0
                };
            t.effects.save(s, o), s.show(), t.effects.createWrapper(s), n = e.distance || s["top" === h ? "outerHeight" : "outerWidth"](!0) / 2, r && s.css("opacity", 0).css(h, "pos" === c ? -n : n), u[h] = (r ? "pos" === c ? "+=" : "-=" : "pos" === c ? "-=" : "+=") + n, s.animate(u, {
                queue: !1,
                duration: e.duration,
                easing: e.easing,
                complete: function() {
                    "hide" === a && s.hide(), t.effects.restore(s, o), t.effects.removeWrapper(s), i()
                }
            })
        }, t.effects.effect.explode = function(e, i) {
            function n() {
                d.css({
                    visibility: "visible"
                }), t(v).remove(), p || d.hide(), i()
            }
            var s, o, a, r, l, h, c = e.pieces ? Math.round(Math.sqrt(e.pieces)) : 3,
                u = c,
                d = t(this),
                p = "show" === t.effects.setMode(d, e.mode || "hide"),
                f = d.show().css("visibility", "hidden").offset(),
                m = Math.ceil(d.outerWidth() / u),
                g = Math.ceil(d.outerHeight() / c),
                v = [];
            for (s = 0; s < c; s++)
                for (r = f.top + s * g, h = s - (c - 1) / 2, o = 0; o < u; o++) a = f.left + o * m, l = o - (u - 1) / 2, d.clone().appendTo("body").wrap("<div></div>").css({
                    position: "absolute",
                    visibility: "visible",
                    left: -o * m,
                    top: -s * g
                }).parent().addClass("ui-effects-explode").css({
                    position: "absolute",
                    overflow: "hidden",
                    width: m,
                    height: g,
                    left: a + (p ? l * m : 0),
                    top: r + (p ? h * g : 0),
                    opacity: p ? 0 : 1
                }).animate({
                    left: a + (p ? 0 : l * m),
                    top: r + (p ? 0 : h * g),
                    opacity: p ? 1 : 0
                }, e.duration || 500, e.easing, function() {
                    v.push(this), v.length === c * u && n()
                })
        }, t.effects.effect.fade = function(e, i) {
            var n = t(this),
                s = t.effects.setMode(n, e.mode || "toggle");
            n.animate({
                opacity: s
            }, {
                queue: !1,
                duration: e.duration,
                easing: e.easing,
                complete: i
            })
        }, t.effects.effect.fold = function(e, i) {
            var n, s, o = t(this),
                a = ["position", "top", "bottom", "left", "right", "height", "width"],
                r = t.effects.setMode(o, e.mode || "hide"),
                l = "show" === r,
                h = "hide" === r,
                c = e.size || 15,
                u = /([0-9]+)%/.exec(c),
                d = !!e.horizFirst,
                p = l !== d,
                f = p ? ["width", "height"] : ["height", "width"],
                m = e.duration / 2,
                g = {},
                v = {};
            t.effects.save(o, a), o.show(), n = t.effects.createWrapper(o).css({
                overflow: "hidden"
            }), s = p ? [n.width(), n.height()] : [n.height(), n.width()], u && (c = parseInt(u[1], 10) / 100 * s[h ? 0 : 1]), l && n.css(d ? {
                height: 0,
                width: c
            } : {
                height: c,
                width: 0
            }), g[f[0]] = l ? s[0] : c, v[f[1]] = l ? s[1] : 0, n.animate(g, m, e.easing).animate(v, m, e.easing, function() {
                h && o.hide(), t.effects.restore(o, a), t.effects.removeWrapper(o), i()
            })
        }, t.effects.effect.highlight = function(e, i) {
            var n = t(this),
                s = ["backgroundImage", "backgroundColor", "opacity"],
                o = t.effects.setMode(n, e.mode || "show"),
                a = {
                    backgroundColor: n.css("backgroundColor")
                };
            "hide" === o && (a.opacity = 0), t.effects.save(n, s), n.show().css({
                backgroundImage: "none",
                backgroundColor: e.color || "#ffff99"
            }).animate(a, {
                queue: !1,
                duration: e.duration,
                easing: e.easing,
                complete: function() {
                    "hide" === o && n.hide(), t.effects.restore(n, s), i()
                }
            })
        }, t.effects.effect.size = function(e, i) {
            var n, s, o, a = t(this),
                r = ["position", "top", "bottom", "left", "right", "width", "height", "overflow", "opacity"],
                l = ["position", "top", "bottom", "left", "right", "overflow", "opacity"],
                h = ["width", "height", "overflow"],
                c = ["fontSize"],
                u = ["borderTopWidth", "borderBottomWidth", "paddingTop", "paddingBottom"],
                d = ["borderLeftWidth", "borderRightWidth", "paddingLeft", "paddingRight"],
                p = t.effects.setMode(a, e.mode || "effect"),
                f = e.restore || "effect" !== p,
                m = e.scale || "both",
                g = e.origin || ["middle", "center"],
                v = a.css("position"),
                y = f ? r : l,
                b = {
                    height: 0,
                    width: 0,
                    outerHeight: 0,
                    outerWidth: 0
                };
            "show" === p && a.show(), n = {
                height: a.height(),
                width: a.width(),
                outerHeight: a.outerHeight(),
                outerWidth: a.outerWidth()
            }, "toggle" === e.mode && "show" === p ? (a.from = e.to || b, a.to = e.from || n) : (a.from = e.from || ("show" === p ? b : n), a.to = e.to || ("hide" === p ? b : n)), o = {
                from: {
                    y: a.from.height / n.height,
                    x: a.from.width / n.width
                },
                to: {
                    y: a.to.height / n.height,
                    x: a.to.width / n.width
                }
            }, "box" !== m && "both" !== m || (o.from.y !== o.to.y && (y = y.concat(u), a.from = t.effects.setTransition(a, u, o.from.y, a.from), a.to = t.effects.setTransition(a, u, o.to.y, a.to)), o.from.x !== o.to.x && (y = y.concat(d), a.from = t.effects.setTransition(a, d, o.from.x, a.from), a.to = t.effects.setTransition(a, d, o.to.x, a.to))), "content" !== m && "both" !== m || o.from.y !== o.to.y && (y = y.concat(c).concat(h), a.from = t.effects.setTransition(a, c, o.from.y, a.from), a.to = t.effects.setTransition(a, c, o.to.y, a.to)), t.effects.save(a, y), a.show(), t.effects.createWrapper(a), a.css("overflow", "hidden").css(a.from), g && (s = t.effects.getBaseline(g, n), a.from.top = (n.outerHeight - a.outerHeight()) * s.y, a.from.left = (n.outerWidth - a.outerWidth()) * s.x, a.to.top = (n.outerHeight - a.to.outerHeight) * s.y, a.to.left = (n.outerWidth - a.to.outerWidth) * s.x), a.css(a.from), "content" !== m && "both" !== m || (u = u.concat(["marginTop", "marginBottom"]).concat(c), d = d.concat(["marginLeft", "marginRight"]), h = r.concat(u).concat(d), a.find("*[width]").each(function() {
                var i = t(this),
                    n = {
                        height: i.height(),
                        width: i.width(),
                        outerHeight: i.outerHeight(),
                        outerWidth: i.outerWidth()
                    };
                f && t.effects.save(i, h), i.from = {
                    height: n.height * o.from.y,
                    width: n.width * o.from.x,
                    outerHeight: n.outerHeight * o.from.y,
                    outerWidth: n.outerWidth * o.from.x
                }, i.to = {
                    height: n.height * o.to.y,
                    width: n.width * o.to.x,
                    outerHeight: n.height * o.to.y,
                    outerWidth: n.width * o.to.x
                }, o.from.y !== o.to.y && (i.from = t.effects.setTransition(i, u, o.from.y, i.from), i.to = t.effects.setTransition(i, u, o.to.y, i.to)), o.from.x !== o.to.x && (i.from = t.effects.setTransition(i, d, o.from.x, i.from), i.to = t.effects.setTransition(i, d, o.to.x, i.to)), i.css(i.from), i.animate(i.to, e.duration, e.easing, function() {
                    f && t.effects.restore(i, h)
                })
            })), a.animate(a.to, {
                queue: !1,
                duration: e.duration,
                easing: e.easing,
                complete: function() {
                    0 === a.to.opacity && a.css("opacity", a.from.opacity), "hide" === p && a.hide(), t.effects.restore(a, y), f || ("static" === v ? a.css({
                        position: "relative",
                        top: a.to.top,
                        left: a.to.left
                    }) : t.each(["top", "left"], function(t, e) {
                        a.css(e, function(e, i) {
                            var n = parseInt(i, 10),
                                s = t ? a.to.left : a.to.top;
                            return "auto" === i ? s + "px" : n + s + "px"
                        })
                    })), t.effects.removeWrapper(a), i()
                }
            })
        }, t.effects.effect.scale = function(e, i) {
            var n = t(this),
                s = t.extend(!0, {}, e),
                o = t.effects.setMode(n, e.mode || "effect"),
                a = parseInt(e.percent, 10) || (0 === parseInt(e.percent, 10) ? 0 : "hide" === o ? 0 : 100),
                r = e.direction || "both",
                l = e.origin,
                h = {
                    height: n.height(),
                    width: n.width(),
                    outerHeight: n.outerHeight(),
                    outerWidth: n.outerWidth()
                },
                c = {
                    y: "horizontal" !== r ? a / 100 : 1,
                    x: "vertical" !== r ? a / 100 : 1
                };
            s.effect = "size", s.queue = !1, s.complete = i, "effect" !== o && (s.origin = l || ["middle", "center"], s.restore = !0), s.from = e.from || ("show" === o ? {
                height: 0,
                width: 0,
                outerHeight: 0,
                outerWidth: 0
            } : h), s.to = {
                height: h.height * c.y,
                width: h.width * c.x,
                outerHeight: h.outerHeight * c.y,
                outerWidth: h.outerWidth * c.x
            }, s.fade && ("show" === o && (s.from.opacity = 0, s.to.opacity = 1), "hide" === o && (s.from.opacity = 1, s.to.opacity = 0)), n.effect(s)
        }, t.effects.effect.puff = function(e, i) {
            var n = t(this),
                s = t.effects.setMode(n, e.mode || "hide"),
                o = "hide" === s,
                a = parseInt(e.percent, 10) || 150,
                r = a / 100,
                l = {
                    height: n.height(),
                    width: n.width(),
                    outerHeight: n.outerHeight(),
                    outerWidth: n.outerWidth()
                };
            t.extend(e, {
                effect: "scale",
                queue: !1,
                fade: !0,
                mode: s,
                complete: i,
                percent: o ? a : 100,
                from: o ? l : {
                    height: l.height * r,
                    width: l.width * r,
                    outerHeight: l.outerHeight * r,
                    outerWidth: l.outerWidth * r
                }
            }), n.effect(e)
        }, t.effects.effect.pulsate = function(e, i) {
            var n, s = t(this),
                o = t.effects.setMode(s, e.mode || "show"),
                a = "show" === o,
                r = "hide" === o,
                l = a || "hide" === o,
                h = 2 * (e.times || 5) + (l ? 1 : 0),
                c = e.duration / h,
                u = 0,
                d = s.queue(),
                p = d.length;
            for (!a && s.is(":visible") || (s.css("opacity", 0).show(), u = 1), n = 1; n < h; n++) s.animate({
                opacity: u
            }, c, e.easing), u = 1 - u;
            s.animate({
                opacity: u
            }, c, e.easing), s.queue(function() {
                r && s.hide(), i()
            }), p > 1 && d.splice.apply(d, [1, 0].concat(d.splice(p, h + 1))), s.dequeue()
        }, t.effects.effect.shake = function(e, i) {
            var n, s = t(this),
                o = ["position", "top", "bottom", "left", "right", "height", "width"],
                a = t.effects.setMode(s, e.mode || "effect"),
                r = e.direction || "left",
                l = e.distance || 20,
                h = e.times || 3,
                c = 2 * h + 1,
                u = Math.round(e.duration / c),
                d = "up" === r || "down" === r ? "top" : "left",
                p = "up" === r || "left" === r,
                f = {},
                m = {},
                g = {},
                v = s.queue(),
                y = v.length;
            for (t.effects.save(s, o), s.show(), t.effects.createWrapper(s), f[d] = (p ? "-=" : "+=") + l, m[d] = (p ? "+=" : "-=") + 2 * l, g[d] = (p ? "-=" : "+=") + 2 * l, s.animate(f, u, e.easing), n = 1; n < h; n++) s.animate(m, u, e.easing).animate(g, u, e.easing);
            s.animate(m, u, e.easing).animate(f, u / 2, e.easing).queue(function() {
                "hide" === a && s.hide(), t.effects.restore(s, o), t.effects.removeWrapper(s), i()
            }), y > 1 && v.splice.apply(v, [1, 0].concat(v.splice(y, c + 1))), s.dequeue()
        }, t.effects.effect.slide = function(e, i) {
            var n, s = t(this),
                o = ["position", "top", "bottom", "left", "right", "width", "height"],
                a = t.effects.setMode(s, e.mode || "show"),
                r = "show" === a,
                l = e.direction || "left",
                h = "up" === l || "down" === l ? "top" : "left",
                c = "up" === l || "left" === l,
                u = {};
            t.effects.save(s, o), s.show(), n = e.distance || s["top" === h ? "outerHeight" : "outerWidth"](!0), t.effects.createWrapper(s).css({
                overflow: "hidden"
            }), r && s.css(h, c ? isNaN(n) ? "-" + n : -n : n), u[h] = (r ? c ? "+=" : "-=" : c ? "-=" : "+=") + n, s.animate(u, {
                queue: !1,
                duration: e.duration,
                easing: e.easing,
                complete: function() {
                    "hide" === a && s.hide(), t.effects.restore(s, o), t.effects.removeWrapper(s), i()
                }
            })
        }, t.effects.effect.transfer = function(e, i) {
            var n = t(this),
                s = t(e.to),
                o = "fixed" === s.css("position"),
                a = t("body"),
                r = o ? a.scrollTop() : 0,
                l = o ? a.scrollLeft() : 0,
                h = s.offset(),
                c = {
                    top: h.top - r,
                    left: h.left - l,
                    height: s.innerHeight(),
                    width: s.innerWidth()
                },
                u = n.offset(),
                d = t("<div class='ui-effects-transfer'></div>").appendTo(document.body).addClass(e.className).css({
                    top: u.top - r,
                    left: u.left - l,
                    height: n.innerHeight(),
                    width: n.innerWidth(),
                    position: o ? "fixed" : "absolute"
                }).animate(c, e.duration, e.easing, function() {
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
                if (void 0 === t) return this.options.value;
                this.options.value = this._constrainedValue(t), this._refreshValue()
            },
            _constrainedValue: function(t) {
                return void 0 === t && (t = this.options.value), this.indeterminate = !1 === t, "number" != typeof t && (t = 0), !this.indeterminate && Math.min(this.options.max, Math.max(this.min, t))
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
                    (e = t(i.options.filter, i.element[0])).addClass("ui-selectee"), e.each(function() {
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
                    n = this.options;
                this.opos = [e.pageX, e.pageY], this.options.disabled || (this.selectees = t(n.filter, this.element[0]), this._trigger("start", e), t(n.appendTo).append(this.helper), this.helper.css({
                    left: e.pageX,
                    top: e.pageY,
                    width: 0,
                    height: 0
                }), n.autoRefresh && this.refresh(), this.selectees.filter(".ui-selected").each(function() {
                    var n = t.data(this, "selectable-item");
                    n.startselected = !0, e.metaKey || e.ctrlKey || (n.$element.removeClass("ui-selected"), n.selected = !1, n.$element.addClass("ui-unselecting"), n.unselecting = !0, i._trigger("unselecting", e, {
                        unselecting: n.element
                    }))
                }), t(e.target).parents().addBack().each(function() {
                    var n, s = t.data(this, "selectable-item");
                    if (s) return n = !e.metaKey && !e.ctrlKey || !s.$element.hasClass("ui-selected"), s.$element.removeClass(n ? "ui-unselecting" : "ui-selected").addClass(n ? "ui-selecting" : "ui-unselecting"), s.unselecting = !n, s.selecting = n, s.selected = n, n ? i._trigger("selecting", e, {
                        selecting: s.element
                    }) : i._trigger("unselecting", e, {
                        unselecting: s.element
                    }), !1
                }))
            },
            _mouseDrag: function(e) {
                if (this.dragged = !0, !this.options.disabled) {
                    var i, n = this,
                        s = this.options,
                        o = this.opos[0],
                        a = this.opos[1],
                        r = e.pageX,
                        l = e.pageY;
                    return o > r && (i = r, r = o, o = i), a > l && (i = l, l = a, a = i), this.helper.css({
                        left: o,
                        top: a,
                        width: r - o,
                        height: l - a
                    }), this.selectees.each(function() {
                        var i = t.data(this, "selectable-item"),
                            h = !1;
                        i && i.element !== n.element[0] && ("touch" === s.tolerance ? h = !(i.left > r || i.right < o || i.top > l || i.bottom < a) : "fit" === s.tolerance && (h = i.left > o && i.right < r && i.top > a && i.bottom < l), h ? (i.selected && (i.$element.removeClass("ui-selected"), i.selected = !1), i.unselecting && (i.$element.removeClass("ui-unselecting"), i.unselecting = !1), i.selecting || (i.$element.addClass("ui-selecting"), i.selecting = !0, n._trigger("selecting", e, {
                            selecting: i.element
                        }))) : (i.selecting && ((e.metaKey || e.ctrlKey) && i.startselected ? (i.$element.removeClass("ui-selecting"), i.selecting = !1, i.$element.addClass("ui-selected"), i.selected = !0) : (i.$element.removeClass("ui-selecting"), i.selecting = !1, i.startselected && (i.$element.addClass("ui-unselecting"), i.unselecting = !0), n._trigger("unselecting", e, {
                            unselecting: i.element
                        }))), i.selected && (e.metaKey || e.ctrlKey || i.startselected || (i.$element.removeClass("ui-selected"), i.selected = !1, i.$element.addClass("ui-unselecting"), i.unselecting = !0, n._trigger("unselecting", e, {
                            unselecting: i.element
                        })))))
                    }), !1
                }
            },
            _mouseStop: function(e) {
                var i = this;
                return this.dragged = !1, t(".ui-unselecting", this.element[0]).each(function() {
                    var n = t.data(this, "selectable-item");
                    n.$element.removeClass("ui-unselecting"), n.unselecting = !1, n.startselected = !1, i._trigger("unselected", e, {
                        unselected: n.element
                    })
                }), t(".ui-selecting", this.element[0]).each(function() {
                    var n = t.data(this, "selectable-item");
                    n.$element.removeClass("ui-selecting").addClass("ui-selected"), n.selecting = !1, n.selected = !0, n.startselected = !0, i._trigger("selected", e, {
                        selected: n.element
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
                    class: "ui-selectmenu-button ui-widget ui-state-default ui-corner-all",
                    tabindex: this.options.disabled ? -1 : 0,
                    id: this.ids.button,
                    role: "combobox",
                    "aria-expanded": "false",
                    "aria-autocomplete": "list",
                    "aria-owns": this.ids.menu,
                    "aria-haspopup": "true"
                }).insertAfter(this.element), t("<span>", {
                    class: "ui-icon " + this.options.icons.button
                }).prependTo(this.button), this.buttonText = t("<span>", {
                    class: "ui-selectmenu-text"
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
                    class: "ui-selectmenu-menu ui-front"
                }).append(this.menu).appendTo(this._appendTo()), this.menuInstance = this.menu.menu({
                    role: "listbox",
                    select: function(t, i) {
                        t.preventDefault(), e._setSelection(), e._select(i.item.data("ui-selectmenu-item"), t)
                    },
                    focus: function(t, i) {
                        var n = i.item.data("ui-selectmenu-item");
                        null != e.focusIndex && n.index !== e.focusIndex && (e._trigger("focus", t, {
                            item: n
                        }), e.isOpen || e._select(n, t)), e.focusIndex = n.index, e.button.attr("aria-activedescendant", e.menuItems.eq(n.index).attr("id"))
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
                var n = this,
                    s = "";
                t.each(i, function(i, o) {
                    o.optgroup !== s && (t("<li>", {
                        class: "ui-selectmenu-optgroup ui-menu-divider" + (o.element.parent("optgroup").prop("disabled") ? " ui-state-disabled" : ""),
                        text: o.optgroup
                    }).appendTo(e), s = o.optgroup), n._renderItemData(e, o)
                })
            },
            _renderItemData: function(t, e) {
                return this._renderItem(t, e).data("ui-selectmenu-item", e)
            },
            _renderItem: function(e, i) {
                var n = t("<li>");
                return i.disabled && n.addClass("ui-state-disabled"), this._setText(n, i.label), n.appendTo(e)
            },
            _setText: function(t, e) {
                e ? t.text(e) : t.html("&#160;")
            },
            _move: function(t, e) {
                var i, n, s = ".ui-menu-item";
                this.isOpen ? i = this.menuItems.eq(this.focusIndex) : (i = this.menuItems.eq(this.element[0].selectedIndex), s += ":not(.ui-state-disabled)"), (n = "first" === t || "last" === t ? i["first" === t ? "prevAll" : "nextAll"](s).eq(-1) : i[t + "All"](s).eq(0)).length && this.menuInstance.focus(e, n)
            },
            _getSelectedItem: function() {
                return this.menuItems.eq(this.element[0].selectedIndex)
            },
            _toggle: function(t) {
                this[this.isOpen ? "close" : "open"](t)
            },
            _setSelection: function() {
                var t;
                this.range && (window.getSelection ? ((t = window.getSelection()).removeAllRanges(), t.addRange(this.range)) : this.range.select(), this.button.focus())
            },
            _documentClick: {
                mousedown: function(e) {
                    this.isOpen && (t(e.target).closest(".ui-selectmenu-menu, #" + this.ids.button).length || this.close(e))
                }
            },
            _buttonEvents: {
                mousedown: function() {
                    var t;
                    window.getSelection ? (t = window.getSelection()).rangeCount && (this.range = t.getRangeAt(0)) : this.range = document.selection.createRange()
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
                e.each(function(e, n) {
                    var s = t(n),
                        o = s.parent("optgroup");
                    i.push({
                        element: s,
                        index: e,
                        value: s.val(),
                        label: s.text(),
                        optgroup: o.attr("label") || "",
                        disabled: o.prop("disabled") || s.prop("disabled")
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
                var e, i, n = this.options,
                    s = this.element.find(".ui-slider-handle").addClass("ui-state-default ui-corner-all"),
                    o = [];
                for (i = n.values && n.values.length || 1, s.length > i && (s.slice(i).remove(), s = s.slice(0, i)), e = s.length; e < i; e++) o.push("<span class='ui-slider-handle ui-state-default ui-corner-all' tabindex='0'></span>");
                this.handles = s.add(t(o.join("")).appendTo(this.element)), this.handle = this.handles.eq(0), this.handles.each(function(e) {
                    t(this).data("ui-slider-handle-index", e)
                })
            },
            _createRange: function() {
                var e = this.options,
                    i = "";
                e.range ? (!0 === e.range && (e.values ? e.values.length && 2 !== e.values.length ? e.values = [e.values[0], e.values[0]] : t.isArray(e.values) && (e.values = e.values.slice(0)) : e.values = [this._valueMin(), this._valueMin()]), this.range && this.range.length ? this.range.removeClass("ui-slider-range-min ui-slider-range-max").css({
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
                var i, n, s, o, a, r, l, h = this,
                    c = this.options;
                return !c.disabled && (this.elementSize = {
                    width: this.element.outerWidth(),
                    height: this.element.outerHeight()
                }, this.elementOffset = this.element.offset(), i = {
                    x: e.pageX,
                    y: e.pageY
                }, n = this._normValueFromMouse(i), s = this._valueMax() - this._valueMin() + 1, this.handles.each(function(e) {
                    var i = Math.abs(n - h.values(e));
                    (s > i || s === i && (e === h._lastChangedValue || h.values(e) === c.min)) && (s = i, o = t(this), a = e)
                }), !1 !== this._start(e, a) && (this._mouseSliding = !0, this._handleIndex = a, o.addClass("ui-state-active").focus(), r = o.offset(), l = !t(e.target).parents().addBack().is(".ui-slider-handle"), this._clickOffset = l ? {
                    left: 0,
                    top: 0
                } : {
                    left: e.pageX - r.left - o.width() / 2,
                    top: e.pageY - r.top - o.height() / 2 - (parseInt(o.css("borderTopWidth"), 10) || 0) - (parseInt(o.css("borderBottomWidth"), 10) || 0) + (parseInt(o.css("marginTop"), 10) || 0)
                }, this.handles.hasClass("ui-state-hover") || this._slide(e, a, n), this._animateOff = !0, !0))
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
                var e, i, n, s, o;
                return "horizontal" === this.orientation ? (e = this.elementSize.width, i = t.x - this.elementOffset.left - (this._clickOffset ? this._clickOffset.left : 0)) : (e = this.elementSize.height, i = t.y - this.elementOffset.top - (this._clickOffset ? this._clickOffset.top : 0)), (n = i / e) > 1 && (n = 1), n < 0 && (n = 0), "vertical" === this.orientation && (n = 1 - n), s = this._valueMax() - this._valueMin(), o = this._valueMin() + n * s, this._trimAlignValue(o)
            },
            _start: function(t, e) {
                var i = {
                    handle: this.handles[e],
                    value: this.value()
                };
                return this.options.values && this.options.values.length && (i.value = this.values(e), i.values = this.values()), this._trigger("start", t, i)
            },
            _slide: function(t, e, i) {
                var n, s, o;
                this.options.values && this.options.values.length ? (n = this.values(e ? 0 : 1), 2 === this.options.values.length && !0 === this.options.range && (0 === e && i > n || 1 === e && i < n) && (i = n), i !== this.values(e) && ((s = this.values())[e] = i, o = this._trigger("slide", t, {
                    handle: this.handles[e],
                    value: i,
                    values: s
                }), n = this.values(e ? 0 : 1), !1 !== o && this.values(e, i))) : i !== this.value() && !1 !== (o = this._trigger("slide", t, {
                    handle: this.handles[e],
                    value: i
                })) && this.value(i)
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
                var n, s, o;
                if (arguments.length > 1) return this.options.values[e] = this._trimAlignValue(i), this._refreshValue(), void this._change(null, e);
                if (!arguments.length) return this._values();
                if (!t.isArray(arguments[0])) return this.options.values && this.options.values.length ? this._values(e) : this.value();
                for (n = this.options.values, s = arguments[0], o = 0; o < n.length; o += 1) n[o] = this._trimAlignValue(s[o]), this._change(null, o);
                this._refreshValue()
            },
            _setOption: function(e, i) {
                var n, s = 0;
                switch ("range" === e && !0 === this.options.range && ("min" === i ? (this.options.value = this._values(0), this.options.values = null) : "max" === i && (this.options.value = this._values(this.options.values.length - 1), this.options.values = null)), t.isArray(this.options.values) && (s = this.options.values.length), "disabled" === e && this.element.toggleClass("ui-state-disabled", !!i), this._super(e, i), e) {
                    case "orientation":
                        this._detectOrientation(), this.element.removeClass("ui-slider-horizontal ui-slider-vertical").addClass("ui-slider-" + this.orientation), this._refreshValue(), this.handles.css("horizontal" === i ? "bottom" : "left", "");
                        break;
                    case "value":
                        this._animateOff = !0, this._refreshValue(), this._change(null, 0), this._animateOff = !1;
                        break;
                    case "values":
                        for (this._animateOff = !0, this._refreshValue(), n = 0; n < s; n += 1) this._change(null, n);
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
                var e, i, n;
                if (arguments.length) return e = this.options.values[t], e = this._trimAlignValue(e);
                if (this.options.values && this.options.values.length) {
                    for (i = this.options.values.slice(), n = 0; n < i.length; n += 1) i[n] = this._trimAlignValue(i[n]);
                    return i
                }
                return []
            },
            _trimAlignValue: function(t) {
                if (t <= this._valueMin()) return this._valueMin();
                if (t >= this._valueMax()) return this._valueMax();
                var e = this.options.step > 0 ? this.options.step : 1,
                    i = (t - this._valueMin()) % e,
                    n = t - i;
                return 2 * Math.abs(i) >= e && (n += i > 0 ? e : -e), parseFloat(n.toFixed(5))
            },
            _calculateNewMax: function() {
                var t = this.options.max,
                    e = this._valueMin(),
                    i = this.options.step;
                t = Math.floor(+(t - e).toFixed(this._precision()) / i) * i + e, this.max = parseFloat(t.toFixed(this._precision()))
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
                var e, i, n, s, o, a = this.options.range,
                    r = this.options,
                    l = this,
                    h = !this._animateOff && r.animate,
                    c = {};
                this.options.values && this.options.values.length ? this.handles.each(function(n) {
                    i = (l.values(n) - l._valueMin()) / (l._valueMax() - l._valueMin()) * 100, c["horizontal" === l.orientation ? "left" : "bottom"] = i + "%", t(this).stop(1, 1)[h ? "animate" : "css"](c, r.animate), !0 === l.options.range && ("horizontal" === l.orientation ? (0 === n && l.range.stop(1, 1)[h ? "animate" : "css"]({
                        left: i + "%"
                    }, r.animate), 1 === n && l.range[h ? "animate" : "css"]({
                        width: i - e + "%"
                    }, {
                        queue: !1,
                        duration: r.animate
                    })) : (0 === n && l.range.stop(1, 1)[h ? "animate" : "css"]({
                        bottom: i + "%"
                    }, r.animate), 1 === n && l.range[h ? "animate" : "css"]({
                        height: i - e + "%"
                    }, {
                        queue: !1,
                        duration: r.animate
                    }))), e = i
                }) : (n = this.value(), s = this._valueMin(), o = this._valueMax(), i = o !== s ? (n - s) / (o - s) * 100 : 0, c["horizontal" === this.orientation ? "left" : "bottom"] = i + "%", this.handle.stop(1, 1)[h ? "animate" : "css"](c, r.animate), "min" === a && "horizontal" === this.orientation && this.range.stop(1, 1)[h ? "animate" : "css"]({
                    width: i + "%"
                }, r.animate), "max" === a && "horizontal" === this.orientation && this.range[h ? "animate" : "css"]({
                    width: 100 - i + "%"
                }, {
                    queue: !1,
                    duration: r.animate
                }), "min" === a && "vertical" === this.orientation && this.range.stop(1, 1)[h ? "animate" : "css"]({
                    height: i + "%"
                }, r.animate), "max" === a && "vertical" === this.orientation && this.range[h ? "animate" : "css"]({
                    height: 100 - i + "%"
                }, {
                    queue: !1,
                    duration: r.animate
                }))
            },
            _handleEvents: {
                keydown: function(e) {
                    var i, n, s, o = t(e.target).data("ui-slider-handle-index");
                    switch (e.keyCode) {
                        case t.ui.keyCode.HOME:
                        case t.ui.keyCode.END:
                        case t.ui.keyCode.PAGE_UP:
                        case t.ui.keyCode.PAGE_DOWN:
                        case t.ui.keyCode.UP:
                        case t.ui.keyCode.RIGHT:
                        case t.ui.keyCode.DOWN:
                        case t.ui.keyCode.LEFT:
                            if (e.preventDefault(), !this._keySliding && (this._keySliding = !0, t(e.target).addClass("ui-state-active"), !1 === this._start(e, o))) return
                    }
                    switch (s = this.options.step, i = n = this.options.values && this.options.values.length ? this.values(o) : this.value(), e.keyCode) {
                        case t.ui.keyCode.HOME:
                            n = this._valueMin();
                            break;
                        case t.ui.keyCode.END:
                            n = this._valueMax();
                            break;
                        case t.ui.keyCode.PAGE_UP:
                            n = this._trimAlignValue(i + (this._valueMax() - this._valueMin()) / this.numPages);
                            break;
                        case t.ui.keyCode.PAGE_DOWN:
                            n = this._trimAlignValue(i - (this._valueMax() - this._valueMin()) / this.numPages);
                            break;
                        case t.ui.keyCode.UP:
                        case t.ui.keyCode.RIGHT:
                            if (i === this._valueMax()) return;
                            n = this._trimAlignValue(i + s);
                            break;
                        case t.ui.keyCode.DOWN:
                        case t.ui.keyCode.LEFT:
                            if (i === this._valueMin()) return;
                            n = this._trimAlignValue(i - s)
                    }
                    this._slide(e, o, n)
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
                return t >= e && t < e + i
            },
            _isFloating: function(t) {
                return /left|right/.test(t.css("float")) || /inline|table-cell/.test(t.css("display"))
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
                var n = null,
                    s = !1,
                    o = this;
                return !this.reverting && (!this.options.disabled && "static" !== this.options.type && (this._refreshItems(e), t(e.target).parents().each(function() {
                    if (t.data(this, o.widgetName + "-item") === o) return n = t(this), !1
                }), t.data(e.target, o.widgetName + "-item") === o && (n = t(e.target)), !!n && (!(this.options.handle && !i && (t(this.options.handle, n).find("*").addBack().each(function() {
                    this === e.target && (s = !0)
                }), !s)) && (this.currentItem = n, this._removeCurrentsFromItems(), !0))))
            },
            _mouseStart: function(e, i, n) {
                var s, o, a = this.options;
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
                    }, this.helper[0] !== this.currentItem[0] && this.currentItem.hide(), this._createPlaceholder(), a.containment && this._setContainment(), a.cursor && "auto" !== a.cursor && (o = this.document.find("body"), this.storedCursor = o.css("cursor"), o.css("cursor", a.cursor), this.storedStylesheet = t("<style>*{ cursor: " + a.cursor + " !important; }</style>").appendTo(o)), a.opacity && (this.helper.css("opacity") && (this._storedOpacity = this.helper.css("opacity")), this.helper.css("opacity", a.opacity)), a.zIndex && (this.helper.css("zIndex") && (this._storedZIndex = this.helper.css("zIndex")), this.helper.css("zIndex", a.zIndex)), this.scrollParent[0] !== this.document[0] && "HTML" !== this.scrollParent[0].tagName && (this.overflowOffset = this.scrollParent.offset()), this._trigger("start", e, this._uiHash()), this._preserveHelperProportions || this._cacheHelperProportions(), !n)
                    for (s = this.containers.length - 1; s >= 0; s--) this.containers[s]._trigger("activate", e, this._uiHash(this));
                return t.ui.ddmanager && (t.ui.ddmanager.current = this), t.ui.ddmanager && !a.dropBehaviour && t.ui.ddmanager.prepareOffsets(this, e), this.dragging = !0, this.helper.addClass("ui-sortable-helper"), this._mouseDrag(e), !0
            },
            _mouseDrag: function(e) {
                var i, n, s, o, a = this.options,
                    r = !1;
                for (this.position = this._generatePosition(e), this.positionAbs = this._convertPositionTo("absolute"), this.lastPositionAbs || (this.lastPositionAbs = this.positionAbs), this.options.scroll && (this.scrollParent[0] !== this.document[0] && "HTML" !== this.scrollParent[0].tagName ? (this.overflowOffset.top + this.scrollParent[0].offsetHeight - e.pageY < a.scrollSensitivity ? this.scrollParent[0].scrollTop = r = this.scrollParent[0].scrollTop + a.scrollSpeed : e.pageY - this.overflowOffset.top < a.scrollSensitivity && (this.scrollParent[0].scrollTop = r = this.scrollParent[0].scrollTop - a.scrollSpeed), this.overflowOffset.left + this.scrollParent[0].offsetWidth - e.pageX < a.scrollSensitivity ? this.scrollParent[0].scrollLeft = r = this.scrollParent[0].scrollLeft + a.scrollSpeed : e.pageX - this.overflowOffset.left < a.scrollSensitivity && (this.scrollParent[0].scrollLeft = r = this.scrollParent[0].scrollLeft - a.scrollSpeed)) : (e.pageY - this.document.scrollTop() < a.scrollSensitivity ? r = this.document.scrollTop(this.document.scrollTop() - a.scrollSpeed) : this.window.height() - (e.pageY - this.document.scrollTop()) < a.scrollSensitivity && (r = this.document.scrollTop(this.document.scrollTop() + a.scrollSpeed)), e.pageX - this.document.scrollLeft() < a.scrollSensitivity ? r = this.document.scrollLeft(this.document.scrollLeft() - a.scrollSpeed) : this.window.width() - (e.pageX - this.document.scrollLeft()) < a.scrollSensitivity && (r = this.document.scrollLeft(this.document.scrollLeft() + a.scrollSpeed))), !1 !== r && t.ui.ddmanager && !a.dropBehaviour && t.ui.ddmanager.prepareOffsets(this, e)), this.positionAbs = this._convertPositionTo("absolute"), this.options.axis && "y" === this.options.axis || (this.helper[0].style.left = this.position.left + "px"), this.options.axis && "x" === this.options.axis || (this.helper[0].style.top = this.position.top + "px"), i = this.items.length - 1; i >= 0; i--)
                    if (n = this.items[i], s = n.item[0], (o = this._intersectsWithPointer(n)) && n.instance === this.currentContainer && !(s === this.currentItem[0] || this.placeholder[1 === o ? "next" : "prev"]()[0] === s || t.contains(this.placeholder[0], s) || "semi-dynamic" === this.options.type && t.contains(this.element[0], s))) {
                        if (this.direction = 1 === o ? "down" : "up", "pointer" !== this.options.tolerance && !this._intersectsWithSides(n)) break;
                        this._rearrange(e, n), this._trigger("change", e, this._uiHash());
                        break
                    }
                return this._contactContainers(e), t.ui.ddmanager && t.ui.ddmanager.drag(this, e), this._trigger("sort", e, this._uiHash()), this.lastPositionAbs = this.positionAbs, !1
            },
            _mouseStop: function(e, i) {
                if (e) {
                    if (t.ui.ddmanager && !this.options.dropBehaviour && t.ui.ddmanager.drop(this, e), this.options.revert) {
                        var n = this,
                            s = this.placeholder.offset(),
                            o = this.options.axis,
                            a = {};
                        o && "x" !== o || (a.left = s.left - this.offset.parent.left - this.margins.left + (this.offsetParent[0] === this.document[0].body ? 0 : this.offsetParent[0].scrollLeft)), o && "y" !== o || (a.top = s.top - this.offset.parent.top - this.margins.top + (this.offsetParent[0] === this.document[0].body ? 0 : this.offsetParent[0].scrollTop)), this.reverting = !0, t(this.helper).animate(a, parseInt(this.options.revert, 10) || 500, function() {
                            n._clear(e)
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
                    n = [];
                return e = e || {}, t(i).each(function() {
                    var i = (t(e.item || this).attr(e.attribute || "id") || "").match(e.expression || /(.+)[\-=_](.+)/);
                    i && n.push((e.key || i[1] + "[]") + "=" + (e.key && e.expression ? i[1] : i[2]))
                }), !n.length && e.key && n.push(e.key + "="), n.join("&")
            },
            toArray: function(e) {
                var i = this._getItemsAsjQuery(e && e.connected),
                    n = [];
                return e = e || {}, i.each(function() {
                    n.push(t(e.item || this).attr(e.attribute || "id") || "")
                }), n
            },
            _intersectsWith: function(t) {
                var e = this.positionAbs.left,
                    i = e + this.helperProportions.width,
                    n = this.positionAbs.top,
                    s = n + this.helperProportions.height,
                    o = t.left,
                    a = o + t.width,
                    r = t.top,
                    l = r + t.height,
                    h = this.offset.click.top,
                    c = this.offset.click.left,
                    u = "x" === this.options.axis || n + h > r && n + h < l,
                    d = "y" === this.options.axis || e + c > o && e + c < a,
                    p = u && d;
                return "pointer" === this.options.tolerance || this.options.forcePointerForContainers || "pointer" !== this.options.tolerance && this.helperProportions[this.floating ? "width" : "height"] > t[this.floating ? "width" : "height"] ? p : o < e + this.helperProportions.width / 2 && i - this.helperProportions.width / 2 < a && r < n + this.helperProportions.height / 2 && s - this.helperProportions.height / 2 < l
            },
            _intersectsWithPointer: function(t) {
                var e = "x" === this.options.axis || this._isOverAxis(this.positionAbs.top + this.offset.click.top, t.top, t.height),
                    i = "y" === this.options.axis || this._isOverAxis(this.positionAbs.left + this.offset.click.left, t.left, t.width),
                    n = e && i,
                    s = this._getDragVerticalDirection(),
                    o = this._getDragHorizontalDirection();
                return !!n && (this.floating ? o && "right" === o || "down" === s ? 2 : 1 : s && ("down" === s ? 2 : 1))
            },
            _intersectsWithSides: function(t) {
                var e = this._isOverAxis(this.positionAbs.top + this.offset.click.top, t.top + t.height / 2, t.height),
                    i = this._isOverAxis(this.positionAbs.left + this.offset.click.left, t.left + t.width / 2, t.width),
                    n = this._getDragVerticalDirection(),
                    s = this._getDragHorizontalDirection();
                return this.floating && s ? "right" === s && i || "left" === s && !i : n && ("down" === n && e || "up" === n && !e)
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
                var i, n, s, o, a = [],
                    r = [],
                    l = this._connectWith();
                if (l && e)
                    for (i = l.length - 1; i >= 0; i--)
                        for (n = (s = t(l[i], this.document[0])).length - 1; n >= 0; n--)(o = t.data(s[n], this.widgetFullName)) && o !== this && !o.options.disabled && r.push([t.isFunction(o.options.items) ? o.options.items.call(o.element) : t(o.options.items, o.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"), o]);
                for (r.push([t.isFunction(this.options.items) ? this.options.items.call(this.element, null, {
                        options: this.options,
                        item: this.currentItem
                    }) : t(this.options.items, this.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"), this]), i = r.length - 1; i >= 0; i--) r[i][0].each(function() {
                    a.push(this)
                });
                return t(a)
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
                var i, n, s, o, a, r, l, h, c = this.items,
                    u = [
                        [t.isFunction(this.options.items) ? this.options.items.call(this.element[0], e, {
                            item: this.currentItem
                        }) : t(this.options.items, this.element), this]
                    ],
                    d = this._connectWith();
                if (d && this.ready)
                    for (i = d.length - 1; i >= 0; i--)
                        for (n = (s = t(d[i], this.document[0])).length - 1; n >= 0; n--)(o = t.data(s[n], this.widgetFullName)) && o !== this && !o.options.disabled && (u.push([t.isFunction(o.options.items) ? o.options.items.call(o.element[0], e, {
                            item: this.currentItem
                        }) : t(o.options.items, o.element), o]), this.containers.push(o));
                for (i = u.length - 1; i >= 0; i--)
                    for (a = u[i][1], n = 0, h = (r = u[i][0]).length; n < h; n++)(l = t(r[n])).data(this.widgetName + "-item", a), c.push({
                        item: l,
                        instance: a,
                        width: 0,
                        height: 0,
                        left: 0,
                        top: 0
                    })
            },
            refreshPositions: function(e) {
                this.floating = !!this.items.length && ("x" === this.options.axis || this._isFloating(this.items[0].item)), this.offsetParent && this.helper && (this.offset.parent = this._getParentOffset());
                var i, n, s, o;
                for (i = this.items.length - 1; i >= 0; i--)(n = this.items[i]).instance !== this.currentContainer && this.currentContainer && n.item[0] !== this.currentItem[0] || (s = this.options.toleranceElement ? t(this.options.toleranceElement, n.item) : n.item, e || (n.width = s.outerWidth(), n.height = s.outerHeight()), o = s.offset(), n.left = o.left, n.top = o.top);
                if (this.options.custom && this.options.custom.refreshContainers) this.options.custom.refreshContainers.call(this);
                else
                    for (i = this.containers.length - 1; i >= 0; i--) o = this.containers[i].element.offset(), this.containers[i].containerCache.left = o.left, this.containers[i].containerCache.top = o.top, this.containers[i].containerCache.width = this.containers[i].element.outerWidth(), this.containers[i].containerCache.height = this.containers[i].element.outerHeight();
                return this
            },
            _createPlaceholder: function(e) {
                var i, n = (e = e || this).options;
                n.placeholder && n.placeholder.constructor !== String || (i = n.placeholder, n.placeholder = {
                    element: function() {
                        var n = e.currentItem[0].nodeName.toLowerCase(),
                            s = t("<" + n + ">", e.document[0]).addClass(i || e.currentItem[0].className + " ui-sortable-placeholder").removeClass("ui-sortable-helper");
                        return "tbody" === n ? e._createTrPlaceholder(e.currentItem.find("tr").eq(0), t("<tr>", e.document[0]).appendTo(s)) : "tr" === n ? e._createTrPlaceholder(e.currentItem, s) : "img" === n && s.attr("src", e.currentItem.attr("src")), i || s.css("visibility", "hidden"), s
                    },
                    update: function(t, s) {
                        i && !n.forcePlaceholderSize || (s.height() || s.height(e.currentItem.innerHeight() - parseInt(e.currentItem.css("paddingTop") || 0, 10) - parseInt(e.currentItem.css("paddingBottom") || 0, 10)), s.width() || s.width(e.currentItem.innerWidth() - parseInt(e.currentItem.css("paddingLeft") || 0, 10) - parseInt(e.currentItem.css("paddingRight") || 0, 10)))
                    }
                }), e.placeholder = t(n.placeholder.element.call(e.element, e.currentItem)), e.currentItem.after(e.placeholder), n.placeholder.update(e, e.placeholder)
            },
            _createTrPlaceholder: function(e, i) {
                var n = this;
                e.children().each(function() {
                    t("<td>&#160;</td>", n.document[0]).attr("colspan", t(this).attr("colspan") || 1).appendTo(i)
                })
            },
            _contactContainers: function(e) {
                var i, n, s, o, a, r, l, h, c, u, d = null,
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
                        for (s = 1e4, o = null, a = (c = d.floating || this._isFloating(this.currentItem)) ? "left" : "top", r = c ? "width" : "height", u = c ? "clientX" : "clientY", n = this.items.length - 1; n >= 0; n--) t.contains(this.containers[p].element[0], this.items[n].item[0]) && this.items[n].item[0] !== this.currentItem[0] && (l = this.items[n].item.offset()[a], h = !1, e[u] - l > this.items[n][r] / 2 && (h = !0), Math.abs(e[u] - l) < s && (s = Math.abs(e[u] - l), o = this.items[n], this.direction = h ? "up" : "down"));
                        if (!o && !this.options.dropOnEmpty) return;
                        if (this.currentContainer === this.containers[p]) return void(this.currentContainer.containerCache.over || (this.containers[p]._trigger("over", e, this._uiHash()), this.currentContainer.containerCache.over = 1));
                        o ? this._rearrange(e, o, null, !0) : this._rearrange(e, null, this.containers[p].element, !0), this._trigger("change", e, this._uiHash()), this.containers[p]._trigger("change", e, this._uiHash(this)), this.currentContainer = this.containers[p], this.options.placeholder.update(this.currentContainer, this.placeholder), this.containers[p]._trigger("over", e, this._uiHash(this)), this.containers[p].containerCache.over = 1
                    }
            },
            _createHelper: function(e) {
                var i = this.options,
                    n = t.isFunction(i.helper) ? t(i.helper.apply(this.element[0], [e, this.currentItem])) : "clone" === i.helper ? this.currentItem.clone() : this.currentItem;
                return n.parents("body").length || t("parent" !== i.appendTo ? i.appendTo : this.currentItem[0].parentNode)[0].appendChild(n[0]), n[0] === this.currentItem[0] && (this._storedCSS = {
                    width: this.currentItem[0].style.width,
                    height: this.currentItem[0].style.height,
                    position: this.currentItem.css("position"),
                    top: this.currentItem.css("top"),
                    left: this.currentItem.css("left")
                }), n[0].style.width && !i.forceHelperSize || n.width(this.currentItem.width()), n[0].style.height && !i.forceHelperSize || n.height(this.currentItem.height()), n
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
                var e, i, n, s = this.options;
                "parent" === s.containment && (s.containment = this.helper[0].parentNode), "document" !== s.containment && "window" !== s.containment || (this.containment = [0 - this.offset.relative.left - this.offset.parent.left, 0 - this.offset.relative.top - this.offset.parent.top, "document" === s.containment ? this.document.width() : this.window.width() - this.helperProportions.width - this.margins.left, ("document" === s.containment ? this.document.width() : this.window.height() || this.document[0].body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top]), /^(document|window|parent)$/.test(s.containment) || (e = t(s.containment)[0], i = t(s.containment).offset(), n = "hidden" !== t(e).css("overflow"), this.containment = [i.left + (parseInt(t(e).css("borderLeftWidth"), 10) || 0) + (parseInt(t(e).css("paddingLeft"), 10) || 0) - this.margins.left, i.top + (parseInt(t(e).css("borderTopWidth"), 10) || 0) + (parseInt(t(e).css("paddingTop"), 10) || 0) - this.margins.top, i.left + (n ? Math.max(e.scrollWidth, e.offsetWidth) : e.offsetWidth) - (parseInt(t(e).css("borderLeftWidth"), 10) || 0) - (parseInt(t(e).css("paddingRight"), 10) || 0) - this.helperProportions.width - this.margins.left, i.top + (n ? Math.max(e.scrollHeight, e.offsetHeight) : e.offsetHeight) - (parseInt(t(e).css("borderTopWidth"), 10) || 0) - (parseInt(t(e).css("paddingBottom"), 10) || 0) - this.helperProportions.height - this.margins.top])
            },
            _convertPositionTo: function(e, i) {
                i || (i = this.position);
                var n = "absolute" === e ? 1 : -1,
                    s = "absolute" !== this.cssPosition || this.scrollParent[0] !== this.document[0] && t.contains(this.scrollParent[0], this.offsetParent[0]) ? this.scrollParent : this.offsetParent,
                    o = /(html|body)/i.test(s[0].tagName);
                return {
                    top: i.top + this.offset.relative.top * n + this.offset.parent.top * n - ("fixed" === this.cssPosition ? -this.scrollParent.scrollTop() : o ? 0 : s.scrollTop()) * n,
                    left: i.left + this.offset.relative.left * n + this.offset.parent.left * n - ("fixed" === this.cssPosition ? -this.scrollParent.scrollLeft() : o ? 0 : s.scrollLeft()) * n
                }
            },
            _generatePosition: function(e) {
                var i, n, s = this.options,
                    o = e.pageX,
                    a = e.pageY,
                    r = "absolute" !== this.cssPosition || this.scrollParent[0] !== this.document[0] && t.contains(this.scrollParent[0], this.offsetParent[0]) ? this.scrollParent : this.offsetParent,
                    l = /(html|body)/i.test(r[0].tagName);
                return "relative" !== this.cssPosition || this.scrollParent[0] !== this.document[0] && this.scrollParent[0] !== this.offsetParent[0] || (this.offset.relative = this._getRelativeOffset()), this.originalPosition && (this.containment && (e.pageX - this.offset.click.left < this.containment[0] && (o = this.containment[0] + this.offset.click.left), e.pageY - this.offset.click.top < this.containment[1] && (a = this.containment[1] + this.offset.click.top), e.pageX - this.offset.click.left > this.containment[2] && (o = this.containment[2] + this.offset.click.left), e.pageY - this.offset.click.top > this.containment[3] && (a = this.containment[3] + this.offset.click.top)), s.grid && (i = this.originalPageY + Math.round((a - this.originalPageY) / s.grid[1]) * s.grid[1], a = this.containment ? i - this.offset.click.top >= this.containment[1] && i - this.offset.click.top <= this.containment[3] ? i : i - this.offset.click.top >= this.containment[1] ? i - s.grid[1] : i + s.grid[1] : i, n = this.originalPageX + Math.round((o - this.originalPageX) / s.grid[0]) * s.grid[0], o = this.containment ? n - this.offset.click.left >= this.containment[0] && n - this.offset.click.left <= this.containment[2] ? n : n - this.offset.click.left >= this.containment[0] ? n - s.grid[0] : n + s.grid[0] : n)), {
                    top: a - this.offset.click.top - this.offset.relative.top - this.offset.parent.top + ("fixed" === this.cssPosition ? -this.scrollParent.scrollTop() : l ? 0 : r.scrollTop()),
                    left: o - this.offset.click.left - this.offset.relative.left - this.offset.parent.left + ("fixed" === this.cssPosition ? -this.scrollParent.scrollLeft() : l ? 0 : r.scrollLeft())
                }
            },
            _rearrange: function(t, e, i, n) {
                i ? i[0].appendChild(this.placeholder[0]) : e.item[0].parentNode.insertBefore(this.placeholder[0], "down" === this.direction ? e.item[0] : e.item[0].nextSibling), this.counter = this.counter ? ++this.counter : 1;
                var s = this.counter;
                this._delay(function() {
                    s === this.counter && this.refreshPositions(!n)
                })
            },
            _clear: function(t, e) {
                function i(t, e, i) {
                    return function(n) {
                        i._trigger(t, n, e._uiHash(e))
                    }
                }
                this.reverting = !1;
                var n, s = [];
                if (!this._noFinalSort && this.currentItem.parent().length && this.placeholder.before(this.currentItem), this._noFinalSort = null, this.helper[0] === this.currentItem[0]) {
                    for (n in this._storedCSS) "auto" !== this._storedCSS[n] && "static" !== this._storedCSS[n] || (this._storedCSS[n] = "");
                    this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper")
                } else this.currentItem.show();
                for (this.fromOutside && !e && s.push(function(t) {
                        this._trigger("receive", t, this._uiHash(this.fromOutside))
                    }), !this.fromOutside && this.domPosition.prev === this.currentItem.prev().not(".ui-sortable-helper")[0] && this.domPosition.parent === this.currentItem.parent()[0] || e || s.push(function(t) {
                        this._trigger("update", t, this._uiHash())
                    }), this !== this.currentContainer && (e || (s.push(function(t) {
                        this._trigger("remove", t, this._uiHash())
                    }), s.push(function(t) {
                        return function(e) {
                            t._trigger("receive", e, this._uiHash(this))
                        }
                    }.call(this, this.currentContainer)), s.push(function(t) {
                        return function(e) {
                            t._trigger("update", e, this._uiHash(this))
                        }
                    }.call(this, this.currentContainer)))), n = this.containers.length - 1; n >= 0; n--) e || s.push(i("deactivate", this, this.containers[n])), this.containers[n].containerCache.over && (s.push(i("out", this, this.containers[n])), this.containers[n].containerCache.over = 0);
                if (this.storedCursor && (this.document.find("body").css("cursor", this.storedCursor), this.storedStylesheet.remove()), this._storedOpacity && this.helper.css("opacity", this._storedOpacity), this._storedZIndex && this.helper.css("zIndex", "auto" === this._storedZIndex ? "" : this._storedZIndex), this.dragging = !1, e || this._trigger("beforeStop", t, this._uiHash()), this.placeholder[0].parentNode.removeChild(this.placeholder[0]), this.cancelHelperRemoval || (this.helper[0] !== this.currentItem[0] && this.helper.remove(), this.helper = null), !e) {
                    for (n = 0; n < s.length; n++) s[n].call(this, t);
                    this._trigger("stop", t, this._uiHash())
                }
                return this.fromOutside = !1, !this.cancelHelperRemoval
            },
            _trigger: function() {
                !1 === t.Widget.prototype._trigger.apply(this, arguments) && this.cancel()
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
                return t.each(["min", "max", "step"], function(t, n) {
                    var s = i.attr(n);
                    void 0 !== s && s.length && (e[n] = s)
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
                    this.cancelBlur ? delete this.cancelBlur : (this._stop(), this._refresh(), this.previous !== this.element.val() && this._trigger("change", t))
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
                        this.element[0] === this.document[0].activeElement || (this.element.focus(), this.previous = n, this._delay(function() {
                            this.previous = n
                        }))
                    }
                    var n;
                    n = this.element[0] === this.document[0].activeElement ? this.previous : this.element.val(), e.preventDefault(), i.call(this), this.cancelBlur = !0, this._delay(function() {
                        delete this.cancelBlur, i.call(this)
                    }), !1 !== this._start(e) && this._repeat(null, t(e.currentTarget).hasClass("ui-spinner-up") ? 1 : -1, e)
                },
                "mouseup .ui-spinner-button": "_stop",
                "mouseenter .ui-spinner-button": function(e) {
                    if (t(e.currentTarget).hasClass("ui-state-active")) return !1 !== this._start(e) && void this._repeat(null, t(e.currentTarget).hasClass("ui-spinner-up") ? 1 : -1, e)
                },
                "mouseleave .ui-spinner-button": "_stop"
            },
            _draw: function() {
                var t = this.uiSpinner = this.element.addClass("ui-spinner-input").attr("autocomplete", "off").wrap(this._uiSpinnerHtml()).parent().append(this._buttonHtml());
                this.element.attr("role", "spinbutton"), this.buttons = t.find(".ui-spinner-button").attr("tabIndex", -1).button().removeClass("ui-corner-all"), this.buttons.height() > Math.ceil(.5 * t.height()) && t.height() > 0 && t.height(t.height()), this.options.disabled && this.disable()
            },
            _keydown: function(e) {
                var i = this.options,
                    n = t.ui.keyCode;
                switch (e.keyCode) {
                    case n.UP:
                        return this._repeat(null, 1, e), !0;
                    case n.DOWN:
                        return this._repeat(null, -1, e), !0;
                    case n.PAGE_UP:
                        return this._repeat(null, i.page, e), !0;
                    case n.PAGE_DOWN:
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
                return !(!this.spinning && !1 === this._trigger("start", t)) && (this.counter || (this.counter = 1), this.spinning = !0, !0)
            },
            _repeat: function(t, e, i) {
                t = t || 500, clearTimeout(this.timer), this.timer = this._delay(function() {
                    this._repeat(40, e, i)
                }, t), this._spin(e * this.options.step, i)
            },
            _spin: function(t, e) {
                var i = this.value() || 0;
                this.counter || (this.counter = 1), i = this._adjustValue(i + t * this._increment(this.counter)), this.spinning && !1 === this._trigger("spin", e, {
                    value: i
                }) || (this._value(i), this.counter++)
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
                var e, i, n = this.options;
                return e = null !== n.min ? n.min : 0, i = t - e, i = Math.round(i / n.step) * n.step, t = e + i, t = parseFloat(t.toFixed(this._precision())), null !== n.max && t > n.max ? n.max : null !== n.min && t < n.min ? n.min : t
            },
            _stop: function(t) {
                this.spinning && (clearTimeout(this.timer), clearTimeout(this.mousewheelTimer), this.counter = 0, this.spinning = !1, this._trigger("stop", t))
            },
            _setOption: function(t, e) {
                if ("culture" === t || "numberFormat" === t) {
                    var i = this._parse(this.element.val());
                    return this.options[t] = e, void this.element.val(this._format(i))
                }
                "max" !== t && "min" !== t && "step" !== t || "string" == typeof e && (e = this._parse(e)), "icons" === t && (this.buttons.first().find(".ui-icon").removeClass(this.options.icons.up).addClass(e.up), this.buttons.last().find(".ui-icon").removeClass(this.options.icons.down).addClass(e.down)), this._super(t, e), "disabled" === t && (this.widget().toggleClass("ui-state-disabled", !!e), this.element.prop("disabled", !!e), this.buttons.button(e ? "disable" : "enable"))
            },
            _setOptions: l(function(t) {
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
                return null !== t && t === this._adjustValue(t)
            },
            _value: function(t, e) {
                var i;
                "" !== t && null !== (i = this._parse(t)) && (e || (i = this._adjustValue(i)), t = this._format(i)), this.element.val(t), this._refresh()
            },
            _destroy: function() {
                this.element.removeClass("ui-spinner-input").prop("disabled", !1).removeAttr("autocomplete").removeAttr("role").removeAttr("aria-valuemin").removeAttr("aria-valuemax").removeAttr("aria-valuenow"), this.uiSpinner.replaceWith(this.element)
            },
            stepUp: l(function(t) {
                this._stepUp(t)
            }),
            _stepUp: function(t) {
                this._start() && (this._spin((t || 1) * this.options.step), this._stop())
            },
            stepDown: l(function(t) {
                this._stepDown(t)
            }),
            _stepDown: function(t) {
                this._start() && (this._spin((t || 1) * -this.options.step), this._stop())
            },
            pageUp: l(function(t) {
                this._stepUp((t || 1) * this.options.page)
            }),
            pageDown: l(function(t) {
                this._stepDown((t || 1) * this.options.page)
            }),
            value: function(t) {
                if (!arguments.length) return this._parse(this.element.val());
                l(this._value).call(this, t)
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
                    var i, n;
                    i = (e = e.cloneNode(!1)).href.replace(t, ""), n = location.href.replace(t, "");
                    try {
                        i = decodeURIComponent(i)
                    } catch (t) {}
                    try {
                        n = decodeURIComponent(n)
                    } catch (t) {}
                    return e.hash.length > 1 && i === n
                }
            }(),
            _create: function() {
                var e = this,
                    i = this.options;
                this.running = !1, this.element.addClass("ui-tabs ui-widget ui-widget-content ui-corner-all").toggleClass("ui-tabs-collapsible", i.collapsible), this._processTabs(), i.active = this._initialActive(), t.isArray(i.disabled) && (i.disabled = t.unique(i.disabled.concat(t.map(this.tabs.filter(".ui-state-disabled"), function(t) {
                    return e.tabs.index(t)
                }))).sort()), !1 !== this.options.active && this.anchors.length ? this.active = this._findActive(i.active) : this.active = t(), this._refresh(), this.active.length && this.load(i.active)
            },
            _initialActive: function() {
                var e = this.options.active,
                    i = this.options.collapsible,
                    n = location.hash.substring(1);
                return null === e && (n && this.tabs.each(function(i, s) {
                    if (t(s).attr("aria-controls") === n) return e = i, !1
                }), null === e && (e = this.tabs.index(this.tabs.filter(".ui-tabs-active"))), null !== e && -1 !== e || (e = !!this.tabs.length && 0)), !1 !== e && -1 === (e = this.tabs.index(this.tabs.eq(e))) && (e = !i && 0), !i && !1 === e && this.anchors.length && (e = 0), e
            },
            _getCreateEventData: function() {
                return {
                    tab: this.active,
                    panel: this.active.length ? this._getPanelForTab(this.active) : t()
                }
            },
            _tabKeydown: function(e) {
                var i = t(this.document[0].activeElement).closest("li"),
                    n = this.tabs.index(i),
                    s = !0;
                if (!this._handlePageNav(e)) {
                    switch (e.keyCode) {
                        case t.ui.keyCode.RIGHT:
                        case t.ui.keyCode.DOWN:
                            n++;
                            break;
                        case t.ui.keyCode.UP:
                        case t.ui.keyCode.LEFT:
                            s = !1, n--;
                            break;
                        case t.ui.keyCode.END:
                            n = this.anchors.length - 1;
                            break;
                        case t.ui.keyCode.HOME:
                            n = 0;
                            break;
                        case t.ui.keyCode.SPACE:
                            return e.preventDefault(), clearTimeout(this.activating), void this._activate(n);
                        case t.ui.keyCode.ENTER:
                            return e.preventDefault(), clearTimeout(this.activating), void this._activate(n !== this.options.active && n);
                        default:
                            return
                    }
                    e.preventDefault(), clearTimeout(this.activating), n = this._focusNextTab(n, s), e.ctrlKey || e.metaKey || (i.attr("aria-selected", "false"), this.tabs.eq(n).attr("aria-selected", "true"), this.activating = this._delay(function() {
                        this.option("active", n)
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
                for (var n = this.tabs.length - 1; - 1 !== t.inArray((e > n && (e = 0), e < 0 && (e = n), e), this.options.disabled);) e = i ? e + 1 : e - 1;
                return e
            },
            _focusNextTab: function(t, e) {
                return t = this._findNextTab(t, e), this.tabs.eq(t).focus(), t
            },
            _setOption: function(t, e) {
                "active" !== t ? "disabled" !== t ? (this._super(t, e), "collapsible" === t && (this.element.toggleClass("ui-tabs-collapsible", e), e || !1 !== this.options.active || this._activate(0)), "event" === t && this._setupEvents(e), "heightStyle" === t && this._setupHeightStyle(e)) : this._setupDisabled(e) : this._activate(e)
            },
            _sanitizeSelector: function(t) {
                return t ? t.replace(/[!"$%&'()*+,.\/:;<=>?@\[\]\^`{|}~]/g, "\\$&") : ""
            },
            refresh: function() {
                var e = this.options,
                    i = this.tablist.children(":has(a[href])");
                e.disabled = t.map(i.filter(".ui-state-disabled"), function(t) {
                    return i.index(t)
                }), this._processTabs(), !1 !== e.active && this.anchors.length ? this.active.length && !t.contains(this.tablist[0], this.active[0]) ? this.tabs.length === e.disabled.length ? (e.active = !1, this.active = t()) : this._activate(this._findNextTab(Math.max(0, e.active - 1), !1)) : e.active = this.tabs.index(this.active) : (e.active = !1, this.active = t()), this._refresh()
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
                    n = this.anchors,
                    s = this.panels;
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
                }), this.panels = t(), this.anchors.each(function(i, n) {
                    var s, o, a, r = t(n).uniqueId().attr("id"),
                        l = t(n).closest("li"),
                        h = l.attr("aria-controls");
                    e._isLocal(n) ? (a = (s = n.hash).substring(1), o = e.element.find(e._sanitizeSelector(s))) : (s = "#" + (a = l.attr("aria-controls") || t({}).uniqueId()[0].id), (o = e.element.find(s)).length || (o = e._createPanel(a)).insertAfter(e.panels[i - 1] || e.tablist), o.attr("aria-live", "polite")), o.length && (e.panels = e.panels.add(o)), h && l.data("ui-tabs-aria-controls", h), l.attr({
                        "aria-controls": a,
                        "aria-labelledby": r
                    }), o.attr("aria-labelledby", r)
                }), this.panels.addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").attr("role", "tabpanel"), i && (this._off(i.not(this.tabs)), this._off(n.not(this.anchors)), this._off(s.not(this.panels)))
            },
            _getList: function() {
                return this.tablist || this.element.find("ol,ul").eq(0)
            },
            _createPanel: function(e) {
                return t("<div>").attr("id", e).addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").data("ui-tabs-destroy", !0)
            },
            _setupDisabled: function(e) {
                t.isArray(e) && (e.length ? e.length === this.anchors.length && (e = !0) : e = !1);
                for (var i, n = 0; i = this.tabs[n]; n++) !0 === e || -1 !== t.inArray(n, e) ? t(i).addClass("ui-state-disabled").attr("aria-disabled", "true") : t(i).removeClass("ui-state-disabled").removeAttr("aria-disabled");
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
                var i, n = this.element.parent();
                "fill" === e ? (i = n.height(), i -= this.element.outerHeight() - this.element.height(), this.element.siblings(":visible").each(function() {
                    var e = t(this),
                        n = e.css("position");
                    "absolute" !== n && "fixed" !== n && (i -= e.outerHeight(!0))
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
                    n = this.active,
                    s = t(e.currentTarget).closest("li"),
                    o = s[0] === n[0],
                    a = o && i.collapsible,
                    r = a ? t() : this._getPanelForTab(s),
                    l = n.length ? this._getPanelForTab(n) : t(),
                    h = {
                        oldTab: n,
                        oldPanel: l,
                        newTab: a ? t() : s,
                        newPanel: r
                    };
                e.preventDefault(), s.hasClass("ui-state-disabled") || s.hasClass("ui-tabs-loading") || this.running || o && !i.collapsible || !1 === this._trigger("beforeActivate", e, h) || (i.active = !a && this.tabs.index(s), this.active = o ? t() : s, this.xhr && this.xhr.abort(), l.length || r.length || t.error("jQuery UI Tabs: Mismatching fragment identifier."), r.length && this.load(this.tabs.index(s), e), this._toggle(e, h))
            },
            _toggle: function(e, i) {
                function n() {
                    o.running = !1, o._trigger("activate", e, i)
                }

                function s() {
                    i.newTab.closest("li").addClass("ui-tabs-active ui-state-active"), a.length && o.options.show ? o._show(a, o.options.show, n) : (a.show(), n())
                }
                var o = this,
                    a = i.newPanel,
                    r = i.oldPanel;
                this.running = !0, r.length && this.options.hide ? this._hide(r, this.options.hide, function() {
                    i.oldTab.closest("li").removeClass("ui-tabs-active ui-state-active"), s()
                }) : (i.oldTab.closest("li").removeClass("ui-tabs-active ui-state-active"), r.hide(), s()), r.attr("aria-hidden", "true"), i.oldTab.attr({
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
                var i, n = this._findActive(e);
                n[0] !== this.active[0] && (n.length || (n = this.active), i = n.find(".ui-tabs-anchor")[0], this._eventHandler({
                    target: i,
                    currentTarget: i,
                    preventDefault: t.noop
                }))
            },
            _findActive: function(e) {
                return !1 === e ? t() : this.tabs.eq(e)
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
                !1 !== i && (void 0 === e ? i = !1 : (e = this._getIndex(e), i = t.isArray(i) ? t.map(i, function(t) {
                    return t !== e ? t : null
                }) : t.map(this.tabs, function(t, i) {
                    return i !== e ? i : null
                })), this._setupDisabled(i))
            },
            disable: function(e) {
                var i = this.options.disabled;
                if (!0 !== i) {
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
                var n = this,
                    s = this.tabs.eq(e),
                    o = s.find(".ui-tabs-anchor"),
                    a = this._getPanelForTab(s),
                    r = {
                        tab: s,
                        panel: a
                    },
                    l = function(t, e) {
                        "abort" === e && n.panels.stop(!1, !0), s.removeClass("ui-tabs-loading"), a.removeAttr("aria-busy"), t === n.xhr && delete n.xhr
                    };
                this._isLocal(o[0]) || (this.xhr = t.ajax(this._ajaxSettings(o, i, r)), this.xhr && "canceled" !== this.xhr.statusText && (s.addClass("ui-tabs-loading"), a.attr("aria-busy", "true"), this.xhr.done(function(t, e, s) {
                    setTimeout(function() {
                        a.html(t), n._trigger("load", i, r), l(s, e)
                    }, 1)
                }).fail(function(t, e) {
                    setTimeout(function() {
                        l(t, e)
                    }, 1)
                })))
            },
            _ajaxSettings: function(e, i, n) {
                var s = this;
                return {
                    url: e.attr("href"),
                    beforeSend: function(e, o) {
                        return s._trigger("beforeLoad", i, t.extend({
                            jqXHR: e,
                            ajaxSettings: o
                        }, n))
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
                var n = (e.attr("aria-describedby") || "").split(/\s+/);
                n.push(i), e.data("ui-tooltip-id", i).attr("aria-describedby", t.trim(n.join(" ")))
            },
            _removeDescribedBy: function(e) {
                var i = e.data("ui-tooltip-id"),
                    n = (e.attr("aria-describedby") || "").split(/\s+/),
                    s = t.inArray(i, n); - 1 !== s && n.splice(s, 1), e.removeData("ui-tooltip-id"), (n = t.trim(n.join(" "))) ? e.attr("aria-describedby", n) : e.removeAttr("aria-describedby")
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
                var n = this;
                if ("disabled" === e) return this[i ? "_disable" : "_enable"](), void(this.options[e] = i);
                this._super(e, i), "content" === e && t.each(this.tooltips, function(t, e) {
                    n._updateContent(e.element)
                })
            },
            _disable: function() {
                var e = this;
                t.each(this.tooltips, function(i, n) {
                    var s = t.Event("blur");
                    s.target = s.currentTarget = n.element[0], e.close(s, !0)
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
                    n = t(e ? e.target : this.element).closest(this.options.items);
                n.length && !n.data("ui-tooltip-id") && (n.attr("title") && n.data("ui-tooltip-title", n.attr("title")), n.data("ui-tooltip-open", !0), e && "mouseover" === e.type && n.parents().each(function() {
                    var e, n = t(this);
                    n.data("ui-tooltip-open") && ((e = t.Event("blur")).target = e.currentTarget = this, i.close(e, !0)), n.attr("title") && (n.uniqueId(), i.parents[this.id] = {
                        element: this,
                        title: n.attr("title")
                    }, n.attr("title", ""))
                }), this._registerCloseHandlers(e, n), this._updateContent(n, e))
            },
            _updateContent: function(t, e) {
                var i, n = this.options.content,
                    s = this,
                    o = e ? e.type : null;
                if ("string" == typeof n) return this._open(e, t, n);
                (i = n.call(t[0], function(i) {
                    s._delay(function() {
                        t.data("ui-tooltip-open") && (e && (e.type = o), this._open(e, t, i))
                    })
                })) && this._open(e, t, i)
            },
            _open: function(e, i, n) {
                function s(t) {
                    h.of = t, a.is(":hidden") || a.position(h)
                }
                var o, a, r, l, h = t.extend({}, this.options.position);
                n && ((o = this._find(i)) ? o.tooltip.find(".ui-tooltip-content").html(n) : (i.is("[title]") && (e && "mouseover" === e.type ? i.attr("title", "") : i.removeAttr("title")), o = this._tooltip(i), a = o.tooltip, this._addDescribedBy(i, a.attr("id")), a.find(".ui-tooltip-content").html(n), this.liveRegion.children().hide(), n.clone ? (l = n.clone()).removeAttr("id").find("[id]").removeAttr("id") : l = n, t("<div>").html(l).appendTo(this.liveRegion), this.options.track && e && /^mouse/.test(e.type) ? (this._on(this.document, {
                    mousemove: s
                }), s(e)) : a.position(t.extend({ of: i
                }, this.options.position)), a.hide(), this._show(a, this.options.show), this.options.show && this.options.show.delay && (r = this.delayedShow = setInterval(function() {
                    a.is(":visible") && (s(h.of), clearInterval(r))
                }, t.fx.interval)), this._trigger("open", e, {
                    tooltip: a
                })))
            },
            _registerCloseHandlers: function(e, i) {
                var n = {
                    keyup: function(e) {
                        if (e.keyCode === t.ui.keyCode.ESCAPE) {
                            var n = t.Event(e);
                            n.currentTarget = i[0], this.close(n, !0)
                        }
                    }
                };
                i[0] !== this.element[0] && (n.remove = function() {
                    this._removeTooltip(this._find(i).tooltip)
                }), e && "mouseover" !== e.type || (n.mouseleave = "close"), e && "focusin" !== e.type || (n.focusout = "close"), this._on(!0, i, n)
            },
            close: function(e) {
                var i, n = this,
                    s = t(e ? e.currentTarget : this.element),
                    o = this._find(s);
                o ? (i = o.tooltip, o.closing || (clearInterval(this.delayedShow), s.data("ui-tooltip-title") && !s.attr("title") && s.attr("title", s.data("ui-tooltip-title")), this._removeDescribedBy(s), o.hiding = !0, i.stop(!0), this._hide(i, this.options.hide, function() {
                    n._removeTooltip(t(this))
                }), s.removeData("ui-tooltip-open"), this._off(s, "mouseleave focusout keyup"), s[0] !== this.element[0] && this._off(s, "remove"), this._off(this.document, "mousemove"), e && "mouseleave" === e.type && t.each(this.parents, function(e, i) {
                    t(i.element).attr("title", i.title), delete n.parents[e]
                }), o.closing = !0, this._trigger("close", e, {
                    tooltip: i
                }), o.hiding || (o.closing = !1))) : s.removeData("ui-tooltip-open")
            },
            _tooltip: function(e) {
                var i = t("<div>").attr("role", "tooltip").addClass("ui-tooltip ui-widget ui-corner-all ui-widget-content " + (this.options.tooltipClass || "")),
                    n = i.uniqueId().attr("id");
                return t("<div>").addClass("ui-tooltip-content").appendTo(i), i.appendTo(this.document[0].body), this.tooltips[n] = {
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
                t.each(this.tooltips, function(i, n) {
                    var s = t.Event("blur"),
                        o = n.element;
                    s.target = s.currentTarget = o[0], e.close(s, !0), t("#" + i).remove(), o.data("ui-tooltip-title") && (o.attr("title") || o.attr("title", o.data("ui-tooltip-title")), o.removeData("ui-tooltip-title"))
                }), this.liveRegion.remove()
            }
        })
    }), "undefined" == typeof jQuery) throw new Error("Bootstrap's JavaScript requires jQuery"); + function(t) {
    "use strict";
    var e = jQuery.fn.jquery.split(" ")[0].split(".");
    if (e[0] < 2 && e[1] < 9 || 1 == e[0] && 9 == e[1] && e[2] < 1) throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher")
}(),
function(t) {
    "use strict";
    var e = '[data-dismiss="alert"]',
        i = function(i) {
            t(i).on("click", e, this.close)
        };
    i.VERSION = "3.3.5", i.TRANSITION_DURATION = 150, i.prototype.close = function(e) {
        function n() {
            a.detach().trigger("closed.bs.alert").remove()
        }
        var s = t(this),
            o = s.attr("data-target");
        o || (o = s.attr("href"), o = o && o.replace(/.*(?=#[^\s]*$)/, ""));
        var a = t(o);
        e && e.preventDefault(), a.length || (a = s.closest(".alert")), a.trigger(e = t.Event("close.bs.alert")), e.isDefaultPrevented() || (a.removeClass("in"), t.support.transition && a.hasClass("fade") ? a.one("bsTransitionEnd", n).emulateTransitionEnd(i.TRANSITION_DURATION) : n())
    };
    var n = t.fn.alert;
    t.fn.alert = function(e) {
        return this.each(function() {
            var n = t(this),
                s = n.data("bs.alert");
            s || n.data("bs.alert", s = new i(this)), "string" == typeof e && s[e].call(n)
        })
    }, t.fn.alert.Constructor = i, t.fn.alert.noConflict = function() {
        return t.fn.alert = n, this
    }, t(document).on("click.bs.alert.data-api", e, i.prototype.close)
}(jQuery),
function(t) {
    "use strict";

    function e(e) {
        return this.each(function() {
            var n = t(this),
                s = n.data("bs.button"),
                o = "object" == typeof e && e;
            s || n.data("bs.button", s = new i(this, o)), "toggle" == e ? s.toggle() : e && s.setState(e)
        })
    }
    var i = function(e, n) {
        this.$element = t(e), this.options = t.extend({}, i.DEFAULTS, n), this.isLoading = !1
    };
    i.VERSION = "3.3.5", i.DEFAULTS = {
        loadingText: "loading..."
    }, i.prototype.setState = function(e) {
        var i = "disabled",
            n = this.$element,
            s = n.is("input") ? "val" : "html",
            o = n.data();
        e += "Text", null == o.resetText && n.data("resetText", n[s]()), setTimeout(t.proxy(function() {
            n[s](null == o[e] ? this.options[e] : o[e]), "loadingText" == e ? (this.isLoading = !0, n.addClass(i).attr(i, i)) : this.isLoading && (this.isLoading = !1, n.removeClass(i).removeAttr(i))
        }, this), 0)
    }, i.prototype.toggle = function() {
        var t = !0,
            e = this.$element.closest('[data-toggle="buttons"]');
        if (e.length) {
            var i = this.$element.find("input");
            "radio" == i.prop("type") ? (i.prop("checked") && (t = !1), e.find(".active").removeClass("active"), this.$element.addClass("active")) : "checkbox" == i.prop("type") && (i.prop("checked") !== this.$element.hasClass("active") && (t = !1), this.$element.toggleClass("active")), i.prop("checked", this.$element.hasClass("active")), t && i.trigger("change")
        } else this.$element.attr("aria-pressed", !this.$element.hasClass("active")), this.$element.toggleClass("active")
    };
    var n = t.fn.button;
    t.fn.button = e, t.fn.button.Constructor = i, t.fn.button.noConflict = function() {
        return t.fn.button = n, this
    }, t(document).on("click.bs.button.data-api", '[data-toggle^="button"]', function(i) {
        var n = t(i.target);
        n.hasClass("btn") || (n = n.closest(".btn")), e.call(n, "toggle"), t(i.target).is('input[type="radio"]') || t(i.target).is('input[type="checkbox"]') || i.preventDefault()
    }).on("focus.bs.button.data-api blur.bs.button.data-api", '[data-toggle^="button"]', function(e) {
        t(e.target).closest(".btn").toggleClass("focus", /^focus(in)?$/.test(e.type))
    })
}(jQuery),
function(t) {
    "use strict";

    function e(e) {
        return this.each(function() {
            var n = t(this),
                s = n.data("bs.carousel"),
                o = t.extend({}, i.DEFAULTS, n.data(), "object" == typeof e && e),
                a = "string" == typeof e ? e : o.slide;
            s || n.data("bs.carousel", s = new i(this, o)), "number" == typeof e ? s.to(e) : a ? s[a]() : o.interval && s.pause().cycle()
        })
    }
    var i = function(e, i) {
        this.$element = t(e), this.$indicators = this.$element.find(".carousel-indicators"), this.options = i, this.paused = null, this.sliding = null, this.interval = null, this.$active = null, this.$items = null, this.options.keyboard && this.$element.on("keydown.bs.carousel", t.proxy(this.keydown, this)), "hover" == this.options.pause && !("ontouchstart" in document.documentElement) && this.$element.on("mouseenter.bs.carousel", t.proxy(this.pause, this)).on("mouseleave.bs.carousel", t.proxy(this.cycle, this))
    };
    i.VERSION = "3.3.5", i.TRANSITION_DURATION = 600, i.DEFAULTS = {
        interval: 5e3,
        pause: "hover",
        wrap: !0,
        keyboard: !0
    }, i.prototype.keydown = function(t) {
        if (!/input|textarea/i.test(t.target.tagName)) {
            switch (t.which) {
                case 37:
                    this.prev();
                    break;
                case 39:
                    this.next();
                    break;
                default:
                    return
            }
            t.preventDefault()
        }
    }, i.prototype.cycle = function(e) {
        return e || (this.paused = !1), this.interval && clearInterval(this.interval), this.options.interval && !this.paused && (this.interval = setInterval(t.proxy(this.next, this), this.options.interval)), this
    }, i.prototype.getItemIndex = function(t) {
        return this.$items = t.parent().children(".item"), this.$items.index(t || this.$active)
    }, i.prototype.getItemForDirection = function(t, e) {
        var i = this.getItemIndex(e);
        if (("prev" == t && 0 === i || "next" == t && i == this.$items.length - 1) && !this.options.wrap) return e;
        var n = (i + ("prev" == t ? -1 : 1)) % this.$items.length;
        return this.$items.eq(n)
    }, i.prototype.to = function(t) {
        var e = this,
            i = this.getItemIndex(this.$active = this.$element.find(".item.active"));
        return t > this.$items.length - 1 || 0 > t ? void 0 : this.sliding ? this.$element.one("slid.bs.carousel", function() {
            e.to(t)
        }) : i == t ? this.pause().cycle() : this.slide(t > i ? "next" : "prev", this.$items.eq(t))
    }, i.prototype.pause = function(e) {
        return e || (this.paused = !0), this.$element.find(".next, .prev").length && t.support.transition && (this.$element.trigger(t.support.transition.end), this.cycle(!0)), this.interval = clearInterval(this.interval), this
    }, i.prototype.next = function() {
        return this.sliding ? void 0 : this.slide("next")
    }, i.prototype.prev = function() {
        return this.sliding ? void 0 : this.slide("prev")
    }, i.prototype.slide = function(e, n) {
        var s = this.$element.find(".item.active"),
            o = n || this.getItemForDirection(e, s),
            a = this.interval,
            r = "next" == e ? "left" : "right",
            l = this;
        if (o.hasClass("active")) return this.sliding = !1;
        var h = o[0],
            c = t.Event("slide.bs.carousel", {
                relatedTarget: h,
                direction: r
            });
        if (this.$element.trigger(c), !c.isDefaultPrevented()) {
            if (this.sliding = !0, a && this.pause(), this.$indicators.length) {
                this.$indicators.find(".active").removeClass("active");
                var u = t(this.$indicators.children()[this.getItemIndex(o)]);
                u && u.addClass("active")
            }
            var d = t.Event("slid.bs.carousel", {
                relatedTarget: h,
                direction: r
            });
            return t.support.transition && this.$element.hasClass("slide") ? (o.addClass(e), o[0].offsetWidth, s.addClass(r), o.addClass(r), s.one("bsTransitionEnd", function() {
                o.removeClass([e, r].join(" ")).addClass("active"), s.removeClass(["active", r].join(" ")), l.sliding = !1, setTimeout(function() {
                    l.$element.trigger(d)
                }, 0)
            }).emulateTransitionEnd(i.TRANSITION_DURATION)) : (s.removeClass("active"), o.addClass("active"), this.sliding = !1, this.$element.trigger(d)), a && this.cycle(), this
        }
    };
    var n = t.fn.carousel;
    t.fn.carousel = e, t.fn.carousel.Constructor = i, t.fn.carousel.noConflict = function() {
        return t.fn.carousel = n, this
    };
    var s = function(i) {
        var n, s = t(this),
            o = t(s.attr("data-target") || (n = s.attr("href")) && n.replace(/.*(?=#[^\s]+$)/, ""));
        if (o.hasClass("carousel")) {
            var a = t.extend({}, o.data(), s.data()),
                r = s.attr("data-slide-to");
            r && (a.interval = !1), e.call(o, a), r && o.data("bs.carousel").to(r), i.preventDefault()
        }
    };
    t(document).on("click.bs.carousel.data-api", "[data-slide]", s).on("click.bs.carousel.data-api", "[data-slide-to]", s), t(window).on("load", function() {
        t('[data-ride="carousel"]').each(function() {
            var i = t(this);
            e.call(i, i.data())
        })
    })
}(jQuery),
function(t) {
    "use strict";

    function e(e) {
        var i = e.attr("data-target");
        i || (i = e.attr("href"), i = i && /#[A-Za-z]/.test(i) && i.replace(/.*(?=#[^\s]*$)/, ""));
        var n = i && t(i);
        return n && n.length ? n : e.parent()
    }

    function i(i) {
        i && 3 === i.which || (t(n).remove(), t(s).each(function() {
            var n = t(this),
                s = e(n),
                o = {
                    relatedTarget: this
                };
            s.hasClass("open") && (i && "click" == i.type && /input|textarea/i.test(i.target.tagName) && t.contains(s[0], i.target) || (s.trigger(i = t.Event("hide.bs.dropdown", o)), i.isDefaultPrevented() || (n.attr("aria-expanded", "false"), s.removeClass("open").trigger("hidden.bs.dropdown", o))))
        }))
    }
    var n = ".dropdown-backdrop",
        s = '[data-toggle="dropdown"]',
        o = function(e) {
            t(e).on("click.bs.dropdown", this.toggle)
        };
    o.VERSION = "3.3.5", o.prototype.toggle = function(n) {
        var s = t(this);
        if (!s.is(".disabled, :disabled")) {
            var o = e(s),
                a = o.hasClass("open");
            if (i(), !a) {
                "ontouchstart" in document.documentElement && !o.closest(".navbar-nav").length && t(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(t(this)).on("click", i);
                var r = {
                    relatedTarget: this
                };
                if (o.trigger(n = t.Event("show.bs.dropdown", r)), n.isDefaultPrevented()) return;
                s.trigger("focus").attr("aria-expanded", "true"), o.toggleClass("open").trigger("shown.bs.dropdown", r)
            }
            return !1
        }
    }, o.prototype.keydown = function(i) {
        if (/(38|40|27|32)/.test(i.which) && !/input|textarea/i.test(i.target.tagName)) {
            var n = t(this);
            if (i.preventDefault(), i.stopPropagation(), !n.is(".disabled, :disabled")) {
                var o = e(n),
                    a = o.hasClass("open");
                if (!a && 27 != i.which || a && 27 == i.which) return 27 == i.which && o.find(s).trigger("focus"), n.trigger("click");
                var r = o.find(".dropdown-menu li:not(.disabled):visible a");
                if (r.length) {
                    var l = r.index(i.target);
                    38 == i.which && l > 0 && l--, 40 == i.which && l < r.length - 1 && l++, ~l || (l = 0), r.eq(l).trigger("focus")
                }
            }
        }
    };
    var a = t.fn.dropdown;
    t.fn.dropdown = function(e) {
        return this.each(function() {
            var i = t(this),
                n = i.data("bs.dropdown");
            n || i.data("bs.dropdown", n = new o(this)), "string" == typeof e && n[e].call(i)
        })
    }, t.fn.dropdown.Constructor = o, t.fn.dropdown.noConflict = function() {
        return t.fn.dropdown = a, this
    }, t(document).on("click.bs.dropdown.data-api", i).on("click.bs.dropdown.data-api", ".dropdown form", function(t) {
        t.stopPropagation()
    }).on("click.bs.dropdown.data-api", s, o.prototype.toggle).on("keydown.bs.dropdown.data-api", s, o.prototype.keydown).on("keydown.bs.dropdown.data-api", ".dropdown-menu", o.prototype.keydown)
}(jQuery),
function(t) {
    "use strict";

    function e(e, n) {
        return this.each(function() {
            var s = t(this),
                o = s.data("bs.modal"),
                a = t.extend({}, i.DEFAULTS, s.data(), "object" == typeof e && e);
            o || s.data("bs.modal", o = new i(this, a)), "string" == typeof e ? o[e](n) : a.show && o.show(n)
        })
    }
    var i = function(e, i) {
        this.options = i, this.$body = t(document.body), this.$element = t(e), this.$dialog = this.$element.find(".modal-dialog"), this.$backdrop = null, this.isShown = null, this.originalBodyPad = null, this.scrollbarWidth = 0, this.ignoreBackdropClick = !1, this.options.remote && this.$element.find(".modal-content").load(this.options.remote, t.proxy(function() {
            this.$element.trigger("loaded.bs.modal")
        }, this))
    };
    i.VERSION = "3.3.5", i.TRANSITION_DURATION = 300, i.BACKDROP_TRANSITION_DURATION = 150, i.DEFAULTS = {
        backdrop: !0,
        keyboard: !0,
        show: !0
    }, i.prototype.toggle = function(t) {
        return this.isShown ? this.hide() : this.show(t)
    }, i.prototype.show = function(e) {
        var n = this,
            s = t.Event("show.bs.modal", {
                relatedTarget: e
            });
        this.$element.trigger(s), this.isShown || s.isDefaultPrevented() || (this.isShown = !0, this.checkScrollbar(), this.setScrollbar(), this.$body.addClass("modal-open"), this.escape(), this.resize(), this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', t.proxy(this.hide, this)), this.$dialog.on("mousedown.dismiss.bs.modal", function() {
            n.$element.one("mouseup.dismiss.bs.modal", function(e) {
                t(e.target).is(n.$element) && (n.ignoreBackdropClick = !0)
            })
        }), this.backdrop(function() {
            var s = t.support.transition && n.$element.hasClass("fade");
            n.$element.parent().length || n.$element.appendTo(n.$body), n.$element.show().scrollTop(0), n.adjustDialog(), s && n.$element[0].offsetWidth, n.$element.addClass("in"), n.enforceFocus();
            var o = t.Event("shown.bs.modal", {
                relatedTarget: e
            });
            s ? n.$dialog.one("bsTransitionEnd", function() {
                n.$element.trigger("focus").trigger(o)
            }).emulateTransitionEnd(i.TRANSITION_DURATION) : n.$element.trigger("focus").trigger(o)
        }))
    }, i.prototype.hide = function(e) {
        e && e.preventDefault(), e = t.Event("hide.bs.modal"), this.$element.trigger(e), this.isShown && !e.isDefaultPrevented() && (this.isShown = !1, this.escape(), this.resize(), t(document).off("focusin.bs.modal"), this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"), this.$dialog.off("mousedown.dismiss.bs.modal"), t.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", t.proxy(this.hideModal, this)).emulateTransitionEnd(i.TRANSITION_DURATION) : this.hideModal())
    }, i.prototype.enforceFocus = function() {
        t(document).off("focusin.bs.modal").on("focusin.bs.modal", t.proxy(function(t) {
            this.$element[0] === t.target || this.$element.has(t.target).length || this.$element.trigger("focus")
        }, this))
    }, i.prototype.escape = function() {
        this.isShown && this.options.keyboard ? this.$element.on("keydown.dismiss.bs.modal", t.proxy(function(t) {
            27 == t.which && this.hide()
        }, this)) : this.isShown || this.$element.off("keydown.dismiss.bs.modal")
    }, i.prototype.resize = function() {
        this.isShown ? t(window).on("resize.bs.modal", t.proxy(this.handleUpdate, this)) : t(window).off("resize.bs.modal")
    }, i.prototype.hideModal = function() {
        var t = this;
        this.$element.hide(), this.backdrop(function() {
            t.$body.removeClass("modal-open"), t.resetAdjustments(), t.resetScrollbar(), t.$element.trigger("hidden.bs.modal")
        })
    }, i.prototype.removeBackdrop = function() {
        this.$backdrop && this.$backdrop.remove(), this.$backdrop = null
    }, i.prototype.backdrop = function(e) {
        var n = this,
            s = this.$element.hasClass("fade") ? "fade" : "";
        if (this.isShown && this.options.backdrop) {
            var o = t.support.transition && s;
            if (this.$backdrop = t(document.createElement("div")).addClass("modal-backdrop " + s).appendTo(this.$body), this.$element.on("click.dismiss.bs.modal", t.proxy(function(t) {
                    return this.ignoreBackdropClick ? void(this.ignoreBackdropClick = !1) : void(t.target === t.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus() : this.hide()))
                }, this)), o && this.$backdrop[0].offsetWidth, this.$backdrop.addClass("in"), !e) return;
            o ? this.$backdrop.one("bsTransitionEnd", e).emulateTransitionEnd(i.BACKDROP_TRANSITION_DURATION) : e()
        } else if (!this.isShown && this.$backdrop) {
            this.$backdrop.removeClass("in");
            var a = function() {
                n.removeBackdrop(), e && e()
            };
            t.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", a).emulateTransitionEnd(i.BACKDROP_TRANSITION_DURATION) : a()
        } else e && e()
    }, i.prototype.handleUpdate = function() {
        this.adjustDialog()
    }, i.prototype.adjustDialog = function() {
        var t = this.$element[0].scrollHeight > document.documentElement.clientHeight;
        this.$element.css({
            paddingLeft: !this.bodyIsOverflowing && t ? this.scrollbarWidth : "",
            paddingRight: this.bodyIsOverflowing && !t ? this.scrollbarWidth : ""
        })
    }, i.prototype.resetAdjustments = function() {
        this.$element.css({
            paddingLeft: "",
            paddingRight: ""
        })
    }, i.prototype.checkScrollbar = function() {
        var t = window.innerWidth;
        if (!t) {
            var e = document.documentElement.getBoundingClientRect();
            t = e.right - Math.abs(e.left)
        }
        this.bodyIsOverflowing = document.body.clientWidth < t, this.scrollbarWidth = this.measureScrollbar()
    }, i.prototype.setScrollbar = function() {
        var t = parseInt(this.$body.css("padding-right") || 0, 10);
        this.originalBodyPad = document.body.style.paddingRight || "", this.bodyIsOverflowing && this.$body.css("padding-right", t + this.scrollbarWidth)
    }, i.prototype.resetScrollbar = function() {
        this.$body.css("padding-right", this.originalBodyPad)
    }, i.prototype.measureScrollbar = function() {
        var t = document.createElement("div");
        t.className = "modal-scrollbar-measure", this.$body.append(t);
        var e = t.offsetWidth - t.clientWidth;
        return this.$body[0].removeChild(t), e
    };
    var n = t.fn.modal;
    t.fn.modal = e, t.fn.modal.Constructor = i, t.fn.modal.noConflict = function() {
        return t.fn.modal = n, this
    }, t(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function(i) {
        var n = t(this),
            s = n.attr("href"),
            o = t(n.attr("data-target") || s && s.replace(/.*(?=#[^\s]+$)/, "")),
            a = o.data("bs.modal") ? "toggle" : t.extend({
                remote: !/#/.test(s) && s
            }, o.data(), n.data());
        n.is("a") && i.preventDefault(), o.one("show.bs.modal", function(t) {
            t.isDefaultPrevented() || o.one("hidden.bs.modal", function() {
                n.is(":visible") && n.trigger("focus")
            })
        }), e.call(o, a, this)
    })
}(jQuery),
function(t) {
    "use strict";
    var e = function(t, e) {
        this.type = null, this.options = null, this.enabled = null, this.timeout = null, this.hoverState = null, this.$element = null, this.inState = null, this.init("tooltip", t, e)
    };
    e.VERSION = "3.3.5", e.TRANSITION_DURATION = 150, e.DEFAULTS = {
        animation: !0,
        placement: "top",
        selector: !1,
        template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
        trigger: "hover focus",
        title: "",
        delay: 0,
        html: !1,
        container: !1,
        viewport: {
            selector: "body",
            padding: 0
        }
    }, e.prototype.init = function(e, i, n) {
        if (this.enabled = !0, this.type = e, this.$element = t(i), this.options = this.getOptions(n), this.$viewport = this.options.viewport && t(t.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : this.options.viewport.selector || this.options.viewport), this.inState = {
                click: !1,
                hover: !1,
                focus: !1
            }, this.$element[0] instanceof document.constructor && !this.options.selector) throw new Error("`selector` option must be specified when initializing " + this.type + " on the window.document object!");
        for (var s = this.options.trigger.split(" "), o = s.length; o--;) {
            var a = s[o];
            if ("click" == a) this.$element.on("click." + this.type, this.options.selector, t.proxy(this.toggle, this));
            else if ("manual" != a) {
                var r = "hover" == a ? "mouseenter" : "focusin",
                    l = "hover" == a ? "mouseleave" : "focusout";
                this.$element.on(r + "." + this.type, this.options.selector, t.proxy(this.enter, this)), this.$element.on(l + "." + this.type, this.options.selector, t.proxy(this.leave, this))
            }
        }
        this.options.selector ? this._options = t.extend({}, this.options, {
            trigger: "manual",
            selector: ""
        }) : this.fixTitle()
    }, e.prototype.getDefaults = function() {
        return e.DEFAULTS
    }, e.prototype.getOptions = function(e) {
        return (e = t.extend({}, this.getDefaults(), this.$element.data(), e)).delay && "number" == typeof e.delay && (e.delay = {
            show: e.delay,
            hide: e.delay
        }), e
    }, e.prototype.getDelegateOptions = function() {
        var e = {},
            i = this.getDefaults();
        return this._options && t.each(this._options, function(t, n) {
            i[t] != n && (e[t] = n)
        }), e
    }, e.prototype.enter = function(e) {
        var i = e instanceof this.constructor ? e : t(e.currentTarget).data("bs." + this.type);
        return i || (i = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, i)), e instanceof t.Event && (i.inState["focusin" == e.type ? "focus" : "hover"] = !0), i.tip().hasClass("in") || "in" == i.hoverState ? void(i.hoverState = "in") : (clearTimeout(i.timeout), i.hoverState = "in", i.options.delay && i.options.delay.show ? void(i.timeout = setTimeout(function() {
            "in" == i.hoverState && i.show()
        }, i.options.delay.show)) : i.show())
    }, e.prototype.isInStateTrue = function() {
        for (var t in this.inState)
            if (this.inState[t]) return !0;
        return !1
    }, e.prototype.leave = function(e) {
        var i = e instanceof this.constructor ? e : t(e.currentTarget).data("bs." + this.type);
        return i || (i = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, i)), e instanceof t.Event && (i.inState["focusout" == e.type ? "focus" : "hover"] = !1), i.isInStateTrue() ? void 0 : (clearTimeout(i.timeout), i.hoverState = "out", i.options.delay && i.options.delay.hide ? void(i.timeout = setTimeout(function() {
            "out" == i.hoverState && i.hide()
        }, i.options.delay.hide)) : i.hide())
    }, e.prototype.show = function() {
        var i = t.Event("show.bs." + this.type);
        if (this.hasContent() && this.enabled) {
            this.$element.trigger(i);
            var n = t.contains(this.$element[0].ownerDocument.documentElement, this.$element[0]);
            if (i.isDefaultPrevented() || !n) return;
            var s = this,
                o = this.tip(),
                a = this.getUID(this.type);
            this.setContent(), o.attr("id", a), this.$element.attr("aria-describedby", a), this.options.animation && o.addClass("fade");
            var r = "function" == typeof this.options.placement ? this.options.placement.call(this, o[0], this.$element[0]) : this.options.placement,
                l = /\s?auto?\s?/i,
                h = l.test(r);
            h && (r = r.replace(l, "") || "top"), o.detach().css({
                top: 0,
                left: 0,
                display: "block"
            }).addClass(r).data("bs." + this.type, this), this.options.container ? o.appendTo(this.options.container) : o.insertAfter(this.$element), this.$element.trigger("inserted.bs." + this.type);
            var c = this.getPosition(),
                u = o[0].offsetWidth,
                d = o[0].offsetHeight;
            if (h) {
                var p = r,
                    f = this.getPosition(this.$viewport);
                r = "bottom" == r && c.bottom + d > f.bottom ? "top" : "top" == r && c.top - d < f.top ? "bottom" : "right" == r && c.right + u > f.width ? "left" : "left" == r && c.left - u < f.left ? "right" : r, o.removeClass(p).addClass(r)
            }
            var m = this.getCalculatedOffset(r, c, u, d);
            this.applyPlacement(m, r);
            var g = function() {
                var t = s.hoverState;
                s.$element.trigger("shown.bs." + s.type), s.hoverState = null, "out" == t && s.leave(s)
            };
            t.support.transition && this.$tip.hasClass("fade") ? o.one("bsTransitionEnd", g).emulateTransitionEnd(e.TRANSITION_DURATION) : g()
        }
    }, e.prototype.applyPlacement = function(e, i) {
        var n = this.tip(),
            s = n[0].offsetWidth,
            o = n[0].offsetHeight,
            a = parseInt(n.css("margin-top"), 10),
            r = parseInt(n.css("margin-left"), 10);
        isNaN(a) && (a = 0), isNaN(r) && (r = 0), e.top += a, e.left += r, t.offset.setOffset(n[0], t.extend({
            using: function(t) {
                n.css({
                    top: Math.round(t.top),
                    left: Math.round(t.left)
                })
            }
        }, e), 0), n.addClass("in");
        var l = n[0].offsetWidth,
            h = n[0].offsetHeight;
        "top" == i && h != o && (e.top = e.top + o - h);
        var c = this.getViewportAdjustedDelta(i, e, l, h);
        c.left ? e.left += c.left : e.top += c.top;
        var u = /top|bottom/.test(i),
            d = u ? 2 * c.left - s + l : 2 * c.top - o + h,
            p = u ? "offsetWidth" : "offsetHeight";
        n.offset(e), this.replaceArrow(d, n[0][p], u)
    }, e.prototype.replaceArrow = function(t, e, i) {
        this.arrow().css(i ? "left" : "top", 50 * (1 - t / e) + "%").css(i ? "top" : "left", "")
    }, e.prototype.setContent = function() {
        var t = this.tip(),
            e = this.getTitle();
        t.find(".tooltip-inner")[this.options.html ? "html" : "text"](e), t.removeClass("fade in top bottom left right")
    }, e.prototype.hide = function(i) {
        function n() {
            "in" != s.hoverState && o.detach(), s.$element.removeAttr("aria-describedby").trigger("hidden.bs." + s.type), i && i()
        }
        var s = this,
            o = t(this.$tip),
            a = t.Event("hide.bs." + this.type);
        return this.$element.trigger(a), a.isDefaultPrevented() ? void 0 : (o.removeClass("in"), t.support.transition && o.hasClass("fade") ? o.one("bsTransitionEnd", n).emulateTransitionEnd(e.TRANSITION_DURATION) : n(), this.hoverState = null, this)
    }, e.prototype.fixTitle = function() {
        var t = this.$element;
        (t.attr("title") || "string" != typeof t.attr("data-original-title")) && t.attr("data-original-title", t.attr("title") || "").attr("title", "")
    }, e.prototype.hasContent = function() {
        return this.getTitle()
    }, e.prototype.getPosition = function(e) {
        var i = (e = e || this.$element)[0],
            n = "BODY" == i.tagName,
            s = i.getBoundingClientRect();
        null == s.width && (s = t.extend({}, s, {
            width: s.right - s.left,
            height: s.bottom - s.top
        }));
        var o = n ? {
                top: 0,
                left: 0
            } : e.offset(),
            a = {
                scroll: n ? document.documentElement.scrollTop || document.body.scrollTop : e.scrollTop()
            },
            r = n ? {
                width: t(window).width(),
                height: t(window).height()
            } : null;
        return t.extend({}, s, a, r, o)
    }, e.prototype.getCalculatedOffset = function(t, e, i, n) {
        return "bottom" == t ? {
            top: e.top + e.height,
            left: e.left + e.width / 2 - i / 2
        } : "top" == t ? {
            top: e.top - n,
            left: e.left + e.width / 2 - i / 2
        } : "left" == t ? {
            top: e.top + e.height / 2 - n / 2,
            left: e.left - i
        } : {
            top: e.top + e.height / 2 - n / 2,
            left: e.left + e.width
        }
    }, e.prototype.getViewportAdjustedDelta = function(t, e, i, n) {
        var s = {
            top: 0,
            left: 0
        };
        if (!this.$viewport) return s;
        var o = this.options.viewport && this.options.viewport.padding || 0,
            a = this.getPosition(this.$viewport);
        if (/right|left/.test(t)) {
            var r = e.top - o - a.scroll,
                l = e.top + o - a.scroll + n;
            r < a.top ? s.top = a.top - r : l > a.top + a.height && (s.top = a.top + a.height - l)
        } else {
            var h = e.left - o,
                c = e.left + o + i;
            h < a.left ? s.left = a.left - h : c > a.right && (s.left = a.left + a.width - c)
        }
        return s
    }, e.prototype.getTitle = function() {
        var t = this.$element,
            e = this.options;
        return t.attr("data-original-title") || ("function" == typeof e.title ? e.title.call(t[0]) : e.title)
    }, e.prototype.getUID = function(t) {
        do {
            t += ~~(1e6 * Math.random())
        } while (document.getElementById(t));
        return t
    }, e.prototype.tip = function() {
        if (!this.$tip && (this.$tip = t(this.options.template), 1 != this.$tip.length)) throw new Error(this.type + " `template` option must consist of exactly 1 top-level element!");
        return this.$tip
    }, e.prototype.arrow = function() {
        return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow")
    }, e.prototype.enable = function() {
        this.enabled = !0
    }, e.prototype.disable = function() {
        this.enabled = !1
    }, e.prototype.toggleEnabled = function() {
        this.enabled = !this.enabled
    }, e.prototype.toggle = function(e) {
        var i = this;
        e && ((i = t(e.currentTarget).data("bs." + this.type)) || (i = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, i))), e ? (i.inState.click = !i.inState.click, i.isInStateTrue() ? i.enter(i) : i.leave(i)) : i.tip().hasClass("in") ? i.leave(i) : i.enter(i)
    }, e.prototype.destroy = function() {
        var t = this;
        clearTimeout(this.timeout), this.hide(function() {
            t.$element.off("." + t.type).removeData("bs." + t.type), t.$tip && t.$tip.detach(), t.$tip = null, t.$arrow = null, t.$viewport = null
        })
    };
    var i = t.fn.tooltip;
    t.fn.tooltip = function(i) {
        return this.each(function() {
            var n = t(this),
                s = n.data("bs.tooltip"),
                o = "object" == typeof i && i;
            (s || !/destroy|hide/.test(i)) && (s || n.data("bs.tooltip", s = new e(this, o)), "string" == typeof i && s[i]())
        })
    }, t.fn.tooltip.Constructor = e, t.fn.tooltip.noConflict = function() {
        return t.fn.tooltip = i, this
    }
}(jQuery),
function(t) {
    "use strict";
    var e = function(t, e) {
        this.init("popover", t, e)
    };
    if (!t.fn.tooltip) throw new Error("Popover requires tooltip.js");
    e.VERSION = "3.3.5", e.DEFAULTS = t.extend({}, t.fn.tooltip.Constructor.DEFAULTS, {
        placement: "right",
        trigger: "click",
        content: "",
        template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
    }), e.prototype = t.extend({}, t.fn.tooltip.Constructor.prototype), e.prototype.constructor = e, e.prototype.getDefaults = function() {
        return e.DEFAULTS
    }, e.prototype.setContent = function() {
        var t = this.tip(),
            e = this.getTitle(),
            i = this.getContent();
        t.find(".popover-title")[this.options.html ? "html" : "text"](e), t.find(".popover-content").children().detach().end()[this.options.html ? "string" == typeof i ? "html" : "append" : "text"](i), t.removeClass("fade top bottom left right in"), t.find(".popover-title").html() || t.find(".popover-title").hide()
    }, e.prototype.hasContent = function() {
        return this.getTitle() || this.getContent()
    }, e.prototype.getContent = function() {
        var t = this.$element,
            e = this.options;
        return t.attr("data-content") || ("function" == typeof e.content ? e.content.call(t[0]) : e.content)
    }, e.prototype.arrow = function() {
        return this.$arrow = this.$arrow || this.tip().find(".arrow")
    };
    var i = t.fn.popover;
    t.fn.popover = function(i) {
        return this.each(function() {
            var n = t(this),
                s = n.data("bs.popover"),
                o = "object" == typeof i && i;
            (s || !/destroy|hide/.test(i)) && (s || n.data("bs.popover", s = new e(this, o)), "string" == typeof i && s[i]())
        })
    }, t.fn.popover.Constructor = e, t.fn.popover.noConflict = function() {
        return t.fn.popover = i, this
    }
}(jQuery),
function(t) {
    "use strict";

    function e(e) {
        return this.each(function() {
            var n = t(this),
                s = n.data("bs.tab");
            s || n.data("bs.tab", s = new i(this)), "string" == typeof e && s[e]()
        })
    }
    var i = function(e) {
        this.element = t(e)
    };
    i.VERSION = "3.3.5", i.TRANSITION_DURATION = 150, i.prototype.show = function() {
        var e = this.element,
            i = e.closest("ul:not(.dropdown-menu)"),
            n = e.data("target");
        if (n || (n = e.attr("href"), n = n && n.replace(/.*(?=#[^\s]*$)/, "")), !e.parent("li").hasClass("active")) {
            var s = i.find(".active:last a"),
                o = t.Event("hide.bs.tab", {
                    relatedTarget: e[0]
                }),
                a = t.Event("show.bs.tab", {
                    relatedTarget: s[0]
                });
            if (s.trigger(o), e.trigger(a), !a.isDefaultPrevented() && !o.isDefaultPrevented()) {
                var r = t(n);
                this.activate(e.closest("li"), i), this.activate(r, r.parent(), function() {
                    s.trigger({
                        type: "hidden.bs.tab",
                        relatedTarget: e[0]
                    }), e.trigger({
                        type: "shown.bs.tab",
                        relatedTarget: s[0]
                    })
                })
            }
        }
    }, i.prototype.activate = function(e, n, s) {
        function o() {
            a.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !1), e.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded", !0), r ? (e[0].offsetWidth, e.addClass("in")) : e.removeClass("fade"), e.parent(".dropdown-menu").length && e.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !0), s && s()
        }
        var a = n.find("> .active"),
            r = s && t.support.transition && (a.length && a.hasClass("fade") || !!n.find("> .fade").length);
        a.length && r ? a.one("bsTransitionEnd", o).emulateTransitionEnd(i.TRANSITION_DURATION) : o(), a.removeClass("in")
    };
    var n = t.fn.tab;
    t.fn.tab = e, t.fn.tab.Constructor = i, t.fn.tab.noConflict = function() {
        return t.fn.tab = n, this
    };
    var s = function(i) {
        i.preventDefault(), e.call(t(this), "show")
    };
    t(document).on("click.bs.tab.data-api", '[data-toggle="tab"]', s).on("click.bs.tab.data-api", '[data-toggle="pill"]', s)
}(jQuery),
function(t) {
    "use strict";

    function e(e) {
        return this.each(function() {
            var n = t(this),
                s = n.data("bs.affix"),
                o = "object" == typeof e && e;
            s || n.data("bs.affix", s = new i(this, o)), "string" == typeof e && s[e]()
        })
    }
    var i = function(e, n) {
        this.options = t.extend({}, i.DEFAULTS, n), this.$target = t(this.options.target).on("scroll.bs.affix.data-api", t.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", t.proxy(this.checkPositionWithEventLoop, this)), this.$element = t(e), this.affixed = null, this.unpin = null, this.pinnedOffset = null, this.checkPosition()
    };
    i.VERSION = "3.3.5", i.RESET = "affix affix-top affix-bottom", i.DEFAULTS = {
        offset: 0,
        target: window
    }, i.prototype.getState = function(t, e, i, n) {
        var s = this.$target.scrollTop(),
            o = this.$element.offset(),
            a = this.$target.height();
        if (null != i && "top" == this.affixed) return i > s && "top";
        if ("bottom" == this.affixed) return null != i ? !(s + this.unpin <= o.top) && "bottom" : !(t - n >= s + a) && "bottom";
        var r = null == this.affixed,
            l = r ? s : o.top,
            h = r ? a : e;
        return null != i && i >= s ? "top" : null != n && l + h >= t - n && "bottom"
    }, i.prototype.getPinnedOffset = function() {
        if (this.pinnedOffset) return this.pinnedOffset;
        this.$element.removeClass(i.RESET).addClass("affix");
        var t = this.$target.scrollTop(),
            e = this.$element.offset();
        return this.pinnedOffset = e.top - t
    }, i.prototype.checkPositionWithEventLoop = function() {
        setTimeout(t.proxy(this.checkPosition, this), 1)
    }, i.prototype.checkPosition = function() {
        if (this.$element.is(":visible")) {
            var e = this.$element.height(),
                n = this.options.offset,
                s = n.top,
                o = n.bottom,
                a = Math.max(t(document).height(), t(document.body).height());
            "object" != typeof n && (o = s = n), "function" == typeof s && (s = n.top(this.$element)), "function" == typeof o && (o = n.bottom(this.$element));
            var r = this.getState(a, e, s, o);
            if (this.affixed != r) {
                null != this.unpin && this.$element.css("top", "");
                var l = "affix" + (r ? "-" + r : ""),
                    h = t.Event(l + ".bs.affix");
                if (this.$element.trigger(h), h.isDefaultPrevented()) return;
                this.affixed = r, this.unpin = "bottom" == r ? this.getPinnedOffset() : null, this.$element.removeClass(i.RESET).addClass(l).trigger(l.replace("affix", "affixed") + ".bs.affix")
            }
            "bottom" == r && this.$element.offset({
                top: a - e - o
            })
        }
    };
    var n = t.fn.affix;
    t.fn.affix = e, t.fn.affix.Constructor = i, t.fn.affix.noConflict = function() {
        return t.fn.affix = n, this
    }, t(window).on("load", function() {
        t('[data-spy="affix"]').each(function() {
            var i = t(this),
                n = i.data();
            n.offset = n.offset || {}, null != n.offsetBottom && (n.offset.bottom = n.offsetBottom), null != n.offsetTop && (n.offset.top = n.offsetTop), e.call(i, n)
        })
    })
}(jQuery),
function(t) {
    "use strict";

    function e(e) {
        var i, n = e.attr("data-target") || (i = e.attr("href")) && i.replace(/.*(?=#[^\s]+$)/, "");
        return t(n)
    }

    function i(e) {
        return this.each(function() {
            var i = t(this),
                s = i.data("bs.collapse"),
                o = t.extend({}, n.DEFAULTS, i.data(), "object" == typeof e && e);
            !s && o.toggle && /show|hide/.test(e) && (o.toggle = !1), s || i.data("bs.collapse", s = new n(this, o)), "string" == typeof e && s[e]()
        })
    }
    var n = function(e, i) {
        this.$element = t(e), this.options = t.extend({}, n.DEFAULTS, i), this.$trigger = t('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]'), this.transitioning = null, this.options.parent ? this.$parent = this.getParent() : this.addAriaAndCollapsedClass(this.$element, this.$trigger), this.options.toggle && this.toggle()
    };
    n.VERSION = "3.3.5", n.TRANSITION_DURATION = 350, n.DEFAULTS = {
        toggle: !0
    }, n.prototype.dimension = function() {
        return this.$element.hasClass("width") ? "width" : "height"
    }, n.prototype.show = function() {
        if (!this.transitioning && !this.$element.hasClass("in")) {
            var e, s = this.$parent && this.$parent.children(".panel").children(".in, .collapsing");
            if (!(s && s.length && (e = s.data("bs.collapse")) && e.transitioning)) {
                var o = t.Event("show.bs.collapse");
                if (this.$element.trigger(o), !o.isDefaultPrevented()) {
                    s && s.length && (i.call(s, "hide"), e || s.data("bs.collapse", null));
                    var a = this.dimension();
                    this.$element.removeClass("collapse").addClass("collapsing")[a](0).attr("aria-expanded", !0), this.$trigger.removeClass("collapsed").attr("aria-expanded", !0), this.transitioning = 1;
                    var r = function() {
                        this.$element.removeClass("collapsing").addClass("collapse in")[a](""), this.transitioning = 0, this.$element.trigger("shown.bs.collapse")
                    };
                    if (!t.support.transition) return r.call(this);
                    var l = t.camelCase(["scroll", a].join("-"));
                    this.$element.one("bsTransitionEnd", t.proxy(r, this)).emulateTransitionEnd(n.TRANSITION_DURATION)[a](this.$element[0][l])
                }
            }
        }
    }, n.prototype.hide = function() {
        if (!this.transitioning && this.$element.hasClass("in")) {
            var e = t.Event("hide.bs.collapse");
            if (this.$element.trigger(e), !e.isDefaultPrevented()) {
                var i = this.dimension();
                this.$element[i](this.$element[i]())[0].offsetHeight, this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded", !1), this.$trigger.addClass("collapsed").attr("aria-expanded", !1), this.transitioning = 1;
                var s = function() {
                    this.transitioning = 0, this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")
                };
                return t.support.transition ? void this.$element[i](0).one("bsTransitionEnd", t.proxy(s, this)).emulateTransitionEnd(n.TRANSITION_DURATION) : s.call(this)
            }
        }
    }, n.prototype.toggle = function() {
        this[this.$element.hasClass("in") ? "hide" : "show"]()
    }, n.prototype.getParent = function() {
        return t(this.options.parent).find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]').each(t.proxy(function(i, n) {
            var s = t(n);
            this.addAriaAndCollapsedClass(e(s), s)
        }, this)).end()
    }, n.prototype.addAriaAndCollapsedClass = function(t, e) {
        var i = t.hasClass("in");
        t.attr("aria-expanded", i), e.toggleClass("collapsed", !i).attr("aria-expanded", i)
    };
    var s = t.fn.collapse;
    t.fn.collapse = i, t.fn.collapse.Constructor = n, t.fn.collapse.noConflict = function() {
        return t.fn.collapse = s, this
    }, t(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', function(n) {
        var s = t(this);
        s.attr("data-target") || n.preventDefault();
        var o = e(s),
            a = o.data("bs.collapse") ? "toggle" : s.data();
        i.call(o, a)
    })
}(jQuery),
function(t) {
    "use strict";

    function e(i, n) {
        this.$body = t(document.body), this.$scrollElement = t(t(i).is(document.body) ? window : i), this.options = t.extend({}, e.DEFAULTS, n), this.selector = (this.options.target || "") + " .nav li > a", this.offsets = [], this.targets = [], this.activeTarget = null, this.scrollHeight = 0, this.$scrollElement.on("scroll.bs.scrollspy", t.proxy(this.process, this)), this.refresh(), this.process()
    }

    function i(i) {
        return this.each(function() {
            var n = t(this),
                s = n.data("bs.scrollspy"),
                o = "object" == typeof i && i;
            s || n.data("bs.scrollspy", s = new e(this, o)), "string" == typeof i && s[i]()
        })
    }
    e.VERSION = "3.3.5", e.DEFAULTS = {
        offset: 10
    }, e.prototype.getScrollHeight = function() {
        return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight)
    }, e.prototype.refresh = function() {
        var e = this,
            i = "offset",
            n = 0;
        this.offsets = [], this.targets = [], this.scrollHeight = this.getScrollHeight(), t.isWindow(this.$scrollElement[0]) || (i = "position", n = this.$scrollElement.scrollTop()), this.$body.find(this.selector).map(function() {
            var e = t(this),
                s = e.data("target") || e.attr("href"),
                o = /^#./.test(s) && t(s);
            return o && o.length && o.is(":visible") && [
                [o[i]().top + n, s]
            ] || null
        }).sort(function(t, e) {
            return t[0] - e[0]
        }).each(function() {
            e.offsets.push(this[0]), e.targets.push(this[1])
        })
    }, e.prototype.process = function() {
        var t, e = this.$scrollElement.scrollTop() + this.options.offset,
            i = this.getScrollHeight(),
            n = this.options.offset + i - this.$scrollElement.height(),
            s = this.offsets,
            o = this.targets,
            a = this.activeTarget;
        if (this.scrollHeight != i && this.refresh(), e >= n) return a != (t = o[o.length - 1]) && this.activate(t);
        if (a && e < s[0]) return this.activeTarget = null, this.clear();
        for (t = s.length; t--;) a != o[t] && e >= s[t] && (void 0 === s[t + 1] || e < s[t + 1]) && this.activate(o[t])
    }, e.prototype.activate = function(e) {
        this.activeTarget = e, this.clear();
        var i = this.selector + '[data-target="' + e + '"],' + this.selector + '[href="' + e + '"]',
            n = t(i).parents("li").addClass("active");
        n.parent(".dropdown-menu").length && (n = n.closest("li.dropdown").addClass("active")), n.trigger("activate.bs.scrollspy")
    }, e.prototype.clear = function() {
        t(this.selector).parentsUntil(this.options.target, ".active").removeClass("active")
    };
    var n = t.fn.scrollspy;
    t.fn.scrollspy = i, t.fn.scrollspy.Constructor = e, t.fn.scrollspy.noConflict = function() {
        return t.fn.scrollspy = n, this
    }, t(window).on("load.bs.scrollspy.data-api", function() {
        t('[data-spy="scroll"]').each(function() {
            var e = t(this);
            i.call(e, e.data())
        })
    })
}(jQuery),
function(t) {
    "use strict";

    function e() {
        var t = document.createElement("bootstrap"),
            e = {
                WebkitTransition: "webkitTransitionEnd",
                MozTransition: "transitionend",
                OTransition: "oTransitionEnd otransitionend",
                transition: "transitionend"
            };
        for (var i in e)
            if (void 0 !== t.style[i]) return {
                end: e[i]
            };
        return !1
    }
    t.fn.emulateTransitionEnd = function(e) {
        var i = !1,
            n = this;
        t(this).one("bsTransitionEnd", function() {
            i = !0
        });
        return setTimeout(function() {
            i || t(n).trigger(t.support.transition.end)
        }, e), this
    }, t(function() {
        t.support.transition = e(), t.support.transition && (t.event.special.bsTransitionEnd = {
            bindType: t.support.transition.end,
            delegateType: t.support.transition.end,
            handle: function(e) {
                return t(e.target).is(this) ? e.handleObj.handler.apply(this, arguments) : void 0
            }
        })
    })
}(jQuery),
function(t) {
    t(function() {
        t(".jcarousel").on("jcarousel:reload jcarousel:create", function() {
            var e = t(this),
                i = e.innerWidth();
            i /= 3, e.jcarousel("items").css("width", Math.ceil(i) + "px")
        }).jcarousel({
            wrap: "circular"
        }), t(".jcarousel-control-prev").jcarouselControl({
            target: "-=1"
        }), t(".jcarousel-control-next").jcarouselControl({
            target: "+=1"
        }), t(".jcarousel-pagination").on("jcarouselpagination:active", "a", function() {
            t(this).addClass("active")
        }).on("jcarouselpagination:inactive", "a", function() {
            t(this).removeClass("active")
        }).on("click", function(t) {
            t.preventDefault()
        }).jcarouselPagination({
            perPage: 1,
            item: function(t) {
                return '<a href="#' + t + '">' + t + "</a>"
            }
        })
    })
}(jQuery),
function(t) {
    var e = {
        columns: 4,
        classname: "column",
        min: 1
    };
    t.fn.autocolumnlist = function(n) {
        var s = t.extend({}, e, n);
        return this.each(function() {
            var e = t(this).find("> li"),
                n = e.size();
            if (n > 0) {
                var o = Math.ceil(n / s.columns);
                o < s.min && (o = s.min);
                var a = 0,
                    r = o;
                for (i = 0; i < s.columns; i++) i + 1 == s.columns ? e.slice(a, r).wrapAll('<div class="' + s.classname + ' last" />') : e.slice(a, r).wrapAll('<div class="' + s.classname + '" />'), a += o, r += o
            }
        })
    }
}(jQuery),
function(t) {
    "function" == typeof define && define.amd ? define(["jquery"], function(e) {
        return t(e)
    }) : "object" == typeof module && "object" == typeof module.exports ? module.exports = t(require("jquery")) : t(window.jQuery)
}(function(t) {
    "use strict";

    function e(t) {
        void 0 === t && (t = window.navigator.userAgent), t = t.toLowerCase();
        var e = /(edge)\/([\w.]+)/.exec(t) || /(opr)[\/]([\w.]+)/.exec(t) || /(chrome)[ \/]([\w.]+)/.exec(t) || /(version)(applewebkit)[ \/]([\w.]+).*(safari)[ \/]([\w.]+)/.exec(t) || /(webkit)[ \/]([\w.]+).*(version)[ \/]([\w.]+).*(safari)[ \/]([\w.]+)/.exec(t) || /(webkit)[ \/]([\w.]+)/.exec(t) || /(opera)(?:.*version|)[ \/]([\w.]+)/.exec(t) || /(msie) ([\w.]+)/.exec(t) || t.indexOf("trident") >= 0 && /(rv)(?::| )([\w.]+)/.exec(t) || t.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec(t) || [],
            i = /(ipad)/.exec(t) || /(ipod)/.exec(t) || /(iphone)/.exec(t) || /(kindle)/.exec(t) || /(silk)/.exec(t) || /(android)/.exec(t) || /(windows phone)/.exec(t) || /(win)/.exec(t) || /(mac)/.exec(t) || /(linux)/.exec(t) || /(cros)/.exec(t) || /(playbook)/.exec(t) || /(bb)/.exec(t) || /(blackberry)/.exec(t) || [],
            n = {},
            s = {
                browser: e[5] || e[3] || e[1] || "",
                version: e[2] || e[4] || "0",
                versionNumber: e[4] || e[2] || "0",
                platform: i[0] || ""
            };
        if (s.browser && (n[s.browser] = !0, n.version = s.version, n.versionNumber = parseInt(s.versionNumber, 10)), s.platform && (n[s.platform] = !0), (n.android || n.bb || n.blackberry || n.ipad || n.iphone || n.ipod || n.kindle || n.playbook || n.silk || n["windows phone"]) && (n.mobile = !0), (n.cros || n.mac || n.linux || n.win) && (n.desktop = !0), (n.chrome || n.opr || n.safari) && (n.webkit = !0), n.rv || n.edge) {
            var o = "msie";
            s.browser = o, n[o] = !0
        }
        if (n.safari && n.blackberry) {
            var a = "blackberry";
            s.browser = a, n[a] = !0
        }
        if (n.safari && n.playbook) {
            var r = "playbook";
            s.browser = r, n[r] = !0
        }
        if (n.bb) {
            var l = "blackberry";
            s.browser = l, n[l] = !0
        }
        if (n.opr) {
            var h = "opera";
            s.browser = h, n[h] = !0
        }
        if (n.safari && n.android) {
            var c = "android";
            s.browser = c, n[c] = !0
        }
        if (n.safari && n.kindle) {
            var u = "kindle";
            s.browser = u, n[u] = !0
        }
        if (n.safari && n.silk) {
            var d = "silk";
            s.browser = d, n[d] = !0
        }
        return n.name = s.browser, n.platform = s.platform, n
    }
    return window.jQBrowser = e(window.navigator.userAgent), window.jQBrowser.uaMatch = e, t && (t.browser = window.jQBrowser), window.jQBrowser
}), window.Inputmask = function(t, e, i, n) {
        function s(e, i, a) {
            if (!(this instanceof s)) return new s(e, i, a);
            this.el = n, this.events = {}, this.maskset = n, this.refreshValue = !1, !0 !== a && (t.isPlainObject(e) ? i = e : (i = i || {}, i.alias = e), this.opts = t.extend(!0, {}, this.defaults, i), this.noMasksCache = i && i.definitions !== n, this.userOptions = i || {}, this.isRTL = this.opts.numericInput, o(this.opts.alias, i, this.opts))
        }

        function o(e, i, a) {
            var r = s.prototype.aliases[e];
            return r ? (r.alias && o(r.alias, n, a), t.extend(!0, a, r), t.extend(!0, a, i), !0) : (null === a.mask && (a.mask = e), !1)
        }

        function a(e, i) {
            function o(e, o, a) {
                var r = !1;
                if (null !== e && "" !== e || ((r = null !== a.regex) ? (e = a.regex, e = e.replace(/^(\^)(.*)(\$)$/, "$2")) : e = "*{*}"), 1 === e.length && !1 === a.greedy && 0 !== a.repeat && (a.placeholder = ""), a.repeat > 0 || "*" === a.repeat || "+" === a.repeat) {
                    var l = "*" === a.repeat ? 0 : "+" === a.repeat ? 1 : a.repeat;
                    e = a.groupmarker.start + e + a.groupmarker.end + a.quantifiermarker.start + l + "," + a.repeat + a.quantifiermarker.end
                }
                var h;
                return s.prototype.masksCache[e] === n || !0 === i ? (h = {
                    mask: e,
                    maskToken: s.prototype.analyseMask(e, r, a),
                    validPositions: {},
                    _buffer: n,
                    buffer: n,
                    tests: {},
                    metadata: o,
                    maskLength: n
                }, !0 !== i && (s.prototype.masksCache[a.numericInput ? e.split("").reverse().join("") : e] = h, h = t.extend(!0, {}, s.prototype.masksCache[a.numericInput ? e.split("").reverse().join("") : e]))) : h = t.extend(!0, {}, s.prototype.masksCache[a.numericInput ? e.split("").reverse().join("") : e]), h
            }
            if (t.isFunction(e.mask) && (e.mask = e.mask(e)), t.isArray(e.mask)) {
                if (e.mask.length > 1) {
                    e.keepStatic = null === e.keepStatic || e.keepStatic;
                    var a = e.groupmarker.start;
                    return t.each(e.numericInput ? e.mask.reverse() : e.mask, function(i, s) {
                        a.length > 1 && (a += e.groupmarker.end + e.alternatormarker + e.groupmarker.start), s.mask === n || t.isFunction(s.mask) ? a += s : a += s.mask
                    }), a += e.groupmarker.end, o(a, e.mask, e)
                }
                e.mask = e.mask.pop()
            }
            return e.mask && e.mask.mask !== n && !t.isFunction(e.mask.mask) ? o(e.mask.mask, e.mask, e) : o(e.mask, e.mask, e)
        }

        function r(o, a, l) {
            function p(t, e, i) {
                e = e || 0;
                var s, o, a, r = [],
                    h = 0,
                    c = g(); - 1 === (Y = V !== n ? V.maxLength : n) && (Y = n);
                do {
                    !0 === t && f().validPositions[h] ? (a = f().validPositions[h], o = a.match, s = a.locator.slice(), r.push(!0 === i ? a.input : !1 === i ? o.nativeDef : O(h, o))) : (a = b(h, s, h - 1), o = a.match, s = a.locator.slice(), (!1 === l.jitMasking || h < c || "number" == typeof l.jitMasking && isFinite(l.jitMasking) && l.jitMasking > h) && r.push(!1 === i ? o.nativeDef : O(h, o))), h++
                } while ((Y === n || h < Y) && (null !== o.fn || "" !== o.def) || e > h);
                return "" === r[r.length - 1] && r.pop(), f().maskLength = h + 1, r
            }

            function f() {
                return a
            }

            function m(t) {
                var e = f();
                e.buffer = n, !0 !== t && (e.validPositions = {}, e.p = 0)
            }

            function g(t, e, i) {
                var s = -1,
                    o = -1,
                    a = i || f().validPositions;
                t === n && (t = -1);
                for (var r in a) {
                    var l = parseInt(r);
                    a[l] && (e || !0 !== a[l].generatedInput) && (l <= t && (s = l), l >= t && (o = l))
                }
                return -1 !== s && t - s > 1 || o < t ? s : o
            }

            function v(e, i, s, o) {
                var a, r = e,
                    h = t.extend(!0, {}, f().validPositions),
                    c = !1;
                for (f().p = e, a = i - 1; a >= r; a--) f().validPositions[a] !== n && (!0 !== s && (!f().validPositions[a].match.optionality && function(t) {
                    var e = f().validPositions[t];
                    if (e !== n && null === e.match.fn) {
                        var i = f().validPositions[t - 1],
                            s = f().validPositions[t + 1];
                        return i !== n && s !== n
                    }
                    return !1
                }(a) || !1 === l.canClearPosition(f(), a, g(), o, l)) || delete f().validPositions[a]);
                for (m(!0), a = r + 1; a <= g();) {
                    for (; f().validPositions[r] !== n;) r++;
                    if (a < r && (a = r + 1), f().validPositions[a] === n && S(a)) a++;
                    else {
                        var u = b(a);
                        !1 === c && h[r] && h[r].match.def === u.match.def ? (f().validPositions[r] = t.extend(!0, {}, h[r]), f().validPositions[r].input = u.input, delete f().validPositions[a], a++) : x(r, u.match.def) ? !1 !== I(r, u.input || O(a), !0) && (delete f().validPositions[a], a++, c = !0) : S(a) || (a++, r--), r++
                    }
                }
                m(!0)
            }

            function y(t, e) {
                for (var i, s = t, o = g(), a = f().validPositions[o] || w(0)[0], r = a.alternation !== n ? a.locator[a.alternation].toString().split(",") : [], h = 0; h < s.length && (!((i = s[h]).match && (l.greedy && !0 !== i.match.optionalQuantifier || (!1 === i.match.optionality || !1 === i.match.newBlockMarker) && !0 !== i.match.optionalQuantifier) && (a.alternation === n || a.alternation !== i.alternation || i.locator[a.alternation] !== n && T(i.locator[a.alternation].toString().split(","), r))) || !0 === e && (null !== i.match.fn || /[0-9a-bA-Z]/.test(i.match.def))); h++);
                return i
            }

            function b(t, e, i) {
                return f().validPositions[t] || y(w(t, e ? e.slice() : e, i))
            }

            function _(t) {
                return f().validPositions[t] ? f().validPositions[t] : w(t)[0]
            }

            function x(t, e) {
                for (var i = !1, n = w(t), s = 0; s < n.length; s++)
                    if (n[s].match && n[s].match.def === e) {
                        i = !0;
                        break
                    }
                return i
            }

            function w(e, i, s) {
                function o(i, s, a, h) {
                    function u(a, h, g) {
                        function v(e, i) {
                            var n = 0 === t.inArray(e, i.matches);
                            return n || t.each(i.matches, function(t, s) {
                                if (!0 === s.isQuantifier && (n = v(e, i.matches[t - 1]))) return !1
                            }), n
                        }

                        function y(e, i, s) {
                            var o, a;
                            return (f().tests[e] || f().validPositions[e]) && t.each(f().tests[e] || [f().validPositions[e]], function(t, e) {
                                var r = s !== n ? s : e.alternation,
                                    l = e.locator[r] !== n ? e.locator[r].toString().indexOf(i) : -1;
                                (a === n || l < a) && -1 !== l && (o = e, a = l)
                            }), o ? o.locator.slice((s !== n ? s : o.alternation) + 1) : s !== n ? y(e, i) : n
                        }
                        if (c > 1e4) throw "Inputmask: There is probably an error in your mask definition or in the code. Create an issue on github with an example of the mask you are using. " + f().mask;
                        if (c === e && a.matches === n) return d.push({
                            match: a,
                            locator: h.reverse(),
                            cd: m
                        }), !0;
                        if (a.matches !== n) {
                            if (a.isGroup && g !== a) {
                                if (a = u(i.matches[t.inArray(a, i.matches) + 1], h)) return !0
                            } else if (a.isOptional) {
                                var b = a;
                                if (a = o(a, s, h, g)) {
                                    if (r = d[d.length - 1].match, !v(r, b)) return !0;
                                    p = !0, c = e
                                }
                            } else if (a.isAlternator) {
                                var _, x = a,
                                    w = [],
                                    k = d.slice(),
                                    C = h.length,
                                    D = s.length > 0 ? s.shift() : -1;
                                if (-1 === D || "string" == typeof D) {
                                    var A, T = c,
                                        I = s.slice(),
                                        S = [];
                                    if ("string" == typeof D) S = D.split(",");
                                    else
                                        for (A = 0; A < x.matches.length; A++) S.push(A);
                                    for (var E = 0; E < S.length; E++) {
                                        if (A = parseInt(S[E]), d = [], s = y(c, A, C) || I.slice(), !0 !== (a = u(x.matches[A] || i.matches[A], [A].concat(h), g) || a) && a !== n && S[S.length - 1] < x.matches.length) {
                                            var P = t.inArray(a, i.matches) + 1;
                                            i.matches.length > P && (a = u(i.matches[P], [P].concat(h.slice(1, h.length)), g)) && (S.push(P.toString()), t.each(d, function(t, e) {
                                                e.alternation = h.length - 1
                                            }))
                                        }
                                        _ = d.slice(), c = T, d = [];
                                        for (var N = 0; N < _.length; N++) {
                                            var M = _[N],
                                                O = !1;
                                            M.alternation = M.alternation || C;
                                            for (var j = 0; j < w.length; j++) {
                                                var H = w[j];
                                                if ("string" != typeof D || -1 !== t.inArray(M.locator[M.alternation].toString(), S)) {
                                                    if (M.match.nativeDef === H.match.nativeDef || M.match.def === H.match.nativeDef || M.match.nativeDef === H.match.def) {
                                                        O = !0, M.alternation == H.alternation && -1 === H.locator[H.alternation].toString().indexOf(M.locator[M.alternation]) && (H.locator[H.alternation] = H.locator[H.alternation] + "," + M.locator[M.alternation], H.alternation = M.alternation), M.match.nativeDef === H.match.def && (M.locator[M.alternation] = H.locator[H.alternation], w.splice(w.indexOf(H), 1, M));
                                                        break
                                                    }
                                                    if (M.match.def === H.match.def) {
                                                        O = !1;
                                                        break
                                                    }
                                                    if (function(t, i) {
                                                            return null === t.match.fn && null !== i.match.fn && i.match.fn.test(t.match.def, f(), e, !1, l, !1)
                                                        }(M, H)) {
                                                        M.alternation == H.alternation && -1 === M.locator[M.alternation].toString().indexOf(H.locator[H.alternation].toString().split("")[0]) && (M.na = M.na || M.locator[M.alternation].toString(), -1 === M.na.indexOf(M.locator[M.alternation].toString().split("")[0]) && (M.na = M.na + "," + M.locator[H.alternation].toString().split("")[0]), O = !0, M.locator[M.alternation] = H.locator[H.alternation].toString().split("")[0] + "," + M.locator[M.alternation], w.splice(w.indexOf(H), 0, M));
                                                        break
                                                    }
                                                }
                                            }
                                            O || w.push(M)
                                        }
                                    }
                                    "string" == typeof D && (w = t.map(w, function(e, i) {
                                        if (isFinite(i)) {
                                            var s = e.alternation,
                                                o = e.locator[s].toString().split(",");
                                            e.locator[s] = n, e.alternation = n;
                                            for (var a = 0; a < o.length; a++) - 1 !== t.inArray(o[a], S) && (e.locator[s] !== n ? (e.locator[s] += ",", e.locator[s] += o[a]) : e.locator[s] = parseInt(o[a]), e.alternation = s);
                                            if (e.locator[s] !== n) return e
                                        }
                                    })), d = k.concat(w), c = e, p = d.length > 0, s = I.slice()
                                } else a = u(x.matches[D] || i.matches[D], [D].concat(h), g);
                                if (a) return !0
                            } else if (a.isQuantifier && g !== i.matches[t.inArray(a, i.matches) - 1])
                                for (var R = a, F = s.length > 0 ? s.shift() : 0; F < (isNaN(R.quantifier.max) ? F + 1 : R.quantifier.max) && c <= e; F++) {
                                    var L = i.matches[t.inArray(R, i.matches) - 1];
                                    if (a = u(L, [F].concat(h), L)) {
                                        if (r = d[d.length - 1].match, r.optionalQuantifier = F > R.quantifier.min - 1, v(r, L)) {
                                            if (F > R.quantifier.min - 1) {
                                                p = !0, c = e;
                                                break
                                            }
                                            return !0
                                        }
                                        return !0
                                    }
                                } else if (a = o(a, s, h, g)) return !0
                        } else c++
                    }
                    for (var g = s.length > 0 ? s.shift() : 0; g < i.matches.length; g++)
                        if (!0 !== i.matches[g].isQuantifier) {
                            var v = u(i.matches[g], [g].concat(a), h);
                            if (v && c === e) return v;
                            if (c > e) break
                        }
                }

                function a(t) {
                    return l.keepStatic && e > 0 && t.length > 1 + ("" === t[t.length - 1].match.def ? 1 : 0) && !0 !== t[0].match.optionality && !0 !== t[0].match.optionalQuantifier && null === t[0].match.fn && !/[0-9a-bA-Z]/.test(t[0].match.def) ? [y(t)] : t
                }
                var r, h = f().maskToken,
                    c = i ? s : 0,
                    u = i ? i.slice() : [0],
                    d = [],
                    p = !1,
                    m = i ? i.join("") : "";
                if (e > -1) {
                    if (i === n) {
                        for (var g, v = e - 1;
                            (g = f().validPositions[v] || f().tests[v]) === n && v > -1;) v--;
                        g !== n && v > -1 && (u = function(e) {
                            var i = [];
                            return t.isArray(e) || (e = [e]), e.length > 0 && (e[0].alternation === n ? 0 === (i = y(e.slice()).locator.slice()).length && (i = e[0].locator.slice()) : t.each(e, function(t, e) {
                                if ("" !== e.def)
                                    if (0 === i.length) i = e.locator.slice();
                                    else
                                        for (var n = 0; n < i.length; n++) e.locator[n] && -1 === i[n].toString().indexOf(e.locator[n]) && (i[n] += "," + e.locator[n])
                            })), i
                        }(g), m = u.join(""), c = v)
                    }
                    if (f().tests[e] && f().tests[e][0].cd === m) return a(f().tests[e]);
                    for (var b = u.shift(); b < h.length && !(o(h[b], u, [b]) && c === e || c > e); b++);
                }
                return (0 === d.length || p) && d.push({
                    match: {
                        fn: null,
                        cardinality: 0,
                        optionality: !0,
                        casing: null,
                        def: "",
                        placeholder: ""
                    },
                    locator: [],
                    cd: m
                }), i !== n && f().tests[e] ? a(t.extend(!0, [], d)) : (f().tests[e] = t.extend(!0, [], d), a(f().tests[e]))
            }

            function k() {
                return f()._buffer === n && (f()._buffer = p(!1, 1), f().buffer === n && (f().buffer = f()._buffer.slice())), f()._buffer
            }

            function C(t) {
                return f().buffer !== n && !0 !== t || (f().buffer = p(!0, g(), !0)), f().buffer
            }

            function D(t, e, i) {
                var s, o;
                if (!0 === t) m(), t = 0, e = i.length;
                else
                    for (s = t; s < e; s++) delete f().validPositions[s];
                for (o = t, s = t; s < e; s++)
                    if (m(!0), i[s] !== l.skipOptionalPartCharacter) {
                        var a = I(o, i[s], !0, !0);
                        !1 !== a && (m(!0), o = a.caret !== n ? a.caret : a.pos + 1)
                    }
            }

            function A(t, e, i) {
                switch (l.casing || e.casing) {
                    case "upper":
                        t = t.toUpperCase();
                        break;
                    case "lower":
                        t = t.toLowerCase();
                        break;
                    case "title":
                        var n = f().validPositions[i - 1];
                        t = 0 === i || n && n.input === String.fromCharCode(s.keyCode.SPACE) ? t.toUpperCase() : t.toLowerCase()
                }
                return t
            }

            function T(e, i, s) {
                for (var o, a = l.greedy ? i : i.slice(0, 1), r = !1, h = s !== n ? s.split(",") : [], c = 0; c < h.length; c++) - 1 !== (o = e.indexOf(h[c])) && e.splice(o, 1);
                for (var u = 0; u < e.length; u++)
                    if (-1 !== t.inArray(e[u], a)) {
                        r = !0;
                        break
                    }
                return r
            }

            function I(e, i, o, a, r) {
                function h(t) {
                    var e = Q ? t.begin - t.end > 1 || t.begin - t.end == 1 : t.end - t.begin > 1 || t.end - t.begin == 1;
                    return e && 0 === t.begin && t.end === f().maskLength ? "full" : e
                }

                function c(i, s, o) {
                    var r = !1;
                    return t.each(w(i), function(c, d) {
                        for (var p = d.match, y = s ? 1 : 0, b = "", _ = p.cardinality; _ > y; _--) b += N(i - (_ - 1));
                        if (s && (b += s), C(!0), !1 !== (r = null != p.fn ? p.fn.test(b, f(), i, o, l, h(e)) : (s === p.def || s === l.skipOptionalPartCharacter) && "" !== p.def && {
                                c: O(i, p, !0) || p.def,
                                pos: i
                            })) {
                            var x = r.c !== n ? r.c : s;
                            x = x === l.skipOptionalPartCharacter && null === p.fn ? O(i, p, !0) || p.def : x;
                            var w = i,
                                k = C();
                            if (r.remove !== n && (t.isArray(r.remove) || (r.remove = [r.remove]), t.each(r.remove.sort(function(t, e) {
                                    return e - t
                                }), function(t, e) {
                                    v(e, e + 1, !0)
                                })), r.insert !== n && (t.isArray(r.insert) || (r.insert = [r.insert]), t.each(r.insert.sort(function(t, e) {
                                    return t - e
                                }), function(t, e) {
                                    I(e.pos, e.c, !0, a)
                                })), r.refreshFromBuffer) {
                                var T = r.refreshFromBuffer;
                                if (D(!0 === T ? T : T.start, T.end, k), r.pos === n && r.c === n) return r.pos = g(), !1;
                                if ((w = r.pos !== n ? r.pos : i) !== i) return r = t.extend(r, I(w, x, !0, a)), !1
                            } else if (!0 !== r && r.pos !== n && r.pos !== i && (w = r.pos, D(i, w, C().slice()), w !== i)) return r = t.extend(r, I(w, x, !0)), !1;
                            return (!0 === r || r.pos !== n || r.c !== n) && (c > 0 && m(!0), u(w, t.extend({}, d, {
                                input: A(x, p, w)
                            }), a, h(e)) || (r = !1), !1)
                        }
                    }), r
                }

                function u(e, i, s, o) {
                    if (o || l.insertMode && f().validPositions[e] !== n && s === n) {
                        var a, r = t.extend(!0, {}, f().validPositions),
                            h = g(n, !0);
                        for (a = e; a <= h; a++) delete f().validPositions[a];
                        f().validPositions[e] = t.extend(!0, {}, i);
                        var c, u = !0,
                            p = f().validPositions,
                            v = !1,
                            y = f().maskLength;
                        for (a = c = e; a <= h; a++) {
                            var b = r[a];
                            if (b !== n)
                                for (var _ = c; _ < f().maskLength && (null === b.match.fn && p[a] && (!0 === p[a].match.optionalQuantifier || !0 === p[a].match.optionality) || null != b.match.fn);) {
                                    if (_++, !1 === v && r[_] && r[_].match.def === b.match.def) f().validPositions[_] = t.extend(!0, {}, r[_]), f().validPositions[_].input = b.input, d(_), c = _, u = !0;
                                    else if (x(_, b.match.def)) {
                                        var w = I(_, b.input, !0, !0);
                                        u = !1 !== w, c = w.caret || w.insert ? g() : _, v = !0
                                    } else if (!(u = !0 === b.generatedInput) && _ >= f().maskLength - 1) break;
                                    if (f().maskLength < y && (f().maskLength = y), u) break
                                }
                            if (!u) break
                        }
                        if (!u) return f().validPositions = t.extend(!0, {}, r), m(!0), !1
                    } else f().validPositions[e] = t.extend(!0, {}, i);
                    return m(!0), !0
                }

                function d(e) {
                    for (var i = e - 1; i > -1 && !f().validPositions[i]; i--);
                    var s, o;
                    for (i++; i < e; i++) f().validPositions[i] === n && (!1 === l.jitMasking || l.jitMasking > i) && ("" === (o = w(i, b(i - 1).locator, i - 1).slice())[o.length - 1].match.def && o.pop(), (s = y(o)) && (s.match.def === l.radixPointDefinitionSymbol || !S(i, !0) || t.inArray(l.radixPoint, C()) < i && s.match.fn && s.match.fn.test(O(i), f(), i, !1, l)) && !1 !== (_ = c(i, O(i, s.match, !0) || (null == s.match.fn ? s.match.def : "" !== O(i) ? O(i) : C()[i]), !0)) && (f().validPositions[_.pos || i].generatedInput = !0))
                }
                o = !0 === o;
                var p = e;
                e.begin !== n && (p = Q && !h(e) ? e.end : e.begin);
                var _ = !0,
                    k = t.extend(!0, {}, f().validPositions);
                if (t.isFunction(l.preValidation) && !o && !0 !== a && (_ = l.preValidation(C(), p, i, h(e), l)), !0 === _) {
                    if (d(p), h(e) && (z(n, s.keyCode.DELETE, e), p = f().p), p < f().maskLength && (Y === n || p < Y) && (_ = c(p, i, o), (!o || !0 === a) && !1 === _)) {
                        var P = f().validPositions[p];
                        if (!P || null !== P.match.fn || P.match.def !== i && i !== l.skipOptionalPartCharacter) {
                            if ((l.insertMode || f().validPositions[E(p)] === n) && !S(p, !0))
                                for (var M = p + 1, j = E(p); M <= j; M++)
                                    if (!1 !== (_ = c(M, i, o))) {
                                        ! function(e, i) {
                                            var s = f().validPositions[i];
                                            if (s)
                                                for (var o = s.locator, a = o.length, r = e; r < i; r++)
                                                    if (f().validPositions[r] === n && !S(r, !0)) {
                                                        var l = w(r).slice(),
                                                            h = y(l, !0),
                                                            d = -1;
                                                        "" === l[l.length - 1].match.def && l.pop(), t.each(l, function(t, e) {
                                                            for (var i = 0; i < a; i++) {
                                                                if (e.locator[i] === n || !T(e.locator[i].toString().split(","), o[i].toString().split(","), e.na)) {
                                                                    var s = o[i],
                                                                        r = h.locator[i],
                                                                        l = e.locator[i];
                                                                    s - r > Math.abs(s - l) && (h = e);
                                                                    break
                                                                }
                                                                d < i && (d = i, h = e)
                                                            }
                                                        }), (h = t.extend({}, h, {
                                                            input: O(r, h.match, !0) || h.match.def
                                                        })).generatedInput = !0, u(r, h, !0), f().validPositions[i] = n, c(i, s.input, !0)
                                                    }
                                        }(p, _.pos !== n ? _.pos : M), p = M;
                                        break
                                    }
                        } else _ = {
                            caret: E(p)
                        }
                    }!1 === _ && l.keepStatic && !o && !0 !== r && (_ = function(e, i, s) {
                        var o, r, h, c, u, d, p, v, y = t.extend(!0, {}, f().validPositions),
                            b = !1,
                            _ = g();
                        for (c = f().validPositions[_]; _ >= 0; _--)
                            if ((h = f().validPositions[_]) && h.alternation !== n) {
                                if (o = _, r = f().validPositions[o].alternation, c.locator[h.alternation] !== h.locator[h.alternation]) break;
                                c = h
                            }
                        if (r !== n) {
                            v = parseInt(o);
                            var x = c.locator[c.alternation || r] !== n ? c.locator[c.alternation || r] : p[0];
                            x.length > 0 && (x = x.split(",")[0]);
                            var k = f().validPositions[v],
                                C = f().validPositions[v - 1];
                            t.each(w(v, C ? C.locator : n, v - 1), function(o, h) {
                                p = h.locator[r] ? h.locator[r].toString().split(",") : [];
                                for (var c = 0; c < p.length; c++) {
                                    var _ = [],
                                        w = 0,
                                        C = 0,
                                        D = !1;
                                    if (x < p[c] && (h.na === n || -1 === t.inArray(p[c], h.na.split(",")) || -1 === t.inArray(x.toString(), p))) {
                                        f().validPositions[v] = t.extend(!0, {}, h);
                                        var A = f().validPositions[v].locator;
                                        for (f().validPositions[v].locator[r] = parseInt(p[c]), null == h.match.fn ? (k.input !== h.match.def && (D = !0, !0 !== k.generatedInput && _.push(k.input)), C++, f().validPositions[v].generatedInput = !/[0-9a-bA-Z]/.test(h.match.def), f().validPositions[v].input = h.match.def) : f().validPositions[v].input = k.input, u = v + 1; u < g(n, !0) + 1; u++)(d = f().validPositions[u]) && !0 !== d.generatedInput && /[0-9a-bA-Z]/.test(d.input) ? _.push(d.input) : u < e && w++, delete f().validPositions[u];
                                        for (D && _[0] === h.match.def && _.shift(), m(!0), b = !0; _.length > 0;) {
                                            var T = _.shift();
                                            if (T !== l.skipOptionalPartCharacter && !(b = I(g(n, !0) + 1, T, !1, a, !0))) break
                                        }
                                        if (b) {
                                            f().validPositions[v].locator = A;
                                            var S = g(e) + 1;
                                            for (u = v + 1; u < g() + 1; u++)((d = f().validPositions[u]) === n || null == d.match.fn) && u < e + (C - w) && C++;
                                            b = I((e += C - w) > S ? S : e, i, s, a, !0)
                                        }
                                        if (b) return !1;
                                        m(), f().validPositions = t.extend(!0, {}, y)
                                    }
                                }
                            })
                        }
                        return b
                    }(p, i, o)), !0 === _ && (_ = {
                        pos: p
                    })
                }
                if (t.isFunction(l.postValidation) && !1 !== _ && !o && !0 !== a) {
                    var H = l.postValidation(C(!0), _, l);
                    if (H.refreshFromBuffer && H.buffer) {
                        var R = H.refreshFromBuffer;
                        D(!0 === R ? R : R.start, R.end, H.buffer)
                    }
                    _ = !0 === H ? _ : H
                }
                return _.pos === n && (_.pos = p), !1 === _ && (m(!0), f().validPositions = t.extend(!0, {}, k)), _
            }

            function S(t, e) {
                var i = b(t).match;
                if ("" === i.def && (i = _(t).match), null != i.fn) return i.fn;
                if (!0 !== e && t > -1) {
                    var n = w(t);
                    return n.length > 1 + ("" === n[n.length - 1].match.def ? 1 : 0)
                }
                return !1
            }

            function E(t, e) {
                var i = f().maskLength;
                if (t >= i) return i;
                for (var n = t; ++n < i && (!0 === e && (!0 !== _(n).match.newBlockMarker || !S(n)) || !0 !== e && !S(n)););
                return n
            }

            function P(t, e) {
                var i, n = t;
                if (n <= 0) return 0;
                for (; --n > 0 && (!0 === e && !0 !== _(n).match.newBlockMarker || !0 !== e && !S(n) && ((i = w(n)).length < 2 || 2 === i.length && "" === i[1].match.def)););
                return n
            }

            function N(t) {
                return f().validPositions[t] === n ? O(t) : f().validPositions[t].input
            }

            function M(e, i, s, o, a) {
                if (o && t.isFunction(l.onBeforeWrite)) {
                    var r = l.onBeforeWrite(o, i, s, l);
                    if (r) {
                        if (r.refreshFromBuffer) {
                            var h = r.refreshFromBuffer;
                            D(!0 === h ? h : h.start, h.end, r.buffer || i), i = C(!0)
                        }
                        s !== n && (s = r.caret !== n ? r.caret : s)
                    }
                }
                e !== n && (e.inputmask._valueSet(i.join("")), s === n || o !== n && "blur" === o.type ? W(e, i, s) : d && "input" === o.type ? setTimeout(function() {
                    R(e, s)
                }, 0) : R(e, s), !0 === a && (Z = !0, t(e).trigger("input")))
            }

            function O(e, i, s) {
                if ((i = i || _(e).match).placeholder !== n || !0 === s) return t.isFunction(i.placeholder) ? i.placeholder(l) : i.placeholder;
                if (null === i.fn) {
                    if (e > -1 && f().validPositions[e] === n) {
                        var o, a = w(e),
                            r = [];
                        if (a.length > 1 + ("" === a[a.length - 1].match.def ? 1 : 0))
                            for (var h = 0; h < a.length; h++)
                                if (!0 !== a[h].match.optionality && !0 !== a[h].match.optionalQuantifier && (null === a[h].match.fn || o === n || !1 !== a[h].match.fn.test(o.match.def, f(), e, !0, l)) && (r.push(a[h]), null === a[h].match.fn && (o = a[h]), r.length > 1 && /[0-9a-bA-Z]/.test(r[0].match.def))) return l.placeholder.charAt(e % l.placeholder.length)
                    }
                    return i.def
                }
                return l.placeholder.charAt(e % l.placeholder.length)
            }

            function j(e, o, a, r, h) {
                function c(t, e) {
                    return -1 !== k().slice(t, E(t)).join("").indexOf(e) && !S(t) && _(t).match.nativeDef === e.charAt(e.length - 1)
                }
                var u = r.slice(),
                    d = "",
                    p = 0,
                    v = n;
                if (m(), f().p = E(-1), !a)
                    if (!0 !== l.autoUnmask) {
                        var y = k().slice(0, E(-1)).join(""),
                            x = u.join("").match(new RegExp("^" + s.escapeRegex(y), "g"));
                        x && x.length > 0 && (u.splice(0, x.length * y.length), p = E(p))
                    } else p = E(p);
                if (t.each(u, function(i, s) {
                        if (s !== n) {
                            var o = new t.Event("_checkval");
                            o.which = s.charCodeAt(0), d += s;
                            var r = g(n, !0),
                                h = f().validPositions[r],
                                u = b(r + 1, h ? h.locator.slice() : n, r);
                            if (!c(p, d) || a || l.autoUnmask) {
                                var y = a ? i : null == u.match.fn && u.match.optionality && r + 1 < f().p ? r + 1 : f().p;
                                v = it.keypressEvent.call(e, o, !0, !1, a, y), p = y + 1, d = ""
                            } else v = it.keypressEvent.call(e, o, !0, !1, !0, r + 1);
                            if (!a && t.isFunction(l.onBeforeWrite)) {
                                var _ = v.forwardPosition;
                                if (v = l.onBeforeWrite(o, C(), v.forwardPosition, l), v.forwardPosition = _, v && v.refreshFromBuffer) {
                                    var x = v.refreshFromBuffer;
                                    D(!0 === x ? x : x.start, x.end, v.buffer), m(!0), v.caret && (f().p = v.caret, v.forwardPosition = v.caret)
                                }
                            }
                        }
                    }), o) {
                    var w = n;
                    i.activeElement === e && v && (w = l.numericInput ? P(v.forwardPosition) : v.forwardPosition), M(e, C(), w, h || new t.Event("checkval"), h && "input" === h.type)
                }
            }

            function H(e) {
                if (e) {
                    if (e.inputmask === n) return e.value;
                    e.inputmask && e.inputmask.refreshValue && it.setValueEvent.call(e)
                }
                var i = [],
                    s = f().validPositions;
                for (var o in s) s[o].match && null != s[o].match.fn && i.push(s[o].input);
                var a = 0 === i.length ? "" : (Q ? i.reverse() : i).join("");
                if (t.isFunction(l.onUnMask)) {
                    var r = (Q ? C().slice().reverse() : C()).join("");
                    a = l.onUnMask(r, a, l)
                }
                return a
            }

            function R(t, s, o, a) {
                function r(t) {
                    return !0 === a || !Q || "number" != typeof t || l.greedy && "" === l.placeholder || (t = C().join("").length - t), t
                }
                var c;
                if ("number" != typeof s) return t.setSelectionRange ? (s = t.selectionStart, o = t.selectionEnd) : e.getSelection ? (c = e.getSelection().getRangeAt(0)).commonAncestorContainer.parentNode !== t && c.commonAncestorContainer !== t || (s = c.startOffset, o = c.endOffset) : i.selection && i.selection.createRange && (c = i.selection.createRange(), s = 0 - c.duplicate().moveStart("character", -t.inputmask._valueGet().length), o = s + c.text.length), {
                    begin: r(s),
                    end: r(o)
                };
                s = r(s), o = "number" == typeof(o = r(o)) ? o : s;
                var u = parseInt(((t.ownerDocument.defaultView || e).getComputedStyle ? (t.ownerDocument.defaultView || e).getComputedStyle(t, null) : t.currentStyle).fontSize) * o;
                if (t.scrollLeft = u > t.scrollWidth ? u : 0, h || !1 !== l.insertMode || s !== o || o++, t.setSelectionRange) t.selectionStart = s, t.selectionEnd = o;
                else if (e.getSelection) {
                    if (c = i.createRange(), t.firstChild === n || null === t.firstChild) {
                        var d = i.createTextNode("");
                        t.appendChild(d)
                    }
                    c.setStart(t.firstChild, s < t.inputmask._valueGet().length ? s : t.inputmask._valueGet().length), c.setEnd(t.firstChild, o < t.inputmask._valueGet().length ? o : t.inputmask._valueGet().length), c.collapse(!0);
                    var p = e.getSelection();
                    p.removeAllRanges(), p.addRange(c)
                } else t.createTextRange && ((c = t.createTextRange()).collapse(!0), c.moveEnd("character", o), c.moveStart("character", s), c.select());
                W(t, n, {
                    begin: s,
                    end: o
                })
            }

            function F(e) {
                var i, s, o = C(),
                    a = o.length,
                    r = g(),
                    l = {},
                    h = f().validPositions[r],
                    c = h !== n ? h.locator.slice() : n;
                for (i = r + 1; i < o.length; i++) s = b(i, c, i - 1), c = s.locator.slice(), l[i] = t.extend(!0, {}, s);
                var u = h && h.alternation !== n ? h.locator[h.alternation] : n;
                for (i = a - 1; i > r && ((s = l[i]).match.optionality || s.match.optionalQuantifier || u && (u !== l[i].locator[h.alternation] && null != s.match.fn || null === s.match.fn && s.locator[h.alternation] && T(s.locator[h.alternation].toString().split(","), u.toString().split(",")) && "" !== w(i)[0].def)) && o[i] === O(i, s.match); i--) a--;
                return e ? {
                    l: a,
                    def: l[a] ? l[a].match : n
                } : a
            }

            function L(t) {
                for (var e, i = F(), n = t.length; i < n && !S(i + 1) && (e = _(i + 1)) && !0 !== e.match.optionality && !0 !== e.match.optionalQuantifier;) i++;
                for (;
                    (e = _(i - 1)) && e.match.optionality && e.input === l.skipOptionalPartCharacter;) i--;
                return t.splice(i), t
            }

            function B(e) {
                if (t.isFunction(l.isComplete)) return l.isComplete(e, l);
                if ("*" === l.repeat) return n;
                var i = !1,
                    s = F(!0),
                    o = P(s.l);
                if (s.def === n || s.def.newBlockMarker || s.def.optionality || s.def.optionalQuantifier) {
                    i = !0;
                    for (var a = 0; a <= o; a++) {
                        var r = b(a).match;
                        if (null !== r.fn && f().validPositions[a] === n && !0 !== r.optionality && !0 !== r.optionalQuantifier || null === r.fn && e[a] !== O(a, r)) {
                            i = !1;
                            break
                        }
                    }
                }
                return i
            }

            function z(e, i, o, a) {
                if ((l.numericInput || Q) && (i === s.keyCode.BACKSPACE ? i = s.keyCode.DELETE : i === s.keyCode.DELETE && (i = s.keyCode.BACKSPACE), Q)) {
                    var r = o.end;
                    o.end = o.begin, o.begin = r
                }
                i === s.keyCode.BACKSPACE && (o.end - o.begin < 1 || !1 === l.insertMode) ? (o.begin = P(o.begin), f().validPositions[o.begin] === n || f().validPositions[o.begin].input !== l.groupSeparator && f().validPositions[o.begin].input !== l.radixPoint || o.begin--) : i === s.keyCode.DELETE && o.begin === o.end && (o.end = S(o.end, !0) ? o.end + 1 : E(o.end) + 1, f().validPositions[o.begin] === n || f().validPositions[o.begin].input !== l.groupSeparator && f().validPositions[o.begin].input !== l.radixPoint || o.end++), v(o.begin, o.end, !1, a), !0 !== a && function() {
                    if (l.keepStatic) {
                        for (var i = [], s = g(-1, !0), o = t.extend(!0, {}, f().validPositions), a = f().validPositions[s]; s >= 0; s--) {
                            var r = f().validPositions[s];
                            if (r) {
                                if (!0 !== r.generatedInput && /[0-9a-bA-Z]/.test(r.input) && i.push(r.input), delete f().validPositions[s], r.alternation !== n && r.locator[r.alternation] !== a.locator[r.alternation]) break;
                                a = r
                            }
                        }
                        if (s > -1)
                            for (f().p = E(g(-1, !0)); i.length > 0;) {
                                var h = new t.Event("keypress");
                                h.which = i.pop().charCodeAt(0), it.keypressEvent.call(e, h, !0, !1, !1, f().p)
                            } else f().validPositions = t.extend(!0, {}, o)
                    }
                }();
                var h = g(o.begin, !0);
                h < o.begin ? f().p = E(h) : !0 !== a && (f().p = o.begin)
            }

            function $(n) {
                function s(t) {
                    var e, s = i.createElement("span");
                    for (var o in r) isNaN(o) && -1 !== o.indexOf("font") && (s.style[o] = r[o]);
                    s.style.textTransform = r.textTransform, s.style.letterSpacing = r.letterSpacing, s.style.position = "absolute", s.style.height = "auto", s.style.width = "auto", s.style.visibility = "hidden", s.style.whiteSpace = "nowrap", i.body.appendChild(s);
                    var a, l = n.inputmask._valueGet(),
                        h = 0;
                    for (e = 0, a = l.length; e <= a; e++) {
                        if (s.innerHTML += l.charAt(e) || "_", s.offsetWidth >= t) {
                            var c = t - h,
                                u = s.offsetWidth - t;
                            s.innerHTML = l.charAt(e), e = (c -= s.offsetWidth / 3) < u ? e - 1 : e;
                            break
                        }
                        h = s.offsetWidth
                    }
                    return i.body.removeChild(s), e
                }

                function o() {
                    G.style.position = "absolute", G.style.top = a.top + "px", G.style.left = a.left + "px", G.style.width = parseInt(n.offsetWidth) - parseInt(r.paddingLeft) - parseInt(r.paddingRight) - parseInt(r.borderLeftWidth) - parseInt(r.borderRightWidth) + "px", G.style.height = parseInt(n.offsetHeight) - parseInt(r.paddingTop) - parseInt(r.paddingBottom) - parseInt(r.borderTopWidth) - parseInt(r.borderBottomWidth) + "px", G.style.lineHeight = G.style.height, G.style.zIndex = isNaN(r.zIndex) ? -1 : r.zIndex - 1, G.style.webkitAppearance = "textfield", G.style.mozAppearance = "textfield", G.style.Appearance = "textfield"
                }
                var a = t(n).position(),
                    r = (n.ownerDocument.defaultView || e).getComputedStyle(n, null);
                n.parentNode, G = i.createElement("div"), i.body.appendChild(G);
                for (var h in r) r.hasOwnProperty(h) && isNaN(h) && "cssText" !== h && -1 == h.indexOf("webkit") && (G.style[h] = r[h]);
                n.style.backgroundColor = "transparent", n.style.color = "transparent", n.style.webkitAppearance = "caret", n.style.mozAppearance = "caret", n.style.Appearance = "caret", o(), t(e).on("resize", function(i) {
                    a = t(n).position(), r = (n.ownerDocument.defaultView || e).getComputedStyle(n, null), o()
                }), t(n).on("click", function(t) {
                    return R(n, s(t.clientX)), it.clickEvent.call(this, [t])
                }), t(n).on("keydown", function(t) {
                    t.shiftKey || !1 === l.insertMode || setTimeout(function() {
                        W(n)
                    }, 0)
                })
            }

            function W(t, e, s) {
                function o() {
                    r || null !== c.fn && u.input !== n ? r && null !== c.fn && u.input !== n && (r = !1, a += "</span>") : (r = !0, a += "<span class='im-static''>")
                }
                if (G !== n) {
                    e = e || C(), s === n ? s = R(t) : s.begin === n && (s = {
                        begin: s,
                        end: s
                    });
                    var a = "",
                        r = !1;
                    if ("" != e) {
                        var h, c, u, d = 0,
                            p = g();
                        do {
                            d === s.begin && i.activeElement === t && (a += "<span class='im-caret' style='border-right-width: 1px;border-right-style: solid;'></span>"), f().validPositions[d] ? (u = f().validPositions[d], c = u.match, h = u.locator.slice(), o(), a += u.input) : (u = b(d, h, d - 1), c = u.match, h = u.locator.slice(), (!1 === l.jitMasking || d < p || "number" == typeof l.jitMasking && isFinite(l.jitMasking) && l.jitMasking > d) && (o(), a += O(d, c))), d++
                        } while ((Y === n || d < Y) && (null !== c.fn || "" !== c.def) || p > d)
                    }
                    G.innerHTML = a
                }
            }
            a = a || this.maskset, l = l || this.opts;
            var q, U, Y, G, K, V = this.el,
                Q = this.isRTL,
                X = !1,
                Z = !1,
                J = !1,
                tt = !1,
                et = {
                    on: function(e, i, o) {
                        var a = function(e) {
                            if (this.inputmask === n && "FORM" !== this.nodeName) {
                                var i = t.data(this, "_inputmask_opts");
                                i ? new s(i).mask(this) : et.off(this)
                            } else {
                                if ("setvalue" === e.type || "FORM" === this.nodeName || !(this.disabled || this.readOnly && !("keydown" === e.type && e.ctrlKey && 67 === e.keyCode || !1 === l.tabThrough && e.keyCode === s.keyCode.TAB))) {
                                    switch (e.type) {
                                        case "input":
                                            if (!0 === Z) return Z = !1, e.preventDefault();
                                            break;
                                        case "keydown":
                                            X = !1, Z = !1;
                                            break;
                                        case "keypress":
                                            if (!0 === X) return e.preventDefault();
                                            X = !0;
                                            break;
                                        case "click":
                                            if (c || u) {
                                                var a = this,
                                                    r = arguments;
                                                return setTimeout(function() {
                                                    o.apply(a, r)
                                                }, 0), !1
                                            }
                                    }
                                    var h = o.apply(this, arguments);
                                    return !1 === h && (e.preventDefault(), e.stopPropagation()), h
                                }
                                e.preventDefault()
                            }
                        };
                        e.inputmask.events[i] = e.inputmask.events[i] || [], e.inputmask.events[i].push(a), -1 !== t.inArray(i, ["submit", "reset"]) ? null != e.form && t(e.form).on(i, a) : t(e).on(i, a)
                    },
                    off: function(e, i) {
                        if (e.inputmask && e.inputmask.events) {
                            var n;
                            i ? (n = [], n[i] = e.inputmask.events[i]) : n = e.inputmask.events, t.each(n, function(i, n) {
                                for (; n.length > 0;) {
                                    var s = n.pop(); - 1 !== t.inArray(i, ["submit", "reset"]) ? null != e.form && t(e.form).off(i, s) : t(e).off(i, s)
                                }
                                delete e.inputmask.events[i]
                            })
                        }
                    }
                },
                it = {
                    keydownEvent: function(e) {
                        var n = this,
                            o = t(n),
                            a = e.keyCode,
                            r = R(n);
                        if (a === s.keyCode.BACKSPACE || a === s.keyCode.DELETE || u && a === s.keyCode.BACKSPACE_SAFARI || e.ctrlKey && a === s.keyCode.X && ! function(t) {
                                var e = i.createElement("input"),
                                    n = "oncut" in e;
                                return n || (e.setAttribute("oncut", "return;"), n = "function" == typeof e.oncut), e = null, n
                            }()) e.preventDefault(), z(n, a, r), M(n, C(!0), f().p, e, n.inputmask._valueGet() !== C().join("")), n.inputmask._valueGet() === k().join("") ? o.trigger("cleared") : !0 === B(C()) && o.trigger("complete");
                        else if (a === s.keyCode.END || a === s.keyCode.PAGE_DOWN) {
                            e.preventDefault();
                            var h = E(g());
                            l.insertMode || h !== f().maskLength || e.shiftKey || h--, R(n, e.shiftKey ? r.begin : h, h, !0)
                        } else a === s.keyCode.HOME && !e.shiftKey || a === s.keyCode.PAGE_UP ? (e.preventDefault(), R(n, 0, e.shiftKey ? r.begin : 0, !0)) : (l.undoOnEscape && a === s.keyCode.ESCAPE || 90 === a && e.ctrlKey) && !0 !== e.altKey ? (j(n, !0, !1, q.split("")), o.trigger("click")) : a !== s.keyCode.INSERT || e.shiftKey || e.ctrlKey ? !0 === l.tabThrough && a === s.keyCode.TAB ? (!0 === e.shiftKey ? (null === _(r.begin).match.fn && (r.begin = E(r.begin)), r.end = P(r.begin, !0), r.begin = P(r.end, !0)) : (r.begin = E(r.begin, !0), r.end = E(r.begin, !0), r.end < f().maskLength && r.end--), r.begin < f().maskLength && (e.preventDefault(), R(n, r.begin, r.end))) : e.shiftKey || !1 === l.insertMode && (a === s.keyCode.RIGHT ? setTimeout(function() {
                            var t = R(n);
                            R(n, t.begin)
                        }, 0) : a === s.keyCode.LEFT && setTimeout(function() {
                            var t = R(n);
                            R(n, Q ? t.begin + 1 : t.begin - 1)
                        }, 0)) : (l.insertMode = !l.insertMode, R(n, l.insertMode || r.begin !== f().maskLength ? r.begin : r.begin - 1));
                        l.onKeyDown.call(this, e, C(), R(n).begin, l), J = -1 !== t.inArray(a, l.ignorables)
                    },
                    keypressEvent: function(e, i, o, a, r) {
                        var h = this,
                            c = t(h),
                            u = e.which || e.charCode || e.keyCode;
                        if (!(!0 === i || e.ctrlKey && e.altKey) && (e.ctrlKey || e.metaKey || J)) return u === s.keyCode.ENTER && q !== C().join("") && (q = C().join(""), setTimeout(function() {
                            c.trigger("change")
                        }, 0)), !0;
                        if (u) {
                            46 === u && !1 === e.shiftKey && "" !== l.radixPoint && (u = l.radixPoint.charCodeAt(0));
                            var d, p = i ? {
                                    begin: r,
                                    end: r
                                } : R(h),
                                g = String.fromCharCode(u);
                            f().writeOutBuffer = !0;
                            var v = I(p, g, a);
                            if (!1 !== v && (m(!0), d = v.caret !== n ? v.caret : i ? v.pos + 1 : E(v.pos), f().p = d), !1 !== o) {
                                var y = this;
                                if (setTimeout(function() {
                                        l.onKeyValidation.call(y, u, v, l)
                                    }, 0), f().writeOutBuffer && !1 !== v) {
                                    var b = C();
                                    M(h, b, l.numericInput && v.caret === n ? P(d) : d, e, !0 !== i), !0 !== i && setTimeout(function() {
                                        !0 === B(b) && c.trigger("complete")
                                    }, 0)
                                }
                            }
                            if (e.preventDefault(), i) return v.forwardPosition = d, v
                        }
                    },
                    pasteEvent: function(i) {
                        var n, s = this,
                            o = i.originalEvent || i,
                            a = t(s),
                            r = s.inputmask._valueGet(!0),
                            h = R(s);
                        Q && (n = h.end, h.end = h.begin, h.begin = n);
                        var c = r.substr(0, h.begin),
                            u = r.substr(h.end, r.length);
                        if (c === (Q ? k().reverse() : k()).slice(0, h.begin).join("") && (c = ""), u === (Q ? k().reverse() : k()).slice(h.end).join("") && (u = ""), Q && (n = c, c = u, u = n), e.clipboardData && e.clipboardData.getData) r = c + e.clipboardData.getData("Text") + u;
                        else {
                            if (!o.clipboardData || !o.clipboardData.getData) return !0;
                            r = c + o.clipboardData.getData("text/plain") + u
                        }
                        var d = r;
                        if (t.isFunction(l.onBeforePaste)) {
                            if (!1 === (d = l.onBeforePaste(r, l))) return i.preventDefault();
                            d || (d = r)
                        }
                        return j(s, !1, !1, Q ? d.split("").reverse() : d.toString().split("")), M(s, C(), E(g()), i, q !== C().join("")), !0 === B(C()) && a.trigger("complete"), i.preventDefault()
                    },
                    inputFallBackEvent: function(e) {
                        var i = this,
                            n = i.inputmask._valueGet();
                        if (C().join("") !== n) {
                            var o = R(i);
                            if ("." === n.charAt(o.begin - 1) && "" !== l.radixPoint && (n = n.split(""), n[o.begin - 1] = l.radixPoint.charAt(0), n = n.join("")), n.charAt(o.begin - 1) === l.radixPoint && n.length > C().length) return (r = new t.Event("keypress")).which = l.radixPoint.charCodeAt(0), it.keypressEvent.call(i, r, !0, !0, !1, o.begin), !1;
                            if (n = n.replace(new RegExp("(" + s.escapeRegex(k().join("")) + ")*"), ""), c) {
                                var a = n.replace(C().join(""), "");
                                if (1 === a.length) {
                                    var r = new t.Event("keypress");
                                    return r.which = a.charCodeAt(0), it.keypressEvent.call(i, r, !0, !0, !1, f().validPositions[o.begin - 1] ? o.begin : o.begin - 1), !1
                                }
                            }
                            if (o.begin > n.length && (R(i, n.length), o = R(i)), C().length - n.length != 1 || n.charAt(o.begin) === C()[o.begin] || n.charAt(o.begin + 1) === C()[o.begin] || S(o.begin)) {
                                var h = [],
                                    u = p(!0, 1).join("");
                                for (h.push(n.substr(0, o.begin)), h.push(n.substr(o.begin)); null === n.match(s.escapeRegex(u) + "$");) u = u.slice(1);
                                n = n.replace(u, ""), t.isFunction(l.onBeforeMask) && (n = l.onBeforeMask(n, l) || n), j(i, !0, !1, n.split(""), e);
                                var m = R(i).begin,
                                    g = i.inputmask._valueGet(),
                                    v = g.indexOf(h[0]);
                                if (0 === v && m !== h[0].length) R(i, h[0].length), d && setTimeout(function() {
                                    R(i, h[0].length)
                                }, 0);
                                else {
                                    for (; null === g.match(s.escapeRegex(h[1]) + "$");) h[1] = h[1].substr(1);
                                    var y = g.indexOf(h[1]); - 1 !== y && "" !== h[1] && m > y && y > v && (R(i, y), d && setTimeout(function() {
                                        R(i, y)
                                    }, 0))
                                }!0 === B(C()) && t(i).trigger("complete")
                            } else e.keyCode = s.keyCode.BACKSPACE, it.keydownEvent.call(i, e);
                            e.preventDefault()
                        }
                    },
                    setValueEvent: function(e) {
                        this.inputmask.refreshValue = !1;
                        var i = this,
                            n = i.inputmask._valueGet(!0);
                        t.isFunction(l.onBeforeMask) && (n = l.onBeforeMask(n, l) || n), n = n.split(""), j(i, !0, !1, Q ? n.reverse() : n), q = C().join(""), (l.clearMaskOnLostFocus || l.clearIncomplete) && i.inputmask._valueGet() === k().join("") && i.inputmask._valueSet("")
                    },
                    focusEvent: function(t) {
                        var e = this,
                            i = e.inputmask._valueGet();
                        l.showMaskOnFocus && (!l.showMaskOnHover || l.showMaskOnHover && "" === i) && (e.inputmask._valueGet() !== C().join("") ? M(e, C(), E(g())) : !1 === tt && R(e, E(g()))), !0 === l.positionCaretOnTab && !1 === tt && it.clickEvent.apply(e, [t, !0]), q = C().join("")
                    },
                    mouseleaveEvent: function(t) {
                        var e = this;
                        if (tt = !1, l.clearMaskOnLostFocus && i.activeElement !== e) {
                            var n = C().slice(),
                                s = e.inputmask._valueGet();
                            s !== e.getAttribute("placeholder") && "" !== s && (-1 === g() && s === k().join("") ? n = [] : L(n), M(e, n))
                        }
                    },
                    clickEvent: function(e, s) {
                        function o(e) {
                            if ("" !== l.radixPoint) {
                                var i = f().validPositions;
                                if (i[e] === n || i[e].input === O(e)) {
                                    if (e < E(-1)) return !0;
                                    var s = t.inArray(l.radixPoint, C());
                                    if (-1 !== s) {
                                        for (var o in i)
                                            if (s < o && i[o].input !== O(o)) return !1;
                                        return !0
                                    }
                                }
                            }
                            return !1
                        }
                        var a = this;
                        setTimeout(function() {
                            if (i.activeElement === a) {
                                var t = R(a);
                                if (s && (Q ? t.end = t.begin : t.begin = t.end), t.begin === t.end) switch (l.positionCaretOnClick) {
                                    case "none":
                                        break;
                                    case "radixFocus":
                                        if (o(t.begin)) {
                                            var e = C().join("").indexOf(l.radixPoint);
                                            R(a, l.numericInput ? E(e) : e);
                                            break
                                        }
                                    default:
                                        var n = t.begin,
                                            r = E(g(n, !0));
                                        if (n < r) R(a, S(n) || S(n - 1) ? n : E(n));
                                        else {
                                            var h = O(r);
                                            ("" !== h && C()[r] !== h && !0 !== _(r).match.optionalQuantifier || !S(r) && _(r).match.def === h) && (r = E(r)), R(a, r)
                                        }
                                }
                            }
                        }, 0)
                    },
                    dblclickEvent: function(t) {
                        var e = this;
                        setTimeout(function() {
                            R(e, 0, E(g()))
                        }, 0)
                    },
                    cutEvent: function(n) {
                        var o = this,
                            a = t(o),
                            r = R(o),
                            l = n.originalEvent || n,
                            h = e.clipboardData || l.clipboardData,
                            c = Q ? C().slice(r.end, r.begin) : C().slice(r.begin, r.end);
                        h.setData("text", Q ? c.reverse().join("") : c.join("")), i.execCommand && i.execCommand("copy"), z(o, s.keyCode.DELETE, r), M(o, C(), f().p, n, q !== C().join("")), o.inputmask._valueGet() === k().join("") && a.trigger("cleared")
                    },
                    blurEvent: function(e) {
                        var i = t(this),
                            s = this;
                        if (s.inputmask) {
                            var o = s.inputmask._valueGet(),
                                a = C().slice();
                            q !== a.join("") && setTimeout(function() {
                                i.trigger("change"), q = a.join("")
                            }, 0), "" !== o && (l.clearMaskOnLostFocus && (-1 === g() && o === k().join("") ? a = [] : L(a)), !1 === B(a) && (setTimeout(function() {
                                i.trigger("incomplete")
                            }, 0), l.clearIncomplete && (m(), a = l.clearMaskOnLostFocus ? [] : k().slice())), M(s, a, n, e))
                        }
                    },
                    mouseenterEvent: function(t) {
                        var e = this;
                        tt = !0, i.activeElement !== e && l.showMaskOnHover && e.inputmask._valueGet() !== C().join("") && M(e, C())
                    },
                    submitEvent: function(t) {
                        q !== C().join("") && U.trigger("change"), l.clearMaskOnLostFocus && -1 === g() && V.inputmask._valueGet && V.inputmask._valueGet() === k().join("") && V.inputmask._valueSet(""), l.removeMaskOnSubmit && (V.inputmask._valueSet(V.inputmask.unmaskedvalue(), !0), setTimeout(function() {
                            M(V, C())
                        }, 0))
                    },
                    resetEvent: function(t) {
                        V.inputmask.refreshValue = !0, setTimeout(function() {
                            U.trigger("setvalue")
                        }, 0)
                    }
                };
            if (o !== n) switch (o.action) {
                case "isComplete":
                    return V = o.el, B(C());
                case "unmaskedvalue":
                    return V !== n && o.value === n || (K = o.value, K = (t.isFunction(l.onBeforeMask) ? l.onBeforeMask(K, l) || K : K).split(""), j(n, !1, !1, Q ? K.reverse() : K), t.isFunction(l.onBeforeWrite) && l.onBeforeWrite(n, C(), 0, l)), H(V);
                case "mask":
                    ! function(e) {
                        et.off(e);
                        var s = function(e, s) {
                            var o = e.getAttribute("type"),
                                a = "INPUT" === e.tagName && -1 !== t.inArray(o, s.supportsInputType) || e.isContentEditable || "TEXTAREA" === e.tagName;
                            if (!a)
                                if ("INPUT" === e.tagName) {
                                    var r = i.createElement("input");
                                    r.setAttribute("type", o), a = "text" === r.type, r = null
                                } else a = "partial";
                            return !1 !== a && function(e) {
                                function o() {
                                    return this.inputmask ? this.inputmask.opts.autoUnmask ? this.inputmask.unmaskedvalue() : -1 !== g() || !0 !== s.nullable ? i.activeElement === this && s.clearMaskOnLostFocus ? (Q ? L(C().slice()).reverse() : L(C().slice())).join("") : r.call(this) : "" : r.call(this)
                                }

                                function a(e) {
                                    l.call(this, e), this.inputmask && t(this).trigger("setvalue")
                                }
                                var r, l;
                                if (!e.inputmask.__valueGet) {
                                    if (!0 !== s.noValuePatching) {
                                        if (Object.getOwnPropertyDescriptor) {
                                            "function" != typeof Object.getPrototypeOf && (Object.getPrototypeOf = "object" == typeof "test".__proto__ ? function(t) {
                                                return t.__proto__
                                            } : function(t) {
                                                return t.constructor.prototype
                                            });
                                            var h = Object.getPrototypeOf ? Object.getOwnPropertyDescriptor(Object.getPrototypeOf(e), "value") : n;
                                            h && h.get && h.set ? (r = h.get, l = h.set, Object.defineProperty(e, "value", {
                                                get: o,
                                                set: a,
                                                configurable: !0
                                            })) : "INPUT" !== e.tagName && (r = function() {
                                                return this.textContent
                                            }, l = function(t) {
                                                this.textContent = t
                                            }, Object.defineProperty(e, "value", {
                                                get: o,
                                                set: a,
                                                configurable: !0
                                            }))
                                        } else i.__lookupGetter__ && e.__lookupGetter__("value") && (r = e.__lookupGetter__("value"), l = e.__lookupSetter__("value"), e.__defineGetter__("value", o), e.__defineSetter__("value", a));
                                        e.inputmask.__valueGet = r, e.inputmask.__valueSet = l
                                    }
                                    e.inputmask._valueGet = function(t) {
                                        return Q && !0 !== t ? r.call(this.el).split("").reverse().join("") : r.call(this.el)
                                    }, e.inputmask._valueSet = function(t, e) {
                                        l.call(this.el, null === t || t === n ? "" : !0 !== e && Q ? t.split("").reverse().join("") : t)
                                    }, r === n && (r = function() {
                                        return this.value
                                    }, l = function(t) {
                                        this.value = t
                                    }, function(e) {
                                        if (t.valHooks && (t.valHooks[e] === n || !0 !== t.valHooks[e].inputmaskpatch)) {
                                            var i = t.valHooks[e] && t.valHooks[e].get ? t.valHooks[e].get : function(t) {
                                                    return t.value
                                                },
                                                o = t.valHooks[e] && t.valHooks[e].set ? t.valHooks[e].set : function(t, e) {
                                                    return t.value = e, t
                                                };
                                            t.valHooks[e] = {
                                                get: function(t) {
                                                    if (t.inputmask) {
                                                        if (t.inputmask.opts.autoUnmask) return t.inputmask.unmaskedvalue();
                                                        var e = i(t);
                                                        return -1 !== g(n, n, t.inputmask.maskset.validPositions) || !0 !== s.nullable ? e : ""
                                                    }
                                                    return i(t)
                                                },
                                                set: function(e, i) {
                                                    var n, s = t(e);
                                                    return n = o(e, i), e.inputmask && s.trigger("setvalue"), n
                                                },
                                                inputmaskpatch: !0
                                            }
                                        }
                                    }(e.type), function(e) {
                                        et.on(e, "mouseenter", function(e) {
                                            var i = t(this);
                                            this.inputmask._valueGet() !== C().join("") && i.trigger("setvalue")
                                        })
                                    }(e))
                                }
                            }(e), a
                        }(e, l);
                        if (!1 !== s && (V = e, U = t(V), ("rtl" === V.dir || l.rightAlign) && (V.style.textAlign = "right"), ("rtl" === V.dir || l.numericInput) && (V.dir = "ltr", V.removeAttribute("dir"), V.inputmask.isRTL = !0, Q = !0), !0 === l.colorMask && $(V), d && (V.hasOwnProperty("inputmode") && (V.inputmode = l.inputmode, V.setAttribute("inputmode", l.inputmode)), "rtfm" === l.androidHack && (!0 !== l.colorMask && $(V), V.type = "password")), !0 === s && (et.on(V, "submit", it.submitEvent), et.on(V, "reset", it.resetEvent), et.on(V, "mouseenter", it.mouseenterEvent), et.on(V, "blur", it.blurEvent), et.on(V, "focus", it.focusEvent), et.on(V, "mouseleave", it.mouseleaveEvent), !0 !== l.colorMask && et.on(V, "click", it.clickEvent), et.on(V, "dblclick", it.dblclickEvent), et.on(V, "paste", it.pasteEvent), et.on(V, "dragdrop", it.pasteEvent), et.on(V, "drop", it.pasteEvent), et.on(V, "cut", it.cutEvent), et.on(V, "complete", l.oncomplete), et.on(V, "incomplete", l.onincomplete), et.on(V, "cleared", l.oncleared), d || !0 === l.inputEventOnly || (et.on(V, "keydown", it.keydownEvent), et.on(V, "keypress", it.keypressEvent)), et.on(V, "compositionstart", t.noop), et.on(V, "compositionupdate", t.noop), et.on(V, "compositionend", t.noop), et.on(V, "keyup", t.noop), et.on(V, "input", it.inputFallBackEvent), et.on(V, "beforeinput", t.noop)), et.on(V, "setvalue", it.setValueEvent), k(), "" !== V.inputmask._valueGet(!0) || !1 === l.clearMaskOnLostFocus || i.activeElement === V)) {
                            var o = t.isFunction(l.onBeforeMask) ? l.onBeforeMask(V.inputmask._valueGet(!0), l) || V.inputmask._valueGet(!0) : V.inputmask._valueGet(!0);
                            "" !== o && j(V, !0, !1, Q ? o.split("").reverse() : o.split(""));
                            var a = C().slice();
                            q = a.join(""), !1 === B(a) && l.clearIncomplete && m(), l.clearMaskOnLostFocus && i.activeElement !== V && (-1 === g() ? a = [] : L(a)), M(V, a), i.activeElement === V && R(V, E(g()))
                        }
                    }(V);
                    break;
                case "format":
                    return K = (t.isFunction(l.onBeforeMask) ? l.onBeforeMask(o.value, l) || o.value : o.value).split(""), j(n, !0, !1, Q ? K.reverse() : K), o.metadata ? {
                        value: Q ? C().slice().reverse().join("") : C().join(""),
                        metadata: r.call(this, {
                            action: "getmetadata"
                        }, a, l)
                    } : Q ? C().slice().reverse().join("") : C().join("");
                case "isValid":
                    o.value ? (K = o.value.split(""), j(n, !0, !0, Q ? K.reverse() : K)) : o.value = C().join("");
                    for (var nt = C(), st = F(), ot = nt.length - 1; ot > st && !S(ot); ot--);
                    return nt.splice(st, ot + 1 - st), B(nt) && o.value === C().join("");
                case "getemptymask":
                    return k().join("");
                case "remove":
                    return V && V.inputmask && (U = t(V), V.inputmask._valueSet(l.autoUnmask ? H(V) : V.inputmask._valueGet(!0)), et.off(V), Object.getOwnPropertyDescriptor && Object.getPrototypeOf ? Object.getOwnPropertyDescriptor(Object.getPrototypeOf(V), "value") && V.inputmask.__valueGet && Object.defineProperty(V, "value", {
                        get: V.inputmask.__valueGet,
                        set: V.inputmask.__valueSet,
                        configurable: !0
                    }) : i.__lookupGetter__ && V.__lookupGetter__("value") && V.inputmask.__valueGet && (V.__defineGetter__("value", V.inputmask.__valueGet), V.__defineSetter__("value", V.inputmask.__valueSet)), V.inputmask = n), V;
                case "getmetadata":
                    if (t.isArray(a.metadata)) {
                        var at = p(!0, 0, !1).join("");
                        return t.each(a.metadata, function(t, e) {
                            if (e.mask === at) return at = e, !1
                        }), at
                    }
                    return a.metadata
            }
        }
        var l = navigator.userAgent,
            h = /mobile/i.test(l),
            c = /iemobile/i.test(l),
            u = /iphone/i.test(l) && !c,
            d = /android/i.test(l) && !c;
        return s.prototype = {
            dataAttribute: "data-inputmask",
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
                regex: null,
                oncomplete: t.noop,
                onincomplete: t.noop,
                oncleared: t.noop,
                repeat: 0,
                greedy: !0,
                autoUnmask: !1,
                removeMaskOnSubmit: !1,
                clearMaskOnLostFocus: !0,
                insertMode: !0,
                clearIncomplete: !1,
                alias: null,
                onKeyDown: t.noop,
                onBeforeMask: null,
                onBeforePaste: function(e, i) {
                    return t.isFunction(i.onBeforeMask) ? i.onBeforeMask(e, i) : e
                },
                onBeforeWrite: null,
                onUnMask: null,
                showMaskOnFocus: !0,
                showMaskOnHover: !0,
                onKeyValidation: t.noop,
                skipOptionalPartCharacter: " ",
                numericInput: !1,
                rightAlign: !1,
                undoOnEscape: !0,
                radixPoint: "",
                radixPointDefinitionSymbol: n,
                groupSeparator: "",
                keepStatic: null,
                positionCaretOnTab: !0,
                tabThrough: !1,
                supportsInputType: ["text", "tel", "password"],
                ignorables: [8, 9, 13, 19, 27, 33, 34, 35, 36, 37, 38, 39, 40, 45, 46, 93, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 0, 229],
                isComplete: null,
                canClearPosition: t.noop,
                preValidation: null,
                postValidation: null,
                staticDefinitionSymbol: n,
                jitMasking: !1,
                nullable: !0,
                inputEventOnly: !1,
                noValuePatching: !1,
                positionCaretOnClick: "lvp",
                casing: null,
                inputmode: "verbatim",
                colorMask: !1,
                androidHack: !1
            },
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
                    validator: function() {
                        return !0
                    },
                    cardinality: 1
                }
            },
            aliases: {},
            masksCache: {},
            mask: function(l) {
                function h(i, s, a, r) {
                    function l(t, s) {
                        null !== (s = s !== n ? s : i.getAttribute(r + "-" + t)) && ("string" == typeof s && (0 === t.indexOf("on") ? s = e[s] : "false" === s ? s = !1 : "true" === s && (s = !0)), a[t] = s)
                    }
                    var h, c, u, d, p = i.getAttribute(r);
                    if (p && "" !== p && (p = p.replace(new RegExp("'", "g"), '"'), c = JSON.parse("{" + p + "}")), c) {
                        u = n;
                        for (d in c)
                            if ("alias" === d.toLowerCase()) {
                                u = c[d];
                                break
                            }
                    }
                    l("alias", u), a.alias && o(a.alias, a, s);
                    for (h in s) {
                        if (c) {
                            u = n;
                            for (d in c)
                                if (d.toLowerCase() === h.toLowerCase()) {
                                    u = c[d];
                                    break
                                }
                        }
                        l(h, u)
                    }
                    return t.extend(!0, s, a), s
                }
                var c = this;
                return "string" == typeof l && (l = i.getElementById(l) || i.querySelectorAll(l)), l = l.nodeName ? [l] : l, t.each(l, function(e, i) {
                    var o = t.extend(!0, {}, c.opts);
                    h(i, o, t.extend(!0, {}, c.userOptions), c.dataAttribute);
                    var l = a(o, c.noMasksCache);
                    l !== n && (i.inputmask !== n && i.inputmask.remove(), i.inputmask = new s(n, n, !0), i.inputmask.opts = o, i.inputmask.noMasksCache = c.noMasksCache, i.inputmask.userOptions = t.extend(!0, {}, c.userOptions), i.inputmask.isRTL = c.isRTL, i.inputmask.el = i, i.inputmask.maskset = l, t.data(i, "_inputmask_opts", o), r.call(i.inputmask, {
                        action: "mask"
                    }))
                }), l && l[0] ? l[0].inputmask || this : this
            },
            option: function(e, i) {
                return "string" == typeof e ? this.opts[e] : "object" == typeof e ? (t.extend(this.userOptions, e), this.el && !0 !== i && this.mask(this.el), this) : void 0
            },
            unmaskedvalue: function(t) {
                return this.maskset = this.maskset || a(this.opts, this.noMasksCache), r.call(this, {
                    action: "unmaskedvalue",
                    value: t
                })
            },
            remove: function() {
                return r.call(this, {
                    action: "remove"
                })
            },
            getemptymask: function() {
                return this.maskset = this.maskset || a(this.opts, this.noMasksCache), r.call(this, {
                    action: "getemptymask"
                })
            },
            hasMaskedValue: function() {
                return !this.opts.autoUnmask
            },
            isComplete: function() {
                return this.maskset = this.maskset || a(this.opts, this.noMasksCache), r.call(this, {
                    action: "isComplete"
                })
            },
            getmetadata: function() {
                return this.maskset = this.maskset || a(this.opts, this.noMasksCache), r.call(this, {
                    action: "getmetadata"
                })
            },
            isValid: function(t) {
                return this.maskset = this.maskset || a(this.opts, this.noMasksCache), r.call(this, {
                    action: "isValid",
                    value: t
                })
            },
            format: function(t, e) {
                return this.maskset = this.maskset || a(this.opts, this.noMasksCache), r.call(this, {
                    action: "format",
                    value: t,
                    metadata: e
                })
            },
            analyseMask: function(e, i, o) {
                function a(t, e, i, n) {
                    this.matches = [], this.openGroup = t || !1, this.alternatorGroup = !1, this.isGroup = t || !1, this.isOptional = e || !1, this.isQuantifier = i || !1, this.isAlternator = n || !1, this.quantifier = {
                        min: 1,
                        max: 1
                    }
                }

                function r(t, e, a) {
                    if (a = a !== n ? a : t.matches.length, i) 0 === e.indexOf("[") || _ ? t.matches.splice(a++, 0, {
                        fn: new RegExp(e, o.casing ? "i" : ""),
                        cardinality: 0,
                        optionality: t.isOptional,
                        newBlockMarker: l === n || l.def !== e,
                        casing: null,
                        def: o.staticDefinitionSymbol || e,
                        placeholder: o.staticDefinitionSymbol !== n ? e : n,
                        nativeDef: e
                    }) : t.matches.splice(a++, 0, {
                        fn: null,
                        cardinality: 0,
                        optionality: t.isOptional,
                        newBlockMarker: l === n || l.def !== e,
                        casing: null,
                        def: o.staticDefinitionSymbol || e,
                        placeholder: o.staticDefinitionSymbol !== n ? e : n,
                        nativeDef: e
                    }), _ = !1;
                    else {
                        var r = (o.definitions ? o.definitions[e] : n) || s.prototype.definitions[e],
                            l = t.matches[a - 1];
                        if (r && !_) {
                            for (var h = r.prevalidator, c = h ? h.length : 0, u = 1; u < r.cardinality; u++) {
                                var d = c >= u ? h[u - 1] : [],
                                    p = d.validator,
                                    f = d.cardinality;
                                t.matches.splice(a++, 0, {
                                    fn: p ? "string" == typeof p ? new RegExp(p, o.casing ? "i" : "") : new function() {
                                        this.test = p
                                    } : new RegExp("."),
                                    cardinality: f || 1,
                                    optionality: t.isOptional,
                                    newBlockMarker: l === n || l.def !== (r.definitionSymbol || e),
                                    casing: r.casing,
                                    def: r.definitionSymbol || e,
                                    placeholder: r.placeholder,
                                    nativeDef: e
                                }), l = t.matches[a - 1]
                            }
                            t.matches.splice(a++, 0, {
                                fn: r.validator ? "string" == typeof r.validator ? new RegExp(r.validator, o.casing ? "i" : "") : new function() {
                                    this.test = r.validator
                                } : new RegExp("."),
                                cardinality: r.cardinality,
                                optionality: t.isOptional,
                                newBlockMarker: l === n || l.def !== (r.definitionSymbol || e),
                                casing: r.casing,
                                def: r.definitionSymbol || e,
                                placeholder: r.placeholder,
                                nativeDef: e
                            })
                        } else t.matches.splice(a++, 0, {
                            fn: null,
                            cardinality: 0,
                            optionality: t.isOptional,
                            newBlockMarker: l === n || l.def !== e,
                            casing: null,
                            def: o.staticDefinitionSymbol || e,
                            placeholder: o.staticDefinitionSymbol !== n ? e : n,
                            nativeDef: e
                        }), _ = !1
                    }
                }

                function l(e) {
                    e && e.matches && t.each(e.matches, function(t, s) {
                        var a = e.matches[t + 1];
                        (a === n || a.matches === n || !1 === a.isQuantifier) && s && s.isGroup && (s.isGroup = !1, i || (r(s, o.groupmarker.start, 0), !0 !== s.openGroup && r(s, o.groupmarker.end))), l(s)
                    })
                }

                function h() {
                    if (w.length > 0) {
                        if (f = w[w.length - 1], r(f, d), f.isAlternator) {
                            m = w.pop();
                            for (var t = 0; t < m.matches.length; t++) m.matches[t].isGroup = !1;
                            w.length > 0 ? (f = w[w.length - 1]).matches.push(m) : x.matches.push(m)
                        }
                    } else r(x, d)
                }

                function c(t) {
                    t.matches = t.matches.reverse();
                    for (var e in t.matches)
                        if (t.matches.hasOwnProperty(e)) {
                            var i = parseInt(e);
                            if (t.matches[e].isQuantifier && t.matches[i + 1] && t.matches[i + 1].isGroup) {
                                var s = t.matches[e];
                                t.matches.splice(e, 1), t.matches.splice(i + 1, 0, s)
                            }
                            t.matches[e].matches !== n ? t.matches[e] = c(t.matches[e]) : t.matches[e] = function(t) {
                                return t === o.optionalmarker.start ? t = o.optionalmarker.end : t === o.optionalmarker.end ? t = o.optionalmarker.start : t === o.groupmarker.start ? t = o.groupmarker.end : t === o.groupmarker.end && (t = o.groupmarker.start), t
                            }(t.matches[e])
                        }
                    return t
                }
                var u, d, p, f, m, g, v, y = /(?:[?*+]|\{[0-9\+\*]+(?:,[0-9\+\*]*)?\})|[^.?*+^${[]()|\\]+|./g,
                    b = /\[\^?]?(?:[^\\\]]+|\\[\S\s]?)*]?|\\(?:0(?:[0-3][0-7]{0,2}|[4-7][0-7]?)?|[1-9][0-9]*|x[0-9A-Fa-f]{2}|u[0-9A-Fa-f]{4}|c[A-Za-z]|[\S\s]?)|\((?:\?[:=!]?)?|(?:[?*+]|\{[0-9]+(?:,[0-9]*)?\})\??|[^.?*+^${[()|\\]+|./g,
                    _ = !1,
                    x = new a,
                    w = [],
                    k = [];
                for (i && (o.optionalmarker.start = n, o.optionalmarker.end = n); u = i ? b.exec(e) : y.exec(e);) {
                    if (d = u[0], i) switch (d.charAt(0)) {
                        case "?":
                            d = "{+}";
                            break;
                        case "+":
                        case "*":
                            d = "{" + d + "}"
                    }
                    if (_) h();
                    else switch (d.charAt(0)) {
                        case o.escapeChar:
                            _ = !0, i && h();
                            break;
                        case o.optionalmarker.end:
                        case o.groupmarker.end:
                            if (p = w.pop(), p.openGroup = !1, p !== n)
                                if (w.length > 0) {
                                    if ((f = w[w.length - 1]).matches.push(p), f.isAlternator) {
                                        m = w.pop();
                                        for (var C = 0; C < m.matches.length; C++) m.matches[C].isGroup = !1, m.matches[C].alternatorGroup = !1;
                                        w.length > 0 ? (f = w[w.length - 1]).matches.push(m) : x.matches.push(m)
                                    }
                                } else x.matches.push(p);
                            else h();
                            break;
                        case o.optionalmarker.start:
                            w.push(new a(!1, !0));
                            break;
                        case o.groupmarker.start:
                            w.push(new a(!0));
                            break;
                        case o.quantifiermarker.start:
                            var D = new a(!1, !1, !0),
                                A = (d = d.replace(/[{}]/g, "")).split(","),
                                T = isNaN(A[0]) ? A[0] : parseInt(A[0]),
                                I = 1 === A.length ? T : isNaN(A[1]) ? A[1] : parseInt(A[1]);
                            if ("*" !== I && "+" !== I || (T = "*" === I ? 0 : 1), D.quantifier = {
                                    min: T,
                                    max: I
                                }, w.length > 0) {
                                var S = w[w.length - 1].matches;
                                (u = S.pop()).isGroup || ((v = new a(!0)).matches.push(u), u = v), S.push(u), S.push(D)
                            } else(u = x.matches.pop()).isGroup || ((v = new a(!0)).matches.push(u), u = v), x.matches.push(u), x.matches.push(D);
                            break;
                        case o.alternatormarker:
                            if (w.length > 0) {
                                var E = (f = w[w.length - 1]).matches[f.matches.length - 1];
                                g = f.openGroup && (E.matches === n || !1 === E.isGroup && !1 === E.isAlternator) ? w.pop() : f.matches.pop()
                            } else g = x.matches.pop();
                            if (g.isAlternator) w.push(g);
                            else if (g.alternatorGroup ? (m = w.pop(), g.alternatorGroup = !1) : m = new a(!1, !1, !1, !0), m.matches.push(g), w.push(m), g.openGroup) {
                                g.openGroup = !1;
                                var P = new a(!0);
                                P.alternatorGroup = !0, w.push(P)
                            }
                            break;
                        default:
                            h()
                    }
                }
                for (; w.length > 0;) p = w.pop(), x.matches.push(p);
                return x.matches.length > 0 && (l(x), k.push(x)), o.numericInput && c(k[0]), k
            }
        }, s.extendDefaults = function(e) {
            t.extend(!0, s.prototype.defaults, e)
        }, s.extendDefinitions = function(e) {
            t.extend(!0, s.prototype.definitions, e)
        }, s.extendAliases = function(e) {
            t.extend(!0, s.prototype.aliases, e)
        }, s.format = function(t, e, i) {
            return s(e).format(t, i)
        }, s.unmask = function(t, e) {
            return s(e).unmaskedvalue(t)
        }, s.isValid = function(t, e) {
            return s(e).isValid(t)
        }, s.remove = function(e) {
            t.each(e, function(t, e) {
                e.inputmask && e.inputmask.remove()
            })
        }, s.escapeRegex = function(t) {
            var e = ["/", ".", "*", "+", "?", "|", "(", ")", "[", "]", "{", "}", "\\", "$", "^"];
            return t.replace(new RegExp("(\\" + e.join("|\\") + ")", "gim"), "\\$1")
        }, s.keyCode = {
            ALT: 18,
            BACKSPACE: 8,
            BACKSPACE_SAFARI: 127,
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
            WINDOWS: 91,
            X: 88
        }, s
    }(window.dependencyLib || jQuery, window, document),
    function(t, e) {
        void 0 === t.fn.inputmask && (t.fn.inputmask = function(i, n) {
            var s, o = this[0];
            if (void 0 === n && (n = {}), "string" == typeof i) switch (i) {
                case "unmaskedvalue":
                    return o && o.inputmask ? o.inputmask.unmaskedvalue() : t(o).val();
                case "remove":
                    return this.each(function() {
                        this.inputmask && this.inputmask.remove()
                    });
                case "getemptymask":
                    return o && o.inputmask ? o.inputmask.getemptymask() : "";
                case "hasMaskedValue":
                    return !(!o || !o.inputmask) && o.inputmask.hasMaskedValue();
                case "isComplete":
                    return !o || !o.inputmask || o.inputmask.isComplete();
                case "getmetadata":
                    return o && o.inputmask ? o.inputmask.getmetadata() : void 0;
                case "setvalue":
                    t(o).val(n), o && void 0 === o.inputmask && t(o).triggerHandler("setvalue");
                    break;
                case "option":
                    if ("string" != typeof n) return this.each(function() {
                        if (void 0 !== this.inputmask) return this.inputmask.option(n)
                    });
                    if (o && void 0 !== o.inputmask) return o.inputmask.option(n);
                    break;
                default:
                    return n.alias = i, s = new e(n), this.each(function() {
                        s.mask(this)
                    })
            } else {
                if ("object" == typeof i) return s = new e(i), void 0 === i.mask && void 0 === i.alias ? this.each(function() {
                    if (void 0 !== this.inputmask) return this.inputmask.option(i);
                    s.mask(this)
                }) : this.each(function() {
                    s.mask(this)
                });
                if (void 0 === i) return this.each(function() {
                    (s = new e(n)).mask(this)
                })
            }
        }), t.fn.inputmask
    }(jQuery, window.Inputmask),
    function(t, e) {
        function i(t) {
            return isNaN(t) || 29 === new Date(t, 2, 0).getDate()
        }
        e.extendAliases({
            "dd/mm/yyyy": {
                mask: "1/2/y",
                placeholder: "dd/mm/yyyy",
                regex: {
                    val1pre: new RegExp("[0-3]"),
                    val1: new RegExp("0[1-9]|[12][0-9]|3[01]"),
                    val2pre: function(t) {
                        var i = e.escapeRegex.call(this, t);
                        return new RegExp("((0[1-9]|[12][0-9]|3[01])" + i + "[01])")
                    },
                    val2: function(t) {
                        var i = e.escapeRegex.call(this, t);
                        return new RegExp("((0[1-9]|[12][0-9])" + i + "(0[1-9]|1[012]))|(30" + i + "(0[13-9]|1[012]))|(31" + i + "(0[13578]|1[02]))")
                    }
                },
                leapday: "29/02/",
                separator: "/",
                yearrange: {
                    minyear: 1900,
                    maxyear: 2099
                },
                isInYearRange: function(t, e, i) {
                    if (isNaN(t)) return !1;
                    var n = parseInt(t.concat(e.toString().slice(t.length))),
                        s = parseInt(t.concat(i.toString().slice(t.length)));
                    return !isNaN(n) && e <= n && n <= i || !isNaN(s) && e <= s && s <= i
                },
                determinebaseyear: function(t, e, i) {
                    var n = (new Date).getFullYear();
                    if (t > n) return t;
                    if (e < n) {
                        for (var s = e.toString().slice(0, 2), o = e.toString().slice(2, 4); e < s + i;) s--;
                        var a = s + o;
                        return t > a ? t : a
                    }
                    if (t <= n && n <= e) {
                        for (var r = n.toString().slice(0, 2); e < r + i;) r--;
                        var l = r + i;
                        return l < t ? t : l
                    }
                    return n
                },
                onKeyDown: function(i, n, s, o) {
                    var a = t(this);
                    if (i.ctrlKey && i.keyCode === e.keyCode.RIGHT) {
                        var r = new Date;
                        a.val(r.getDate().toString() + (r.getMonth() + 1).toString() + r.getFullYear().toString()), a.trigger("setvalue")
                    }
                },
                getFrontValue: function(t, e, i) {
                    for (var n = 0, s = 0, o = 0; o < t.length && "2" !== t.charAt(o); o++) {
                        var a = i.definitions[t.charAt(o)];
                        a ? (n += s, s = a.cardinality) : s++
                    }
                    return e.join("").substr(n, s)
                },
                postValidation: function(t, e, n) {
                    var s, o, a = t.join("");
                    return 0 === n.mask.indexOf("y") ? (o = a.substr(0, 4), s = a.substring(4, 10)) : (o = a.substring(6, 10), s = a.substr(0, 6)), e && (s !== n.leapday || i(o))
                },
                definitions: {
                    1: {
                        validator: function(t, e, i, n, s) {
                            var o = s.regex.val1.test(t);
                            return n || o || t.charAt(1) !== s.separator && -1 === "-./".indexOf(t.charAt(1)) || !(o = s.regex.val1.test("0" + t.charAt(0))) ? o : (e.buffer[i - 1] = "0", {
                                refreshFromBuffer: {
                                    start: i - 1,
                                    end: i
                                },
                                pos: i,
                                c: t.charAt(0)
                            })
                        },
                        cardinality: 2,
                        prevalidator: [{
                            validator: function(t, e, i, n, s) {
                                var o = t;
                                isNaN(e.buffer[i + 1]) || (o += e.buffer[i + 1]);
                                var a = 1 === o.length ? s.regex.val1pre.test(o) : s.regex.val1.test(o);
                                if (!n && !a) {
                                    if (a = s.regex.val1.test(t + "0")) return e.buffer[i] = t, e.buffer[++i] = "0", {
                                        pos: i,
                                        c: "0"
                                    };
                                    if (a = s.regex.val1.test("0" + t)) return e.buffer[i] = "0", i++, {
                                        pos: i
                                    }
                                }
                                return a
                            },
                            cardinality: 1
                        }]
                    },
                    2: {
                        validator: function(t, e, i, n, s) {
                            var o = s.getFrontValue(e.mask, e.buffer, s); - 1 !== o.indexOf(s.placeholder[0]) && (o = "01" + s.separator);
                            var a = s.regex.val2(s.separator).test(o + t);
                            return n || a || t.charAt(1) !== s.separator && -1 === "-./".indexOf(t.charAt(1)) || !(a = s.regex.val2(s.separator).test(o + "0" + t.charAt(0))) ? a : (e.buffer[i - 1] = "0", {
                                refreshFromBuffer: {
                                    start: i - 1,
                                    end: i
                                },
                                pos: i,
                                c: t.charAt(0)
                            })
                        },
                        cardinality: 2,
                        prevalidator: [{
                            validator: function(t, e, i, n, s) {
                                isNaN(e.buffer[i + 1]) || (t += e.buffer[i + 1]);
                                var o = s.getFrontValue(e.mask, e.buffer, s); - 1 !== o.indexOf(s.placeholder[0]) && (o = "01" + s.separator);
                                var a = 1 === t.length ? s.regex.val2pre(s.separator).test(o + t) : s.regex.val2(s.separator).test(o + t);
                                return n || a || !(a = s.regex.val2(s.separator).test(o + "0" + t)) ? a : (e.buffer[i] = "0", i++, {
                                    pos: i
                                })
                            },
                            cardinality: 1
                        }]
                    },
                    y: {
                        validator: function(t, e, i, n, s) {
                            return s.isInYearRange(t, s.yearrange.minyear, s.yearrange.maxyear)
                        },
                        cardinality: 4,
                        prevalidator: [{
                            validator: function(t, e, i, n, s) {
                                var o = s.isInYearRange(t, s.yearrange.minyear, s.yearrange.maxyear);
                                if (!n && !o) {
                                    var a = s.determinebaseyear(s.yearrange.minyear, s.yearrange.maxyear, t + "0").toString().slice(0, 1);
                                    if (o = s.isInYearRange(a + t, s.yearrange.minyear, s.yearrange.maxyear)) return e.buffer[i++] = a.charAt(0), {
                                        pos: i
                                    };
                                    if (a = s.determinebaseyear(s.yearrange.minyear, s.yearrange.maxyear, t + "0").toString().slice(0, 2), o = s.isInYearRange(a + t, s.yearrange.minyear, s.yearrange.maxyear)) return e.buffer[i++] = a.charAt(0), e.buffer[i++] = a.charAt(1), {
                                        pos: i
                                    }
                                }
                                return o
                            },
                            cardinality: 1
                        }, {
                            validator: function(t, e, i, n, s) {
                                var o = s.isInYearRange(t, s.yearrange.minyear, s.yearrange.maxyear);
                                if (!n && !o) {
                                    var a = s.determinebaseyear(s.yearrange.minyear, s.yearrange.maxyear, t).toString().slice(0, 2);
                                    if (o = s.isInYearRange(t[0] + a[1] + t[1], s.yearrange.minyear, s.yearrange.maxyear)) return e.buffer[i++] = a.charAt(1), {
                                        pos: i
                                    };
                                    if (a = s.determinebaseyear(s.yearrange.minyear, s.yearrange.maxyear, t).toString().slice(0, 2), o = s.isInYearRange(a + t, s.yearrange.minyear, s.yearrange.maxyear)) return e.buffer[i - 1] = a.charAt(0), e.buffer[i++] = a.charAt(1), e.buffer[i++] = t.charAt(0), {
                                        refreshFromBuffer: {
                                            start: i - 3,
                                            end: i
                                        },
                                        pos: i
                                    }
                                }
                                return o
                            },
                            cardinality: 2
                        }, {
                            validator: function(t, e, i, n, s) {
                                return s.isInYearRange(t, s.yearrange.minyear, s.yearrange.maxyear)
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
                    val2pre: function(t) {
                        var i = e.escapeRegex.call(this, t);
                        return new RegExp("((0[13-9]|1[012])" + i + "[0-3])|(02" + i + "[0-2])")
                    },
                    val2: function(t) {
                        var i = e.escapeRegex.call(this, t);
                        return new RegExp("((0[1-9]|1[012])" + i + "(0[1-9]|[12][0-9]))|((0[13-9]|1[012])" + i + "30)|((0[13578]|1[02])" + i + "31)")
                    },
                    val1pre: new RegExp("[01]"),
                    val1: new RegExp("0[1-9]|1[012]")
                },
                leapday: "02/29/",
                onKeyDown: function(i, n, s, o) {
                    var a = t(this);
                    if (i.ctrlKey && i.keyCode === e.keyCode.RIGHT) {
                        var r = new Date;
                        a.val((r.getMonth() + 1).toString() + r.getDate().toString() + r.getFullYear().toString()), a.trigger("setvalue")
                    }
                }
            },
            "yyyy/mm/dd": {
                mask: "y/1/2",
                placeholder: "yyyy/mm/dd",
                alias: "mm/dd/yyyy",
                leapday: "/02/29",
                onKeyDown: function(i, n, s, o) {
                    var a = t(this);
                    if (i.ctrlKey && i.keyCode === e.keyCode.RIGHT) {
                        var r = new Date;
                        a.val(r.getFullYear().toString() + (r.getMonth() + 1).toString() + r.getDate().toString()), a.trigger("setvalue")
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
                        validator: function(t, e, i, n, s) {
                            if ("24" === s.hourFormat && 24 === parseInt(t, 10)) return e.buffer[i - 1] = "0", e.buffer[i] = "0", {
                                refreshFromBuffer: {
                                    start: i - 1,
                                    end: i
                                },
                                c: "0"
                            };
                            var o = s.regex.hrs.test(t);
                            if (!n && !o && (t.charAt(1) === s.timeseparator || -1 !== "-.:".indexOf(t.charAt(1))) && (o = s.regex.hrs.test("0" + t.charAt(0)))) return e.buffer[i - 1] = "0", e.buffer[i] = t.charAt(0), i++, {
                                refreshFromBuffer: {
                                    start: i - 2,
                                    end: i
                                },
                                pos: i,
                                c: s.timeseparator
                            };
                            if (o && "24" !== s.hourFormat && s.regex.hrs24.test(t)) {
                                var a = parseInt(t, 10);
                                return 24 === a ? (e.buffer[i + 5] = "a", e.buffer[i + 6] = "m") : (e.buffer[i + 5] = "p", e.buffer[i + 6] = "m"), (a -= 12) < 10 ? (e.buffer[i] = a.toString(), e.buffer[i - 1] = "0") : (e.buffer[i] = a.toString().charAt(1), e.buffer[i - 1] = a.toString().charAt(0)), {
                                    refreshFromBuffer: {
                                        start: i - 1,
                                        end: i + 6
                                    },
                                    c: e.buffer[i]
                                }
                            }
                            return o
                        },
                        cardinality: 2,
                        prevalidator: [{
                            validator: function(t, e, i, n, s) {
                                var o = s.regex.hrspre.test(t);
                                return n || o || !(o = s.regex.hrs.test("0" + t)) ? o : (e.buffer[i] = "0", i++, {
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
                            validator: function(t, e, i, n, s) {
                                var o = s.regex.mspre.test(t);
                                return n || o || !(o = s.regex.ms.test("0" + t)) ? o : (e.buffer[i] = "0", i++, {
                                    pos: i
                                })
                            },
                            cardinality: 1
                        }]
                    },
                    t: {
                        validator: function(t, e, i, n, s) {
                            return s.regex.ampm.test(t + "m")
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
                    val2pre: function(t) {
                        var i = e.escapeRegex.call(this, t);
                        return new RegExp("((0[13-9]|1[012])" + i + "[0-3])|(02" + i + "[0-2])")
                    },
                    val2: function(t) {
                        var i = e.escapeRegex.call(this, t);
                        return new RegExp("((0[1-9]|1[012])" + i + "(0[1-9]|[12][0-9]))|((0[13-9]|1[012])" + i + "30)|((0[13578]|1[02])" + i + "31)")
                    },
                    val1pre: new RegExp("[01]"),
                    val1: new RegExp("0[1-9]|1[012]")
                },
                leapday: "02/29/",
                onKeyDown: function(i, n, s, o) {
                    var a = t(this);
                    if (i.ctrlKey && i.keyCode === e.keyCode.RIGHT) {
                        var r = new Date;
                        a.val((r.getMonth() + 1).toString() + r.getDate().toString() + r.getFullYear().toString()), a.trigger("setvalue")
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
                    val2pre: function(t) {
                        var i = e.escapeRegex.call(this, t);
                        return new RegExp("((0[1-9]|1[012])" + i + "[0-3])")
                    },
                    val2: function(t) {
                        var i = e.escapeRegex.call(this, t);
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
            },
            "yyyy-mm-dd hh:mm:ss": {
                mask: "y-1-2 h:s:s",
                placeholder: "yyyy-mm-dd hh:mm:ss",
                alias: "datetime",
                separator: "-",
                leapday: "-02-29",
                regex: {
                    val2pre: function(t) {
                        var i = e.escapeRegex.call(this, t);
                        return new RegExp("((0[13-9]|1[012])" + i + "[0-3])|(02" + i + "[0-2])")
                    },
                    val2: function(t) {
                        var i = e.escapeRegex.call(this, t);
                        return new RegExp("((0[1-9]|1[012])" + i + "(0[1-9]|[12][0-9]))|((0[13-9]|1[012])" + i + "30)|((0[13578]|1[02])" + i + "31)")
                    },
                    val1pre: new RegExp("[01]"),
                    val1: new RegExp("0[1-9]|1[012]")
                },
                onKeyDown: function(t, e, i, n) {}
            }
        })
    }(window.dependencyLib || jQuery, window.Inputmask),
    function(t, e) {
        e.extendDefinitions({
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
        }), e.extendAliases({
            url: {
                definitions: {
                    i: {
                        validator: ".",
                        cardinality: 1
                    }
                },
                mask: "(\\http://)|(\\http\\s://)|(ftp://)|(ftp\\s://)i{+}",
                insertMode: !1,
                autoUnmask: !1,
                inputmode: "url"
            },
            ip: {
                mask: "i[i[i]].i[i[i]].i[i[i]].i[i[i]]",
                definitions: {
                    i: {
                        validator: function(t, e, i, n, s) {
                            return i - 1 > -1 && "." !== e.buffer[i - 1] ? (t = e.buffer[i - 1] + t, t = i - 2 > -1 && "." !== e.buffer[i - 2] ? e.buffer[i - 2] + t : "0" + t) : t = "00" + t, new RegExp("25[0-5]|2[0-4][0-9]|[01][0-9][0-9]").test(t)
                        },
                        cardinality: 1
                    }
                },
                onUnMask: function(t, e, i) {
                    return t
                },
                inputmode: "numeric"
            },
            email: {
                mask: "*{1,64}[.*{1,64}][.*{1,64}][.*{1,63}]@-{1,63}.-{1,63}[.-{1,63}][.-{1,63}]",
                greedy: !1,
                onBeforePaste: function(t, e) {
                    return (t = t.toLowerCase()).replace("mailto:", "")
                },
                definitions: {
                    "*": {
                        validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~-]",
                        cardinality: 1,
                        casing: "lower"
                    },
                    "-": {
                        validator: "[0-9A-Za-z-]",
                        cardinality: 1,
                        casing: "lower"
                    }
                },
                onUnMask: function(t, e, i) {
                    return t
                },
                inputmode: "email"
            },
            mac: {
                mask: "##:##:##:##:##:##"
            },
            vin: {
                mask: "V{13}9{4}",
                definitions: {
                    V: {
                        validator: "[A-HJ-NPR-Za-hj-npr-z\\d]",
                        cardinality: 1,
                        casing: "upper"
                    }
                },
                clearIncomplete: !0,
                autoUnmask: !0
            }
        })
    }(window.dependencyLib || jQuery, window.Inputmask),
    function(t, e, i) {
        function n(t, i) {
            for (var n = "", s = 0; s < t.length; s++) e.prototype.definitions[t.charAt(s)] || i.definitions[t.charAt(s)] || i.optionalmarker.start === t.charAt(s) || i.optionalmarker.end === t.charAt(s) || i.quantifiermarker.start === t.charAt(s) || i.quantifiermarker.end === t.charAt(s) || i.groupmarker.start === t.charAt(s) || i.groupmarker.end === t.charAt(s) || i.alternatormarker === t.charAt(s) ? n += "\\" + t.charAt(s) : n += t.charAt(s);
            return n
        }
        e.extendAliases({
            numeric: {
                mask: function(t) {
                    if (0 !== t.repeat && isNaN(t.integerDigits) && (t.integerDigits = t.repeat), t.repeat = 0, t.groupSeparator === t.radixPoint && ("." === t.radixPoint ? t.groupSeparator = "," : "," === t.radixPoint ? t.groupSeparator = "." : t.groupSeparator = ""), " " === t.groupSeparator && (t.skipOptionalPartCharacter = void 0), t.autoGroup = t.autoGroup && "" !== t.groupSeparator, t.autoGroup && ("string" == typeof t.groupSize && isFinite(t.groupSize) && (t.groupSize = parseInt(t.groupSize)), isFinite(t.integerDigits))) {
                        var e = Math.floor(t.integerDigits / t.groupSize),
                            i = t.integerDigits % t.groupSize;
                        t.integerDigits = parseInt(t.integerDigits) + (0 === i ? e - 1 : e), t.integerDigits < 1 && (t.integerDigits = "*")
                    }
                    t.placeholder.length > 1 && (t.placeholder = t.placeholder.charAt(0)), "radixFocus" === t.positionCaretOnClick && "" === t.placeholder && !1 === t.integerOptional && (t.positionCaretOnClick = "lvp"), t.definitions[";"] = t.definitions["~"], t.definitions[";"].definitionSymbol = "~", !0 === t.numericInput && (t.positionCaretOnClick = "radixFocus" === t.positionCaretOnClick ? "lvp" : t.positionCaretOnClick, t.digitsOptional = !1, isNaN(t.digits) && (t.digits = 2), t.decimalProtect = !1);
                    var s = "[+]";
                    if (s += n(t.prefix, t), !0 === t.integerOptional ? s += "~{1," + t.integerDigits + "}" : s += "~{" + t.integerDigits + "}", void 0 !== t.digits) {
                        t.radixPointDefinitionSymbol = t.decimalProtect ? ":" : t.radixPoint;
                        var o = t.digits.toString().split(",");
                        isFinite(o[0] && o[1] && isFinite(o[1])) ? s += t.radixPointDefinitionSymbol + ";{" + t.digits + "}" : (isNaN(t.digits) || parseInt(t.digits) > 0) && (t.digitsOptional ? s += "[" + t.radixPointDefinitionSymbol + ";{1," + t.digits + "}]" : s += t.radixPointDefinitionSymbol + ";{" + t.digits + "}")
                    }
                    return s += n(t.suffix, t), s += "[-]", t.greedy = !1, s
                },
                placeholder: "",
                greedy: !1,
                digits: "*",
                digitsOptional: !0,
                radixPoint: ".",
                positionCaretOnClick: "radixFocus",
                groupSize: 3,
                groupSeparator: "",
                autoGroup: !1,
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
                inputmode: "numeric",
                preValidation: function(e, i, n, s, o) {
                    if ("-" === n || n == o.negationSymbol.front) return !0 === o.allowMinus && (o.isNegative = void 0 === o.isNegative || !o.isNegative, "" === e.join("") || {
                        caret: i,
                        dopost: !0
                    });
                    if (!1 === s && n === o.radixPoint && void 0 !== o.digits && (isNaN(o.digits) || parseInt(o.digits) > 0)) {
                        var a = t.inArray(o.radixPoint, e);
                        if (-1 !== a) return !0 === o.numericInput ? i === a : {
                            caret: a + 1
                        }
                    }
                    return !0
                },
                postValidation: function(i, n, s) {
                    var o = s.suffix.split(""),
                        a = s.prefix.split("");
                    if (void 0 == n.pos && void 0 !== n.caret && !0 !== n.dopost) return n;
                    var r = void 0 != n.caret ? n.caret : n.pos,
                        l = i.slice();
                    s.numericInput && (r = l.length - r - 1, l = l.reverse());
                    var h = l[r];
                    if (h === s.groupSeparator && (r += 1, h = l[r]), r == l.length - s.suffix.length - 1 && h === s.radixPoint) return n;
                    void 0 !== h && h !== s.radixPoint && h !== s.negationSymbol.front && h !== s.negationSymbol.back && (l[r] = "?", s.prefix.length > 0 && r >= (!1 === s.isNegative ? 1 : 0) && r < s.prefix.length - 1 + (!1 === s.isNegative ? 1 : 0) ? a[r - (!1 === s.isNegative ? 1 : 0)] = "?" : s.suffix.length > 0 && r >= l.length - s.suffix.length - (!1 === s.isNegative ? 1 : 0) && (o[r - (l.length - s.suffix.length - (!1 === s.isNegative ? 1 : 0))] = "?")), a = a.join(""), o = o.join("");
                    var c = l.join("").replace(a, "");
                    if (c = c.replace(o, ""), c = c.replace(new RegExp(e.escapeRegex(s.groupSeparator), "g"), ""), c = c.replace(new RegExp("[-" + e.escapeRegex(s.negationSymbol.front) + "]", "g"), ""), c = c.replace(new RegExp(e.escapeRegex(s.negationSymbol.back) + "$"), ""), isNaN(s.placeholder) && (c = c.replace(new RegExp(e.escapeRegex(s.placeholder), "g"), "")), c.length > 1 && 1 !== c.indexOf(s.radixPoint) && ("0" == h && (c = c.replace(/^\?/g, "")), c = c.replace(/^0/g, "")), c.charAt(0) === s.radixPoint && !0 !== s.numericInput && (c = "0" + c), "" !== c) {
                        if (c = c.split(""), !s.digitsOptional && isFinite(s.digits)) {
                            var u = t.inArray(s.radixPoint, c),
                                d = t.inArray(s.radixPoint, l); - 1 === u && (c.push(s.radixPoint), u = c.length - 1);
                            for (var p = 1; p <= s.digits; p++) s.digitsOptional || void 0 !== c[u + p] && c[u + p] !== s.placeholder.charAt(0) ? -1 !== d && void 0 !== l[d + p] && (c[u + p] = c[u + p] || l[d + p]) : c[u + p] = n.placeholder || s.placeholder.charAt(0)
                        }!0 !== s.autoGroup || "" === s.groupSeparator || h === s.radixPoint && void 0 === n.pos && !n.dopost ? c = c.join("") : (c = e(function(t, e) {
                            var i = "";
                            if (i += "(" + e.groupSeparator + "*{" + e.groupSize + "}){*}", "" !== e.radixPoint) {
                                var n = t.join("").split(e.radixPoint);
                                n[1] && (i += e.radixPoint + "*{" + n[1].match(/^\d*\??\d*/)[0].length + "}")
                            }
                            return i
                        }(c, s), {
                            numericInput: !0,
                            jitMasking: !0,
                            definitions: {
                                "*": {
                                    validator: "[0-9?]",
                                    cardinality: 1
                                }
                            }
                        }).format(c.join(""))).charAt(0) === s.groupSeparator && c.substr(1)
                    }
                    if (s.isNegative && "blur" === n.event && (s.isNegative = "0" !== c), c = a + c, c += o, s.isNegative && (c = s.negationSymbol.front + c, c += s.negationSymbol.back), c = c.split(""), void 0 !== h)
                        if (h !== s.radixPoint && h !== s.negationSymbol.front && h !== s.negationSymbol.back)(r = t.inArray("?", c)) > -1 ? c[r] = h : r = n.caret || 0;
                        else if (h === s.radixPoint || h === s.negationSymbol.front || h === s.negationSymbol.back) {
                        var f = t.inArray(h, c); - 1 !== f && (r = f)
                    }
                    s.numericInput && (r = c.length - r - 1, c = c.reverse());
                    var m = {
                        caret: void 0 === h || void 0 !== n.pos ? r + (s.numericInput ? -1 : 1) : r,
                        buffer: c,
                        refreshFromBuffer: n.dopost || i.join("") !== c.join("")
                    };
                    return m.refreshFromBuffer ? m : n
                },
                onBeforeWrite: function(i, n, s, o) {
                    if (i) switch (i.type) {
                        case "keydown":
                            return o.postValidation(n, {
                                caret: s,
                                dopost: !0
                            }, o);
                        case "blur":
                        case "checkval":
                            var a;
                            if (function(t) {
                                    void 0 === t.parseMinMaxOptions && (null !== t.min && (t.min = t.min.toString().replace(new RegExp(e.escapeRegex(t.groupSeparator), "g"), ""), "," === t.radixPoint && (t.min = t.min.replace(t.radixPoint, ".")), t.min = isFinite(t.min) ? parseFloat(t.min) : NaN, isNaN(t.min) && (t.min = Number.MIN_VALUE)), null !== t.max && (t.max = t.max.toString().replace(new RegExp(e.escapeRegex(t.groupSeparator), "g"), ""), "," === t.radixPoint && (t.max = t.max.replace(t.radixPoint, ".")), t.max = isFinite(t.max) ? parseFloat(t.max) : NaN, isNaN(t.max) && (t.max = Number.MAX_VALUE)), t.parseMinMaxOptions = "done")
                                }(o), null !== o.min || null !== o.max) {
                                if (a = o.onUnMask(n.join(""), void 0, t.extend({}, o, {
                                        unmaskAsNumber: !0
                                    })), null !== o.min && a < o.min) return o.isNegative = o.min < 0, o.postValidation(o.min.toString().replace(".", o.radixPoint).split(""), {
                                    caret: s,
                                    dopost: !0,
                                    placeholder: "0"
                                }, o);
                                if (null !== o.max && a > o.max) return o.isNegative = o.max < 0, o.postValidation(o.max.toString().replace(".", o.radixPoint).split(""), {
                                    caret: s,
                                    dopost: !0,
                                    placeholder: "0"
                                }, o)
                            }
                            return o.postValidation(n, {
                                caret: s,
                                dopost: !0,
                                placeholder: "0",
                                event: "blur"
                            }, o);
                        case "_checkval":
                            return {
                                caret: s
                            }
                    }
                },
                regex: {
                    integerPart: function(t, i) {
                        return i ? new RegExp("[" + e.escapeRegex(t.negationSymbol.front) + "+]?") : new RegExp("[" + e.escapeRegex(t.negationSymbol.front) + "+]?\\d+")
                    },
                    integerNPart: function(t) {
                        return new RegExp("[\\d" + e.escapeRegex(t.groupSeparator) + e.escapeRegex(t.placeholder.charAt(0)) + "]+")
                    }
                },
                definitions: {
                    "~": {
                        validator: function(t, i, n, s, o, a) {
                            var r = s ? new RegExp("[0-9" + e.escapeRegex(o.groupSeparator) + "]").test(t) : new RegExp("[0-9]").test(t);
                            if (!0 === r) {
                                if (!0 !== o.numericInput && void 0 !== i.validPositions[n] && "~" === i.validPositions[n].match.def && !a) {
                                    var l = i.buffer.join("");
                                    l = (l = (l = l.replace(new RegExp("[-" + e.escapeRegex(o.negationSymbol.front) + "]", "g"), "")).replace(new RegExp(e.escapeRegex(o.negationSymbol.back) + "$"), "")).replace(/0/g, o.placeholder.charAt(0));
                                    var h = i._buffer.join("");
                                    for (l === o.radixPoint && (l = h); null === l.match(e.escapeRegex(h) + "$");) h = h.slice(1);
                                    r = void 0 === (l = (l = l.replace(h, "")).split(""))[n] ? {
                                        pos: n,
                                        remove: n
                                    } : {
                                        pos: n
                                    }
                                }
                            } else s || t !== o.radixPoint || void 0 !== i.validPositions[n - 1] || (i.buffer[n] = "0", r = {
                                pos: n + 1
                            });
                            return r
                        },
                        cardinality: 1
                    },
                    "+": {
                        validator: function(t, e, i, n, s) {
                            return s.allowMinus && ("-" === t || t === s.negationSymbol.front)
                        },
                        cardinality: 1,
                        placeholder: ""
                    },
                    "-": {
                        validator: function(t, e, i, n, s) {
                            return s.allowMinus && t === s.negationSymbol.back
                        },
                        cardinality: 1,
                        placeholder: ""
                    },
                    ":": {
                        validator: function(t, i, n, s, o) {
                            var a = "[" + e.escapeRegex(o.radixPoint) + "]",
                                r = new RegExp(a).test(t);
                            return r && i.validPositions[n] && i.validPositions[n].match.placeholder === o.radixPoint && (r = {
                                caret: n + 1
                            }), r
                        },
                        cardinality: 1,
                        placeholder: function(t) {
                            return t.radixPoint
                        }
                    }
                },
                onUnMask: function(t, i, n) {
                    if ("" === i && !0 === n.nullable) return i;
                    var s = t.replace(n.prefix, "");
                    return s = s.replace(n.suffix, ""), s = s.replace(new RegExp(e.escapeRegex(n.groupSeparator), "g"), ""), "" !== n.placeholder.charAt(0) && (s = s.replace(new RegExp(n.placeholder.charAt(0), "g"), "0")), n.unmaskAsNumber ? ("" !== n.radixPoint && -1 !== s.indexOf(n.radixPoint) && (s = s.replace(e.escapeRegex.call(this, n.radixPoint), ".")), Number(s)) : s
                },
                isComplete: function(t, i) {
                    var n = t.join("");
                    if (t.slice().join("") !== n) return !1;
                    var s = n.replace(i.prefix, "");
                    return s = s.replace(i.suffix, ""), s = s.replace(new RegExp(e.escapeRegex(i.groupSeparator), "g"), ""), "," === i.radixPoint && (s = s.replace(e.escapeRegex(i.radixPoint), ".")), isFinite(s)
                },
                onBeforeMask: function(t, i) {
                    if (i.isNegative = void 0, t = t.toString().charAt(t.length - 1) === i.radixPoint ? t.toString().substr(0, t.length - 1) : t.toString(), "" !== i.radixPoint && isFinite(t)) {
                        var n = t.split("."),
                            s = "" !== i.groupSeparator ? parseInt(i.groupSize) : 0;
                        2 === n.length && (n[0].length > s || n[1].length > s || n[0].length <= s && n[1].length < s) && (t = t.replace(".", i.radixPoint))
                    }
                    var o = t.match(/,/g),
                        a = t.match(/\./g);
                    if (a && o ? a.length > o.length ? (t = t.replace(/\./g, ""), t = t.replace(",", i.radixPoint)) : o.length > a.length ? (t = t.replace(/,/g, ""), t = t.replace(".", i.radixPoint)) : t = t.indexOf(".") < t.indexOf(",") ? t.replace(/\./g, "") : t = t.replace(/,/g, "") : t = t.replace(new RegExp(e.escapeRegex(i.groupSeparator), "g"), ""), 0 === i.digits && (-1 !== t.indexOf(".") ? t = t.substring(0, t.indexOf(".")) : -1 !== t.indexOf(",") && (t = t.substring(0, t.indexOf(",")))), "" !== i.radixPoint && isFinite(i.digits) && -1 !== t.indexOf(i.radixPoint)) {
                        var r = t.split(i.radixPoint)[1].match(new RegExp("\\d*"))[0];
                        if (parseInt(i.digits) < r.toString().length) {
                            var l = Math.pow(10, parseInt(i.digits));
                            t = t.replace(e.escapeRegex(i.radixPoint), "."), t = (t = Math.round(parseFloat(t) * l) / l).toString().replace(".", i.radixPoint)
                        }
                    }
                    return t
                },
                canClearPosition: function(t, e, i, n, s) {
                    var o = t.validPositions[e],
                        a = o.input !== s.radixPoint || null !== t.validPositions[e].match.fn && !1 === s.decimalProtect || o.input === s.radixPoint && t.validPositions[e + 1] && null === t.validPositions[e + 1].match.fn || isFinite(o.input) || e === i || o.input === s.groupSeparator || o.input === s.negationSymbol.front || o.input === s.negationSymbol.back;
                    return !a || "+" != o.match.nativeDef && "-" != o.match.nativeDef || (s.isNegative = !1), a
                },
                onKeyDown: function(i, n, s, o) {
                    var a = t(this);
                    if (i.ctrlKey) switch (i.keyCode) {
                        case e.keyCode.UP:
                            a.val(parseFloat(this.inputmask.unmaskedvalue()) + parseInt(o.step)), a.trigger("setvalue");
                            break;
                        case e.keyCode.DOWN:
                            a.val(parseFloat(this.inputmask.unmaskedvalue()) - parseInt(o.step)), a.trigger("setvalue")
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
                digitsOptional: !0,
                radixPoint: ".",
                placeholder: "0",
                autoGroup: !1,
                min: 0,
                max: 100,
                suffix: " %",
                allowMinus: !1
            }
        })
    }(window.dependencyLib || jQuery, window.Inputmask),
    function(t, e) {
        function i(t, e) {
            var i = (t.mask || t).replace(/#/g, "9").replace(/\)/, "9").replace(/[+()#-]/g, ""),
                n = (e.mask || e).replace(/#/g, "9").replace(/\)/, "9").replace(/[+()#-]/g, ""),
                s = (t.mask || t).split("#")[0],
                o = (e.mask || e).split("#")[0];
            return 0 === o.indexOf(s) ? -1 : 0 === s.indexOf(o) ? 1 : i.localeCompare(n)
        }
        var n = e.prototype.analyseMask;
        e.prototype.analyseMask = function(e, i, s) {
            function o(t, i, n) {
                i = i || "", n = n || r, "" !== i && (n[i] = {});
                for (var s = "", a = n[i] || n, l = t.length - 1; l >= 0; l--) e = t[l].mask || t[l], s = e.substr(0, 1), a[s] = a[s] || [], a[s].unshift(e.substr(1)), t.splice(l, 1);
                for (var h in a) a[h].length > 500 && o(a[h].slice(), h, a)
            }

            function a(e) {
                var i = "",
                    n = [];
                for (var o in e) t.isArray(e[o]) ? 1 === e[o].length ? n.push(o + e[o]) : n.push(o + s.groupmarker.start + e[o].join(s.groupmarker.end + s.alternatormarker + s.groupmarker.start) + s.groupmarker.end) : n.push(o + a(e[o]));
                return 1 === n.length ? i += n[0] : i += s.groupmarker.start + n.join(s.groupmarker.end + s.alternatormarker + s.groupmarker.start) + s.groupmarker.end, i
            }
            var r = {};
            return s.phoneCodes && (s.phoneCodes && s.phoneCodes.length > 1e3 && (e = e.substr(1, e.length - 2), o(e.split(s.groupmarker.end + s.alternatormarker + s.groupmarker.start)), e = a(r)), e = e.replace(/9/g, "\\9")), n.call(this, e, i, s)
        }, e.extendAliases({
            abstractphone: {
                groupmarker: {
                    start: "<",
                    end: ">"
                },
                countrycode: "",
                phoneCodes: [],
                mask: function(t) {
                    return t.definitions = {
                        "#": e.prototype.definitions[9]
                    }, t.phoneCodes.sort(i)
                },
                keepStatic: !0,
                onBeforeMask: function(t, e) {
                    var i = t.replace(/^0{1,2}/, "").replace(/[\s]/g, "");
                    return (i.indexOf(e.countrycode) > 1 || -1 === i.indexOf(e.countrycode)) && (i = "+" + e.countrycode + i), i
                },
                onUnMask: function(t, e, i) {
                    return e
                },
                inputmode: "tel"
            }
        })
    }(window.dependencyLib || jQuery, window.Inputmask),
    function(t, e) {
        window.Inputmask.extendAliases({
            Regex: {
                mask: "r",
                greedy: !1,
                repeat: "*",
                regex: null,
                regexTokens: null,
                tokenizer: /\[\^?]?(?:[^\\\]]+|\\[\S\s]?)*]?|\\(?:0(?:[0-3][0-7]{0,2}|[4-7][0-7]?)?|[1-9][0-9]*|x[0-9A-Fa-f]{2}|u[0-9A-Fa-f]{4}|c[A-Za-z]|[\S\s]?)|\((?:\?[:=!]?)?|(?:[?*+]|\{[0-9]+(?:,[0-9]*)?\})\??|[^.?*+^${[()|\\]+|./g,
                quantifierFilter: /[0-9]+[^,]/,
                isComplete: function(t, e) {
                    return new RegExp(e.regex, e.casing ? "i" : "").test(t.join(""))
                },
                definitions: {
                    r: {
                        validator: function(e, i, n, s, o) {
                            function a(t, e) {
                                this.matches = [], this.isGroup = t || !1, this.isQuantifier = e || !1, this.quantifier = {
                                    min: 1,
                                    max: 1
                                }, this.repeaterPart = void 0
                            }

                            function r(e, i) {
                                var n = !1;
                                i && (u += "(", p++);
                                for (var s = 0; s < e.matches.length; s++) {
                                    var a = e.matches[s];
                                    if (!0 === a.isGroup) n = r(a, !0);
                                    else if (!0 === a.isQuantifier) {
                                        var h = t.inArray(a, e.matches),
                                            c = e.matches[h - 1],
                                            d = u;
                                        if (isNaN(a.quantifier.max)) {
                                            for (; a.repeaterPart && a.repeaterPart !== u && a.repeaterPart.length > u.length && !(n = r(c, !0)););
                                            (n = n || r(c, !0)) && (a.repeaterPart = u), u = d + a.quantifier.max
                                        } else {
                                            for (var f = 0, m = a.quantifier.max - 1; f < m && !(n = r(c, !0)); f++);
                                            u = d + "{" + a.quantifier.min + "," + a.quantifier.max + "}"
                                        }
                                    } else if (void 0 !== a.matches)
                                        for (var g = 0; g < a.length && !(n = r(a[g], i)); g++);
                                    else {
                                        var v;
                                        if ("[" == a.charAt(0)) {
                                            v = u, v += a;
                                            for (_ = 0; _ < p; _++) v += ")";
                                            n = (x = new RegExp("^(" + v + ")$", o.casing ? "i" : "")).test(l)
                                        } else
                                            for (var y = 0, b = a.length; y < b; y++)
                                                if ("\\" !== a.charAt(y)) {
                                                    v = u, v = (v += a.substr(0, y + 1)).replace(/\|$/, "");
                                                    for (var _ = 0; _ < p; _++) v += ")";
                                                    var x = new RegExp("^(" + v + ")$", o.casing ? "i" : "");
                                                    if (n = x.test(l)) break
                                                }
                                        u += a
                                    }
                                    if (n) break
                                }
                                return i && (u += ")", p--), n
                            }
                            var l, h, c = i.buffer.slice(),
                                u = "",
                                d = !1,
                                p = 0;
                            null === o.regexTokens && function() {
                                var t, e, i = new a,
                                    n = [];
                                for (o.regexTokens = []; t = o.tokenizer.exec(o.regex);) switch ((e = t[0]).charAt(0)) {
                                    case "(":
                                        n.push(new a(!0));
                                        break;
                                    case ")":
                                        h = n.pop(), n.length > 0 ? n[n.length - 1].matches.push(h) : i.matches.push(h);
                                        break;
                                    case "{":
                                    case "+":
                                    case "*":
                                        var s = new a(!1, !0),
                                            r = (e = e.replace(/[{}]/g, "")).split(","),
                                            l = isNaN(r[0]) ? r[0] : parseInt(r[0]),
                                            c = 1 === r.length ? l : isNaN(r[1]) ? r[1] : parseInt(r[1]);
                                        if (s.quantifier = {
                                                min: l,
                                                max: c
                                            }, n.length > 0) {
                                            var u = n[n.length - 1].matches;
                                            (t = u.pop()).isGroup || ((h = new a(!0)).matches.push(t), t = h), u.push(t), u.push(s)
                                        } else(t = i.matches.pop()).isGroup || ((h = new a(!0)).matches.push(t), t = h), i.matches.push(t), i.matches.push(s);
                                        break;
                                    default:
                                        n.length > 0 ? n[n.length - 1].matches.push(e) : i.matches.push(e)
                                }
                                i.matches.length > 0 && o.regexTokens.push(i)
                            }(), c.splice(n, 0, e), l = c.join("");
                            for (var f = 0; f < o.regexTokens.length; f++) {
                                var m = o.regexTokens[f];
                                if (d = r(m, m.isGroup)) break
                            }
                            return d
                        },
                        cardinality: 1
                    }
                }
            }
        })
    }(window.dependencyLib || jQuery),
    function(t) {
        "use strict";
        var e = t.jCarousel = {};
        e.version = "0.3.3";
        var i = /^([+\-]=)?(.+)$/;
        e.parseTarget = function(t) {
            var e = !1,
                n = "object" != typeof t ? i.exec(t) : null;
            return n ? (t = parseInt(n[2], 10) || 0, n[1] && (e = !0, "-=" === n[1] && (t *= -1))) : "object" != typeof t && (t = parseInt(t, 10) || 0), {
                target: t,
                relative: e
            }
        }, e.detectCarousel = function(t) {
            for (var e; t.length > 0;) {
                if ((e = t.filter("[data-jcarousel]")).length > 0) return e;
                if ((e = t.find("[data-jcarousel]")).length > 0) return e;
                t = t.parent()
            }
            return null
        }, e.base = function(i) {
            return {
                version: e.version,
                _options: {},
                _element: null,
                _carousel: null,
                _init: t.noop,
                _create: t.noop,
                _destroy: t.noop,
                _reload: t.noop,
                create: function() {
                    return this._element.attr("data-" + i.toLowerCase(), !0).data(i, this), !1 === this._trigger("create") ? this : (this._create(), this._trigger("createend"), this)
                },
                destroy: function() {
                    return !1 === this._trigger("destroy") ? this : (this._destroy(), this._trigger("destroyend"), this._element.removeData(i).removeAttr("data-" + i.toLowerCase()), this)
                },
                reload: function(t) {
                    return !1 === this._trigger("reload") ? this : (t && this.options(t), this._reload(), this._trigger("reloadend"), this)
                },
                element: function() {
                    return this._element
                },
                options: function(e, i) {
                    if (0 === arguments.length) return t.extend({}, this._options);
                    if ("string" == typeof e) {
                        if (void 0 === i) return void 0 === this._options[e] ? null : this._options[e];
                        this._options[e] = i
                    } else this._options = t.extend({}, this._options, e);
                    return this
                },
                carousel: function() {
                    return this._carousel || (this._carousel = e.detectCarousel(this.options("carousel") || this._element), this._carousel || t.error('Could not detect carousel for plugin "' + i + '"')), this._carousel
                },
                _trigger: function(e, n, s) {
                    var o, a = !1;
                    return s = [this].concat(s || []), (n || this._element).each(function() {
                        o = t.Event((i + ":" + e).toLowerCase()), t(this).trigger(o, s), o.isDefaultPrevented() && (a = !0)
                    }), !a
                }
            }
        }, e.plugin = function(i, n) {
            var s = t[i] = function(e, i) {
                this._element = t(e), this.options(i), this._init(), this.create()
            };
            return s.fn = s.prototype = t.extend({}, e.base(i), n), t.fn[i] = function(e) {
                var n = Array.prototype.slice.call(arguments, 1),
                    o = this;
                return this.each("string" == typeof e ? function() {
                    var s = t(this).data(i);
                    if (!s) return t.error("Cannot call methods on " + i + ' prior to initialization; attempted to call method "' + e + '"');
                    if (!t.isFunction(s[e]) || "_" === e.charAt(0)) return t.error('No such method "' + e + '" for ' + i + " instance");
                    var a = s[e].apply(s, n);
                    return a !== s && void 0 !== a ? (o = a, !1) : void 0
                } : function() {
                    var n = t(this).data(i);
                    n instanceof s ? n.reload(e) : new s(this, e)
                }), o
            }, s
        }
    }(jQuery),
    function(t, e) {
        "use strict";
        var i = function(t) {
            return parseFloat(t) || 0
        };
        t.jCarousel.plugin("jcarousel", {
            animating: !1,
            tail: 0,
            inTail: !1,
            resizeTimer: null,
            lt: null,
            vertical: !1,
            rtl: !1,
            circular: !1,
            underflow: !1,
            relative: !1,
            _options: {
                list: function() {
                    return this.element().children().eq(0)
                },
                items: function() {
                    return this.list().children()
                },
                animation: 400,
                transitions: !1,
                wrap: null,
                vertical: null,
                rtl: null,
                center: !1
            },
            _list: null,
            _items: null,
            _target: t(),
            _first: t(),
            _last: t(),
            _visible: t(),
            _fullyvisible: t(),
            _init: function() {
                var t = this;
                return this.onWindowResize = function() {
                    t.resizeTimer && clearTimeout(t.resizeTimer), t.resizeTimer = setTimeout(function() {
                        t.reload()
                    }, 100)
                }, this
            },
            _create: function() {
                this._reload(), t(e).on("resize.jcarousel", this.onWindowResize)
            },
            _destroy: function() {
                t(e).off("resize.jcarousel", this.onWindowResize)
            },
            _reload: function() {
                this.vertical = this.options("vertical"), null == this.vertical && (this.vertical = this.list().height() > this.list().width()), this.rtl = this.options("rtl"), null == this.rtl && (this.rtl = function(e) {
                    if ("rtl" === ("" + e.attr("dir")).toLowerCase()) return !0;
                    var i = !1;
                    return e.parents("[dir]").each(function() {
                        return /rtl/i.test(t(this).attr("dir")) ? (i = !0, !1) : void 0
                    }), i
                }(this._element)), this.lt = this.vertical ? "top" : "left", this.relative = "relative" === this.list().css("position"), this._list = null, this._items = null;
                var e = this.index(this._target) >= 0 ? this._target : this.closest();
                this.circular = "circular" === this.options("wrap"), this.underflow = !1;
                var i = {
                    left: 0,
                    top: 0
                };
                return e.length > 0 && (this._prepare(e), this.list().find("[data-jcarousel-clone]").remove(), this._items = null, this.underflow = this._fullyvisible.length >= this.items().length, this.circular = this.circular && !this.underflow, i[this.lt] = this._position(e) + "px"), this.move(i), this
            },
            list: function() {
                if (null === this._list) {
                    var e = this.options("list");
                    this._list = t.isFunction(e) ? e.call(this) : this._element.find(e)
                }
                return this._list
            },
            items: function() {
                if (null === this._items) {
                    var e = this.options("items");
                    this._items = (t.isFunction(e) ? e.call(this) : this.list().find(e)).not("[data-jcarousel-clone]")
                }
                return this._items
            },
            index: function(t) {
                return this.items().index(t)
            },
            closest: function() {
                var e, n = this,
                    s = this.list().position()[this.lt],
                    o = t(),
                    a = !1,
                    r = this.vertical ? "bottom" : this.rtl && !this.relative ? "left" : "right";
                return this.rtl && this.relative && !this.vertical && (s += this.list().width() - this.clipping()), this.items().each(function() {
                    if (o = t(this), a) return !1;
                    var l = n.dimension(o);
                    if ((s += l) >= 0) {
                        if (e = l - i(o.css("margin-" + r)), !(Math.abs(s) - l + e / 2 <= 0)) return !1;
                        a = !0
                    }
                }), o
            },
            target: function() {
                return this._target
            },
            first: function() {
                return this._first
            },
            last: function() {
                return this._last
            },
            visible: function() {
                return this._visible
            },
            fullyvisible: function() {
                return this._fullyvisible
            },
            hasNext: function() {
                if (!1 === this._trigger("hasnext")) return !0;
                var t = this.options("wrap"),
                    e = this.items().length - 1,
                    i = this.options("center") ? this._target : this._last;
                return !!(e >= 0 && !this.underflow && (t && "first" !== t || this.index(i) < e || this.tail && !this.inTail))
            },
            hasPrev: function() {
                if (!1 === this._trigger("hasprev")) return !0;
                var t = this.options("wrap");
                return !!(this.items().length > 0 && !this.underflow && (t && "last" !== t || this.index(this._first) > 0 || this.tail && this.inTail))
            },
            clipping: function() {
                return this._element["inner" + (this.vertical ? "Height" : "Width")]()
            },
            dimension: function(t) {
                return t["outer" + (this.vertical ? "Height" : "Width")](!0)
            },
            scroll: function(e, i, n) {
                if (this.animating) return this;
                if (!1 === this._trigger("scroll", null, [e, i])) return this;
                t.isFunction(i) && (n = i, i = !0);
                var s = t.jCarousel.parseTarget(e);
                if (s.relative) {
                    var o, a, r, l, h, c, u, d, p = this.items().length - 1,
                        f = Math.abs(s.target),
                        m = this.options("wrap");
                    if (s.target > 0) {
                        var g = this.index(this._last);
                        if (g >= p && this.tail) this.inTail ? "both" === m || "last" === m ? this._scroll(0, i, n) : t.isFunction(n) && n.call(this, !1) : this._scrollTail(i, n);
                        else if (o = this.index(this._target), this.underflow && o === p && ("circular" === m || "both" === m || "last" === m) || !this.underflow && g === p && ("both" === m || "last" === m)) this._scroll(0, i, n);
                        else if (r = o + f, this.circular && r > p) {
                            for (d = p, h = this.items().get(-1); d++ < r;) h = this.items().eq(0), (c = this._visible.index(h) >= 0) && h.after(h.clone(!0).attr("data-jcarousel-clone", !0)), this.list().append(h), c || (u = {}, u[this.lt] = this.dimension(h), this.moveBy(u)), this._items = null;
                            this._scroll(h, i, n)
                        } else this._scroll(Math.min(r, p), i, n)
                    } else if (this.inTail) this._scroll(Math.max(this.index(this._first) - f + 1, 0), i, n);
                    else if (a = this.index(this._first), o = this.index(this._target), l = this.underflow ? o : a, r = l - f, 0 >= l && (this.underflow && "circular" === m || "both" === m || "first" === m)) this._scroll(p, i, n);
                    else if (this.circular && 0 > r) {
                        for (d = r, h = this.items().get(0); d++ < 0;) {
                            h = this.items().eq(-1), (c = this._visible.index(h) >= 0) && h.after(h.clone(!0).attr("data-jcarousel-clone", !0)), this.list().prepend(h), this._items = null;
                            var v = this.dimension(h);
                            (u = {})[this.lt] = -v, this.moveBy(u)
                        }
                        this._scroll(h, i, n)
                    } else this._scroll(Math.max(r, 0), i, n)
                } else this._scroll(s.target, i, n);
                return this._trigger("scrollend"), this
            },
            moveBy: function(t, e) {
                var n = this.list().position(),
                    s = 1,
                    o = 0;
                return this.rtl && !this.vertical && (s = -1, this.relative && (o = this.list().width() - this.clipping())), t.left && (t.left = n.left + o + i(t.left) * s + "px"), t.top && (t.top = n.top + o + i(t.top) * s + "px"), this.move(t, e)
            },
            move: function(e, i) {
                i = i || {};
                var n = this.options("transitions"),
                    s = !!n,
                    o = !!n.transforms,
                    a = !!n.transforms3d,
                    r = i.duration || 0,
                    l = this.list();
                if (!s && r > 0) l.animate(e, i);
                else {
                    var h = i.complete || t.noop,
                        c = {};
                    if (s) {
                        var u = {
                                transitionDuration: l.css("transitionDuration"),
                                transitionTimingFunction: l.css("transitionTimingFunction"),
                                transitionProperty: l.css("transitionProperty")
                            },
                            d = h;
                        h = function() {
                            t(this).css(u), d.call(this)
                        }, c = {
                            transitionDuration: (r > 0 ? r / 1e3 : 0) + "s",
                            transitionTimingFunction: n.easing || i.easing,
                            transitionProperty: r > 0 ? o || a ? "all" : e.left ? "left" : "top" : "none",
                            transform: "none"
                        }
                    }
                    a ? c.transform = "translate3d(" + (e.left || 0) + "," + (e.top || 0) + ",0)" : o ? c.transform = "translate(" + (e.left || 0) + "," + (e.top || 0) + ")" : t.extend(c, e), s && r > 0 && l.one("transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd", h), l.css(c), 0 >= r && l.each(function() {
                        h.call(this)
                    })
                }
            },
            _scroll: function(e, i, n) {
                if (this.animating) return t.isFunction(n) && n.call(this, !1), this;
                if ("object" != typeof e ? e = this.items().eq(e) : void 0 === e.jquery && (e = t(e)), 0 === e.length) return t.isFunction(n) && n.call(this, !1), this;
                this.inTail = !1, this._prepare(e);
                var s = this._position(e);
                if (s === this.list().position()[this.lt]) return t.isFunction(n) && n.call(this, !1), this;
                var o = {};
                return o[this.lt] = s + "px", this._animate(o, i, n), this
            },
            _scrollTail: function(e, i) {
                if (this.animating || !this.tail) return t.isFunction(i) && i.call(this, !1), this;
                var n = this.list().position()[this.lt];
                this.rtl && this.relative && !this.vertical && (n += this.list().width() - this.clipping()), this.rtl && !this.vertical ? n += this.tail : n -= this.tail, this.inTail = !0;
                var s = {};
                return s[this.lt] = n + "px", this._update({
                    target: this._target.next(),
                    fullyvisible: this._fullyvisible.slice(1).add(this._visible.last())
                }), this._animate(s, e, i), this
            },
            _animate: function(e, i, n) {
                if (n = n || t.noop, !1 === this._trigger("animate")) return n.call(this, !1), this;
                this.animating = !0;
                var s = this.options("animation"),
                    o = t.proxy(function() {
                        this.animating = !1;
                        var t = this.list().find("[data-jcarousel-clone]");
                        t.length > 0 && (t.remove(), this._reload()), this._trigger("animateend"), n.call(this, !0)
                    }, this),
                    a = "object" == typeof s ? t.extend({}, s) : {
                        duration: s
                    },
                    r = a.complete || t.noop;
                return !1 === i ? a.duration = 0 : void 0 !== t.fx.speeds[a.duration] && (a.duration = t.fx.speeds[a.duration]), a.complete = function() {
                    o(), r.call(this)
                }, this.move(e, a), this
            },
            _prepare: function(e) {
                var n, s, o, a, r = this.index(e),
                    l = r,
                    h = this.dimension(e),
                    c = this.clipping(),
                    u = this.vertical ? "bottom" : this.rtl ? "left" : "right",
                    d = this.options("center"),
                    p = {
                        target: e,
                        first: e,
                        last: e,
                        visible: e,
                        fullyvisible: c >= h ? e : t()
                    };
                if (d && (h /= 2, c /= 2), c > h)
                    for (;;) {
                        if (0 === (n = this.items().eq(++l)).length) {
                            if (!this.circular) break;
                            if (n = this.items().eq(0), e.get(0) === n.get(0)) break;
                            if ((s = this._visible.index(n) >= 0) && n.after(n.clone(!0).attr("data-jcarousel-clone", !0)), this.list().append(n), !s) {
                                var f = {};
                                f[this.lt] = this.dimension(n), this.moveBy(f)
                            }
                            this._items = null
                        }
                        if (0 === (a = this.dimension(n))) break;
                        if (h += a, p.last = n, p.visible = p.visible.add(n), o = i(n.css("margin-" + u)), c >= h - o && (p.fullyvisible = p.fullyvisible.add(n)), h >= c) break
                    }
                if (!this.circular && !d && c > h)
                    for (l = r; !(--l < 0) && 0 !== (n = this.items().eq(l)).length && 0 !== (a = this.dimension(n)) && (h += a, p.first = n, p.visible = p.visible.add(n), o = i(n.css("margin-" + u)), c >= h - o && (p.fullyvisible = p.fullyvisible.add(n)), !(h >= c)););
                return this._update(p), this.tail = 0, d || "circular" === this.options("wrap") || "custom" === this.options("wrap") || this.index(p.last) !== this.items().length - 1 || (h -= i(p.last.css("margin-" + u))) > c && (this.tail = h - c), this
            },
            _position: function(t) {
                var e = this._first,
                    i = e.position()[this.lt],
                    n = this.options("center"),
                    s = n ? this.clipping() / 2 - this.dimension(e) / 2 : 0;
                return this.rtl && !this.vertical ? (i -= this.relative ? this.list().width() - this.dimension(e) : this.clipping() - this.dimension(e), i += s) : i -= s, !n && (this.index(t) > this.index(e) || this.inTail) && this.tail ? (i = this.rtl && !this.vertical ? i - this.tail : i + this.tail, this.inTail = !0) : this.inTail = !1, -i
            },
            _update: function(e) {
                var i, n = this,
                    s = {
                        target: this._target,
                        first: this._first,
                        last: this._last,
                        visible: this._visible,
                        fullyvisible: this._fullyvisible
                    },
                    o = this.index(e.first || s.first) < this.index(s.first);
                for (i in e) ! function(i) {
                    var a = [],
                        r = [];
                    e[i].each(function() {
                        s[i].index(this) < 0 && a.push(this)
                    }), s[i].each(function() {
                        e[i].index(this) < 0 && r.push(this)
                    }), o ? a = a.reverse() : r = r.reverse(), n._trigger(i + "in", t(a)), n._trigger(i + "out", t(r)), n["_" + i] = e[i]
                }(i);
                return this
            }
        })
    }(jQuery, window),
    function(t) {
        "use strict";
        t.jcarousel.fn.scrollIntoView = function(e, i, n) {
            var s, o = t.jCarousel.parseTarget(e),
                a = this.index(this._fullyvisible.first()),
                r = this.index(this._fullyvisible.last());
            if (s = o.relative ? o.target < 0 ? Math.max(0, a + o.target) : r + o.target : "object" != typeof o.target ? o.target : this.index(o.target), a > s) return this.scroll(s, i, n);
            if (s >= a && r >= s) return t.isFunction(n) && n.call(this, !1), this;
            for (var l, h = this.items(), c = this.clipping(), u = this.vertical ? "bottom" : this.rtl ? "left" : "right", d = 0; 0 !== (l = h.eq(s)).length;) {
                if ((d += this.dimension(l)) >= c) {
                    d - (parseFloat(l.css("margin-" + u)) || 0) !== c && s++;
                    break
                }
                if (0 >= s) break;
                s--
            }
            return this.scroll(s, i, n)
        }
    }(jQuery),
    function(t) {
        "use strict";
        t.jCarousel.plugin("jcarouselControl", {
            _options: {
                target: "+=1",
                event: "click",
                method: "scroll"
            },
            _active: null,
            _init: function() {
                this.onDestroy = t.proxy(function() {
                    this._destroy(), this.carousel().one("jcarousel:createend", t.proxy(this._create, this))
                }, this), this.onReload = t.proxy(this._reload, this), this.onEvent = t.proxy(function(e) {
                    e.preventDefault();
                    var i = this.options("method");
                    t.isFunction(i) ? i.call(this) : this.carousel().jcarousel(this.options("method"), this.options("target"))
                }, this)
            },
            _create: function() {
                this.carousel().one("jcarousel:destroy", this.onDestroy).on("jcarousel:reloadend jcarousel:scrollend", this.onReload), this._element.on(this.options("event") + ".jcarouselcontrol", this.onEvent), this._reload()
            },
            _destroy: function() {
                this._element.off(".jcarouselcontrol", this.onEvent), this.carousel().off("jcarousel:destroy", this.onDestroy).off("jcarousel:reloadend jcarousel:scrollend", this.onReload)
            },
            _reload: function() {
                var e, i = t.jCarousel.parseTarget(this.options("target")),
                    n = this.carousel();
                if (i.relative) e = n.jcarousel(i.target > 0 ? "hasNext" : "hasPrev");
                else {
                    var s = "object" != typeof i.target ? n.jcarousel("items").eq(i.target) : i.target;
                    e = n.jcarousel("target").index(s) >= 0
                }
                return this._active !== e && (this._trigger(e ? "active" : "inactive"), this._active = e), this
            }
        })
    }(jQuery),
    function(t) {
        "use strict";
        t.jCarousel.plugin("jcarouselPagination", {
            _options: {
                perPage: null,
                item: function(t) {
                    return '<a href="#' + t + '">' + t + "</a>"
                },
                event: "click",
                method: "scroll"
            },
            _carouselItems: null,
            _pages: {},
            _items: {},
            _currentPage: null,
            _init: function() {
                this.onDestroy = t.proxy(function() {
                    this._destroy(), this.carousel().one("jcarousel:createend", t.proxy(this._create, this))
                }, this), this.onReload = t.proxy(this._reload, this), this.onScroll = t.proxy(this._update, this)
            },
            _create: function() {
                this.carousel().one("jcarousel:destroy", this.onDestroy).on("jcarousel:reloadend", this.onReload).on("jcarousel:scrollend", this.onScroll), this._reload()
            },
            _destroy: function() {
                this._clear(), this.carousel().off("jcarousel:destroy", this.onDestroy).off("jcarousel:reloadend", this.onReload).off("jcarousel:scrollend", this.onScroll), this._carouselItems = null
            },
            _reload: function() {
                var e = this.options("perPage");
                if (this._pages = {}, this._items = {}, t.isFunction(e) && (e = e.call(this)), null == e) this._pages = this._calculatePages();
                else
                    for (var i, n = parseInt(e, 10) || 0, s = this._getCarouselItems(), o = 1, a = 0; 0 !== (i = s.eq(a++)).length;) this._pages[o] = this._pages[o] ? this._pages[o].add(i) : i, a % n == 0 && o++;
                this._clear();
                var r = this,
                    l = this.carousel().data("jcarousel"),
                    h = this._element,
                    c = this.options("item"),
                    u = this._getCarouselItems().length;
                t.each(this._pages, function(e, i) {
                    var n = r._items[e] = t(c.call(r, e, i));
                    n.on(r.options("event") + ".jcarouselpagination", t.proxy(function() {
                        var t = i.eq(0);
                        if (l.circular) {
                            var n = l.index(l.target()),
                                s = l.index(t);
                            parseFloat(e) > parseFloat(r._currentPage) ? n > s && (t = "+=" + (u - n + s)) : s > n && (t = "-=" + (n + (u - s)))
                        }
                        l[this.options("method")](t)
                    }, r)), h.append(n)
                }), this._update()
            },
            _update: function() {
                var e, i = this.carousel().jcarousel("target");
                t.each(this._pages, function(t, n) {
                    return n.each(function() {
                        return i.is(this) ? (e = t, !1) : void 0
                    }), !e && void 0
                }), this._currentPage !== e && (this._trigger("inactive", this._items[this._currentPage]), this._trigger("active", this._items[e])), this._currentPage = e
            },
            items: function() {
                return this._items
            },
            reloadCarouselItems: function() {
                return this._carouselItems = null, this
            },
            _clear: function() {
                this._element.empty(), this._currentPage = null
            },
            _calculatePages: function() {
                for (var t, e, i = this.carousel().data("jcarousel"), n = this._getCarouselItems(), s = i.clipping(), o = 0, a = 0, r = 1, l = {}; 0 !== (t = n.eq(a++)).length;) o + (e = i.dimension(t)) > s && (r++, o = 0), o += e, l[r] = l[r] ? l[r].add(t) : t;
                return l
            },
            _getCarouselItems: function() {
                return this._carouselItems || (this._carouselItems = this.carousel().jcarousel("items")), this._carouselItems
            }
        })
    }(jQuery),
    function(t, e) {
        "use strict";
        var i, n, s = {
            hidden: "visibilitychange",
            mozHidden: "mozvisibilitychange",
            msHidden: "msvisibilitychange",
            webkitHidden: "webkitvisibilitychange"
        };
        t.each(s, function(t, s) {
            return void 0 !== e[t] ? (i = t, n = s, !1) : void 0
        }), t.jCarousel.plugin("jcarouselAutoscroll", {
            _options: {
                target: "+=1",
                interval: 3e3,
                autostart: !0
            },
            _timer: null,
            _started: !1,
            _init: function() {
                this.onDestroy = t.proxy(function() {
                    this._destroy(), this.carousel().one("jcarousel:createend", t.proxy(this._create, this))
                }, this), this.onAnimateEnd = t.proxy(this._start, this), this.onVisibilityChange = t.proxy(function() {
                    e[i] ? this._stop() : this._start()
                }, this)
            },
            _create: function() {
                this.carousel().one("jcarousel:destroy", this.onDestroy), t(e).on(n, this.onVisibilityChange), this.options("autostart") && this.start()
            },
            _destroy: function() {
                this._stop(), this.carousel().off("jcarousel:destroy", this.onDestroy), t(e).off(n, this.onVisibilityChange)
            },
            _start: function() {
                return this._stop(), this._started ? (this.carousel().one("jcarousel:animateend", this.onAnimateEnd), this._timer = setTimeout(t.proxy(function() {
                    this.carousel().jcarousel("scroll", this.options("target"))
                }, this), this.options("interval")), this) : void 0
            },
            _stop: function() {
                return this._timer && (this._timer = clearTimeout(this._timer)), this.carousel().off("jcarousel:animateend", this.onAnimateEnd), this
            },
            start: function() {
                return this._started = !0, this._start(), this
            },
            stop: function() {
                return this._started = !1, this._stop(), this
            }
        })
    }(jQuery, document),
    function(t, e) {
        "function" == typeof define && define.amd ? define(["jquery"], function(i) {
            return e(t, i)
        }) : "object" == typeof exports ? e(t, require("jquery")) : e(t, t.jQuery || t.Zepto)
    }(this, function(t, e) {
        "use strict";

        function i(t) {
            if (w && "none" === t.css("animation-name") && "none" === t.css("-webkit-animation-name") && "none" === t.css("-moz-animation-name") && "none" === t.css("-o-animation-name") && "none" === t.css("-ms-animation-name")) return 0;
            var e, i, n, s, o = t.css("animation-duration") || t.css("-webkit-animation-duration") || t.css("-moz-animation-duration") || t.css("-o-animation-duration") || t.css("-ms-animation-duration") || "0s",
                a = t.css("animation-delay") || t.css("-webkit-animation-delay") || t.css("-moz-animation-delay") || t.css("-o-animation-delay") || t.css("-ms-animation-delay") || "0s",
                r = t.css("animation-iteration-count") || t.css("-webkit-animation-iteration-count") || t.css("-moz-animation-iteration-count") || t.css("-o-animation-iteration-count") || t.css("-ms-animation-iteration-count") || "1";
            for (o = o.split(", "), a = a.split(", "), r = r.split(", "), s = 0, i = o.length, e = Number.NEGATIVE_INFINITY; s < i; s++)(n = parseFloat(o[s]) * parseInt(r[s], 10) + parseFloat(a[s])) > e && (e = n);
            return e
        }

        function n() {
            if (e(document).height() <= e(window).height()) return 0;
            var t, i, n = document.createElement("div"),
                s = document.createElement("div");
            return n.style.visibility = "hidden", n.style.width = "100px", document.body.appendChild(n), t = n.offsetWidth, n.style.overflow = "scroll", s.style.width = "100%", n.appendChild(s), i = s.offsetWidth, n.parentNode.removeChild(n), t - i
        }

        function s() {
            if (!k) {
                var t, i, s = e("html"),
                    o = c("is-locked");
                s.hasClass(o) || (i = e(document.body), t = parseInt(i.css("padding-right"), 10) + n(), i.css("padding-right", t + "px"), s.addClass(o))
            }
        }

        function o() {
            if (!k) {
                var t, i, s = e("html"),
                    o = c("is-locked");
                s.hasClass(o) && (i = e(document.body), t = parseInt(i.css("padding-right"), 10) - n(), i.css("padding-right", t + "px"), s.removeClass(o))
            }
        }

        function a(t, e, i, n) {
            var s = c("is", e),
                o = [c("is", _.CLOSING), c("is", _.OPENING), c("is", _.CLOSED), c("is", _.OPENED)].join(" ");
            t.$bg.removeClass(o).addClass(s), t.$overlay.removeClass(o).addClass(s), t.$wrapper.removeClass(o).addClass(s), t.$modal.removeClass(o).addClass(s), t.state = e, !i && t.$modal.trigger({
                type: e,
                reason: n
            }, [{
                reason: n
            }])
        }

        function r(t, n, s) {
            var o = 0,
                a = function(t) {
                    t.target === this && o++
                },
                r = function(t) {
                    t.target === this && 0 == --o && (e.each(["$bg", "$overlay", "$wrapper", "$modal"], function(t, e) {
                        s[e].off(v + " " + y)
                    }), n())
                };
            e.each(["$bg", "$overlay", "$wrapper", "$modal"], function(t, e) {
                s[e].on(v, a).on(y, r)
            }), t(), 0 === i(s.$bg) && 0 === i(s.$overlay) && 0 === i(s.$wrapper) && 0 === i(s.$modal) && (e.each(["$bg", "$overlay", "$wrapper", "$modal"], function(t, e) {
                s[e].off(v + " " + y)
            }), n())
        }

        function l(t) {
            t.state !== _.CLOSED && (e.each(["$bg", "$overlay", "$wrapper", "$modal"], function(e, i) {
                t[i].off(v + " " + y)
            }), t.$bg.removeClass(t.settings.modifier), t.$overlay.removeClass(t.settings.modifier).hide(), t.$wrapper.hide(), o(), a(t, _.CLOSED, !0))
        }

        function h(t) {
            var e, i, n, s, o = {};
            for (s = 0, i = (e = (t = t.replace(/\s*:\s*/g, ":").replace(/\s*,\s*/g, ",")).split(",")).length; s < i; s++) e[s] = e[s].split(":"), ("string" == typeof(n = e[s][1]) || n instanceof String) && (n = "true" === n || "false" !== n && n), ("string" == typeof n || n instanceof String) && (n = isNaN(n) ? n : +n), o[e[s][0]] = n;
            return o
        }

        function c() {
            for (var t = g, e = 0; e < arguments.length; ++e) t += "-" + arguments[e];
            return t
        }

        function u() {
            var t, i, n = location.hash.replace("#", "");
            if (n) {
                try {
                    i = e("[data-" + m + '-id="' + n + '"]')
                } catch (t) {}
                i && i.length && (t = e[m].lookup[i.data(m)]) && t.settings.hashTracking && t.open()
            } else p && p.state === _.OPENED && p.settings.hashTracking && p.close()
        }

        function d(t, i) {
            var n = e(document.body),
                s = this;
            s.settings = e.extend({}, b, i), s.index = e[m].lookup.push(s) - 1, s.state = _.CLOSED, s.$overlay = e("." + c("overlay")), null !== s.settings.appendTo && s.settings.appendTo.length && (n = e(s.settings.appendTo)), s.$overlay.length || (s.$overlay = e("<div>").addClass(c("overlay") + " " + c("is", _.CLOSED)).hide(), n.append(s.$overlay)), s.$bg = e("." + c("bg")).addClass(c("is", _.CLOSED)), s.$modal = t.addClass(g + " " + c("is-initialized") + " " + s.settings.modifier + " " + c("is", _.CLOSED)).attr("tabindex", "-1"), s.$wrapper = e("<div>").addClass(c("wrapper") + " " + s.settings.modifier + " " + c("is", _.CLOSED)).hide().append(s.$modal), n.append(s.$wrapper), s.$wrapper.on("click." + g, "[data-" + m + '-action="close"]', function(t) {
                t.preventDefault(), s.close()
            }), s.$wrapper.on("click." + g, "[data-" + m + '-action="cancel"]', function(t) {
                t.preventDefault(), s.$modal.trigger(x.CANCELLATION), s.settings.closeOnCancel && s.close(x.CANCELLATION)
            }), s.$wrapper.on("click." + g, "[data-" + m + '-action="confirm"]', function(t) {
                t.preventDefault(), s.$modal.trigger(x.CONFIRMATION), s.settings.closeOnConfirm && s.close(x.CONFIRMATION)
            }), s.$wrapper.on("click." + g, function(t) {
                e(t.target).hasClass(c("wrapper")) && s.settings.closeOnOutsideClick && s.close()
            })
        }
        var p, f, m = "remodal",
            g = t.REMODAL_GLOBALS && t.REMODAL_GLOBALS.NAMESPACE || m,
            v = e.map(["animationstart", "webkitAnimationStart", "MSAnimationStart", "oAnimationStart"], function(t) {
                return t + "." + g
            }).join(" "),
            y = e.map(["animationend", "webkitAnimationEnd", "MSAnimationEnd", "oAnimationEnd"], function(t) {
                return t + "." + g
            }).join(" "),
            b = e.extend({
                hashTracking: !0,
                closeOnConfirm: !0,
                closeOnCancel: !0,
                closeOnEscape: !0,
                closeOnOutsideClick: !0,
                modifier: "",
                appendTo: null
            }, t.REMODAL_GLOBALS && t.REMODAL_GLOBALS.DEFAULTS),
            _ = {
                CLOSING: "closing",
                CLOSED: "closed",
                OPENING: "opening",
                OPENED: "opened"
            },
            x = {
                CONFIRMATION: "confirmation",
                CANCELLATION: "cancellation"
            },
            w = function() {
                var t = document.createElement("div").style;
                return void 0 !== t.animationName || void 0 !== t.WebkitAnimationName || void 0 !== t.MozAnimationName || void 0 !== t.msAnimationName || void 0 !== t.OAnimationName
            }(),
            k = /iPad|iPhone|iPod/.test(navigator.platform);
        d.prototype.open = function() {
            var t, i = this;
            i.state !== _.OPENING && i.state !== _.CLOSING && ((t = i.$modal.attr("data-" + m + "-id")) && i.settings.hashTracking && (f = e(window).scrollTop(), location.hash = t), p && p !== i && l(p), p = i, s(), i.$bg.addClass(i.settings.modifier), i.$overlay.addClass(i.settings.modifier).show(), i.$wrapper.show().scrollTop(0), i.$modal.focus(), r(function() {
                a(i, _.OPENING)
            }, function() {
                a(i, _.OPENED)
            }, i))
        }, d.prototype.close = function(t) {
            var i = this;
            i.state !== _.OPENING && i.state !== _.CLOSING && i.state !== _.CLOSED && (i.settings.hashTracking && i.$modal.attr("data-" + m + "-id") === location.hash.substr(1) && (location.hash = "", e(window).scrollTop(f)), r(function() {
                a(i, _.CLOSING, !1, t)
            }, function() {
                i.$bg.removeClass(i.settings.modifier), i.$overlay.removeClass(i.settings.modifier).hide(), i.$wrapper.hide(), o(), a(i, _.CLOSED, !1, t)
            }, i))
        }, d.prototype.getState = function() {
            return this.state
        }, d.prototype.destroy = function() {
            var t = e[m].lookup;
            l(this), this.$wrapper.remove(), delete t[this.index], 0 === e.grep(t, function(t) {
                return !!t
            }).length && (this.$overlay.remove(), this.$bg.removeClass(c("is", _.CLOSING) + " " + c("is", _.OPENING) + " " + c("is", _.CLOSED) + " " + c("is", _.OPENED)))
        }, e[m] = {
            lookup: []
        }, e.fn[m] = function(t) {
            var i, n;
            return this.each(function(s, o) {
                null == (n = e(o)).data(m) ? (i = new d(n, t), n.data(m, i.index), i.settings.hashTracking && n.attr("data-" + m + "-id") === location.hash.substr(1) && i.open()) : i = e[m].lookup[n.data(m)]
            }), i
        }, e(document).ready(function() {
            e(document).on("click", "[data-" + m + "-target]", function(t) {
                t.preventDefault();
                var i = t.currentTarget.getAttribute("data-" + m + "-target"),
                    n = e("[data-" + m + '-id="' + i + '"]');
                e[m].lookup[n.data(m)].open()
            }), e(document).find("." + g).each(function(t, i) {
                var n = e(i),
                    s = n.data(m + "-options");
                s ? ("string" == typeof s || s instanceof String) && (s = h(s)) : s = {}, n[m](s)
            }), e(document).on("keydown." + g, function(t) {
                p && p.settings.closeOnEscape && p.state === _.OPENED && 27 === t.keyCode && p.close()
            }), e(window).on("hashchange." + g, u)
        })
    }),
    function(t, e) {
        "function" == typeof define && define.amd ? define(["jquery"], e) : "object" == typeof exports ? module.exports = e(require("jquery")) : t.lightbox = e(t.jQuery)
    }(this, function(t) {
        function e(e) {
            this.album = [], this.currentImageIndex = void 0, this.init(), this.options = t.extend({}, this.constructor.defaults), this.option(e)
        }
        return e.defaults = {
            albumLabel: "Image %1 of %2",
            alwaysShowNavOnTouchDevices: !1,
            fadeDuration: 600,
            fitImagesInViewport: !0,
            imageFadeDuration: 600,
            positionFromTop: 50,
            resizeDuration: 700,
            showImageNumberLabel: !0,
            wrapAround: !1,
            disableScrolling: !1,
            sanitizeTitle: !1
        }, e.prototype.option = function(e) {
            t.extend(this.options, e)
        }, e.prototype.imageCountLabel = function(t, e) {
            return this.options.albumLabel.replace(/%1/g, t).replace(/%2/g, e)
        }, e.prototype.init = function() {
            var e = this;
            t(document).ready(function() {
                e.enable(), e.build()
            })
        }, e.prototype.enable = function() {
            var e = this;
            t("body").on("click", "a[rel^=lightbox], area[rel^=lightbox], a[data-lightbox], area[data-lightbox]", function(i) {
                return e.start(t(i.currentTarget)), !1
            })
        }, e.prototype.build = function() {
            var e = this;
            t('<div id="lightboxOverlay" class="lightboxOverlay"></div><div id="lightbox" class="lightbox"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" /><div class="lb-nav"><a class="lb-prev" href="" ></a><a class="lb-next" href="" ></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div>').appendTo(t("body")), this.$lightbox = t("#lightbox"), this.$overlay = t("#lightboxOverlay"), this.$outerContainer = this.$lightbox.find(".lb-outerContainer"), this.$container = this.$lightbox.find(".lb-container"), this.$image = this.$lightbox.find(".lb-image"), this.$nav = this.$lightbox.find(".lb-nav"), this.containerPadding = {
                top: parseInt(this.$container.css("padding-top"), 10),
                right: parseInt(this.$container.css("padding-right"), 10),
                bottom: parseInt(this.$container.css("padding-bottom"), 10),
                left: parseInt(this.$container.css("padding-left"), 10)
            }, this.imageBorderWidth = {
                top: parseInt(this.$image.css("border-top-width"), 10),
                right: parseInt(this.$image.css("border-right-width"), 10),
                bottom: parseInt(this.$image.css("border-bottom-width"), 10),
                left: parseInt(this.$image.css("border-left-width"), 10)
            }, this.$overlay.hide().on("click", function() {
                return e.end(), !1
            }), this.$lightbox.hide().on("click", function(i) {
                return "lightbox" === t(i.target).attr("id") && e.end(), !1
            }), this.$outerContainer.on("click", function(i) {
                return "lightbox" === t(i.target).attr("id") && e.end(), !1
            }), this.$lightbox.find(".lb-prev").on("click", function() {
                return 0 === e.currentImageIndex ? e.changeImage(e.album.length - 1) : e.changeImage(e.currentImageIndex - 1), !1
            }), this.$lightbox.find(".lb-next").on("click", function() {
                return e.currentImageIndex === e.album.length - 1 ? e.changeImage(0) : e.changeImage(e.currentImageIndex + 1), !1
            }), this.$nav.on("mousedown", function(t) {
                3 === t.which && (e.$nav.css("pointer-events", "none"), e.$lightbox.one("contextmenu", function() {
                    setTimeout(function() {
                        this.$nav.css("pointer-events", "auto")
                    }.bind(e), 0)
                }))
            }), this.$lightbox.find(".lb-loader, .lb-close").on("click", function() {
                return e.end(), !1
            })
        }, e.prototype.start = function(e) {
            function i(t) {
                n.album.push({
                    link: t.attr("href"),
                    title: t.attr("data-title") || t.attr("title")
                })
            }
            var n = this,
                s = t(window);
            s.on("resize", t.proxy(this.sizeOverlay, this)), t("select, object, embed").css({
                visibility: "hidden"
            }), this.sizeOverlay(), this.album = [];
            var o, a = 0,
                r = e.attr("data-lightbox");
            if (r) {
                o = t(e.prop("tagName") + '[data-lightbox="' + r + '"]');
                for (var l = 0; l < o.length; l = ++l) i(t(o[l])), o[l] === e[0] && (a = l)
            } else if ("lightbox" === e.attr("rel")) i(e);
            else {
                o = t(e.prop("tagName") + '[rel="' + e.attr("rel") + '"]');
                for (var h = 0; h < o.length; h = ++h) i(t(o[h])), o[h] === e[0] && (a = h)
            }
            var c = s.scrollTop() + this.options.positionFromTop,
                u = s.scrollLeft();
            this.$lightbox.css({
                top: c + "px",
                left: u + "px"
            }).fadeIn(this.options.fadeDuration), this.options.disableScrolling && t("body").addClass("lb-disable-scrolling"), this.changeImage(a)
        }, e.prototype.changeImage = function(e) {
            var i = this;
            this.disableKeyboardNav();
            var n = this.$lightbox.find(".lb-image");
            this.$overlay.fadeIn(this.options.fadeDuration), t(".lb-loader").fadeIn("slow"), this.$lightbox.find(".lb-image, .lb-nav, .lb-prev, .lb-next, .lb-dataContainer, .lb-numbers, .lb-caption").hide(), this.$outerContainer.addClass("animating");
            var s = new Image;
            s.onload = function() {
                var o, a, r, l, h, c;
                n.attr("src", i.album[e].link), t(s), n.width(s.width), n.height(s.height), i.options.fitImagesInViewport && (c = t(window).width(), h = t(window).height(), l = c - i.containerPadding.left - i.containerPadding.right - i.imageBorderWidth.left - i.imageBorderWidth.right - 20, r = h - i.containerPadding.top - i.containerPadding.bottom - i.imageBorderWidth.top - i.imageBorderWidth.bottom - 120, i.options.maxWidth && i.options.maxWidth < l && (l = i.options.maxWidth), i.options.maxHeight && i.options.maxHeight < l && (r = i.options.maxHeight), (s.width > l || s.height > r) && (s.width / l > s.height / r ? (a = l, o = parseInt(s.height / (s.width / a), 10), n.width(a), n.height(o)) : (o = r, a = parseInt(s.width / (s.height / o), 10), n.width(a), n.height(o)))), i.sizeContainer(n.width(), n.height())
            }, s.src = this.album[e].link, this.currentImageIndex = e
        }, e.prototype.sizeOverlay = function() {
            this.$overlay.width(t(document).width()).height(t(document).height())
        }, e.prototype.sizeContainer = function(t, e) {
            function i() {
                n.$lightbox.find(".lb-dataContainer").width(a), n.$lightbox.find(".lb-prevLink").height(r), n.$lightbox.find(".lb-nextLink").height(r), n.showImage()
            }
            var n = this,
                s = this.$outerContainer.outerWidth(),
                o = this.$outerContainer.outerHeight(),
                a = t + this.containerPadding.left + this.containerPadding.right + this.imageBorderWidth.left + this.imageBorderWidth.right,
                r = e + this.containerPadding.top + this.containerPadding.bottom + this.imageBorderWidth.top + this.imageBorderWidth.bottom;
            s !== a || o !== r ? this.$outerContainer.animate({
                width: a,
                height: r
            }, this.options.resizeDuration, "swing", function() {
                i()
            }) : i()
        }, e.prototype.showImage = function() {
            this.$lightbox.find(".lb-loader").stop(!0).hide(), this.$lightbox.find(".lb-image").fadeIn(this.options.imageFadeDuration), this.updateNav(), this.updateDetails(), this.preloadNeighboringImages(), this.enableKeyboardNav()
        }, e.prototype.updateNav = function() {
            var t = !1;
            try {
                document.createEvent("TouchEvent"), t = !!this.options.alwaysShowNavOnTouchDevices
            } catch (t) {}
            this.$lightbox.find(".lb-nav").show(), this.album.length > 1 && (this.options.wrapAround ? (t && this.$lightbox.find(".lb-prev, .lb-next").css("opacity", "1"), this.$lightbox.find(".lb-prev, .lb-next").show()) : (this.currentImageIndex > 0 && (this.$lightbox.find(".lb-prev").show(), t && this.$lightbox.find(".lb-prev").css("opacity", "1")), this.currentImageIndex < this.album.length - 1 && (this.$lightbox.find(".lb-next").show(), t && this.$lightbox.find(".lb-next").css("opacity", "1"))))
        }, e.prototype.updateDetails = function() {
            var e = this;
            if (void 0 !== this.album[this.currentImageIndex].title && "" !== this.album[this.currentImageIndex].title) {
                var i = this.$lightbox.find(".lb-caption");
                this.options.sanitizeTitle ? i.text(this.album[this.currentImageIndex].title) : i.html(this.album[this.currentImageIndex].title), i.fadeIn("fast").find("a").on("click", function(e) {
                    void 0 !== t(this).attr("target") ? window.open(t(this).attr("href"), t(this).attr("target")) : location.href = t(this).attr("href")
                })
            }
            if (this.album.length > 1 && this.options.showImageNumberLabel) {
                var n = this.imageCountLabel(this.currentImageIndex + 1, this.album.length);
                this.$lightbox.find(".lb-number").text(n).fadeIn("fast")
            } else this.$lightbox.find(".lb-number").hide();
            this.$outerContainer.removeClass("animating"), this.$lightbox.find(".lb-dataContainer").fadeIn(this.options.resizeDuration, function() {
                return e.sizeOverlay()
            })
        }, e.prototype.preloadNeighboringImages = function() {
            this.album.length > this.currentImageIndex + 1 && ((new Image).src = this.album[this.currentImageIndex + 1].link), this.currentImageIndex > 0 && ((new Image).src = this.album[this.currentImageIndex - 1].link)
        }, e.prototype.enableKeyboardNav = function() {
            t(document).on("keyup.keyboard", t.proxy(this.keyboardAction, this))
        }, e.prototype.disableKeyboardNav = function() {
            t(document).off(".keyboard")
        }, e.prototype.keyboardAction = function(t) {
            var e = t.keyCode,
                i = String.fromCharCode(e).toLowerCase();
            27 === e || i.match(/x|o|c/) ? this.end() : "p" === i || 37 === e ? 0 !== this.currentImageIndex ? this.changeImage(this.currentImageIndex - 1) : this.options.wrapAround && this.album.length > 1 && this.changeImage(this.album.length - 1) : "n" !== i && 39 !== e || (this.currentImageIndex !== this.album.length - 1 ? this.changeImage(this.currentImageIndex + 1) : this.options.wrapAround && this.album.length > 1 && this.changeImage(0))
        }, e.prototype.end = function() {
            this.disableKeyboardNav(), t(window).off("resize", this.sizeOverlay), this.$lightbox.fadeOut(this.options.fadeDuration), this.$overlay.fadeOut(this.options.fadeDuration), t("select, object, embed").css({
                visibility: "visible"
            }), this.options.disableScrolling && t("body").removeClass("lb-disable-scrolling")
        }, new e
    }), jQuery.cookie = function(t, e, i) {
        if (void 0 === e) {
            var n = null;
            if (document.cookie && "" != document.cookie)
                for (var s = document.cookie.split(";"), o = 0; o < s.length; o++) {
                    var a = jQuery.trim(s[o]);
                    if (a.substring(0, t.length + 1) == t + "=") {
                        n = decodeURIComponent(a.substring(t.length + 1));
                        break
                    }
                }
            return n
        }
        i = i || {}, null === e && (e = "", i.expires = -1);
        var r = "";
        if (i.expires && ("number" == typeof i.expires || i.expires.toUTCString)) {
            var l;
            "number" == typeof i.expires ? (l = new Date).setTime(l.getTime() + 24 * i.expires * 60 * 60 * 1e3) : l = i.expires, r = "; expires=" + l.toUTCString()
        }
        var h = i.path ? "; path=" + i.path : "",
            c = i.domain ? "; domain=" + i.domain : "",
            u = i.secure ? "; secure" : "";
        document.cookie = [t, "=", encodeURIComponent(e), r, h, c, u].join("")
    },
    function(t) {
        t.fn.dcAccordion = function(e) {
            function i(e, i) {
                var n = t.cookie(e);
                if (null != n) {
                    var o = n.split(",");
                    t.each(o, function(e, n) {
                        var o = t("li:eq(" + n + ")", i);
                        t("> a", o).addClass(s.classActive);
                        var a = o.parents("li");
                        t("> a", a).addClass(s.classActive)
                    })
                }
            }

            function n(e, i) {
                var n = [];
                t("li a." + s.classActive, i).each(function(e) {
                    var s = t(this).parent("li"),
                        o = t("li", i).index(s);
                    n.push(o)
                }), t.cookie(e, n, {
                    path: "/"
                })
            }
            var s = {
                    classParent: "dcjq-parent",
                    classActive: "active",
                    classArrow: "dcjq-icon",
                    classCount: "dcjq-count",
                    classExpand: "dcjq-current-parent",
                    eventType: "click",
                    hoverDelay: 300,
                    menuClose: !0,
                    autoClose: !0,
                    autoExpand: !1,
                    speed: "slow",
                    saveState: !0,
                    disableLink: !0,
                    showCount: !1,
                    cookie: "dcjq-accordion"
                },
                e = t.extend(s, e);
            this.each(function(e) {
                function o(e, i) {
                    t("ul", a).not(i).slideUp(s.speed), t("a", a).removeClass(s.classActive), t("> a", e).addClass(s.classActive)
                }
                var a = this;
                if (function() {
                        $arrow = '<span class="' + s.classArrow + '"></span>';
                        var e = s.classParent + "-li";
                        t("> ul", a).show(), t("li", a).each(function() {
                            t("> ul", this).length > 0 && (t(this).addClass(e), t("> a", this).addClass(s.classParent).append($arrow))
                        }), t("> ul", a).hide(), 1 == s.showCount && t("li." + e, a).each(function() {
                            if (1 == s.disableLink) e = parseInt(t("ul a:not(." + s.classParent + ")", this).length);
                            else var e = parseInt(t("ul a", this).length);
                            t("> a", this).append(' <span class="' + s.classCount + '">(' + e + ")</span>")
                        })
                    }(), 1 == s.saveState && i(s.cookie, a), 1 == s.autoExpand && t("li." + s.classExpand + " > a").addClass(s.classActive), t("ul", a).hide(), $allActiveLi = t("a." + s.classActive, a), $allActiveLi.siblings("ul").show(), "hover" == s.eventType) {
                    var r = {
                        sensitivity: 2,
                        interval: s.hoverDelay,
                        over: function() {
                            $activeLi = t(this).parent("li"), $parentsLi = $activeLi.parents("li"), $parentsUl = $activeLi.parents("ul"), 1 == s.autoClose && o($parentsLi, $parentsUl), t("> ul", $activeLi).is(":visible") ? (t("ul", $activeLi).slideUp(s.speed), t("a", $activeLi).removeClass(s.classActive)) : (t(this).siblings("ul").slideToggle(s.speed), t("> a", $activeLi).addClass(s.classActive)), 1 == s.saveState && n(s.cookie, a)
                        },
                        timeout: s.hoverDelay,
                        out: function() {}
                    };
                    t("li a", a).hoverIntent(r);
                    var l = {
                        sensitivity: 2,
                        interval: 1e3,
                        over: function() {},
                        timeout: 1e3,
                        out: function() {
                            1 == s.menuClose && (t("ul", a).slideUp(s.speed), t("a", a).removeClass(s.classActive), n(s.cookie, a))
                        }
                    };
                    t(a).hoverIntent(l), 1 == s.disableLink && t("li a", a).click(function(e) {
                        t(this).siblings("ul").length > 0 && e.preventDefault()
                    })
                } else t("li a", a).click(function(e) {
                    $activeLi = t(this).parent("li"), $parentsLi = $activeLi.parents("li"), $parentsUl = $activeLi.parents("ul"), 1 == s.disableLink && t(this).siblings("ul").length > 0 && e.preventDefault(), 1 == s.autoClose && o($parentsLi, $parentsUl), t("> ul", $activeLi).is(":visible") ? (t("ul", $activeLi).slideUp(s.speed), t("a", $activeLi).removeClass(s.classActive)) : (t(this).siblings("ul").slideToggle(s.speed), t("> a", $activeLi).addClass(s.classActive)), 1 == s.saveState && n(s.cookie, a)
                })
            })
        }
    }(jQuery),
    function(t) {
        t.fn.hoverIntent = function(e, i) {
            var n = {
                sensitivity: 7,
                interval: 100,
                timeout: 0
            };
            n = t.extend(n, i ? {
                over: e,
                out: i
            } : e);
            var s, o, a, r, l = function(t) {
                    s = t.pageX, o = t.pageY
                },
                h = function(e, i) {
                    if (i.hoverIntent_t = clearTimeout(i.hoverIntent_t), Math.abs(a - s) + Math.abs(r - o) < n.sensitivity) return t(i).unbind("mousemove", l), i.hoverIntent_s = 1, n.over.apply(i, [e]);
                    a = s, r = o, i.hoverIntent_t = setTimeout(function() {
                        h(e, i)
                    }, n.interval)
                },
                c = function(t, e) {
                    return e.hoverIntent_t = clearTimeout(e.hoverIntent_t), e.hoverIntent_s = 0, n.out.apply(e, [t])
                },
                u = function(e) {
                    for (var i = ("mouseover" == e.type ? e.fromElement : e.toElement) || e.relatedTarget; i && i != this;) try {
                        i = i.parentNode
                    } catch (e) {
                        i = this
                    }
                    if (i == this) return !1;
                    var s = jQuery.extend({}, e),
                        o = this;
                    o.hoverIntent_t && (o.hoverIntent_t = clearTimeout(o.hoverIntent_t)), "mouseover" == e.type ? (a = s.pageX, r = s.pageY, t(o).bind("mousemove", l), 1 != o.hoverIntent_s && (o.hoverIntent_t = setTimeout(function() {
                        h(s, o)
                    }, n.interval))) : (t(o).unbind("mousemove", l), 1 == o.hoverIntent_s && (o.hoverIntent_t = setTimeout(function() {
                        c(s, o)
                    }, n.timeout)))
                };
            return this.mouseover(u).mouseout(u)
        }
    }(jQuery),
    function(t) {
        "function" == typeof define && define.amd ? define(["jquery"], t) : "object" == typeof exports ? module.exports = t(require("jquery")) : t(jQuery)
    }(function(t) {
        function e(t) {
            return r.raw ? t : encodeURIComponent(t)
        }

        function i(t) {
            return r.raw ? t : decodeURIComponent(t)
        }

        function n(t) {
            return e(r.json ? JSON.stringify(t) : String(t))
        }

        function s(t) {
            0 === t.indexOf('"') && (t = t.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, "\\"));
            try {
                return t = decodeURIComponent(t.replace(a, " ")), r.json ? JSON.parse(t) : t
            } catch (t) {}
        }

        function o(e, i) {
            var n = r.raw ? e : s(e);
            return t.isFunction(i) ? i(n) : n
        }
        var a = /\+/g,
            r = t.cookie = function(s, a, l) {
                if (arguments.length > 1 && !t.isFunction(a)) {
                    if ("number" == typeof(l = t.extend({}, r.defaults, l)).expires) {
                        var h = l.expires,
                            c = l.expires = new Date;
                        c.setMilliseconds(c.getMilliseconds() + 864e5 * h)
                    }
                    return document.cookie = [e(s), "=", n(a), l.expires ? "; expires=" + l.expires.toUTCString() : "", l.path ? "; path=" + l.path : "", l.domain ? "; domain=" + l.domain : "", l.secure ? "; secure" : ""].join("")
                }
                for (var u = s ? void 0 : {}, d = document.cookie ? document.cookie.split("; ") : [], p = 0, f = d.length; p < f; p++) {
                    var m = d[p].split("="),
                        g = i(m.shift()),
                        v = m.join("=");
                    if (s === g) {
                        u = o(v, a);
                        break
                    }
                    s || void 0 === (v = o(v)) || (u[g] = v)
                }
                return u
            };
        r.defaults = {}, t.removeCookie = function(e, i) {
            return t.cookie(e, "", t.extend({}, i, {
                expires: -1
            })), !t.cookie(e)
        }
    }),
    function(t) {
        t.fn.jrumble = function(e) {
            var i = t.extend({
                x: 2,
                y: 2,
                rotation: 1,
                speed: 15,
                opacity: !1,
                opacityMin: .5
            }, e);
            return this.each(function() {
                var e, n, s = t(this),
                    o = 2 * i.x,
                    a = 2 * i.y,
                    r = 2 * i.rotation,
                    l = 0 === i.speed ? 1 : i.speed,
                    h = i.opacity,
                    c = i.opacityMin,
                    u = function() {
                        var t = Math.floor(Math.random() * (o + 1)) - o / 2,
                            i = Math.floor(Math.random() * (a + 1)) - a / 2,
                            n = Math.floor(Math.random() * (r + 1)) - r / 2,
                            l = h ? Math.random() + c : 1,
                            t = 0 === t && 0 !== o ? Math.random() < .5 ? 1 : -1 : t,
                            i = 0 === i && 0 !== a ? Math.random() < .5 ? 1 : -1 : i;
                        "inline" === s.css("display") && (e = !0, s.css("display", "inline-block")), s.css({
                            position: "relative",
                            left: t + "px",
                            top: i + "px",
                            "-ms-filter": "progid:DXImageTransform.Microsoft.Alpha(Opacity=" + 100 * l + ")",
                            filter: "alpha(opacity=" + 100 * l + ")",
                            "-moz-opacity": l,
                            "-khtml-opacity": l,
                            opacity: l,
                            "-webkit-transform": "rotate(" + n + "deg)",
                            "-moz-transform": "rotate(" + n + "deg)",
                            "-ms-transform": "rotate(" + n + "deg)",
                            "-o-transform": "rotate(" + n + "deg)",
                            transform: "rotate(" + n + "deg)"
                        })
                    },
                    d = {
                        left: 0,
                        top: 0,
                        "-ms-filter": "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)",
                        filter: "alpha(opacity=100)",
                        "-moz-opacity": 1,
                        "-khtml-opacity": 1,
                        opacity: 1,
                        "-webkit-transform": "rotate(0deg)",
                        "-moz-transform": "rotate(0deg)",
                        "-ms-transform": "rotate(0deg)",
                        "-o-transform": "rotate(0deg)",
                        transform: "rotate(0deg)"
                    };
                s.bind({
                    startRumble: function(t) {
                        t.stopPropagation(), clearInterval(n), n = setInterval(u, l)
                    },
                    stopRumble: function(t) {
                        t.stopPropagation(), clearInterval(n), e && s.css("display", "inline"), s.css(d)
                    }
                })
            })
        }
    }(jQuery), $(document).ready(function() {
        var t = function() {
                $("#caller_widget_button_icon").trigger("startRumble"), $("#caller_widget_button_icon").css("background", "url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAFPr3GUAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAACFlJREFUeNpi/P//PwMpgImBREAVDf+R6ABiNHxEYn8gRoMAki0J6JIsOJzKSDNPCwJxB9RJHUief4dLw3soBgFjIJ4JxK5ALAR3K81jGiCASLKBiVpO+U9s+kmARhiqBpCb0fB/KH0BXY4FRxLA6muS0gzZoXEXTa4c6pxyfB4UBOJQJPY7mBztYhAggEhOfbRMqQ3UdjlIwUUgNoDyDwDxBSB2QBLDoRMzdrAlR1iS/ADEBkhiBvj0EmM4sgUCUP4EYvQRazgMJxDrapLTIbVSCyjLKCFlnXdINEj8DFo9VI5UNNMnnbMQkC9HqjxckOoFUD0QCq0X9gDxKuR6gS4uBwggmhnONFjKFJoYTLj8ILEsQccN2Ko5cnLjf6SaTQCa7BjRxEkOiv9o9AMgNoTyBSkJ44NIGQUE+KFhzQil/1OrvAZhBWg4o4uTHMYCSE08RmhwKFAjuX2AhissrOXxBgGZWfo/Me1mYko5ohvhw7esmAlNu/+RwvUdWiWwCkn9bmLT8TtoGjVGS68wcAZHU5n2NTcTgXoP2fuC0CCCeT0UGkwupBqcBjWsHMnwPWgWnx2t8wgCgACiadtiyIXGqKPp5OgEaCUJKyY/EFNh0tvR6O27B9AKGNZOEYCKfSCmUqZFGxEZb/iPCi6g1QUFULYAmjwILCDXXkodjQ3A5GCOcoCKKyB1sGEd7gkD4WgBNAcX4OhPMyB13hvQQpxke6lVTv8nt4k2kBmREakVzIBUahxAYoPwgsFcI+Iz9CO0NKHZ+AMlIY/e7YUNo422PYado5F7LkpI6TYNiW2M1IQHDbzdRerl/IeKMTAg5kgY0DJpOa1qRNB4+UxoT2g3WhkMG0cHja3fheJQqB6YGth4O0h/B1pZXY6k32XAxkcHW5o2RopOFyi7HK0TForUYWNAY4ciqVeCYmMkPTRpMJVDozUNiQ2L/v9obZPdSPK7sci7IHXK6VqNjxZ5w9LRAAHYt3achoEgOjdAnIDIJ7BkelxwACjoqeAIpjRdSlpoSE2a9CnwASzBBfhdAPkGJqPMiOfRGmHir9iVVrYzjvdpMzvZeW/s3cOD9qA96HGBTmHjPxnQDPix7dywzzjNdBhXKuxJ8vs8hpme1SS22mNJZE83/Ykc9Vp902I3jiqKuuIHJHfCXcZtmxZT4Mw0ZUKFKUVWGprsz+O2TSGsxB0WwqS+GZ5D9ecPoRPiMUSPAqjfBfAfBfhyKuvgaCifrqN51dcLuC8Wd8FkOByCgCwklNUxS/zwa9oS6vdULVHIpKd9z7SlejNjj83MWso3GyJ6YGTQdt7CMzsHzf3dAF+B7QR8e1SgVY6wLa2RNnbqbe89eMEdNKSBB4/TM4kWk83GXbO+swrQ19Y0hL/2wvMeHrQH/c9Av1D1pRet4+KWwI6OzPkxVUvj1BYYW0JNSioasv+fsFNLhPlPhOFXQWgu53P43tqIQLl5LqoGQVt7DwWUmwFyGfQMgLlkikCkDpctcWxdf8TzW/e4kJ+PK/BYBzykbal7JPblpr/Kz7wUGx/3xaW4NPCOvkvkr8gtCvEYl/7PZeqgUSdUDVErQvG9D3UtPOp3AhN9OpOZCVb3rWMBBWZBEly7Pg9gcUZdZy6lCX/cHiAS2KhQOjRwMsJpp+lWYmJzCYOT49o10/b+COxesfWgPWgPuqP2JUB7V6ykNgxE9QcHfMGF+4BchvuAZIbUSXNpQ0UbOihTQkfKo3JamlzPFaTHM/yAib8AyBc4s8Pu+LGRjW/w5Xzx7oxmQCvL+Elar6Sn5UVaD+sdJga0AW1AmxjQBvSTyld3zCCR02BEH+i5EjZEzL3zi2ziUPqgdLS1NnUlbe7UDWiKgjXgz2tOS3fY8hNpMMCf+ftvviYw03EAAY94ZZmAe5fG86HeTLSRX3BtzPlkRmgH+5VL6SUSdur55KkZGTnpbZIt6wyiXF5dsaLINIA+I7yI+JH1VpLkUQYpJMlhuGQ1TqDAC5QOg8YkwPyqDdBFZHmC6IXg7RVNbg35DQ919NKAzjYfgWoEAfYaRsjSU37v4TbGdQF6kANyfKInT1XZhurF956eHXgauVcHoJ2HqJcoU3BqeC9VwzQ8dvijZ8tsWsA0lZqq4EeTf/wjR/+9gGsmLqHwsi9dyhKWWaW4kjGX39d1wkL+8esc/TeYsNhax5lT6jfuOMQxyheYmGCs5J5nDSSoGtBVnYJf87C/OLOeImbH1jrYli5PmJRCz2mmI1/23LsJqHfuEMf4sfLTevT53oqkiwyzMajKUqnRDcx0GNAmBrQBXXsp+0A7HU64dWlocjnEgCKs8wnkEZO9A3lUB7HVKVxxqMqE7jiMcdulzPgd33Pn0VPezHMNityro37f+VLyKtUQGPZt4HCLfs4B3Fb8WZPSMZBbE/QdILzrqF1DKNv36Ldw3TBjXdxHkK/8MmmiQpw11QO0PY2A7P9IgSxg3cERiS3ouuqeY0/DZjVCHtALTluooxKxMMhcrHh4bvh736Vnn8acLzEVN5z3oKbKdA2djRrx8J1zXTTcF3CvOegnbBrkEE0I5iGE63b8uVXgeR6UaWsqk2QTFvM6DGiT/wVoOYqMaZyjw7+z6Ht0K3AhF+7vfwBZKHu+8tTRB/ubgB2OVP2V9KOzZMIvpQ6Ap2UEwPRdeoiYGuRK+eN3DEgL/OKh8p2lfMQv4xulj/heITQ4gf1evQhfFNBOTTR2DNZMNQaCdgtgdVXZrgJ+45kAoU7/2UsXdOhliDdzdY6H8Zymo83A4rD9pB5UdBE/9Ix7YotHAobVHqkemic3XF7Mx5bra3H92BGk7Bbc0FLE3DvzOgxoEwPagDagDYJ/I38A7LNVvVE9i8UAAAAASUVORK5CYII=);"), setTimeout(e, 3e3)
            },
            e = function() {
                $("#caller_widget_button_icon").trigger("stopRumble"), $("#caller_widget_button_icon").css("background", "url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAFPr3GUAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABc9JREFUeNpi/P//PwMpgImBREBVDf+J1fABSjdiNwboaSQMA8hiDsh8FjT9jEhOeQDE8lAxOGDBYilM00coZiCkAd0mojQwoDuFfhEHEECMpKQlJpo5BZfiD0jJAqeb/yMF33/04MSV0BKITWQfkPgHkBMdrgT2H1uMMuGI8oeDOFIAAoiR1HKGpil1yBp+gFBZSKzhD5ASGCxT2EPFGYiyBC15I2MDLGWqAJTvgMRmwFLugjExqQWm4CAQO5AShizEJFckS9BdAspmCpQYjreYHp7pHCCAaJb9mYZccIwaTJbBB5ByowA1DQaVeoHQ3FhAqFgl1Db9j5a9NyC5mBGf4cS4GKY5AamdcgGIFwBxIhAbkFpO/0crpwPQymS8ZTQxBi9AE0OmF6C1h4gy2AFHa/0/mgUO5NQq/8ktmwlFHiOaJQ04ahayi01QDc5PSg1Dann8n1iDWUgsAhhHS7cRYDBAANG09T8kG0Sjjh519DByNKw2A7XSAqhvOu4GATVxA1JD4gKl5rFQ4N8FSA09QjXxR6RKVADXiBEtQ9rhPyZAb9cVIDUu0ce/LuAZIyMKk+NofABfshCAim1A4+PSS1VHHyAipP9jcSyy4xywyC2gpaMZiAxlBiwO+g8NaXRPNJAS2pS0PUC9K300MZLHmwaqwYTNgI9ovWdYx+EjMb1qerbySDGIIsdTs0ZkhOKJRKjlZ8AyGzGQ1XgBkgcYoSMKyDMKiVBxgcGQPEZbeaOOHnU0mQAgALtme4MgDIThjoATiBvUDXQDR8AJXIER2ECcQEbQCXAENpAN0MZruDTHV2kLJtekP1ogeQp3R++9siMyNEMzNEMzNEMzNKHjqZ65yAlDQD+hq3b59rdoy2x/s2GKxU893cJ4D/LDqt50BV2bRgXgG7heila8tDRAO4VJnziSA/qdbim6XsyVfG0eig0gOXBvTUhnObGY4KqpJN521LFQPf8yxsKnltf1AHYwfI86C1IY850nQkM7YmmoTTuQv+5oMRpOq0tHFGG8OmIzwkSw1pwYjneCcWxbDfBh09h+CyOiUKBZiErAWEFdR4iMENFNULwgL9AJAf0YKHXo4pEJissX6RLlC9lzrySOTeFDSX0Ld1a+iGAjRGnUq92a1hB/qRgerRVawA/jRsyrL5CgsUT7a+lmxz6/7p33xO7DBNsXvh1xCnjjGtxlEqBM4jolAVlL5tIVVZxCu85catFWtPraeWlHHEoYihF/zsVsmsUahmZohmZohmbooO0jQHtnf9sgDERxb1A2KBuEEdIJmg1CJ2iyARs0I9AN6AYewdmAbkA3qCyuinGxMV8Gw3tSJRTdH/Uv5myfn50gh3GAhgAaoAEaAmiAhgAaoAEa2iHoo/IsfQwVQM8jl3/yi9UbmjlATye5c5ZQT5cnpA8tMdLJk7HaXgfQMyglwM/a59cloYdScuSs6Q9W/zhr+hxk6ohZve0qjXZ3+vxDiY+8t8DTPQIms1PV04IQk/8iUyyTukrDZUe6NSL32HZvoHmH36Ma6fmICH7V4lqLOoAftwK6j8nGBly3YQt6S9piby2xkcURfdsC6CEShrRhSxlFS+/Vv5zU8qZxgLanjKKj90aUt025mfvI22sDbUsdhRaXdgy2WQ+g6hdxChV05gi5a1BKDAOe3vuFI9DUcClwueVZxxC3qT7IxgbYrkD5nDMRn/NoV9iXgTdWVSOBZpa0E5w9Uy6B3x3i7lTHcKnSxexx8kit7MkV4pme5Smmkp4v7HGDXK4Uof7qJ7NUCJeodSS0DH5yiP1kph8ZCExL1DoE9Z6rQ+yZ6hOCdZ/PiKi3cnpz4nUVej2u9yc6nsG1gS9pmYlMtbQPNkfbpObUqfVDOV8s1bg11qNdB8yggK+58J9QLz/M0W4U/puDZkJQXpQC/li9LdGYULeyTjTte3WM/6Z4jhw9rWL2/5eRsDm7BwE0QAM0BNAADdAADdAADQE0QO9dv8tDIsVOffySAAAAAElFTkSuQmCC);"), setTimeout(t, 3e3)
            };
        t(),$("#caller_widget_button_icon").hover(function() {
            $(this).trigger("startRumble"), $("#caller_widget_button_icon").css("background", "url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAFPr3GUAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAACFlJREFUeNpi/P//PwMpgImBREAVDf+R6ABiNHxEYn8gRoMAki0J6JIsOJzKSDNPCwJxB9RJHUief4dLw3soBgFjIJ4JxK5ALAR3K81jGiCASLKBiVpO+U9s+kmARhiqBpCb0fB/KH0BXY4FRxLA6muS0gzZoXEXTa4c6pxyfB4UBOJQJPY7mBztYhAggEhOfbRMqQ3UdjlIwUUgNoDyDwDxBSB2QBLDoRMzdrAlR1iS/ADEBkhiBvj0EmM4sgUCUP4EYvQRazgMJxDrapLTIbVSCyjLKCFlnXdINEj8DFo9VI5UNNMnnbMQkC9HqjxckOoFUD0QCq0X9gDxKuR6gS4uBwggmhnONFjKFJoYTLj8ILEsQccN2Ko5cnLjf6SaTQCa7BjRxEkOiv9o9AMgNoTyBSkJ44NIGQUE+KFhzQil/1OrvAZhBWg4o4uTHMYCSE08RmhwKFAjuX2AhissrOXxBgGZWfo/Me1mYko5ohvhw7esmAlNu/+RwvUdWiWwCkn9bmLT8TtoGjVGS68wcAZHU5n2NTcTgXoP2fuC0CCCeT0UGkwupBqcBjWsHMnwPWgWnx2t8wgCgACiadtiyIXGqKPp5OgEaCUJKyY/EFNh0tvR6O27B9AKGNZOEYCKfSCmUqZFGxEZb/iPCi6g1QUFULYAmjwILCDXXkodjQ3A5GCOcoCKKyB1sGEd7gkD4WgBNAcX4OhPMyB13hvQQpxke6lVTv8nt4k2kBmREakVzIBUahxAYoPwgsFcI+Iz9CO0NKHZ+AMlIY/e7YUNo422PYado5F7LkpI6TYNiW2M1IQHDbzdRerl/IeKMTAg5kgY0DJpOa1qRNB4+UxoT2g3WhkMG0cHja3fheJQqB6YGth4O0h/B1pZXY6k32XAxkcHW5o2RopOFyi7HK0TForUYWNAY4ciqVeCYmMkPTRpMJVDozUNiQ2L/v9obZPdSPK7sci7IHXK6VqNjxZ5w9LRAAHYt3achoEgOjdAnIDIJ7BkelxwACjoqeAIpjRdSlpoSE2a9CnwASzBBfhdAPkGJqPMiOfRGmHir9iVVrYzjvdpMzvZeW/s3cOD9qA96HGBTmHjPxnQDPix7dywzzjNdBhXKuxJ8vs8hpme1SS22mNJZE83/Ykc9Vp902I3jiqKuuIHJHfCXcZtmxZT4Mw0ZUKFKUVWGprsz+O2TSGsxB0WwqS+GZ5D9ecPoRPiMUSPAqjfBfAfBfhyKuvgaCifrqN51dcLuC8Wd8FkOByCgCwklNUxS/zwa9oS6vdULVHIpKd9z7SlejNjj83MWso3GyJ6YGTQdt7CMzsHzf3dAF+B7QR8e1SgVY6wLa2RNnbqbe89eMEdNKSBB4/TM4kWk83GXbO+swrQ19Y0hL/2wvMeHrQH/c9Av1D1pRet4+KWwI6OzPkxVUvj1BYYW0JNSioasv+fsFNLhPlPhOFXQWgu53P43tqIQLl5LqoGQVt7DwWUmwFyGfQMgLlkikCkDpctcWxdf8TzW/e4kJ+PK/BYBzykbal7JPblpr/Kz7wUGx/3xaW4NPCOvkvkr8gtCvEYl/7PZeqgUSdUDVErQvG9D3UtPOp3AhN9OpOZCVb3rWMBBWZBEly7Pg9gcUZdZy6lCX/cHiAS2KhQOjRwMsJpp+lWYmJzCYOT49o10/b+COxesfWgPWgPuqP2JUB7V6ykNgxE9QcHfMGF+4BchvuAZIbUSXNpQ0UbOihTQkfKo3JamlzPFaTHM/yAib8AyBc4s8Pu+LGRjW/w5Xzx7oxmQCvL+Elar6Sn5UVaD+sdJga0AW1AmxjQBvSTyld3zCCR02BEH+i5EjZEzL3zi2ziUPqgdLS1NnUlbe7UDWiKgjXgz2tOS3fY8hNpMMCf+ftvviYw03EAAY94ZZmAe5fG86HeTLSRX3BtzPlkRmgH+5VL6SUSdur55KkZGTnpbZIt6wyiXF5dsaLINIA+I7yI+JH1VpLkUQYpJMlhuGQ1TqDAC5QOg8YkwPyqDdBFZHmC6IXg7RVNbg35DQ919NKAzjYfgWoEAfYaRsjSU37v4TbGdQF6kANyfKInT1XZhurF956eHXgauVcHoJ2HqJcoU3BqeC9VwzQ8dvijZ8tsWsA0lZqq4EeTf/wjR/+9gGsmLqHwsi9dyhKWWaW4kjGX39d1wkL+8esc/TeYsNhax5lT6jfuOMQxyheYmGCs5J5nDSSoGtBVnYJf87C/OLOeImbH1jrYli5PmJRCz2mmI1/23LsJqHfuEMf4sfLTevT53oqkiwyzMajKUqnRDcx0GNAmBrQBXXsp+0A7HU64dWlocjnEgCKs8wnkEZO9A3lUB7HVKVxxqMqE7jiMcdulzPgd33Pn0VPezHMNityro37f+VLyKtUQGPZt4HCLfs4B3Fb8WZPSMZBbE/QdILzrqF1DKNv36Ldw3TBjXdxHkK/8MmmiQpw11QO0PY2A7P9IgSxg3cERiS3ouuqeY0/DZjVCHtALTluooxKxMMhcrHh4bvh736Vnn8acLzEVN5z3oKbKdA2djRrx8J1zXTTcF3CvOegnbBrkEE0I5iGE63b8uVXgeR6UaWsqk2QTFvM6DGiT/wVoOYqMaZyjw7+z6Ht0K3AhF+7vfwBZKHu+8tTRB/ubgB2OVP2V9KOzZMIvpQ6Ap2UEwPRdeoiYGuRK+eN3DEgL/OKh8p2lfMQv4xulj/heITQ4gf1evQhfFNBOTTR2DNZMNQaCdgtgdVXZrgJ+45kAoU7/2UsXdOhliDdzdY6H8Zymo83A4rD9pB5UdBE/9Ix7YotHAobVHqkemic3XF7Mx5bra3H92BGk7Bbc0FLE3DvzOgxoEwPagDagDYJ/I38A7LNVvVE9i8UAAAAASUVORK5CYII=);")
        }, function() {
            $(this).trigger("stopRumble"), $("#caller_widget_button_icon").css("background", "url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAFPr3GUAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABc9JREFUeNpi/P//PwMpgImBREBVDf+J1fABSjdiNwboaSQMA8hiDsh8FjT9jEhOeQDE8lAxOGDBYilM00coZiCkAd0mojQwoDuFfhEHEECMpKQlJpo5BZfiD0jJAqeb/yMF33/04MSV0BKITWQfkPgHkBMdrgT2H1uMMuGI8oeDOFIAAoiR1HKGpil1yBp+gFBZSKzhD5ASGCxT2EPFGYiyBC15I2MDLGWqAJTvgMRmwFLugjExqQWm4CAQO5AShizEJFckS9BdAspmCpQYjreYHp7pHCCAaJb9mYZccIwaTJbBB5ByowA1DQaVeoHQ3FhAqFgl1Db9j5a9NyC5mBGf4cS4GKY5AamdcgGIFwBxIhAbkFpO/0crpwPQymS8ZTQxBi9AE0OmF6C1h4gy2AFHa/0/mgUO5NQq/8ktmwlFHiOaJQ04ahayi01QDc5PSg1Dann8n1iDWUgsAhhHS7cRYDBAANG09T8kG0Sjjh519DByNKw2A7XSAqhvOu4GATVxA1JD4gKl5rFQ4N8FSA09QjXxR6RKVADXiBEtQ9rhPyZAb9cVIDUu0ce/LuAZIyMKk+NofABfshCAim1A4+PSS1VHHyAipP9jcSyy4xywyC2gpaMZiAxlBiwO+g8NaXRPNJAS2pS0PUC9K300MZLHmwaqwYTNgI9ovWdYx+EjMb1qerbySDGIIsdTs0ZkhOKJRKjlZ8AyGzGQ1XgBkgcYoSMKyDMKiVBxgcGQPEZbeaOOHnU0mQAgALtme4MgDIThjoATiBvUDXQDR8AJXIER2ECcQEbQCXAENpAN0MZruDTHV2kLJtekP1ogeQp3R++9siMyNEMzNEMzNEMzNKHjqZ65yAlDQD+hq3b59rdoy2x/s2GKxU893cJ4D/LDqt50BV2bRgXgG7heila8tDRAO4VJnziSA/qdbim6XsyVfG0eig0gOXBvTUhnObGY4KqpJN521LFQPf8yxsKnltf1AHYwfI86C1IY850nQkM7YmmoTTuQv+5oMRpOq0tHFGG8OmIzwkSw1pwYjneCcWxbDfBh09h+CyOiUKBZiErAWEFdR4iMENFNULwgL9AJAf0YKHXo4pEJissX6RLlC9lzrySOTeFDSX0Ld1a+iGAjRGnUq92a1hB/qRgerRVawA/jRsyrL5CgsUT7a+lmxz6/7p33xO7DBNsXvh1xCnjjGtxlEqBM4jolAVlL5tIVVZxCu85catFWtPraeWlHHEoYihF/zsVsmsUahmZohmZohmbooO0jQHtnf9sgDERxb1A2KBuEEdIJmg1CJ2iyARs0I9AN6AYewdmAbkA3qCyuinGxMV8Gw3tSJRTdH/Uv5myfn50gh3GAhgAaoAEaAmiAhgAaoAEa2iHoo/IsfQwVQM8jl3/yi9UbmjlATye5c5ZQT5cnpA8tMdLJk7HaXgfQMyglwM/a59cloYdScuSs6Q9W/zhr+hxk6ohZve0qjXZ3+vxDiY+8t8DTPQIms1PV04IQk/8iUyyTukrDZUe6NSL32HZvoHmH36Ma6fmICH7V4lqLOoAftwK6j8nGBly3YQt6S9piby2xkcURfdsC6CEShrRhSxlFS+/Vv5zU8qZxgLanjKKj90aUt025mfvI22sDbUsdhRaXdgy2WQ+g6hdxChV05gi5a1BKDAOe3vuFI9DUcClwueVZxxC3qT7IxgbYrkD5nDMRn/NoV9iXgTdWVSOBZpa0E5w9Uy6B3x3i7lTHcKnSxexx8kit7MkV4pme5Smmkp4v7HGDXK4Uof7qJ7NUCJeodSS0DH5yiP1kph8ZCExL1DoE9Z6rQ+yZ6hOCdZ/PiKi3cnpz4nUVej2u9yc6nsG1gS9pmYlMtbQPNkfbpObUqfVDOV8s1bg11qNdB8yggK+58J9QLz/M0W4U/puDZkJQXpQC/li9LdGYULeyTjTte3WM/6Z4jhw9rWL2/5eRsDm7BwE0QAM0BNAADdAADdAADQE0QO9dv8tDIsVOffySAAAAAElFTkSuQmCC);")
        }), $("#caller_widget").delay(2500).fadeIn("slow"), $("#caller_close").click(function() {
            $("#callerModal").modal("hide")
        })
    });
var checkPhoneByMask, technobit_DelayXhr;
$(document).ready(function() {
    window.location.hostname;
    technobit_DelayXhr = function() {
        var t = 0;
        return function(e, i) {
            clearTimeout(t), t = setTimeout(e, i)
        }
    }(), (new function() {
        this.init = function() {
            var t = /[ \(\)-]+/g;
            try {
                var e = $(".footer-phone a").first().text().replace(t, "").substr(2),
                    i = "+7 (" + e.substr(0, 3) + ") " + e.substr(3, 3) + "-" + e.substr(6, 2) + "-" + e.substr(8)
            } catch (t) {
                console.log(t), i = 0
            }
            $(".phone-common").text(i), $("span.title_short").text("Технобыт"), $("span.email_addr").text("service@technobit24.ru"), $("span.address-common").text("г. Москва, Площадь Победы, д. 1Е. (В здании Дома быта).")
        }
    }).init(), $("a.phone-c, a.phone-common").on("click touch tap", function() {
        var t = /[ \(\)-]+/g;
        $(this).prop("href", "tel:" + $(this).text().replace(t, ""))
    }), document.cookie = "_ct_sid=0";
    var t = setInterval(function() {
        var e = document.getElementsByTagName("script");
        for (var i in e)
            if (e[i].src && e[i].src.indexOf("calltouch") > -1) {
                clearInterval(t);
                try {
                    setTimeout(function() {
                        var t = window.call_value;
                        "undefined" == t && (t = 0), document.cookie = "_ct_sid=" + t
                    }, 1e3)
                } catch (t) {
                    console.log(t)
                }
            }
    }, 1e3);
    try {
        $("#accordion").dcAccordion({})
    } catch (t) {
        console.log(t.message)
    }
    $(".tabs-table-failure a").click(function() {
        $("html, body").stop().animate({
            scrollLeft: 0,
            scrollTop: $(".section_form_order_n").offset().top
        }, 500)
    }), checkPhoneByMask = new Inputmask({
        mask: "8 (999) 999-99-99",
        showMaskOnHover: !1,
        removeMaskOnSubmit: !0
    }), $(document).on("focusin", '#order_phone,#phone_number_top_nav,#phone_number,#caller_phone,#form-order-phone,#order_phone_middle,#form-modal-text-input-phone,input[name="phone"]', function() {
        checkPhoneByMask.mask($(this))
    }), $("#myCarousel").on("slid.bs.carousel", function() {
        $(".sliderbg").hasClass("sliderbg1") ? $(".sliderbg").removeClass("sliderbg1") : $(".sliderbg").addClass("sliderbg1")
    }), -1 != window.location.pathname.indexOf("about/conditions.html") && $(".how_to_order").css({
        display: "block"
    });
    $(".locations").find("ul").each(function() {
        var t = $(this).find("li").size();
        t >= 32 && ($(this).find("li").slice(32, t).hide(), $(this).append('<div class="more">Посмотреть все</div>')), $(".more").on("click", function() {
            $(this).parent().find("li").slice(32, t).show(), $(this).hide()
        })
    }), $(".seo-text-show").on("click", function() {
        $(".seo-text-hidden, .locations, .how_to_order, .what_to_do").show(), $(this).hide()
    }), $(".all-brands-show").on("click", function() {
        $("section.brend a, section.brend p").each(function(t) {
            t > 4 && $(this).toggle()
        }), $(this).toggleClass("active")
    }), $(".nav_mob button").click(function() {
        $(".nav_mob ul").slideToggle("slow")
    }), $(function() {
        $(".brend_ul").autocolumnlist({
            columns: 2
        })
    }), $(window).scroll(function() {
        var t = $("#order_phone_form");
        $(this).scrollTop() >= 280 ? $("#top-bar").css({
            display: "block",
            position: "fixed",
            right: "422px",
            "z-index": "5000"
        }) : ($("#top-bar").css("display", "none"), t.css({
            position: "absolute",
            right: "unset",
            "z-index": "5000",
            top: "155px"
        }))
    }), $window = $(window), $('[data-type="background"]').each(function() {
        var t = $(this),
            e = -1 * t.data("maxheight"),
            i = t.data("minus");
        void 0 === i && (i = 0), $(window).scroll(function() {
            var n = -($window.scrollTop() + i) / t.data("speed");
            n < e && (n = e);
            var s = "50% " + n + "px";
            t.css({
                backgroundPosition: s
            })
        })
    }), document.createElement("section"), $(document).on("click touch tap", ".call-master34", function(t) {
        t.preventDefault();
        var e = $(this).closest("form"),
            i = {
                phone: {
                    selector: "input[name='phone']",
                    value: ""
                },
                name: {
                    selector: "input[name='name']",
                    value: ""
                },
                message: {
                    selector: "textarea[name='message']",
                    value: ""
                }
            };
        for (var n in i) i.hasOwnProperty(n) && e.find(i[n].selector).val() && (i[n].value = e.find(i[n].selector).val().trim());
        if (!checkPhoneByMask.mask(i.phone.selector).isValid(i.phone.value)) return e.find(i.phone.selector).addClass("form-error-border"), e.find("#phone_number_top_nav").addClass("form-error-background"), setTimeout(function() {
            e.find(i.phone.selector).removeClass("form-error-border"), e.find("#phone_number_top_nav").removeClass("form-error-background")
        }, 5e3), !1;
        $("[data-remodal-id=call-modal-form]").remodal().close();
        var s = ["name=", i.name.value, "&phone=", i.phone.value, "&text= ", i.message.value, "/Заказ звонка с сайта ", window.location.hostname].join("");
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "/order_ajax",
            data: s,
            success: function(t) {
                if (e.trigger("reset"), !0 === t.status) {
                    $("[data-remodal-id=call-modal-success]").remodal().open();
                    try {
                        yaCounter31960396.reachGoal("OrderDone"), ga("send", "event", "OrderDone", "Send")
                    } catch (t) {
                        console.log(t.message)
                    }
                } else $("[data-remodal-id=call-modal-error]").remodal().open()
            }
        })
    }), $(document).on("click touch tap", "#caller_button", function(t) {
        t.preventDefault();
        var e = $(this).closest("form"),
            i = {
                phone: {
                    selector: "input[name='phone']",
                    value: ""
                },
                name: {
                    selector: "input[name='name']",
                    value: ""
                },
                message: {
                    selector: "textarea[name='message']",
                    value: ""
                }
            };
        for (var n in i) i.hasOwnProperty(n) && e.find(i[n].selector).val() && (i[n].value = e.find(i[n].selector).val().trim());
        if (!checkPhoneByMask.mask(i.phone.selector).isValid(i.phone.value)) return e.find(i.phone.selector).addClass("form-error-border form-error-background"), setTimeout(function() {
            e.find(i.phone.selector).removeClass("form-error-border form-error-background")
        }, 5e3), !1;
        var s = ["name=", i.name.value, "&phone=", i.phone.value, "&text= ", i.message.value, "/Заказ звонка с сайта ", window.location.hostname].join("");
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "/order_ajax",
            data: s,
            success: function(t) {
                if (e.trigger("reset"), $("#callerModal p").html(t.order_info), $("#caller_widget").remove(), $.cookie("send", "1"), !0 === t.status) try {
                    yaCounter31960396.reachGoal("OrderDone"), ga("send", "event", "OrderDone", "Send")
                } catch (t) {
                    console.log(t.message)
                }
            }
        })
    }), window.REMODAL_GLOBALS = {
        NAMESPACE: "modal",
        DEFAULTS: {
            hashTracking: !1
        }
    }, $("#order_phone_top, .phone_close, #order_phone_top_navigation, .order_phone_top").click(function() {
        return $("#order_phone_form").toggle("fade", 500), !1
    });
    try {
        lightbox.option({
            resizeDuration: 200,
            imageFadeDuration: 300,
            wrapAround: !0
        })
    } catch (t) {
        console.log(t.message)
    }
    $("ul#accordion-info").dcAccordion({
        addCount: !1,
        classParent: "accordion__parent",
        classActive: "accordion__active-elem",
        classExpand: "accordion__parent_current-parent",
        eventType: "click",
        hoverDelay: 300,
        menuClose: !0,
        autoClose: !0,
        autoExpand: !1,
        speed: "middle",
        saveState: !0,
        disableLink: !0,
        showCount: !1,
        cookie: "dcjq-accordion"
    }), $(".click_block").click(function() {
        hiddenelement = $(this).data("top"), $(".top-body").css("display", "none"), $(hiddenelement).css("display", "block"), $(".click_block").removeClass("active"), $(this).addClass("active")
    });
    $('#nav-icon3').click(function(){
        $(this).toggleClass('open');
        $( ".top_menu_big" ).slideToggle( "slow" );
    });
});