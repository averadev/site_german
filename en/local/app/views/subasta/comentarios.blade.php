
		<div  id="tab6" class="bg_comentario scrollspy" style="background-image: url('../media/img/subasta/{{$submodule_section_data->background_comentarios}}');" >
			<div class="section no-pad-bot">
				<div class="container">
					<div class="row center">
						<span style="margin-top: 2em; font-size: 3.5em; font-weight: bold; font-style: italic; color: #2d332c; line-height: 0rem;" class="fontCrimson header col s12 light">Comments</span>
					</div>
					<br><br>
				</div>
			</div>
			<div class="section no-pad-bo">
				<div class="container">
					<div class="row no_padd1 no-margin-bottom">
					<?php
							$sectionComments = $comments;
							$row = null;
							$numberRows = [2,2,3];

							$styles1 = [
								['col s12 m12 l8 no_padd1 comment-type1','col s12 m12 l4 no_padd1 comment-type2'],
								['col s12 m12 l8 no_padd1 comment-type2','col s12 m12 l4 no_padd1 comment-type1'],
								['col s12 m12 l6 no_padd1 comment-type1','col s12 m12 l6 no_padd1 comment-type2'],
								['col s12 m12 l6 no_padd1 comment-type2','col s12 m12 l6 no_padd1 comment-type1']
							];
				
							$styles2 = [
								['col s12 m12 l4 no_padd1 comment-type1','col s12 m12 l4 no_padd1 comment-type2','col s12 m12 l4 no_padd1 comment-type1'],
								['col s12 m12 l4 no_padd1 comment-type2','col s12 m12 l4 no_padd1 comment-type1','col s12 m12 l4 no_padd1 comment-type2']
							];
								shuffle($styles1);
								shuffle($styles2);
								$rows2 = $styles1;
								$rows3 = $styles2;

								while( count($sectionComments) >1 ){
								shuffle($numberRows);
								if(count($rows2) < 1){
									shuffle($styles1);
									$rows2 = $styles1;
								}
								if(count($rows3) < 1){
									shuffle($styles2);
									$rows3 = $styles2;
								}
								$render2rows = (array_pop($rows2));
								$render3rows = (array_pop($rows3));
								$row = array_splice( $sectionComments,0,current($numberRows) );
								if(count($row) == 2){ /*Cuando es un row de 2 columnas*/
									foreach ($row as $key => $value) {
									/*Render two rows div*/
										?> 
											<div class="{{$render2rows[$key]}} ">
												<div class="card no_margin1">
													<div class="gb_container_header" style="background-color: #2e332d; z-index: 9;">
														<h4>{{$value->NombreEscultura}}</h4>
													</div>
													<div class="card-content">
														<div style="margin-top: 40px; margin-bottom: 50px;">
															<div class="gb_text_rs">
																<p>{{$value->Comentario}}...</p>
																<div style="display: flex; align-items: center;">
																	<div class="gb_date2"><img src="../media/img/subasta/bg_avatar.jpg" alt="avatar_icono" ></div>
																	<div style="padding: 7px;">
																		<span style="font-weight: 500;">{{$value->NombreNick}}.- </span><span class="gb_italic">{{$value->Dia}} de {{$value->NombreMes}} de {{$value->Anio}}</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="social_img"><img src="../media/img/subasta/comments.png" alt="comentario_icono"></div>
													</div>
												</div>
											</div>
										<?php	
									}
								}else{ /*cuando es un row 3 columnas*/
									foreach ($row as $key => $value) {
									/*Render three rows div*/
										?> 
											<div class="{{$render3rows[$key]}} ">
												<div class="card no_margin1">
													<div class="gb_container_header" style="background-color: #2e332d; z-index: 9;">
														<h4>{{$value->NombreEscultura}}</h4>
													</div>
													<div class="card-content">
														<div style="margin-top: 40px; margin-bottom: 50px;">
															<div class="gb_text_rs">
																<p>{{$value->Comentario}}...</p>
																<div style="display: flex; align-items: center;">
																	<div class="gb_date2"><img src="../media/img/subasta/bg_avatar.jpg"></div>
																	<div style="padding: 7px;">
																		<span style="font-weight: 500;">{{$value->NombreNick}}.- </span><span class="gb_italic">{{$value->Dia}} de {{$value->NombreMes}} de {{$value->Anio}}</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="social_img"><img src="../media/img/subasta/comments.png" alt=""></div>
													</div>
												</div>
											</div>	
										<?php	
									}
								} //end else
							}
						?>
					</div>
				</div>
			</div>
		</div>

