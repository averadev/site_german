var serviciosextra = function (){
	var bindEvents = function(){
		$( "#topbar li:eq(2)").addClass('active');
		$('.tabs-menu').animate({scrollLeft: $('.tabs-menu li a.active').position().left});
		//$('.button-collapse').sideNav();
		$('.parallax').parallax();
		$("#monumental").click(function(event) {
			window.location.href=HOST+"/servicios/monumental";
		});
		$("#personalizadas").click(function(event) {
			window.location.href=HOST+"/servicios/personalizadas";
		});
		$(".appointment").click(function(event) {
			$.smoothScroll({
				scrollTarget: $('#divform'),
				speed: 1500,
			});
		});
		$('.datepicker').pickadate({
			weekdaysLetter: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
			monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],
			format: 'dd/mm/yyyy',
			today: false,
			clear: false,
			close: 'Aceptar',
		});
		$("#sendAppt").click(function(event) {
			var validForm = $("#form_appt").valid();
			var formData = $("#form_appt").serialize();
			if(validForm){
				sendDataFormInt(formData);
			}
		});		
	} /*end BindEvents*/

	var sendDataFormInt = function(formData){
		$("#sendAppt").addClass('hide');
		$("#progressdiv").removeClass('hide');
		$.ajax({
			url: HOST+'/servicios/sendmail',
			type:'POST',
			dataType: 'json',
			data:formData,
		})
		.done(function(data) {
			if (data.success == true) {
				$("#titleModalMsg").html("¡Mensaje Enviado!");
				$("#showmsgModal").html(data.msg);
				$("#form_appt")[0].reset();
				$('#msgModal').modal('open');
			} 
		})
		.always(function() {
			$("#sendAppt").removeClass('hide');
			$("#progressdiv").addClass('hide');
		});	
	}


	$("#form_appt").validate({
		rules: {
			name: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			company: {
				required: true
			},
			date: {
				required: true
			},			
			comment: {
				required: true
			}
		},
		messages: {
			name: {
				required: "Campo requerido"
			},
			email: {
				required: "Campo requerido",
				email: "Ingresa un correo válido"
			},
			company: {
				required: "Campo requerido"
			},			
			date: {
				required: "Campo requerido"
			},
			comment: {
				required: "Campo requerido"
			}
		},
		submitHandler: function(form) {
			form.submit();
		}
	});


	var onloadExec = function(){
		bindEvents();
		$('#msgModal').modal({
			dismissible: true, // Modal can be dismissed by clicking outside of the modal
			opacity: 0.5, // Opacity of modal background
			inDuration: 1000, // Transition in duration
			outDuration: 1000, // Transition out duration
			starting_top: '4%', // Starting top style attribute
			ending_top: '25%', // Ending top style attribute
		});			
	}
	return {
		init:onloadExec
	}
};
$(function(){
	var esc = new serviciosextra();
	esc.init();
});