//change the current window shown by toggling the active class
$('.main-menu a').on('click', function() {
    // cat bo ki tu dau tien cua id lay duoc
    // ex: bef: #about-me --> after: about-me
    var activeClass = $(this).attr('href').substring(1);

    setTimeout(function() {
        // xoa bo trang thai active cua lop so tai
        $('.content.active').removeClass('active');

        // noi chuoi cua lop moi sau do them lop active vao sau(kich hoat thuoc tinh 
        //display block cua lop moi lam an lop cu di(sudoclass))
        $('.' + activeClass).addClass('active');

        $('html, body').animate({
            scrollTop: $($('.' + activeClass)).offset().top
        }, 500);
    }, 300);

    if (activeClass === 'portfolio') {
        setTimeout(function() {
            $('.filter-controls li')[0].click();
        }, 300);
    }
})

// this code will help you pin your page which is being.
// when you reload page, it still there(nothing gona change to another page)
// hieu roi chu a
var type = window.location.hash.substr(1);

if (type) {

    $('.content.active').removeClass('active');

    $('.' + type).addClass('active');
}

// add active class to the current portfolio selected
$('.filter-controls li').on('click', function() {

    if (!$(this).hasClass('active')) {

        $('.filter-controls li.active').removeClass('active');

        $(this).addClass('active');
    }

});

///filterizr
var options = {};

var filterizr = new Filterizr('.filter-container', options);
// create blur popup image and use button close in oder to quit from it!!! :)))
$('.popup-link').magnificPopup({
    type: 'image'
});