<div>
    <div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b style="font-size: 18px;">{{$ComponentName}} | {{$PageTitle}}</b>
                </h4>
            </div>
             @include('livewire.view-sales-admin.searchbox')
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-1">
                        <thead class="text-white" style="background: #1B4F72;">
                            <tr>
                                <th class="table-th text-white">Nombre Cupon</th>
                                <th class="table-th text-white">Cupones Disponibles</th>
                                <th class="table-th text-white">Cupones Vendidos</th>
                                <th class="table-th text-white">Ventas Totales</th>
                                <th class="table-th text-white">Cargos por Servicios</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><h6>Category Name</h6></td>
                                <td><h6>Category Name</h6></td>
                                <td><h6>Category Name</h6></td>
                                <td><h6>Category Name</h6></td>
                                <td><h6>Category Name</h6></td>
                            </tr>
                        </tbody>
                    </table>
                    pagination
                </div>
            </div>
        </div>
    </div>
    Include Form
</div>

<script>
    document.addEventListener('DOMContentLoaded', function(){

    });
</script>
</div>
