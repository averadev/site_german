$(document).ready(function(){
	var name = $("#name").val();
	var email = $("#email").val();
	var city = $("#city").val();
	var comment = $("#comment").val();
	var sendBtn = $("#sendBtn");

	// Click button form
	sendBtn.click(function(e) {
		var name = $("#name").val();
		var email = $("#email").val();
		var city = $("#city").val();
		var comment = $("#comment").val();

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('#_token').val()
			}
		});

		$.ajax({
			type: "POST",
			url: 'subasta',
			data: {name: name, email: email, city: city, comment: comment},
			success: function (data) {
				console.log("MESSAGE DEBUG: " + data);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log("ERROR MESSAGE: " +  errorThrown);
			}
		});
		return false;
	});

	// Clean Input
	var cleanInput = function() {
		var name = $("#name").html('');
		var email = $("#email").html('');
		var city = $("#city").html('');
		var comment = $("#comment").html('');
	}

});