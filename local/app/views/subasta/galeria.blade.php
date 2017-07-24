		<div  id="tab8" class="scrollspy bg_cover"  style="background-image: url('media/img/subasta/bg_gallery.jpg'); 	padding-top: 2em;" >
			<div  class="container">
				<div class="row no-margin-bottom" >
					<div class="col s12">
						@foreach ( $sales as $key => $sale )
							<div class="thumbnail" >
								<img class="left-clip" src="media/img/subasta/clip_work.png" alt="left clip">
								<img class="right-clip" src="media/img/subasta/clip_work.png" alt="right clip">
								<div class="thumbnail-crop" >
									<input type="hidden" class="sculpture" value="{{$sale->id}}">
									<img class="portrait" alt="obra" src="media/img/subasta_esculturas/{{$sale->images->first()->filename}}">
								</div>
								<div class="box-title">
									<p class="box-desc" >{{ isset($sale->languages->first()->name) ? $sale->languages->first()->name : ''  }}</p>
									<p class="box-price"> {{$sale->price}} </p>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>