$(document).ready(function(){
	var BtnFormContact = $("#BtnFormContact");

	BtnFormContact.click(function(){
		var data = {
			name: $("#name").val(),
			email: $("#email").val(),
			subject: $("#subject").val(),
			comment: $("#message").val()
		}
		
		$.ajax({
			url: HOST+"/ventas/contact/sendForm",
			type: "POST",
			dataType: "json",
			data: data,
			success: function(data){
				if(data.success == true){
					$("#titleModalMsg").html("Notificación");
					$("#showmsgModal").html(data.msg);
					$(".msgModal").modal('open');
					cleanForm();
				} else if(data.success == false){
					$("#titleModalMsg").html("Notificación");
					$("#showmsgModal").html(data.msg);
					$(".msgModal").modal('open');
					cleanForm();
				}
			},
			error: function (data) {
				console.log("Error");
			}
		});

	});

	/* Owl carousel */
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		dots: false,
		items: 3,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});
	$(".owl-prev").html('<img src="../media/img/ventas/sculp_left.svg" width="50">');
	$(".owl-next").html('<img src="../media/img/ventas/sculp_right.svg" width="50">');

});


$(".msgModal").modal({
	dismissible: true, // Modal can be dismissed by clicking outside of the modal
	opacity: 0.5, // Opacity of modal background
	inDuration: 1000, // Transition in duration
	outDuration: 1000, // Transition out duration
	starting_top: '4%', // Starting top style attribute
	ending_top: '25%', // Ending top style attribute
});


function cleanForm(){
	$("#FormContact")[0].reset();
}