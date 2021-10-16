<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\company;
use Illuminate\Support\Facades\Storage; //facade para manipular imagenes en laravel
use Livewire\withFileUploads; // trait para subir imagenes
use Livewire\withPagination; //trait paginacion


class PostClienteController extends Component
{
    use withFileUploads; 
    use WithPagination; 

     public function paginationView(){
        return 'vendor.livewire.bootstrap';
    }

    private $pagination = 8;
    public function render()
    {
        $tickets = Ticket::join('companies as c', 'c.id','tickets.company_id')
                    ->where([
                        ['statusTicket', '=', 'Oferta Aprobada'],
                        ['beging', '<=', date('Y-m-d')],
                        ['limit', '>=', date('Y-m-d')],
                    ])
                    ->select('c.nameCompanies','tickets.*')->orderBy('name','asc')->paginate($this->pagination);

        return view('livewire.post-cliente.post-cliente',[
            'tickets' => $tickets
        ])->extends('layouts.theme.app')
        ->section('content');
    }
}
