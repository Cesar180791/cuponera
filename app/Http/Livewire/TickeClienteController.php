<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\TicketWallet;
use App\Models\UsedTicket;
use Livewire\withPagination;

class TickeClienteController extends Component
{
    use withPagination;
    public $ComponentName, $PageTitle, $searchDisponible,$searchVencidos,$searchCanjeado;

    private $pagination = 10;

     public function mount(){
        $this->PageTitle = 'Lista';
       $this->ComponentName3='Cupones Canjeados';
        $this->ComponentName = 'Cupones Disponibles';
        $this->ComponentName2='Cupones Vencidos';
    }

    public function render()
    {
        if (strlen($this->searchDisponible) > 0)
        $disponibleCliente = TicketWallet::join('tickets as t', 't.id','ticket_wallets.ticket_id')
            ->join('companies as c', 'c.id', 't.company_id')
            ->select('t.*','ticket_wallets.*','ticket_wallets.quantity as cantidadDisponible','c.nameCompanies')
            ->where([
                ['ticket_wallets.user_id', '=', auth()->user()->id],
                ['beging', '<=', date('Y-m-d')],
                ['limit', '>=', date('Y-m-d')],
                ['ticket_wallets.quantity', '>=', 1],
                ['ticket_wallets.statusTicketWallet', '=', 'Cupon Disponible'],
                ['ticket_wallets.codeCupon','like', '%' . $this->searchDisponible . '%'],
            ])
            ->orWhere([
                ['ticket_wallets.user_id', '=', auth()->user()->id],
                ['beging', '<=', date('Y-m-d')],
                ['limit', '>=', date('Y-m-d')],
                ['ticket_wallets.quantity', '>=', 1],
                ['ticket_wallets.statusTicketWallet', '=', 'Cupon Disponible'],
                ['t.name','like', '%' . $this->searchDisponible . '%'],
            ])
            ->orWhere([
                ['ticket_wallets.user_id', '=', auth()->user()->id],
                ['beging', '<=', date('Y-m-d')],
                ['limit', '>=', date('Y-m-d')],
                ['ticket_wallets.quantity', '>=', 1],
                ['ticket_wallets.statusTicketWallet', '=', 'Cupon Disponible'],
                ['c.nameCompanies','like', '%' . $this->searchDisponible . '%'],
            ])
            ->orderBy('t.name','asc')->paginate($this->pagination);
        else
           $disponibleCliente = TicketWallet::join('tickets as t', 't.id','ticket_wallets.ticket_id')
            ->join('companies as c', 'c.id', 't.company_id')
            ->select('t.*','ticket_wallets.*','ticket_wallets.quantity as cantidadDisponible','c.nameCompanies')
            ->where([
                ['ticket_wallets.user_id', '=', auth()->user()->id],
                ['ticket_wallets.quantity', '>=', 1],
                ['t.limit', '>=', date('Y-m-d')],
                ['ticket_wallets.statusTicketWallet', '=', 'Cupon Disponible'],
            ])->orderBy('t.name','asc')->paginate($this->pagination);




        if (strlen($this->searchVencidos) > 0)
            $vencidosCliente = TicketWallet::join('tickets as t', 't.id','ticket_wallets.ticket_id')
            ->join('companies as c', 'c.id', 't.company_id')
            ->select('t.*','ticket_wallets.*','ticket_wallets.quantity as cantidadDisponible','c.nameCompanies')
            ->where([
                ['ticket_wallets.user_id', '=', auth()->user()->id],
                ['limit', '<=', date('Y-m-d')],
                ['ticket_wallets.codeCupon','like', '%' . $this->searchVencidos . '%'],
            ])
            ->orWhere([
                ['ticket_wallets.user_id', '=', auth()->user()->id],
                 ['limit', '<=', date('Y-m-d')],
                ['t.name','like', '%' . $this->searchVencidos . '%'],
            ])
            ->orWhere([
                ['ticket_wallets.user_id', '=', auth()->user()->id],
                ['limit', '<=', date('Y-m-d')],
                ['c.nameCompanies','like', '%' . $this->searchVencidos . '%'],
            ])
            ->orderBy('t.name','asc')->paginate($this->pagination);
        else
           $vencidosCliente = TicketWallet::join('tickets as t', 't.id','ticket_wallets.ticket_id')
            ->join('companies as c', 'c.id', 't.company_id')
            ->select('t.*','ticket_wallets.*','ticket_wallets.quantity as cantidadDisponible','c.nameCompanies')
            ->where([
                ['ticket_wallets.user_id', '=', auth()->user()->id],
                ['limit', '<=', date('Y-m-d')],
            ])->orderBy('t.name','asc')->paginate($this->pagination);



            if (strlen($this->searchCanjeado) > 0)
            $canjeadoCliente = UsedTicket::join('ticket_wallets as tw', 'tw.id','used_tickets.ticket_wallets_id')
                              ->join('tickets as t', 't.id','tw.ticket_id')
                              ->join('companies as c', 'c.id','t.company_id')
                              ->select('tw.*','used_tickets.*','t.name','c.nameCompanies')
                              ->where([
                                    ['tw.user_id', '=', auth()->user()->id],
                                    ['c.nameCompanies','like', '%' . $this->searchCanjeado . '%'],
                               ])
                              ->orWhere([
                                    ['tw.user_id', '=', auth()->user()->id],
                                    ['t.name','like', '%' . $this->searchCanjeado . '%'],
                              ])
                              ->orWhere([
                                    ['tw.user_id', '=', auth()->user()->id],
                                    ['tw.codeCupon','like', '%' . $this->searchCanjeado . '%'],
                              ])

                              ->orderBy('tw.id','asc')->paginate($this->pagination);



            else 
            $canjeadoCliente = UsedTicket::join('ticket_wallets as tw', 'tw.id','used_tickets.ticket_wallets_id')
                            ->join('tickets as t', 't.id','tw.ticket_id')
                            ->join('companies as c', 'c.id','t.company_id')
                            ->select('tw.*','used_tickets.*','t.name','c.nameCompanies')
                            ->where([
                                ['tw.user_id', '=', auth()->user()->id],
                            ])->orderBy('tw.id','asc')->paginate($this->pagination);


            return view('livewire.ticke-cliente.ticke-cliente',[
                'disponibleCliente'=>$disponibleCliente,
                'vencidosCliente'=>$vencidosCliente,
                'canjeadoCliente'=>$canjeadoCliente
            ])->extends('layouts.theme.app')->section('content');
    }
}
