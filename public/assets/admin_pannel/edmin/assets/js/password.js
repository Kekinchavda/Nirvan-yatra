$('.show-hide').show();
$('.show-hide span').addClass('show');

$('.show-hide span').on('click', function () {
    if ($(this).hasClass('show')) {
        $('input[name="password"]').attr('type', 'text');
        $(this).removeClass('show');
    } else {
        $('input[name="password"]').attr('type', 'password');
        $(this).addClass('show');
    }
});
$('form button[type="submit"]').on('click', function () {
    $('.show-hide span').addClass('show');
    $('.show-hide').parent().find('input[name="password"]').attr('type', 'password');
});