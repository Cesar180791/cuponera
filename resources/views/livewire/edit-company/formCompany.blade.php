<div wire:ignore.self class="modal fade" id="theModalB" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #1B4F72;">
        <h5 class="modal-title text-white">
              <b>{{$componentName}}</b> | {{$selected_id > 0 ? 'Editar' : 'Crear'}}
        </h5>
        <h6 class="text-center text-warning" wire:loading>Por Favor Espere</h6>
      </div>
      <div class="modal-body">
<div class="row">
	 	<div class="col-sm-12 col-md-6 mt-3">
		<label>Nombre Empresa</label>
		<div class="input-group"> 
			<div class="input-group-prepend">
				<span class="input-group-text">
					<span class="fas fa-edit">

					</span>
				</span>
			</div>
			<input type="text" wire:model.lazy="nameCompanies" class="form-control" placeholder="Ingrese Nombre del rubro">
		</div>
		@error('nameCompanies') <span class="text-danger er">{{ $message }}</span> @enderror
	</div>
	 	<div class="col-sm-12 col-md-6 mt-3">
		<label>Comision</label>
		<div class="input-group"> 
			<div class="input-group-prepend">
				<span class="input-group-text">
					<span class="fas fa-edit">

					</span>
				</span>
			</div>
			<input type="text" wire:model.lazy="comision" class="form-control" placeholder="Ingrese Nombre del rubro">
		</div>
		@error('comision') <span class="text-danger er">{{ $message }}</span> @enderror
	</div>
	 <div class="col-sm-12 col-md-6 mt-3">
		<label>Direccion Empresa</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<span class="fas fa-edit">

					</span>
				</span>
			</div>
			<input type="text" wire:model.lazy="addressCompany" class="form-control" placeholder="Ingrese Nombre del rubro">
		</div>
		@error('addressCompany') <span class="text-danger er">{{ $message }}</span> @enderror
	</div>
	 <div class="col-sm-12 col-md-6 mt-3">
		<label>Telefono Empresa</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<span class="fas fa-edit">

					</span>
				</span>
			</div>
			<input type="text" wire:model.lazy="phoneCompany" class="form-control" placeholder="Ingrese Nombre del rubro">
		</div>
		@error('phoneCompany') <span class="text-danger er">{{ $message }}</span> @enderror
	</div>
		<div class="col-sm-12 col-md-6 mt-3">
			<label>Rubro</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<span class="fas fa-edit">

					</span>
				</span>
			</div>
			<select wire:model.lazy="heading_id" class="form-control">
				<option value="Seleccionar" selected>Seleccionar</option>
				@foreach($rubros as $rubro)
				<option value="{{$rubro->id}}" selected>{{$rubro->name}}</option>
				@endforeach
			</select>
		</div>
		@error('heading_id') <span class="text-danger er">{{ $message }}</span> @enderror
	</div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" wire:click.prevent="resetUI()" class="btn btn-dark close-btn text-info" data-dismiss="modal">Cerrar</button>
         @if($selected_id < 1)
        <button type="button" wire:click.prevent="StoreCompany()" class="btn btn-dark close-modal">Guardar</button>
         @else
        <button type="button" wire:click.prevent="Update()" class="btn btn-dark close-modal">Actualizar</button>
       @endif
      </div>
    </div>
  </div>
</div>