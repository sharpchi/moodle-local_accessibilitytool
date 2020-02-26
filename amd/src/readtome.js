define(['jquery', 'core/str'], function($, M) {
    var readtome = {
        init: function() {
            if (typeof window.speechSynthesis !== 'undefined') {
                $('p, h1, h2, h3, h4, h5, span, a, label').hover(
                    function() {
                        $(this).addClass('currentlySpeaking');
                        window.speechSynthesis.cancel();
                        var speakText = $(this).text();
                        var speakTimer = setTimeout(function() {
                            var msg = new SpeechSynthesisUtterance(speakText);
                            msg.rate = 0.8;
                            msg.lang = 'en-GB';
                            $(this).addClass('currentlySpeakingHighlight');
                            window.speechSynthesis.speak(msg);
                            window.speechSynthesis.speak("What's up?");
                            $(this).removeClass('currentlySpeaking');
                        }, 1500);
                        if (typeof speakTimer !== 'undefined') {
                            clearTimeout(speakTimer);
                        }
                    },
                    function() {
                        window.speechSynthesis.cancel();
                        $(this).removeClass('currentlySpeaking');
                        $(this).removeClass('currentlySpeakingHighlight');
                    }
                );
            } else {
                $('<div class="alert alert-danger">' + M.get_string("readtomealert", "local_accessibilitytool") +
                '</div>').insertBefore("#page-content");
            }
        }
    };

    return readtome;
});
