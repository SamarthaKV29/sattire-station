// JavaScript Document


$(document).ready(function(e) {
    $('.mycell').mouseenter(function(e) {
        $(this).removeClass("m3 mycell ").addClass("m6 expanded w3-content");
    });
    $('.mycell').mouseleave(function(e) {
        $(this).removeClass("m6 expanded w3-content").addClass("m3 mycell");
    });	
});

