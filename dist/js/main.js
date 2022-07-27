//wow
new WOW().init();

//scroll bg header
var $document = $(document),
    className = 'fixed';

$document.scroll(function () {
    if (window.innerWidth > 922) {
        if ($document.scrollTop() >= 100) {
            // user scrolled 50 pixels or more;
            // do stuff
            $('header').addClass(className);
        } else {
            $('header').removeClass(className);
        }
    }
});

//anchor
document.querySelectorAll('#navbarNav a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        $('#navbarNav').find('li').removeClass('active');
        $('.navbar-collapse').collapse('hide');
        $(document.querySelector(this.getAttribute('href'))).css('paddingTop', '0px')

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
            block: "start"
        });

        $(this).parent().addClass('active');
        if (document.querySelector(this.getAttribute('href')).id != 'inicio') {
            $(document.querySelector(this.getAttribute('href'))).css('paddingTop', '0px')
        }
    });
});

//back to top
if ($('#back-to-top, #home').length) {
    var scrollTrigger = 100, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top, #home').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}

//mask telefone
var behavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
    options = {
        onKeyPress: function (val, e, field, options) {
            field.mask(behavior.apply({}, arguments), options);
        }
    };

$('input[name=telefone]').mask(behavior, options);

var date = new Date();
var currentYear = date.getFullYear();
$('.current-year').text(currentYear);