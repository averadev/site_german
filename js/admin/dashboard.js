var dashboard = function (){
	var bindEvents = function(){
	
		$("#module").on("keydown change", function(){
			getSubmodules($(this).val());
		});
		$("#submodule").on("keydown change", function(){
			getSections($(this).val());
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

	var getSubmodules = function(number){
		$.ajax({
			url: HOST+'/admin/submodules',
			type: 'GET',
			dataType: 'json',
			data: {module: number},
		}).done(function(response) {
			$("#mainSections").empty();
			var accordion = ''
			var section = '';
			var mainAccordion = '';
			$.each(response.components, function(index1, section) {
				accordion =  accordion +
						"<li>"+
							"<div class='collapsible-header'>"+
								"<i class='material-icons'>library_books</i>"+section.name+"</div>"+
							"<div class='collapsible-body'>"+
								"<div class='container'>"+
									"<ul class='collapsible' data-collapsible='expandable'>";				
				//console.log(section.name);
				$.each(section.components, function(index, component) {
					section  = '';
					 section  = "<li>"+
								"<div class='collapsible-header'>"+
									"<i class='material-icons'>book</i>"+component.name+"</div>"+
								"<div class='collapsible-body'>"+
									"<p>"+(component.value)+"</p>"+
								"</div>"+
							"</li>";
					accordion =  accordion + section;
					//console.log(component.name);
				});
				accordion = accordion + "</ul></div></div></li>";				
			});

			$("#mainSections").append(accordion);
			$('.collapsible').collapsible();
			$("#submodule").empty();
			//$('#submodule').append($('<option value="" disabled selected>Seleccione</option>'));
			$.each(response.data, function(index, val) {
				$('#submodule').append($('<option></option>').val(val.id).html(val.name));
			});
			 $('#submodule').material_select();
		}).fail(function(response) {
			console.log(response);
		});	
	}

	var getSections = function(number){
		$.ajax({
			url: HOST+'/admin/sections',
			type: 'GET',
			dataType: 'json',
			data: {submodule: number},
		}).done(function(response) {
			$("#mainSections").empty();
			var accordion = ''
			var section = '';
			var mainAccordion = '';
			$.each(response.components, function(index1, section) {
				accordion =  accordion +
						"<li>"+
							"<div class='collapsible-header'>"+
								"<i class='material-icons'>library_books</i>"+section.name+"</div>"+
							"<div class='collapsible-body'>"+
								"<div class='container'>"+
									"<ul class='collapsible' data-collapsible='expandable'>";				
				//console.log(section.name);
				$.each(section.components, function(index, component) {
					section  = '';
					 section  = "<li>"+
								"<div class='collapsible-header'>"+
									"<i class='material-icons'>book</i>"+component.name+"</div>"+
								"<div class='collapsible-body'>"+
									"<p>"+(component.value)+"</p>"+
								"</div>"+
							"</li>";
					accordion =  accordion + section;
					//console.log(component.name);
				});
				accordion = accordion + "</ul></div></div></li>";				
			});

			$("#mainSections").append(accordion);
			$('.collapsible').collapsible();

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