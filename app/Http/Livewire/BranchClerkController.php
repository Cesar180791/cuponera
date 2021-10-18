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

    public $search, $nameCompanies, $name, $cliente, $dui, $limit,$codeCupon;

    private $pagination = 10;

      public function mount(){
        $this->PageTitle = 'Cobrar Cupon';
        $this->ComponentName='Dependiente de Sucursal';
    }



    public function render()
    {
        /*
         if (strlen($this->search) > 0)
            $disponibleCliente = TicketWallet::join('tickets as t', 't.id','ticket_wallets.ticket_id')
            ->join('companies as c', 'c.id', 't.company_id')
            ->join('users as u', 'u.company_id','c.id')
            ->select('t.*','ticket_wallets.*','ticket_wallets.quantity as cantidadDisponible','c.nameCompanies')
            ->where([
                ['ticket_wallets.codeCupon', '=', $this->search],
                ['beging', '<=', date('Y-m-d')],
                ['limit', '>=', date('Y-m-d')],
                ['ticket_wallets.quantity', '>=', 1],
                ['ticket_wallets.statusTicketWallet', '=', 'Cupon Disponible'],
                ['ticket_wallets.codeCupon','like', '%' . $this->search . '%'],
            ])
            ->orderBy('t.name','asc')->paginate($this->pagination);

            else
                $disponibleCliente = [];

*/

        return view('livewire.branch-clerk.branch-clerk')->extends('layouts.theme.app')->section('content');
    }

    protected $listeners =[
    'buscar' => 'buscarTicket',
    ];


    public function buscarTicket($cupon){
        $codigo = TicketWallet::join('tickets as t', 't.id','ticket_wallets.ticket_id')
        ->join('companies as c', 'c.id', 't.company_id')
        ->join('users as u', 'u.id','ticket_wallets.user_id', 'c.nameCompanies as empresa')
        ->select('t.*','t.name as nombreTicket', 'ticket_wallets.*','u.*')
        ->where('codeCupon', $cupon)->first();
      

        if ($codigo->quantity >= 1 ) {
               if ($codigo->beging <= date('Y-m-d') && $codigo->limit >=date('Y-m-d')){
                    $this->nameCompanies = $codigo->empresa;
                   $this->name = $codigo->nombreTicket;
                   $this->cliente = $codigo->name;
                   $this->dui = $codigo->dui;
                   $this->limit = $codigo->limit;
                   $this->codeCupon = $codigo->codeCupon;
                    $this->emit('cupo-encontrado','El cupon ha sido agregado');
                }
                else{
                     $this->emit('Cupon-Caducado','El Cupon ya caduco');
                }
        } else {
            $this->emit('Cupon-limite','Ya no tienes mas cupones con este codigo');
        }
    
        

      
        /*



        $disponibleCliente = TicketWallet::join('tickets as t', 't.id','ticket_wallets.ticket_id')
            ->join('companies as c', 'c.id', 't.company_id')
            ->join('users as u', 'u.company_id','c.id')
            ->select('t.*','ticket_wallets.*','ticket_wallets.quantity as cantidadDisponible','c.nameCompanies')
            ->where([
                ['ticket_wallets.codeCupon', '=', $this->search],
                ['beging', '<=', date('Y-m-d')],
                ['limit', '>=', date('Y-m-d')],
                ['ticket_wallets.quantity', '>=', 1],
                ['ticket_wallets.statusTicketWallet', '=', 'Cupon Disponible'],
                ['ticket_wallets.codeCupon','like', '%' . $this->search . '%'],
            ])*/
    }


}
