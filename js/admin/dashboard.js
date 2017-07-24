var dashboard = function (){
	var bindEvents = function(){
		/*Remover estilos al pegar texto*/
		document.addEventListener("paste", function (e) {
			setTimeout(function () {
				var text = $("#txtEditor").Editor("getText");
				text = text.replace(/<(?!\/?(font)(?=>|\s.*>))\/?.*?>/g, '');/*Dejar solo los tags font*/
				text = text.replace(/(\r\n|\n|\r)/gm,"");/*Remover saltos de linea*/
				$("#txtEditor").Editor("setText", text);
			}, 100);
		});
		pattern = [
			"<size-x08>",
			"<size-x1>",
			"<size-x11>",
			"<size-x12>",
			"<size-x13>",
			"<size-x15>",
			"<size-x16>",
			"<size-x2>",
			"<size-x21>",
			"<size-x23>",
			"<size-x25>",
			"<size-x27>",
			"<size-x3>",
			"<size-x35>",
			"<size-x4>",
			"<size-x45>",
			"<size-x5>"
		];

		replace = [
			'<font color="#000001">',
			'<font color="#000002">',
			'<font color="#000003">',
			'<font color="#000004">',
			'<font color="#000005">',
			'<font color="#000006">',
			'<font color="#000007">',
			'<font color="#000008">',
			'<font color="#000009">',
			'<font color="#000010">',
			'<font color="#000011">',
			'<font color="#000012">',
			'<font color="#000013">',
			'<font color="#000014">',
			'<font color="#000015">',
			'<font color="#000016">',
			'<font color="#000017">'
		];

		path = [];
		path[8] = '../../media/img/home/';
		path[7] = '../../media/img/';
		path[6] = '../../media/img/contacto/';
		path[5] = '../../media/img/german/';
		path[3] = '../../media/img/obras_especiales/';
		path[2] = '../../media/img/subasta/';
		path[1] = '../../media/img/home/';

		$("#saveElement").click(function(event) {
			var text = $("#txtEditor").Editor("getText");
			text = text.replace(/<(?!\/?(font|br|)(?=>|\s.*>))\/?.*?>/g, '');
			var newString = text.replace(/<\/[A-Za-z-0-9-]+>/g, "</size>");
			newString.split('<font').join('<');
			newString = newString.replaceArray(replace, pattern);
			var form = {
				'id_element' : $("#element_id").val(),
				'type' 		 : $("#element_type").val(),
				'value' 	 : newString
			}

			if(form.type == 1){ // si es texto
				saveText(form);
			}

			if(form.type == 2){	// si es imagen
				saveImage();
			}


		});
	
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

	String.prototype.replaceArray = function(find, replace) {
		var replaceString = this;
		var regex; 
		for (var i = 0; i < find.length; i++) {
			regex = new RegExp(find[i], "g");
			replaceString = replaceString.replace(regex, replace[i]);
		}
		return replaceString;
	};

	var getElementScript = function(number){
		$.ajax({
			url: HOST+'/admin/element',
			type: 'GET',
			dataType: 'json',
			data: {component: number},
		}).done(function(response) {
			$('#imgfile').val('');
			$('#imgname').val('');
			$("#element_id").val(response.component.id);
			$("#element_type").val(response.component.type);
			if(response.component.type == 1){
				$("#txtElement").removeClass('hide');
				$("#imgElement").addClass('hide');
				$("#text_recommended").html(response.component.img_text_dimension)
				var component = response.component.value;
				var newString = component.replace(/<\/[A-Za-z-0-9-]+>/g, "</font>");
				newString = newString.replaceArray(pattern, replace);
				$("#txtEditor").Editor("setText", newString);
			}else{
				$("#imgElement").removeClass('hide');
				$("#txtElement").addClass('hide');
				$("#txtEditor").Editor("setText", '');
				$("#idComponentPicture").attr("src",path[$currentModule]+response.component.value);
				if(response.component.img_alt){
					$("#labeltag").addClass('active');
				}				
				$("#alt_tag").val(response.component.img_alt);
				$("#img_recommended").html(response.component.img_text_dimension)
			}
		}).fail(function(response) {

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

		});	
	}	

	var saveText = function(form){
		$.ajax({
			url: HOST+'/admin/save-text',
			type: 'POST',
			dataType: 'json',
			data: form,
		}).done(function(response) {
			if(!(response.error)){
				Materialize.toast(response.msg, 4000,'green'); 
			}else{
				 Materialize.toast(response.msg, 4000,'red'); 
			}
		}).fail(function(response) {
			console.log(response);
		}).always(function() {
		});
	}

	var saveImage = function(){
		$.ajax({
			url: HOST+'/admin/save-image',
			processData: false,
			contentType: false,
			type: 'POST',
			data:new FormData($("#formComponent")[0]),
		}).done(function(response) {
			if(!(response.error)){
				$('#imgfile').val('');
				$('#imgname').val('');				
				Materialize.toast(response.msg, 4000,'green'); 
			}else{
				 Materialize.toast(response.msg, 4000,'red'); 
			}
		}).fail(function(response) {
			console.log(response);
		}).always(function() {

		});
	}


	var onloadExec = function(){
		$("#element_type").val('');
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