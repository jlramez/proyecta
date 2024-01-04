@section('title', __('Secciones'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fa-solid fa-location-crosshairs"></i>
							Listado de secciones </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar...">
						</div>
						<div class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="fa fa-plus"></i>  Nueva sección
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.secciones.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Distrito</th>
								<th>Entidad</th>
								<th>Seccion</th>
								<th>Tipo de seccion</th>
								<th>Distrito federal</th>
								<th>Municipio</th>
								<td>ACCIONES</td>
							</tr>
						</thead>
						<tbody>
							@forelse($secciones as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ mb_strtoupper($row->distritos->descripcion ?? '') }}</td>
								<td>{{mb_strtoupper($row->municipios->entidades->descripcion  ?? '')}}</td>
								<td>{{ $row->seccion }}</td>
								<td>{{ mb_strtoupper($row->tiposecciones->descripcion ?? '')}}</td>
								<td>{{ $row->distritosfederales }}</td>
								<td>{{ mb_strtoupper($row->municipios->descripcion  ?? '') }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Acciones
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Seccione id {{$row->id}}? \nDeleted Secciones cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a></li>  
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
					<div class="float-end">{{ $secciones->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>