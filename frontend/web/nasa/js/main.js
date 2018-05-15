$(document).ready(function () {    
    if ($(".promo").length) {
        var c, d, f = $(".e-c-progress"),
                h = $("#e-pointer"),
                p = 2 * Math.PI * 100,
                s = (new Date).setHours(0, 0, 0),
                g = (new Date).setHours(24, 0, 0),
                m = Math.round((g - s) / 1e3);
        f.css("stroke-dasharray", p);
        var v = $(".promo__countdown-time .value");
        c = setInterval(function () {
            if ((d = Math.round((g - Date.now()) / 1e3)) < 0)
                return clearInterval(c), void(isStarted = !1);
            var e, t, n, i, r, o, s, a;
            e = d, t = Math.floor(e / 3600), n = Math.floor(e % 3600 / 60), r = (t < 10 ? "0" : "") + t + ":" + (n < 10 ? "0" : "") + n + ":" + ((i = e % 60) < 10 ? "0" : "") + i, v.html(r), a = p - p * (o = e) / (s = m), f.css("stroke-dashoffset", -a), h.css("transform", "rotate(" + (360 - 360 * o / s) + "deg)")
        }, 1e3)
    }
});