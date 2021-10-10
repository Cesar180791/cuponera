<div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b style="font-size: 18px;">{{$componentName}} | {{$pageTitle}}</b>
                </h4>
            </div>
             @include('livewire.edit-company.searchButon')
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-1">
                        <thead class="text-white" style="background: #1B4F72;">
                            <tr>
                                <th class="table-th text-white">Nombre Empresa</th>
                                <th class="table-th text-white">COD Empresa</th>
                                <th class="table-th text-white">Direccion</th>
                                <th class="table-th text-white">Telefono</th>
                                <th class="table-th text-white">Rubro</th>
                                <th class="table-th text-white">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $company) 
                            <tr>
                                <td><h6>{{$company->nameCompanies}}</h6></td>
                                <td><h6>{{$company->codeCompany}}</h6></td>
                                <td><h6>{{$company->address}}</h6></td>
                                <td><h6>{{$company->phoneCompany}}</h6></td>
                                <td><h6>{{$company->heading}}</h6></td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="btn btn-dark mtmobile btn-sm"  wire:click="Edit({{$company->id}})" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm"  onclick="Confirm('{{$company->id}}')"  title="Delete">
                                        <i class="fas fa-trash"></i>
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
@include('livewire.edit-company.formCompany')
</div>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        window.livewire.on('show-modal', msg=>{
            $('#theModalB').modal('show');
        });
        window.livewire.on('company-add', msg=>{
            $('#theModalB').modal('hide');
            swal({
            title: 'Exito',
            text: msg,
            type: 'success',
        })
        });
        window.livewire.on('company-update', msg=>{
            $('#theModalB').modal('hide');
            swal({
            title: 'Exito',
            text: msg,
            type: 'success',
        })
        });
          window.livewire.on('company-deleted', msg=>{
            swal({
            title: 'Exito',
            text: msg,
            type: 'success',
        })
        });
        window.livewire.on('company-error', msg=>{
            swal({
            title: 'Advertencia',
            text: msg,
            type: 'danger',
        })
        });
    });


      function Confirm(id){
        swal({
            title: 'Confirmar',
            text: '¿Confirmas eliminar el rubro?',
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cerrar',
            cancelButtonColor: '#fff',
            confirmButtonColor: '#3B3F5C',
            confirmButtonText: 'Aceptar'

        }).then(function(result){
           if (result.value) {
            window.livewire.emit('deleteRows', id)
           } 
        })
    }
</script>