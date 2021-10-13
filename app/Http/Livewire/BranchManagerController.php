<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\withPagination;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\company;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmacionPass;

class BranchManagerController extends Component
{
    use withPagination;

    public $name , $phone,$address, $dui, $email, $status, $password, $selected_id, 
           $profile, $pageTitle, $componentName, $search;

    private $pagination = 10;


    public function paginationView(){
        return 'vendor.livewire.bootstrap';
    }

    public function mount(){
        $this->pageTitle = 'Lista';
        $this->componentName = 'Dependientes de Sucursal';
        $this->status = 'Seleccionar';
        $this->profile='Seleccionar';
    }


    public function render()
    {
        if (strlen($this->search) > 0)
            $data = company::join('users as c','c.company_id','companies.id')
                            ->select('companies.*','c.*')
                            ->where([
                                ['companies.id','=',auth()->user()->company_id],
                                ['c.profile', '!=', 'Empresa'],
                                ['c.name','like', '%' . $this->search . '%']
                            ])
                            ->orWhere([
                                ['companies.id','=',auth()->user()->company_id],
                                ['c.profile', '!=', 'Empresa'],
                                ['c.id','like', '%' . $this->search . '%']
                            ])
                            ->orderBy('companies.id','desc')
                            ->paginate($this->pagination);
        else
             $data = company::join('users as c','c.company_id','companies.id')
                            ->select('companies.*','c.*')
                            ->where([
                                ['companies.id','=',auth()->user()->company_id],
                                ['c.profile', '!=', 'Empresa']
                            ])
                            ->orderBy('companies.id','desc')
                            ->paginate($this->pagination);


        return view('livewire.branch-manager.branch-manager',[
             'data'=>$data,
             'roles'=>Role::where('name', '=', 'Dependientes_Sucursal')->get(),
        ])->extends('layouts.theme.app')->section('content'); 
    }

    public function Store(){

        $rules=[
        'name'=>'required|min:3',
        'phone' => 'required|unique:users|min:9',
        'address' => 'required|min:10',
        'dui' => 'required|min:10|unique:users',
        'email' => 'required|email|unique:users',
        'status' => 'required|not_in:Seleccionar',
        'profile' => 'required|not_in:Seleccionar'
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
        'company_id' =>auth()->user()->company_id
    ]);



    $user->syncRoles($this->profile);


    Mail::to("$this->email")->send(new ConfirmacionPass(
        $enviarCorrreo = [
        'email' => $this->email,
        'password' => $this->password,
        'name' => $this->name
        ]
    ));
    

    $this->resetUI();
    $this->emit('userBranch-add','Usuario Depediente de sucursal creado con exito!');
    }


    public function Edit(User $user){

        $this->selected_id = $user->id;
        $this->name = $user->name;
        $this->phone = $user->phone;
        $this->address = $user->address;
        $this->dui = $user->dui;
        $this->email = $user->email;
        $this->status = $user->status;
        $this->profile = $user->profile;
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
    ]);

    $user->syncRoles($this->profile);
    $this->resetUI();
    $this->emit('userBranch-update','Usuario Dependiente de sucursal editado con exito!');
    }


    public $listeners =[
    'deleteRows' => 'Destroy',
    'resetUI' => 'resetUI'
    ];


    public function Destroy(User $user){
    $user->delete();
    $this->resetUI();
    $this->emit('userBranch-deleted','Dependiente de sucursal eliminado con Exito!');
    }






    public function resetUI(){

       $this->name='';
       $this->phone='';
       $this->address='';
       $this->dui='';
       $this->email='';
       $this->status='';
       $this->password='';
       $this->selected_id=0;
       $this->profile='';
       $this->search='';
       $this->resetValidation();
       $this->resetPage();
    }
}
