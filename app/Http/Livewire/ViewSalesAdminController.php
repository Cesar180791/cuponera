<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Ticket;
use App\Models\company;
use App\Models\Sale;
use App\Models\DetailSale;
use Livewire\WithPagination;

class ViewSalesAdminController extends Component
{
    use WithPagination; 

    public $idticket;

    private $pagination = 10;


     public function mount($idticket){
        $this->idticket = $idticket;

        
        $this->ComponentName  = 'Venta de Cupones';
        $this->PageTitle = 'Detalles';
    }

     public function paginationView(){
        return 'vendor.livewire.bootstrap';
    }


    public function render() 
    {



    

        return view('livewire.view-sales-admin.view-sales-admin')->extends('layouts.theme.app')->section('content');;
    }
}
