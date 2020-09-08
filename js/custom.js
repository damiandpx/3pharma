		Modernizr.on('webp', function(result) {
		  if (result) {
		    $(".bg-t .bgs").addClass("webp");
		  } else {
		  	$(".bg-t .bgs").addClass("no-webp");
		  }
		  if (result) {
		    $(".bg-t2").addClass("webp");
		  } else {
		  	$(".bg-t2").addClass("no-webp");
		  }
		});

		var h_cell = $(".h_ce").height();
		$(".flickity-viewport").css('height', h_cell);

		
		function sizeSlider() {
			var altura = $( window ).height();
			$(".c-home").css('height', altura);
		}
		$(window).resize(function() {
			sizeSlider()
		});
		sizeSlider();
		var alt_menu = $("#menu").height();
		var coor1 = $("#pagina").offset();
		coor1= coor1.top - alt_menu;
		
	
		    
		    $('a[href*="#"]')
			.not('[href="#"]')
			.not('[href="#0"]')
			.click(function(event) {
			    if (
			      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
			      && 
			      location.hostname == this.hostname
			    ) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			      if (target.length) {
			        event.preventDefault();
			        $('html, body').animate({
			          scrollTop: (target.offset().top - alt_menu)
			        }, 1000, function() {
			          var $target = $(target);
			          $target.focus();
			          if ($target.is(":focus")) { 
			          	return false;
			          } else {
			            $target.attr('tabindex','-1'); 
			            $target.focus();
			          };
			        });
			      }
			    }
			});
	  

		$(window).scroll(function(){
			var windowHeight = $(window).scrollTop();
			if(windowHeight > coor1){
				$("#menu").removeClass('bg-menu');
				$("#menu").addClass('bg-dark');
			}else{
				$("#menu").addClass('bg-menu');
				$("#menu").removeClass('bg-dark');
			}
		});
		$('#telefono').on('input', function () {
			this.value = this.value.replace(/[^0-9]/g,'');
		});
		$(".btn_send").click(function(event) {
			var nombre = $('#nombre').val();
			var email = $('#email').val();
			var mensaje = $('#mensaje').val();
			var telefono = $('#telefono').val();
				
			validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
				
			if(nombre.length == 0){
				$('#nombre').addClass('is-invalid');
				return false;
			}else{
				$('#nombre').removeClass('is-invalid');
				$('#nombre').addClass('is-valid');
			}
			if(telefono.length < 10){
				$('#telefono').addClass('is-invalid');
				return false;
			}else{
				$('#telefono').removeClass('is-invalid');
				$('#telefono').addClass('is-valid');
			}
			if(email.length == 0 || !validacion_email.test(email)){
				$('#email').addClass('is-invalid');
				return false;
			}else{
				$('#email').removeClass('is-invalid');
				$('#email').addClass('is-valid');
			}
			if(mensaje.length == 0){
				$('#mensaje').addClass('is-invalid');
				return false;
			} else{
				$('#mensaje').removeClass('is-invalid');
				$('#mensaje').addClass('is-valid');
			}
			if(nombre.length > 0 && email.length > 0 && mensaje.length > 0){
				var datos = 'nombre='+ nombre + '&email=' + email + '&mensaje=' + mensaje + '&telefono=' + telefono;
				$.ajax({
					type: "POST",
					url: "json/send.php",
					data: datos,
					success: function(datos) {
					console.log(datos);
					if(datos==1){
						$('#nombre').val("");
						$('#email').val("");
						$('#telefono').val("");
						$('#mensaje').val("");
						alert("Mensaje enviado con Exito");
					}
				},
				error: function() {
					alert("Mensaje ha fallado");
				}
			});
			}
		});
	function active() {
		 var current = document.location.href.match(/[^\/]+$/)[0];
		 switch(current) {
			case "index.php":			
				$( ".index" ).addClass('active');
			break;
			
			case "unete.php":
				$( ".unete" ).addClass('active');
			break;

			default:

		    break;
		}
	}
	active();