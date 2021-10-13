<div class="row sales layout-top-spacing">
    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="widget-content widget-content-area">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4 class="text-center">Crear Cupon</h4>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <input type="file" class="custom-file-input form-control" wire:model="image"
                            accept="image/x-png, image/gif, image/jpeg">
                        <label class="custom-file-label">Imagen {{$image}}</label>
                        @error('image') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Titulo</label>
                        <input wire:model.lazy="titulo" type="text" class="form-control"
                            placeholder="Ingrese titulo cupon">
                        @error('titulo') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Descripcion</label>
                        <input wire:model.lazy="descripcion" type="text" class="form-control"
                            placeholder="Ingrese descripcion">
                        @error('descripcion') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Precio Regular</label>
                        <input wire:model.lazy="precioRegular" type="text" class="form-control"
                            placeholder="Ingrese precio regular">
                        @error('precioRegular') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Precio Oferta</label>
                        <input wire:model.lazy="PrecioOferta" type="text" class="form-control"
                            placeholder="Ingrese precio oferta">
                        @error('PrecioOferta') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Fecha Inicio</label>
                        <input wire:model="fechaInicio" type="text" class="form-control flatpickr"
                            placeholder="Click para seleccionar">
                        @error('fechaInicio') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Fecha Final de Venta</label>
                        <input wire:model="fechaFinal" type="text" class="form-control flatpickr"
                            placeholder="Click para seleccionar">
                        @error('fechaFinal') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Fecha Final de Canje</label>
                        <input wire:model="fechaLimiteCanje" type="text" class="form-control flatpickr"
                            placeholder="Click para seleccionar">
                        @error('fechaLimiteCanje') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Cantidad Limite</label>
                        <input wire:model.lazy="cantidadCupon" type="number" class="form-control"
                            placeholder="Cantidad">
                        @error('cantidadCupon') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Otros Detalles</label>
                        <input wire:model.lazy="otrosDetalles" type="text" class="form-control"
                            placeholder="Ingrese detalles adicionales (Opcional)">
                        @error('otrosDetalles') <span class="text-danger er">{{ $message }}</span> @enderror
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <a type="button" href="{{ url('/ver-cupon')}}" class="btn btn-success btn-rounded">Ver Cupones</a>
                <button type="button" wire:click.prevent="Store()" class="btn btn-success btn-rounded">Crear</button>
            </div>
        </div>
    </div>



    <div class="col-lg-6 col-md-12 col-sm-12 widget-content widget-content-area">
        <h4 class="text-center">Visualizacion</h4>
        <div class="m-0 row justify-content-center">

            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="profile-card-4 text-center">

                            @if ($image)
                            <img style="height: 300; width: 400px;" src="{{$image->temporaryUrl()}}"
                                class="img img-responsive">
                            @endif




                            <div class="profile-content">
                                <div class="profile-name">
                                    <h3>{{$titulo}}</h3>
                                    <p>{{$empresa->nameCompanies}}</p>
                                </div>
                                <div class="profile-description">{{$descripcion}}</div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="profile-overview">
                                            <p>PRECIO REGULAR</p>
                                            <h4>$ {{$precioRegular}}</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="profile-overview">
                                            <p>PROMOCION</p>
                                            <h4>$ {{$PrecioOferta}}</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="profile-overview">
                                            <p>CANTIDAD</p>
                                            <h4>{{$cantidadCupon}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="profile-overview">
                                            <p>FECHA LIMITE DE VENTA</p>
                                            <h4>{{$fechaFinal}}</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="profile-overview">
                                            <p>FECHA LIMITE DE CANJE</p>
                                            <h4>{{$fechaLimiteCanje}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="button" class="btn btn-primary">Ver mas fertas de esta
                                            empresa</button>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="profile-overview">
                                            <button type="button" class="btn btn-success">Comprar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>








            </div>






        </div>
    </div>


    <style>
        .widget-content {
            height: 725px;
        }


        /*
    .wrapper {
        height: 100vh
    }

    .card {
        position: relative;

        padding: 10px;
        width: 500px;
        border: none
    }

    .content {
        z-index: 10
    }

    .logo {
        margin-bottom: 50px
    }

    .off {
        line-height: 0px
    }

    .off h1 {
        font-size: 80px
    }

    .off span {
        margin-right: 111px
    }

    .plus {
        font-size: 23px
    }

    .code {
        text-transform: uppercase;
        padding: 10px;
        background-color: #fff;
        color: red;
        font-size: 20px
    }

    .cross-bg {
        height: 100%;
        width: 100%;
        position: absolute;
        background-color: #9C27B0;
        left: 0px;
        top: 0px;
        opacity: 0.4;
        clip-path: polygon(50% 0%, 90% 20%, 100% 60%, 75% 100%, 25% 100%, 0% 60%, 10% 20%);
        z-index: 1
    }
*/

    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            window.livewire.on('ticket-add', msg => {
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
        })

    </script>
