<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Livewire\withPagination;
use App\Models\User;
use DB;

class RolesController extends Component
{
    use withPagination;

    public $roleName, $search, $selected_id, $pageTitle, $componentName;
    private $pagination = '5';

    public function mount(){
        $this->pageTitle = 'Listado';
        $this->componentName = 'Roles';
    }
     public function paginationView(){
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
         if(strlen($this->search) > 0)
            $roles = Role::where('name', 'like', '%'.$this->search.'%')->paginate($this->pagination);
        else 
            $roles = Role::orderBy('id','asc')->paginate($this->pagination);

        return view('livewire.roles.roles', ['roles' => $roles])
        ->extends('layouts.theme.app')
        ->section('content');
    }

      public function CreateRole(){
        $rules = [
            'roleName'=>'required|min:2|unique:roles,name'
        ];

        $messages = [
            'roleName.required' => 'El rol es requerido',
            'roleName.unique' => 'Ya existe el rol',
            'roleName.min' => 'El nombre del rol debe tener al menos 2 caracteres',
        ];

        $this->validate($rules, $messages);

        Role::create([
            'name'=> $this->roleName
        ]);

        $this->resetUI();
        $this->emit('role-added','Rol registrado');
    }

       public function Edit(Role $role){
        $this->roleName = $role->name;
        $this->selected_id = $role->id;
        $this->emit('show-modal', 'show modal!'); 
    }

    public function UpdateRole(){
        $rules = [
            'roleName'=>"required|min:2|unique:roles,name,{$this->selected_id}"
        ];

        $messages = [
            'roleName.required' => 'El rol es requerido',
            'roleName.unique' => 'Ya existe el rol',
            'roleName.min' => 'El nombre del rol debe tener al menos 2 caracteres',
        ];
         $this->validate($rules, $messages);

        $role = Role::find($this->selected_id);
        $role ->name = $this->roleName;
        $role->save();

         $this->resetUI();
         $this->emit('role-update','rol Modificado');
    }

     protected $listeners=[
        'deleteRow' => 'Destroy'
    ];

     public function Destroy($id){
        $permissionCount = Role::find($id)->permissions->count();
        if ($permissionCount > 0) {
         $this->emit('role-error', 'No se puede eliminar el rol porque tiene permisos asociados');
         return;
        }
        Role::find($id)->delete();
         $this->emit('role-deleted', 'Rol Eliminado con exito');
    }

      public function resetUI(){
        $this->roleName='';
        $this->search='';
        $this->selected_id=0;
        $this->resetValidation();

    }


}
