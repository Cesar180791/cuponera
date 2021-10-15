<div>
    <!-- Nav pills -->
    <ul class="nav nav-pills mt-4" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#espera" wire:ignore.self>Ofertas En Espera</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#aprobadas" wire:ignore.self>Ofertas Activas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#futuras" wire:ignore.self>Ofertas Aprobadas Futuras</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#pasadas" wire:ignore.self>Ofertas Pasadas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#rechazadas" wire:ignore.self>Ofertas Rechazadas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#descartadas" wire:ignore.self>Ofertas Descartadas</a>
        </li>
    </ul>


    <!-- Tab panes -->
    <div class="tab-content">
        <div id="espera" class="tab-pane active" wire:ignore.self><br>

            <!--Ofertas en espera de aprobacion-->

            <div class="row sales layout-top-spacing">
                <div class="col-sm-12">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h4 class="card-title">
                                <b style="font-size: 18px;">{{$componentName1}} | {{$pageTitle}}</b>
                            </h4>
                        </div>
                        @include('livewire.view-coupon-company.searchboxEspera')
                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped mt-1">
                                    <thead class="text-white" style="background: #1B4F72;">
                                        <tr>
                                            <th class="table-th text-white text-center">ID</th>
                                            <th class="table-th text-white text-center">Nombre de la Oferta</th>
                                            <th class="table-th text-white text-center">Fecha de Inicio</th>
                                            <th class="table-th text-white text-center">Fecha Final de Compra</th>
                                            <th class="table-th text-white text-center">Fecha Limite de Canje</th>
                                            <th class="table-th text-white text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cuponEspera as $cuponE)
                                        <tr>
                                            <td>
                                                <h6 class="text-center">{{$cuponE->id}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponE->name}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponE->beging}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponE->ending}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponE->limit}}</h6>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript:void(0)" class="btn btn-success btn-sm"
                                                    wire:click="showCoupon({{$cuponE->id}})" title="view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-success btn-sm"
                                                    wire:click="showView({{$cuponE->id}})" title="view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$cuponEspera->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Ofertas en espera de aprobacion-->


        </div>
        <div id="aprobadas" class="tab-pane fade" wire:ignore.self><br>

            <!--Ofertas en Aprobadas-->
            <div class="row sales layout-top-spacing">
                <div class="col-sm-12">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h4 class="card-title">
                                <b style="font-size: 18px;">{{$componentName2}} | {{$pageTitle}}</b>
                            </h4>
                        </div>
                        @include('livewire.view-coupon-company.searchboxAprobados')
                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped mt-1">
                                    <thead class="text-white" style="background: #1B4F72;">
                                        <tr>
                                            <th class="table-th text-white text-center">ID</th>
                                            <th class="table-th text-white text-center">Nombre de la Oferta</th>
                                            <th class="table-th text-white text-center">Fecha de Inicio</th>
                                            <th class="table-th text-white text-center">Fecha Final de Compra</th>
                                            <th class="table-th text-white text-center">Fecha Limite de Canje</th>
                                            <th class="table-th text-white text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cuponAprobado as $cuponA)
                                        <tr>
                                            <td>
                                                <h6 class="text-center">{{$cuponA->id}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponA->name}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponA->beging}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponA->ending}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponA->limit}}</h6>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript:void(0)" class="btn btn-success btn-sm"
                                                    wire:click="showCoupon({{$cuponA->id}})" title="view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-success btn-sm"
                                                    wire:click="showView({{$cuponA->id}})" title="view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$cuponAprobado->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Ofertas Aprobadas-->




        </div>


        <div id="futuras" class="tab-pane fade" wire:ignore.self><br>

            <!--Ofertas en futuras-->
            <div class="row sales layout-top-spacing">
                <div class="col-sm-12">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h4 class="card-title">
                                <b style="font-size: 18px;">{{$componentName5}} | {{$pageTitle}}</b>
                            </h4>
                        </div>
                        @include('livewire.view-coupon-company.searchboxFuturas')
                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped mt-1">
                                    <thead class="text-white" style="background: #1B4F72;">
                                        <tr>
                                            <th class="table-th text-white text-center">ID</th>
                                            <th class="table-th text-white text-center">Nombre de la Oferta</th>
                                            <th class="table-th text-white text-center">Fecha de Inicio</th>
                                            <th class="table-th text-white text-center">Fecha Final de Compra</th>
                                            <th class="table-th text-white text-center">Fecha Limite de Canje</th>
                                            <th class="table-th text-white text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cuponFuturo as $cuponF)
                                        <tr>
                                            <td>
                                                <h6 class="text-center">{{$cuponF->id}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponF->name}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponF->beging}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponF->ending}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponF->limit}}</h6>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript:void(0)" class="btn btn-success btn-sm"
                                                    wire:click="showCoupon({{$cuponF->id}})" title="view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-success btn-sm"
                                                    wire:click="showView({{$cuponF->id}})" title="view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$cuponFuturo->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Ofertas futuras-->

        </div>


        <div id="pasadas" class="tab-pane fade" wire:ignore.self><br>

            <!--Ofertas en pasadas-->
            <div class="row sales layout-top-spacing">
                <div class="col-sm-12">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h4 class="card-title">
                                <b style="font-size: 18px;">{{$componentName6}} | {{$pageTitle}}</b>
                            </h4>
                        </div>
                        @include('livewire.view-coupon-company.searchboxPasadas')
                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped mt-1">
                                    <thead class="text-white" style="background: #1B4F72;">
                                        <tr>
                                            <th class="table-th text-white text-center">ID</th>
                                            <th class="table-th text-white text-center">Nombre de la Oferta</th>
                                            <th class="table-th text-white text-center">Fecha de Inicio</th>
                                            <th class="table-th text-white text-center">Fecha Final de Compra</th>
                                            <th class="table-th text-white text-center">Fecha Limite de Canje</th>
                                            <th class="table-th text-white text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cuponPasado as $cuponP)
                                        <tr>
                                            <td>
                                                <h6 class="text-center">{{$cuponP->id}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponP->name}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponP->beging}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponP->ending}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponP->limit}}</h6>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript:void(0)" class="btn btn-success btn-sm"
                                                    wire:click="showCoupon({{$cuponP->id}})" title="view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-success btn-sm"
                                                    wire:click="showView({{$cuponP->id}})" title="view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$cuponPasado->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Ofertas pasadas-->

        </div>






        <div id="rechazadas" class="tab-pane fade" wire:ignore.self><br>

            <!--Ofertas en Rechazadas-->

            <div class="row sales layout-top-spacing">
                <div class="col-sm-12">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h4 class="card-title">
                                <b style="font-size: 18px;">{{$componentName3}} | {{$pageTitle}}</b>
                            </h4>
                        </div>
                        @include('livewire.view-coupon-company.searchboxRechazado')
                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped mt-1">
                                    <thead class="text-white" style="background: #1B4F72;">
                                        <tr>
                                            <th class="table-th text-white text-center">ID</th>
                                            <th class="table-th text-white text-center">Nombre de la Oferta</th>
                                            <th class="table-th text-white text-center">Fecha de Inicio</th>
                                            <th class="table-th text-white text-center">Fecha Final de Compra</th>
                                            <th class="table-th text-white text-center">Fecha Limite de Canje</th>
                                            <th class="table-th text-white text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cuponRechazado as $cuponR)
                                        <tr>
                                            <td>
                                                <h6 class="text-center">{{$cuponR->id}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponR->name}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponR->beging}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponR->ending}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponR->limit}}</h6>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript:void(0)" class="btn btn-success btn-sm"
                                                    wire:click="Edit({{$cuponR->id}})" title="view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </a>
                                                   <a href="javascript:void(0)" class="btn btn-success btn-sm"
                                                    wire:click="showView({{$cuponR->id}})" title="view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$cuponRechazado->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Ofertas rechazadas-->



        </div>
        <div id="descartadas" class="tab-pane fade" wire:ignore.self><br>

            <!--Ofertas Descartadas-->

            <div class="row sales layout-top-spacing">
                <div class="col-sm-12">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h4 class="card-title">
                                <b style="font-size: 18px;">{{$componentName4}} | {{$pageTitle}}</b>
                            </h4>
                        </div>
                        @include('livewire.view-coupon-company.searchboxDescartado')
                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped mt-1">
                                    <thead class="text-white" style="background: #1B4F72;">
                                        <tr>
                                            <th class="table-th text-white text-center">ID</th>
                                            <th class="table-th text-white text-center">Nombre de la Oferta</th>
                                            <th class="table-th text-white text-center">Fecha de Inicio</th>
                                            <th class="table-th text-white text-center">Fecha Final de Compra</th>
                                            <th class="table-th text-white text-center">Fecha Limite de Canje</th>
                                            <th class="table-th text-white text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cuponDescartado as $cuponD)
                                        <tr>
                                            <td>
                                                <h6 class="text-center">{{$cuponD->id}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponD->name}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponD->beging}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponD->ending}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cuponD->limit}}</h6>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript:void(0)" class="btn btn-success btn-sm"
                                                    wire:click="showCoupon({{$cuponD->id}})" title="view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-success btn-sm"
                                                    wire:click="showView({{$cuponD->id}})" title="view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$cuponDescartado->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Ofertas Descartadas-->



        </div>
        @include('livewire.view-coupon-company.form')
        @include('livewire.view-coupon-company.form2')
        @include('livewire.view-coupon-company.formEdicion')

    </div>
</div>






</div>


<style>
    .widget-content {
        height: 725px;
    }

</style>



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
