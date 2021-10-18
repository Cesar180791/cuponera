<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TicketWallet;
use App\Models\UsedTicket;
use App\Models\User;
use Livewire\withPagination;

class BranchClerkController extends Component
{
    use withPagination;

    public $search, $nameCompanies, $name, $cliente, $dui, $limit,$codeCupon, $idWallet;

    private $pagination = 10;

      public function mount(){
        $this->PageTitle = 'Cobrar Cupon';
        $this->ComponentName='Dependiente de Sucursal';
    }



    public function render()
    {
        
        return view('livewire.branch-clerk.branch-clerk')->extends('layouts.theme.app')->section('content');
    }

    protected $listeners =[
    'buscar' => 'buscarTicket',
    'cobrar'=> 'Canjear'
    ];


    public function buscarTicket($cupon){
        $codigo = TicketWallet::join('tickets as t', 't.id','ticket_wallets.ticket_id')
        ->join('companies as c', 'c.id', 't.company_id')
        ->join('users as u', 'u.id','ticket_wallets.user_id', 'c.nameCompanies as empresa')
        ->select('t.*','t.name as nombreTicket', 'ticket_wallets.id as cupon' ,'ticket_wallets.*','u.*')
        ->where('codeCupon', $cupon)->first();

   
        if ($codigo->quantity >= 1 ) {
               if ($codigo->beging <= date('Y-m-d') && $codigo->limit >=date('Y-m-d')){
                    $this->nameCompanies = $codigo->empresa;
                   $this->name = $codigo->nombreTicket;
                   $this->cliente = $codigo->name;
                   $this->dui = $codigo->dui;
                   $this->limit = $codigo->limit;
                   $this->codeCupon = $codigo->codeCupon;
                   $this->idWallet = $codigo->cupon;
                    $this->emit('cupo-encontrado','El cupon ha sido agregado');
                }
                else{
                     $this->emit('Cupon-Caducado','El Cupon ya caduco');
                }
        } else {
            $this->emit('Cupon-limite','Ya no tienes mas cupones con este codigo');
        }
    
        
    }

    public function Canjear($descontar){

        $buscar = TicketWallet::where('id', $descontar)->first();
        $actualizarExistencia = $buscar->quantity -1;
       
         $buscar->update([
        'quantity' => $actualizarExistencia,
        ]);


    $Usado = UsedTicket::create([
        'fechaCanjeado' => date('Y-m-d'),
        'ticket_wallets_id' => $buscar->id,
    ]);

    $this->emit('Cupon-canjeado','Cupon Canjeado Exitosamente');

                    $this->nameCompanies = "";
                   $this->name = "";
                   $this->cliente = "";
                   $this->dui = "";
                   $this->limit = "";
                   $this->codeCupon = "";
                   $this->idWallet = "";
                   $this->search ="";
      
    }



}
