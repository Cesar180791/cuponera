<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission; 
use Spatie\Permission\Models\Role;
use Livewire\withPagination;
use DB;

class AsignarController extends Component
{
     use withPagination;

     public $role, $componentName, $permisosSelected =[], $old_permisos=[];
     private $pagination = 10;

     public function paginationView(){
        return 'vendor.livewire.bootstrap';
    }

    public function mount(){
        $this->componentName = 'Asignar';
        $this->role = 'Seleccionar';
    }

    public function render()
    {
        $permisos = Permission::select('name', 'id', DB::raw("0 as checked"))
        ->orderBy('name' , 'asc')
        ->paginate($this->pagination);

        if ($this->role !='Seleccionar') {
            $list = Permission::join('role_has_permissions as rp','rp.permission_id','permissions.id')
            ->where('role_id',$this->role)->pluck('permissions.id')->toArray();
            $this->old_permisos = $list;
        }


        if ($this->role != 'Seleccionar') {
            foreach($permisos as $permiso){
                $role = Role::find($this->role);
                $tienePermiso = $role->hasPermissionTo($permiso->name);
                if ($tienePermiso) {
                    $permiso->checked = 1;
                }
            }
        }
        return view('livewire.asignar.asignar', [
            'roles'=>Role::orderBy('name' , 'asc')->get(),
            'permisos'=>$permisos
        ])->extends('layouts.theme.app')->section('content');
    }

    public $listeners=[
        'revokeall' => 'RemoveAll'
    ];

    public function RemoveAll(){
        if ($this->role == 'Seleccionar') {
            $this->emit('sync-error', 'Seleeciona un rol valido');
            return;
        }
        $role = Role::find($this->role);
        $role->syncPermissions([0]);
        $this->emit('remove-all', "Se Revocaron todos los permisos al rol $role->name");
    }

    public function SyncAll(){
        if ($this->role == 'Seleccionar') {
            $this->emit('sync-error', 'Seleciona un rol valido');
            return;
        }

        $role = Role::find($this->role);
        $permisos = Permission::pluck('id')->toArray();
        $role->syncPermissions($permisos);
        $this->emit('sync-all', "Se Sincronizaron todos los permisos al rol $role->name");

    }

    public function SyncPermiso($state, $permisoName){
        if ($this->role != 'Seleccionar') {
          $roleName = Role::find($this->role);
          if ($state) {
              $roleName->givePermissionTo($permisoName);
               $this->emit('permi', "Se Sincronizaron el  permisos al correctamente");
          } else {
             $roleName->revokePermissionTo($permisoName);
             $this->emit('permi', "Permiso eliminado correctamente");
          }
        } else {
             $this->emit('sync-error', "Elige un rol Valido");
        }
    }
}
