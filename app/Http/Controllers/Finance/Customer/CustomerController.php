<?php

namespace App\Http\Controllers\Finance\Customer;

use App\Http\Controllers\Controller;
use App\Models\Finance\Customer;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customer = Customer::latest()->get();
        return view('finance/customer/customer', compact('customer'));
    }
}
