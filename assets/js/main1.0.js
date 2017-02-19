jQuery(document).ready(function($) {

    // Trasforma i link esterni in link a finestre modal con disclaimer.
    // Il valore di HREF viene trasferito sul pulsante interno del modal stesso
    var host = window.location.host;
    // This is an external link
    $('a:not([href^="http://' + host +'"]):not([href^="https://' + host +'"]):not([href^="mailto"]):not([href^="#"]):not([href^="Javascript:void(0);"]):not([href^="/"]):not([href^="./"]):not([id*="pd-vote"])').each(function(){
        iewl_rewrite_link($(this));
    });

    function iewl_rewrite_link(linkItem) {
        linkItem.addClass('external');
        var url = linkItem.attr('href');
        linkItem.attr('data-url',url);
        linkItem.attr('href','#ext');
        linkItem.attr('data-toggle','modal');
        linkItem.attr('data-target','#warningModalExternalLink');
        linkItem.click(function(){
            iewl_click($(this));
        });
    }

    function iewl_click(linkItem) {
        var externalUrl = linkItem.attr('data-url'); 
        $('a#warningHref').attr('href',externalUrl);
    }

    $('.go-external-link').click(function(e) {
        setTimeout(function() {
            $('#warningModalExternalLink').modal('hide');
        }, 1000);

    });

});

