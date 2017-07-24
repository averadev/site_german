var upsale = function (){
	$('#formImage')[0].reset();
	var bindEvents = function(){

	var imgArray = [];
	var imagePath = '';
	$.each($panoramaJson, function(index, img) {
		imagePath = '../../../media/img/subasta_esculturas/'+img.filename;
		imgArray.push(imagePath);
	});
	$panoramaJson = [];
	var product;

		product1 = $('.car').ThreeSixty({
			totalFrames: imgArray.length,
			endFrame: imgArray.length,
			currentFrame: 1,

			imgList: '.threesixty_images',
			progress: '.spinner',
			//imagePath:'../../../media/img/subasta_esculturas/',
			filePrefix: '',
			ext: '.jpeg',
			height: 447,
			width: 500,
			navigation: true,
			disableSpin: false,
			playSpeed:400,
			framerate:5,
			imgArray: imgArray
		});
	

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
			setPanoramaImage();
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


		/*SORTABLE IMAGES*/
		var ul_sortable = $('.sortable'); //setup one variable for sortable holder that will be used in few places

		ul_sortable.sortable({
			revert: 100,
			placeholder: 'placeholder'
		});

		ul_sortable.disableSelection();

		$('#sortImages').on('click', function(e){ // trigger function on save button click
			e.preventDefault(); 
			var sorted_images = ul_sortable.sortable('serialize'); // serialize data from ul#sortable
			sendSortImages(sorted_images);
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

	var setPanoramaImage = function(image){
		$.ajax({
			url: HOST+'/admin/sales/panorama-image',
			processData: false,
			contentType: false,
			type: 'POST',
			data:new FormData($("#formImage")[0]),
		}).done(function(response) {
			if(!(response.error)){
				$(".sortable").empty();
				var comptype = '';
				$.each(response.images, function(index, val) {
					comptype = comptype  
					+" <li>"
						+"<a data-id="+val.id+" class='delete-image'><i class='material-icons font-size-18px'>clear</i></a>"
						+"<img src='../../../media/img/subasta_esculturas/"+val.filename+"'>"
					+"</li> ";
				});
				$(".sortable").html(comptype);
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
			url: HOST+'/admin/sales/drop-pan-image',
			type: 'POST',
			dataType: 'json',
			data: {image: idimg, idAuction: $("#idAuction").val() },
		}).done(function(response) {
			if(!(response.error)){
				$(".sortable").empty();
				var comptype = '';
				$.each(response.images, function(index, val) {
					comptype = comptype
					+" <li>"
						+"<a data-id="+val.id+" class='delete-image'><i class='material-icons font-size-18px'>clear</i></a>"
						+"<img src='../../../media/img/subasta_esculturas/"+val.filename+"'>"
					+"</li> ";
				});
				$(".sortable").html(comptype);
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
			}else{
				Materialize.toast(response.msg, 4000,'red'); 
			}
		}).fail(function(response) {
		}).always(function() {
		});
	}

	var sendSortImages = function(images){
		$.ajax({
			url: HOST+'/admin/sales/image-sort',
			type: 'POST',
			dataType: 'json',
			data: images,
		}).done(function(response) {
			if(!(response.error)){

				Materialize.toast(response.msg, 4000,'green'); // 4000 is the duration of the toast		
			}else{
				Materialize.toast(response.msg, 4000,'red'); 
			}
		}).fail(function(response) {
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