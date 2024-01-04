@section('title', __('Competitividadespartidos'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Competitividadespartido Listing </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Competitividadespartidos">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Competitividadespartidos
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.competitividadespartidos.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Municipio</th>
								<th>Votacion total</th>
								<th>VVE</th>
								<th>PAN   (%)</th>
								<th>PRI   (%)</th>
								<th>PRD   (%)</th>
								<th>PT    (%)</th>
								<th>PVEM (%)</th>(%)
								<th>MORENA (%)</th>
								<th>PANAL (%)</th>
								<th>Va por Mexico (%)</th>
								<th>Juntos haremos historia (%)</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($competitividadespartidos as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->descripcionmunicipio }}</td>
								<td>{{ $row->votaciontotal }}</td>
								<td>{{ $row->vve }}</td>
								<td>{{ number_format($row->competitividadpan* 100, 2, ".", ".")}}</td>
								<td>{{ number_format($row->competitividadpri* 100, 2, ".", ".") }}</td>
								<td>{{ number_format($row->competitividadprd* 100, 2, ".", ".") }}</td>
								<td>{{ number_format($row->competitividadpt* 100, 2, ".", ".")}}</td>
								<td>{{ number_format($row->competitividadpvem* 100, 2, ".", ".") }}</td>
								<td>{{ number_format($row->competitividadmorena* 100, 2, ".", ".")}}</td>
								<td>{{ number_format($row->competitividadpanal* 100, 2, ".", ".")}}</td>
								<td>{{ number_format($row->totalcoalicion1* 100, 2, ".", ".")}}</td>
								<td>{{ number_format($row->totalcoalicion2* 100, 2, ".", ".")}}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Actions
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Competitividadespartido id {{$row->id}}? \nDeleted Competitividadespartidos cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a></li>  
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
					<div class="float-end">{{ $competitividadespartidos->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>