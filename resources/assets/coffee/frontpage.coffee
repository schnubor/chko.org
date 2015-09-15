# General
winHeight = $(window).height()

# Mobile Nav
$('.js-toggleNav').click ->
    $('#mobile-nav').fadeIn()
    $(this).fadeOut()

$('.js-closeNav').click ->
    $('#mobile-nav').fadeOut()
    $('.js-toggleNav').fadeIn()

# Arrow
$('.js-arrow').click ->
    $("html, body").animate
        scrollTop: winHeight
    , 1500, 'easeInOutQuad'

# Navigation
$(window).scroll ->
    if($(window).scrollTop() > winHeight-1)
        # show nav
        $('nav').fadeIn()
        # change background color of mobile nav
        $('.mobile-nav-toggle').find('.bar').css('background-color', 'white')
    else
        $('nav').fadeOut()
        $('.mobile-nav-toggle').find('.bar').css('background-color', '#777777')
