"use strict";

// Menu toggle
$('.menu_toggle').on('click', function() {
    $('body').toggleClass('offcanvas-active');
});

// User Menu
$('.user_btn').on('click', function() {
    $('.user_div').toggleClass('open');
});

// Menu Option
$('.menu_option').on('click', function() {
    $('.metismenu').toggleClass('grid');
    $('.menu_option').toggleClass('active');
});

$('.page').on('click', function() {
    $('.user_div').removeClass('open');
});

// Constant div card
const DIV_CARD = 'div.card';

// Function for remove card
$('[data-toggle="card-remove"]').on('click', function(e) {
    let $card = $(this).closest(DIV_CARD);
    $card.remove();
    e.preventDefault();
    return false;
});

// Function for collapse card
$('[data-toggle="card-collapse"]').on('click', function(e) {
    let $card = $(this).closest(DIV_CARD);
    $card.toggleClass('card-collapsed');
    e.preventDefault();
    return false;
});

$(window).bind("resize", function () {
    if ($(this).width() < 1201) {
        $('.horizontal').removeClass('h_menu')
    } else {
        $('.horizontal').addClass('h_menu')
    }
}).trigger('resize');

// sidebar navigation
$('.sidebar-nav').metisMenu();
