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
                          @include('livewire.ticke-cliente-view-admin.searchboxDisponible')
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
                       @include('livewire.ticke-cliente-view-admin.searchboxCanjeado')
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
                       @include('livewire.ticke-cliente-view-admin.searchboxVencido')
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
