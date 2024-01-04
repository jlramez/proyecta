<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Novotosdistrito</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="distritos_id"></label>
                        <input wire:model="distritos_id" type="text" class="form-control" id="distritos_id" placeholder="Distritos Id">@error('distritos_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="distritos_desc"></label>
                        <input wire:model="distritos_desc" type="text" class="form-control" id="distritos_desc" placeholder="Distritos Desc">@error('distritos_desc') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="partidos_id"></label>
                        <input wire:model="partidos_id" type="text" class="form-control" id="partidos_id" placeholder="Partidos Id">@error('partidos_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="partidos_desc"></label>
                        <input wire:model="partidos_desc" type="text" class="form-control" id="partidos_desc" placeholder="Partidos Desc">@error('partidos_desc') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Update Novotosdistrito</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="distritos_id"></label>
                        <input wire:model="distritos_id" type="text" class="form-control" id="distritos_id" placeholder="Distritos Id">@error('distritos_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="distritos_desc"></label>
                        <input wire:model="distritos_desc" type="text" class="form-control" id="distritos_desc" placeholder="Distritos Desc">@error('distritos_desc') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="partidos_id"></label>
                        <input wire:model="partidos_id" type="text" class="form-control" id="partidos_id" placeholder="Partidos Id">@error('partidos_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="partidos_desc"></label>
                        <input wire:model="partidos_desc" type="text" class="form-control" id="partidos_desc" placeholder="Partidos Desc">@error('partidos_desc') <span class="error text-danger">{{ $message }}</span> @enderror
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
