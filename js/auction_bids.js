var bids = function (){
	var monthNames = new Array();
	monthNames = ["","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
	
	var bindEvents = function(){
		$("#submitBid").click(function(event) {
			event.preventDefault();			
			var formValidation = $( "#bidForm").valid();
			console.log(formValidation);
			if(formValidation){
				var form = {
					'name'			: $('#name_bid').val(),
					'nickname'		: $('#nick_bid').val(),
					'email'			: $('#email_bid').val(),
					'amount'			: $('#amount_bid').val(),
					'comment'		: $('#comment_bid').val()
				};
				//console.log(form);
				postBids(form);
			}
		});

	}


	var getBids = function(){
		$.ajax({
			url: HOST+'/subasta/bids',
			type: 'GET',
			dataType: 'json',
			data: {},
		}).done(function(response) {

			var bids_section = "<ul class='collection'>";
			var now = new Date(response.time*1000);
			var bidDate = null;
			var diffinhours = 0;

			$.each(response.bids, function(index, val) {
				bidDate = new Date(val.startDate*1000);
				diffinhours = Math.abs(now - bidDate) / 36e5;

				var month = bidDate.getUTCMonth() + 1; //months from 1-12
				var day = bidDate.getUTCDate();

				if(day <= 9){
					day = '0'+day;
				}

				bidDate = day+' '+monthNames[month];
	
				bids_section = bids_section +"<li class='collection-item avatar'>"+
					"<i class='material-icons circle grey darken-1 md-30'>account_box</i>"+
					"<span class='title'>"+val.nick+"</span>"+
					"<p class='bid-amount'>Oferta: $"+val.amount+"</p>"+
					"<p class='time'>Hace "+parseInt(diffinhours)+" horas</p>"+
					"<p class='date'>"+bidDate+"</p>"+
				"</li>";
			});
			$("#bid_div").html(bids_section);
			bids_section = bids_section +"</ul>"
		}).fail(function(response) {
			console.log(response);
		});	
	}

	var postBids = function(form){
		$.ajax({
			url: HOST+'/subasta/submit-bid',
			type: 'POST',
			dataType: 'json',
			data: form,
		}).done(function(response) {
			console.log(response);
			getBids();
		}).fail(function(response) {
			console.log(response);
		});	
	}	

	/*Form Validation*/
	$("#bidForm").validate({
		rules: {
			name_bid: {
				required: true,
				maxlength: 50
			},
			nick_bid: {
				required: true,
				maxlength: 45
			},				
			email_bid: {
				required: true,
				valid_email: true,
				maxlength: 50
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
				maxlength: "45 caracteres maximo"
			},				
			email_bid: {
				required: "Requerido",
				valid_email: "Ingresa un correo válido",
				maxlength: "50 caracteres maximo"
			},
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

		$('#messageModal').modal({
			dismissible: true, // Modal can be dismissed by clicking outside of the modal
			opacity: .5, // Opacity of modal background
			inDuration: 300, // Transition in duration
			outDuration: 200, // Transition out duration
			starting_top: '4%', // Starting top style attribute
			ending_top: '30%', // Ending top style attribute
		});		
	}


	return {
		init:onloadExec
	}

};
$(function(){
	var aucbids = new bids();
	aucbids.init();
});