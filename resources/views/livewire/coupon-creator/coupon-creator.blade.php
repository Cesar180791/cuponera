<div class="row sales layout-top-spacing">
    <div class="col-lg-6 col-sm-12">
        <div class="widget-content widget-content-area">
      <div class="widget-header">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-center">Crear Cupon</h4>
            </div>
        </div>
    </div>
            <div class="row mt-3">
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Titulo</label>
                        <input wire:model="titulo" type="text" class="form-control" placeholder="Ingrese titulo cupon">
                        @error('titulo') <span class="text-danger er">{{ $message }}</span> @enderror 
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Precio Regular</label>
                        <input wire:model.lazy="precioRegular" type="text" class="form-control" placeholder="Ingrese precio regular">
                          @error('precioRegular') <span class="text-danger er">{{ $message }}</span> @enderror 
                    </div>
                </div>
                 <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Precio Oferta</label>
                        <input wire:model.lazy="PrecioOferta" type="text" class="form-control" placeholder="Ingrese precio oferta">
                         @error('PrecioOferta') <span class="text-danger er">{{ $message }}</span> @enderror 
                    </div>
                </div>
                 <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Fecha Inicio</label>
                        <input wire:model.lazy="fechaInicio" type="text" wire:model="dateto" class="form-control flatpickr" placeholder="Click para seleccionar">
                        @error('fechaInicio') <span class="text-danger er">{{ $message }}</span> @enderror 
                    </div>
                </div>
                 <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Fecha Final de Venta</label>
                        <input wire:model.lazy="fechaFinal" type="date" class="form-control flatpickr" placeholder="Click para seleccionar">
                         @error('fechaFinal') <span class="text-danger er">{{ $message }}</span> @enderror 
                    </div>
                </div>
                 <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Fecha Final de Canje</label>
                        <input wire:model.lazy="fechaLimiteCanje" type="date" class="form-control flatpickr" placeholder="Click para seleccionar">
                         @error('fechaLimiteCanje') <span class="text-danger er">{{ $message }}</span> @enderror 
                    </div>
                </div>
                 <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Cantidad Limite</label>
                        <input wire:model.lazy="cantidadCupon" type="number" class="form-control" placeholder="Cantidad">
                         @error('cantidadCupon') <span class="text-danger er">{{ $message }}</span> @enderror 
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Otros Detalles</label>
                        <input wire:model.lazy="otrosDetalles" type="text" class="form-control" placeholder="Ingrese detalles adicionales (Opcional)">
                          @error('otrosDetalles') <span class="text-danger er">{{ $message }}</span> @enderror 
                    </div>
                </div>
                 <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <label for="formGroupExampleInput">Descripcion</label>
                        <input wire:model.lazy="descripcion" type="text" class="form-control" placeholder="Ingrese descripcion">
                         @error('Descripcion') <span class="text-danger er">{{ $message }}</span> @enderror 
                    </div>
                </div>
            </div>
            <div class="modal-footer">
               <button type="button" wire:click="$emit('change')"  class="btn btn-success btn-rounded">Crear</button>
            </div>
        </div>
    </div>
    <div class="widget-content widget-content-area">
    <div class="col-lg-6">
            <article class="card fl-left" style="background-color: #FE0606;">
                <section class="date">
                    <time datetime="23th feb">
                    <span>%</span><span>Descuento</span>
                    </time>
                </section>
                <section class="card-cont">
                    <small>Nombre:</small>
                    <h3 >Ticket de pizza hut</h3>
                    <div class="even-date">
                    <i class="fa fa-calendar"> </i>
                    <time>
                    <span>Inicio el miercoles 16 de octubre</span>
                    <span>Termina el 1 de octubre</span>
                    </time>
                    </div>
                    <div class="even-info">
                    <i class="fa fa-map-marker"></i>
                    <p>
                    description
                    </p>
                    </div>
                    <a href="#">tickets</a>
                </section>
            </article>
    </div>
</div>
</div>


<style>


.wrapper {
    height: 100vh
}

.card {
    position: relative;
    
    padding: 10px;
    width: 400px;
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




</style>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        flatpickr(document.getElementsByClassName('flatpickr'),{
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
