var dashboard = function (){
	var bindEvents = function(){
	
		$("#module").on("keydown change", function(){
			getComponents($(this).val());
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

	}

	var getComponents = function(number){
		$.ajax({
			url: HOST+'/admin/components',
			type: 'GET',
			dataType: 'json',
			data: {module: number},
		}).done(function(response) {
			if(response.component[0].type == 1){
				$("#txtEditor").Editor("setText", response.component[0].element);
			}
		}).fail(function(response) {
			console.log(response);
		});	
	}

	var onloadExec = function(){
		$("#module").prop('selectedIndex', 0);
		$("#module").material_select();
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