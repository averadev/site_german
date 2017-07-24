


		<div  id="tab5" class="scrollspy bg_cover"  style="background-image: url('media/img/subasta/{{$submodule_section_data->background_subasta}}'); 	padding-top: 2em;" >
			<div  class="container">
				<div class="row no-margin-bottom" style="padding-top: 4%; padding-bottom: 4%;">
					<div class="col l6 s12"> <!-- LEFT SIDE -->
						<div style="padding: 10px 0 0 20px; border: 1px solid black; border-radius: 5px;">
							<span class="gb_title_auction">{{$submodule_section_data->SeccionSubastaTituloEscultura}}</span>
								<div class="row">
								<ul class="thumbnails col l2 s12">
									@foreach ($auctionpics as $key => $value)
										@if($value->name)
											@if($key == 0)
												<li>
													<a href="media/img/subasta_esculturas/{{$value->name}}">
														<img src="media/img/subasta_esculturas/{{$value->name}}" class="thumb-auction active" alt="Thumbnail">
													</a>
												</li>
											@else
												<li>
													<a href="media/img/subasta_esculturas/{{$value->name}}">
														<img src="media/img/subasta_esculturas/{{$value->name}}" class="thumb-auction" alt="Thumbnail">
													</a>
												</li>
											@endif
										@endif
									@endforeach
								</ul>
								<div class="col l10 s12">
									@if($auctionpics)
										@if($auctionpics[0]->name)
											<div class="main-image">
												<img src="media/img/subasta_esculturas/{{$auctionpics[0]->name}}" alt="Placeholder" class="auction-image">
											</div>
										@endif
									@endif
								</div>
							</div>

							<div style="margin-top: 52px; margin-bottom: 20px;" >
								<p class="small-lineheight">{{$submodule_section_data->SeccionDescSubasta1}}</p>
								<p class="small-lineheight">{{$submodule_section_data->SeccionDescSubasta2}}</p>
							</div>
						</div>
					</div>
					<div class="col l6 s12">  <!-- RIGHT SIDE -->
						<div class="row">
							<p class="date_current"></p>						
							<p class="gb_title_auction title-details">{{$submodule_section_data->SeccionSubastaTituloEscultura}}</p>
							<div class="card-details" >
								<div class="padding-1" id="info_details"  >
									<p class="font-details" >
										{{isset($auctiondetail->languages->first()->detail) ? $auctiondetail->languages->first()->detail : ''}}
									</p>
								</div>
								<div id="form_details" class="hideme" >
									<div class="dis-table" >
										<form id="FormCS" class="col s12 gb_arrow_box whiteform contract form-detais">
											<p class="gb_textcs_x1 font-form" >Me interesa recibir información sobre la escultura:</p>
											<div class="row">
												<div class="col s12">
													<div class="col s12 l4">
														<input id="name" class="border_cs" type="text" name="name" required placeholder="NOMBRE">
													</div>
													<div class="col s12 l4">
														<input id="email" class="border_cs" type="email" name="email" required placeholder="E-MAIL">
													</div>
													<div class="col s12 l4">
														<input id="city" class="border_cs" type="text" name="city" required placeholder="CIUDAD">
													</div>
												</div>
												<div class="col s12">
													<div class="col s12 l8">
														<textarea id="comment" style="height: 80px;" class="border_cs" maxlength="200" name="comment" rows=5 required placeholder="COMENTARIOS"></textarea>
													</div>
													<div class="col s12 l4">
														<div id="progressdiv" class="progress hide"><div class="indeterminate"></div></div>
														<a id="sendBtn" class="btn btn-small col s12 green waves-effect margin-top-13 gb_noboxshadow">CONTÁCTENME</a>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col l8 m10 s12 offset-l2 offset-m1">
								<button id="showform" class="bid-form-button btn col l12 left btn-large green waves-effect gb_noboxshadow button-details">
									<i class="material-icons right">
										<i id="icon-details" class="material-icons">keyboard_arrow_right</i>
									</i>
									ME INTERESA SABER MÁS
								</button>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

