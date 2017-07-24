/*
	Funciones para el envio de ofertas en subasta
*/

var bids = function (){

	var monthNames = new Array();
	monthNames = ["","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
	
	var bindEvents = function(){
	
		$("#tabsNavbar a").on('click', function(event) {
			if (this.hash !== "") {
				event.preventDefault();
	
				var hash = this.hash;
	
				$('html, body').animate({
					scrollTop: $(hash).offset().top
				}, 900, function(){
					window.location.hash = hash;
				});
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

		$("#go_login").click(function(event) {
			$("#bid_options").slideToggle('2000');
			$("#login_user").slideToggle('2000');
		});

		$("#login_user_back").click(function(event) {
			$("#login_user").slideToggle('2000');
			$("#bid_options").slideToggle('2000');
		});

		$("#showMoreButton").click(function(event) {
			$(".collection").animate({ scrollTop: 0 }, "fast");
			$(".collection").toggleClass("showmore");
		});

		/*S U B M I T S*/

		$("#userlogin").click(function(event) {
			var validForm = $("#login").valid();
			var formData = $("#login").serialize();
			if(validForm){
				loginwithmail(formData);
			}			
		});

	}

	/*Check if there is new data each 10 seconds*/
	window.setInterval(function(){
		getCheckNewBids();
	}, 10000);

	var getBids = function(){
		$.ajax({
			url: HOST+'/subasta/bids',
			type: 'GET',
			dataType: 'json',
			data: {},
		}).done(function(response) {

			var bids_section = "<ul id='bidsList' class='collection'>";

			var boxTotalBids ='';
			$totalAuctionBids = response.bids.length;
			var totalBids = ((response.bids.length).toString()).split('');
			$.each(totalBids, function(index, val) {
				if(index>0){
					boxTotalBids = boxTotalBids+"<span class='totalBids no-left-border' >"+val+"</span>"
				}else{
					boxTotalBids = boxTotalBids+"<span class='totalBids' >"+val+"</span>"
				}
			});
			$("#boxdigits").html(boxTotalBids);

			$.each(response.bids, function(index, val) {
				bidDate = val.dayDate+' '+monthNames[val.monthDate];	
				bids_section = bids_section +"<li class='collection-item avatar'>"+
					"<i class='material-icons circle grey darken-1 md-30'>account_box</i>"+
					"<span class='title'>"+val.nick+"</span>"+
					"<p class='bid-amount'>Oferta: $"+val.amount+"</p>"+
					"<p class='time'>Hace "+val.hourAgo+" horas</p>"+
					"<p class='date'>"+bidDate+"</p>"+
				"</li>";
			});
			bids_section = bids_section +"</ul>"

			$("#bid_div").html(bids_section);			

		}).fail(function(response) {

		}); 
	}

	var getCheckNewBids = function(){
		$.ajax({
			url: HOST+'/subasta/check-bids',
			type: 'GET',
			dataType: 'json',
			data: {totalbids:$totalAuctionBids},
		}).done(function(response) {
			if(response.change == 1){
				getBids();
			}

		}).fail(function(response) {

		});
	}

	var loginwithmail = function(form){
		$.ajax({
			url: HOST+'/usuariopujas/login',
			type: 'POST',
			dataType: 'json',
			data: form,
		}).done(function(response) {
			if(!(response.error)){				
				window.location.href=HOST+"/subasta/subastas";
			}else{
				$("#titleModal").text('');
				$("#showmessageModal").text(response.msg);
				$('#messageModal').modal('open');
			}
		}).fail(function(response) {
			console.log(response);
		}); 
	}

	$("#login").validate({
		rules: {
			email_login: {
				required: true,
				valid_email: true,
				maxlength: 50
			},
			password_login: {
				required: true,
				maxlength: 20
			}			
		},
		messages: {          
			email_login: {
				required: "Requerido",
				valid_email: "Ingresa un correo válido",
				maxlength: "50 caracteres maximo"
			},
			password_login: {
				required: "Requerido",
				maxlength: "20 caracteres maximo"
			}					
		}
	 });	


	var onloadExec = function(){
		bindEvents();
		getBids();
		$('#messageModal').modal({
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