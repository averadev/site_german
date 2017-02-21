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
					'name'          : $('#name_bid').val(),
					'nickname'      : $('#nick_bid').val(),
					'email'         : $('#email_bid').val(),
					'amount'            : $('#amount_bid').val(),
					'comment'       : $('#comment_bid').val()
				};
				//console.log(form);
				postBids(form);
			}
		});

		$("#showMoreButton").click(function(event) {
			$(".collection").animate({ scrollTop: 0 }, "fast");
			$(".collection").toggleClass("showmore");
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
			var now = new Date(response.time*1000);
			var bidDate = null;
			var diffinhours = 0;
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
			bids_section = bids_section +"</ul>"

			$("#bid_div").html(bids_section);			

		}).fail(function(response) {
			console.log(response);
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
			if(!(response.error)){
				$("#showmessageModal").text(response.msg);
				$('#messageModal').modal('open');
				getBids();
			}else{
				$("#showmessageModal").text(response.msg);
				switch(response.error) {
					case 1: 	/*poseedor de la oferta más alta*/
						$('#messageModal').modal('open');
						break;
					case 2: 	/*Se envio un mensaje de verificacion a su correo*/
						$('#messageModal').modal('open');
						break;
					case 3: 	/*Revisar correo*/
						$('#messageModal').modal('open');
						break;
					case 4: 	/*Oferta tiene que ser mayor*/
						$("#showmessageModal").text("Su oferta tiene que ser mayor a la actual de $"+response.msg);
						$('#messageModal').modal('open');
						break;
				}
			}
			
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
				maxlength: 20
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
				maxlength: "20 caracteres maximo"
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
			opacity: 0.5, // Opacity of modal background
			inDuration: 0, // Transition in duration
			outDuration: 200, // Transition out duration
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