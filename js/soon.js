$(document).ready(function () {
    setHeights();
});

$(window).resize(function () {
    setHeights();
});

function loading() {
    $("#loading").fadeIn('slow');
    setTimeout('loadingVisible()', 1000);
}

function loadingVisible() {
    $("#loading").fadeOut('slow');
}

function setHeights() {
    var windowH = $(window).height() / 2;

    var areaH = ($('.container').height()) / 2;
    var differentH = windowH - areaH;

    $('.container').css("margin-top", differentH);
}