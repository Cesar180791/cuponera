<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Heading;
use Livewire\withPagination; //trait paginacion

class HeadingController extends Component
{
    use withPagination;
    public $name, $description, $search, $selected_id, $pageTitle, $componentName;
    private $pagination= 5;
  


    public function mount(){
        $this->pageTitle = 'Listado';
        $this->componentName = 'Rubros';
    }
     public function paginationView(){
        return 'vendor.livewire.bootstrap';
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
         if(strlen($this->search) > 0)
            $data = Heading::where('name', 'like', '%'.$this->search.'%')->paginate($this->pagination);
        else 
            $data = Heading::orderBy('id','desc')->paginate($this->pagination);


        return view('livewire.heading.headings', ['headings'=>$data])->extends('layouts.theme.app')
        ->section('content');
    }

        public function Store(){
        $rules = [
            'name'=>'required|unique:headings|min:3',
            'description'=>'required|min:10'
        ];

        $messages = [
            'name.required' => 'Nombre del rubro es requerido',
            'name.unique' => 'Ya existe el nombre del rubro',
            'name.min' => 'El nombre del rubro debe tener al menos 3 caracteres',
            'description.required' => 'La descripción del rubro es requerida',
            'description.min' => 'La descripción del rubro debe tener al menos 10 caracteres'
        ];

        $this->validate($rules, $messages);

        $heading = Heading::create([
            'name'=> $this->name,
            'description' => $this->description
        ]);

        $this->resetUI();
        $this->emit('heading-added','Rubro registrado');
    }



     public function Edit(Heading $heading){
        $this->name = $heading->name;
        $this->description = $heading->description;
        $this->selected_id = $heading->id;
        $this->emit('show-modal', 'show modal!'); 
    }

     public function Update(){
        $rules =[
            'name'=>"required|min:3|unique:headings,name,{$this->selected_id}",
            'description'=>'|required|min:10',
        ];

        $messages=[
           'name.required' => 'Nombre del rubro es requerido',
           'name.unique' => 'Ya existe el nombre del rubro',
           'name.min' => 'El nombre del rubro debe tener al menos 3 caracteres',
           'description.required' => 'La descripción del rubro es requerida',
           'description.min' => 'La descripción del rubro debe tener al menos 10 caracteres'
        ];
         $this->validate($rules, $messages);

         $heading = Heading::find($this->selected_id);
         $heading ->update([
            'name' => $this->name,
            'description' => $this->description,
         ]);

         $this->resetUI();
         $this->emit('heading-update','rubro Modificado');
    }

     protected $listeners=[
        'deleteRow' => 'Destroy'
    ];

    public function Destroy(Heading $heading){
        $heading->delete();
         $this->resetUI();
         $this->emit('heding-delete','rubro Eliminado');
    }

     public function resetUI(){
        $this->name='';
        $this->description='';
        $this->search='';
        $this->selected_id=0;
    }

}
