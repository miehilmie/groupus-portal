$('.test').on('click', function(e) {
    $('.test').trigger('faq')
    return false;
})
$('.test').on('initialize',function() {
    console.log('here');
});