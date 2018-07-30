var init = function () {
    var options = {
            onSuccess: function (target, data) {
                if (data.status === true) {
                    yaCounter46490361.reachGoal('OrderDone');
                    yaCounter46490361.reachGoal('order');
                    ga('send', 'event', 'button', 'OrderDone');
                }
                alert(data.message);
            }
        };
    $('.request-form').ajaxOrder(options);
};
$(document).ready(init);