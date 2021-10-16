<div>
    <div class="row">
    @foreach($tickets as $ticket)
            <div class="col-md-3">
                        <div class="profile-card-4 text-center">
                            
                            <img style="height: 300; width: 400px;" src="{{ asset('storage/cupon/'.$ticket->image) }}"
                                class="img img-responsive">

                            <div class="profile-content">
                                <div class="profile-name">
                                    <h3>{{$ticket->name}}</h3>
                                    <p>{{$ticket->nameCompanies}}</p>
                                </div>
                                <div class="profile-description">{{$ticket->description}}</div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="profile-overview">
                                            <p>PRECIO REGULAR</p>
                                            <h4>$ {{$ticket->price}}</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="profile-overview">
                                            <p>PROMOCION</p>
                                            <h4>$ {{$ticket->promotion}}</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="profile-overview">
                                            <p>CANTIDAD</p>
                                            <h4>{{$ticket->quantity}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="profile-overview">
                                            <p>FECHA LIMITE DE VENTA</p>
                                            <h4>{{$ticket->ending}}</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="profile-overview">
                                            <p>FECHA LIMITE DE CANJE</p>
                                            <h4>{{$ticket->limit}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="profile-overview">
                                            <button type="button" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
</svg> Agregar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
       
             </div> 
                   {{$tickets->links()}}
</div>
