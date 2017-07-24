
		<div id="tab7" class="scrollspy bg_cover" style="background-image: url('media/img/subasta/{{$submodule_section_data->background_proximamente}}');" >
			<div class="container" style="padding-bottom: 0.5%">
				<div class="row no-margin-bottom">
					<div class="col s12 l5 margin-left-4">
						<div class="row">
							<div class="col s12 m12 l12 center" style="position: relative;">
									<div style="position: absolute; top: 27%; height: 100px; left: 50%;">
										<div style="position: relative; left: -50%;">
											@foreach ($date_coming as $key=> $value)
											<div class="col s6 " style="height: 100px;">
												<p class="fontCrimson" style="text-align: right; line-height: 80%; font-size: 500%; font-weight: bold; margin-top: 0%; margin-bottom: 0%">{{$value->Dia}}</p>
											</div>
											<div class="col s6" style="height: 100px; margin-left: -8%;">
												<p class="fontCrimson" style="text-align: left; line-height: 110%; margin-top: 2%; font-size: 180%; font-weight: bold; margin-bottom: 0%; text-transform: uppercase;">{{$value->NombreMes}}</p>
												<p class="fontCrimson" style="text-align: left; line-height: 110%; margin-top: 2%; font-size: 180%; font-weight: bold; margin-bottom: 0%">{{$value->Anio}}</p>
											</div>
											@endforeach
										</div>
									</div>
								<img style="width: 100%" src="media/img/subasta/{{$submodule_section_data->background_calendario}}" alt="{{$submodule_section_data->background_calendario_alt}}">
							</div>
						</div>
					</div>
					<div class="col s12 l6">
						<div class="row">
							<div class="col s12">
								<div class="row">
									<p class="gb_gray date_current" style="margin-top: 6em;"></p>
								</div>
							</div>
							<div class="col s12 m12 l12 margin-top-20">
								<div class="row">
									<div class="col s12">
										@foreach ($date_coming as $key=> $value)
										<p style="text-align: center;" class="light text-proxim">El desarrollo de la próxima <br> escultura comenzará a <br> transmitirse el próximo {{$value->Dia}} de <br> {{$value->NombreMes}} de {{$value->Anio}}, <br> y puedes seguirlo aquí.</p>
										@endforeach
									</div>
								</div>
									<div class="row">
									<div style="">
										<form style="padding-bottom: 12px;" id="FormProx" class="col s12 gb_arrow_box whiteform contract">
											<p class="gb_textcs_x1" style="margin: 3px 0 5px 10px;">Me interesa recibir información sobre la próxima escultura:</p>
											<div class="row no-margin-bottom">
												<div class="col s12">
													<div class="col s12 l4">
														<input id="nameProx" class="border_cs" type="text" name="name" required placeholder="NOMBRE">
													</div>
													<div class="col s12 l4">
														<input id="emailProx" class="border_cs" type="email" name="email" required placeholder="E-MAIL">
													</div>
													<div class="col s12 l4">
														<input id="cityProx" class="border_cs" type="text" name="city" required placeholder="CIUDAD">
													</div>
												</div>
												<div class="col s12">
													<div class="col s12 l8">
														<textarea id="commentProx" style="height: 80px;" class="border_cs" maxlength="200" name="comment" rows=5 required placeholder="COMENTARIOS"></textarea>
													</div>
													<div class="col s12 l4">
														<div id="progressdivProx" class="progress hide"><div class="indeterminate"></div></div>
														<a id="sendBtnProx" class="btn btn-small col s12 green waves-effect margin-top-13 gb_noboxshadow">CONTÁCTENME</a>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Start Modal Proximamente Form -->
		<div id="msgModal" class="modal border-radius-10">
			<div class="notification">
				<h4 style="text-align: center;" id="titleModalMsg"></h4>
				<p style="font-size: 1.4rem; line-height: 1.8rem; text-align: center;" id="showmsgModal"></p>
			</div>
			<div class="modal-footer" style="text-align: center; padding-bottom: 4.5em;">
				<button style="float: inherit;" class="modal-action modal-close waves-effect grey center lighten-5 grey-border btn"><i class="material-icons right">navigate_next</i>ACEPTAR</button>
			</div>
		</div>
		<!-- End Modal Proximamente Form -->
		<!-- End Coming Soon -->
