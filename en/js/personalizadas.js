var serviciosextra = function (){
	var bindEvents = function(){
		$( "#topbar li:eq(2)").addClass('active');
		//$('.button-collapse').sideNav();
		$('.parallax').parallax();
		$('.datepicker').pickadate({
			format: 'dd/mm/yyyy',
			today: false,
			clear: false,
			close: 'OK',
		});		
		$("#monumental").click(function(event) {
			window.location.href=HOST+"/servicios/monumental";
		});
		$("#interiores").click(function(event) {
			window.location.href=HOST+"/servicios/interiores";
		});
		$(".appointment").click(function(event) {
			$.smoothScroll({
				scrollTarget: $('#formsection'),
				speed: 1500,
			});
		});

		$("#sendAppt").click(function(event) {
			var validForm = $("#form_appt").valid();
			var formData = $("#form_appt").serialize();
			if(validForm){
				sendDataFormPer(formData);
			}
		});
	}

	var sendDataFormPer = function(formData){
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