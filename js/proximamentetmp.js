/*
	Funciones para el envio de ofertas en subasta
*/

var bids = function (){

	//$('.tabs-menu').animate({scrollLeft: $('.tabs-menu li a.active').position().left});/*scroll submenu to active tab*/
	var monthNames = new Array();
	monthNames = ["","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
	
	var bindEvents = function(){

		$("#showform").click(function(event) {
			if( $(this).hasClass('changed') ){
				$(this).removeClass('changed');
				$(this).html("<i class='material-icons right'><i id='icon-details' class='material-icons'>keyboard_arrow_right</i></i> ME INTERESA SABER MÁS");
			}else{
				$(this).addClass('changed');
				$(this).html("<i class='material-icons left'><i id='icon-details' class='material-icons'>keyboard_arrow_left</i></i> REGRESAR A DESCRIPCIÓN");
			}
			$("#info_details").slideToggle('2000');
			$("#form_details").slideToggle('2000');
		});

		$("#sendBtn").click(function(event) {
			var validForm = $("#FormCS").valid();
			var formData = $("#FormCS").serialize();
			if(validForm){
				moreInfoForm(formData);
			}
		});	


		$( "#topbar li:eq(1)").addClass('active'); 	
		$('.materialboxed').materialbox();
		$('.modal_md').modal();
		$('select').material_select();

		$('.black-tabs li a').click(function(event) {
			var hashtag = $(this).attr('href')
			var url = 'subasta' + hashtag;
			window.history.pushState({key:'url'},'',url);
		});
		$('.thumbnails').simpleGal({
			mainImage: '.auction-image'
		});
		$(".thumb-auction").click(function(event) {
			$(".thumb-auction").removeClass('active');
			$(this).addClass('active');
		});
		$( "#topbar li:eq(1)").addClass('active');


	} /*end BindEvents*/
	
	var moreInfoForm = function(formData){
		$("#sendBtn").addClass('hide');
		$("#progressdiv").removeClass('hide');
		$.ajax({
			url: HOST+'/subasta/coming',
			type:'POST',
			dataType: 'json',
			data:formData,
		})
		.done(function(data) {
			if (data.success == true) {
				$("#titleModalMsg").html("¡Mensaje Enviado!");
				$("#showmsgModal").html(data.msg);
				$("#FormCS")[0].reset();
				$('#msgModal').modal('open');
			} 
		})
		.always(function() {
			$("#sendBtn").removeClass('hide');
			$("#progressdiv").addClass('hide');
		});	
	}


	$("#FormCS").validate({
		rules: {
			name: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			city: "required",
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
			city: {
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
		$totalAuctionBids = 0;
	}


	return {
		init:onloadExec
	}

};
$(function(){
	var aucbids = new bids();
	aucbids.init();
});