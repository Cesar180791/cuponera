<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ViewCouponCompanyController extends Component
{
    public function render()
    {
        return view('livewire.view-coupon-company.view-coupon-company')->extends('layouts.theme.app')->section('content');
    }
}
