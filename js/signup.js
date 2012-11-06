(function() {
    $('input[name=usertype]').live('click',function() {
        var t = $(this);
        $('.info-wrapper').each(function(i,v) {
            var x = $(v);
            x.hide();
            if(x.attr('data') == t.val()) {
               x.show();
            }
        });
    });
    $('#register-form').live('submit',function() {
        // client side validation
        
        console.log($("#register-form").serializeObject());
        return false;
    });
})();