<div>
<div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b style="font-size: 18px;">{{$componentName}} | {{$pageTitle}}</b>
                </h4>
            </div>
             @include('common.searchbox')
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-1">
                        <thead class="text-white" style="background: #1B4F72;">
                            <tr>
                                <th class="table-th text-white text-center">ID</th>
                                <th class="table-th text-white text-center">Permisos</th>
                                <th class="table-th text-white text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($permisos as $permiso)
                            <tr>
                                <td class="text-center"><h6>{{$permiso->id}}</h6></td>
                                <td class="text-center"><h6>{{$permiso->name}}</h6></td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="btn btn-dark mtmobile btn-sm"  wire:click="Edit({{$permiso->id}})" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm"  onclick="Confirm('{{$permiso->id}}')"  title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                             @endforeach
                        </tbody>
                    </table>
                   {{$permisos->links()}}
                </div>
            </div>
        </div>
    </div>
    @include('livewire.permisos.form')
</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        window.livewire.on('show-modal', msg=>{
            $('#theModal').modal('show');
        });

         window.livewire.on('permission-added', msg=>{
            $('#theModal').modal('hide');
        });
        window.livewire.on('permission-update', msg=>{
            $('#theModal').modal('hide');
        });
          window.livewire.on('hide-modal', msg=>{
            $('#theModal').modal('hide');
        });
            window.livewire.on('permiso-deleted', msg=>{
            //noty(msg)
        });
    });

      function Confirm(id){
        swal({
            title: 'Confirmar',
            text: '¿Confirmas eliminar el Permiso?',
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cerrar',
            cancelButtonColor: '#fff',
            confirmButtonColor: '#3B3F5C',
            confirmButtonText: 'Aceptar'

        }).then(function(result){
           if (result.value) {
            window.livewire.emit('deleteRow', id)
            swal("Permiso Eliminado!", "Permiso Eliminado Exitosamente", "success");
           } 
        })
    }
</script>