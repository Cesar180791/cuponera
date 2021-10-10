<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\company;
use App\Models\Heading;
use App\Models\User;
use Livewire\withPagination; 

class EditCompanyController extends Component
{
    use withPagination;

    public $selected_id, $profile='Empresa', $pageTitle, $componentName, $search, $nameCompanies, $addressCompany, $phoneCompany, $heading_id;

    private $pagination = 10;

     public function paginationView(){
        return 'vendor.livewire.bootstrap';
    }


     public function mount(){
        $this->pageTitle = 'Lista';
        $this->componentName = 'Gestion de Empresas';
    }
 
    public function render()
    {
         if (strlen($this->search) > 0)
            $data = company::join('headings as c','c.id','companies.heading_id')
                            ->select('companies.*','c.name as heading')
                            ->where('companies.nameCompanies','like', '%' . $this->search . '%')
                            ->orWhere('c.name','like', '%' . $this->search . '%')
                            ->orWhere('companies.codeCompany','like', '%' . $this->search . '%')
                            ->orderBy('companies.id','desc')
                            ->paginate($this->pagination);
        else
             $data = company::join('headings as c','c.id','companies.heading_id')
                            ->select('companies.*','c.name as heading')
                            ->orderBy('companies.id','desc')
                            ->paginate($this->pagination);


        return view('livewire.edit-company.edit-company' , [
            'data'=>$data,
            'rubros'=>Heading::orderBy('name', 'asc')->get(),
        ])->extends('layouts.theme.app')
        ->section('content');
    }

    public function StoreCompany(){

    $rules=[
        'nameCompanies' => 'required|min:5|unique:companies',
        'addressCompany' => 'required|min:10',
        'phoneCompany'=>'required|min:9|unique:companies',
        'heading_id' => 'required|not_in:Seleccionar',
    ];

    $messages =[
        'nameCompanies.required' => 'El nombre de la empresa es requerido',
        'nameCompanies.min' => 'El nombre de la empresa debe tener al menos 5 caracteres',
        'nameCompanies.unique' => 'La empresa ya existe en el sistema',
        'addressCompany.required' => 'La direccion de la empresa es requerida',
        'addressCompany.min' => 'La direccion debe tener al menos 10 Caracteres',
        'phoneCompany.required'=>'El telefono de la empresa es requerido',
        'phoneCompany.min'=>'El telefono de la empresa debe tener al menos 10 Caracteres',
        'phoneCompany.unique'=>'El telefono ingresado ya esta asociado a otra empresa',
        'heading_id.required' => 'Selecciona un rubro para la empresa',
        'heading_id.not_in' => 'Selecciona un rubro valido'
    ];

    $this->validate($rules, $messages);


        $company = company::create([
        'nameCompanies' => $this->nameCompanies,
        'codeCompany'=>'EMP'.rand(0,9).rand(0,9).rand(0,9),
        'address' => $this->addressCompany,
        'phoneCompany' => $this->phoneCompany,
        'heading_id' => $this->heading_id

    ]);

    $this->resetUI();
    $this->emit('company-add','Empresa creada con exito! Listar para asignar Usuario');
    }

     public function Edit(company $company){

        $this->selected_id = $company->id;
        $this->nameCompanies = $company->nameCompanies;
        $this->phoneCompany = $company->phoneCompany;
        $this->addressCompany = $company->address;
        $this->heading_id = $company->heading_id;
        $this->emit('show-modal', 'show modal!');
        
    }


    public function Update(){
        $rules=[
        'nameCompanies' => "required|min:5|unique:companies,nameCompanies,{$this->selected_id}",
        'addressCompany' => 'required|min:10',
        'phoneCompany'=>"required|min:9|unique:companies,phoneCompany,{$this->selected_id}",
        'heading_id' => 'required|not_in:Seleccionar',

    ];

    $messages =[
        'nameCompanies.required' => 'El nombre de la empresa es requerido',
        'nameCompanies.min' => 'El nombre de la empresa debe tener al menos 5 caracteres',
        'nameCompanies.unique' => 'La empresa ya existe en el sistema',
        'addressCompany.required' => 'La direccion de la empresa es requerida',
        'addressCompany.min' => 'La direccion debe tener al menos 10 Caracteres',
        'phoneCompany.required'=>'El telefono de la empresa es requerido',
        'phoneCompany.min'=>'El telefono de la empresa debe tener al menos 10 Caracteres',
        'phoneCompany.unique'=>'El telefono ingresado ya esta asociado a otra empresa',
        'heading_id.required' => 'Selecciona un rubro para la empresa',
        'heading_id.not_in' => 'Selecciona un rubro valido'
    ];

    $this->validate($rules, $messages);

    $companies = company::find($this->selected_id);
    $companies->update([
        'nameCompanies' => $this->nameCompanies,
        'address' => $this->addressCompany,
        'phoneCompany' => $this->phoneCompany,
        'heading_id' => $this->heading_id

    ]);

    $this->resetUI();
    $this->emit('company-update','Datos de la empresas editado con exito');

}

public $listeners =[
    'deleteRows' => 'Destroy',
    'resetUI' => 'resetUI'
];

public function Destroy(company $company){

    $company->delete();
    $this->resetUI();
    $this->emit('company-deleted','Empresa eliminada con exito');

}


    public function resetUI(){
       $this->nameCompanies = '';
       $this->addressCompany = '';
       $this->phoneCompany = '';
       $this->heading_id = 0;
       $this->search='';
       $this->selected_id = 0;
       $this->resetValidation();
       $this->resetPage();
    }

}
