$(function(){
    $(".submitOnChange").on("change",function(){
        $(this).parents("form").ajaxSubmit();
    });

    $("form.ajax").on("submit",function () {
                $(this).ajaxSubmit();
                return false;
        });
    
    $("form.ajax :submit").on("click",function () {
            $(this).ajaxSubmit();
            return false;
    });
    
    // Hook on snippet updates
    $(document).on("netteUpdateSnippet", function(e){

      var snippet = $("#"+e.snippetId);
      
      // Re-init datepicker within updated snippet.
      $(".TCDatepickerDoB", snippet).datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        yearRange: '-60:-15'
      });

      $(".datepicker, .TCDatepicker", snippet).datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        yearRange: '-1:+3'
      });
      
    })

    // Init datepicker on page load.
    $(".TCDatepickerDoB").datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        yearRange: '-60:-15'
    });
    
    $(".datepicker, .TCDatepicker").datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        yearRange: '-1:+3'
    });
    
    // Ajaxize links.
    $("a.ajax").on("click", function(e){
        e.preventDefault();
        $.getJSON($(this).attr("href"), {}, jQuery.nette.success);
    })
    
    
	// Table Hover - All interactive tables require class of dynamic
	tableHover = $("table.dynamic");

	tableHover.delegate('tr','mouseover mouseleave', function(e) {
		if (e.type == 'mouseover') {
			$(this).addClass("hover");
		}
		else {
			$(this).removeClass("hover");
		}
	});
	
	// Dashboard Hover
	// dashboardHover = $(".dashInbox, .dashProfile");

	// dashboardHover.on('mouseover mouseleave', function(e) {
	// 	if (e.type == 'mouseover') {
	// 		$(this).addClass("hover");
	// 	}
	// 	else {
	// 		$(this).removeClass("hover");
	// 	}
	// });
	
	// Table + Dashboard click functions
	clickFunction = $("table.leagues tbody tr, table.champ tbody tr, .dashInbox, .dashProfile");
	
	clickFunction.on('click touchstart',function() {
		window.location=$(this).find("a").attr("href");
	return false;
	});
	
	// Fullscreen panels + Resize
    fullheightStuff = $(".homepage, .features");

    $(window).load(function(){ 
        $('.nav-bar').css({position: "absolute", top: $('.logo').outerHeight()});
    });

	$(window).resize(function() {
        // fullheightStuff.height($(window).height());
        fullheightStuff.outerHeight($(window).height());
        // fullheightStuff.outerHeight($(window).outerHeight(true));
        $('.nav-bar').css({position: "absolute", top: $('.logo').outerHeight()});
	});

	$(window).trigger('resize');	    
});