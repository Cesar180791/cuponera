<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Livewire\withPagination;
use App\Models\User;
use DB;

class PermisosController extends Component
{
    use withPagination;

    public $permissionName, $search, $selected_id, $pageTitle, $componentName;
    private $pagination = 10;

    public function mount(){
        $this->pageTitle = 'Listado';
        $this->componentName = 'Permisos';
    }
     public function paginationView(){
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
         if(strlen($this->search) > 0)
            $permisos = Permission::where('name', 'like', '%'.$this->search.'%')->paginate($this->pagination);
        else 
            $permisos = Permission::orderBy('id','asc')->paginate($this->pagination);

        return view('livewire.permisos.permisos', ['permisos' => $permisos])
        ->extends('layouts.theme.app')
        ->section('content');
    }

      public function CreatePermission(){
        $rules = [
            'permissionName'=>'required|min:2|unique:permissions,name'
        ];

        $messages = [
            'permissionName.required' => 'El Permiso es requerido',
            'permissionName.unique' => 'Ya existe el Permiso',
            'permissionName.min' => 'El nombre del Permiso debe tener al menos 2 caracteres',
        ];

        $this->validate($rules, $messages);

        Permission::create([
            'name'=> $this->permissionName
        ]);

        $this->resetUI();
        $this->emit('permission-added','Permiso registrado');
    }

       public function Edit(Permission $permission){
        $this->permissionName = $permission->name;
        $this->selected_id = $permission->id;
        $this->emit('show-modal', 'show modal!'); 
    }

    public function UpdatePermission(){
        $rules = [
            'permissionName'=>"required|min:2|unique:permissions,name,{$this->selected_id}"
        ];

        $messages = [
            'permissionName.required' => 'El permiso es requerido',
            'permissionName.unique' => 'Ya existe el permiso',
            'permissionName.min' => 'El nombre del Permiso debe tener al menos 2 caracteres',
        ];
         $this->validate($rules, $messages);

        $permission = Permission::find($this->selected_id);
        $permission ->name = $this->permissionName;
        $permission->save();

         $this->resetUI();
         $this->emit('permission-update','rol Modificado');
    }

     protected $listeners=[
        'deleteRow' => 'Destroy'
    ];

     public function Destroy($id){
        $rolesCount = Permission::find($id)->getRoleNames()->count();
        if ($rolesCount > 0) {
         $this->emit('permission-error', 'No se puede eliminar el Permiso porque tiene roles asociados');
         return;
        }
        Permission::find($id)->delete();
         $this->emit('permission-deleted', 'permiso deleted');
    }

      public function resetUI(){
        $this->permissionName='';
        $this->search='';
        $this->selected_id=0;
        $this->resetValidation();

    }


}
