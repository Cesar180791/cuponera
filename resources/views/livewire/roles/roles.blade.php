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
                                <th class="table-th text-white text-center">Roles</th>
                                <th class="table-th text-white text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td class="text-center"><h6>{{$role->id}}</h6></td>
                                <td class="text-center"><h6>{{$role->name}}</h6></td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="btn btn-dark mtmobile btn-sm"  wire:click="Edit({{$role->id}})" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm"  onclick="Confirm('{{$role->id}}')"  title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                             @endforeach
                        </tbody>
                    </table>
                   {{$roles->links()}}
                </div>
            </div>
        </div>
    </div>
    @include('livewire.roles.form')
</div>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        window.livewire.on('show-modal', msg=>{
            $('#theModal').modal('show');
        });

         window.livewire.on('role-added', msg=>{
            $('#theModal').modal('hide');
        });
        window.livewire.on('role-update', msg=>{
            $('#theModal').modal('hide');
        });
          window.livewire.on('hide-modal', msg=>{
            $('#theModal').modal('hide');
        });
        window.livewire.on('role-deleted', msg=>{
          swal({
            title: 'Exito',
            text: msg,
            type: 'success',
        })        
      });
        window.livewire.on('role-error', msg=>{
          swal({
            title: 'Cuidado',
            text: msg,
            type: 'warning',
        })        
      });
    });

      function Confirm(id){
        swal({
            title: 'Confirmar',
            text: '¿Confirmas eliminar el rol?',
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cerrar',
            cancelButtonColor: '#fff',
            confirmButtonColor: '#3B3F5C',
            confirmButtonText: 'Aceptar'

        }).then(function(result){
           if (result.value) {
            window.livewire.emit('deleteRow', id)
           } 
        })
    }
</script>