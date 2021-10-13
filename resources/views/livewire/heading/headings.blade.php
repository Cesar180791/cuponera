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
                                <th class="table-th text-white">Rubro</th>
                                <th class="table-th text-white">Descripcion</th>
                                <th class="table-th text-white">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($headings as $heading) 
                            <tr>
                                <td><h6>{{$heading->name}}</h6></td>
                                <td><h6>{{$heading->description}}</h6></td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="btn btn-dark mtmobile btn-sm"  wire:click="Edit({{$heading->id}})" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm"  onclick="Confirm('{{$heading->id}}')"  title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                             @endforeach
                        </tbody>
                    </table>
                   {{$headings->links()}}
                </div>
            </div>
        </div>
    </div>
    @include('livewire.heading.form')
</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        window.livewire.on('show-modal', msg=>{
            $('#theModal').modal('show');
        });

         window.livewire.on('heading-added', msg=>{
            $('#theModal').modal('hide');
        });
        window.livewire.on('heading-update', msg=>{
            $('#theModal').modal('hide');
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
            window.livewire.emit('deleteRow', id)
             swal("Rubro Eliminado!", "Rubro Eliminado Exitosamente", "success");
           } 
        })
    }
</script>