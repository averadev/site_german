@extends("templates.main_digital")
@section("content")
<div id="banner" class="fullpage" style="background-image: url('../media/img/ventas/ventashome.jpg');">
	<button class="menu-icon" id="trigger-menu"><img src="../media/img/ventas/menu-circular-button.svg"></button>
	<div class="inner">
		<div class="row">
			<div class="col l6 m7 s9 right fontCrimson right-title-space">
				<p class="main-title">''Quiero mostrar como legado todo lo que me apasiona, el legado personal del cual estoy enamorado.''</p>
				<p class="sculptor-name">- German Arzate.</p>
				<p class="main-title par">Soy un apasionado de la vida, del amor y todo lo que me rodea. Siempre estoy en búsqueda de situaciones y sé que todo lo que está afuera, en la naturaleza, es parte de mí...</p>
				<br>
				<a href="{{URL::to('/ventas/obra/sarcofago-egipcio')}}" class="btn ba-radius50 ga-melon ga-bold">Ver obra</a>
			</div>
		</div>
	</div>
</div>
@stop