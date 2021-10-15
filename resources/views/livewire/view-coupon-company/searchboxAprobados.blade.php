<div class="row justify-content-between">
	<div class="col-lg-6 col-md-4 col-sm-6">
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text input-gp" style="background: #1B4F72;">
					<a class="text-white"><i class="fas fa-search"></i></a>
				</span>
			</div>
			<input type="text" wire:model="searchAprobado" placeholder="Buscar" class="form-control">
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6">
		<div class="input-group mb-4">
			<ul class="tabs tab-pills">
	
				<li style="list-style: none;">
					<a href="{{ url('/creador-cupon')}}" class="tabmenu btn text-white btn-success"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path></svg> Crear</a>
                    </li>
          
                </ul>
		</div>
	</div>
</div>