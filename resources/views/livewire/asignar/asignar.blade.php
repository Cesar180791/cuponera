<div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b style="font-size: 18px;">{{$componentName}}</b>
                </h4>
            </div>
            <div class="widget-content">
                <div class="form-inline">
                    <div class="form-group mr-5">
                        <select wire:model="role" class="form-control">
                            <option value="Seleccionar" selected>== Seleccione el Rol ==</option>
                            @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <buton wire:click.prevent="SyncAll()" type="button" class="btn btn-dark mbmobile inblock mr-5">Sincronizar Todos</buton>
                    <buton onclick="Revocar()" type="button" class="btn btn-dark mbmobile mr-5">Revocar Todos</buton>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped mt-1">
                                <thead class="text-white" style="background: #1B4F72;">
                                    <tr>
                                        <th class="table-th text-whit text-center">ID</th>
                                        <th class="table-th text-white text-center">Permiso</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($permisos as $permiso)
                                    <tr>
                                        <td><h6 class="text-center">{{$permiso->id}}</h6></td>
                                         <td class="text-center">
                                            <div class="n-check">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                    <input type="checkbox" 
                                                    wire:change="SyncPermiso($('#p' + {{$permiso->id }}).is(':checked'), '{{ $permiso->name }}')" 
                                                    id="p{{ $permiso->id }}" 
                                                    value="{{$permiso->id}}" 
                                                    class="new-control-input"
                                                    {{ $permiso->checked == 1 ? 'checked' : '' }}
                                                     >
                                                     <span class="new-control-indicator"><h6>{{$permiso->name}}</h6></span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                     @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Include Form
</div>

<script>
    document.addEventListener('DOMContentLoaded', function(){
           window.livewire.on('sync-error', msg=>{
            swal({
            title: 'Error',
            text: msg,
            type: 'error',
        })
       
        });

         window.livewire.on('permi', msg=>{
             swal({
            title: 'Exito',
            text: msg,
            type: 'success',
        })
        });
        window.livewire.on('sync-all', msg=>{
            swal({
            title: 'Exito',
            text: msg,
            type: 'success',
        })
        });
        window.livewire.on('remove-all', msg=>{
            swal({
            title: 'Exito',
            text: msg,
            type: 'success',
        })
        });
    });

      function Revocar(){
        swal({
            title: 'Confirmar',
            text: '¿Confirmas revocar todos los permisos?',
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cerrar',
            cancelButtonColor: '#fff',
            confirmButtonColor: '#3B3F5C',
            confirmButtonText: 'Aceptar'

        }).then(function(result){
           if (result.value) {
            window.livewire.emit('revokeall')
           } 
        })
    }
</script>