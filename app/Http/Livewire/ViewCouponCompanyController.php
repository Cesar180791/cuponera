<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ticket;
use App\Models\company;
use Illuminate\Support\Facades\Storage; //facade para manipular imagenes en laravel
use Livewire\withFileUploads; // trait para subir imagenes



class ViewCouponCompanyController extends Component
{
    use withFileUploads; 
    use WithPagination; 

    public $componentName1, $componentName2, $componentName3, $componentName4,$componentName5, $componentName6, $pageTitle, $search,$searchAprobado, $searchRechazado, $searchDescartado, $searchFuturo, $searchPasada,$componentNameModalView,$selected_id, $titulo, $descripcion, $precioRegular, $PrecioOferta, $fechaInicio, $fechaFinal, $fechaLimiteCanje, $cantidadCupon, $otrosDetalles,$image,$motivo,$statusCoupon; 

    private $pagination = 10, $paginadorA =10, $paginadorR =10, $paginadorD=10;

    public function paginationView(){
        return 'vendor.livewire.bootstrap';
    }

    public function mount(){
        $this->componentName1 = 'En Espera de Aprobacion';
        $this->componentName2 = 'Aprobadas';
        $this->componentName3 = 'Rechazadas';
        $this->componentName4 = 'Descartadas';
        $this->componentName5 = 'Ofertas Aprobadas Futuras';
        $this->componentName6 = 'Ofertas Pasadas';
        $this->componentNameModalView = 'Ver Cupon';
        $this->pageTitle = 'Lista';
        $this->statusCoupon = 'Seleccionar';

    }

    public function render()
    {
        $empresa = company::find(auth()->user()->company_id);

         if (strlen($this->search) > 0)
            $cuponEspera = Ticket::where([
                ['tickets.company_id', '=', auth()->user()->company_id],
                ['statusTicket', '=', 'En espera de Aprobacion'],
                ['tickets.name','like', '%' . $this->search . '%']
            ])->select('*')->orderBy('name','asc')->paginate($this->pagination);

        else 
            $cuponEspera = Ticket::where([
                ['tickets.company_id', '=', auth()->user()->company_id],
                ['statusTicket', '=', 'En espera de Aprobacion']
            ])->select('*')->orderBy('id','asc')->paginate($this->pagination);


          if (strlen($this->searchAprobado) > 0)
            $cuponAprobado = Ticket::where([
                ['tickets.company_id', '=', auth()->user()->company_id],
                ['statusTicket', '=', 'Oferta Aprobada'],
                ['beging', '<=', date('Y-m-d')],
                ['limit', '>=', date('Y-m-d')],
                ['tickets.name','like', '%' . $this->searchAprobado . '%']
            ])->select('*')->orderBy('name','asc')->paginate($this->paginadorA);

        else 
            $cuponAprobado = Ticket::where([
                ['tickets.company_id', '=', auth()->user()->company_id],
                ['statusTicket', '=', 'Oferta Aprobada'],
                ['beging', '<=', date('Y-m-d')],
                ['limit', '>=', date('Y-m-d')]
            ])
            ->select('*')->orderBy('id','asc')->paginate($this->paginadorA);


        if (strlen($this->searchFuturo) > 0)
            $cuponFuturo = Ticket::where([
                ['tickets.company_id', '=', auth()->user()->company_id],
                ['statusTicket', '=', 'Oferta Aprobada'],
                ['beging', '>', date('Y-m-d')],
                ['limit', '>=', date('Y-m-d')],
                ['tickets.name','like', '%' . $this->searchFuturo . '%']
            ])->select('*')->orderBy('name','asc')->paginate($this->paginadorA);

        else 
            $cuponFuturo = Ticket::where([
                ['tickets.company_id', '=', auth()->user()->company_id],
                ['statusTicket', '=', 'Oferta Aprobada'],
                ['beging', '>', date('Y-m-d')],
                ['limit', '>=', date('Y-m-d')]
            ])->select('*')->orderBy('id','asc')->paginate($this->paginadorA);


        if (strlen($this->searchPasada) > 0)
            $cuponPasado = Ticket::where([
                ['tickets.company_id', '=', auth()->user()->company_id],
                ['limit', '<=', date('Y-m-d')],
                ['tickets.name','like', '%' . $this->searchPasada . '%']
            ])->select('*')->orderBy('name','asc')->paginate($this->paginadorA);

        else 
            $cuponPasado = Ticket::where([
                ['tickets.company_id', '=', auth()->user()->company_id],
                ['limit', '<=', date('Y-m-d')]
            ])->select('*')->orderBy('id','asc')->paginate($this->paginadorA);



         if (strlen($this->searchRechazado) > 0)
            $cuponRechazado = Ticket::where([
                ['tickets.company_id', '=', auth()->user()->company_id],
                ['statusTicket', '=', 'Oferta Rechazada'],
                ['tickets.name','like', '%' . $this->searchRechazado . '%']
            ])->select('*')->orderBy('name','asc')->paginate($this->paginadorR);

        else 
            $cuponRechazado = Ticket::where([
                ['tickets.company_id', '=', auth()->user()->company_id],
                ['statusTicket', '=', 'Oferta Rechazada']
            ])->select('*')->orderBy('id','asc')->paginate($this->paginadorR);


        if (strlen($this->searchDescartado) > 0)
            $cuponDescartado = Ticket::where([
                ['tickets.company_id', '=', auth()->user()->company_id],
                ['statusTicket', '=', 'Oferta Descartada'],
                ['tickets.name','like', '%' . $this->searchDescartado . '%']
            ])->select('*')->orderBy('name','asc')->paginate($this->paginadorD);

        else 
            $cuponDescartado = Ticket::where([
                ['tickets.company_id', '=', auth()->user()->company_id],
                ['statusTicket', '=', 'Oferta Descartada']
            ])->select('*')->orderBy('id','asc')->paginate($this->paginadorD);



        return view('livewire.view-coupon-company.view-coupon-company',[
            'cuponEspera' => $cuponEspera,
            'cuponAprobado' => $cuponAprobado,
            'cuponFuturo' => $cuponFuturo,
            'cuponRechazado' => $cuponRechazado,
            'cuponDescartado' => $cuponDescartado,
            'cuponPasado' =>$cuponPasado,
            'empresa'=>$empresa

        ])->extends('layouts.theme.app')->section('content');
    }


    public function showCoupon(Ticket $tickets){

     $this->titulo = $tickets->name;
        $this->descripcion = $tickets->description;
        $this->precioRegular = $tickets->price;
        $this->PrecioOferta = $tickets->promotion;
        $this->fechaInicio = $tickets->beging;
        $this->fechaFinal = $tickets->ending;
        $this->fechaLimiteCanje =$tickets->limit;
        $this->cantidadCupon = $tickets->quantity;
        $this->cantidadCupon = $tickets->quantity;
        $this->otrosDetalles = $tickets->details;



        $this->emit('show-modal', 'show modal!'); 
    }

    public function showView(Ticket $tickets){

      $this->titulo = $tickets->name;
        $this->descripcion = $tickets->description;
        $this->precioRegular = $tickets->price;
        $this->PrecioOferta = $tickets->promotion;
        $this->fechaInicio = $tickets->beging;
        $this->fechaFinal = $tickets->ending;
        $this->fechaLimiteCanje =$tickets->limit;
        $this->cantidadCupon = $tickets->quantity;
        $this->cantidadCupon = $tickets->quantity;
        $this->otrosDetalles = $tickets->details;
        $this->image = $tickets->image;



        $this->emit('show-modalC', 'show modal!'); 
    } 


    public function Edit(Ticket $tickets){
        $this->selected_id = $tickets->id;
        $this->titulo = $tickets->name;
        $this->descripcion = $tickets->description;
        $this->precioRegular = $tickets->price;
        $this->PrecioOferta = $tickets->promotion;
        $this->fechaInicio = $tickets->beging;
        $this->fechaFinal = $tickets->ending;
        $this->fechaLimiteCanje =$tickets->limit;
        $this->cantidadCupon = $tickets->quantity;
        $this->cantidadCupon = $tickets->quantity;
        $this->otrosDetalles = $tickets->details;
        $this->motivo = $tickets->reason;


        $this->emit('show-modal-Edicion', 'show modal!'); 
    }


    public function Update(){
        $rules=[
       'titulo'=>'required|min:3',
        'precioRegular' => 'required',
        'PrecioOferta' => 'required',
        'fechaInicio' => 'required',
        'fechaFinal' => 'required|after_or_equal:fechaInicio',
        'fechaLimiteCanje' => 'required|date|after_or_equal:fechaInicio',
        'descripcion'=>'required|min:10',
        'statusCoupon' => 'required|not_in:Seleccionar',

    ];

    $messages =[
        'titulo.required' =>'El titulo del cupon es requerido',
        'titulo.min'=>'El titulo del cupon debe tener al menos tres caracteres',
        'precioRegular.required'=>'El precio regular del ticket es requerido',
        'PrecioOferta.required'=>'El precio promocion del ticket es requerido',
        'fechaInicio.required'=>'Defina una fecha de inicio',
        'fechaFinal.required'=>'Defina fecha final de venta',
        'fechaFinal.after_or_equal'=>'La fecha final no debe ser menor a la fecha inicial',
        'fechaLimiteCanje.required'=>'Defina la fecha limite de canje',
        'fechaLimiteCanje.after_or_equal'=>'La fecha limite de canje no puede ser menor a la fecha inicial',
        'descripcion.required'=>'La descripcion es requerida',
        'descripcion.min'=>'la descripcion debe tener al menos 10 caracteres',
        'statusCoupon.required' =>'Selecciona un rol para el usuario',
        'statusCoupon.not_in' =>'Selecciona un rol Valido',
    ];

    $this->validate($rules, $messages);

    $tickets = Ticket::find($this->selected_id);
    $tickets->update([
        'name' => $this->titulo,
        'price' => $this->precioRegular,
        'promotion'=>$this->PrecioOferta,
        'beging' => $this->fechaInicio,
        'ending' => $this->fechaFinal,
        'limit' => $this->fechaLimiteCanje,
        'quantity' => $this->cantidadCupon,
        'description' => $this->descripcion,
        'statusTicket'=> $this->statusCoupon,
        'details'=> $this->otrosDetalles,
    ]);

    if($this->image){
            $customFileName = uniqid().'_.'.$this->image->extension();
            $this->image->storeAs('public/cupon/', $customFileName);
            $imageName = $tickets->image;

            $tickets->image = $customFileName;
            $tickets->save();

            if ($imageName !=null) {
                if (file_exists('storage/cupon/'.$imageName)) {
                    unlink('storage/cupon/'. $imageName);
                }
            }
         }





    $this->resetUI();
    $this->emit('ticket-update','Ticket Editado con exito');

}





     public function updatingSearch()
    {
        $this->resetPage();
    }


    public function resetUI(){
        $this->search ='';
        $this->searchAprobado ='';
        $this->searchRechazado ='';
        $this->searchDescartado ='';
        $this->searchFuturo ='';
        $this->searchPasada ='';
        $this->selected_id =0;
        $this->titulo ='';
        $this->descripcion ='';
        $this->precioRegular ='';
        $this->PrecioOferta ='';
        $this->fechaInicio ='';
        $this->fechaFinal ='';
        $this->fechaLimiteCanje ='';
        $this->cantidadCupon ='';
        $this->otrosDetalles ='';
        $this->image ='';
        $this->resetPage();
    }


}
