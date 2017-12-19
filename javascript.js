// Nav bar

$("#scrollprofil").click(function() {
    $('html, body').animate({
        scrollTop: $("#pagetwoid").offset().top
    }, 1000);
});
$("#scrollgalleri").click(function() {
    $('html, body').animate({
        scrollTop: $("#pagethreeid").offset().top
    }, 1000);
});
$("#scrollkontakt").click(function() {
    $('html, body').animate({
        scrollTop: $("#pagefourid").offset().top
    }, 1000);
});
$("#scrolltopbtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#totopid").offset().top
    }, 1000);
});

// Scroll Buttons

$("#pagetwobtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#pagetwoid").offset().top
    }, 1000);
});
$("#pagethreebtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#pagethreeid").offset().top
    }, 1000);
});
$("#pagefourbtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#pagefourid").offset().top
    }, 1000);
});