@extends('admin/main_dashboard')
@section('content')
<style type="text/css">
	.btn-large{
		margin-bottom: 10px;
		margin-right: 10px;
		border-radius: 10px;
	}
</style>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="container">
					<div id="highlight" class="section scrollspy">
							<h3 class="header">Subastas</h3>
							<div class="row">
							  <div class="col s12">
								<table class="highlight">
									<thead>
										<tr>
											<th data-field="id">#</th>
											<th data-field="name">NOMBRE</th>
											<th data-field="inicio">FECHA INICIO</th>
											<th data-field="inicio">FECHA FINAL</th>
										</tr>
									</thead>
									<tbody>
									@foreach( $auctions as $key => $auction )
										<tr>
											<td>{{$key+1}}</td>
											<td>{{$auction->name}}</td>
											<td>{{$auction->iniDate}}</td>
											<td>{{$auction->endDate}}</td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<?php echo $auctions->links(); ?>
			</div>
		</div>
	</div>
@stop
@section('addJs')
	<script src="../js/admin/auction.js"></script>
@stop