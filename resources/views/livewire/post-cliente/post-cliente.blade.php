<div>
        <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="input-group mb-4">
            <ul class="tabs tab-pills">
    
                <li style="list-style: none;">
                    <a wire:ignore.self href="javascript:void(0)" class="tabmenu btn text-white btn-success mt-3" id="mostrarCarrito"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
</svg> Carrito</a>
                    </li>
          
                </ul>
        </div>
    </div>

    <div class="row" id="cupones" wire:ignore.self>
        @foreach($tickets as $ticket)
        <div class="col-lg-3 col-md-6 col-sm-12" >
            <div class="profile-card-4 text-center">

                <img style="height: 300; width: 400px;" src="{{ asset('storage/cupon/'.$ticket->image) }}"
                    class="img img-responsive">

                <div class="profile-content">
                    <div class="profile-name">
                        <h3>{{$ticket->name}}</h3>
                        <p>{{$ticket->nameCompanies}}</p>
                    </div>
                    <div class="profile-description">{{$ticket->description}}</div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="profile-overview">
                                <p>PRECIO REGULAR</p>
                                <h4>$ {{$ticket->price}}</h4>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="profile-overview">
                                <p>PROMOCION</p>
                                <h4>$ {{$ticket->promotion}}</h4>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="profile-overview">
                                <p>CANTIDAD</p>
                                <h4>{{$ticket->quantity}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="profile-overview">
                                <p>FECHA LIMITE DE VENTA</p>
                                <h4>{{$ticket->ending}}</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="profile-overview">
                                <p>FECHA LIMITE DE CANJE</p>
                                <h4>{{$ticket->limit}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="profile-overview">
                                <button wire:click="$emit('agregar', {{$ticket->id}})" type="button"
                                    class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg> Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{$tickets->links()}}
     </div>



          <div class="row" id="carrito" wire:ignore.self>

        <div class="connect-sorting col-lg-9">
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
                            <label><span class="text-center text-primary">{{number_format($item->quantity,2)}} Tickets</span></label>
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
                          <button  wire:click.prevent="decreaseQty({{$item->id}})" class="btn btn-dark mbmobile">
                            <i class="fas fa-minus"></i>
                          </button>
                            <button wire:click.prevent="increaseQty({{$item->id}})" class="btn btn-dark mbmobile">
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

        <div class="col-3 text-center">
            <h2 class="tex-success">El total es:${{number_format($total,2)}}</h2>
        <button type="button" wire:click.prevent class="btn btn-dark close-btn text-info" id="ocultarCarrito">Cerrar</button>
        <button type="button" wire:click.prevent="saveSale" class="btn btn-dark">Comprar</button>
        @if($total > 0 )
        <button onclick="Confirm('','clearCart', 'Seguro de eliminar el carrito')" class="btn btn-dark mtmobile">Eliminar</button>
        @endif
        </div>










    </div>




  


   
</div>
 @include('livewire.post-cliente.formDetails')
<script>
    document.addEventListener('DOMContentLoaded', function(){
         $('#cupones').show();
          $('#carrito').hide();

          $('#mostrarCarrito').on("click", function () {
             $('#cupones').hide();
             $('#carrito').show();
             $('#mostrarCarrito').hide();
             });

           $('#ocultarCarrito').on("click", function () {
             $('#cupones').show();
            $('#carrito').hide();
            $('#mostrarCarrito').show();
           
             });


        window.livewire.on('cupon-ok', msg =>{
            swal({
            title: 'Mensaje',
            text: msg,
           type: 'success',
            });
        });
        window.livewire.on('no-stock', msg =>{
            swal({
            title: 'Mensaje',
            text: msg,
            type: 'error',
            });
        });
        window.livewire.on('ticket-no-encontrado', msg =>{
            swal({
            title: 'Mensaje',
            text: msg,
           type: 'error',
            });
        });
        window.livewire.on('sale-error', msg =>{
            swal({
            title: 'Mensaje',
            text: msg,
           type: 'warning',
            });
        });
         window.livewire.on('sale-ok', msg =>{
            swal({
            title: 'Mensaje',
            text: msg,
            type: 'success',
            });
        });
         window.livewire.on('cupon-agregado-carrito', msg =>{
            swal({
            title: 'Mensaje',
            text: msg,
           type: 'success',
            });
        });



    });

    $('.tblscroll').nicescroll({
        cursorcolor: "#515365",
        cursorwidth: "30px",
        background: "rgba(20,20,20,0.3)",
        cursorborder: "0px",
        cursorborderradius:3
    })


        function Confirm(id, eventName, text){
        swal({
            title: 'Confirmar',
            text: text,
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cerrar',
            cancelButtonColor: '#fff',
            confirmButtonColor: '#3B3F5C',
            confirmButtonText: 'Aceptar'

        }).then(function(result){
           if (result.value) {
            window.livewire.emit(eventName, id)
             swal.close;
           } 
        })
    }


</script>
