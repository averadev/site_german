/*
	Funciones para el envio de ofertas en subasta
*/

var bids = function (){
	var monthNames = new Array();
	monthNames = ["","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
	
	var bindEvents = function(){

		/*A N I M A T I O N S*/

		$("#go_form_new_user").click(function(event) {
			$("#bid_options").slideToggle('2000');
			$("#new_user_bid").slideToggle('2000');
		});

		$("#go_login").click(function(event) {
			$("#bid_options").slideToggle('2000');
			$("#login_user").slideToggle('2000');
		});

		$("#login_user_back").click(function(event) {
			$("#login_user").slideToggle('2000');
			$("#bid_options").slideToggle('2000');
		});

		$("#new_user_back").click(function(event) {
			$("#new_user_bid").slideToggle('2000');
			$("#bid_options").slideToggle('2000');
		});

		$("#showMoreButton").click(function(event) {
			$(".collection").animate({ scrollTop: 0 }, "fast");
			$(".collection").toggleClass("showmore");
		});

		/*S U B M I T S*/


		$("#userlogin").click(function(event) {
			var formValidation = $( "#login").valid();
			if(formValidation){
				loginwithmail();
			}			
		});

		$("#close-session").click(function(event) {
			end_session();
		});

		$("#new-user").click(function(event) {
			var formValidation = $( "#new_user_form").valid();
			if(formValidation){
				var form = {
					'cardnumber' : $('#card_number').val(),
					'type'		 : $('#selectCard').val(),
					'email'		 : $('#email_user').val()
				}
				set_new_user(form);
			}
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

	var set_new_user = function(form){
		$.ajax({
			url: HOST+'/subasta/new-auction-user',
			type: 'POST',
			dataType: 'json',
			data: form,
		}).done(function(response) {
			if(!(response.error)){
				$("#showmessageModal").text(response.msg);
				$('#messageModal').modal('open');				
				$("#new_user_form")[0].reset();
			}else{
				$("#titleModal").text('');
				$("#showmessageModal").text(response.msg);
				$('#messageModal').modal('open');
			}

		}).fail(function(response) {

		});
	}	

	var postBids = function(form){
		$.ajax({
			url: HOST+'/subasta/submit-bid',
			type: 'POST',
			dataType: 'json',
			data: form,
		}).done(function(response) {

			if(!(response.error)){
				$("#showmessageModal").text(response.msg);
				$("#new_bid_form")[0].reset();
				$('#messageModal').modal('open');
				getBids();
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

	var loginwithmail = function(form){
		$.ajax({
			url: HOST+'/subasta/login',
			type: 'POST',
			dataType: 'json',
			data: {email: $("#email_login").val() },
		}).done(function(response) {
			if(!(response.error)){
				$("#login_user").slideToggle('2000');
				$("#new_bid_div").slideToggle('2000');			
			}else{
				$("#titleModal").text('');
				$("#showmessageModal").text(response.msg);
				$('#messageModal').modal('open');
			}
		}).fail(function(response) {
			console.log(response);
		}); 
	}

	var end_session = function(form){
		$.ajax({
			url: HOST+'/subasta/log-out',
			type: 'POST',
			dataType: 'json',
			data: {email: $("#email_login").val() },
		}).done(function(response) {
			if(!(response.error)){
				$("#login_user").slideToggle('2000');
				$("#new_bid_div").slideToggle('2000');
			}else{
				$("#titleModal").text('');
				var message = response.msg;
				$("#showmessageModal").html(message);
			}
		}).fail(function(response) {

		}); 
	}	

	/*Form Validation*/
	$("#new_bid_form").validate({
		rules: {
			name_bid: {
				required: true,
				maxlength: 50
			},
			nick_bid: {
				required: true,
				maxlength: 20
			},
			amount_bid: {
				required: true,
				digits: true,
				maxlength: 10
			}                   
		},
		messages: {
			name_bid: {
				required: "Requerido",
				maxlength: "50 caracteres maximo"
			},
			nick_bid: {
				required: "Requerido",
				maxlength: "20 caracteres maximo"
			},
			amount_bid: {
				required: "Requerido",
				digits: "Solo numeros enteros",
				maxlength: ""
			}
		}
	 });


	/*New user validation*/
	$("#new_user_form").validate({
		rules: {
			card_number: {
				required: true,
				digits: true
			},
			email_user: {
				required: true,
				valid_email: true,
				maxlength: 50
			},
			selectCard: {
				required: true,
			}
		},
		messages: {
			card_number: {
				required: "Requerido",
				digits: "Solo numeros"
			},              
			email_user: {
				required: "Requerido",
				valid_email: "Ingresa un correo válido",
				maxlength: "50 caracteres maximo"
			},
			selectCard: {
				required: "Requerido",
			}			
		}
	 });

	$("#login").validate({
		rules: {
			email_login: {
				required: true,
				valid_email: true,
				maxlength: 50
			}
		},
		messages: {          
			email_login: {
				required: "Requerido",
				valid_email: "Ingresa un correo válido",
				maxlength: "50 caracteres maximo"
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