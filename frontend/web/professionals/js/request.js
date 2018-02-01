var init = function () {
    var options = {
        responseWrapper: '.response-message',
        onSuccess: function (target, data) {
            var $message = $(target).find(options.responseWrapper);
            $message
                .removeClass('success')
                .removeClass('error');
            $message.slideDown();
            if (data.status === true) {
                yaCounter47355075.reachGoal('OrderDone');
                $message.addClass('success');
            } else {
                $message.addClass('error');
            }
            $message.html(data.message);
            setTimeout(function () {
                $message.slideUp();
            }, 5000);
        }
    };
    $('.request-form').ajaxOrder(options);
};
$(document).ready(init);