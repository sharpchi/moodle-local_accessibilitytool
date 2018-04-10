define(['jquery'], function($) {
    var stripstyles = {
        init: function() {
            $("span").each(function() {
                $(this).removeAttr("style");
            });
        }
    };

    return stripstyles;
});
