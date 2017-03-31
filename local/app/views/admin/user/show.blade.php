@extends('admin/main_dashboard')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="container">
					<div id="highlight" class="scrollspy m-btm-10px">
						<h3 style="display: inline-block; margin-bottom:1px; " class="header">Usuarios</h3>
					</div>
					<div class="row">
					<div class="col l12">
						<div class="row">
							<div class="col s12">
								<table class="striped pujas">
									<thead>
										<tr>
											<th>#</th>
											<th>NOMBRE</th>
											<th>APODO</th>
											<th>E-MAIL</th>
											<th>CONFIRMADO</th>
											<th>FECHA ALTA</th>											
										</tr>
									</thead>
									<tbody>
									@foreach( $users as $key => $user )
										<tr>
											<td> {{ (Input::get('page', 1) - 1) * $users->getPerPage() + $key + 1 }}</td>
											<td>{{$user->name}}</td>
											<td>{{$user->nickname}}</td>
											<td>{{$user->email}}</td>
											<td>{{$user->status ? 'SI' : 'NO' }}</td>
											<td>{{$user->creado}}</td>							
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<?php echo $users->links(); ?>	
				</div>
				</div>
			</div>
		</div>
	</div>

@stop
@section('addJs')

@stop