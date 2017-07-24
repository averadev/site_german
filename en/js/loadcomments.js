$(document).ready(function(){
	/* Load Comments */
	showLoadCommentsHome();
});


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