<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Livewire\withPagination;
use App\Models\User;
use App\Models\Heading;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmacionPass;

class UsersController extends Component
{
    use withPagination;

    public $name , $phone,$address, $dui, $email, $status, $password, $selected_id,$fileLoaded, $profile='Administrador', $pageTitle, $componentName, $search;
    private $pagination = 10;

     public function mount(){
        $this->pageTitle = 'Lista';
        $this->componentName = 'Administradores Cuponera';
        $this->status = 'Seleccionar';
    }

     public function paginationView(){
        return 'vendor.livewire.bootstrap';
    }


    public function render()
    {
        if(strlen($this->search) > 0)
            $data = User::where('name', 'like', '%'.$this->search.'%')->select('*')->orderBy('name','asc')->paginate($this->pagination);
        else 
            $data = User::where('profile','=','Administrador')->orderBy('name','asc')->paginate($this->pagination);


        return view('livewire.users.users',[
            'data'=>$data,
            'roles'=>Role::where('name', '=', 'Administrador')->get(),
            'rubros'=>Heading::orderBy('name', 'asc')->get()
        ])->extends('layouts.theme.app')->section('content');
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
        $this->emit('show-modal', 'show modal!'); 
    }


public $listeners =[
    'deleteRows' => 'Destroy',
    'resetUI' => 'resetUI'
];


public function Store(){
         $rules=[
        'name'=>'required|min:3',
        'phone' => 'required|unique:users|min:9',
        'address' => 'required|min:10',
        'dui' => 'required|min:10|unique:users',
        'email' => 'required|email|unique:users',
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

    $user = User::create([
        'name' => $this->name,
        'phone' => $this->phone,
        'address' => $this->address,
        'dui' => $this->dui,
        'email' => $this->email,
        'password' => bcrypt($this->password = uniqid()),
        'profile'=> $this->profile,
        'status'=> $this->status
    ]);



    $user->syncRoles($this->profile);


    Mail::to("$this->email")->send(new ConfirmacionPass(
        $enviarCorrreo = [
        'email' => $this->email,
        'password' => $this->password
        ]
    ));
    

    $this->resetUI();
    $this->emit('user-add','Usuario Creado con exito');

    
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
        'profile.not_in' =>'Selecciona un rol Valido'
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
        'status'=> $this->status
    ]);

    $user->syncRoles($this->profile);
    $this->resetUI();
    $this->emit('user-update','Usuario editado con exito');

}

public function Destroy(User $user){
    /*if ($user) {
        
    }else{

    }*/
    $user->delete();
    $this->resetUI();
    $this->emit('user-deleted','Usuario eliminado con exito');

}

    public function resetUI(){
        $this->name = '';
        $this->phone = '';
        $this->address = '';
        $this->dui = "";
        $this->email = '';
        $this->password = '';
        $this->status = 'Seleccionar';
        $this->profile = 'Seleccionar';
        $this->selected_id = 0;
        $this->search='';
        $this->resetValidation();
        $this->resetPage();

    }
}
