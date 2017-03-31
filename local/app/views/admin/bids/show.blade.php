@extends('admin/main_dashboard')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="container">
					<div id="highlight" class="scrollspy m-btm-10px">
						<h3 style="display: inline-block; " class="header">Pujas</h3>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<select value="3" onchange="location = this.value;" class="select-no-margin">
								@foreach ($subastas as $key => $subasta)
									<option {{ $subasta->id == $activeAuction ? 'selected = selected' : '' }} value="{{$subasta->id}}">{{$subasta->name}}</option>
								@endforeach
							</select>
						 	<label>Subasta:</label>
						</div>
						<div class="col s6">
							<a data-tooltip="Actualizar" data-position="left" href="{{url('/admin/pujas/'.$activeAuction.'')}}" style="float: right; margin-top: 3%; margin-right: 3%;" class="btn-floating btn-large waves-effect waves-light green darken-4 circle-button tooltipped" ><i style="font-size: 2.3rem;" class="material-icons">cached</i></a>
						</div>
					</div>
					<div class="row">
					<div class="col l12">
						<div class="row">
							<div class="col s12">
								<table class="striped pujas">
									<thead>
										<tr>
											<th>#</th>
											<th>USUARIO</th>
											<th>CANTIDAD</th>
											<th>FECHA</th>
											<th>COMENTARIO</th>									
										</tr>
									</thead>
									<tbody>
									@foreach( $bids as $key => $bid )
										<tr>
											<td> {{ (Input::get('page', 1) - 1) * $bids->getPerPage() + $key + 1 }}</td>
											<td>{{$bid->name}}</td>
											<td>${{$bid->cantidad2}}</td>
											<td>{{$bid->biddate}}</td>
											<td>{{$bid->comment}}</td>									
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<?php echo $bids->links(); ?>	
				</div>
				</div>
			</div>
		</div>
	</div>

@stop
@section('addJs')

@stop