@include('common.modalHead')
<div class="row">
	<div class="col-sm-12 col-md-6 mt-3">
		<label>Nombre</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<span class="fas fa-edit">

					</span>
				</span>
			</div>
			<input type="text" wire:model.lazy="name" class="form-control" placeholder="Ingrese Nombre del rubro">
		</div>
		@error('name') <span class="text-danger er">{{ $message }}</span> @enderror
	</div>
	<div class="col-sm-12 col-md-6 mt-3">
		<label>Telefono</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<span class="fas fa-edit">

					</span>
				</span>
			</div>
			<input type="text" wire:model.lazy="phone" class="form-control" placeholder="Ingrese Nombre del rubro">
		</div>
		@error('phone') <span class="text-danger er">{{ $message }}</span> @enderror
	</div>
		<div class="col-sm-12 col-md-6 mt-3">
		<label>Direccion</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<span class="fas fa-edit">

					</span>
				</span>
			</div>
			<input type="text" wire:model.lazy="address" class="form-control" placeholder="Ingrese Nombre del rubro">
		</div>
		@error('address') <span class="text-danger er">{{ $message }}</span> @enderror
	</div>
	<div class="col-sm-12 col-md-6 mt-3">
		<label>Dui</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<span class="fas fa-edit">

					</span>
				</span>
			</div>
			<input type="text" wire:model.lazy="dui" class="form-control" placeholder="Ingrese Nombre del rubro">
		</div>
		@error('dui') <span class="text-danger er">{{ $message }}</span> @enderror
	</div>
		<div class="col-sm-12 col-md-12 mt-3">
		<label>Correo</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<span class="fas fa-edit">

					</span>
				</span>
			</div>
			<input type="email" wire:model.lazy="email" class="form-control" placeholder="Ingrese Nombre del rubro">
		</div>
		@error('email') <span class="text-danger er">{{ $message }}</span> @enderror
	</div>

		<div class="col-sm-12 col-md-6 mt-3">
			<label>Estado</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<span class="fas fa-edit">

					</span>
				</span>
			</div>
			<select wire:model.lazy="status" class="form-control">
				<option value="Seleccionar" selected>Seleccionar</option>
				<option value="Active">Active</option>
				<option value="Locked">Bloqueado</option>

			</select>
		</div>
		@error('status') <span class="text-danger er">{{ $message }}</span> @enderror
	</div>
		<div class="col-sm-12 col-md-6 mt-3">
			<label>Rol</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<span class="fas fa-edit">

					</span>
				</span>
			</div>
			<select wire:model.lazy="profile" class="form-control">
				<option value="Seleccionar" selected>Seleccionar</option>
				@foreach($roles as $role)
				<option value="{{$role->name}}" selected>{{$role->name}}</option>
				@endforeach
			</select>
		</div>
		@error('profile') <span class="text-danger er">{{ $message }}</span> @enderror
	</div>

	 @if($profile == 'Empresa')

	  <div class="card card-header col-sm-12 col-md-12 mt-3" style="background: #1B4F72;">
		<label class="text-white"><strong>Datos de la Empresa</strong></label>
	</div>

	 	<div class="col-sm-12 col-md-6 mt-3">
		<label>Nombre Empresa</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<span class="fas fa-edit">

					</span>
				</span>
			</div>
			<input type="text" wire:model.lazy="nameCompany" class="form-control" placeholder="Ingrese Nombre del rubro">
		</div>
		@error('nameCompany') <span class="text-danger er">{{ $message }}</span> @enderror
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
<hr>
		<div class="col-sm-12 col-md-6 mt-3">
			<label>Rubro</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<span class="fas fa-edit">

					</span>
				</span>
			</div>
			<select wire:model.lazy="rubroCompany" class="form-control">
				<option value="Seleccionar" selected>Seleccionar</option>
				@foreach($rubros as $rubro)
				<option value="{{$rubro->id}}" selected>{{$rubro->name}}</option>
				@endforeach
			</select>
		</div>
		@error('rubroCompany') <span class="text-danger er">{{ $message }}</span> @enderror
	</div>
	@endif

</div>
@include('common.modalFooter')