/*
	Funciones para el envio de ofertas en subasta
*/

var bids = function (){

	$('.tabs-menu').animate({scrollLeft: $('.tabs-menu li a.active').position().left});/*scroll submenu to active tab*/
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


		$("#showMoreButton").click(function(event) {
			$("#bidsList").animate({ scrollTop: 0 }, "fast");
			$("#bidsList").toggleClass("showmore");
		});

		$("#showMoreUser").click(function(event) {
			$("#user_bids_list").animate({ scrollTop: 0 }, "fast");
			$("#user_bids_list").toggleClass("showmoreuser");
		});
		$("#makebid").click(function(event) {
			$("#makeauct").removeClass('hide');
			$("#showuserbids").addClass('hide');
			$(".tablinks").removeClass('active');
			$(this).addClass('active');
		});
		$("#showmybids").click(function(event) {
			$("#makeauct").addClass('hide');
			$("#showuserbids").removeClass('hide');
			$(".tablinks").removeClass('active');
			$(this).addClass('active');
		});		

		

		/*S U B M I T S*/

		$("#close-session").click(function(event) {
			event.preventDefault();
			end_session();
		});


		$("#submit_bid").click(function(event) {
			var formValidation = $( "#new_bid_form").valid();
			if(formValidation){
				var form = {
					'name'      	: $('#name_bid').val(),
					'nickname'  	: $('#nick_bid').val(),
					'amount'    	: $('#amount_bid').val(),
					'comment'   	: $('#comment_bid').val()
				};
				postBids(form);
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

	var getUserBids = function(){
		$.ajax({
			url: HOST+'/usuariopujas/user-bids',
			type: 'GET',
			dataType: 'json',
			data: {},
		}).done(function(response) {

			var bids_section = "<ul id='user_bids_list' class='collection user'>";

			var boxTotalBids ='';
			var totalBids = ((response.bids.length).toString()).split('');
			$.each(totalBids, function(index, val) {
				if(index>0){
					boxTotalBids = boxTotalBids+"<span class='totalBids no-left-border' >"+val+"</span>"
				}else{
					boxTotalBids = boxTotalBids+"<span class='totalBids' >"+val+"</span>"
				}
			});
			$("#boxdigitsUser").html(boxTotalBids);

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

			$("#user_bids_div").html(bids_section);			

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

	var postBids = function(form){
		$.ajax({
			url: HOST+'/usuariopujas/save-bid',
			type: 'POST',
			dataType: 'json',
			data: form,
		}).done(function(response) {

			if(!(response.error)){
				$("#showmessageModal").text(response.msg);
				$("#new_bid_form")[0].reset();
				$('#messageModal').modal('open');
				getBids();
				getUserBids();
			}else{
				var message = response.msg;
				$("#titleModal").text('');
				if(response.error == 1){
					$("#new_bid_div").slideToggle('2000');
					$("#login_user").slideToggle('2000');
					$("#showmessageModal").text(message);
					$('#messageModal').modal('open');
				}else{
					$("#showmessageModal").text(message);
					$('#messageModal').modal('open');					
				}
			}
			
		}).fail(function(response) {

		}); 
	}

	var end_session = function(form){
		$.ajax({
			url: HOST+'/usuariopujas/log-out',
			type: 'POST',
			dataType: 'json',
			data: {email: $("#email_login").val() },
		}).done(function(response) {
			window.location.href=HOST+"/subasta/subastas";
		}).fail(function(response) {

		}); 
	}	

	/*Form Validation*/
	$("#new_bid_form").validate({
		rules: {
			amount_bid: {
				required: true,
				digits: true,
				maxlength: 10
			}                   
		},
		messages: {
			amount_bid: {
				required: "Requerido",
				digits: "Solo numeros enteros",
				maxlength: ""
			}
		}
	 });

	var onloadExec = function(){
		bindEvents();
		getBids();
		getUserBids();
		$('#messageModal').modal({
			dismissible: true, // Modal can be dismissed by clicking outside of the modal
			opacity: 0.5, // Opacity of modal background
			inDuration: 1000, // Transition in duration
			outDuration: 1000, // Transition out duration
			starting_top: '4%', // Starting top style attribute
			ending_top: '25%', // Ending top style attribute
		});
		$totalAuctionBids = 0;
		$totalUserBids = 0;
	}


	return {
		init:onloadExec
	}

};
$(function(){
	var aucbids = new bids();
	aucbids.init();
});