@section('title', __('Novotospartidos'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fa-solid fa-check-to-slot"></i>
							Listado de municipios y voto </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar...">
						</div>
						<div>&nbsp;</div>
						<!--<div class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#createDataModal" d-none>
						<i class="fa fa-plus"></i>  Nuevo registro
						</div>-->
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.novotospartidos.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Municipio</th>
								<th>Partido político</th>
								<th>No. de votos</th>
								<td>ACCIONES</td>
							</tr>
						</thead>
						<tbody>
							@forelse($novotospartidos as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ mb_strtoupper($row->municipios->descripcion ?? '') }}</td>
								<td>{{ mb_strtoupper($row->partidos->descripcion ?? '')}}</td>
								<td>{{ $row->novotos }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Acciones
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Novotospartido id {{$row->id}}? \nDeleted Novotospartidos cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a></li>  
										</ul>
									</div>								
								</td>
							</tr>
							@empty
							<tr>
								<td class="text-center" colspan="100%">No data Found </td>
							</tr>
							@endforelse
						</tbody>
					</table>						
					<div class="float-end">{{ $novotospartidos->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>