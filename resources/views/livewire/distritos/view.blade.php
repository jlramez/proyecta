@section('title', __('Distritos'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fa-solid fa-building-circle-arrow-right"></i>
							Listado de distritos </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Distritos">
						</div>
						<div class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="fa fa-plus"></i>  Nuevo Distrito
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.distritos.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Descripcion</th>
								<th>Municipios</th>
								<th>Secciones</th>
								<td>ACCIONES</td>
							</tr>
						</thead>
						<tbody>
							@forelse($distritos as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->descripcion }}</td>
								<td>
									@foreach($row->municipios as $municipios)
									<span class="badge text-bg-secondary">{{ $municipios->descripcion }}</span>
									@endforeach
								</td>
								<td>
									@foreach($row->municipios as $secciones)
									<span class="badge text-bg-secondary">{{ $secciones->seccion }}</span>
									@endforeach
								</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Acciones
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#addmpio-distritoModal" class="dropdown-item" wire:click="addmpio({{$row->id}})"><i class="fa fa-edit"></i> Agregar municipios </a></li>
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Distrito id {{$row->id}}? \nDeleted Distritos cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a></li>  
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
					<div class="float-end">{{ $distritos->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>