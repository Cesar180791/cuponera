<div wire:ignore.self class="modal fade" id="theModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #1B4F72;">
        <h5 class="modal-title text-white">
              <b>{{$componentNameModalView}}</b> | {{$selected_id > 0 ? 'Cambiar Estado' : 'Editar'}}
        </h5>
        <h6 class="text-center text-warning" wire:loading>Por Favor Espere</h6>
      </div>
      <div class="modal-body">




           <div class="row mt-3">
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Titulo</label><br>
                        <label wire:model.lazy="titulo"><span style="color: #001EFF">{{$titulo}}</span><label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Descripcion</label><br>
                        <label wire:model.lazy="descripcion"><span style="color: #001EFF">{{$descripcion}}</span><label>
                        @error('descripcion') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Precio Regular</label><br>
                        <label wire:model.lazy="precioRegular"><span style="color: #001EFF">${{$precioRegular}}</span><label>
                        @error('precioRegular') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Precio Oferta</label><br>
                        <label wire:model.lazy="PrecioOferta"><span style="color: #001EFF">${{$PrecioOferta}}</span></label>
                        @error('PrecioOferta') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Fecha Inicio</label><br>
                        <label wire:model="fechaInicio"><span style="color: #001EFF">{{$fechaInicio}}</span></label>
                        @error('fechaInicio') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Fecha Final de Venta</label><br>
                        <label wire:model="fechaFinal"><span style="color: #001EFF">{{$fechaFinal}}</span></label>
                        @error('fechaFinal') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Fecha Final de Canje</label><br>
                        <label wire:model="fechaLimiteCanje"><span style="color: #001EFF">{{$fechaLimiteCanje}}</span></label>
                        @error('fechaLimiteCanje') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Cantidad Limite</label><br>
                        <label wire:model.lazy="cantidadCupon"><span style="color: #001EFF">{{$cantidadCupon}}</span></label>
                        @error('cantidadCupon') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Otros Detalles</label><br>
                        <label wire:model.lazy="otrosDetalles"><span style="color: #001EFF">{{$otrosDetalles}}</span>
                        @error('otrosDetalles') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                       <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Estado</label>
                            <select wire:model.lazy="statusCoupon" class="form-control">
                                <option value="Seleccionar" selected>Selecionar</option>
                                <option value="Oferta Aprobada">Oferta Aprobada</option>
                                <option value="Oferta Rechazada">Oferta Rechazada</option>
                            </select>
                            @error('statusCoupon') <span class="text-danger er">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Motivo</label>
                           <input wire:model.lazy="motivo" type="text" class="form-control">
                            @error('motivo') <span class="text-danger er">{{ $message }}</span> @enderror
                        </div>
                    </div>

            </div>

    </div>
      <div class="modal-footer">
        <button type="button" wire:click.prevent="resetUI()" class="btn btn-dark close-btn text-info" data-dismiss="modal">Cerrar</button>
         <button type="button" wire:click.prevent="Update()" class="btn btn-dark close-modal">Actualizar</button>
      </div>
    </div>
  </div>
</div>