(function ($) {

    var o = $({});

    $.subscribe = function () {
        o.on.apply(o, arguments);
    };

    $.unsubscribe = function () {
        o.off.apply(0, arguments);
    };

    $.publish = function () {
        o.trigger.apply(0, arguments);
    };
})(jQuery);