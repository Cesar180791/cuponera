<div wire:ignore.self class="modal fade" id="theModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #1B4F72;">
        <h5 class="modal-title text-white">
              <b>{{$componentName}}</b> | {{$selected_id > 0 ? 'Editar' : 'Crear'}}
        </h5>
        <h6 class="text-center text-warning" wire:loading>Por Favor Espere</h6>
      </div>
      <div class="modal-body">