<div>
    <div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b style="font-size: 18px;">{{$ComponentName}} | {{$PageTitle}}</b>
                </h4>
            </div>
             @include('livewire.branch-clerk.searchbox')
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-1">
                        <thead class="text-white" style="background: #1B4F72;">
                            <tr>
        
                                <th class="table-th text-white text-center">Cupon</th>
                                <th class="table-th text-white text-center">Cliente</th>
                                <th class="table-th text-white text-center">Dui</th>
                                <th class="table-th text-white text-center">F. Limite de Canje</th>
                                <th class="table-th text-white text-center">Token</th>
                                <th class="table-th text-white text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                       
                                            <td>
                                                <h6 class="text-center">{{$name}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$cliente}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$dui}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$limit}}</h6>
                                            </td>
                                            <td>
                                                <h6 class="text-center">{{$codeCupon}}</h6>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript:void(0)" class="btn btn-success btn-sm"
                                                    wire:click="$emit('cobrar',{{$idWallet}} )" title="view">
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
                    
                        </tbody>
                    </table>
                
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function(){
         window.livewire.on('cupo-encontrado', msg=>{
             
        swal({
            title: 'Exito',
            text: msg,
            type: 'success',
        })

        });
        window.livewire.on('Cupon-limite', msg=>{
               swal({
            title: 'Exito',
            text: msg,
            type: 'warning',
        })
        });
        window.livewire.on('Cupon-Caducado', msg=>{
               swal({
            title: 'Exito',
            text: msg,
            type: 'warning',
        })
        });   
        window.livewire.on('Cupon-canjeado', msg=>{
               swal({
            title: 'Exito',
            text: msg,
            type: 'warning',
        })
        });   
    });


</script>