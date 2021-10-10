<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Livewire\withPagination;
use App\Models\User;
use App\Models\Heading;
use App\Models\company;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmacionPass;

class CompanyController extends Component
{ 
     use withPagination;
      public $name , $phone,$address, $dui, $email, $status, $password, $selected_id, $profile, $pageTitle, 
      $componentName, $search, $nameCompanies, $addressCompany, $phoneCompany, $heading_id,$company_id;

    private $pagination = 10;
    
     public function paginationView(){
        return 'vendor.livewire.bootstrap';
    }


    public function mount(){
        $this->pageTitle = 'Lista';
        $this->componentName = 'Administradores de Empresas';
        $this->status = 'Seleccionar';
        $this->profile='Seleccionar';
    }


    public function render()
    {

        if (strlen($this->search) > 0)
            $data = company::join('users as c','c.company_id','companies.id')
                            ->select('companies.*','c.*')
                            ->where('companies.nameCompanies','like', '%' . $this->search . '%')
                            ->orWhere('c.name','like', '%' . $this->search . '%')
                            ->orWhere('companies.codeCompany','like', '%' . $this->search . '%')
                            ->orderBy('companies.id','desc')
                            ->paginate($this->pagination);
        else
             $data = company::join('users as c','c.company_id','companies.id')
                            ->select('companies.*','c.*')
                            ->orderBy('companies.id','desc')
                            ->paginate($this->pagination);

        return view('livewire.company.company' , [
            'data'=>$data,
            'roles'=>Role::where('name', '=', 'Empresa')->get(),
            'rubros'=>Heading::orderBy('name', 'asc')->get(),
            'companies'=>company::orderBy('nameCompanies', 'asc')->get(),

         
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




    public function Store(){

        $rules=[
        'name'=>'required|min:3',
        'phone' => 'required|unique:users|min:9',
        'address' => 'required|min:10',
        'dui' => 'required|min:10|unique:users',
        'email' => 'required|email|unique:users',
        'status' => 'required|not_in:Seleccionar',
        'profile' => 'required|not_in:Seleccionar',
        'company_id' => 'required|not_in:Seleccionar'
      

    ];

    $messages =[
        'name.required' =>'El nombre es requerido',
        'name.min'=>'El nombre debe tener al menos tres caracteres',
        'phone.required'=>'Telefono requerido',
        'phone.unique'=>'El numero ya esta asociado a otra cuenta',
        'phone.min'=>'El numero debe tener al menos 9 Caracteres',
        'address.required'=>'La direccion es requerida',
        'address.min'=>'La direccion debe tener al menos 10 caracteres',
        'dui.required'=>'El Dui es requerido',
        'dui.min'=>'El Dui debe tener al menos 10 Caracteres',
        'dui.unique'=>'El numero de Dui ya esta sociado a otra cuenta',
        'email.required'=>'El Correo es requerido',
        'email.email'=>'Ingresa un correo Valido',
        'email.unique'=>'El Correo ya esta asociado a otra cuenta',
        'status.required' =>'Selecciona un estado para el usuario',
        'status.not_in' =>'Selecciona un Estatus Valido',
        'profile.required' =>'Selecciona un rol para el usuario',
        'profile.not_in' =>'Selecciona un rol Valido',
        'company_id.required' =>'Selecciona una empresa para el usuario',
        'company_id.not_in' =>'Selecciona una empresa valida Valido',
    ];

    $this->validate($rules, $messages);

    $user = User::create([
        'name' => $this->name,
        'phone' => $this->phone,
        'address' => $this->address,
        'dui' => $this->dui,
        'email' => $this->email,
        'password' => bcrypt($this->password = uniqid()),
        'profile'=> $this->profile,
        'status'=> $this->status,
        'company_id' =>$this->company_id
    ]);



    $user->syncRoles($this->profile);


    Mail::to("$this->email")->send(new ConfirmacionPass(
        $enviarCorrreo = [
        'email' => $this->email,
        'password' => $this->password
        ]
    ));
    

    $this->resetUI();
    $this->emit('userCompany-add','Usuario Administrador de Empresa Creado con exito');
    }

    public function Edit(User $user){

        $this->selected_id = $user->id;
        $this->name = $user->name;
        $this->phone = $user->phone;
        $this->address = $user->address;
        $this->dui = $user->dui;
        $this->email = $user->email;
        $this->status = $user->status;
        $this->profile = $this->profile;
        $this->company_id = $user->company_id;
        $this->emit('show-modal', 'show modal!');
        
    }


public function Update(){
        $rules=[
        'email' => "required|email|unique:users,email,{$this->selected_id}",
        'phone' => "required|min:9|unique:users,phone,{$this->selected_id}",
        'dui' => "required|min:10|unique:users,dui,{$this->selected_id}",
        'name'=>'required|min:3',
        'address' => 'required|min:10',
        'status' => 'required|not_in:Seleccionar',
        'profile' => 'required|not_in:Seleccionar',
        'company_id' => 'required|not_in:Seleccionar'

    ];

    $messages =[
        'name.required' =>'El nombre es requerido',
        'name.min'=>'El nombre debe tener al menos tres caracteres',
        'phone.required'=>'Telefono requerido',
        'phone.unique'=>'El numero ya esta asociado a otra cuenta',
        'phone.min'=>'El numero debe tener al menos 9 Caracteres',
        'address.required'=>'La direccion es requerida',
        'address.min'=>'La direccion debe tener al menos 10 caracteres',
        'dui.required'=>'El Dui es requerido',
        'dui.min'=>'El Dui debe tener al menos 10 Caracteres',
        'dui.unique'=>'El numero de Dui ya esta sociado a otra cuenta',
        'email.required'=>'El Correo es requerido',
        'email.email'=>'Ingresa un correo Valido',
        'email.unique'=>'El Correo ya esta asociado a otra cuenta',
        'status.required' =>'Selecciona un estado para el usuario',
        'status.not_in' =>'Selecciona un Estatus Valido',
        'profile.required' =>'Selecciona un rol para el usuario',
        'profile.not_in' =>'Selecciona un rol Valido',
        'company_id.required' =>'Selecciona una empresa para el usuario',
        'company_id.not_in' =>'Selecciona una empresa valida Valido'
    ];

    $this->validate($rules, $messages);

    $user = User::find($this->selected_id);
    $user->update([
        'name' => $this->name,
        'phone' => $this->phone,
        'address' => $this->address,
        'dui' => $this->dui,
        'email' => $this->email,
        'profile'=> $this->profile,
        'status'=> $this->status,
        'company_id' =>$this->company_id

    ]);

    $user->syncRoles($this->profile);
    $this->resetUI();
    $this->emit('userCompany-update','Usuario Administrador de empresas editado con exito');

}

public $listeners =[
    'deleteRows' => 'Destroy',
    'resetUI' => 'resetUI'
];

public function Destroy(User $user){
    /*if ($user) {
        
    }else{

    }*/
    $user->delete();
    $this->resetUI();
    $this->emit('userAdmin-deleted','Usuario eliminado con exito');

}



    public function resetUI(){
        $this->name = '';
        $this->phone ='';
        $this->address ='';
        $this->dui ='';
        $this->email ='';
        $this->status ='';
        $this->password ='';
       $this->nameCompanies = '';
       $this->addressCompany = '';
       $this->phoneCompany = '';
       $this->heading_id = 0;
       $this->search='';
       $this->profile='';
       $this->selected_id = 0;
       $this->resetValidation();
       $this->resetPage();
    }

}
