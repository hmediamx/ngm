$(document).ready(function() {

	      
	$('#toggle-menu').on('click', function() {
		$("#menu-principal").slideToggle();
	});

	$( "#toggle-menu2" ).click(function() {
	  $( ".menu-general" ).animate({
	    right: "0px"
	  }, 700, function() {
	    // Animation complete.
	  });
	});

	$( ".cerrar" ).click(function() {
	  $( ".menu-general" ).animate({
	    right: "-350px"
	  }, 500, function() {
	    // Animation complete.
	  });
	});



	$('.areas-item > a').on('click', function(e) {
		e.preventDefault();
		var enlace = $(this).attr('href');

		$('.areas').fadeTo("fast", 0.0).hide(function() {
			$(enlace).fadeTo("fast", 1);
		});
	});

	$( ".cerrar-ficha" ).click(function() {
		$(this).parent().parent().fadeTo("fast", 0.0, function() {
			$(this).hide();
			$('.areas').fadeTo("fast", 1);
		});
	});

	$('.directory-item > a').on('click', function(e) {
		e.preventDefault();
		var enlace = $(this).attr('href');

		$('.directory').fadeTo("fast", 0.0).hide(function() {
			$(enlace).fadeTo("fast", 1);
		});
	});

	$( ".cerrar-ficha" ).click(function() {
		$(this).parent().parent().fadeTo("fast", 0.0, function() {
			$(this).hide();
			$('.directory').fadeTo("fast", 1);
		});
	});





	$('.tiene-submenu > a').on('click', function(e) {
		e.preventDefault();
		$(this).next().stop().slideToggle();
	});


	$('.tiene-submenu').on('mouseover', function() {
		if (  $(window).width()  > 1024 ) {
			$(this).find(".submenu").stop().show('fast');
		}
	}).on('mouseleave', function() {
		if (  $(window).width()  > 1024 ) {
			$(this).find(".submenu").stop().hide('fast');
		}
	});





	$('.galeria img').on('hover', function() {
		$(this).css("opacity", 0.5);
	});

	$('.galeria img').on('mouseleave', function() {
		$(this).css("opacity", 1);
	});




	$(".galeria .foto").hover(
		function () {
		$(this).find('.lupa').stop(true, true).animate({ top : "0px" }, 300);
		$(this).find('.mifoto').stop(true, true).animate({ width : "200px", opacity : 0.7, top: "-25px", left : "-25px" }, 300);
		}, 
		function () {
		$(this).find('.lupa').stop(true, true).animate({ top : "150px" }, 300);
		$(this).find('.mifoto').stop(true, true).animate({ width : "150px", opacity : 1, top: "0px", left : "0px" }, 300);
		}
	);


	$(".enlacecontacto").click(function(event) {
		event.preventDefault();

		console.log("Me encontraste");
		$("html, body").animate({ scrollTop: $('body').height() }, 1000);
	});

});