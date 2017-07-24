var newsletter = function (){
	var bindEvents = function(){
	$("#newsletterSend").click(function(event) {
		if( $("#my-name-letter").val() && $("#my-email-letter").val()  ){
			$("#newslettererror").addClass('hide');					
			var data = {
				'name'	: $("#my-name-letter").val(),
				'email' : $("#my-email-letter").val()
			};
			sendnewslettermail(data);
		}else{
			$("#newslettererror").removeClass('hide');	
		}
	});

	} /*endbindevents*/

	var sendnewslettermail = function(formData){
		$("#newsletterSend").addClass('hide');
		$("#progressLetter").removeClass('hide');
		$.ajax({
			url: HOST+'/newsletter',
			type:'POST',
			dataType: 'json',
			data:formData,
		})
		.done(function(data) {
			if (data.success == true) {
				$("#newsletter_form")[0].reset();
				$('#lettermodal').modal('open');
			}
		})
		.always(function() {
			$("#newsletterSend").removeClass('hide');
			$("#progressLetter").addClass('hide');
		});
	
	}

	var onloadExec = function(){
		bindEvents();
		$("#lettermodal").modal({
			dismissible: true, // Modal can be dismissed by clicking outside of the modal
			opacity: 0.5, // Opacity of modal background
			inDuration: 1000, // Transition in duration
			outDuration: 1000, // Transition out duration
			starting_top: '4%', // Starting top style attribute
			ending_top: '25%', // Ending top style attribute
		});			
	}
	return {
		init:onloadExec
	}

};
$(function(){
	var nl = new newsletter();
	nl.init();
});