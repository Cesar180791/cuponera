<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\company;
use Illuminate\Support\Facades\Storage; //facade para manipular imagenes en laravel
use Livewire\WithFileUploads; // trait para subir imagenes

class CouponCreatorController extends Component
{
    use WithFileUploads;

    public $titulo, $precioRegular, $PrecioOferta, $fechaInicio, $fechaFinal, $fechaLimiteCanje, $cantidadCupon, $otrosDetalles, $descripcion, $image;

  
    public function render()
    {
        $empresa = company::find(auth()->user()->company_id);

        return view('livewire.coupon-creator.coupon-creator',[
            'empresa'=>$empresa
        ])->extends('layouts.theme.app')
        ->section('content');
    }


    public function Store(){
         $rules=[
        'titulo'=>'required|min:3',
        'precioRegular' => 'required',
        'PrecioOferta' => 'required',
        'fechaInicio' => 'required',
        'fechaFinal' => 'required|after_or_equal:fechaInicio',
        'fechaLimiteCanje' => 'required|date|after_or_equal:fechaInicio',
        'descripcion'=>'required|min:10'
      

    ];

    $messages =[
        'titulo.required' =>'El titulo del cupon es requerido',
        'titulo.min'=>'El titulo del cupon debe tener al menos tres caracteres',
        'precioRegular.required'=>'El precio regular del ticket es requerido',
        'PrecioOferta.required'=>'El precio promocion del ticket es requerido',
        'fechaInicio.required'=>'Defina una fecha de inicio',
        'fechaFinal.required'=>'Defina fecha final de venta',
        'fechaFinal.after_or_equal'=>'La fecha final no debe ser menor a la fecha inicial',
        'fechaLimiteCanje.required'=>'Defina la fecha limite de canje',
        'fechaLimiteCanje.after_or_equal'=>'La fecha limite de canje no puede ser menor a la fecha inicial',
        'descripcion.required'=>'La descripcion es requerida',
        'descripcion.min'=>'la descripcion debe tener al menos 10 caracteres',
    ];

    $this->validate($rules, $messages);

    $ticket = Ticket::create([
        'name' => $this->titulo,
        'price' => $this->precioRegular,
        'promotion'=>$this->PrecioOferta,
        'beging' => $this->fechaInicio,
        'ending' => $this->fechaFinal,
        'limit' => $this->fechaLimiteCanje,
        'quantity' => $this->cantidadCupon,
        'description' => $this->descripcion,
        'statusTicket'=> 'En Espera de Aprobacion',
        'details'=> $this->otrosDetalles,
        'company_id' => auth()->user()->company_id 
    ]);

        if($this->image){
            $customFileName = uniqid().'_.'.$this->image->extension();
            $this->image->storeAs('public/cupon/', $customFileName);
            $imageName = $ticket->image;

            $ticket->image = $customFileName;
            $ticket->save();

            if ($imageName !=null) {
                if (file_exists('storage/cupon/'.$imageName)) {
                    unlink('storage/cupon/'. $imageName);
                }
            }
         }

    $this->resetUI();
    $this->emit('ticket-add','Ticket Creado con exito en espera de Aprobacion');
    
} 



public function resetUI(){
    $this->titulo=""; 
    $this->precioRegular=""; 
    $this->PrecioOferta=""; 
    $this->fechaInicio="";
    $this->fechaFinal="";
    $this->fechaLimiteCanje=""; 
    $this->cantidadCupon=0; 
    $this->otrosDetalles=""; 
    $this->descripcion="";
    $this->image="";

}

}
