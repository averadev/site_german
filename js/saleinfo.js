var sales = function (){
	var bindEvents = function(){

		var imgArray = [];
		var imagePath = '';
		$.each($panoramaJson, function(index, img) {
			imagePath = '../../media/img/subasta_esculturas/'+img.filename;
			imgArray.push(imagePath);
		});
		$panoramaJson = [];
		var product;

		product1 = $('.car').ThreeSixty({
			totalFrames: imgArray.length,
			endFrame: imgArray.length,
			currentFrame: 1,

			imgList: '.threesixty_images',
			progress: '.spinner',
			//imagePath:'../../../media/img/subasta_esculturas/',
			filePrefix: '',
			ext: '.jpeg',
			height: 335,
			width: 336,
			disableSpin: false,
			playSpeed:400,
			framerate:5,
			imgArray: imgArray
		});
		$('.scrollspy').scrollSpy({scrollOffset: 40});
		$('#navigation-menu').pushpin({ top: $('#navigation-menu').offset().top });
		$('.carousel').carousel({padding:0});
		$("#prev-sculpt").click(function(event) {
			$('.carousel').carousel('prev');
		});
		$("#next-sculpt").click(function(event) {
			$('.carousel').carousel('next');
		});
	}/*End bindEvents*/

	var onloadExec = function(){
		bindEvents();
	}
	return {
		init:onloadExec
	}

};
$(function(){
	var sale = new sales();
	sale.init();
});	