<div>
   <div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b style="font-size: 18px;">{{$componentName}} | {{$pageTitle}}</b>
                </h4>
            </div>
            @include('livewire.view-cliente-admin.searchbox')
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-1">
                        <thead class="text-white" style="background: #1B4F72;">
                            <tr>
                                <th class="table-th text-white">Nombre Cliente</th>
                                <th class="table-th text-white">Correo Electronico</th>
                                <th class="table-th text-white">Rol</th>
                                <th class="table-th text-white">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                              @foreach($data as $r)
                            <tr>
                                <td><h6>{{$r->name}}</h6></td>
                                <td><h6>{{$r->email}}</h6></td>
                                <td><h6>{{$r->profile}}</h6></td>
                                <td class="text-center">
                                    <a href="{{ url('clientes/cupones/'.$r->id )}}"
                                        class="btn btn-success mtmobile btn-sm" title="Edit">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                             @endforeach
                        </tbody>
                    </table>
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
