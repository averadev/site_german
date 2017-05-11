$(document).ready(function(){
	/* Load Comments */
	showLoadComments();
	showLoadCommentsHome();

	var ContactoCSForm = $("#FormCS");
	var sendBtn = $("#sendBtn");
	var msg_success = $("#msg_success");

	sendBtn.click(function(e){
		e.preventDefault();
		var formData = ContactoCSForm.serialize();
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$("#FormCS").valid();

		$.ajax({
			url: HOST+'/subasta/coming',
			type:'POST',
			dataType: 'json',
			data:formData,
			success: function (data) {

				if (data.success == true) {
					$("#titleModalMsg").html("!Mensaje Enviado!");
					$("#showmsgModal").html(data.msg);
					$("#FormCS")[0].reset();
					$('#msgModal').modal('open');
					console.log(data.msg);
				} else {
					// Form reset
					$("#FormCS")[0].reset();
				}
				return false;
			},
			error: function () {
				var msj_error = "Se produjo un problema al comprobar los nombres de los campos";
				console.log("ERROR: ", msj_error);
			}
		});
		return false;
	});

	// Modal Settings
	$("#msgModal").modal({
			dismissible: true, // Modal can be dismissed by clicking outside of the modal
			opacity: 0.5, // Opacity of modal background
			inDuration: 1000, // Transition in duration
			outDuration: 1000, // Transition out duration
			starting_top: '4%', // Starting top style attribute
			ending_top: '25%', // Ending top style attribute
		});

});

/* Function showLoadComments */
function showLoadComments () {

	$.ajax({
		url: HOST+'/subasta/allComments',
		type: 'GET',
		dataType: 'json',
		data: {},
		success: function (data) {
			var months = new Array();
			months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
			var str_out = "";
            $("#listComments").empty();
			$.each(data.comments, function(data, value) {
				var date = new Date(value.Fecha);
				var day = date.getDate();
				var month = date.getMonth();
				var year = date.getFullYear();

				if(day <= 9){
					day = '0'+day;
				}
				date_out = day +' de '+ months[month] +' de '+ year;
				str_out += '<div id="' + value.id + '" class="col s4 gb_container_comments gb_gray3 midH">'+
					'<div class="gb_container_header">'+
						'<h4 class="title_sculpture">' + value.NombreEscultura + '</h4>'+
					'</div>'+
					'<div class="gb_comments_rs gb_facebook">'+
						'<div class="gb_text_rs">'+
							'<span class="desc_comment">' + value.Comentario + '</span>'+
							'<div class="gb_profile">'+
								'<img src="media/img/subasta/profile_1.png" alt="">'+
								'<span class=""><strong class="name_user">' + value.NombreNick + '. -</strong></span><span class="gb_italic"><strong class="date_comment">' + date_out + '</strong></span>'+
							'</div>'+
						'</div>'+
					'</div>'+
					'<div class="social_img"><img src="media/img/subasta/comments.png" alt=""></div>'+
				'</div>';
			});

			$('#listComments').append(str_out);

		},
		error: function (data) {
			console.log('Ajax request failed');
		}
	});

}

/* Function showLoadCommentsHome */
function showLoadCommentsHome () {

	$.ajax({
		url: HOST+'/subasta/allComments',
		type: 'GET',
		dataType: 'json',
		data: {},
		success: function (data) {
			var months = new Array();
			months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
			// list ul html
			var ul_list = "<ul class='collectionn showmoreComments'>";
            $("#listCommentsHome").empty();
			$.each(data.comments, function(data, value) {
					var date = new Date(value.Fecha);
					var day = date.getDate();
					var month = date.getMonth();
					var year = date.getFullYear();

					if(day <= 9){
						day = '0'+day;
					}
					date_out = day +' de '+ months[month] +' '+ year;
					ul_list += '<li class="collection-itemm avatar grey lighten-22">'+
									'<img src="media/img/subasta/bg_avatar.jpg" alt="" class="circle2">'+
									'<div style="height:40px; overflow:hidden;"><span class="title gb_text_white">'+ value.Comentario +'</span><span class="title gb_text_white">...</span></div>'+
									'<span class="title gb_text_white">'+ value.NombreNick +'. - '+ value.Dia + ' de '+ value.NombreMes +' '+ value.Anio +'</span>'+
								'</li>';
			});

			ul_list += "</ul>";
			$('#listCommentsHome').html(ul_list);

		},
		error: function (data) {
			console.log('Ajax request failed');
		}
	});

}