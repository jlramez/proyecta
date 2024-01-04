<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Competitividadespartido</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="municipios_id"></label>
                        <input wire:model="municipios_id" type="text" class="form-control" id="municipios_id" placeholder="Municipios Id">@error('municipios_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="descripcionmunicipio"></label>
                        <input wire:model="descripcionmunicipio" type="text" class="form-control" id="descripcionmunicipio" placeholder="Descripcionmunicipio">@error('descripcionmunicipio') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="votaciontotal"></label>
                        <input wire:model="votaciontotal" type="text" class="form-control" id="votaciontotal" placeholder="Votaciontotal">@error('votaciontotal') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="vve"></label>
                        <input wire:model="vve" type="text" class="form-control" id="vve" placeholder="Vve">@error('vve') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="competitividadpan"></label>
                        <input wire:model="competitividadpan" type="text" class="form-control" id="competitividadpan" placeholder="Competitividadpan">@error('competitividadpan') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="competitividadpri"></label>
                        <input wire:model="competitividadpri" type="text" class="form-control" id="competitividadpri" placeholder="Competitividadpri">@error('competitividadpri') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="competitividadprd"></label>
                        <input wire:model="competitividadprd" type="text" class="form-control" id="competitividadprd" placeholder="Competitividadprd">@error('competitividadprd') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="competitividadpt"></label>
                        <input wire:model="competitividadpt" type="text" class="form-control" id="competitividadpt" placeholder="Competitividadpt">@error('competitividadpt') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="competitividadpvem"></label>
                        <input wire:model="competitividadpvem" type="text" class="form-control" id="competitividadpvem" placeholder="Competitividadpvem">@error('competitividadpvem') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="competitividadmorena"></label>
                        <input wire:model="competitividadmorena" type="text" class="form-control" id="competitividadmorena" placeholder="Competitividadmorena">@error('competitividadmorena') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="competitividadpanal"></label>
                        <input wire:model="competitividadpanal" type="text" class="form-control" id="competitividadpanal" placeholder="Competitividadpanal">@error('competitividadpanal') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="totalcoalicion1"></label>
                        <input wire:model="totalcoalicion1" type="text" class="form-control" id="totalcoalicion1" placeholder="Totalcoalicion1">@error('totalcoalicion1') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="totalcoalicion2"></label>
                        <input wire:model="totalcoalicion2" type="text" class="form-control" id="totalcoalicion2" placeholder="Totalcoalicion2">@error('totalcoalicion2') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Update Competitividadespartido</h5>
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
                        <label for="descripcionmunicipio"></label>
                        <input wire:model="descripcionmunicipio" type="text" class="form-control" id="descripcionmunicipio" placeholder="Descripcionmunicipio">@error('descripcionmunicipio') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="votaciontotal"></label>
                        <input wire:model="votaciontotal" type="text" class="form-control" id="votaciontotal" placeholder="Votaciontotal">@error('votaciontotal') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="vve"></label>
                        <input wire:model="vve" type="text" class="form-control" id="vve" placeholder="Vve">@error('vve') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="competitividadpan"></label>
                        <input wire:model="competitividadpan" type="text" class="form-control" id="competitividadpan" placeholder="Competitividadpan">@error('competitividadpan') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="competitividadpri"></label>
                        <input wire:model="competitividadpri" type="text" class="form-control" id="competitividadpri" placeholder="Competitividadpri">@error('competitividadpri') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="competitividadprd"></label>
                        <input wire:model="competitividadprd" type="text" class="form-control" id="competitividadprd" placeholder="Competitividadprd">@error('competitividadprd') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="competitividadpt"></label>
                        <input wire:model="competitividadpt" type="text" class="form-control" id="competitividadpt" placeholder="Competitividadpt">@error('competitividadpt') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="competitividadpvem"></label>
                        <input wire:model="competitividadpvem" type="text" class="form-control" id="competitividadpvem" placeholder="Competitividadpvem">@error('competitividadpvem') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="competitividadmorena"></label>
                        <input wire:model="competitividadmorena" type="text" class="form-control" id="competitividadmorena" placeholder="Competitividadmorena">@error('competitividadmorena') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="competitividadpanal"></label>
                        <input wire:model="competitividadpanal" type="text" class="form-control" id="competitividadpanal" placeholder="Competitividadpanal">@error('competitividadpanal') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="totalcoalicion1"></label>
                        <input wire:model="totalcoalicion1" type="text" class="form-control" id="totalcoalicion1" placeholder="Totalcoalicion1">@error('totalcoalicion1') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="totalcoalicion2"></label>
                        <input wire:model="totalcoalicion2" type="text" class="form-control" id="totalcoalicion2" placeholder="Totalcoalicion2">@error('totalcoalicion2') <span class="error text-danger">{{ $message }}</span> @enderror
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
