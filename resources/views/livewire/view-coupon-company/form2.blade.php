<div wire:ignore.self class="modal fade" id="theModalC" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #1B4F72;">
        <h5 class="modal-title text-white">
              <b>{{$componentNameModalView}}</b> | {{$selected_id > 0 ? 'Ver' : 'Editar'}}
        </h5>
        <h6 class="text-center text-warning" wire:loading>Por Favor Espere</h6>
      </div>
      <div class="modal-body m-0 row justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12 widget-content widget-content-area">
        <div class="m-0 row justify-content-center">

            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="profile-card-4 text-center">

                            
                            <img style="height: 300; width: 400px;" src="{{ asset('storage/cupon/'.$image) }}"
                                class="img img-responsive">



                            <div class="profile-content">
                                <div class="profile-name">
                                    <h3>{{$titulo}}</h3>
                                    <p>{{$empresa->nameCompanies}}</p>
                                </div>
                                <div class="profile-description">{{$descripcion}}</div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="profile-overview">
                                            <p>PRECIO REGULAR</p>
                                            <h4>$ {{$precioRegular}}</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="profile-overview">
                                            <p>PROMOCION</p>
                                            <h4>$ {{$PrecioOferta}}</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="profile-overview">
                                            <p>CANTIDAD</p>
                                            <h4>{{$cantidadCupon}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="profile-overview">
                                            <p>FECHA LIMITE DE VENTA</p>
                                            <h4>{{$fechaFinal}}</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="profile-overview">
                                            <p>FECHA LIMITE DE CANJE</p>
                                            <h4>{{$fechaLimiteCanje}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
      <div class="modal-footer">
        <button type="button" wire:click.prevent="resetUI()" class="btn btn-dark close-btn text-info" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>