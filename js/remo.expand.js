$(document).ready(function () {
    transferPaddings();
    hideClosedBoxes();
    setContentHeights();
    setClickEvents();
});

function transferPaddings() {
    $('.ccm-remo-expand').each(function () {
        var content = $(this).find('.ccm-remo-expand-content');
        var paddingWrapper = $(this).find('.ccm-remo-expand-content-padding-wrapper');
        var paddingLeft = content.css('padding-left');
        var paddingRight = content.css('padding-right');
        var paddingBottom = content.css('padding-bottom');
        var paddingTop = content.css('padding-top');
        content.css('padding', 0);
        paddingWrapper.css({
            'padding-left': paddingLeft,
            'padding-right': paddingRight,
            'padding-top': paddingTop,
            'padding-bottom': paddingBottom
        });
    });
}

function hideClosedBoxes() {
    $('.ccm-remo-expand-closed').siblings('.ccm-remo-expand-content-padding-wrapper').find('.ccm-remo-expand-content').hide();
}

function setContentHeights() {
    $(".ccm-remo-expand-content").each(function (e, v) {
        $(this).css("height", $(this).height());
    });
}

function setClickEvents() {
    $(".ccm-remo-expand-title").click(function(event) {
        event.preventDefault();
        var id = $(this).attr("id");
        if ($(this).hasClass("ccm-remo-expand-open")) {
            $(this).removeClass("ccm-remo-expand-open");
            $(this).addClass("ccm-remo-expand-closed");
        }
        else {
            $(this).removeClass("ccm-remo-expand-closed");
            $(this).addClass("ccm-remo-expand-open");
        }
        var contentId = id.replace(/ccm-remo-expand-title-/, "ccm-remo-expand-content-");
        $("#" + contentId).slideToggle(parseInt($(this).attr("data-expander-speed")));

    });
}