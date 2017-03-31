var dashboard = function (){
	var bindEvents = function(){
		path = [];
		path[8] = '../../media/img/footer/';
		path[7] = '../../media/img/';
		path[5] = '../../media/img/contacto/';
		path[5] = '../../media/img/german/';
		path[3] = '../../media/img/obras_especiales/';
		path[2] = '../../media/img/subasta/';
		path[1] = '../../media/img/home/';
	
		$("#section").on("keydown change", function(){
			getComponentsScript($(this).val());
		});
		$("#component").on("keydown change", function(){
			getElementScript($(this).val());
		});		

		$("#txtEditor").Editor(
			{
			"bold":false,
			"italics":false,
			"underline":false,
			"strikeout":false,
			"ol":false,
			"ul":false,
			"undo":false,
			"redo":false,
			"r_align":false,
			"l_align":false,
			"c_align":false,
			"justify":false,
			"unlink":false,
			"insert_link":false,
			"insert_img":false,
			"insert_table":false,
			"hr_line":false,
			"block_quote":false,
			"indent":false,
			"outdent":false,
			"print":false,
			"rm_format":false,
			"select_all":false,
			"togglescreen":false,
			"splchars":false,
			"source":false,
			"color":false,
			"styles":false,
			"fonts":false,
			}
		);
	} /* End bindEvents */

	var getElementScript = function(number){
		$.ajax({
			url: HOST+'/admin/element',
			type: 'GET',
			dataType: 'json',
			data: {component: number},
		}).done(function(response) {
			if(response.component.type == 1){
				$("#txtElement").removeClass('hide');
				$("#imgElement").addClass('hide');
				$("#txtEditor").Editor("setText", response.component.value);
			}else{
				$("#imgElement").removeClass('hide');
				$("#txtElement").addClass('hide');				
				$("#txtEditor").Editor("setText", '');
				$("#idComponentPicture").attr("src",path[$currentModule]+response.component.value);
			}
		}).fail(function(response) {
			console.log(response);
		});	
	}

	var getComponentsScript = function(number){
		$.ajax({
			url: HOST+'/admin/components',
			type: 'GET',
			dataType: 'json',
			data: {section: number},
		}).done(function(response) {
			$("#component").empty();
			$('#component').append($('<option value="" disabled selected>Seleccione</option>'));
			var comptype = null;
			$.each(response.components, function(index, val) {
				if(val.type == 1){
					comptype = "<option data-icon='../../media/icons/txt-icon.png' ></option>";
				}else{
					comptype = "<option data-icon='../../media/icons/img-icon.png' ></option>";
				}
				$('#component').append($(comptype).val(val.id).html(val.compName));
			});
			$('#component').material_select();
		}).fail(function(response) {
			console.log(response);
		});	
	}	

	var onloadExec = function(){
		$("#section").prop('selectedIndex', 0);
		$("#section").material_select();
		bindEvents();

	}
	return {
		init:onloadExec
	}

};
$(function(){
	var db = new dashboard();
	db.init();
});