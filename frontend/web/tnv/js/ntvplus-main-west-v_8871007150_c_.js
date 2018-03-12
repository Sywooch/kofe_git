function setupCalculator() {
    var packageCounter = 0;
    addPackage = function(id, name, price, group, rights, type) {
        group || (group = id), this.groups[group] || (this.groups[group] = new Group(group, !1));
        var bitmask = 1 << packageCounter++,
            thisRights = bitmask;
        rights && (thisRights |= rights);
        var pack = this.packages[id] = new Package(bitmask, thisRights, name, id, this.groups[group], price);
        return type && (pack.type = type), this.packages[id]
    }.bind(this);
    var lite = addPackage("west_lite", "Лайт", 149, "base"),
        nobase = addPackage("nobase", "Без базового пакета", 0, "base"),
        econom = addPackage("econom", "Экономный", 25, "base"),
        base = addPackage("west_base", "Базовый Запад", 149, "base", lite.rights | econom.rights),
        allinclusive_small = addPackage("allinclusive_small", "Все включено 549", 549, "base"),
        allinclusive_big = addPackage("allinclusive_big", "Все включено 999", 999, "base"),
        start = addPackage("start", "Стартовый", 0),
        kino = addPackage("west_kino", "Кино", 99, "kino"),
        vipkino = addPackage("west_vipkino", "VIP-Кино", 279, "kino", kino.rights),
        nfootball = addPackage("west_nashfootball", "Наш Футбол", 219),
        football = addPackage("west_football", "Футбол", 399),
        supersport = addPackage("west_supersport", "Суперспорт", 399, "sport", nfootball.rights | football.rights),
        discovery = addPackage("west_discovery", "Познавательный", 149),
        children = addPackage("west_children", "Детский", 89),
        night = addPackage("west_night", "Ночной", 169),
        music = addPackage("west_music", "Музыкальный", 69),
        entertainment = addPackage("west_entertainment", "Развлекательный", 59),
        viasat = addPackage("west_viasat", "Viasat", 299),
        viasathd = addPackage("west_viasat_hd", "Viasat Premium HD", 399, "hdpack"),
        amedia = addPackage("west_amedia_hd", "Amedia Premium HD", 199),
        egoist = addPackage("west_egoist", "Эгоист", 150),
        smsinform = addPackage("smsinform", "СМС-Информ", 10, !1, "service"),
        hdplus = addPackage("west_hdplus", "HD-ПЛЮС", 850, "hdpack", !1),
        interactive = addPackage("interactive", "Интерактивное ТВ", 300, "interactive", !1, "service"),
        kinoplus = addPackage("west_kinoplus", "Кино Плюс", 279),
        nastroykino = addPackage("west_nastroykino", "Настрой Кино", 239),
        multiscreen_sport = addPackage("multiscreen_sport", "Мультискрин Спорт", 99, "msport", !1, "service"),
        multiscreen_kino = addPackage("multiscreen_kino", "Мультискрин Кино", 59, "mkino", !1, "service"),
        multiscreen_children = addPackage("multiscreen_children", "Мультискрин Детский", 59, "mchildren", !1, "service"),
        multiscreen_discovery = addPackage("multiscreen_discovery", "Мультискрин Дискавери", 59, "mdiscovery", !1, "service"),
        multiscreen_night = addPackage("multiscreen_night", "Ночной мультискрин", 59, "mnight", !1, "service"),
        onlinetv = addPackage("onlinetv", "Онлайн-ТВ", 199, "onlinetv", !1, "service");
    p = this.packages, p.multiscreen_sport.permanentDisable("Подключите пакет Суперспорт и смотрите выбранные спортивные каналы на сайте ntvplus.tv"), p.multiscreen_kino.permanentDisable("Подключите пакет Кино Плюс и смотрите кино-каналы на сайте ntvplus.tv"), p.multiscreen_children.permanentDisable("Подключите пакет Детский и смотрите детские каналы на сайте ntvplus.tv"), p.multiscreen_discovery.permanentDisable("Подключите пакет Познавательный и смотрите познавательные каналы на сайте ntvplus.tv"), p.multiscreen_night.permanentDisable("Подключите пакет Ночной и смотрите познавательные каналы на сайте ntvplus.tv"), interactive.permanentDisable("Интерактивное ТВ можно подключить только вместе с пакетом Базовый Запад"), hdplus.permanentDisable("Пакет HD-Плюс можно подключить только вместе с пакетом Базовый Запад"), p.west_supersport.addAllowed([p.multiscreen_sport]), p.west_kinoplus.addAllowed([p.multiscreen_kino]), p.west_vipkino.addAllowed([p.multiscreen_kino]), p.west_children.addAllowed([p.multiscreen_children]), p.west_discovery.addAllowed([p.multiscreen_discovery]), p.west_night.addAllowed([p.multiscreen_night]), this.packages.multiscreen_sport.channels = 0;
    var addPacks = [p.west_supersport, p.west_kino, p.west_vipkino, p.west_children, p.west_discovery, p.west_entertainment, p.west_music, p.west_night, p.west_viasat, p.west_viasat_hd, p.west_amedia_hd, p.west_egoist, p.west_football, smsinform, viasathd, kinoplus, nastroykino, nfootball];
    addPacks.forEach(function(p) {
        p.permanentDisable("Для подключения дополнительных пакетов нужно подключиться к основному пакету")
    }), hdplus.permanentDisable(), lite.addAllowed(addPacks), econom.addAllowed(addPacks), allinclusive_small.addAllowed([p.west_supersport, p.west_entertainment, p.west_music, p.west_night, p.west_viasat, p.west_viasat_hd, p.west_amedia_hd, p.west_egoist, p.west_football, smsinform, viasathd, nastroykino, nfootball, multiscreen_discovery, multiscreen_kino, multiscreen_children]), allinclusive_big.addAllowed([p.west_viasat, p.west_viasat_hd, p.west_amedia_hd, p.west_egoist, p.west_football, smsinform, viasathd, nastroykino, nfootball, multiscreen_discovery, multiscreen_kino, multiscreen_children, multiscreen_sport]);
    var baseAllowed = addPacks.slice(0);
    baseAllowed.push(hdplus), baseAllowed.push(interactive), base.addAllowed(baseAllowed), supersport.addRestricted([football, nfootball], 'Этот пакет входит в состав пакета "Суперспорт"'), vipkino.addRestricted([kinoplus, nastroykino], "Эти каналы входят в состав пакета VIP-Кино"), start.getChannels = function() {
        return lite.selected || base.selected ? 0 : this.channels
    }.bind(start);
    var calc = this;
    this.actions.push(new Action("viasat", {
        toggle: function(state) {
            viasat.setSelected(state), viasathd.setSelected(state)
        },
        isActive: function() {
            return viasat.selected && viasathd.selected
        },
        getDiscount: function() {
            return 199 - viasat.getDiscount() - viasathd.getDiscount()
        }
    }));
    var extended = new Action("extended", {
        toggle: function(state) {
            base.setSelected(!0), kinoplus.setSelected(state), supersport.setSelected(state), children.setSelected(state), night.setSelected(state), music.setSelected(state), discovery.setSelected(state), entertainment.setSelected(state), state || hdplus.setDisabled(!1, "")
        },
        isActive: function() {
            var active = base.selected && (vipkino.selected || kinoplus.selected) && supersport.selected && children.selected && night.selected && music.selected && discovery.selected && entertainment.selected;
            return active ? ($("[data-calculator-advance=6]").removeClass("hidden"), hdplus.setSelected(!1), hdplus.setDisabled(!0, "")) : ($("[data-calculator-advance=6]").addClass("hidden"), hdplus.setDisabled(!1, ""), 6 == calc.advance && (calc.advance = 1)), active
        },
        getDiscount: function() {
            var extPrice = base.getPrice() + kinoplus.getPrice() + supersport.getPrice() + children.getPrice() + night.getPrice() + music.getPrice() + discovery.getPrice() + entertainment.getPrice(),
                extDiscount = base.getDiscount() + kinoplus.getDiscount() + supersport.getDiscount() + children.getDiscount() + night.getDiscount() + music.getDiscount() + discovery.getDiscount() + entertainment.getDiscount();
            return 1 == calc.advance ? 313 - extDiscount + (calc.bonusActive ? 290 : 0) : 6 == calc.advance ? extPrice - extDiscount : 12 == calc.advance ? extPrice - extDiscount : void 0
        },
        bonusDiscount: function() {
            if (!calc.bonusActive) return 0;
            var extDiscount = kinoplus.bonusDiscount + supersport.bonusDiscount + children.bonusDiscount + night.bonusDiscount + music.bonusDiscount + discovery.bonusDiscount + entertainment.bonusDiscount;
            return 280 - extDiscount
        },
        getAdvancePayment: function() {
            return 6 == calc.advance ? 5694 : 12 == calc.advance ? 10188 : void 0
        },
        getAdvanceDiscount: function() {
            return 6 == calc.advance ? 2478 : 12 == calc.advance ? 6156 : void 0
        }
    });
    this.actions.push(extended);
    var all = new Action("all", {
        toggle: function(state) {
            base.setSelected(!0), vipkino.setSelected(state), supersport.setSelected(state), children.setSelected(state), night.setSelected(state), music.setSelected(state), discovery.setSelected(state), entertainment.setSelected(state), viasat.setSelected(state), viasathd.setSelected(state), amedia.setSelected(state), egoist.setSelected(state)
        },
        isActive: function() {
            return base.selected && vipkino.selected && supersport.selected && children.selected && night.selected && music.selected && discovery.selected && entertainment.selected && viasat.selected && viasathd.selected && amedia.selected && egoist.selected
        },
        getDiscount: function() {
            return 0
        }
    });
    this.actions.push(all);
    var baseyear = new Action("baseyear", {
        toggle: function(state) {
            base.setSelected(!0), calc.setAdvance(state ? 12 : 1)
        },
        isActive: function() {
            return !extended.isActive() && base.selected && 12 == calc.advance
        },
        getDiscount: function() {
            return 149 - base.getDiscount()
        },
        getAdvancePayment: function() {
            return 1200
        },
        getAdvanceDiscount: function() {
            return 49 * calc.advance
        }
    });
    this.actions.push(baseyear), window.calculatorActions && window.calculatorActions.amedia_1rub && (amedia.discount = function() {
        return 198
    }), window.calculatorActions && window.calculatorActions["onlinetv-trial"] && (onlinetv.discount = function() {
        return 199
    }), this.defaultPkg = "west_base", this.afterPackageChange = function() {
        base.selected || lite.selected || econom.selected || allinclusive_small.selected || allinclusive_big.selected || nobase.selected || base.setSelected(!0), onlinetv.selected && (multiscreen_children.setSelected(!1), multiscreen_discovery.setSelected(!1), multiscreen_kino.setSelected(!1), multiscreen_night.setSelected(!1), multiscreen_sport.setSelected(!1), multiscreen_children.setDisabled(!0), multiscreen_discovery.setDisabled(!0), multiscreen_kino.setDisabled(!0), multiscreen_night.setDisabled(!0), multiscreen_sport.setDisabled(!0))
    }
}! function(factory) {
    "function" == typeof define && define.amd ? define(["jquery"], function($) {
        factory($, document, window, navigator)
    }) : factory(jQuery, document, window, navigator)
}(function($, document, window, navigator, undefined) {
    "use strict";
    var plugin_count = 0,
        is_old_ie = function() {
            var v, n = navigator.userAgent,
                r = /msie\s\d+/i;
            return n.search(r) > 0 && (v = r.exec(n).toString(), v = v.split(" ")[1], v < 9) && ($("html").addClass("lt-ie9"), !0)
        }();
    Function.prototype.bind || (Function.prototype.bind = function(that) {
        var target = this,
            slice = [].slice;
        if ("function" != typeof target) throw new TypeError;
        var args = slice.call(arguments, 1),
            bound = function() {
                if (this instanceof bound) {
                    var F = function() {};
                    F.prototype = target.prototype;
                    var self = new F,
                        result = target.apply(self, args.concat(slice.call(arguments)));
                    return Object(result) === result ? result : self
                }
                return target.apply(that, args.concat(slice.call(arguments)))
            };
        return bound
    }), Array.prototype.indexOf || (Array.prototype.indexOf = function(searchElement, fromIndex) {
        var k;
        if (null == this) throw new TypeError('"this" is null or not defined');
        var O = Object(this),
            len = O.length >>> 0;
        if (0 === len) return -1;
        var n = +fromIndex || 0;
        if (Math.abs(n) === 1 / 0 && (n = 0), n >= len) return -1;
        for (k = Math.max(n >= 0 ? n : len - Math.abs(n), 0); k < len;) {
            if (k in O && O[k] === searchElement) return k;
            k++
        }
        return -1
    });
    var base_html = '<span class="irs"><span class="irs-line" tabindex="-1"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min">0</span><span class="irs-max">1</span><span class="irs-from">0</span><span class="irs-to">0</span><span class="irs-single">0</span></span><span class="irs-grid"></span><span class="irs-bar"></span>',
        single_html = '<span class="irs-bar-edge"></span><span class="irs-shadow shadow-single"></span><span class="irs-slider single"></span>',
        double_html = '<span class="irs-shadow shadow-from"></span><span class="irs-shadow shadow-to"></span><span class="irs-slider from"></span><span class="irs-slider to"></span>',
        disable_html = '<span class="irs-disable-mask"></span>',
        IonRangeSlider = function(input, options, plugin_count) {
            this.VERSION = "2.1.4", this.input = input, this.plugin_count = plugin_count, this.current_plugin = 0, this.calc_count = 0, this.update_tm = 0, this.old_from = 0, this.old_to = 0, this.old_min_interval = null, this.raf_id = null, this.dragging = !1, this.force_redraw = !1, this.no_diapason = !1, this.is_key = !1, this.is_update = !1, this.is_start = !0, this.is_finish = !1, this.is_active = !1, this.is_resize = !1, this.is_click = !1, this.$cache = {
                win: $(window),
                body: $(document.body),
                input: $(input),
                cont: null,
                rs: null,
                min: null,
                max: null,
                from: null,
                to: null,
                single: null,
                bar: null,
                line: null,
                s_single: null,
                s_from: null,
                s_to: null,
                shad_single: null,
                shad_from: null,
                shad_to: null,
                edge: null,
                grid: null,
                grid_labels: []
            }, this.coords = {
                x_gap: 0,
                x_pointer: 0,
                w_rs: 0,
                w_rs_old: 0,
                w_handle: 0,
                p_gap: 0,
                p_gap_left: 0,
                p_gap_right: 0,
                p_step: 0,
                p_pointer: 0,
                p_handle: 0,
                p_single_fake: 0,
                p_single_real: 0,
                p_from_fake: 0,
                p_from_real: 0,
                p_to_fake: 0,
                p_to_real: 0,
                p_bar_x: 0,
                p_bar_w: 0,
                grid_gap: 0,
                big_num: 0,
                big: [],
                big_w: [],
                big_p: [],
                big_x: []
            }, this.labels = {
                w_min: 0,
                w_max: 0,
                w_from: 0,
                w_to: 0,
                w_single: 0,
                p_min: 0,
                p_max: 0,
                p_from_fake: 0,
                p_from_left: 0,
                p_to_fake: 0,
                p_to_left: 0,
                p_single_fake: 0,
                p_single_left: 0
            };
            var config, config_from_data, prop, $inp = this.$cache.input,
                val = $inp.prop("value");
            config = {
                type: "single",
                min: 10,
                max: 100,
                from: null,
                to: null,
                step: 1,
                min_interval: 0,
                max_interval: 0,
                drag_interval: !1,
                values: [],
                p_values: [],
                from_fixed: !1,
                from_min: null,
                from_max: null,
                from_shadow: !1,
                to_fixed: !1,
                to_min: null,
                to_max: null,
                to_shadow: !1,
                prettify_enabled: !0,
                prettify_separator: " ",
                prettify: null,
                force_edges: !1,
                keyboard: !1,
                keyboard_step: 5,
                grid: !1,
                grid_margin: !0,
                grid_num: 4,
                grid_snap: !1,
                hide_min_max: !1,
                hide_from_to: !1,
                prefix: "",
                postfix: "",
                max_postfix: "",
                decorate_both: !0,
                values_separator: " — ",
                input_values_separator: ";",
                disable: !1,
                onStart: null,
                onChange: null,
                onFinish: null,
                onUpdate: null
            }, config_from_data = {
                type: $inp.data("type"),
                min: $inp.data("min"),
                max: $inp.data("max"),
                from: $inp.data("from"),
                to: $inp.data("to"),
                step: $inp.data("step"),
                min_interval: $inp.data("minInterval"),
                max_interval: $inp.data("maxInterval"),
                drag_interval: $inp.data("dragInterval"),
                values: $inp.data("values"),
                from_fixed: $inp.data("fromFixed"),
                from_min: $inp.data("fromMin"),
                from_max: $inp.data("fromMax"),
                from_shadow: $inp.data("fromShadow"),
                to_fixed: $inp.data("toFixed"),
                to_min: $inp.data("toMin"),
                to_max: $inp.data("toMax"),
                to_shadow: $inp.data("toShadow"),
                prettify_enabled: $inp.data("prettifyEnabled"),
                prettify_separator: $inp.data("prettifySeparator"),
                force_edges: $inp.data("forceEdges"),
                keyboard: $inp.data("keyboard"),
                keyboard_step: $inp.data("keyboardStep"),
                grid: $inp.data("grid"),
                grid_margin: $inp.data("gridMargin"),
                grid_num: $inp.data("gridNum"),
                grid_snap: $inp.data("gridSnap"),
                hide_min_max: $inp.data("hideMinMax"),
                hide_from_to: $inp.data("hideFromTo"),
                prefix: $inp.data("prefix"),
                postfix: $inp.data("postfix"),
                max_postfix: $inp.data("maxPostfix"),
                decorate_both: $inp.data("decorateBoth"),
                values_separator: $inp.data("valuesSeparator"),
                input_values_separator: $inp.data("inputValuesSeparator"),
                disable: $inp.data("disable")
            }, config_from_data.values = config_from_data.values && config_from_data.values.split(",");
            for (prop in config_from_data) config_from_data.hasOwnProperty(prop) && (config_from_data[prop] || 0 === config_from_data[prop] || delete config_from_data[prop]);
            val && (val = val.split(config_from_data.input_values_separator || options.input_values_separator || ";"), val[0] && val[0] == +val[0] && (val[0] = +val[0]), val[1] && val[1] == +val[1] && (val[1] = +val[1]), options && options.values && options.values.length ? (config.from = val[0] && options.values.indexOf(val[0]), config.to = val[1] && options.values.indexOf(val[1])) : (config.from = val[0] && +val[0], config.to = val[1] && +val[1])), $.extend(config, options), $.extend(config, config_from_data), this.options = config, this.validate(), this.result = {
                input: this.$cache.input,
                slider: null,
                min: this.options.min,
                max: this.options.max,
                from: this.options.from,
                from_percent: 0,
                from_value: null,
                to: this.options.to,
                to_percent: 0,
                to_value: null
            }, this.init()
        };
    IonRangeSlider.prototype = {
            init: function(is_update) {
                this.no_diapason = !1, this.coords.p_step = this.convertToPercent(this.options.step, !0), this.target = "base", this.toggleInput(), this.append(), this.setMinMax(), is_update ? (this.force_redraw = !0, this.calc(!0), this.callOnUpdate()) : (this.force_redraw = !0, this.calc(!0), this.callOnStart()), this.updateScene()
            },
            append: function() {
                var container_html = '<span class="irs js-irs-' + this.plugin_count + '"></span>';
                this.$cache.input.before(container_html), this.$cache.input.prop("readonly", !0), this.$cache.cont = this.$cache.input.prev(), this.result.slider = this.$cache.cont, this.$cache.cont.html(base_html), this.$cache.rs = this.$cache.cont.find(".irs"), this.$cache.min = this.$cache.cont.find(".irs-min"), this.$cache.max = this.$cache.cont.find(".irs-max"), this.$cache.from = this.$cache.cont.find(".irs-from"), this.$cache.to = this.$cache.cont.find(".irs-to"), this.$cache.single = this.$cache.cont.find(".irs-single"), this.$cache.bar = this.$cache.cont.find(".irs-bar"), this.$cache.line = this.$cache.cont.find(".irs-line"), this.$cache.grid = this.$cache.cont.find(".irs-grid"), "single" === this.options.type ? (this.$cache.cont.append(single_html), this.$cache.edge = this.$cache.cont.find(".irs-bar-edge"), this.$cache.s_single = this.$cache.cont.find(".single"), this.$cache.from[0].style.visibility = "hidden", this.$cache.to[0].style.visibility = "hidden", this.$cache.shad_single = this.$cache.cont.find(".shadow-single")) : (this.$cache.cont.append(double_html), this.$cache.s_from = this.$cache.cont.find(".from"), this.$cache.s_to = this.$cache.cont.find(".to"), this.$cache.shad_from = this.$cache.cont.find(".shadow-from"), this.$cache.shad_to = this.$cache.cont.find(".shadow-to"), this.setTopHandler()), this.options.hide_from_to && (this.$cache.from[0].style.display = "none", this.$cache.to[0].style.display = "none", this.$cache.single[0].style.display = "none"), this.appendGrid(), this.options.disable ? (this.appendDisableMask(), this.$cache.input[0].disabled = !0) : (this.$cache.cont.removeClass("irs-disabled"), this.$cache.input[0].disabled = !1, this.bindEvents()), this.options.drag_interval && (this.$cache.bar[0].style.cursor = "ew-resize")
            },
            setTopHandler: function() {
                var min = this.options.min,
                    max = this.options.max,
                    from = this.options.from,
                    to = this.options.to;
                from > min && to === max ? this.$cache.s_from.addClass("type_last") : to < max && this.$cache.s_to.addClass("type_last")
            },
            changeLevel: function(target) {
                switch (target) {
                    case "single":
                        this.coords.p_gap = this.toFixed(this.coords.p_pointer - this.coords.p_single_fake);
                        break;
                    case "from":
                        this.coords.p_gap = this.toFixed(this.coords.p_pointer - this.coords.p_from_fake), this.$cache.s_from.addClass("state_hover"), this.$cache.s_from.addClass("type_last"), this.$cache.s_to.removeClass("type_last");
                        break;
                    case "to":
                        this.coords.p_gap = this.toFixed(this.coords.p_pointer - this.coords.p_to_fake), this.$cache.s_to.addClass("state_hover"), this.$cache.s_to.addClass("type_last"), this.$cache.s_from.removeClass("type_last");
                        break;
                    case "both":
                        this.coords.p_gap_left = this.toFixed(this.coords.p_pointer - this.coords.p_from_fake), this.coords.p_gap_right = this.toFixed(this.coords.p_to_fake - this.coords.p_pointer), this.$cache.s_to.removeClass("type_last"), this.$cache.s_from.removeClass("type_last")
                }
            },
            appendDisableMask: function() {
                this.$cache.cont.append(disable_html), this.$cache.cont.addClass("irs-disabled")
            },
            remove: function() {
                this.$cache.cont.remove(), this.$cache.cont = null, this.$cache.line.off("keydown.irs_" + this.plugin_count), this.$cache.body.off("touchmove.irs_" + this.plugin_count), this.$cache.body.off("mousemove.irs_" + this.plugin_count), this.$cache.win.off("touchend.irs_" + this.plugin_count), this.$cache.win.off("mouseup.irs_" + this.plugin_count), is_old_ie && (this.$cache.body.off("mouseup.irs_" + this.plugin_count), this.$cache.body.off("mouseleave.irs_" + this.plugin_count)), this.$cache.grid_labels = [], this.coords.big = [], this.coords.big_w = [], this.coords.big_p = [], this.coords.big_x = [], cancelAnimationFrame(this.raf_id)
            },
            bindEvents: function() {
                this.no_diapason || (this.$cache.body.on("touchmove.irs_" + this.plugin_count, this.pointerMove.bind(this)), this.$cache.body.on("mousemove.irs_" + this.plugin_count, this.pointerMove.bind(this)), this.$cache.win.on("touchend.irs_" + this.plugin_count, this.pointerUp.bind(this)), this.$cache.win.on("mouseup.irs_" + this.plugin_count, this.pointerUp.bind(this)), this.$cache.line.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.line.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.options.drag_interval && "double" === this.options.type ? (this.$cache.bar.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "both")), this.$cache.bar.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "both"))) : (this.$cache.bar.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.bar.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click"))), "single" === this.options.type ? (this.$cache.single.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "single")), this.$cache.s_single.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "single")), this.$cache.shad_single.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.single.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "single")), this.$cache.s_single.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "single")), this.$cache.edge.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.shad_single.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click"))) : (this.$cache.single.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, null)), this.$cache.single.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, null)), this.$cache.from.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "from")), this.$cache.s_from.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "from")), this.$cache.to.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "to")), this.$cache.s_to.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "to")), this.$cache.shad_from.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.shad_to.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.from.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "from")), this.$cache.s_from.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "from")), this.$cache.to.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "to")), this.$cache.s_to.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "to")), this.$cache.shad_from.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.shad_to.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click"))), this.options.keyboard && this.$cache.line.on("keydown.irs_" + this.plugin_count, this.key.bind(this, "keyboard")), is_old_ie && (this.$cache.body.on("mouseup.irs_" + this.plugin_count, this.pointerUp.bind(this)), this.$cache.body.on("mouseleave.irs_" + this.plugin_count, this.pointerUp.bind(this))))
            },
            pointerMove: function(e) {
                if (this.dragging) {
                    var x = e.pageX || e.originalEvent.touches && e.originalEvent.touches[0].pageX;
                    this.coords.x_pointer = x - this.coords.x_gap, this.calc()
                }
            },
            pointerUp: function(e) {
                this.current_plugin === this.plugin_count && this.is_active && (this.is_active = !1, this.$cache.cont.find(".state_hover").removeClass("state_hover"), this.force_redraw = !0, is_old_ie && $("*").prop("unselectable", !1), this.updateScene(), this.restoreOriginalMinInterval(), ($.contains(this.$cache.cont[0], e.target) || this.dragging) && (this.is_finish = !0, this.callOnFinish()), this.dragging = !1)
            },
            pointerDown: function(target, e) {
                e.preventDefault();
                var x = e.pageX || e.originalEvent.touches && e.originalEvent.touches[0].pageX;
                2 !== e.button && ("both" === target && this.setTempMinInterval(), target || (target = this.target), this.current_plugin = this.plugin_count, this.target = target, this.is_active = !0, this.dragging = !0, this.coords.x_gap = this.$cache.rs.offset().left, this.coords.x_pointer = x - this.coords.x_gap, this.calcPointerPercent(), this.changeLevel(target), is_old_ie && $("*").prop("unselectable", !0), this.$cache.line.trigger("focus"), this.updateScene())
            },
            pointerClick: function(target, e) {
                e.preventDefault();
                var x = e.pageX || e.originalEvent.touches && e.originalEvent.touches[0].pageX;
                2 !== e.button && (this.current_plugin = this.plugin_count, this.target = target, this.is_click = !0, this.coords.x_gap = this.$cache.rs.offset().left, this.coords.x_pointer = +(x - this.coords.x_gap).toFixed(), this.force_redraw = !0, this.calc(), this.$cache.line.trigger("focus"))
            },
            key: function(target, e) {
                if (!(this.current_plugin !== this.plugin_count || e.altKey || e.ctrlKey || e.shiftKey || e.metaKey)) {
                    switch (e.which) {
                        case 83:
                        case 65:
                        case 40:
                        case 37:
                            e.preventDefault(), this.moveByKey(!1);
                            break;
                        case 87:
                        case 68:
                        case 38:
                        case 39:
                            e.preventDefault(), this.moveByKey(!0)
                    }
                    return !0
                }
            },
            moveByKey: function(right) {
                var p = this.coords.p_pointer;
                right ? p += this.options.keyboard_step : p -= this.options.keyboard_step, this.coords.x_pointer = this.toFixed(this.coords.w_rs / 100 * p), this.is_key = !0, this.calc()
            },
            setMinMax: function() {
                if (this.options) {
                    if (this.options.hide_min_max) return this.$cache.min[0].style.display = "none", void(this.$cache.max[0].style.display = "none");
                    this.options.values.length ? (this.$cache.min.html(this.decorate(this.options.p_values[this.options.min])), this.$cache.max.html(this.decorate(this.options.p_values[this.options.max]))) : (this.$cache.min.html(this.decorate(this._prettify(this.options.min), this.options.min)), this.$cache.max.html(this.decorate(this._prettify(this.options.max), this.options.max))), this.labels.w_min = this.$cache.min.outerWidth(!1), this.labels.w_max = this.$cache.max.outerWidth(!1)
                }
            },
            setTempMinInterval: function() {
                var interval = this.result.to - this.result.from;
                null === this.old_min_interval && (this.old_min_interval = this.options.min_interval), this.options.min_interval = interval
            },
            restoreOriginalMinInterval: function() {
                null !== this.old_min_interval && (this.options.min_interval = this.old_min_interval, this.old_min_interval = null)
            },
            calc: function(update) {
                if (this.options && (this.calc_count++, (10 === this.calc_count || update) && (this.calc_count = 0, this.coords.w_rs = this.$cache.rs.outerWidth(!1), this.calcHandlePercent()), this.coords.w_rs)) {
                    this.calcPointerPercent();
                    var handle_x = this.getHandleX();
                    switch ("click" === this.target && (this.coords.p_gap = this.coords.p_handle / 2, handle_x = this.getHandleX(), this.options.drag_interval ? this.target = "both_one" : this.target = this.chooseHandle(handle_x)), this.target) {
                        case "base":
                            var w = (this.options.max - this.options.min) / 100,
                                f = (this.result.from - this.options.min) / w,
                                t = (this.result.to - this.options.min) / w;
                            this.coords.p_single_real = this.toFixed(f), this.coords.p_from_real = this.toFixed(f), this.coords.p_to_real = this.toFixed(t), this.coords.p_single_real = this.checkDiapason(this.coords.p_single_real, this.options.from_min, this.options.from_max), this.coords.p_from_real = this.checkDiapason(this.coords.p_from_real, this.options.from_min, this.options.from_max), this.coords.p_to_real = this.checkDiapason(this.coords.p_to_real, this.options.to_min, this.options.to_max), this.coords.p_single_fake = this.convertToFakePercent(this.coords.p_single_real), this.coords.p_from_fake = this.convertToFakePercent(this.coords.p_from_real), this.coords.p_to_fake = this.convertToFakePercent(this.coords.p_to_real), this.target = null;
                            break;
                        case "single":
                            if (this.options.from_fixed) break;
                            this.coords.p_single_real = this.convertToRealPercent(handle_x), this.coords.p_single_real = this.calcWithStep(this.coords.p_single_real), this.coords.p_single_real = this.checkDiapason(this.coords.p_single_real, this.options.from_min, this.options.from_max), this.coords.p_single_fake = this.convertToFakePercent(this.coords.p_single_real);
                            break;
                        case "from":
                            if (this.options.from_fixed) break;
                            this.coords.p_from_real = this.convertToRealPercent(handle_x), this.coords.p_from_real = this.calcWithStep(this.coords.p_from_real), this.coords.p_from_real > this.coords.p_to_real && (this.coords.p_from_real = this.coords.p_to_real), this.coords.p_from_real = this.checkDiapason(this.coords.p_from_real, this.options.from_min, this.options.from_max), this.coords.p_from_real = this.checkMinInterval(this.coords.p_from_real, this.coords.p_to_real, "from"), this.coords.p_from_real = this.checkMaxInterval(this.coords.p_from_real, this.coords.p_to_real, "from"), this.coords.p_from_fake = this.convertToFakePercent(this.coords.p_from_real);
                            break;
                        case "to":
                            if (this.options.to_fixed) break;
                            this.coords.p_to_real = this.convertToRealPercent(handle_x), this.coords.p_to_real = this.calcWithStep(this.coords.p_to_real), this.coords.p_to_real < this.coords.p_from_real && (this.coords.p_to_real = this.coords.p_from_real), this.coords.p_to_real = this.checkDiapason(this.coords.p_to_real, this.options.to_min, this.options.to_max), this.coords.p_to_real = this.checkMinInterval(this.coords.p_to_real, this.coords.p_from_real, "to"), this.coords.p_to_real = this.checkMaxInterval(this.coords.p_to_real, this.coords.p_from_real, "to"), this.coords.p_to_fake = this.convertToFakePercent(this.coords.p_to_real);
                            break;
                        case "both":
                            if (this.options.from_fixed || this.options.to_fixed) break;
                            handle_x = this.toFixed(handle_x + .1 * this.coords.p_handle), this.coords.p_from_real = this.convertToRealPercent(handle_x) - this.coords.p_gap_left, this.coords.p_from_real = this.calcWithStep(this.coords.p_from_real), this.coords.p_from_real = this.checkDiapason(this.coords.p_from_real, this.options.from_min, this.options.from_max), this.coords.p_from_real = this.checkMinInterval(this.coords.p_from_real, this.coords.p_to_real, "from"), this.coords.p_from_fake = this.convertToFakePercent(this.coords.p_from_real), this.coords.p_to_real = this.convertToRealPercent(handle_x) + this.coords.p_gap_right, this.coords.p_to_real = this.calcWithStep(this.coords.p_to_real), this.coords.p_to_real = this.checkDiapason(this.coords.p_to_real, this.options.to_min, this.options.to_max), this.coords.p_to_real = this.checkMinInterval(this.coords.p_to_real, this.coords.p_from_real, "to"), this.coords.p_to_fake = this.convertToFakePercent(this.coords.p_to_real);
                            break;
                        case "both_one":
                            if (this.options.from_fixed || this.options.to_fixed) break;
                            var real_x = this.convertToRealPercent(handle_x),
                                from = this.result.from_percent,
                                to = this.result.to_percent,
                                full = to - from,
                                half = full / 2,
                                new_from = real_x - half,
                                new_to = real_x + half;
                            new_from < 0 && (new_from = 0, new_to = new_from + full), new_to > 100 && (new_to = 100, new_from = new_to - full), this.coords.p_from_real = this.calcWithStep(new_from), this.coords.p_from_real = this.checkDiapason(this.coords.p_from_real, this.options.from_min, this.options.from_max), this.coords.p_from_fake = this.convertToFakePercent(this.coords.p_from_real), this.coords.p_to_real = this.calcWithStep(new_to), this.coords.p_to_real = this.checkDiapason(this.coords.p_to_real, this.options.to_min, this.options.to_max), this.coords.p_to_fake = this.convertToFakePercent(this.coords.p_to_real)
                    }
                    "single" === this.options.type ? (this.coords.p_bar_x = this.coords.p_handle / 2, this.coords.p_bar_w = this.coords.p_single_fake, this.result.from_percent = this.coords.p_single_real, this.result.from = this.convertToValue(this.coords.p_single_real), this.options.values.length && (this.result.from_value = this.options.values[this.result.from])) : (this.coords.p_bar_x = this.toFixed(this.coords.p_from_fake + this.coords.p_handle / 2), this.coords.p_bar_w = this.toFixed(this.coords.p_to_fake - this.coords.p_from_fake), this.result.from_percent = this.coords.p_from_real, this.result.from = this.convertToValue(this.coords.p_from_real), this.result.to_percent = this.coords.p_to_real, this.result.to = this.convertToValue(this.coords.p_to_real), this.options.values.length && (this.result.from_value = this.options.values[this.result.from], this.result.to_value = this.options.values[this.result.to])), this.calcMinMax(), this.calcLabels()
                }
            },
            calcPointerPercent: function() {
                return this.coords.w_rs ? (this.coords.x_pointer < 0 || isNaN(this.coords.x_pointer) ? this.coords.x_pointer = 0 : this.coords.x_pointer > this.coords.w_rs && (this.coords.x_pointer = this.coords.w_rs), void(this.coords.p_pointer = this.toFixed(this.coords.x_pointer / this.coords.w_rs * 100))) : void(this.coords.p_pointer = 0)
            },
            convertToRealPercent: function(fake) {
                var full = 100 - this.coords.p_handle;
                return fake / full * 100
            },
            convertToFakePercent: function(real) {
                var full = 100 - this.coords.p_handle;
                return real / 100 * full
            },
            getHandleX: function() {
                var max = 100 - this.coords.p_handle,
                    x = this.toFixed(this.coords.p_pointer - this.coords.p_gap);
                return x < 0 ? x = 0 : x > max && (x = max), x
            },
            calcHandlePercent: function() {
                "single" === this.options.type ? this.coords.w_handle = this.$cache.s_single.outerWidth(!1) : this.coords.w_handle = this.$cache.s_from.outerWidth(!1), this.coords.p_handle = this.toFixed(this.coords.w_handle / this.coords.w_rs * 100)
            },
            chooseHandle: function(real_x) {
                if ("single" === this.options.type) return "single";
                var m_point = this.coords.p_from_real + (this.coords.p_to_real - this.coords.p_from_real) / 2;
                return real_x >= m_point ? this.options.to_fixed ? "from" : "to" : this.options.from_fixed ? "to" : "from"
            },
            calcMinMax: function() {
                this.coords.w_rs && (this.labels.p_min = this.labels.w_min / this.coords.w_rs * 100, this.labels.p_max = this.labels.w_max / this.coords.w_rs * 100);
            },
            calcLabels: function() {
                this.coords.w_rs && !this.options.hide_from_to && ("single" === this.options.type ? (this.labels.w_single = this.$cache.single.outerWidth(!1), this.labels.p_single_fake = this.labels.w_single / this.coords.w_rs * 100, this.labels.p_single_left = this.coords.p_single_fake + this.coords.p_handle / 2 - this.labels.p_single_fake / 2, this.labels.p_single_left = this.checkEdges(this.labels.p_single_left, this.labels.p_single_fake)) : (this.labels.w_from = this.$cache.from.outerWidth(!1), this.labels.p_from_fake = this.labels.w_from / this.coords.w_rs * 100, this.labels.p_from_left = this.coords.p_from_fake + this.coords.p_handle / 2 - this.labels.p_from_fake / 2, this.labels.p_from_left = this.toFixed(this.labels.p_from_left), this.labels.p_from_left = this.checkEdges(this.labels.p_from_left, this.labels.p_from_fake), this.labels.w_to = this.$cache.to.outerWidth(!1), this.labels.p_to_fake = this.labels.w_to / this.coords.w_rs * 100, this.labels.p_to_left = this.coords.p_to_fake + this.coords.p_handle / 2 - this.labels.p_to_fake / 2, this.labels.p_to_left = this.toFixed(this.labels.p_to_left), this.labels.p_to_left = this.checkEdges(this.labels.p_to_left, this.labels.p_to_fake), this.labels.w_single = this.$cache.single.outerWidth(!1), this.labels.p_single_fake = this.labels.w_single / this.coords.w_rs * 100, this.labels.p_single_left = (this.labels.p_from_left + this.labels.p_to_left + this.labels.p_to_fake) / 2 - this.labels.p_single_fake / 2, this.labels.p_single_left = this.toFixed(this.labels.p_single_left), this.labels.p_single_left = this.checkEdges(this.labels.p_single_left, this.labels.p_single_fake)))
            },
            updateScene: function() {
                this.raf_id && (cancelAnimationFrame(this.raf_id), this.raf_id = null), clearTimeout(this.update_tm), this.update_tm = null, this.options && (this.drawHandles(), this.is_active ? this.raf_id = requestAnimationFrame(this.updateScene.bind(this)) : this.update_tm = setTimeout(this.updateScene.bind(this), 300))
            },
            drawHandles: function() {
                this.coords.w_rs = this.$cache.rs.outerWidth(!1), this.coords.w_rs && (this.coords.w_rs !== this.coords.w_rs_old && (this.target = "base", this.is_resize = !0), (this.coords.w_rs !== this.coords.w_rs_old || this.force_redraw) && (this.setMinMax(), this.calc(!0), this.drawLabels(), this.options.grid && (this.calcGridMargin(), this.calcGridLabels()), this.force_redraw = !0, this.coords.w_rs_old = this.coords.w_rs, this.drawShadow()), this.coords.w_rs && (this.dragging || this.force_redraw || this.is_key) && ((this.old_from !== this.result.from || this.old_to !== this.result.to || this.force_redraw || this.is_key) && (this.drawLabels(), this.$cache.bar[0].style.left = this.coords.p_bar_x + "%", this.$cache.bar[0].style.width = this.coords.p_bar_w + "%", "single" === this.options.type ? (this.$cache.s_single[0].style.left = this.coords.p_single_fake + "%", this.$cache.single[0].style.left = this.labels.p_single_left + "%", this.options.values.length ? this.$cache.input.prop("value", this.result.from_value) : this.$cache.input.prop("value", this.result.from), this.$cache.input.data("from", this.result.from)) : (this.$cache.s_from[0].style.left = this.coords.p_from_fake + "%", this.$cache.s_to[0].style.left = this.coords.p_to_fake + "%", (this.old_from !== this.result.from || this.force_redraw) && (this.$cache.from[0].style.left = this.labels.p_from_left + "%"), (this.old_to !== this.result.to || this.force_redraw) && (this.$cache.to[0].style.left = this.labels.p_to_left + "%"), this.$cache.single[0].style.left = this.labels.p_single_left + "%", this.options.values.length ? this.$cache.input.prop("value", this.result.from_value + this.options.input_values_separator + this.result.to_value) : this.$cache.input.prop("value", this.result.from + this.options.input_values_separator + this.result.to), this.$cache.input.data("from", this.result.from), this.$cache.input.data("to", this.result.to)), this.old_from === this.result.from && this.old_to === this.result.to || this.is_start || this.$cache.input.trigger("change"), this.old_from = this.result.from, this.old_to = this.result.to, this.is_resize || this.is_update || this.is_start || this.is_finish || this.callOnChange(), (this.is_key || this.is_click) && (this.is_key = !1, this.is_click = !1, this.callOnFinish()), this.is_update = !1, this.is_resize = !1, this.is_finish = !1), this.is_start = !1, this.is_key = !1, this.is_click = !1, this.force_redraw = !1))
            },
            drawLabels: function() {
                if (this.options) {
                    var text_single, text_from, text_to, values_num = this.options.values.length,
                        p_values = this.options.p_values;
                    if (!this.options.hide_from_to)
                        if ("single" === this.options.type) values_num ? (text_single = this.decorate(p_values[this.result.from]), this.$cache.single.html(text_single)) : (text_single = this.decorate(this._prettify(this.result.from), this.result.from), this.$cache.single.html(text_single)), this.calcLabels(), this.labels.p_single_left < this.labels.p_min + 1 ? this.$cache.min[0].style.visibility = "hidden" : this.$cache.min[0].style.visibility = "visible", this.labels.p_single_left + this.labels.p_single_fake > 100 - this.labels.p_max - 1 ? this.$cache.max[0].style.visibility = "hidden" : this.$cache.max[0].style.visibility = "visible";
                        else {
                            values_num ? (this.options.decorate_both ? (text_single = this.decorate(p_values[this.result.from]), text_single += this.options.values_separator, text_single += this.decorate(p_values[this.result.to])) : text_single = this.decorate(p_values[this.result.from] + this.options.values_separator + p_values[this.result.to]), text_from = this.decorate(p_values[this.result.from]), text_to = this.decorate(p_values[this.result.to]), this.$cache.single.html(text_single), this.$cache.from.html(text_from), this.$cache.to.html(text_to)) : (this.options.decorate_both ? (text_single = this.decorate(this._prettify(this.result.from), this.result.from), text_single += this.options.values_separator, text_single += this.decorate(this._prettify(this.result.to), this.result.to)) : text_single = this.decorate(this._prettify(this.result.from) + this.options.values_separator + this._prettify(this.result.to), this.result.to), text_from = this.decorate(this._prettify(this.result.from), this.result.from), text_to = this.decorate(this._prettify(this.result.to), this.result.to), this.$cache.single.html(text_single), this.$cache.from.html(text_from), this.$cache.to.html(text_to)), this.calcLabels();
                            var min = Math.min(this.labels.p_single_left, this.labels.p_from_left),
                                single_left = this.labels.p_single_left + this.labels.p_single_fake,
                                to_left = this.labels.p_to_left + this.labels.p_to_fake,
                                max = Math.max(single_left, to_left);
                            this.labels.p_from_left + this.labels.p_from_fake >= this.labels.p_to_left ? (this.$cache.from[0].style.visibility = "hidden", this.$cache.to[0].style.visibility = "hidden", this.$cache.single[0].style.visibility = "visible", this.result.from === this.result.to ? ("from" === this.target ? this.$cache.from[0].style.visibility = "visible" : "to" === this.target ? this.$cache.to[0].style.visibility = "visible" : this.target || (this.$cache.from[0].style.visibility = "visible"), this.$cache.single[0].style.visibility = "hidden", max = to_left) : (this.$cache.from[0].style.visibility = "hidden", this.$cache.to[0].style.visibility = "hidden", this.$cache.single[0].style.visibility = "visible", max = Math.max(single_left, to_left))) : (this.$cache.from[0].style.visibility = "visible", this.$cache.to[0].style.visibility = "visible", this.$cache.single[0].style.visibility = "hidden"), min < this.labels.p_min + 1 ? this.$cache.min[0].style.visibility = "hidden" : this.$cache.min[0].style.visibility = "visible", max > 100 - this.labels.p_max - 1 ? this.$cache.max[0].style.visibility = "hidden" : this.$cache.max[0].style.visibility = "visible"
                        }
                }
            },
            drawShadow: function() {
                var from_min, from_max, to_min, to_max, o = this.options,
                    c = this.$cache,
                    is_from_min = "number" == typeof o.from_min && !isNaN(o.from_min),
                    is_from_max = "number" == typeof o.from_max && !isNaN(o.from_max),
                    is_to_min = "number" == typeof o.to_min && !isNaN(o.to_min),
                    is_to_max = "number" == typeof o.to_max && !isNaN(o.to_max);
                "single" === o.type ? o.from_shadow && (is_from_min || is_from_max) ? (from_min = this.convertToPercent(is_from_min ? o.from_min : o.min), from_max = this.convertToPercent(is_from_max ? o.from_max : o.max) - from_min, from_min = this.toFixed(from_min - this.coords.p_handle / 100 * from_min), from_max = this.toFixed(from_max - this.coords.p_handle / 100 * from_max), from_min += this.coords.p_handle / 2, c.shad_single[0].style.display = "block", c.shad_single[0].style.left = from_min + "%", c.shad_single[0].style.width = from_max + "%") : c.shad_single[0].style.display = "none" : (o.from_shadow && (is_from_min || is_from_max) ? (from_min = this.convertToPercent(is_from_min ? o.from_min : o.min), from_max = this.convertToPercent(is_from_max ? o.from_max : o.max) - from_min, from_min = this.toFixed(from_min - this.coords.p_handle / 100 * from_min), from_max = this.toFixed(from_max - this.coords.p_handle / 100 * from_max), from_min += this.coords.p_handle / 2, c.shad_from[0].style.display = "block", c.shad_from[0].style.left = from_min + "%", c.shad_from[0].style.width = from_max + "%") : c.shad_from[0].style.display = "none", o.to_shadow && (is_to_min || is_to_max) ? (to_min = this.convertToPercent(is_to_min ? o.to_min : o.min), to_max = this.convertToPercent(is_to_max ? o.to_max : o.max) - to_min, to_min = this.toFixed(to_min - this.coords.p_handle / 100 * to_min), to_max = this.toFixed(to_max - this.coords.p_handle / 100 * to_max), to_min += this.coords.p_handle / 2, c.shad_to[0].style.display = "block", c.shad_to[0].style.left = to_min + "%", c.shad_to[0].style.width = to_max + "%") : c.shad_to[0].style.display = "none")
            },
            callOnStart: function() {
                this.options.onStart && "function" == typeof this.options.onStart && this.options.onStart(this.result)
            },
            callOnChange: function() {
                this.options.onChange && "function" == typeof this.options.onChange && this.options.onChange(this.result)
            },
            callOnFinish: function() {
                this.options.onFinish && "function" == typeof this.options.onFinish && this.options.onFinish(this.result)
            },
            callOnUpdate: function() {
                this.options.onUpdate && "function" == typeof this.options.onUpdate && this.options.onUpdate(this.result)
            },
            toggleInput: function() {
                this.$cache.input.toggleClass("irs-hidden-input")
            },
            convertToPercent: function(value, no_min) {
                var val, percent, diapason = this.options.max - this.options.min,
                    one_percent = diapason / 100;
                return diapason ? (val = no_min ? value : value - this.options.min, percent = val / one_percent, this.toFixed(percent)) : (this.no_diapason = !0, 0)
            },
            convertToValue: function(percent) {
                var min_length, max_length, min = this.options.min,
                    max = this.options.max,
                    min_decimals = min.toString().split(".")[1],
                    max_decimals = max.toString().split(".")[1],
                    avg_decimals = 0,
                    abs = 0;
                if (0 === percent) return this.options.min;
                if (100 === percent) return this.options.max;
                min_decimals && (min_length = min_decimals.length, avg_decimals = min_length), max_decimals && (max_length = max_decimals.length, avg_decimals = max_length), min_length && max_length && (avg_decimals = min_length >= max_length ? min_length : max_length), min < 0 && (abs = Math.abs(min), min = +(min + abs).toFixed(avg_decimals), max = +(max + abs).toFixed(avg_decimals));
                var result, number = (max - min) / 100 * percent + min,
                    string = this.options.step.toString().split(".")[1];
                return string ? number = +number.toFixed(string.length) : (number /= this.options.step, number *= this.options.step, number = +number.toFixed(0)), abs && (number -= abs), result = string ? +number.toFixed(string.length) : this.toFixed(number), result < this.options.min ? result = this.options.min : result > this.options.max && (result = this.options.max), result
            },
            calcWithStep: function(percent) {
                var rounded = Math.round(percent / this.coords.p_step) * this.coords.p_step;
                return rounded > 100 && (rounded = 100), 100 === percent && (rounded = 100), this.toFixed(rounded)
            },
            checkMinInterval: function(p_current, p_next, type) {
                var current, next, o = this.options;
                return o.min_interval ? (current = this.convertToValue(p_current), next = this.convertToValue(p_next), "from" === type ? next - current < o.min_interval && (current = next - o.min_interval) : current - next < o.min_interval && (current = next + o.min_interval), this.convertToPercent(current)) : p_current
            },
            checkMaxInterval: function(p_current, p_next, type) {
                var current, next, o = this.options;
                return o.max_interval ? (current = this.convertToValue(p_current), next = this.convertToValue(p_next), "from" === type ? next - current > o.max_interval && (current = next - o.max_interval) : current - next > o.max_interval && (current = next + o.max_interval), this.convertToPercent(current)) : p_current
            },
            checkDiapason: function(p_num, min, max) {
                var num = this.convertToValue(p_num),
                    o = this.options;
                return "number" != typeof min && (min = o.min), "number" != typeof max && (max = o.max), num < min && (num = min), num > max && (num = max), this.convertToPercent(num)
            },
            toFixed: function(num) {
                return num = num.toFixed(9), +num
            },
            _prettify: function(num) {
                return this.options.prettify_enabled ? this.options.prettify && "function" == typeof this.options.prettify ? this.options.prettify(num) : this.prettify(num) : num
            },
            prettify: function(num) {
                var n = num.toString();
                return n.replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1")
            },
            checkEdges: function(left, width) {
                return this.options.force_edges ? (left < 0 ? left = 0 : left > 100 - width && (left = 100 - width), this.toFixed(left)) : this.toFixed(left)
            },
            validate: function() {
                var value, i, o = this.options,
                    r = this.result,
                    v = o.values,
                    vl = v.length;
                if ("string" == typeof o.min && (o.min = +o.min), "string" == typeof o.max && (o.max = +o.max), "string" == typeof o.from && (o.from = +o.from), "string" == typeof o.to && (o.to = +o.to), "string" == typeof o.step && (o.step = +o.step), "string" == typeof o.from_min && (o.from_min = +o.from_min), "string" == typeof o.from_max && (o.from_max = +o.from_max), "string" == typeof o.to_min && (o.to_min = +o.to_min), "string" == typeof o.to_max && (o.to_max = +o.to_max), "string" == typeof o.keyboard_step && (o.keyboard_step = +o.keyboard_step), "string" == typeof o.grid_num && (o.grid_num = +o.grid_num), o.max < o.min && (o.max = o.min), vl)
                    for (o.p_values = [], o.min = 0, o.max = vl - 1, o.step = 1, o.grid_num = o.max, o.grid_snap = !0, i = 0; i < vl; i++) value = +v[i], isNaN(value) ? value = v[i] : (v[i] = value, value = this._prettify(value)), o.p_values.push(value);
                ("number" != typeof o.from || isNaN(o.from)) && (o.from = o.min), ("number" != typeof o.to || isNaN(o.from)) && (o.to = o.max), "single" === o.type ? (o.from < o.min && (o.from = o.min), o.from > o.max && (o.from = o.max)) : ((o.from < o.min || o.from > o.max) && (o.from = o.min), (o.to > o.max || o.to < o.min) && (o.to = o.max), o.from > o.to && (o.from = o.to)), ("number" != typeof o.step || isNaN(o.step) || !o.step || o.step < 0) && (o.step = 1), ("number" != typeof o.keyboard_step || isNaN(o.keyboard_step) || !o.keyboard_step || o.keyboard_step < 0) && (o.keyboard_step = 5), "number" == typeof o.from_min && o.from < o.from_min && (o.from = o.from_min), "number" == typeof o.from_max && o.from > o.from_max && (o.from = o.from_max), "number" == typeof o.to_min && o.to < o.to_min && (o.to = o.to_min), "number" == typeof o.to_max && o.from > o.to_max && (o.to = o.to_max), r && (r.min !== o.min && (r.min = o.min), r.max !== o.max && (r.max = o.max), (r.from < r.min || r.from > r.max) && (r.from = o.from), (r.to < r.min || r.to > r.max) && (r.to = o.to)), ("number" != typeof o.min_interval || isNaN(o.min_interval) || !o.min_interval || o.min_interval < 0) && (o.min_interval = 0), ("number" != typeof o.max_interval || isNaN(o.max_interval) || !o.max_interval || o.max_interval < 0) && (o.max_interval = 0), o.min_interval && o.min_interval > o.max - o.min && (o.min_interval = o.max - o.min), o.max_interval && o.max_interval > o.max - o.min && (o.max_interval = o.max - o.min)
            },
            decorate: function(num, original) {
                var decorated = "",
                    o = this.options;
                return o.prefix && (decorated += o.prefix), decorated += num, o.max_postfix && (o.values.length && num === o.p_values[o.max] ? (decorated += o.max_postfix, o.postfix && (decorated += " ")) : original === o.max && (decorated += o.max_postfix, o.postfix && (decorated += " "))), o.postfix && (decorated += o.postfix), decorated
            },
            updateFrom: function() {
                this.result.from = this.options.from, this.result.from_percent = this.convertToPercent(this.result.from), this.options.values && (this.result.from_value = this.options.values[this.result.from])
            },
            updateTo: function() {
                this.result.to = this.options.to, this.result.to_percent = this.convertToPercent(this.result.to), this.options.values && (this.result.to_value = this.options.values[this.result.to])
            },
            updateResult: function() {
                this.result.min = this.options.min, this.result.max = this.options.max, this.updateFrom(), this.updateTo()
            },
            appendGrid: function() {
                if (this.options.grid) {
                    var i, z, local_small_max, small_p, result, o = this.options,
                        total = o.max - o.min,
                        big_num = o.grid_num,
                        big_p = 0,
                        big_w = 0,
                        small_max = 4,
                        small_w = 0,
                        html = "";
                    for (this.calcGridMargin(), o.grid_snap ? (big_num = total / o.step, big_p = this.toFixed(o.step / (total / 100))) : big_p = this.toFixed(100 / big_num), big_num > 4 && (small_max = 3), big_num > 7 && (small_max = 2), big_num > 14 && (small_max = 1), big_num > 28 && (small_max = 0), i = 0; i < big_num + 1; i++) {
                        for (local_small_max = small_max, big_w = this.toFixed(big_p * i), big_w > 100 && (big_w = 100, local_small_max -= 2, local_small_max < 0 && (local_small_max = 0)), this.coords.big[i] = big_w, small_p = (big_w - big_p * (i - 1)) / (local_small_max + 1), z = 1; z <= local_small_max && 0 !== big_w; z++) small_w = this.toFixed(big_w - small_p * z), html += '<span class="irs-grid-pol small" style="left: ' + small_w + '%"></span>';
                        html += '<span class="irs-grid-pol" style="left: ' + big_w + '%"></span>', result = this.convertToValue(big_w), result = o.values.length ? o.p_values[result] : this._prettify(result), html += '<span class="irs-grid-text js-grid-text-' + i + '" style="left: ' + big_w + '%">' + result + "</span>"
                    }
                    this.coords.big_num = Math.ceil(big_num + 1), this.$cache.cont.addClass("irs-with-grid"), this.$cache.grid.html(html), this.cacheGridLabels()
                }
            },
            cacheGridLabels: function() {
                var $label, i, num = this.coords.big_num;
                for (i = 0; i < num; i++) $label = this.$cache.grid.find(".js-grid-text-" + i), this.$cache.grid_labels.push($label);
                this.calcGridLabels()
            },
            calcGridLabels: function() {
                var i, label, start = [],
                    finish = [],
                    num = this.coords.big_num;
                for (i = 0; i < num; i++) this.coords.big_w[i] = this.$cache.grid_labels[i].outerWidth(!1), this.coords.big_p[i] = this.toFixed(this.coords.big_w[i] / this.coords.w_rs * 100), this.coords.big_x[i] = this.toFixed(this.coords.big_p[i] / 2), start[i] = this.toFixed(this.coords.big[i] - this.coords.big_x[i]), finish[i] = this.toFixed(start[i] + this.coords.big_p[i]);
                for (this.options.force_edges && (start[0] < -this.coords.grid_gap && (start[0] = -this.coords.grid_gap, finish[0] = this.toFixed(start[0] + this.coords.big_p[0]), this.coords.big_x[0] = this.coords.grid_gap), finish[num - 1] > 100 + this.coords.grid_gap && (finish[num - 1] = 100 + this.coords.grid_gap, start[num - 1] = this.toFixed(finish[num - 1] - this.coords.big_p[num - 1]), this.coords.big_x[num - 1] = this.toFixed(this.coords.big_p[num - 1] - this.coords.grid_gap))), this.calcGridCollision(2, start, finish), this.calcGridCollision(4, start, finish), i = 0; i < num; i++) label = this.$cache.grid_labels[i][0], label.style.marginLeft = -this.coords.big_x[i] + "%"
            },
            calcGridCollision: function(step, start, finish) {
                var i, next_i, label, num = this.coords.big_num;
                for (i = 0; i < num && (next_i = i + step / 2, !(next_i >= num)); i += step) label = this.$cache.grid_labels[next_i][0], finish[i] <= start[next_i] ? label.style.visibility = "visible" : label.style.visibility = "hidden"
            },
            calcGridMargin: function() {
                this.options.grid_margin && (this.coords.w_rs = this.$cache.rs.outerWidth(!1), this.coords.w_rs && ("single" === this.options.type ? this.coords.w_handle = this.$cache.s_single.outerWidth(!1) : this.coords.w_handle = this.$cache.s_from.outerWidth(!1), this.coords.p_handle = this.toFixed(this.coords.w_handle / this.coords.w_rs * 100), this.coords.grid_gap = this.toFixed(this.coords.p_handle / 2 - .1), this.$cache.grid[0].style.width = this.toFixed(100 - this.coords.p_handle) + "%", this.$cache.grid[0].style.left = this.coords.grid_gap + "%"))
            },
            update: function(options) {
                this.input && (this.is_update = !0, this.options.from = this.result.from, this.options.to = this.result.to, this.options = $.extend(this.options, options), this.validate(), this.updateResult(options), this.toggleInput(), this.remove(), this.init(!0))
            },
            reset: function() {
                this.input && (this.updateResult(), this.update())
            },
            destroy: function() {
                this.input && (this.toggleInput(), this.$cache.input.prop("readonly", !1), $.data(this.input, "ionRangeSlider", null), this.remove(), this.input = null, this.options = null)
            }
        }, $.fn.ionRangeSlider = function(options) {
            return this.each(function() {
                $.data(this, "ionRangeSlider") || $.data(this, "ionRangeSlider", new IonRangeSlider(this, options, plugin_count++))
            })
        },
        function() {
            for (var lastTime = 0, vendors = ["ms", "moz", "webkit", "o"], x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) window.requestAnimationFrame = window[vendors[x] + "RequestAnimationFrame"], window.cancelAnimationFrame = window[vendors[x] + "CancelAnimationFrame"] || window[vendors[x] + "CancelRequestAnimationFrame"];
            window.requestAnimationFrame || (window.requestAnimationFrame = function(callback, element) {
                var currTime = (new Date).getTime(),
                    timeToCall = Math.max(0, 16 - (currTime - lastTime)),
                    id = window.setTimeout(function() {
                        callback(currTime + timeToCall)
                    }, timeToCall);
                return lastTime = currTime + timeToCall, id
            }), window.cancelAnimationFrame || (window.cancelAnimationFrame = function(id) {
                clearTimeout(id)
            })
        }()
});
var BitSet;
! function() {
    BitSet = function(hex) {
        if (this._words = [], hex && hex.length > 0)
            for (var i = (hex.length / 4, 0); i < hex.length / 4 + 1; i++)
                if (4 * i <= hex.length) {
                    for (var value = hex.substring(4 * i, 4 * i + 4), j = value.length; j < 4; j++) value += "0";
                    var word = parseInt(hex.substring(4 * i, 4 * i + 4), 16);
                    this._words.push(word)
                }
    };
    var SHIFTS_OF_A_WORD = 5,
        whichWord = function(pos) {
            return pos >> SHIFTS_OF_A_WORD
        },
        mask = function(pos) {
            return 1 << (31 & pos)
        };
    BitSet.prototype.set = function(pos) {
        var which = whichWord(pos),
            words = this._words;
        return words[which] = words[which] | mask(pos)
    }, BitSet.prototype.clear = function(pos) {
        var which = whichWord(pos),
            words = this._words;
        return words[which] = words[which] & ~mask(pos)
    }, BitSet.prototype.get = function(pos) {
        var which = whichWord(pos),
            words = this._words;
        return words[which] & mask(pos)
    }, BitSet.prototype.words = function() {
        return this._words.length
    }, BitSet.prototype.cardinality = function() {
        var next, sum = 0,
            arrOfWords = this._words,
            maxWords = this.words();
        for (next = 0; next < maxWords; next += 1)
            for (var nextWord = arrOfWords[next] || 0, bits = nextWord; 0 !== bits; bits &= bits - 1) sum += 1;
        return sum
    }, BitSet.prototype.or = function(set) {
        if (this === set) return this;
        var next, commons = Math.min(this.words(), set.words());
        for (next = 0; next < commons; next += 1) this._words[next] = (this._words[next] || 0) | (set._words[next] || 0);
        return commons < set.words() && (this._words = this._words.concat(set._words.slice(commons, set.words()))), this
    }
}();
var Group = function(id, required) {
        this.id = id, this.required = required, this.packages = new Array, this.addPackage = function(pack) {
            this.packages.push(pack)
        }
    },
    Package = function(id, rights, name, textName, group, price, info) {
        this.id = id, this.rights = rights, this.name = name, this.textName = textName, this.group = group, group.addPackage(this), this.selected = !1, this.price = price, this.info = info, this.permanentOff = !1, this.channels = new BitSet, Calculator.instance.packnames[textName] = this, this.calc = Calculator.instance, this.advance = 1, this.type = "package", this.addRestricted = function(restricted, message) {
            this.restricted = restricted, this.restrictedMessage = message
        }, this.addAllowed = function(allowed) {
            this.allowed = allowed
        }, this.setSelected = function(selection) {
            if (!this.selected || selection || !this.group.required) {
                this.selected = selection;
                var current = this;
                selection && $.each(this.group.packages, function(idx, el) {
                    el.textName != current.textName && (el.selected = !1)
                })
            }
        }, this.setDisabled = function(disabled, message) {
            this.disabled = disabled, disabled ? this.message = message ? message : this.permanentMessage : this.message = null
        }, this.permanentDisable = function(message) {
            this.permanentOff = !0, this.permanentMessage = message
        }, this.setCount = function(channels) {
            channels && (this.channels = new BitSet(channels))
        }, this.setPrice = function(price) {
            price ? this.price = price : this.price = 0
        }, this.getChannels = function() {
            return this.channels
        }, this.getPrice = function() {
            return "function" == typeof this.price ? this.price() : this.price
        }, this.setDiscount = function(discount) {
            this.discount = discount.bind(this)
        }, this.getDiscount = function() {
            return this.discount ? this.discount() : 0
        }
    },
    Action = function(id, data) {
        this.id = id, $.extend(this, data)
    },
    Calculator = function(channels, onChange) {
        this.onChange = onChange, this.packages = new Object, this.packnames = new Array, this.groups = new Array, this.prices = new Array, this.initialRights = 0, this.actions = [], this.advance = 1, Calculator.instance = this, setupCalculator.bind(this)(), $.each(this.packages, function(id, pack) {
            channels[id] && (pack.setCount(channels[id].b), pack.setPrice(channels[id].p))
        }), this.setPackages = function(packs, fixx) {
            if (packs) {
                if (0 == packs.length) return void this.changePackage(this.defaultPkg, !0);
                $.each(packs, function(idx, el) {
                    this.changePackage(el, !0)
                }.bind(this)), $.each(packs, function(idx, el) {
                    this.changePackage(el, !0)
                }.bind(this)), $.each(packs, function(idx, el) {
                    this.changePackage(el, !0)
                }.bind(this));
                var baseSelected = !1;
                this.groups.base && ($.each(this.groups.base.packages, function(idx, p) {
                    p.selected && (baseSelected = !0)
                }), baseSelected || this.changePackage("nobase", !0)), this.initialRights = this.getCurrentRights(), this.onChange(this)
            }
        }, this.setAdvance = function(advance) {
            this.advance = advance, this.onChange(this)
        }, this.getPackageCount = function() {
            var count = 0;
            return $.each(this.packages, function(idx, el) {
                el.selected && count++
            }), count
        }, this.getCount = function() {
            var count = {
                packs: 0,
                service: 0
            };
            return $.each(this.packages, function(idx, el) {
                el.selected && ("package" == el.type && count.packs++, "service" == el.type && count.service++)
            }), count
        }, this.changePackage = function(pack, state) {
            var p = this.packages[pack];
            if (p || (p = this.packnames[pack]), p) {
                if (!p.disabled) {
                    $.each(this.packages, function(idx, el) {
                        el.permanentOff ? el.setDisabled(!0) : el.setDisabled(!1)
                    }), p.setSelected(state);
                    var allwd = [];
                    $.each(this.packages, function(idx, el) {
                        el.selected && el.allowed && (allwd = allwd.concat(el.allowed))
                    }), $.each(allwd, function(idx, p) {
                        p.setDisabled(!1)
                    }), $.each(this.packages, function(idx, el) {
                        el.disabled && el.setSelected(!1)
                    }), $.each(this.packages, function(idx, el) {
                        el.selected && el.restricted && $.each(el.restricted, function(idx, p) {
                            p.setSelected(!1), p.setDisabled(!0, el.restrictedMessage)
                        })
                    })
                }
                state ? this.genre = p.genre : this.genre = null, this.afterPackageChange && this.afterPackageChange(), this.onChange(this, p, state)
            }
        }, this.toggleAction = function(code, state) {
            $.each(this.actions, function(idx, el) {
                el.id == code && el.toggle(!!state)
            }), this.onChange(this)
        }, this.getChannelCount = function() {
            var channels = new BitSet;
            return $.each(this.packages, function(id, el) {
                el.selected && el.getChannels() && (channels = channels.or(el.getChannels()))
            }), channels.cardinality()
        }, this.getPrice = function() {
            var collection = 0,
                price = 0;
            return $.each(this.packages, function(idx, el) {
                el.selected && (el.getPrice() ? price = price + el.getPrice() - el.getDiscount() : collection |= el.id)
            }), this.prices[collection] ? price + this.prices[collection] : ($.each(this.actions, function(idx, el) {
                el.isActive() && (price -= el.getDiscount())
            }), price)
        }, this.getDiscount = function() {
            var discount = 0;
            return $.each(this.packages, function(idx, el) {
                el.selected && el.getPrice() && (discount += el.getDiscount())
            }), $.each(this.actions, function(idx, el) {
                el.isActive() && (discount += el.getDiscount())
            }), discount
        }, this.getAdvancePayment = function() {
            var result = {
                payment: 0,
                discount: 0
            };
            return $.each(this.actions, function(idx, el) {
                el.isActive() && (el.getAdvancePayment && (result.payment += el.getAdvancePayment()), el.getAdvanceDiscount && (result.discount += el.getAdvanceDiscount()))
            }), result
        }, this.getCurrentRights = function() {
            var currentRights = 0;
            return $.each(this.packages, function(idx, el) {
                el.selected && (currentRights |= el.rights)
            }), currentRights
        }, this.changed = function() {
            this.onChange(this)
        }
    };
$(function() {
    var getNumeral = function(n, names) {
            return plural = n % 10 == 1 && n % 100 != 11 ? 0 : n % 10 >= 2 && n % 10 <= 4 && (n % 100 < 10 || n % 100 >= 20) ? 1 : 2, n + " " + names[plural]
        },
        advances = $("[data-calculator-advance]"),
        activeAdvance = advances.filter(".active"),
        packageData = JSON.parse($("[data-calculator-info]").attr("data-calculator-info")),
        advanceDisplay = $("[data-content=calculator-advance-month]"),
        price = $("[data-content=calculator-price]"),
        priceContainer = $(".js-calculator-price-container"),
        discounted = $("[data-content=calculator-discounted]"),
        discountedContainer = $(".js-calculator-discounted-container"),
        baseprice = $("[data-content=calculator-baseprice]"),
        basepriceContainer = $(".js-calculator-baseprice-container"),
        advance = $("[data-content=calculator-advance]"),
        advanceContainer = $(".js-calculator-advance-container"),
        advanceEconomy = ($("[data-content=calculator-after-advance]"), $(".js-calculator-after-advance-container"), $("[data-content=calculator-advance-economy]")),
        advanceEconomyContainer = $(".js-calculator-advance-economy-container"),
        priceContainers = $(".js-price-container"),
        calc = new Calculator(packageData, function(calc, changedPack, changedState) {
            $("[data-content=calculator-channels]").text(calc.getChannelCount()), $("[data-content=calculator-channels-num]").text(getNumeral(calc.getChannelCount(), ["канал", "канала", "каналов"]));
            var calcPrice = calc.getPrice(),
                discount = calc.getDiscount();
            price.text(Math.ceil(calcPrice));
            var count = calc.getCount(),
                countStr = "";
            if (count.packs > 0 && (countStr = getNumeral(calc.getCount().packs, ["пакет", "пакета", "пакетов"])), count.service > 0 && (countStr += ", " + getNumeral(calc.getCount().service, ["услуга", "услуги", "услуг"])), $("[data-content=calculator-packages]").text(countStr), $.each(calc.packages, function(i, p) {
                    var controls = $("[data-toggle-package=" + p.textName + "]");
                    p.selected ? controls.addClass("active").prop("checked", !0) : controls.removeClass("active").prop("checked", !1), p.disabled ? (controls.addClass("disabled"), controls.prop("disabled", !0), controls.attr("title", p.message)) : (controls.removeClass("disabled"), controls.prop("disabled", !1), controls.attr("title", ""))
                }), $("[data-package-price]").each(function(el) {
                    var pack = calc.packages[$(this).data("package-price")];
                    pack && $(this).text(Math.round(pack.getPrice() - pack.getDiscount()))
                }), priceContainers.filter(":not(.hidden)").addClass("hidden"), calc.advance > 1) {
                advanceDisplay.text(calc.advance), advanceContainer.removeClass("hidden"), advanceEconomyContainer.removeClass("hidden");
                var advancePayment = calc.getAdvancePayment();
                advance.text(advancePayment.payment + Math.round(calc.getPrice()) * calc.advance), advanceEconomy.text(advancePayment.discount)
            } else calc.getDiscount() > 0 ? (discountedContainer.removeClass("hidden"), basepriceContainer.removeClass("hidden"), discounted.text(Math.round(calcPrice)), baseprice.text(Math.round(calcPrice + discount))) : priceContainer.removeClass("hidden");
            $.each(calc.actions, function(idx, action) {
                $("[data-calculator-action=" + action.id + "]").prop("checked", action.isActive())
            }), activeAdvance.data("calculator-advance") != calc.advance && (activeAdvance.removeClass("active"), activeAdvance = advances.filter("[data-calculator-advance='" + calc.advance + "']"), activeAdvance.addClass("active")), $(window).trigger("calculator-change", calc)
        });
    if ($("[data-calculator-action]").click(function() {
            calc.toggleAction($(this).data("calculator-action"), this.checked)
        }), window.calculatorActions) {
        var actions = window.calculatorActions;
        if (actions.bonus) {
            var control = $("[data-bonus-activator]"),
                bonusActive = control.prop("checked");
            calc.bonusActive = bonusActive, control.on("change", function() {
                bonusActive = this.checked, calc.bonusActive = bonusActive, control.prop("checked", this.checked), calc.changed()
            }), $.each(actions.bonus, function() {
                var pack = calc.packages[this];
                if (pack) {
                    var before = pack.discount;
                    pack.discount = function() {
                        if (bonusActive) {
                            var price = pack.price - (before ? before() : 0);
                            return this.bonusDiscount = Math.floor(price / 2) + (before ? before() : 0), console.log(price, this.bonusDiscount), this.bonusDiscount
                        }
                        return this.bonusDiscount = 0, before ? before() : 0
                    }
                }
            }), $(window).on("calculator-change", function(evt, calc) {
                var overallBonus = 0;
                bonusActive && ($.each(calc.packages, function() {
                    this.selected && this.bonusDiscount && (overallBonus += this.bonusDiscount)
                }), $.each(calc.actions, function() {
                    this.isActive() && this.bonusDiscount && (overallBonus += this.bonusDiscount())
                })), 0 == overallBonus ? $("#bonus-container").hide() : ($("[data-content=calculator-bonus]").text(overallBonus), $("#bonus-container").show())
            })
        }
    }
    var pack = calc.packages.west_allvia;
    pack && (pack.price += calc.packages.west_viasat.getDiscount() + calc.packages.west_viasat_hd.getDiscount());
    var extPack = calc.packages.allstar;
    if (extPack) {
        var extPrice = extPack.getPrice(),
            initial = extPrice,
            starPackages = ["west_vipkino", "west_supersport", "west_children", "west_night", "west_music", "west_discovery", "west_entertainment", "east_night", "east_vipkino", "east_supersport", "east_children"];
        $.each(starPackages, function(idx, el) {
            var p = calc.packages[el];
            p && (extPrice += p.getDiscount())
        }), extPrice != initial && (extPrice -= 20), extPack.setPrice(extPrice)
    }
    calc.setPackages($.map($("[data-toggle-package]:checked"), function(el) {
        return $(el).data("toggle-package")
    }), !1), $("[data-toggle=package]").click(function() {
        return $(this).trigger("change"), !1
    }), $("[data-toggle-package]").on("click change", function() {
        var el = $(this),
            active = !1;
        el.is(":input") ? active = el.prop("checked") : (el.toggleClass("active"), active = el.hasClass("active")), calc.changePackage(el.attr("data-toggle-package"), active)
    }), advances.click(function(evt) {
        evt.preventDefault(), activeAdvance.eq(0) !== this && calc.setAdvance($(this).data("calculator-advance"));
    })
}), $(document).ready(function() {
    $(".main-banner").slick({
        autoplay: !0,
        autoplaySpeed: 5e3,
        fade: !0,
        prevArrow: '<span class="slick-arrow slick-prev"><i class="icon-left"></i></span>',
        nextArrow: '<span class="slick-arrow slick-next"><i class="icon-right"></i></span>'
    })
});