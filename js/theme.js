jQuery(function($) {

    "use strict";

    var config = $('html').data('config') || {},
        preloader = $('.tm-preload');

    // add modal data attribute
    $(".tm-modal-link").attr("data-uk-modal", "{center:true}");

    // initialize plyr
    plyr.setup();

    // Fix offcanvas top links
    $(".uk-nav-offcanvas > li.uk-parent").append("<a class=\"tm-toggle-offcanvas uk-display-block uk-float-right\" href='#'></a>").removeClass("uk-open");

    // smooth scroll for one page  
    $('.uk-navbar-nav').each(function(i, element) {
        var obj = new $.UIkit["scrollspynav"](element, {smoothscroll: {closest: 'li', offset: 100}});  
    });

    // clear form
    $.fn.clearForm = function() {
      return this.each(function() {
        var type = this.type, tag = this.tagName.toLowerCase();
        if (tag == 'form')
          return $(':input',this).clearForm();
        if (type == 'text' || type == 'password' || type == 'email' || tag == 'textarea')
          this.value = '';
        else if (type == 'checkbox' || type == 'radio')
          this.checked = false;
        else if (tag == 'select')
          this.selectedIndex = -1;
      });
    };

    // booking form
    $("#booking_submit").on( "click", function(event) {
        event.preventDefault();
        var mydata = $("form").serialize();
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "php/booking.php",
            data: mydata,
            success: function(data) {

            if( data["type"] == "error" ){
                $("#alert-msg-booking").html(data["msg"]);
                $("#alert-msg-booking").removeClass("uk-alert uk-alert-success");
                $("#alert-msg-booking").addClass("uk-alert uk-alert-danger");
                $("#alert-msg-booking").show();
                } else {
                    $("#alert-msg-booking").html(data["msg"]);
                    $("#alert-msg-booking").removeClass("uk-alert uk-alert-danger");
                    $("#alert-msg-booking").addClass("uk-alert uk-alert-success");
                    $("#alert-msg-booking").show();

                    $("#booking_form").clearForm();
                }    
            },
            error: function(xhr, textStatus, errorThrown) {
            }
        });
        return false;
    }); 

    // contact form
    $("#Submitbtn").on( "click", function(event) {
        event.preventDefault();
        var mydata = $("form").serialize();
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "php/contact.php",
            data: mydata,
            success: function(data) {

            if( data["type"] == "error" ){
                $("#alert-msg-contact").html(data["msg"]);
                $("#alert-msg-contact").removeClass("uk-alert uk-alert-success");
                $("#alert-msg-contact").addClass("uk-alert uk-alert-danger");
                $("#alert-msg-contact").show();
                } else {
                    $("#alert-msg-contact").html(data["msg"]);
                    $("#alert-msg-contact").removeClass("uk-alert uk-alert-danger");
                    $("#alert-msg-contact").addClass("uk-alert uk-alert-success");
                    $("#alert-msg-contact").show();

                    $("#contact_form").clearForm();
                }    
            },
            error: function(xhr, textStatus, errorThrown) {
            }
        });
        return false;
    });    

    // newsletter form
    $("#subscribe_button").on( "click", function(event) {
        event.preventDefault();
        var mydata = $("form").serialize();
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "php/newsletter.php",
            data: mydata,
            success: function(data) {

            if( data["type"] == "error" ){
                $("#alert-msg-subscribe").html(data["msg"]);
                $("#alert-msg-subscribe").removeClass("uk-alert uk-alert-success");
                $("#alert-msg-subscribe").addClass("uk-alert uk-alert-danger");
                $("#alert-msg-subscribe").show();
                } else {
                    $("#alert-msg-subscribe").html(data["msg"]);
                    $("#alert-msg-subscribe").removeClass("uk-alert uk-alert-danger");
                    $("#alert-msg-subscribe").addClass("uk-alert uk-alert-success");
                    $("#alert-msg-subscribe").show();

                    $("#contact_form").clearForm();
                }    
            },
            error: function(xhr, textStatus, errorThrown) {
            }
        });
        return false;
    });

   // Dropdown flip
    $(document).ready(function(){var i=$(window).width();$(".tm-navbar").find("li.uk-parent > ul").each(function(t){var n=$(this).offset(),d=n.left+$(this).width();d>=i&&$(this).addClass("uk-dropdown-flip")})}),$(window).resize(function(){var i=$(window).width();$(".tm-navbar").find("li.uk-parent > ul").removeClass("uk-dropdown-flip"),$(".tm-navbar").find("li.uk-parent > ul").each(function(t){var n=$(this).offset(),d=n.left+$(this).width();d>=i&&$(this).addClass("uk-dropdown-flip")})});

    // preloader
    $(window).on("load",function(){preloader.removeClass('loading').fadeOut(500,function(){})}),$(window).on("beforeunload",function(){preloader.addClass('loading').fadeIn(300,function(){})});

});