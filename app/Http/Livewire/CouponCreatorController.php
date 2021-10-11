<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CouponCreatorController extends Component
{
    public $titulo, $precioRegular, $PrecioOferta, $fechaInicio, $fechaFinal, $fechaLimiteCanje, $cantidadCupon, $otrosDetalles, $Descripcion, $tituloCupon;

  
    public function render()
    {

        $this->tituloCupon = $this->titulo;
        return view('livewire.coupon-creator.coupon-creator')->extends('layouts.theme.app')
        ->section('content');
    }

}
