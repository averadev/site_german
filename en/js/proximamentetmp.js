/*
	Funciones para el envio de ofertas en subasta
*/

var bids = function (){
	var monthNames = new Array();
	monthNames = ["","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
	
	var bindEvents = function(){

		$("#showform").click(function(event) {
			if( $(this).hasClass('changed') ){
				$(this).removeClass('changed');
				$(this).html("<i class='material-icons right'><i id='icon-details' class='material-icons'>keyboard_arrow_right</i></i> I WANT TO KNOW MORE");
			}else{
				$(this).addClass('changed');
				$(this).html("<i class='material-icons left'><i id='icon-details' class='material-icons'>keyboard_arrow_left</i></i> BACK TO DESCRIPTION");
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