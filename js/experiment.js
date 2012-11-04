var a = {
    isItemClick: function(e) {
        return $(this).hasClass("open").length > 0;
    },
    toggleDisplay: function(e) {
        $(this).toggleClass("open"), console(a.isItemClick(e));
    },
    closeDropdown: function() {
        a.toggler.removeClass("open")
    }
    ,
    close: function(e) {
        if(a.toggler.has(e.target).length > 0)
            return;

        a.closeDropdown();
    },
    init: function() {
        a.toggler = $(".toggler");
        $("html").live("keydown", function(c) {
            c.which == 27 && a.closeDropdown();;
        }),            
        a.toggler.live("click", a.toggleDisplay),
        $(document).live("click", a.close);
    }
}

$(document).ready(function() {
    a.init();
});