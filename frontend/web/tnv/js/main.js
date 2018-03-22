if (+function (a) {
    "use strict";
    var b = a.fn.jquery.split(" ")[0].split(".");
    if (b[0] < 2 && b[1] < 9 || 1 == b[0] && 9 == b[1] && b[2] < 1 || b[0] > 2)
        throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 3")
}(jQuery), +function (a) {
    "use strict";
    function b() {
        var a = document.createElement("bootstrap"),
                b = {
                    WebkitTransition: "webkitTransitionEnd",
                    MozTransition: "transitionend",
                    OTransition: "oTransitionEnd otransitionend",
                    transition: "transitionend"
                };
        for (var c in b)
            if (void 0 !== a.style[c])
                return {
                    end: b[c]
                };
        return !1
    }
    a.fn.emulateTransitionEnd = function (b) {
        var c = !1,
                d = this;
        a(this).one("bsTransitionEnd", function () {
            c = !0
        });
        var e = function () {
            c || a(d).trigger(a.support.transition.end)
        };
        return setTimeout(e, b), this
    }, a(function () {
        a.support.transition = b(), a.support.transition && (a.event.special.bsTransitionEnd = {
            bindType: a.support.transition.end,
            delegateType: a.support.transition.end,
            handle: function (b) {
                return a(b.target).is(this) ? b.handleObj.handler.apply(this, arguments) : void 0
            }
        })
    })
}(jQuery), +function (a) {
    "use strict";
    function b(b) {
        return this.each(function () {
            var c = a(this),
                    e = c.data("bs.alert");
            e || c.data("bs.alert", e = new d(this)), "string" == typeof b && e[b].call(c)
        })
    }
    var c = '[data-dismiss="alert"]',
            d = function (b) {
                a(b).on("click", c, this.close)
            };
    d.VERSION = "3.3.6", d.TRANSITION_DURATION = 150, d.prototype.close = function (b) {
        function c() {
            g.detach().trigger("closed.bs.alert").remove()
        }
        var e = a(this),
                f = e.attr("data-target");
        f || (f = e.attr("href"), f = f && f.replace(/.*(?=#[^\s]*$)/, ""));
        var g = a(f);
        b && b.preventDefault(), g.length || (g = e.closest(".alert")), g.trigger(b = a.Event("close.bs.alert")), b.isDefaultPrevented() || (g.removeClass("in"), a.support.transition && g.hasClass("fade") ? g.one("bsTransitionEnd", c).emulateTransitionEnd(d.TRANSITION_DURATION) : c())
    };
    var e = a.fn.alert;
    a.fn.alert = b, a.fn.alert.Constructor = d, a.fn.alert.noConflict = function () {
        return a.fn.alert = e, this
    }, a(document).on("click.bs.alert.data-api", c, d.prototype.close)
}(jQuery), +function (a) {
    "use strict";
    function b(b) {
        return this.each(function () {
            var d = a(this),
                    e = d.data("bs.button"),
                    f = "object" == typeof b && b;
            e || d.data("bs.button", e = new c(this, f)), "toggle" == b ? e.toggle() : b && e.setState(b)
        })
    }
    var c = function (b, d) {
        this.$element = a(b), this.options = a.extend({}, c.DEFAULTS, d), this.isLoading = !1
    };
    c.VERSION = "3.3.6", c.DEFAULTS = {
        loadingText: "loading..."
    }, c.prototype.setState = function (b) {
        var c = "disabled",
                d = this.$element,
                e = d.is("input") ? "val" : "html",
                f = d.data();
        b += "Text", null == f.resetText && d.data("resetText", d[e]()), setTimeout(a.proxy(function () {
            d[e](null == f[b] ? this.options[b] : f[b]), "loadingText" == b ? (this.isLoading = !0, d.addClass(c).attr(c, c)) : this.isLoading && (this.isLoading = !1, d.removeClass(c).removeAttr(c))
        }, this), 0)
    }, c.prototype.toggle = function () {
        var a = !0,
                b = this.$element.closest('[data-toggle="buttons"]');
        if (b.length) {
            var c = this.$element.find("input");
            "radio" == c.prop("type") ? (c.prop("checked") && (a = !1), b.find(".active").removeClass("active"), this.$element.addClass("active")) : "checkbox" == c.prop("type") && (c.prop("checked") !== this.$element.hasClass("active") && (a = !1), this.$element.toggleClass("active")), c.prop("checked", this.$element.hasClass("active")), a && c.trigger("change")
        } else
            this.$element.attr("aria-pressed", !this.$element.hasClass("active")), this.$element.toggleClass("active")
    };
    var d = a.fn.button;
    a.fn.button = b, a.fn.button.Constructor = c, a.fn.button.noConflict = function () {
        return a.fn.button = d, this
    }, a(document).on("click.bs.button.data-api", '[data-toggle^="button"]', function (c) {
        var d = a(c.target);
        d.hasClass("btn") || (d = d.closest(".btn")), b.call(d, "toggle"), a(c.target).is('input[type="radio"]') || a(c.target).is('input[type="checkbox"]') || c.preventDefault()
    }).on("focus.bs.button.data-api blur.bs.button.data-api", '[data-toggle^="button"]', function (b) {
        a(b.target).closest(".btn").toggleClass("focus", /^focus(in)?$/.test(b.type))
    })
}(jQuery), +function (a) {
    "use strict";
    function b(b) {
        return this.each(function () {
            var d = a(this),
                    e = d.data("bs.carousel"),
                    f = a.extend({}, c.DEFAULTS, d.data(), "object" == typeof b && b),
                    g = "string" == typeof b ? b : f.slide;
            e || d.data("bs.carousel", e = new c(this, f)), "number" == typeof b ? e.to(b) : g ? e[g]() : f.interval && e.pause().cycle()
        })
    }
    var c = function (b, c) {
        this.$element = a(b), this.$indicators = this.$element.find(".carousel-indicators"), this.options = c, this.paused = null, this.sliding = null, this.interval = null, this.$active = null, this.$items = null, this.options.keyboard && this.$element.on("keydown.bs.carousel", a.proxy(this.keydown, this)), "hover" == this.options.pause && !("ontouchstart" in document.documentElement) && this.$element.on("mouseenter.bs.carousel", a.proxy(this.pause, this)).on("mouseleave.bs.carousel", a.proxy(this.cycle, this))
    };
    c.VERSION = "3.3.6", c.TRANSITION_DURATION = 600, c.DEFAULTS = {
        interval: 5e3,
        pause: "hover",
        wrap: !0,
        keyboard: !0
    }, c.prototype.keydown = function (a) {
        if (!/input|textarea/i.test(a.target.tagName)) {
            switch (a.which) {
                case 37:
                    this.prev();
                    break;
                case 39:
                    this.next();
                    break;
                default:
                    return
            }
            a.preventDefault()
        }
    }, c.prototype.cycle = function (b) {
        return b || (this.paused = !1), this.interval && clearInterval(this.interval), this.options.interval && !this.paused && (this.interval = setInterval(a.proxy(this.next, this), this.options.interval)), this
    }, c.prototype.getItemIndex = function (a) {
        return this.$items = a.parent().children(".item"), this.$items.index(a || this.$active)
    }, c.prototype.getItemForDirection = function (a, b) {
        var c = this.getItemIndex(b),
                d = "prev" == a && 0 === c || "next" == a && c == this.$items.length - 1;
        if (d && !this.options.wrap)
            return b;
        var e = "prev" == a ? -1 : 1,
                f = (c + e) % this.$items.length;
        return this.$items.eq(f)
    }, c.prototype.to = function (a) {
        var b = this,
                c = this.getItemIndex(this.$active = this.$element.find(".item.active"));
        return a > this.$items.length - 1 || 0 > a ? void 0 : this.sliding ? this.$element.one("slid.bs.carousel", function () {
            b.to(a)
        }) : c == a ? this.pause().cycle() : this.slide(a > c ? "next" : "prev", this.$items.eq(a))
    }, c.prototype.pause = function (b) {
        return b || (this.paused = !0), this.$element.find(".next, .prev").length && a.support.transition && (this.$element.trigger(a.support.transition.end), this.cycle(!0)), this.interval = clearInterval(this.interval), this
    }, c.prototype.next = function () {
        return this.sliding ? void 0 : this.slide("next")
    }, c.prototype.prev = function () {
        return this.sliding ? void 0 : this.slide("prev")
    }, c.prototype.slide = function (b, d) {
        var e = this.$element.find(".item.active"),
                f = d || this.getItemForDirection(b, e),
                g = this.interval,
                h = "next" == b ? "left" : "right",
                i = this;
        if (f.hasClass("active"))
            return this.sliding = !1;
        var j = f[0],
                k = a.Event("slide.bs.carousel", {
                    relatedTarget: j,
                    direction: h
                });
        if (this.$element.trigger(k), !k.isDefaultPrevented()) {
            if (this.sliding = !0, g && this.pause(), this.$indicators.length) {
                this.$indicators.find(".active").removeClass("active");
                var l = a(this.$indicators.children()[this.getItemIndex(f)]);
                l && l.addClass("active")
            }
            var m = a.Event("slid.bs.carousel", {
                relatedTarget: j,
                direction: h
            });
            return a.support.transition && this.$element.hasClass("slide") ? (f.addClass(b), f[0].offsetWidth, e.addClass(h), f.addClass(h), e.one("bsTransitionEnd", function () {
                f.removeClass([b, h].join(" ")).addClass("active"), e.removeClass(["active", h].join(" ")), i.sliding = !1, setTimeout(function () {
                    i.$element.trigger(m)
                }, 0)
            }).emulateTransitionEnd(c.TRANSITION_DURATION)) : (e.removeClass("active"), f.addClass("active"), this.sliding = !1, this.$element.trigger(m)), g && this.cycle(), this
        }
    };
    var d = a.fn.carousel;
    a.fn.carousel = b, a.fn.carousel.Constructor = c, a.fn.carousel.noConflict = function () {
        return a.fn.carousel = d, this
    };
    var e = function (c) {
        var d, e = a(this),
                f = a(e.attr("data-target") || (d = e.attr("href")) && d.replace(/.*(?=#[^\s]+$)/, ""));
        if (f.hasClass("carousel")) {
            var g = a.extend({}, f.data(), e.data()),
                    h = e.attr("data-slide-to");
            h && (g.interval = !1), b.call(f, g), h && f.data("bs.carousel").to(h), c.preventDefault()
        }
    };
    a(document).on("click.bs.carousel.data-api", "[data-slide]", e).on("click.bs.carousel.data-api", "[data-slide-to]", e), a(window).on("load", function () {
        a('[data-ride="carousel"]').each(function () {
            var c = a(this);
            b.call(c, c.data())
        })
    })
}(jQuery), +function (a) {
    "use strict";

    function b(b) {
        var c, d = b.attr("data-target") || (c = b.attr("href")) && c.replace(/.*(?=#[^\s]+$)/, "");
        return a(d)
    }

    function c(b) {
        return this.each(function () {
            var c = a(this),
                    e = c.data("bs.collapse"),
                    f = a.extend({}, d.DEFAULTS, c.data(), "object" == typeof b && b);
            !e && f.toggle && /show|hide/.test(b) && (f.toggle = !1), e || c.data("bs.collapse", e = new d(this, f)), "string" == typeof b && e[b]()
        })
    }
    var d = function (b, c) {
        this.$element = a(b), this.options = a.extend({}, d.DEFAULTS, c), this.$trigger = a('[data-toggle="collapse"][href="#' + b.id + '"],[data-toggle="collapse"][data-target="#' + b.id + '"]'), this.transitioning = null, this.options.parent ? this.$parent = this.getParent() : this.addAriaAndCollapsedClass(this.$element, this.$trigger), this.options.toggle && this.toggle()
    };
    d.VERSION = "3.3.6", d.TRANSITION_DURATION = 350, d.DEFAULTS = {
        toggle: !0
    }, d.prototype.dimension = function () {
        var a = this.$element.hasClass("width");
        return a ? "width" : "height"
    }, d.prototype.show = function () {
        if (!this.transitioning && !this.$element.hasClass("in")) {
            var b, e = this.$parent && this.$parent.children(".panel").children(".in, .collapsing");
            if (!(e && e.length && (b = e.data("bs.collapse"), b && b.transitioning))) {
                var f = a.Event("show.bs.collapse");
                if (this.$element.trigger(f), !f.isDefaultPrevented()) {
                    e && e.length && (c.call(e, "hide"), b || e.data("bs.collapse", null));
                    var g = this.dimension();
                    this.$element.removeClass("collapse").addClass("collapsing")[g](0).attr("aria-expanded", !0), this.$trigger.removeClass("collapsed").attr("aria-expanded", !0), this.transitioning = 1;
                    var h = function () {
                        this.$element.removeClass("collapsing").addClass("collapse in")[g](""), this.transitioning = 0, this.$element.trigger("shown.bs.collapse")
                    };
                    if (!a.support.transition)
                        return h.call(this);
                    var i = a.camelCase(["scroll", g].join("-"));
                    this.$element.one("bsTransitionEnd", a.proxy(h, this)).emulateTransitionEnd(d.TRANSITION_DURATION)[g](this.$element[0][i])
                }
            }
        }
    }, d.prototype.hide = function () {
        if (!this.transitioning && this.$element.hasClass("in")) {
            var b = a.Event("hide.bs.collapse");
            if (this.$element.trigger(b), !b.isDefaultPrevented()) {
                var c = this.dimension();
                this.$element[c](this.$element[c]())[0].offsetHeight, this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded", !1), this.$trigger.addClass("collapsed").attr("aria-expanded", !1), this.transitioning = 1;
                var e = function () {
                    this.transitioning = 0, this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")
                };
                return a.support.transition ? void this.$element[c](0).one("bsTransitionEnd", a.proxy(e, this)).emulateTransitionEnd(d.TRANSITION_DURATION) : e.call(this)
            }
        }
    }, d.prototype.toggle = function () {
        this[this.$element.hasClass("in") ? "hide" : "show"]()
    }, d.prototype.getParent = function () {
        return a(this.options.parent).find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]').each(a.proxy(function (c, d) {
            var e = a(d);
            this.addAriaAndCollapsedClass(b(e), e)
        }, this)).end()
    }, d.prototype.addAriaAndCollapsedClass = function (a, b) {
        var c = a.hasClass("in");
        a.attr("aria-expanded", c), b.toggleClass("collapsed", !c).attr("aria-expanded", c)
    };
    var e = a.fn.collapse;
    a.fn.collapse = c, a.fn.collapse.Constructor = d, a.fn.collapse.noConflict = function () {
        return a.fn.collapse = e, this
    }, a(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', function (d) {
        var e = a(this);
        e.attr("data-target") || d.preventDefault();
        var f = b(e),
                g = f.data("bs.collapse"),
                h = g ? "toggle" : e.data();
        c.call(f, h)
    })
}(jQuery), +function (a) {
    "use strict";

    function b(b) {
        var c = b.attr("data-target");
        c || (c = b.attr("href"), c = c && /#[A-Za-z]/.test(c) && c.replace(/.*(?=#[^\s]*$)/, ""));
        var d = c && a(c);
        return d && d.length ? d : b.parent()
    }

    function c(c) {
        c && 3 === c.which || (a(e).remove(), a(f).each(function () {
            var d = a(this),
                    e = b(d),
                    f = {
                        relatedTarget: this
                    };
            e.hasClass("open") && (c && "click" == c.type && /input|textarea/i.test(c.target.tagName) && a.contains(e[0], c.target) || (e.trigger(c = a.Event("hide.bs.dropdown", f)), c.isDefaultPrevented() || (d.attr("aria-expanded", "false"), e.removeClass("open").trigger(a.Event("hidden.bs.dropdown", f)))))
        }))
    }

    function d(b) {
        return this.each(function () {
            var c = a(this),
                    d = c.data("bs.dropdown");
            d || c.data("bs.dropdown", d = new g(this)), "string" == typeof b && d[b].call(c)
        })
    }
    var e = ".dropdown-backdrop",
            f = '[data-toggle="dropdown"]',
            g = function (b) {
                a(b).on("click.bs.dropdown", this.toggle)
            };
    g.VERSION = "3.3.6", g.prototype.toggle = function (d) {
        var e = a(this);
        if (!e.is(".disabled, :disabled")) {
            var f = b(e),
                    g = f.hasClass("open");
            if (c(), !g) {
                "ontouchstart" in document.documentElement && !f.closest(".navbar-nav").length && a(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(a(this)).on("click", c);
                var h = {
                    relatedTarget: this
                };
                if (f.trigger(d = a.Event("show.bs.dropdown", h)), d.isDefaultPrevented())
                    return;
                e.trigger("focus").attr("aria-expanded", "true"), f.toggleClass("open").trigger(a.Event("shown.bs.dropdown", h))
            }
            return !1
        }
    }, g.prototype.keydown = function (c) {
        if (/(38|40|27|32)/.test(c.which) && !/input|textarea/i.test(c.target.tagName)) {
            var d = a(this);
            if (c.preventDefault(), c.stopPropagation(), !d.is(".disabled, :disabled")) {
                var e = b(d),
                        g = e.hasClass("open");
                if (!g && 27 != c.which || g && 27 == c.which)
                    return 27 == c.which && e.find(f).trigger("focus"), d.trigger("click");
                var h = " li:not(.disabled):visible a",
                        i = e.find(".dropdown-menu" + h);
                if (i.length) {
                    var j = i.index(c.target);
                    38 == c.which && j > 0 && j--, 40 == c.which && j < i.length - 1 && j++, ~j || (j = 0), i.eq(j).trigger("focus")
                }
            }
        }
    };
    var h = a.fn.dropdown;
    a.fn.dropdown = d, a.fn.dropdown.Constructor = g, a.fn.dropdown.noConflict = function () {
        return a.fn.dropdown = h, this
    }, a(document).on("click.bs.dropdown.data-api", c).on("click.bs.dropdown.data-api", ".dropdown form", function (a) {
        a.stopPropagation()
    }).on("click.bs.dropdown.data-api", f, g.prototype.toggle).on("keydown.bs.dropdown.data-api", f, g.prototype.keydown).on("keydown.bs.dropdown.data-api", ".dropdown-menu", g.prototype.keydown)
}(jQuery), +function (a) {
    "use strict";

    function b(b, d) {
        return this.each(function () {
            var e = a(this),
                    f = e.data("bs.modal"),
                    g = a.extend({}, c.DEFAULTS, e.data(), "object" == typeof b && b);
            f || e.data("bs.modal", f = new c(this, g)), "string" == typeof b ? f[b](d) : g.show && f.show(d)
        })
    }
    var c = function (b, c) {
        this.options = c, this.$body = a(document.body), this.$element = a(b), this.$dialog = this.$element.find(".modal-dialog"), this.$backdrop = null, this.isShown = null, this.originalBodyPad = null, this.scrollbarWidth = 0, this.ignoreBackdropClick = !1, this.options.remote && this.$element.find(".modal-content").load(this.options.remote, a.proxy(function () {
            this.$element.trigger("loaded.bs.modal")
        }, this))
    };
    c.VERSION = "3.3.6", c.TRANSITION_DURATION = 300, c.BACKDROP_TRANSITION_DURATION = 150, c.DEFAULTS = {
        backdrop: !0,
        keyboard: !0,
        show: !0
    }, c.prototype.toggle = function (a) {
        return this.isShown ? this.hide() : this.show(a)
    }, c.prototype.show = function (b) {
        var d = this,
                e = a.Event("show.bs.modal", {
                    relatedTarget: b
                });
        this.$element.trigger(e), this.isShown || e.isDefaultPrevented() || (this.isShown = !0, this.checkScrollbar(), this.setScrollbar(), this.$body.addClass("modal-open"), this.escape(), this.resize(), this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', a.proxy(this.hide, this)), this.$dialog.on("mousedown.dismiss.bs.modal", function () {
            d.$element.one("mouseup.dismiss.bs.modal", function (b) {
                a(b.target).is(d.$element) && (d.ignoreBackdropClick = !0)
            })
        }), this.backdrop(function () {
            var e = a.support.transition && d.$element.hasClass("fade");
            d.$element.parent().length || d.$element.appendTo(d.$body), d.$element.show().scrollTop(0), d.adjustDialog(), e && d.$element[0].offsetWidth, d.$element.addClass("in"), d.enforceFocus();
            var f = a.Event("shown.bs.modal", {
                relatedTarget: b
            });
            e ? d.$dialog.one("bsTransitionEnd", function () {
                d.$element.trigger("focus").trigger(f)
            }).emulateTransitionEnd(c.TRANSITION_DURATION) : d.$element.trigger("focus").trigger(f)
        }))
    }, c.prototype.hide = function (b) {
        b && b.preventDefault(), b = a.Event("hide.bs.modal"), this.$element.trigger(b), this.isShown && !b.isDefaultPrevented() && (this.isShown = !1, this.escape(), this.resize(), a(document).off("focusin.bs.modal"), this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"), this.$dialog.off("mousedown.dismiss.bs.modal"), a.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", a.proxy(this.hideModal, this)).emulateTransitionEnd(c.TRANSITION_DURATION) : this.hideModal())
    }, c.prototype.enforceFocus = function () {
        a(document).off("focusin.bs.modal").on("focusin.bs.modal", a.proxy(function (a) {
            this.$element[0] === a.target || this.$element.has(a.target).length || this.$element.trigger("focus")
        }, this))
    }, c.prototype.escape = function () {
        this.isShown && this.options.keyboard ? this.$element.on("keydown.dismiss.bs.modal", a.proxy(function (a) {
            27 == a.which && this.hide()
        }, this)) : this.isShown || this.$element.off("keydown.dismiss.bs.modal")
    }, c.prototype.resize = function () {
        this.isShown ? a(window).on("resize.bs.modal", a.proxy(this.handleUpdate, this)) : a(window).off("resize.bs.modal")
    }, c.prototype.hideModal = function () {
        var a = this;
        this.$element.hide(), this.backdrop(function () {
            a.$body.removeClass("modal-open"), a.resetAdjustments(), a.resetScrollbar(), a.$element.trigger("hidden.bs.modal")
        })
    }, c.prototype.removeBackdrop = function () {
        this.$backdrop && this.$backdrop.remove(), this.$backdrop = null
    }, c.prototype.backdrop = function (b) {
        var d = this,
                e = this.$element.hasClass("fade") ? "fade" : "";
        if (this.isShown && this.options.backdrop) {
            var f = a.support.transition && e;
            if (this.$backdrop = a(document.createElement("div")).addClass("modal-backdrop " + e).appendTo(this.$body), this.$element.on("click.dismiss.bs.modal", a.proxy(function (a) {
                return this.ignoreBackdropClick ? void(this.ignoreBackdropClick = !1) : void(a.target === a.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus() : this.hide()))
            }, this)), f && this.$backdrop[0].offsetWidth, this.$backdrop.addClass("in"), !b)
                return;
            f ? this.$backdrop.one("bsTransitionEnd", b).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION) : b()
        } else if (!this.isShown && this.$backdrop) {
            this.$backdrop.removeClass("in");
            var g = function () {
                d.removeBackdrop(), b && b()
            };
            a.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", g).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION) : g()
        } else
            b && b()
    }, c.prototype.handleUpdate = function () {
        this.adjustDialog()
    }, c.prototype.adjustDialog = function () {
        var a = this.$element[0].scrollHeight > document.documentElement.clientHeight;
        this.$element.css({
            paddingLeft: !this.bodyIsOverflowing && a ? this.scrollbarWidth : "",
            paddingRight: this.bodyIsOverflowing && !a ? this.scrollbarWidth : ""
        })
    }, c.prototype.resetAdjustments = function () {
        this.$element.css({
            paddingLeft: "",
            paddingRight: ""
        })
    }, c.prototype.checkScrollbar = function () {
        var a = window.innerWidth;
        if (!a) {
            var b = document.documentElement.getBoundingClientRect();
            a = b.right - Math.abs(b.left)
        }
        this.bodyIsOverflowing = document.body.clientWidth < a, this.scrollbarWidth = this.measureScrollbar()
    }, c.prototype.setScrollbar = function () {
        var a = parseInt(this.$body.css("padding-right") || 0, 10);
        this.originalBodyPad = document.body.style.paddingRight || "", this.bodyIsOverflowing && this.$body.css("padding-right", a + this.scrollbarWidth)
    }, c.prototype.resetScrollbar = function () {
        this.$body.css("padding-right", this.originalBodyPad)
    }, c.prototype.measureScrollbar = function () {
        var a = document.createElement("div");
        a.className = "modal-scrollbar-measure", this.$body.append(a);
        var b = a.offsetWidth - a.clientWidth;
        return this.$body[0].removeChild(a), b
    };
    var d = a.fn.modal;
    a.fn.modal = b, a.fn.modal.Constructor = c, a.fn.modal.noConflict = function () {
        return a.fn.modal = d, this
    }, a(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function (c) {
        var d = a(this),
                e = d.attr("href"),
                f = a(d.attr("data-target") || e && e.replace(/.*(?=#[^\s]+$)/, "")),
                g = f.data("bs.modal") ? "toggle" : a.extend({
            remote: !/#/.test(e) && e
        }, f.data(), d.data());
        d.is("a") && c.preventDefault(), f.one("show.bs.modal", function (a) {
            a.isDefaultPrevented() || f.one("hidden.bs.modal", function () {
                d.is(":visible") && d.trigger("focus")
            })
        }), b.call(f, g, this)
    })
}(jQuery), +function (a) {
    "use strict";

    function b(b) {
        return this.each(function () {
            var d = a(this),
                    e = d.data("bs.tooltip"),
                    f = "object" == typeof b && b;
            (e || !/destroy|hide/.test(b)) && (e || d.data("bs.tooltip", e = new c(this, f)), "string" == typeof b && e[b]())
        })
    }
    var c = function (a, b) {
        this.type = null, this.options = null, this.enabled = null, this.timeout = null, this.hoverState = null, this.$element = null, this.inState = null, this.init("tooltip", a, b)
    };
    c.VERSION = "3.3.6", c.TRANSITION_DURATION = 150, c.DEFAULTS = {
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
    }, c.prototype.init = function (b, c, d) {
        if (this.enabled = !0, this.type = b, this.$element = a(c), this.options = this.getOptions(d), this.$viewport = this.options.viewport && a(a.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : this.options.viewport.selector || this.options.viewport), this.inState = {
            click: !1,
            hover: !1,
            focus: !1
        }, this.$element[0] instanceof document.constructor && !this.options.selector)
            throw new Error("`selector` option must be specified when initializing " + this.type + " on the window.document object!");
        for (var e = this.options.trigger.split(" "), f = e.length; f--; ) {
            var g = e[f];
            if ("click" == g)
                this.$element.on("click." + this.type, this.options.selector, a.proxy(this.toggle, this));
            else if ("manual" != g) {
                var h = "hover" == g ? "mouseenter" : "focusin",
                        i = "hover" == g ? "mouseleave" : "focusout";
                this.$element.on(h + "." + this.type, this.options.selector, a.proxy(this.enter, this)), this.$element.on(i + "." + this.type, this.options.selector, a.proxy(this.leave, this))
            }
        }
        this.options.selector ? this._options = a.extend({}, this.options, {
            trigger: "manual",
            selector: ""
        }) : this.fixTitle()
    }, c.prototype.getDefaults = function () {
        return c.DEFAULTS
    }, c.prototype.getOptions = function (b) {
        return b = a.extend({}, this.getDefaults(), this.$element.data(), b), b.delay && "number" == typeof b.delay && (b.delay = {
            show: b.delay,
            hide: b.delay
        }), b
    }, c.prototype.getDelegateOptions = function () {
        var b = {},
                c = this.getDefaults();
        return this._options && a.each(this._options, function (a, d) {
            c[a] != d && (b[a] = d)
        }), b
    }, c.prototype.enter = function (b) {
        var c = b instanceof this.constructor ? b : a(b.currentTarget).data("bs." + this.type);
        return c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c)), b instanceof a.Event && (c.inState["focusin" == b.type ? "focus" : "hover"] = !0), c.tip().hasClass("in") || "in" == c.hoverState ? void(c.hoverState = "in") : (clearTimeout(c.timeout), c.hoverState = "in", c.options.delay && c.options.delay.show ? void(c.timeout = setTimeout(function () {
            "in" == c.hoverState && c.show()
        }, c.options.delay.show)) : c.show())
    }, c.prototype.isInStateTrue = function () {
        for (var a in this.inState)
            if (this.inState[a])
                return !0;
        return !1
    }, c.prototype.leave = function (b) {
        var c = b instanceof this.constructor ? b : a(b.currentTarget).data("bs." + this.type);
        return c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c)), b instanceof a.Event && (c.inState["focusout" == b.type ? "focus" : "hover"] = !1), c.isInStateTrue() ? void 0 : (clearTimeout(c.timeout), c.hoverState = "out", c.options.delay && c.options.delay.hide ? void(c.timeout = setTimeout(function () {
            "out" == c.hoverState && c.hide()
        }, c.options.delay.hide)) : c.hide())
    }, c.prototype.show = function () {
        var b = a.Event("show.bs." + this.type);
        if (this.hasContent() && this.enabled) {
            this.$element.trigger(b);
            var d = a.contains(this.$element[0].ownerDocument.documentElement, this.$element[0]);
            if (b.isDefaultPrevented() || !d)
                return;
            var e = this,
                    f = this.tip(),
                    g = this.getUID(this.type);
            this.setContent(), f.attr("id", g), this.$element.attr("aria-describedby", g), this.options.animation && f.addClass("fade");
            var h = "function" == typeof this.options.placement ? this.options.placement.call(this, f[0], this.$element[0]) : this.options.placement,
                    i = /\s?auto?\s?/i,
                    j = i.test(h);
            j && (h = h.replace(i, "") || "top"), f.detach().css({
                top: 0,
                left: 0,
                display: "block"
            }).addClass(h).data("bs." + this.type, this), this.options.container ? f.appendTo(this.options.container) : f.insertAfter(this.$element), this.$element.trigger("inserted.bs." + this.type);
            var k = this.getPosition(),
                    l = f[0].offsetWidth,
                    m = f[0].offsetHeight;
            if (j) {
                var n = h,
                        o = this.getPosition(this.$viewport);
                h = "bottom" == h && k.bottom + m > o.bottom ? "top" : "top" == h && k.top - m < o.top ? "bottom" : "right" == h && k.right + l > o.width ? "left" : "left" == h && k.left - l < o.left ? "right" : h, f.removeClass(n).addClass(h)
            }
            var p = this.getCalculatedOffset(h, k, l, m);
            this.applyPlacement(p, h);
            var q = function () {
                var a = e.hoverState;
                e.$element.trigger("shown.bs." + e.type), e.hoverState = null, "out" == a && e.leave(e)
            };
            a.support.transition && this.$tip.hasClass("fade") ? f.one("bsTransitionEnd", q).emulateTransitionEnd(c.TRANSITION_DURATION) : q()
        }
    }, c.prototype.applyPlacement = function (b, c) {
        var d = this.tip(),
                e = d[0].offsetWidth,
                f = d[0].offsetHeight,
                g = parseInt(d.css("margin-top"), 10),
                h = parseInt(d.css("margin-left"), 10);
        isNaN(g) && (g = 0), isNaN(h) && (h = 0), b.top += g, b.left += h, a.offset.setOffset(d[0], a.extend({
            using: function (a) {
                d.css({
                    top: Math.round(a.top),
                    left: Math.round(a.left)
                })
            }
        }, b), 0), d.addClass("in");
        var i = d[0].offsetWidth,
                j = d[0].offsetHeight;
        "top" == c && j != f && (b.top = b.top + f - j);
        var k = this.getViewportAdjustedDelta(c, b, i, j);
        k.left ? b.left += k.left : b.top += k.top;
        var l = /top|bottom/.test(c),
                m = l ? 2 * k.left - e + i : 2 * k.top - f + j,
                n = l ? "offsetWidth" : "offsetHeight";
        d.offset(b), this.replaceArrow(m, d[0][n], l)
    }, c.prototype.replaceArrow = function (a, b, c) {
        this.arrow().css(c ? "left" : "top", 50 * (1 - a / b) + "%").css(c ? "top" : "left", "")
    }, c.prototype.setContent = function () {
        var a = this.tip(),
                b = this.getTitle();
        a.find(".tooltip-inner")[this.options.html ? "html" : "text"](b), a.removeClass("fade in top bottom left right")
    }, c.prototype.hide = function (b) {
        function d() {
            "in" != e.hoverState && f.detach(), e.$element.removeAttr("aria-describedby").trigger("hidden.bs." + e.type), b && b()
        }
        var e = this,
                f = a(this.$tip),
                g = a.Event("hide.bs." + this.type);
        return this.$element.trigger(g), g.isDefaultPrevented() ? void 0 : (f.removeClass("in"), a.support.transition && f.hasClass("fade") ? f.one("bsTransitionEnd", d).emulateTransitionEnd(c.TRANSITION_DURATION) : d(), this.hoverState = null, this)
    }, c.prototype.fixTitle = function () {
        var a = this.$element;
        (a.attr("title") || "string" != typeof a.attr("data-original-title")) && a.attr("data-original-title", a.attr("title") || "").attr("title", "")
    }, c.prototype.hasContent = function () {
        return this.getTitle()
    }, c.prototype.getPosition = function (b) {
        b = b || this.$element;
        var c = b[0],
                d = "BODY" == c.tagName,
                e = c.getBoundingClientRect();
        null == e.width && (e = a.extend({}, e, {
            width: e.right - e.left,
            height: e.bottom - e.top
        }));
        var f = d ? {
            top: 0,
            left: 0
        } : b.offset(),
                g = {
                    scroll: d ? document.documentElement.scrollTop || document.body.scrollTop : b.scrollTop()
                },
                h = d ? {
                    width: a(window).width(),
                    height: a(window).height()
                } : null;
        return a.extend({}, e, g, h, f)
    }, c.prototype.getCalculatedOffset = function (a, b, c, d) {
        return "bottom" == a ? {
            top: b.top + b.height,
            left: b.left + b.width / 2 - c / 2
        } : "top" == a ? {
            top: b.top - d,
            left: b.left + b.width / 2 - c / 2
        } : "left" == a ? {
            top: b.top + b.height / 2 - d / 2,
            left: b.left - c
        } : {
            top: b.top + b.height / 2 - d / 2,
            left: b.left + b.width
        }
    }, c.prototype.getViewportAdjustedDelta = function (a, b, c, d) {
        var e = {
            top: 0,
            left: 0
        };
        if (!this.$viewport)
            return e;
        var f = this.options.viewport && this.options.viewport.padding || 0,
                g = this.getPosition(this.$viewport);
        if (/right|left/.test(a)) {
            var h = b.top - f - g.scroll,
                    i = b.top + f - g.scroll + d;
            h < g.top ? e.top = g.top - h : i > g.top + g.height && (e.top = g.top + g.height - i)
        } else {
            var j = b.left - f,
                    k = b.left + f + c;
            j < g.left ? e.left = g.left - j : k > g.right && (e.left = g.left + g.width - k)
        }
        return e
    }, c.prototype.getTitle = function () {
        var a, b = this.$element,
                c = this.options;
        return a = b.attr("data-original-title") || ("function" == typeof c.title ? c.title.call(b[0]) : c.title)
    }, c.prototype.getUID = function (a) {
        do
            a += ~~(1e6 * Math.random());
        while (document.getElementById(a));
        return a
    }, c.prototype.tip = function () {
        if (!this.$tip && (this.$tip = a(this.options.template), 1 != this.$tip.length))
            throw new Error(this.type + " `template` option must consist of exactly 1 top-level element!");
        return this.$tip
    }, c.prototype.arrow = function () {
        return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow")
    }, c.prototype.enable = function () {
        this.enabled = !0
    }, c.prototype.disable = function () {
        this.enabled = !1
    }, c.prototype.toggleEnabled = function () {
        this.enabled = !this.enabled
    }, c.prototype.toggle = function (b) {
        var c = this;
        b && (c = a(b.currentTarget).data("bs." + this.type), c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c))), b ? (c.inState.click = !c.inState.click, c.isInStateTrue() ? c.enter(c) : c.leave(c)) : c.tip().hasClass("in") ? c.leave(c) : c.enter(c)
    }, c.prototype.destroy = function () {
        var a = this;
        clearTimeout(this.timeout), this.hide(function () {
            a.$element.off("." + a.type).removeData("bs." + a.type), a.$tip && a.$tip.detach(), a.$tip = null, a.$arrow = null, a.$viewport = null
        })
    };
    var d = a.fn.tooltip;
    a.fn.tooltip = b, a.fn.tooltip.Constructor = c, a.fn.tooltip.noConflict = function () {
        return a.fn.tooltip = d, this
    }
}(jQuery), +function (a) {
    "use strict";

    function b(b) {
        return this.each(function () {
            var d = a(this),
                    e = d.data("bs.popover"),
                    f = "object" == typeof b && b;
            (e || !/destroy|hide/.test(b)) && (e || d.data("bs.popover", e = new c(this, f)), "string" == typeof b && e[b]())
        })
    }
    var c = function (a, b) {
        this.init("popover", a, b)
    };
    if (!a.fn.tooltip)
        throw new Error("Popover requires tooltip.js");
    c.VERSION = "3.3.6", c.DEFAULTS = a.extend({}, a.fn.tooltip.Constructor.DEFAULTS, {
        placement: "right",
        trigger: "click",
        content: "",
        template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
    }), c.prototype = a.extend({}, a.fn.tooltip.Constructor.prototype), c.prototype.constructor = c, c.prototype.getDefaults = function () {
        return c.DEFAULTS
    }, c.prototype.setContent = function () {
        var a = this.tip(),
                b = this.getTitle(),
                c = this.getContent();
        a.find(".popover-title")[this.options.html ? "html" : "text"](b), a.find(".popover-content").children().detach().end()[this.options.html ? "string" == typeof c ? "html" : "append" : "text"](c), a.removeClass("fade top bottom left right in"), a.find(".popover-title").html() || a.find(".popover-title").hide()
    }, c.prototype.hasContent = function () {
        return this.getTitle() || this.getContent()
    }, c.prototype.getContent = function () {
        var a = this.$element,
                b = this.options;
        return a.attr("data-content") || ("function" == typeof b.content ? b.content.call(a[0]) : b.content)
    }, c.prototype.arrow = function () {
        return this.$arrow = this.$arrow || this.tip().find(".arrow")
    };
    var d = a.fn.popover;
    a.fn.popover = b, a.fn.popover.Constructor = c, a.fn.popover.noConflict = function () {
        return a.fn.popover = d, this
    }
}(jQuery), +function (a) {
    "use strict";

    function b(c, d) {
        this.$body = a(document.body), this.$scrollElement = a(a(c).is(document.body) ? window : c), this.options = a.extend({}, b.DEFAULTS, d), this.selector = (this.options.target || "") + " .nav li > a", this.offsets = [], this.targets = [], this.activeTarget = null, this.scrollHeight = 0, this.$scrollElement.on("scroll.bs.scrollspy", a.proxy(this.process, this)), this.refresh(), this.process()
    }

    function c(c) {
        return this.each(function () {
            var d = a(this),
                    e = d.data("bs.scrollspy"),
                    f = "object" == typeof c && c;
            e || d.data("bs.scrollspy", e = new b(this, f)), "string" == typeof c && e[c]()
        })
    }
    b.VERSION = "3.3.6", b.DEFAULTS = {
        offset: 10
    }, b.prototype.getScrollHeight = function () {
        return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight)
    }, b.prototype.refresh = function () {
        var b = this,
                c = "offset",
                d = 0;
        this.offsets = [], this.targets = [], this.scrollHeight = this.getScrollHeight(), a.isWindow(this.$scrollElement[0]) || (c = "position", d = this.$scrollElement.scrollTop()), this.$body.find(this.selector).map(function () {
            var b = a(this),
                    e = b.data("target") || b.attr("href"),
                    f = /^#./.test(e) && a(e);
            return f && f.length && f.is(":visible") && [
                [f[c]().top + d, e]
            ] || null
        }).sort(function (a, b) {
            return a[0] - b[0]
        }).each(function () {
            b.offsets.push(this[0]), b.targets.push(this[1])
        })
    }, b.prototype.process = function () {
        var a, b = this.$scrollElement.scrollTop() + this.options.offset,
                c = this.getScrollHeight(),
                d = this.options.offset + c - this.$scrollElement.height(),
                e = this.offsets,
                f = this.targets,
                g = this.activeTarget;
        if (this.scrollHeight != c && this.refresh(), b >= d)
            return g != (a = f[f.length - 1]) && this.activate(a);
        if (g && b < e[0])
            return this.activeTarget = null, this.clear();
        for (a = e.length; a--; )
            g != f[a] && b >= e[a] && (void 0 === e[a + 1] || b < e[a + 1]) && this.activate(f[a])
    }, b.prototype.activate = function (b) {
        this.activeTarget = b, this.clear();
        var c = this.selector + '[data-target="' + b + '"],' + this.selector + '[href="' + b + '"]',
                d = a(c).parents("li").addClass("active");
        d.parent(".dropdown-menu").length && (d = d.closest("li.dropdown").addClass("active")), d.trigger("activate.bs.scrollspy")
    }, b.prototype.clear = function () {
        a(this.selector).parentsUntil(this.options.target, ".active").removeClass("active")
    };
    var d = a.fn.scrollspy;
    a.fn.scrollspy = c, a.fn.scrollspy.Constructor = b, a.fn.scrollspy.noConflict = function () {
        return a.fn.scrollspy = d, this
    }, a(window).on("load.bs.scrollspy.data-api", function () {
        a('[data-spy="scroll"]').each(function () {
            var b = a(this);
            c.call(b, b.data())
        })
    })
}(jQuery), +function (a) {
    "use strict";

    function b(b) {
        return this.each(function () {
            var d = a(this),
                    e = d.data("bs.tab");
            e || d.data("bs.tab", e = new c(this)), "string" == typeof b && e[b]()
        })
    }
    var c = function (b) {
        this.element = a(b)
    };
    c.VERSION = "3.3.6", c.TRANSITION_DURATION = 150, c.prototype.show = function () {
        var b = this.element,
                c = b.closest("ul:not(.dropdown-menu)"),
                d = b.data("target");
        if (d || (d = b.attr("href"), d = d && d.replace(/.*(?=#[^\s]*$)/, "")), !b.parent("li").hasClass("active")) {
            var e = c.find(".active:last a"),
                    f = a.Event("hide.bs.tab", {
                        relatedTarget: b[0]
                    }),
                    g = a.Event("show.bs.tab", {
                        relatedTarget: e[0]
                    });
            if (e.trigger(f), b.trigger(g), !g.isDefaultPrevented() && !f.isDefaultPrevented()) {
                var h = a(d);
                this.activate(b.closest("li"), c), this.activate(h, h.parent(), function () {
                    e.trigger({
                        type: "hidden.bs.tab",
                        relatedTarget: b[0]
                    }), b.trigger({
                        type: "shown.bs.tab",
                        relatedTarget: e[0]
                    })
                })
            }
        }
    }, c.prototype.activate = function (b, d, e) {
        function f() {
            g.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !1), b.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded", !0), h ? (b[0].offsetWidth, b.addClass("in")) : b.removeClass("fade"), b.parent(".dropdown-menu").length && b.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !0), e && e()
        }
        var g = d.find("> .active"),
                h = e && a.support.transition && (g.length && g.hasClass("fade") || !!d.find("> .fade").length);
        g.length && h ? g.one("bsTransitionEnd", f).emulateTransitionEnd(c.TRANSITION_DURATION) : f(), g.removeClass("in")
    };
    var d = a.fn.tab;
    a.fn.tab = b, a.fn.tab.Constructor = c, a.fn.tab.noConflict = function () {
        return a.fn.tab = d, this
    };
    var e = function (c) {
        c.preventDefault(), b.call(a(this), "show")
    };
    a(document).on("click.bs.tab.data-api", '[data-toggle="tab"]', e).on("click.bs.tab.data-api", '[data-toggle="pill"]', e)
}(jQuery), +function (a) {
    "use strict";

    function b(b) {
        return this.each(function () {
            var d = a(this),
                    e = d.data("bs.affix"),
                    f = "object" == typeof b && b;
            e || d.data("bs.affix", e = new c(this, f)), "string" == typeof b && e[b]()
        })
    }
    var c = function (b, d) {
        this.options = a.extend({}, c.DEFAULTS, d), this.$target = a(this.options.target).on("scroll.bs.affix.data-api", a.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", a.proxy(this.checkPositionWithEventLoop, this)), this.$element = a(b), this.affixed = null, this.unpin = null, this.pinnedOffset = null, this.checkPosition()
    };
    c.VERSION = "3.3.6", c.RESET = "affix affix-top affix-bottom", c.DEFAULTS = {
        offset: 0,
        target: window
    }, c.prototype.getState = function (a, b, c, d) {
        var e = this.$target.scrollTop(),
                f = this.$element.offset(),
                g = this.$target.height();
        if (null != c && "top" == this.affixed)
            return c > e && "top";
        if ("bottom" == this.affixed)
            return null != c ? !(e + this.unpin <= f.top) && "bottom" : !(a - d >= e + g) && "bottom";
        var h = null == this.affixed,
                i = h ? e : f.top,
                j = h ? g : b;
        return null != c && c >= e ? "top" : null != d && i + j >= a - d && "bottom"
    }, c.prototype.getPinnedOffset = function () {
        if (this.pinnedOffset)
            return this.pinnedOffset;
        this.$element.removeClass(c.RESET).addClass("affix");
        var a = this.$target.scrollTop(),
                b = this.$element.offset();
        return this.pinnedOffset = b.top - a
    }, c.prototype.checkPositionWithEventLoop = function () {
        setTimeout(a.proxy(this.checkPosition, this), 1)
    }, c.prototype.checkPosition = function () {
        if (this.$element.is(":visible")) {
            var b = this.$element.height(),
                    d = this.options.offset,
                    e = d.top,
                    f = d.bottom,
                    g = Math.max(a(document).height(), a(document.body).height());
            "object" != typeof d && (f = e = d), "function" == typeof e && (e = d.top(this.$element)), "function" == typeof f && (f = d.bottom(this.$element));
            var h = this.getState(g, b, e, f);
            if (this.affixed != h) {
                null != this.unpin && this.$element.css("top", "");
                var i = "affix" + (h ? "-" + h : ""),
                        j = a.Event(i + ".bs.affix");
                if (this.$element.trigger(j), j.isDefaultPrevented())
                    return;
                this.affixed = h, this.unpin = "bottom" == h ? this.getPinnedOffset() : null, this.$element.removeClass(c.RESET).addClass(i).trigger(i.replace("affix", "affixed") + ".bs.affix")
            }
            "bottom" == h && this.$element.offset({
                top: g - b - f
            })
        }
    };
    var d = a.fn.affix;
    a.fn.affix = b, a.fn.affix.Constructor = c, a.fn.affix.noConflict = function () {
        return a.fn.affix = d, this
    }, a(window).on("load", function () {
        a('[data-spy="affix"]').each(function () {
            var c = a(this),
                    d = c.data();
            d.offset = d.offset || {}, null != d.offsetBottom && (d.offset.bottom = d.offsetBottom), null != d.offsetTop && (d.offset.top = d.offsetTop), b.call(c, d)
        })
    })
}(jQuery), function ($) {
    "use strict";

    function normalizeToBase(text) {
        var rExps = [{
                re: /[\xC0-\xC6]/g,
                ch: "A"
            }, {
                re: /[\xE0-\xE6]/g,
                ch: "a"
            }, {
                re: /[\xC8-\xCB]/g,
                ch: "E"
            }, {
                re: /[\xE8-\xEB]/g,
                ch: "e"
            }, {
                re: /[\xCC-\xCF]/g,
                ch: "I"
            }, {
                re: /[\xEC-\xEF]/g,
                ch: "i"
            }, {
                re: /[\xD2-\xD6]/g,
                ch: "O"
            }, {
                re: /[\xF2-\xF6]/g,
                ch: "o"
            }, {
                re: /[\xD9-\xDC]/g,
                ch: "U"
            }, {
                re: /[\xF9-\xFC]/g,
                ch: "u"
            }, {
                re: /[\xC7-\xE7]/g,
                ch: "c"
            }, {
                re: /[\xD1]/g,
                ch: "N"
            }, {
                re: /[\xF1]/g,
                ch: "n"
            }];
        return $.each(rExps, function () {
            text = text.replace(this.re, this.ch)
        }), text
    }

    function htmlEscape(html) {
        var escapeMap = {
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#x27;",
            "`": "&#x60;"
        },
                source = "(?:" + Object.keys(escapeMap).join("|") + ")",
                testRegexp = new RegExp(source),
                replaceRegexp = new RegExp(source, "g"),
                string = null == html ? "" : "" + html;
        return testRegexp.test(string) ? string.replace(replaceRegexp, function (match) {
            return escapeMap[match]
        }) : string
    }

    function Plugin(option, event) {
        var args = arguments,
                _option = option,
                _event = event;
        [].shift.apply(args);
        var value, chain = this.each(function () {
            var $this = $(this);
            if ($this.is("select")) {
                var data = $this.data("selectpicker"),
                        options = "object" == typeof _option && _option;
                if (data) {
                    if (options)
                        for (var i in options)
                            options.hasOwnProperty(i) && (data.options[i] = options[i])
                } else {
                    var config = $.extend({}, Selectpicker.DEFAULTS, $.fn.selectpicker.defaults || {}, $this.data(), options);
                    config.template = $.extend({}, Selectpicker.DEFAULTS.template, $.fn.selectpicker.defaults ? $.fn.selectpicker.defaults.template : {}, $this.data().template, options.template), $this.data("selectpicker", data = new Selectpicker(this, config, _event))
                }
                "string" == typeof _option && (value = data[_option] instanceof Function ? data[_option].apply(data, args) : data.options[_option])
            }
        });
        return "undefined" != typeof value ? value : chain
    }
    String.prototype.includes || !function () {
        var toString = {}.toString,
                defineProperty = function () {
                    try {
                        var object = {},
                                $defineProperty = Object.defineProperty,
                                result = $defineProperty(object, object, object) && $defineProperty
                    } catch (error) {
                    }
                    return result
                }(),
                indexOf = "".indexOf,
                includes = function (search) {
                    if (null == this)
                        throw new TypeError;
                    var string = String(this);
                    if (search && "[object RegExp]" == toString.call(search))
                        throw new TypeError;
                    var stringLength = string.length,
                            searchString = String(search),
                            searchLength = searchString.length,
                            position = arguments.length > 1 ? arguments[1] : void 0,
                            pos = position ? Number(position) : 0;
                    pos != pos && (pos = 0);
                    var start = Math.min(Math.max(pos, 0), stringLength);
                    return !(searchLength + start > stringLength) && indexOf.call(string, searchString, pos) != -1
                };
        defineProperty ? defineProperty(String.prototype, "includes", {
            value: includes,
            configurable: !0,
            writable: !0
        }) : String.prototype.includes = includes
    }(), String.prototype.startsWith || !function () {
        var defineProperty = function () {
            try {
                var object = {},
                        $defineProperty = Object.defineProperty,
                        result = $defineProperty(object, object, object) && $defineProperty
            } catch (error) {
            }
            return result
        }(),
                toString = {}.toString,
                startsWith = function (search) {
                    if (null == this)
                        throw new TypeError;
                    var string = String(this);
                    if (search && "[object RegExp]" == toString.call(search))
                        throw new TypeError;
                    var stringLength = string.length,
                            searchString = String(search),
                            searchLength = searchString.length,
                            position = arguments.length > 1 ? arguments[1] : void 0,
                            pos = position ? Number(position) : 0;
                    pos != pos && (pos = 0);
                    var start = Math.min(Math.max(pos, 0), stringLength);
                    if (searchLength + start > stringLength)
                        return !1;
                    for (var index = -1; ++index < searchLength; )
                        if (string.charCodeAt(start + index) != searchString.charCodeAt(index))
                            return !1;
                    return !0
                };
        defineProperty ? defineProperty(String.prototype, "startsWith", {
            value: startsWith,
            configurable: !0,
            writable: !0
        }) : String.prototype.startsWith = startsWith
    }(), Object.keys || (Object.keys = function (o, k, r) {
        r = [];
        for (k in o)
            r.hasOwnProperty.call(o, k) && r.push(k);
        return r
    }), $.fn.triggerNative = function (eventName) {
        var event, el = this[0];
        el.dispatchEvent ? ("function" == typeof Event ? event = new Event(eventName, {
            bubbles: !0
        }) : (event = document.createEvent("Event"), event.initEvent(eventName, !0, !1)), el.dispatchEvent(event)) : (el.fireEvent && (event = document.createEventObject(), event.eventType = eventName, el.fireEvent("on" + eventName, event)), this.trigger(eventName))
    }, $.expr[":"].icontains = function (obj, index, meta) {
        var $obj = $(obj),
                haystack = ($obj.data("tokens") || $obj.text()).toUpperCase();
        return haystack.includes(meta[3].toUpperCase())
    }, $.expr[":"].ibegins = function (obj, index, meta) {
        var $obj = $(obj),
                haystack = ($obj.data("tokens") || $obj.text()).toUpperCase();
        return haystack.startsWith(meta[3].toUpperCase())
    }, $.expr[":"].aicontains = function (obj, index, meta) {
        var $obj = $(obj),
                haystack = ($obj.data("tokens") || $obj.data("normalizedText") || $obj.text()).toUpperCase();
        return haystack.includes(meta[3].toUpperCase())
    }, $.expr[":"].aibegins = function (obj, index, meta) {
        var $obj = $(obj),
                haystack = ($obj.data("tokens") || $obj.data("normalizedText") || $obj.text()).toUpperCase();
        return haystack.startsWith(meta[3].toUpperCase())
    };
    var Selectpicker = function (element, options, e) {
        e && (e.stopPropagation(), e.preventDefault()), this.$element = $(element), this.$newElement = null, this.$button = null, this.$menu = null, this.$lis = null, this.options = options, null === this.options.title && (this.options.title = this.$element.attr("title")), this.val = Selectpicker.prototype.val, this.render = Selectpicker.prototype.render, this.refresh = Selectpicker.prototype.refresh, this.setStyle = Selectpicker.prototype.setStyle, this.selectAll = Selectpicker.prototype.selectAll, this.deselectAll = Selectpicker.prototype.deselectAll, this.destroy = Selectpicker.prototype.destroy, this.remove = Selectpicker.prototype.remove, this.show = Selectpicker.prototype.show, this.hide = Selectpicker.prototype.hide, this.init()
    };
    Selectpicker.VERSION = "1.10.0", Selectpicker.DEFAULTS = {
        noneSelectedText: "Nothing selected",
        noneResultsText: "No results matched {0}",
        countSelectedText: function (numSelected, numTotal) {
            return 1 == numSelected ? "{0} item selected" : "{0} items selected"
        },
        maxOptionsText: function (numAll, numGroup) {
            return [1 == numAll ? "Limit reached ({n} item max)" : "Limit reached ({n} items max)", 1 == numGroup ? "Group limit reached ({n} item max)" : "Group limit reached ({n} items max)"]
        },
        selectAllText: "Select All",
        deselectAllText: "Deselect All",
        doneButton: !1,
        doneButtonText: "Close",
        multipleSeparator: ", ",
        styleBase: "btn",
        style: "btn-default",
        size: "auto",
        title: null,
        selectedTextFormat: "values",
        width: !1,
        container: !1,
        hideDisabled: !1,
        showSubtext: !1,
        showIcon: !0,
        showContent: !0,
        dropupAuto: !0,
        header: !1,
        liveSearch: !1,
        liveSearchPlaceholder: null,
        liveSearchNormalize: !1,
        liveSearchStyle: "contains",
        actionsBox: !1,
        iconBase: "glyphicon",
        tickIcon: "glyphicon-ok",
        showTick: !1,
        template: {
            caret: '<span class="caret"></span>'
        },
        maxOptions: !1,
        mobile: !1,
        selectOnTab: !1,
        dropdownAlignRight: !1
    }, Selectpicker.prototype = {
        constructor: Selectpicker,
        init: function () {
            var that = this,
                    id = this.$element.attr("id");
            this.$element.addClass("bs-select-hidden"), this.liObj = {}, this.multiple = this.$element.prop("multiple"), this.autofocus = this.$element.prop("autofocus"), this.$newElement = this.createView(), this.$element.after(this.$newElement).appendTo(this.$newElement), this.$button = this.$newElement.children("button"), this.$menu = this.$newElement.children(".dropdown-menu"), this.$menuInner = this.$menu.children(".inner"), this.$searchbox = this.$menu.find("input"), this.$element.removeClass("bs-select-hidden"), this.options.dropdownAlignRight && this.$menu.addClass("dropdown-menu-right"), "undefined" != typeof id && (this.$button.attr("data-id", id), $('label[for="' + id + '"]').click(function (e) {
                e.preventDefault(), that.$button.focus()
            })), this.checkDisabled(), this.clickListener(), this.options.liveSearch && this.liveSearchListener(), this.render(), this.setStyle(), this.setWidth(), this.options.container && this.selectPosition(), this.$menu.data("this", this), this.$newElement.data("this", this), this.options.mobile && this.mobile(), this.$newElement.on({
                "hide.bs.dropdown": function (e) {
                    that.$element.trigger("hide.bs.select", e)
                },
                "hidden.bs.dropdown": function (e) {
                    that.$element.trigger("hidden.bs.select", e)
                },
                "show.bs.dropdown": function (e) {
                    that.$element.trigger("show.bs.select", e)
                },
                "shown.bs.dropdown": function (e) {
                    that.$element.trigger("shown.bs.select", e)
                }
            }), that.$element[0].hasAttribute("required") && this.$element.on("invalid", function () {
                that.$button.addClass("bs-invalid").focus(), that.$element.on({
                    "focus.bs.select": function () {
                        that.$button.focus(), that.$element.off("focus.bs.select")
                    },
                    "shown.bs.select": function () {
                        that.$element.val(that.$element.val()).off("shown.bs.select")
                    },
                    "rendered.bs.select": function () {
                        this.validity.valid && that.$button.removeClass("bs-invalid"), that.$element.off("rendered.bs.select")
                    }
                })
            }), setTimeout(function () {
                that.$element.trigger("loaded.bs.select")
            })
        },
        createDropdown: function () {
            var showTick = this.multiple || this.options.showTick ? " show-tick" : "",
                    inputGroup = this.$element.parent().hasClass("input-group") ? " input-group-btn" : "",
                    autofocus = this.autofocus ? " autofocus" : "",
                    header = this.options.header ? '<div class="popover-title"><button type="button" class="close" aria-hidden="true">&times;</button>' + this.options.header + "</div>" : "",
                    searchbox = this.options.liveSearch ? '<div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off"' + (null === this.options.liveSearchPlaceholder ? "" : ' placeholder="' + htmlEscape(this.options.liveSearchPlaceholder) + '"') + "></div>" : "",
                    actionsbox = this.multiple && this.options.actionsBox ? '<div class="bs-actionsbox"><div class="btn-group btn-group-sm btn-block"><button type="button" class="actions-btn bs-select-all btn btn-default">' + this.options.selectAllText + '</button><button type="button" class="actions-btn bs-deselect-all btn btn-default">' + this.options.deselectAllText + "</button></div></div>" : "",
                    donebutton = this.multiple && this.options.doneButton ? '<div class="bs-donebutton"><div class="btn-group btn-block"><button type="button" class="btn btn-sm btn-default">' + this.options.doneButtonText + "</button></div></div>" : "",
                    drop = '<div class="btn-group bootstrap-select' + showTick + inputGroup + '"><button type="button" class="' + this.options.styleBase + ' dropdown-toggle" data-toggle="dropdown"' + autofocus + '><span class="filter-option pull-left"></span>&nbsp;<span class="bs-caret">' + this.options.template.caret + '</span></button><div class="dropdown-menu open">' + header + searchbox + actionsbox + '<ul class="dropdown-menu inner" role="menu"></ul>' + donebutton + "</div></div>";
            return $(drop)
        },
        createView: function () {
            var $drop = this.createDropdown(),
                    li = this.createLi();
            return $drop.find("ul")[0].innerHTML = li, $drop
        },
        reloadLi: function () {
            this.destroyLi();
            var li = this.createLi();
            this.$menuInner[0].innerHTML = li
        },
        destroyLi: function () {
            this.$menu.find("li").remove()
        },
        createLi: function () {
            var that = this,
                    _li = [],
                    optID = 0,
                    titleOption = document.createElement("option"),
                    liIndex = -1,
                    generateLI = function (content, index, classes, optgroup) {
                        return "<li" + ("undefined" != typeof classes & "" !== classes ? ' class="' + classes + '"' : "") + ("undefined" != typeof index & null !== index ? ' data-original-index="' + index + '"' : "") + ("undefined" != typeof optgroup & null !== optgroup ? 'data-optgroup="' + optgroup + '"' : "") + ">" + content + "</li>"
                    },
                    generateA = function (text, classes, inline, tokens) {
                        return '<a tabindex="0"' + ("undefined" != typeof classes ? ' class="' + classes + '"' : "") + ("undefined" != typeof inline ? ' style="' + inline + '"' : "") + (that.options.liveSearchNormalize ? ' data-normalized-text="' + normalizeToBase(htmlEscape(text)) + '"' : "") + ("undefined" != typeof tokens || null !== tokens ? ' data-tokens="' + tokens + '"' : "") + ">" + text + '<span class="' + that.options.iconBase + " " + that.options.tickIcon + ' check-mark"></span></a>'
                    };
            if (this.options.title && !this.multiple && (liIndex--, !this.$element.find(".bs-title-option").length)) {
                var element = this.$element[0];
                titleOption.className = "bs-title-option", titleOption.appendChild(document.createTextNode(this.options.title)), titleOption.value = "", element.insertBefore(titleOption, element.firstChild), void 0 === $(element.options[element.selectedIndex]).attr("selected") && (titleOption.selected = !0)
            }
            return this.$element.find("option").each(function (index) {
                var $this = $(this);
                if (liIndex++, !$this.hasClass("bs-title-option")) {
                    var optionClass = this.className || "",
                            inline = this.style.cssText,
                            text = $this.data("content") ? $this.data("content") : $this.html(),
                            tokens = $this.data("tokens") ? $this.data("tokens") : null,
                            subtext = "undefined" != typeof $this.data("subtext") ? '<small class="text-muted">' + $this.data("subtext") + "</small>" : "",
                            icon = "undefined" != typeof $this.data("icon") ? '<span class="' + that.options.iconBase + " " + $this.data("icon") + '"></span> ' : "",
                            isOptgroup = "OPTGROUP" === this.parentNode.tagName,
                            isDisabled = this.disabled || isOptgroup && this.parentNode.disabled;
                    if ("" !== icon && isDisabled && (icon = "<span>" + icon + "</span>"), that.options.hideDisabled && isDisabled && !isOptgroup)
                        return void liIndex--;
                    if ($this.data("content") || (text = icon + '<span class="text">' + text + subtext + "</span>"), isOptgroup && $this.data("divider") !== !0) {
                        var optGroupClass = " " + this.parentNode.className || "";
                        if (0 === $this.index()) {
                            optID += 1;
                            var label = this.parentNode.label,
                                    labelSubtext = "undefined" != typeof $this.parent().data("subtext") ? '<small class="text-muted">' + $this.parent().data("subtext") + "</small>" : "",
                                    labelIcon = $this.parent().data("icon") ? '<span class="' + that.options.iconBase + " " + $this.parent().data("icon") + '"></span> ' : "";
                            label = labelIcon + '<span class="text">' + label + labelSubtext + "</span>", 0 !== index && _li.length > 0 && (liIndex++, _li.push(generateLI("", null, "divider", optID + "div"))), liIndex++, _li.push(generateLI(label, null, "dropdown-header" + optGroupClass, optID))
                        }
                        if (that.options.hideDisabled && isDisabled)
                            return void liIndex--;
                        _li.push(generateLI(generateA(text, "opt " + optionClass + optGroupClass, inline, tokens), index, "", optID))
                    } else
                        $this.data("divider") === !0 ? _li.push(generateLI("", index, "divider")) : $this.data("hidden") === !0 ? _li.push(generateLI(generateA(text, optionClass, inline, tokens), index, "hidden is-hidden")) : (this.previousElementSibling && "OPTGROUP" === this.previousElementSibling.tagName && (liIndex++, _li.push(generateLI("", null, "divider", optID + "div"))), _li.push(generateLI(generateA(text, optionClass, inline, tokens), index)));
                    that.liObj[index] = liIndex
                }
            }), this.multiple || 0 !== this.$element.find("option:selected").length || this.options.title || this.$element.find("option").eq(0).prop("selected", !0).attr("selected", "selected"), _li.join("")
        },
        findLis: function () {
            return null == this.$lis && (this.$lis = this.$menu.find("li")), this.$lis
        },
        render: function (updateLi) {
            var notDisabled, that = this;
            updateLi !== !1 && this.$element.find("option").each(function (index) {
                var $lis = that.findLis().eq(that.liObj[index]);
                that.setDisabled(index, this.disabled || "OPTGROUP" === this.parentNode.tagName && this.parentNode.disabled, $lis), that.setSelected(index, this.selected, $lis)
            }), this.tabIndex();
            var selectedItems = this.$element.find("option").map(function () {
                if (this.selected) {
                    if (that.options.hideDisabled && (this.disabled || "OPTGROUP" === this.parentNode.tagName && this.parentNode.disabled))
                        return;
                    var subtext, $this = $(this),
                            icon = $this.data("icon") && that.options.showIcon ? '<i class="' + that.options.iconBase + " " + $this.data("icon") + '"></i> ' : "";
                    return subtext = that.options.showSubtext && $this.data("subtext") && !that.multiple ? ' <small class="text-muted">' + $this.data("subtext") + "</small>" : "", "undefined" != typeof $this.attr("title") ? $this.attr("title") : $this.data("content") && that.options.showContent ? $this.data("content") : icon + $this.html() + subtext
                }
            }).toArray(),
                    title = this.multiple ? selectedItems.join(this.options.multipleSeparator) : selectedItems[0];
            if (this.multiple && this.options.selectedTextFormat.indexOf("count") > -1) {
                var max = this.options.selectedTextFormat.split(">");
                if (max.length > 1 && selectedItems.length > max[1] || 1 == max.length && selectedItems.length >= 2) {
                    notDisabled = this.options.hideDisabled ? ", [disabled]" : "";
                    var totalCount = this.$element.find("option").not('[data-divider="true"], [data-hidden="true"]' + notDisabled).length,
                            tr8nText = "function" == typeof this.options.countSelectedText ? this.options.countSelectedText(selectedItems.length, totalCount) : this.options.countSelectedText;
                    title = tr8nText.replace("{0}", selectedItems.length.toString()).replace("{1}", totalCount.toString())
                }
            }
            void 0 == this.options.title && (this.options.title = this.$element.attr("title")), "static" == this.options.selectedTextFormat && (title = this.options.title), title || (title = "undefined" != typeof this.options.title ? this.options.title : this.options.noneSelectedText), this.$button.attr("title", $.trim(title.replace(/<[^>]*>?/g, ""))), this.$button.children(".filter-option").html(title), this.$element.trigger("rendered.bs.select")
        },
        setStyle: function (style, status) {
            this.$element.attr("class") && this.$newElement.addClass(this.$element.attr("class").replace(/selectpicker|mobile-device|bs-select-hidden|validate\[.*\]/gi, ""));
            var buttonClass = style ? style : this.options.style;
            "add" == status ? this.$button.addClass(buttonClass) : "remove" == status ? this.$button.removeClass(buttonClass) : (this.$button.removeClass(this.options.style), this.$button.addClass(buttonClass))
        },
        liHeight: function (refresh) {
            if (refresh || this.options.size !== !1 && !this.sizeInfo) {
                var newElement = document.createElement("div"),
                        menu = document.createElement("div"),
                        menuInner = document.createElement("ul"),
                        divider = document.createElement("li"),
                        li = document.createElement("li"),
                        a = document.createElement("a"),
                        text = document.createElement("span"),
                        header = this.options.header && this.$menu.find(".popover-title").length > 0 ? this.$menu.find(".popover-title")[0].cloneNode(!0) : null,
                        search = this.options.liveSearch ? document.createElement("div") : null,
                        actions = this.options.actionsBox && this.multiple && this.$menu.find(".bs-actionsbox").length > 0 ? this.$menu.find(".bs-actionsbox")[0].cloneNode(!0) : null,
                        doneButton = this.options.doneButton && this.multiple && this.$menu.find(".bs-donebutton").length > 0 ? this.$menu.find(".bs-donebutton")[0].cloneNode(!0) : null;
                if (text.className = "text", newElement.className = this.$menu[0].parentNode.className + " open", menu.className = "dropdown-menu open", menuInner.className = "dropdown-menu inner", divider.className = "divider", text.appendChild(document.createTextNode("Inner text")), a.appendChild(text), li.appendChild(a), menuInner.appendChild(li), menuInner.appendChild(divider), header && menu.appendChild(header), search) {
                    var input = document.createElement("span");
                    search.className = "bs-searchbox", input.className = "form-control", search.appendChild(input), menu.appendChild(search)
                }
                actions && menu.appendChild(actions), menu.appendChild(menuInner), doneButton && menu.appendChild(doneButton), newElement.appendChild(menu), document.body.appendChild(newElement);
                var liHeight = a.offsetHeight,
                        headerHeight = header ? header.offsetHeight : 0,
                        searchHeight = search ? search.offsetHeight : 0,
                        actionsHeight = actions ? actions.offsetHeight : 0,
                        doneButtonHeight = doneButton ? doneButton.offsetHeight : 0,
                        dividerHeight = $(divider).outerHeight(!0),
                        menuStyle = "function" == typeof getComputedStyle && getComputedStyle(menu),
                        $menu = menuStyle ? null : $(menu),
                        menuPadding = parseInt(menuStyle ? menuStyle.paddingTop : $menu.css("paddingTop")) + parseInt(menuStyle ? menuStyle.paddingBottom : $menu.css("paddingBottom")) + parseInt(menuStyle ? menuStyle.borderTopWidth : $menu.css("borderTopWidth")) + parseInt(menuStyle ? menuStyle.borderBottomWidth : $menu.css("borderBottomWidth")),
                        menuExtras = menuPadding + parseInt(menuStyle ? menuStyle.marginTop : $menu.css("marginTop")) + parseInt(menuStyle ? menuStyle.marginBottom : $menu.css("marginBottom")) + 2;
                document.body.removeChild(newElement), this.sizeInfo = {
                    liHeight: liHeight,
                    headerHeight: headerHeight,
                    searchHeight: searchHeight,
                    actionsHeight: actionsHeight,
                    doneButtonHeight: doneButtonHeight,
                    dividerHeight: dividerHeight,
                    menuPadding: menuPadding,
                    menuExtras: menuExtras
                }
            }
        },
        setSize: function () {
            if (this.findLis(), this.liHeight(), this.options.header && this.$menu.css("padding-top", 0), this.options.size !== !1) {
                var menuHeight, getHeight, selectOffsetTop, selectOffsetBot, that = this,
                        $menu = this.$menu,
                        $menuInner = this.$menuInner,
                        $window = $(window),
                        selectHeight = this.$newElement[0].offsetHeight,
                        liHeight = this.sizeInfo.liHeight,
                        headerHeight = this.sizeInfo.headerHeight,
                        searchHeight = this.sizeInfo.searchHeight,
                        actionsHeight = this.sizeInfo.actionsHeight,
                        doneButtonHeight = this.sizeInfo.doneButtonHeight,
                        divHeight = this.sizeInfo.dividerHeight,
                        menuPadding = this.sizeInfo.menuPadding,
                        menuExtras = this.sizeInfo.menuExtras,
                        notDisabled = this.options.hideDisabled ? ".disabled" : "",
                        posVert = function () {
                            selectOffsetTop = that.$newElement.offset().top - $window.scrollTop(), selectOffsetBot = $window.height() - selectOffsetTop - selectHeight
                        };
                if (posVert(), "auto" === this.options.size) {
                    var getSize = function () {
                        var minHeight, hasClass = function (className, include) {
                            return function (element) {
                                return include ? element.classList ? element.classList.contains(className) : $(element).hasClass(className) : !(element.classList ? element.classList.contains(className) : $(element).hasClass(className))
                            }
                        },
                                lis = that.$menuInner[0].getElementsByTagName("li"),
                                lisVisible = Array.prototype.filter ? Array.prototype.filter.call(lis, hasClass("hidden", !1)) : that.$lis.not(".hidden"),
                                optGroup = Array.prototype.filter ? Array.prototype.filter.call(lisVisible, hasClass("dropdown-header", !0)) : lisVisible.filter(".dropdown-header");
                        posVert(), menuHeight = selectOffsetBot - menuExtras, that.options.container ? ($menu.data("height") || $menu.data("height", $menu.height()), getHeight = $menu.data("height")) : getHeight = $menu.height(), that.options.dropupAuto && that.$newElement.toggleClass("dropup", selectOffsetTop > selectOffsetBot && menuHeight - menuExtras < getHeight), that.$newElement.hasClass("dropup") && (menuHeight = selectOffsetTop - menuExtras), minHeight = lisVisible.length + optGroup.length > 3 ? 3 * liHeight + menuExtras - 2 : 0, $menu.css({
                            "max-height": menuHeight + "px",
                            overflow: "hidden",
                            "min-height": minHeight + headerHeight + searchHeight + actionsHeight + doneButtonHeight + "px"
                        }), $menuInner.css({
                            "max-height": menuHeight - headerHeight - searchHeight - actionsHeight - doneButtonHeight - menuPadding + "px",
                            "overflow-y": "auto",
                            "min-height": Math.max(minHeight - menuPadding, 0) + "px"
                        })
                    };
                    getSize(), this.$searchbox.off("input.getSize propertychange.getSize").on("input.getSize propertychange.getSize", getSize), $window.off("resize.getSize scroll.getSize").on("resize.getSize scroll.getSize", getSize)
                } else if (this.options.size && "auto" != this.options.size && this.$lis.not(notDisabled).length > this.options.size) {
                    var optIndex = this.$lis.not(".divider").not(notDisabled).children().slice(0, this.options.size).last().parent().index(),
                            divLength = this.$lis.slice(0, optIndex + 1).filter(".divider").length;
                    menuHeight = liHeight * this.options.size + divLength * divHeight + menuPadding, that.options.container ? ($menu.data("height") || $menu.data("height", $menu.height()), getHeight = $menu.data("height")) : getHeight = $menu.height(), that.options.dropupAuto && this.$newElement.toggleClass("dropup", selectOffsetTop > selectOffsetBot && menuHeight - menuExtras < getHeight), $menu.css({
                        "max-height": menuHeight + headerHeight + searchHeight + actionsHeight + doneButtonHeight + "px",
                        overflow: "hidden",
                        "min-height": ""
                    }), $menuInner.css({
                        "max-height": menuHeight - menuPadding + "px",
                        "overflow-y": "auto",
                        "min-height": ""
                    })
                }
            }
        },
        setWidth: function () {
            if ("auto" === this.options.width) {
                this.$menu.css("min-width", "0");
                var $selectClone = this.$menu.parent().clone().appendTo("body"),
                        $selectClone2 = this.options.container ? this.$newElement.clone().appendTo("body") : $selectClone,
                        ulWidth = $selectClone.children(".dropdown-menu").outerWidth(),
                        btnWidth = $selectClone2.css("width", "auto").children("button").outerWidth();
                $selectClone.remove(), $selectClone2.remove(), this.$newElement.css("width", Math.max(ulWidth, btnWidth) + "px")
            } else
                "fit" === this.options.width ? (this.$menu.css("min-width", ""), this.$newElement.css("width", "").addClass("fit-width")) : this.options.width ? (this.$menu.css("min-width", ""), this.$newElement.css("width", this.options.width)) : (this.$menu.css("min-width", ""), this.$newElement.css("width", ""));
            this.$newElement.hasClass("fit-width") && "fit" !== this.options.width && this.$newElement.removeClass("fit-width")
        },
        selectPosition: function () {
            this.$bsContainer = $('<div class="bs-container" />');
            var pos, actualHeight, that = this,
                    getPlacement = function ($element) {
                        that.$bsContainer.addClass($element.attr("class").replace(/form-control|fit-width/gi, "")).toggleClass("dropup", $element.hasClass("dropup")), pos = $element.offset(), actualHeight = $element.hasClass("dropup") ? 0 : $element[0].offsetHeight, that.$bsContainer.css({
                            top: pos.top + actualHeight,
                            left: pos.left,
                            width: $element[0].offsetWidth
                        })
                    };
            this.$button.on("click", function () {
                var $this = $(this);
                that.isDisabled() || (getPlacement(that.$newElement), that.$bsContainer.appendTo(that.options.container).toggleClass("open", !$this.hasClass("open")).append(that.$menu))
            }), $(window).on("resize scroll", function () {
                getPlacement(that.$newElement)
            }), this.$element.on("hide.bs.select", function () {
                that.$menu.data("height", that.$menu.height()), that.$bsContainer.detach()
            })
        },
        setSelected: function (index, selected, $lis) {
            $lis || ($lis = this.findLis().eq(this.liObj[index])), $lis.toggleClass("selected", selected)
        },
        setDisabled: function (index, disabled, $lis) {
            $lis || ($lis = this.findLis().eq(this.liObj[index])), disabled ? $lis.addClass("disabled").children("a").attr("href", "#").attr("tabindex", -1) : $lis.removeClass("disabled").children("a").removeAttr("href").attr("tabindex", 0)
        },
        isDisabled: function () {
            return this.$element[0].disabled
        },
        checkDisabled: function () {
            var that = this;
            this.isDisabled() ? (this.$newElement.addClass("disabled"), this.$button.addClass("disabled").attr("tabindex", -1)) : (this.$button.hasClass("disabled") && (this.$newElement.removeClass("disabled"), this.$button.removeClass("disabled")), this.$button.attr("tabindex") != -1 || this.$element.data("tabindex") || this.$button.removeAttr("tabindex")), this.$button.click(function () {
                return !that.isDisabled()
            })
        },
        tabIndex: function () {
            this.$element.data("tabindex") !== this.$element.attr("tabindex") && this.$element.attr("tabindex") !== -98 && "-98" !== this.$element.attr("tabindex") && (this.$element.data("tabindex", this.$element.attr("tabindex")), this.$button.attr("tabindex", this.$element.data("tabindex"))), this.$element.attr("tabindex", -98)
        },
        clickListener: function () {
            var that = this,
                    $document = $(document);
            this.$newElement.on("touchstart.dropdown", ".dropdown-menu", function (e) {
                e.stopPropagation()
            }), $document.data("spaceSelect", !1), this.$button.on("keyup", function (e) {
                /(32)/.test(e.keyCode.toString(10)) && $document.data("spaceSelect") && (e.preventDefault(), $document.data("spaceSelect", !1))
            }), this.$button.on("click", function () {
                that.setSize()
            }), this.$element.on("shown.bs.select", function () {
                if (that.options.liveSearch || that.multiple) {
                    if (!that.multiple) {
                        var selectedIndex = that.liObj[that.$element[0].selectedIndex];
                        if ("number" != typeof selectedIndex || that.options.size === !1)
                            return;
                        var offset = that.$lis.eq(selectedIndex)[0].offsetTop - that.$menuInner[0].offsetTop;
                        offset = offset - that.$menuInner[0].offsetHeight / 2 + that.sizeInfo.liHeight / 2, that.$menuInner[0].scrollTop = offset
                    }
                } else
                    that.$menuInner.find(".selected a").focus()
            }), this.$menuInner.on("click", "li a", function (e) {
                var $this = $(this),
                        clickedIndex = $this.parent().data("originalIndex"),
                        prevValue = that.$element.val(),
                        prevIndex = that.$element.prop("selectedIndex");
                if (that.multiple && e.stopPropagation(), e.preventDefault(), !that.isDisabled() && !$this.parent().hasClass("disabled")) {
                    var $options = that.$element.find("option"),
                            $option = $options.eq(clickedIndex),
                            state = $option.prop("selected"),
                            $optgroup = $option.parent("optgroup"),
                            maxOptions = that.options.maxOptions,
                            maxOptionsGrp = $optgroup.data("maxOptions") || !1;
                    if (that.multiple) {
                        if ($option.prop("selected", !state), that.setSelected(clickedIndex, !state), $this.blur(), maxOptions !== !1 || maxOptionsGrp !== !1) {
                            var maxReached = maxOptions < $options.filter(":selected").length,
                                    maxReachedGrp = maxOptionsGrp < $optgroup.find("option:selected").length;
                            if (maxOptions && maxReached || maxOptionsGrp && maxReachedGrp)
                                if (maxOptions && 1 == maxOptions)
                                    $options.prop("selected", !1), $option.prop("selected", !0), that.$menuInner.find(".selected").removeClass("selected"), that.setSelected(clickedIndex, !0);
                                else if (maxOptionsGrp && 1 == maxOptionsGrp) {
                                    $optgroup.find("option:selected").prop("selected", !1), $option.prop("selected", !0);
                                    var optgroupID = $this.parent().data("optgroup");
                                    that.$menuInner.find('[data-optgroup="' + optgroupID + '"]').removeClass("selected"), that.setSelected(clickedIndex, !0)
                                } else {
                                    var maxOptionsArr = "function" == typeof that.options.maxOptionsText ? that.options.maxOptionsText(maxOptions, maxOptionsGrp) : that.options.maxOptionsText,
                                            maxTxt = maxOptionsArr[0].replace("{n}", maxOptions),
                                            maxTxtGrp = maxOptionsArr[1].replace("{n}", maxOptionsGrp),
                                            $notify = $('<div class="notify"></div>');
                                    maxOptionsArr[2] && (maxTxt = maxTxt.replace("{var}", maxOptionsArr[2][maxOptions > 1 ? 0 : 1]), maxTxtGrp = maxTxtGrp.replace("{var}", maxOptionsArr[2][maxOptionsGrp > 1 ? 0 : 1])), $option.prop("selected", !1), that.$menu.append($notify), maxOptions && maxReached && ($notify.append($("<div>" + maxTxt + "</div>")), that.$element.trigger("maxReached.bs.select")), maxOptionsGrp && maxReachedGrp && ($notify.append($("<div>" + maxTxtGrp + "</div>")), that.$element.trigger("maxReachedGrp.bs.select")), setTimeout(function () {
                                        that.setSelected(clickedIndex, !1)
                                    }, 10), $notify.delay(750).fadeOut(300, function () {
                                        $(this).remove()
                                    })
                                }
                        }
                    } else
                        $options.prop("selected", !1), $option.prop("selected", !0), that.$menuInner.find(".selected").removeClass("selected"), that.setSelected(clickedIndex, !0);
                    that.multiple ? that.options.liveSearch && that.$searchbox.focus() : that.$button.focus(), (prevValue != that.$element.val() && that.multiple || prevIndex != that.$element.prop("selectedIndex") && !that.multiple) && that.$element.trigger("changed.bs.select", [clickedIndex, $option.prop("selected"), state]).triggerNative("change")
                }
            }), this.$menu.on("click", "li.disabled a, .popover-title, .popover-title :not(.close)", function (e) {
                e.currentTarget == this && (e.preventDefault(), e.stopPropagation(), that.options.liveSearch && !$(e.target).hasClass("close") ? that.$searchbox.focus() : that.$button.focus())
            }), this.$menuInner.on("click", ".divider, .dropdown-header", function (e) {
                e.preventDefault(), e.stopPropagation(), that.options.liveSearch ? that.$searchbox.focus() : that.$button.focus()
            }), this.$menu.on("click", ".popover-title .close", function () {
                that.$button.click()
            }), this.$searchbox.on("click", function (e) {
                e.stopPropagation()
            }), this.$menu.on("click", ".actions-btn", function (e) {
                that.options.liveSearch ? that.$searchbox.focus() : that.$button.focus(), e.preventDefault(), e.stopPropagation(), $(this).hasClass("bs-select-all") ? that.selectAll() : that.deselectAll()
            }), this.$element.change(function () {
                that.render(!1)
            })
        },
        liveSearchListener: function () {
            var that = this,
                    $no_results = $('<li class="no-results"></li>');
            this.$button.on("click.dropdown.data-api touchstart.dropdown.data-api", function () {
                that.$menuInner.find(".active").removeClass("active"), that.$searchbox.val() && (that.$searchbox.val(""), that.$lis.not(".is-hidden").removeClass("hidden"), $no_results.parent().length && $no_results.remove()), that.multiple || that.$menuInner.find(".selected").addClass("active"), setTimeout(function () {
                    that.$searchbox.focus()
                }, 10)
            }), this.$searchbox.on("click.dropdown.data-api focus.dropdown.data-api touchend.dropdown.data-api", function (e) {
                e.stopPropagation()
            }), this.$searchbox.on("input propertychange", function () {
                if (that.$searchbox.val()) {
                    var $searchBase = that.$lis.not(".is-hidden").removeClass("hidden").children("a");
                    $searchBase = that.options.liveSearchNormalize ? $searchBase.not(":a" + that._searchStyle() + '("' + normalizeToBase(that.$searchbox.val()) + '")') : $searchBase.not(":" + that._searchStyle() + '("' + that.$searchbox.val() + '")'), $searchBase.parent().addClass("hidden"), that.$lis.filter(".dropdown-header").each(function () {
                        var $this = $(this),
                                optgroup = $this.data("optgroup");
                        0 === that.$lis.filter("[data-optgroup=" + optgroup + "]").not($this).not(".hidden").length && ($this.addClass("hidden"), that.$lis.filter("[data-optgroup=" + optgroup + "div]").addClass("hidden"))
                    });
                    var $lisVisible = that.$lis.not(".hidden");
                    $lisVisible.each(function (index) {
                        var $this = $(this);
                        $this.hasClass("divider") && ($this.index() === $lisVisible.first().index() || $this.index() === $lisVisible.last().index() || $lisVisible.eq(index + 1).hasClass("divider")) && $this.addClass("hidden")
                    }), that.$lis.not(".hidden, .no-results").length ? $no_results.parent().length && $no_results.remove() : ($no_results.parent().length && $no_results.remove(), $no_results.html(that.options.noneResultsText.replace("{0}", '"' + htmlEscape(that.$searchbox.val()) + '"')).show(), that.$menuInner.append($no_results))
                } else
                    that.$lis.not(".is-hidden").removeClass("hidden"), $no_results.parent().length && $no_results.remove();
                that.$lis.filter(".active").removeClass("active"), that.$searchbox.val() && that.$lis.not(".hidden, .divider, .dropdown-header").eq(0).addClass("active").children("a").focus(), $(this).focus()
            })
        },
        _searchStyle: function () {
            var styles = {
                begins: "ibegins",
                startsWith: "ibegins"
            };
            return styles[this.options.liveSearchStyle] || "icontains"
        },
        val: function (value) {
            return "undefined" != typeof value ? (this.$element.val(value), this.render(), this.$element) : this.$element.val()
        },
        changeAll: function (status) {
            "undefined" == typeof status && (status = !0), this.findLis();
            for (var $options = this.$element.find("option"), $lisVisible = this.$lis.not(".divider, .dropdown-header, .disabled, .hidden").toggleClass("selected", status), lisVisLen = $lisVisible.length, selectedOptions = [], i = 0; i < lisVisLen; i++) {
                var origIndex = $lisVisible[i].getAttribute("data-original-index");
                selectedOptions[selectedOptions.length] = $options.eq(origIndex)[0]
            }
            $(selectedOptions).prop("selected", status), this.render(!1), this.$element.trigger("changed.bs.select").triggerNative("change")
        },
        selectAll: function () {
            return this.changeAll(!0)
        },
        deselectAll: function () {
            return this.changeAll(!1)
        },
        toggle: function (e) {
            e = e || window.event, e && e.stopPropagation(), this.$button.trigger("click")
        },
        keydown: function (e) {
            var $items, index, next, first, last, prev, nextPrev, prevIndex, isActive, $this = $(this),
                    $parent = $this.is("input") ? $this.parent().parent() : $this.parent(),
                    that = $parent.data("this"),
                    selector = ":not(.disabled, .hidden, .dropdown-header, .divider)",
                    keyCodeMap = {
                        32: " ",
                        48: "0",
                        49: "1",
                        50: "2",
                        51: "3",
                        52: "4",
                        53: "5",
                        54: "6",
                        55: "7",
                        56: "8",
                        57: "9",
                        59: ";",
                        65: "a",
                        66: "b",
                        67: "c",
                        68: "d",
                        69: "e",
                        70: "f",
                        71: "g",
                        72: "h",
                        73: "i",
                        74: "j",
                        75: "k",
                        76: "l",
                        77: "m",
                        78: "n",
                        79: "o",
                        80: "p",
                        81: "q",
                        82: "r",
                        83: "s",
                        84: "t",
                        85: "u",
                        86: "v",
                        87: "w",
                        88: "x",
                        89: "y",
                        90: "z",
                        96: "0",
                        97: "1",
                        98: "2",
                        99: "3",
                        100: "4",
                        101: "5",
                        102: "6",
                        103: "7",
                        104: "8",
                        105: "9"
                    };
            if (that.options.liveSearch && ($parent = $this.parent().parent()), that.options.container && ($parent = that.$menu), $items = $("[role=menu] li", $parent), isActive = that.$newElement.hasClass("open"), !isActive && (e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode >= 96 && e.keyCode <= 105 || e.keyCode >= 65 && e.keyCode <= 90) && (that.options.container ? that.$button.trigger("click") : (that.setSize(), that.$menu.parent().addClass("open"), isActive = !0), that.$searchbox.focus()), that.options.liveSearch && (/(^9$|27)/.test(e.keyCode.toString(10)) && isActive && 0 === that.$menu.find(".active").length && (e.preventDefault(), that.$menu.parent().removeClass("open"), that.options.container && that.$newElement.removeClass("open"), that.$button.focus()), $items = $("[role=menu] li" + selector, $parent), $this.val() || /(38|40)/.test(e.keyCode.toString(10)) || 0 === $items.filter(".active").length && ($items = that.$menuInner.find("li"), $items = that.options.liveSearchNormalize ? $items.filter(":a" + that._searchStyle() + "(" + normalizeToBase(keyCodeMap[e.keyCode]) + ")") : $items.filter(":" + that._searchStyle() + "(" + keyCodeMap[e.keyCode] + ")"))), $items.length) {
                if (/(38|40)/.test(e.keyCode.toString(10)))
                    index = $items.index($items.find("a").filter(":focus").parent()), first = $items.filter(selector).first().index(), last = $items.filter(selector).last().index(), next = $items.eq(index).nextAll(selector).eq(0).index(), prev = $items.eq(index).prevAll(selector).eq(0).index(), nextPrev = $items.eq(next).prevAll(selector).eq(0).index(), that.options.liveSearch && ($items.each(function (i) {
                        $(this).hasClass("disabled") || $(this).data("index", i)
                    }), index = $items.index($items.filter(".active")), first = $items.first().data("index"), last = $items.last().data("index"), next = $items.eq(index).nextAll().eq(0).data("index"), prev = $items.eq(index).prevAll().eq(0).data("index"), nextPrev = $items.eq(next).prevAll().eq(0).data("index")), prevIndex = $this.data("prevIndex"), 38 == e.keyCode ? (that.options.liveSearch && index--, index != nextPrev && index > prev && (index = prev), index < first && (index = first), index == prevIndex && (index = last)) : 40 == e.keyCode && (that.options.liveSearch && index++, index == -1 && (index = 0), index != nextPrev && index < next && (index = next), index > last && (index = last), index == prevIndex && (index = first)), $this.data("prevIndex", index), that.options.liveSearch ? (e.preventDefault(), $this.hasClass("dropdown-toggle") || ($items.removeClass("active").eq(index).addClass("active").children("a").focus(), $this.focus())) : $items.eq(index).children("a").focus();
                else if (!$this.is("input")) {
                    var count, prevKey, keyIndex = [];
                    $items.each(function () {
                        $(this).hasClass("disabled") || $.trim($(this).children("a").text().toLowerCase()).substring(0, 1) == keyCodeMap[e.keyCode] && keyIndex.push($(this).index())
                    }), count = $(document).data("keycount"), count++, $(document).data("keycount", count), prevKey = $.trim($(":focus").text().toLowerCase()).substring(0, 1), prevKey != keyCodeMap[e.keyCode] ? (count = 1, $(document).data("keycount", count)) : count >= keyIndex.length && ($(document).data("keycount", 0), count > keyIndex.length && (count = 1)), $items.eq(keyIndex[count - 1]).children("a").focus()
                }
                if ((/(13|32)/.test(e.keyCode.toString(10)) || /(^9$)/.test(e.keyCode.toString(10)) && that.options.selectOnTab) && isActive) {
                    if (/(32)/.test(e.keyCode.toString(10)) || e.preventDefault(), that.options.liveSearch)
                        / (32) /.test(e.keyCode.toString(10)) || (that.$menuInner.find(".active a").click(), $this.focus());
                    else {
                        var elem = $(":focus");
                        elem.click(), elem.focus(), e.preventDefault(), $(document).data("spaceSelect", !0)
                    }
                    $(document).data("keycount", 0)
                }
                (/(^9$|27)/.test(e.keyCode.toString(10)) && isActive && (that.multiple || that.options.liveSearch) || /(27)/.test(e.keyCode.toString(10)) && !isActive) && (that.$menu.parent().removeClass("open"), that.options.container && that.$newElement.removeClass("open"), that.$button.focus())
            }
        },
        mobile: function () {
            this.$element.addClass("mobile-device")
        },
        refresh: function () {
            this.$lis = null, this.liObj = {}, this.reloadLi(), this.render(), this.checkDisabled(), this.liHeight(!0), this.setStyle(), this.setWidth(), this.$lis && this.$searchbox.trigger("propertychange"), this.$element.trigger("refreshed.bs.select")
        },
        hide: function () {
            this.$newElement.hide()
        },
        show: function () {
            this.$newElement.show()
        },
        remove: function () {
            this.$newElement.remove(), this.$element.remove()
        },
        destroy: function () {
            this.$newElement.before(this.$element).remove(), this.$bsContainer ? this.$bsContainer.remove() : this.$menu.remove(),
                    this.$element.off(".bs.select").removeData("selectpicker").removeClass("bs-select-hidden selectpicker")
        }
    };
    var old = $.fn.selectpicker;
    $.fn.selectpicker = Plugin, $.fn.selectpicker.Constructor = Selectpicker, $.fn.selectpicker.noConflict = function () {
        return $.fn.selectpicker = old, this
    }, $(document).data("keycount", 0).on("keydown.bs.select", '.bootstrap-select [data-toggle=dropdown], .bootstrap-select [role="menu"], .bs-searchbox input', Selectpicker.prototype.keydown).on("focusin.modal", '.bootstrap-select [data-toggle=dropdown], .bootstrap-select [role="menu"], .bs-searchbox input', function (e) {
        e.stopPropagation()
    }), $(window).on("load.bs.select.data-api", function () {
        $(".selectpicker").each(function () {
            var $selectpicker = $(this);
            Plugin.call($selectpicker, $selectpicker.data())
        })
    })
}(jQuery), function (root, factory) {
    "function" == typeof define && define.amd ? define(["jquery"], factory) : factory(root.jQuery)
}(this, function ($) {
    "use strict";

    function getBrowserScrollSize(actualSize) {
        if (browser.webkit && !actualSize)
            return {
                height: 0,
                width: 0
            };
        if (!browser.data.outer) {
            var css = {
                border: "none",
                "box-sizing": "content-box",
                height: "200px",
                margin: "0",
                padding: "0",
                width: "200px"
            };
            browser.data.inner = $("<div>").css($.extend({}, css)), browser.data.outer = $("<div>").css($.extend({
                left: "-1000px",
                overflow: "scroll",
                position: "absolute",
                top: "-1000px"
            }, css)).append(browser.data.inner).appendTo("body")
        }
        return browser.data.outer.scrollLeft(1e3).scrollTop(1e3), {
            height: Math.ceil(browser.data.outer.offset().top - browser.data.inner.offset().top || 0),
            width: Math.ceil(browser.data.outer.offset().left - browser.data.inner.offset().left || 0)
        }
    }

    function isScrollOverlaysContent() {
        var scrollSize = getBrowserScrollSize(!0);
        return !(scrollSize.height || scrollSize.width)
    }

    function isVerticalScroll(event) {
        var e = event.originalEvent;
        return (!e.axis || e.axis !== e.HORIZONTAL_AXIS) && !e.wheelDeltaX
    }
    var debug = !1,
            browser = {
                data: {
                    index: 0,
                    name: "scrollbar"
                },
                macosx: /mac/i.test(navigator.platform),
                mobile: /android|webos|iphone|ipad|ipod|blackberry/i.test(navigator.userAgent),
                overlay: null,
                scroll: null,
                scrolls: [],
                webkit: /webkit/i.test(navigator.userAgent) && !/edge\/\d+/i.test(navigator.userAgent)
            };
    browser.scrolls.add = function (instance) {
        this.remove(instance).push(instance)
    }, browser.scrolls.remove = function (instance) {
        for (; $.inArray(instance, this) >= 0; )
            this.splice($.inArray(instance, this), 1);
        return this
    };
    var defaults = {
        autoScrollSize: !0,
        autoUpdate: !0,
        debug: !1,
        disableBodyScroll: !1,
        duration: 200,
        ignoreMobile: !1,
        ignoreOverlay: !1,
        scrollStep: 30,
        showArrows: !1,
        stepScrolling: !0,
        scrollx: null,
        scrolly: null,
        onDestroy: null,
        onInit: null,
        onScroll: null,
        onUpdate: null
    },
            BaseScrollbar = function (container) {
                browser.scroll || (browser.overlay = isScrollOverlaysContent(), browser.scroll = getBrowserScrollSize(), updateScrollbars(), $(window).resize(function () {
                    var forceUpdate = !1;
                    if (browser.scroll && (browser.scroll.height || browser.scroll.width)) {
                        var scroll = getBrowserScrollSize();
                        scroll.height === browser.scroll.height && scroll.width === browser.scroll.width || (browser.scroll = scroll, forceUpdate = !0)
                    }
                    updateScrollbars(forceUpdate)
                })), this.container = container, this.namespace = ".scrollbar_" + browser.data.index++, this.options = $.extend({}, defaults, window.jQueryScrollbarOptions || {}), this.scrollTo = null, this.scrollx = {}, this.scrolly = {}, container.data(browser.data.name, this), browser.scrolls.add(this)
            };
    BaseScrollbar.prototype = {
        destroy: function () {
            if (this.wrapper) {
                this.container.removeData(browser.data.name), browser.scrolls.remove(this);
                var scrollLeft = this.container.scrollLeft(),
                        scrollTop = this.container.scrollTop();
                this.container.insertBefore(this.wrapper).css({
                    height: "",
                    margin: "",
                    "max-height": ""
                }).removeClass("scroll-content scroll-scrollx_visible scroll-scrolly_visible").off(this.namespace).scrollLeft(scrollLeft).scrollTop(scrollTop), this.scrollx.scroll.removeClass("scroll-scrollx_visible").find("div").andSelf().off(this.namespace), this.scrolly.scroll.removeClass("scroll-scrolly_visible").find("div").andSelf().off(this.namespace), this.wrapper.remove(), $(document).add("body").off(this.namespace), $.isFunction(this.options.onDestroy) && this.options.onDestroy.apply(this, [this.container])
            }
        },
        init: function (options) {
            var S = this,
                    c = this.container,
                    cw = this.containerWrapper || c,
                    namespace = this.namespace,
                    o = $.extend(this.options, options || {}),
                    s = {
                        x: this.scrollx,
                        y: this.scrolly
                    },
                    w = this.wrapper,
                    initScroll = {
                        scrollLeft: c.scrollLeft(),
                        scrollTop: c.scrollTop()
                    };
            if (browser.mobile && o.ignoreMobile || browser.overlay && o.ignoreOverlay || browser.macosx && !browser.webkit)
                return !1;
            if (w)
                cw.css({
                    height: "auto",
                    "margin-bottom": browser.scroll.height * -1 + "px",
                    "margin-right": browser.scroll.width * -1 + "px",
                    "max-height": ""
                });
            else {
                if (this.wrapper = w = $("<div>").addClass("scroll-wrapper").addClass(c.attr("class")).css("position", "absolute" == c.css("position") ? "absolute" : "relative").insertBefore(c).append(c), c.is("textarea") && (this.containerWrapper = cw = $("<div>").insertBefore(c).append(c), w.addClass("scroll-textarea")), cw.addClass("scroll-content").css({
                    height: "auto",
                    "margin-bottom": browser.scroll.height * -1 + "px",
                    "margin-right": browser.scroll.width * -1 + "px",
                    "max-height": ""
                }), c.on("scroll" + namespace, function (event) {
                    $.isFunction(o.onScroll) && o.onScroll.call(S, {
                        maxScroll: s.y.maxScrollOffset,
                        scroll: c.scrollTop(),
                        size: s.y.size,
                        visible: s.y.visible
                    }, {
                        maxScroll: s.x.maxScrollOffset,
                        scroll: c.scrollLeft(),
                        size: s.x.size,
                        visible: s.x.visible
                    }), s.x.isVisible && s.x.scroll.bar.css("left", c.scrollLeft() * s.x.kx + "px"), s.y.isVisible && s.y.scroll.bar.css("top", c.scrollTop() * s.y.kx + "px")
                }), w.on("scroll" + namespace, function () {
                    w.scrollTop(0).scrollLeft(0)
                }), o.disableBodyScroll) {
                    var handleMouseScroll = function (event) {
                        isVerticalScroll(event) ? s.y.isVisible && s.y.mousewheel(event) : s.x.isVisible && s.x.mousewheel(event)
                    };
                    w.on("MozMousePixelScroll" + namespace, handleMouseScroll), w.on("mousewheel" + namespace, handleMouseScroll), browser.mobile && w.on("touchstart" + namespace, function (event) {
                        var touch = event.originalEvent.touches && event.originalEvent.touches[0] || event,
                                originalTouch = {
                                    pageX: touch.pageX,
                                    pageY: touch.pageY
                                },
                                originalScroll = {
                                    left: c.scrollLeft(),
                                    top: c.scrollTop()
                                };
                        $(document).on("touchmove" + namespace, function (event) {
                            var touch = event.originalEvent.targetTouches && event.originalEvent.targetTouches[0] || event;
                            c.scrollLeft(originalScroll.left + originalTouch.pageX - touch.pageX), c.scrollTop(originalScroll.top + originalTouch.pageY - touch.pageY), event.preventDefault()
                        }), $(document).on("touchend" + namespace, function () {
                            $(document).off(namespace)
                        })
                    })
                }
                $.isFunction(o.onInit) && o.onInit.apply(this, [c])
            }
            $.each(s, function (d, scrollx) {
                var scrollCallback = null,
                        scrollForward = 1,
                        scrollOffset = "x" === d ? "scrollLeft" : "scrollTop",
                        scrollStep = o.scrollStep,
                        scrollTo = function () {
                            var currentOffset = c[scrollOffset]();
                            c[scrollOffset](currentOffset + scrollStep), 1 == scrollForward && currentOffset + scrollStep >= scrollToValue && (currentOffset = c[scrollOffset]()), scrollForward == -1 && currentOffset + scrollStep <= scrollToValue && (currentOffset = c[scrollOffset]()), c[scrollOffset]() == currentOffset && scrollCallback && scrollCallback()
                        },
                        scrollToValue = 0;
                scrollx.scroll || (scrollx.scroll = S._getScroll(o["scroll" + d]).addClass("scroll-" + d), o.showArrows && scrollx.scroll.addClass("scroll-element_arrows_visible"), scrollx.mousewheel = function (event) {
                    if (!scrollx.isVisible || "x" === d && isVerticalScroll(event))
                        return !0;
                    if ("y" === d && !isVerticalScroll(event))
                        return s.x.mousewheel(event), !0;
                    var delta = event.originalEvent.wheelDelta * -1 || event.originalEvent.detail,
                            maxScrollValue = scrollx.size - scrollx.visible - scrollx.offset;
                    return (delta > 0 && scrollToValue < maxScrollValue || delta < 0 && scrollToValue > 0) && (scrollToValue += delta, scrollToValue < 0 && (scrollToValue = 0), scrollToValue > maxScrollValue && (scrollToValue = maxScrollValue), S.scrollTo = S.scrollTo || {}, S.scrollTo[scrollOffset] = scrollToValue, setTimeout(function () {
                        S.scrollTo && (c.stop().animate(S.scrollTo, 240, "linear", function () {
                            scrollToValue = c[scrollOffset]()
                        }), S.scrollTo = null)
                    }, 1)), event.preventDefault(), !1
                }, scrollx.scroll.on("MozMousePixelScroll" + namespace, scrollx.mousewheel).on("mousewheel" + namespace, scrollx.mousewheel).on("mouseenter" + namespace, function () {
                    scrollToValue = c[scrollOffset]()
                }), scrollx.scroll.find(".scroll-arrow, .scroll-element_track").on("mousedown" + namespace, function (event) {
                    if (1 != event.which)
                        return !0;
                    scrollForward = 1;
                    var data = {
                        eventOffset: event["x" === d ? "pageX" : "pageY"],
                        maxScrollValue: scrollx.size - scrollx.visible - scrollx.offset,
                        scrollbarOffset: scrollx.scroll.bar.offset()["x" === d ? "left" : "top"],
                        scrollbarSize: scrollx.scroll.bar["x" === d ? "outerWidth" : "outerHeight"]()
                    },
                            timeout = 0,
                            timer = 0;
                    return $(this).hasClass("scroll-arrow") ? (scrollForward = $(this).hasClass("scroll-arrow_more") ? 1 : -1, scrollStep = o.scrollStep * scrollForward, scrollToValue = scrollForward > 0 ? data.maxScrollValue : 0) : (scrollForward = data.eventOffset > data.scrollbarOffset + data.scrollbarSize ? 1 : data.eventOffset < data.scrollbarOffset ? -1 : 0, scrollStep = Math.round(.75 * scrollx.visible) * scrollForward, scrollToValue = data.eventOffset - data.scrollbarOffset - (o.stepScrolling ? 1 == scrollForward ? data.scrollbarSize : 0 : Math.round(data.scrollbarSize / 2)), scrollToValue = c[scrollOffset]() + scrollToValue / scrollx.kx), S.scrollTo = S.scrollTo || {}, S.scrollTo[scrollOffset] = o.stepScrolling ? c[scrollOffset]() + scrollStep : scrollToValue, o.stepScrolling && (scrollCallback = function () {
                        scrollToValue = c[scrollOffset](), clearInterval(timer), clearTimeout(timeout), timeout = 0, timer = 0
                    }, timeout = setTimeout(function () {
                        timer = setInterval(scrollTo, 40)
                    }, o.duration + 100)), setTimeout(function () {
                        S.scrollTo && (c.animate(S.scrollTo, o.duration), S.scrollTo = null)
                    }, 1), S._handleMouseDown(scrollCallback, event)
                }), scrollx.scroll.bar.on("mousedown" + namespace, function (event) {
                    if (1 != event.which)
                        return !0;
                    var eventPosition = event["x" === d ? "pageX" : "pageY"],
                            initOffset = c[scrollOffset]();
                    return scrollx.scroll.addClass("scroll-draggable"), $(document).on("mousemove" + namespace, function (event) {
                        var diff = parseInt((event["x" === d ? "pageX" : "pageY"] - eventPosition) / scrollx.kx, 10);
                        c[scrollOffset](initOffset + diff)
                    }), S._handleMouseDown(function () {
                        scrollx.scroll.removeClass("scroll-draggable"), scrollToValue = c[scrollOffset]()
                    }, event)
                }))
            }), $.each(s, function (d, scrollx) {
                var scrollClass = "scroll-scroll" + d + "_visible",
                        scrolly = "x" == d ? s.y : s.x;
                scrollx.scroll.removeClass(scrollClass), scrolly.scroll.removeClass(scrollClass), cw.removeClass(scrollClass)
            }), $.each(s, function (d, scrollx) {
                $.extend(scrollx, "x" == d ? {
                    offset: parseInt(c.css("left"), 10) || 0,
                    size: c.prop("scrollWidth"),
                    visible: w.width()
                } : {
                    offset: parseInt(c.css("top"), 10) || 0,
                    size: c.prop("scrollHeight"),
                    visible: w.height()
                })
            }), this._updateScroll("x", this.scrollx), this._updateScroll("y", this.scrolly), $.isFunction(o.onUpdate) && o.onUpdate.apply(this, [c]), $.each(s, function (d, scrollx) {
                var cssOffset = "x" === d ? "left" : "top",
                        cssFullSize = "x" === d ? "outerWidth" : "outerHeight",
                        cssSize = "x" === d ? "width" : "height",
                        offset = parseInt(c.css(cssOffset), 10) || 0,
                        AreaSize = scrollx.size,
                        AreaVisible = scrollx.visible + offset,
                        scrollSize = scrollx.scroll.size[cssFullSize]() + (parseInt(scrollx.scroll.size.css(cssOffset), 10) || 0);
                o.autoScrollSize && (scrollx.scrollbarSize = parseInt(scrollSize * AreaVisible / AreaSize, 10), scrollx.scroll.bar.css(cssSize, scrollx.scrollbarSize + "px")), scrollx.scrollbarSize = scrollx.scroll.bar[cssFullSize](), scrollx.kx = (scrollSize - scrollx.scrollbarSize) / (AreaSize - AreaVisible) || 1, scrollx.maxScrollOffset = AreaSize - AreaVisible
            }), c.scrollLeft(initScroll.scrollLeft).scrollTop(initScroll.scrollTop).trigger("scroll")
        },
        _getScroll: function (scroll) {
            var types = {
                advanced: ['<div class="scroll-element">', '<div class="scroll-element_corner"></div>', '<div class="scroll-arrow scroll-arrow_less"></div>', '<div class="scroll-arrow scroll-arrow_more"></div>', '<div class="scroll-element_outer">', '<div class="scroll-element_size"></div>', '<div class="scroll-element_inner-wrapper">', '<div class="scroll-element_inner scroll-element_track">', '<div class="scroll-element_inner-bottom"></div>', "</div>", "</div>", '<div class="scroll-bar">', '<div class="scroll-bar_body">', '<div class="scroll-bar_body-inner"></div>', "</div>", '<div class="scroll-bar_bottom"></div>', '<div class="scroll-bar_center"></div>', "</div>", "</div>", "</div>"].join(""),
                simple: ['<div class="scroll-element">', '<div class="scroll-element_outer">', '<div class="scroll-element_size"></div>', '<div class="scroll-element_track"></div>', '<div class="scroll-bar"></div>', "</div>", "</div>"].join("")
            };
            return types[scroll] && (scroll = types[scroll]), scroll || (scroll = types.simple), scroll = "string" == typeof scroll ? $(scroll).appendTo(this.wrapper) : $(scroll), $.extend(scroll, {
                bar: scroll.find(".scroll-bar"),
                size: scroll.find(".scroll-element_size"),
                track: scroll.find(".scroll-element_track")
            }), scroll
        },
        _handleMouseDown: function (callback, event) {
            var namespace = this.namespace;
            return $(document).on("blur" + namespace, function () {
                $(document).add("body").off(namespace), callback && callback()
            }), $(document).on("dragstart" + namespace, function (event) {
                return event.preventDefault(), !1
            }), $(document).on("mouseup" + namespace, function () {
                $(document).add("body").off(namespace), callback && callback()
            }), $("body").on("selectstart" + namespace, function (event) {
                return event.preventDefault(), !1
            }), event && event.preventDefault(), !1
        },
        _updateScroll: function (d, scrollx) {
            var container = this.container,
                    containerWrapper = this.containerWrapper || container,
                    scrollClass = "scroll-scroll" + d + "_visible",
                    scrolly = "x" === d ? this.scrolly : this.scrollx,
                    offset = parseInt(this.container.css("x" === d ? "left" : "top"), 10) || 0,
                    wrapper = this.wrapper,
                    AreaSize = scrollx.size,
                    AreaVisible = scrollx.visible + offset;
            scrollx.isVisible = AreaSize - AreaVisible > 1, scrollx.isVisible ? (scrollx.scroll.addClass(scrollClass), scrolly.scroll.addClass(scrollClass), containerWrapper.addClass(scrollClass)) : (scrollx.scroll.removeClass(scrollClass), scrolly.scroll.removeClass(scrollClass), containerWrapper.removeClass(scrollClass)), "y" === d && (container.is("textarea") || AreaSize < AreaVisible ? containerWrapper.css({
                height: AreaVisible + browser.scroll.height + "px",
                "max-height": "none"
            }) : containerWrapper.css({
                "max-height": AreaVisible + browser.scroll.height + "px"
            })), scrollx.size == container.prop("scrollWidth") && scrolly.size == container.prop("scrollHeight") && scrollx.visible == wrapper.width() && scrolly.visible == wrapper.height() && scrollx.offset == (parseInt(container.css("left"), 10) || 0) && scrolly.offset == (parseInt(container.css("top"), 10) || 0) || ($.extend(this.scrollx, {
                offset: parseInt(container.css("left"), 10) || 0,
                size: container.prop("scrollWidth"),
                visible: wrapper.width()
            }), $.extend(this.scrolly, {
                offset: parseInt(container.css("top"), 10) || 0,
                size: this.container.prop("scrollHeight"),
                visible: wrapper.height()
            }), this._updateScroll("x" === d ? "y" : "x", scrolly))
        }
    };
    var CustomScrollbar = BaseScrollbar;
    $.fn.scrollbar = function (command, args) {
        return "string" != typeof command && (args = command, command = "init"), "undefined" == typeof args && (args = []), $.isArray(args) || (args = [args]), this.not("body, .scroll-wrapper").each(function () {
            var element = $(this),
                    instance = element.data(browser.data.name);
            (instance || "init" === command) && (instance || (instance = new CustomScrollbar(element)), instance[command] && instance[command].apply(instance, args))
        }), this
    }, $.fn.scrollbar.options = defaults;
    var updateScrollbars = function () {
        var timer = 0,
                timerCounter = 0;
        return function (force) {
            var i, container, options, scroll, wrapper, scrollx, scrolly;
            for (i = 0; i < browser.scrolls.length; i++)
                scroll = browser.scrolls[i], container = scroll.container, options = scroll.options, wrapper = scroll.wrapper, scrollx = scroll.scrollx, scrolly = scroll.scrolly, (force || options.autoUpdate && wrapper && wrapper.is(":visible") && (container.prop("scrollWidth") != scrollx.size || container.prop("scrollHeight") != scrolly.size || wrapper.width() != scrollx.visible || wrapper.height() != scrolly.visible)) && (scroll.init(), options.debug && (window.console && console.log({
                    scrollHeight: container.prop("scrollHeight") + ":" + scroll.scrolly.size,
                    scrollWidth: container.prop("scrollWidth") + ":" + scroll.scrollx.size,
                    visibleHeight: wrapper.height() + ":" + scroll.scrolly.visible,
                    visibleWidth: wrapper.width() + ":" + scroll.scrollx.visible
                }, !0), timerCounter++));
            debug && timerCounter > 10 ? (window.console && console.log("Scroll updates exceed 10"), updateScrollbars = function () {}) : (clearTimeout(timer), timer = setTimeout(updateScrollbars, 300))
        }
    }();
    window.angular && !function (angular) {
        angular.module("jQueryScrollbar", []).provider("jQueryScrollbar", function () {
            var defaultOptions = defaults;
            return {
                setOptions: function (options) {
                    angular.extend(defaultOptions, options)
                },
                $get: function () {
                    return {
                        options: angular.copy(defaultOptions)
                    }
                }
            }
        }).directive("jqueryScrollbar", ["jQueryScrollbar", "$parse", function (jQueryScrollbar, $parse) {
                return {
                    restrict: "AC",
                    link: function (scope, element, attrs) {
                        var model = $parse(attrs.jqueryScrollbar),
                                options = model(scope);
                        element.scrollbar(options || jQueryScrollbar.options).on("$destroy", function () {
                            element.scrollbar("destroy")
                        })
                    }
                }
            }])
    }(window.angular)
}), function ($) {
    var scrolled = !1;
    $(window).scroll(function () {
        scrolled = !0, $("body").one("mousemove", function () {
            scrolled = !1
        })
    }), $.fn.hoverIntent = function (handlerIn, handlerOut, selector) {
        var cfg = {
            interval: 100,
            sensitivity: 6,
            timeout: 0
        };
        cfg = "object" == typeof handlerIn ? $.extend(cfg, handlerIn) : $.isFunction(handlerOut) ? $.extend(cfg, {
            over: handlerIn,
            out: handlerOut,
            selector: selector
        }) : $.extend(cfg, {
            over: handlerIn,
            out: handlerIn,
            selector: handlerOut
        });
        var cX, cY, pX, pY, track = function (ev) {
            cX = ev.pageX, cY = ev.pageY
        },
                compare = function (ev, ob) {
                    return ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t), Math.sqrt((pX - cX) * (pX - cX) + (pY - cY) * (pY - cY)) < cfg.sensitivity ? ($(ob).off("mousemove.hoverIntent", track), ob.hoverIntent_s = !0, cfg.over.apply(ob, [ev])) : (pX = cX, pY = cY, ob.hoverIntent_t = setTimeout(function () {
                        compare(ev, ob)
                    }, cfg.interval), void 0)
                },
                delay = function (ev, ob) {
                    return ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t), ob.hoverIntent_s = !1, cfg.out.apply(ob, [ev])
                },
                handleHover = function (e) {
                    if (!scrolled || "mouseenter" !== e.type) {
                        var ev = $.extend({}, e),
                                ob = this;
                        ob.hoverIntent_t && (ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t)), "mouseenter" === e.type ? (pX = ev.pageX, pY = ev.pageY, $(ob).on("mousemove.hoverIntent", track), ob.hoverIntent_s || (ob.hoverIntent_t = setTimeout(function () {
                            compare(ev, ob)
                        }, cfg.interval))) : ($(ob).off("mousemove.hoverIntent", track), ob.hoverIntent_s && (ob.hoverIntent_t = setTimeout(function () {
                            delay(ev, ob)
                        }, cfg.timeout)))
                    }
                };
        return this.on({
            "mouseenter.hoverIntent": handleHover,
            "mouseleave.hoverIntent": handleHover
        }, cfg.selector)
    }
}(jQuery), function (factory) {
    if ("function" == typeof define && define.amd)
        define(factory);
    else if ("object" == typeof exports)
        module.exports = factory();
    else {
        var _OldCookies = window.Cookies,
                api = window.Cookies = factory();
        api.noConflict = function () {
            return window.Cookies = _OldCookies, api
        }
    }
}(function () {
    function extend() {
        for (var i = 0, result = {}; i < arguments.length; i++) {
            var attributes = arguments[i];
            for (var key in attributes)
                result[key] = attributes[key]
        }
        return result
    }

    function init(converter) {
        function api(key, value, attributes) {
            var result;
            if (arguments.length > 1) {
                if (attributes = extend({
                    path: "/"
                }, api.defaults, attributes), "number" == typeof attributes.expires) {
                    var expires = new Date;
                    expires.setMilliseconds(expires.getMilliseconds() + 864e5 * attributes.expires), attributes.expires = expires
                }
                try {
                    result = JSON.stringify(value), /^[\{\[]/.test(result) && (value = result)
                } catch (e) {
                }
                return value = encodeURIComponent(String(value)), value = value.replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent), key = encodeURIComponent(String(key)), key = key.replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent), key = key.replace(/[\(\)]/g, escape), document.cookie = [key, "=", value, attributes.expires && "; expires=" + attributes.expires.toUTCString(), attributes.path && "; path=" + attributes.path, attributes.domain && "; domain=" + attributes.domain, attributes.secure ? "; secure" : ""].join("")
            }
            key || (result = {});
            for (var cookies = document.cookie ? document.cookie.split("; ") : [], rdecode = /(%[0-9A-Z]{2})+/g, i = 0; i < cookies.length; i++) {
                var parts = cookies[i].split("="),
                        name = parts[0].replace(rdecode, decodeURIComponent),
                        cookie = parts.slice(1).join("=");
                '"' === cookie.charAt(0) && (cookie = cookie.slice(1, -1));
                try {
                    if (cookie = converter && converter(cookie, name) || cookie.replace(rdecode, decodeURIComponent), this.json)
                        try {
                            cookie = JSON.parse(cookie)
                        } catch (e) {
                        }
                    if (key === name) {
                        result = cookie;
                        break
                    }
                    key || (result[name] = cookie)
                } catch (e) {
                }
            }
            return result
        }
        return api.get = api.set = api, api.getJSON = function () {
            return api.apply({
                json: !0
            }, [].slice.call(arguments))
        }, api.defaults = {}, api.remove = function (key, attributes) {
            api(key, "", extend(attributes, {
                expires: -1
            }))
        }, api.withConverter = init, api
    }
    return init()
}), window.FormValidation = {
    AddOn: {},
    Framework: {},
    I18n: {},
    Validator: {}
}, "undefined" == typeof jQuery)
    throw new Error("FormValidation requires jQuery");
!function ($) {
    var version = $.fn.jquery.split(" ")[0].split(".");
    if (+version[0] < 2 && +version[1] < 9 || 1 === +version[0] && 9 === +version[1] && +version[2] < 1)
        throw new Error("FormValidation requires jQuery version 1.9.1 or higher")
}(jQuery),
        function ($) {
            FormValidation.Base = function (form, options, namespace) {
                this.$form = $(form), this.options = $.extend({}, $.fn.formValidation.DEFAULT_OPTIONS, options), this._namespace = namespace || "fv", this.$invalidFields = $([]), this.$submitButton = null, this.$hiddenButton = null, this.STATUS_NOT_VALIDATED = "NOT_VALIDATED", this.STATUS_VALIDATING = "VALIDATING", this.STATUS_INVALID = "INVALID", this.STATUS_VALID = "VALID", this.STATUS_IGNORED = "IGNORED", this.DEFAULT_MESSAGE = $.fn.formValidation.DEFAULT_MESSAGE, this._ieVersion = function () {
                    for (var v = 3, div = document.createElement("div"), a = div.all || []; div.innerHTML = "<!--[if gt IE " + ++v + "]><br><![endif]-->", a[0]; )
                        ;
                    return v > 4 ? v : document.documentMode
                }();
                var el = document.createElement("div");
                this._changeEvent = 9 !== this._ieVersion && "oninput" in el ? "input" : "keyup", this._submitIfValid = null, this._cacheFields = {}, this._init()
            }, FormValidation.Base.prototype = {
                constructor: FormValidation.Base,
                _exceedThreshold: function ($field) {
                    var ns = this._namespace,
                            field = $field.attr("data-" + ns + "-field"),
                            threshold = this.options.fields[field].threshold || this.options.threshold;
                    if (!threshold)
                        return !0;
                    var cannotType = $.inArray($field.attr("type"), ["button", "checkbox", "file", "hidden", "image", "radio", "reset", "submit"]) !== -1;
                    return cannotType || $field.val().length >= threshold
                },
                _init: function () {
                    var that = this,
                            ns = this._namespace,
                            options = {
                                addOns: {},
                                autoFocus: this.$form.attr("data-" + ns + "-autofocus"),
                                button: {
                                    selector: this.$form.attr("data-" + ns + "-button-selector") || this.$form.attr("data-" + ns + "-submitbuttons"),
                                    disabled: this.$form.attr("data-" + ns + "-button-disabled")
                                },
                                control: {
                                    valid: this.$form.attr("data-" + ns + "-control-valid"),
                                    invalid: this.$form.attr("data-" + ns + "-control-invalid")
                                },
                                err: {
                                    clazz: this.$form.attr("data-" + ns + "-err-clazz"),
                                    container: this.$form.attr("data-" + ns + "-err-container") || this.$form.attr("data-" + ns + "-container"),
                                    parent: this.$form.attr("data-" + ns + "-err-parent")
                                },
                                events: {
                                    formInit: this.$form.attr("data-" + ns + "-events-form-init"),
                                    formPreValidate: this.$form.attr("data-" + ns + "-events-form-prevalidate"),
                                    formError: this.$form.attr("data-" + ns + "-events-form-error"),
                                    formSuccess: this.$form.attr("data-" + ns + "-events-form-success"),
                                    fieldAdded: this.$form.attr("data-" + ns + "-events-field-added"),
                                    fieldRemoved: this.$form.attr("data-" + ns + "-events-field-removed"),
                                    fieldInit: this.$form.attr("data-" + ns + "-events-field-init"),
                                    fieldError: this.$form.attr("data-" + ns + "-events-field-error"),
                                    fieldSuccess: this.$form.attr("data-" + ns + "-events-field-success"),
                                    fieldStatus: this.$form.attr("data-" + ns + "-events-field-status"),
                                    localeChanged: this.$form.attr("data-" + ns + "-events-locale-changed"),
                                    validatorError: this.$form.attr("data-" + ns + "-events-validator-error"),
                                    validatorSuccess: this.$form.attr("data-" + ns + "-events-validator-success"),
                                    validatorIgnored: this.$form.attr("data-" + ns + "-events-validator-ignored")
                                },
                                excluded: this.$form.attr("data-" + ns + "-excluded"),
                                icon: {
                                    valid: this.$form.attr("data-" + ns + "-icon-valid") || this.$form.attr("data-" + ns + "-feedbackicons-valid"),
                                    invalid: this.$form.attr("data-" + ns + "-icon-invalid") || this.$form.attr("data-" + ns + "-feedbackicons-invalid"),
                                    validating: this.$form.attr("data-" + ns + "-icon-validating") || this.$form.attr("data-" + ns + "-feedbackicons-validating"),
                                    feedback: this.$form.attr("data-" + ns + "-icon-feedback")
                                },
                                live: this.$form.attr("data-" + ns + "-live"),
                                locale: this.$form.attr("data-" + ns + "-locale"),
                                message: this.$form.attr("data-" + ns + "-message"),
                                onPreValidate: this.$form.attr("data-" + ns + "-onprevalidate"),
                                onError: this.$form.attr("data-" + ns + "-onerror"),
                                onSuccess: this.$form.attr("data-" + ns + "-onsuccess"),
                                row: {
                                    selector: this.$form.attr("data-" + ns + "-row-selector") || this.$form.attr("data-" + ns + "-group"),
                                    valid: this.$form.attr("data-" + ns + "-row-valid"),
                                    invalid: this.$form.attr("data-" + ns + "-row-invalid"),
                                    feedback: this.$form.attr("data-" + ns + "-row-feedback")
                                },
                                threshold: this.$form.attr("data-" + ns + "-threshold"),
                                trigger: this.$form.attr("data-" + ns + "-trigger"),
                                verbose: this.$form.attr("data-" + ns + "-verbose"),
                                fields: {}
                            };
                    this.$form.attr("novalidate", "novalidate").addClass(this.options.elementClass).on("submit." + ns, function (e) {
                        e.preventDefault(), that.validate()
                    }).on("click." + ns, this.options.button.selector, function () {
                        that.$submitButton = $(this), that._submitIfValid = !0
                    }), this.options.declarative !== !0 && "true" !== this.options.declarative || this.$form.find("[name], [data-" + ns + "-field]").each(function () {
                        var $field = $(this),
                                field = $field.attr("name") || $field.attr("data-" + ns + "-field"),
                                opts = that._parseOptions($field);
                        opts && ($field.attr("data-" + ns + "-field", field), options.fields[field] = $.extend({}, opts, options.fields[field]))
                    }), this.options = $.extend(!0, this.options, options), "string" == typeof this.options.err.parent && (this.options.err.parent = new RegExp(this.options.err.parent)), this.options.container && (this.options.err.container = this.options.container, delete this.options.container), this.options.feedbackIcons && (this.options.icon = $.extend(!0, this.options.icon, this.options.feedbackIcons), delete this.options.feedbackIcons), this.options.group && (this.options.row.selector = this.options.group, delete this.options.group), this.options.submitButtons && (this.options.button.selector = this.options.submitButtons, delete this.options.submitButtons), FormValidation.I18n[this.options.locale] || (this.options.locale = $.fn.formValidation.DEFAULT_OPTIONS.locale), this.options.declarative !== !0 && "true" !== this.options.declarative || (this.options = $.extend(!0, this.options, {
                        addOns: this._parseAddOnOptions()
                    })), this.$hiddenButton = $("<button/>").attr("type", "submit").prependTo(this.$form).addClass("fv-hidden-submit").css({
                        display: "none",
                        width: 0,
                        height: 0
                    }), this.$form.on("click." + this._namespace, '[type="submit"]', function (e) {
                        if (!e.isDefaultPrevented()) {
                            var $target = $(e.target),
                                    $button = $target.is('[type="submit"]') ? $target.eq(0) : $target.parent('[type="submit"]').eq(0);
                            !that.options.button.selector || $button.is(that.options.button.selector) || $button.is(that.$hiddenButton) || that.$form.off("submit." + that._namespace).submit()
                        }
                    });
                    for (var field in this.options.fields)
                        this._initField(field);
                    for (var addOn in this.options.addOns)
                        "function" == typeof FormValidation.AddOn[addOn].init && FormValidation.AddOn[addOn].init(this, this.options.addOns[addOn]);
                    this.$form.trigger($.Event(this.options.events.formInit), {
                        bv: this,
                        fv: this,
                        options: this.options
                    }), this.options.onPreValidate && this.$form.on(this.options.events.formPreValidate, function (e) {
                        FormValidation.Helper.call(that.options.onPreValidate, [e])
                    }), this.options.onSuccess && this.$form.on(this.options.events.formSuccess, function (e) {
                        FormValidation.Helper.call(that.options.onSuccess, [e])
                    }), this.options.onError && this.$form.on(this.options.events.formError, function (e) {
                        FormValidation.Helper.call(that.options.onError, [e])
                    })
                },
                _initField: function (field) {
                    var ns = this._namespace,
                            fields = $([]);
                    switch (typeof field) {
                        case "object":
                            fields = field, field = field.attr("data-" + ns + "-field");
                            break;
                        case "string":
                            fields = this.getFieldElements(field), fields.attr("data-" + ns + "-field", field)
                    }
                    if (0 !== fields.length && null !== this.options.fields[field] && null !== this.options.fields[field].validators) {
                        var validatorName, alias, validators = this.options.fields[field].validators;
                        for (validatorName in validators)
                            alias = validators[validatorName].alias || validatorName, FormValidation.Validator[alias] || delete this.options.fields[field].validators[validatorName];
                        null === this.options.fields[field].enabled && (this.options.fields[field].enabled = !0);
                        for (var that = this, total = fields.length, type = fields.attr("type"), updateAll = 1 === total || "radio" === type || "checkbox" === type, trigger = this._getFieldTrigger(fields.eq(0)), events = $.map(trigger, function (item) {
                            return item + ".update." + ns
                        }).join(" "), i = 0; i < total; i++) {
                            var $field = fields.eq(i),
                                    row = this.options.fields[field].row || this.options.row.selector,
                                    $parent = $field.closest(row),
                                    container = "function" == typeof (this.options.fields[field].container || this.options.fields[field].err || this.options.err.container) ? (this.options.fields[field].container || this.options.fields[field].err || this.options.err.container).call(this, $field, this) : this.options.fields[field].container || this.options.fields[field].err || this.options.err.container,
                                    $message = container && "tooltip" !== container && "popover" !== container ? $(container) : this._getMessageContainer($field, row);
                            container && "tooltip" !== container && "popover" !== container && $message.addClass(this.options.err.clazz), $message.find("." + this.options.err.clazz.split(" ").join(".") + "[data-" + ns + "-validator][data-" + ns + '-for="' + field + '"]').remove(), $parent.find("i[data-" + ns + '-icon-for="' + field + '"]').remove(), $field.off(events).on(events, function () {
                                that.updateStatus($(this), that.STATUS_NOT_VALIDATED)
                            }), $field.data(ns + ".messages", $message);
                            for (validatorName in validators)
                                $field.data(ns + ".result." + validatorName, this.STATUS_NOT_VALIDATED), updateAll && i !== total - 1 || $("<small/>").css("display", "none").addClass(this.options.err.clazz).attr("data-" + ns + "-validator", validatorName).attr("data-" + ns + "-for", field).attr("data-" + ns + "-result", this.STATUS_NOT_VALIDATED).html(this._getMessage(field, validatorName)).appendTo($message), alias = validators[validatorName].alias || validatorName, "function" == typeof FormValidation.Validator[alias].init && FormValidation.Validator[alias].init(this, $field, this.options.fields[field].validators[validatorName], validatorName);
                            if (this.options.fields[field].icon !== !1 && "false" !== this.options.fields[field].icon && this.options.icon && this.options.icon.valid && this.options.icon.invalid && this.options.icon.validating && (!updateAll || i === total - 1)) {
                                $parent.addClass(this.options.row.feedback);
                                var $icon = $("<i/>").css("display", "none").addClass(this.options.icon.feedback).attr("data-" + ns + "-icon-for", field).insertAfter($field);
                                (updateAll ? fields : $field).data(ns + ".icon", $icon), "tooltip" !== container && "popover" !== container || ((updateAll ? fields : $field).on(this.options.events.fieldError, function () {
                                    $parent.addClass("fv-has-tooltip")
                                }).on(this.options.events.fieldSuccess, function () {
                                    $parent.removeClass("fv-has-tooltip")
                                }), $field.off("focus.container." + ns).on("focus.container." + ns, function () {
                                    that._showTooltip($(this), container)
                                }).off("blur.container." + ns).on("blur.container." + ns, function () {
                                    that._hideTooltip($(this), container)
                                })), "string" == typeof this.options.fields[field].icon && "true" !== this.options.fields[field].icon ? $icon.appendTo($(this.options.fields[field].icon)) : this._fixIcon($field, $icon)
                            }
                        }
                        fields.on(this.options.events.fieldSuccess, function (e, data) {
                            var onSuccess = that.getOptions(data.field, null, "onSuccess");
                            onSuccess && FormValidation.Helper.call(onSuccess, [e, data])
                        }).on(this.options.events.fieldError, function (e, data) {
                            var onError = that.getOptions(data.field, null, "onError");
                            onError && FormValidation.Helper.call(onError, [e, data])
                        }).on(this.options.events.fieldStatus, function (e, data) {
                            var onStatus = that.getOptions(data.field, null, "onStatus");
                            onStatus && FormValidation.Helper.call(onStatus, [e, data])
                        }).on(this.options.events.validatorError, function (e, data) {
                            var onError = that.getOptions(data.field, data.validator, "onError");
                            onError && FormValidation.Helper.call(onError, [e, data])
                        }).on(this.options.events.validatorIgnored, function (e, data) {
                            var onIgnored = that.getOptions(data.field, data.validator, "onIgnored");
                            onIgnored && FormValidation.Helper.call(onIgnored, [e, data])
                        }).on(this.options.events.validatorSuccess, function (e, data) {
                            var onSuccess = that.getOptions(data.field, data.validator, "onSuccess");
                            onSuccess && FormValidation.Helper.call(onSuccess, [e, data])
                        }), this.onLiveChange(fields, "live", function () {
                            that._exceedThreshold($(this)) && that.validateField($(this))
                        }), fields.trigger($.Event(this.options.events.fieldInit), {
                            bv: this,
                            fv: this,
                            field: field,
                            element: fields
                        })
                    }
                },
                _isExcluded: function ($field) {
                    var ns = this._namespace,
                            excludedAttr = $field.attr("data-" + ns + "-excluded"),
                            field = $field.attr("data-" + ns + "-field") || $field.attr("name");
                    switch (!0) {
                        case !!field && this.options.fields && this.options.fields[field] && ("true" === this.options.fields[field].excluded || this.options.fields[field].excluded === !0):
                        case "true" === excludedAttr:
                        case "" === excludedAttr:
                            return !0;
                        case !!field && this.options.fields && this.options.fields[field] && ("false" === this.options.fields[field].excluded || this.options.fields[field].excluded === !1):
                        case "false" === excludedAttr:
                            return !1;
                        case !!field && this.options.fields && this.options.fields[field] && "function" == typeof this.options.fields[field].excluded:
                            return this.options.fields[field].excluded.call(this, $field, this);
                        case !!field && this.options.fields && this.options.fields[field] && "string" == typeof this.options.fields[field].excluded:
                        case excludedAttr:
                            return FormValidation.Helper.call(this.options.fields[field].excluded, [$field, this]);
                        default:
                            if (this.options.excluded) {
                                "string" == typeof this.options.excluded && (this.options.excluded = $.map(this.options.excluded.split(","), function (item) {
                                    return $.trim(item)
                                }));
                                for (var length = this.options.excluded.length, i = 0; i < length; i++)
                                    if ("string" == typeof this.options.excluded[i] && $field.is(this.options.excluded[i]) || "function" == typeof this.options.excluded[i] && this.options.excluded[i].call(this, $field, this) === !0)
                                        return !0
                            }
                            return !1
                    }
                },
                _getFieldTrigger: function ($field) {
                    var ns = this._namespace,
                            trigger = $field.data(ns + ".trigger");
                    if (trigger)
                        return trigger;
                    var type = $field.attr("type"),
                            name = $field.attr("data-" + ns + "-field"),
                            event = "radio" === type || "checkbox" === type || "file" === type || "SELECT" === $field.get(0).tagName ? "change" : this._ieVersion >= 10 && $field.attr("placeholder") ? "keyup" : this._changeEvent;
                    return trigger = ((this.options.fields[name] ? this.options.fields[name].trigger : null) || this.options.trigger || event).split(" "), $field.data(ns + ".trigger", trigger), trigger
                },
                _getMessage: function (field, validatorName) {
                    if (!this.options.fields[field] || !this.options.fields[field].validators)
                        return "";
                    var validators = this.options.fields[field].validators,
                            alias = validators[validatorName] && validators[validatorName].alias ? validators[validatorName].alias : validatorName;
                    if (!FormValidation.Validator[alias])
                        return "";
                    switch (!0) {
                        case !!validators[validatorName].message:
                            return validators[validatorName].message;
                        case !!this.options.fields[field].message:
                            return this.options.fields[field].message;
                        case !!this.options.message:
                            return this.options.message;
                        case !!FormValidation.I18n[this.options.locale] && !!FormValidation.I18n[this.options.locale][alias] && !!FormValidation.I18n[this.options.locale][alias].default:
                            return FormValidation.I18n[this.options.locale][alias].default;
                        default:
                            return this.DEFAULT_MESSAGE
                    }
                },
                _getMessageContainer: function ($field, row) {
                    if (!this.options.err.parent)
                        throw new Error("The err.parent option is not defined");
                    var $parent = $field.parent();
                    if ($parent.is(row))
                        return $parent;
                    var cssClasses = $parent.attr("class");
                    return cssClasses && this.options.err.parent.test(cssClasses) ? $parent : this._getMessageContainer($parent, row)
                },
                _parseAddOnOptions: function () {
                    var ns = this._namespace,
                            names = this.$form.attr("data-" + ns + "-addons"),
                            addOns = this.options.addOns || {};
                    if (names) {
                        names = names.replace(/\s/g, "").split(",");
                        for (var i = 0; i < names.length; i++)
                            addOns[names[i]] || (addOns[names[i]] = {})
                    }
                    var addOn, attrMap, attr, option;
                    for (addOn in addOns)
                        if (FormValidation.AddOn[addOn]) {
                            if (attrMap = FormValidation.AddOn[addOn].html5Attributes)
                                for (attr in attrMap)
                                    option = this.$form.attr("data-" + ns + "-addons-" + addOn.toLowerCase() + "-" + attr.toLowerCase()), option && (addOns[addOn][attrMap[attr]] = option)
                        } else
                            delete addOns[addOn];
                    return addOns
                },
                _parseOptions: function ($field) {
                    var validator, v, attrName, enabled, optionName, optionAttrName, optionValue, html5AttrName, html5AttrMap, ns = this._namespace,
                            field = $field.attr("name") || $field.attr("data-" + ns + "-field"),
                            validators = {},
                            aliasAttr = new RegExp("^data-" + ns + "-([a-z]+)-alias$"),
                            validatorSet = $.extend({}, FormValidation.Validator);
                    $.each($field.get(0).attributes, function (i, attribute) {
                        attribute.value && aliasAttr.test(attribute.name) && (v = attribute.name.split("-")[2], validatorSet[attribute.value] && (validatorSet[v] = validatorSet[attribute.value], validatorSet[v].alias = attribute.value))
                    });
                    for (v in validatorSet)
                        if (validator = validatorSet[v], attrName = "data-" + ns + "-" + v.toLowerCase(), enabled = $field.attr(attrName) + "", html5AttrMap = "function" == typeof validator.enableByHtml5 ? validator.enableByHtml5($field) : null, html5AttrMap && "false" !== enabled || html5AttrMap !== !0 && ("" === enabled || "true" === enabled || attrName === enabled.toLowerCase())) {
                            validator.html5Attributes = $.extend({}, {
                                message: "message",
                                onerror: "onError",
                                onsuccess: "onSuccess",
                                transformer: "transformer"
                            }, validator.html5Attributes), validators[v] = $.extend({}, html5AttrMap === !0 ? {} : html5AttrMap, validators[v]), validator.alias && (validators[v].alias = validator.alias);
                            for (html5AttrName in validator.html5Attributes)
                                optionName = validator.html5Attributes[html5AttrName], optionAttrName = "data-" + ns + "-" + v.toLowerCase() + "-" + html5AttrName, optionValue = $field.attr(optionAttrName), optionValue && ("true" === optionValue || optionAttrName === optionValue.toLowerCase() ? optionValue = !0 : "false" === optionValue && (optionValue = !1), validators[v][optionName] = optionValue)
                        }
                    var opts = {
                        autoFocus: $field.attr("data-" + ns + "-autofocus"),
                        err: $field.attr("data-" + ns + "-err-container") || $field.attr("data-" + ns + "-container"),
                        enabled: $field.attr("data-" + ns + "-enabled"),
                        excluded: $field.attr("data-" + ns + "-excluded"),
                        icon: $field.attr("data-" + ns + "-icon") || $field.attr("data-" + ns + "-feedbackicons") || (this.options.fields && this.options.fields[field] ? this.options.fields[field].feedbackIcons : null),
                        message: $field.attr("data-" + ns + "-message"),
                        onError: $field.attr("data-" + ns + "-onerror"),
                        onStatus: $field.attr("data-" + ns + "-onstatus"),
                        onSuccess: $field.attr("data-" + ns + "-onsuccess"),
                        row: $field.attr("data-" + ns + "-row") || $field.attr("data-" + ns + "-group") || (this.options.fields && this.options.fields[field] ? this.options.fields[field].group : null),
                        selector: $field.attr("data-" + ns + "-selector"),
                        threshold: $field.attr("data-" + ns + "-threshold"),
                        transformer: $field.attr("data-" + ns + "-transformer"),
                        trigger: $field.attr("data-" + ns + "-trigger"),
                        verbose: $field.attr("data-" + ns + "-verbose"),
                        validators: validators
                    },
                            emptyOptions = $.isEmptyObject(opts),
                            emptyValidators = $.isEmptyObject(validators);
                    return !emptyValidators || !emptyOptions && this.options.fields && this.options.fields[field] ? opts : null
                },
                _submit: function () {
                    var isValid = this.isValid();
                    if (null !== isValid) {
                        var eventType = isValid ? this.options.events.formSuccess : this.options.events.formError,
                                e = $.Event(eventType);
                        this.$form.trigger(e), this.$submitButton && (isValid ? this._onSuccess(e) : this._onError(e))
                    }
                },
                _onError: function (e) {
                    if (!e.isDefaultPrevented()) {
                        if ("submitted" === this.options.live) {
                            this.options.live = "enabled";
                            var that = this;
                            for (var field in this.options.fields)
                                !function (f) {
                                    var fields = that.getFieldElements(f);
                                    fields.length && that.onLiveChange(fields, "live", function () {
                                        that._exceedThreshold($(this)) && that.validateField($(this))
                                    })
                                }(field)
                        }
                        for (var ns = this._namespace, i = 0; i < this.$invalidFields.length; i++) {
                            var $field = this.$invalidFields.eq(i),
                                    autoFocus = this.isOptionEnabled($field.attr("data-" + ns + "-field"), "autoFocus");
                            if (autoFocus) {
                                $field.focus();
                                break
                            }
                        }
                    }
                },
                _onFieldValidated: function ($field, validatorName) {
                    var ns = this._namespace,
                            field = $field.attr("data-" + ns + "-field"),
                            validators = this.options.fields[field].validators,
                            counter = {},
                            numValidators = 0,
                            data = {
                                bv: this,
                                fv: this,
                                field: field,
                                element: $field,
                                validator: validatorName,
                                result: $field.data(ns + ".response." + validatorName)
                            };
                    if (validatorName)
                        switch ($field.data(ns + ".result." + validatorName)) {
                            case this.STATUS_INVALID:
                                $field.trigger($.Event(this.options.events.validatorError), data);
                                break;
                            case this.STATUS_VALID:
                                $field.trigger($.Event(this.options.events.validatorSuccess), data);
                                break;
                            case this.STATUS_IGNORED:
                                $field.trigger($.Event(this.options.events.validatorIgnored), data)
                        }
                    counter[this.STATUS_NOT_VALIDATED] = 0, counter[this.STATUS_VALIDATING] = 0, counter[this.STATUS_INVALID] = 0, counter[this.STATUS_VALID] = 0, counter[this.STATUS_IGNORED] = 0;
                    for (var v in validators)
                        if (validators[v].enabled !== !1) {
                            numValidators++;
                            var result = $field.data(ns + ".result." + v);
                            result && counter[result]++
                        }
                    counter[this.STATUS_VALID] + counter[this.STATUS_IGNORED] === numValidators ? (this.$invalidFields = this.$invalidFields.not($field), $field.trigger($.Event(this.options.events.fieldSuccess), data)) : (0 === counter[this.STATUS_NOT_VALIDATED] || !this.isOptionEnabled(field, "verbose")) && 0 === counter[this.STATUS_VALIDATING] && counter[this.STATUS_INVALID] > 0 && (this.$invalidFields = this.$invalidFields.add($field), $field.trigger($.Event(this.options.events.fieldError), data))
                },
                _onSuccess: function (e) {
                    e.isDefaultPrevented() || this.disableSubmitButtons(!0).defaultSubmit()
                },
                _fixIcon: function ($field, $icon) {},
                _createTooltip: function ($field, message, type) {},
                _destroyTooltip: function ($field, type) {},
                _hideTooltip: function ($field, type) {},
                _showTooltip: function ($field, type) {},
                defaultSubmit: function () {
                    var ns = this._namespace;
                    this.$submitButton && $("<input/>").attr({
                        type: "hidden",
                        name: this.$submitButton.attr("name")
                    }).attr("data-" + ns + "-submit-hidden", "").val(this.$submitButton.val()).appendTo(this.$form), this.$form.off("submit." + ns).submit()
                },
                disableSubmitButtons: function (disabled) {
                    return disabled ? "disabled" !== this.options.live && this.$form.find(this.options.button.selector).attr("disabled", "disabled").addClass(this.options.button.disabled) : this.$form.find(this.options.button.selector).removeAttr("disabled").removeClass(this.options.button.disabled), this
                },
                getFieldElements: function (field) {
                    if (!this._cacheFields[field])
                        if (this.options.fields[field] && this.options.fields[field].selector) {
                            var f = this.$form.find(this.options.fields[field].selector);
                            this._cacheFields[field] = f.length ? f : $(this.options.fields[field].selector)
                        } else
                            this._cacheFields[field] = this.$form.find('[name="' + field + '"]');
                    return this._cacheFields[field]
                },
                getFieldValue: function (field, validatorName) {
                    var $field, ns = this._namespace;
                    if ("string" == typeof field) {
                        if ($field = this.getFieldElements(field), 0 === $field.length)
                            return null
                    } else
                        $field = field, field = $field.attr("data-" + ns + "-field");
                    if (!field || !this.options.fields[field])
                        return $field.val();
                    var transformer = (this.options.fields[field].validators && this.options.fields[field].validators[validatorName] ? this.options.fields[field].validators[validatorName].transformer : null) || this.options.fields[field].transformer;
                    return transformer ? FormValidation.Helper.call(transformer, [$field, validatorName, this]) : $field.val()
                },
                getNamespace: function () {
                    return this._namespace
                },
                getOptions: function (field, validator, option) {
                    var ns = this._namespace;
                    if (!field)
                        return option ? this.options[option] : this.options;
                    if ("object" == typeof field && (field = field.attr("data-" + ns + "-field")), !this.options.fields[field])
                        return null;
                    var options = this.options.fields[field];
                    return validator ? options.validators && options.validators[validator] ? option ? options.validators[validator][option] : options.validators[validator] : null : option ? options[option] : options
                },
                getStatus: function (field, validatorName) {
                    var ns = this._namespace;
                    switch (typeof field) {
                        case "object":
                            return field.data(ns + ".result." + validatorName);
                        case "string":
                        default:
                            return this.getFieldElements(field).eq(0).data(ns + ".result." + validatorName)
                    }
                },
                isOptionEnabled: function (field, option) {
                    return !(!this.options.fields[field] || "true" !== this.options.fields[field][option] && this.options.fields[field][option] !== !0) || (!this.options.fields[field] || "false" !== this.options.fields[field][option] && this.options.fields[field][option] !== !1) && ("true" === this.options[option] || this.options[option] === !0)
                },
                isValid: function () {
                    for (var field in this.options.fields) {
                        var isValidField = this.isValidField(field);
                        if (null === isValidField)
                            return null;
                        if (isValidField === !1)
                            return !1
                    }
                    return !0
                },
                isValidContainer: function (container) {
                    var that = this,
                            ns = this._namespace,
                            fields = [],
                            $container = "string" == typeof container ? $(container) : container;
                    if (0 === $container.length)
                        return !0;
                    $container.find("[data-" + ns + "-field]").each(function () {
                        var $field = $(this);
                        that._isExcluded($field) || fields.push($field)
                    });
                    for (var total = fields.length, i = 0; i < total; i++) {
                        var $f = fields[i],
                                field = $f.attr("data-" + ns + "-field"),
                                $errors = $f.data(ns + ".messages").find("." + this.options.err.clazz.split(" ").join(".") + "[data-" + ns + "-validator][data-" + ns + '-for="' + field + '"]');
                        if (!this.options.fields || !this.options.fields[field] || "false" !== this.options.fields[field].enabled && this.options.fields[field].enabled !== !1) {
                            if ($errors.filter("[data-" + ns + '-result="' + this.STATUS_INVALID + '"]').length > 0)
                                return !1;
                            if ($errors.filter("[data-" + ns + '-result="' + this.STATUS_NOT_VALIDATED + '"]').length > 0 || $errors.filter("[data-" + ns + '-result="' + this.STATUS_VALIDATING + '"]').length > 0)
                                return null
                        }
                    }
                    return !0
                },
                isValidField: function (field) {
                    var ns = this._namespace,
                            fields = $([]);
                    switch (typeof field) {
                        case "object":
                            fields = field, field = field.attr("data-" + ns + "-field");
                            break;
                        case "string":
                            fields = this.getFieldElements(field)
                    }
                    if (0 === fields.length || !this.options.fields[field] || "false" === this.options.fields[field].enabled || this.options.fields[field].enabled === !1)
                        return !0;
                    for (var $field, validatorName, status, type = fields.attr("type"), total = "radio" === type || "checkbox" === type ? 1 : fields.length, i = 0; i < total; i++)
                        if ($field = fields.eq(i), !this._isExcluded($field))
                            for (validatorName in this.options.fields[field].validators)
                                if (this.options.fields[field].validators[validatorName].enabled !== !1) {
                                    if (status = $field.data(ns + ".result." + validatorName), status === this.STATUS_VALIDATING || status === this.STATUS_NOT_VALIDATED)
                                        return null;
                                    if (status === this.STATUS_INVALID)
                                        return !1
                                }
                    return !0
                },
                offLiveChange: function ($fields, namespace) {
                    if (null === $fields || 0 === $fields.length)
                        return this;
                    var ns = this._namespace,
                            trigger = this._getFieldTrigger($fields.eq(0)),
                            events = $.map(trigger, function (item) {
                                return item + "." + namespace + "." + ns
                            }).join(" ");
                    return $fields.off(events), this
                },
                onLiveChange: function ($fields, namespace, handler) {
                    if (null === $fields || 0 === $fields.length)
                        return this;
                    var ns = this._namespace,
                            trigger = this._getFieldTrigger($fields.eq(0)),
                            events = $.map(trigger, function (item) {
                                return item + "." + namespace + "." + ns
                            }).join(" ");
                    switch (this.options.live) {
                        case "submitted":
                            break;
                        case "disabled":
                            $fields.off(events);
                            break;
                        case "enabled":
                        default:
                            $fields.off(events).on(events, function (e) {
                                handler.apply(this, arguments)
                            })
                    }
                    return this
                },
                updateMessage: function (field, validator, message) {
                    var that = this,
                            ns = this._namespace,
                            $fields = $([]);
                    switch (typeof field) {
                        case "object":
                            $fields = field, field = field.attr("data-" + ns + "-field");
                            break;
                        case "string":
                            $fields = this.getFieldElements(field)
                    }
                    return $fields.each(function () {
                        $(this).data(ns + ".messages").find("." + that.options.err.clazz + "[data-" + ns + '-validator="' + validator + '"][data-' + ns + '-for="' + field + '"]').html(message)
                    }), this
                },
                updateStatus: function (field, status, validatorName) {
                    var ns = this._namespace,
                            fields = $([]);
                    switch (typeof field) {
                        case "object":
                            fields = field, field = field.attr("data-" + ns + "-field");
                            break;
                        case "string":
                            fields = this.getFieldElements(field)
                    }
                    if (!field || !this.options.fields[field])
                        return this;
                    status === this.STATUS_NOT_VALIDATED && (this._submitIfValid = !1);
                    for (var that = this, type = fields.attr("type"), row = this.options.fields[field].row || this.options.row.selector, total = "radio" === type || "checkbox" === type ? 1 : fields.length, i = 0; i < total; i++) {
                        var $field = fields.eq(i);
                        if (!this._isExcluded($field)) {
                            var isValidating, isNotValidated, $parent = $field.closest(row),
                                    $message = $field.data(ns + ".messages"),
                                    $allErrors = $message.find("." + this.options.err.clazz.split(" ").join(".") + "[data-" + ns + "-validator][data-" + ns + '-for="' + field + '"]'),
                                    $errors = validatorName ? $allErrors.filter("[data-" + ns + '-validator="' + validatorName + '"]') : $allErrors,
                                    $icon = $field.data(ns + ".icon"),
                                    container = "function" == typeof (this.options.fields[field].container || this.options.fields[field].err || this.options.err.container) ? (this.options.fields[field].container || this.options.fields[field].err || this.options.err.container).call(this, $field, this) : this.options.fields[field].container || this.options.fields[field].err || this.options.err.container,
                                    isValidField = null;
                            if (validatorName)
                                $field.data(ns + ".result." + validatorName, status);
                            else
                                for (var v in this.options.fields[field].validators)
                                    $field.data(ns + ".result." + v, status);
                            switch ($errors.attr("data-" + ns + "-result", status), status) {
                                case this.STATUS_VALIDATING:
                                    isValidField = null, this.disableSubmitButtons(!0), $field.removeClass(this.options.control.valid).removeClass(this.options.control.invalid), $parent.removeClass(this.options.row.valid).removeClass(this.options.row.invalid), $icon && $icon.removeClass(this.options.icon.valid).removeClass(this.options.icon.invalid).addClass(this.options.icon.validating).show();
                                    break;
                                case this.STATUS_INVALID:
                                    isValidField = !1, this.disableSubmitButtons(!0), $field.removeClass(this.options.control.valid).addClass(this.options.control.invalid), $parent.removeClass(this.options.row.valid).addClass(this.options.row.invalid), $icon && $icon.removeClass(this.options.icon.valid).removeClass(this.options.icon.validating).addClass(this.options.icon.invalid).show();
                                    break;
                                case this.STATUS_IGNORED:
                                case this.STATUS_VALID:
                                    isValidating = $allErrors.filter("[data-" + ns + '-result="' + this.STATUS_VALIDATING + '"]').length > 0, isNotValidated = $allErrors.filter("[data-" + ns + '-result="' + this.STATUS_NOT_VALIDATED + '"]').length > 0;
                                    var numIgnored = $allErrors.filter("[data-" + ns + '-result="' + this.STATUS_IGNORED + '"]').length;
                                    isValidField = isValidating || isNotValidated ? null : $allErrors.filter("[data-" + ns + '-result="' + this.STATUS_VALID + '"]').length + numIgnored === $allErrors.length, $field.removeClass(this.options.control.valid).removeClass(this.options.control.invalid), isValidField === !0 ? (this.disableSubmitButtons(this.isValid() === !1), status === this.STATUS_VALID && $field.addClass(this.options.control.valid)) : isValidField === !1 && (this.disableSubmitButtons(!0), status === this.STATUS_VALID && $field.addClass(this.options.control.invalid)), $icon && ($icon.removeClass(this.options.icon.invalid).removeClass(this.options.icon.validating).removeClass(this.options.icon.valid), status !== this.STATUS_VALID && numIgnored === $allErrors.length || $icon.addClass(isValidating ? this.options.icon.validating : null === isValidField ? "" : isValidField ? this.options.icon.valid : this.options.icon.invalid).show());
                                    var isValidContainer = this.isValidContainer($parent);
                                    null !== isValidContainer && ($parent.removeClass(this.options.row.valid).removeClass(this.options.row.invalid), status !== this.STATUS_VALID && numIgnored === $allErrors.length || $parent.addClass(isValidContainer ? this.options.row.valid : this.options.row.invalid));
                                    break;
                                case this.STATUS_NOT_VALIDATED:
                                default:
                                    isValidField = null, this.disableSubmitButtons(!1), $field.removeClass(this.options.control.valid).removeClass(this.options.control.invalid), $parent.removeClass(this.options.row.valid).removeClass(this.options.row.invalid), $icon && $icon.removeClass(this.options.icon.valid).removeClass(this.options.icon.invalid).removeClass(this.options.icon.validating).hide()
                            }
                            !$icon || "tooltip" !== container && "popover" !== container ? status === this.STATUS_INVALID ? $errors.show() : $errors.hide() : isValidField === !1 ? this._createTooltip($field, $allErrors.filter("[data-" + ns + '-result="' + that.STATUS_INVALID + '"]').eq(0).html(), container) : this._destroyTooltip($field, container), $field.trigger($.Event(this.options.events.fieldStatus), {
                                bv: this,
                                fv: this,
                                field: field,
                                element: $field,
                                status: status
                            }), this._onFieldValidated($field, validatorName)
                        }
                    }
                    return this
                },
                validate: function () {
                    if ($.isEmptyObject(this.options.fields))
                        return this._submit(), this;
                    this.$form.trigger($.Event(this.options.events.formPreValidate)), this.disableSubmitButtons(!0), this._submitIfValid = !1;
                    for (var field in this.options.fields)
                        this.validateField(field);
                    return this._submit(), this._submitIfValid = !0, this
                },
                validateField: function (field) {
                    var ns = this._namespace,
                            fields = $([]);
                    switch (typeof field) {
                        case "object":
                            fields = field, field = field.attr("data-" + ns + "-field");
                            break;
                        case "string":
                            fields = this.getFieldElements(field)
                    }
                    if (0 === fields.length || !this.options.fields[field] || "false" === this.options.fields[field].enabled || this.options.fields[field].enabled === !1)
                        return this;
                    for (var validatorName, alias, validateResult, that = this, type = fields.attr("type"), total = "radio" === type || "checkbox" === type ? 1 : fields.length, updateAll = "radio" === type || "checkbox" === type, validators = this.options.fields[field].validators, verbose = this.isOptionEnabled(field, "verbose"), i = 0; i < total; i++) {
                        var $field = fields.eq(i);
                        if (!this._isExcluded($field)) {
                            var stop = !1;
                            for (validatorName in validators) {
                                if ($field.data(ns + ".dfs." + validatorName) && $field.data(ns + ".dfs." + validatorName).reject(), stop)
                                    break;
                                var result = $field.data(ns + ".result." + validatorName);
                                if (result !== this.STATUS_VALID && result !== this.STATUS_INVALID)
                                    if (validators[validatorName].enabled !== !1)
                                        if ($field.data(ns + ".result." + validatorName, this.STATUS_VALIDATING), alias = validators[validatorName].alias || validatorName, validateResult = FormValidation.Validator[alias].validate(this, $field, validators[validatorName], validatorName), "object" == typeof validateResult && validateResult.resolve)
                                            this.updateStatus(updateAll ? field : $field, this.STATUS_VALIDATING, validatorName), $field.data(ns + ".dfs." + validatorName, validateResult), validateResult.done(function ($f, v, response) {
                                                $f.removeData(ns + ".dfs." + v).data(ns + ".response." + v, response), response.message && that.updateMessage($f, v, response.message), that.updateStatus(updateAll ? $f.attr("data-" + ns + "-field") : $f, response.valid === !0 ? that.STATUS_VALID : response.valid === !1 ? that.STATUS_INVALID : that.STATUS_IGNORED, v), response.valid && that._submitIfValid === !0 ? that._submit() : response.valid !== !1 || verbose || (stop = !0)
                                            });
                                        else if ("object" == typeof validateResult && void 0 !== validateResult.valid) {
                                            if ($field.data(ns + ".response." + validatorName, validateResult), validateResult.message && this.updateMessage(updateAll ? field : $field, validatorName, validateResult.message), this.updateStatus(updateAll ? field : $field, validateResult.valid === !0 ? this.STATUS_VALID : validateResult.valid === !1 ? this.STATUS_INVALID : this.STATUS_IGNORED, validatorName), validateResult.valid === !1 && !verbose)
                                                break
                                        } else if ("boolean" == typeof validateResult) {
                                            if ($field.data(ns + ".response." + validatorName, validateResult), this.updateStatus(updateAll ? field : $field, validateResult ? this.STATUS_VALID : this.STATUS_INVALID, validatorName), !validateResult && !verbose)
                                                break
                                        } else
                                            null === validateResult && ($field.data(ns + ".response." + validatorName, validateResult), this.updateStatus(updateAll ? field : $field, this.STATUS_IGNORED, validatorName));
                                    else
                                        this.updateStatus(updateAll ? field : $field, this.STATUS_IGNORED, validatorName);
                                else
                                    this._onFieldValidated($field, validatorName)
                            }
                        }
                    }
                    return this
                },
                addField: function (field, options) {
                    var ns = this._namespace,
                            fields = $([]);
                    switch (typeof field) {
                        case "object":
                            fields = field, field = field.attr("data-" + ns + "-field") || field.attr("name");
                            break;
                        case "string":
                            delete this._cacheFields[field], fields = this.getFieldElements(field)
                    }
                    fields.attr("data-" + ns + "-field", field);
                    for (var type = fields.attr("type"), total = "radio" === type || "checkbox" === type ? 1 : fields.length, i = 0; i < total; i++) {
                        var $field = fields.eq(i),
                                opts = this._parseOptions($field);
                        opts = null === opts ? options : $.extend(!0, opts, options), this.options.fields[field] = $.extend(!0, this.options.fields[field], opts), this._cacheFields[field] = this._cacheFields[field] ? this._cacheFields[field].add($field) : $field, this._initField("checkbox" === type || "radio" === type ? field : $field)
                    }
                    return this.disableSubmitButtons(!1), this.$form.trigger($.Event(this.options.events.fieldAdded), {
                        field: field,
                        element: fields,
                        options: this.options.fields[field]
                    }), this
                },
                destroy: function () {
                    var i, field, fields, $field, validator, $icon, row, alias, ns = this._namespace;
                    for (field in this.options.fields)
                        for (fields = this.getFieldElements(field), i = 0; i < fields.length; i++) {
                            $field = fields.eq(i);
                            for (validator in this.options.fields[field].validators)
                                $field.data(ns + ".dfs." + validator) && $field.data(ns + ".dfs." + validator).reject(), $field.removeData(ns + ".result." + validator).removeData(ns + ".response." + validator).removeData(ns + ".dfs." + validator), alias = this.options.fields[field].validators[validator].alias || validator, "function" == typeof FormValidation.Validator[alias].destroy && FormValidation.Validator[alias].destroy(this, $field, this.options.fields[field].validators[validator], validator)
                        }
                    for (field in this.options.fields)
                        for (fields = this.getFieldElements(field), row = this.options.fields[field].row || this.options.row.selector, i = 0; i < fields.length; i++) {
                            $field = fields.eq(i), $field.data(ns + ".messages").find("." + this.options.err.clazz.split(" ").join(".") + "[data-" + ns + "-validator][data-" + ns + '-for="' + field + '"]').remove().end().end().removeData(ns + ".messages").closest(row).removeClass(this.options.row.valid).removeClass(this.options.row.invalid).removeClass(this.options.row.feedback).end().off("." + ns).removeAttr("data-" + ns + "-field");
                            var container = "function" == typeof (this.options.fields[field].container || this.options.fields[field].err || this.options.err.container) ? (this.options.fields[field].container || this.options.fields[field].err || this.options.err.container).call(this, $field, this) : this.options.fields[field].container || this.options.fields[field].err || this.options.err.container;
                            "tooltip" !== container && "popover" !== container || this._destroyTooltip($field, container), $icon = $field.data(ns + ".icon"), $icon && $icon.remove(), $field.removeData(ns + ".icon").removeData(ns + ".trigger")
                        }
                    for (var addOn in this.options.addOns)
                        "function" == typeof FormValidation.AddOn[addOn].destroy && FormValidation.AddOn[addOn].destroy(this, this.options.addOns[addOn]);
                    this.disableSubmitButtons(!1), this.$hiddenButton.remove(), this.$form.removeClass(this.options.elementClass).off("." + ns).removeData("bootstrapValidator").removeData("formValidation").find("[data-" + ns + "-submit-hidden]").remove().end().find('[type="submit"]').off("click." + ns)
                },
                enableFieldValidators: function (field, enabled, validatorName) {
                    var validators = this.options.fields[field].validators;
                    if (validatorName && validators && validators[validatorName] && validators[validatorName].enabled !== enabled)
                        this.options.fields[field].validators[validatorName].enabled = enabled, this.updateStatus(field, this.STATUS_NOT_VALIDATED, validatorName);
                    else if (!validatorName && this.options.fields[field].enabled !== enabled) {
                        this.options.fields[field].enabled = enabled;
                        for (var v in validators)
                            this.enableFieldValidators(field, enabled, v)
                    }
                    return this
                },
                getDynamicOption: function (field, option) {
                    var $field = "string" == typeof field ? this.getFieldElements(field) : field,
                            value = $field.val();
                    if ("function" == typeof option)
                        return FormValidation.Helper.call(option, [value, this, $field]);
                    if ("string" == typeof option) {
                        var $f = this.getFieldElements(option);
                        return $f.length ? $f.val() : FormValidation.Helper.call(option, [value, this, $field]) || option
                    }
                    return null
                },
                getForm: function () {
                    return this.$form
                },
                getInvalidFields: function () {
                    return this.$invalidFields
                },
                getLocale: function () {
                    return this.options.locale
                },
                getMessages: function (field, validator) {
                    var that = this,
                            ns = this._namespace,
                            messages = [],
                            $fields = $([]);
                    switch (!0) {
                        case field && "object" == typeof field:
                            $fields = field;
                            break;
                        case field && "string" == typeof field:
                            var f = this.getFieldElements(field);
                            if (f.length > 0) {
                                var type = f.attr("type");
                                $fields = "radio" === type || "checkbox" === type ? f.eq(0) : f
                            }
                            break;
                        default:
                            $fields = this.$invalidFields
                    }
                    var filter = validator ? "[data-" + ns + '-validator="' + validator + '"]' : "";
                    return $fields.each(function () {
                        messages = messages.concat($(this).data(ns + ".messages").find("." + that.options.err.clazz + "[data-" + ns + '-for="' + $(this).attr("data-" + ns + "-field") + '"][data-' + ns + '-result="' + that.STATUS_INVALID + '"]' + filter).map(function () {
                            var v = $(this).attr("data-" + ns + "-validator"),
                                    f = $(this).attr("data-" + ns + "-for");
                            return that.options.fields[f].validators[v].enabled === !1 ? "" : $(this).html()
                        }).get())
                    }), messages
                },
                getSubmitButton: function () {
                    return this.$submitButton
                },
                removeField: function (field) {
                    var ns = this._namespace,
                            fields = $([]);
                    switch (typeof field) {
                        case "object":
                            fields = field, field = field.attr("data-" + ns + "-field") || field.attr("name"), fields.attr("data-" + ns + "-field", field);
                            break;
                        case "string":
                            fields = this.getFieldElements(field)
                    }
                    if (0 === fields.length)
                        return this;
                    for (var type = fields.attr("type"), total = "radio" === type || "checkbox" === type ? 1 : fields.length, i = 0; i < total; i++) {
                        var $field = fields.eq(i);
                        this.$invalidFields = this.$invalidFields.not($field), this._cacheFields[field] = this._cacheFields[field].not($field)
                    }
                    return this._cacheFields[field] && 0 !== this._cacheFields[field].length || delete this.options.fields[field], "checkbox" !== type && "radio" !== type || this._initField(field), this.disableSubmitButtons(!1), this.$form.trigger($.Event(this.options.events.fieldRemoved), {
                        field: field,
                        element: fields
                    }), this
                },
                resetField: function (field, resetValue) {
                    var ns = this._namespace,
                            $fields = $([]);
                    switch (typeof field) {
                        case "object":
                            $fields = field, field = field.attr("data-" + ns + "-field");
                            break;
                        case "string":
                            $fields = this.getFieldElements(field)
                    }
                    var total = $fields.length;
                    if (this.options.fields[field])
                        for (var i = 0; i < total; i++)
                            for (var validator in this.options.fields[field].validators)
                                $fields.eq(i).removeData(ns + ".dfs." + validator);
                    if (resetValue) {
                        var type = $fields.attr("type");
                        "radio" === type || "checkbox" === type ? $fields.prop("checked", !1).removeAttr("selected") : $fields.val("")
                    }
                    return this.updateStatus(field, this.STATUS_NOT_VALIDATED), this
                },
                resetForm: function (resetValue) {
                    for (var field in this.options.fields)
                        this.resetField(field, resetValue);
                    return this.$invalidFields = $([]), this.$submitButton = null, this.disableSubmitButtons(!1), this
                },
                revalidateField: function (field) {
                    return this.updateStatus(field, this.STATUS_NOT_VALIDATED).validateField(field), this
                },
                setLocale: function (locale) {
                    return this.options.locale = locale, this.$form.trigger($.Event(this.options.events.localeChanged), {
                        locale: locale,
                        bv: this,
                        fv: this
                    }), this
                },
                updateOption: function (field, validator, option, value) {
                    var ns = this._namespace;
                    return "object" == typeof field && (field = field.attr("data-" + ns + "-field")), this.options.fields[field] && this.options.fields[field].validators[validator] && (this.options.fields[field].validators[validator][option] = value, this.updateStatus(field, this.STATUS_NOT_VALIDATED, validator)), this
                },
                validateContainer: function (container) {
                    var that = this,
                            ns = this._namespace,
                            fields = [],
                            $container = "string" == typeof container ? $(container) : container;
                    if (0 === $container.length)
                        return this;
                    $container.find("[data-" + ns + "-field]").each(function () {
                        var $field = $(this);
                        that._isExcluded($field) || fields.push($field)
                    });
                    for (var total = fields.length, i = 0; i < total; i++)
                        this.validateField(fields[i]);
                    return this
                }
            }, $.fn.formValidation = function (option) {
                var params = arguments;
                return this.each(function () {
                    var $this = $(this),
                            data = $this.data("formValidation"),
                            options = "object" == typeof option && option;
                    if (!data) {
                        var framework = (options.framework || $this.attr("data-fv-framework") || "bootstrap").toLowerCase(),
                                clazz = framework.substr(0, 1).toUpperCase() + framework.substr(1);
                        if ("undefined" == typeof FormValidation.Framework[clazz])
                            throw new Error("The class FormValidation.Framework." + clazz + " is not implemented");
                        data = new FormValidation.Framework[clazz](this, options), $this.addClass("fv-form-" + framework).data("formValidation", data)
                    }
                    "string" == typeof option && data[option].apply(data, Array.prototype.slice.call(params, 1))
                })
            }, $.fn.formValidation.Constructor = FormValidation.Base, $.fn.formValidation.DEFAULT_MESSAGE = "This value is not valid", $.fn.formValidation.DEFAULT_OPTIONS = {
                autoFocus: !0,
                declarative: !0,
                elementClass: "fv-form",
                events: {
                    formInit: "init.form.fv",
                    formPreValidate: "prevalidate.form.fv",
                    formError: "err.form.fv",
                    formSuccess: "success.form.fv",
                    fieldAdded: "added.field.fv",
                    fieldRemoved: "removed.field.fv",
                    fieldInit: "init.field.fv",
                    fieldError: "err.field.fv",
                    fieldSuccess: "success.field.fv",
                    fieldStatus: "status.field.fv",
                    localeChanged: "changed.locale.fv",
                    validatorError: "err.validator.fv",
                    validatorSuccess: "success.validator.fv",
                    validatorIgnored: "ignored.validator.fv"
                },
                excluded: [":disabled", ":hidden", ":not(:visible)"],
                fields: null,
                live: "enabled",
                locale: "en_US",
                message: null,
                threshold: null,
                verbose: !0,
                button: {
                    selector: '[type="submit"]:not([formnovalidate])',
                    disabled: ""
                },
                control: {
                    valid: "",
                    invalid: ""
                },
                err: {
                    clazz: "",
                    container: null,
                    parent: null
                },
                icon: {
                    valid: null,
                    invalid: null,
                    validating: null,
                    feedback: ""
                },
                row: {
                    selector: null,
                    valid: "",
                    invalid: "",
                    feedback: ""
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.Helper = {
                call: function (functionName, args) {
                    if ("function" == typeof functionName)
                        return functionName.apply(this, args);
                    if ("string" == typeof functionName) {
                        "()" === functionName.substring(functionName.length - 2) && (functionName = functionName.substring(0, functionName.length - 2));
                        for (var ns = functionName.split("."), func = ns.pop(), context = window, i = 0; i < ns.length; i++)
                            context = context[ns[i]];
                        return "undefined" == typeof context[func] ? null : context[func].apply(this, args)
                    }
                },
                date: function (year, month, day, notInFuture) {
                    if (isNaN(year) || isNaN(month) || isNaN(day))
                        return !1;
                    if (day.length > 2 || month.length > 2 || year.length > 4)
                        return !1;
                    if (day = parseInt(day, 10), month = parseInt(month, 10), year = parseInt(year, 10), year < 1e3 || year > 9999 || month <= 0 || month > 12)
                        return !1;
                    var numDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
                    if ((year % 400 === 0 || year % 100 !== 0 && year % 4 === 0) && (numDays[1] = 29), day <= 0 || day > numDays[month - 1])
                        return !1;
                    if (notInFuture === !0) {
                        var currentDate = new Date,
                                currentYear = currentDate.getFullYear(),
                                currentMonth = currentDate.getMonth(),
                                currentDay = currentDate.getDate();
                        return year < currentYear || year === currentYear && month - 1 < currentMonth || year === currentYear && month - 1 === currentMonth && day < currentDay
                    }
                    return !0
                },
                format: function (message, parameters) {
                    $.isArray(parameters) || (parameters = [parameters]);
                    for (var i in parameters)
                        message = message.replace("%s", parameters[i]);
                    return message
                },
                luhn: function (value) {
                    for (var length = value.length, mul = 0, prodArr = [
                        [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
                        [0, 2, 4, 6, 8, 1, 3, 5, 7, 9]
                    ], sum = 0; length--; )
                        sum += prodArr[mul][parseInt(value.charAt(length), 10)], mul ^= 1;
                    return sum % 10 === 0 && sum > 0
                },
                mod11And10: function (value) {
                    for (var check = 5, length = value.length, i = 0; i < length; i++)
                        check = (2 * (check || 10) % 11 + parseInt(value.charAt(i), 10)) % 10;
                    return 1 === check
                },
                mod37And36: function (value, alphabet) {
                    alphabet = alphabet || "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    for (var modulus = alphabet.length, length = value.length, check = Math.floor(modulus / 2), i = 0; i < length; i++)
                        check = (2 * (check || modulus) % (modulus + 1) + alphabet.indexOf(value.charAt(i))) % modulus;
                    return 1 === check
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    between: {
                        default: "Please enter a value between %s and %s",
                        notInclusive: "Please enter a value between %s and %s strictly"
                    }
                }
            }), FormValidation.Validator.between = {
                html5Attributes: {
                    message: "message",
                    min: "min",
                    max: "max",
                    inclusive: "inclusive"
                },
                enableByHtml5: function ($field) {
                    return "range" === $field.attr("type") && {
                        min: $field.attr("min"),
                        max: $field.attr("max")
                    }
                },
                validate: function (validator, $field, options, validatorName) {
                    var value = validator.getFieldValue($field, validatorName);
                    if ("" === value)
                        return !0;
                    value = this._format(value);
                    var locale = validator.getLocale(),
                            min = $.isNumeric(options.min) ? options.min : validator.getDynamicOption($field, options.min),
                            max = $.isNumeric(options.max) ? options.max : validator.getDynamicOption($field, options.max),
                            minValue = this._format(min),
                            maxValue = this._format(max);
                    return options.inclusive === !0 || void 0 === options.inclusive ? {
                        valid: $.isNumeric(value) && parseFloat(value) >= minValue && parseFloat(value) <= maxValue,
                        message: FormValidation.Helper.format(options.message || FormValidation.I18n[locale].between.default, [min, max])
                    } : {
                        valid: $.isNumeric(value) && parseFloat(value) > minValue && parseFloat(value) < maxValue,
                        message: FormValidation.Helper.format(options.message || FormValidation.I18n[locale].between.notInclusive, [min, max])
                    }
                },
                _format: function (value) {
                    return (value + "").replace(",", ".")
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    callback: {
                        default: "Please enter a valid value"
                    }
                }
            }), FormValidation.Validator.callback = {
                html5Attributes: {
                    message: "message",
                    callback: "callback"
                },
                validate: function (validator, $field, options, validatorName) {
                    var value = validator.getFieldValue($field, validatorName),
                            dfd = new $.Deferred,
                            result = {
                                valid: !0
                            };
                    if (options.callback) {
                        var response = FormValidation.Helper.call(options.callback, [value, validator, $field]);
                        result = "boolean" == typeof response || null === response ? {
                            valid: response
                        } : response
                    }
                    return dfd.resolve($field, validatorName, result), dfd
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    choice: {
                        default: "Please enter a valid value",
                        less: "Please choose %s options at minimum",
                        more: "Please choose %s options at maximum",
                        between: "Please choose %s - %s options"
                    }
                }
            }), FormValidation.Validator.choice = {
                html5Attributes: {
                    message: "message",
                    min: "min",
                    max: "max"
                },
                validate: function (validator, $field, options, validatorName) {
                    var locale = validator.getLocale(),
                            ns = validator.getNamespace(),
                            numChoices = $field.is("select") ? validator.getFieldElements($field.attr("data-" + ns + "-field")).find("option").filter(":selected").length : validator.getFieldElements($field.attr("data-" + ns + "-field")).filter(":checked").length,
                            min = options.min ? $.isNumeric(options.min) ? options.min : validator.getDynamicOption($field, options.min) : null,
                            max = options.max ? $.isNumeric(options.max) ? options.max : validator.getDynamicOption($field, options.max) : null,
                            isValid = !0,
                            message = options.message || FormValidation.I18n[locale].choice.default;
                    switch ((min && numChoices < parseInt(min, 10) || max && numChoices > parseInt(max, 10)) && (isValid = !1), !0) {
                        case !!min && !!max:
                            message = FormValidation.Helper.format(options.message || FormValidation.I18n[locale].choice.between, [parseInt(min, 10), parseInt(max, 10)]);
                            break;
                        case !!min:
                            message = FormValidation.Helper.format(options.message || FormValidation.I18n[locale].choice.less, parseInt(min, 10));
                            break;
                        case !!max:
                            message = FormValidation.Helper.format(options.message || FormValidation.I18n[locale].choice.more, parseInt(max, 10))
                    }
                    return {
                        valid: isValid,
                        message: message
                    }
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    color: {
                        default: "Please enter a valid color"
                    }
                }
            }), FormValidation.Validator.color = {
                html5Attributes: {
                    message: "message",
                    type: "type"
                },
                enableByHtml5: function ($field) {
                    return "color" === $field.attr("type")
                },
                SUPPORTED_TYPES: ["hex", "rgb", "rgba", "hsl", "hsla", "keyword"],
                KEYWORD_COLORS: ["aliceblue", "antiquewhite", "aqua", "aquamarine", "azure", "beige", "bisque", "black", "blanchedalmond", "blue", "blueviolet", "brown", "burlywood", "cadetblue", "chartreuse", "chocolate", "coral", "cornflowerblue", "cornsilk", "crimson", "cyan", "darkblue", "darkcyan", "darkgoldenrod", "darkgray", "darkgreen", "darkgrey", "darkkhaki", "darkmagenta", "darkolivegreen", "darkorange", "darkorchid", "darkred", "darksalmon", "darkseagreen", "darkslateblue", "darkslategray", "darkslategrey", "darkturquoise", "darkviolet", "deeppink", "deepskyblue", "dimgray", "dimgrey", "dodgerblue", "firebrick", "floralwhite", "forestgreen", "fuchsia", "gainsboro", "ghostwhite", "gold", "goldenrod", "gray", "green", "greenyellow", "grey", "honeydew", "hotpink", "indianred", "indigo", "ivory", "khaki", "lavender", "lavenderblush", "lawngreen", "lemonchiffon", "lightblue", "lightcoral", "lightcyan", "lightgoldenrodyellow", "lightgray", "lightgreen", "lightgrey", "lightpink", "lightsalmon", "lightseagreen", "lightskyblue", "lightslategray", "lightslategrey", "lightsteelblue", "lightyellow", "lime", "limegreen", "linen", "magenta", "maroon", "mediumaquamarine", "mediumblue", "mediumorchid", "mediumpurple", "mediumseagreen", "mediumslateblue", "mediumspringgreen", "mediumturquoise", "mediumvioletred", "midnightblue", "mintcream", "mistyrose", "moccasin", "navajowhite", "navy", "oldlace", "olive", "olivedrab", "orange", "orangered", "orchid", "palegoldenrod", "palegreen", "paleturquoise", "palevioletred", "papayawhip", "peachpuff", "peru", "pink", "plum", "powderblue", "purple", "red", "rosybrown", "royalblue", "saddlebrown", "salmon", "sandybrown", "seagreen", "seashell", "sienna", "silver", "skyblue", "slateblue", "slategray", "slategrey", "snow", "springgreen", "steelblue", "tan", "teal", "thistle", "tomato", "transparent", "turquoise", "violet", "wheat", "white", "whitesmoke", "yellow", "yellowgreen"],
                validate: function (validator, $field, options, validatorName) {
                    var value = validator.getFieldValue($field, validatorName);
                    if ("" === value)
                        return !0;
                    if (this.enableByHtml5($field))
                        return /^#[0-9A-F]{6}$/i.test(value);
                    var types = options.type || this.SUPPORTED_TYPES;
                    $.isArray(types) || (types = types.replace(/s/g, "").split(","));
                    for (var method, type, isValid = !1, i = 0; i < types.length; i++)
                        if (type = types[i], method = "_" + type.toLowerCase(), isValid = isValid || this[method](value))
                            return !0;
                    return !1
                },
                _hex: function (value) {
                    return /(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(value)
                },
                _hsl: function (value) {
                    return /^hsl\((\s*(-?\d+)\s*,)(\s*(\b(0?\d{1,2}|100)\b%)\s*,)(\s*(\b(0?\d{1,2}|100)\b%)\s*)\)$/.test(value)
                },
                _hsla: function (value) {
                    return /^hsla\((\s*(-?\d+)\s*,)(\s*(\b(0?\d{1,2}|100)\b%)\s*,){2}(\s*(0?(\.\d+)?|1(\.0+)?)\s*)\)$/.test(value)
                },
                _keyword: function (value) {
                    return $.inArray(value, this.KEYWORD_COLORS) >= 0
                },
                _rgb: function (value) {
                    var regexInteger = /^rgb\((\s*(\b([01]?\d{1,2}|2[0-4]\d|25[0-5])\b)\s*,){2}(\s*(\b([01]?\d{1,2}|2[0-4]\d|25[0-5])\b)\s*)\)$/,
                            regexPercent = /^rgb\((\s*(\b(0?\d{1,2}|100)\b%)\s*,){2}(\s*(\b(0?\d{1,2}|100)\b%)\s*)\)$/;
                    return regexInteger.test(value) || regexPercent.test(value)
                },
                _rgba: function (value) {
                    var regexInteger = /^rgba\((\s*(\b([01]?\d{1,2}|2[0-4]\d|25[0-5])\b)\s*,){3}(\s*(0?(\.\d+)?|1(\.0+)?)\s*)\)$/,
                            regexPercent = /^rgba\((\s*(\b(0?\d{1,2}|100)\b%)\s*,){3}(\s*(0?(\.\d+)?|1(\.0+)?)\s*)\)$/;
                    return regexInteger.test(value) || regexPercent.test(value)
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    creditCard: {
                        default: "Please enter a valid credit card number"
                    }
                }
            }), FormValidation.Validator.creditCard = {
                validate: function (validator, $field, options, validatorName) {
                    var value = validator.getFieldValue($field, validatorName);
                    if ("" === value)
                        return !0;
                    if (/[^0-9-\s]+/.test(value))
                        return !1;
                    if (value = value.replace(/\D/g, ""), !FormValidation.Helper.luhn(value))
                        return !1;
                    var type, i, cards = {
                        AMERICAN_EXPRESS: {
                            length: [15],
                            prefix: ["34", "37"]
                        },
                        DINERS_CLUB: {
                            length: [14],
                            prefix: ["300", "301", "302", "303", "304", "305", "36"]
                        },
                        DINERS_CLUB_US: {
                            length: [16],
                            prefix: ["54", "55"]
                        },
                        DISCOVER: {
                            length: [16],
                            prefix: ["6011", "622126", "622127", "622128", "622129", "62213", "62214", "62215", "62216", "62217", "62218", "62219", "6222", "6223", "6224", "6225", "6226", "6227", "6228", "62290", "62291", "622920", "622921", "622922", "622923", "622924", "622925", "644", "645", "646", "647", "648", "649", "65"]
                        },
                        JCB: {
                            length: [16],
                            prefix: ["3528", "3529", "353", "354", "355", "356", "357", "358"]
                        },
                        LASER: {
                            length: [16, 17, 18, 19],
                            prefix: ["6304", "6706", "6771", "6709"]
                        },
                        MAESTRO: {
                            length: [12, 13, 14, 15, 16, 17, 18, 19],
                            prefix: ["5018", "5020", "5038", "6304", "6759", "6761", "6762", "6763", "6764", "6765", "6766"]
                        },
                        MASTERCARD: {
                            length: [16],
                            prefix: ["51", "52", "53", "54", "55"]
                        },
                        SOLO: {
                            length: [16, 18, 19],
                            prefix: ["6334", "6767"]
                        },
                        UNIONPAY: {
                            length: [16, 17, 18, 19],
                            prefix: ["622126", "622127", "622128", "622129", "62213", "62214", "62215", "62216", "62217", "62218", "62219", "6222", "6223", "6224", "6225", "6226", "6227", "6228", "62290", "62291", "622920", "622921", "622922", "622923", "622924", "622925"]
                        },
                        VISA: {
                            length: [16],
                            prefix: ["4"]
                        }
                    };
                    for (type in cards)
                        for (i in cards[type].prefix)
                            if (value.substr(0, cards[type].prefix[i].length) === cards[type].prefix[i] && $.inArray(value.length, cards[type].length) !== -1)
                                return {
                                    valid: !0,
                                    type: type
                                };
                    return !1
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    date: {
                        default: "Please enter a valid date",
                        min: "Please enter a date after %s",
                        max: "Please enter a date before %s",
                        range: "Please enter a date in the range %s - %s"
                    }
                }
            }), FormValidation.Validator.date = {
                html5Attributes: {
                    message: "message",
                    format: "format",
                    min: "min",
                    max: "max",
                    separator: "separator"
                },
                validate: function (validator, $field, options, validatorName) {
                    var value = validator.getFieldValue($field, validatorName);
                    if ("" === value)
                        return !0;
                    options.format = options.format || "MM/DD/YYYY", "date" === $field.attr("type") && (options.format = "YYYY-MM-DD");
                    var locale = validator.getLocale(),
                            message = options.message || FormValidation.I18n[locale].date.default,
                            formats = options.format.split(" "),
                            dateFormat = formats[0],
                            timeFormat = formats.length > 1 ? formats[1] : null,
                            amOrPm = formats.length > 2 ? formats[2] : null,
                            sections = value.split(" "),
                            date = sections[0],
                            time = sections.length > 1 ? sections[1] : null;
                    if (formats.length !== sections.length)
                        return {
                            valid: !1,
                            message: message
                        };
                    var separator = options.separator;
                    if (separator || (separator = date.indexOf("/") !== -1 ? "/" : date.indexOf("-") !== -1 ? "-" : date.indexOf(".") !== -1 ? "." : null), null === separator || date.indexOf(separator) === -1)
                        return {
                            valid: !1,
                            message: message
                        };
                    if (date = date.split(separator), dateFormat = dateFormat.split(separator), date.length !== dateFormat.length)
                        return {
                            valid: !1,
                            message: message
                        };
                    var year = date[$.inArray("YYYY", dateFormat)],
                            month = date[$.inArray("MM", dateFormat)],
                            day = date[$.inArray("DD", dateFormat)];
                    if (!year || !month || !day || 4 !== year.length)
                        return {
                            valid: !1,
                            message: message
                        };
                    var minutes = null,
                            hours = null,
                            seconds = null;
                    if (timeFormat) {
                        if (timeFormat = timeFormat.split(":"), time = time.split(":"), timeFormat.length !== time.length)
                            return {
                                valid: !1,
                                message: message
                            };
                        if (hours = time.length > 0 ? time[0] : null, minutes = time.length > 1 ? time[1] : null, seconds = time.length > 2 ? time[2] : null, "" === hours || "" === minutes || "" === seconds)
                            return {
                                valid: !1,
                                message: message
                            };
                        if (seconds) {
                            if (isNaN(seconds) || seconds.length > 2)
                                return {
                                    valid: !1,
                                    message: message
                                };
                            if (seconds = parseInt(seconds, 10), seconds < 0 || seconds > 60)
                                return {
                                    valid: !1,
                                    message: message
                                }
                        }
                        if (hours) {
                            if (isNaN(hours) || hours.length > 2)
                                return {
                                    valid: !1,
                                    message: message
                                };
                            if (hours = parseInt(hours, 10), hours < 0 || hours >= 24 || amOrPm && hours > 12)
                                return {
                                    valid: !1,
                                    message: message
                                }
                        }
                        if (minutes) {
                            if (isNaN(minutes) || minutes.length > 2)
                                return {
                                    valid: !1,
                                    message: message
                                };
                            if (minutes = parseInt(minutes, 10), minutes < 0 || minutes > 59)
                                return {
                                    valid: !1,
                                    message: message
                                }
                        }
                    }
                    var valid = FormValidation.Helper.date(year, month, day),
                            min = null,
                            max = null,
                            minOption = options.min,
                            maxOption = options.max;
                    switch (minOption && (isNaN(Date.parse(minOption)) && (minOption = validator.getDynamicOption($field, minOption)), min = minOption instanceof Date ? minOption : this._parseDate(minOption, dateFormat, separator), minOption = minOption instanceof Date ? this._formatDate(minOption, options.format) : minOption), maxOption && (isNaN(Date.parse(maxOption)) && (maxOption = validator.getDynamicOption($field, maxOption)), max = maxOption instanceof Date ? maxOption : this._parseDate(maxOption, dateFormat, separator), maxOption = maxOption instanceof Date ? this._formatDate(maxOption, options.format) : maxOption), date = new Date(year, month - 1, day, hours, minutes, seconds), !0) {
                        case minOption && !maxOption && valid:
                            valid = date.getTime() >= min.getTime(), message = options.message || FormValidation.Helper.format(FormValidation.I18n[locale].date.min, minOption);
                            break;
                        case maxOption && !minOption && valid:
                            valid = date.getTime() <= max.getTime(), message = options.message || FormValidation.Helper.format(FormValidation.I18n[locale].date.max, maxOption);
                            break;
                        case maxOption && minOption && valid:
                            valid = date.getTime() <= max.getTime() && date.getTime() >= min.getTime(), message = options.message || FormValidation.Helper.format(FormValidation.I18n[locale].date.range, [minOption, maxOption])
                    }
                    return {
                        valid: valid,
                        date: date,
                        message: message
                    }
                },
                _parseDate: function (date, format, separator) {
                    var minutes = 0,
                            hours = 0,
                            seconds = 0,
                            sections = date.split(" "),
                            dateSection = sections[0],
                            timeSection = sections.length > 1 ? sections[1] : null;
                    dateSection = dateSection.split(separator);
                    var year = dateSection[$.inArray("YYYY", format)],
                            month = dateSection[$.inArray("MM", format)],
                            day = dateSection[$.inArray("DD", format)];
                    return timeSection && (timeSection = timeSection.split(":"), hours = timeSection.length > 0 ? timeSection[0] : null, minutes = timeSection.length > 1 ? timeSection[1] : null, seconds = timeSection.length > 2 ? timeSection[2] : null), new Date(year, month - 1, day, hours, minutes, seconds)
                },
                _formatDate: function (date, format) {
                    format = format.replace(/Y/g, "y").replace(/M/g, "m").replace(/D/g, "d").replace(/:m/g, ":M").replace(/:mm/g, ":MM").replace(/:S/, ":s").replace(/:SS/, ":ss");
                    var replacer = {
                        d: function (date) {
                            return date.getDate()
                        },
                        dd: function (date) {
                            var d = date.getDate();
                            return d < 10 ? "0" + d : d
                        },
                        m: function (date) {
                            return date.getMonth() + 1
                        },
                        mm: function (date) {
                            var m = date.getMonth() + 1;
                            return m < 10 ? "0" + m : m
                        },
                        yy: function (date) {
                            return ("" + date.getFullYear()).substr(2)
                        },
                        yyyy: function (date) {
                            return date.getFullYear()
                        },
                        h: function (date) {
                            return date.getHours() % 12 || 12
                        },
                        hh: function (date) {
                            var h = date.getHours() % 12 || 12;
                            return h < 10 ? "0" + h : h
                        },
                        H: function (date) {
                            return date.getHours()
                        },
                        HH: function (date) {
                            var H = date.getHours();
                            return H < 10 ? "0" + H : H
                        },
                        M: function (date) {
                            return date.getMinutes()
                        },
                        MM: function (date) {
                            var M = date.getMinutes();
                            return M < 10 ? "0" + M : M
                        },
                        s: function (date) {
                            return date.getSeconds()
                        },
                        ss: function (date) {
                            var s = date.getSeconds();
                            return s < 10 ? "0" + s : s
                        }
                    };
                    return format.replace(/d{1,4}|m{1,4}|yy(?:yy)?|([HhMs])\1?|"[^"]*"|'[^']*'/g, function (match) {
                        return replacer[match] ? replacer[match](date) : match.slice(1, match.length - 1)
                    })
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    different: {
                        default: "Please enter a different value"
                    }
                }
            }), FormValidation.Validator.different = {
                html5Attributes: {
                    message: "message",
                    field: "field"
                },
                init: function (validator, $field, options, validatorName) {
                    for (var fields = options.field.split(","), i = 0; i < fields.length; i++) {
                        var compareWith = validator.getFieldElements(fields[i]);
                        validator.onLiveChange(compareWith, "live_" + validatorName, function () {
                            var status = validator.getStatus($field, validatorName);
                            status !== validator.STATUS_NOT_VALIDATED && validator.revalidateField($field)
                        })
                    }
                },
                destroy: function (validator, $field, options, validatorName) {
                    for (var fields = options.field.split(","), i = 0; i < fields.length; i++) {
                        var compareWith = validator.getFieldElements(fields[i]);
                        validator.offLiveChange(compareWith, "live_" + validatorName)
                    }
                },
                validate: function (validator, $field, options, validatorName) {
                    var value = validator.getFieldValue($field, validatorName);
                    if ("" === value)
                        return !0;
                    for (var fields = options.field.split(","), isValid = !0, i = 0; i < fields.length; i++) {
                        var compareWith = validator.getFieldElements(fields[i]);
                        if (null != compareWith && 0 !== compareWith.length) {
                            var compareValue = validator.getFieldValue(compareWith, validatorName);
                            value === compareValue ? isValid = !1 : "" !== compareValue && validator.updateStatus(compareWith, validator.STATUS_VALID, validatorName)
                        }
                    }
                    return isValid
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    digits: {
                        default: "Please enter only digits"
                    }
                }
            }), FormValidation.Validator.digits = {
                validate: function (validator, $field, options, validatorName) {
                    var value = validator.getFieldValue($field, validatorName);
                    return "" === value || /^\d+$/.test(value)
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    emailAddress: {
                        default: "Please enter a valid email address"
                    }
                }
            }), FormValidation.Validator.emailAddress = {
                html5Attributes: {
                    message: "message",
                    multiple: "multiple",
                    separator: "separator"
                },
                enableByHtml5: function ($field) {
                    return "email" === $field.attr("type")
                },
                validate: function (validator, $field, options, validatorName) {
                    var value = validator.getFieldValue($field, validatorName);
                    if ("" === value)
                        return !0;
                    var emailRegExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
                            allowMultiple = options.multiple === !0 || "true" === options.multiple;
                    if (allowMultiple) {
                        for (var separator = options.separator || /[,;]/, addresses = this._splitEmailAddresses(value, separator), i = 0; i < addresses.length; i++)
                            if (!emailRegExp.test(addresses[i]))
                                return !1;
                        return !0
                    }
                    return emailRegExp.test(value)
                },
                _splitEmailAddresses: function (emailAddresses, separator) {
                    for (var quotedFragments = emailAddresses.split(/"/), quotedFragmentCount = quotedFragments.length, emailAddressArray = [], nextEmailAddress = "", i = 0; i < quotedFragmentCount; i++)
                        if (i % 2 === 0) {
                            var splitEmailAddressFragments = quotedFragments[i].split(separator),
                                    splitEmailAddressFragmentCount = splitEmailAddressFragments.length;
                            if (1 === splitEmailAddressFragmentCount)
                                nextEmailAddress += splitEmailAddressFragments[0];
                            else {
                                emailAddressArray.push(nextEmailAddress + splitEmailAddressFragments[0]);
                                for (var j = 1; j < splitEmailAddressFragmentCount - 1; j++)
                                    emailAddressArray.push(splitEmailAddressFragments[j]);
                                nextEmailAddress = splitEmailAddressFragments[splitEmailAddressFragmentCount - 1]
                            }
                        } else
                            nextEmailAddress += '"' + quotedFragments[i], i < quotedFragmentCount - 1 && (nextEmailAddress += '"');
                    return emailAddressArray.push(nextEmailAddress), emailAddressArray
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    file: {
                        default: "Please choose a valid file"
                    }
                }
            }), FormValidation.Validator.file = {
                html5Attributes: {
                    extension: "extension",
                    maxfiles: "maxFiles",
                    minfiles: "minFiles",
                    maxsize: "maxSize",
                    minsize: "minSize",
                    maxtotalsize: "maxTotalSize",
                    mintotalsize: "minTotalSize",
                    message: "message",
                    type: "type"
                },
                validate: function (validator, $field, options, validatorName) {
                    var value = validator.getFieldValue($field, validatorName);
                    if ("" === value)
                        return !0;
                    var ext, extensions = options.extension ? options.extension.toLowerCase().split(",") : null,
                            types = options.type ? options.type.toLowerCase().split(",") : null,
                            html5 = window.File && window.FileList && window.FileReader;
                    if (html5) {
                        var files = $field.get(0).files,
                                total = files.length,
                                totalSize = 0;
                        if (options.maxFiles && total > parseInt(options.maxFiles, 10) || options.minFiles && total < parseInt(options.minFiles, 10))
                            return !1;
                        for (var i = 0; i < total; i++)
                            if (totalSize += files[i].size, ext = files[i].name.substr(files[i].name.lastIndexOf(".") + 1), options.minSize && files[i].size < parseInt(options.minSize, 10) || options.maxSize && files[i].size > parseInt(options.maxSize, 10) || extensions && $.inArray(ext.toLowerCase(), extensions) === -1 || files[i].type && types && $.inArray(files[i].type.toLowerCase(), types) === -1)
                                return !1;
                        if (options.maxTotalSize && totalSize > parseInt(options.maxTotalSize, 10) || options.minTotalSize && totalSize < parseInt(options.minTotalSize, 10))
                            return !1
                    } else if (ext = value.substr(value.lastIndexOf(".") + 1), extensions && $.inArray(ext.toLowerCase(), extensions) === -1)
                        return !1;
                    return !0
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    greaterThan: {
                        default: "Please enter a value greater than or equal to %s",
                        notInclusive: "Please enter a value greater than %s"
                    }
                }
            }), FormValidation.Validator.greaterThan = {
                html5Attributes: {
                    message: "message",
                    value: "value",
                    inclusive: "inclusive"
                },
                enableByHtml5: function ($field) {
                    var type = $field.attr("type"),
                            min = $field.attr("min");
                    return !(!min || "date" === type) && {
                        value: min
                    }
                },
                validate: function (validator, $field, options, validatorName) {
                    var value = validator.getFieldValue($field, validatorName);
                    if ("" === value)
                        return !0;
                    value = this._format(value);
                    var locale = validator.getLocale(),
                            compareTo = $.isNumeric(options.value) ? options.value : validator.getDynamicOption($field, options.value),
                            compareToValue = this._format(compareTo);
                    return options.inclusive === !0 || void 0 === options.inclusive ? {
                        valid: $.isNumeric(value) && parseFloat(value) >= compareToValue,
                        message: FormValidation.Helper.format(options.message || FormValidation.I18n[locale].greaterThan.default, compareTo)
                    } : {
                        valid: $.isNumeric(value) && parseFloat(value) > compareToValue,
                        message: FormValidation.Helper.format(options.message || FormValidation.I18n[locale].greaterThan.notInclusive, compareTo)
                    }
                },
                _format: function (value) {
                    return (value + "").replace(",", ".")
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    identical: {
                        default: "Please enter the same value"
                    }
                }
            }), FormValidation.Validator.identical = {
                html5Attributes: {
                    message: "message",
                    field: "field"
                },
                init: function (validator, $field, options, validatorName) {
                    var compareWith = validator.getFieldElements(options.field);
                    validator.onLiveChange(compareWith, "live_" + validatorName, function () {
                        var status = validator.getStatus($field, validatorName);
                        status !== validator.STATUS_NOT_VALIDATED && validator.revalidateField($field)
                    })
                },
                destroy: function (validator, $field, options, validatorName) {
                    var compareWith = validator.getFieldElements(options.field);
                    validator.offLiveChange(compareWith, "live_" + validatorName)
                },
                validate: function (validator, $field, options, validatorName) {
                    var value = validator.getFieldValue($field, validatorName),
                            compareWith = validator.getFieldElements(options.field);
                    if (null === compareWith || 0 === compareWith.length)
                        return !0;
                    var compareValue = validator.getFieldValue(compareWith, validatorName);
                    return value === compareValue && (validator.updateStatus(compareWith, validator.STATUS_VALID, validatorName), !0)
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    integer: {
                        default: "Please enter a valid number"
                    }
                }
            }), FormValidation.Validator.integer = {
                html5Attributes: {
                    message: "message",
                    thousandsseparator: "thousandsSeparator",
                    decimalseparator: "decimalSeparator"
                },
                enableByHtml5: function ($field) {
                    return "number" === $field.attr("type") && (void 0 === $field.attr("step") || $field.attr("step") % 1 === 0)
                },
                validate: function (validator, $field, options, validatorName) {
                    if (this.enableByHtml5($field) && $field.get(0).validity && $field.get(0).validity.badInput === !0)
                        return !1;
                    var value = validator.getFieldValue($field, validatorName);
                    if ("" === value)
                        return !0;
                    var decimalSeparator = options.decimalSeparator || ".",
                            thousandsSeparator = options.thousandsSeparator || "";
                    decimalSeparator = "." === decimalSeparator ? "\\." : decimalSeparator, thousandsSeparator = "." === thousandsSeparator ? "\\." : thousandsSeparator;
                    var testRegexp = new RegExp("^-?[0-9]{1,3}(" + thousandsSeparator + "[0-9]{3})*(" + decimalSeparator + "[0-9]+)?$"),
                            thousandsReplacer = new RegExp(thousandsSeparator, "g");
                    return !!testRegexp.test(value) && (thousandsSeparator && (value = value.replace(thousandsReplacer, "")), decimalSeparator && (value = value.replace(decimalSeparator, ".")), !(isNaN(value) || !isFinite(value)) && (value = parseFloat(value), Math.floor(value) === value))
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    lessThan: {
                        default: "Please enter a value less than or equal to %s",
                        notInclusive: "Please enter a value less than %s"
                    }
                }
            }), FormValidation.Validator.lessThan = {
                html5Attributes: {
                    message: "message",
                    value: "value",
                    inclusive: "inclusive"
                },
                enableByHtml5: function ($field) {
                    var type = $field.attr("type"),
                            max = $field.attr("max");
                    return !(!max || "date" === type) && {
                        value: max
                    }
                },
                validate: function (validator, $field, options, validatorName) {
                    var value = validator.getFieldValue($field, validatorName);
                    if ("" === value)
                        return !0;
                    value = this._format(value);
                    var locale = validator.getLocale(),
                            compareTo = $.isNumeric(options.value) ? options.value : validator.getDynamicOption($field, options.value),
                            compareToValue = this._format(compareTo);
                    return options.inclusive === !0 || void 0 === options.inclusive ? {
                        valid: $.isNumeric(value) && parseFloat(value) <= compareToValue,
                        message: FormValidation.Helper.format(options.message || FormValidation.I18n[locale].lessThan.default, compareTo)
                    } : {
                        valid: $.isNumeric(value) && parseFloat(value) < compareToValue,
                        message: FormValidation.Helper.format(options.message || FormValidation.I18n[locale].lessThan.notInclusive, compareTo)
                    }
                },
                _format: function (value) {
                    return (value + "").replace(",", ".")
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    notEmpty: {
                        default: "Please enter a value"
                    }
                }
            }), FormValidation.Validator.notEmpty = {
                enableByHtml5: function ($field) {
                    var required = $field.attr("required") + "";
                    return "required" === required || "true" === required
                },
                validate: function (validator, $field, options, validatorName) {
                    var type = $field.attr("type");
                    if ("radio" === type || "checkbox" === type) {
                        var ns = validator.getNamespace();
                        return validator.getFieldElements($field.attr("data-" + ns + "-field")).filter(":checked").length > 0
                    }
                    if ("number" === type && $field.get(0).validity && $field.get(0).validity.badInput === !0)
                        return !0;
                    var value = validator.getFieldValue($field, validatorName);
                    return "" !== $.trim(value)
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    numeric: {
                        default: "Please enter a valid float number"
                    }
                }
            }), FormValidation.Validator.numeric = {
                html5Attributes: {
                    message: "message",
                    separator: "separator",
                    thousandsseparator: "thousandsSeparator",
                    decimalseparator: "decimalSeparator"
                },
                enableByHtml5: function ($field) {
                    return "number" === $field.attr("type") && void 0 !== $field.attr("step") && $field.attr("step") % 1 !== 0
                },
                validate: function (validator, $field, options, validatorName) {
                    if (this.enableByHtml5($field) && $field.get(0).validity && $field.get(0).validity.badInput === !0)
                        return !1;
                    var value = validator.getFieldValue($field, validatorName);
                    if ("" === value)
                        return !0;
                    var decimalSeparator = options.separator || options.decimalSeparator || ".",
                            thousandsSeparator = options.thousandsSeparator || "";
                    decimalSeparator = "." === decimalSeparator ? "\\." : decimalSeparator, thousandsSeparator = "." === thousandsSeparator ? "\\." : thousandsSeparator;
                    var testRegexp = new RegExp("^-?[0-9]{1,3}(" + thousandsSeparator + "[0-9]{3})*(" + decimalSeparator + "[0-9]+)?$"),
                            thousandsReplacer = new RegExp(thousandsSeparator, "g");
                    return !!testRegexp.test(value) && (thousandsSeparator && (value = value.replace(thousandsReplacer, "")), decimalSeparator && (value = value.replace(decimalSeparator, ".")), !isNaN(parseFloat(value)) && isFinite(value))
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    promise: {
                        default: "Please enter a valid value"
                    }
                }
            }), FormValidation.Validator.promise = {
                html5Attributes: {
                    message: "message",
                    promise: "promise"
                },
                validate: function (validator, $field, options, validatorName) {
                    var value = validator.getFieldValue($field, validatorName),
                            dfd = new $.Deferred,
                            promise = FormValidation.Helper.call(options.promise, [value, validator, $field]);
                    return promise.done(function (result) {
                        dfd.resolve($field, validatorName, result)
                    }).fail(function (result) {
                        result = result || {}, result.valid = !1, dfd.resolve($field, validatorName, result)
                    }), dfd
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    regexp: {
                        default: "Please enter a value matching the pattern"
                    }
                }
            }), FormValidation.Validator.regexp = {
                html5Attributes: {
                    message: "message",
                    regexp: "regexp"
                },
                enableByHtml5: function ($field) {
                    var pattern = $field.attr("pattern");
                    return !!pattern && {
                        regexp: pattern
                    }
                },
                validate: function (validator, $field, options, validatorName) {
                    var value = validator.getFieldValue($field, validatorName);
                    if ("" === value)
                        return !0;
                    var regexp = "string" == typeof options.regexp ? new RegExp(options.regexp) : options.regexp;
                    return regexp.test(value)
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    remote: {
                        default: "Please enter a valid value"
                    }
                }
            }), FormValidation.Validator.remote = {
                html5Attributes: {
                    crossdomain: "crossDomain",
                    data: "data",
                    datatype: "dataType",
                    delay: "delay",
                    message: "message",
                    name: "name",
                    type: "type",
                    url: "url",
                    validkey: "validKey"
                },
                destroy: function (validator, $field, options, validatorName) {
                    var ns = validator.getNamespace(),
                            timer = $field.data(ns + "." + validatorName + ".timer");
                    timer && (clearTimeout(timer), $field.removeData(ns + "." + validatorName + ".timer"))
                },
                validate: function (validator, $field, options, validatorName) {
                    function runCallback() {
                        var xhr = $.ajax(ajaxOptions);
                        return xhr.success(function (response) {
                            response.valid = response[validKey] === !0 || "true" === response[validKey] || response[validKey] !== !1 && "false" !== response[validKey] && null, dfd.resolve($field, validatorName, response)
                        }).error(function (response) {
                            dfd.resolve($field, validatorName, {
                                valid: !1
                            })
                        }), dfd.fail(function () {
                            xhr.abort()
                        }), dfd
                    }
                    var ns = validator.getNamespace(),
                            value = validator.getFieldValue($field, validatorName),
                            dfd = new $.Deferred;
                    if ("" === value)
                        return dfd.resolve($field, validatorName, {
                            valid: !0
                        }), dfd;
                    var name = $field.attr("data-" + ns + "-field"),
                            data = options.data || {},
                            url = options.url,
                            validKey = options.validKey || "valid";
                    "function" == typeof data && (data = data.call(this, validator, $field, value)), "string" == typeof data && (data = JSON.parse(data)), "function" == typeof url && (url = url.call(this, validator, $field, value)), data[options.name || name] = value;
                    var ajaxOptions = {
                        data: data,
                        dataType: options.dataType || "json",
                        headers: options.headers || {},
                        type: options.type || "GET",
                        url: url
                    };
                    return null !== options.crossDomain && (ajaxOptions.crossDomain = options.crossDomain === !0 || "true" === options.crossDomain), options.delay ? ($field.data(ns + "." + validatorName + ".timer") && clearTimeout($field.data(ns + "." + validatorName + ".timer")), $field.data(ns + "." + validatorName + ".timer", setTimeout(runCallback, options.delay)), dfd) : runCallback()
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    stringLength: {
                        default: "Please enter a value with valid length",
                        less: "Please enter less than %s characters",
                        more: "Please enter more than %s characters",
                        between: "Please enter value between %s and %s characters long"
                    }
                }
            }), FormValidation.Validator.stringLength = {
                html5Attributes: {
                    message: "message",
                    min: "min",
                    max: "max",
                    trim: "trim",
                    utf8bytes: "utf8Bytes"
                },
                enableByHtml5: function ($field) {
                    var options = {},
                            maxLength = $field.attr("maxlength"),
                            minLength = $field.attr("minlength");
                    return maxLength && (options.max = parseInt(maxLength, 10)),
                            minLength && (options.min = parseInt(minLength, 10)), !$.isEmptyObject(options) && options
                },
                validate: function (validator, $field, options, validatorName) {
                    var value = validator.getFieldValue($field, validatorName);
                    if (options.trim !== !0 && "true" !== options.trim || (value = $.trim(value)), "" === value)
                        return !0;
                    var locale = validator.getLocale(),
                            min = $.isNumeric(options.min) ? options.min : validator.getDynamicOption($field, options.min),
                            max = $.isNumeric(options.max) ? options.max : validator.getDynamicOption($field, options.max),
                            utf8Length = function (str) {
                                for (var s = str.length, i = str.length - 1; i >= 0; i--) {
                                    var code = str.charCodeAt(i);
                                    code > 127 && code <= 2047 ? s++ : code > 2047 && code <= 65535 && (s += 2), code >= 56320 && code <= 57343 && i--
                                }
                                return s
                            },
                            length = options.utf8Bytes ? utf8Length(value) : value.length,
                            isValid = !0,
                            message = options.message || FormValidation.I18n[locale].stringLength.default;
                    switch ((min && length < parseInt(min, 10) || max && length > parseInt(max, 10)) && (isValid = !1), !0) {
                        case !!min && !!max:
                            message = FormValidation.Helper.format(options.message || FormValidation.I18n[locale].stringLength.between, [parseInt(min, 10), parseInt(max, 10)]);
                            break;
                        case !!min:
                            message = FormValidation.Helper.format(options.message || FormValidation.I18n[locale].stringLength.more, parseInt(min, 10) - 1);
                            break;
                        case !!max:
                            message = FormValidation.Helper.format(options.message || FormValidation.I18n[locale].stringLength.less, parseInt(max, 10) + 1)
                    }
                    return {
                        valid: isValid,
                        message: message
                    }
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n || {}, {
                en_US: {
                    uri: {
                        default: "Please enter a valid URI"
                    }
                }
            }), FormValidation.Validator.uri = {
                html5Attributes: {
                    message: "message",
                    allowlocal: "allowLocal",
                    allowemptyprotocol: "allowEmptyProtocol",
                    protocol: "protocol"
                },
                enableByHtml5: function ($field) {
                    return "url" === $field.attr("type")
                },
                validate: function (validator, $field, options, validatorName) {
                    var value = validator.getFieldValue($field, validatorName);
                    if ("" === value)
                        return !0;
                    var allowLocal = options.allowLocal === !0 || "true" === options.allowLocal,
                            allowEmptyProtocol = options.allowEmptyProtocol === !0 || "true" === options.allowEmptyProtocol,
                            protocol = (options.protocol || "http, https, ftp").split(",").join("|").replace(/\s/g, ""),
                            urlExp = new RegExp("^(?:(?:" + protocol + ")://)" + (allowEmptyProtocol ? "?" : "") + "(?:\\S+(?::\\S*)?@)?(?:" + (allowLocal ? "" : "(?!(?:10|127)(?:\\.\\d{1,3}){3})(?!(?:169\\.254|192\\.168)(?:\\.\\d{1,3}){2})(?!172\\.(?:1[6-9]|2\\d|3[0-1])(?:\\.\\d{1,3}){2})") + "(?:[1-9]\\d?|1\\d\\d|2[01]\\d|22[0-3])(?:\\.(?:1?\\d{1,2}|2[0-4]\\d|25[0-5])){2}(?:\\.(?:[1-9]\\d?|1\\d\\d|2[0-4]\\d|25[0-4]))|(?:(?:[a-z\\u00a1-\\uffff0-9]-?)*[a-z\\u00a1-\\uffff0-9]+)(?:\\.(?:[a-z\\u00a1-\\uffff0-9]-?)*[a-z\\u00a1-\\uffff0-9])*(?:\\.(?:[a-z\\u00a1-\\uffff]{2,}))" + (allowLocal ? "?" : "") + ")(?::\\d{2,5})?(?:/[^\\s]*)?$", "i");
                    return urlExp.test(value)
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.AddOn.reCaptcha2 = {
                html5Attributes: {
                    element: "element",
                    language: "language",
                    message: "message",
                    sitekey: "siteKey",
                    stoken: "sToken",
                    theme: "theme",
                    timeout: "timeout",
                    size: "size"
                },
                CAPTCHA_FIELD: "g-recaptcha-response",
                CAPTCHA_TIMEOUT: 120,
                init: function (validator, options) {
                    var that = this,
                            loadPrevCaptcha = "undefined" == typeof window.reCaptchaLoaded ? function () {} : window.reCaptchaLoaded;
                    window.reCaptchaLoaded = function () {
                        loadPrevCaptcha();
                        var captchaOptions = {
                            sitekey: options.siteKey,
                            theme: options.theme || "light",
                            size: options.size || "normal",
                            callback: function (response) {
                                validator.updateStatus(that.CAPTCHA_FIELD, validator.STATUS_VALID), setTimeout(function () {
                                    validator.updateStatus(that.CAPTCHA_FIELD, validator.STATUS_INVALID)
                                }, 1e3 * (options.timeout || that.CAPTCHA_TIMEOUT))
                            }
                        };
                        options.sToken && (captchaOptions.stoken = options.sToken);
                        var widgetId = grecaptcha.render(options.element, captchaOptions);
                        $("#" + options.element).data("fv.addon.recaptcha.id", widgetId).data("fv.validator", validator), setTimeout(function () {
                            that._addCaptcha(validator, options)
                        }, 3e3)
                    };
                    var src = "//www.google.com/recaptcha/api.js?onload=reCaptchaLoaded&render=explicit" + (options.language ? "&hl=" + options.language : "");
                    if (0 === $("body").find('script[src="' + src + '"]').length) {
                        var script = document.createElement("script");
                        script.type = "text/javascript", script.async = !0, script.defer = !0, script.src = src, document.getElementsByTagName("body")[0].appendChild(script)
                    }
                },
                reset: function (element) {
                    var widgetId = $("#" + element).data("fv.addon.recaptcha.id");
                    null !== widgetId && grecaptcha.reset(widgetId)
                },
                _addCaptcha: function (validator, options) {
                    var that = this;
                    validator.getForm().formValidation("addField", that.CAPTCHA_FIELD, {
                        excluded: !1,
                        validators: {
                            callback: {
                                message: options.message,
                                callback: function (value, validator, $field) {
                                    return "" !== value
                                }
                            }
                        }
                    })
                }
            }
        }(jQuery),
        function ($) {
            FormValidation.Framework.Bootstrap = function (element, options, namespace) {
                options = $.extend(!0, {
                    button: {
                        selector: '[type="submit"]:not([formnovalidate])',
                        disabled: "disabled"
                    },
                    err: {
                        clazz: "help-block",
                        parent: "^(.*)col-(xs|sm|md|lg)-(offset-){0,1}[0-9]+(.*)$"
                    },
                    icon: {
                        valid: null,
                        invalid: null,
                        validating: null,
                        feedback: "form-control-feedback"
                    },
                    row: {
                        selector: ".form-group",
                        valid: "has-success",
                        invalid: "has-error",
                        feedback: "has-feedback"
                    }
                }, options), FormValidation.Base.apply(this, [element, options, namespace])
            }, FormValidation.Framework.Bootstrap.prototype = $.extend({}, FormValidation.Base.prototype, {
                _fixIcon: function ($field, $icon) {
                    var ns = this._namespace,
                            type = $field.attr("type"),
                            field = $field.attr("data-" + ns + "-field"),
                            row = this.options.fields[field].row || this.options.row.selector,
                            $parent = $field.closest(row);
                    if ("checkbox" === type || "radio" === type) {
                        var $fieldParent = $field.parent();
                        $fieldParent.hasClass(type) ? $icon.insertAfter($fieldParent) : $fieldParent.parent().hasClass(type) && $icon.insertAfter($fieldParent.parent())
                    }
                    0 === $parent.find("label").length && $icon.addClass("fv-icon-no-label"), 0 !== $parent.find(".input-group").length && $icon.addClass("fv-bootstrap-icon-input-group").insertAfter($parent.find(".input-group").eq(0))
                },
                _createTooltip: function ($field, message, type) {
                    var ns = this._namespace,
                            $icon = $field.data(ns + ".icon");
                    if ($icon)
                        switch (type) {
                            case "popover":
                                $icon.css({
                                    cursor: "pointer",
                                    "pointer-events": "auto"
                                }).popover("destroy").popover({
                                    container: "body",
                                    content: message,
                                    html: !0,
                                    placement: "auto top",
                                    trigger: "hover click"
                                });
                                break;
                            case "tooltip":
                            default:
                                $icon.css({
                                    cursor: "pointer",
                                    "pointer-events": "auto"
                                }).tooltip("destroy").tooltip({
                                    container: "body",
                                    html: !0,
                                    placement: "auto top",
                                    title: message
                                })
                        }
                },
                _destroyTooltip: function ($field, type) {
                    var ns = this._namespace,
                            $icon = $field.data(ns + ".icon");
                    if ($icon)
                        switch (type) {
                            case "popover":
                                $icon.css({
                                    cursor: "",
                                    "pointer-events": "none"
                                }).popover("destroy");
                                break;
                            case "tooltip":
                            default:
                                $icon.css({
                                    cursor: "",
                                    "pointer-events": "none"
                                }).tooltip("destroy")
                        }
                },
                _hideTooltip: function ($field, type) {
                    var ns = this._namespace,
                            $icon = $field.data(ns + ".icon");
                    if ($icon)
                        switch (type) {
                            case "popover":
                                $icon.popover("hide");
                                break;
                            case "tooltip":
                            default:
                                $icon.tooltip("hide")
                        }
                },
                _showTooltip: function ($field, type) {
                    var ns = this._namespace,
                            $icon = $field.data(ns + ".icon");
                    if ($icon)
                        switch (type) {
                            case "popover":
                                $icon.popover("show");
                                break;
                            case "tooltip":
                            default:
                                $icon.tooltip("show")
                        }
                }
            }), $.fn.bootstrapValidator = function (option) {
                var params = arguments;
                return this.each(function () {
                    var $this = $(this),
                            data = $this.data("formValidation") || $this.data("bootstrapValidator"),
                            options = "object" == typeof option && option;
                    data || (data = new FormValidation.Framework.Bootstrap(this, $.extend({}, {
                        events: {
                            formInit: "init.form.bv",
                            formPreValidate: "prevalidate.form.bv",
                            formError: "error.form.bv",
                            formSuccess: "success.form.bv",
                            fieldAdded: "added.field.bv",
                            fieldRemoved: "removed.field.bv",
                            fieldInit: "init.field.bv",
                            fieldError: "error.field.bv",
                            fieldSuccess: "success.field.bv",
                            fieldStatus: "status.field.bv",
                            localeChanged: "changed.locale.bv",
                            validatorError: "error.validator.bv",
                            validatorSuccess: "success.validator.bv"
                        }
                    }, options), "bv"), $this.addClass("fv-form-bootstrap").data("formValidation", data).data("bootstrapValidator", data)), "string" == typeof option && data[option].apply(data, Array.prototype.slice.call(params, 1))
                })
            }, $.fn.bootstrapValidator.Constructor = FormValidation.Framework.Bootstrap
        }(jQuery),
        function ($) {
            FormValidation.I18n = $.extend(!0, FormValidation.I18n, {
                ru_RU: {
                    base64: {
                        default: "Пожалуйста, введите корректную строку base64"
                    },
                    between: {
                        default: "Пожалуйста, введите значение от %s до %s",
                        notInclusive: "Пожалуйста, введите значение между %s и %s"
                    },
                    bic: {
                        default: "Пожалуйста, введите правильный номер BIC"
                    },
                    callback: {
                        default: "Пожалуйста, введите корректное значение"
                    },
                    choice: {
                        default: "Пожалуйста, введите корректное значение",
                        less: "Пожалуйста, выберите хотя бы %s опций",
                        more: "Пожалуйста, выберите не больше %s опций",
                        between: "Пожалуйста, выберите %s-%s опций"
                    },
                    color: {
                        default: "Пожалуйста, введите правильный номер цвета"
                    },
                    creditCard: {
                        default: "Пожалуйста, введите правильный номер кредитной карты"
                    },
                    cusip: {
                        default: "Пожалуйста, введите правильный номер CUSIP"
                    },
                    cvv: {
                        default: "Пожалуйста, введите правильный номер CVV"
                    },
                    date: {
                        default: "Пожалуйста, введите правильную дату",
                        min: "Пожалуйста, введите дату после %s",
                        max: "Пожалуйста, введите дату перед %s",
                        range: "Пожалуйста, введите дату в диапазоне %s - %s"
                    },
                    different: {
                        default: "Пожалуйста, введите другое значение"
                    },
                    digits: {
                        default: "Пожалуйста, введите только цифры"
                    },
                    ean: {
                        default: "Пожалуйста, введите правильный номер EAN"
                    },
                    ein: {
                        default: "Пожалуйста, введите правильный номер EIN"
                    },
                    emailAddress: {
                        default: "Пожалуйста, введите правильный адрес эл. почты"
                    },
                    file: {
                        default: "Пожалуйста, выберите файл"
                    },
                    greaterThan: {
                        default: "Пожалуйста, введите значение большее или равное %s",
                        notInclusive: "Пожалуйста, введите значение больше %s"
                    },
                    grid: {
                        default: "Пожалуйста, введите правильный номер GRId"
                    },
                    hex: {
                        default: "Пожалуйста, введите правильное шестнадцатиричное число"
                    },
                    iban: {
                        default: "Пожалуйста, введите правильный номер IBAN",
                        country: "Пожалуйста, введите правильный номер IBAN в %s",
                        countries: {
                            AD: "Андорре",
                            AE: "Объединённых Арабских Эмиратах",
                            AL: "Албании",
                            AO: "Анголе",
                            AT: "Австрии",
                            AZ: "Азербайджане",
                            BA: "Боснии и Герцеговине",
                            BE: "Бельгии",
                            BF: "Буркина-Фасо",
                            BG: "Болгарии",
                            BH: "Бахрейне",
                            BI: "Бурунди",
                            BJ: "Бенине",
                            BR: "Бразилии",
                            CH: "Швейцарии",
                            CI: "Кот-д'Ивуаре",
                            CM: "Камеруне",
                            CR: "Коста-Рике",
                            CV: "Кабо-Верде",
                            CY: "Кипре",
                            CZ: "Чешская республика",
                            DE: "Германии",
                            DK: "Дании",
                            DO: "Доминикане Республика",
                            DZ: "Алжире",
                            EE: "Эстонии",
                            ES: "Испании",
                            FI: "Финляндии",
                            FO: "Фарерских островах",
                            FR: "Франции",
                            GB: "Великобритании",
                            GE: "Грузии",
                            GI: "Гибралтаре",
                            GL: "Гренландии",
                            GR: "Греции",
                            GT: "Гватемале",
                            HR: "Хорватии",
                            HU: "Венгрии",
                            IE: "Ирландии",
                            IL: "Израиле",
                            IR: "Иране",
                            IS: "Исландии",
                            IT: "Италии",
                            JO: "Иордании",
                            KW: "Кувейте",
                            KZ: "Казахстане",
                            LB: "Ливане",
                            LI: "Лихтенштейне",
                            LT: "Литве",
                            LU: "Люксембурге",
                            LV: "Латвии",
                            MC: "Монако",
                            MD: "Молдове",
                            ME: "Черногории",
                            MG: "Мадагаскаре",
                            MK: "Македонии",
                            ML: "Мали",
                            MR: "Мавритании",
                            MT: "Мальте",
                            MU: "Маврикии",
                            MZ: "Мозамбике",
                            NL: "Нидерландах",
                            NO: "Норвегии",
                            PK: "Пакистане",
                            PL: "Польше",
                            PS: "Палестине",
                            PT: "Португалии",
                            QA: "Катаре",
                            RO: "Румынии",
                            RS: "Сербии",
                            SA: "Саудовской Аравии",
                            SE: "Швеции",
                            SI: "Словении",
                            SK: "Словакии",
                            SM: "Сан-Марино",
                            SN: "Сенегале",
                            TL: "Восточный Тимор",
                            TN: "Тунисе",
                            TR: "Турции",
                            VG: "Британских Виргинских островах",
                            XK: "Республика Косово"
                        }
                    },
                    id: {
                        default: "Пожалуйста, введите правильный идентификационный номер",
                        country: "Пожалуйста, введите правильный идентификационный номер в %s",
                        countries: {
                            BA: "Боснии и Герцеговине",
                            BG: "Болгарии",
                            BR: "Бразилии",
                            CH: "Швейцарии",
                            CL: "Чили",
                            CN: "Китае",
                            CZ: "Чешская республика",
                            DK: "Дании",
                            EE: "Эстонии",
                            ES: "Испании",
                            FI: "Финляндии",
                            HR: "Хорватии",
                            IE: "Ирландии",
                            IS: "Исландии",
                            LT: "Литве",
                            LV: "Латвии",
                            ME: "Черногории",
                            MK: "Македонии",
                            NL: "Нидерландах",
                            PL: "Польше",
                            RO: "Румынии",
                            RS: "Сербии",
                            SE: "Швеции",
                            SI: "Словении",
                            SK: "Словакии",
                            SM: "Сан-Марино",
                            TH: "Тайланде",
                            ZA: "ЮАР"
                        }
                    },
                    identical: {
                        default: "Пожалуйста, введите такое же значение"
                    },
                    imei: {
                        default: "Пожалуйста, введите правильный номер IMEI"
                    },
                    imo: {
                        default: "Пожалуйста, введите правильный номер IMO"
                    },
                    integer: {
                        default: "Пожалуйста, введите правильное целое число"
                    },
                    ip: {
                        default: "Пожалуйста, введите правильный IP-адрес",
                        ipv4: "Пожалуйста, введите правильный IPv4-адрес",
                        ipv6: "Пожалуйста, введите правильный IPv6-адрес"
                    },
                    isbn: {
                        default: "Пожалуйста, введите правильный номер ISBN"
                    },
                    isin: {
                        default: "Пожалуйста, введите правильный номер ISIN"
                    },
                    ismn: {
                        default: "Пожалуйста, введите правильный номер ISMN"
                    },
                    issn: {
                        default: "Пожалуйста, введите правильный номер ISSN"
                    },
                    lessThan: {
                        default: "Пожалуйста, введите значение меньшее или равное %s",
                        notInclusive: "Пожалуйста, введите значение меньше %s"
                    },
                    mac: {
                        default: "Пожалуйста, введите правильный MAC-адрес"
                    },
                    meid: {
                        default: "Пожалуйста, введите правильный номер MEID"
                    },
                    notEmpty: {
                        default: "Пожалуйста, введите значение"
                    },
                    numeric: {
                        default: "Пожалуйста, введите корректное действительное число"
                    },
                    phone: {
                        default: "Пожалуйста, введите правильный номер телефона",
                        country: "Пожалуйста, введите правильный номер телефона в %s",
                        countries: {
                            AE: "Объединённых Арабских Эмиратах",
                            BG: "Болгарии",
                            BR: "Бразилии",
                            CN: "Китае",
                            CZ: "Чешская республика",
                            DE: "Германии",
                            DK: "Дании",
                            ES: "Испании",
                            FR: "Франции",
                            GB: "Великобритании",
                            IN: "Индия",
                            MA: "Марокко",
                            NL: "Нидерландах",
                            PK: "Пакистане",
                            RO: "Румынии",
                            RU: "России",
                            SK: "Словакии",
                            TH: "Тайланде",
                            US: "США",
                            VE: "Венесуэле"
                        }
                    },
                    promise: {
                        default: "Пожалуйста, введите корректное значение"
                    },
                    regexp: {
                        default: "Пожалуйста, введите значение соответствующее шаблону"
                    },
                    remote: {
                        default: "Пожалуйста, введите правильное значение"
                    },
                    rtn: {
                        default: "Пожалуйста, введите правильный номер RTN"
                    },
                    sedol: {
                        default: "Пожалуйста, введите правильный номер SEDOL"
                    },
                    siren: {
                        default: "Пожалуйста, введите правильный номер SIREN"
                    },
                    siret: {
                        default: "Пожалуйста, введите правильный номер SIRET"
                    },
                    step: {
                        default: "Пожалуйста, введите правильный шаг %s"
                    },
                    stringCase: {
                        default: "Пожалуйста, вводите только строчные буквы",
                        upper: "Пожалуйста, вводите только заглавные буквы"
                    },
                    stringLength: {
                        default: "Пожалуйста, введите значение корректной длины",
                        less: "Пожалуйста, введите не больше %s символов",
                        more: "Пожалуйста, введите не меньше %s символов",
                        between: "Пожалуйста, введите строку длиной от %s до %s символов"
                    },
                    uri: {
                        default: "Пожалуйста, введите правильный URI"
                    },
                    uuid: {
                        default: "Пожалуйста, введите правильный номер UUID",
                        version: "Пожалуйста, введите правильный номер UUID версии %s"
                    },
                    vat: {
                        default: "Пожалуйста, введите правильный номер ИНН",
                        country: "Пожалуйста, введите правильный номер ИНН (VAT) в %s",
                        countries: {
                            AT: "Австрии",
                            BE: "Бельгии",
                            BG: "Болгарии",
                            BR: "Бразилии",
                            CH: "Швейцарии",
                            CY: "Кипре",
                            CZ: "Чешская республика",
                            DE: "Германии",
                            DK: "Дании",
                            EE: "Эстонии",
                            ES: "Испании",
                            FI: "Финляндии",
                            FR: "Франции",
                            GB: "Великобритании",
                            GR: "Греции",
                            EL: "Греции",
                            HU: "Венгрии",
                            HR: "Хорватии",
                            IE: "Ирландии",
                            IS: "Исландии",
                            IT: "Италии",
                            LT: "Литве",
                            LU: "Люксембурге",
                            LV: "Латвии",
                            MT: "Мальте",
                            NL: "Нидерландах",
                            NO: "Норвегии",
                            PL: "Польше",
                            PT: "Португалии",
                            RO: "Румынии",
                            RU: "России",
                            RS: "Сербии",
                            SE: "Швеции",
                            SI: "Словении",
                            SK: "Словакии",
                            VE: "Венесуэле",
                            ZA: "ЮАР"
                        }
                    },
                    vin: {
                        default: "Пожалуйста, введите правильный номер VIN"
                    },
                    zipCode: {
                        default: "Пожалуйста, введите правильный почтовый индекс",
                        country: "Пожалуйста, введите правильный почтовый индекс в %s",
                        countries: {
                            AT: "Австрии",
                            BG: "Болгарии",
                            BR: "Бразилии",
                            CA: "Канаде",
                            CH: "Швейцарии",
                            CZ: "Чешская республика",
                            DE: "Германии",
                            DK: "Дании",
                            ES: "Испании",
                            FR: "Франции",
                            GB: "Великобритании",
                            IE: "Ирландии",
                            IN: "Индия",
                            IT: "Италии",
                            MA: "Марокко",
                            NL: "Нидерландах",
                            PL: "Польше",
                            PT: "Португалии",
                            RO: "Румынии",
                            RU: "России",
                            SE: "Швеции",
                            SG: "Сингапуре",
                            SK: "Словакии",
                            US: "США"
                        }
                    }
                }
            })
        }(jQuery),
        function (b) {
            "function" == typeof define && define.amd ? define(["jquery"], b) : "object" == typeof exports ? module.exports = b(require("jquery")) : b(jQuery || Zepto)
        }(function (b) {
    var y = function (a, e, d) {
        var c = {
            invalid: [],
            getCaret: function () {
                try {
                    var r, b = 0,
                            e = a.get(0),
                            d = document.selection,
                            f = e.selectionStart;
                    return d && -1 === navigator.appVersion.indexOf("MSIE 10") ? (r = d.createRange(), r.moveStart("character", -c.val().length), b = r.text.length) : (f || "0" === f) && (b = f), b
                } catch (g) {
                }
            },
            setCaret: function (r) {
                try {
                    if (a.is(":focus")) {
                        var c, b = a.get(0);
                        b.setSelectionRange ? (b.focus(), b.setSelectionRange(r, r)) : (c = b.createTextRange(), c.collapse(!0), c.moveEnd("character", r), c.moveStart("character", r), c.select())
                    }
                } catch (e) {
                }
            },
            events: function () {
                a.on("keydown.mask", function (c) {
                    a.data("mask-keycode", c.keyCode || c.which)
                }).on(b.jMaskGlobals.useInput ? "input.mask" : "keyup.mask", c.behaviour).on("paste.mask drop.mask", function () {
                    setTimeout(function () {
                        a.keydown().keyup()
                    }, 100)
                }).on("change.mask", function () {
                    a.data("changed", !0)
                }).on("blur.mask", function () {
                    n === c.val() || a.data("changed") || a.trigger("change"), a.data("changed", !1)
                }).on("blur.mask", function () {
                    n = c.val()
                }).on("focus.mask", function (a) {
                    !0 === d.selectOnFocus && b(a.target).select()
                }).on("focusout.mask", function () {
                    d.clearIfNotMatch && !p.test(c.val()) && c.val("")
                })
            },
            getRegexMask: function () {
                for (var c, b, d, f, a = [], l = 0; l < e.length; l++)
                    (c = g.translation[e.charAt(l)]) ? (b = c.pattern.toString().replace(/.{1}$|^.{1}/g, ""), d = c.optional, (c = c.recursive) ? (a.push(e.charAt(l)), f = {
                        digit: e.charAt(l),
                        pattern: b
                    }) : a.push(d || c ? b + "?" : b)) : a.push(e.charAt(l).replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&"));
                return a = a.join(""), f && (a = a.replace(new RegExp("(" + f.digit + "(.*" + f.digit + ")?)"), "($1)?").replace(new RegExp(f.digit, "g"), f.pattern)), new RegExp(a)
            },
            destroyEvents: function () {
                a.off("input keydown keyup paste drop blur focusout ".split(" ").join(".mask "))
            },
            val: function (c) {
                var b = a.is("input") ? "val" : "text";
                return 0 < arguments.length ? (a[b]() !== c && a[b](c), b = a) : b = a[b](), b
            },
            getMCharsBeforeCount: function (a, c) {
                for (var b = 0, d = 0, f = e.length; d < f && d < a; d++)
                    g.translation[e.charAt(d)] || (a = c ? a + 1 : a, b++);
                return b
            },
            caretPos: function (a, b, d, h) {
                return g.translation[e.charAt(Math.min(a - 1, e.length - 1))] ? Math.min(a + d - b - h, d) : c.caretPos(a + 1, b, d, h)
            },
            behaviour: function (d) {
                d = d || window.event, c.invalid = [];
                var e = a.data("mask-keycode");
                if (-1 === b.inArray(e, g.byPassKeys)) {
                    var m = c.getCaret(),
                            h = c.val().length,
                            f = c.getMasked(),
                            l = f.length,
                            k = c.getMCharsBeforeCount(l - 1) - c.getMCharsBeforeCount(h - 1),
                            n = m < h;
                    return c.val(f), n && (8 !== e && 46 !== e && (m = c.caretPos(m, h, l, k)), c.setCaret(m)), c.callbacks(d)
                }
            },
            getMasked: function (a, b) {
                var t, w, m = [],
                        h = void 0 === b ? c.val() : b + "",
                        f = 0,
                        l = e.length,
                        k = 0,
                        n = h.length,
                        q = 1,
                        p = "push",
                        u = -1;
                for (d.reverse ? (p = "unshift", q = -1, t = 0, f = l - 1, k = n - 1, w = function () {
                    return -1 < f && -1 < k
                }) : (t = l - 1, w = function () {
                    return f < l && k < n
                }); w(); ) {
                    var x = e.charAt(f),
                            v = h.charAt(k),
                            s = g.translation[x];
                    s ? (v.match(s.pattern) ? (m[p](v), s.recursive && (-1 === u ? u = f : f === t && (f = u - q), t === u && (f -= q)), f += q) : s.optional ? (f += q, k -= q) : s.fallback ? (m[p](s.fallback), f += q, k -= q) : c.invalid.push({
                        p: k,
                        v: v,
                        e: s.pattern
                    }), k += q) : (a || m[p](x), v === x && (k += q), f += q)
                }
                return h = e.charAt(t), l !== n + 1 || g.translation[h] || m.push(h), m.join("")
            },
            callbacks: function (b) {
                var g = c.val(),
                        m = g !== n,
                        h = [g, b, a, d],
                        f = function (a, b, c) {
                            "function" == typeof d[a] && b && d[a].apply(this, c)
                        };
                f("onChange", !0 === m, h), f("onKeyPress", !0 === m, h), f("onComplete", g.length === e.length, h), f("onInvalid", 0 < c.invalid.length, [g, b, a, c.invalid, d])
            }
        };
        a = b(a);
        var p, g = this,
                n = c.val();
        e = "function" == typeof e ? e(c.val(), void 0, a, d) : e, g.mask = e, g.options = d, g.remove = function () {
            var b = c.getCaret();
            return c.destroyEvents(), c.val(g.getCleanVal()), c.setCaret(b - c.getMCharsBeforeCount(b)), a
        }, g.getCleanVal = function () {
            return c.getMasked(!0)
        }, g.getMaskedVal = function (a) {
            return c.getMasked(!1, a)
        }, g.init = function (e) {
            e = e || !1, d = d || {}, g.clearIfNotMatch = b.jMaskGlobals.clearIfNotMatch, g.byPassKeys = b.jMaskGlobals.byPassKeys, g.translation = b.extend({}, b.jMaskGlobals.translation, d.translation), g = b.extend(!0, {}, g, d), p = c.getRegexMask(), !1 === e ? (d.placeholder && a.attr("placeholder", d.placeholder), a.data("mask") && a.attr("autocomplete", "off"), c.destroyEvents(), c.events(), e = c.getCaret(), c.val(c.getMasked()), c.setCaret(e + c.getMCharsBeforeCount(e, !0))) : (c.events(), c.val(c.getMasked()))
        }, g.init(!a.is("input"))
    };
    b.maskWatchers = {};
    var A = function () {
        var a = b(this),
                e = {},
                d = a.attr("data-mask");
        if (a.attr("data-mask-reverse") && (e.reverse = !0), a.attr("data-mask-clearifnotmatch") && (e.clearIfNotMatch = !0), "true" === a.attr("data-mask-selectonfocus") && (e.selectOnFocus = !0), z(a, d, e))
            return a.data("mask", new y(this, d, e))
    },
            z = function (a, e, d) {
                d = d || {};
                var c = b(a).data("mask"),
                        g = JSON.stringify;
                a = b(a).val() || b(a).text();
                try {
                    return "function" == typeof e && (e = e(a)), "object" != typeof c || g(c.options) !== g(d) || c.mask !== e
                } catch (n) {
                }
            };
    b.fn.mask = function (a, e) {
        e = e || {};
        var d = this.selector,
                c = b.jMaskGlobals,
                g = c.watchInterval,
                c = e.watchInputs || c.watchInputs,
                n = function () {
                    if (z(this, a, e))
                        return b(this).data("mask", new y(this, a, e))
                };
        return b(this).each(n), d && "" !== d && c && (clearInterval(b.maskWatchers[d]), b.maskWatchers[d] = setInterval(function () {
            b(document).find(d).each(n)
        }, g)), this
    }, b.fn.masked = function (a) {
        return this.data("mask").getMaskedVal(a)
    }, b.fn.unmask = function () {
        return clearInterval(b.maskWatchers[this.selector]), delete b.maskWatchers[this.selector], this.each(function () {
            var a = b(this).data("mask");
            a && a.remove().removeData("mask")
        })
    }, b.fn.cleanVal = function () {
        return this.data("mask").getCleanVal()
    }, b.applyDataMask = function (a) {
        a = a || b.jMaskGlobals.maskElements, (a instanceof b ? a : b(a)).filter(b.jMaskGlobals.dataMaskAttr).each(A)
    };
    var p = {
        maskElements: "input,td,span,div",
        dataMaskAttr: "*[data-mask]",
        dataMask: !0,
        watchInterval: 300,
        watchInputs: !0,
        useInput: function (a) {
            var d, b = document.createElement("div");
            return a = "on" + a, d = a in b, d || (b.setAttribute(a, "return;"), d = "function" == typeof b[a]), d
        }("input"),
        watchDataMask: !1,
        byPassKeys: [9, 16, 17, 18, 36, 37, 38, 39, 40, 91],
        translation: {
            0: {
                pattern: /\d/
            },
            9: {
                pattern: /\d/,
                optional: !0
            },
            "#": {
                pattern: /\d/,
                recursive: !0
            },
            A: {
                pattern: /[a-zA-Z0-9]/
            },
            S: {
                pattern: /[a-zA-Z]/
            }
        }
    };
    b.jMaskGlobals = b.jMaskGlobals || {}, p = b.jMaskGlobals = b.extend(!0, {}, p, b.jMaskGlobals), p.dataMask && b.applyDataMask(), setInterval(function () {
        b.jMaskGlobals.watchDataMask && b.applyDataMask()
    }, p.watchInterval)
}),
        function ($) {
            var $w = $(window);
            $.fn.visible = function (partial, hidden, direction) {
                if (!(this.length < 1)) {
                    var $t = this.length > 1 ? this.eq(0) : this,
                            t = $t.get(0),
                            vpWidth = $w.width(),
                            vpHeight = $w.height(),
                            direction = direction ? direction : "both",
                            clientSize = hidden !== !0 || t.offsetWidth * t.offsetHeight;
                    if ("function" == typeof t.getBoundingClientRect) {
                        var rec = t.getBoundingClientRect(),
                                tViz = rec.top >= 0 && rec.top < vpHeight,
                                bViz = rec.bottom > 0 && rec.bottom <= vpHeight,
                                lViz = rec.left >= 0 && rec.left < vpWidth,
                                rViz = rec.right > 0 && rec.right <= vpWidth,
                                vVisible = partial ? tViz || bViz : tViz && bViz,
                                hVisible = partial ? lViz || rViz : lViz && rViz;
                        if ("both" === direction)
                            return clientSize && vVisible && hVisible;
                        if ("vertical" === direction)
                            return clientSize && vVisible;
                        if ("horizontal" === direction)
                            return clientSize && hVisible
                    } else {
                        var viewTop = $w.scrollTop(),
                                viewBottom = viewTop + vpHeight,
                                viewLeft = $w.scrollLeft(),
                                viewRight = viewLeft + vpWidth,
                                offset = $t.offset(),
                                _top = offset.top,
                                _bottom = _top + $t.height(),
                                _left = offset.left,
                                _right = _left + $t.width(),
                                compareTop = partial === !0 ? _bottom : _top,
                                compareBottom = partial === !0 ? _top : _bottom,
                                compareLeft = partial === !0 ? _right : _left,
                                compareRight = partial === !0 ? _left : _right;
                        if ("both" === direction)
                            return !!clientSize && compareBottom <= viewBottom && compareTop >= viewTop && compareRight <= viewRight && compareLeft >= viewLeft;
                        if ("vertical" === direction)
                            return !!clientSize && compareBottom <= viewBottom && compareTop >= viewTop;
                        if ("horizontal" === direction)
                            return !!clientSize && compareRight <= viewRight && compareLeft >= viewLeft
                    }
                }
            }
        }(jQuery),
        function (root, factory) {
            "function" == typeof define && define.amd ? define(factory) : "object" == typeof exports ? module.exports = factory() : root.ResizeSensor = factory()
        }(this, function () {
    function forEachElement(elements, callback) {
        var elementsType = Object.prototype.toString.call(elements),
                isCollectionTyped = "[object Array]" === elementsType || "[object NodeList]" === elementsType || "[object HTMLCollection]" === elementsType || "undefined" != typeof jQuery && elements instanceof jQuery || "undefined" != typeof Elements && elements instanceof Elements,
                i = 0,
                j = elements.length;
        if (isCollectionTyped)
            for (; i < j; i++)
                callback(elements[i]);
        else
            callback(elements)
    }
    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || function (fn) {
        return window.setTimeout(fn, 20)
    },
            ResizeSensor = function (element, callback) {
                function EventQueue() {
                    var q = [];
                    this.add = function (ev) {
                        q.push(ev)
                    };
                    var i, j;
                    this.call = function () {
                        for (i = 0, j = q.length; i < j; i++)
                            q[i].call()
                    }, this.remove = function (ev) {
                        var newQueue = [];
                        for (i = 0, j = q.length; i < j; i++)
                            q[i] !== ev && newQueue.push(q[i]);
                        q = newQueue
                    }, this.length = function () {
                        return q.length
                    }
                }

                function getComputedStyle(element, prop) {
                    return element.currentStyle ? element.currentStyle[prop] : window.getComputedStyle ? window.getComputedStyle(element, null).getPropertyValue(prop) : element.style[prop]
                }

                function attachResizeEvent(element, resized) {
                    if (element.resizedAttached) {
                        if (element.resizedAttached)
                            return void element.resizedAttached.add(resized)
                    } else
                        element.resizedAttached = new EventQueue, element.resizedAttached.add(resized);
                    element.resizeSensor = document.createElement("div"), element.resizeSensor.className = "resize-sensor";
                    var style = "position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;",
                            styleChild = "position: absolute; left: 0; top: 0; transition: 0s;";
                    element.resizeSensor.style.cssText = style, element.resizeSensor.innerHTML = '<div class="resize-sensor-expand" style="' + style + '"><div style="' + styleChild + '"></div></div><div class="resize-sensor-shrink" style="' + style + '"><div style="' + styleChild + ' width: 200%; height: 200%"></div></div>', element.appendChild(element.resizeSensor), "static" == getComputedStyle(element, "position") && (element.style.position = "relative");
                    var expand = element.resizeSensor.childNodes[0],
                            expandChild = expand.childNodes[0],
                            shrink = element.resizeSensor.childNodes[1],
                            reset = function () {
                                expandChild.style.width = 1e5 + "px", expandChild.style.height = 1e5 + "px", expand.scrollLeft = 1e5, expand.scrollTop = 1e5, shrink.scrollLeft = 1e5, shrink.scrollTop = 1e5
                            };
                    reset();
                    var dirty = !1,
                            dirtyChecking = function () {
                                element.resizedAttached && (dirty && (element.resizedAttached.call(), dirty = !1), requestAnimationFrame(dirtyChecking))
                            };
                    requestAnimationFrame(dirtyChecking);
                    var lastWidth, lastHeight, cachedWidth, cachedHeight, onScroll = function () {
                        (cachedWidth = element.offsetWidth) == lastWidth && (cachedHeight = element.offsetHeight) == lastHeight || (dirty = !0, lastWidth = cachedWidth, lastHeight = cachedHeight), reset()
                    },
                            addEvent = function (el, name, cb) {
                                el.attachEvent ? el.attachEvent("on" + name, cb) : el.addEventListener(name, cb)
                            };
                    addEvent(expand, "scroll", onScroll), addEvent(shrink, "scroll", onScroll)
                }
                forEachElement(element, function (elem) {
                    attachResizeEvent(elem, callback)
                }), this.detach = function (ev) {
                    ResizeSensor.detach(element, ev)
                }
            };
    return ResizeSensor.detach = function (element, ev) {
        forEachElement(element, function (elem) {
            elem.resizedAttached && "function" == typeof ev && (elem.resizedAttached.remove(ev), elem.resizedAttached.length()) || elem.resizeSensor && (elem.removeChild(elem.resizeSensor), delete elem.resizeSensor, delete elem.resizedAttached)
        })
    }, ResizeSensor
}),
        function ($) {
            $.fn.searchbox = function (callback, config) {
                var settings = $.extend(!0, {
                    delay: 350
                }, config || {});
                return this.each(function () {
                    var $input = $(this);
                    $input.on("input propertychange", function () {
                        $input.val() != this.previousValue && (clearTimeout(this.timer), this.timer = setTimeout(function () {
                            callback.bind(this)($input.val())
                        }.bind(this), settings.delay), this.previousValue = $input.val())
                    })
                })
            }
        }($),
        function () {
            var b, f;
            b = this.jQuery || window.jQuery, f = b(window), b.fn.stick_in_parent = function (d) {
                var A, w, J, n, B, K, p, q, k, E, t;
                for (null == d && (d = {}), t = d.sticky_class, B = d.inner_scrolling, E = d.recalc_every, k = d.parent, q = d.offset_top, p = d.spacer, w = d.bottoming, null == q && (q = 0), null == k && (k = void 0), null == B && (B = !0), null == t && (t = "is_stuck"), A = b(document), null == w && (w = !0), J = function(a, d, n, C, F, u, r, G) {
                var v, H, m, D, I, c, g, x, y, z, h, l;
                        if (!a.data("sticky_kit")) {
                if (a.data("sticky_kit", !0), I = A.height(), g = a.parent(), null != k && (g = g.closest(k)), !g.length) throw "failed to find stick parent";
                        if (v = m = !1, (h = null != p ? p && a.closest(p) : b("<div />")) && h.css("position", a.css("position")), x = function() {
                        var c, f, e;
                                if (!G && (I = A.height(), c = parseInt(g.css("border-top-width"), 10), f = parseInt(g.css("padding-top"), 10), d = parseInt(g.css("padding-bottom"), 10), n = g.offset().top + c + f, C = g.height(), m && (v = m = !1, null == p && (a.insertAfter(h), h.detach()), a.css({
                                position: "",
                                        top: "",
                                        width: "",
                                        bottom: ""
                                }).removeClass(t), e = !0), F = a.offset().top - (parseInt(a.css("margin-top"), 10) || 0) - q, u = a.outerHeight(!0), r = a.css("float"), h && h.css({
                                width: a.outerWidth(!0),
                                        height: u,
                                        display: a.css("display"),
                                        "vertical-align": a.css("vertical-align"),
                                        float: r
                                }), e)) return l()
                        }, x(), u !== C) return D = void 0, c = q, z = E, l = function() {
                var b, l, e, k;
                        if (!G && (e = !1, null != z && (--z, 0 >= z && (z = E, x(), e = !0)), e || A.height() === I || x(), e = f.scrollTop(), null != D && (l = e - D), D = e, m ? (w && (k = e + u + c > C + n, v && !k && (v = !1, a.css({
                        position: "fixed",
                                bottom: "",
                                top: c
                        }).trigger("sticky_kit:unbottom"))), e < F && (m = !1, c = q, null == p && ("left" !== r && "right" !== r || a.insertAfter(h), h.detach()), b = {
                        position: "",
                                width: "",
                                top: ""
                        }, a.css(b).removeClass(t).trigger("sticky_kit:unstick")), B && (b = f.height(), u + q > b && !v && (c -= l, c = Math.max(b - u, c), c = Math.min(q, c), m && a.css({
                        top: c + "px"
                        })))) : e > F && (m = !0, b = {
                        position: "fixed",
                                top: c
                        }, b.width = "border-box" === a.css("box-sizing") ? a.outerWidth() + "px" : a.width() + "px", a.css(b).addClass(t), null == p && (a.after(h), "left" !== r && "right" !== r || h.append(a)), a.trigger("sticky_kit:stick")), m && w && (null == k && (k = e + u + c > C + n), !v && k))) return v = !0, "static" === g.css("position") && g.css({
                position: "relative"
                }), a.css({
                position: "absolute",
                        bottom: d,
                        top: "auto"
                }).trigger("sticky_kit:bottom")
                }, y = function() {
                return x(), l()
                }, H = function() {
                if (G = !0, f.off("touchmove", l), f.off("scroll", l), f.off("resize", y), b(document.body).off("sticky_kit:recalc", y), a.off("sticky_kit:detach", H), a.removeData("sticky_kit"), a.css({
                position: "",
                        bottom: "",
                        top: "",
                        width: ""
                }), g.position("position", ""), m) return null == p && ("left" !== r && "right" !== r || a.insertAfter(h), h.remove()), a.removeClass(t)
                }, f.on("touchmove", l), f.on("scroll", l), f.on("resize", y), b(document.body).on("sticky_kit:recalc", y), a.on("sticky_kit:detach", H), setTimeout(l, 0)
                }
                }, n = 0, K = this.length; n < K; n++)
                    d = this[n], J(b(d));
                return this
            }
        }.call(this),
        function (factory) {
            "use strict";
            "function" == typeof define && define.amd ? define(["jquery"], factory) : "undefined" != typeof exports ? module.exports = factory(require("jquery")) : factory(jQuery)
        }(function ($) {
    "use strict";
    var Slick = window.Slick || {};
    Slick = function () {
        function Slick(element, settings) {
            var dataSettings, _ = this;
            _.defaults = {
                accessibility: !0,
                adaptiveHeight: !1,
                appendArrows: $(element),
                appendDots: $(element),
                arrows: !0,
                asNavFor: null,
                prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>',
                nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>',
                autoplay: !1,
                autoplaySpeed: 3e3,
                centerMode: !1,
                centerPadding: "50px",
                cssEase: "ease",
                customPaging: function (slider, i) {
                    return $('<button type="button" data-role="none" role="button" tabindex="0" />').text(i + 1)
                },
                dots: !1,
                dotsClass: "slick-dots",
                draggable: !0,
                easing: "linear",
                edgeFriction: .35,
                fade: !1,
                focusOnSelect: !1,
                infinite: !0,
                initialSlide: 0,
                lazyLoad: "ondemand",
                mobileFirst: !1,
                pauseOnHover: !0,
                pauseOnFocus: !0,
                pauseOnDotsHover: !1,
                respondTo: "window",
                responsive: null,
                rows: 1,
                rtl: !1,
                slide: "",
                slidesPerRow: 1,
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 500,
                swipe: !0,
                swipeToSlide: !1,
                touchMove: !0,
                touchThreshold: 5,
                useCSS: !0,
                useTransform: !0,
                variableWidth: !1,
                vertical: !1,
                verticalSwiping: !1,
                waitForAnimate: !0,
                zIndex: 1e3
            }, _.initials = {
                animating: !1,
                dragging: !1,
                autoPlayTimer: null,
                currentDirection: 0,
                currentLeft: null,
                currentSlide: 0,
                direction: 1,
                $dots: null,
                listWidth: null,
                listHeight: null,
                loadIndex: 0,
                $nextArrow: null,
                $prevArrow: null,
                slideCount: null,
                slideWidth: null,
                $slideTrack: null,
                $slides: null,
                sliding: !1,
                slideOffset: 0,
                swipeLeft: null,
                $list: null,
                touchObject: {},
                transformsEnabled: !1,
                unslicked: !1
            }, $.extend(_, _.initials), _.activeBreakpoint = null, _.animType = null, _.animProp = null, _.breakpoints = [], _.breakpointSettings = [], _.cssTransitions = !1, _.focussed = !1, _.interrupted = !1, _.hidden = "hidden", _.paused = !0, _.positionProp = null, _.respondTo = null, _.rowCount = 1, _.shouldClick = !0, _.$slider = $(element), _.$slidesCache = null, _.transformType = null, _.transitionType = null, _.visibilityChange = "visibilitychange", _.windowWidth = 0, _.windowTimer = null, dataSettings = $(element).data("slick") || {}, _.options = $.extend({}, _.defaults, settings, dataSettings), _.currentSlide = _.options.initialSlide, _.originalSettings = _.options, "undefined" != typeof document.mozHidden ? (_.hidden = "mozHidden", _.visibilityChange = "mozvisibilitychange") : "undefined" != typeof document.webkitHidden && (_.hidden = "webkitHidden", _.visibilityChange = "webkitvisibilitychange"), _.autoPlay = $.proxy(_.autoPlay, _), _.autoPlayClear = $.proxy(_.autoPlayClear, _),
                    _.autoPlayIterator = $.proxy(_.autoPlayIterator, _), _.changeSlide = $.proxy(_.changeSlide, _), _.clickHandler = $.proxy(_.clickHandler, _), _.selectHandler = $.proxy(_.selectHandler, _), _.setPosition = $.proxy(_.setPosition, _), _.swipeHandler = $.proxy(_.swipeHandler, _), _.dragHandler = $.proxy(_.dragHandler, _), _.keyHandler = $.proxy(_.keyHandler, _), _.instanceUid = instanceUid++, _.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/, _.registerBreakpoints(), _.init(!0)
        }
        var instanceUid = 0;
        return Slick
    }(), Slick.prototype.activateADA = function () {
        var _ = this;
        _.$slideTrack.find(".slick-active").attr({
            "aria-hidden": "false"
        }).find("a, input, button, select").attr({
            tabindex: "0"
        })
    }, Slick.prototype.addSlide = Slick.prototype.slickAdd = function (markup, index, addBefore) {
        var _ = this;
        if ("boolean" == typeof index)
            addBefore = index, index = null;
        else if (index < 0 || index >= _.slideCount)
            return !1;
        _.unload(), "number" == typeof index ? 0 === index && 0 === _.$slides.length ? $(markup).appendTo(_.$slideTrack) : addBefore ? $(markup).insertBefore(_.$slides.eq(index)) : $(markup).insertAfter(_.$slides.eq(index)) : addBefore === !0 ? $(markup).prependTo(_.$slideTrack) : $(markup).appendTo(_.$slideTrack), _.$slides = _.$slideTrack.children(this.options.slide), _.$slideTrack.children(this.options.slide).detach(), _.$slideTrack.append(_.$slides), _.$slides.each(function (index, element) {
            $(element).attr("data-slick-index", index)
        }), _.$slidesCache = _.$slides, _.reinit()
    }, Slick.prototype.animateHeight = function () {
        var _ = this;
        if (1 === _.options.slidesToShow && _.options.adaptiveHeight === !0 && _.options.vertical === !1) {
            var targetHeight = _.$slides.eq(_.currentSlide).outerHeight(!0);
            _.$list.animate({
                height: targetHeight
            }, _.options.speed)
        }
    }, Slick.prototype.animateSlide = function (targetLeft, callback) {
        var animProps = {},
                _ = this;
        _.animateHeight(), _.options.rtl === !0 && _.options.vertical === !1 && (targetLeft = -targetLeft), _.transformsEnabled === !1 ? _.options.vertical === !1 ? _.$slideTrack.animate({
            left: targetLeft
        }, _.options.speed, _.options.easing, callback) : _.$slideTrack.animate({
            top: targetLeft
        }, _.options.speed, _.options.easing, callback) : _.cssTransitions === !1 ? (_.options.rtl === !0 && (_.currentLeft = -_.currentLeft), $({
            animStart: _.currentLeft
        }).animate({
            animStart: targetLeft
        }, {
            duration: _.options.speed,
            easing: _.options.easing,
            step: function (now) {
                now = Math.ceil(now), _.options.vertical === !1 ? (animProps[_.animType] = "translate(" + now + "px, 0px)", _.$slideTrack.css(animProps)) : (animProps[_.animType] = "translate(0px," + now + "px)", _.$slideTrack.css(animProps))
            },
            complete: function () {
                callback && callback.call()
            }
        })) : (_.applyTransition(), targetLeft = Math.ceil(targetLeft), _.options.vertical === !1 ? animProps[_.animType] = "translate3d(" + targetLeft + "px, 0px, 0px)" : animProps[_.animType] = "translate3d(0px," + targetLeft + "px, 0px)", _.$slideTrack.css(animProps), callback && setTimeout(function () {
            _.disableTransition(), callback.call()
        }, _.options.speed))
    }, Slick.prototype.getNavTarget = function () {
        var _ = this,
                asNavFor = _.options.asNavFor;
        return asNavFor && null !== asNavFor && (asNavFor = $(asNavFor).not(_.$slider)), asNavFor
    }, Slick.prototype.asNavFor = function (index) {
        var _ = this,
                asNavFor = _.getNavTarget();
        null !== asNavFor && "object" == typeof asNavFor && asNavFor.each(function () {
            var target = $(this).slick("getSlick");
            target.unslicked || target.slideHandler(index, !0)
        })
    }, Slick.prototype.applyTransition = function (slide) {
        var _ = this,
                transition = {};
        _.options.fade === !1 ? transition[_.transitionType] = _.transformType + " " + _.options.speed + "ms " + _.options.cssEase : transition[_.transitionType] = "opacity " + _.options.speed + "ms " + _.options.cssEase, _.options.fade === !1 ? _.$slideTrack.css(transition) : _.$slides.eq(slide).css(transition)
    }, Slick.prototype.autoPlay = function () {
        var _ = this;
        _.autoPlayClear(), _.slideCount > _.options.slidesToShow && (_.autoPlayTimer = setInterval(_.autoPlayIterator, _.options.autoplaySpeed))
    }, Slick.prototype.autoPlayClear = function () {
        var _ = this;
        _.autoPlayTimer && clearInterval(_.autoPlayTimer)
    }, Slick.prototype.autoPlayIterator = function () {
        var _ = this,
                slideTo = _.currentSlide + _.options.slidesToScroll;
        _.paused || _.interrupted || _.focussed || (_.options.infinite === !1 && (1 === _.direction && _.currentSlide + 1 === _.slideCount - 1 ? _.direction = 0 : 0 === _.direction && (slideTo = _.currentSlide - _.options.slidesToScroll, _.currentSlide - 1 === 0 && (_.direction = 1))), _.slideHandler(slideTo))
    }, Slick.prototype.buildArrows = function () {
        var _ = this;
        _.options.arrows === !0 && (_.$prevArrow = $(_.options.prevArrow).addClass("slick-arrow"), _.$nextArrow = $(_.options.nextArrow).addClass("slick-arrow"), _.slideCount > _.options.slidesToShow ? (_.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), _.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), _.htmlExpr.test(_.options.prevArrow) && _.$prevArrow.prependTo(_.options.appendArrows), _.htmlExpr.test(_.options.nextArrow) && _.$nextArrow.appendTo(_.options.appendArrows), _.options.infinite !== !0 && _.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true")) : _.$prevArrow.add(_.$nextArrow).addClass("slick-hidden").attr({
            "aria-disabled": "true",
            tabindex: "-1"
        }))
    }, Slick.prototype.buildDots = function () {
        var i, dot, _ = this;
        if (_.options.dots === !0 && _.slideCount > _.options.slidesToShow) {
            for (_.$slider.addClass("slick-dotted"), dot = $("<ul />").addClass(_.options.dotsClass), i = 0; i <= _.getDotCount(); i += 1)
                dot.append($("<li />").append(_.options.customPaging.call(this, _, i)));
            _.$dots = dot.appendTo(_.options.appendDots), _.$dots.find("li").first().addClass("slick-active").attr("aria-hidden", "false")
        }
    }, Slick.prototype.buildOut = function () {
        var _ = this;
        _.$slides = _.$slider.children(_.options.slide + ":not(.slick-cloned)").addClass("slick-slide"), _.slideCount = _.$slides.length, _.$slides.each(function (index, element) {
            $(element).attr("data-slick-index", index).data("originalStyling", $(element).attr("style") || "")
        }), _.$slider.addClass("slick-slider"), _.$slideTrack = 0 === _.slideCount ? $('<div class="slick-track"/>').appendTo(_.$slider) : _.$slides.wrapAll('<div class="slick-track"/>').parent(), _.$list = _.$slideTrack.wrap('<div aria-live="polite" class="slick-list"/>').parent(), _.$slideTrack.css("opacity", 0), _.options.centerMode !== !0 && _.options.swipeToSlide !== !0 || (_.options.slidesToScroll = 1), $("img[data-lazy]", _.$slider).not("[src]").addClass("slick-loading"), _.setupInfinite(), _.buildArrows(), _.buildDots(), _.updateDots(), _.setSlideClasses("number" == typeof _.currentSlide ? _.currentSlide : 0), _.options.draggable === !0 && _.$list.addClass("draggable")
    }, Slick.prototype.buildRows = function () {
        var a, b, c, newSlides, numOfSlides, originalSlides, slidesPerSection, _ = this;
        if (newSlides = document.createDocumentFragment(), originalSlides = _.$slider.children(), _.options.rows > 1) {
            for (slidesPerSection = _.options.slidesPerRow * _.options.rows, numOfSlides = Math.ceil(originalSlides.length / slidesPerSection), a = 0; a < numOfSlides; a++) {
                var slide = document.createElement("div");
                for (b = 0; b < _.options.rows; b++) {
                    var row = document.createElement("div");
                    for (c = 0; c < _.options.slidesPerRow; c++) {
                        var target = a * slidesPerSection + (b * _.options.slidesPerRow + c);
                        originalSlides.get(target) && row.appendChild(originalSlides.get(target))
                    }
                    slide.appendChild(row)
                }
                newSlides.appendChild(slide)
            }
            _.$slider.empty().append(newSlides), _.$slider.children().children().children().css({
                width: 100 / _.options.slidesPerRow + "%",
                display: "inline-block"
            })
        }
    }, Slick.prototype.checkResponsive = function (initial, forceUpdate) {
        var breakpoint, targetBreakpoint, respondToWidth, _ = this,
                triggerBreakpoint = !1,
                sliderWidth = _.$slider.width(),
                windowWidth = window.innerWidth || $(window).width();
        if ("window" === _.respondTo ? respondToWidth = windowWidth : "slider" === _.respondTo ? respondToWidth = sliderWidth : "min" === _.respondTo && (respondToWidth = Math.min(windowWidth, sliderWidth)), _.options.responsive && _.options.responsive.length && null !== _.options.responsive) {
            targetBreakpoint = null;
            for (breakpoint in _.breakpoints)
                _.breakpoints.hasOwnProperty(breakpoint) && (_.originalSettings.mobileFirst === !1 ? respondToWidth < _.breakpoints[breakpoint] && (targetBreakpoint = _.breakpoints[breakpoint]) : respondToWidth > _.breakpoints[breakpoint] && (targetBreakpoint = _.breakpoints[breakpoint]));
            null !== targetBreakpoint ? null !== _.activeBreakpoint ? (targetBreakpoint !== _.activeBreakpoint || forceUpdate) && (_.activeBreakpoint = targetBreakpoint, "unslick" === _.breakpointSettings[targetBreakpoint] ? _.unslick(targetBreakpoint) : (_.options = $.extend({}, _.originalSettings, _.breakpointSettings[targetBreakpoint]), initial === !0 && (_.currentSlide = _.options.initialSlide), _.refresh(initial)), triggerBreakpoint = targetBreakpoint) : (_.activeBreakpoint = targetBreakpoint, "unslick" === _.breakpointSettings[targetBreakpoint] ? _.unslick(targetBreakpoint) : (_.options = $.extend({}, _.originalSettings, _.breakpointSettings[targetBreakpoint]), initial === !0 && (_.currentSlide = _.options.initialSlide), _.refresh(initial)), triggerBreakpoint = targetBreakpoint) : null !== _.activeBreakpoint && (_.activeBreakpoint = null, _.options = _.originalSettings, initial === !0 && (_.currentSlide = _.options.initialSlide), _.refresh(initial), triggerBreakpoint = targetBreakpoint), initial || triggerBreakpoint === !1 || _.$slider.trigger("breakpoint", [_, triggerBreakpoint])
        }
    }, Slick.prototype.changeSlide = function (event, dontAnimate) {
        var indexOffset, slideOffset, unevenOffset, _ = this,
                $target = $(event.currentTarget);
        switch ($target.is("a") && event.preventDefault(), $target.is("li") || ($target = $target.closest("li")), unevenOffset = _.slideCount % _.options.slidesToScroll !== 0, indexOffset = unevenOffset ? 0 : (_.slideCount - _.currentSlide) % _.options.slidesToScroll, event.data.message) {
            case "previous":
                slideOffset = 0 === indexOffset ? _.options.slidesToScroll : _.options.slidesToShow - indexOffset, _.slideCount > _.options.slidesToShow && _.slideHandler(_.currentSlide - slideOffset, !1, dontAnimate);
                break;
            case "next":
                slideOffset = 0 === indexOffset ? _.options.slidesToScroll : indexOffset, _.slideCount > _.options.slidesToShow && _.slideHandler(_.currentSlide + slideOffset, !1, dontAnimate);
                break;
            case "index":
                var index = 0 === event.data.index ? 0 : event.data.index || $target.index() * _.options.slidesToScroll;
                _.slideHandler(_.checkNavigable(index), !1, dontAnimate), $target.children().trigger("focus");
                break;
            default:
                return
        }
    }, Slick.prototype.checkNavigable = function (index) {
        var navigables, prevNavigable, _ = this;
        if (navigables = _.getNavigableIndexes(), prevNavigable = 0, index > navigables[navigables.length - 1])
            index = navigables[navigables.length - 1];
        else
            for (var n in navigables) {
                if (index < navigables[n]) {
                    index = prevNavigable;
                    break
                }
                prevNavigable = navigables[n]
            }
        return index
    }, Slick.prototype.cleanUpEvents = function () {
        var _ = this;
        _.options.dots && null !== _.$dots && $("li", _.$dots).off("click.slick", _.changeSlide).off("mouseenter.slick", $.proxy(_.interrupt, _, !0)).off("mouseleave.slick", $.proxy(_.interrupt, _, !1)), _.$slider.off("focus.slick blur.slick"), _.options.arrows === !0 && _.slideCount > _.options.slidesToShow && (_.$prevArrow && _.$prevArrow.off("click.slick", _.changeSlide), _.$nextArrow && _.$nextArrow.off("click.slick", _.changeSlide)), _.$list.off("touchstart.slick mousedown.slick", _.swipeHandler), _.$list.off("touchmove.slick mousemove.slick", _.swipeHandler), _.$list.off("touchend.slick mouseup.slick", _.swipeHandler), _.$list.off("touchcancel.slick mouseleave.slick", _.swipeHandler), _.$list.off("click.slick", _.clickHandler), $(document).off(_.visibilityChange, _.visibility), _.cleanUpSlideEvents(), _.options.accessibility === !0 && _.$list.off("keydown.slick", _.keyHandler), _.options.focusOnSelect === !0 && $(_.$slideTrack).children().off("click.slick", _.selectHandler), $(window).off("orientationchange.slick.slick-" + _.instanceUid, _.orientationChange), $(window).off("resize.slick.slick-" + _.instanceUid, _.resize), $("[draggable!=true]", _.$slideTrack).off("dragstart", _.preventDefault), $(window).off("load.slick.slick-" + _.instanceUid, _.setPosition), $(document).off("ready.slick.slick-" + _.instanceUid, _.setPosition)
    }, Slick.prototype.cleanUpSlideEvents = function () {
        var _ = this;
        _.$list.off("mouseenter.slick", $.proxy(_.interrupt, _, !0)), _.$list.off("mouseleave.slick", $.proxy(_.interrupt, _, !1))
    }, Slick.prototype.cleanUpRows = function () {
        var originalSlides, _ = this;
        _.options.rows > 1 && (originalSlides = _.$slides.children().children(), originalSlides.removeAttr("style"), _.$slider.empty().append(originalSlides))
    }, Slick.prototype.clickHandler = function (event) {
        var _ = this;
        _.shouldClick === !1 && (event.stopImmediatePropagation(), event.stopPropagation(), event.preventDefault())
    }, Slick.prototype.destroy = function (refresh) {
        var _ = this;
        _.autoPlayClear(), _.touchObject = {}, _.cleanUpEvents(), $(".slick-cloned", _.$slider).detach(), _.$dots && _.$dots.remove(), _.$prevArrow && _.$prevArrow.length && (_.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), _.htmlExpr.test(_.options.prevArrow) && _.$prevArrow.remove()), _.$nextArrow && _.$nextArrow.length && (_.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), _.htmlExpr.test(_.options.nextArrow) && _.$nextArrow.remove()), _.$slides && (_.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each(function () {
            $(this).attr("style", $(this).data("originalStyling"))
        }), _.$slideTrack.children(this.options.slide).detach(), _.$slideTrack.detach(), _.$list.detach(), _.$slider.append(_.$slides)), _.cleanUpRows(), _.$slider.removeClass("slick-slider"), _.$slider.removeClass("slick-initialized"), _.$slider.removeClass("slick-dotted"), _.unslicked = !0, refresh || _.$slider.trigger("destroy", [_])
    }, Slick.prototype.disableTransition = function (slide) {
        var _ = this,
                transition = {};
        transition[_.transitionType] = "", _.options.fade === !1 ? _.$slideTrack.css(transition) : _.$slides.eq(slide).css(transition)
    }, Slick.prototype.fadeSlide = function (slideIndex, callback) {
        var _ = this;
        _.cssTransitions === !1 ? (_.$slides.eq(slideIndex).css({
            zIndex: _.options.zIndex
        }), _.$slides.eq(slideIndex).animate({
            opacity: 1
        }, _.options.speed, _.options.easing, callback)) : (_.applyTransition(slideIndex), _.$slides.eq(slideIndex).css({
            opacity: 1,
            zIndex: _.options.zIndex
        }), callback && setTimeout(function () {
            _.disableTransition(slideIndex), callback.call()
        }, _.options.speed))
    }, Slick.prototype.fadeSlideOut = function (slideIndex) {
        var _ = this;
        _.cssTransitions === !1 ? _.$slides.eq(slideIndex).animate({
            opacity: 0,
            zIndex: _.options.zIndex - 2
        }, _.options.speed, _.options.easing) : (_.applyTransition(slideIndex), _.$slides.eq(slideIndex).css({
            opacity: 0,
            zIndex: _.options.zIndex - 2
        }))
    }, Slick.prototype.filterSlides = Slick.prototype.slickFilter = function (filter) {
        var _ = this;
        null !== filter && (_.$slidesCache = _.$slides, _.unload(), _.$slideTrack.children(this.options.slide).detach(), _.$slidesCache.filter(filter).appendTo(_.$slideTrack), _.reinit())
    }, Slick.prototype.focusHandler = function () {
        var _ = this;
        _.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick", "*:not(.slick-arrow)", function (event) {
            event.stopImmediatePropagation();
            var $sf = $(this);
            setTimeout(function () {
                _.options.pauseOnFocus && (_.focussed = $sf.is(":focus"), _.autoPlay())
            }, 0)
        })
    }, Slick.prototype.getCurrent = Slick.prototype.slickCurrentSlide = function () {
        var _ = this;
        return _.currentSlide
    }, Slick.prototype.getDotCount = function () {
        var _ = this,
                breakPoint = 0,
                counter = 0,
                pagerQty = 0;
        if (_.options.infinite === !0)
            for (; breakPoint < _.slideCount; )
                ++pagerQty, breakPoint = counter + _.options.slidesToScroll, counter += _.options.slidesToScroll <= _.options.slidesToShow ? _.options.slidesToScroll : _.options.slidesToShow;
        else if (_.options.centerMode === !0)
            pagerQty = _.slideCount;
        else if (_.options.asNavFor)
            for (; breakPoint < _.slideCount; )
                ++pagerQty, breakPoint = counter + _.options.slidesToScroll, counter += _.options.slidesToScroll <= _.options.slidesToShow ? _.options.slidesToScroll : _.options.slidesToShow;
        else
            pagerQty = 1 + Math.ceil((_.slideCount - _.options.slidesToShow) / _.options.slidesToScroll);
        return pagerQty - 1
    }, Slick.prototype.getLeft = function (slideIndex) {
        var targetLeft, verticalHeight, targetSlide, _ = this,
                verticalOffset = 0;
        return _.slideOffset = 0, verticalHeight = _.$slides.first().outerHeight(!0), _.options.infinite === !0 ? (_.slideCount > _.options.slidesToShow && (_.slideOffset = _.slideWidth * _.options.slidesToShow * -1, verticalOffset = verticalHeight * _.options.slidesToShow * -1), _.slideCount % _.options.slidesToScroll !== 0 && slideIndex + _.options.slidesToScroll > _.slideCount && _.slideCount > _.options.slidesToShow && (slideIndex > _.slideCount ? (_.slideOffset = (_.options.slidesToShow - (slideIndex - _.slideCount)) * _.slideWidth * -1, verticalOffset = (_.options.slidesToShow - (slideIndex - _.slideCount)) * verticalHeight * -1) : (_.slideOffset = _.slideCount % _.options.slidesToScroll * _.slideWidth * -1, verticalOffset = _.slideCount % _.options.slidesToScroll * verticalHeight * -1))) : slideIndex + _.options.slidesToShow > _.slideCount && (_.slideOffset = (slideIndex + _.options.slidesToShow - _.slideCount) * _.slideWidth, verticalOffset = (slideIndex + _.options.slidesToShow - _.slideCount) * verticalHeight), _.slideCount <= _.options.slidesToShow && (_.slideOffset = 0, verticalOffset = 0), _.options.centerMode === !0 && _.options.infinite === !0 ? _.slideOffset += _.slideWidth * Math.floor(_.options.slidesToShow / 2) - _.slideWidth : _.options.centerMode === !0 && (_.slideOffset = 0, _.slideOffset += _.slideWidth * Math.floor(_.options.slidesToShow / 2)), targetLeft = _.options.vertical === !1 ? slideIndex * _.slideWidth * -1 + _.slideOffset : slideIndex * verticalHeight * -1 + verticalOffset, _.options.variableWidth === !0 && (targetSlide = _.slideCount <= _.options.slidesToShow || _.options.infinite === !1 ? _.$slideTrack.children(".slick-slide").eq(slideIndex) : _.$slideTrack.children(".slick-slide").eq(slideIndex + _.options.slidesToShow), targetLeft = _.options.rtl === !0 ? targetSlide[0] ? (_.$slideTrack.width() - targetSlide[0].offsetLeft - targetSlide.width()) * -1 : 0 : targetSlide[0] ? targetSlide[0].offsetLeft * -1 : 0, _.options.centerMode === !0 && (targetSlide = _.slideCount <= _.options.slidesToShow || _.options.infinite === !1 ? _.$slideTrack.children(".slick-slide").eq(slideIndex) : _.$slideTrack.children(".slick-slide").eq(slideIndex + _.options.slidesToShow + 1), targetLeft = _.options.rtl === !0 ? targetSlide[0] ? (_.$slideTrack.width() - targetSlide[0].offsetLeft - targetSlide.width()) * -1 : 0 : targetSlide[0] ? targetSlide[0].offsetLeft * -1 : 0, targetLeft += (_.$list.width() - targetSlide.outerWidth()) / 2)), targetLeft
    }, Slick.prototype.getOption = Slick.prototype.slickGetOption = function (option) {
        var _ = this;
        return _.options[option]
    }, Slick.prototype.getNavigableIndexes = function () {
        var max, _ = this,
                breakPoint = 0,
                counter = 0,
                indexes = [];
        for (_.options.infinite === !1 ? max = _.slideCount : (breakPoint = _.options.slidesToScroll * - 1, counter = _.options.slidesToScroll * - 1, max = 2 * _.slideCount); breakPoint < max; )
            indexes.push(breakPoint), breakPoint = counter + _.options.slidesToScroll, counter += _.options.slidesToScroll <= _.options.slidesToShow ? _.options.slidesToScroll : _.options.slidesToShow;
        return indexes
    }, Slick.prototype.getSlick = function () {
        return this
    }, Slick.prototype.getSlideCount = function () {
        var slidesTraversed, swipedSlide, centerOffset, _ = this;
        return centerOffset = _.options.centerMode === !0 ? _.slideWidth * Math.floor(_.options.slidesToShow / 2) : 0, _.options.swipeToSlide === !0 ? (_.$slideTrack.find(".slick-slide").each(function (index, slide) {
            if (slide.offsetLeft - centerOffset + $(slide).outerWidth() / 2 > _.swipeLeft * -1)
                return swipedSlide = slide, !1
        }), slidesTraversed = Math.abs($(swipedSlide).attr("data-slick-index") - _.currentSlide) || 1) : _.options.slidesToScroll
    }, Slick.prototype.goTo = Slick.prototype.slickGoTo = function (slide, dontAnimate) {
        var _ = this;
        _.changeSlide({
            data: {
                message: "index",
                index: parseInt(slide)
            }
        }, dontAnimate)
    }, Slick.prototype.init = function (creation) {
        var _ = this;
        $(_.$slider).hasClass("slick-initialized") || ($(_.$slider).addClass("slick-initialized"), _.buildRows(), _.buildOut(), _.setProps(), _.startLoad(), _.loadSlider(), _.initializeEvents(), _.updateArrows(), _.updateDots(), _.checkResponsive(!0), _.focusHandler()), creation && _.$slider.trigger("init", [_]), _.options.accessibility === !0 && _.initADA(), _.options.autoplay && (_.paused = !1, _.autoPlay())
    }, Slick.prototype.initADA = function () {
        var _ = this;
        _.$slides.add(_.$slideTrack.find(".slick-cloned")).attr({
            "aria-hidden": "true",
            tabindex: "-1"
        }).find("a, input, button, select").attr({
            tabindex: "-1"
        }), _.$slideTrack.attr("role", "listbox"), _.$slides.not(_.$slideTrack.find(".slick-cloned")).each(function (i) {
            $(this).attr({
                role: "option",
                "aria-describedby": "slick-slide" + _.instanceUid + i
            })
        }), null !== _.$dots && _.$dots.attr("role", "tablist").find("li").each(function (i) {
            $(this).attr({
                role: "presentation",
                "aria-selected": "false",
                "aria-controls": "navigation" + _.instanceUid + i,
                id: "slick-slide" + _.instanceUid + i
            })
        }).first().attr("aria-selected", "true").end().find("button").attr("role", "button").end().closest("div").attr("role", "toolbar"), _.activateADA()
    }, Slick.prototype.initArrowEvents = function () {
        var _ = this;
        _.options.arrows === !0 && _.slideCount > _.options.slidesToShow && (_.$prevArrow.off("click.slick").on("click.slick", {
            message: "previous"
        }, _.changeSlide), _.$nextArrow.off("click.slick").on("click.slick", {
            message: "next"
        }, _.changeSlide))
    }, Slick.prototype.initDotEvents = function () {
        var _ = this;
        _.options.dots === !0 && _.slideCount > _.options.slidesToShow && $("li", _.$dots).on("click.slick", {
            message: "index"
        }, _.changeSlide), _.options.dots === !0 && _.options.pauseOnDotsHover === !0 && $("li", _.$dots).on("mouseenter.slick", $.proxy(_.interrupt, _, !0)).on("mouseleave.slick", $.proxy(_.interrupt, _, !1))
    }, Slick.prototype.initSlideEvents = function () {
        var _ = this;
        _.options.pauseOnHover && (_.$list.on("mouseenter.slick", $.proxy(_.interrupt, _, !0)), _.$list.on("mouseleave.slick", $.proxy(_.interrupt, _, !1)))
    }, Slick.prototype.initializeEvents = function () {
        var _ = this;
        _.initArrowEvents(), _.initDotEvents(), _.initSlideEvents(), _.$list.on("touchstart.slick mousedown.slick", {
            action: "start"
        }, _.swipeHandler), _.$list.on("touchmove.slick mousemove.slick", {
            action: "move"
        }, _.swipeHandler), _.$list.on("touchend.slick mouseup.slick", {
            action: "end"
        }, _.swipeHandler), _.$list.on("touchcancel.slick mouseleave.slick", {
            action: "end"
        }, _.swipeHandler), _.$list.on("click.slick", _.clickHandler), $(document).on(_.visibilityChange, $.proxy(_.visibility, _)), _.options.accessibility === !0 && _.$list.on("keydown.slick", _.keyHandler), _.options.focusOnSelect === !0 && $(_.$slideTrack).children().on("click.slick", _.selectHandler), $(window).on("orientationchange.slick.slick-" + _.instanceUid, $.proxy(_.orientationChange, _)), $(window).on("resize.slick.slick-" + _.instanceUid, $.proxy(_.resize, _)), $("[draggable!=true]", _.$slideTrack).on("dragstart", _.preventDefault), $(window).on("load.slick.slick-" + _.instanceUid, _.setPosition), $(document).on("ready.slick.slick-" + _.instanceUid, _.setPosition)
    }, Slick.prototype.initUI = function () {
        var _ = this;
        _.options.arrows === !0 && _.slideCount > _.options.slidesToShow && (_.$prevArrow.show(), _.$nextArrow.show()), _.options.dots === !0 && _.slideCount > _.options.slidesToShow && _.$dots.show()
    }, Slick.prototype.keyHandler = function (event) {
        var _ = this;
        event.target.tagName.match("TEXTAREA|INPUT|SELECT") || (37 === event.keyCode && _.options.accessibility === !0 ? _.changeSlide({
            data: {
                message: _.options.rtl === !0 ? "next" : "previous"
            }
        }) : 39 === event.keyCode && _.options.accessibility === !0 && _.changeSlide({
            data: {
                message: _.options.rtl === !0 ? "previous" : "next"
            }
        }))
    }, Slick.prototype.lazyLoad = function () {
        function loadImages(imagesScope) {
            $("img[data-lazy]", imagesScope).each(function () {
                var image = $(this),
                        imageSource = $(this).attr("data-lazy"),
                        imageToLoad = document.createElement("img");
                imageToLoad.onload = function () {
                    image.animate({
                        opacity: 0
                    }, 100, function () {
                        image.attr("src", imageSource).animate({
                            opacity: 1
                        }, 200, function () {
                            image.removeAttr("data-lazy").removeClass("slick-loading")
                        }), _.$slider.trigger("lazyLoaded", [_, image, imageSource])
                    })
                }, imageToLoad.onerror = function () {
                    image.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), _.$slider.trigger("lazyLoadError", [_, image, imageSource])
                }, imageToLoad.src = imageSource
            })
        }
        var loadRange, cloneRange, rangeStart, rangeEnd, _ = this;
        _.options.centerMode === !0 ? _.options.infinite === !0 ? (rangeStart = _.currentSlide + (_.options.slidesToShow / 2 + 1), rangeEnd = rangeStart + _.options.slidesToShow + 2) : (rangeStart = Math.max(0, _.currentSlide - (_.options.slidesToShow / 2 + 1)), rangeEnd = 2 + (_.options.slidesToShow / 2 + 1) + _.currentSlide) : (rangeStart = _.options.infinite ? _.options.slidesToShow + _.currentSlide : _.currentSlide, rangeEnd = Math.ceil(rangeStart + _.options.slidesToShow), _.options.fade === !0 && (rangeStart > 0 && rangeStart--, rangeEnd <= _.slideCount && rangeEnd++)), loadRange = _.$slider.find(".slick-slide").slice(rangeStart, rangeEnd), loadImages(loadRange), _.slideCount <= _.options.slidesToShow ? (cloneRange = _.$slider.find(".slick-slide"), loadImages(cloneRange)) : _.currentSlide >= _.slideCount - _.options.slidesToShow ? (cloneRange = _.$slider.find(".slick-cloned").slice(0, _.options.slidesToShow), loadImages(cloneRange)) : 0 === _.currentSlide && (cloneRange = _.$slider.find(".slick-cloned").slice(_.options.slidesToShow * -1), loadImages(cloneRange))
    }, Slick.prototype.loadSlider = function () {
        var _ = this;
        _.setPosition(), _.$slideTrack.css({
            opacity: 1
        }), _.$slider.removeClass("slick-loading"), _.initUI(), "progressive" === _.options.lazyLoad && _.progressiveLazyLoad()
    }, Slick.prototype.next = Slick.prototype.slickNext = function () {
        var _ = this;
        _.changeSlide({
            data: {
                message: "next"
            }
        })
    }, Slick.prototype.orientationChange = function () {
        var _ = this;
        _.checkResponsive(), _.setPosition()
    }, Slick.prototype.pause = Slick.prototype.slickPause = function () {
        var _ = this;
        _.autoPlayClear(), _.paused = !0
    }, Slick.prototype.play = Slick.prototype.slickPlay = function () {
        var _ = this;
        _.autoPlay(), _.options.autoplay = !0, _.paused = !1, _.focussed = !1, _.interrupted = !1
    }, Slick.prototype.postSlide = function (index) {
        var _ = this;
        _.unslicked || (_.$slider.trigger("afterChange", [_, index]), _.animating = !1, _.setPosition(), _.swipeLeft = null, _.options.autoplay && _.autoPlay(), _.options.accessibility === !0 && _.initADA())
    }, Slick.prototype.prev = Slick.prototype.slickPrev = function () {
        var _ = this;
        _.changeSlide({
            data: {
                message: "previous"
            }
        })
    }, Slick.prototype.preventDefault = function (event) {
        event.preventDefault()
    }, Slick.prototype.progressiveLazyLoad = function (tryCount) {
        tryCount = tryCount || 1;
        var image, imageSource, imageToLoad, _ = this,
                $imgsToLoad = $("img[data-lazy]", _.$slider);
        $imgsToLoad.length ? (image = $imgsToLoad.first(), imageSource = image.attr("data-lazy"), imageToLoad = document.createElement("img"), imageToLoad.onload = function () {
            image.attr("src", imageSource).removeAttr("data-lazy").removeClass("slick-loading"), _.options.adaptiveHeight === !0 && _.setPosition(), _.$slider.trigger("lazyLoaded", [_, image, imageSource]), _.progressiveLazyLoad()
        }, imageToLoad.onerror = function () {
            tryCount < 3 ? setTimeout(function () {
                _.progressiveLazyLoad(tryCount + 1)
            }, 500) : (image.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), _.$slider.trigger("lazyLoadError", [_, image, imageSource]), _.progressiveLazyLoad())
        }, imageToLoad.src = imageSource) : _.$slider.trigger("allImagesLoaded", [_])
    }, Slick.prototype.refresh = function (initializing) {
        var currentSlide, lastVisibleIndex, _ = this;
        lastVisibleIndex = _.slideCount - _.options.slidesToShow, !_.options.infinite && _.currentSlide > lastVisibleIndex && (_.currentSlide = lastVisibleIndex), _.slideCount <= _.options.slidesToShow && (_.currentSlide = 0), currentSlide = _.currentSlide, _.destroy(!0), $.extend(_, _.initials, {
            currentSlide: currentSlide
        }), _.init(), initializing || _.changeSlide({
            data: {
                message: "index",
                index: currentSlide
            }
        }, !1)
    }, Slick.prototype.registerBreakpoints = function () {
        var breakpoint, currentBreakpoint, l, _ = this,
                responsiveSettings = _.options.responsive || null;
        if ("array" === $.type(responsiveSettings) && responsiveSettings.length) {
            _.respondTo = _.options.respondTo || "window";
            for (breakpoint in responsiveSettings)
                if (l = _.breakpoints.length - 1, currentBreakpoint = responsiveSettings[breakpoint].breakpoint, responsiveSettings.hasOwnProperty(breakpoint)) {
                    for (; l >= 0; )
                        _.breakpoints[l] && _.breakpoints[l] === currentBreakpoint && _.breakpoints.splice(l, 1), l--;
                    _.breakpoints.push(currentBreakpoint), _.breakpointSettings[currentBreakpoint] = responsiveSettings[breakpoint].settings
                }
            _.breakpoints.sort(function (a, b) {
                return _.options.mobileFirst ? a - b : b - a
            })
        }
    }, Slick.prototype.reinit = function () {
        var _ = this;
        _.$slides = _.$slideTrack.children(_.options.slide).addClass("slick-slide"), _.slideCount = _.$slides.length, _.currentSlide >= _.slideCount && 0 !== _.currentSlide && (_.currentSlide = _.currentSlide - _.options.slidesToScroll), _.slideCount <= _.options.slidesToShow && (_.currentSlide = 0), _.registerBreakpoints(), _.setProps(), _.setupInfinite(), _.buildArrows(), _.updateArrows(), _.initArrowEvents(), _.buildDots(), _.updateDots(), _.initDotEvents(), _.cleanUpSlideEvents(), _.initSlideEvents(), _.checkResponsive(!1, !0), _.options.focusOnSelect === !0 && $(_.$slideTrack).children().on("click.slick", _.selectHandler), _.setSlideClasses("number" == typeof _.currentSlide ? _.currentSlide : 0), _.setPosition(), _.focusHandler(), _.paused = !_.options.autoplay, _.autoPlay(), _.$slider.trigger("reInit", [_])
    }, Slick.prototype.resize = function () {
        var _ = this;
        $(window).width() !== _.windowWidth && (clearTimeout(_.windowDelay), _.windowDelay = window.setTimeout(function () {
            _.windowWidth = $(window).width(), _.checkResponsive(), _.unslicked || _.setPosition()
        }, 50))
    }, Slick.prototype.removeSlide = Slick.prototype.slickRemove = function (index, removeBefore, removeAll) {
        var _ = this;
        return "boolean" == typeof index ? (removeBefore = index, index = removeBefore === !0 ? 0 : _.slideCount - 1) : index = removeBefore === !0 ? --index : index, !(_.slideCount < 1 || index < 0 || index > _.slideCount - 1) && (_.unload(), removeAll === !0 ? _.$slideTrack.children().remove() : _.$slideTrack.children(this.options.slide).eq(index).remove(), _.$slides = _.$slideTrack.children(this.options.slide), _.$slideTrack.children(this.options.slide).detach(), _.$slideTrack.append(_.$slides), _.$slidesCache = _.$slides, void _.reinit())
    }, Slick.prototype.setCSS = function (position) {
        var x, y, _ = this,
                positionProps = {};
        _.options.rtl === !0 && (position = -position), x = "left" == _.positionProp ? Math.ceil(position) + "px" : "0px", y = "top" == _.positionProp ? Math.ceil(position) + "px" : "0px", positionProps[_.positionProp] = position, _.transformsEnabled === !1 ? _.$slideTrack.css(positionProps) : (positionProps = {}, _.cssTransitions === !1 ? (positionProps[_.animType] = "translate(" + x + ", " + y + ")", _.$slideTrack.css(positionProps)) : (positionProps[_.animType] = "translate3d(" + x + ", " + y + ", 0px)", _.$slideTrack.css(positionProps)))
    }, Slick.prototype.setDimensions = function () {
        var _ = this;
        _.options.vertical === !1 ? _.options.centerMode === !0 && _.$list.css({
            padding: "0px " + _.options.centerPadding
        }) : (_.$list.height(_.$slides.first().outerHeight(!0) * _.options.slidesToShow), _.options.centerMode === !0 && _.$list.css({
            padding: _.options.centerPadding + " 0px"
        })), _.listWidth = _.$list.width(), _.listHeight = _.$list.height(), _.options.vertical === !1 && _.options.variableWidth === !1 ? (_.slideWidth = Math.ceil(_.listWidth / _.options.slidesToShow), _.$slideTrack.width(Math.ceil(_.slideWidth * _.$slideTrack.children(".slick-slide").length))) : _.options.variableWidth === !0 ? _.$slideTrack.width(5e3 * _.slideCount) : (_.slideWidth = Math.ceil(_.listWidth), _.$slideTrack.height(Math.ceil(_.$slides.first().outerHeight(!0) * _.$slideTrack.children(".slick-slide").length)));
        var offset = _.$slides.first().outerWidth(!0) - _.$slides.first().width();
        _.options.variableWidth === !1 && _.$slideTrack.children(".slick-slide").width(_.slideWidth - offset)
    }, Slick.prototype.setFade = function () {
        var targetLeft, _ = this;
        _.$slides.each(function (index, element) {
            targetLeft = _.slideWidth * index * -1, _.options.rtl === !0 ? $(element).css({
                position: "relative",
                right: targetLeft,
                top: 0,
                zIndex: _.options.zIndex - 2,
                opacity: 0
            }) : $(element).css({
                position: "relative",
                left: targetLeft,
                top: 0,
                zIndex: _.options.zIndex - 2,
                opacity: 0
            })
        }), _.$slides.eq(_.currentSlide).css({
            zIndex: _.options.zIndex - 1,
            opacity: 1
        })
    }, Slick.prototype.setHeight = function () {
        var _ = this;
        if (1 === _.options.slidesToShow && _.options.adaptiveHeight === !0 && _.options.vertical === !1) {
            var targetHeight = _.$slides.eq(_.currentSlide).outerHeight(!0);
            _.$list.css("height", targetHeight)
        }
    }, Slick.prototype.setOption = Slick.prototype.slickSetOption = function () {
        var l, item, option, value, type, _ = this,
                refresh = !1;
        if ("object" === $.type(arguments[0]) ? (option = arguments[0], refresh = arguments[1], type = "multiple") : "string" === $.type(arguments[0]) && (option = arguments[0], value = arguments[1], refresh = arguments[2], "responsive" === arguments[0] && "array" === $.type(arguments[1]) ? type = "responsive" : "undefined" != typeof arguments[1] && (type = "single")), "single" === type)
            _.options[option] = value;
        else if ("multiple" === type)
            $.each(option, function (opt, val) {
                _.options[opt] = val
            });
        else if ("responsive" === type)
            for (item in value)
                if ("array" !== $.type(_.options.responsive))
                    _.options.responsive = [value[item]];
                else {
                    for (l = _.options.responsive.length - 1; l >= 0; )
                        _.options.responsive[l].breakpoint === value[item].breakpoint && _.options.responsive.splice(l, 1), l--;
                    _.options.responsive.push(value[item])
                }
        refresh && (_.unload(), _.reinit())
    }, Slick.prototype.setPosition = function () {
        var _ = this;
        _.setDimensions(), _.setHeight(), _.options.fade === !1 ? _.setCSS(_.getLeft(_.currentSlide)) : _.setFade(), _.$slider.trigger("setPosition", [_])
    }, Slick.prototype.setProps = function () {
        var _ = this,
                bodyStyle = document.body.style;
        _.positionProp = _.options.vertical === !0 ? "top" : "left", "top" === _.positionProp ? _.$slider.addClass("slick-vertical") : _.$slider.removeClass("slick-vertical"), void 0 === bodyStyle.WebkitTransition && void 0 === bodyStyle.MozTransition && void 0 === bodyStyle.msTransition || _.options.useCSS === !0 && (_.cssTransitions = !0), _.options.fade && ("number" == typeof _.options.zIndex ? _.options.zIndex < 3 && (_.options.zIndex = 3) : _.options.zIndex = _.defaults.zIndex), void 0 !== bodyStyle.OTransform && (_.animType = "OTransform", _.transformType = "-o-transform", _.transitionType = "OTransition", void 0 === bodyStyle.perspectiveProperty && void 0 === bodyStyle.webkitPerspective && (_.animType = !1)), void 0 !== bodyStyle.MozTransform && (_.animType = "MozTransform", _.transformType = "-moz-transform", _.transitionType = "MozTransition", void 0 === bodyStyle.perspectiveProperty && void 0 === bodyStyle.MozPerspective && (_.animType = !1)), void 0 !== bodyStyle.webkitTransform && (_.animType = "webkitTransform", _.transformType = "-webkit-transform", _.transitionType = "webkitTransition", void 0 === bodyStyle.perspectiveProperty && void 0 === bodyStyle.webkitPerspective && (_.animType = !1)), void 0 !== bodyStyle.msTransform && (_.animType = "msTransform", _.transformType = "-ms-transform", _.transitionType = "msTransition", void 0 === bodyStyle.msTransform && (_.animType = !1)), void 0 !== bodyStyle.transform && _.animType !== !1 && (_.animType = "transform", _.transformType = "transform", _.transitionType = "transition"), _.transformsEnabled = _.options.useTransform && null !== _.animType && _.animType !== !1
    }, Slick.prototype.setSlideClasses = function (index) {
        var centerOffset, allSlides, indexOffset, remainder, _ = this;
        allSlides = _.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden", "true"), _.$slides.eq(index).addClass("slick-current"), _.options.centerMode === !0 ? (centerOffset = Math.floor(_.options.slidesToShow / 2), _.options.infinite === !0 && (index >= centerOffset && index <= _.slideCount - 1 - centerOffset ? _.$slides.slice(index - centerOffset, index + centerOffset + 1).addClass("slick-active").attr("aria-hidden", "false") : (indexOffset = _.options.slidesToShow + index, allSlides.slice(indexOffset - centerOffset + 1, indexOffset + centerOffset + 2).addClass("slick-active").attr("aria-hidden", "false")), 0 === index ? allSlides.eq(allSlides.length - 1 - _.options.slidesToShow).addClass("slick-center") : index === _.slideCount - 1 && allSlides.eq(_.options.slidesToShow).addClass("slick-center")), _.$slides.eq(index).addClass("slick-center")) : index >= 0 && index <= _.slideCount - _.options.slidesToShow ? _.$slides.slice(index, index + _.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false") : allSlides.length <= _.options.slidesToShow ? allSlides.addClass("slick-active").attr("aria-hidden", "false") : (remainder = _.slideCount % _.options.slidesToShow, indexOffset = _.options.infinite === !0 ? _.options.slidesToShow + index : index, _.options.slidesToShow == _.options.slidesToScroll && _.slideCount - index < _.options.slidesToShow ? allSlides.slice(indexOffset - (_.options.slidesToShow - remainder), indexOffset + remainder).addClass("slick-active").attr("aria-hidden", "false") : allSlides.slice(indexOffset, indexOffset + _.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false")), "ondemand" === _.options.lazyLoad && _.lazyLoad()
    }, Slick.prototype.setupInfinite = function () {
        var i, slideIndex, infiniteCount, _ = this;
        if (_.options.fade === !0 && (_.options.centerMode = !1), _.options.infinite === !0 && _.options.fade === !1 && (slideIndex = null, _.slideCount > _.options.slidesToShow)) {
            for (infiniteCount = _.options.centerMode === !0 ? _.options.slidesToShow + 1 : _.options.slidesToShow, i = _.slideCount; i > _.slideCount - infiniteCount; i -= 1)
                slideIndex = i - 1, $(_.$slides[slideIndex]).clone(!0).attr("id", "").attr("data-slick-index", slideIndex - _.slideCount).prependTo(_.$slideTrack).addClass("slick-cloned");
            for (i = 0; i < infiniteCount; i += 1)
                slideIndex = i, $(_.$slides[slideIndex]).clone(!0).attr("id", "").attr("data-slick-index", slideIndex + _.slideCount).appendTo(_.$slideTrack).addClass("slick-cloned");
            _.$slideTrack.find(".slick-cloned").find("[id]").each(function () {
                $(this).attr("id", "")
            })
        }
    }, Slick.prototype.interrupt = function (toggle) {
        var _ = this;
        toggle || _.autoPlay(), _.interrupted = toggle
    }, Slick.prototype.selectHandler = function (event) {
        var _ = this,
                targetElement = $(event.target).is(".slick-slide") ? $(event.target) : $(event.target).parents(".slick-slide"),
                index = parseInt(targetElement.attr("data-slick-index"));
        return index || (index = 0), _.slideCount <= _.options.slidesToShow ? (_.setSlideClasses(index), void _.asNavFor(index)) : void _.slideHandler(index)
    }, Slick.prototype.slideHandler = function (index, sync, dontAnimate) {
        var targetSlide, animSlide, oldSlide, slideLeft, navTarget, targetLeft = null,
                _ = this;
        if (sync = sync || !1, (_.animating !== !0 || _.options.waitForAnimate !== !0) && !(_.options.fade === !0 && _.currentSlide === index || _.slideCount <= _.options.slidesToShow))
            return sync === !1 && _.asNavFor(index), targetSlide = index, targetLeft = _.getLeft(targetSlide), slideLeft = _.getLeft(_.currentSlide), _.currentLeft = null === _.swipeLeft ? slideLeft : _.swipeLeft, _.options.infinite === !1 && _.options.centerMode === !1 && (index < 0 || index > _.getDotCount() * _.options.slidesToScroll) ? void(_.options.fade === !1 && (targetSlide = _.currentSlide, dontAnimate !== !0 ? _.animateSlide(slideLeft, function () {
                _.postSlide(targetSlide)
            }) : _.postSlide(targetSlide))) : _.options.infinite === !1 && _.options.centerMode === !0 && (index < 0 || index > _.slideCount - _.options.slidesToScroll) ? void(_.options.fade === !1 && (targetSlide = _.currentSlide, dontAnimate !== !0 ? _.animateSlide(slideLeft, function () {
                _.postSlide(targetSlide)
            }) : _.postSlide(targetSlide))) : (_.options.autoplay && clearInterval(_.autoPlayTimer), animSlide = targetSlide < 0 ? _.slideCount % _.options.slidesToScroll !== 0 ? _.slideCount - _.slideCount % _.options.slidesToScroll : _.slideCount + targetSlide : targetSlide >= _.slideCount ? _.slideCount % _.options.slidesToScroll !== 0 ? 0 : targetSlide - _.slideCount : targetSlide, _.animating = !0, _.$slider.trigger("beforeChange", [_, _.currentSlide, animSlide]), oldSlide = _.currentSlide, _.currentSlide = animSlide, _.setSlideClasses(_.currentSlide), _.options.asNavFor && (navTarget = _.getNavTarget(), navTarget = navTarget.slick("getSlick"), navTarget.slideCount <= navTarget.options.slidesToShow && navTarget.setSlideClasses(_.currentSlide)), _.updateDots(), _.updateArrows(), _.options.fade === !0 ? (dontAnimate !== !0 ? (_.fadeSlideOut(oldSlide), _.fadeSlide(animSlide, function () {
                _.postSlide(animSlide)
            })) : _.postSlide(animSlide), void _.animateHeight()) : void(dontAnimate !== !0 ? _.animateSlide(targetLeft, function () {
                _.postSlide(animSlide)
            }) : _.postSlide(animSlide)))
    }, Slick.prototype.startLoad = function () {
        var _ = this;
        _.options.arrows === !0 && _.slideCount > _.options.slidesToShow && (_.$prevArrow.hide(), _.$nextArrow.hide()), _.options.dots === !0 && _.slideCount > _.options.slidesToShow && _.$dots.hide(), _.$slider.addClass("slick-loading")
    }, Slick.prototype.swipeDirection = function () {
        var xDist, yDist, r, swipeAngle, _ = this;
        return xDist = _.touchObject.startX - _.touchObject.curX, yDist = _.touchObject.startY - _.touchObject.curY, r = Math.atan2(yDist, xDist), swipeAngle = Math.round(180 * r / Math.PI), swipeAngle < 0 && (swipeAngle = 360 - Math.abs(swipeAngle)), swipeAngle <= 45 && swipeAngle >= 0 ? _.options.rtl === !1 ? "left" : "right" : swipeAngle <= 360 && swipeAngle >= 315 ? _.options.rtl === !1 ? "left" : "right" : swipeAngle >= 135 && swipeAngle <= 225 ? _.options.rtl === !1 ? "right" : "left" : _.options.verticalSwiping === !0 ? swipeAngle >= 35 && swipeAngle <= 135 ? "down" : "up" : "vertical"
    }, Slick.prototype.swipeEnd = function (event) {
        var slideCount, direction, _ = this;
        if (_.dragging = !1, _.interrupted = !1, _.shouldClick = !(_.touchObject.swipeLength > 10), void 0 === _.touchObject.curX)
            return !1;
        if (_.touchObject.edgeHit === !0 && _.$slider.trigger("edge", [_, _.swipeDirection()]), _.touchObject.swipeLength >= _.touchObject.minSwipe) {
            switch (direction = _.swipeDirection()) {
                case "left":
                case "down":
                    slideCount = _.options.swipeToSlide ? _.checkNavigable(_.currentSlide + _.getSlideCount()) : _.currentSlide + _.getSlideCount(), _.currentDirection = 0;
                    break;
                case "right":
                case "up":
                    slideCount = _.options.swipeToSlide ? _.checkNavigable(_.currentSlide - _.getSlideCount()) : _.currentSlide - _.getSlideCount(), _.currentDirection = 1
            }
            "vertical" != direction && (_.slideHandler(slideCount), _.touchObject = {}, _.$slider.trigger("swipe", [_, direction]))
        } else
            _.touchObject.startX !== _.touchObject.curX && (_.slideHandler(_.currentSlide), _.touchObject = {})
    }, Slick.prototype.swipeHandler = function (event) {
        var _ = this;
        if (!(_.options.swipe === !1 || "ontouchend" in document && _.options.swipe === !1 || _.options.draggable === !1 && event.type.indexOf("mouse") !== -1))
            switch (_.touchObject.fingerCount = event.originalEvent && void 0 !== event.originalEvent.touches ? event.originalEvent.touches.length : 1, _.touchObject.minSwipe = _.listWidth / _.options.touchThreshold, _.options.verticalSwiping === !0 && (_.touchObject.minSwipe = _.listHeight / _.options.touchThreshold), event.data.action) {
                case "start":
                    _.swipeStart(event);
                    break;
                case "move":
                    _.swipeMove(event);
                    break;
                case "end":
                    _.swipeEnd(event)
            }
    }, Slick.prototype.swipeMove = function (event) {
        var curLeft, swipeDirection, swipeLength, positionOffset, touches, _ = this;
        return touches = void 0 !== event.originalEvent ? event.originalEvent.touches : null, !(!_.dragging || touches && 1 !== touches.length) && (curLeft = _.getLeft(_.currentSlide), _.touchObject.curX = void 0 !== touches ? touches[0].pageX : event.clientX, _.touchObject.curY = void 0 !== touches ? touches[0].pageY : event.clientY, _.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(_.touchObject.curX - _.touchObject.startX, 2))), _.options.verticalSwiping === !0 && (_.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(_.touchObject.curY - _.touchObject.startY, 2)))), swipeDirection = _.swipeDirection(), "vertical" !== swipeDirection ? (void 0 !== event.originalEvent && _.touchObject.swipeLength > 4 && event.preventDefault(), positionOffset = (_.options.rtl === !1 ? 1 : -1) * (_.touchObject.curX > _.touchObject.startX ? 1 : -1), _.options.verticalSwiping === !0 && (positionOffset = _.touchObject.curY > _.touchObject.startY ? 1 : -1), swipeLength = _.touchObject.swipeLength, _.touchObject.edgeHit = !1, _.options.infinite === !1 && (0 === _.currentSlide && "right" === swipeDirection || _.currentSlide >= _.getDotCount() && "left" === swipeDirection) && (swipeLength = _.touchObject.swipeLength * _.options.edgeFriction, _.touchObject.edgeHit = !0), _.options.vertical === !1 ? _.swipeLeft = curLeft + swipeLength * positionOffset : _.swipeLeft = curLeft + swipeLength * (_.$list.height() / _.listWidth) * positionOffset, _.options.verticalSwiping === !0 && (_.swipeLeft = curLeft + swipeLength * positionOffset), _.options.fade !== !0 && _.options.touchMove !== !1 && (_.animating === !0 ? (_.swipeLeft = null, !1) : void _.setCSS(_.swipeLeft))) : void 0)
    }, Slick.prototype.swipeStart = function (event) {
        var touches, _ = this;
        return _.interrupted = !0, 1 !== _.touchObject.fingerCount || _.slideCount <= _.options.slidesToShow ? (_.touchObject = {}, !1) : (void 0 !== event.originalEvent && void 0 !== event.originalEvent.touches && (touches = event.originalEvent.touches[0]), _.touchObject.startX = _.touchObject.curX = void 0 !== touches ? touches.pageX : event.clientX, _.touchObject.startY = _.touchObject.curY = void 0 !== touches ? touches.pageY : event.clientY, void(_.dragging = !0))
    }, Slick.prototype.unfilterSlides = Slick.prototype.slickUnfilter = function () {
        var _ = this;
        null !== _.$slidesCache && (_.unload(), _.$slideTrack.children(this.options.slide).detach(), _.$slidesCache.appendTo(_.$slideTrack), _.reinit())
    }, Slick.prototype.unload = function () {
        var _ = this;
        $(".slick-cloned", _.$slider).remove(), _.$dots && _.$dots.remove(), _.$prevArrow && _.htmlExpr.test(_.options.prevArrow) && _.$prevArrow.remove(), _.$nextArrow && _.htmlExpr.test(_.options.nextArrow) && _.$nextArrow.remove(), _.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden", "true").css("width", "")
    }, Slick.prototype.unslick = function (fromBreakpoint) {
        var _ = this;
        _.$slider.trigger("unslick", [_, fromBreakpoint]), _.destroy()
    }, Slick.prototype.updateArrows = function () {
        var centerOffset, _ = this;
        centerOffset = Math.floor(_.options.slidesToShow / 2), _.options.arrows === !0 && _.slideCount > _.options.slidesToShow && !_.options.infinite && (_.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), _.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), 0 === _.currentSlide ? (_.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true"), _.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : _.currentSlide >= _.slideCount - _.options.slidesToShow && _.options.centerMode === !1 ? (_.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), _.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : _.currentSlide >= _.slideCount - 1 && _.options.centerMode === !0 && (_.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), _.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")))
    }, Slick.prototype.updateDots = function () {
        var _ = this;
        null !== _.$dots && (_.$dots.find("li").removeClass("slick-active").attr("aria-hidden", "true"), _.$dots.find("li").eq(Math.floor(_.currentSlide / _.options.slidesToScroll)).addClass("slick-active").attr("aria-hidden", "false"))
    }, Slick.prototype.visibility = function () {
        var _ = this;
        _.options.autoplay && (document[_.hidden] ? _.interrupted = !0 : _.interrupted = !1)
    }, $.fn.slick = function () {
        var i, ret, _ = this,
                opt = arguments[0],
                args = Array.prototype.slice.call(arguments, 1),
                l = _.length;
        for (i = 0; i < l; i++)
            if ("object" == typeof opt || "undefined" == typeof opt ? _[i].slick = new Slick(_[i], opt) : ret = _[i].slick[opt].apply(_[i].slick, args), "undefined" != typeof ret)
                return ret;
        return _
    }
}),
        function ($) {
            $.fn.unveil = function (threshold, callback) {
                function unveil() {
                    var inview = images.filter(function () {
                        var $e = $(this);
                        if (!$e.is(":hidden")) {
                            var wt = $w.scrollTop(),
                                    wb = wt + $w.height(),
                                    et = $e.offset().top,
                                    eb = et + $e.height();
                            return eb >= wt - th && et <= wb + th
                        }
                    });
                    loaded = inview.trigger("unveil"), images = images.not(loaded)
                }
                var loaded, $w = $(window),
                        th = threshold || 0,
                        retina = window.devicePixelRatio > 1,
                        attrib = retina ? "data-src-retina" : "data-src",
                        images = this;
                return this.one("unveil", function () {
                    var source = this.getAttribute(attrib);
                    source = source || this.getAttribute("data-src"), source && (this.setAttribute("src", source), "function" == typeof callback && callback.call(this))
                }), $w.on("scroll.unveil resize.unveil lookup.unveil", unveil), unveil(), this
            }
        }(window.jQuery || window.Zepto), $.fn.modal.Constructor.prototype.enforceFocus = function () {};
var domUpdateTriggers = [],
        initialDomUpdate = !1;
$.onDomUpdate = function (controller) {
    if (domUpdateTriggers.push(controller), initialDomUpdate) {
        var root = $("body");
        controller.bind(root)(root)
    }
}, $.domUpdated = function (root) {
    $.each(domUpdateTriggers, function (idx, el) {
        el.bind(root)($(root))
    }), initialDomUpdate = !0
}, $.onDomUpdate(function (root) {
    function onRadioChange(_t, _els, _others) {
        _others && _els.not(_t).each(function () {
            onRadioChange($(this), _els, !1)
        }), _t.closest('[data-checker-parent="true"]').attr("data-checked", _t.prop("checked"))
    }
    var sendGA = function () {
        var el = $(this),
                cat = el.data("ga-category");
        cat || (cat = "Ссылка"), ga("send", "event", cat, el.data("ga-type"), el.data("ga-event"), el.data("ga-content"))
    };
    root.find("form[data-ga-type]").on("ajax-success", sendGA), root.find(":not(form)[data-ga-type]").click(sendGA), root.find("input[data-content=intl-phone]").length > 0 && (jQuery.loadSomeShit = function (url, options) {
        return jQuery.ajax($.extend(options || {}, {
            dataType: "script",
            url: url
        }))
    }, $.loadSomeShit("/s/js/common/intlTelInput/intlTelInput.js").done(function (script, textStatus) {
        root.find("input[data-content=intl-phone]").each(function () {
            var el = $(this),
                    name = el.attr("name");
            el.attr("name", "");
            var hidden = $("<input type=hidden>").attr("name", name).val(el.val().replace(/[^0-9]+/g, "")).insertAfter(el);
            "" != el.val() && "+" != el.val()[0] && el.val("+" + el.val()), el.intlTelInput({
                utilsScript: "/s/js/common/intlTelInput/utils.js",
                initialCountry: "ru",
                nationalMode: !1,
                preferredCountries: ["ru"],
                formatOnDisplay: !1,
                onlyCountries: ["aaa", "ru", "ua", "by", "md", "am", "lv", "lt", "ee", "ge", "kz", "kg", "tj", "uz", "tm", "az"],
                separateDialCode: !0,
                customPlaceholder: function (selectedCountryPlaceholder, selectedCountryData) {
                    return "ru" == selectedCountryData.iso2 ? "(___) ___-__-__" : selectedCountryPlaceholder
                }
            }), el.mask("(000) 000-00-00", {
                clearIfNotMatch: !1
            }), el.attr("placeholder", "(___) ___-__-__"), el.on("countrychange", function (e, countryData) {
                "ru" == countryData.iso2 ? (el.mask("(000) 000-00-00", {
                    clearIfNotMatch: !1
                }), el.attr("placeholder", "(___) ___-__-__")) : (el.unmask(), el.removeAttr("placeholder"))
            }), el.on("countrychange change keyup keypress", function () {
                var phone = el.intlTelInput("getSelectedCountryData").dialCode + el.val();
                hidden.val(phone.replace(/[^0-9]+/g, ""))
            })
        })
    })), root.find("input[data-content=phone]").mask("+7 (000) 000-00-00", {
        clearIfNotMatch: !0
    }), root.find("input[data-content=phone]").attr("placeholder", "+7 (___) ___-__-__"), $.fn.unveil && root.find("img.lazyload").unveil(), root.find('[data-toggle="tooltip"]').tooltip({
        placement: function () {
            var set = $(this).data("placement"),
                    placement = "auto " + (set ? set : "");
            return placement
        },
        container: "body"
    }), root.find(".selectpicker").selectpicker({
        style: "form--select"
    });
    var loadingModal = !1;
    root.find("[data-ajax-modal]").on("click", function (e) {
        if (e.preventDefault(), !loadingModal) {
            loadingModal = !0;
            var btn = $(this);
            btn.prop("disabled", !0), btn.addClass("disabled"), $.get($(this).data("ajax-modal"), function (result) {
                var m = $(result).appendTo($("body"));
                $.domUpdated(m), m.on("hidden.bs.modal", function () {
                    m.remove()
                }), m.modal("show"), loadingModal = !1, btn.prop("disabled", !1), btn.removeClass("disabled")
            })
        }
    }), root.find(".modal.iframe").on("show.bs.modal", function (event) {
        var _m = $(this),
                _b = $(event.relatedTarget);
        _m.find(".modal--title").html(_b.data("title")), _m.find(".modal-body iframe").attr("src", _b.data("href"))
    }), root.find('[data-scroll="custom"]').scrollbar(), $.fn.formValidation && (FormValidation.Validator.requiredWhen = {
        html5Attributes: {
            message: "message",
            field: "field"
        },
        init: function (validator, $field, options, validatorName) {
            var compareWith = validator.getFieldElements(options.field);
            validator.onLiveChange(compareWith, "live2_" + validatorName, function () {
                var status = validator.getStatus($field, validatorName);
                status !== validator.STATUS_NOT_VALIDATED && validator.revalidateField($field)
            })
        },
        destroy: function (validator, $field, options, validatorName) {
            var compareWith = validator.getFieldElements(options.field);
            validator.offLiveChange(compareWith, "live2_" + validatorName)
        },
        validate: function (validator, $field, options, validatorName) {
            var value = validator.getFieldValue($field, validatorName),
                    compareWith = validator.getFieldElements(options.field);
            if (null === compareWith || 0 === compareWith.length)
                return !0;
            var compareValue = validator.getFieldValue(compareWith, validatorName);
            return compareValue.length > 0 && value.length > 0 ? (validator.updateStatus(compareWith, validator.STATUS_VALID, validatorName), !0) : 0 == compareValue.length
        }
    }, FormValidation.Validator.blank = {
        validate: function (validator, $field, options, validatorName) {
            return !0
        }
    }, root.find("form").formValidation({
        framework: "bootstrap",
        excluded: ":disabled, input:not(:checkbox):not(:radio):hidden, textarea:hidden",
        icon: !1,
        locale: "ru_RU",
        verbose: !0,
        declarative: !0,
        live: "submitted",
        button: !1,
        row: {
            selector: "[class*=col], .form-group"
        }
    })), $(".container").innerWidth() > 760 && root.find("[data-stick]").each(function () {
        $(this).outerHeight() >= $(this).closest(".sticky-parent").outerHeight() || $(this).stick_in_parent({
            offset_top: 30,
            bottoming: !0,
            recalc_every: 10,
            parent: ".sticky-parent",
            spacer: ".aside--spacer"
        }).on("sticky_kit:bottom", function (e) {}).on("sticky_kit:unbottom", function (e) {
            $(this).parent().css("position", "relative")
        }).each(function () {
            var that = $(this);
            new ResizeSensor(that.parent()[0], function () {
                $("body").trigger("sticky_kit:recalc")
            })
        })
    });
    var scrollIgniter = root.find("[data-scroll-ignite]");
    if (scrollIgniter.length > 0) {
        var checkIgniter = function (that, evt) {
            scrollIgniter && scrollIgniter.visible() && (that && that.off(evt), $.ajax(scrollIgniter.data("scroll-ignite"), {
                success: function (data) {
                    var $data = $(data);
                    $data.insertAfter(scrollIgniter), scrollIgniter.remove(), scrollIgniter = null, $.domUpdated($data)
                }
            }))
        };
        $(window).scroll(function (evt) {
            var that = $(this);
            checkIgniter(that, evt)
        }), checkIgniter()
    }
    root.find("[data-select=region]").addClass("selectpicker").selectpicker({
        style: "form--select",
        noneResultsText: "Ничего не найдено",
        liveSearch: !0
    }).on("shown.bs.select", function (evt) {
        var input = $(this).parent().find(".bs-searchbox > input").attr("placeholder", "Введите первые буквы");
        setTimeout(function () {
            input.focus()
        }, 100)
    }), root.find('[data-toggle-parent="true"]').on("change", function () {
        onRadioChange($(this), $("[name=" + $(this).attr("name") + "]"), !0)
    }), root.find(".richtext table").each(function () {
        $(this).wrap('<div class="table-scrollBox"></div>')
    }), root.find('[data-toggle="tab"]').on("shown.bs.tab", function (e) {
        var _hash = $(e.target).attr("href");
        history.pushState ? history.pushState(null, null, _hash) : location.hash = _hash
    }), window.onhashchange = function () {
        $('[data-toggle="tab"][href="' + location.hash + '"]').tab("show")
    }, location.hash && $('[data-toggle="tab"][href="' + location.hash + '"]').tab("show"), root.find('[data-toggle="tab"]').on("shown.bs.tab", function (e) {
        var _checker = $(e.target).find(".checker");
        _checker.find("input").prop("checked", !0).trigger("change")
    }), root.find('input[type="checkbox"][data-antenna-price]').on("change", function () {
        $(this).attr("data-checkout-param", "antenna=" + ($(this).prop("checked") ? "1" : "0"))
    })
}), $(function () {
    $("body").on("keydown", function (evt) {
        evt.ctrlKey && !evt.altKey && 81 == evt.keyCode && showLoginDialog("login")
    }), $.domUpdated($("body"))
}), $.onDomUpdate(function ($root) {
    $root.find('[data-click="popover"]').popover({
        trigger: "focus",
        html: !0,
        container: "body",
        delay: {
            show: 0,
            hide: 500
        },
        placement: function (popover, node) {
            return $(node).data("placement") ? "auto " + $(node).data("placement") : "auto"
        },
        content: function () {
            return $("#" + $(this).data("popover-id")).clone(!0).show()
        }
    }).click(function (evt) {
        evt.preventDefault()
    }), $root.find('[data-hover="popover"]').each(function () {
        var customContainer = $(this);
        $(this).data("container") && (customContainer = $($(this).data("container"))), $(this).popover({
            trigger: "hover focus",
            html: !0,
            container: customContainer,
            delay: {
                show: 300,
                hide: 500
            },
            placement: function (popover, node) {
                return $(node).data("placement") ? "auto " + $(node).data("placement") : "auto"
            },
            content: function () {
                var box = $("#" + $(this).data("popover-id")).clone(!0).show();
                return $(window).trigger("star-month", 2), box.attr("id", ""), box.find(".star-slider").each(function () {
                    function updateLabel(value) {
                        _t.find(".star-slider--label").removeClass("active"), _t.find(".star-slider--label:nth-child(" + value + ")").addClass("active"), $(window).trigger("star-month", value)
                    }
                    var _t = $(this),
                            _i = _t.find(".star-slider--input");
                    _i.ionRangeSlider({
                        onChange: function (data) {
                            updateLabel(data.from)
                        }
                    }), _t.find(".star-slider--label").on({
                        click: function (e) {
                            e.preventDefault();
                            var _i_alt = _i.data("ionRangeSlider");
                            _i_alt.update({
                                from: $(this).index() + 1
                            }), updateLabel($(this).index() + 1)
                        }
                    })
                }), box
            }
        }).on("shown.bs.popover", function (e) {
            var _t = $(this);
            _t.find(".popover-box--close").click(function (e) {
                e.preventDefault(), _t.popover("hide")
            }), $('[data-hover="popover"], [data-click="popover"]').not(_t).popover("hide")
        })
    }), $root.find(".modal--call-l a").on("click", function (e) {
        e.preventDefault();
        var link = $(this),
                box = link.closest(".modal-form"),
                input = box.find('input[name="selected_time"]'),
                form = box.find(".modal--call-f");
        form.is(":visible") ? (input.val("false"), form.slideUp(300), link.removeClass("is-active")) : (input.val("true"), form.slideDown(300), link.addClass("is-active"))
    }), $root.find('[data-toggle="order"]').each(function () {
        var orderBtn = $(this);
        orderBtn.popover({
            trigger: "focus",
            html: !0,
            container: "body",
            delay: {
                show: 0,
                hide: 500
            },
            placement: function (popover, node) {
                return $(node).offset().top - $(window).scrollTop() < 185 ? "bottom" : "auto top"
            },
            content: function () {
                var popBox = $("#order-popover").clone(!0);
                if (orderBtn.closest("[data-checkout-block]").length > 0) {
                    var popLink = popBox.find("[data-checkout-link]"),
                            GETparams = "";
                    orderBtn.closest("[data-checkout-block]").find("[data-checkout-param]").each(function () {
                        GETparams += (0 == GETparams.length ? "?" : "&") + $(this).attr("data-checkout-param")
                    }), popLink.attr("href", popLink.attr("href") + GETparams)
                }
                return popBox.find("a").on("click", function () {
                    orderBtn.popover("hide")
                }), popBox.show()
            }
        }).click(function (evt) {
            evt.preventDefault()
        })
    }), $root.find(".modal").on("shown.bs.modal", function () {
        $(this).find('input[type="text"]').first().focus()
    })
}), $.onDomUpdate(function (root) {
    var showSuccess = function (title, message, primary, primaryText, secondary, secondaryText) {
        var $res = $('<div class="form-success"><div class="form-success--in"><a href="' + (primary ? primary : "") + '" class="form-success--close"><i class="form-success--close-icon"></i></a>' + ('<div class="form-success--title">' + (title ? title : "Запрос отправлен") + "</div>") + (message ? '<div class="form-success--text">' + message + "</div>" : "") + '<div class="form-success--btns">' + (primary ? '<a href="' + primary + '" class="btn ' + (secondary ? "btn-primary" : "btn-outline") + '">' + primaryText + "</a>" : "") + (secondary ? '<a href="' + secondary + '" class="btn btn-outline">' + secondaryText + "</a>" : "") + "</div></div></div>");
        $("body").append($res)
    },
            displayError = function (form, input, text) {
                var i = form.find("[name=" + input + "]:not(:hidden)");
                i.length > 0 ? form.data("formValidation").updateMessage(input, "blank", text).updateStatus(input, "INVALID", "blank") : form.find("[data-role=error]").html(text).closest(".row").removeClass("hidden")
            };
    root.find("form[data-submit=ajax] button").prop("disabled", !1), root.find("form[data-submit=ajax]").on("success.form.fv", function (e) {
        e.preventDefault();
        var $form = $(e.target),
                fv = $(e.target).data("formValidation");
        $form.find("button").prop("disabled", !0), $form.find("[type=submit]").each(function () {
            $(this).data("before", $(this).text()), $(this).css("width", $(this).outerWidth()), $(this).text("Обработка")
        });
        var restore = function () {
            $form.find("[type=submit]").each(function () {
                $(this).text($(this).data("before"))
            })
        };
        $.ajax({
            url: $form.attr("action"),
            type: "POST",
            data: $form.serialize(),
            dataType: "json",
            xhrFields: {
                withCredentials: !0
            },
            success: function (data) {
                if (data.dataLayer && "undefined" != typeof window.dataLayer)
                    if ("[object Array]" === Object.prototype.toString.call(data.dataLayer))
                        for (var idx = 0; idx < data.dataLayer.length; idx++)
                            dataLayer.push(data.dataLayer[idx]);
                    else
                        dataLayer.push(data.dataLayer);
                data.error ? (restore(), $form.find("button").prop("disabled", !1), data.error instanceof Array ? $.each(data.error, function () {
                    displayError($form, this.code, this.value)
                }) : displayError($form, data.error.code, data.error.value)) : data.load ? ($form.trigger("ajax-success"), $.ajax(data.load, {
                    success: function (data) {
                        var $data = $(data);
                        $data.insertAfter($form), $form.remove(), $.domUpdated($data)
                    }
                })) : data.submit ? ($form.trigger("ajax-success"), $form.attr("action", data.submit), fv.defaultSubmit()) : ($form.trigger("ajax-success"), data.event ? (data.restore && ($form.find("button").prop("disabled", !1), restore()), $form.trigger(data.event, data.data)) : data.refresh ? document.location.reload() : data.redirect ? "undefined" != typeof supersonic && "_blank" == data.target ? (supersonic.app.openURL(data.redirect), restore(), $form.find("button").prop("disabled", !1)) : document.location.href = data.redirect : showSuccess(data.title, data.message, data.primary ? data.primary.url : null, data.primary ? data.primary.value : null, data.secondary ? data.secondary.url : null, data.secondary ? data.secondary.value : null))
            },
            error: function (request, status, error) {
                restore(), $form.find("button").prop("disabled", !1), displayError($form, "system", "Произошла внутренняя ошибка. Пожалуйста, попробуйте позже.")
            }
        })
    }).on("success.form.fv focusin", function (evt) {
        if (!$(evt.target).is("button")) {
            var $form = $(this),
                    $error = $form.data("error");
            $error || ($error = $form.find("[data-role=error]"), $form.data("error", $error)), $error.closest(".row").addClass("hidden")
        }
    })
}), $.fn.disableButton = function () {
    var before = $(this).text();
    $(this).prop("disabled", !0), $(this).data("before", before)
}, $.fn.enableButton = function () {
    $(this).text();
    $(this).prop("disabled", !1)
}, $.onDomUpdate(function (root) {
    var _Am = $(".modal#Auth");
    window.showLoginDialog = function (slide, options) {
        _Am.modal(options), _Am.find(".auth-box--inner").removeClass("shown").hide(), _Am.find('.auth-box--inner[data-toggler="' + slide + '"]').addClass("shown"), setTimeout(function () {
            _Am.find('.auth-box--inner[data-toggler="' + slide + '"]').find("input").eq(0).focus()
        }, 500)
    }, root.find('[data-toggle="login"], [data-toggle="register"], [data-toggle="remind-password"]').on({
        click: function (e) {
            e.preventDefault(), showLoginDialog($(this).data("toggle"))
        }
    }), root.find('[data-toggle-in="login"], [data-toggle-in="register"], [data-toggle-in="remind-password"]').on({
        click: function (e) {
            e.preventDefault();
            var _t = $(this),
                    _prev = _Am.find(".auth-box--inner.shown"),
                    _next = _Am.find('.auth-box--inner[data-toggler="' + _t.data("toggle-in") + '"]');
            _prev.fadeOut(200, function () {
                _prev.removeClass("shown"), _next.fadeIn(200, function () {
                    _next.addClass("shown"), _next.find("input").first().focus()
                })
            })
        }
    });
    $(document).ready(function () {
        function showProfileXS(header) {
            header.find(".header--user-toggle").addClass("active"), header.find(".header--user-line .m-menu--list").slideDown(300)
        }

        function hideProfileXS(header) {
            header.find(".header--user-toggle").removeClass("active"), header.find(".header--user-line .m-menu--list").slideUp(300)
        }

        function showMenuXS(header) {
            header.find(".m-menu--mobile").addClass("active"), header.find(".header--nav-line .m-menu--list").slideDown(300)
        }

        function hideMenuXS(header) {
            header.find(".m-menu--mobile").removeClass("active"), header.find(".header--nav-line .m-menu--list").slideUp(300)
        }

        function showRegionList(header) {
            header.find(".header--top-line").addClass("region-active"), header.find(".header--region").addClass("active"), header.find(".region-list").slideDown(300, function () {
                $(this).find(".region-list--filter-input").focus()
            })
        }

        function hideRegionList(header) {
            header.find(".header--region").removeClass("active"), header.find(".region-list").slideUp(300, function () {
                header.find(".header--top-line").removeClass("region-active")
            })
        }

        function showServiceNavXS(header) {
            header.find(".service-nav--toggle").addClass("active"), header.find(".service-nav--xs-select").slideDown(300)
        }

        function hideServiceNavXS(header) {
            header.find(".service-nav--toggle").removeClass("active"), header.find(".service-nav--xs-select").slideUp(300)
        }

        function showSearch(header) {
            header.find(".header--nav-line").addClass("search-active"), header.find(".header--search-toggle").addClass("active"), header.find(".header--search-line").slideDown(300, function () {
                $(this).find(".header--search-line-input").focus()
            })
        }

        function hideSearch(header) {
            header.find(".header--search-toggle").removeClass("active"), header.find(".header--search-line").slideUp(300, function () {
                header.find(".header--nav-line").removeClass("search-active")
            })
        }
        $(document).one("mousemove", function () {
            var serviceMenuToggler = function () {
                $(this).data("click") || ($(this).toggleClass("hover"), $(this).find(".service-nav--submenu").fadeToggle(200))
            };
            $(".service-nav--item").hoverIntent({
                over: serviceMenuToggler,
                out: serviceMenuToggler,
                interval: 150,
                timeout: 300
            }), $(".service-nav--item").click(function () {
                $(this).data("click", !0), $(this).find(".service-nav--submenu").hide()
            }), $(".service-nav--drop").on("click", function (e) {
                e.preventDefault(), $(this).find(".service-nav--drop-menu").fadeToggle(200)
            });
            var menuHover = function (e) {
                e.preventDefault, $(window).width() > 767 && ($(this).closest(".header--nav-line").hasClass("search-active") || ($(this).find(".m-menu--item-icon").stop(!0, !1).fadeToggle(150), $(this).find(".m-menu--submenu").stop(!0, !1).fadeToggle(150)))
            };
            $(".m-menu--item").hoverIntent({
                timeout: 300,
                interval: 10,
                over: menuHover,
                out: menuHover
            })
        }), $(".header--phones.visible-sm").on("click", function (e) {
            e.preventDefault(), $(this).find(".header--phones-dropdown").fadeToggle(200)
        }), $(".header--calls.visible-sm").on("click", function (e) {
            e.preventDefault(), $(this).closest(".header").find(".header--calls-d").fadeToggle(200), $(this).closest(".header").find(".header--chats-d").fadeOut(200)
        }), $(".header--chats.visible-sm").on("click", function (e) {
            e.preventDefault(), $(this).closest(".header").find(".header--chats-d").fadeToggle(200), $(this).closest(".header").find(".header--calls-d").fadeOut(200)
        }), $(".header--user-toggle").on("click", function (e) {
            e.preventDefault(), $(this).hasClass("active") ? hideProfileXS($(this).closest(".header")) : (hideMenuXS($(this).closest(".header")), showProfileXS($(this).closest(".header")))
        }), $(".m-menu--mobile").on("click", function (e) {
            e.preventDefault(), $(this).hasClass("active") ? hideMenuXS($(this).closest(".header")) : (hideProfileXS($(this).closest(".header")), showMenuXS($(this).closest(".header")))
        }), $(".header--region").on("click", function (e) {
            e.preventDefault(), $(this).hasClass("active") ? hideRegionList($(this).closest(".header")) : (hideServiceNavXS($(this).closest(".header")), $(".xs-phones").slideUp(300), showRegionList($(this).closest(".header")))
        }), $(".header--showphones").on({
            click: function (e) {
                e.preventDefault(), hideRegionList($(this).closest(".header")), $(".xs-phones").slideToggle(300)
            }
        }), $(".service-nav--toggle").on("click", function (e) {
            e.preventDefault(), $(this).hasClass("active") ? hideServiceNavXS($(this).closest(".header")) : (hideRegionList($(this).closest(".header")), showServiceNavXS($(this).closest(".header")))
        }), $(".header--search-toggle").on("click", function (e) {
            e.preventDefault(), $(this).hasClass("active") ? hideSearch($(this).closest(".header")) : showSearch($(this).closest(".header"))
        }), $(document).on("click", function (e) {
            !$(".header--search-line").length || $(e.target).closest(".header--search-line").length || $(e.target).closest(".header--nav-line").length || $(".header").each(function () {
                hideSearch($(this))
            })
        }), $(document).keyup(function (e) {
            27 == e.keyCode && $(".header").each(function () {
                hideSearch($(this))
            })
        }), $("[data-clear]").click(function () {
            var el = $(this).attr("data-clear");
            $(el).val("").trigger("change")
        });
        var hideIfEmpty = $("[data-hide=if-no-regions]");
        $("#region-filter").on("change keyup", function () {
            var filter = this.value.toLowerCase();
            $(".region-list--item").each(function () {
                var region = $(this);
                "" == filter || 0 == region.text().toLowerCase().indexOf(filter) ? region.removeClass("hidden") : region.addClass("hidden")
            });
            var anyVisible = !1;
            hideIfEmpty.each(function () {
                var block = $(this);
                block.find(".region-list--item:not(.hidden)").length > 0 ? (block.removeClass("hidden"), anyVisible = !0) : block.addClass("hidden")
            }), $("#no-region-found")[anyVisible ? "addClass" : "removeClass"]("hidden")
        }), $("[data-region-id]").click(function (e) {
            e.preventDefault();
            var el = $(this),
                    region = el.attr("data-region-id"),
                    type = el.attr("data-region-type");
            Cookies && (Cookies.set("region-id", region, {
                expires: 600
            }), Cookies.set("region-type", type, {
                expires: 600
            }), document.location.reload())
        })
    }), $.onDomUpdate(function (root) {
        root.find(".sec-nav--item-l").on({
            click: function (e) {
                var _p = $(this).closest(".sec-nav--item");
                _p.hasClass("sub") && (e.preventDefault(), _p.find(".sec-nav--item-i").toggleClass("active"), _p.find(".sec-nav--sub").slideToggle(300))
            }
        }), root.find(".sec-nav--sm-head").on({
            click: function (e) {
                e.preventDefault();
                var _n = $(this).closest(".sec-nav");
                $(this).find(".sec-nav--sm-head-icon").toggleClass("active"), _n.find(".sec-nav--links").slideToggle(300)
            }
        })
    });
    var MapManager = function () {
        var map, allMap, ready = !1,
                loading = !1,
                events = {};
        $("<div></div>");
        this.init = function () {
            ready || loading || (loading = !0, $.getScript("https://api-maps.yandex.ru/2.1/?lang=ru_RU", function () {
                ymaps.ready(function () {
                    loading = !1, ready = !0, $(events).trigger("ready")
                })
            }))
        }, this.ready = function (callback) {
            this.init(), ready ? callback() : $(events).on("ready", callback)
        }, createPlacemark = function (block) {
            var geo = block.data("geo");
            if (!geo)
                return null;
            var coords = geo.split(","),
                    lat = coords[1],
                    lon = coords[0],
                    balloon = block.find("[data-content=balloon]"),
                    preset = block.data("preset");
            preset || (preset = "islands#darkGreenDotIcon");
            var placemark = new ymaps.Placemark([lat, lon], {
                balloonContentHeader: balloon.data("balloon-title"),
                balloonContent: balloon.html()
            }, {
                preset: preset,
                hideIconOnBalloonOpen: !1
            });
            return placemark
        }, this.placemark = function (parent) {
            map && (console.error("destroy map"), map.destroy()), parent.find(".loader").hide();
            var placemark = createPlacemark(parent);
            return placemark ? (map = new ymaps.Map(parent[0], {
                center: [0, 0],
                zoom: 13,
                controls: ["zoomControl"]
            }, {}), map.geoObjects.add(placemark), map.setCenter(placemark.geometry.getCoordinates()), void placemark.balloon.open()) : null
        }, this.placemarks = function (container, parents) {
            container.find(".loader").hide(), allMap ? allMap.geoObjects.removeAll() : allMap = new ymaps.Map(container[0], {
                center: [37, 55],
                zoom: 13,
                controls: ["zoomControl", "searchControl"]
            }, {});
            var cluster = new ymaps.Clusterer({
                preset: "islands#darkGreenClusterIcons",
                groupByCoordinates: !1,
                clusterDisableClickZoom: !1,
                clusterHideIconOnBalloonOpen: !1,
                geoObjectHideIconOnBalloonOpen: !1,
                zoomMargin: 50
            });
            parents.each(function () {
                placemark = createPlacemark($(this)), null != placemark && cluster.add(placemark)
            }), allMap.geoObjects.add(cluster);
            var zoom = function () {
                allMap.setBounds(cluster.getBounds(), {
                    checkZoomLevel: !0
                })
            };
            zoom(), allMap.events.add("sizechange", zoom)
        }
    },
            Maps = new MapManager,
            RegionSelector = function ($root) {
                var container = $root.find("[data-content]"),
                        region = $root.find("[data-select=region]").on("change", function () {
                    load($(this).val(), !1)
                }),
                        loadData = function () {
                            var url = $root.data("contacts-url");
                            $.ajax(url, {
                                data: {
                                    settlement: cities.val(),
                                    region: region.val()
                                },
                                success: function (data) {
                                    var $data = $(data);
                                    $data.find("[data-experiment]").length > 0 ? $(".region-map--tab").hide() : $(".region-map--tab").show(), container.empty(), $data.appendTo(container), $.domUpdated($data);
                                    var tab = $root.find("[data-tab-id].shown");
                                    if ("map" == tab.data("tab-id")) {
                                        var map = tab.find(".contacts--map-frame");
                                        Maps.ready(function () {
                                            Maps.placemarks(map, $data.find("[data-geo]"))
                                        })
                                    }
                                }
                            })
                        },
                        cities = $root.find("[data-select=city]").addClass("selectpicker").selectpicker({
                    style: "form--select",
                    liveSearch: !0,
                    noneSelectedText: "Выберите город",
                    noneResultsText: "Ничего не найдено"
                }).on("shown.bs.select", function (evt) {
                    $(this).selectpicker("refresh");
                    var input = $(this).parent().find(".bs-searchbox > input").attr("placeholder", "Введите первые буквы для поиска"),
                            block = input.parent(),
                            blockParent = block.parent();
                    block.detach().appendTo(blockParent), load(region.val(), !0)
                }).on("change", loadData),
                        loading = !1,
                        lastRegion = !1,
                        lastText = "",
                        load = function (region, keepSelected, search) {
                            var current = parseInt(cities.val());
                            lastRegion == region && lastText == search || (lastRegion = region, lastText = search ? search : "", loading = !0, cities.prop("disabled", !0), cities.selectpicker("refresh"), $.ajax("/ajax/city", {
                                type: "GET",
                                data: {
                                    region: region,
                                    search: search
                                },
                                success: function (data) {
                                    loading = !1, keepSelected ? cities.find("option:not(:selected)").remove() : cities.empty(), data.settlement && $.each(data.settlement, function (idx, el) {
                                        (keepSelected && el.id != current || !keepSelected) && $('<option value="' + el.id + '">' + el.name + "</option>").appendTo(cities)
                                    }), cities.find("option[value=" + current + "]").prop("selected", !0), cities.prop("disabled", !1), cities.selectpicker("refresh"), cities.trigger("change")
                                }
                            }))
                        };
                if (cities.length > 0) {
                    var input = cities.data("selectpicker").$searchbox;
                    input.off("input propertychange"), input.searchbox(function (search) {
                        load(region.val(), !1, search)
                    }), input.on("keyup", function (evt) {
                        13 == evt.keyCode && cities.selectpicker("toggle")
                    })
                } else
                    region.change(loadData);
                loadData()
            };
    $.onDomUpdate(function (root) {
        root.find(".contacts--address").on({
            click: function (e) {
                e.preventDefault();
                var _t = $(this),
                        _rM = _t.closest("[data-contacts-parent]"),
                        _c = _t.closest(".contacts"),
                        _cM = _c.find(".contacts--map");
                _rM.length > 0 ? (_rM.find(".contacts--map:visible").not(_cM).each(function () {
                    $(this).closest(".contacts").find(".contacts--address").removeClass("active"), $(this).slideUp(300, function () {
                        _c.offset().top - $(window).scrollTop() < 0 && $("body, html").animate({
                            scrollTop: _c.offset().top - 50
                        })
                    })
                }), _t.toggleClass("active"), _cM.slideToggle(300)) : (_t.toggleClass("active"), _cM.slideToggle(300));
                var map = _c.find(".contacts--map-frame");
                Maps.ready(function () {
                    Maps.placemark(map)
                })
            }
        }), root.find("[data-map-tab]").on({
            click: function (e) {
                e.preventDefault();
                var _id = $(this).data("map-tab");
                _p = $(this).closest("[data-contacts-parent]");
                var tab = _p.find('[data-tab-id="' + _id + '"]');
                if (_p.find("[data-map-tab].active").removeClass("active"), _p.find("[data-map-tab=" + _id + "]").addClass("active"), _p.find("[data-tab-id].shown").fadeOut(200, function () {
                    $(this).removeClass("shown"), tab.fadeIn(200, function () {
                        $(this).addClass("shown")
                    })
                }), "map" == _id) {
                    var map = tab.find(".contacts--map-frame");
                    Maps.ready(function () {
                        Maps.placemarks(map, _p.find("[data-geo]"))
                    })
                }
            }
        })
    }), $(function () {
        $("[data-content=region-map]").each(function () {
            new RegionSelector($(this))
        })
    }), $.onDomUpdate(function (root) {
        root.find("[data-favorite]").click(function (e) {
            e.preventDefault();
            var that = $(this);
            that.toggleClass("active"), $.ajax("/tv/ajax/favorite", {
                data: {
                    channel: that.data("favorite")
                },
                success: function (json) {
                    json.add ? that.addClass("active") : that.removeClass("active")
                }
            })
        }), setTimeout(function () {
            root.find("[data-progress]").each(function () {
                $(this).css("width", $(this).data("progress") + "%")
            })
        }, 100);
        var activeReviewPopover;
        root.find("[data-popover-remote]").hoverIntent({
            interval: 500,
            timeout: 0,
            sensitivity: 10,
            out: function () {
                var that = $(this);
                that.data("timer", setTimeout(function () {
                    that.popover("hide")
                }, 500))
            },
            over: function () {
                var that = $(this);
                return that.data("popover-init") ? void that.popover("show") : (that.data("popover-init", !0), void $.ajax(that.data("popover-remote"), {
                    dataType: "html",
                    success: function (data) {
                        var obj = $(data);
                        that.popover({
                            html: !0,
                            placement: "left auto",
                            container: "body",
                            viewport: {
                                selector: "body",
                                padding: 20
                            },
                            content: function () {
                                var data = obj.clone().hover(function () {
                                    clearInterval(that.data("timer"))
                                }, function () {
                                    that.data("timer", setTimeout(function () {
                                        that.popover("hide")
                                    }, 200))
                                }).show();
                                return $.domUpdated(data), data
                            }
                        }).on("shown.bs.popover", function (e) {
                            var that = $(this);
                            activeReviewPopover && activeReviewPopover[0] !== that[0] && activeReviewPopover.popover("hide"), activeReviewPopover = that
                        }).popover("show")
                    }
                }))
            }
        })
    });
    $.onDomUpdate(function ($root) {
        function showPackageChannels(package) {
            package.find(".package-item--show").removeClass("active"), package.find(".package-item--hide").addClass("active"), package.find(".package-item--channels").stop().slideDown(300)
        }

        function hidePackageChannels(package) {
            package.find(".package-item--channels").stop().slideUp(300, function () {
                package.find(".package-item--hide").removeClass("active"), package.find(".package-item--show").addClass("active")
            })
        }
        $root.find(".package-item--show").on({
            click: function (e) {
                e.preventDefault(), showPackageChannels($(this).closest(".package-item"))
            }
        }), $root.find(".package-item--hide").on({
            click: function (e) {
                e.preventDefault(), hidePackageChannels($(this).closest(".package-item"))
            }
        }), $root.find(".package-item--channels-hide").on({
            click: function (e) {
                e.preventDefault(), hidePackageChannels($(this).closest(".package-item"))
            }
        }), $root.find(".package-calc--toggler").on({
            click: function (e) {
                e.preventDefault(), $(this).closest(".package-calc").find(".package-calc--box").slideToggle(300), $(this).closest(".package-calc").find(".package-calc--toggler.down").toggleClass("active"), $(this).closest(".package-calc").find(".package-calc--toggler.up").toggleClass("active")
            }
        }), $root.find(document).keyup(function (e) {
            27 === e.which && $('[data-hover="popover"], [data-click="popover"]').popover("hide")
        })
    }), !function () {
        var remoteModal = null,
                remoteModalContent = null,
                remoteLoader = $('<div style="height: 40vh" class="loader"><div></div><div></div><div></div><div></div></div>');
        $.onDomUpdate(function ($root) {
            $root.find("[data-remote-modal]").click(function (evt) {
                evt.preventDefault();
                var url = $(this).data("remote-modal");
                remoteModal || (remoteModal = $('<div tabindex="-1" role="dialog" class="modal fade"><div role="document" class="modal-dialog pay-modal"><div class="modal-content pay-modal--in"></div></div></div>'), remoteModal.appendTo($("body")), remoteModalContent = remoteModal.find(".modal-content")), remoteModalContent.empty(), remoteModalContent.append(remoteLoader), remoteModal.is(":visible") || remoteModal.modal("show"), $.ajax(url, {
                    success: function (data) {
                        remoteModalContent.empty();
                        var $data = $(data);
                        remoteModalContent.empty().append($data), $.domUpdated($data)
                    }
                })
            })
        }), $.onDomUpdate(function (root) {
            var dialog = root.find(".js-upsale-package");
            if (dialog.length > 0) {
                var button = dialog.find(".js-upsale-next"),
                        multiplePacks = root.find(".js-upsale-multiple .package-item");
                multiplePacks.length > 0 && (multiplePacks.eq(0).find("input[type=radio]").prop("checked", !0), multiplePacks.find("input[type=radio]").change(function () {
                    var that = $(this);
                    that.prop("checked") && (button.text("Подключить пакет " + that.data("package-name")), button.data("remote-modal", "/upsale/package?code=" + that.data("toggle-package")))
                }))
            }
        }), $.onDomUpdate(function (root) {
            var dialog = root.find(".js-upsale-order");
            if (dialog.length > 0) {
                var radio = dialog.find("input[name=period]");
                radio.change(function () {
                    console.log(this.checked, this.value), dialog.find("[data-period]").addClass("hidden"), dialog.find("[data-period=" + this.value + "]").removeClass("hidden")
                })
            }
        })
    }(), $(function () {
        $(".wide-slider").each(function () {
            var root = $(this),
                    step = root.attr("data-slider-step");
            step || (step = 300), step = parseInt(step);
            var next = root.find("[data-toggle=right]"),
                    prev = root.find("[data-toggle=left]");
            root.find(".wide-slider--container").each(function () {
                $(this).on({
                    scroll: function () {
                        var elScrollLeft = ($(this), $(this).scrollLeft()),
                                elWidth = $(this).outerWidth(),
                                elScrollWidth = $(this)[0].scrollWidth;
                        0 == elScrollLeft ? prev.addClass("disabled") : prev.removeClass("disabled"), elScrollLeft + elWidth == elScrollWidth ? next.addClass("disabled") : next.removeClass("disabled")
                    }
                }), $(this).trigger("scroll"), $(this).show(), $(this).attr("data-x", 0), $(this).attr("data-w", this.scrollWidth), $(this).hasClass("toggle") && !$(this).hasClass("shown") && $(this).hide()
            }), next.on("click", function (e) {
                if (e.preventDefault(), !$(this).hasClass("disabled")) {
                    var _s = root.find(".wide-slider--container:visible");
                    if (_s.length > 0) {
                        var x = parseInt(_s.attr("data-x")),
                                w = parseInt(_s.attr("data-w")),
                                W = _s.width();
                        x += step, x + W >= w && (x = w - W), _s.stop().animate({
                            scrollLeft: x
                        }, 300), _s.attr("data-x", x)
                    }
                }
            }), prev.on("click", function (e) {
                if (e.preventDefault(), !$(this).hasClass("disabled")) {
                    var _s = root.find(".wide-slider--container:visible");
                    if (_s.length > 0) {
                        var x = parseInt(_s.attr("data-x"));
                        parseInt(_s.attr("data-w")), _s.width();
                        x -= step, x < 0 && (x = 0), _s.stop().animate({
                            scrollLeft: x
                        }, 300), _s.attr("data-x", x)
                    }
                }
            })
        }), $(".con-slider").each(function () {
            var root = $(this),
                    step = root.attr("data-slider-step");
            step || (step = 300), step = parseInt(step);
            var next = root.find("[data-toggle=right]"),
                    prev = root.find("[data-toggle=left]");
            root.find(".con-slider--container").each(function () {
                $(this).on({
                    scroll: function () {
                        var elScrollLeft = ($(this), $(this).scrollLeft()),
                                elWidth = $(this).outerWidth(),
                                elScrollWidth = $(this)[0].scrollWidth;
                        0 == elScrollLeft ? prev.addClass("disabled") : prev.removeClass("disabled"), elScrollLeft + elWidth == elScrollWidth ? next.addClass("disabled") : next.removeClass("disabled")
                    }
                }), $(this).trigger("scroll"), $(this).show(), $(this).attr("data-x", 0), $(this).attr("data-w", this.scrollWidth), $(this).hasClass("toggle") && !$(this).hasClass("shown") && $(this).hide()
            }), next.on("click", function (e) {
                if (e.preventDefault(), !$(this).hasClass("disabled")) {
                    var _s = root.find(".con-slider--container:visible");
                    if (_s.length > 0) {
                        var x = parseInt(_s.attr("data-x")),
                                w = parseInt(_s.attr("data-w")),
                                W = _s.width();
                        x += step, x + W >= w && (x = w - W), _s.stop().animate({
                            scrollLeft: x
                        }, 300), _s.attr("data-x", x)
                    }
                }
            }), prev.on("click", function (e) {
                if (e.preventDefault(), !$(this).hasClass("disabled")) {
                    var _s = root.find(".con-slider--container:visible");
                    if (_s.length > 0) {
                        var x = parseInt(_s.attr("data-x"));
                        parseInt(_s.attr("data-w")), _s.width();
                        x -= step, x < 0 && (x = 0), _s.stop().animate({
                            scrollLeft: x
                        }, 300), _s.attr("data-x", x)
                    }
                }
            })
        }), $('[data-ws-tabs="toggle"]').on({
            click: function (e) {
                e.preventDefault();
                var _id = $(this).data("tab-id");
                _p = $(this).closest(".wide-slider"), _p.find('[data-ws-tabs="toggle"].active').removeClass("active"), $(this).addClass("active"), _p.find('[data-ws-tabs="item"].shown').fadeOut(200, function () {
                    $(this).removeClass("shown"), _p.find('[data-ws-tabs="item"][data-tab-id="' + _id + '"]').fadeIn(200, function () {
                        $(this).addClass("shown")
                    }), $(window).trigger("lookup")
                })
            }
        }), $("[data-ride=slick]").slick({
            accessibility: !1,
            dots: !0,
            arrows: !1,
            fade: !0,
            autoplay: !0,
            autoplaySpeed: 5e3,
            speed: 500,
            slide: "[data-role=slide]",
            appendDots: "[data-role=slider-dots]"
        }), $(window).on("load resize", function () {
            $("[data-ride=slick] .slick-slide").css("height", "auto");
            var stHeight = $("[data-ride=slick] .slick-track").height();
            $("[data-ride=slick] .slick-slide").css("height", stHeight + "px")
        }), $(document).ready(function () {
            $(".main-banner").slick({
                autoplay: !0,
                autoplaySpeed: 5e3,
                fade: !0,
                prevArrow: '<span class="slick-arrow slick-prev"><i class="icon-left"></i></span>',
                nextArrow: '<span class="slick-arrow slick-next"><i class="icon-right"></i></span>'
            })
        });
    });
    var curpage = 1;
    var sliding = false;
    var click = true;
    var left = document.getElementById("left");
    var right = document.getElementById("right");
    var pagePrefix = "slide";
    var pageShift = 500;
    var transitionPrefix = "circle";
    var svg = true;
    function leftSlide() {
        if (click) {
            if (curpage == 1)
                curpage = 5;
            console.log("woek");
            sliding = true;
            curpage--;
            svg = true;
            click = false;
            for (k = 1; k <= 4; k++) {
                var a1 = document.getElementById(pagePrefix + k);
                a1.className += " tran";
            }
            setTimeout(() => {
                move();
            }, 200);
            setTimeout(() => {
                for (k = 1; k <= 4; k++) {
                    var a1 = document.getElementById(pagePrefix + k);
                    a1.classList.remove("tran");
                }
            }, 1400);
        }
    }

    function rightSlide() {
        if (click) {
            if (curpage == 4)
                curpage = 0;
            console.log("woek");
            sliding = true;
            curpage++;
            svg = false;
            click = false;
            for (k = 1; k <= 4; k++) {
                var a1 = document.getElementById(pagePrefix + k);
                a1.className += " tran";
            }
            setTimeout(() => {
                move();
            }, 200);
            setTimeout(() => {
                for (k = 1; k <= 4; k++) {
                    var a1 = document.getElementById(pagePrefix + k);
                    a1.classList.remove("tran");
                }
            }, 1400);
        }
    }

    function move() {
        if (sliding) {
            sliding = false;
            if (svg) {
                for (j = 1; j <= 9; j++) {
                    var c = document.getElementById(transitionPrefix + j);
                    c.classList.remove("steap");
                    c.setAttribute("class", transitionPrefix + j + " streak");
                    console.log("streak");
                }
            } else {
                for (j = 10; j <= 18; j++) {
                    var c = document.getElementById(transitionPrefix + j);
                    c.classList.remove("steap");
                    c.setAttribute("class", transitionPrefix + j + " streak");
                    console.log("streak");
                }
            }

// for(k=1;k<=4;k++){
//   var a1 = document.getElementById(pagePrefix + k);
//   a1.className += ' tran';
// }

            setTimeout(() => {
                for (i = 1; i <= 4; i++) {
                    if (i == curpage) {
                        var a = document.getElementById(pagePrefix + i);
                        a.className += " up1";
                    } else {
                        var b = document.getElementById(pagePrefix + i);
                        b.classList.remove("up1");
                    }
                }
                sliding = true;
            }, 600);
            setTimeout(() => {
                click = true;
            }, 1700);
            setTimeout(() => {
                if (svg) {
                    for (j = 1; j <= 9; j++) {
                        var c = document.getElementById(transitionPrefix + j);
                        c.classList.remove("streak");
                        c.setAttribute("class", transitionPrefix + j + " steap");
                    }
                } else {
                    for (j = 10; j <= 18; j++) {
                        var c = document.getElementById(transitionPrefix + j);
                        c.classList.remove("streak");
                        c.setAttribute("class", transitionPrefix + j + " steap");
                    }
                    sliding = true;
                }
            }, 850);
            setTimeout(() => {
                click = true;
            }, 1700);
        }
    }

    
    document.onkeydown = e => {
        if (e.keyCode == 37) {
            leftSlide();
        } else if (e.keyCode == 39) {
            rightSlide();
        }
    }
});