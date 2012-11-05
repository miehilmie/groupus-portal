(function(){
    var a = {
        isItemClick: function(e) {
            return (a.active && a.active.has(e.target).length > 0);
        },
        isFlyoutClick: function(e) {
            return (a.active && $('#'+a.active.attr('data-target')).has(e.target).length > 0);
        },
        toggleDisplay: function(e) {
            if(a.isFlyoutClick(e))
                return;

            if(a.isItemClick(e)) {
                a.closeDropdown();
            }
            else {
                a.closeDropdown();
                a.active = $(this), a.active.parent().addClass("open")
            }
        },
        closeDropdown: function() {
            a.toggler.parent().removeClass("open"), a.active = false;
        }
        ,
        close: function(e) {
            if(a.isFlyoutClick(e) || a.toggler.has(e.target).length > 0)
                return;

            a.closeDropdown();
        },
        init: function() {
            a.toggler = $(".toggler");
            $("html").live("keydown", function(c) {
                c.which == 27 && a.close(c);
            }),            
            a.toggler.live("click", a.toggleDisplay),
            $(document).live("click", a.close);
        }
    }
    $(document).ready(function() {
        a.init();
    });
})();
