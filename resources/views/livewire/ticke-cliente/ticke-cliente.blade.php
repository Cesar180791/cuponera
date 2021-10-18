<div>
    <!-- Nav pills -->
    <ul class="nav nav-pills mt-4" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#Disponibles" wire:ignore.self>Mis Cupones Disponibles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#Canjeados" wire:ignore.self>Mis Cupones Canjeados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#Vencidos" wire:ignore.self>Mis Cupones Vencidos</a>
        </li>
    </ul>


    <!-- Tab panes -->
    <div class="tab-content">
        <div id="Disponibles" class="tab-pane active" wire:ignore.self><br>

            <!--Ofertas en espera de disponibles-->

            <div class="row sales layout-top-spacing">
                <div class="col-sm-12">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h4 class="card-title">
                                <b style="font-size: 18px;">{{$ComponentName}} | {{$PageTitle}}</b>
                            </h4>
                        </div>
                          @include('livewire.ticke-cliente.searchboxDisponible')
                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped mt-1">
                                    <thead class="text-white" style="background: #1B4F72;">
                                        <tr>
                                            <th class="table-th text-white text-center">ID</th>
                                            <th class="table-th text-white text-center">Empresa</th>
                                            <th class="table-th text-white text-center">Cupon</th>
                                            <th class="table-th text-white text-center">Descripcion</th>
                                            <th class="table-th text-white text-center">Cantidad</th>
                                            <th class="table-th text-white text-center">F. Limite de Canje</th>
                                            <th class="table-th text-white text-center">Token</th>
                                            <th class="table-th text-white text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($disponibleCliente as $disponible)
                                        <tr>
                                            <td>
                                                <h6 class="text-center">{{$disponible->id}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$disponible->nameCompanies}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$disponible->name}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$disponible->description}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$disponible->cantidadDisponible}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$disponible->limit}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$disponible->codeCupon}}</h6>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript:void(0)" class="btn btn-success btn-sm"
                                                    wire:click="showCoupon({{$disponible->id}})" title="view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                                {{$disponibleCliente->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--ofertas disponibles-->

        </div>
        <div id="Canjeados" class="tab-pane fade" wire:ignore.self><br>

            <!--Ofertas en canjeados-->
            <div class="row sales layout-top-spacing">
                <div class="col-sm-12">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h4 class="card-title">
                                <b style="font-size: 18px;">{{$ComponentName3}} | {{$PageTitle}}</b>
                            </h4>
                        </div>
                       @include('livewire.ticke-cliente.searchboxCanjeado')
                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped mt-1">
                                    <thead class="text-white" style="background: #1B4F72;">
                                        <tr>
                                            <th class="table-th text-white text-center">ID</th>
                                            <th class="table-th text-white text-center">Empresa</th>
                                            <th class="table-th text-white text-center">Cupon</th>
                                            <th class="table-th text-white text-center">Token</th>
                                            <th class="table-th text-white text-center">F. de Canje</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($canjeadoCliente as $canjeado)
                                          <tr>
                                            <td>
                                                <h6 class="text-center">{{$canjeado->id}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$canjeado->nameCompanies}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$canjeado->name}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$canjeado->codeCupon}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$canjeado->fechaCanjeado}}</h6>
                                            </td>
                                        </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                                {{$disponibleCliente->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Ofertas canjeados-->
        </div>


        <div id="Vencidos" class="tab-pane fade" wire:ignore.self><br>

            <!--Ofertas en vencidos-->
            <div class="row sales layout-top-spacing">
                <div class="col-sm-12">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h4 class="card-title">
                                <b style="font-size: 18px;">{{$ComponentName2}} | {{$PageTitle}}</b>
                            </h4>
                        </div>
                       @include('livewire.ticke-cliente.searchboxVencido')
                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped mt-1">
                                    <thead class="text-white" style="background: #1B4F72;">
                                        <tr>
                                            <th class="table-th text-white text-center">ID</th>
                                            <th class="table-th text-white text-center">Empresa</th>
                                            <th class="table-th text-white text-center">Cupon</th>
                                            <th class="table-th text-white text-center">Descripcion</th>
                                            <th class="table-th text-white text-center">Cantidad Vencidos</th>
                                            <th class="table-th text-white text-center">Token</th>
                                            <th class="table-th text-white text-center">F Vencimiento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          @foreach($vencidosCliente as $vencidos)
                                        <tr>
                                        <td>
                                                <h6 class="text-center">{{$vencidos->id}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$vencidos->nameCompanies}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$vencidos->name}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$vencidos->description}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$vencidos->quantity}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$vencidos->codeCupon}}</h6>
                                            </td>
                                              <td>
                                                <h6 class="text-center">{{$vencidos->limit}}</h6>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                 {{$vencidosCliente->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Ofertas vencidos-->

        </div>

    </div>
</div>






</div>






<script>
    document.addEventListener('DOMContentLoaded', function () {
        window.livewire.on('show-modal', msg => {
            $('#theModal').modal('show');
        });

        window.livewire.on('show-modalC', msg => {
            $('#theModalC').modal('show');
        });
        window.livewire.on('show-modal-Edicion', msg => {
            $('#theModalEdicion').modal('show');
        });
        window.livewire.on('ticket-update', msg => {
            $('#theModalEdicion').modal('hide');
             swal({
            title: 'Exito',
            text: msg,
            type: 'success',
        })
        });





        flatpickr(document.getElementsByClassName('flatpickr'), {
            enabledTime: false,
            dateFormat: 'y-m-d',
            locale: {
                firstDayofWeek: 1,
                weekdays: {
                    shorthand: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
                    longhand: [
                        "Domingo",
                        "Lunes",
                        "Martes",
                        "Miércoles",
                        "Jueves",
                        "Viernes",
                        "Sábado",
                    ],
                },
                months: {
                    shorthand: [
                        "Ene",
                        "Feb",
                        "Mar",
                        "Abr",
                        "May",
                        "Jun",
                        "Jul",
                        "Ago",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dic",
                    ],
                    longhand: [
                        "Enero",
                        "Febrero",
                        "Marzo",
                        "Abril",
                        "Mayo",
                        "Junio",
                        "Julio",
                        "Agosto",
                        "Septiembre",
                        "Octubre",
                        "Noviembre",
                        "Diciembre",
                    ],
                },
            }
        })



    });

</script>
