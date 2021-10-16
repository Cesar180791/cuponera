<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\company;
use Livewire\withPagination;

class ViewTicketAdminController extends Component
{
    use withPagination;
    public $idEmpresa,$componentName1, $componentName2, $componentName3, $componentName4,$componentName5, $componentName6, $pageTitle, $search,$searchAprobado, $searchRechazado, $searchDescartado, $searchFuturo, $searchPasada,$componentNameModalView,$selected_id, $titulo, $descripcion, $precioRegular, $PrecioOferta, $fechaInicio, $fechaFinal, $fechaLimiteCanje, $cantidadCupon, $otrosDetalles,$image,$motivo,$statusCoupon;


   private $pagination = 10, $paginadorA =10, $paginadorR =10, $paginadorD=10;

    public function mount($idEmpresa){




        $this->componentName1 = 'En Espera de Aprobacion';
        $this->componentName2 = 'Aprobadas';
        $this->componentName3 = 'Rechazadas';
        $this->componentName4 = 'Descartadas';
        $this->componentName5 = 'Ofertas Aprobadas Futuras';
        $this->componentName6 = 'Ofertas Pasadas';
        $this->componentNameModalView = 'Ver Cupon';
        $this->pageTitle = 'Lista';
        $this->statusCoupon = 'Seleccionar';
        $this->pageTitle = 'Lista';
        $this->idEmpresa = $idEmpresa;
    }

    public function paginationView(){
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
         if (strlen($this->search) > 0)
            $cuponEspera = Ticket::join('companies as c', 'c.id','tickets.company_id')
            ->select('c.nameCompanies','tickets.*')
            ->where([
                ['tickets.company_id', '=', $this->idEmpresa],
                ['statusTicket', '=', 'En espera de Aprobacion'],
                ['tickets.name','like', '%' . $this->search . '%']
            ])->orderBy('name','asc')->paginate($this->pagination);

        else 
            $cuponEspera = Ticket::join('companies as c', 'c.id','tickets.company_id')
            ->select('c.nameCompanies','tickets.*')
            ->where([
                ['tickets.company_id', '=', $this->idEmpresa],
                ['statusTicket', '=', 'En espera de Aprobacion']
            ])->orderBy('id','asc')->paginate($this->pagination);


          if (strlen($this->searchAprobado) > 0)
            $cuponAprobado = Ticket::join('companies as c', 'c.id','tickets.company_id')
            ->select('c.nameCompanies','tickets.*')
              ->where([
                ['tickets.company_id', '=', $this->idEmpresa],
                ['statusTicket', '=', 'Oferta Aprobada'],
                ['beging', '<=', date('Y-m-d')],
                ['limit', '>=', date('Y-m-d')],
                ['tickets.name','like', '%' . $this->searchAprobado . '%']
            ])->orderBy('name','asc')->paginate($this->paginadorA);

        else 
            $cuponAprobado = Ticket::join('companies as c', 'c.id','tickets.company_id')
            ->select('c.nameCompanies','tickets.*')
            ->where([
                ['tickets.company_id', '=', $this->idEmpresa],
                ['statusTicket', '=', 'Oferta Aprobada'],
                ['beging', '<=', date('Y-m-d')],
                ['limit', '>=', date('Y-m-d')]
            ])->orderBy('id','asc')->paginate($this->paginadorA);


        if (strlen($this->searchFuturo) > 0)
            $cuponFuturo = Ticket::join('companies as c', 'c.id','tickets.company_id')
            ->select('c.nameCompanies','tickets.*')
            ->where([
                ['tickets.company_id', '=', $this->idEmpresa],
                ['statusTicket', '=', 'Oferta Aprobada'],
                ['beging', '>', date('Y-m-d')],
                ['limit', '>=', date('Y-m-d')],
                ['tickets.name','like', '%' . $this->searchFuturo . '%']
            ])->orderBy('name','asc')->paginate($this->paginadorA);

        else 
            $cuponFuturo = Ticket::join('companies as c', 'c.id','tickets.company_id')
            ->select('c.nameCompanies','tickets.*')
            ->where([
                ['tickets.company_id', '=', $this->idEmpresa],
                ['statusTicket', '=', 'Oferta Aprobada'],
                ['beging', '>', date('Y-m-d')],
                ['limit', '>=', date('Y-m-d')]
            ])->orderBy('id','asc')->paginate($this->paginadorA);


        if (strlen($this->searchPasada) > 0)
            $cuponPasado = Ticket::join('companies as c', 'c.id','tickets.company_id')
            ->select('c.nameCompanies','tickets.*')
            ->where([
                ['tickets.company_id', '=', $this->idEmpresa],
                ['limit', '<=', date('Y-m-d')],
                ['tickets.name','like', '%' . $this->searchPasada . '%']
            ])->orderBy('name','asc')->paginate($this->paginadorA);

        else 
            $cuponPasado = Ticket::join('companies as c', 'c.id','tickets.company_id')
            ->select('c.nameCompanies','tickets.*')
           ->where([
                ['tickets.company_id', '=', $this->idEmpresa],
                ['limit', '<=', date('Y-m-d')]
            ])->orderBy('id','asc')->paginate($this->paginadorA);



         if (strlen($this->searchRechazado) > 0)
            $cuponRechazado = Ticket::join('companies as c', 'c.id','tickets.company_id')
            ->select('c.nameCompanies','tickets.*')
            ->where([
                ['tickets.company_id', '=', $this->idEmpresa],
                ['statusTicket', '=', 'Oferta Rechazada'],
                ['tickets.name','like', '%' . $this->searchRechazado . '%']
            ])->orderBy('name','asc')->paginate($this->paginadorR);

        else 
            $cuponRechazado = Ticket::join('companies as c', 'c.id','tickets.company_id')
            ->select('c.nameCompanies','tickets.*')
            ->where([
                ['tickets.company_id', '=', $this->idEmpresa],
                ['statusTicket', '=', 'Oferta Rechazada']
            ])->orderBy('id','asc')->paginate($this->paginadorR);


        if (strlen($this->searchDescartado) > 0)
            $cuponDescartado = Ticket::join('companies as c', 'c.id','tickets.company_id')
            ->select('c.nameCompanies','tickets.*')
            ->where([
                ['tickets.company_id', '=', $this->idEmpresa],
                ['statusTicket', '=', 'Oferta Descartada'],
                ['tickets.name','like', '%' . $this->searchDescartado . '%']
            ])->orderBy('name','asc')->paginate($this->paginadorD);

        else 
            $cuponDescartado = Ticket::join('companies as c', 'c.id','tickets.company_id')
            ->select('c.nameCompanies','tickets.*')
            ->where([
                ['tickets.company_id', '=', $this->idEmpresa],
                ['statusTicket', '=', 'Oferta Descartada']
            ])->orderBy('id','asc')->paginate($this->paginadorD);



        return view('livewire.view-ticket-admin.view-ticket-admin',[
            'cuponEspera' => $cuponEspera,
            'cuponAprobado' => $cuponAprobado,
            'cuponFuturo' => $cuponFuturo,
            'cuponRechazado' => $cuponRechazado,
            'cuponDescartado' => $cuponDescartado,
            'cuponPasado' =>$cuponPasado

        ])->extends('layouts.theme.app')->section('content');
    }



    public function changeState(Ticket $tickets){
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


        $this->emit('show-modal', 'show modal!');
    }



        public function Update(){
        $rules=[
        'statusCoupon' => 'required|not_in:Seleccionar',
        'motivo'=> 'required|min:10'

    ];

    $messages =[
        'statusCoupon.required' =>'Selecciona un rol para el usuario',
        'statusCoupon.not_in' =>'Selecciona un rol Valido',
        'motivo.required' => 'El motivo de cambio de estado es requerido',
        'motivo.min' => 'El motivo debe tener al menos 10 caracteres'
    ];

    $this->validate($rules, $messages);

    $tickets = Ticket::find($this->selected_id);
    $tickets->update([
        'statusTicket'=> $this->statusCoupon,
        'reason'=> $this->motivo,
    ]);

    $this->resetUI();
    $this->emit('ticket-update','El Cambio de estado del ticket se ha realizado con exito'); 

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
         $this->statusCoupon = 'Seleccionar';
        $this->resetPage();
    }

}
