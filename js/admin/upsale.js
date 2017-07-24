var upsale = function (){
	var bindEvents = function(){
		$("#saveAuction").click(function(event) {
			var data = {
				'idAuction': 	$("#idAuction").val(),
				'name': 		$("#name").val(),
				'description': 	$("#description").val(),
				'price' 	  : $("#price").val()
			};
			sendAuctionUpdate(data);
		});

		$("#saveImage").click(function(event) {
			setAuctionImage();
		});

		$(".delete-image").click(function(event) {
			$('#modalConfirm').modal('open');
			var imgDiv = $(this).parent();
			var id = $(this).data('id');
			$confirmImage = {
				'imgDiv' :imgDiv,
				'imgId' :id
			};
		});

		$("#removeImage").click(function(event) {
			sendDeleteImage($confirmImage.imgId,$confirmImage.imgDiv);
		});

	}

	/*end bindEvents*/

	var sendAuctionUpdate = function(form){
		$.ajax({
			url: HOST+'/admin/sales/update-sale',
			type: 'POST',
			dataType: 'json',
			data: form,
		}).done(function(response) {
			if(!(response.error)){
				 Materialize.toast(response.msg, 4000,'green'); // 4000 is the duration of the toast
			}else{
				 Materialize.toast(response.msg, 4000,'red'); 
			}
		}).fail(function(response) {
			console.log(response);
		}).always(function() {
		});
	}

	var setAuctionImage = function(image){
		$.ajax({
			url: HOST+'/admin/subasta/save-image',
			processData: false,
			contentType: false,
			type: 'POST',
			data:new FormData($("#formImage")[0]),
		}).done(function(response) {
			if(!(response.error)){
				$("#divAuction").empty();
				var comptype = '';
				$.each(response.images, function(index, val) {
					comptype = comptype + " <div class='img-wrap'> <a data-id="+val.id+" class='delete-image'><i class='material-icons font-size-18px'>clear</i></a> <img class='auction-gallery' src='../../../media/img/subasta_esculturas/"+val.filename+"'> </div> ";
				});
				$("#divAuction").html(comptype);
				$(".delete-image").click(function(event) {
					$('#modalConfirm').modal('open');
					var imgDiv = $(this).parent();
					var id = $(this).data('id');
					$confirmImage = {
						'imgDiv' :imgDiv,
						'imgId' :id
					};
				});	
				Materialize.toast(response.msg, 4000,'green'); // 4000 is the duration of the toast
				$('#formImage')[0].reset();
			}else{
				Materialize.toast(response.msg, 4000,'red');
			}
		}).fail(function(response) {
			console.log(response);
		}).always(function() {

		});
	}

	var sendDeleteImage = function(idimg,divImage){
		$.ajax({
			url: HOST+'/admin/subasta/drop-image',
			type: 'POST',
			dataType: 'json',
			data: {image: idimg},
		}).done(function(response) {
			if(!(response.error)){
				Materialize.toast(response.msg, 4000,'green'); // 4000 is the duration of the toast
				divImage.empty();			
			}else{
				Materialize.toast(response.msg, 4000,'red'); 
			}
		}).fail(function(response) {
			console.log(response);
		}).always(function() {
		});
	}	

	var onloadExec = function(){
		bindEvents();
		$('#modalConfirm').modal({
			dismissible: true, // Modal can be dismissed by clicking outside of the modal
			opacity: 0.5, // Opacity of modal background
			inDuration: 1000, // Transition in duration
			outDuration: 1000, // Transition out duration
			starting_top: '4%', // Starting top style attribute
			ending_top: '25%', // Ending top style attribute
		});


		$confirmImage = {};
		$confirmImage = {
			'imgDiv' :null,
			'imgId' :null
		};
	}
	return {
		init:onloadExec
	}

};
$(function(){
	var sale = new upsale();
	sale.init();
});