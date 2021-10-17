<div class="modal fade" id="theModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #1B4F72;">
        <h5 class="modal-title text-white">
              <b>Carrito</b> | Lista
        </h5>
        <h6 class="text-center text-warning" wire:loading>Por Favor Espere</h6>
      </div>
      <div class="modal-body">



        <div class="connect-sorting">
          <div class="connect-sorting-content">
            <div class="card simple-title-task ui-sortable-handle">
              <div class="car-body">
                @if($total > 0)
                <div class="table-responsive tblscroll" style="max-height: 650px; overflow: hidden;">
                  <table class="table table-bordered table-striped mt-1">
                    <thead class="text-white" style="background: #1B4F72;">
                      <tr>
                        <th width="10%"></th>
                         <th class="table-th text-left text-white">Descripcion</th>
                         <th class="table-th text-left text-white">Precio</th>
                         <th width="13%" class="table-th text-left text-white">Cantidad</th>
                         <th class="table-th text-left text-white">Importe</th>
                         <th class="table-th text-left text-white">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($cart as $item)
                      <tr>
                        <td class="text-center table-th">
                          @if(count($item->attributes) > 0)
                          <span>
                            <img src="{{ asset('storage/cupon/'. $item->attributes[0]) }}" alt="Imagen de Ticket" height="90" width="90" class="rounded">
                          </span>
                          @endif
                        </td>
                        <td><h6>{{$item->name}}</h6></td>
                        <td>${{number_format($item->price,2)}}</td>
                        <td>
                          <input type="number" id="r{{$item->id}}"
                          whire:change="updateQty({{$item->id}}, $('#r' + {{$item->id}}).val() )"
                          style="font-size: 1rem!important"
                          class="form-control text-center"
                          value="{{$item->quantity}}" 
                          >
                        </td>
                        <td class="text-center">
                          <h6>
                            ${{number_format($item->price * $item->quantity),2}}
                          </h6>
                        </td>
                        <td class="text-center">
                          <button onclick="Confirm('{{$item->id}}', 'removeItem', 'Confirmas eliminar el registro')" class="btn btn-dark mbmobile">
                            <i class="fas fa-trash-alt"></i>
                          </button>
                          <button wire:clik.prevent="decreaseQty({{$item->id}})" class="btn btn*dark mbmobile">
                            <i class="fas fa-minus"></i>
                          </button>
                            <button wire:clik.prevent="increaseQty({{$item->id}})" class="btn btn*dark mbmobile">
                            <i class="fas fa-plus"></i>
                          </button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                @else
                <h5 class="text-center text-muted">Agrega Cupones al carrito</h5>
                @endif


                <div wire:loading.inline wire:target="saveSale">
                  <h4 class="text-danger text-center">Guardando Venta </h4>
                </div>

              </div>
            </div>
          </div>
        </div>















        </div>
      <div class="modal-footer">
        <button type="button" wire:click.prevent class="btn btn-dark close-btn text-info" data-dismiss="modal">Cerrar</button>
        <button type="button" wire:click.prevent="saveSale" class="btn btn-dark">Comprar</button>
        @if($total > 0 )
        <button onclick="Confirm('','clearCart', 'Seguro de eliminar el carrito')" class="btn btn-dark mtmobile">Eliminar</button>
        @endif
      </div>
    </div>
  </div>
</div>