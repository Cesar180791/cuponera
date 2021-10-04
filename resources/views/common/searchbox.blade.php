<div class="row justify-content-between">
	<div class="col-lg-6 col-md-4 col-sm-6">
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text input-gp" style="background: #1B4F72;">
					<a class="text-white"><i class="fas fa-search"></i></a>
				</span>
			</div>
			<input type="text" wire:model="search" placeholder="Buscar" class="form-control">
			<div>
			<select wire:model="pagination" class="form-control  basic">
				<option value="5" selected="selected">5</option>
				<option value="10">10</option>
				<option value="15">15</option>
				<option value="25">25</option>
				<option value="50">50</option>
				<option value="100">100</option>
			</select>
		</div>

		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6">
		<div class="input-group mb-4">
			<ul class="tabs tab-pills">
				<li style="list-style: none;">
					<a href="javascript:void(0)" class="tabmenu btn text-white" style="background: #1B4F72;" data-toggle="modal" data-target="#theModal"><i class="fas fa-folder-plus"></i> Agregar</a>
                    </li>
                </ul>
	
		</div>
	</div>
</div>