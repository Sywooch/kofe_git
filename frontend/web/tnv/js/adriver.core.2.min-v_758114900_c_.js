function adriver(ph, prm, defer) {
    var my = this,
        p = ph;
    return this instanceof adriver ? ("string" == typeof p ? p = document.getElementById(ph) : ph = p.id, p ? adriver(ph) ? adriver(ph) : (my.p = p, my.defer = defer, my.prm = adriver.extend(prm, {
        ph: ph
    }), my.loadCompleteQueue = new adriver.queue, my.domReadyQueue = new adriver.queue(adriver.isDomReady), adriver.initQueue.push(function() {
        my.init()
    }), adriver.items[ph] = my) : (adriver.isDomReady || adriver.onDomReady(function() {
        new adriver(ph, prm, defer)
    }), null)) : ph ? adriver.items[ph] : adriver.items
}
adriver.prototype = {
    isLoading: 0,
    init: function() {},
    loadComplete: function() {},
    domReady: function() {},
    onLoadComplete: function(f) {
        var my = this;
        return my.loadCompleteQueue.push(function() {
            f.call(my)
        }), my
    },
    onDomReady: function(f) {
        return this.domReadyQueue.push(f), this
    },
    reset: function() {
        return this.loadCompleteQueue.flush(), this.domReadyQueue.flush(adriver.isDomReady), this
    }
}, adriver.extend = function() {
    for (var r, j, l = arguments[0], i = 1, len = arguments.length; i < len; i++) {
        r = arguments[i];
        for (j in r) r.hasOwnProperty(j) && (r[j] instanceof Function ? l[j] = r[j] : r[j] instanceof Object ? l[j] ? adriver.extend(l[j], r[j]) : l[j] = adriver.extend(r[j] instanceof Array ? [] : {}, r[j]) : l[j] = r[j])
    }
    return l
}, adriver.extend(adriver, {
    version: "2.3.6",
    defaults: {
        tail256: escape(document.referrer || "unknown")
    },
    items: {},
    options: {},
    plugins: {},
    pluginPath: {},
    redirectHost: "//ad.adriver.ru",
    defaultMirror: "//content.adriver.ru",
    loadScript: function(req) {
        try {
            var head = document.getElementsByTagName("head")[0],
                s = document.createElement("script");
            s.setAttribute("type", "text/javascript"), s.setAttribute("charset", "windows-1251"), s.setAttribute("src", req.split("![rnd]").join(Math.round(9999999 * Math.random()))), s.onreadystatechange = function() {
                /loaded|complete/.test(this.readyState) && head.removeChild(s)
            }, s.onload = function() {
                head.removeChild(s)
            }, head.insertBefore(s, head.firstChild)
        } catch (e) {}
    },
    isDomReady: !1,
    onDomReady: function(f) {
        adriver.domReadyQueue.push(f)
    },
    onBeforeDomReady: function(f) {
        adriver.domReadyQueue.unshift(f)
    },
    domReady: function() {
        adriver.isDomReady = !0, adriver.domReadyQueue.execute()
    },
    checkDomReady: function(f) {
        try {
            var d = document;
            window.onload;
            if (/WebKit/i.test(navigator.userAgent)) ! function() {
                /loaded|complete/.test(d.readyState) ? f() : setTimeout(arguments.callee, 100)
            }();
            else if (d.addEventListener) d.addEventListener("DOMContentLoaded", f, !1);
            else if (document.attachEvent) {
                var doScrollCheck = function() {
                        if (!adriver.isDomReady) {
                            try {
                                document.documentElement.doScroll("left")
                            } catch (e) {
                                return void setTimeout(doScrollCheck, 1)
                            }
                            f()
                        }
                    },
                    DOMContentLoaded = function() {
                        "complete" === document.readyState && (document.detachEvent("onreadystatechange", DOMContentLoaded), f())
                    };
                document.attachEvent("onreadystatechange", DOMContentLoaded), window.attachEvent("onload", function() {
                    adriver.isDomReady || f()
                });
                try {
                    toplevel = null == window.frameElement
                } catch (e) {}
                document.documentElement.doScroll && toplevel && doScrollCheck()
            }
        } catch (e) {}
    },
    onLoadComplete: function(f) {
        return adriver.loadCompleteQueue.push(f), adriver
    },
    loadComplete: function() {
        return adriver.loadCompleteQueue.execute(), adriver
    },
    setDefaults: function(o) {
        adriver.extend(adriver.defaults, o)
    },
    setOptions: function(o) {
        adriver.extend(adriver.options, o)
    },
    setPluginPath: function(o) {
        adriver.extend(adriver.pluginPath, o)
    },
    queue: function(flag) {
        this.q = [], this.flag = !!flag
    },
    Plugin: function(id) {
        return this instanceof adriver.Plugin && id && !adriver.plugins[id] && (this.id = id, this.q = new adriver.queue, adriver.plugins[id] = this), adriver.plugins[id]
    }
}), adriver.sync = function(pair, N) {
    if (!adriver.syncFlag) {
        adriver.syncFlag = 1;
        for (var ar_duo = []; N--;) ar_duo[N] = N + 1;
        ar_duo.sort(function() {
            return .5 - Math.random()
        }), adriver.synchArray = ar_duo
    }
    return adriver.synchArray[(!pair || pair <= 0 ? 1 : pair) - 1]
}, adriver.queue.prototype = {
    push: function(f) {
        this.flag ? f() : this.q.push(f)
    },
    unshift: function(f) {
        this.flag ? f() : this.q.unshift(f)
    },
    execute: function(flag) {
        for (var f, undefined; f = this.q.shift();) f();
        flag == undefined && (flag = !0), this.flag = !!flag
    },
    flush: function(flag) {
        this.q.length = 0, this.flag = !!flag
    }
}, adriver.Plugin.prototype = {
    loadingStatus: 0,
    load: function() {
        this.loadingStatus = 1, adriver.loadScript((adriver.pluginPath[this.id.split(".").pop()] || adriver.defaultMirror + "/plugins/") + this.id + ".js")
    },
    loadComplete: function() {
        return this.loadingStatus = 2, this.q.execute(), this
    },
    onLoadComplete: function(f) {
        return this.q.push(f), this
    }
}, adriver.Plugin.require = function() {
    var my = this,
        counter = 0;
    my.q = new adriver.queue;
    for (var p, i = 0, len = arguments.length; i < len; i++) p = new adriver.Plugin(arguments[i]), 2 != p.loadingStatus && (counter++, p.onLoadComplete(function() {
        1 == counter-- && my.q.execute()
    }), p.loadingStatus || p.load());
    counter || my.q.execute()
}, adriver.Plugin.require.prototype.onLoadComplete = function(f) {
    return this.q.push(f), this
}, adriver.domReadyQueue = new adriver.queue, adriver.loadCompleteQueue = new adriver.queue, adriver.initQueue = new adriver.queue, adriver.checkDomReady(adriver.domReady), new adriver.Plugin.require("autoUpdate.adriver").onLoadComplete(function() {
    adriver.initQueue.execute()
});