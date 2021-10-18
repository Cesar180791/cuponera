<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\withPagination;

class ViewClienteAdminController extends Component
{
    use withPagination;

    public $search;

      private $pagination = 10;

     public function mount(){
        $this->pageTitle = 'Lista';
        $this->componentName = 'Clientes';
    }

     public function paginationView(){
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {

        if(strlen($this->search) > 0)
            $data = User::where([
                ['profile', '!=', 'Dependientes_Sucursal'],
                ['profile', '!=', 'Empresa'],
                ['profile', '!=', 'Administrador'],
                ['name', 'like', '%'.$this->search.'%']
            ])->select('*')->orderBy('name','asc')->paginate($this->pagination);

        else 
            $data = User::where('profile','=','Cliente')->orderBy('name','asc')->paginate($this->pagination);

        return view('livewire.view-cliente-admin.view-cliente-admin',[
            "data"=>$data
        ])->extends('layouts.theme.app')->section('content');
    }
}
