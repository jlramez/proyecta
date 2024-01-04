<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Nueva sección</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                            <label for="seccion">Distrito</label>
                            <select  wire:model="disrtritos_id" name="distritos_id" id="distritos_id" class="form-control">
                                    <option >--Seleccione distrito--</option>  
                                    @foreach ($distritos as $row) 
                                    <option  value="{{ $row->id }}"> {{  mb_strtoupper($row->descripcion ?? '')}}</option>
                                    @endforeach
                            </select>
                     </div> 
                    <div class="form-group d-none">
                        <label for="entidades_id"></label>
                        <input wire:model="entidades_id" type="text" class="form-control" id="entidades_id" placeholder="Entidades Id">@error('entidades_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="seccion">No. de sección</label>
                        <input wire:model="seccion" type="text" class="form-control" id="seccion" placeholder="Seccion">@error('seccion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="seccion">TIpo de sección</label>
                        <select  wire:model="tiposecciones_id" name="tiposeccioes_id" id="tiposecciones_id" class="form-control">
                                <option >--Seleccione el tipo de sección--</option>  
                                @foreach ($tiposecciones as $row) 
                                <option  value="{{ $row->id }}"> {{  mb_strtoupper($row->descripcion ?? '')}}</option>
                                @endforeach
                        </select>
                    </div> 
                    <div class="form-group">
                        <label for="distritosfederales">Distrito federal</label>
                        <input wire:model="distritosfederales" type="text" class="form-control" id="distritosfederales" placeholder="Distrito federal">@error('distritosfederales') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="seccion">Municipio</label>
                        <select  wire:model="municipios_id" name="municipios_id" id="municipios_id" class="form-control">
                                <option >--Seleccione el tipo municipio--</option>  
                                @foreach ($municipios as $row) 
                                <option  value="{{ $row->id }}"> {{  mb_strtoupper($row->descripcion ?? '')}}</option>
                                @endforeach
                        </select>
                    </div> 

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Editar sección</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                            <label for="seccion">Distrito</label>
                            <select  wire:model="disrtritos_id" name="distritos_id" id="distritos_id" class="form-control">
                                    <option >--Seleccione distrito--</option>  
                                    @foreach ($distritos as $row) 
                                    <option  value="{{ $row->id }}"> {{  mb_strtoupper($row->descripcion ?? '')}}</option>
                                    @endforeach
                            </select>
                     </div> 
                    <div class="form-group d-none">
                        <label for="entidades_id"></label>
                        <input wire:model="entidades_id" type="text" class="form-control" id="entidades_id" placeholder="Entidades Id">@error('entidades_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="seccion">No. de sección</label>
                        <input wire:model="seccion" type="text" class="form-control" id="seccion" placeholder="Seccion">@error('seccion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="seccion">TIpo de sección</label>
                        <select  wire:model="tiposecciones_id" name="tiposeccioes_id" id="tiposecciones_id" class="form-control">
                                <option >--Seleccione el tipo de sección--</option>  
                                @foreach ($tiposecciones as $row) 
                                <option  value="{{ $row->id }}"> {{  mb_strtoupper($row->descripcion ?? '')}}</option>
                                @endforeach
                        </select>
                    </div> 
                    <div class="form-group">
                        <label for="distritosfederales">Distrito federal</label>
                        <input wire:model="distritosfederales" type="text" class="form-control" id="distritosfederales" placeholder="Distritos federal">@error('distritosfederales') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="seccion">Municipio</label>
                        <select  wire:model="municipios_id" name="municipios_id" id="municipios_id" class="form-control">
                                <option >--Seleccione el tipo municipio--</option>  
                                @foreach ($municipios as $row) 
                                <option  value="{{ $row->id }}"> {{  mb_strtoupper($row->descripcion ?? '')}}</option>
                                @endforeach
                        </select>
                    </div> 

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar </button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary">Guardar</button>
            </div>
       </div>
    </div>
</div>
