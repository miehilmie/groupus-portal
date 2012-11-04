var a = {
    isItemClick: function(ac, e) {
        return ($(ac).has(e.target).length > 0);
    },
    toggleDisplay: function(e) {
        a.active ? (isItemClick(a.active, e) ? '' : '') : $(this).addClass("open"), a.active = this;
    },
    closeDropdown: function() {
        a.toggler.removeClass("open"), a.active = false;
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