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
                        <label for="formGroupExampleInput">Descripcion</label>
                        <input wire:model.lazy="descripcion" type="text" class="form-control"
                            placeholder="Ingrese descripcion" disabled>
                        @error('descripcion') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Precio Regular</label>
                        <input wire:model.lazy="precioRegular" type="text" class="form-control"
                            placeholder="Ingrese precio regular" disabled>
                        @error('precioRegular') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Precio Oferta</label>
                        <input wire:model.lazy="PrecioOferta" type="text" class="form-control"
                            placeholder="Ingrese precio oferta" disabled>
                        @error('PrecioOferta') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Fecha Inicio</label>
                        <input wire:model="fechaInicio" type="text" class="form-control flatpickr"
                            placeholder="Click para seleccionar" disabled>
                        @error('fechaInicio') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Fecha Final de Venta</label>
                        <input wire:model="fechaFinal" type="text" class="form-control flatpickr"
                            placeholder="Click para seleccionar" disabled>
                        @error('fechaFinal') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Fecha Final de Canje</label>
                        <input wire:model="fechaLimiteCanje" type="text" class="form-control flatpickr"
                            placeholder="Click para seleccionar" disabled>
                        @error('fechaLimiteCanje') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Cantidad Limite</label>
                        <input wire:model.lazy="cantidadCupon" type="number" class="form-control"
                            placeholder="Cantidad" disabled>
                        @error('cantidadCupon') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Otros Detalles</label>
                        <input wire:model.lazy="otrosDetalles" type="text" class="form-control"
                            placeholder="Ingrese detalles adicionales (Opcional)" disabled>
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