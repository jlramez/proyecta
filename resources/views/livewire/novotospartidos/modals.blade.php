<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Novotospartido</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="municipios_id"></label>
                        <input wire:model="municipios_id" type="text" class="form-control" id="municipios_id" placeholder="Municipios Id">@error('municipios_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="mun_descripcion"></label>
                        <input wire:model="mun_descripcion" type="text" class="form-control" id="mun_descripcion" placeholder="Mun Descripcion">@error('mun_descripcion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="partidos_id"></label>
                        <input wire:model="partidos_id" type="text" class="form-control" id="partidos_id" placeholder="Partidos Id">@error('partidos_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="partido_descripcion"></label>
                        <input wire:model="partido_descripcion" type="text" class="form-control" id="partido_descripcion" placeholder="Partido Descripcion">@error('partido_descripcion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="novotos"></label>
                        <input wire:model="novotos" type="text" class="form-control" id="novotos" placeholder="Novotos">@error('novotos') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Novotospartido</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="municipios_id"></label>
                        <input wire:model="municipios_id" type="text" class="form-control" id="municipios_id" placeholder="Municipios Id">@error('municipios_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="mun_descripcion"></label>
                        <input wire:model="mun_descripcion" type="text" class="form-control" id="mun_descripcion" placeholder="Mun Descripcion">@error('mun_descripcion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="partidos_id"></label>
                        <input wire:model="partidos_id" type="text" class="form-control" id="partidos_id" placeholder="Partidos Id">@error('partidos_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="partido_descripcion"></label>
                        <input wire:model="partido_descripcion" type="text" class="form-control" id="partido_descripcion" placeholder="Partido Descripcion">@error('partido_descripcion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="novotos"></label>
                        <input wire:model="novotos" type="text" class="form-control" id="novotos" placeholder="Novotos">@error('novotos') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary">Save</button>
            </div>
       </div>
    </div>
</div>
