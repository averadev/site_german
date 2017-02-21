var esculturas = function (){
	var bindEvents = function(){

		$( "#topbar li:eq(1)").addClass('active'); 	
		$('.materialboxed').materialbox();
		$('.modal_md').modal();
		$('select').material_select();

		$('.black-tabs li a').click(function(event) {
			var hashtag = $(this).attr('href')
			var url = 'subasta' + hashtag;
			window.history.pushState({key:'url'},'',url);
		});
		$('.thumbnails').simpleGal({
			mainImage: '.auction-image'
		});
		$(".thumb-auction").click(function(event) {
			$(".thumb-auction").removeClass('active');
			$(this).addClass('active');
		});
		
	}
	var onloadExec = function(){
		bindEvents();
	}
	return {
		init:onloadExec
	}

};
$(function(){
	var esc = new esculturas();
	esc.init();
});